<?php 


function wookit_styles_and_scripts(){
  //styles
  wp_enqueue_style( 'wookit-css',  plugin_dir_url( __FILE__ ) . 'styles/wookit-styles.css', '', rand(0, 100) );
  
  //scripts
  wp_enqueue_script( 'jquery');
  wp_enqueue_script( 'wookit-js',  plugin_dir_url( __FILE__ ) . 'scripts/wookit-scripts.js', '', rand(0, 100) );
}
add_action('wp_enqueue_scripts','wookit_styles_and_scripts');




function wookit_customizer_styles_and_scripts(){
  //styles
  wp_enqueue_style( 'wookit-customizercss',  plugin_dir_url( __FILE__ ) . 'styles/wookit-customizer.css', '', rand(0, 100) );
  
  //scripts
  wp_enqueue_script( 'wookit-customizerjs',  plugin_dir_url( __FILE__ ) . 'scripts/wookit-customizer.js', '', rand(0, 100) );
}
add_action( 'customize_controls_enqueue_scripts', 'wookit_customizer_styles_and_scripts' );



/*============================ Body classes ===============================*/
function wookit_body_classes($classes){
  $classes[] = 'wookit-shop';
  
  return $classes;
}

function wookit_add_body_classes(){
  if(function_exists('is_shop')){
    if(is_shop()){
      add_filter('body_class', 'wookit_body_classes');
    }
  }
}
add_action('posts_selection', 'wookit_add_body_classes');

/*=========================== DEACTIVATE CHECKOUT BILLING && SHIPPING FIELDS =================================*/



if(!function_exists('wookit_dequeue_checkout_fields')){
	function wookit_dequeue_checkout_fields($fields = NULL){
    
    $billingdisabled = get_option('wookit-checkout-billingfields');
    $shippingdisabled = get_option('wookit-checkout-shippingfields');
    
		$billingfields = array(
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
		);
    
    $shippingfields = array(
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
		);
    
  
    
    

		if(isset($billingdisabled) && is_array($billingdisabled)){

			foreach($billingfields as $billingfield){

					if(!in_array ( $billingfield , $billingdisabled ) ){

						unset($fields['billing'][$billingfield]);

					}

			}
		}
    
    if(isset($shippingdisabled) && is_array($shippingdisabled)){

			foreach($shippingfields as $shippingfield){

					if(!in_array ( $shippingfield , $shippingdisabled ) ){

						unset($fields['shipping'][$shippingfield]);

					}

			}
		}



		return $fields;

	}

}

add_filter( 'woocommerce_checkout_fields' , 'wookit_dequeue_checkout_fields' );




/*============================ Change Billing && Shipping Fields Order ==============================*/



if(!function_exists('wookit_order_checkout_fields')){

	function wookit_order_checkout_fields($fields = NULL){
    $value = 10;

		if(!empty(get_option('wookit-checkout-sortfields'))){
			$order = get_option('wookit-checkout-sortfields');
			if(isset($order)){
				foreach($order as $order_key => $order_value){
					if($order_value != 'placebo'){
						$fields[$order_value]['priority'] = intval($value);
            $value = $value + 10;
					}
				}
			}
      
			
		}

		return $fields;


	}

}
add_filter( 'woocommerce_default_address_fields' , 'wookit_order_checkout_fields',999 );


if(!function_exists('wookit_order_checkout_specificfields')){

	function wookit_order_checkout_specificfields($fields = NULL){
    $value = 10;

		if(!empty(get_option('wookit-checkout-sortfields'))){
			$order = get_option('wookit-checkout-sortfields');
			if(isset($order)){
				foreach($order as $order_key => $order_value){
					if($order_value != 'placebo'){
						$finalvalue = 'billing_'.$order_value;
            $fields[$finalvalue]['priority'] = intval($value);
            $value = $value + 10;
					}
				}
			}
			
		}
    
		return $fields;


	}

}
add_filter( 'woocommerce_billing_fields' , 'wookit_order_checkout_specificfields',10000);




/*=============================== Change Checkout Labels ==============================*/

