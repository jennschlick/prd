<?php
/*-----------------------------------------------------------------------------------*/
/* Custom post types
/*-----------------------------------------------------------------------------------*/

function prd_custom_post_types() {

	// Projects
	$labels = array(
		'name' => __('Projects'),
		'singular_name' => __('Project'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add'),
		'edit_item' => __('Edit'),
		'new_item' => __('Add'),
		'view_item' => __('View'),
		'search_items' => __('Search'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'menu_icon' => 'dashicons-admin-page',
		'show_ui' => true,
		'query_var' => false,
		'rewrite' => array('slug' => 'project'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'show_in_rest' => true,
		'supports' => array('title','editor','thumbnail','revisions'),
		'has_archive' => false
	);
	register_post_type('project', $args);

	// Team
	$labels = array(
		'name' => __('Team'),
		'singular_name' => __('Team member'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add'),
		'edit_item' => __('Edit'),
		'new_item' => __('Add'),
		'view_item' => __('View'),
		'search_items' => __('Search'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => false,
		'publicly_queryable' => true,
		'menu_icon' => 'dashicons-admin-page',
		'menu_position'=> 27,
		'show_ui' => true,
		'query_var' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'show_in_rest' => true,
		'supports' => array('title','editor','thumbnail','revisions'),
		'has_archive' => false
	);
	register_post_type('team', $args);
}
add_action('init', 'prd_custom_post_types');
