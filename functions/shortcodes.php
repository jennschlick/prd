<?php
/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/

// Current year
// Usage: [year]
// function prd_current_year($atts) {
//  return date('Y');
// }
// add_shortcode('year', 'prd_current_year');

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

// Permalink
// Usage: [permalink id=49]
// function prd_permalink($atts) {
//  extract(shortcode_atts(array(
//      'id' => 1,
//      'text' => ""
//  ), $atts));

//  if ($text) {
//      $url = get_permalink($id);
//      return "<a href='$url'>$text</a>";
//  } else {
//      return get_permalink($id);
//  }
// }
// add_shortcode('permalink', 'prd_permalink');

// Button with icon
// Usage: [button link="http://www.example.com" target="blank" icon="icon1|icon2" text="Lorem ipsum"]
// function prd_button($atts) {
//   $a = shortcode_atts(array(
//   'link' => '#',
//   'icon' => '',
//   'text' => '',
//   'target' => ('blank' == $target) ? '_blank' : '',
//   ), $atts );
//   $output = '<p><a href="' . esc_url( $a['link'] ) . '" class="button ' . esc_attr( $a['icon'] ) . '" target="' . esc_attr($a['target']) . '">' . esc_attr( $a['text'] ) . '</a></p>';
//   return $output;
// }
// add_shortcode('button', 'prd_button');

// Link with icon
// Usage: [arrow link="http://www.example.com" target="blank" text="Lorem ipsum"]
// function prd_link($atts, $content = null) {
// 	extract(shortcode_atts(array(
// 		'link'    => '',
// 		'target' => '',
// 		'text'   => '',
// 	), $atts));

// 	$content = $text ? $text : $content;

// 	if ($link) {
// 		$link_attr = array(
// 			'href'   => esc_url($link),
// 			'target' => ('blank' == $target) ? '_blank' : '',
// 			'class'  => 'link-arrow'
// 		);

// 		$link_attrs_str = '';

// 		foreach ($link_attr as $key => $val) {
// 			if ($val) {
// 				$link_attrs_str .= ' ' . $key . '="' . $val . '"';
// 			}
// 		}
// 		return '<p><a' . $link_attrs_str . '><span>' . do_shortcode($content) . '</span></a></p>';
// 	}
// }
// add_shortcode('arrow', 'prd_link');
