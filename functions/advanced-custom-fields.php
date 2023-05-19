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

// Add Google Maps API key
function prd_google_map_api( $api ) {
	$api['key'] = 'AIzaSyD_lVoOEI5WQCi6I-R0braUkVEXZCmvcL8';
	return $api;   
}
add_filter( 'acf/fields/google_map/api', 'prd_google_map_api' );

// Add options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'    => 'Theme Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

}