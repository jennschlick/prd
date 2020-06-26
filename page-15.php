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
					<iframe src="https://www.google.com/maps/d/embed?mid=17IPQq_MSkiwClb6ozwzT4j6Iym4HWLCq&z=11" width="1000" height="415""></iframe>
				</div>
				<!-- .map_wrapper -->
			</div>
			<!-- .contacts_wrapper -->
			<div class="content cf">
				<?php the_content(); ?>
			</div>
			<!-- .content -->
		</div>
		<!-- .contacts -->

	<?php endwhile; ?>
<?php else: ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
