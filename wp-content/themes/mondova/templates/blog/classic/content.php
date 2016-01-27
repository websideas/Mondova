<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
    <div class="blog-post-content">
        <?php kt_post_thumbnail_image('kt_blog_post'); ?>
        <div class="post-date">
            <span class="post-date-number">17</span>
            <span class="post-date-text">thursday</span>
        </div>
        <div class="blog-post-inner">
            <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            <div class="entry-post-meta">
                <span class="cat-links"><a href="#">the blog</a></span>
                <span class="author vcard">By <a href="#">Author</a></span>
            </div>
            <div class="entry-excerpt">
                <p>Maecenas eget tellus elit. In orci urna, molestie placerat nibh non, consectetur pellentesque urna. Morbi efficitur faucibus nibh, a fringilla metus auctor a. Pellentesque eget iaculis eros. Suspendisse ut mi vestibulum, auctor mauris ac, auctor nisi. Fusce vel ipsum vel eros iaculis lacinia sed in eros. Donec venenatis odio neque, eu bibendum arcu dapibus in. Duis bibendum condimentum accumsan. </p>
                <p>Suspendisse non elit quis turpis facilisis gravida quis at ipsum. Nam fermentum mauris sit amet erat commodo, sodales pharetra libero tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum eleifend magna sed urna tempus consequat. Nam purus justo, vehicula quis gravida id, ornare a orci. Phasellus vehicula nibh in porta pretium. Praesent erat nunc, pulvinar quis ligula vitae, ornare venenatis felis. Duis at sem eu lectus fermentum volutpat. </p>
            </div>
            <p class="entry-more">
                <?php
                printf( '<a href="%1$s" class="%2$s">%3$s</a>',
                    esc_url( get_permalink( get_the_ID() ) ),
                    'btn btn-default',
                    sprintf( esc_html__( 'Read more %s', 'mondova' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
                );
                ?>
            </p>
        </div>
    </div>
</article><!-- #post-## -->
