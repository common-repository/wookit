<?php

Kirki::add_config( 'wookit-configuration', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'option',
) );

Kirki::add_panel( 'wookit-panel', array(
		'priority'    => 10,
		'title'       => esc_html__( 'WooKit Options', 'kirki' ),
		'description' => esc_html__( 'Customize WooCommerce', 'kirki' ),
) );

Kirki::add_section( 'wookit-general-section', array(
		'title'          => esc_html__( 'General', 'kirki' ),
		'description'    => esc_html__( '', 'kirki' ),
		'panel'          => 'wookit-panel',
		'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-password-strength',
	'label'       => esc_html__( 'Deactivate Password Strength', 'kirki' ),
	'section'     => 'wookit-general-section',
	'default'     => 'enabled',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'disabled' => esc_html__( 'Disabled', 'kirki' ),
		'enabled' => esc_html__( 'Enabled', 'kirki' ),
	],
] );

Kirki::add_panel( 'wookit-shop-panel', array(
		'priority'    => 10,
		'title'       => esc_html__( 'Shop Page', 'kirki' ),
		'description' => esc_html__( '', 'kirki' ),
		'panel'          => 'wookit-panel',
) );

Kirki::add_panel( 'wookit-account-panel', array(
		'priority'    => 10,
		'title'       => esc_html__( 'Account Page', 'kirki' ),
		'description' => esc_html__( '', 'kirki' ),
		'panel'          => 'wookit-panel',
) );

Kirki::add_panel( 'wookit-product-panel', array(
		'priority'    => 10,
		'title'       => esc_html__( 'Single Product Page', 'kirki' ),
		'description' => esc_html__( '', 'kirki' ),
		'panel'          => 'wookit-panel',
) );

Kirki::add_panel( 'wookit-checkout-panel', array(
		'priority'    => 10,
		'title'       => esc_html__( 'Checkout Page', 'kirki' ),
		'description' => esc_html__( '', 'kirki' ),
		'panel'          => 'wookit-panel',
) );



function wookit_required_files(){

	$requires = array('wookit-shop-breadcrumb', 'wookit-shop-title', 'wookit-shop-results',
  'wookit-shop-order', 'wookit-shop-product', 'wookit-shop-pagination', 'wookit-account',
  'wookit-product-title', 'wookit-product-price', 'wookit-product-carousel', 'wookit-checkout-title', 'wookit-checkout-fields',
  'wookit-checkout-orderbox', 'wookit-checkout-billingfields', 'wookit-checkout-shippingfields',
  'wookit-checkout-sortfields', 'wookit-checkout-labels', 'wookit-product-breadcrumb',
  'wookit-product-addtocart',
);

	foreach($requires as $require){
		if (file_exists(plugin_dir_path( __FILE__ ) . $require.'.php')){
			require_once(plugin_dir_path( __FILE__ ) .  $require.'.php');
		}
	}
}

wookit_required_files();

?>
