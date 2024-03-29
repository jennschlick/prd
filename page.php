<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div id="top" class="content">
			<div class="wrapper">
				<?php if ( $post->post_parent ) { ?>
					<div class="breadcrumb">
						<a href="<?php echo get_permalink( $post->post_parent ); ?>" class="link-underline link-cta">
							Back to <?php echo get_the_title( $post->post_parent ); ?>
						</a>
					</div>
				<?php } ?>

				<?php if ( get_field( 'page_pre_heading' ) ): ?>
					<div class="h3"><?php the_field( 'page_pre_heading' ); ?></div>
				<?php endif; ?>

				<?php if ( get_field( 'page_heading' ) ): ?>
					<h1 class="heading-underline"><?php the_field( 'page_heading' ); ?></h1>
				<?php else: ?>
					<h1 class="heading-underline"><?php the_title(); ?></h1>
				<?php endif; ?>

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
