<?php
/**
 * WooCommerce HPOS orders sync module.
 *
 * @package automattic/jetpack-sync
 */

namespace Automattic\Jetpack\Sync\Modules;

use Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStore;

/**
 * Adds WooCommerce HPOS specific data to sync when HPOS is enabled on the site.
 */
class WooCommerce_HPOS_Orders extends Module {

	/**
	 * The slug of WooCommerce Subscriptions plugin.
	 */
	const WOOCOMMERCE_SUBSCRIPTIONS_PATH = 'woocommerce-subscriptions/woocommerce-subscriptions.php';

	/**
	 * Order table name. There are four order tables (order, addresses, operational_data and meta), but for sync purposes we only care about the main table since it has the order ID.
	 *
	 * @access private
	 *
	 * @var string
	 */
	private $order_table_name;

	/**
	 * Sync module name.
	 *
	 * @access public
	 *
	 * @return string
	 */
	public function name() {
		return 'woocommerce_hpos_orders';
	}

	/**
	 * Get the order table name.
	 *
	 * @access public
	 *
	 * @return string
	 * @deprecated since 3.11.0 Use table() instead.
	 */
	public function table_name() {
		_deprecated_function( __METHOD__, '3.11.0', 'Automattic\\Jetpack\\Sync\\WooCommerce_HPOS_Orders->table' );
		return $this->order_table_name;
	}

	/**
	 * The table in the database with the prefix.
	 *
	 * @access public
	 *
	 * @return string|bool
	 */
	public function table() {
		return $this->order_table_name;
	}

	/**
	 * Initialize order table data store, returns if the class don't exist (pre WC 6.x)
	 *
	 * @access public
	 */
	public function __construct() {
		if ( ! class_exists( OrdersTableDataStore::class ) ) {
			return;
		}
		$this->order_table_name = OrdersTableDataStore::get_orders_table_name();
	}

