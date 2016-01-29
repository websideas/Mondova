<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * @hooked storefront_page_header - 10
	 * @hooked storefront_page_content - 20
	 */

    storefront_page_content();

	do_action( 'storefront_page' );
	?>
</article><!-- #post-## -->
