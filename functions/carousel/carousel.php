<?php

function wookit_pro_carousel_singleproduct()
{
    $imagesize = 'woocommerce_thumbnail';
    $numberofproducts = '16';
    $columns = '4';
    $slides = '4';
    $autoplay = 'true';
    $arrows = 'true';
    $dots = 'true';
    $speed = '3000';
    $position = 'wookit_after_single_product';
    $displaytitle = 'true';
    $displayprice = 'true';
    $displaybutton = 'true';
    $source = 'all';
    $orderby = 'date';
    $data = '
  data-position="' . $position . '" 
  data-columns="' . $columns . '" 
  data-slides="' . $slides . '" 
  data-autoplay="' . $autoplay . '" 
  data-arrows="' . $arrows . '" 
  data-dots="' . $dots . '" 
  data-speed="' . $speed . '"
  data-title="' . $displaytitle . '"
  data-price="' . $displayprice . '"
  data-button="' . $displaybutton . '"  
  ';
    $output = '';
    $output .= '<div class="wookit-carousel-outer-wrapper">';
    if ( get_option( 'wookit-product-carousel-title' ) ) {
        $output .= '<h2 class="wookit-carousel-wrapper-product-title">' . get_option( 'wookit-product-carousel-title' ) . '</h2>';
    }
    $output .= '<div class="wookit-carousel-wrapper" ' . $data . '>';
    // display all products
    if ( $source == 'all' ) {
        $output .= do_shortcode( '[products limit="' . $numberofproducts . '" columns="1" orderby="' . $orderby . '"]' );
    }
    // display only onsale products
    if ( $source == 'on_sale' ) {
        $output .= do_shortcode( '[products limit="' . $numberofproducts . '" columns="1" orderby="' . $orderby . '" on_sale="true"]' );
    }
    // display best selling products
    if ( $source == 'best_selling' ) {
        $output .= do_shortcode( '[products limit="' . $numberofproducts . '" columns="1" orderby="' . $orderby . '" best_selling="true"]' );
    }
    // display top rated products
    if ( $source == 'top_rated' ) {
        $output .= do_shortcode( '[products limit="' . $numberofproducts . '" columns="1" orderby="' . $orderby . '" top_rated="true"]' );
    }
    // display related products
    if ( $source == 'related' ) {
        $output .= do_shortcode( '[related_products limit="' . $numberofproducts . '" columns="1" orderby="' . $orderby . '" ]' );
    }
    $output .= '</div>';
    // End of wookit wrapper
    $output .= '</div>';
    // end of wookit outer wrapper
    if ( get_option( 'wookit-product-carousel-on' ) == '1' ) {
        echo  $output ;
    }
}

function wookit_carousel_scripts()
{
    wp_enqueue_style( 'wookit-slick-css', plugin_dir_url( __FILE__ ) . 'slick.css' );
    wp_enqueue_style( 'wookit-slick-theme', plugin_dir_url( __FILE__ ) . 'slick-theme.css' );
    wp_enqueue_style( 'wookit-carouselcss', plugin_dir_url( __FILE__ ) . 'carousel.css' );
    wp_enqueue_script( 'wookit-slick-js', plugin_dir_url( __FILE__ ) . 'slick.min.js' );
    wp_enqueue_script( 'wookit-carouselhandler', plugin_dir_url( __FILE__ ) . 'carouselhandler.js' );
}


if ( function_exists( 'wookit_pro_carousel_singleproduct' ) ) {
    function wookit_carousel_init()
    {
        add_action( 'woocommerce_after_single_product', 'wookit_pro_carousel_singleproduct' );
        add_action( 'wp_enqueue_scripts', 'wookit_carousel_scripts', 999 );
    }
    
    add_action( 'plugins_loaded', 'wookit_carousel_init' );
}
