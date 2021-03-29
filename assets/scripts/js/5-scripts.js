(function($) {
	'use strict';
	
	$('#main-nav.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});

	$('ul#dropdown-nav a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});
	
	$(document).on('click', 'a#menu-toggle', function(){
		$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
	});	
	
	// Slider Module
	if ( $('.split-slider').length ) {
		
		$('.split-slider.module').each(function( e,i ) {
			
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
			
			var $square = $(this).find('.bg-box');
			var $button = $(this).find('button');
						
			let tl = gsap.timeline({
				paused: true,
				yoyo: true,
			});
			
			tl.to($square, {duration: .350, x: 19, y: 21})
			  .to($square, {duration: .350, x: 0, y: 0});
			  
			$('.img-slider').slick(splitSliderImg).on({
				beforeChange: function (event, slick, currentSlide, nextSlide) {
					tl.play(0);
	    		}
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
	
	// Overflow Slider Module
	if ( $('.overflow-slider-slider').length ) {
	
		$('.overflow-slider-slider').each(function( e,i ) {
			
			var $this = $(this);
			var $buttonPrev = $($this).parent().siblings('.left').find('.os-slide-prev');
			var $buttonNext = $($this).parent().siblings('.left').find('.os-slide-next');
			
			console.log($buttonPrev);
			
			$($this).slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
			});
			
			$buttonPrev.click(function(e){
				$this.slick('slickPrev');
			});

			$buttonNext.click(function(e){
				$this.slick('slickNext');
			});
		
		});
	
	};
	
	//Dual Insight Sliders
	if ( $('.di-slider').length ) {
				
			
		$(window).on("load resize", function() {	
			
			
			
			
/*
				// Get an array of all element heights
				var elementHeights = $('.di-card .inner').map(function() {
					return $(this).height();
				}).get();
				
				// Math.max takes a variable number of arguments
				// `apply` is equivalent to passing each height as an argument
				var maxHeight = Math.max.apply(null, elementHeights);
				
				// Set each height to the max height
				$('.di-card .inner').height(maxHeight);
*/
			
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
	
	
	
	// Team Filter
	if ($('body').hasClass('post-type-archive-team_member')) {
		 
		var $filter_team = function(query_type) {
			if (query_type == 'all') query_type = '';


			if ( query_type.length > 0) {

				var items = $('.card-grid > .post-card');
				
				if (items) {
					items.each(function(index, el) {
						var type_match = false;
						var item = $(this);

						// type
						if (query_type.length > 0) {
							if (query_type instanceof jQuery) {
								// jquery object check
								var item_type = item.data('type').toLowerCase();
								query_type.each(function(index, el) {
									var term = $(this).data('term').toLowerCase();
									if (item_type.indexOf('.'+term+'.') !== -1 || term.length == 0) {
										type_match = true;
									}
								});
							} else {
								// string check
								var item_type = item.data('type').toLowerCase();
								if (item_type.indexOf('.'+query_type+'.') !== -1 || query_type.length == 0) {
									type_match = true;
								}
							}
						} else {
							type_match = true;
						}
						
						if (type_match) {
							let _item = $(this);
							_item.show(700).promise().done( function(){ 
								_item.css('opacity', '');
							});								
						} else {
							$(this).hide(500);
						}
						
					}).promise().done( function(){ 
						$(window).trigger('grid-update');
					});
				}

			} else {
				$('.card-grid > .post-card').show(700).promise().done( function(){ 
					$(window).trigger('grid-update');
				});
			}
		}

		// filter the grid on nav click
		$(document).on('click', '.filter-buttons button.filter-btn', function(event) {
			
			event.preventDefault();

			// which filter are we seeing mobile/desktop
			let post_filter = $('.post-filter');

			if (post_filter.length > 0) {

				if ($(this).hasClass('active')) {
					$(this).removeClass('active');
				} else {
					$(this).addClass('active');				
				}
			
				var query_type = post_filter.find('button.active[data-tax="type"]');
				
				if ($('.card-grid').length > 0) {
					$filter_team(query_type);
				}	

			}	

		});

	}

	
	
})(jQuery);