<?php
/**
 * Scripts and Styles
 *
 * Enqueue all the scripts and styles through this file
 *
 * @package LoadingLogo
 * @since 	0.0.1
 */

// TODO: Why JS folder has no vendor and custom folders? They mean something, you have mixed all files, correct that.
// Abort if called directly
if ( ! defined( 'WPINC' ) ) { die; }

add_action( 'wp_enqueue_scripts', 'll_scripts_stlyes' );
function ll_scripts_stlyes() {

    	// jQuery
        wp_enqueue_script( 'jquery' ); // Enqueue it!

        // TODO: Always try to keep the default jQuery since we are not allowed to change versions, so delete line 21 to 25
        // wp_deregister_script( 'jquery' );

        // wp_register_script( 'll_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js' ); // Custom scripts
        // wp_enqueue_script( 'll_jquery' ); // Enqueue it!

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

        // TODO: You need to add dependencey array for scripts to be loaded in right order, read at Codex. I have added it as the last arguement
        wp_register_script( 'll_loadgoJs', LL_URL . '/assets/js/loadgo.min.js', array( 'jquery' ) ); // Custom scripts
        wp_enqueue_script( 'll_loadgoJs' ); // Enqueue it!

        // wp_register_script( 'll_loadgoJs__initialize', LL_URL . '/assets/js/initialize.js' ); // Custom scripts
        // wp_enqueue_script( 'll_loadgoJs__initialize' ); // Enqueue it!



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

        // TODO: What is this doing here? Del it.
        // // Font
        // wp_register_style( 'cfc_g_font', 'http://fonts.googleapis.com/css?family=Roboto:300,400', array(), '1.0', 'all' );
        // wp_enqueue_style( 'cfc_g_font' ); // Enqueue it!

}