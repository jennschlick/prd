<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<div class="portfolio_wrapper">
		<div class="portfolio" style="display: block;">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="item item_<?php the_id(); ?>">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?>
						<span style="margin-top: 0px;"><?php if(get_field('project_preview_title')) : ?><?php the_field('project_preview_title'); ?><?php else: ?><?php the_title(); ?><?php endif; ?></span>
					</a>
				</div>
				<!-- .item -->
				<?php if( $wp_query->current_post == 7 ) { ?>
				<div class="item item_static"></div>
				<?php } ?>
			<?php endwhile; ?>
		</div>
		<!-- .portfolio -->
	</div>
	<!-- .portfolio_wrapper -->
<?php else : ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
