<?php
/**
 * Plugin Name: LoadingLogo
 * Plugin URI: http://WPTie.com/
 * Description: LoadingLogo adds your logo with cool effects while the page loads itself.
 * Author: mrahmadawais, ashar, WPTie
 * Author URI: http://WPTie.com/
 * Text Domain: loading-logo
 * Version: 0.0.9
 * License: GPL v2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package llogo
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}


/**
 * Define global constants
 *
 * @package llogo
 * @since 0.0.1
 *
 */

// Plugin version
if ( ! defined( 'LL_VERSION' ) ) {
    define( 'LL_VERSION', '0.0.9' );
}

if ( ! defined( 'LL_NAME' ) ) {
    define( 'LL_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('LL_DIR' ) ) {
    define( 'LL_DIR', WP_PLUGIN_DIR . '/' . LL_NAME );
}

if ( ! defined('LL_URL' ) ) {
    define( 'LL_URL', WP_PLUGIN_URL . '/' . LL_NAME );
}

// Assets Path
$ll_assets  = LL_URL . '/assets/';


/**
 * LoadingLogo Main File
 *
 * This is the main file of LoadingLogo which controls everything in this plugin
 *
 * @since 0.0.1
 *
 */
if ( file_exists( LL_DIR . '/assets/inc/ll.php' ) ) {
    require_once( LL_DIR . '/assets/inc/ll.php' );
}

/**
 * Plugin Activation
 *
 * Add the welcome page transient
 *
 * @since 0.0.1
 * @package llogo
 *
 */
register_activation_hook( __FILE__, 'll_welcome_screen_activate' );

function ll_welcome_screen_activate() {
  set_transient( '_welcome_redirect_ll', true );
}


/**
 * Plugin Deactivation
 *
 * Delete the welcome page transient
 *
 * @since 0.0.1
 * @package llogo
 *
 */
register_deactivation_hook( __FILE__, 'll_welcome_screen_deactivate' );

function ll_welcome_screen_deactivate() {
  delete_transient( '_welcome_redirect_ll' );
}