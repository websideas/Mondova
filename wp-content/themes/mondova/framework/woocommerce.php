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
 * Woocommerce wishlist in header
 *
 * @since 1.0
 */
function kt_woocommerce_get_wishlist( ){
    if ( kt_is_wc() && defined( 'YITH_WOOCOMPARE' ) ) {
        kt_cart_wishlist();
    }
}


/**
 * WishList Link
 * Displayed a link to the cart including the number of items present and the cart total
 * @param  array $settings Settings
 * @return array           Settings
 * @since  1.0.0
 */
if ( ! function_exists( 'kt_cart_wishlist' ) ) {
    function kt_cart_wishlist() {
        global $yith_wcwl;
        printf(
            '<a href="%s" class="%s" title="%s">%s<span class="amount">%s</span></a>',
            esc_url( $yith_wcwl->get_wishlist_url() ),
            'wishlist-contents',
            __( 'View your wishlist', 'storefront' ),
            '<i class="icon_heart_alt"></i>',
            sprintf('%02s', $yith_wcwl->count_products())
        );
        ?>
        <div class="shopping-bag-content woocommerce widget_shopping_cart">
            <ul class="cart_list product_list_widget ">
            <?php
                $args = array( 'is_default' => 1 );
                $wishlist_items = $yith_wcwl->get_products($args);
                if( count( $wishlist_items ) > 0 ) {
                    foreach( $wishlist_items as $item ) {
                        global $product;
                        if( function_exists( 'wc_get_product' ) ) {
                            $product = wc_get_product( $item['prod_id'] );
                        }
                        else{
                            $product = get_product( $item['prod_id'] );
                        }

                        if( $product !== false && $product->exists() ){
                            ?>
                            <li class="mini_cart_item">
                                <a class="minicart_product" href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item['prod_id'] ) ) ) ?>">
                                    <?php echo $product->get_image() ?>
                                    <?php echo apply_filters( 'woocommerce_in_cartproduct_obj_title', $product->get_title(), $product ) ?>
                                </a>
                                <div class="minicart_product_infos">
                                    <?php
                                    if( is_a( $product, 'WC_Product_Bundle' ) ){
                                        if( $product->min_price != $product->max_price ){
                                            echo sprintf( '%s - %s', wc_price( $product->min_price ), wc_price( $product->max_price ) );
                                        }
                                        else{
                                            echo wc_price( $product->min_price );
                                        }
                                    }
                                    elseif( $product->price != '0' ) {
                                        echo $product->get_price_html();
                                    }
                                    else {
                                        echo apply_filters( 'yith_free_text', __( 'Free!', 'yith-woocommerce-wishlist' ) );
                                    }
                                    ?>
                                </div>
                            </li>
                            <?php
                        }
                    }

                }else{
                    printf('<li class="cart-desc empty">%s</li>', esc_html__('Your wishlist is empty.', 'mondova') );
                }
            ?>
            </ul>
            <?php if( count( $wishlist_items ) > 0 ) { ?>
                <p class="buttons-wishlish">
                    <?php
                        printf(
                            '<span><a class="btn btn-default btn-block wc-forward" href="%s">%s</a></span>',
                            esc_url( $yith_wcwl->get_wishlist_url() ),
                            esc_html__('View Wishlist', 'mondova')
                        )
                    ?>
                </p>
            <?php } ?>
        </div>
        <?php
    }
}

/**
 * Woocommerce cart in header
 *
 * @since 1.0
 */
function kt_woocommerce_get_cart( ){
    if ( kt_is_wc() ) {
        kt_cart_link();
        if ( !is_cart() ) {
            ?>
            <div class="shopping-bag-content woocommerce widget_shopping_cart">
                <?php the_widget('WC_Widget_Cart', 'title='); ?>
            </div><!-- .shopping-bag-content -->
            <?php
        }
    }
}


/**
 * Cart Link
 * Displayed a link to the cart including the number of items present and the cart total
 * @param  array $settings Settings
 * @return array           Settings
 * @since  1.0.0
 */
if ( ! function_exists( 'kt_cart_link' ) ) {
    function kt_cart_link() {
        printf(
            '<a href="%s" class="%s" title="%s">%s<span class="amount">%s</span></a>',
            esc_url( WC()->cart->get_cart_url() ),
            'cart-contents',
            __( 'View your shopping cart', 'storefront' ),
            '<i class="icon_bag_alt"></i>',
            sprintf('%02s', WC()->cart->get_cart_contents_count())
        );
    }
}