	/**
	 * Get order types that we want to sync. Adding a new type here is not enough, we would also need to add its prop in filter_order_data method.
	 *
	 * @param bool $prefixed Whether to return prefixed types with shop_ or not.
	 *
	 * @return array Order types to sync.
	 */
	public static function get_order_types_to_sync( $prefixed = false ) {
		$types = array( 'order', 'order_refund' );

		// Ensure this is available.
		if ( ! function_exists( 'is_plugin_active' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		if ( is_plugin_active( self::WOOCOMMERCE_SUBSCRIPTIONS_PATH ) ) {
			$types[] = 'subscription';
		}

		if ( $prefixed ) {
			$types = array_map(
				function ( $type ) {
					return "shop_{$type}";
				},
				$types
			);
		}
		return $types;
	}

	/**
	 * Hooks sync listners on order modify events.
	 *
	 * @access public
	 *
	 * @param callable $callable Action handler callable.
	 */
	public function init_listeners( $callable ) {
		foreach ( self::get_order_types_to_sync() as $type ) {
			add_action( "woocommerce_after_{$type}_object_save", $callable );
			add_filter( "jetpack_sync_before_enqueue_woocommerce_after_{$type}_object_save", array( $this, 'expand_order_object' ) );
		}
		add_action( 'woocommerce_delete_order', $callable );
		add_action( 'woocommerce_delete_subscription', $callable );
		add_filter( 'jetpack_sync_before_enqueue_woocommerce_delete_order', array( $this, 'on_before_enqueue_order_trash_delete' ) );
		add_filter( 'jetpack_sync_before_enqueue_woocommerce_delete_subscription', array( $this, 'on_before_enqueue_order_trash_delete' ) );
		add_action( 'woocommerce_trash_order', $callable );
		add_action( 'woocommerce_trash_subscription', $callable );
		add_filter( 'jetpack_sync_before_enqueue_woocommerce_trash_order', array( $this, 'on_before_enqueue_order_trash_delete' ) );
		add_filter( 'jetpack_sync_before_enqueue_woocommerce_trash_subscription', array( $this, 'on_before_enqueue_order_trash_delete' ) );
	}

	/**
	 * Hooks the full sync listeners.
	 *
	 * @access public
	 *
	 * @param callable $callable Action handler callable.
	 */
	public function init_full_sync_listeners( $callable ) {
		add_action( 'jetpack_full_sync_orders', $callable );
	}

	/**
	 * Initialize the module in the sender.
	 *
	 * @access public
	 */
	public function init_before_send() {
		// Full sync.
		add_filter( 'jetpack_sync_before_send_jetpack_full_sync_woocommerce_hpos_orders', array( $this, 'build_full_sync_action_array' ) );
	}

	/**
	 * Returns the ID field from wc_orders table.
	 *
	 * @access public
	 *
	 * @return string
	 */
	public function id_field() {
		return 'id';
	}

	/**
	 * Retrieve the actions that will be sent for this module during a full sync.
	 *
	 * @access public
	 *
	 * @return array Full sync actions of this module.
	 */
	public function get_full_sync_actions() {
		return array( 'jetpack_full_sync_orders' );
	}

	/**
	 * Retrieve order data by its ID.
	 *
	 * @access public
	 *
	 * @param string $object_type Type of object to retrieve. Should be `order`.
	 * @param int    $id          Order ID.
	 *
	 * @return array
	 */
	public function get_object_by_id( $object_type, $id ) {
		if ( 'order' !== $object_type ) {
			return $id;
		}
		$order_objects = $this->get_objects_by_id( $object_type, array( $id ) );
		return isset( $order_objects[ $id ] ) ? $order_objects[ $id ] : false;
	}

	/**
	 * Retrieves multiple orders data by their ID. Sorted by ID in descending order.
	 *
	 * @access public
	 *
	 * @param string $object_type Type of object to retrieve. Should be `order`.
	 * @param array  $ids         List of order IDs.
	 *
	 * @return array
	 */
	public function get_objects_by_id( $object_type, $ids ) {
		if ( 'order' !== $object_type || empty( $ids ) || ! is_array( $ids ) ) {
			return array();
		}

		$orders = wc_get_orders(
			array(
				'post__in'    => $ids,
				'type'        => self::get_order_types_to_sync( true ),
				'post_status' => self::get_all_possible_order_status_keys(),
				'limit'       => -1,
				'orderby'     => 'ID',
				'order'       => 'DESC',
			)
		);

		$orders_data = array();
		foreach ( $orders as $order ) {
			$orders_data[ $order->get_id() ] = $this->filter_order_data( $order );
		}

		return $orders_data;
	}

	/**
	 * Retrieves multiple orders data by their ID.
	 *
	 * @access public
	 *
	 * @param array $args List of order IDs.
	 *
	 * @return array
	 * @deprecated since 4.7.0
	 */
	public function expand_order_objects( $args ) {
		_deprecated_function( __METHOD__, '4.7.0' );
		list( $order_ids, $previous_end ) = $args;
		return array(
			'orders'       => $this->get_objects_by_id( 'order', $order_ids ),
			'previous_end' => $previous_end,
		);
	}

	/**
	 * Build the full sync action object.
	 *
	 * @access public
	 *
	 * @param array $args An array with filtered objects and previous end.
	 *
	 * @return array An array with orders and previous end.
	 */
	public function build_full_sync_action_array( $args ) {
		list( $filtered_orders, $previous_end ) = $args;
		return array(
			'orders'       => $filtered_orders['objects'],
			'previous_end' => $previous_end,
		);
	}

	/**
	 * Retrieve order data by its ID.
	 *
	 * @access public
	 *
	 * @param array $args Order ID.
	 *
	 * @return array
	 */
	public function expand_order_object( $args ) {
		if ( ! is_array( $args ) || ! isset( $args[0] ) ) {
			return false;
		}
		$order_object = $args[0];

		if ( is_int( $order_object ) ) {
			$order_object = wc_get_order( $order_object );
		}

		if ( ! $order_object instanceof \WC_Abstract_Order ) {
			return false;
		}

		return $this->filter_order_data( $order_object );
	}

	/**
	 * Convert order ID to array.
	 *
	 * @access public
	 *
	 * @param array $args Order ID.
	 *
	 * @return array
	 */
	public function on_before_enqueue_order_trash_delete( $args ) {
		if ( ! is_array( $args ) || ! isset( $args[0] ) ) {
			return false;
		}
		$order_id = $args[0];

		if ( ! is_int( $order_id ) ) {
			return false;
		}

		return array( 'id' => $order_id );
	}

	/**
	 * Filters only allowed keys from order data. No PII etc information is allowed to be synced.
	 *
	 * @access private
	 *
	 * @param \WC_Abstract_Order $order_object Order object.
	 *
	 * @return array Filtered order data.
	 */
	private function filter_order_data( $order_object ) {
		// Filter with allowlist.
		$allowed_data_keys   = WooCommerce::$wc_post_meta_whitelist;
		$core_table_keys     = array(
			'id',
			'status',
			'date_created',
			'date_modified',
			'parent_id',
		);
		$allowed_data_keys   = array_merge( $allowed_data_keys, $core_table_keys );
		$filtered_order_data = array( 'type' => $order_object->get_type() );
		$order_data          = $order_object->get_data();
		foreach ( $allowed_data_keys as $key ) {
			$key       = trim( $key, '_' );
			$key_parts = explode( '_', $key );

			if ( in_array( $key_parts[0], array( 'order', 'refund' ), true ) ) {
				if ( isset( $order_data[ $key_parts[1] ] ) && ! is_array( $order_data[ $key_parts[1] ] ) ) {
					$filtered_order_data[ $key ] = $order_data[ $key_parts[1] ];
					continue;
				}
			}

			if ( in_array( $key_parts[0], array( 'billing', 'shipping' ), true ) && 2 === count( $key_parts ) ) {
				if ( isset( $order_data[ $key_parts[0] ][ $key_parts[1] ] ) ) {
					$filtered_order_data[ $key ] = $order_data[ $key_parts[0] ][ $key_parts[1] ];
					continue;
				}
			}

			/**
			 * We need to convert the WC_DateTime objects to stdClass objects to ensure they are properly encoded.
			 *
			 * @see Automattic\Jetpack\Sync\Functions::json_wrap as the return value of get_object_vars can vary depending on PHP version.
			 */
			if ( in_array( $key, array( 'date_created', 'date_modified', 'date_paid', 'date_completed' ), true ) && isset( $order_data[ $key ] ) ) {
				if ( is_a( $order_data[ $key ], 'WC_DateTime' ) ) {
					$filtered_order_data[ $key ] = (object) (array) $order_data[ $key ];
					continue;
				}
			}

			if ( isset( $order_data[ $key ] ) ) {
				$filtered_order_data[ $key ] = $order_data[ $key ];
				continue;
			}

			switch ( $key ) {
				case 'cart_discount':
					$filtered_order_data[ $key ] = isset( $order_data['discount_total'] ) ? $order_data['discount_total'] : '';
					break;
				case 'cart_discount_tax':
					$filtered_order_data[ $key ] = isset( $order_data['discount_tax'] ) ? $order_data['discount_tax'] : '';
					break;
				case 'order_shipping':
					$filtered_order_data[ $key ] = isset( $order_data['shipping_total'] ) ? $order_data['shipping_total'] : '';
					break;
				case 'order_shipping_tax':
					$filtered_order_data[ $key ] = isset( $order_data['shipping_tax'] ) ? $order_data['shipping_tax'] : '';
					break;
				case 'order_tax':
					$filtered_order_data[ $key ] = isset( $order_data['cart_tax'] ) ? $order_data['cart_tax'] : '';
					break;
				case 'order_total':
					$filtered_order_data[ $key ] = isset( $order_data['total'] ) ? $order_data['total'] : '';
					break;
			}
		}
		if ( '' === $filtered_order_data['status'] ) {
			$filtered_order_data['status'] = 'pending';
		}
		$filtered_order_data['status'] = self::get_wc_order_status_with_prefix( $filtered_order_data['status'] );

		/**
		 * Filter the order data before syncing.
		 *
		 * @since 3.7.0
		 *
		 * @param array              $filtered_order_data The Filtered order data.
		 * @param \WC_Abstract_Order $order_object        The Order object.
		 */
		return apply_filters( 'jetpack_sync_filtered_hpos_order_data', $filtered_order_data, $order_object );
	}

	/**
	 * Returns all possible order status keys, including 'auto-draft' and 'trash'.
	 *
	 * @access public
	 *
	 * @return array An array of all possible status keys, including 'auto-draft' and 'trash'.
	 */
	public static function get_all_possible_order_status_keys() {
		$order_statuses    = array( 'auto-draft', 'trash' );
		$wc_order_statuses = self::wc_get_order_status_keys();

		return array_unique( array_merge( $wc_order_statuses, $order_statuses ) );
	}

	/**
	 * Add the 'wc-' order status to WC related order statuses.
	 *
	 * @param string $status The WC order status without the 'wc-' prefix.
	 *
	 * @return string The WC order status with the 'wc-' prefix if it's a valid order status, initial $status otherwise.
	 */
	protected static function get_wc_order_status_with_prefix( string $status ) {
		return in_array( 'wc-' . $status, self::wc_get_order_status_keys(), true ) ? 'wc-' . $status : $status;
	}

	/**
	 * Returns order status keys using 'wc_get_order_statuses', if possible.
	 *
	 * @see wc_get_order_statuses
	 *
	 * @return array Filtered order metadata.
	 */
	private static function wc_get_order_status_keys() {
		$wc_order_statuses = array();
		if ( function_exists( 'wc_get_order_statuses' ) ) {
			$wc_order_statuses   = array_keys( wc_get_order_statuses() );
			$wc_order_statuses[] = 'wc-checkout-draft'; // Temp till Woo fixes a bug where this order status is missing.
		} else {
			$wc_order_statuses = array(
				'wc-pending',
				'wc-processing',
				'wc-on-hold',
				'wc-completed',
				'wc-cancelled',
				'wc-refunded',
				'wc-failed',
				'wc-checkout-draft',
			);
		}

		if ( function_exists( 'wcs_get_subscription_statuses' ) ) {
			// @phan-suppress-next-line PhanUndeclaredFunction -- Checked above. See also https://github.com/phan/phan/issues/1204.
			$wc_subscription_statuses = array_keys( wcs_get_subscription_statuses() );
			$wc_order_statuses        = array_merge( $wc_order_statuses, $wc_subscription_statuses );
		}

		return array_unique( $wc_order_statuses );
	}

	/**
	 * Returns metadata for order object.
	 *
	 * @access protected
	 *
	 * @param array  $ids List of order IDs.
	 * @param string $meta_type Meta type.
	 * @param array  $meta_key_whitelist List of allowed meta keys.
	 *
	 * @return array Filtered order metadata.
	 */
	protected function get_metadata( $ids, $meta_type, $meta_key_whitelist ) { // phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable -- returning empty meta is intentional.
		return array(); // don't sync metadata, all allow-listed core data is available in the order object.
	}

	/**
	 * Retrieve an estimated number of actions that will be enqueued.
	 *
	 * @access public
	 *
	 * @param array $config Full sync configuration for this sync module.
	 * @return array Number of items yet to be enqueued.
	 */
	public function estimate_full_sync_actions( $config ) { // phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable -- We return all order count for full sync, so confit is not required.
		global $wpdb;

		$query = "SELECT count(*) FROM {$this->table()} WHERE {$this->get_where_sql( $config ) }";
		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching -- Hardcoded query, no user variable
		$count = (int) $wpdb->get_var( $query );

		return (int) ceil( $count / self::ARRAY_CHUNK_SIZE );
	}

	/**
	 * Enqueue the WooCommerce HPOS orders actions for full sync.
	 *
	 * @access public
	 *
	 * @param array   $config               Full sync configuration for this sync module.
	 * @param int     $max_items_to_enqueue Maximum number of items to enqueue.
	 * @param boolean $state                True if full sync has finished enqueueing this module, false otherwise.
	 * @return array Number of actions enqueued, and next module state.
	 */
	public function enqueue_full_sync_actions( $config, $max_items_to_enqueue, $state ) {
		return $this->enqueue_all_ids_as_action( 'full_sync_orders', $this->table(), 'id', $this->get_where_sql( $config ), $max_items_to_enqueue, $state );
	}

	/**
	 * Get where SQL for full sync.
	 *
	 * @access public
	 *
	 * @param array $config Full sync configuration for this sync module.
	 *
	 * @return string WHERE SQL clause, or `null` if no comments are specified in the module config.
	 */
	public function get_where_sql( $config ) {
		global $wpdb;
		$parent_where           = parent::get_where_sql( $config );
		$order_types            = self::get_order_types_to_sync( true );
		$order_type_placeholder = implode( ', ', array_fill( 0, count( $order_types ), '%s' ) );
		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared, WordPress.DB.PreparedSQLPlaceholders.UnfinishedPrepare -- Query is prepared.
		$where_sql = $wpdb->prepare( "type IN ( $order_type_placeholder )", $order_types );
		return "{$parent_where} AND {$where_sql}";
	}

	/**
	 * Given the Module Configuration and Status return the next chunk of items to send.
	 * This function also expands the posts and metadata and filters them based on the maximum size constraints.
	 *
	 * @param array $config This module Full Sync configuration.
	 * @param array $status This module Full Sync status.
	 * @param int   $chunk_size Chunk size.
	 *
	 * @return array
	 */
	public function get_next_chunk( $config, $status, $chunk_size ) {

		$order_ids = parent::get_next_chunk( $config, $status, $chunk_size );

		if ( empty( $order_ids ) ) {
			return array();
		}

		$orders = $this->get_objects_by_id( 'order', $order_ids );

		// If no orders were fetched, make sure to return the expected structure so that status is updated correctly.
		if ( empty( $orders ) ) {
			return array(
				'object_ids' => $order_ids,
				'objects'    => array(),
			);
		}

		// Filter the orders based on the maximum size constraints. We don't need to filter metadata here since we don't sync it for hpos.
		list( $filtered_order_ids, $filtered_orders, ) = $this->filter_objects_and_metadata_by_size(
			'order',
			$orders,
			array(),
			0,
			self::MAX_SIZE_FULL_SYNC
		);

		return array(
			'object_ids' => $filtered_order_ids,
			'objects'    => $filtered_orders,
		);
	}
}
