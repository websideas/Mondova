<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

if ( !defined('YITH_WCBR')) 
    return;


class WPBakeryShortCode_Brands_Carousel extends WPBakeryShortCode {
    protected function content($atts, $content = null) {
        $atts = shortcode_atts( array(
            'per_page' => '',
            'orderby' => 'name',
            'order' => 'ASC',
            'ids' => '',
            'hide_empty' => 'true',
            'parent'     => '',

            'autoheight' => true,
            'autoplay' => false,
            'mousedrag' => true,
            'autoplayspeed' => 5000,
            'slidespeed' => 200,
            'carousel_skin' => '',

            'desktop' => 4,
            'desktopsmall' => 3,
            'tablet' => 2,
            'mobile' => 1,

            'gutters' => true,
            'navigation' => true,
            'navigation_always_on' => true,
            'navigation_position' => 'center-outside',
            'navigation_style' => 'normal',

            'pagination' => false,
            'pagination_position' => 'center-bottom',
            'pagination_style' => 'dot-stroke',

            'css_animation' => '',
            'animation_delay' => '',
            'el_class' => '',
            'css' => '',
        ), $atts );

        $atts['columns'] = $atts['desktop'];
        $atts['number'] = $atts['per_page'];

        $atts['hide_empty'] = apply_filters('sanitize_boolean', $atts['hide_empty']);

        extract($atts);

        $elementClass = array(
            'base' => apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'products-brands-carousel ', $this->settings['base'], $atts ),
            'extra' => $this->getExtraClass( $el_class ),
            'woocommerce' => 'woocommerce columns-' . $desktop ,
            'shortcode_custom' => vc_shortcode_custom_css_class( $css, ' ' ),
        );


        $carousel_ouput = cruxstore_render_carousel(apply_filters( 'cruxstore_render_args', $atts), '', 'cruxstore-owl-carousel');
        $output = $carousel_html ='';



        if ( isset( $atts['ids'] ) ) {
            $ids = explode( ',', $atts['ids'] );
            $ids = array_map( 'trim', $ids );
        } else {
            $ids = array();
        }

        $hide_empty = ( $atts['hide_empty'] == true || $atts['hide_empty'] == 1 ) ? 1 : 0;

        // get terms and workaround WP bug with parents/pad counts
        $args = array(
            'orderby'    => $atts['orderby'],
            'order'      => $atts['order'],
            'hide_empty' => $hide_empty,
            'include'    => $ids,
            'pad_counts' => true,
            'child_of'   => $atts['parent']
        );
        
        $product_brands = get_terms( 'yith_product_brand', $args );
        
        if ( '' !== $atts['parent'] ) {
            $product_brands = wp_list_filter( $product_brands, array( 'parent' => $atts['parent'] ) );
        }

        if ( $hide_empty ) {
            foreach ( $product_brands as $key => $brand ) {
                if ( $brand->count == 0 ) {
                    unset( $product_brands[ $key ] );
                }
            }
        }
        
        if ( $atts['number'] ) {
            $product_brands = array_slice( $product_brands, 0, $atts['number'] );
        }


        ob_start();

