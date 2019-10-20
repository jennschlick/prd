<?php
/*-----------------------------------------------------------------------------------*/
/* Advanced Custom Fields plugin functions
/*-----------------------------------------------------------------------------------*/

function prdgroup_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/fields';
  return $path;
}
add_filter( 'acf/settings/save_json', 'prdgroup_json_save_point' );
