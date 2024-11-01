<?php
$onlypro = ' (Only Pro) ';
if(wookit_fs()->is_paying()) {
  $onlypro = '';
}

Kirki::add_section( 'wookit-product-carousel-section', array(
    'title'          => esc_html__( 'PRO Carousel', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'wookit-product-panel',
    'priority'       => 160,
) );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'switch',
	'settings'    => 'wookit-product-carousel-on',
	'label'       => esc_html__( 'Activate Carousel', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '0',
  'transport'   => 'refresh',
	'priority'    => 10,
] );


Kirki::add_field( 'wookit-configuration', [
	'type'     => 'text',
	'settings' => 'wookit-product-carousel-title',
	'label'    => esc_html__( 'Carousel Main Title', 'kirki' ),
	'section'  => 'wookit-product-carousel-section',
	'priority' => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-carousel-content-background',
	'label'       => __( 'Content Background', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '#726085',
   'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.wookit-product-inner-wrapper',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'dimensions',
	'settings'    => 'wookit-product-carousel-content-padding',
	'label'       => esc_html__( 'Content Padding (px, em, %)', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
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
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.wookit-product-inner-wrapper',
			'property' => 'padding',
			'suffix' => ' !important',
		),
	),
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-carousel-onsale-background',
	'label'       => __( 'On Sale Background', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '#9c84b5',
   'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .wookit-carousel-wrapper span.onsale',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-carousel-stars-color',
	'label'       => __( 'Stars Color', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '#ffffff',
   'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product .star-rating:before',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-carousel-stasfilling',
	'label'       => __( 'Stars Filling', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '#abd5f1',
   'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product .star-rating',
			'property' => 'color',
		),
	),
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-product-carousel-mainfont',
	'label'       => esc_html__( 'Main Typography', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
		'text-align'     => 'center',
	],
	'priority'    => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product',
		],
	],
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-product-carousel-titlefont',
	'label'       => esc_html__( 'Title Typography', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '700',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
		'text-align'     => 'center',
	],
	'priority'    => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product .woocommerce-loop-product__title',
		],
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-product-carousel-pricefont',
	'label'       => esc_html__( 'Price Typography', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
		'text-align'     => 'center',
	],
	'priority'    => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product .woocommerce-Price-amount.amount, .woocommerce .wookit-carousel-wrapper ul.products li.product .price',
		],
	],
] );




Kirki::add_field( 'wookit-configuration', [
	'type'        => 'typography',
	'settings'    => 'wookit-product-carousel-buttonfont',
	'label'       => esc_html__( 'Button Typography', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => '',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
		'text-align'     => 'center',
	],
	'priority'    => 10,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product .button, .wookit-button-outer-wrapper',
		],
	],
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-carousel-button-background',
	'label'       => __( 'Button Background', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '#ff00f7',
   'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product .button',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-carousel-button-backgroundhover',
	'label'       => __( 'Button Background Hover', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '#7a00ff',
   'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product .button:hover',
			'property' => 'background-color',
			'suffix' => ' !important',
		),
	),
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-carousel-button-texthover',
	'label'       => __( 'Button Text Color Hover', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '#eeee22',
   'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.woocommerce .wookit-carousel-wrapper ul.products li.product .button:hover',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );




Kirki::add_field( 'wookit-configuration', [
	'type'        => 'dimensions',
	'settings'    => 'wookit-product-carousel-column-padding',
	'label'       => esc_html__( 'Column Padding (px, em, %)', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => [
		'top'  => '',
		'right'  => '5px',
		'bottom' => '',
		'left' => '5px',
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
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.wookit-carousel-wrapper li.product',
			'property' => 'padding',
			'suffix' => ' !important',
		),
	),
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'color',
	'settings'    => 'wookit-product-carousel-arrows-background',
	'label'       => __( 'Arrows Background', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => '#9a9a9a',
   'active_callback'  => [
    [
      'setting'  => 'wookit-product-carousel-on',
      'operator' => '==',
      'value'    => '1',
    ],
	],
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.wookit-carousel-wrapper .slick-arrow::before',
			'property' => 'color',
			'suffix' => ' !important',
		),
	),
] );


