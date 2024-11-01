<?php
Kirki::add_section( 'wookit-checkout-labels-section', array(
    'title'          => esc_html__( 'Fields Labels', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-checkout-panel',
    'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-firstname',
	'label'    => esc_html__( 'First Name Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-lastname',
	'label'    => esc_html__( 'Last Name Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-company',
	'label'    => esc_html__( 'Company Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-address1',
	'label'    => esc_html__( 'Address 1 Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-address2',
	'label'    => esc_html__( 'Address 2 Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-city',
	'label'    => esc_html__( 'City Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-postcode',
	'label'    => esc_html__( 'Post Code Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-country',
	'label'    => esc_html__( 'Country Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-state',
	'label'    => esc_html__( 'State Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-email',
	'label'    => esc_html__( 'Email Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );

Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-checkout-labels-phone',
	'label'    => esc_html__( 'Phone Label', 'kirki' ),
	'section'  => 'wookit-checkout-labels-section',
	'priority' => 10,
] );




?>