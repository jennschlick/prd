<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="content">
			<div class="wrapper">
				<?php if ( get_field( 'page_pre_heading' ) ): ?>
					<div class="heading-pre-heading"><?php the_field( 'page_pre_heading' ); ?></div>
				<?php endif; ?>

				<?php if ( get_field( 'page_heading' ) ): ?>
					<h1 class="heading-main"><?php the_field( 'page_heading' ); ?></h1>
				<?php else: ?>
					<h1 class="heading-main"><?php the_title(); ?></h1>
				<?php endif; ?>

				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php else : ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
