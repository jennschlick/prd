<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>


		<?php if ( get_field( 'hero_media' )): ?>
			<div class="hero">
				<?php if ( get_field( 'hero_heading' )): ?>
					<div class="hero-heading">
						<?php the_field( 'hero_heading' ); ?>
					</div>
				<?php endif; ?>
				<video class="hero-video" autoplay loop muted>
				  <source src="<?php the_field( 'hero_media' ); ?>" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
			</div>
		<?php endif; ?>

		<div class="content">
			<div class="wrapper">
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php else : ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
