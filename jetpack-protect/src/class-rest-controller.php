<?php
/**
 * Class file for managing REST API endpoints for Jetpack Protect.
 *
 * @since 1.2.2
 *
 * @package automattic/jetpack-protect-plugin
 */

namespace Automattic\Jetpack\Protect;

use Automattic\Jetpack\Account_Protection\Account_Protection;
use Automattic\Jetpack\Account_Protection\Settings as Account_Protection_Settings;
use Automattic\Jetpack\Connection\Rest_Authentication as Connection_Rest_Authentication;
use Automattic\Jetpack\IP\Utils as IP_Utils;
use Automattic\Jetpack\Protect_Status\REST_Controller as Protect_Status_REST_Controller;
use Automattic\Jetpack\Waf\Waf_Runner;
use Automattic\Jetpack\Waf\Waf_Stats;
use Jetpack_Protect;
use WP_Error;
use WP_REST_Request;
use WP_REST_Response;

/**
 * Class REST_Controller
 */
class REST_Controller {

	/**
	 * Initialize the plugin's REST API.
	 *
	 * @return void
	 */
	public static function init() {
		// Set up the REST authentication hooks.
		Connection_Rest_Authentication::init();

		// Add custom WP REST API endoints.
		add_action( 'rest_api_init', array( __CLASS__, 'register_rest_endpoints' ) );
	}

	/**
	 * Register the REST API routes.
	 *
	 * @return void
	 */
	public static function register_rest_endpoints() {
		Protect_Status_REST_Controller::register_rest_endpoints();

		register_rest_route(
			'jetpack-protect/v1',
			'ignore-threat',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_ignore_threat',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'unignore-threat',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_unignore_threat',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'fix-threats',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_fix_threats',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'fix-threats-status',
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => __CLASS__ . '::api_fix_threats_status',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'check-credentials',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_check_credentials',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'scan',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_scan',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'toggle-account-protection',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_toggle_account_protection',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'account-protection',
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => __CLASS__ . '::api_get_account_protection',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'toggle-waf',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_toggle_waf',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'waf',
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => __CLASS__ . '::api_get_waf',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'waf-upgrade-seen',
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => __CLASS__ . '::api_get_waf_upgrade_seen_status',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'waf-upgrade-seen',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_set_waf_upgrade_seen_status',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'onboarding-progress',
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => __CLASS__ . '::api_get_onboarding_progress',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'onboarding-progress',
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => __CLASS__ . '::api_complete_onboarding_steps',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);

		register_rest_route(
			'jetpack-protect/v1',
			'scan-history',
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => __CLASS__ . '::api_get_scan_history',
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);
	}

	/**
	 * Ignores a threat for the API endpoint
	 *
	 * @param WP_REST_Request $request The request object.
	 *
	 * @return WP_REST_Response
	 */
	public static function api_ignore_threat( $request ) {
		if ( ! $request['threat_id'] ) {
			return new WP_REST_Response( 'Missing threat ID.', 400 );
		}

		$threat_ignored = Threats::ignore_threat( $request['threat_id'] );

		if ( ! $threat_ignored ) {
			return new WP_REST_Response( 'An error occurred while attempting to ignore the threat.', 500 );
		}

		return new WP_REST_Response( 'Threat ignored.' );
	}

	/**
	 * Unignores a threat for the API endpoint
	 *
	 * @param WP_REST_Request $request The request object.
	 *
	 * @return WP_REST_Response
	 */
	public static function api_unignore_threat( $request ) {
		if ( ! $request['threat_id'] ) {
			return new WP_REST_Response( 'Missing threat ID.', 400 );
		}

		$threat_ignored = Threats::unignore_threat( $request['threat_id'] );

		if ( ! $threat_ignored ) {
			return new WP_REST_Response( 'An error occurred while attempting to unignore the threat.', 500 );
		}

		return new WP_REST_Response( 'Threat unignored.' );
	}

	/**
	 * Fixes threats for the API endpoint
	 *
	 * @param WP_REST_Request $request The request object.
	 *
	 * @return WP_REST_Response
	 */
	public static function api_fix_threats( $request ) {
		if ( empty( $request['threat_ids'] ) ) {
			return new WP_REST_Response( 'Missing threat IDs.', 400 );
		}

		$threats_fixed = Threats::fix_threats( $request['threat_ids'] );

		if ( ! $threats_fixed ) {
			return new WP_REST_Response( 'An error occurred while attempting to fix the threat.', 500 );
		}

		return new WP_REST_Response( $threats_fixed );
	}

	/**
	 * Fixes threats for the API endpoint
	 *
	 * @param WP_REST_Request $request The request object.
	 *
	 * @return WP_REST_Response
	 */
	public static function api_fix_threats_status( $request ) {
		if ( empty( $request['threat_ids'] ) ) {
			return new WP_REST_Response( 'Missing threat IDs.', 400 );
		}

		$threats_fixed = Threats::fix_threats_status( $request['threat_ids'] );

		if ( ! $threats_fixed ) {
			return new WP_REST_Response( 'An error occurred while attempting to get the fixer status of the threats.', 500 );
		}

		return new WP_REST_Response( $threats_fixed );
	}

