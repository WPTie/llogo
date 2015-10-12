<?php
/**
 * Options init file
 *
 * This file includes all the sections of customizer options
 *
 * @since 0.0.1
 * @package CFC
 *
 */


/**
 * Tab: General
 *
 * TODO:
 * 		1. Sections are not arranged wisely, 1, 3, 2, 4 is the right order, correct that.
 * 		2. Told you to build it all in customizer not admin panel, that's wrong.
 * 		3. Since you have not built in customizer, there is no sense in naming them sections,
 * 		4. Convert to customizer
 *
 * Options :
 * 				1. Logo
 * 				3. Select Animation Direction
 * 				2. Overlay or Filter
 * 				4. Select Filter
 *
 * @since 0.0.1
 *
 */
if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework-sections/admin-panel.php' ) ) {
    require_once( LL_DIR . '/assets/admin/inc/options/titan-framework-sections/admin-panel.php' );
}

