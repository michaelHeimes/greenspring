(function($) {
// 	'use strict';
	
	$('#main-nav.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});

	$('ul#dropdown-nav a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});
	
	$('ul#dropdown-nav a[href="#"]').css('cursor', 'default');
	
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


//Klarity Quiz
	if ( $('.klarity.module').length ) {
		
		var currentTab = 0; // Current tab is set to be the first tab (0)
		showTab(currentTab); // Display the current tab
		var answersValuesArray = kq_script_vars.answerValuesArray;
		var sectionTitlesArray = kq_script_vars.sectionTitlesArray;
		var allFeedbackArray = kq_script_vars.allFeedbackArray;
		var allQuestionsArray = kq_script_vars.allQuestionsArray;
		var klarityFormIntro = kq_script_vars.klarityFormIntro;
		var klarityDisclaimer = kq_script_vars.klarityDisclaimer;
				
		////// This function will display the specified tab of the form ...
		///// began with simplest example of wizard =- https://www.w3schools.com/howto/howto_js_form_steps.asp - needed to make multiple validation additions
		function showTab(n) {
		
			var x = document.getElementsByClassName("tab");
			x[n].style.display = "block";
			// ... and fix the Previous/Next buttons:
			if (n == 0) {
				document.getElementById("prevBtn").style.display = "none";
			} else {
				document.getElementById("prevBtn").style.display = "inline";
			}
			if (n == (x.length - 1)) {
				document.getElementById("nextBtn").innerHTML = "Submit";
				attachSubmit();
			} else {
				document.getElementById("nextBtn").innerHTML = "Next";
			}
			fixStepIndicator(n);
		}
		
		////// This function will turn our giant query string of results into something more useful
		///// from https://stackoverflow.com/a/16215183
		function deparam(query) {
			var pairs, i, keyValuePair, key, value, map = [];
			// remove leading question mark if its there
			if (query.slice(0, 1) === '?') {
				query = query.slice(1);
			}
			if (query !== '') {
				pairs = query.split('&');
				for (i = 0; i < pairs.length; i += 1) {
					keyValuePair = pairs[i].split('=');
					key = decodeURIComponent(keyValuePair[0]);
					value = (keyValuePair.length > 1) ? decodeURIComponent(keyValuePair[1]) : undefined;
					map[key] = value;
				}
			}
			return map;
		}
		
		///////////////////////////////////////////////////
		////// this giant beast will run all the calculations
		function calculateKlarity(queryString){
			var map = deparam(queryString);
			console.log(map);
			var arrayLength = Object.keys(map).length;
			var totalCounter = 0; //// used to check against key length
			var testCounter = 0;
			var testQArray = []; //// array we will stuff question group numbers into to test against
			var answersArray = [];
			var tempAnswersArray = [];
			var tempTotal = 0;
			var sectionCounter = 0;
			var questionCounter = 0;
			var tempMyScore = 0; //// section scoring
			var tempTotalPossible = 0; //// section scoring
			var output = ""; //// IMPORTANT dis is the object that gets passed to front
			var outputChunk = ""; //// for compiling sub-sections to then add to *output*
			var natchLangAnswers = ""; //// the only way for this to be dynamic and stuff into a Gravity form (presently) is to concatenate these and stuff them into a single hidden field
			var results = ""; //// output will contain extensive HTML for the on-screen visual. This will contain screen-readable answers.
		
			////// the map holds all the values
			for (var key in map) {
				totalCounter++;
				if (map.hasOwnProperty(key)) {
					//// quiz sections are represented as X in 'option-X-#' so that we can group them for arithmetic
					var isOption = key.indexOf('option');
					if( isOption !== -1){
						//// cut out the section number for a grouping between the dashes (-)
						var firstDash = key.indexOf('-');
						var sectionNumber = key.substring( firstDash+1, key.length);
						var secondDash = sectionNumber.indexOf('-');
						sectionNumber = sectionNumber.substring(0, secondDash);
						var count=testQArray.length;
						var isThere = false;
						for(var m=0;m<count;m++){
							if(testQArray[m]===sectionNumber){
								isThere = true;
							}
						}
		        if(!isThere){
		          ////// This begins one of the results sections
		          output += "<div class='klarity-results-section cell small-12 medium-6 tablet-3'><div class='klarity-results-inner'>";
		          output += "<div class='section-count'>" + ('0' + (testQArray.length+1)).slice(-2) + ":</div>";
		          results = results + "<h2 style='background: #96cb59; color: #fff; padding: 10px; font-size: 20px;'>" + sectionTitlesArray[testQArray.length] + "</h2>";
		              testQArray.push(sectionNumber);
		
		              ////reset math check
		              if(testQArray.length>1){ //// HACK - 1 set because first array will be empty
		
		                //// DO WE NEED TO COUNT THESE HERE!?
		                testCounter++;
		                sectionCounter++;
		                questionCounter = 0;
		
		              }
		
		        }//// end if(!isThere)
						var x = map[key];
						///// this is where I need to grab the yes/no/notsure feedback value and stuff that into an array
						var num = answersValuesArray[testCounter][x];
						var numToWord = 'Yes'; //// YES / NO / NOT SURE are hard-coded as answers
						if(x == 1){
							numToWord = 'No';
						}else if(x == 2){
							numToWord = 'Not Sure';
						}
						tempAnswersArray.push(num);
						tempTotal = tempTotal + num;
		
						tempMyScore = tempMyScore + answersValuesArray[sectionCounter][x];
						tempTotalPossible = tempTotalPossible + answersValuesArray[sectionCounter][0];
						////// BUILD THE QUESTION-BY-QUESTION RESULTS HERE
		        results += "<h4 style='color: #40474f; font-size: 14px;'>" + allQuestionsArray[sectionCounter][questionCounter] + "</h4>";
		        results += "<p style='padding: 0 10px; color: #40474f;'>You answered: <strong>" + numToWord + "</strong>.</p>";
		        results += allFeedbackArray[sectionCounter][questionCounter][x];
		
						questionCounter++;
					} ///// end if is OPTION
					else{
		
						natchLangAnswers = natchLangAnswers + key + ": " + map[key] + " | ";
		
					}
					output = output + outputChunk;
					outputChunk = "";
				}///// end if map has propertykey
				if(questionCounter == allQuestionsArray[sectionCounter].length){
				  var percentScore = (tempMyScore/tempTotalPossible)*100;
		
		      var statusIcon = '';
		      var statusText = '';
		
		      if(percentScore >= 100) {
		        statusIcon = '<div class="status-icon green-icon"></div>';
		        statusText = 'Nice work!  Your plan appears to be working well in this area.';
		        results += "<h3 style='background: #96cb59; color: #fff; padding: 5px 10px;'>Nice work!  Your plan appears to be working well in this area.</h3>";
		      }
		      else if(percentScore >= 50) {
		        statusIcon = '<div class="status-icon yellow-icon"></div>';
		        statusText = 'Almost there!  Your plan appears to be doing a number of things right but could still get better in this area.';
		        results += "<h3 style='background: #f3c200; color: #fff; padding: 5px 10px;'>Almost there!  Your plan appears to be doing a number of things right but could still get better in this area.</h3>";
		      }
		      else {
		        statusIcon = '<div class="status-icon"></div>';
		        statusText = 'Needs improvement! Your plan looks like it needs help in this area.';
		        results += "<h3 style='background: #c90000; color: #fff; padding: 5px 10px;'>Needs improvement! Your plan looks like it needs help in this area.</h3>";
		      }
					output += statusIcon;
		      output +=  "<h6>" + sectionTitlesArray[testQArray.length-1] + "</h6>"+statusText+"</div></div>";
		      //// runs every question so only output on last question of set
					tempMyScore = 0;
					tempTotalPossible = 0;
				}
		
				if(totalCounter == arrayLength){
					answersArray.push(tempAnswersArray);
				}
		
/*
				ga('create', 'UA-85975096-1', 'auto');//// UA-23634609-1 is PROD //// UA-85975096-1 is DEV //
				var pushPageToGoogle = '/klarity-quotient/results';
				if(pushPageToGoogle){
					////// be sure GA is being loaded
					ga('set', 'page', pushPageToGoogle);
					ga('send', 'pageview');
					console.log(' pushPage ' + pushPageToGoogle);
				}
*/
			}
		
		
			outputChunk = ""; //// pass  outputChunk to output
		
			jQuery('#form-buttons').remove();
			jQuery('#klarity-form-intro').html(klarityFormIntro);
			jQuery('#field_3_11').html(output); //// this is an HTML field only good for DISPLAYING results - cannot capture data
			jQuery('#input_3_12').val(results); //// custom field will allow sending simple HTML
			//jQuery('#input_3_9').val(output); //// this is a hidden field that will transmit the results data
			jQuery('#input_3_10').val(natchLangAnswers); //// this is where we stuff the freeform answers into a hidden field
			//var disclaimerText = "<div class='col-sm-12'>" + klarityDisclaimer + "</div>";
			//jQuery('#klarity-disclaimer').html(disclaimerText);
			jQuery('#final-form').css("visibility", "visible");
			jQuery('#final-form').css("display", "block");
			
			$('li#field_3_11').addClass('grid-x grid-padding-x');
		
		  var parentClasses = '#final-form';
		  var elemClass = '.klarity-results-inner';
		  var capHeight = 0;
		
		  $(elemClass).css('height', 'auto');
		
		  if(!$('.navbar-toggle').is(':visible')){
		
		    $(parentClasses).each(function(e){
		      capHeight = 0;
		      $(elemClass,$(this)).each(function(e){
		        if($(this).outerHeight() > capHeight) {
		          capHeight = $(this).outerHeight();
		        }
		      });
		      $(elemClass,$(this)).css('height', capHeight);
		    });
		  }
		}
		
		jQuery(document).bind('gform_confirmation_loaded', function(event, formId){
			jQuery('#klarity-form-intro').css("visibility", "hidden");
			jQuery('#klarity-form-intro').css("display", "hidden");
		});
		
		
		
		
		function processForm() {
			var queryString = jQuery('#kquotient').serialize();
			calculateKlarity(queryString);
			// You must return false to prevent the default form behavior
			return false;
		}
		
		function attachSubmit(){
			var form = document.getElementById('kquotient');
			if (form.attachEvent) {
				form.attachEvent("submit", processForm);
			} else {
				form.addEventListener("submit", processForm);
			}
		}
		
		
		function nextPrev(n) {
			// This function will figure out which tab to display
			var x = document.getElementsByClassName("tab");
			// Exit the function if any field in the current tab is invalid:
			if (n == 1 && !validateForm()) return false;
			// Hide the current tab:
			x[currentTab].style.display = "none";
			// Increase or decrease the current tab by 1:
			currentTab = currentTab + n;
			// if you have reached the end of the form... :
			if (currentTab >= x.length) {
				//...the form gets submitted:
				//document.getElementById("kquotient").submit();
				processForm();
				return false;
			}
			// Otherwise, display the correct tab:
			showTab(currentTab);
		
/*
			ga('create', 'UA-85975096-1', 'auto');//// UA-23634609-1 is PROD //// UA-85975096-1 is DEV //
			var pushPageToGoogle = '/klarity-quotient/' + currentTab;
			if(pushPageToGoogle){
				////// be sure GA is being loaded
				ga('set', 'page', pushPageToGoogle);
				ga('send', 'pageview');
				console.log(' pushPage ' + pushPageToGoogle);
			}
*/
		}
		
		$(document).on('click', 'button#prevBtn', function(e){
			e.preventDefault();
			nextPrev(-1);
		});

		$(document).on('click', 'button#nextBtn', function(e){
			e.preventDefault();
			nextPrev(1);
		});
		
		function validateRadio (radios){
			for (var i = 0; i < radios.length; ++ i){
				if (radios [i].checked) return true;
			}
			return false;
		}
		
		function validateForm() {
			//console.log('validate section ' + (currentTab+1));
			var checkThis = '#quiz-section-' + (currentTab+1);
			if(jQuery( checkThis ).hasClass( "radio" )){
				var groups = [];
				jQuery( checkThis+'>.radio-question .radio-answers>input' ).each(function (index, value){
						var needle = jQuery(value).attr('name');
						var count=groups.length;
						var isThere = false;
						for(var i=0;i<count;i++){
							if(groups[i]===needle){
								isThere = true;
							}
						}
						if(!isThere){
							groups.push(needle);
						}
				});
				//// now that we have all our radio button groups - validate them
				for(var q=0; q<groups.length; q++){
					if (!jQuery("input[name='"+groups[q]+"']:checked").val()) {
						//console.log('Nothing is checked!');
						jQuery("input[name='"+groups[q]+"']").parent().addClass('alert');
						//jQuery(this).parent().addClass('invalid');
						valid=false;
						break;
					}
					else {
						//console.log('One of the radio buttons is checked!');
						jQuery("input[name='"+groups[q]+"']").parent().removeClass('alert');
						valid=true;
					}
				}
		
			}
			if(jQuery( checkThis ).hasClass( "freeform" )){
				// This function deals with validation of the form fields
				var x, y, z, i, valid = true;
				x = document.getElementsByClassName("tab");
				y = x[currentTab].getElementsByTagName("input");
				// A loop that checks every input field in the current tab:
				for (i = 0; i < y.length; i++) {
					// If a field is empty...
					if (y[i].value == "") {
						// add an "invalid" class to the field:
						y[i].className += " alert";
						// and set the current valid status to false:
						valid = false;
					}else{
						y[i].className -= " alert";
					}
				}
		
				z = x[currentTab].getElementsByTagName("select");
		
				for (i = 0; i < z.length; i++) {
					//var checkthis =
					if( !jQuery(z[i]).val() ) {
						z[i].className += " alert";
						//console.log('no ' + z[i]);
						//console.log( z[i].id);
						valid = false;
					}else{
						z[i].className -= " alert";
					}
				}
			}
		
			// If the valid status is true, mark the step as finished and valid:
			if (valid) {
				//document.getElementsByClassName("step")[currentTab].className += " finish";
				//console.log('valid');
			}
			return valid; // return the valid status
		
		}
		
		function fixStepIndicator(n) {
			// This function removes the "active" class of all steps...
			var i, x = document.getElementsByClassName("tab");
			for (i = 0; i < x.length; i++) {
				x[i].className = x[i].className.replace(" active", "");
			}
			//... and adds the "active" class to the current step:
			x[n].className += " active";
		
		
		}
		
		$ = jQuery;
		
		$('.select-wrapper').click(function() {
		  if($(this).hasClass('active')) {
		    $('.select-wrapper.active, .select-list').removeClass('active');
		  }
		  else {
		    $('.select-wrapper.active, .select-list').removeClass('active');
		    $(this).addClass('active');
		    $('.select-list', $(this)).addClass('active');
		  }
		});
		
		$('.natural-language-content>input').click(function() {
		  $('.select-wrapper.active, .select-list').removeClass('active');
		});
		
		$('.select-list li').click(function() {
		  var selectWrapper = $(this).parent().parent();
		  $('input',selectWrapper).val($(this).data('value'));
		});

	}

	
	
})(jQuery);