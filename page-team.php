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

<!-- 				<p><a href="//staging.theprdgroup.com/wp-content/uploads/placeholder.png" data-modaal-type="image" class="modaal">Show image</a></p>

				<p><a href="#inline-content" data-modaal-type="inline" class="modaal">Show #1</a></p>

				<div id="inline-content" class="modaal-hidden">
				    This is #1
				</div>

				<p><a href="#inline-content2" data-modaal-type="inline" class="modaal">Show #2</a></p>
				
				<div id="inline-content2" class="modaal-hidden">
				    This is #2
				 </div> -->

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
				 				<a href="#team-bio-<?php echo $post->ID; ?>" data-modaal-type="inline" class="modaal">
				 					<?php the_post_thumbnail(); ?>
				 				</a>
				 			</div>
				 		<?php endif; ?>
				 		<?php if ( get_field( 'profile_title' )): ?>
				 			<span class="label team-preview-title"><?php the_field( 'profile_title' ); ?></span>
				 		<?php endif; ?>
				 		<span class="h2 team-preview-name"><?php the_title(); ?></span>

				 		<div id="team-bio-<?php echo $post->ID; ?>" class="modaal-hidden">
				 			<div class="team-bio-content">
					 			<?php if ( has_post_thumbnail() ): ?>
					 				<div class="team-photo">
					 					<?php the_post_thumbnail(); ?>
					 				</div>
					 			<?php endif; ?>

					 			<div class="team-bio">
						 			<?php if ( get_field( 'profile_title' )): ?>
							 			<span class="label team-preview-title"><?php the_field( 'profile_title' ); ?></span>
							 		<?php endif; ?>
							 		<span class="h2 team-preview-name"><?php the_title(); ?></span>

							 		<?php if ( get_field( 'profile_bio' )): ?>
							 			<?php the_field( 'profile_bio' ); ?>
							 		<?php endif; ?>
							 	</div>
						 	</div>
				 		</div>
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
