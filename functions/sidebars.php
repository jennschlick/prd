<?php
/*-----------------------------------------------------------------------------------*/
/* Sidebar functions
/*-----------------------------------------------------------------------------------*/

function prdgroup_register_sidebars() {
	// register_sidebar(array(
	// 	'id' => 'sidebar',
	// 	'name' => 'Sidebar',
	// 	'description' => '',
	// 	'before_widget' => '<div>',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h3>',
	// 	'after_title' => '</h3>',
	// 	'empty_title'=> '',
	// ));
}
add_action( 'widgets_init', 'prdgroup_register_sidebars' );
