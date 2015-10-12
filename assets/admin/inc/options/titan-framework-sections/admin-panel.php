<?php
/**
 * Admin Panel
 *
 * Creating LoadingLogo options via TF
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
add_action( 'tf_create_options', 'll_options_admin' );

function ll_options_admin() {

    // Initialize Titan & options here
    $aa_tf = TitanFramework::getInstance( 'll' );

    $aa_admin_panel = $aa_tf->createAdminPanel( array(

		'name'     		=> 		'LoadingLogo',

		'icon'     		=> 		'dashicons-dashboard',

		'position' 		=> 		'26',

	) );

    // TODO: Where are comments? No option has any comments
	$aa_tab_general = $aa_admin_panel->createTab( array(

	    'name' => 'Settings',

	) );

	$aa_tab_general->createOption( array(

		'id' 			=> 	'll_option_logo',
		'type' 			=> 	'upload',

	    'name' 			=> 	'Logo',
	    'desc' 			=> 	'Upload your logo',
	    
	    'size' 			=> 	'medium',
	    'placeholder' 	=> 	'Your logo...'

	) );

	$aa_tab_general->createOption( array(

		'id' 		=> 		'll_option_logo_size',
	    'type' 		=> 		'select',

	    'name' 		=> 		'Logo Size',
	    'desc' 		=> 		'Use this option to select the size of logo.',
	    
	    'options' 	=> 		array(
	        'large' 	=> 		'Large',
	        'medium' 	=> 		'Medium',
	        'small' 	=> 		'Small',
	    ),
	    'default' 	=> 		'medium',

	) );


	$aa_tab_general->createOption( array(

		'id' 		=> 		'll_option_direction',
	    'type' 		=> 		'select',

	    'name' 		=> 		'Select Animation Direction',
	    'desc' 		=> 		'Use this option to select the direction of animation.',
	    
	    'options' 	=> 		array(
	        'left_to_right' 	=> 		'Left to Right',
	        'right_to_left' 	=> 		'Right to Left',
	        'top_to_bottom' 	=> 		'Top to Bottom',
	        'bottom_to_top'		=>		'Bottom to Top',
	    ),
	    'default' 	=> 		'1',

	) );


	$aa_tab_general->createOption( array(

		'id' 		=> 'll_option_overlay_n_filter',
	    'type' 		=> 'enable',

	    'name' 		=> 'Overlay or Filter',
	    'desc' 		=> 'Select the effect to apply to your logo. You can select either an overlay or a filter to apply.',

	    'enabled' 	=> 'Overlay',
	    'disabled' 	=> 'Filter',
	    'default' 	=> true,
	    
	) );


	$aa_tab_general->createOption( array(

		'id' 		=> 'll_option_filter',
	    'type' 		=> 'select',

	    'name' 		=> 'Select Filter (Optional)',
	    'desc' 		=> 'Use this option to select the filter to apply to your logo. (Works when you select filter in the option above.)',

	    'options' 	=> array(
	        'sepia' 		=> 		'Sepia',
	        'blur' 			=> 		'Blur',
	        'invert' 		=> 		'Invert',
	        'hue_rotate'	=>		'Hue Rotate',
	        'opacity' 		=>		'Opacity',
	        'grayscale' 	=>		'Grayscale',
	    ),
	    'default' 	=> '1',

	) );

	// TODO: Leave two free lines for anything new, e.g. before and after the code for an option. Correct that.
	$aa_tab_general->createOption( array(

		'type' => 'save'

	) );

}
