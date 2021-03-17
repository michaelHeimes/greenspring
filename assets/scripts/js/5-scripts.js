(function($) {
	'use strict';
	
	$('.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});	
	
	$(document).on('click', 'a#menu-toggle', function(){
		$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
		console.log("loaded");
	});	
	
	//Slider Module
	if ( $('.slider').length ) {
		
		$('.img-slider').each(function( e,i ) {
			
			var splitSliderImg = {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				dots: false,
				autoplay: false,
				asNavFor: '.slider-module',
				fade: true,
				speed: 700,
				infinite: true,
				prevArrow: $(".sm-slide-prev"),
				nextArrow: $(".sm-slide-next"),
			};

			$('.img-slider').slick(splitSliderImg);
			
			var $square = $(this).prev('.green-box');
			var $button = $(this).next('.slider-nav').find('button');
			
			let tl = gsap.timeline({
				paused: true,
				yoyo: true,
			});
			
			tl.to($square, {duration: .350, x: 19, y: 21})
			  .to($square, {duration: .350, x: 0, y: 0});
			
			$button.on('click', function(e) {
				tl.reversed() ? tl.play() : tl.reverse();
			});
		
		});
		
		$('.text-slider').each(function( e,i ) {
			
			var splitSliderText = {
				slidesToShow: 1,
				arrows: false,
				dots: true,
				centerMode: true,
				autoplay: false,
				slidesToScroll: 1,
				asNavFor: '.slider-module',
				speed: 700,
				focusOnSelect:true,
				infinite: true,
	
			};
			 
			$('.text-slider').slick(splitSliderText);	
		
		});
		

	};
	
})(jQuery);