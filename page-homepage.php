<?php get_header();?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post();?>

		<?php // if (get_field('field')): ?>
			<?php // the_field('field');?>
		<?php // endif;?>

	<?php endwhile;?>
<?php else: ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif;?>

<?php get_footer();?>
