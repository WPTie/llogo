<?php
/**
 * Option: Filter
 *
 * Section: Animation
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_LL_LOGO_WIDTH is defiend, use it's value( true/false )
// else use true and always display this option to the user
$ll_state = defined( 'OPT_LL_LOGO_WIDTH' ) ? OPT_LL_LOGO_WIDTH : true;

if ( $ll_state ) {

    $ll_section_animation->createOption( array(

        'id'        => 'll_option_filter',
        'type'      => 'select',

        'name'      => 'Select Filter (Optional)',
        'desc'      => 'Use this option to select the filter to apply to your logo. (Works when you select filter in the option above.)',

        'options'   => array(
            'sepia'         =>      'Sepia',
            'blur'          =>      'Blur',
            'invert'        =>      'Invert',
            'hue_rotate'    =>      'Hue Rotate',
            'opacity'       =>      'Opacity',
            'grayscale'     =>      'Grayscale',
        ),
        'default'     => 'sepia',
        'livepreview' => ''

    ) );
}