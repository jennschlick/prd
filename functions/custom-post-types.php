<?php
/*-----------------------------------------------------------------------------------*/
/* Custom post types
/*-----------------------------------------------------------------------------------*/

function prdgroup_custom_post_types() {

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
		'public' => true,
		'publicly_queryable' => true,
		'menu_icon' => 'dashicons-admin-page',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor','thumbnail','revisions'),
		'has_archive' => true,
		'rewrite' => array('slug' => 'portfolio'),
	);

	register_post_type('project', $args);
}
add_action('init', 'prdgroup_custom_post_types');
