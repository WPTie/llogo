<?php
/**
 * Option: Logo Width
 *
 * Section: Logo 
 *
 * @since 0.0.1
 * @package LoadingLogo
 *
 */

// if OPT_LL_LOGO_WIDTH is defiend, use it's value( true/false )
// else use true and always display this option to the user
$ll_state = defined( 'OPT_LL_LOGO_WIDTH' ) ? OPT_LL_LOGO_WIDTH : true;

if ( $ll_state ) {

    $ll_section_logo->createOption( array(

        'id'            =>  'll_option_logo_width',
        'type'          =>  'number',

        'name'          =>  'Image Width',
        'desc'          =>  'Adds custom width in pixels (px) to your logo.',
        
        // 'default' => 'void',
        'min'           =>  '1',
        'max'           =>  '500',
    
        'css'           =>  '#aa_logo{ width: valuepx; }',

    ) );
}