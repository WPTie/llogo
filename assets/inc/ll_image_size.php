<?php 
/**
 * Image Sizes
 *
 * Add new image sizes 
 *
 * @package LoadingLogo
 * @since 	0.0.1
 */

// Abort if called directly
if ( ! defined( 'WPINC' ) ) { die; }

add_action( 'init', 'll_register_logo_size' );
function ll_register_logo_size(){
    // Image sizes for plugin
    add_image_size( 'll_logo__size_large', 500, '' ); // Large Logo
    add_image_size( 'll_logo__size_medium', 300, '' ); // Medium Logo
    add_image_size( 'll_logo__size_small', 150, '' ); // Small Logo
}