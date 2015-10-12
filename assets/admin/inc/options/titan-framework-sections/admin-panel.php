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

// TODO:
// 		1. ID is the most important attribute so it should be first, then name and dsc then anything else. Correct that.

/**
 *
 * tf_create_options is the hook used to create options
 *
 */
add_action( 'tf_create_options', 'll_options__admin' );

function ll_options__admin() {

    // Initialize Titan & options here
    $aa_tf = TitanFramework::getInstance( 'll' );

    // TODO: Why are the arrows not alligned? You do know you can do that by a Sublime package called Allignement? DO THAT! Look I alligned on in this one
    $aa_admin_panel = $aa_tf->createAdminPanel( array(
		'name'     => 'LoadingLogo',
		'icon'     => 'dashicons-dashboard',
		'position' => '26',
	) );

    // TODO: Where are comments? No option has any comments
	$aa_tab__general = $aa_admin_panel->createTab( array(
	    'name' => 'Settings',
	) );

	$aa_tab__general->createOption( array(
	    'name' => 'Logo',
	    'id' => 'll_option__logo',
	    'size' => 'medium',
	    'type' => 'upload',
	    'desc' => 'Upload your logo',
	    'placeholder' => 'Your logo...'
	) );

	// TODO: should have use better option names than 1,2,3 E.g. 'large' => 'Large'
	$aa_tab__general->createOption( array(
	    'name' => 'Logo Size',
	    'id' => 'll_option__logo__size',
	    'type' => 'select',
	    'options' => array(
	        '1' => 'Large',
	        '2' => 'Medium',
	        '3' => 'Small',
	    ),
	    'desc' => 'Use this option to select the size of logo.',
	    'default' => '2',
	) );


	$aa_tab__general->createOption( array(
	    'name' => 'Select Animation Direction',
	    'id' => 'll_option__direction',
	    'type' => 'select',
	    'options' => array(
	        '1' => 'Left to Right',
	        '2' => 'Right to Left',
	        '3' => 'Top to Bottom',
	        '4'	=>	'Bottom to Top',
	    ),
	    'desc' => 'Use this option to select the direction of animation.',
	    'default' => '1',
	) );


	$aa_tab__general->createOption( array(
	    'name' => 'Overlay or Filter',
	    'id' => 'll_option__overlay_n_filter',
	    'type' => 'enable',
	    'enabled' => 'Overlay',
	    'disabled' => 'Filter',
	    'default' => true,
	    'desc' => 'Select the effect to apply to your logo. You can select either an overlay or a filter to apply.',
	) );


	$aa_tab__general->createOption( array(
	    'name' => 'Select Filter (Optional)',
	    'id' => 'll_option__filter',
	    'type' => 'select',
	    'options' => array(
	        '1' => 'Sepia',
	        '2' => 'Blur',
	        '3' => 'Invert',
	        '4'	=>	'Hue Rotate',
	        '5' =>	'Opacity',
	        '6' =>	'Grayscale'
	    ),
	    'desc' => 'Use this option to select the filter to apply to your logo. (Works when you select filter in the option above.)',
	    'default' => '1',
	) );

	// TODO: Leave two free lines for anything new, e.g. before and after the code for an option. Correct that.
	$aa_tab__general->createOption( array(
		'type' => 'save'
	) );

}