/**
 * Cart Fragments
 * Ensure cart contents update when products are added to the cart via AJAX
 * @param  array $fragments Fragments to refresh via AJAX
 * @return array            Fragments to refresh via AJAX
 */
if ( ! function_exists( 'kt_cart_link_fragment' ) ) {
    function kt_cart_link_fragment( $fragments ) {
        ob_start();
        kt_cart_link();
        $fragments['a.cart-contents'] = ob_get_clean();
        return $fragments;
    }
}





if (!function_exists('kt_get_woo_sidebar')) {
    /**
     * Get woo sidebar
     *
     * @param null $post_id
     * @return array
     */
    function kt_get_woo_sidebar( $post_id = null )
    {


        $sidebar = array('sidebar_area' => '');
        $requestCustom = false;

        if(isset($_REQUEST['sidebar'])){
            $sidebar['sidebar'] = $_REQUEST['sidebar'];
            $requestCustom = true;
        }

        if(is_product() || $post_id || is_shop()){
            if(is_shop() && !$post_id){
                $post_id = get_option( 'woocommerce_shop_page_id' );
            }
            global $post;
            if(!$post_id) $post_id = $post->ID;


            if(!isset($sidebar['sidebar'])){
                $sidebar['sidebar'] = rwmb_meta('_kt_sidebar', array(), $post_id);
            }
            if($sidebar['sidebar'] == '' || $sidebar['sidebar'] == 'default' || $requestCustom){

                if(!$requestCustom){
                    if(is_shop()) {
                        $sidebar['sidebar'] = kt_option('shop_sidebar', 'left');
                    }else{
                        $sidebar['sidebar'] = kt_option('product_sidebar', 'full');
                    }
                }
                if($sidebar['sidebar'] == 'left' ){
                    if(is_shop()){
                        $sidebar['sidebar_area'] = kt_option('shop_sidebar_left', 'primary-widget-area');
                    }else{
                        $sidebar['sidebar_area'] = kt_option('product_sidebar_left', 'primary-widget-area');
                    }
                }elseif($sidebar['sidebar'] == 'right'){
                    if(is_shop()){
                        $sidebar['sidebar_area'] = kt_option('shop_sidebar_right', 'primary-widget-area');
                    }else{
                        $sidebar['sidebar_area'] = kt_option('product_sidebar_right', 'primary-widget-area');
                    }
                }
            }elseif($sidebar['sidebar'] == 'left'){
                $sidebar['sidebar_area'] = rwmb_meta('_kt_left_sidebar', array(), $post_id);
            }elseif($sidebar['sidebar'] == 'right'){
                $sidebar['sidebar_area'] = rwmb_meta('_kt_right_sidebar', array(), $post_id);
            }



        }elseif( is_product_taxonomy() || is_product_tag()){
            if(!isset($sidebar['sidebar'])) {
                $sidebar['sidebar'] = kt_option('shop_sidebar', 'left');
            }

            if($sidebar['sidebar'] == 'left' ){
                $sidebar['sidebar_area'] = kt_option('shop_sidebar_left', 'primary-widget-area');
            }elseif($sidebar['sidebar'] == 'right'){
                $sidebar['sidebar_area'] = kt_option('shop_sidebar_right', 'primary-widget-area');
            }
        }elseif(is_cart()){
            $sidebar['sidebar'] = 'full';
        }elseif(is_page()){
            global $post;
            if(!$post_id) $post_id = $post->ID;

            if(!isset($sidebar['sidebar'])){
                $sidebar['sidebar'] = rwmb_meta('_kt_sidebar', array(), $post_id);
            }

            if($sidebar['sidebar'] == '' || $sidebar['sidebar'] == 'default' || $requestCustom){
                if(!$requestCustom){
                    $sidebar['sidebar'] = kt_option('sidebar', 'full');
                }
                if($sidebar['sidebar'] == 'left' ){
                    $sidebar['sidebar_area'] = kt_option('shop_sidebar_left', 'primary-widget-area');
                }elseif($sidebar['sidebar'] == 'right'){
                    $sidebar['sidebar_area'] = kt_option('shop_sidebar_right', 'primary-widget-area');
                }
            }elseif($sidebar['sidebar'] == 'left'){
                $sidebar['sidebar_area'] = rwmb_meta('_kt_left_sidebar', array(), $post_id);
            }elseif($sidebar['sidebar'] == 'right'){
                $sidebar['sidebar_area'] = rwmb_meta('_kt_right_sidebar', array(), $post_id);
            }
        }
        return apply_filters('kt_wc_sidebar', $sidebar);
    }
}






