<?php
Kirki::add_section( 'wookit-checkout-billingfields-section', array(
    'title'          => esc_html__( 'Manage Billing Fields', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-checkout-panel',
    'priority'       => 160,
) );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'multicheck',
	'settings'    => 'wookit-checkout-billingfields',
	'label'       => esc_html__( 'Activate/Deactivate fields', 'kirki' ),
	'section'     => 'wookit-checkout-billingfields-section',
	'default'     => [
		'billing_first_name',
    'billing_last_name',
    'billing_company',
    'billing_address_1',
    'billing_address_2',
    'billing_city',
    'billing_postcode',
    'billing_country',
    'billing_state',
    'billing_email',
    'billing_phone',
	],
	'choices'     => [
    'billing_first_name' => esc_html__('First Name', 'kirki' ),
    'billing_last_name' => esc_html__('Last Name', 'kirki' ),
    'billing_company' => esc_html__('Company', 'kirki' ),
    'billing_address_1' => esc_html__('Address 1', 'kirki' ),
    'billing_address_2' => esc_html__('Address 2', 'kirki' ),
    'billing_city' => esc_html__('City', 'kirki' ),
    'billing_postcode' => esc_html__('Post Code', 'kirki' ),
    'billing_country' => esc_html__('Country', 'kirki' ),
    'billing_state' => esc_html__('State', 'kirki' ),
    'billing_email' => esc_html__('Email', 'kirki' ),
    'billing_phone' => esc_html__('Phone', 'kirki' ),
	],
	'priority'    => 10,
] );

?>