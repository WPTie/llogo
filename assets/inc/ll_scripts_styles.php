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
         */

        // Custom.js: This file performs the animation effects during page loading
        wp_enqueue_script(
            'll_customJS',
            LL_URL . '/assets/js/custom.js',
            array( 'jquery', 'll_vendorsJS' )
        ); // costom.js


        /**
         * This file output the essential html
         * needed for the overlay
         *
         */
        // wp_enqueue_script(
        //     'll_initializeJS',
        //     LL_URL . '/assets/js/initialize.js',
        //     array( 'jquery', 'll_vendorsJS', 'llcustomJS' )
        // );


        /**
         *
         *  Titan Framework is initialized here
         *
         */
        $aa_tf = TitanFramework::getInstance( 'll' );

        // Choose between Overlay or Filter Option
        $ll_animate_overlayORfilter = $aa_tf->getOption( 'll_option_animation' );

        // Overlay Animation Direction
        $ll_animate_direction = $aa_tf->getOption( 'll_option_direction' );

        // Image Filter Type
        $ll_animate_filter = $aa_tf->getOption( 'll_option_filter' );


        // Check for whether user has selected overlay or filter
        if ( $ll_animate_overlayORfilter == 'overlay' ) {


            if ($ll_animate_direction == 'lr') {
                wp_enqueue_script( 'll_overal_dir', LL_URL . '/assets/js/custom/left-to-right.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Left to Right script
           }

            elseif ($ll_animate_direction == 'rl') {
                wp_enqueue_script( 'll_overal_dir', LL_URL . '/assets/js/custom/right-to-left.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Right to Left script
            }

            elseif ($ll_animate_direction == 'tb') {
                wp_enqueue_script( 'll_overal_dir', LL_URL . '/assets/js/custom/top-to-bottom.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Top to Bottom script
            }

            elseif ($ll_animate_direction == 'bt') {
                wp_enqueue_script( 'll_overal_dir', LL_URL . '/assets/js/custom/bottom-to-top.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Bottom to Top script
            }

        }

        elseif ( $ll_animate_overlayORfilter == 'filter' ) {

            if ( $ll_animate_filter == 'sepia' ) {
                wp_enqueue_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/sepia.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Left to Right script
            }

            elseif ( $ll_animate_filter == 'blur' ) {
                wp_enqueue_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/blur.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Left to Right script
            }

            elseif ( $ll_animate_filter == 'invert' ) {
                wp_enqueue_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/invert.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Left to Right script
            }

            elseif ( $ll_animate_filter == 'hue_rotate' ) {
                wp_enqueue_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/hue-rotate.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Left to Right script
            }

            elseif ( $ll_animate_filter == 'opacity' ) {
                wp_enqueue_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/opacity.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Left to Right script
            }

            elseif ( $ll_animate_filter == 'grayscale' ) {
                wp_enqueue_script( 'll_customJs_filter', LL_URL . '/assets/js/custom/greyscale.js', array( 'jquery', 'll_vendorsJS', 'll_customJS' ) ); // Left to Right script
            }
        }


        /**
         * Style
         *
         *  style.min.css contains all the minified CSS from vendors and partials
         *
         * @since 0.0.1
         */

        // CSS
        wp_enqueue_style( 'll_style', LL_URL . '/assets/css/style.css', array() , '1.0', 'all' );

}

add_action( 'wp_head', 'll_html_initialize' );
function ll_html_initialize() {

    // Titan Framework is initialized here
    $aa_tf = TitanFramework::getInstance( 'll' );


    /**
     * Logo/Image Option
     */
    $ll_logo_attachmentID    = $aa_tf->getOption( 'll_option_logo' );
    $ll_logo_attachmentWidth = $aa_tf->getOption( 'll_option_logo_width' );
    $ll_logo_src             = wp_get_attachment_image_src( $ll_logo_attachmentID, 'large' );

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