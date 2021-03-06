<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<form role="search" method="get" class="woocommerce-product-search searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
    <div class="wrap_product_cat">
        <?php
        $args = array(
            'taxonomy' => 'product_cat',
            'id' => 'cat_'.rand(),
            'hierarchical' => 1,
            'show_option_all' => __('All Categories', 'cruxstore')
        );
        $args = apply_filters( 'cruxstore_search_products', $args );
        wp_dropdown_categories($args);
        ?>
    </div>
	<label class="screen-reader-text"><?php esc_html_e( 'Search', 'cruxstore' ); ?></label>
	<input type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
    <button class="submit">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        <span><?php echo _x( 'Search now', 'submit button', 'cruxstore' ); ?></span>
    </button>
	<input type="hidden" name="post_type" value="product" />
</form>
