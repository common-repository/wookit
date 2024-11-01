<?php
Kirki::add_section( 'wookit-account-section', array(
    'title'          => esc_html__( 'Account Design', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-account-panel',
    'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'switch',
	'settings'    => 'wookit-account-on',
	'label'       => esc_html__( 'Apply Changes', 'kirki' ),
	'section'     => 'wookit-account-section',
	'default'     => '0',
	'priority'    => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-account-background',
	'label'       => __( 'Menu Background Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-account-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-account-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link, .woocommerce .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link a',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-account-link',
	'label'       => __( 'link Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-account-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-account-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link, .woocommerce .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link a',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-account-backgrounactive',
	'label'       => __( 'Active Item Background Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-account-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-account-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link.is-active, .woocommerce .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link.is-active a',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-account-linkactive',
	'label'       => __( 'Active Item Text Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-account-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-account-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link.is-active, .woocommerce .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link.is-active a',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );
?>