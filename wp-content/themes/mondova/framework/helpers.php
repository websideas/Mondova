<?php

/**
 * All helpers for theme
 *
 */

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;




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
        $layout = kt_option('header', 'layout1');
        return $layout;
    }
}

