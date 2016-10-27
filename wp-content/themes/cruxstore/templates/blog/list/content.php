<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?> itemscope itemtype="http://schema.org/BlogPosting">
    <div class="blog-post-content">
        <?php the_title( sprintf( '<h3 class="entry-title" itemprop="name headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
        <?php cruxstore_entry_meta(array('author', 'date', 'comments', 'social')); ?>
        <?php cruxstore_post_thumbnail_image('cruxstore_classic'); ?>
        <?php cruxstore_entry_excerpt(); ?>
        <p class="entry-more">
            <?php
            printf( '<a href="%1$s" class="%2$s">%3$s</a>',
                esc_url( get_permalink( get_the_ID() ) ),
                'btn btn-list-more',
                sprintf( esc_html__( 'Read more %s', 'cruxstore' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
            );
            ?>
        </p>
    </div>
</article><!-- #post-## -->