/**
 * Display Gird List toogle
 *
 *
 */

function kt_woocommerce_gridlist_toggle(){ ?>
    <?php $gridlist = apply_filters('woocommerce_gridlist_toggle', kt_get_gridlist_toggle()) ?>
    <ul class="gridlist-toggle">
        <li>
            <a class="list<?php if($gridlist == 'list'){ ?> active<?php } ?>" data-placement="top" data-toggle="tooltip" href="#" title="<?php _e('List view', 'wingman') ?>" data-layout="list" data-remove="grid">
                <i class="icon_grid-2x2"></i>
            </a>
        </li>
        <li>
            <a class="grid<?php if($gridlist == 'grid'){ ?> active<?php } ?>" data-placement="top" data-toggle="tooltip" href="#" title="<?php _e('Grid view', 'wingman') ?>" data-layout="grid" data-remove="list">
                <i class="icon_menu"></i>
            </a>
        </li>
    </ul>
<?php }


/**
 *
 * Ajax Update posts layout
 *
 *
 */
function kt_frontend_update_posts_layout(){
    WC()->session->set( 'products_layout', $_REQUEST['layout']);
}

add_action( 'wp_ajax_frontend_update_posts_layout', 'kt_frontend_update_posts_layout' );
add_action( 'wp_ajax_nopriv_frontend_update_posts_layout', 'kt_frontend_update_posts_layout' );

/**
 * Get Grid or List layout.
 *
 * Return the layout of products
 *
 * @return string layout of products.
 *
 *
 */
function kt_get_gridlist_toggle( $layout = 'grid' ){
    if(isset($_REQUEST['view'])){
        return $_REQUEST['view'];
    }elseif ( WC()->session->__isset( 'products_layout' ) ) {
        return WC()->session->__get( 'products_layout' );
    }else{
        return kt_option('shop_products_layout', $layout);
    }
}



function kt_woocommerce_product_loop_start_callback($classes){
    if(is_product_category() || is_shop() || is_product_tag()){
        $products_layout = kt_get_gridlist_toggle();
        $classes .= ' '.$products_layout;
    }
    return $classes;
}








if ( !function_exists('kt_product_shop_count') ) {
    function kt_product_shop_count() {
        $default_count = $products_per_page = kt_option('products_per_page', 12);
        $count = isset($_GET['per_page']) ? $_GET['per_page'] : $default_count;
        if ( $count === 'all' ) {
            $count = -1;
        } else if ( !is_numeric($count) ) {
            $count = $default_count;
        }
        return $count;
    }
}


function kt_woocommerce_catalog_orderby( ){
    return array(
        'menu_order' => __( 'Default sorting', 'mondova' ),
        'popularity' => __( 'Popularity', 'mondova' ),
        'rating'     => __( 'Average rating', 'mondova' ),
        'date'       => __( 'Newness', 'mondova' ),
        'price'      => __( 'Price: low to high', 'mondova' ),
        'price-desc' => __( 'Price: high to low', 'mondova' )
    );
}

function kt_woocommerce_shop_loop(){
    ?>
    <div class="products-tools">
        <?php
        kt_woocommerce_gridlist_toggle();
        woocommerce_catalog_ordering();
        woocommerce_result_count();
        ?>
    </div>
    <?php
}


/**
 * Change columns of shop
 *
 */

add_filter( 'loop_shop_columns', 'kt_woo_shop_columns' );
function kt_woo_shop_columns( $columns ) {
    $cols =  kt_option('shop_gird_cols', 3);
    if(isset($_REQUEST['cols'])){
        $cols = $_REQUEST['cols'];
    }


    return $cols ;
}


/**
 * KT WooCommerce hooks
 *
 * @package mondova
 */


if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
    add_filter( 'woocommerce_add_to_cart_fragments', 'kt_cart_link_fragment' );
} else {
    add_filter( 'add_to_cart_fragments', 'kt_cart_link_fragment' );
}

add_filter( 'loop_shop_columns', 'kt_woo_shop_columns' );
add_filter( 'loop_shop_per_page', 'kt_product_shop_count');
add_filter('woocommerce_catalog_orderby', 'kt_woocommerce_catalog_orderby');
add_filter('woocommerce_show_page_title', '__return_false');
add_filter( 'woocommerce_product_loop_start', 'kt_woocommerce_product_loop_start_callback' );

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);


add_action( 'woocommerce_before_shop_loop', 'kt_woocommerce_shop_loop');



