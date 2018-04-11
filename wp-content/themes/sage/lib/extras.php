<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function remove_plugin_assets() {
  wp_dequeue_style('roots-share-buttons'); // plugins/roots-share-buttons/assets/styles/share-buttons.css?ver=4.5.2
  wp_dequeue_style('gravity-bootstrap'); // plugins/gravity-forms-bootstrap-3-style/gravity-forms-bootstrap.css?ver=1.0
  wp_dequeue_script('roots-share-buttons');
 }

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\remove_plugin_assets', 100);

function my_deregister_scripts(){
 wp_deregister_script( 'wp-embed' ); // /wp/wp-includes/js/wp-embed.js
}
add_action( 'wp_footer',  __NAMESPACE__ . '\\my_deregister_scripts' );
