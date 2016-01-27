<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 */


$sidebar = array(
    'sidebar' => 'left',
    'sidebar_area' => 'primary-widget-area',
);

get_header(); ?>

<div id="primary" class="content-area">

    <div class="container">
        <?php
        $main_column = ($sidebar['sidebar']) ? '8' : '12';
        $sidebar_class = ($sidebar['sidebar']) ? 'sidebar-'.$sidebar['sidebar'] : 'no-sidebar';
        $pull_class = ($sidebar['sidebar'] == 'left') ? 'pull-right' : '';
        ?>
        <div class="row main <?php echo esc_attr($sidebar_class); ?>">
            <?php
                printf(
                    '<div class="main-content col-sm-12 col-xs-12 col-md-%s %s">',
                    esc_attr($main_column),
                    esc_attr($pull_class)
                );
            ?>
            <?php if ( have_posts() ) : ?>
                <?php get_template_part( 'loop' ); ?>
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        </div><!-- .main-content -->
        <?php if($sidebar['sidebar']){ ?>
            <?php echo '<div class="col-md-4 col-sm-12 col-xs-12 side-bar main-sidebar">'; ?>
                <?php dynamic_sidebar($sidebar['sidebar_area']); ?>
            </div><!-- .sidebar -->
            <?php } ?>
        </div><!-- .row -->

    </div><!-- .container -->



</div><!-- #primary -->
<?php get_footer(); ?>



