<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="hero">
			<div class="hero-heading">
				<?php if ( get_field( 'project_institution_name' )): ?>
					<div class="h3"><?php the_field( 'project_institution_name' ); ?></div>
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
			</div>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		</div>

		<div id="top" class="content">
			<div class="project-introduction">
				<div class="wrapper">
					<div class="wp-block-columns is-layout-flex wp-container-3">
						<div class="wp-block-column is-layout-flow" style="flex-basis:66.66%">
							<?php if ( get_field( 'project_introduction' )): ?>
								<?php the_field( 'project_introduction' ); ?>
							<?php endif; ?>
						</div>
						<div class="wp-block-column is-layout-flow" style="flex-basis:33.33%">
							<ul>
								<?php if ( get_field( 'project_client_name' )): ?>
									<li><span class="label">Client:</span> <?php if ( get_field( 'project_client_link' )): ?><a href="<?php the_field( 'project_client_link' ); ?>"><?php endif; ?><?php the_field( 'project_client_name' ); ?><?php if ( get_field( 'project_client_link' )): ?><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 394.2 393.1"><path d="M22.4 393.1H336c12.3 0 22.4-10.1 22.4-22.4V191.5h-44.8v156.8H44.8V79.5h156.8V34.7H22.4C10.1 34.7 0 44.8 0 57.1v313.6c0 12.3 10.1 22.4 22.4 22.4z"/><path d="m173 189.3 31.4 31.4 145-144.5v48.7h44.8V0H268.8v44.8h48.7L173 189.3z"/></svg></a><?php endif; ?></li>
								<?php endif; ?>

								<?php if ( get_field( 'project_location' )): ?>
									<li><span class="label">Location:</span> <?php if ( get_field( 'project_location_link' )): ?><a href="<?php the_field( 'project_location_link' ); ?>"><?php endif; ?><?php the_field( 'project_location' ); ?><?php if ( get_field( 'project_location_link' )): ?><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 394.2 393.1"><path d="M22.4 393.1H336c12.3 0 22.4-10.1 22.4-22.4V191.5h-44.8v156.8H44.8V79.5h156.8V34.7H22.4C10.1 34.7 0 44.8 0 57.1v313.6c0 12.3 10.1 22.4 22.4 22.4z"/><path d="m173 189.3 31.4 31.4 145-144.5v48.7h44.8V0H268.8v44.8h48.7L173 189.3z"/></svg></a><?php endif; ?></li>
								<?php endif; ?>

								<?php if ( get_field( 'project_timeline' )): ?>
									<li><span class="label">Timeline:</span> <?php the_field( 'project_timeline' ); ?></li>
								<?php endif; ?>

								<?php if ( get_field( 'project_size' )): ?>
									<li><span class="label">Size:</span> <?php the_field( 'project_size' ); ?></li>
								<?php endif; ?>

								<?php if ( get_field( 'project_exhibit_fabrication_credit' )): ?>
									<li><span class="label">Exhibit fabrication:</span> <?php the_field( 'project_exhibit_fabrication_credit' ); ?></li>
								<?php endif; ?>

								<?php if ( get_field( 'project_media_production_credit' )): ?>
									<li><span class="label">Media production:</span> <?php the_field( 'project_media_production_credit' ); ?></li>
								<?php endif; ?>
							</ul>
							<div>
								<?php if ( get_field( 'project_awards' )): ?>
									<div><span class="label">Awards:</span><?php the_field( 'project_awards' ); ?></div>
								<?php endif; ?>
								<?php if ( get_field( 'project_press' )): ?>
									<div><span class="label">Press:</span><?php the_field( 'project_press' ); ?></div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wrapper">
				<?php the_content(); ?>
			</div>

			<div class="breadcrumb">
				<a href="<?php echo get_permalink(13); ?>" class="link-underline link-cta">
					Back to projects
				</a>
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