        if ( $product_brands ) {
            global $woocommerce_carousel;
            $woocommerce_carousel = 'normal';
            
            $css_animation = cruxstore_getCSSAnimation( $css_animation );
            
            
            foreach ( $product_brands as $key=>$term ) {
                
                if($animation_delay){
                    $animation_delay_item = sprintf(' data-wow-delay="%sms"', $key * $animation_delay);
                }else{
                    $animation_delay_item = '';
                }
                
                echo '<div class="brand-banner'.$css_animation.'"'.$animation_delay_item.'><div class="brand-banner-content">';
                
                $thumbnail_id = absint( yith_wcbr_get_term_meta( $term->term_id, 'thumbnail_id', true ) );
                $image_size = apply_filters('cruxstore_brand_logo', 'cruxstore_grid');
				if ( $thumbnail_id ) {
					$image = wp_get_attachment_image_src( $thumbnail_id, $image_size );
                    printf( '<div class="brand-image"><img src="%s" width="%d" height="%d" alt="%s"/></div>', $image[0], $image[1], $image[2], $term->name );
				}else{
					do_action( 'yith_wcbr_no_brand_logo', $term->term_id, $term, 'yith_wcbr_logo_size', false, false );
                    echo '<div class="brand-image">'.wc_placeholder_img().'</div>';
				}
                
                
                printf('<h4 class="brand-count"><span>%s</span> %s</a></h4>',  $term->count, esc_html__('Products', 'cruxstore'));
                printf('<a href="%s">%s</a>', get_term_link( $term ), $term->name);
                echo '</div></div>';
                
                
                
                
            }

        }

        wp_reset_postdata();
        $carousel_html .= ob_get_clean();
        if($carousel_html){

            $elementClass = preg_replace( array( '/\s+/', '/^\s|\s$/' ), array( ' ', '' ), implode( ' ', $elementClass ) );
            $output = '<div class="'.esc_attr( $elementClass ).'"><div class="products-brands-inner">'.str_replace('%carousel_html%', $carousel_html, $carousel_ouput).'</div></div>';

        }

        return $output;

    }
}



