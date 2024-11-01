<?php
Kirki::add_section( 'wookit-product-title-section', array(
    'title'          => esc_html__( 'Design Product Title', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-product-panel',
    'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'switch',
	'settings'    => 'wookit-product-title-on',
	'label'       => esc_html__( 'Apply Changes', 'kirki' ),
	'section'     => 'wookit-product-title-section',
	'default'     => '0',
	'priority'    => 10,
] );



Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-product-title-font',
	'label'       => esc_html__( 'Font', 'kirki' ),
	'section'     => 'wookit-product-title-section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],
	'priority'    => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-title-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce div.product .entry-summary .product_title',
		],
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'dimensions',
	'settings'    => 'wookit-product-title-dimension',
	'label'       => esc_html__( 'Padding (px, em, %)', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-title-section',
	'default'     => [
		'top'  => '',
		'right'  => '',
		'bottom' => '',
		'left' => '',
	],
	'choices'     => [
		'labels' => [
			'top'=> esc_html__( 'Top', 'my-theme' ),
			'right' => esc_html__( 'Right', 'my-theme' ),
			'bottom' => esc_html__( 'Bottom', 'my-theme' ),
			'left' => esc_html__( 'Left', 'my-theme' ),
		],
	],
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-title-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce div.product .entry-summary .product_title',
			'property' => 'padding',
			'suffix' => ' !important',
		),
	),
] );

?>