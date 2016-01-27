<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;


/**
 * Flag boolean.
 *
 * @param $input string
 * @return boolean
 */
function kt_sanitize_boolean_callback( $input = '' ) {
    $input = (string)$input;
    return in_array($input, array('1', 'true', 'y', 'on'));
}
add_filter( 'kt_sanitize_boolean', 'kt_sanitize_boolean_callback', 15 );




if(!function_exists('kt_placeholder_callback')) {
    /**
     * Return PlaceHolder Image
     * @param string $size
     * @return string
     */
    function kt_placeholder_callback($size = '')
    {

        $placeholder = kt_option('archive_placeholder');
        if(is_array($placeholder) && $placeholder['id'] != '' ){
            $obj = kt_get_thumbnail_attachment($placeholder['id'], $size);
            $imgage = $obj['url'];
        }elseif($size == 'kt_recent_posts' || $size == 'kt_recent_posts_masonry') {
            $imgage = KT_THEME_IMG . 'placeholder-recent.jpg';
        }elseif ($size == 'kt_blog_post' || $size == 'kt_blog_post_sidebar'){
            $imgage = KT_THEME_IMG . 'placeholder-blogpost.jpg';
        }else{
            $imgage = KT_THEME_IMG . 'placeholder-post.jpg';
        }

        return $imgage;
    }
    add_filter('kt_placeholder', 'kt_placeholder_callback');
}