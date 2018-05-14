<?php
/*
Plugin Name:  Growth & Purpose Plugin
Plugin URI:   https://growthandpurpose.com
Description:  Allows custom functionality for $this-> website
Version:      1.0.1
Author:       Ayezee33
Author URI:   https://alexzerbach.com/
License:      MIT License
*/
require_once(dirname(__FILE__) . '/shortcodes/in-post-cta.php');

//Adds resources taxonomies
add_action( 'init', 'create_resources_tax' );

function create_resources_tax() {
	register_taxonomy(
		'purpose',
    'gnp_resources',
		array(
			'label' => __( 'Resource Type' ),
			'rewrite' => array( 'slug' => 'resource-category' ),
			'hierarchical' => true,
		)
	);
}
//Adds custom post type Stories
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'gnp_resources',
    array(
      'labels' => array(
        'name' => __( 'Resources' ),
        'singular_name' => __( 'Resource' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'rewrite' => array('slug' => 'resources'),
      'taxonomies'  => array( 'purpose' ),
			'supports' => array( 'title', 'editor', 'thumbnail' ),
    )
  );
}


?>
