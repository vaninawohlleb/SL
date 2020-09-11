<?php
/*
Plugin Name: Register Custom Post Types
Description: Plugin to register custom post type 1
Version: 1.0
Author: Vanina Wohlleb
License: GPLv2
*/

function register_post_type_1() {
  $labels = array(
    'name' => __('Projects'),
    'singular_name' => __('Project'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New Project'),
    'edit_item' => __('Edit Project'),
    'new_item' => __('New Project'),
    'view_item' => __('View Projects'),
    'search_items' => __('Search Projects'),
    'not_found' => __('No Projects found'),
    'not_found_in_trash' => __('No Projects Found in trash')
  );

  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail',
      'page-attributes',
      'revisions'
    ),
    'taxonomies' => 'category',
    'show_in_rest' => true,
  );

  register_post_type('project', $args);
};

function register_post_type_2() {
  $labels = array(
    'name' => __('Products'),
    'singular_name' => __('Product'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New Product'),
    'edit_item' => __('Edit Product'),
    'new_item' => __('New Product'),
    'view_item' => __('View Product'),
    'search_items' => __('Search Products'),
    'not_found' => __('No Products found'),
    'not_found_in_trash' => __('No Products Found in trash')
  );

  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail',
      'page-attributes',
      'revisions'
    ),
    'taxonomies' => 'category',
    'show_in_rest' => true,
  );

  register_post_type('product', $args);
};

function register_post_type_3() {
  $labels = array(
    'name' => __('Team Members'),
    'singular_name' => __('Team Member'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New Team Member'),
    'edit_item' => __('Edit Team Member'),
    'new_item' => __('New Team Member'),
    'view_item' => __('View Team Members'),
    'search_items' => __('Search Team Members'),
    'not_found' => __('No Team Members found'),
    'not_found_in_trash' => __('No Team Members Found in trash')
  );

  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail',
      'page-attributes',
      'revisions'
    ),
    'rewrite'   => array( 'slug' => 'team-member' ),
    'show_in_rest' => true,
  );

  register_post_type('team-member', $args);
}

function register_post_type_4() {
  $labels = array(
    'name' => __('Processes'),
    'singular_name' => __('Process'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New Process'),
    'edit_item' => __('Edit Process'),
    'new_item' => __('New Process'),
    'view_item' => __('View Processes'),
    'search_items' => __('Search Processes'),
    'not_found' => __('No Processes found'),
    'not_found_in_trash' => __('No Processes Found in trash')
  );

  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'thumbnail',
      'revisions'
    ),
    'show_in_rest' => true,
  );

  register_post_type('process', $args);
}

function register_post_type_5() {
  $labels = array(
    'name' => __('Features'),
    'singular_name' => __('Feature'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New Feature'),
    'edit_item' => __('Edit Feature'),
    'new_item' => __('New Feature'),
    'view_item' => __('View Features'),
    'search_items' => __('Search Features'),
    'not_found' => __('No Features found'),
    'not_found_in_trash' => __('No Features Found in trash')
  );

  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'custom-fields',
      'revisions'
    ),
    'show_in_rest' => true,
  );

  register_post_type('feature', $args);
}

function add_taxonomies_to_custom_post_types() {
	register_taxonomy_for_object_type( 'category', 'project' );
	register_taxonomy_for_object_type( 'category', 'product' );
  register_taxonomy_for_object_type( 'teams', 'team-member' );
}

add_action('init', 'register_post_type_1');
add_action('init', 'register_post_type_2');
add_action('init', 'register_post_type_3');
add_action('init', 'register_post_type_4');
add_action('init', 'register_post_type_5');
add_action( 'init', 'add_taxonomies_to_custom_post_types');