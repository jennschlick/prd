// Open external links in a new tab
window.addEventListener("DOMContentLoaded", e => {
	document.querySelectorAll('a[href]').forEach(a => {
		if (location.hostname == new URL(a.href).hostname)
			return;
		a.target = "_blank";
		a.rel = "noreferrer nofollow noopener";
	});
});

(function($) {

	// Add class to header on scroll
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1) {
			$('.header').addClass("sticky");
		}
		else {
			$('.header').removeClass("sticky");
		}
	});

})( jQuery );
