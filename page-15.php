<?php
/*-----------------------------------------------------------------------------------*/
/* Contact page
/*-----------------------------------------------------------------------------------*/
get_header();
?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

		<div class="contacts">
			<div class="contacts_wrapper">
				<div class="map_wrapper">
					<iframe width="1000" height="415" id="gmap_canvas" src="https://maps.google.com/maps?q=14555%20Avion%20Parkway%2C%20Suite%20175%20Chantilly%2C%20Virginia%2020151&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>
			</div>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php else: ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
