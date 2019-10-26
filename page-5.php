<?php
/*-----------------------------------------------------------------------------------*/
/* Homepage
/*-----------------------------------------------------------------------------------*/
get_header();
?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

		<div class="slider_content">
			<div class="slider_grid"></div>
			<?php
			$images = get_field('home_slideshow_images');
			if( $images ): ?>
			<ul class="front_slider">
				<?php foreach( $images as $image ): ?>
				<li>
					<img src="<?php echo esc_url($image); ?>" />
				</li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
			<!-- .front_slider -->
		</div>
		<!-- .slider_content -->

	<?php endwhile; ?>
<?php else: ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
