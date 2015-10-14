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

        // Titan Framework is initialized here
        $aa_tf = TitanFramework::getInstance( 'll' );

    	// jQuery
        wp_enqueue_script( 'jquery' ); // Enqueue it!

        /**
         * Scripts
         *
         *     @vendor   loadgo.min.js
         *     @custom   custom.js, etc. TODO: list all custom js here.
         *
         * @since 0.0.1
         *
         */

        /**
         *
         * Vendor Scripts
         *
         */
        // loadgo.js
        wp_enqueue_script(
                'll_vendorsJS',
                LL_URL . '/assets/js/vendors/loadgo.min.js',
                array( 'jquery' )
            ); // Loadgo script

        /**
         *
         * Custom Scripts
         *
         *
         * @since 0.0.1
         *
         */
        // Get the logo image ID
        $ll_logo_attachmentID = $aa_tf->getOption( 'll_option_logo' );

        // Get the logo image source via the ID
        $ll_logo_src          = wp_get_attachment_image_src( $ll_logo_attachmentID, 'large' );

        // Placeholder logo imaage
        $ll_logo_src_fallback = LL_URL . '/assets/img/loadinglogo.png';

        // If empty then add Placeholder image else add the image source
        $ll_logo_src_final = empty($ll_logo_src) ? $ll_logo_src_fallback : $ll_logo_src[0];


        // Custom.js: This file performs the animation effects during page loading
        wp_register_script(
            'll_customJS',
            LL_URL . '/assets/js/custom/custom.js',
            array( 'jquery', 'll_vendorsJS' )
        ); // costom.js

        // For ll_customJS create a JS object called ll_logo and give it an
        // attribute called imgSrc accessable via ll_logo.imgSrc in the JS file
        wp_localize_script( 'll_customJS', 'll_logo', array( 'imgSrc' => $ll_logo_src_final ) );
        wp_enqueue_script( 'll_customJS' );


        /**
         *
         * Overlay and filters
         *
         * @since 0.0.2
         *
         */
        // Choose between Overlay or Filter Option
        $ll_animate_overlayORfilter = $aa_tf->getOption( 'll_option_animation' );

        // Overlay Animation Direction
        $ll_animate_direction = $aa_tf->getOption( 'll_option_direction' );

        // Image Filter Type
        $ll_animate_filter = $aa_tf->getOption( 'll_option_filter' );


        // TODO: use wp_localize_script
        // Check for whether user has selected overlay or filter
        if ( $ll_animate_overlayORfilter == 'overlay' ) {


            // Custom.js: This file performs the animation effects during page loading
            wp_register_script(
                'll_overlayJS',
                LL_URL . '/assets/js/custom/overlay.js',
                array( 'jquery', 'll_vendorsJS', 'll_customJS' )
            ); // overlay.js

            // For ll_overlayJS create a JS object called ll_overlay and give it an
            // attribute called dir accessable via ll_overlay.dir in the JS file
            wp_localize_script( 'll_overlayJS', 'll_overlay', array( 'dir' => $ll_animate_direction ) );
            wp_enqueue_script( 'll_overlayJS' );


        }

        elseif ( $ll_animate_overlayORfilter == 'filter' ) {

            // Custom.js: This file performs the animation effects during page loading
            wp_register_script(
                'll_filterJS',
                LL_URL . '/assets/js/custom/filter.js',
                array( 'jquery', 'll_vendorsJS', 'll_customJS' )
            ); // overlay.js

            // For ll_filterJS create a JS object called ll_filter and give it an
            // attribute called type accessable via ll_filter.type in the JS file
            wp_localize_script( 'll_filterJS', 'll_filter', array( 'type' => $ll_animate_filter ) );
            wp_enqueue_script( 'll_filterJS' );

        }


        /**
         * Style
         *
         * style.min.css contains all the minified CSS from vendors and partials
         *
         * @since 0.0.1
         */

        // CSS
        wp_enqueue_style( 'll_style', LL_URL . '/assets/css/style.css', array() , '1.0', 'all' );

}