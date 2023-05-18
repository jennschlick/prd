<div class="footer" data-aos="fade-up" data-aos-delay="300">
	<div class="wrapper">

		<?php if (!is_page('contact')) : ?>
			<?php if ( get_field( 'page_pre_heading', 15 ) ): ?>
				<div class="h3"><?php the_field( 'page_pre_heading', 15 ); ?></div>
			<?php endif; ?>
			<?php if ( get_field( 'page_heading', 15 )): ?>
				<div class="h1 heading-underline"><?php the_field( 'page_heading', 15 ); ?></div>
			<?php else: ?>
				<div class="h1 heading-underline"><?php echo get_the_title(15); ?></div>
			<?php endif; ?>

			<div class="footer-content">
				<div class="footer-contact">
					<?php if ( get_field( 'contact_email', 15 ) ): ?>
						<div class="footer-email"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 28" class="icon icon-email"><path d="M32 13.884c-.314.36-.713.583-1.145.785-2.659 1.235-5.307 2.499-7.97 3.729-.531.242-.802.559-.935 1.166-.471 2.148-1.037 4.272-1.557 6.406-.113.459-.28.874-.772.997-.521.133-.9-.103-1.229-.518-.889-1.122-1.862-2.179-2.688-3.344-.575-.806-1.105-.988-1.931-.425-.388.262-.855.405-1.282.608-1.2.563-1.518.46-2.094-.711C7.033 15.682 3.672 8.781.302 1.882.047 1.359-.21.825.267.312.75-.208 1.304.04 1.834.257c9.7 4.051 19.4 8.105 29.11 12.15.416.174.771.41 1.056.756v.722-.001ZM4.34 5.304c-.035.03-.073.055-.108.084C5.14 7.25 6.05 9.108 6.96 10.97c1.577 3.235 3.164 6.464 4.712 9.715.26.543.477.597.997.345 2.315-1.125 4.654-2.203 7.14-3.373C14.58 13.479 9.46 9.389 4.34 5.304Zm2.26-.899-.06.104 5.47 4.372c3.096 2.469 6.196 4.934 9.276 7.423.374.301.649.375 1.1.153 1.97-.963 3.966-1.877 6.137-2.894C21.11 10.466 13.852 7.433 6.6 4.405Zm12.716 15.77c-.776.47-1.695.667-2.373 1.31.605.755 1.209 1.511 1.907 2.385.187-.771.335-1.388.481-2.005.143-.598.29-1.195.433-1.779-.226-.123-.339.02-.447.09Z"/></svg><a href="mailto:<?php the_field( 'contact_email', 15 ); ?>" class="link-underline"><?php the_field( 'contact_email', 15 ); ?></a></div>
					<?php endif; ?>

					<?php if ( get_field( 'contact_phone', 15 ) ): ?>
						<div class="footer-phone"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 29" class="icon icon-phone"><path d="M1 13.71C1 6.706 7.95 1.004 16.5 1.004S32 6.706 32 13.71a11.11 11.11 0 0 1-2.66 7.146l1.844 6.139a.783.783 0 0 1-.277.834.831.831 0 0 1-.539.174.824.824 0 0 1-.4-.103l-5.824-3.176a18.162 18.162 0 0 1-7.644 1.691C7.95 26.415 1 20.714 1 13.71Zm15.5 11.117a16.429 16.429 0 0 0 7.293-1.676.837.837 0 0 1 .767 0l4.487 2.47-1.395-4.764a.778.778 0 0 1 .163-.739 9.607 9.607 0 0 0 2.553-6.408c0-6.13-6.224-11.118-13.868-11.118S2.632 7.58 2.632 13.71 8.856 24.827 16.5 24.827Z"/></svg><a href="tel:<?php the_field( 'contact_phone', 15 ); ?>" class="link-underline"><?php the_field( 'contact_phone', 15 ); ?></a></div>
					<?php endif; ?>

					<?php if ( get_field( 'location_1_name', 15 ) || get_field( 'location_1_address', 15 ) || get_field( 'location_2_name', 15 ) || get_field( 'location_2_address', 15 )): ?>
						<div class="footer-locations-wrapper">
							<div class="footer-locations">
								<?php if ( get_field( 'location_1_name', 15 ) || get_field( 'location_1_address', 15 )): ?>
									<div class="footer-location">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 34" class="icon icon-location"><path d="M12 .004c-6.618 0-12 5.46-12 12.158 0 7.935 6.846 14.47 11.114 20.384a1.087 1.087 0 0 0 1.772 0C17.154 26.632 24 20.097 24 12.162 24 5.463 18.617.004 12 .004Zm0 2.2c5.433 0 9.818 4.442 9.818 9.957 0 6.192-5.467 12.146-9.818 17.944-4.351-5.798-9.818-11.752-9.818-17.944 0-5.515 4.386-9.957 9.818-9.957Zm0 4.434c-3 0-5.455 2.463-5.455 5.477 0 3.014 2.454 5.488 5.455 5.488 3 0 5.454-2.474 5.454-5.488 0-3.014-2.453-5.477-5.454-5.477Zm0 2.2c1.82 0 3.273 1.45 3.273 3.277A3.266 3.266 0 0 1 12 15.403a3.266 3.266 0 0 1-3.273-3.288A3.257 3.257 0 0 1 12 8.838Z"/></svg>
										<div>
											<?php if ( get_field( 'location_1_name', 15 ) ): ?>
												<div class="label"><?php the_field( 'location_1_name', 15 ); ?></div>
											<?php endif; ?>
											<?php if ( get_field( 'location_1_address', 15 ) ): ?>
												<?php if ( get_field( 'location_1_google_maps_link', 15 ) ): ?><a href="<?php the_field( 'location_1_google_maps_link', 15 ); ?>"><?php endif; ?><?php the_field( 'location_1_address', 15 ); ?><?php if ( get_field( 'location_1_google_maps_link', 15 ) ): ?></a><?php endif; ?>
											<?php endif; ?>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( get_field( 'location_2_name', 15 ) || get_field( 'location_2_address', 15 )): ?>
									<div class="footer-location">
										<div>
											<?php if ( get_field( 'location_2_name', 15 ) ): ?>
												<div class="label"><?php the_field( 'location_2_name', 15 ); ?></div>
											<?php endif; ?>
											<?php if ( get_field( 'location_2_address', 15 ) ): ?>
												<?php if ( get_field( 'location_2_google_maps_link', 15 ) ): ?><a href="<?php the_field( 'location_2_google_maps_link', 15 ); ?>"><?php endif; ?><?php the_field( 'location_2_address', 15 ); ?><?php if ( get_field( 'location_2_google_maps_link', 15 ) ): ?></a><?php endif; ?>
											<?php endif; ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
					<?php if ( get_field( 'footer_linkedin', 7 ) ): ?>
						<div class="footer-linkedin">
							<a href="<?php the_field( 'footer_linkedin', 7 ); ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 31 31" class="icon icon-linkedin"><path d="M15.5 0C6.936 0 0 6.936 0 15.5S6.936 31 15.5 31 31 24.064 31 15.5 24.064 0 15.5 0ZM9.687 6.975c1.086 0 1.809.723 1.809 1.692s-.723 1.692-1.938 1.692c-1.085 0-1.808-.723-1.808-1.692s.723-1.692 1.938-1.692Zm1.938 14.983H7.75V11.625h3.875v10.333Zm12.917 0h-3.643v-5.644c0-1.563-.969-1.925-1.33-1.925-.362 0-1.576.246-1.576 1.925v5.644H14.22V11.625h3.772v1.447c.49-.84 1.46-1.447 3.28-1.447 1.822 0 3.282 1.447 3.282 4.689v5.644h-.013Z"/></svg></a>
						</div>
					<?php endif; ?>
				</div>

				<div class="footer-map">
					<div class="footer-map-media">
						<?php echo do_shortcode( '[google_map_easy id="1"]' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( get_field( 'footer_deia', 7 ) ): ?>
			<div class="footer-deia">
				<div>
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" class="icon icon-deia"><path d="M13.996 0a14 14 0 1 1-9.895 4.1A13.943 13.943 0 0 1 13.996 0Zm-.089 16.898-2.039 5.633a1.125 1.125 0 0 1-.587.644 1.139 1.139 0 0 1-1.554-1.421l1.422-3.936c.112-.296.202-.601.266-.911a9.24 9.24 0 0 0 .123-.953c.055-.576.094-1.2.123-1.8.03-.598.05-1.18.066-1.66.02-.599-.141-.637-.622-.751l-.1-.023-4.1-.772a1.139 1.139 0 0 1-.736-.47 1.14 1.14 0 0 1 1.15-1.763l4.406.827c.175.016.346.037.526.057.542.074 1.088.115 1.636.12a18.04 18.04 0 0 0 2.036-.152c.205-.023.399-.048.592-.066l4.157-.779a1.14 1.14 0 0 1 .855.162 1.14 1.14 0 0 1 .296 1.594 1.14 1.14 0 0 1-.731.476l-3.973.748c-.132.03-.25.05-.355.066-.415.07-.62.107-.595.697.018.43.07.945.14 1.483.079.63.184 1.3.293 1.913.07.403.137.727.228 1.037.09.31.18.626.316 1.006l1.392 3.85a1.139 1.139 0 1 1-2.141.777l-2.046-5.622-.227-.417-.228.405h.011Zm.089-12.192A2.011 2.011 0 1 1 14 8.728a2.011 2.011 0 0 1-.004-4.022Zm8.28 1.01a11.713 11.713 0 1 0 3.417 8.28 11.68 11.68 0 0 0-3.417-8.28Z"/></svg><span><?php the_field( 'footer_deia', 7 ); ?></span>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( get_field( 'footer_copyright', 7 ) ): ?>
			<div class="footer-copyright">
				<?php the_field( 'footer_copyright', 7 ); ?>
			</div>
		<?php endif; ?>
		
	</div>
</div>

<?php wp_footer(); ?>

<script>
 AOS.init({
   anchorPlacement: 'top-center',
   delay: 100,
   disable: 'mobile',
   duration: 600,
   easing: 'ease-out-cubic',
 });
</script>

<!-- <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
	Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-56526432-1', 'auto');
	ga('send', 'pageview');
</script> -->

</body>
</html>
