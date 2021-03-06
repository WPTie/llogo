<?php
/**
 * LoadingLogo Main File
 *
 * This is the main file of LoadingLogo which controls everything in this plugin
 *
 * @package LoadingLogo
 * @since 	0.0.1
 *
 */

/**
 * Titan Framework
 *
 * Adds TF for creating options
 *
 * @source https://github.com/gambitph/Titan-Framework
 * @since 0.0.1
 *
 */
if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework/titan-framework-embedder.php' ) ) {
    require_once( LL_DIR . '/assets/admin/inc/options/titan-framework/titan-framework-embedder.php' );
}


/**
 * LL Options
 *
 * Customizer sections, panel and option registrations are done inside this file
 *
 * @since 0.0.1
 *
 */
if ( file_exists( LL_DIR . '/assets/admin/inc/options/ll_options-init.php' ) ) {
    require_once( LL_DIR . '/assets/admin/inc/options/ll_options-init.php' );
}

/**
 * Scripts and Styles
 *
 * @since 0.0.1
 *
 */
if ( file_exists( LL_DIR . '/assets/inc/ll_scripts_styles.php' ) ) {
    require_once( LL_DIR . '/assets/inc/ll_scripts_styles.php' );
}
