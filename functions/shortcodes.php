<?php
/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/

// Current year
// Usage: [year]
function prd_current_year($atts) {
 return date('Y');
}
add_shortcode('year', 'prd_current_year');

// Site URL
// Usage: [url]
// function prd_shortcode_site_url($atts, $content = null) {
//  return get_bloginfo('url');
// }
// add_shortcode('url', 'prd_shortcode_site_url');

// Theme URL
// Usage: [theme]
// function prd_shortcode_theme_url($atts, $content = null) {
//  return get_bloginfo('template_url');
// }
// add_shortcode('theme', 'prd_shortcode_theme_url');