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

				<div class="team-grid">
					<?php $args = array(  
						'post_type' => 'team',
						'post_status' => 'publish',
						'posts_per_page' => -1, 
						'orderby' => 'menu_order', 
						'order' => 'ASC', 
					);
					$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="team-preview">
							<?php if ( has_post_thumbnail() ): ?>
								<div class="team-preview-photo">
									<a href="#">
										<?php the_post_thumbnail(); ?>
									</a>
								</div>
							<?php endif; ?>
							<?php if ( get_field( 'profile_title' )): ?>
								<span class="label team-preview-title"><?php the_field( 'profile_title' ); ?></span>
							<?php endif; ?>
							<span class="h2 team-preview-name"><?php the_title(); ?></span>
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