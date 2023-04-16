<?php
/*-----------------------------------------------------------------------------------*/
/* Admin functions
/*-----------------------------------------------------------------------------------*/

// Remove dashboard welcome panel
remove_action('welcome_panel', 'wp_welcome_panel');

// Remove dashboard widgets
function prd_remove_dashboard_widgets() {
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal');
	remove_meta_box( 'semperplugins-rss-feed', 'dashboard', 'normal');
}
add_action( 'admin_init', 'prd_remove_dashboard_widgets' );

// Remove admin columns
function prd_remove_columns( $columns ) {
	unset($columns['author']);
	unset($columns['categories']);
	unset($columns['comments']);
	unset($columns['date']);
  // unset($columns['seodesc']);
  // unset($columns['seokeywords']);
  // unset($columns['seotitle']);
	unset($columns['tags']);
	return $columns;
}
function remove_column_init() {
	add_filter( 'manage_posts_columns' , 'prd_remove_columns' );
	add_filter( 'manage_pages_columns' , 'prd_remove_columns' );
}
add_action( 'admin_init' , 'remove_column_init' );

// Increase number of pages and posts shown per page
function prd_per_page( $result, $option, $user ) {
	return 100;
}
add_filter( 'get_user_option_edit_page_per_page', 'prd_per_page', 10, 3 );
add_filter( 'get_user_option_edit_post_per_page', 'prd_per_page', 10, 3 );

// Remove comment support
function prd_remove_comment_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'prd_remove_comment_support', 100 );

// Replace admin bar greeting
function prd_replace_howdy_greeting( $wp_admin_bar ) {
	$my_account=$wp_admin_bar->get_node('my-account');
	$newtitle = str_replace( 'Howdy, ', '', $my_account->title );
	$wp_admin_bar->add_node( array(
		'id' => 'my-account',
		'title' => $newtitle,
	) );
}
add_filter( 'admin_bar_menu', 'prd_replace_howdy_greeting', 12 );

// Remove admin bar links
function prd_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'about' );
	$wp_admin_bar->remove_menu( 'comments' );
	$wp_admin_bar->remove_menu( 'customize' );
	$wp_admin_bar->remove_menu( 'documentation' );
	$wp_admin_bar->remove_menu( 'feedback' );
	$wp_admin_bar->remove_menu( 'menus' );
	$wp_admin_bar->remove_menu( 'new-content' );
	$wp_admin_bar->remove_menu( 'search' );
	$wp_admin_bar->remove_menu( 'support-forums' );
	$wp_admin_bar->remove_menu( 'themes' );
	$wp_admin_bar->remove_menu( 'wp-logo' );
	$wp_admin_bar->remove_menu( 'wporg' );
}
add_action( 'wp_before_admin_bar_render', 'prd_admin_bar_render' );

// Remove admin menu links
function prd_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'prd_remove_admin_menus' );

// Remove help tabs
function prd_remove_help_tabs() {
	$screen = get_current_screen();
	$screen->remove_help_tabs();
}
add_action('admin_head', 'prd_remove_help_tabs');

// Add custom colors
function prd_colors() {
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Orange', '@@textdomain' ),
				'slug' => 'orange',
				'color' => '#F7941D',
			),
			array(
				'name'  => esc_html__( 'Light orange', '@@textdomain' ),
				'slug' => 'orange-light',
				'color' => '#FFF0E0',
			),
			array(
				'name'  => esc_html__( 'Blue', '@@textdomain' ),
				'slug' => 'blue',
				'color' => '#0097DC',
			),
			array(
				'name'  => esc_html__( 'Light blue', '@@textdomain' ),
				'slug' => 'blue-light',
				'color' => '#E7F2FA',
			),
			array(
				'name'  => esc_html__( 'Dark gray', '@@textdomain' ),
				'slug' => 'gray-dark',
				'color' => '#212121',
			),
			array(
				'name'  => esc_html__( 'Medium gray', '@@textdomain' ),
				'slug' => 'gray-medium',
				'color' => '#8F8F8F',
			),
			array(
				'name'  => esc_html__( 'Light gray', '@@textdomain' ),
				'slug' => 'gray-light',
				'color' => '#FAFAFA',
			),
			array(
				'name'  => esc_html__( 'White', '@@textdomain' ),
				'slug' => 'white',
				'color' => '#FFFFFF',
			),
		)
	);
}
add_action( 'after_setup_theme', 'prd_colors' );

// Add custom font sizes
function prd_font_sizes() {
	add_theme_support('disable-custom-font-sizes');
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Small'),
			'size' => 16,
			'slug' => 'small'
		),
		array(
			'name' => __( 'Normal'),
			'size' => 18,
			'slug' => 'normal'
		),
		array(
			'name' => __( 'Large'),
			'size' => 20,
			'slug' => 'large'
		),
		array(
			'name' => __( 'Huge'),
			'size' => 40,
			'slug' => 'huge'
		)
	) );
}
add_action( 'after_setup_theme', 'prd_font_sizes' );