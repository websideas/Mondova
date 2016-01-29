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
        }elseif($size == 'kt_grid' || $size == 'kt_masonry') {
            $imgage = KT_THEME_IMG . 'placeholder-recent.jpg';
        }elseif ($size == 'kt_classic'){
            $imgage = KT_THEME_IMG . 'placeholder-blogpost.jpg';
        }elseif($size == 'kt_list'){
            $imgage = KT_THEME_IMG . 'placeholder-list.jpg';
        }elseif($size == 'kt_small'){
            $imgage = KT_THEME_IMG . 'placeholder-small.jpg';
        }elseif($size == 'kt_zigzag'){
            $imgage = KT_THEME_IMG . 'placeholder-zigzag.jpg';
        }else{
            $imgage = KT_THEME_IMG . 'placeholder-post.jpg';
        }

        return $imgage;
    }
    add_filter('kt_placeholder', 'kt_placeholder_callback');
}


/**
 * Custom password form
 *
 * @return string
 */
function kt_password_form() {
    global $post;
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <p>' . __( "To view this protected post, enter the password below:", 'mondova' ) . '</p>
    <div class="input-group"><input name="post_password" type="password" size="20" maxlength="20" /><span class="input-group-btn"><input type="submit" class="btn btn-dark" name="Submit" value="' . esc_attr__( "Submit", 'mondova' ) . '" /></span></div>
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'kt_password_form' );


/*
add_filter('navigation_markup_template', 'kt_navigation_markup_template', 10, 2);
function kt_navigation_markup_template($template, $class){
    $disable_next = $disable_prev = '';
    if ( !get_previous_posts_link() ) {
        $disable_prev = '<span class="page-numbers prev disable">'._x( 'Previous', 'previous post','adroit' ).'</span>';
    }
    if ( !get_next_posts_link() ) {
        $disable_next = '<span class="page-numbers next disable">'._x( 'Next', 'next post','adroit' ).'</span>';
    }

    $template = '
	<nav class="navigation %1$s">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">'.$disable_prev.'%3$s'.$disable_next.'</div>
	</nav>';
    return $template;
}
*/






/**
 * Add page header
 *
 * @since 1.0
 */
add_action( 'kt_content_top', 'kt_page_header', 20 );
function kt_page_header( ){

    $title = kt_get_page_title();
    $subtitle = kt_get_page_subtitle();


    //$subtitle = 'creative online fashion shop';


    $title = '<h1 class="page-header-title">'.$title.'</h1>';
    if($subtitle != ''){
        $subtitle = '<div class="page-header-subtitle">'.$subtitle.'</div>';
    }

    $divider = '<div class="page-header-divider"><i class="icon_pens"></i></div>';


    $style = 'standard';
    //standard, fancy, fancy-tabbed

    if($style == 'fancy-tabbed'){
        $layout = '<div class="page-header %4$s"><div class="page-header-overlay"></div><div class="container">%3$s<div class="page-header-content"><div class="page-header-inner">%1$s %2$s</div></div></div></div>';
    }else{
        $layout = '<div class="page-header %4$s"><div class="page-header-overlay"></div><div class="container"><div class="page-header-content">%1$s %2$s %3$s</div></div></div>';
    }

    printf(
        $layout,
        $title,
        $subtitle,
        $divider,
        $style.'-heading'
    );

}


/**
 * Get page title
 *
 * @param string $title
 * @return mixed|void
 */

function kt_get_page_title( $title = '' ){
    global $post;

    if ( is_front_page() && !is_singular('page') ) {
        $title = esc_html__( 'Blog', 'wingman' );
    } elseif ( is_search() ) {
        $title = esc_html__( 'Search', 'wingman' );
    } elseif( is_home() ){
        $page_for_posts = get_option('page_for_posts', true);
        if($page_for_posts){
            $title = get_the_title($page_for_posts) ;
            $title = apply_filters( 'the_title', $title, $page_for_posts );
        }
    } elseif( is_404() ) {
        $title = esc_html__( 'Page not found', 'wingman' );
    } elseif ( is_archive() ){
        $title = get_the_archive_title();
        if(kt_is_wc()) {
            if (is_shop()) {
                $shop_page_id = get_option('woocommerce_shop_page_id');
                $title = get_the_title($shop_page_id);
            }
        }
    } elseif ( is_front_page() && is_singular('page') ){
        $page_on_front = get_option('page_on_front', true);
        $title = get_the_title($page_on_front) ;
        $title = apply_filters( 'the_title', $title, $page_on_front );
    } elseif( is_page() || is_singular() ){
        $post_id = $post->ID;
        $custom_text = rwmb_meta('_kt_page_header_custom', array(), $post_id);
        $title = ($custom_text != '') ? $custom_text : get_the_title($post_id);
        $title = apply_filters( 'the_title', $title, $post_id );
    }

    return apply_filters( 'kt_title', $title );

}


/**
 * Get page tagline
 *
 * @return mixed|void
 */

function kt_get_page_subtitle(){
    global $post;
    $tagline = '';
    if ( is_front_page() && !is_singular('page') ) {
        $tagline =  esc_html__('Lastest posts', 'wingman');
    }elseif( is_home() ){
        $page_for_posts = get_option('page_for_posts', true);
        $tagline = nl2br(rwmb_meta('_kt_page_header_subtitle', array(), $page_for_posts))  ;
    }elseif ( is_front_page() && is_singular('page') ){
        $tagline =  rwmb_meta('_kt_page_header_subtitle');
    }elseif ( is_archive() ){
        $tagline = get_the_archive_description( );
        if(kt_is_wc()){
            if(is_shop()){
                $shop_page_id = get_option( 'woocommerce_shop_page_id' );
                $tagline = rwmb_meta('_kt_page_header_subtitle', array(), $shop_page_id);
            }
            if( is_product_category() || is_product_tag() ){
                $tagline = '';
            }
        }
    }elseif(is_search()){
        $tagline = '';
    }elseif( $post ){
        $post_id = $post->ID;
        $tagline = nl2br(rwmb_meta('_kt_page_header_subtitle', array(), $post_id));
    }

    return apply_filters( 'kt_subtitle', $tagline );
}
