<?php
/**
 * LoadingLogo FrontEnd
 *
 * FrontEnd of the plugin
 *
 * @package LoadingLogo
 * @since 	0.0.1
 */

// TODO:
//      1. All the comments are starting with TF options? Are you kidding? First line is the short definition of what you are doing. I changed line 18
//      2. Check the deps added by my in wp_register_script
//      3. Why are these scripts here? When there is a file called Scripts and styles for exactly this purpose? I think this file should not be made
//      
// Abort if called directly
if ( ! defined( 'WPINC' ) ) { die; }

add_action( 'wp_head', 'll_html_initialize' );
function ll_html_initialize() {
    
}