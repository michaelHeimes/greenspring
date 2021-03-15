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
	
})(jQuery);