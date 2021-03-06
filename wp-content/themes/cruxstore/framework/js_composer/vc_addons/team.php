<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;


class WPBakeryShortCode_Team extends WPBakeryShortCode {
    protected function content($atts, $content = null) {

        extract(shortcode_atts(array(
            'name' => '',
            'image' => '',
            'image_size' => 'full',
            'agency' => '',

            'facebook_link' => '',
            'twitter_link' => '',
            'dribbble_link' => '',
            'linkedin_link' => '',

            'el_class' => '',
            'css'      => '',
        ), $atts));

        $elementClass = array(
            'base' => apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'team ', $this->settings['base'], $atts ),
            'shortcode_custom' => vc_shortcode_custom_css_class( $css, ' ' ),
            'extra' => $this->getExtraClass( $el_class ),
        );
        $elementClass = preg_replace( array( '/\s+/', '/^\s|\s$/' ), array( ' ', '' ), implode( ' ', $elementClass ) );

        $img_id = preg_replace( '/[^\d]/', '', $image );
        $img = wpb_getImageBySize( array(
            'attach_id' => $img_id,
            'thumb_size' => $image_size,
            'class' => 'vc_single_image-img img-responsive team-avatar'
        ) );
        if ( $img == null ) {
            $img['thumbnail'] = '<img class="vc_img-placeholder vc_single_image-img team-avatar" src="' . vc_asset_url( 'vc/no_image.png' ) . '" />';
        }

        $output = '';

        $socials = array(
            '<i class="fa fa-facebook"></i>' => $facebook_link, 
            '<i class="fa fa-twitter"></i>' => $twitter_link,
            '<i class="fa fa-dribbble"></i>' => $dribbble_link,
            '<i class="fa fa-linkedin"></i>' => $linkedin_link,
        );

        if( $name ){
            $output .= '<div class="'.$elementClass.'">';
                $output .= $img['thumbnail'];
                $output .= '<div class="team-attr">';
                    $output .= '<h4 class="name">'.$name.'</h4>';
                    $output .= '<div class="agency">'.$agency.'</div>';

                    if( $facebook_link || $twitter_link || $dribbble_link || $linkedin_link ){
                        $output .= '<ul class="clearfix">';
                            foreach ($socials as $key => $value) {
                                if( $value ){
                                    $output .= '<li><a href="'.$value.'">'.$key.'</a></li>';
                                }
                            }
                        $output .= '</ul>';
                    }

                $output .= '</div>';
            $output .= '</div>';
        }
        
        return $output;
    }
}



// Add your Visual Composer logic here
vc_map( array(
    "name" => esc_html__( "Team", 'cruxstore'),
    "base" => "team",
    "category" => esc_html__('by Kite-Themes', 'cruxstore' ),
    "description" => esc_html__( "", 'cruxstore'),
    "wrapper_class" => "clearfix",
    "params" => array(
        array(
            "type" => "textfield",
            'heading' => esc_html__( 'Name', 'js_composer' ),
            'param_name' => 'name',
            "admin_label" => true,
        ),

        array(
            'type' => 'attach_image',
            'heading' => esc_html__( 'Image', 'cruxstore' ),
            'param_name' => 'image',
            'description' => esc_html__( 'Select image from media library.', 'js_composer' ),
        ),

        array(
            "type" => "cruxstore_image_sizes",
            "heading" => esc_html__( "Select image sizes", 'cruxstore' ),
            "param_name" => "image_size",
            "std" => "full"
        ),

        array(
            "type" => "textfield",
            'heading' => esc_html__( 'Agency', 'js_composer' ),
            'param_name' => 'agency',
            "admin_label" => true,
        ),

        array(
            "type" => "textfield",
            'heading' => esc_html__( 'Facebook link', 'js_composer' ),
            'param_name' => 'facebook_link',
        ),
        array(
            "type" => "textfield",
            'heading' => esc_html__( 'Twitter link', 'js_composer' ),
            'param_name' => 'twitter_link',
        ),
        array(
            "type" => "textfield",
            'heading' => esc_html__( 'Dribbble link', 'js_composer' ),
            'param_name' => 'dribbble_link',
        ),
        array(
            "type" => "textfield",
            'heading' => esc_html__( 'LinkedIn link', 'js_composer' ),
            'param_name' => 'linkedin_link',
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__( "Extra class name", "js_composer" ),
            "param_name" => "el_class",
            "description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer" ),
        ),

        array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'CSS box', 'js_composer' ),
            'param_name' => 'css',
            // 'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
            'group' => esc_html__( 'Design Options', 'js_composer' )
        )
    )
));