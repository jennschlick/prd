<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<?php // echo site_url(); ?>
<?php // echo get_template_directory_uri(); ?>
<?php // wp_nav_menu( array( 'theme_location' => 'main', 'container' => 'nav', 'container_id' => 'main-menu' ) ); ?>
