<?php
/*-----------------------------------------------------------------------------------*/
/* Custom post types
/*-----------------------------------------------------------------------------------*/

function prd_custom_post_types() {

	// People
	$labels = array(
		'name' => __('People'),
		'singular_name' => __('Person'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add Person'),
		'edit_item' => __('Edit Person'),
		'new_item' => __('Add Person'),
		'view_item' => __('View Person'),
		'search_items' => __('Search People'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => false,
		'publicly_queryable' => false,
		'menu_icon' => 'dashicons-admin-page',
		'show_ui' => true,
		'query_var' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor','thumbnail','revisions'),
		'has_archive' => false
	);
	register_post_type('person', $args);

	// Projects
	$labels = array(
		'name' => __('Projects'),
		'singular_name' => __('Project'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('Add Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => false,
		'publicly_queryable' => true,
		'menu_icon' => 'dashicons-admin-page',
		'show_ui' => true,
		'query_var' => false,
		'rewrite' => array('slug' => 'project'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor','thumbnail','revisions'),
		'has_archive' => false
	);
	register_post_type('project', $args);
}
add_action('init', 'prd_custom_post_types');
