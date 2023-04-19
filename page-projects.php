<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div id="top" class="content">
			<div class="wrapper">

				<?php if ( get_field( 'page_pre_heading' ) ): ?>
					<div class="h3"><?php the_field( 'page_pre_heading' ); ?></div>
				<?php endif; ?>

				<?php if ( get_field( 'page_heading' ) ): ?>
					<h1 class="heading-underline"><?php the_field( 'page_heading' ); ?></h1>
				<?php else: ?>
					<h1 class="heading-underline"><?php the_title(); ?></h1>
				<?php endif; ?>

				<?php the_content(); ?>

				<div class="project-grid">
					<?php $args = array(  
						'post_type' => 'project',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'orderby' => 'menu_order',
						'order' => 'ASC',
					);
					$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="project-preview" style="<?php if(has_post_thumbnail()): ?>background-image: url('<?php the_post_thumbnail_url();?>');<?php endif;?> <?php if( get_field('project_preview_size') == '40%' || get_field('project_preview_size') == '60%' ): ?>width: calc(<?php the_field( 'project_preview_size' ); ?> - 10px)<?php else: ?>width: <?php the_field( 'project_preview_size' ); ?><?php endif; ?>">
							<a href="<?php the_permalink(); ?>">
								<?php if ( get_field( 'project_institution_name' )): ?>
									<span class="label project-preview-institution"><?php the_field( 'project_institution_name' ); ?></span>
								<?php endif; ?>
								<span class="h2 project-preview-title"><?php the_title(); ?></span>
							</a>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>
				</div>
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
