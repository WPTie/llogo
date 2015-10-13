<?php
/**
 * Section LoadingLogo Animation Check
 *
 * Creating customizer options via TF
 *
 * Getting started      : http://www.titanframework.net/get-started/
 * Customizer           : http://www.titanframework.net/theme-customizer-section/
 * Options              : http://www.titanframework.net/docs/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
 * Live preview         : http://www.titanframework.net/livepreview-parameter/
 *
 * @since 0.0.1
 * @package LoadingLogo
 *
 */


/**
 *
 * tf_create_options is the hook used to create options
 *
 */
add_action( 'tf_create_options', 'll_customizer_options_animation' );
function ll_customizer_options_animation() {

    // Initialize Titan
    $aa_tf = TitanFramework::getInstance( 'll' );

    /**
     * Animation Section & Panel Creation
     *
     * Section: $ll_section_logo
     * Panel  :  CF7 Customizer
     *
     */
    $ll_section_animation = $aa_tf->createThemeCustomizerSection( array(

        // Section
        'name' => 'Animation',

        // Panel
        'panel' => 'LoadingLogo',

    ) );


    /**
     * Note
     *
     */
    $ll_section_animation->createOption( array(

        'type' => 'note',
        'desc' => 'Select the animation to apply.'

    ) );

    /**
     * Option: Animation Check
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo_animation.php' ) ) {
        require_once( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo_animation.php' );
    }

    /**
     * Option: Overlay
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo_overlay.php' ) ) {
        require_once( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo_overlay.php' );
    }

    /**
     * Option: Filter
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo_filter.php' ) ) {
        require_once( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo_filter.php' );
    }

}
