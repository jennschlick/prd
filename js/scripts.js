// Open external links in a new tab
window.addEventListener("DOMContentLoaded", e => {
  document.querySelectorAll('a[href]').forEach(a => {
    if (location.hostname == new URL(a.href).hostname)
      return;
    a.target = "_blank";
    a.rel = "noreferrer nofollow noopener";
  });
});

// (function($){

// 	$(document).ready(function(){
		
// 	});

// })(jQuery)
