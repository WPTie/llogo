<?php
/**
 * Option: Animation Check
 *
 * Section: Animation 
 *
 * @since 0.0.1
 * @package LoadingLogo
 *
 */

// if OPT_LL_ANIMATION_CHECK is defiend, use it's value( true/false )
// else use true and always display this option to the user
$ll_state = defined( 'OPT_LL_ANIMATION_CHECK' ) ? OPT_LL_ANIMATION_CHECK : true;

if ( $ll_state ) {

    $ll_section_animation->createOption( array(

        'id'            =>  'll_option_animation',
        'type'          =>  'radio',

        'name'          =>  'Animation',
        'desc'          =>  'Adds selected animation to your logo.',
        
        'options'       =>  array(

            'overlay'        =>  'Overlay',
            'filter'         =>  'Filter',

        ),
        'default'       =>  'overlay',

    ) );
}