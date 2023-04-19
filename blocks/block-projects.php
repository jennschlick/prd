<?php $args = array(
	'post_type' => 'project',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'meta_query' => array(
		array(
			'key' => 'project_featured',
			'value' => '1',
			'compare' => '=='
		)
	)
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) { ?>
	<div class="project-grid">
		<?php  while ($the_query->have_posts()) { $the_query->the_post(); ?>
			<div class="project-preview" style="<?php if(has_post_thumbnail()): ?>background-image: url('<?php the_post_thumbnail_url();?>');<?php endif;?>">
				<a href="<?php the_permalink(); ?>">
					<?php if ( get_field( 'project_institution_name' )): ?>
						<span class="label project-preview-institution"><?php the_field( 'project_institution_name' ); ?></span>
					<?php endif; ?>
					<span class="h2 project-preview-title"><?php the_title(); ?></span>
				</a>
			</div>
		<?php } ?>
	</div>
	<?php wp_reset_postdata(); } ?>