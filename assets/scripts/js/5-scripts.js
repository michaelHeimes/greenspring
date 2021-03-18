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
	

	if ( $('.di-slider').length ) {
		
/*
		var maxHeight = -1;
$('.di-card .inner').each(function() {
  if ($(this).height() > maxHeight) {
    maxHeight = $(this).height();
  }
});
$('.di-card .inner').each(function() {
  if ($(this).height() < maxHeight) {
    $(this).css('margin', Math.ceil((maxHeight-$(this).height())/2) + 'px 0');
  }
});
*/
		$('.dual-insights-sliders').imagesLoaded( function() {
			$(window).on("load resize", function() {	
				// Get an array of all element heights
				var elementHeights = $('.di-card').map(function() {
					return $(this).height();
				}).get();
				
				// Math.max takes a variable number of arguments
				// `apply` is equivalent to passing each height as an argument
				var maxHeight = Math.max.apply(null, elementHeights);
				
				// Set each height to the max height
	// 			$('.di-slider .slick-list').height(maxHeight * 2);
	
				
				$('.di-slider .slick-list').css('min-height', (maxHeight * 2) + 179);
				
				console.log(maxHeight);
				
			});
		
		});
		
		$('.di-slider').each(function( e,i ) {
			
			var $slider = $(this);
			
			var $buttonPrev = $($slider).next('.bottom').find('.button-prev');
			var $buttonNext = $($slider).next('.bottom').find('.button-next');
			
			console.log($buttonPrev);
					
			$($slider).slick({
				slidesToShow: 2,
				slidesToScroll: 2,
				arrows: true,
				dots: false,
				vertical: true,
				infinite: true,
				rows: 0,
				verticalSwiping: true,
				prevArrow: $($buttonPrev),
				nextArrow: $($buttonNext),
			});			
			
		});
		
	};
	
})(jQuery);