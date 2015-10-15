<?php
/**
 * Options init file
 *
 * This file includes all the sections of customizer options
 *
 * @since 0.0.1
 * @package llogo
 *
 */


/**
 * Tab: Logo
 *
 * Options :
 * 				1. Logo
 * 				2. Logo Width
 *
 * @since 0.0.1
 *
 */

if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework-sections/section-logo.php' ) ) {
    require_once( LL_DIR . '/assets/admin/inc/options/titan-framework-sections/section-logo.php' );
}

/**
 * Tab: Animation
 *
 * Options :
 * 				1. Overlay
 * 				2. Filter
 *
 * @since 0.0.1
 *
 */
if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework-sections/section-animation.php' ) ) {
    require_once( LL_DIR . '/assets/admin/inc/options/titan-framework-sections/section-animation.php' );
}