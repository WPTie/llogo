<?php
/**
 * Scripts and Styles
 *
 * Enqueue all the scripts and styles through this file
 *
 * @package LoadingLogo
 * @since 	0.0.1
 */

// Abort if called directly
if ( ! defined( 'WPINC' ) ) { die; }

add_action( 'wp_enqueue_scripts', 'll_scripts_stlyes' );
function ll_scripts_stlyes() {

    	// jQuery
        wp_enqueue_script( 'jquery' ); // Enqueue it!

        /**
         * Scripts
         *
         * Minified and concatenated scripts
         *
         *     Order is important
         *     @vendors     vendors.min,js
         *     @custom      custom.min.js
         *
         * @since 0.0.1
         *
         */

        wp_register_script( 'll_loadgoJs', LL_URL . '/assets/js/vendors/loadgo.min.js', array( 'jquery' ) ); // Custom scripts
        wp_enqueue_script( 'll_loadgoJs' ); // Enqueue it!

        /**
         * Style
         *
         *  style.min.css contains all the minified CSS from vendors and partials
         *
         * @since 0.0.1
         */

        // CSS
        wp_register_style( 'll_style', LL_URL . '/assets/css/style.min.css', array() , '1.0', 'all' );
        wp_enqueue_style( 'll_style' ); // Enqueue it!

}