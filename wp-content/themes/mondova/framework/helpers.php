<?php

/**
 * All helpers for theme
 *
 */

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Function check if WC Plugin installed
 */
function kt_is_wc(){
    return function_exists('is_woocommerce');
}

/**
 *  @true  if WPML installed.
 */
function  kt_is_wpml(){
    return class_exists('SitePress');
}



if (!function_exists('kt_option')){
    /**
     * Function to get options in front-end
     * @param int $option The option we need from the DB
     * @param string $default If $option doesn't exist in DB return $default value
     * @return string
     */

    function kt_option( $option = false, $default = false ){
        if($option === FALSE){
            return FALSE;
        }
        $kt_options = wp_cache_get( KT_THEME_OPTIONS );
        if(  !$kt_options ){
            $kt_options = get_option( KT_THEME_OPTIONS );
            wp_cache_delete( KT_THEME_OPTIONS );
            wp_cache_add( KT_THEME_OPTIONS, $kt_options );
        }

        if(isset($kt_options[$option]) && $kt_options[$option] !== ''){
            return $kt_options[$option];
        }else{
            return $default;
        }
    }
}


if (!function_exists('kt_sidebars')){
    /**
     * Get sidebars
     *
     * @return array
     */
    function kt_sidebars( ){
        $sidebars = array();
        foreach ( $GLOBALS['wp_registered_sidebars'] as $item ) {
            $sidebars[$item['id']] = $item['name'];
        }
        return $sidebars;
    }
}


if (!function_exists('kt_get_header')) {
    /**
     * Get Header
     *
     * @return string
     *
     */
    function kt_get_header(){
        $header = 'default';
        $header_position = '';

        if(is_page() || is_singular()){
            $header_position = rwmb_meta('_kt_header_position');
        }

        if($header_position){
            $header = $header_position;
        }
        return $header;
    }
}


if (!function_exists('kt_get_header_layout')) {
    /**
     * Get Header Layout
     *
     * @return string
     *
     */
    function kt_get_header_layout(){
        $layout = (isset($_REQUEST['header_layout'])) ?  isset($_REQUEST['header_layout']) : null;
        if(!$layout){
            $layout = kt_option('header', '1');
        }

        return $layout;
    }
}


if (!function_exists('kt_get_logo')){
    /**
     * Get logo of current page
     *
     * @return string
     *
     */
    function kt_get_logo(){
        $logo = array('default' => '', 'retina' => '');
        $logo_default = kt_option( 'logo' );
        $logo_retina = kt_option( 'logo_retina' );

        if(is_array($logo_default) && $logo_default['url'] != '' ){
            $logo['default'] = $logo_default['url'];
        }

        if(is_array($logo_retina ) && $logo_retina['url'] != '' ){
            $logo['retina'] = $logo_retina['url'];
        }

        if(!$logo['default']){
            $logo['default'] = KT_THEME_IMG.'logo.png';
            $logo['retina'] = KT_THEME_IMG.'logo-2x.png';
        }

        return $logo;
    }
}