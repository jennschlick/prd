<div class="footer">
	<div class="wrapper">
		<?php if (!is_page('contact')) : ?>
			<?php if ( get_field( 'page_pre_heading', 15 ) ): ?>
				<div class="heading-pre-heading"><?php the_field( 'page_pre_heading', 15 ); ?></div>
			<?php endif; ?>
			<?php if ( get_field( 'page_heading', 15 ) ): ?>
				<div class="h1 heading-main"><?php the_field( 'page_heading', 15 ); ?></div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( get_field( 'footer_linkedin', 7 ) ): ?>
			<div class="footer-linkedin">
				<a href="<?php the_field( 'footer_linkedin', 7 ); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="none"><path d="M15.5 0C6.936 0 0 6.936 0 15.5S6.936 31 15.5 31 31 24.064 31 15.5 24.064 0 15.5 0ZM9.687 6.975c1.086 0 1.809.723 1.809 1.692s-.723 1.692-1.938 1.692c-1.085 0-1.808-.723-1.808-1.692s.723-1.692 1.938-1.692Zm1.938 14.983H7.75V11.625h3.875v10.333Zm12.917 0h-3.643v-5.644c0-1.563-.969-1.925-1.33-1.925-.362 0-1.576.246-1.576 1.925v5.644H14.22V11.625h3.772v1.447c.49-.84 1.46-1.447 3.28-1.447 1.822 0 3.282 1.447 3.282 4.689v5.644h-.013Z"/></svg></a>
			</div>
		<?php endif; ?>

		<?php if ( get_field( 'footer_deia', 7 ) ): ?>
			<div class="footer-deia">
				<div>
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none"><path d="M13.996 0a14 14 0 1 1-9.895 4.1A13.943 13.943 0 0 1 13.996 0Zm-.089 16.898-2.039 5.633a1.125 1.125 0 0 1-.587.644 1.139 1.139 0 0 1-1.554-1.421l1.422-3.936c.112-.296.202-.601.266-.911a9.24 9.24 0 0 0 .123-.953c.055-.576.094-1.2.123-1.8.03-.598.05-1.18.066-1.66.02-.599-.141-.637-.622-.751l-.1-.023-4.1-.772a1.139 1.139 0 0 1-.736-.47 1.14 1.14 0 0 1 1.15-1.763l4.406.827c.175.016.346.037.526.057.542.074 1.088.115 1.636.12.68-.012 1.36-.063 2.036-.152.205-.023.399-.048.592-.066l4.157-.779c.295-.061.603-.003.855.162a1.14 1.14 0 0 1 .296 1.594 1.14 1.14 0 0 1-.731.476l-3.973.748c-.132.03-.25.05-.355.066-.415.07-.62.107-.595.697.018.43.07.945.14 1.483.079.63.184 1.3.293 1.913.07.403.137.727.228 1.037.09.31.18.626.316 1.006l1.392 3.85a1.139 1.139 0 1 1-2.141.777l-2.046-5.622-.227-.417-.228.405h.011Zm.089-12.192A2.011 2.011 0 1 1 14 8.728a2.011 2.011 0 0 1-.004-4.022Zm8.28 1.01a11.713 11.713 0 1 0 3.417 8.28 11.68 11.68 0 0 0-3.417-8.28Z"/></svg><span><?php the_field( 'footer_deia', 7 ); ?></span>
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

</body>
</html>
