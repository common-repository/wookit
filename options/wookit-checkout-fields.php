<?php
Kirki::add_section( 'wookit-checkout-fields-section', array(
    'title'          => esc_html__( 'Design Fields & Labels', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-checkout-panel',
    'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'switch',
	'settings'    => 'wookit-checkout-fields-on',
	'label'       => esc_html__( 'Apply Changes', 'kirki' ),
	'section'     => 'wookit-checkout-fields-section',
	'default'     => '0',
	'priority'    => 10,
] );



Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-checkout-labels-font',
	'label'       => esc_html__( 'Label Text', 'kirki' ),
	'section'     => 'wookit-checkout-fields-section',
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
			'setting'  => 'wookit-checkout-fields-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce .woocommerce-checkout .woocommerce-billing-fields label',
      'suffix'  => ' !important'
		],
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'dimensions',
	'settings'    => 'wookit-checkout-label-dimension',
	'label'       => esc_html__( 'Label Padding (px, em, %)', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-checkout-fields-section',
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
			'setting'  => 'wookit-checkout-fields-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-checkout .woocommerce-billing-fields label',
			'property' => 'padding',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-checkout-fields-font',
	'label'       => esc_html__( 'Fields Text', 'kirki' ),
	'section'     => 'wookit-checkout-fields-section',
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
			'setting'  => 'wookit-checkout-fields-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce .woocommerce-checkout .woocommerce-billing-fields input, .woocommerce .woocommerce-checkout .woocommerce-billing-fields textarea, .woocommerce .woocommerce-checkout .woocommerce-billing-fields input::placeholder, .woocommerce .woocommerce-checkout .woocommerce-billing-fields textarea::placeholder 
      ',
      'suffix'  => ' !important'
		],
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'dimensions',
	'settings'    => 'wookit-checkout-fields-dimension',
	'label'       => esc_html__( 'Fields Padding (px, em, %)', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-checkout-fields-section',
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
			'setting'  => 'wookit-checkout-fields-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .woocommerce-checkout .woocommerce-billing-fields input, .woocommerce .woocommerce-checkout .woocommerce-billing-fields textarea',
			'property' => 'padding',
			'suffix' => ' !important',
		),
	),
] );

?>