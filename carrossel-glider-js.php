<?php
/*
Plugin Name: Carrossel with Glider.js
Plugin URI: https://github.com/jonathanafranio/carrossel-glider-js
Description: Glider.js, o Carousel em javascript puro (vanilla.js) para WP
Author: Jonathan Afranio
Author URI: https://github.com/jonathanafranio/carrossel-glider-js
Text Domain: carrossel-glider-js
License: GPLv2 or later
Version: 1.0.1
Domain Path: /languages
*/


include 'includes/cgj-options.php';

include 'includes/cgj_custom-post-carousel.php';
include 'includes/cgj-only-images.php';
include 'includes/cgj-text-full-image.php';
include 'includes/cgj-text-half-image.php';
include 'includes/cgj-only-text.php';
include 'includes/cgj-small-thumb.php';
include 'includes/cgj-custom-style.php';

// CGJ
if( ! defined( 'CGJ_URL' ) ) {
	define( 'CGJ_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}


function cgj_carousel_post( $gfw_post ) {     
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
        'posts_per_page' => $atts['limit'],
    );
    if($atts['category'] != '') $gfwArgs['categoria-carousel'] = $atts['category'];

    $gfwLoop = new WP_Query( $gfwArgs );

    if($atts['design'] == 'text-full-image'){
        $return_glider = cgj_textFullImage($gfwLoop, $atts);
    } elseif ($atts['design'] == 'text-half-image'){
        $return_glider = cgj_textHalfImage($gfwLoop, $atts);
    } elseif ($atts['design'] == 'only_text'){
        $return_glider = cgj_onlyText($gfwLoop, $atts);
    } elseif ($atts['design'] == 'small-thumb'){
        $return_glider = cgj_smallThumb($gfwLoop, $atts);
    } else {
        $return_glider = cgj_only_images($gfwLoop, $atts);
    }
    //return 'GFW_URL '.GFW_URL;

    if($atts['desktop-show'] > 1 && $atts['laptop-show'] > 1 && intval($atts['spaces']) > 0){
        $paddings = intval($atts['spaces']) / 2;

        $return_glider .= '<style type="text/css">';
        if($atts['tablet-scroll'] > 1) {
            $return_glider .= '@media screen and ( min-width: 768px){';
        } else {
            $return_glider .= '@media screen and ( min-width: 1024px){';
        }
        $return_glider .= '#'.$atts['id'].' { width: calc( 100% + '.($paddings*2).'px ); margin: 0 -'.$paddings.'px; }';
        $return_glider .= '#'.$atts['id'].' .glider-slide { padding: 0px '.$paddings.'px; }';

        $return_glider .= '}';
        //$atts['id']
        $return_glider .= '</style>';
    }
    //'tablet-show' => 1)

    return $return_glider;
}

add_shortcode('gfw', 'cgj_carousel_post');

function cgj_glider_scripts (){
    global $post;
    if ( strstr( $post->post_content, '[gfw ' ) ) {
        wp_enqueue_style( 'glider_css', CGJ_URL.'assets/css/main-glider.css' );

        wp_enqueue_script( 'glider_js', CGJ_URL.'assets/js/glider.min.js', array(), false, 'true' );
        wp_enqueue_script( 'main-glider_js', CGJ_URL.'assets/js/main-glider.min.js', array(), false, 'true' );

        add_action( 'wp_head', 'cgj_styleCustom' );
    }
}
// Scrips e CSS
add_action( 'wp_enqueue_scripts', 'cgj_glider_scripts');

function cgj_load_textdomain() {
    load_plugin_textdomain( 'carrossel-glider-js', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'cgj_load_textdomain' );

?>