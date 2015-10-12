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
//      4. Why not use right names for values in titan instead of checking 1,2,3 it tells me nothing, so it is wrong. Discuss this with me.
// Abort if called directly
if ( ! defined( 'WPINC' ) ) { die; }

add_action( 'wp_head', 'll_html__initialize' );
function ll_html__initialize() {
    /**
     *  Framework is initialized here
     */
    $aa_tf = TitanFramework::getInstance( 'll' );

    /**
     * Titan Framework Option
     * Logo/Image Option
     */
    $ll_logo__attachmentID = $aa_tf->getOption( 'll_option__logo' );
    $ll_logo__size = $aa_tf->getOption( 'll_option__logo__size' );

    // TODO: Vertical spacing in if and else. I have added it.
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

    // TODO: create js files for these and enqueue them, they all must have jQuery dep.
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
            wp_register_script( 'll_customJs__direction', LL_URL . '/assets/js/custom/left-to-right.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Left to Right script
            wp_enqueue_script( 'll_customJs__direction' ); // Enqueue it!
	   }
        elseif ($ll_animate__direction == 2) {
            wp_register_script( 'll_customJs__direction', LL_URL . '/assets/js/custom/right-to-left.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Right to Left script
            wp_enqueue_script( 'll_customJs__direction' ); // Enqueue it!
        }
        elseif ($ll_animate__direction == 3) {
            wp_register_script( 'll_customJs__direction', LL_URL . '/assets/js/custom/top-to-bottom.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Top to Bottom script
            wp_enqueue_script( 'll_customJs__direction' ); // Enqueue it!
        }
        elseif ($ll_animate__direction == 4) {
            wp_register_script( 'll_customJs__direction', LL_URL . '/assets/js/custom/bottom-to-top.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Bottom to Top script
            wp_enqueue_script( 'll_customJs__direction' ); // Enqueue it!
        }
    }
    else {
        if ( $ll_animate__filter == 1 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/custom/sepia.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Left to Right script
            // wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/sepia.js', array( 'jquery', 'll_loadgoJs' ) ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 2 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/custom/blur.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 3 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/custom/invert.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 4 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/custom/hue-rotate.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 5 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/custom/opacity.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
        elseif ( $ll_animate__filter == 6 ) {
            wp_register_script( 'll_customJs__filter', LL_URL . '/assets/js/custom/greyscale.js', array( 'jquery', 'll_loadgoJs', 'll_customJs' ) ); // Left to Right script
            wp_enqueue_script( 'll_customJs__filter' ); // Enqueue it!
        }
    }

    // TODO:
    //      1. You need to add dependencey array for scripts to be loaded in right order, read at Codex. I have added it as the last arguement
    //      2. Don't you think that this should come before effects?
    wp_register_script( 'll_customJs', LL_URL . '/assets/js/main.js', array( 'jquery', 'll_loadgoJs' ) ); // Custom scripts
    wp_enqueue_script( 'll_customJs' ); // Enqueue it!
}