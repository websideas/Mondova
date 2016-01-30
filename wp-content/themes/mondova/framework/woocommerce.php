<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Enable support for woocommerce after setip theme
 *
 */
add_action( 'after_setup_theme', 'kt_woocommerce_theme_setup' );
if ( ! function_exists( 'kt_woocommerce_theme_setup' ) ):
    function kt_woocommerce_theme_setup() {
        /**
         * Enable support for woocommerce
         */
        add_theme_support( 'woocommerce' );
    }
endif;

/*
function kt_disable_woocommerce_enable_setup_wizard(){
    return false;
}
add_filter('woocommerce_enable_setup_wizard', 'kt_disable_woocommerce_enable_setup_wizard');
*/

/**
 * Add custom style to woocommerce
 *
 */
function kt_wp_enqueue_scripts(){
    wp_enqueue_style( 'kt-woocommerce', KT_THEME_CSS . '/woocommerce.css' );
    wp_enqueue_script( 'kt-woocommerce', KT_THEME_JS . '/woocommerce.js', array( 'jquery', 'jquery-ui-accordion', 'jquery-ui-tabs' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'kt_wp_enqueue_scripts' );



/**
 * Define image sizes
 *
 *
 */
function kt_woocommerce_set_option() {
    global $pagenow;

    if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
        return;
    }

    $catalog = array('width' => '600','height' => '800', 'crop' => 1 );
    $thumbnail = array('width' => '100', 'height' => '133', 'crop' => 1 );
    //$single = array( 'width' => '1200','height' => '1600', 'crop' => 1);
    $single = array( 'width' => '750','height' => '1000', 'crop' => 1);
    $swatches = array( 'width' => '30','height' => '30', 'crop' => 1);

    // Image sizes
    update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
    update_option( 'shop_single_image_size', $single ); 		// Single product image
    update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
    update_option( 'swatches_image_size', $swatches ); 	        // Image swatches thumbs

}
add_action( 'after_switch_theme', 'kt_woocommerce_set_option', 1 );





/**
 * Woocommerce cart in header
 *
 * @since 1.0
 */
function kt_woocommerce_get_cart( $wrapper = true ){
    $output = '';
    if ( kt_is_wc() ) {
        $cart_total = WC()->cart->get_cart_total();
        $cart_count = WC()->cart->cart_contents_count;
        if( $wrapper == true ){
            $output .= '<div class="shopping-bag shopping-bag-cart">';
        }

        $output .= sprintf(
            '<a href="%s" class="%s">%s <span class="mini-cart-total">%s</span></a>',
            esc_url(WC()->cart->get_cart_url()),
            'header-cart',
            '<i class="icon_bag_alt"></i>',
            $cart_count
        );

        $output .= '<div class="shopping-bag-content woocommerce">';
        if ( sizeof(WC()->cart->cart_contents)>0 ) {

            $output .= '<div class="cart_block_desc">'.esc_html__( 'Recently added item(s)','wingman' ).'</div>';
            $output .= '<div class="bag-products mCustomScrollbar">';
            $output .= '<div class="bag-products-content">';
            foreach (WC()->cart->cart_contents as $cart_item_key => $cart_item) {
                $bag_product = $cart_item['data'];

                if ($bag_product->exists() && $cart_item['quantity']>0) {
                    $output .= '<div class="bag-product clearfix">';
                    $output .= '<figure><a class="bag-product-img" href="'.get_permalink($cart_item['product_id']).'">'.$bag_product->get_image().'</a></figure>';
                    $output .= '<div class="bag-product-details">';
                    $output .= '<h3 class="bag-product-title"><a href="'.get_permalink($cart_item['product_id']).'">' . apply_filters('woocommerce_cart_widget_product_title', $bag_product->get_title(), $bag_product) . '</a></h3>';

                    $output .= WC()->cart->get_item_data( $cart_item );

                    $output .= '<div class="bag-product-price">'.$cart_item['quantity'].'x'.wc_price($bag_product->get_price()).'</div>';

                    $output .= '</div>';
                    $output .= apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="#" data-itemkey="'.$cart_item_key.'" data-id="'.$cart_item['product_id'].'" class="remove" title="%s"></a>', esc_html__('Remove this item', 'woocommerce') ), $cart_item_key );

                    $output .= '</div>';
                }
            }
            $output .= '</div>';
            $output .= '</div>';

        }else{
            $output .=  "<p class='cart_block_desc no_products'>".esc_html__('Your cart is currently empty.', 'wingman')."</p>";
        }

        if ( sizeof(WC()->cart->cart_contents)>0 ) {
            $output .= '<div class="bag-total"><strong>'.esc_html__('Subtotal: ', 'wingman').'</strong>'.$cart_total.'</div><!-- .bag-total -->';
            $output .= '<div class="bag-buttons">';
            $output .= '<span><a href="'.esc_url( WC()->cart->get_cart_url() ).'" class="btn btn-default btn-block">'.esc_html__('View cart', 'wingman').'</a></span>';
            $output .= '<span><a href="'.esc_url( WC()->cart->get_checkout_url() ).'" class="btn btn-dark btn-block">'.esc_html__('Checkout', 'wingman').'</a></span>';
            $output .= '</div><!-- .bag-buttons -->';
        }

        $output .= '</div><!-- .shopping-bag-content -->';
        if( $wrapper == true ){
            $output .= '</div>';
        }
    }
    return $output;
}


/**
 * Woocommerce cart in header
 *
 * @since 1.0
 */
function kt_woocommerce_get_cart_mobile( $wrapper = true ){
    $output = '';
    if ( kt_is_wc() ) {
        $cart_count = WC()->cart->cart_contents_count;
        if( $wrapper == true ){
            $output .= '<a href="'.WC()->cart->get_cart_url().'" class="mobile-cart">';
        }
        $output .= '<i class="fa fa-shopping-cart"></i>';
        $output .= '<span class="mobile-cart-total">'.$cart_count.'</span>';

        if( $wrapper == true ){
            $output .= '</a>';
        }
    }
    return $output;
}


/**
 * Woocommerce replate cart in header
 *
 */
function kt_woocommerce_header_add_to_cart_fragment( $fragments ) {
    $fragments['.mini-cart'] = kt_woocommerce_get_cart();
    $fragments['.mobile-cart'] = kt_woocommerce_get_cart_mobile();
    return $fragments;
}
add_filter('add_to_cart_fragments', 'kt_woocommerce_header_add_to_cart_fragment');
