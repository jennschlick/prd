<?php
/*-----------------------------------------------------------------------------------*/
/* Advanced Custom Fields plugin functions
/*-----------------------------------------------------------------------------------*/

// Save field groups
function prd_json_save_point( $path ) {
	$path = get_stylesheet_directory() . '/acf-json';
	return $path;
}
add_filter( 'acf/settings/save_json', 'prd_json_save_point' );

// Allow shortcodes in text fields
add_filter( 'acf/format_value/type=text', 'do_shortcode' );