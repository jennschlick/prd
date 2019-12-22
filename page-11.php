<?php
/*-----------------------------------------------------------------------------------*/
/* About page
/*-----------------------------------------------------------------------------------*/
get_header();
?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

		<div class="content_header cf">
			<?php if( have_rows('about_columns') ): ?>
				<?php while( have_rows('about_columns') ): the_row(); ?>
					<?php if( have_rows('about_column') ): ?>
						<?php while( have_rows('about_column') ): the_row(); ?>
							<div class="content_header_img">
								<div class="content_header_img_front">
									<?php if(get_sub_field('about_column_link')) { ?><a href="<?php the_sub_field('about_column_link'); ?>"><?php } ?>
										<?php if(get_sub_field('about_column_image')) { ?>
											<img src="<?php the_sub_field('about_column_image'); ?>" />
										<?php } ?>
										<?php if(get_sub_field('about_column_title')) { ?>
											<span><?php the_sub_field('about_column_title'); ?></span>
										<?php } ?>
									<?php if(get_sub_field('about_column_link')) { ?></a><?php } ?>
								</div>
								<!-- .content_header_img_front -->
							</div>
							<!-- .content_header_img -->
						<?php endwhile; ?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<!-- .content_header -->
		<div class="about content cf">
			<?php if(get_field('about_title')) { ?>
				<img src="<?php the_field('about_title'); ?>" />
			<?php } ?>
		</div>
		<!-- .about.content -->

	<?php endwhile; ?>
<?php else: ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
