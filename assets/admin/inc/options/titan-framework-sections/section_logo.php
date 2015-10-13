<?php
/**
 * Section LoadingLogo
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
add_action( 'tf_create_options', 'll_customizer_options_logo' );
function ll_customizer_options_logo() {

    // Initialize Titan
    $aa_tf = TitanFramework::getInstance( 'll' );

    /**
     * Logo Section & Panel Creation
     *
     * Section: $ll_section_logo
     * Panel  :  LoadingLogo Customizer
     *
     */
    $ll_section_logo = $aa_tf->createThemeCustomizerSection( array(

        // Section
        'name' => 'Logo',

        // Panel
        'panel' => 'LoadingLogo Customizer',

    ) );


    /**
     * Note
     *
     */
    $ll_section_logo->createOption( array(

        'type' => 'note',
        'desc' => 'Customize the logo, width, animation overlay or filter.'

    ) );

    /**
     * Option: Logo Image
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo.php' ) ) {
        require_once( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo.php' );
    }

    /**
     * Option: Logo Width
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo_width.php' ) ) {
        require_once( LL_DIR . '/assets/admin/inc/options/titan-framework-options/ll_option_logo_width.php' );
    }

}