vc_map( array(
    "name" => esc_html__( "KT: Brands Carousel", 'cruxstore'),
    "base" => "brands_carousel",
    "category" => esc_html__('by Kite-Themes', 'cruxstore' ),
    "params" => array(

        array(
            "type" => "cruxstore_taxonomy",
            'taxonomy' => 'yith_product_brand',
            'heading' => esc_html__( 'Brands', 'js_composer' ),
            'param_name' => 'ids',
            'multiple' => true,
            'admin_label' => true,
            'select' => 'id',
            'description' => esc_html__('List of product brands', 'cruxstore')
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Per Page', 'js_composer' ),
            'value' => '',
            'param_name' => 'per_page',
            'description' => esc_html__( 'The "per_page" shortcode determines how many brands to show on the page', 'js_composer' ),
        ),
        "admin_label" => true,

        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Order by', 'js_composer' ),
            'param_name' => 'orderby',
            'value' => array(
                esc_html__( 'Name', 'js_composer' ) => 'name',
                esc_html__( 'ID', 'js_composer' ) => 'id',
                esc_html__( 'Count', 'js_composer' ) => 'count',
                esc_html__( 'Slug', 'js_composer' ) => 'slug',
                esc_html__( 'None', 'js_composer' ) => 'none',
            ),
            'std' => 'name',
            'param_holder_class' => 'vc_grid-data-type-not-ids',
            "admin_label" => true,
        ),


        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Sorting', 'js_composer' ),
            'param_name' => 'order',
            'value' => array(
                esc_html__( 'Ascending', 'js_composer' ) => 'ASC',
                esc_html__( 'Descending', 'js_composer' ) => 'DESC',
            ),
            'param_holder_class' => 'vc_grid-data-type-not-ids',
            'description' => esc_html__( 'Select sorting order.', 'js_composer' ),
            "admin_label" => true,
        ),

        array(
            'type' => 'cruxstore_switch',
            'heading' => esc_html__( 'Hide empty', 'cruxstore' ),
            'param_name' => 'hide_empty',
            'value' => 'true',
            "description" => esc_html__("Hide brand if empty.", 'cruxstore'),
        ),

        cruxstore_map_add_css_animation(),
        cruxstore_map_add_css_animation_delay(),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Extra class name", "js_composer" ),
            "param_name" => "el_class",
            "description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer" ),
        ),



        // Carousel
        array(
            'type' => 'cruxstore_switch',
            'heading' => esc_html__( 'Auto Height', 'cruxstore' ),
            'param_name' => 'autoheight',
            'value' => 'true',
            "edit_field_class" => "vc_col-sm-4 cruxstore_margin_bottom",
            "description" => esc_html__("Enable auto height.", 'cruxstore'),
            'group' => esc_html__( 'Carousel', 'cruxstore' ),
        ),
        array(
            'type' => 'cruxstore_switch',
            'heading' => esc_html__( 'Mouse Drag', 'cruxstore' ),
            'param_name' => 'mousedrag',
            'value' => 'true',
            "description" => esc_html__("Mouse drag enabled.", 'cruxstore'),
            'group' => esc_html__( 'Carousel', 'cruxstore' ),
            "edit_field_class" => "vc_col-sm-4 cruxstore_margin_bottom",
        ),
        array(
            'type' => 'cruxstore_switch',
            'heading' => esc_html__( 'AutoPlay', 'cruxstore' ),
            'param_name' => 'autoplay',
            'value' => 'false',
            "description" => esc_html__("Enable auto play.", 'cruxstore'),
            "edit_field_class" => "vc_col-sm-4 cruxstore_margin_bottom",
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            "type" => "cruxstore_number",
            "heading" => esc_html__("AutoPlay Speed", 'cruxstore'),
            "param_name" => "autoplayspeed",
            "value" => "5000",
            "suffix" => esc_html__("milliseconds", 'cruxstore'),
            'group' => esc_html__( 'Carousel', 'cruxstore' ),
            "dependency" => array("element" => "autoplay","value" => array('true')),
        ),
        array(
            "type" => "cruxstore_number",
            "heading" => esc_html__("Slide Speed", 'cruxstore'),
            "param_name" => "slidespeed",
            "value" => "200",
            "suffix" => esc_html__("milliseconds", 'cruxstore'),
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Carousel skin', 'cruxstore' ),
            'param_name' => 'carousel_skin',
            'value' => array(
                esc_html__( 'Default', 'cruxstore') => '',
                esc_html__( 'White', 'cruxstore') => 'white',
            ),
            'std' => '',
            'desc' => esc_html__('Select carousel skin', 'cruxstore'),
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            "type" => "cruxstore_heading",
            "heading" => esc_html__("Items to Show?", 'cruxstore'),
            "param_name" => "items_show",
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            "type" => "cruxstore_number",
            "class" => "",
            "edit_field_class" => "vc_col-sm-6 cruxstore_margin_bottom",
            "heading" => esc_html__("On Desktop", 'cruxstore'),
            "param_name" => "desktop",
            "value" => 4,
            "min" => "1",
            "max" => "5",
            "step" => "1",
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),

        array(
            'type' => 'cruxstore_number',
            'heading' => esc_html__( 'on Tablets Landscape', 'cruxstore' ),
            'param_name' => 'desktopsmall',
            "value" => 3,
            "min" => "1",
            "max" => "5",
            "step" => "1",
            "edit_field_class" => "vc_col-sm-6 cruxstore_margin_bottom",
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            "type" => "cruxstore_number",
            "class" => "",
            "edit_field_class" => "vc_col-sm-6 cruxstore_margin_bottom",
            "heading" => esc_html__("On Tablet", 'cruxstore'),
            "param_name" => "tablet",
            "value" => 2,
            "min" => "1",
            "max" => "5",
            "step" => "1",
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            "type" => "cruxstore_number",
            "class" => "",
            "edit_field_class" => "vc_col-sm-6 cruxstore_margin_bottom",
            "heading" => esc_html__("On Mobile", 'cruxstore'),
            "param_name" => "mobile",
            "value" => 1,
            "min" => "1",
            "max" => "5",
            "step" => "1",
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            "type" => "cruxstore_heading",
            "heading" => esc_html__("Navigation settings", 'cruxstore'),
            "param_name" => "navigation_settings",
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            'type' => 'cruxstore_switch',
            'heading' => esc_html__( 'Navigation', 'cruxstore' ),
            'param_name' => 'navigation',
            'value' => 'true',
            "description" => esc_html__("Show navigation in carousel", 'cruxstore'),
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),

        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Navigation position', 'cruxstore' ),
            'param_name' => 'navigation_position',
            'group' => esc_html__( 'Carousel', 'cruxstore' ),
            'value' => array(
                esc_html__( 'Center outside', 'cruxstore') => 'center-outside',
                esc_html__( 'Center inside', 'cruxstore') => 'center',
                //esc_html__( 'Top', 'cruxstore') => 'top',
                esc_html__( 'Bottom', 'cruxstore') => 'bottom',
            ),
            "dependency" => array("element" => "navigation","value" => array('true')),
        ),
        array(
            'type' => 'cruxstore_switch',
            'heading' => esc_html__( 'Always Show Navigation', 'cruxstore' ),
            'param_name' => 'navigation_always_on',
            'value' => 'false',
            "description" => esc_html__("Always show the navigation.", 'cruxstore'),
            'group' => esc_html__( 'Carousel', 'cruxstore' ),
            "dependency" => array("element" => "navigation_position","value" => array('center', 'center-outside')),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Navigation style', 'js_composer' ),
            'param_name' => 'navigation_style',
            'group' => esc_html__( 'Carousel', 'cruxstore' ),
            'value' => array(
                esc_html__( 'Normal', 'cruxstore' ) => 'normal',
                esc_html__( 'Circle Background', 'cruxstore' ) => 'circle-background',
                esc_html__( 'Square Background', 'cruxstore' ) => 'square-background',
                esc_html__( 'Round Background', 'cruxstore' ) => 'round-background',
                esc_html__( 'Circle Border', 'cruxstore' ) => 'circle-border',
                esc_html__( 'Square Border', 'cruxstore' ) => 'square-border',
                esc_html__( 'Round Border', 'cruxstore' ) => 'round-border',
            ),
            'std' => 'normal',
            "dependency" => array("element" => "navigation","value" => array('true')),
            "description" => esc_html__("Select your navigation style.", 'cruxstore'),
        ),

        array(
            "type" => "cruxstore_heading",
            "heading" => esc_html__("Pagination settings", 'cruxstore'),
            "param_name" => "pagination_settings",
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            'type' => 'cruxstore_switch',
            'heading' => esc_html__( 'Pagination', 'cruxstore' ),
            'param_name' => 'pagination',
            'value' => 'false',
            "description" => esc_html__("Show pagination in carousel", 'cruxstore'),
            'group' => esc_html__( 'Carousel', 'cruxstore' )
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Pagination position', 'cruxstore' ),
            'param_name' => 'pagination_position',
            'group' => esc_html__( 'Carousel', 'cruxstore' ),
            'value' => array(
                esc_html__( 'Center Top', 'cruxstore') => 'center-top',
                esc_html__( 'Center Bottom', 'cruxstore') => 'center-bottom',
                esc_html__( 'Bottom Left', 'cruxstore') => 'bottom-left',
            ),
            'std' => 'center_bottom',
            "dependency" => array("element" => "pagination","value" => array('true')),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Pagination style', 'js_composer' ),
            'param_name' => 'pagination_style',
            'group' => esc_html__( 'Carousel', 'cruxstore' ),
            'value' => array(
                esc_html__( 'Dot stroke', 'cruxstore' ) => 'dot-stroke',
                esc_html__( 'Fill pp', 'cruxstore' ) => 'fill-up',
                esc_html__( 'Circle grow', 'cruxstore' ) => 'circle-grow',
            ),
            'std' => 'dot_stroke',
            "dependency" => array("element" => "pagination","value" => array('true')),
        ),
        array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'Css', 'js_composer' ),
            'param_name' => 'css',
            // 'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
            'group' => esc_html__( 'Design options', 'js_composer' )
        ),
    ),
));