if(!function_exists('wookit_checkout_labels')){
	function wookit_checkout_labels($fields = NULL){
		

		if(!empty(get_option('wookit-checkout-labels-firstname'))){
			$fields['billing']['billing_first_name']['label'] = get_option('wookit-checkout-labels-firstname');
		}
		if(!empty(get_option('wookit-checkout-labels-lastname'))){
			$fields['billing']['billing_last_name']['label'] = get_option('wookit-checkout-labels-lastname');
		}
		if(!empty(get_option('wookit-checkout-labels-company'))){
			$fields['billing']['billing_company']['label'] = get_option('wookit-checkout-labels-company');
		}
		if(!empty(get_option('wookit-checkout-labels-address1'))){
			$fields['billing']['billing_address_1']['label'] = get_option('wookit-checkout-labels-address1');
		}
		if(!empty(get_option('wookit-checkout-labels-address2'))){
			$fields['billing']['billing_address_2']['label'] = get_option('wookit-checkout-labels-address2');
		}
    if(!empty(get_option('wookit-checkout-labels-city'))){
			$fields['billing']['billing_city']['label'] = get_option('wookit-checkout-labels-city');
		}
		if(!empty(get_option('wookit-checkout-labels-postcode'))){
			$fields['billing']['billing_postcode']['label'] = get_option('wookit-checkout-labels-postcode');
		}
		if(!empty(get_option('wookit-checkout-labels-country'))){
			$fields['billing']['billing_country']['label'] = get_option('wookit-checkout-labels-country');
		}
		if(!empty(get_option('wookit-checkout-labels-state'))){
			$fields['billing']['billing_state']['label'] = get_option('wookit-checkout-labels-state');
		}
		if(!empty(get_option('wookit-checkout-labels-email'))){
			$fields['billing']['billing_email']['label'] = get_option('wookit-checkout-labels-email');
		}
		if(!empty(get_option('wookit-checkout-labels-phone'))){
			$fields['billing']['billing_phone']['label'] = get_option('wookit-checkout-labels-phone');
		}

		return $fields;

	}

}


add_filter( 'woocommerce_checkout_fields' , 'wookit_checkout_labels',999 );


if(!function_exists('wookit_checkout_labels_fix')){
	function wookit_checkout_labels_fix($fields = NULL){
		

		if(!empty(get_option('wookit-checkout-labels-firstname'))){
			$fields['billing']['billing_first_name']['label'] = get_option('wookit-checkout-labels-firstname');
		}
		if(!empty(get_option('wookit-checkout-labels-lastname'))){
			$fields['billing']['billing_last_name']['label'] = get_option('wookit-checkout-labels-lastname');
		}
		if(!empty(get_option('wookit-checkout-labels-company'))){
			$fields['billing']['billing_company']['label'] = get_option('wookit-checkout-labels-company');
		}
		if(!empty(get_option('wookit-checkout-labels-address1'))){
			$fields['billing']['billing_address_1']['label'] = get_option('wookit-checkout-labels-address1');
		}
		if(!empty(get_option('wookit-checkout-labels-address2'))){
			$fields['billing']['billing_address_2']['label'] = get_option('wookit-checkout-labels-address2');
		}
    if(!empty(get_option('wookit-checkout-labels-city'))){
			$fields['billing']['billing_city']['label'] = get_option('wookit-checkout-labels-city');
		}
		if(!empty(get_option('wookit-checkout-labels-postcode'))){
			$fields['billing']['billing_postcode']['label'] = get_option('wookit-checkout-labels-postcode');
		}
		if(!empty(get_option('wookit-checkout-labels-country'))){
			$fields['billing']['billing_country']['label'] = get_option('wookit-checkout-labels-country');
		}
		if(!empty(get_option('wookit-checkout-labels-state'))){
			$fields['billing']['billing_state']['label'] = get_option('wookit-checkout-labels-state');
		}
		if(!empty(get_option('wookit-checkout-labels-email'))){
			$fields['billing']['billing_email']['label'] = get_option('wookit-checkout-labels-email');
		}
		if(!empty(get_option('wookit-checkout-labels-phone'))){
			$fields['billing']['billing_phone']['label'] = get_option('wookit-checkout-labels-phone');
		}

		return $fields;

	}

}

add_filter('woocommerce_billing_fields', 'wookit_checkout_labels_fix',999);

/*=================== deactivate password strength ============================*/

if(!function_exists('wookit_remove_password_strength')){
	function wookit_remove_password_strength() {
		
		$passwordstrength = get_option('wookit-password-strength');

		if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) && $passwordstrength == 'disabled') {
			wp_dequeue_script( 'wc-password-strength-meter' );
		}
	}
}
add_action( 'wp_print_scripts', 'wookit_remove_password_strength', 100 );


/*============================= add to cart button text ==========================================*/

if(!function_exists('wookit_custom_cart_button_text')){
	function wookit_custom_cart_button_text() {

		$addtocart = 'Add to cart';
		if(!empty(get_option('wookit-product-buttontext'))){$addtocart = get_option('wookit-product-buttontext');}

			return __( $addtocart, 'woocommerce' );
	}
}

	add_filter( 'woocommerce_product_single_add_to_cart_text', 'wookit_custom_cart_button_text', 99 );

?>