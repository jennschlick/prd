<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php if (!is_page('home')) : ?><?php wp_title(''); ?> | <?php endif; ?><?php bloginfo('name'); ?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo site_url(); ?>/site.webmanifest">
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<div class="header">
	<a href="<?php echo site_url(); ?>" class="header-logo">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 91.44 91.44"><title><?php echo get_bloginfo('name'); ?></title><path class="logo-background" d="M0 0h91.44v91.44H0z"/><path class="logo-letter" fill-rule="evenodd" d="M68.02 56.21c-3.72 0-7.41.18-11.1.21 0 0-.22.06-.22.37s.22.39.22.39c.88.14 2.62.18 2.62 1.99v19.09c0 1.81-.97 2.04-2.93 2.04v.75c3.4-.04 7.23.16 10.67.16 10.11 0 15.32-4.13 15.32-12.32 0-6.77-3.51-12.67-14.58-12.67Zm.71 23.72c-2.08-.03-3.36-.1-3.36-2.71V60.07c.02-2.65.09-2.58 2.86-2.55 5.95.07 8.8 4.28 8.8 11.71 0 6.45-3.18 10.77-8.3 10.7Z"/><path class="logo-letter" fill-rule="evenodd" d="M56.69 80.29c-1.71-.34-1.91-.7-2.57-2.05-1.48-2.95-3.78-8.59-7.82-9.07 4.22-1.09 6.91-2.48 6.91-6.22 0-5.05-4.04-6.62-9.7-6.62-3.4 0-7.49.14-10.78.14 0 0-.34.06-.34.36s.3.38.3.38c.88.15 2.46.19 2.46 2V78.3c.11 1.82-1.54 1.93-2.53 2.01 0 0-.35.11-.34.38 0 .27.3.35.3.35h10.43s.34-.01.34-.35c0-.3-.38-.39-.38-.39-1.02-.1-2.71 0-2.71-1.82v-8.5c1.59.07 2.93-.12 4.28.8 2.16 1.48 3.02 7.02 5.45 10.27h6.81l-.11-.74ZM42.88 68.31c-.91.04-1.71 0-2.63 0v-9.32c0-1.73.57-1.47 2.34-1.53 3.19-.1 5.08 1.88 5.08 5.31s-1.53 5.38-4.79 5.53ZM32.33 63.77c0-5.09-4.44-7.33-9.6-7.33-3.85 0-7.58 0-11.3.07 0 0-.25.02-.3.28-.08.34.19.47.19.47 1.98 0 2.66 1.29 2.66 3.11v17.9c0 1.81-1.7 1.92-2.43 1.97 0 0-.35.1-.34.4 0 .31.5.42.5.42h9.85s.46-.11.46-.42c0-.23-.38-.4-.38-.4-1.18-.09-2.39-.2-2.39-2.01l-.02-7.6 2.6-.02c4.84 0 10.51-1.64 10.51-6.83Zm-13.11 5.55V59.14c0-1.89.64-1.61 2.63-1.67 3.58-.11 5.71 2.06 5.71 5.81s-1.73 5.89-5.39 6.05c-1.03.05-1.93 0-2.95 0Z"/></svg>
	</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	<?php wp_nav_menu(array('theme_location' => 'main', 'container' => '')); ?>
</div>