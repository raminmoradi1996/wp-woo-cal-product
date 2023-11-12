<?php

/*
Plugin Name: افزونه محاسبه محصولات ووکامرس
Plugin URI: https://sitesazz.ir/
Description: افزونه محاسبه محصولات ووکامرس
Version: 1.0
Author: sitesazz
Author URI: https://sitesazz.ir/
*/

use STZCPW\inc\info_stz;

if (!defined('ABSPATH')) {
  exit();
}


// function load STZ plugin 
function STZ_CPW_LOADER()
{

  // insert table 

  global $wpdb, $charset_collate;
  $table = $wpdb->prefix . "stz_cpw_woo_cal_product";

  $query = "CREATE TABLE $table (
    id int(11) NOT NULL AUTO_INCREMENT,
    stz_date int(255) NOT NULL, PRIMARY KEY (id),
    stz_key varchar(10000) CHARACTER SET utf8 NOT NULL,
    stz_value varchar(10000) CHARACTER SET utf8 NOT NULL,
    status int(11) NOT NULL
    ) $charset_collate;";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($query);

  // inc vendor autoload composer 
  require_once 'vendor/autoload.php';

  // inc class stz 
  new info_stz();
}
add_action('plugins_loaded', 'STZ_CPW_LOADER', 99);




// add_filter('woocommerce_cart_ready_to_calc_shipping', 'delshipping_calc_in_cart', 1, 1);
add_action('woocommerce_before_calculate_totals', 'update_custom_price', 1, 1);
function update_custom_price($cart_object)
{
  // if (!WC()->session->__isset("reload_checkout")) {
  foreach ($cart_object->cart_contents as $key => $value) {
    if (isset($value["custom_price"])) {
      //for woocommerce version lower than 3
      //$value['data']->price = $value["custom_price"];
      //for woocommerce version +3
      $value['data']->set_price($value["custom_price"]);
    }
  }

  return $cart_object;
  // }
}

// Mini cart: Display custom price 
add_filter('woocommerce_cart_item_price', 'filter_cart_item_price', 10, 3);
function filter_cart_item_price($price_html, $cart_item, $cart_item_key)
{

  if (isset($cart_item['custom_price'])) {
    $args = array('price' => $cart_item['custom_price']);

    if (WC()->cart->display_prices_including_tax()) {
      $product_price = wc_get_price_including_tax($cart_item['data'], $args);
    } else {
      $product_price = wc_get_price_excluding_tax($cart_item['data'], $args);
    }
    return wc_price($product_price);
  }
  return $price_html;
}


add_filter('woocommerce_get_item_data', 'add_custom_discription_item', 10, 2);
function add_custom_discription_item($other_data, $cart_item)
{
  $post_data = get_post($cart_item['product_id']);

  $other_data[] = array(
    'key' => 'عرض',
    'display' =>  $cart_item['custom_info']['width']
  );
  $other_data[] = array(
    'key' => 'طول',
    'display' =>  $cart_item['custom_info']['length']
  );
  $other_data[] = array(
    'key' => 'جنس ',
    'display' =>  $cart_item['custom_info']['name']
  );
  $other_data[] = array(
    'key' => 'توضیحات',
    'display' =>  $cart_item['custom_discription']
  );
  return $other_data;
}


remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
add_action('woocommerce_after_shop_loop_item', 'bbloomer_view_product_button', 10);

function bbloomer_view_product_button()
{
  global $product;
  $link = $product->get_permalink();
  echo '<a href="' . $link . '" class="button addtocartbutton">مشاهده</a>';
}
