<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url(); ?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url(); ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo site_url(); ?>/site.webmanifest">
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<div class="fixwidth">

<div class="header cf">
	<a href="<?php echo site_url(); ?>" class="logo"><?php echo get_bloginfo('name'); ?></a>
	<div class="slogan"><?php echo get_bloginfo('description'); ?></div>
	<a href="#" id="menu_button"></a>
	<?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '', 'menu_id' => 'main_menu', 'menu_class' => 'main_menu closed' ) ); ?>
</div>
<!-- .header -->

<div class="region region-content">
<div id="block-system-main" class="block block-system">
<div class="block_content naked">
