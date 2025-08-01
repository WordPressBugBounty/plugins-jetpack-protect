# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [5.21.0] - 2025-07-30
### Removed
- Remove redundant sending on "nocache" headers on the My Jetpack admin screen, as these are already sent by WordPress. [#44322]

### Fixed
- My Jetpack: Restoring plan purchase link. [#44535]

## [5.20.2] - 2025-07-28
### Changed
- Update dependencies. [#44463]

### Fixed
- Fix footer alignment for diconnected accounts. [#44468]

## [5.20.1] - 2025-07-24
### Removed
- Admin: Remove references to deprecated feature.

## [5.20.0] - 2025-07-23
### Changed
- Connection: Removed hard-coded custom errors and added support for dynamic errors. [#44281]
- Replace static mobile app text with direct link to download page. [#44366]
- Update dependencies. [#44407]

### Removed
- Remove old onboarding global notice. [#44392]

## [5.19.0] - 2025-07-21
### Changed
- Enable My Jetpack access on WP Multisite. [#44260]
- Show warning for products and modules not available for multisite. [#44260]
- Update package dependencies. [#44356]

## [5.18.0] - 2025-07-14
### Added
- Add project-level `CLAUDE.md`. [#44191]

### Changed
- Fix some issues with site disconnections. [#44196]
- Update package dependencies. [#44219]

## [5.17.4] - 2025-07-08
### Changed
- Update package dependencies. [#44217]

## [5.17.3] - 2025-07-07
### Changed
- Update dependencies. [#38910]

## [5.17.2] - 2025-07-03
### Changed
- Update package dependencies. [#44151]

## [5.17.1] - 2025-07-01
### Added
- My Jetpack: Implemented analytics. [#44153]

### Fixed
- Products: Fix the alignment and responsiveness of product cards. [#44154]

## [5.17.0] - 2025-06-30
### Changed
- Stats: Update card to include a chart and better align with Jetpack Stats. [#43870]
- Onboarding: Improve product discovery. [#43870]
- Update package dependencies. [#43870]

## [5.16.8] - 2025-06-27
### Changed
- Internal updates.

## [5.16.7] - 2025-06-24
### Changed
- Update dependencies. [#38910]

## [5.16.6] - 2025-06-23
### Changed
- Update dependencies. [#38910]

## [5.16.5] - 2025-06-23
### Changed
- Update package dependencies. [#44020]

## [5.16.4] - 2025-06-18
### Fixed
- Use compact number notation in the Protect card. [#43977]

## [5.16.3] - 2025-06-16
### Changed
- Update package dependencies. [#43892] [#43951]

## [5.16.2] - 2025-06-10
### Changed
- Update dependencies. [#38910]

## [5.16.1] - 2025-06-06
### Changed
- Internal updates.

## [5.16.0] - 2025-06-05
### Added
- Connection: error handling for protected owner on WPcom. [#43593]

### Changed
- Connection: Display connection info on WoA sites. [#43777]
- Update package dependencies. [#43718] [#43734] [#43766]

## [5.15.0] - 2025-06-02
### Added
- My Jetpack: Add comprehensive analytics tracking for tab interactions including tab switching, page views with tab context, and help request tracking. [#43592]

### Changed
- Onboarding: Improved the My Jetpack screen to make it more useful by splitting it into tabs. [#43592]
- Update package dependencies. [#43711] [#43712]

### Fixed
- Fix product dataview settings icon visibility on re-render. [#43722]
- Styling: Prevent styling from leaking outside of the onboarding screen. [#43526]

## [5.14.5] - 2025-05-26
### Changed
- Update package dependencies. [#43578]

### Fixed
- Hide Backup failure notice when backups are deactivated. [#43568]

## [5.14.4] - 2025-05-22
### Changed
- Updated the typography for onboarding slider text. [#43512]

### Fixed
- Add missing variables to Tanstack queryKey. [#43359]
- Fix Onboarding UI responsiveness at 600px. [#43533]

## [5.14.3] - 2025-05-19
### Changed
- Optimize images for onboarding slider. [#43473]
- Remove Zendesk chat script from DOM. [#42477]

## [5.14.2] - 2025-05-15
### Changed
- Update package dependencies. [#43398]

## [5.14.1] - 2025-05-15
### Fixed
- My Jetpack: Fix styles for notice in small screens. [#43459]

## [5.14.0] - 2025-05-12
### Changed
- Stable release management: Do not ship source files. [#43310]
- Update package dependencies. [#43400]
- Use functions from the `@automattic/number-formatters` package. [#42796]

## [5.13.1] - 2025-05-05
### Changed
- Change UI text. [#43339]
- Remove some unused code. [#43241] [#43242]
- Update package dependencies. [#43326] [#43355] [#43356]

### Fixed
- Linting: Address final rules in WordPress Stylelint config. [#43296]
- Linting: Do additional stylesheet cleanup. [#43247]
- Onboarding: Ensure that the CTA has a label when it's disabled. [#43305]

## [5.13.0] - 2025-04-28
### Added
- Onboarding: Add tracking back to onboarding UIs. [#43224]

### Changed
- Onboarding: Change the connection UI to a single button. [#43203]

### Fixed
- Fix TypeScript type checking and the corresponding errors. [#43205]
- Linting: Fix more Stylelint violations. [#43213]
- Onboarding: Avoid sending invalid email along with social login request. [#43158]

## [5.12.0] - 2025-04-14
### Added
- Add more error logging. [#42959]
- Add My Jetpack tour. [#42880]
- Connection: Add check for mismatched WordPress/WordPress.com user email. [#42674]

### Fixed
- Linting: Clean up various Stylelint violations. [#43010]
- Linting: Format SCSS imports consistently. [#43018]
- Linting: Update stylesheets to use WordPress rules for fonts and colors. [#42920] [#42928]
- Linting: Use double colon notation for pseudo-element selectors. [#43019]

## [5.11.2] - 2025-04-07
### Fixed
- Linting: Clean up style rule violations that made it in before requiring Stylelint. [#42944]

## [5.11.1] - 2025-04-07
### Changed
- Linting: First pass of style coding standards. [#42734]
- Improve Jetpack onboarding styles. [#42910]

## [5.11.0] - 2025-04-03
### Changed
- Replace generic testimonial CSS class to prevent collisions and set font-family. [#42793]
- Update package dependencies. [#42806] [#42809]

### Fixed
- Fix several copy issues on onboarding testimonials. [#42827]

## [5.10.1] - 2025-04-01
### Changed
- Update package dependencies. [#42762]

## [5.10.0] - 2025-03-31
### Added
- Add error handling to onboarding form. [#42753]
- Add an option for the new onboarding tour. [#42684]
- Add a Testimonials component to onboarding screen. [#42625]
- Show onboarding screen to disconnected that explains Jetpack. [#42757]

## [5.9.2] - 2025-03-26
### Added
- Add support for OAuth social login. [#42700]
- Connect the frontend of the magic link input with the backend (for use on new onboarding screen). [#42662]

### Changed
- Add Account Protection to Protect product details. [#40925]

## [5.9.1] - 2025-03-24
### Changed
- Update dependencies. [#38910]

## [5.9.0] - 2025-03-24
### Added
- Add an email input to the social login form, allowing users to log into Jetpack seamlessly through a magic link. [#42600]
- Add a new social login form to the onboarding screen for first-time Jetpack connections. [#42561]

## [5.8.0] - 2025-03-21
### Added
- Introduce a new onboarding screen to provide clear, step-by-step instructions for new users connecting to Jetpack. [#42523]

### Fixed
- Enable screen readers to read Boost score. [#42306]

## [5.7.3] - 2025-03-19
### Changed
- Update dependencies. [#38910]

## [5.7.2] - 2025-03-18
### Changed
- Update package dependencies. [#42509] [#42511]

### Fixed
- My Jetpack: Add legacy properties back to `get_info()` function. [#42542]
- Product Interstitial Modal: Fix not running custom onClick events if a customModalTrigger was used. [#42527]

## [5.7.1] - 2025-03-17
### Fixed
- Allow screen readers to read stats. [#42275]

## [5.7.0] - 2025-03-17
### Changed
- Call Protect and VideoPress product data on the frontend and remove from window state. [#42411]
- My Jetpack: Move Red Bubble notifications out of myJetpackInitialState. [#42271]
- UI: Upgrade CTAs on the Jetpack Boost admin now opens a modal instead of navigating to the upgrade page. [#42309]

### Fixed
- My Jetpack: Fix interstitial modal that was displaying the discounted price when user had already used up the discount. [#42349]

## [5.6.0] - 2025-03-12
### Added
- Add QueryProvider to ProductInterstitialModal for extendability. [#42307]
- Provide connection data to footer component. [#42000]
- Stats: Add highlights heading level as prop. [#42165]

### Changed
- Load agency data from frontend instead of backend. [#42330]

## [5.5.3] - 2025-03-10
### Changed
- Persist cookies for dismissable banners longer than session. [#42305]

## [5.5.2] - 2025-03-05
### Changed
- Remove purchases from window state and query entirely using state query on front end. [#42154]
- Update package dependencies. [#42162]

## [5.5.1] - 2025-03-03
### Added
- Update interstitial modal to accept custom trigger. [#41621]

### Changed
- Load product data requiring an http request async on the frontend. [#41965]
- Move the getting of product ownership data entirely to the frontend. [#42080]
- Move update to historically active modules to frontend. [#42133]
- Update package dependencies. [#42081] [#42163]

### Fixed
- Fix skip to main content feature [#42042]

## [5.5.0] - 2025-02-24
### Changed
- Allow users to manage user connection in My Jetpack. [#41398]
- Move backup endpoint to product class. [#41730]
- Update package dependencies. [#41955]

### Removed
- Script data: Remove unused property. [#41890]

### Fixed
- Code: Prevent dynamic class properties. [#41857]
- Fix My Jetpack display for non-admin users. [#41398]
- Improve accessibility for product card actions with ARIA labelling. [#41896]
- Increase product card status contrast ratio. [#41896]
- Move product card status before action for screen readers. [#41896]

## [5.4.5] - 2025-02-17
### Changed
- Social: Update manage module link to point to the new Social admin page. [#41741]

## [5.4.4] - 2025-02-12
### Changed
- Performance: Cache scan calls if no threats are found. [#41614]

## [5.4.3] - 2025-02-11
### Added
- My Jetpack: Allow product notices to be closed with persistence. [#41617]

### Changed
- Make entire row of dataview clickable when on mobile [#41643]

## [5.4.2] - 2025-02-10
### Added
- Add filter to unowned list of products. [#41312]
- Add mobile CTA to DataViews table. [#41554]

### Changed
- Cache calls to backup API in My Jetpack. [#41608]
- Update package dependencies. [#41491] [#41577]
- Update the unowned section from a product grid to a product list. [#41312]

### Fixed
- Fix bug where firewall was displayed as active if automatic rules were enabled but firewall was off. [#41560]

## [5.4.1] - 2025-02-03
### Added
- My Jetpack: Add red bubble and notice when pain plan is missing plugin. [#41013]

### Changed
- Make Action Button component more reusable. [#41361]
- Replace Jetpack AI upgrade page with a modal. [#41301]
- Update package dependencies. [#41286]
- Update My Jetpack interstitial modal with new styles and layout. [#41300]

### Fixed
- AI: Avoid using relative URLs in admin URLs to support sites where WordPress is installed in a subdirectory. [#41459]
- Code: Remove extra params on function calls. [#41263]
- My Jetpack: Fix secondary action of Protect card when plugin is not installed. [#41347]

## [5.4.0] - 2025-01-23
### Added
- Adding new modal based interstitial component. [#40945]

### Fixed
- Fix bug where My Jetpack would throw critical error if only a standalone plugin is not installed. [#41192]

## [5.3.3] - 2025-01-20
### Added
- Add caching for the red bubble alerts for My Jetpack. [#41131]
- Add option for devs to reset jetpack options from My Jetpack footer. [#40943]
- Add sandboxed tag to My Jetpack. [#40971]

### Changed
- Updated package dependencies. [#41099]

## [5.3.2] - 2025-01-14
### Fixed
- Fix bug where description doesn't show up on backup card in specific scenarios. [#40904]

## [5.3.1] - 2025-01-10
### Added
- Add new WAF status on Protect card for when WAF is unsupported. [#40880]

### Changed
- Show an upgrade CTA anytime a product has an available upgrade. [#40900]

## [5.3.0] - 2025-01-06
### Added
- My Jetpack: Added a new status for when Protect detects threats on the site. [#40628]
- My Jetpack: Adds a red bubble and notice when Protect threats are detected. [#40719]
- My Jetpack: introduce feature cards for recommendations in My Jetpack. [#40639]

### Changed
- Updated package dependencies. [#40705] [#40798] [#40810] [#40841]

### Fixed
- Tests: Fix failure on 31 December. [#40781]

## [5.2.0] - 2024-12-23
### Added
- My Jetpack: add features as possible modules to the recommendations list. [#40492]

### Changed
- My Jetpack: Add 'Needs attention' status to Backup product card when Backups are failing. [#40454]
- My Jetpack: Add red bubble and notice/banner when Backup has 'needs-attention' status. [#40512]
- My Jetpack: Plans section: Improvements to how we display plan expiration date. [#40575]
- My Jetpack: Protect card- Fixed Tooltip placement & content issues. [#40691]
- Unify connection flows in My Jetpack. [#40632]

### Fixed
- Fix an issue where high posts counts would cause backend issues for the get_raw_post_type_breakdown function used in My Jetpack. Sites with over 100,000 posts can now have this query managed remotely. [#40635]
- Fix issue where backup card was not updating after site connection in some situations. [#40653]

## [5.1.2] - 2024-12-16
### Added
- Add AI to Complete feature copy. [#40577]

### Changed
- Remove purchase related elements when Complete is on site. [#40554]
- Updated package dependencies. [#40564]

### Fixed
- Fixed lints following ESLint rule changes for TS. [#40584]
- My Jetpack: fix animation flick on connection screen in My Jetpack. [#40533]

## [5.1.1] - 2024-12-04
### Changed
- Updated package dependencies. [#40363]

## [5.1.0] - 2024-12-02
### Added
- Add animation during site connection. [#40343]
- Add "loading" animation to recommendations step. [#40405]

### Changed
- Fix usage of random() in animation to prevent build step from generating a different CSS file every time. [#40413]

### Removed
- Remove experiment code. [#40406]

### Fixed
- Fix My Jetpack recommendation card styling on mobile [#40370]

## [5.0.4] - 2024-11-28
### Added
- Added "Expired" & "Expires soon" statuses to My Jetpack product cards. [#39816]

### Changed
- Social | Changed My Jetpack CTA for Social from "Learn more" to "Activate" [#40359]

### Fixed
- Fix stats not showing sale discount [#40348]

## [5.0.3] - 2024-11-26
### Changed
- Update dependencies. [#38910]

## [5.0.2] - 2024-11-25
### Added
- Add bundles to recommendations and add interstitials for them [#40281]
- Add growth upsell to Stats and Social interstitials [#40236]

### Changed
- Notices: do not display the Jetpack Manage banners for accounts enrolled into our agency program. [#40251]
- Remove creator card and update paid plan checks to account for growth [#40192]
- Updated dependencies. [#40286]
- Updated feature for stats in growth to 10K instead of 100K [#40312]
- Updated package dependencies. [#40288]

## [5.0.1] - 2024-11-18
### Changed
- Update dependencies. [#38910]

## [5.0.0] - 2024-11-14
### Removed
- General: Update minimum PHP version to 7.2. [#40147]

## [4.37.0] - 2024-11-11
### Added
- My Jetpack: update the recommendations section in My Jetpack to include a slider interaction for the cards. [#39850]

### Changed
- Admin: Updating deprecation notices. [#39567]
- Updated package dependencies. [#39999] [#40000] [#40060]

## [4.36.0] - 2024-11-04
### Added
- Enable test coverage. [#39961]

### Changed
- My Jetpack: Add experiment to the post-connection flow in My Jetpack. [#39902]
- Skip pricing page when connecting via block editor. [#39865]

### Removed
- My Jetpack: Remove A/B test code in My Jetpack. [#39928]

## [4.35.16] - 2024-10-29
### Changed
- Components: Add __nextHasNoMarginBottom to BaseControl-based components, preventing deprecation notices. [#39877]

## [4.35.15] - 2024-10-17
### Fixed
- Fix the "Missing site connection" notice. [#39809]

## [4.35.14] - 2024-10-15
### Changed
- Update dependencies. [#38910]

## [4.35.13] - 2024-10-14
### Changed
- Only include `wp-polyfill` as a script dependency when needed. [#39629]

## [4.35.12] - 2024-10-10
### Changed
- Update Boost's pricing table to include latest feature list. [#39130]
- Updated package dependencies. [#39669] [#39707]

### Fixed
- Fixed My Jetpack recommendations VideoPress product card not showing Purchase and Learn more buttons. [#39612]

## [4.35.11] - 2024-10-07
### Changed
- Updated package dependencies. [#39594]

## [4.35.10] - 2024-10-02
### Changed
- Internal updates.

## [4.35.9] - 2024-09-30
### Changed
- Fix parameters to allow for connectAfterCheckout flow from recommendation card [#39578]
- My Jetpack Welcome Flow: Display default recommendations upfront first, then offer optional survey for customized recommendations. [#39485]

### Fixed
- Fixed a bug where the purchases and highlights APIs were being called without a valid Jetpack connection [#39522]
- My Jetpack: visual update to make the GlobalNotice component look better on mobile. [#39537]

## [4.35.8] - 2024-09-25
### Changed
- Update dependencies. [#38910]

## [4.35.7] - 2024-09-23
### Changed
- Get active element from tooltip button's document rather than the global `document`. [#39364]
- My Jetpack product interstitial: Don't show intro offer price if user is not eligible for the offer. [#39403]
- Send non-connected users to a "connect after checkout" flow [#39444]

### Fixed
- Fix issue on interstitials show both buttons loading when only one is pressed [#39356]
- Fix issue where recommendations are showing slightly before the welcome banner dismisses [#39383]

## [4.35.6] - 2024-09-16
### Added
- Add new action myjetpack_enqueue_scripts [#39380]

### Changed
- My Jetpack: Always show the purchase link regardless of the number of plans owned. [#39299]
- Updated package dependencies. [#39332]

## [4.35.5] - 2024-09-10
### Changed
- Updated package dependencies. [#39302]

## [4.35.4] - 2024-09-09
### Added
- Jetpack AI: add fair usage policy link to the Jetpack AI product interstitial. [#39281]

### Changed
- Updated package dependencies. [#39278]

### Fixed
- Jetpack AI: fix default_content filter so it doesn't enforce parameter type [#39276]

## [4.35.3] - 2024-09-06
### Fixed
- Optimize repeated requests for unavailable WPCOM. [#39218]

## [4.35.2] - 2024-09-06
### Changed
- Internal updates.

## [4.35.1] - 2024-09-05
### Changed
- Internal updates.

## [4.35.0] - 2024-09-05
### Added
- My Jetpack: add support for feature-specific handling to product interstitials. [#38661]

### Changed
- Jetpack AI product page: add fair usage link on over quota notice [#39192]
- Updated package dependencies. [#39176]

### Fixed
- Gracefully fail when user data fetch failed. [#39179]

## [4.34.0] - 2024-09-02
### Changed
- My Jetpack: show over quota notice and period usage counter for unlimited plans [#39129]
- We update Welcome Flow A/B experiment to test other things [#39154]

### Fixed
- My Jetpack: change Jetpack AI post checkout URL so the redirect works [#39166]

## [4.33.1] - 2024-08-29
### Changed
- Admin menu: change order of Jetpack sub-menu items [#39095]
- My Jetpack: reflect tier filters properly on product class and UI. Fix little nuances with date constructor [#39074]
- Updated package dependencies. [#39111]

### Fixed
- Don't consider user lifecycle status when repeating evaluation [#39069]
- My Jetpack: Fix the popover and active button of the Bboost card are overlapping [#39067]

## [4.33.0] - 2024-08-26
### Added
- Add context switching to videopress card from yearly views to monthly views [#38979]

### Changed
- My Jetpack: AI product class to handle better disabling tiers [#38989]
- Updated package dependencies. [#39004]

### Fixed
- allow user currency in My Jetpack pricing [#38977]
- Fix tooltip title for videopress card [#39030]

## [4.32.4] - 2024-08-21
### Changed
- Removed unnecessary WAF dependency in My Jetpack. [#38942]

### Fixed
- Notification bubbles: avoid PHP warning when information is missing. [#38963]
- Revert recent SVG image optimizations. [#38981]

## [4.32.3] - 2024-08-19
### Added
- Add stat trends for videopress card. [#38868]
- Add tooltip to VideoPress card. [#38842]
- Add value to active card state on VideoPress My Jetpack card. [#38812]

### Changed
- Updated package dependencies. [#38893]

### Fixed
- Lossless image optimization for images (should improve performance with no visible changes). [#38750]
- My Jetpack: ensure product screens redirect to the correct post-checkout URLs. [#38704]

## [4.32.2] - 2024-08-15
### Changed
- Updated package dependencies. [#38665]

### Fixed
- fix empty hrefs causing page reload [#38845]

## [4.32.1] - 2024-08-09
### Added
- Add value to the inactive state on the VideoPress card in My Jetpack [#38748]

### Changed
- Update uses of useConnection to useMyJetpackConnection and improve typing in a few places [#38721]

### Removed
- Tests: Removed react-test-renderer. [#38755]

### Fixed
- My Jetpack: fix a bug where a user would see and infinite loading spinner when trying to connect Jetpack with one click in the Welcome flow. [#38813]

## [4.32.0] - 2024-08-05
### Added
- Add Tracks events for Welcome Flow [#38641]

### Changed
- change Jetpack AI product page link redirect [#38691]
- copy updates [#38648]
- Modify the Google Analytics notice to notify of the feature removal. [#38701]

## [4.31.0] - 2024-08-01
### Added
- Update Welcome Banner and set async site-only connection [#38534]

### Changed
- Fixup versions [#38612]
- My Jetpack: modify Jetpack AI product class and interstitial links [#38602]
- React: Changing global JSX namespace to React.JSX [#38585]

## [4.30.0] - 2024-07-29
### Added
- Async card update after async site connection [#38549]
- My Jetpack: add A/A experiment to test for correct random assignment and prevent bias in metric performance. [#38327]
- Show View button on product card along with upgrade cta [#38550]

### Changed
- Final minor enhancements to the Protect product card in My Jetpack. [#38420]

### Removed
- Remove functionality that hid 1 value on the backup card for mid-sized screens [#38441]

### Fixed
- Include Jetpack Legacy plans when checking if user has social included with plan [#38516]
- Update all tracks to snake case, camel case is not supported [#38576]

## [4.29.0] - 2024-07-22
### Added
- Added the auto-firewall status to the Protect product  card in My Jetpack. [#38332]
- Added the number of logins blocked to the Protect card in My Jetpack. [#38396]

### Changed
- Connection Screen: Removed mention of Stats from the list of available free features. [#38328]
- Display My Jetpack products segemented by ownership. [#38283]
- My Jetpack: Updated social icons in the connection screen. [#38334]
- Updated statuses to make more sense in relation to ownership. [#38390]

## [4.28.0] - 2024-07-15
### Added
- Add scan/threat info to the Protect card in My Jetpack. [#38165]

### Changed
- Protect card: Add the Last scan time (with tooltip) based on product state. [#38091]
- Updated package dependencies. [#38091]

### Fixed
- Fix Learn More link destination when the site was never connected. [#38225]

## [4.27.2] - 2024-07-10
### Fixed
- Social: Fixed plan slug [#38222]

## [4.27.1] - 2024-07-03
### Changed
- Updated package dependencies. [#38132]

## [4.27.0] - 2024-07-01
### Added
- Add the Google Analytics deprecation notice. [#38078]

### Changed
- Reduce amount of historically active modules updates by only triggering on activation of plugin is a jetpack plugin [#38065]

### Fixed
- Fix an issue where the connection error hook was always resetting the notice [#38120]

## [4.26.0] - 2024-06-27
### Changed
- Jetpack AI: Add Title Optimization section on the product page. [#38072]

## [4.25.4] - 2024-06-26
### Fixed
- Move historically active modules sync to admin_init [#38041]

## [4.25.3] - 2024-06-24
### Added
- Add more default args for tracks events [#37974]

## [4.25.2] - 2024-06-21
### Fixed
- Remove the need for api requests in broken modules check [#37908]

## [4.25.1] - 2024-06-17
### Fixed
- Remove check for broken modules from red bubble connection check [#37911]

## [4.25.0] - 2024-06-17
### Changed
- Show tooltip on card hover instead of letter hover [#37858]
- Update connection footer to conditionally render warnings or errors [#37802]
- Update connection status card tests to TS [#37829]

## [4.24.7] - 2024-06-13
### Changed
- Updated package dependencies. [#37796]

## [4.24.6] - 2024-06-11
### Changed
- Conditionally show connection banner as error or info [#37707]
- Updated package dependencies. [#37779]

## [4.24.5] - 2024-06-10
### Changed
- Change codebase to use clsx instead of classnames. [#37708]

## [4.24.4] - 2024-06-10
### Added
- Add mechanism to track previously working plugins [#37537]

### Changed
- Move PRODUCT_STATUSES to constants file [#37748]
- Send user to siteless pricing page if site is not connected [#37667]

## [4.24.3] - 2024-06-05
### Changed
- Updated package dependencies. [#37669]

## [4.24.2] - 2024-06-03
### Changed
- Update ToS wording. [#37536]
- Update CTA on A4A banner in My Jetpack. [#37628]

## [4.24.1] - 2024-05-24
### Changed
- Update Search to require user connection. [#37496]

## [4.24.0] - 2024-05-23
### Changed
- Improve the active/inactive statuses on My Jetpack. [#37217]

## [4.23.3] - 2024-05-20
### Added
- Add tracks events for dropdown on action buttons. [#37292]

### Changed
- Updated package dependencies. [#37379] [#37380] [#37382]

## [4.23.2] - 2024-05-09
### Changed
- My Jetpack Agency banner copy change. [#37248]

### Fixed
- Fix typo [#37303]

## [4.23.1] - 2024-05-08
### Changed
- Update dependencies.

## [4.23.0] - 2024-05-06
### Added
- Add a has_free_offering boolean on My Jetpack products. [#36710]
- Add copy for AI features on connection screen. [#37218]
- Define `$module_name` static property on `Hybrid_Product` (defaulting to null). [#37201]
- Jetpack AI: Add new badge to Featured Image video on the product page. [#37197]
- My Jetpack: Add errors from the connection package to the new notice component. [#36840]

### Changed
- Change "go back" in My Jetpack interstitials to always return to the My Jetpack page. [#36685]
- Fix z-index issue and close action button dropdown when clicked outside. [#37169]
- Jetpack AI: Add featured image generation as a feature on the product interstitial. [#37199]
- Jetpack AI: Include video about featured image generation on the product page. [#37192]
- Updated package dependencies. [#37147] [#37148] [#37160]

## [4.22.3] - 2024-04-29
### Changed
- Internal updates.

## [4.22.2] - 2024-04-25
### Fixed
- My Jetpack: Fix issue where the TOS component was being called inside of a <p>, throwing a warning that <p> can't be a descendant of <p>. This also fixes the font size of the TOS text. [#37034]

## [4.22.1] - 2024-04-22
### Changed
- Internal updates.

## [4.22.0] - 2024-04-11
### Added
- Add new tracking event for product activations made through My Jetpack [#36745]
- My Jetpack: add a way to connect a Jetpack site to WordPress.com asynchronously and update the message in the notice to reflect that. [#36771]

### Fixed
- Ensure page_view gets loaded before product_card_loaded [#36790]

## [4.21.0] - 2024-04-08
### Added
- Add 'from' property to connection call to WP.com. [#36741]
- My Jetpack: Update Notice component to allow adding a loading text when an action is in a loading state. Add a new resetNotice action to NoticeContext. [#36614]

### Changed
- My Jetpack: Show Boost score increase in Boost product card. [#36072]
- Updated package dependencies. [#36756] [#36760] [#36761]
- Update My Jetpack to use the Notice component from @automattic/jetpack-components and be more consistent with the other notices in Jetpack. [#36711]

### Removed
- My Jetpack: Removed custom Notice component from My Jetpack. [#36772]
- My Jetpack: Remove red bubble from connection notice in favor of using the status of the Notice component. [#36773]

### Fixed
- Fix cache on front end request for boost speed scores [#36700]
- fix tier upgrades in my Jetpack [#36705]

## [4.20.2] - 2024-04-02
### Fixed
- Fix Boost score inconsistency [#36679]

## [4.20.1] - 2024-04-01
### Added
- Change Phan baselines. [#36627]

## [4.20.0] - 2024-03-29
### Added
- Track active red bubble slugs on My Jetpack page view [#36611]

### Fixed
- Better handling on product interstitial pages if the site already has a paid product [#36570]
- Shows Jetpack CRM card as active on My Jetpack if the plugin is installed and active [#36594]

## [4.19.0] - 2024-03-27
### Added
- Add red bubble to notices tied to red bubble notifications [#36543]
- My Jetpack: add a version of WordPress' Notice component to My Jetpack considering the context of how we use notices on that screen [#36551]

### Changed
- Updated package dependencies. [#36539, #36585]

### Fixed
- Fixed Jetpack Creator going to the wrong screen when the free version is selected" [#36547]
- Fixes some pricing showing twice by connecting sites that select a free option [#36533]

## [4.18.0] - 2024-03-25
### Added
- Hook into red bubble notification when bad installation is detected [#36449]
- Jetpack AI: add notices on product page for exhausted requests [#35910]
- Jetpack AI: add plans/tier information on product page and corresponding CTAs [#35910]
- Jetpack AI: add support and create post links on product page [#35910]
- My Jetpack: add AI product page view event [#36488]
- My Jetpack: add feedback link on Jetpack AI product page [#35910]
- My Jetpack: AI pricing table is skipped once the user has opted for the free version [#35910]
- My Jetpack: change AI product for tiered pricing table display [#35910]

### Changed
- Add notice priorities to My Jetpack [#36438]
- Jetpack AI: address responsive issues on the styles [#35910]
- My Jetpack: AI product page styles update and responsive fixes [#35910]
- My Jetpack: change AI card action button target for upgraded users, point to product page [#35910]

### Removed
- My Jetpack: remove Jetpack AI code added throughout the new product page project [#35910]
- Removed reference to Creator Network, which is being deprecated. [#36168]

### Fixed
- Boost tooltips: fix typo in string. [#36520]
- My Jetpack: fix AI interstitial "remain free" flow [#35910]
- My Jetpack: fix interstitial event property malformed name productSlug -> product_slug [#36486]
- My Jetpack: fix spacing issues on the new product page [#35910]
- My Jetpack: new AI interstitial margin on admin page was messing with correct top spacing [#35910]

## [4.17.1] - 2024-03-18
### Added
- Add a loaded event for My Jetpack product cards [#36397]

## [4.17.0] - 2024-03-14
### Changed
- Rewrite My Jetpack hooks to Typescript [#36288]

## [4.16.0] - 2024-03-12
### Added
- Add a red bubble notification that shows if the site is disconnected [#36263]
- Add README to data directory [#36301]
- Add whitelist to show errors only for certain queries [#36261]

### Changed
- Migrate Stats counts out of redux and into tanstack queries [#36195]
- Replace window state calls with util function [#36271]
- Rewrite My Jetpack utils to typescript [#36296]
- Show small stats card in table if large stats card isn't showing [#36136]
- Updated package dependencies. [#36325]
- Update query hooks for my-jetpack data" [#36257]
- Update useMyJetpackConnection hook to TypeScript [#36300]

### Removed
- Removing redux store [#36256]

## [4.15.0] - 2024-03-07
### Added
- Refactor My Jetpack's backup related redux state to react query. [#35982]

### Changed
- Migrate dismiss welcome banner to tanstack [#36199]
- Migrate global notices to context [#36201]
- Migrate My Jetpack's licenses query and state to react-query [#36029]
- Moved lifecycle stats function out of redux [#36205]
- Updating purchase related redux data to tanstack/react [#35994]

### Removed
- Connected Product offer is not being used, removing it to clean up a bit [#36203]

### Fixed
- fix a few My Jetpack bugs when main plugin is not installed [#36139]
- Intersitital tables were not visibly loading when pressed [#36236]

## [4.14.0] - 2024-03-04
### Changed
- Migrate My Jetpack zendesk state to react-query [#36028]
- Updated package dependencies.

### Fixed
- Add registration nonce to connect screen in My Jetpack [#36133]

## [4.13.0] - 2024-03-01
### Added
- Add site lifecycle status guess to My Jetpack [#35815]

### Changed
- Changed product plan checks on My Jetpack cards [#36046]
- Display different Boost card tooltip content based on score letter grade. [#35863]
- Improve consistency and fix bugs in product start and checkout flows [#35908]
- Instanciate the Boost Score API (new Speed_Score()) in My Jetpack. [#36080]
- My Jetpack: add Tracks events to connection section [#35804]
- Refactor react-query to reduce code repetition [#35990]

### Fixed
- fixed the purchase query for the boost card [#36004]

## [4.12.1] - 2024-02-27
### Added
- My Jetpack: Add an info popover in the Boost product card. [#35731]

## [4.12.0] - 2024-02-26
### Changed
- My Jetpack: decouple Jetpack AI insterstitial component [#35836]
- Remove translation of product names [#35830]
- Updating purchases state to use data query instead of redux [#35697]

### Removed
- Remove kebab menu on My Jetpack cards [#35829]

## [4.11.0] - 2024-02-22
### Added
- Adding accesible text for external links on connection page and footer [#35733]

### Changed
- change status and action of My Jetpack cards when plugin is missing [#35718]
- ESlint: disabled redundant role rule [#35800]
- My Jetpack: add product slugs to click events on interstitials [#35740]
- My Jetpack: let tier data pass on quantity data to checkout process for proper checkout URL crafting [#35817]
- Updated package dependencies. [#35793]

### Fixed
- Backup Card: made stats readable by screen readers [#35786]
- Connection Screen: make VoiceOver announce lists as such [#35736]
- Do not initialize My Jetpack when in Offline mode. [#35807]
- Fix wrong prop type passed to ConnectedProductCard [#35789]

## [4.10.0] - 2024-02-19
### Added
- Add Boost Speed Score into My Jetpack Boost product card [#35606]
- Add connection indicator for screen readers [#35714]

### Fixed
- Improved accessibility of Dismiss button in Connection Banner [#35694]
- My Jeptack Connection: Make footer logos a list for better screen readers interpretation. [#35667]
- My Jetpack: add label for screen readers to connect page close button [#35712]

## [4.9.2] - 2024-02-13
### Changed
- My Jetpack: various improvements to the Stats card. [#35355]
- Updated package dependencies. [#35608]

## [4.9.1] - 2024-02-12
### Added
- Add My Jetpack link to standalone plugins missing it [#35523]

## [4.9.0] - 2024-02-07
### Changed
- Add pricing info for AI and CRM on My Jetpack [#35457]
- Update the description of some cards to better describe the product on My Jetpack page [#35428]

### Fixed
- Fixes issue on My Jetpack interstitials where some prices are 1 cent off [#35492]

## [4.8.0] - 2024-02-05
### Added
- Add tracking info to the Jetpack Manage Banner CTA [#35378]
- My Jetpack: support redirect_to parameter on the product interstitial. [#35263]

### Changed
- Update CTA copy on the connection banner to make it clear which type of connection we are going to request [#35401]
- Updated package dependencies.
- Update product cards on My Jetpack to always display the status indidicator. [#35377]

### Fixed
- Fix issue where most products are not installing their standalone product upon purchase [#35399]

## [4.7.0] - 2024-01-29
### Changed
- Update the UpsellBanner to use the Card component from WP components. [#35223]

### Removed
- UpsellBanner component moved to js-packages/components [#35228]

## [4.6.2] - 2024-01-22
### Added
- My Jetpack: add contact us event for Jetpack AI [#35136]

## [4.6.1] - 2024-01-22
### Changed
- Display Jetpack Protect product card for all users. [#35142]
- Ensure that interstitial tables go straight to checkout just like insterstitial cards [#35049]

## [4.6.0] - 2024-01-18
### Added
- Add hosting provider check. [#34864]
- Add Jetpack Manage banner. [#35078]

## [4.5.0] - 2024-01-18
### Changed
- Use blog ID instead of site slug in checkout URL. [#34976]

## [4.4.0] - 2024-01-15
### Changed
- add plan check to My Jetpack Akismet product card [#34905]
- Prevent new users from seeing JITMs [#34927]
- To avoid displaying the Welcome banner to every user, now we only display it to new users. [#34883]

## [4.3.0] - 2024-01-08
### Added
- Add a check to determine if a user is "new" to Jetpack. [#34821]
- Add a button that links to the connection screen to the Welcome Banner in My Jetpack. [#34858]

### Changed
- Add a product interstitial in My Jetpack for stats. [#34772]
- Added an image to Social interstitial. [#34814]
- Update Akismet card on My Jetpack to go to interstitial screen when there is no API key. [#34817]

## [4.2.1] - 2024-01-04
### Changed
- Updated package dependencies. [#34815] [#34816]

### Fixed
- My Jetpack: Jetpack footer links are now consistent with footers in rest of Jetpack screens. [#34787]

## [4.2.0] - 2024-01-02
### Fixed
- Show JP Creator as active when JP Complete is purchased. [#34806]

## [4.1.4] - 2023-12-20
### Changed
- Updated package dependencies. [#34694]

## [4.1.3] - 2023-12-11
### Changed
- Updated Jetpack AI interstitial to repeat the feature's list on all the tiers. [#34541]

## [4.1.2] - 2023-12-06
### Changed
- Updated package dependencies. [#34416]

### Fixed
- Creator Card: fix typo. [#34478]

## [4.1.1] - 2023-12-05
### Fixed
- My Jetpack: Fix outdated product cache issue when enabling tiers. [#34428]

## [4.1.0] - 2023-12-03
### Added
- Added Jetpack Creator to My Jetpack. [#34307]
- Added the welcome banner to My Jetpack. [#34384]
- Display a "Jetpack Manage" menu item to connected users. [#34353]
- Updated connection message to only display if the welcome banner has been dismissed. [#34420]

### Changed
- Updated package dependencies. [#34411] [#34427]
- Updated the API calls used for My Jetpack backup card. [#34197]
- Updated the CTAs in My Jetpack for more clarity and to avoid inconsistencies. [#34300]

### Fixed
- Dashboard: Prevented display of any notices from third-party services. [#34364]
- Fixed checkout error while selling the unlimited Jetpack AI plan. [#34339]
- Fixed Jetpack AI bi-yearly plan on product card. [#34276]
- Fixed product card menus. [#34285]

## [4.0.3] - 2023-11-24
### Changed
- Changed Jetpack AI insterstitial contact link to Jetpack Redirect. [#34252]
- Link Jetpack AI Contact Us button to support email on interstitial page. [#34240]
- Removed hardcoded tiers from Jetpack AI interstitial. [#34259]
- Trust next tier provided by the Jetpack AI feature endpoint. [#34239]

## [4.0.2] - 2023-11-21
### Changed
- Replace usage of strpos() with str_contains(). [#34137]

## [4.0.1] - 2023-11-21
### Added
- Marked Jetpack AI as upgradable in the interstitial page. [#34215]

## [4.0.0] - 2023-11-20
### Added
- Display an "Activity Log" menu item to connected users. [#34174]
- Added direct checkout support for products with quantity-based plans. [#34177]
- Added Jetpack AI prices by tier to the interstitial page. [#34196]

### Changed
- Replaced usage of strpos() with str_starts_with(). [#34135]
- Updated required PHP version to >= 7.0. [#34126]
- Removed condition from the backup undoable event call, this datapoint will be removed. [#33997]

## [3.12.2] - 2023-11-14
### Changed
- My Jetpack: Fix a bug causing PHP fatal errors when the Jetpack AI feature information is not available. [#34095]
- Updated package dependencies. [#34093]

## [3.12.1] - 2023-11-13
### Changed
- AI Assistant: Updated the text and image for the interstitial based on AI plan tiers. [#33981]
- AI Assistant: Removed the ToS notice from the interstitial page. [#34076]

## [3.12.0] - 2023-11-08
### Added
- Updated purchased state for VaultPress backup card on My Jetpack. [#33927]

## [3.11.1] - 2023-11-03

## [3.11.0] - 2023-10-30
### Added
- Add site data to unpurchased state of VaultPress Backup card to My Jetpack. [#33607]

## [3.10.0] - 2023-10-23
### Added
- Add jetpack-plans dependency. It will be use to restore the reverted change on #33410. [#33706]

### Changed
- Update checkout flow to connect "After" checkout vs before (if not connected). [#33257]

### Fixed
- Use Current_Plan to check/return from has_required_plan on VP product class. [#33708]

## [3.9.1] - 2023-10-19
### Changed
- Make has_required_plan return true (as it was before #33410) as a way to revert the change. [#33697]
- Updated package dependencies. [#33687]

## [3.9.0] - 2023-10-17
### Added
- Add has_required_plan method for VideoPress product class, check plan purchase exists for site [#33410]

### Changed
- Updated package dependencies. [#33646]

## [3.8.2] - 2023-10-16
### Changed
- Updated package dependencies. [#33429, #33584]

## [3.8.1] - 2023-10-10
### Changed
- Changes title of the my-jetpack page to "My Jetpack" [#33486]
- Updated package dependencies. [#33428]

### Fixed
- My Jetpack: fix fatal error [#33523]
- My Jetpack: fix Stats card status when not connected [#33521]

## [3.8.0] - 2023-10-03
### Added
- Display a new section on My Jetpack to display the stats of the site. [#33283]

## [3.7.0] - 2023-09-28
### Added
- Add a section to display stats from Jetpack Stats in My Jetpack [#33160]

### Changed
- Redirect to a proper upgrade page for free license owners [#33297]

## [3.6.0] - 2023-09-25
### Added
- Add barebones infrastructure for querying jetpack product data. [#33095]

### Changed
- Stats: link to purchase page within WP Admin. [#33227]

## [3.5.0] - 2023-09-19
### Changed
- Added support for upgradable products. Updated the Stats card  to handle upgradeable products. [#33058]
- Updated Jetpack submenu sort order so individual features are alpha-sorted. [#32958]

### Fixed
- My Jetpack: Add AI Assistant Monthly to required plan check [#33078]

## [3.4.5] - 2023-09-13
### Changed
- Updated package dependencies. [#33001]

## [3.4.4] - 2023-09-11
### Changed
- General: remove WP 6.1 backwards compatibility checks [#32772]

### Fixed
- Stats: stop showing upgrade button for sites with Complete plan [#32870]

## [3.4.3] - 2023-09-04
### Changed
- Updated package dependencies. [#32803] [#32804]

## [3.4.2] - 2023-08-23
### Changed
- Updated package dependencies. [#32605]

## [3.4.1] - 2023-08-22
### Changed
- Connection: allow dismissing the IDC modal. [#32594]

## [3.4.0] - 2023-08-21
### Added
- Support Jetpack AI Yearly offering [#32130]

### Changed
- Use the new method to render Connection initial state. [#32499]

## [3.3.3] - 2023-08-14
### Added
- Make My Jetpack the default WP-Admin page for Jetpack. [#32385]

### Changed
- Start showing My Jetpack for authors, editors, and contributors [#32420]

## [3.3.2] - 2023-08-09
### Fixed
- Revert My Jetpack as first menu item. [#32384]

## [3.3.1] - 2023-08-09
### Changed
- Updated package dependencies. [#32166]

## [3.3.0] - 2023-08-07
### Added
- Add Identity Crisis screen modal. [#32249]

### Changed
- Move 'My Jetpack' sub-menu item to first position. [#32240]

### Fixed
- Fix IDC modal height issue. [#32316]

## [3.2.1] - 2023-08-01
### Added
- Add transient caching for zendesk jwt auth token. [#32140]

### Changed
- My Jetpack: Rename the namespace of the JWT endpoint, and register it only when it isn't already registered [#32081]

## [3.2.0] - 2023-07-25
### Added
- My Jetpack: register jetpack-ai-jwt endpoint [#31965]
- My Jetpack: release Paid Stats to the public [#32020]

### Changed
- My Jetpack: changed Stats features wording [#32046]
- Updated package dependencies. [#31999] [#32040]

### Fixed
- Make Jetpack logo in footer smaller [#31627]
- My Jetpack: enabled Stats purchase flow returning to Stats Dashboard [#31959]

## [3.1.3] - 2023-07-17
### Changed
- Updated package dependencies. [#31872]

### Fixed
- Hide connection owner information if the data is invalid
- Don't suggest user connection if user is already connected, but connection owner is invalid [#31618]

## [3.1.2] - 2023-07-11
### Changed
- Updated package dependencies. [#31785]

## [3.1.1] - 2023-07-10
### Fixed
- Make product card primary buttons links when applicable [#31611]

## [3.1.0] - 2023-07-05
### Added
- Added Jetpack Stats card to My Jetpack [#31589]

### Changed
- Jetpack Stats: Enable skipping interstitial page [#31629]
- Updated package dependencies. [#31659]

### Fixed
- My Jetpack: hide Stats card for standalone plugins [#31689]
- Organize product cards in list [#31606]

## [3.0.0] - 2023-06-26
### Added
- Add authentication to Zendesk chat. [#31339]
- Stats: add stats card to my Jetpack. [#31531]

## [2.15.0] - 2023-06-23
### Added
- My Jetpack: add Stats product [#31368]

### Changed
- Updated package dependencies. [#31468]

## [2.14.3] - 2023-06-12
### Added
- My Jetpack: populate the Jetpack AI product with feature data [#31238]

## [2.14.2] - 2023-06-06
### Changed
- Filter out revoked licenses from the license activation options. [#31088]
- Updated package dependencies. [#31129]

## [2.14.1] - 2023-05-29
### Added
- My Jetpack: Add new Jetpack AI card [#30904]

### Changed
- My Jetpack: Enable Jetpack AI card [#30988]
- My Jetpack: Update AI class to be product and not module [#30905]
- My Jetpack: Update AI interstitial background [#30992]

## [2.14.0] - 2023-05-22
### Added
- Added ability to purchase Jetpack AI monthly product [#30793]
- Added tier data to the Boost product to support a pricing table interstitial page. [#29931]

## [2.13.0] - 2023-05-15
### Added
- Added My Jetpack interstitial for Jetpack AI [#30543]

## [2.12.2] - 2023-05-11
### Changed
- PHP 8.1 compatibility updates [#30517]

## [2.12.1] - 2023-05-08
### Added
- My Jetpack: Add deactivate plugin menu action on product card [#30489]

### Changed
- My Jetpack: Remove icon from plugin activation action in product card [#30458]
- My Jetpack: Remove manage option from menu [#30440]
- My Jetpack: Remove product card icon [#30441]
- My Jetpack: Set a post-checkout redirect destination on the "Purchase a plan" link. [#27693]

### Fixed
- My Jetpack: Add check for product status before requesting stats [#30430]
- My Jetpack: Reload page after successful license activation [#30364]
- My Jetpack: Use a single column for the page title section [#30406]

## [2.12.0] - 2023-05-02
### Added
- Add API to query Zendesk chat availability and use it to conditionally display zendesk chat. [#29942]
- Add pricing table interstitial view for Jetpack Protect. [#29930]
- My Jetpack: Add product detail table component for comparing product tiers. [#29759]

### Changed
- My Jetpack: Move logic out of Product Card component. [#30274]
- Updated package dependencies.

### Fixed
- Fix activation and layout on Protect interstatial page. [#29525]
- My Jetpack: Keep product card action button disabled while installing standalone plugin. [#30346]

## [2.11.0] - 2023-05-01
### Added
- Added Jetpack Starter bundle post-activation screen and plan header [#30368]

## [2.10.3] - 2023-04-25
### Added
- My Jetpack: Add flags field in initial state [#30241]
- My Jetpack: Add Install/Activate menu actions based on the standalone plugin status. [#30153]
- My Jetpack: Add neutral color in contextual card [#30250]
- My Jetpack: Add side-effect action to request the standalone plugin installation on the backend. [#30143]
- My Jetpack: Add stats to VideoPress card [#30197]
- My Jetpack: Enable menu for all hybrid products [#30247]
- My Jetpack: Reload page after standalone action [#30221]

### Changed
- My Jetpack: Connect the standalone plugin menu options so they trigger the installation and activation when clicked. [#30168]
- MyJetpack: set the Social standalone page as the default admin one [#30193]
- MyJetpack: Try to activate the product module after installing the standalone plugin [#30215]
- Updated package dependencies. [#30015]

## [2.10.2] - 2023-04-17
### Added
- Ad missing TOS in Jetpack interstitial. [#29683]
- My Jetpack: Add endpoint to install the standalone plugin for hybrid products. [#30045]
- My Jetpack: Expose information about standalone plugin status on My Jetpack product initial state. [#29977]

### Changed
- Backup and Scan: redirect after checkout to Jetpack recommendations page if Jetpack plugin is active. Otherwise, redirect back to plugin admin page. [#29708]
- My Jetpack: Adjustments in Product Card [#30014]
- Updated package dependencies. [#30019]

## [2.10.1] - 2023-04-10
### Added
- Add Jetpack Autoloader package suggestion. [#29988]
- My Jetpack: Introduce absent_with_plan status [#29920]

### Changed
- My Jetpack: Turn Search into a hybrid product to handle it as module and as standalone plugin. [#29946]
- My Jetpack: Turn Social into a hybrid product to handle it as module and as standalone plugin. [#29935]
- My Jetpack: Turn VaultPress Backup into a Hybrid product to handle it as module and as standalone plugin. [#29928]
- My Jetpack: Turn VideoPress into a Hybrid product to handle it as module and as standalone plugin. [#29918]

## [2.10.0] - 2023-04-04
### Added
- My Jetpack: Adds a selector, reducer and resolver machinery to fetch product stats. [#29764]
- My Jetpack: Enhance Product Card [#29787]
- My Jetpack: Introduce menu in Product Card [#29815]

### Changed
- * Updated add-anti-spam path to add-akismet to match the product key
  * Updated product interstitial component to accept an existingLicenseKeyUrl
  * Updated product interstitial component to display a product name instead of a title where preferProductName is set
  * Make is_plugin_active available from the API [#29598]
- My Jetpack: Change the bottom of My Jetpack screen to use single-column rows on small viewports. [#29844]
- Updated package dependencies. [#29854]

## [2.9.2] - 2023-04-03
### Changed
- Internal updates.

## [2.9.1] - 2023-03-28
### Changed
- Move GoldenTokenModal component to licensing package. [#29748]

## [2.9.0] - 2023-03-27
### Added
- Adds new route for Golden Token. Also the experience of redeeming one [#29644]
- Clarified when license activation fails that a user connection is required, added a link to complete the connection, and added functionality to redirect back to license activation when the connection is done. [#29443]

## [2.8.1] - 2023-03-20
### Changed
- Product Interstitial: Use browser history to go back, in case they're coming from somewhere outside of the app. [#29138]
- Updated My Jetpack wpwrap color to --jp-white-off [#29568]
- Updated package dependencies. [#29471]

## [2.8.0] - 2023-03-13
### Added
- Add Zendesk chat module to My Jetpack page [#28712]

## [2.7.13] - 2023-03-08
### Changed
- Updated package dependencies. [#29216]

## [2.7.12] - 2023-02-28
### Changed
- Update billing language [#29126]

## [2.7.11] - 2023-02-20
### Fixed
- My Jetpack: Fix button to add bundle in product interstitial component [#28984]

## [2.7.10] - 2023-02-15
### Changed
- Update to React 18. [#28710]

## [2.7.9] - 2023-02-08
### Changed
- Updated package dependencies. [#28682, #28700]

## [2.7.8] - 2023-02-06
### Changed
- Updated package dependencies.

## [2.7.7] - 2023-01-26
### Changed
- Use `flex-start` instead of `start` for better browser compatibility. [#28530]

## [2.7.6] - 2023-01-25
### Changed
- Minor internal updates.

## [2.7.5] - 2023-01-23
### Fixed
- Components: Fix usage of box-sizing across the elements [#28489]
- Fixes the price display for products with intro offers for the first month. [#28424]

## [2.7.4] - 2023-01-16
### Changed
- Updated package dependencies. [#28303]

## [2.7.3] - 2023-01-11
### Changed
- Updated package dependencies.

## [2.7.2] - 2023-01-02
### Added
- My Jetpack: Move VideoPress from Hybrid [#28097]

### Changed
- My Jetpack: Move Search out of hybrid and deprecate Hybrid_Product class [#28113]

## [2.7.1] - 2022-12-27
### Changed
- Fix layout visual issues [#28055]
- My Jetpack: Move Backup out of hybrid product [#28022]
- My Jetpack: Move Social out of hybrid product [#28074]

## [2.7.0] - 2022-12-19
### Added
- Implement detached licenses redux store. [#27609]

### Changed
- Updated package dependencies. [#27916]

### Fixed
- Add translation context to Security product name. [#27920]

## [2.6.1] - 2022-12-12
### Changed
- Updated package dependencies. [#27888]

## [2.6.0] - 2022-12-05
### Changed
- Improve design of the error notice. [#27340]
- Updated package dependencies. [#27340]

## [2.5.2] - 2022-12-02
### Changed
- My Jetpack: Requires connection only if needed [#27615]
- Updated package dependencies. [#27697]

## [2.5.1] - 2022-11-30

## [2.5.0] - 2022-11-28
### Changed
- My Jetpack: rename Backup and Anti-Spam to new product names [#27377]
- Show My Jetpack even if site is disconnected [#26967]
- Updated package dependencies. [#27576]

## [2.4.1] - 2022-11-22
### Changed
- Updated package dependencies. [#27043]

## [2.4.0] - 2022-11-17
### Added
- Added Jetpack Protect to My Jetpack. [#26069]

### Changed
- Updated package dependencies. [#26736]

## [2.3.5] - 2022-11-10
### Changed
- Updated package dependencies. [#27319]

## [2.3.4] - 2022-11-08
### Changed
- Updated package dependencies. [#27289]

## [2.3.3] - 2022-11-01
### Changed
- Updated package dependencies. [#27196]

## [2.3.2] - 2022-10-25
### Changed
- Updated package dependencies. [#26705]

## [2.3.1] - 2022-10-25
### Added
- Add a flag to indicate if the pricing is introductory with product price [#26982]
- My Jetpack: Support trial [#27033]

### Changed
- Search: now support 38 languages [#27025]

### Fixed
- Don't show old price when it's the same as new one [#27015]
- Search: check if free plan and new pricing is active using wpcom API [#27016]

## [2.3.0] - 2022-10-19
### Added
- Added support for free product and added free product for Search [#26808]

### Changed
- Updated package dependencies. [#26883]

## [2.2.3] - 2022-10-17
### Changed
- Updated package dependencies. [#26851]

## [2.2.2] - 2022-10-13
### Changed
- Updated package dependencies. [#26790]

## [2.2.1] - 2022-10-11
### Changed
- Updated package dependencies. [#25973]

## [2.2.0] - 2022-10-05
### Added
- Integrate the new connection error message React component into My Jetpack. [#26485]
- Search: add post type breakdown endpoint [#26463]
- Trigger restore connection flow. [#26489]

### Changed
- Updated package dependencies. [#26457]

## [2.1.1] - 2022-09-27
### Changed
- Updated package dependencies.

## [2.1.0] - 2022-09-20
### Added
- Added the ConnectionErrorNotice React component. [#26259]

### Changed
- Updated package dependencies.

### Fixed
- Fixed the tests for the Module_Product class by creating and using a sample, test-only module product class as the test subject instead of relying on Videopress or other concrete products. [#26227]

## [2.0.5] - 2022-09-08
### Changed
- Change VideoPress into a Hybrid product in My Jetpack [#25954]
- Updated package dependencies.

## [2.0.4] - 2022-08-31
### Added
- Allow plugins to override a product class. [#25891]

### Changed
- Updated package dependencies. [#25856]

## [2.0.3] - 2022-08-29
### Changed
- Updated package dependencies.

## [2.0.2] - 2022-08-25
### Changed
- Activate plugins in normal mode to trigger plugin_activated hooks [#25727]
- Updated package dependencies. [#25814]

### Fixed
- Licensing: do not enable the Licensing UI if My Jetpack cannot be enabled. [#25667]
- Search: increased search plan/pricing API timeouts to 5s [#25775]

## [2.0.1] - 2022-08-23
### Added
- My Jetpack: Add container for JITMs [#22452]

### Changed
- Updated package dependencies. [#25338, #25339, #25377, #25422, #25628, #25762, #25764]

## [2.0.0] - 2022-08-09
### Added
- Make product cards compatible with disclaimers and add disclaimer for backup card [#25265]

### Changed
- Search: changed to only require site level connection [#24477]

## [1.8.3] - 2022-08-03
### Changed
- Updated package dependencies. [#25300, #25315]

## [1.8.2] - 2022-07-27
### Changed
- My Jetpack: changed link used in ProductCard component to a button when the plugin is absent

## [1.8.1] - 2022-07-26
### Changed
- My Jetpack: changed button used in ProductCard component from WordPress to Jetpack default [#25146]
- Updated package dependencies. [#25147]

## [1.8.0] - 2022-07-19
### Added
- My Jetpack: scroll window to top on route change [#25086]

### Changed
- Updated package dependencies. [#24710]

## [1.7.4] - 2022-07-12
### Changed
- Updated package dependencies. [#25048, #25055]

## [1.7.3] - 2022-07-06
### Added
- Display alert when we cant automatically install the plugin [#24884]

### Changed
- Updated package dependencies. [#24923]

## [1.7.2] - 2022-06-28
### Changed
- Disambiguate redirectUrls vars [#24839]
- Search: use centralized search pricing API [#24795]
- Updated package dependencies. [#24826]

### Fixed
- Search Pricing: fix pricing fetch issue before site is connected [#24826]

## [1.7.1] - 2022-06-21
### Fixed
- My Jetpack: Replace wordpress from PNG to SVG at Connection [#24793]

## [1.7.0] - 2022-06-21
### Changed
- My Jetpack: set products grid to 3x3 for large viewport size
- Renaming master to trunk.
- Renaming `master` references to `trunk`

## [1.6.2] - 2022-06-14
### Changed
- Updated package dependencies. [#24529]

## [1.6.1] - 2022-06-08
### Changed
- Reorder JS imports for `import/order` eslint rule. [#24601]
- Updated package dependencies. [#24510]

## [1.6.0] - 2022-05-30
### Added
- Added Social to My Jetpack.

### Changed
- Make My Jetpack use the new Modules class
- Replace deprecated external-link variation by using isExternalLink prop
- Updated package dependencies

## [1.5.0] - 2022-05-24
### Changed
- Default licensing UI in My Jetpack to be enabled [#24396]
- Updated package dependencies. [#24449]

## [1.4.1] - 2022-05-19
### Changed
- Updated package dependencies. [#24395]

## [1.4.0] - 2022-05-18
### Added
- Added a filter to allow stand-alone plugins to add product specific activation routines [#24334]
- My Jetpack: Add Protect class [#24347]
- My Jetpack: compute Search plugin price based on price tier [#24337]

### Changed
- Add tiered pricing copy and update titles for Jetpack Search [#24357]
- Hide Activate a license link if there is no user connection since user connection is required [#24251]
- My Jetpack Hybrid products: Install Jetpack if stand-alone plugin installation fails [#24335]
- Updated Jetpack Scan feature list. [#23863] [#23795] [#24361] [#24372]

## [1.3.0] - 2022-05-10
### Changed
- Adds from arg to connection screen in My Jetpack so that we can begin tracking connections originating from My Jetpack [#24283]
- Updated package dependencies. [#24189]
- Updated references to old licensing activation UI to licensing activation UI in My Jetpack [#24189]

## [1.2.1] - 2022-05-04
### Added
- Add missing JavaScript dependencies. [#24096]

### Changed
- My Jetpack: remove duplicated site suffix stored on rawUrl. Use siteSuffix instead. [#24094]
- Updated package dependencies. [#24095] [#24198]

### Deprecated
- Moved the options class into Connection. [#24095]

## [1.2.0] - 2022-04-26
### Added
- Added activation screen component to My Jetpack licensing page

### Changed
- Updated package dependencies.
- Update package.json metadata.

## [1.1.0] - 2022-04-19
### Added
- Adds a skeleton for the licensing UI along with a feature flag
- Better error handling for when the WPCOM server is unreachable
- Introduced ConnectedProductOffer component

### Changed
- Turn Search into a Hybrid Product
- Updated package dependencies
- use connected plugin list from the connection store and ask for an update after activating a product

## [1.0.2] - 2022-04-12
### Changed
- Updated package dependencies.

### Fixed
- Fixed bug in checkout URLs for sites installed in subdirs.

## [1.0.1] - 2022-04-06
### Removed
- Removed tracking dependency.

## [1.0.0] - 2022-04-05
### Added
- My Jetpack: improve Product and Interstitial components.

### Changed
- Bump My Jetpack package to major version 1.0.0.
- My Jetpack: align price boxes in the interstitial product page.
- Updated package dependencies.

## [0.6.13] - 2022-03-31
### Added
- Added tracking events to Plans section external links

### Changed
- My Jetpack: tweak plans section typography and descriptive text

## [0.6.12] - 2022-03-29
### Added
- Add missing JS peer dependencies.

### Changed
- Microperformance: Use === null instead of is_null
- My Jetpack: Moved in product icon components
- My Jetpack: Tweak plan sections styles/sizes
- My Jetpack: Update ProductDetailCard to use components and theme variables
- My Jetpack: Use components to render headers elements
- Use different URLs for manage and purchase links in plans section

### Fixed
- My Jetpack: Connect Screen logos quality

## [0.6.11] - 2022-03-23
### Added
- My Jetpack: add error styles to the whole Product card component
- My Jetpack: Make whole Product card clickable

### Changed
- Changed opacity of product icons to 40%
- Changed title
- Improved should_initialize method
- My Jetpack: remove dropdown from CTA button in Product cards
- My Jetpack: Use Text and CSS vars on ProductCard
- Updated Boost product icon for clarity
- Updated package dependencies.
- Updated package dependencies.
- Updated styles for each product card status
- Update organization and copy of the Plans section

### Removed
- My Jetpack: Remove client code that allows to deactivate a product

### Fixed
- Fix Plans section top margin for plan list
- My Jetpack: jetpack_my_jetpack_should_initialize filter now respected when set to true.

## [0.6.10] - 2022-03-15
### Changed
- Make Backup go through the purchase flow after activation
- My Jetpack: Use ThemeProvider instead base-styles
- Updated package dependencies

### Removed
- Removed Beta badge from menu item

## [0.6.9] - 2022-03-09
### Changed
- Updated package dependencies.

## [0.6.8] - 2022-03-08
### Added
- Added connected plugins slugs to My Jetpack tracking events
- Add link to jetpack.com in the footer
- My Jetpack: Add jetpack features link on connection screen
- My Jetpack: tidy Product card component
- My Jetpack: update Spinner in checkout button

### Changed
- Components: update attributes used within the Button component to match recent deprecations and changes.
- My Jetpack: Add Connected Product Card stories
- My Jetpack: Add connection screen footer
- My Jetpack: clean/tidy Product data
- My Jetpack: Remove Layout component
- Only consider Backup product active when the plan is purchased

### Fixed
- Fixed Backup flow when Jetpack plugin is active
- My Jetpack: align CTA buttons of My Jetpack overview
- My Jetpack: Fix button height in the Interstitial pages

## [0.6.7] - 2022-03-02
### Added
- Add My Jetpack action link to all Jetpack plugins
- My Jetpack: Handle cosmetic tweaks
- My Jetpack: Pass requiresUserConnection to ConnectionStatusCard

### Changed
- Refactor and simplify Products class
- Updated package dependencies.

### Fixed
- Disable browser cache for My Jetpack
- My Jetpack: fix products card section story
- My Jetpack: fix stories for the Interstitial pages

## [0.6.6] - 2022-02-28
### Fixed
- Re-doing 0.6.5 to fixup bad release.

## [0.6.5] - 2022-02-28
### Changed
- Tweak product card box model.

### Fixed
- Use namespace in My Jetpack REST Products class to prevent fatal

## [0.6.4] - 2022-02-25
### Added
- Activate Jetpack plugin from Extras product card
- Added list of connected plugins to Disconnect dialog in My Jetpack
- Add Extras interstitial page
- My Jetpack: Handle cosmetic tweaks
- My Jetpack: Remove global notices when in my jetpack page
- My Jetpack: set height of Jetpack logo in the footer
- My Jetpack: tweak height of Jetpack Logo
- My Jetpack: update Product logos

### Changed
- Disable My Jetpack on MS
- My Jetpack: compress extras product image
- Updated package dependencies.
- Update My Jetpack dashboard headline

### Removed
- Remove unnecessary line from My Jetpack Initial state

### Fixed
- Fix beta badge for RTL languages
- Handle plugin activating from Hybrid class
- Memoized RecordEvent from usAnalytics hook
- My Jetpack: Fix post activation url redirect
- My Jetpack: Move product list that requires user connection to selector
- Products::get_products_names should not load all product information
- Update automattic logo href in the footer

## [0.6.3] - 2022-02-22
### Changed
- Updated inline documentation

### Fixed
- Use Jetpack namespace to fix fatal error

## [0.6.2] - 2022-02-22
### Added
- Add Beta badge
- Add Extras class
- Apply coupon discount to Product price when it exists
- Filesystem write access to the initial state
- Improve Product detail layout
- Implement close link on layout nav
- Prevent calling activation hook when activating backup

### Changed
- Bump package versions.
- Improve My Jetpack link styles
- Improve redirect process after installing Product
- Fix interstitial CTA buttons layout
- Move from isPressed to CSS vars
- Redirect connect user to connection interstitial
- Point the link of the Manage button of CRM to its dashboard
- Redirect to post_activation_url after product activation from iterstitial screen
- Remove conditional loading depending on constant
- Send My Jetpack version with fired events
- Update the layout of interstitial page when it has an upgradable bundle

### Fixed
- Check if product is active before checking if requires plan
- Fix check for plugin installation for hybrid products
- Fix click on security and add click on My Jetpack interstitial
- Fix clicks on VideoPress and CRM cards
- Fix Product prices
- Make Scan and Search interstitials install the plugin
- Purchases: ensure we retrieve translated version of active purchases
- Return needs purchase status for products module

## [0.6.1] - 2022-02-16
### Added
- Add Anti-Spam Product detail card
- Add CRM interstitial page
- Added wpcom plan slug to product info
- add manage and post activation urls
- Add Scan product: interstitial, route, data, etc...
- Add Security Product Bundle
- Add VideoPress data
- Add VideoPress interstitial cmp. Story.
- Add `#/add-videopress` route
- Change the discount value for all Products to 50
- checks and activation for Security Bundle
- consume prices dynamically
- Do not show Porduct price when plan has required plan
- Finish Backup, Anti-Spam and Scan interstitial pages
- Fire Tracks Event when user clicks on Product Interstitial Back link
- Install proudcts from interstitial pages
- Make click on Fix connection show connection route
- package version to main class
- Pull product discount from wpcom
- Refactoring -> add icons component -> tweak icons for interstitial pages
- Register `#/add-anti-spam` route. Connect with interstitial page
- Restore Security bundle card in the UI
- Set default values for product data in the client (custom hook)
- set product status as error if active and requiring a missing user connection
- Set properly the checkout link for Products
- Set unlink=1 in the checkout URL when the user is not connected
- Tidy Product stories
- Update Backup product data. Tweak Icon.
- Update mock data for Search product. useMyJetpackNavigate() hook

### Changed
- Adapt Scan actiavtion behavior as it is not a module
- Add global notices for activate/deactivate failures
- Add manage redirect
- Apply correct style for CTA buttons on Interstitial
- Avoid usage of 100vh on layout
- Fix setting height of the Product title in the detail component
- Implement is fulfilled handler for product resolver
- Improve global notice layout
- Reduce size of boost and search interstitial images
- Update structure with Layout component
- Only pass a productUrl if the product is not free on interstitial pages
- Only show the deactivate action when it makes sense
- Pass slug prop to event firing on product card button actions instead of name
- Remove unnecessary payload from  request to activate or deactivate a product
- Replace renderActionButton function for ActionButton component
- Updated package dependencies.
- Use useMyJetpackNavigate when it's worth it

### Fixed
- Fixed connection check labels and error message
- Fix upgradability for anti-spam and backup products
- Remove duplicted Icon in Product Card story
- Use key when looping through product detail icons

## [0.6.0] - 2022-02-09
### Added
- Add Boost interstitial cmp.
- Add has_required_plan to product info and implement method in Search
- Add Product princign harcoded data
- Add search product data
- Add title and features to products data
- anti spam product class
- Connect Boost card with the interstitial page via /add-boost root
- Fire Tracks event when clicking CTA button on product Interstitial page
- Fire Tracks event when clicking Manage button on product card
- Fire Tracks event when clickn Add link on My Jetpack product card
- Fire Tracks event when showing the Interstitial page
- Implement Free price for Boost product
- Implement Search product interstitial
- Introduce basic Layout component. Add GoBackLink component
- Introduce ProductDetailCard component
- My Jetpack: Add Connection screen
- Pass slug prop to ProductCard'
- Plan verification for Backup and Scan
- Restore getProduct() resolver
- Set the checkout URL for the Product detail component
- useCallback for functions that are bound to onEvents

### Changed
- My Jetpack: Implement handler of connection notices
- My Jetpack: Update notice style and implements redirect for connection route
- Support multiple possible folder for each plugin
- Updated package dependencies

### Removed
- dependency from search package

### Fixed
- Fix My Jetpack's reducer for SET_PRODUCT_STATUS
- Fix the redirect URL value
- Show discounted price in Product Detail card
- typo

## [0.5.0] - 2022-02-02
### Added
- Added plugin installation functionality
- Adds Tracks events for activating and deactivating products from the product cards
- Fixes stories for ProductCard component
- Handle when site is not connected
- Initial approach to handle global notice
- Module Products
- My Jetpack: Add route handling
- My Jetpack: connect all product cards with data provider
- My Jetpack: connect Backup product class with Product class. Add long description and features fields.
- My Jetpack: handle redirect when no connection #22549
- My Jetpack: reorganize stores by project/name
- Remove getProduct() resolver
- Support to Hybrid products
- Tweak dimms of the Product card status
- Update data handling - Implement request status in Product Card
- User connection requirement to product info
- uses the Plugin Installer package to safely checks plugins statuses

### Changed
- Added filter for disabling the initialization of the My Jetpack package
- Build: remove unneeded files from production build.
- Do not initialize My Jetpack id site is not connected
- My Jetpack: Refactor styles to use layout components and theme provider
- My Jetpack: Update gap between product cards section
- Pick API root and nonce values from a new window var myJetpackRest
- Updated package dependencies.
- Update plugin absent status consistently

### Fixed
- added unit test mock for new global variable myJetpackRest
- Fix tests
- Fix unsafe optional chaining.
- my-jetpack: fix tracking event when activating product
- Resolved minor code standard violation after implementing a stricter rule.

## [0.4.0] - 2022-01-25
### Added
- add API endpoints to manipulate products
- Added css module for My Jetpack Plans Section
- Added useAnalytics hook
- Added Visitor class for status regarding the site visitor.
- Add first data approach
- Add Products and REST_Products basic classes
- Adds very basic product cards section component to my jetpack
- My Jetpack: Add Product Card component
- My Jetpack: check user connectivity before to hit wpcom side
- My Jetpack: Implement data handling for enable/disable products
- Removed endpoint plans superseded by purchases

### Changed
- Add Connections Section wrapping the Connection Status Card to My Jetpack
- Build: do not ship raw files in production bundle.

### Removed
- Remove unused usePlans() custom react hook

### Fixed
- Fixed svg attribute strokeWidth for Boost Card

## [0.3.3] - 2022-01-18
### Added
- Added redux store specific to my-jetpack
- Implement plans list properly in the PlansSection
- My Jetpack: Add scripts for JS tests
- My Jetpack: Include wordpress components as dep
- Reduxify purchases data

### Changed
- General: update required node version to v16.13.2
- Properly style the Plans Section according to proposed design
- Updated package dependencies.

## [0.3.2] - 2022-01-13
### Added
- My Jetpack: add story to `<PlanSection />` component
- My Jetpack: first PlanSection implementation

### Fixed
- Rename method enqueue_scritps to enqueue_scripts

## [0.3.1] - 2022-01-11
### Added
- Add devvelopment testing instructions to doc.

### Changed
- Updated package dependencies.

### Removed
- Remove use of deprecated `~` in sass-loader imports.

## [0.3.0] - 2022-01-04
### Changed
- Drop isRegistered and isUserConnected params from ConnectionStatusCard component
- Switch to pcov for code coverage.
- Updated package dependencies.
- Updated package textdomain from `jetpack` to `jetpack-my-jetpack`.

## [0.2.0] - 2021-12-14
### Added
- Added Connection Status Card to the page.
- Janitorial: add watch command to the plugin.

### Changed
- Adapt to new layout components.
- Build: do not ship scss and jsx files in production build.

### Fixed
- Build minimized JS for the production build.
- Fix JavaScript i18n strings.

## [0.1.3] - 2021-12-07
### Changed
- Updated package dependencies.

## [0.1.2] - 2021-11-30
### Added
- Janitorial: create mirror repo for the package.

### Changed
- Remove now-redundant `output.filename` from Webpack config.

## 0.1.1 - 2021-11-23
### Changed
- Updated package dependencies.

## 0.1.0 - 2021-11-17
### Added
- Created package

[5.21.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.20.2...5.21.0
[5.20.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.20.1...5.20.2
[5.20.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.20.0...5.20.1
[5.20.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.19.0...5.20.0
[5.19.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.18.0...5.19.0
[5.18.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.17.4...5.18.0
[5.17.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.17.3...5.17.4
[5.17.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.17.2...5.17.3
[5.17.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.17.1...5.17.2
[5.17.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.17.0...5.17.1
[5.17.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.8...5.17.0
[5.16.8]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.7...5.16.8
[5.16.7]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.6...5.16.7
[5.16.6]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.5...5.16.6
[5.16.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.4...5.16.5
[5.16.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.3...5.16.4
[5.16.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.2...5.16.3
[5.16.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.1...5.16.2
[5.16.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.16.0...5.16.1
[5.16.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.15.0...5.16.0
[5.15.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.14.5...5.15.0
[5.14.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.14.4...5.14.5
[5.14.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.14.3...5.14.4
[5.14.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.14.2...5.14.3
[5.14.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.14.1...5.14.2
[5.14.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.14.0...5.14.1
[5.14.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.13.1...5.14.0
[5.13.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.13.0...5.13.1
[5.13.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.12.0...5.13.0
[5.12.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.11.2...5.12.0
[5.11.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.11.1...5.11.2
[5.11.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.11.0...5.11.1
[5.11.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.10.1...5.11.0
[5.10.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.10.0...5.10.1
[5.10.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.9.2...5.10.0
[5.9.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.9.1...5.9.2
[5.9.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.9.0...5.9.1
[5.9.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.8.0...5.9.0
[5.8.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.7.3...5.8.0
[5.7.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.7.2...5.7.3
[5.7.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.7.1...5.7.2
[5.7.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.7.0...5.7.1
[5.7.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.6.0...5.7.0
[5.6.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.5.3...5.6.0
[5.5.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.5.2...5.5.3
[5.5.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.5.1...5.5.2
[5.5.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.5.0...5.5.1
[5.5.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.4.5...5.5.0
[5.4.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.4.4...5.4.5
[5.4.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.4.3...5.4.4
[5.4.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.4.2...5.4.3
[5.4.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.4.1...5.4.2
[5.4.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.4.0...5.4.1
[5.4.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.3.3...5.4.0
[5.3.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.3.2...5.3.3
[5.3.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.3.1...5.3.2
[5.3.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.3.0...5.3.1
[5.3.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.2.0...5.3.0
[5.2.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.1.2...5.2.0
[5.1.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.1.1...5.1.2
[5.1.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.1.0...5.1.1
[5.1.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.0.4...5.1.0
[5.0.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.0.3...5.0.4
[5.0.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.0.2...5.0.3
[5.0.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.0.1...5.0.2
[5.0.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/5.0.0...5.0.1
[5.0.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.37.0...5.0.0
[4.37.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.36.0...4.37.0
[4.36.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.16...4.36.0
[4.35.16]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.15...4.35.16
[4.35.15]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.14...4.35.15
[4.35.14]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.13...4.35.14
[4.35.13]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.12...4.35.13
[4.35.12]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.11...4.35.12
[4.35.11]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.10...4.35.11
[4.35.10]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.9...4.35.10
[4.35.9]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.8...4.35.9
[4.35.8]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.7...4.35.8
[4.35.7]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.6...4.35.7
[4.35.6]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.5...4.35.6
[4.35.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.4...4.35.5
[4.35.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.3...4.35.4
[4.35.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.2...4.35.3
[4.35.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.1...4.35.2
[4.35.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.35.0...4.35.1
[4.35.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.34.0...4.35.0
[4.34.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.33.1...4.34.0
[4.33.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.33.0...4.33.1
[4.33.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.32.4...4.33.0
[4.32.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.32.3...4.32.4
[4.32.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.32.2...4.32.3
[4.32.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.32.1...4.32.2
[4.32.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.32.0...4.32.1
[4.32.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.31.0...4.32.0
[4.31.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.30.0...4.31.0
[4.30.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.29.0...4.30.0
[4.29.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.28.0...4.29.0
[4.28.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.27.2...4.28.0
[4.27.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.27.1...4.27.2
[4.27.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.27.0...4.27.1
[4.27.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.26.0...4.27.0
[4.26.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.25.4...4.26.0
[4.25.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.25.3...4.25.4
[4.25.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.25.2...4.25.3
[4.25.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.25.1...4.25.2
[4.25.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.25.0...4.25.1
[4.25.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.24.7...4.25.0
[4.24.7]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.24.6...4.24.7
[4.24.6]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.24.5...4.24.6
[4.24.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.24.4...4.24.5
[4.24.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.24.3...4.24.4
[4.24.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.24.2...4.24.3
[4.24.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.24.1...4.24.2
[4.24.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.24.0...4.24.1
[4.24.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.23.3...4.24.0
[4.23.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.23.2...4.23.3
[4.23.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.23.1...4.23.2
[4.23.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.23.0...4.23.1
[4.23.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.22.3...4.23.0
[4.22.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.22.2...4.22.3
[4.22.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.22.1...4.22.2
[4.22.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.22.0...4.22.1
[4.22.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.21.0...4.22.0
[4.21.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.20.2...4.21.0
[4.20.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.20.1...4.20.2
[4.20.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.20.0...4.20.1
[4.20.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.19.0...4.20.0
[4.19.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.18.0...4.19.0
[4.18.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.17.1...4.18.0
[4.17.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.17.0...4.17.1
[4.17.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.16.0...4.17.0
[4.16.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.15.0...4.16.0
[4.15.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.14.0...4.15.0
[4.14.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.13.0...4.14.0
[4.13.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.12.1...4.13.0
[4.12.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.12.0...4.12.1
[4.12.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.11.0...4.12.0
[4.11.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.10.0...4.11.0
[4.10.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.9.2...4.10.0
[4.9.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.9.1...4.9.2
[4.9.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.9.0...4.9.1
[4.9.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.8.0...4.9.0
[4.8.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.7.0...4.8.0
[4.7.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.6.2...4.7.0
[4.6.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.6.1...4.6.2
[4.6.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.6.0...4.6.1
[4.6.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.5.0...4.6.0
[4.5.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.4.0...4.5.0
[4.4.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.3.0...4.4.0
[4.3.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.2.1...4.3.0
[4.2.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.2.0...4.2.1
[4.2.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.1.4...4.2.0
[4.1.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.1.3...4.1.4
[4.1.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.1.2...4.1.3
[4.1.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.1.1...4.1.2
[4.1.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.1.0...4.1.1
[4.1.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.0.3...4.1.0
[4.0.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.0.2...4.0.3
[4.0.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.0.1...4.0.2
[4.0.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/4.0.0...4.0.1
[4.0.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.12.2...4.0.0
[3.12.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.12.1...3.12.2
[3.12.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.12.0...3.12.1
[3.12.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.11.1...3.12.0
[3.11.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.11.0...3.11.1
[3.11.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.10.0...3.11.0
[3.10.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.9.1...3.10.0
[3.9.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.9.0...3.9.1
[3.9.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.8.2...3.9.0
[3.8.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.8.1...3.8.2
[3.8.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.8.0...3.8.1
[3.8.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.7.0...3.8.0
[3.7.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.6.0...3.7.0
[3.6.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.5.0...3.6.0
[3.5.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.4.5...3.5.0
[3.4.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.4.4...3.4.5
[3.4.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.4.3...3.4.4
[3.4.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.4.2...3.4.3
[3.4.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.4.1...3.4.2
[3.4.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.4.0...3.4.1
[3.4.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.3.3...3.4.0
[3.3.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.3.2...3.3.3
[3.3.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.3.1...3.3.2
[3.3.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.3.0...3.3.1
[3.3.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.2.1...3.3.0
[3.2.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.2.0...3.2.1
[3.2.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.1.3...3.2.0
[3.1.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.1.2...3.1.3
[3.1.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.1.1...3.1.2
[3.1.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.1.0...3.1.1
[3.1.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/3.0.0...3.1.0
[3.0.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.15.0...3.0.0
[2.15.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.14.3...2.15.0
[2.14.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.14.2...2.14.3
[2.14.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.14.1...2.14.2
[2.14.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.14.0...2.14.1
[2.14.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.13.0...2.14.0
[2.13.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.12.2...2.13.0
[2.12.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.12.1...2.12.2
[2.12.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.12.0...2.12.1
[2.12.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.11.0...2.12.0
[2.11.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.10.3...2.11.0
[2.10.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.10.2...2.10.3
[2.10.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.10.1...2.10.2
[2.10.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.10.0...2.10.1
[2.10.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.9.2...2.10.0
[2.9.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.9.1...2.9.2
[2.9.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.9.0...2.9.1
[2.9.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.8.1...2.9.0
[2.8.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.8.0...2.8.1
[2.8.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.13...2.8.0
[2.7.13]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.12...2.7.13
[2.7.12]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.11...2.7.12
[2.7.11]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.10...2.7.11
[2.7.10]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.9...2.7.10
[2.7.9]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.8...2.7.9
[2.7.8]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.7...2.7.8
[2.7.7]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.6...2.7.7
[2.7.6]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.5...2.7.6
[2.7.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.4...2.7.5
[2.7.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.3...2.7.4
[2.7.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.2...2.7.3
[2.7.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.1...2.7.2
[2.7.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.7.0...2.7.1
[2.7.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.6.1...2.7.0
[2.6.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.6.0...2.6.1
[2.6.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.5.2...2.6.0
[2.5.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.5.1...2.5.2
[2.5.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.5.0...2.5.1
[2.5.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.4.1...2.5.0
[2.4.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.4.0...2.4.1
[2.4.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.3.5...2.4.0
[2.3.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.3.4...2.3.5
[2.3.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.3.3...2.3.4
[2.3.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.3.2...2.3.3
[2.3.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.3.1...2.3.2
[2.3.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.3.0...2.3.1
[2.3.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.2.3...2.3.0
[2.2.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.2.2...2.2.3
[2.2.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.2.1...2.2.2
[2.2.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.2.0...2.2.1
[2.2.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.1.1...2.2.0
[2.1.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.1.0...2.1.1
[2.1.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.0.5...2.1.0
[2.0.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.0.4...2.0.5
[2.0.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.0.3...2.0.4
[2.0.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.0.2...2.0.3
[2.0.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.0.1...2.0.2
[2.0.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/2.0.0...2.0.1
[2.0.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.8.3...2.0.0
[1.8.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.8.2...1.8.3
[1.8.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.8.1...1.8.2
[1.8.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.8.0...1.8.1
[1.8.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.7.4...1.8.0
[1.7.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.7.3...1.7.4
[1.7.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.7.2...1.7.3
[1.7.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.7.1...1.7.2
[1.7.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.7.0...1.7.1
[1.7.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.6.2...1.7.0
[1.6.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.6.1...1.6.2
[1.6.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.6.0...1.6.1
[1.6.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.5.0...1.6.0
[1.5.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.4.1...1.5.0
[1.4.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.4.0...1.4.1
[1.4.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.3.0...1.4.0
[1.3.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.2.1...1.3.0
[1.2.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.2.0...1.2.1
[1.2.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.1.0...1.2.0
[1.1.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.0.2...1.1.0
[1.0.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/1.0.0...1.0.1
[1.0.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.13...1.0.0
[0.6.13]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.12...0.6.13
[0.6.12]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.11...0.6.12
[0.6.11]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.10...0.6.11
[0.6.10]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.9...0.6.10
[0.6.9]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.8...0.6.9
[0.6.8]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.7...0.6.8
[0.6.7]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.6...0.6.7
[0.6.6]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.5...0.6.6
[0.6.5]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.4...0.6.5
[0.6.4]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.3...0.6.4
[0.6.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.2...0.6.3
[0.6.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.1...0.6.2
[0.6.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.6.0...0.6.1
[0.6.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.5.0...0.6.0
[0.5.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.4.0...0.5.0
[0.4.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.3.3...0.4.0
[0.3.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.3.2...0.3.3
[0.3.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.3.1...0.3.2
[0.3.1]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.2.0...0.3.0
[0.2.0]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.1.3...0.2.0
[0.1.3]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.1.2...0.1.3
[0.1.2]: https://github.com/Automattic/jetpack-my-jetpack/compare/0.1.1...0.1.2
