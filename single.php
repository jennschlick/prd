<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div id="top" class="content">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php else : ?>

	<div id="top" class="content">
		<div class="wrapper">
			<h1>404 &mdash; Page not found</h1>
			<p>This page cannot be found.</p>
		</div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
