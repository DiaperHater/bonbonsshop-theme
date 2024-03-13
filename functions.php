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

// CPT
// function register_custom_post_types()
// {
//   register_post_type(
//     'cpt',
//     array(
//       'labels'      => array(
//         'name'          => __('CPT', 'bonbonsshop'),
//         'singular_name' => __('CPT', 'bonbonsshop'),
//       ),
//       'public'      => true,
//       'has_archive' => false,
//       'menu_icon' => 'dashicons-awards',
//       'supports' => array('title'),
//       'rewrite' => array(
//         'with_front' => false,
//         'slug' => 'cpt'
//       )
//     )
//   );
// }
// add_action('init', 'register_custom_post_types');


//Custom Taxonomies
// function register_custom_taxonomies()
// {
//   register_taxonomy('cpt-category', 'cpt', array(
//     'label' => 'Category',
//     'hierarchical' => true
//   ));
// }
// add_action('init', 'register_custom_taxonomies');


// Shortcodes
// function register_shortcodes()
// {
//
//   function print_shortcode($atts)
//   {
//     ob_start();
//     get_template_part('template-parts/content/shortcode', 'name');
//     return ob_get_clean();
//   }
//   add_shortcode('shortcodename', 'print_shortcode');
// }
// add_action('init', 'register_shortcodes');


// CF7
// add_filter('wpcf7_autop_or_not', '__return_false');
