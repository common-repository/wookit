<?php
Kirki::add_section( 'wookit-checkout-sortfields-section', array(
    'title'          => esc_html__( 'Sort Billing/Shipping Fields', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-checkout-panel',
    'priority'       => 160,
) );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'sortable',
	'settings'    => 'wookit-checkout-sortfields',
	'label'       => esc_html__( 'Sort fields', 'kirki' ),
	'section'     => 'wookit-checkout-sortfields-section',
	'default'     => [
		'first_name',
    'last_name',
    'company',
    'address_1',
    'address_2',
    'city',
    'postcode',
    'country',
    'state',
    'email',
    'phone',
	],
	'choices'     => [
    'first_name' => esc_html__('First Name', 'kirki' ),
    'last_name' => esc_html__('Last Name', 'kirki' ),
    'company' => esc_html__('Company', 'kirki' ),
    'address_1' => esc_html__('Address 1', 'kirki' ),
    'address_2' => esc_html__('Address 2', 'kirki' ),
    'city' => esc_html__('City', 'kirki' ),
    'postcode' => esc_html__('Post Code', 'kirki' ),
    'country' => esc_html__('Country', 'kirki' ),
    'state' => esc_html__('State', 'kirki' ),
    'email' => esc_html__('Email', 'kirki' ),
    'phone' => esc_html__('Phone', 'kirki' ),
	],
	'priority'    => 10,
] );

?>