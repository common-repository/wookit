<?php
Kirki::add_section( 'wookit-product-button-section', array(
    'title'          => esc_html__( 'Design Product Button', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-product-panel',
    'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'switch',
	'settings'    => 'wookit-product-button-on',
	'label'       => esc_html__( 'Apply Changes', 'kirki' ),
	'section'     => 'wookit-product-button-section',
	'default'     => '0',
	'priority'    => 10,
] );



Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-buttonback',
	'label'       => __( 'Button Background', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-button-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-button-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce.single-product .cart button[type=submit]',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-buttonlink',
	'label'       => __( 'Button Text Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-button-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-button-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce.single-product .cart button[type=submit]',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-buttonbackhover',
	'label'       => __( 'Button Hover Background ', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-button-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-button-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce.single-product .cart button[type=submit]:hover',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-buttonlinkhover',
	'label'       => __( 'Button Hover Text Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-button-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-button-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce.single-product .cart button[type=submit]:hover',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-product-buttontext',
	'label'    => esc_html__( 'Button Text', 'kirki' ),
	'section'  => 'wookit-product-button-section',
	'priority' => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-button-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
] );

?>