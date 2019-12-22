<?php
/*-----------------------------------------------------------------------------------*/
/* Why We Do It
/*-----------------------------------------------------------------------------------*/
get_header();
?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

		<div class="content_header content_header_about_subpage cf">
			<div class="content_header_left_column_img">
				<div class="content_header_left_column_img_front">
					<h1><?php the_title(); ?></h1>
					<?php if(get_field('about_subpage_left_column_image')) { ?>
					<img src="<?php the_field('about_subpage_left_column_image'); ?>" />
					<?php } ?>
				</div>
				<!-- .content_header_left_column_img_front -->
			</div>
			<!-- .content_header_left_column_img -->
			<div class="content_header_right_column_img"<?php if(get_field('about_subpage_right_column_image')) { ?> style="background-image:url(<?php the_field('about_subpage_right_column_image'); ?>)"<?php } ?>>
			</div>
			<!-- .content_header_right_column_img -->
		</div>
		<!-- .content_header -->
		<div class="about about_subpage about_why content cf">
			<div class="about_inner">
				<?php the_content(); ?>
			</div>
			<!-- .about_inner -->
			<div class="about_pager">
				<div class="about_pager_prev">
					<a href="<?php echo esc_url(get_page_link(315)); ?>">What We Do</a>
				</div>
				<div class="about_pager_next">
				</div>
			</div>
			<!-- .about-pager -->
		</div>
		<!-- .about.content -->

	<?php endwhile; ?>
<?php else: ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
