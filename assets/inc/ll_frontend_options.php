<?php 
/**
 * LoadingLogo FrontEnd
 *
 * FrontEnd of the plugin
 *
 * @package LoadingLogo
 * @since 	0.0.1
 */

// Abort if called directly
if ( ! defined( 'WPINC' ) ) { die; }

add_action( 'wp_head', 'll_html__initialize' );
function ll_html__initialize() { 
    /**
     *  Titan Framework options
     *  Framework is initialized here
     */
    $aa_tf = TitanFramework::getInstance( 'll' );

    /**
     * Titan Framework Option
     * Logo/Image Option
     */
    $ll_logo__attachmentID = $aa_tf->getOption( 'll_option__logo' );
    $ll_logo__size = $aa_tf->getOption( 'll_option__logo__size' );
    if ( $ll_logo__size == 1 ) {
        $ll_logo__size = 'll_logo__size_large';
    }
    elseif ( $ll_logo__size == 2 ) {
        $ll_logo__size = 'll_logo__size_medium';
    }
    elseif ( $ll_logo__size == 3 ) {
        $ll_logo__size = 'll_logo__size_small';
    }
    $ll_logo__src = wp_get_attachment_image_src( $ll_logo__attachmentID, $ll_logo__size );

    /**
     * Titan Framework Option
     * Display Overlay or Filter Option
     * boolean
     */
    $ll_animate__overlayORfilter = $aa_tf->getOption( 'll_option__overlay_n_filter' );

    /**
     * Titan Framework Option
     * Overlay Animation Direction
     */
    $ll_animate__direction = $aa_tf->getOption( 'll_option__direction' );
   
    /**
     * Titan Framework Option
     * Image Filter
     */
    $ll_animate__filter = $aa_tf->getOption( 'll_option__filter' ); 

    /**
     * Check if the logo exists
     */
    if ( empty($ll_logo__src) ) {
        $ll_logo__src = LL_URL . '/assets/img/loadinglogo.png'; ?>
        <script>
            jQuery(function($) {
                $("body").prepend("<!-- Preloader --><div id='preloader'><div id='cell'><div class='position'><img id='logo' src=' <?php echo $ll_logo__src ?> ' alt='Logo' /></div></div></div><!-- / Preloader -->");
            });
        </script>

<?php }
    else { ?>
        <script>
            jQuery(function($) {
                $("body").prepend("<!-- Preloader --><div id='preloader'><div id='cell'><div class='position'><img id='logo' src=' <?php echo $ll_logo__src[0] ?> ' alt='Logo' /></div></div></div><!-- / Preloader -->");
            });
        </script>
<?php }

    if ( $ll_animate__overlayORfilter == 1 ) {
        if ($ll_animate__direction == 1) { 
            wp_register_script( 'll_customJs__direction', LL_URL . '/assets/js/left-to-right.js' ); // Left to Right script
            wp_enqueue_script( 'll_customJs__direction' ); // Enqueue it! 
	   }
        elseif ($ll_animate__direction == 2) {
            wp_register_script( 'll_customJs__direction', LL_URL . '/assets/js/right-to-left.js' ); // Right to Left script
            wp_enqueue_script( 'll_customJs__direction' ); // Enqueue it!
        }
        elseif ($ll_animate__direction == 3) {
            wp_register_script( 'll_customJs__direction', LL_URL . '/assets/js/top-to-bottom.js' ); // Top to Bottom script
            wp_enqueue_script( 'll_customJs__direction' ); // Enqueue it!
        }
        elseif ($ll_animate__direction == 4) {
            wp_register_script( 'll_customJs__direction', LL_URL . '/assets/js/bottom-to-top.js' ); // Bottom to Top script
            wp_enqueue_script( 'll_customJs__direction' ); // Enqueue it!
        }
    }
    else {
        if ( $ll_animate__filter == 1 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/sepia.js' ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 2 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/blur.js' ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 3 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/invert.js' ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 4 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/hue-rotate.js' ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 5 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/opacity.js' ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 6 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/greyscale.js' ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
    }

    wp_register_script( 'll_customJs', LL_URL . '/assets/js/main.js' ); // Custom scripts
    wp_enqueue_script( 'll_customJs' ); // Enqueue it!
}