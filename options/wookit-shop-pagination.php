<?php
Kirki::add_section( 'wookit-shop-pagination-section', array(
    'title'          => esc_html__( 'Design Shop Pagination', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-shop-panel',
    'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'switch',
	'settings'    => 'wookit-shop-pagination-on',
	'label'       => esc_html__( 'Apply Changes', 'kirki' ),
	'section'     => 'wookit-shop-pagination-section',
	'default'     => '0',
	'priority'    => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-pagination-background',
	'label'       => __( 'Background Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-pagination-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-pagination-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .page-numbers li a',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-pagination-backgroundhover',
	'label'       => __( 'Background hover color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-pagination-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-pagination-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .page-numbers li span, .woocommerce .page-numbers li a:hover',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-pagination-link',
	'label'       => __( 'Text Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-pagination-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-pagination-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .page-numbers li a',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-pagination-linkhover',
	'label'       => __( 'Text hover color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-pagination-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-pagination-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .page-numbers li span, .woocommerce .page-numbers li a:hover',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-pagination-border',
	'label'       => __( 'border color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-pagination-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-pagination-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce nav.woocommerce-pagination ul li',
			'property' => 'border-color',
			'suffix' => ' !important',
		),
	),
] );

?>