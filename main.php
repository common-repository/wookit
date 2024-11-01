<?php

/*
* Plugin Name: WooKit - WooCommerce Tools and Customizations
* Plugin URI: https://miguras.com/wookit
* Description: Adds a lot of settings on the wordpress customizer where you can adjust the design and parameters of many woocommerce areas
* Version: 1.4
* Author: Miguras
* Author URI: http://miguras.com
* License: GPLv2 or later
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

if ( !defined( 'ABSPATH' ) ) {
    exit;
    // Exit if accessed directly.
}


if ( function_exists( 'wookit_fs' ) ) {
    wookit_fs()->set_basename( false, __FILE__ );
    return;
}


if ( !function_exists( 'wookit_fs' ) ) {
    // Create a helper function for easy SDK access.
    function wookit_fs()
    {
        global  $wookit_fs ;

        if ( !isset( $wookit_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $wookit_fs = fs_dynamic_init( array(
                'id'             => '3411',
                'slug'           => 'wookit',
                'type'           => 'plugin',
                'public_key'     => 'pk_dd992c4c4827206bcf5fa614d7522',
                'is_premium'     => false,
                'premium_suffix' => 'PRO',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'menu'           => array(
                'first-path' => 'plugins.php',
            ),
                'is_live'        => true,
            ) );
        }

        return $wookit_fs;
    }

    // Init Freemius.
    wookit_fs();
    // Signal that SDK was initiated.
    do_action( 'wookit_fs_loaded' );
}

if ( file_exists( plugin_dir_path( __FILE__ ) . 'options/kirki/kirki.php' ) ) {
    require_once plugin_dir_path( __FILE__ ) . 'options/kirki/kirki.php';
}

if ( class_exists( 'Kirki' ) ) {
    add_filter( 'kirki_telemetry', '__return_false' );
    if ( file_exists( plugin_dir_path( __FILE__ ) . 'options/wookit-general-options.php' ) ) {
        require_once plugin_dir_path( __FILE__ ) . 'options/wookit-general-options.php';
    }
    if ( file_exists( plugin_dir_path( __FILE__ ) . 'options/wookit-functions.php' ) ) {
        require_once plugin_dir_path( __FILE__ ) . 'options/wookit-functions.php';
    }
    if ( file_exists( plugin_dir_path( __FILE__ ) . 'functions/function.php' ) ) {
        require_once plugin_dir_path( __FILE__ ) . 'functions/function.php';
    }
    if ( file_exists( plugin_dir_path( __FILE__ ) . 'functions/notices.php' ) ) {
        require_once plugin_dir_path( __FILE__ ) . 'functions/notices.php';
    }
    $wookitnotices = WOOKIT_Admin_Notices::get_instance();
    $wookitnotices->info( 'New WooKit function released. Carousel for WooCommerce Single Product. Open the <a href="' . get_admin_url() . 'customize.php?autofocus[section]=wookit-product-carousel-section">customizer</a> and navigate to WooKit->Single Product Page->PRO Carousel and explore it or you can click <a href="' . get_admin_url() . 'customize.php?autofocus[section]=wookit-product-carousel-section">here</a> (you must open a product page to see live changes applied)', 'wookit-carousel-launchment' );
}
