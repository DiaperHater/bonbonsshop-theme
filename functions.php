<?php

define('DEBUG', true);

if (!defined('S_VERSION')) {
  define('S_VERSION', DEBUG ? microtime() : '1.0.1');
}

add_theme_support('title-tag');
add_post_type_support('page', 'excerpt');

if (!is_admin()) {

  function bonbonsshop_theme_setup() {

    // Styles
    wp_enqueue_style('bonbonsshop-fonts', get_theme_file_uri('/assets/css/fonts.css'), array(), S_VERSION, 'all');
    wp_enqueue_style('bonbonsshop-styles', get_theme_file_uri('/assets/css/styles.css'), array('bonbonsshop-fonts', 'wp-block-library'), S_VERSION, 'all');

    // Scripts    
    wp_enqueue_script('alpinejs-script', get_theme_file_uri('/assets/js/alpine.min.js'), array(), S_VERSION, true);
    wp_enqueue_script('bonbonsshop-script', get_theme_file_uri('/assets/js/main.js'), array('alpinejs-script'), '0.9.0', true);
  }
  add_action('after_setup_theme', 'bonbonsshop_theme_setup');
}

function bonbonsshop_admin_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'bonbonsshop_admin_theme_setup');

/** START Woo */


function bonbonsshop_change_select_options_button_text($label, $product) {
  if ($product->is_type('variable')) {
    return 'Выберите параметры';
  }
  return $label;
}
add_filter('woocommerce_product_add_to_cart_text', 'bonbonsshop_change_select_options_button_text', 9999, 2);

function custom_woocommerce_auto_complete_order($order_id) {
  if (!$order_id) {

    return;
  }

  $order = wc_get_order($order_id);
  if (!$order->has_status('processing')) {

    $order->update_status('processing');
  }
}
add_action('woocommerce_thankyou', 'custom_woocommerce_auto_complete_order');


function ajax_update_cart_fragment($fragments) {
  ob_start();
  $fragments['#cart-count'] = '<a href="/cart/" id="cart-count" class="flex mt-1 font-bold tracking-wider gap-2text-lg text-new-york-pink hover:text-rosy-brown"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" /> </svg>' . WC()->cart->get_total() . '</a>';
  ob_get_clean();
  return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'ajax_update_cart_fragment');



function bonbonsshop_woocommerce_template_loop_short_description() {
  echo '<span class="block px-4 mb-4">' . get_the_excerpt() . '</span>';
}
add_action('woocommerce_after_shop_loop_item_title', 'bonbonsshop_woocommerce_template_loop_short_description', 5);


remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10); // END Unhook the WooCommerce wrappers

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

/** END Woo */
