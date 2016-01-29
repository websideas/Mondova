<?php
/**
 * @package storefront
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">

	<?php
	/**
	 * @hooked storefront_post_header - 10
	 * @hooked storefront_post_meta - 20
	 * @hooked storefront_post_content - 30
	 */

    storefront_post_header();
    storefront_post_meta();
    storefront_post_content();
	do_action( 'storefront_single_post' );

	?>

</article><!-- #post-## -->
