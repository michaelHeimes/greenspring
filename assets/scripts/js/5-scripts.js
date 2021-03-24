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
	
	//Dual Insight Sliders
	if ( $('.di-slider').length ) {
		
		$('.dual-insights-sliders').imagesLoaded( function() {
			
			$(window).on("load resize", function() {	
				
				var cardHeight = -1;
				
				$('.di-card .inner').each(function() {
					cardHeight =  cardHeight > $(this).height() ?  cardHeight : $(this).height();
				});
				
				$('.di-card .inner').each(function() {
					$(this).css('min-height',  cardHeight);
				});    

				
				var maxHeight = -1;
				$('.di-slider .slick-slide').each(function() {
					if ($(this).height() > maxHeight) {
					    maxHeight = $(this).height();
					}
				});
				
				$('.di-slider .slick-slide').each(function() {
					
					if ( $(this).find('.di-card .inner').length == 2) {
						
					    if ($(this).height() < maxHeight) {
					    	$(this).css('margin', Math.ceil((maxHeight-$(this).height())/2) + 'px 0');
						}
										
					} else {
						
						if ($(this).height() < maxHeight) {
							$(this).css('margin-top', '1px');
							$(this).css('margin-bottom', Math.ceil((maxHeight-$(this).height())));
						}
					}				  
				});

			});

		
			$('.di-slider').each(function( e,i ) {
				
				var $slider = $(this);
				
				var $buttonPrev = $($slider).next('.bottom').find('.button-prev');
				var $buttonNext = $($slider).next('.bottom').find('.button-next');
										
				$($slider).slick({
					slidesToShow: 1,
					slidesToScroll: 1,
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

		
		});
		
	};
	
	
	// Contact Page Form
	if ( $('body').hasClass('page-template-page-contact') ) {
		
		$('.form .gform_body').addClass('grid-container');
		$('.gform_footer').wrap('<div class="form-footer-flex grid-x grid-padding-x" />');

		$('.form-footer-flex').wrap('<div class="grid-container" />');
		$('.gform_footer').addClass('cell text-right');
		

		$('.form .gform_fields').addClass('grid-x grid-padding-x');
		$('.form .gform_fields li.left-group').wrapAll('<div class="left cell small-12 medium-6" />');
		$('.form .gform_fields li.right-group').wrapAll('<div class="right cell small-12 medium-6" />');

	};	
	
	
})(jQuery);