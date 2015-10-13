<?php
/**
 * Option: Overlay
 *
 * Section: Animation 
 *
 * @since 0.0.1
 * @package LoadingLogo
 *
 */

// if OPT_LL_OVERLAY is defiend, use it's value( true/false )
// else use true and always display this option to the user
$ll_state = defined( 'OPT_LL_OVERLAY' ) ? OPT_LL_OVERLAY : true;

if ( $ll_state ) {

    $ll_section_animation->createOption( array(

        'id'        =>      'll_option_direction',
        'type'      =>      'select',

        'name'      =>      'Overlay Direction',
        'desc'      =>      'Use this option to select the direction of animation.',
        
        'options'   =>      array(
            'lr'     =>      'Left to Right',
            'rl'     =>      'Right to Left',
            'tb'     =>      'Top to Bottom',
            'bt'     =>      'Bottom to Top',
        ),
        'default'   =>      'lr',
    
        //'css'           =>  '#aa_logo{ width: valuepx; }',

    ) );
}