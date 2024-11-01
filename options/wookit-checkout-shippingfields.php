<?php
Kirki::add_section( 'wookit-checkout-shippingfields-section', array(
    'title'          => esc_html__( 'Manage Shipping Fields', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-checkout-panel',
    'priority'       => 160,
) );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'multicheck',
	'settings'    => 'wookit-checkout-shippingfields',
	'label'       => esc_html__( 'Activate/Deactivate fields', 'kirki' ),
	'section'     => 'wookit-checkout-shippingfields-section',
	'default'     => [
		'shipping_first_name',
    'shipping_last_name',
    'shipping_company',
    'shipping_address_1',
    'shipping_address_2',
    'shipping_city',
    'shipping_postcode',
    'shipping_country',
    'shipping_state',
	],
	'choices'     => [
    'shipping_first_name' => esc_html__('First Name', 'kirki' ),
    'shipping_last_name' => esc_html__('Last Name', 'kirki' ),
    'shipping_company' => esc_html__('Company', 'kirki' ),
    'shipping_address_1' => esc_html__('Address 1', 'kirki' ),
    'shipping_address_2' => esc_html__('Address 2', 'kirki' ),
    'shipping_city' => esc_html__('City', 'kirki' ),
    'shipping_postcode' => esc_html__('Post Code', 'kirki' ),
    'shipping_country' => esc_html__('Country', 'kirki' ),
    'shipping_state' => esc_html__('State', 'kirki' ),
	],
	'priority'    => 10,
] );

?>