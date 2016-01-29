<?php
/**
 * The loop template file.
 *
 * Included on pages like index.php, archive.php and search.php to display a loop of posts
 * Learn more: http://codex.wordpress.org/The_Loop
 *
 */

do_action( 'kt_loop_before' );

$type = 'zigzag';

$column = 3;
$column_tab = 2;

$article_column = 12/$column;
$article_column_tab = 12/$column_tab;

echo '<div class="blog-posts blog-posts-'.esc_attr($type).'">';

if($type == 'grid'|| $type == 'masonry'){
    echo '<div class="row multi-columns-row">';
}
if($type == 'masonry') {
    printf('<div class="blog-post-sizer col-lg-%1$s col-md-%1$s col-sm-%2$s"></div>', $article_column, $article_column_tab);
}

$i = 1;

while ( have_posts() ) : the_post();

	/* Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */

    $format = get_post_format();

    if($type == 'grid' || $type == 'masonry') {
        printf('<div class="blog-post-wrap col-lg-%1$s col-md-%1$s col-sm-%2$s" >', $article_column, $article_column_tab);
    }


    if($type == 'zigzag'){
        $format = ($i % 2 )? '' : 'even';
    }
    get_template_part( 'templates/blog/'.$type.'/content', $format );

    if($type == 'grid' || $type == 'masonry') {
        echo '</div>';
    }
    $i++;
endwhile;
if($type == 'grid' || $type == 'masonry') {
    echo "</div><!-- .row -->";
}
echo "</div><!-- .blog-posts -->";

kt_paging_nav();

do_action( 'kt_loop_after' );