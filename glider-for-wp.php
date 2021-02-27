<?php

/*
Plugin Name: Glider.js For WordPress
Plugin URI: https://psdtohtmlandcss.com.br/jonathan/
Description: Glider.js, o Carousel em javascript puro (vanilla.js) para WordPress
Author: Jonathan Afranio
Author URI: https://psdtohtmlandcss.com.br/jonathan/
Text Domain: glider-for-wp
License: GPLv2 or later
*/

include 'includes/gfw-options.php';



include 'includes/custom-post-carousel.php';
include 'includes/only-images.php';
include 'includes/text-full-image.php';
include 'includes/text-half-image.php';
include 'includes/only-text.php';
include 'includes/small-thumb.php';
include 'includes/custom-style.php';


if( ! defined( 'GFW_URL' ) ) {
	define( 'GFW_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}

function gfw_carousel_post( $gfw_post ) {     
    $atts = shortcode_atts( array(
        'desktop-show' => 1,
        'laptop-show' => 1,
        'tablet-show' => 1,
        'mobile-show' => 1,

        'desktop-scroll' => 1,
        'laptop-scroll' => 1,
        'tablet-scroll' => 1,
        'mobile-scroll' => 1,

        'dots' => 'true',
        'arrows' => 'false',
        'design' => 'only-images',
        'id' => 'glider-'.rand(1, 999),
        'category' => '',
        'resolution' => 'full', //https://developer.wordpress.org/reference/functions/the_post_thumbnail/
        'spaces' => '0',
        'infinit' => 'true',

        'limit' => '15'
    ), $gfw_post );

    
    $gfwArgs = array(
        'post_type' => 'carousel',
        //'nopaging' => true,
        'posts_per_page' => $atts['limit'],
    );
    if($atts['category'] != '') $gfwArgs['categoria-carousel'] = $atts['category'];

    $gfwLoop = new WP_Query( $gfwArgs );

    if($atts['design'] == 'text-full-image'){
        $return_glider = textFullImage($gfwLoop, $atts);
    } elseif ($atts['design'] == 'text-half-image'){
        $return_glider = textHalfImage($gfwLoop, $atts);
    } elseif ($atts['design'] == 'only_text'){
        $return_glider = onlyText($gfwLoop, $atts);
    } elseif ($atts['design'] == 'small-thumb'){
        $return_glider = smallThumb($gfwLoop, $atts);
    } else {
        $return_glider = only_images($gfwLoop, $atts);
    }
    //return 'GFW_URL '.GFW_URL;
    return $return_glider;
}

//https://nickpiscitelli.github.io/Glider.js/
//https://demo.wponlinesupport.com/slick-slider-demo/
//http://jonathan.meus.br/?page_id=109

add_shortcode('gfw', 'gfw_carousel_post');

function glider_scripts (){
    global $post;
    if ( strstr( $post->post_content, '[gfw ' ) ) {
        wp_enqueue_style( 'glider_css', GFW_URL.'assets/css/main-glider.css' );

        wp_enqueue_script( 'glider_js', GFW_URL.'assets/js/glider.min.js', array(), false, 'true' );
        wp_enqueue_script( 'main-glider_js', GFW_URL.'assets/js/main-glider.min.js', array(), false, 'true' );

        add_action( 'wp_head', 'styleCustom' );
    }
}
// Scrips e CSS
add_action( 'wp_enqueue_scripts', 'glider_scripts');

?>