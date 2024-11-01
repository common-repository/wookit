<?php 
$modules = array('carousel');

foreach($modules as $module) {
  if(file_exists(plugin_dir_path(__FILE__) . $module.'/'.$module.'.php')){
    require_once(plugin_dir_path(__FILE__) . $module.'/'.$module.'.php');
  }
}






//single product positions 
function wookit_before_single_product(){
  echo '<div class="wookit_before_single_product"></div>';
}
add_action('woocommerce_before_single_product', 'wookit_before_single_product');

function wookit_after_single_product(){
  echo '<div class="wookit_after_single_product"></div>';
}
add_action('woocommerce_after_single_product', 'wookit_after_single_product');

function wookit_product_thumbnails(){
  echo '<div class="wookit_product_thumbnails"></div>';
}
add_action('woocommerce_product_thumbnails', 'wookit_product_thumbnails');

function wookit_after_add_to_cart_button(){
  echo '<div class="wookit_after_add_to_cart_button"></div>';
}
add_action('woocommerce_after_add_to_cart_button', 'wookit_after_add_to_cart_button');

?>