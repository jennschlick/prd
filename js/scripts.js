(function($){

	$(document).ready(function(){

		$('body').delegate('#goto_portfolio', 'click', function(){
			document.location.href = "../portfolio.html";
		});

		$('.slider').bxSlider({
			mode: 'horizontal',
			pager: true,
			infiniteLoop: false,
  			hideControlOnEnd: true,
  			onSlideAfter:  function($slideElement, oldIndex, newIndex){
  				if(newIndex+1 == $('.slider li').length){
  					$('.bx-next').attr('id', 'goto_portfolio');
  				} else {
  					$('.bx-next').removeAttr('id');
  				}
  			}

		});

		$('.front_slider').bxSlider({
			mode: 'fade',
			pager: false,
			auto: true,
			pause: 3000
		});

		$('#menu_button').click(function(){
			$(this).toggleClass('open');
			$('.main_menu').toggleClass('closed');
			return false;
		});

		$('html').click(function(e){
			if ($(e.target).parents().is('.main_menu.open') != 1) {
				$('.main_menu').addClass('closed');
				$('#menu_button').removeClass('open');
			}
		});

		$('.portfolio .item a').hover(
			function(){
				$('span', this).stop().animate({marginTop: -$('span', this).height()-20}, 'fast');
			}, function(){
				$('span', this).stop().animate({marginTop: 0}, 100);
			}
		);


		$('.tabs_navigation a').click(function(event) {
			$('.tabs_content .tab').hide();
			$('.tabs_navigation .active').removeClass("active");
			$(this).addClass('active');
			$($(this).attr('href')).show();
			return false;
		}).filter(':first').addClass('active');

		$('.webform-client-form label').each(function(){
			$('#'+$(this).attr('for')).attr('placeholder', $(this).text());
		}).hide();





		$(window).resize();


	});


	$(window).resize(function(){
		portfolio_rebuild_grid();
		front_rebuild_grid();
	});

	function portfolio_rebuild_grid(){

		if ($(window).width() <= 480){
			$('.portfolio .item').css('height', '');
			return;
		} else if ($(window).width() <= 768){
			var n = 4;
		} else {
			var n = 6;
		}

		$('.portfolio').hide();
		var contWidth = $('.fixwidth').width();
		$('.portfolio .item').removeClass('last');



		var width = Math.ceil((contWidth-n) / n);

		$('.portfolio .item').css({'width': width, 'height': width});
		//$('.portfolio .item:nth-child('+n+'n)').addClass('last').css('width', contWidth - width*(n-1) - n);
		$('.portfolio').show();
	}

	function front_rebuild_grid(){
		var vline = 5;
		var hline = 2;

		if($(window).width() <= 768 && $('body').hasClass('front')){
			vline = 3;
			hline = 1;
		}


		var step = $('#block-system-main').width() / (vline+1);

		$('.slider_grid').html('');

		for(var i = 1; i <= vline; i++){
			var div = $('<div/>').addClass('vline').css('left', i*step);
			$('.slider_grid').append(div);
		}

		for(var i = 1; i <= hline; i++){
			var div = $('<div/>').addClass('hline').css('top', i*step);
			$('.slider_grid').append(div);
		}
	}

})(jQuery)
