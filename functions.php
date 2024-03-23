<?php

define('DEBUG', true);

if (!defined('S_VERSION')) {
  define('S_VERSION', DEBUG ? microtime() : '1.0.0');
}

add_theme_support('title-tag');
add_post_type_support('page', 'excerpt');

if (!is_admin()) {

  function bonbonsshop_theme_setup()
  {

    // Styles
    wp_enqueue_style('bonbonsshop-fonts', get_theme_file_uri('/assets/css/fonts.css'), array(), S_VERSION, 'all');
    wp_enqueue_style('bonbonsshop-styles', get_theme_file_uri('/assets/css/styles.css'), array('bonbonsshop-fonts', 'wp-block-library'), S_VERSION, 'all');

    // Scripts    
    wp_enqueue_script('alpinejs-script', get_theme_file_uri('/assets/js/alpine.min.js'), array(), S_VERSION, true);
    wp_enqueue_script('bonbonsshop-script', get_theme_file_uri('/assets/js/main.js'), array('alpinejs-script'), S_VERSION, true);
  }
  add_action('after_setup_theme', 'bonbonsshop_theme_setup');
}

function bonbonsshop_admin_theme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'bonbonsshop_admin_theme_setup');

/** START Woo */



// START Unhook the WooCommerce wrappers
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// END Unhook the WooCommerce wrappers

function bonbonsshop_woocommerce_template_loop_short_description()
{
  echo '<span class="block px-4 mb-4">' . get_the_excerpt() . '</span>';
}
add_action('woocommerce_after_shop_loop_item_title', 'bonbonsshop_woocommerce_template_loop_short_description', 5);

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


// remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
// function bons_woocommerce_template_loop_product_title()
// {
//   echo '<h2 class="text-2xl font-bold">Suck my dick! hahaha )))</h2>';
// }
// add_action('woocommerce_shop_loop_item_title', 'bons_woocommerce_template_loop_product_title', 10);

/** END Woo */
