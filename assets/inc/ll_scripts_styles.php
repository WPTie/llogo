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

        /**
         * loadgo.min.js is enqueued
         * 
         */
        wp_register_script( 'll_loadgoJs', LL_URL . '/assets/js/vendors/loadgo.min.js', array( 'jquery' ) ); // Custom scripts
        wp_enqueue_script( 'll_loadgoJs' ); // Enqueue it!

        /**
         * This file output the essential html
         * needed for the overlay
         * 
         */
        wp_register_script( 'll_loadgo_html', LL_URL . '/assets/js/initialize.js', array( 'jquery', 'll_loadgoJs' ) ); // Left to Right script
        wp_enqueue_script( 'll_customJs_direction' ); // Enqueue it!

        /**
         *  Framework is initialized here
         */
        $aa_tf = TitanFramework::getInstance( 'll' );

        /**
         * Display Overlay or Filter Option
         * boolean
         */
        $ll_animate_overlayORfilter = $aa_tf->getOption( 'll_option_overlay_n_filter' );

        /**
         * Overlay Animation Direction
         */
        $ll_animate_direction = $aa_tf->getOption( 'll_option_direction' );

        /**
         * Image Filter
         */
        $ll_animate_filter = $aa_tf->getOption( 'll_option_filter' );
        
        /**
         * Check for whether user has selected 
         * overlay or filter
         * 
         */
        if ( $ll_animate_overlayORfilter == 1 ) {

            if ($ll_animate_direction == 'left_to_right') {

                wp_register_script( 'll_customJs_direction', LL_URL . '/assets/js/custom/left-to-right.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Left to Right script
                wp_enqueue_script( 'll_customJs_direction' ); // Enqueue it!

           }

            elseif ($ll_animate_direction == 'right_to_left') {

                wp_register_script( 'll_customJs_direction', LL_URL . '/assets/js/custom/right-to-left.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Right to Left script
                wp_enqueue_script( 'll_customJs_direction' ); // Enqueue it!

            }

            elseif ($ll_animate_direction == 'top_to_bottom') {

                wp_register_script( 'll_customJs_direction', LL_URL . '/assets/js/custom/top-to-bottom.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Top to Bottom script
                wp_enqueue_script( 'll_customJs_direction' ); // Enqueue it!

            }

            elseif ($ll_animate_direction == 'bottom_to_top') {

                wp_register_script( 'll_customJs_direction', LL_URL . '/assets/js/custom/bottom-to-top.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Bottom to Top script
                wp_enqueue_script( 'll_customJs_direction' ); // Enqueue it!

            }

        }

        else {

            if ( $ll_animate_filter == 'sepia' ) {

                wp_register_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/sepia.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Left to Right script
                wp_enqueue_script( 'll_customJs_filter' ); // Enqueue it!

            }

            elseif ( $ll_animate_filter == 'blur' ) {

                wp_register_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/blur.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Left to Right script
                wp_enqueue_script( 'll_customJs_filter' ); // Enqueue it!

            }

            elseif ( $ll_animate_filter == 'invert' ) {

                wp_register_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/invert.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Left to Right script
                wp_enqueue_script( 'll_customJs_filter' ); // Enqueue it!

            }

            elseif ( $ll_animate_filter == 'hue_rotate' ) {

                wp_register_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/hue-rotate.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Left to Right script
                wp_enqueue_script( 'll_customJs_filter' ); // Enqueue it!

            }

            elseif ( $ll_animate_filter == 'opacity' ) {

                wp_register_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/opacity.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Left to Right script
                wp_enqueue_script( 'll_customJs_filter' ); // Enqueue it!

            }

            elseif ( $ll_animate_filter == 'grayscale' ) {

                wp_register_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/greyscale.js', array( 'jquery', 'll_loadgoJs', 'll_loadgo_html' ) ); // Left to Right script
                wp_enqueue_script( 'll_customJs_filter' ); // Enqueue it!

            }
        }

        /**
         * This file performs the animation
         * effects during page loading
         */
        wp_register_script( 
            'll_customJs', 
            LL_URL . '/assets/js/main.js', 
            array( 'jquery', 'll_loadgoJs' ) 
        ); // Custom scripts
        wp_enqueue_script( 'll_customJs' ); // Enqueue it!

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

add_action( 'wp_head', 'll_html_initialize' );
function ll_html_initialize() {
    /**
     *  Framework is initialized here
     */
    $aa_tf = TitanFramework::getInstance( 'll' );

    /**
     * Logo/Image Option
     */
    $ll_logo_attachmentID = $aa_tf->getOption( 'll_option_logo' );

    $ll_logo_src = wp_get_attachment_image_src( $ll_logo_attachmentID, 'medium' );

    if ( empty($ll_logo_src) ) {
        $ll_logo_src = LL_URL . '/assets/img/loadinglogo.png'; ?>

        <script>
            jQuery(function($) {
                $('#aa_logo').attr('src', '<?php echo $ll_logo_src; ?>');
            });
        </script>

    <?php }

    else { ?>
        <script>
            jQuery(function($) {
                $('#aa_logo').attr('src', '<?php echo $ll_logo_src[0]; ?>');
            });
        </script>
<?php }
}