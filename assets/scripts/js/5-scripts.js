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
	
	//Slider Module
	if ( $('.slider').length ) {
		
		$('.slider.module').each(function( e,i ) {
			
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
	
	
	
	// Team Filter
	if ($('body').hasClass('post-type-archive-team_member')) {
		
/*
		//Hide all filter buttons except for Status: Active
		$('.buttons-group').not('#status-dropdown').slideUp(0).css('opacity', '0');
		
		//Make filter show BOTH Active and Realized as default with Status Filter open
		$('.filter-group.status .show-filter').attr('data-click-state', '1');
		$('.filter-group.status .show-filter').addClass('open');
		$('.grid-filter button#filter-active').addClass('active');
		$('.company-cards-wrap > .single-company-card:not([data-status=".active."])').hide();
		
*/
		//Filter Animations
/*
		$('.filter-group').on('click', 'button.show-filter', function() {
			   
			var $filterShow = $(this);
							
			var $gridFilter = $(this).parents('.filter-group').find('.buttons-group');
											
			if($(this).attr('data-click-state') == 1) {
				$(this).attr('data-click-state', 0);
				$($gridFilter).animate({ opacity: 0 }, 250);
				$(this).removeClass('open');
				$($gridFilter).slideUp(300);
		      }
		    else {
			    $(this).addClass('open');
			    $(this).attr('data-click-state', 1);
				$($gridFilter).slideDown(300);
				$($gridFilter).animate({ opacity: 1 }, 250);
		    }
		});		
*/	

		/**
		*Logo Card Heights
		*/

/*
		var setHeight = function() {

			var $card = $('.company-cards-wrap .single-company-card');				
			var $cardWidth = $($card).width();
							
			$($card).css('min-height', $cardWidth);
			
		};
			
		$('.canvas-wrapper').imagesLoaded( function() {
			setHeight();
		});
		
		$(window).resize(function() {
			setHeight();
		});
*/
		
		
		/**
		 * JS Filtering
		 * filter porfolio items
		 * @param  {jQuery Object} query_type
		 * @param  {jQuery Object} query_industry
		 * @param  {jQuery Object} query_status
		 * @param  {jQuery Object} query_catslyst
		 * @param  {jQuery Object} query_ownership
		 * @return nothing
		 */
		 
		 
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

		// remove all filters			
/*
		$(document).on('click', 'button.clear-filters', function(event) {
			event.preventDefault();
			
			$(this).fadeOut(0);

			$('.filter-group-wrap .grid-filter button.filter-btn').removeClass('active');

			var query_type = $('.filter-group-wrap .grid-filter button.active[data-tax="type"]');
			
			if ($('.company-cards-wrap').length > 0) {
				$filter_team(query_type, query_industry, query_status, query_catalyst, query_ownership);
			}			

		});
*/

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
		

		// event after grid is filtered
/*
		$(window).on('grid-update', function(event) {
			$(document).trigger('blazy-revalidate');

			$('.filter-group-wrap .grid-filter button.filter-btn').not(this).prop('disabled', false);

			$(window).trigger('equal-watch');
		});
*/


	}

	
	
})(jQuery);