	/**
	 * Checks if the site has credentials configured
	 *
	 * @return WP_REST_Response
	 */
	public static function api_check_credentials() {
		$credential_array = Credentials::get_credential_array();

		if ( ! isset( $credential_array ) ) {
			return new WP_REST_Response( 'An error occurred while attempting to fetch the credentials array', 500 );
		}

		return new WP_REST_Response( $credential_array );
	}

	/**
	 * Enqueues a scan for the API endpoint
	 *
	 * @return WP_REST_Response
	 */
	public static function api_scan() {
		$scan_enqueued = Threats::scan();

		if ( ! $scan_enqueued ) {
			return new WP_REST_Response( 'An error occurred while attempting to enqueue the scan.', 500 );
		}

		return new WP_REST_Response( 'Scan enqueued.' );
	}

	/**
	 * Toggles the Account Protection module on or off for the API endpoint
	 *
	 * @return WP_REST_Response|WP_Error
	 */
	public static function api_toggle_account_protection() {
		$account_protection = Account_Protection::instance();
		if ( $account_protection->is_enabled() ) {
			$disabled = $account_protection->disable();
			if ( ! $disabled ) {
				return new WP_Error(
					'account_protection_disable_failed',
					__( 'An error occurred disabling account protection.', 'jetpack-protect' ),
					array( 'status' => 500 )
				);
			}

			return rest_ensure_response( true );
		}

		$enabled = $account_protection->enable();
		if ( ! $enabled ) {
			return new WP_Error(
				'account_protection_enable_failed',
				__( 'An error occurred enabling account protection.', 'jetpack-protect' ),
				array( 'status' => 500 )
			);
		}

		return rest_ensure_response( true );
	}

	/**
	 * Get Account Protection data for the API endpoint
	 *
	 * @return WP_Rest_Response
	 */
	public static function api_get_account_protection() {
		return new WP_REST_Response( ( new Account_Protection_Settings() )->get() );
	}

	/**
	 * Toggles the WAF module on or off for the API endpoint
	 *
	 * @return WP_REST_Response|WP_Error
	 */
	public static function api_toggle_waf() {
		if ( Waf_Runner::is_enabled() ) {
			$disabled = Waf_Runner::disable();
			if ( ! $disabled ) {
				return new WP_Error(
					'waf_disable_failed',
					__( 'An error occurred disabling the firewall.', 'jetpack-protect' ),
					array( 'status' => 500 )
				);
			}

			return rest_ensure_response( true );
		}

		$enabled = Waf_Runner::enable();
		if ( ! $enabled ) {
			return new WP_Error(
				'waf_enable_failed',
				__( 'An error occurred enabling the firewall.', 'jetpack-protect' ),
				array( 'status' => 500 )
			);
		}

		return rest_ensure_response( true );
	}

	/**
	 * Get WAF data for the API endpoint
	 *
	 * @return WP_Rest_Response
	 */
	public static function api_get_waf() {
		// Ensure plugin activation has been performed so WAF module is available.
		Jetpack_Protect::do_plugin_activation_activities();

		return new WP_REST_Response(
			array(
				'wafSupported'        => Waf_Runner::is_supported_environment(),
				'currentIp'           => IP_Utils::get_ip(),
				'upgradeIsSeen'       => Jetpack_Protect::get_waf_upgrade_seen_status(),
				'displayUpgradeBadge' => Jetpack_Protect::get_waf_upgrade_badge_display_status(),
				'isEnabled'           => Waf_Runner::is_enabled(),
				'config'              => Waf_Runner::get_config(),
				'stats'               => Jetpack_Protect::get_waf_stats(),
				'globalStats'         => Waf_Stats::get_global_stats(),
			)
		);
	}

	/**
	 * Get WAF Upgrade "Seen" Status for the API endpoint
	 *
	 * @return bool Whether the current user has dismissed the upgrade popover or enabled the automatic rules feature.
	 */
	public static function api_get_waf_upgrade_seen_status() {
		return Jetpack_Protect::get_waf_upgrade_seen_status();
	}

	/**
	 * Set WAF Upgrade "Seen" Status for the API endpoint
	 *
	 * @return bool True if upgrade seen status updated to true, false on failure.
	 */
	public static function api_set_waf_upgrade_seen_status() {
		return Jetpack_Protect::set_waf_upgrade_seen_status();
	}

	/**
	 * Gets the current user's onboarding progress for the API endpoint
	 *
	 * @return WP_REST_Response
	 */
	public static function api_get_onboarding_progress() {
		$progress = Onboarding::get_current_user_progress();
		return rest_ensure_response( $progress );
	}

	/**
	 * Set an onboarding step as completed for the API endpoint
	 *
	 * @param WP_REST_Request $request The request object.
	 *
	 * @return WP_REST_Response
	 */
	public static function api_complete_onboarding_steps( $request ) {
		if ( empty( $request['step_ids'] ) || ! is_array( $request['step_ids'] ) ) {
			return new WP_REST_Response( 'Missing or invalid onboarding step IDs.', 400 );
		}

		$completed = Onboarding::complete_steps( $request['step_ids'] );

		if ( ! $completed ) {
			return new WP_REST_Response( 'An error occurred completing the onboarding step(s).', 500 );
		}

		return new WP_REST_Response( 'Onboarding step(s) completed.' );
	}

	/**
	 * Return Scan History for the API endpoint
	 *
	 * @return WP_REST_Response
	 */
	public static function api_get_scan_history() {
		$scan_history = Scan_History::get_scan_history( false );
		return rest_ensure_response( $scan_history );
	}
}
