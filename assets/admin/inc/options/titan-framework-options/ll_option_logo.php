<?php
/**
 * Option: Logo Image
 *
 * Section: Logo
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_LL_LOGO is defiend, use it's value( true/false )
// else use true and always display this option to the user
$ll_state = defined( 'OPT_LL_LOGO' ) ? OPT_LL_LOGO : true;

if ( $ll_state ) {

    $ll_section_logo->createOption( array(

        'id'            =>  'll_option_logo',
        'type'          =>  'upload',

        'name'          =>  'Logo',
        'desc'          =>  'Upload your logo',

        'size'          =>  'medium',
        'placeholder'   =>  'Your logo...'

    ) );
}