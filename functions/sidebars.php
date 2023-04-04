<?php
/*-----------------------------------------------------------------------------------*/
/* Sidebar functions
/*-----------------------------------------------------------------------------------*/

function prd_register_sidebars() {
	register_sidebar(array(
		'id' => 'footer',
		'name' => 'Footer',
		'description' => '',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));
}
add_action( 'widgets_init', 'prd_register_sidebars' );