// WOOKIT PRO ADVERTISE 
if(wookit_fs()->is_not_paying()):
Kirki::add_field( 'wookit-configuration', [
	'type'        => 'custom',
	'settings'    => 'wookit-product-carousel-proinfo',
	'label'       => esc_html__( '', 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
  'active_callback'  => [
    [
      'setting'  => 'wookit-product-carousel-on',
      'operator' => '==',
      'value'    => '1',
    ],
	],
	'default'     => '<div style="text-align:center; background-color:#222222; color:#ffffff; padding: 10px;">
  <h2 style="color:#ffffff; font-size: 20px;">'.esc_html__('WooKit Pro').'</h2>
  <p>' . esc_html__( 'Options listed as "PRO" are only available on WooKit PRO version. Get your lifetime license for unlimited site', 'kirki' ) . '</p><a target="_blank" style="background-color: #532263;display:inline-block;padding: 10px 20px;color: #fff;font-weight: bold;text-decoration: none;" href="https://miguras.com/wookit">Buy WooKit PRO $8.90</a></div>',
	'priority'    => 10,
] );
endif;



Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-position',
	'label'       => esc_html__( 'Carousel Page Position'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'wookit_after_single_product',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'wookit_before_single_product' => esc_html__( 'Before Content', 'kirki' ),
		'wookit_after_single_product' => esc_html__( 'After Content', 'kirki' ),
		'wookit_product_thumbnails' => esc_html__( 'Below Main Image', 'kirki' ),
    'wookit_after_add_to_cart_button' => esc_html__( 'Below Button', 'kirki' ),
    
    
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-source',
	'label'       => esc_html__( 'Products Source'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'all',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'all' => esc_html__( 'All', 'kirki' ),
		'on_sale' => esc_html__( 'On Sale', 'kirki' ),
		'best_selling' => esc_html__( 'Best Selling', 'kirki' ),
    'top_rated' => esc_html__( 'Top Rated', 'kirki' ),
    'related' => esc_html__( 'Related Products', 'kirki' ),
    
    
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-orderby',
	'label'       => esc_html__( 'Order By'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'date',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'date' => esc_html__( 'Date', 'kirki' ),
		'id' => esc_html__( 'ID', 'kirki' ),
		'popularity' => esc_html__( 'Popularity', 'kirki' ),
    'rand' => esc_html__( 'Random', 'kirki' ),
    'rating' => esc_html__( 'Rating', 'kirki' ),
    'title' => esc_html__( 'Title', 'kirki' ), 
	],
] );



Kirki::add_field( 'wookit-configuration', [
	'type'        => 'slider',
	'settings'    => 'wookit-product-carousel-number',
	'label'       => esc_html__( 'Number of Products'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 16,
	'choices'     => [
		'min'  => 1,
		'max'  => 50,
		'step' => 1,
	],
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-autoplay',
	'label'       => esc_html__( 'Autoplay'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'true',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'false' => esc_html__( 'No', 'kirki' ),
		'true' => esc_html__( 'Yes', 'kirki' ),
	],
] );




Kirki::add_field( 'wookit-configuration', [
	'type'        => 'slider',
	'settings'    => 'wookit-product-carousel-speed',
	'label'       => esc_html__( 'Autoplay Speed'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 3000,
	'choices'     => [
		'min'  => 500,
		'max'  => 10000,
		'step' => 500,
	],
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'slider',
	'settings'    => 'wookit-product-carousel-columns',
	'label'       => esc_html__( 'Columns'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 4,
	'choices'     => [
		'min'  => 1,
		'max'  => 6,
		'step' => 1,
	],
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
] );



Kirki::add_field( 'wookit-configuration', [
	'type'        => 'slider',
	'settings'    => 'wookit-product-carousel-slides',
	'label'       => esc_html__( 'Slides to Scroll'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 4,
	'choices'     => [
		'min'  => 1,
		'max'  => 6,
		'step' => 1,
	],
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-arrows',
	'label'       => esc_html__( 'Display Arrows'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'true',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'false' => esc_html__( 'No', 'kirki' ),
		'true' => esc_html__( 'Yes', 'kirki' ),
	],
] );


Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-dots',
	'label'       => esc_html__( 'Display Dots'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'true',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'false' => esc_html__( 'No', 'kirki' ),
		'true' => esc_html__( 'Yes', 'kirki' ),
	],
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-displaytitle',
	'label'       => esc_html__( 'Display Title'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'true',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'false' => esc_html__( 'No', 'kirki' ),
		'true' => esc_html__( 'Yes', 'kirki' ),
	],
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-displayprice',
	'label'       => esc_html__( 'Display Price'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'true',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'false' => esc_html__( 'No', 'kirki' ),
		'true' => esc_html__( 'Yes', 'kirki' ),
	],
] );

Kirki::add_field( 'wookit-configuration', [
	'type'        => 'select',
	'settings'    => 'wookit-product-carousel-displaybutton',
	'label'       => esc_html__( 'Display Button'.$onlypro, 'kirki' ),
	'section'     => 'wookit-product-carousel-section',
	'default'     => 'true',
	'priority'    => 10,
	'multiple'    => 0,
  'active_callback'  => [
		[
			'setting'  => 'wookit-product-carousel-on',
			'operator' => '==',
			'value'    => '1',
		],
	],
	'choices'     => [
		'false' => esc_html__( 'No', 'kirki' ),
		'true' => esc_html__( 'Yes', 'kirki' ),
	],
] );

?>