<?php
Kirki::add_section( 'wookit-shop-product-section', array(
    'title'          => esc_html__( 'Design Shop Product', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-shop-panel',
    'priority'       => 161,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'switch',
	'settings'    => 'wookit-shop-product-on',
	'label'       => esc_html__( 'Apply Changes', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
	'default'     => '0',
	'priority'    => 10,
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-shop-product-main-font',
	'label'       => esc_html__( 'Product Main Font', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
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
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce ul.products li.product',
		],
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-shop-product-title-font',
	'label'       => esc_html__( 'Product Title Font', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
	],
	'priority'    => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce ul.products li.product .woocommerce-loop-product__title',
		],
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-shop-product-price-font',
	'label'       => esc_html__( 'Product Price Font', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
	'default'     => [
		'font-size'      => '14px',
		'color'          => '#333333',
	],
	'priority'    => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce ul.products li.product .woocommerce-Price-amount.amount',
		],
	],
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-product-starscolor',
	'label'       => __( 'Stars Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce ul.products li.product .star-rating:before',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );



Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-product-buttonback',
	'label'       => __( 'Button Background Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce ul.products li.product .button',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-product-buttonbackhover',
	'label'       => __( 'Button Background Hover Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce ul.products li.product .button:hover',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-product-buttoncolor',
	'label'       => __( 'Button text color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce ul.products li.product .button',
			'property' => 'color',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-shop-product-buttoncolorhover',
	'label'       => __( 'Button text hover color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
	'default'     => '',
  'active_callback'  => [
		[
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce ul.products li.product .button:hover',
			'property' => 'color',
		),
	),
] );




Kirki::add_field( 'wookit-configuration', [
	'type'        => 'dimensions',
	'settings'    => 'wookit-shop-product-dimension',
	'label'       => esc_html__( 'Main Product Padding (px, em, %)', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-shop-product-section',
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
			'setting'  => 'wookit-shop-product-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce ul.products li.product',
			'property' => 'padding',
			'suffix' => ' !important',
		),
	),
] );

?>