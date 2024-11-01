<?php
Kirki::add_section( 'wookit-checkout-orderbox-section', array(
    'title'          => esc_html__( 'Design Order Box', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-checkout-panel',
    'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'switch',
	'settings'    => 'wookit-checkout-orderbox-on',
	'label'       => esc_html__( 'Apply Changes', 'kirki' ),
	'section'     => 'wookit-checkout-orderbox-section',
	'default'     => '0',
	'priority'    => 10,
] );



Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-checkout-buttonback',
	'label'       => __( 'Button Background', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-checkout-orderbox-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-checkout-orderbox-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-checkout-review-order button',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-checkout-buttonlink',
	'label'       => __( 'Button Text Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-checkout-orderbox-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-checkout-orderbox-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-checkout-review-order button',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-checkout-buttonbackhover',
	'label'       => __( 'Button Hover Background ', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-checkout-orderbox-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-checkout-orderbox-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-checkout-review-order button:hover',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-checkout-buttonlinkhover',
	'label'       => __( 'Button Hover Text Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-checkout-orderbox-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-checkout-orderbox-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-checkout-review-order button:hover',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );

?>