<?php


// Exit if accessed directly
if ( !defined('ABSPATH')) exit;




add_action( 'after_setup_theme', 'kt_theme_setup' );
if ( ! function_exists( 'kt_theme_setup' ) ):

function kt_theme_setup() {
    /**
     * Editor style.
     */
    add_editor_style( array( 'assets/css/editor-style.css') );
    
    /**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


    /**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array('gallery', 'quote', 'video', 'audio') );

    /*
    * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
	 */
	add_theme_support( 'title-tag' );
    
    /**
	 * Allow shortcodes in widgets.
	 *
	 */
	add_filter( 'widget_text', 'do_shortcode' );
    
    
    /**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
    
    
    if (function_exists( 'add_image_size' ) ) {
        add_image_size( 'kt_recent_posts', 570, 355, true);
        add_image_size( 'kt_recent_posts_masonry', 570);
        add_image_size( 'kt_first_featured', 670, 500, true);

        add_image_size( 'kt_small', 170, 170, true );
        add_image_size( 'kt_blog_post', 1140, 600, true );

        add_image_size( 'kt_blog_post_sidebar', 1140 );
        add_image_size( 'kt_blog_post_slider', 1460, 800, true );

        add_image_size( 'kt_widget_article', 120, 75, true );
        add_image_size( 'kt_widget_article_carousel', 335, 250, true );

        add_image_size( 'kt_gallery_fullwidth', 5000, 730 );        
    }
    
    load_theme_textdomain( 'mondova', KT_THEME_DIR . '/languages' );
    
    /**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus(array(
        'primary' => esc_html__('Main Navigation Menu', 'mondova'),
        'mobile' => esc_html__('(Mobile Devices) Main Navigation Menu', 'mondova'),
        'footer'	  => esc_html__( 'Footer Navigation Menu', 'mondova' ),
    ));

}
endif;



/**
 * Add stylesheet and script for frontend
 *
 * @since       1.0
 * @return      void
 * @access      public
 */

function kt_add_scripts() {

    wp_enqueue_style( 'kt-wp-style', get_stylesheet_uri(), array('mediaelement', 'wp-mediaelement') );
    wp_enqueue_style( 'bootstrap', KT_THEME_LIBS . 'bootstrap/css/bootstrap.css', array());
    wp_enqueue_style( 'font-awesome', KT_THEME_LIBS . 'font-awesome/css/font-awesome.min.css', array());
    wp_enqueue_style( 'elegant_font', KT_THEME_LIBS . 'elegant_font/style.css', array());

    wp_enqueue_style( 'kt-plugins', KT_THEME_CSS . 'plugins.css', array());

	// Load our main stylesheet.
    wp_enqueue_style( 'kt-main', KT_THEME_CSS . 'style.css');
    wp_enqueue_style( 'kt-queries', KT_THEME_CSS . 'queries.css');
    
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'kt-ie', KT_THEME_CSS . 'ie.css');
	wp_style_add_data( 'kt-ie', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'bootstrap', KT_THEME_LIBS . 'bootstrap/js/bootstrap.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'kt-plugins', KT_THEME_JS . 'plugins.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'kt-main-script', KT_THEME_JS . 'functions.js', array( 'jquery', 'mediaelement', 'wp-mediaelement', 'jquery-ui-tabs' ), null, true );

    wp_localize_script( 'kt-main-script', 'ajax_frontend', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'ajax_frontend' ),
    ));




}
add_action( 'wp_enqueue_scripts', 'kt_add_scripts' );



if ( ! function_exists( 'kt_post_thumbnail_image' ) ) :
    /**
     * Display an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     *
     */
    function kt_post_thumbnail_image($size = 'post-thumbnail', $class_img = '', $link = true, $placeholder = true, $echo = true) {
        if ( post_password_required() || is_attachment()) {
            return;
        }
        $class = 'entry-thumbnail';
        $attrs = '';
        if( $link ){
            $tag = 'a';
            $attrs .= 'href="'.get_the_permalink().'"';
        } else{
            $tag = 'div';
        }
        if(!has_post_thumbnail() && $placeholder){
            $class .= ' no-image';
        }

        if(!$echo){
            ob_start();
        }

        if(has_post_thumbnail() || $placeholder){ ?>
            <<?php echo $tag ?> <?php echo $attrs ?> class="<?php echo esc_attr($class); ?>">
            <?php if(has_post_thumbnail()){ ?>
                <?php the_post_thumbnail( $size, array( 'alt' => get_the_title(), 'class' => $class_img ) ); ?>
            <?php }elseif($placeholder){ ?>
                <?php
                    $image = apply_filters( 'kt_placeholder', $size );
                    printf(
                        '<img src="%s" alt="%s" class="%s"/>',
                        $image,
                        esc_html__('No image', 'adroit'),
                        $class_img.' no-image'
                    )
                ?>
            <?php } ?>
            </<?php echo $tag ?>><!-- .entry-thumb -->
        <?php }

        if(!$echo){
            return ob_get_clean();
        }
    }
endif;

