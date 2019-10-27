<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="project">
		  <div class="slider_wrap">
				<?php
				$images = get_field('project_images');
				if( $images ): ?>
				<ul class="<?php if (is_single('98')) { ?>slider-sketchbook<?php } else { ?>slider<?php } ?>">
					<?php foreach( $images as $image ): ?>
					<li>
						<img src="<?php echo esc_url($image); ?>" />
					</li>
					<?php endforeach; ?>
				</ul>
				<!-- .front_slider -->
				<?php endif; ?>
				<!-- .slider -->
		  </div>
			<!-- .slider_wrap -->
			<?php if (!is_single('98')) { ?>
		  <div class="content cf">
		    <div class="col1">
		      <div id="project-info">
		        <h1 class="title"><?php the_title(); ?></h1>
						<?php if(get_field('project_subtitle') || get_field('project_location')) { ?>
						<div class="field field-name-field-project-summary field-type-text-long field-label-hidden">
					    <div class="field-items">
								<div class="field-item even">
									<?php if(get_field('project_subtitle')) { ?><blockquote><p><?php the_field('project_subtitle'); ?></p></blockquote><?php } ?>
									<?php if(get_field('project_location')) { ?><p><?php the_field('project_location'); ?></p><?php } ?>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php if(get_field('project_timeline')) { ?>
		        <div class="field field-name-field-project-timeline field-type-text field-label-inline clearfix">
		          <div class="field-label">Project Timeline:&nbsp;</div>
		          <div class="field-items">
		            <div class="field-item even"><?php the_field('project_timeline'); ?></div>
		          </div>
		        </div>
						<?php } ?>
						<?php if(get_field('project_size')) { ?>
		        <div class="field field-name-field-size field-type-text field-label-inline clearfix">
		          <div class="field-label">Size:&nbsp;</div>
		          <div class="field-items">
		            <div class="field-item even"><?php the_field('project_size'); ?></div>
		          </div>
		        </div>
						<?php } ?>
						<?php if(get_field('project_exhibit_fabrication')) { ?>
		        <div class="field field-name-field-exhibit-fabrication field-type-text field-label-inline clearfix">
		          <div class="field-label">Exhibit Fabrication:&nbsp;</div>
		          <div class="field-items">
		            <div class="field-item even"><?php the_field('project_exhibit_fabrication'); ?></div>
		          </div>
		        </div>
						<?php } ?>
						<?php if(get_field('project_media_production')) { ?>
		        <div class="field field-name-field-media-production field-type-text field-label-inline clearfix">
		          <div class="field-label">Media Production:&nbsp;</div>
		          <div class="field-items">
		            <div class="field-item even"><?php the_field('project_media_production'); ?></div>
		          </div>
		        </div>
						<?php } ?>
		      </div>
					<!-- #project-info -->
		    </div>
				<!-- .col1 -->
		    <div class="col2">
		      <div class="body">
						<?php if(get_field('project_description')) { ?>
							<?php the_field('project_description'); ?>
						<?php } ?>
		      </div>
					<!-- .body -->
		    </div>
				<!-- .col2 -->
		  </div>
			<!-- .content -->
			<?php } ?>
		</div>
		<!-- .project -->

	<?php endwhile; ?>
<?php else : ?>

	<h1>404 &mdash; Page not found</h1>
	<p>This page cannot be found.</p>

<?php endif; ?>

<?php get_footer(); ?>
