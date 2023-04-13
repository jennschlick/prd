<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="content">
			<div class="wrapper">
				<?php if ( get_field( 'page_pre_heading' )): ?>
					<div class="heading-pre-heading"><?php the_field( 'page_pre_heading' ); ?></div>
				<?php endif; ?>

				<?php if ( get_field( 'page_heading' )): ?>
					<h1 class="heading-main"><?php the_field( 'page_heading' ); ?></h1>
				<?php else: ?>
					<h1 class="heading-main"><?php the_title(); ?></h1>
				<?php endif; ?>

				<?php if ( get_field( 'contact_email' ) ): ?>
					<a href="mailto:<?php the_field( 'contact_email' ); ?>"><?php the_field( 'contact_email' ); ?></a>
				<?php endif; ?>

				<?php if ( get_field( 'contact_phone' ) ): ?>
					<a href="tel:<?php the_field( 'contact_phone' ); ?>"><?php the_field( 'contact_phone' ); ?></a>
				<?php endif; ?>

				<?php if ( get_field( 'location_1_name' ) ): ?>
					<?php the_field( 'location_1_name' ); ?>
				<?php endif; ?>

				<?php if ( get_field( 'location_1_address' ) ): ?>
					<?php the_field( 'location_1_address' ); ?>
				<?php endif; ?>

				<?php if ( get_field( 'location_2_name' ) ): ?>
					<?php the_field( 'location_2_name' ); ?>
				<?php endif; ?>

				<?php if ( get_field( 'location_2_address' ) ): ?>
					<?php the_field( 'location_2_address' ); ?>
				<?php endif; ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php else : ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
