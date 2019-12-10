

function include(url){ 
	"use strict";
	document.write('<script src="'+ url + '" type="text/javascript"></script>'); 
}


include('twitter/jquery.tweet.js'); 
include('js/tinynav.min.js'); 



$(document).ready(function(){
	"use strict";
	
	
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	
	
	

	quickViewModal($('a.product-hover'));
	
	
	

	dropdownsNavigation(); 
	
	searchBar(); 
	
	selectBox(); 
	
	backToTop(); 
	
	backToTopEvent(); 
	
	tabsOn(); 
	
	accordionsOn(); 
	
	fixNavigation(); 
	
	fixGridView(); 
	
	installCarousels(); 
	
	installNoUiSlider(); 
	
	singleProduct(); 
	
	
	
	
	
	

	$(window).scroll(function(){
		
		backToTop(); 
				
	});
	
	
	

	$(window).resize(function(){
	
		
		windowWidth = $(window).width();
		windowHeight = $(window).height();
		
		
		fixNavigation(); 
		
		fixGridView(); 
		
		fixRevolutionArrows(); 
		
		
	});
	
	
	
	

	$('#twitter-widget').tweet({
		modpath: 'twitter/',
		count: 2,
		loading_text: 'loading twitter feed...',
	})
	
	
	
	

	$('.tooltip-hover').tooltip();
	
	
	
	
	
	$('#main-navigation>ul').tinyNav({
		active: 'current-item',
		header: 'Navigation',
		indent: '→',
		label: 'Menu'
	});
	
	
	
	
	

	jQuery('.tp-banner').revolution({
		delay:9000,
		startwidth:1170,
		startheight:500,
		hideThumbs:10,
		navigationType:"none"
	});
	
	
	
	

	$('.iosSlider').iosSlider({
		scrollbar: true,
		snapToChildren: true,
		desktopClickDrag: true,
		scrollbarMargin: '5px 40px 0 40px',
		scrollbarBorderRadius: 0,
		scrollbarHeight: '2px',
		navPrevSelector: $('.prevButton'),
		navNextSelector: $('.nextButton')
	});
	
	
	
	
	

	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: false,
		prevText: "",           
		nextText: "",
		start: function(slider){
			$('body').removeClass('loading');
			}
	});
	

	$('.sidebar-flexslider').flexslider({
		animation: "slide",
		controlNav: true,
		directionNav: false,
		prevText: "",           
		nextText: "",
		start: function(slider){
			$('body').removeClass('loading');
			}
	});
	
	
	
	
	

	
	
	$('.rating.readonly-rating').raty({ 
		readOnly: true,
		path:'js/img',
		score: function() {
			return $(this).attr('data-score');
		}
	 });
	 
	
	$('.rating.rate').raty({ 
		path:'js/img',
		score: function() {
			return $(this).attr('data-score');
		}
	});
	
	
	
	

	function fixRevolutionArrows() {
		
		$('.tp-banner').each(function(){
			
			setTimeout(function(){
			
				var arrow_l = $('.tp-banner').find('.tp-leftarrow');
				var arrow_r = $('.tp-banner').find('.tp-rightarrow');
				
				var tp_height = $('.tp-banner').height();
				var arrow_height = $(arrow_l).height();
				var arrow_top = (tp_height/2)-(arrow_height/2);
				
				
				$(arrow_l).css('top', arrow_top);
				$(arrow_r).css('top', arrow_top);
				
			},1000);
			
		});
	
	}
	
	
	
	

	function fixNavigation(){
		
		var nav = $('#main-navigation>ul>li');
		$(nav).find('>a').attr('style', '');
		var nav_height = $(nav).height();
		
		$(nav).each(function(){
		
			$(this).find('>a').innerHeight(nav_height);
			
		});
	
	}
	
	
	
	
	
	

	function fixGridView(){
		
		if($('.grid-view').length>0){
			
			$('.grid-view.product .product-content').attr('style', '');
			
			var product_height = $('.grid-view.product img').height();
			var previous_height = $('.grid-view.product .product-content').innerHeight();
			
			if(previous_height < product_height){
				$('.grid-view.product .product-content').innerHeight(product_height);
			}
		}
		
	}
	
	
	
	
	
	

	function singleProduct(){
	
		
	
		$('#product-carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			directionNav: false,
			slideshow: false,
			itemWidth: 80,
			itemMargin: 0,
			start: function(slider){
			
				setActive($('#product-carousel li:first-child img'));
				slider.find('.right-arrow').click(function(){
					slider.flexAnimate(slider.getTarget("next"));
				});
				
				slider.find('.left-arrow').click(function(){
					slider.flexAnimate(slider.getTarget("prev"));
				});
				
				slider.find('img').click(function(){
					var large = $(this).attr('data-large');
					setActive($(this));
					$('#product-slider img').fadeOut(300, changeImg(large, $('#product-slider img')));
					$('#product-slider a.fullscreen-button').attr('href', large);
				});
				
				function changeImg(large, element){
					var element = element;
					var large = large;
					setTimeout(function(){ startF()},300);
					function startF(){
						element.attr('src', large)
						element.attr('data-large', large)
						element.fadeIn(300);
					}
					
				}
				
				function setActive(el){
					var element = el;
					$('#product-carousel img').removeClass('active-item');
					element.addClass('active-item');
				}
				
			}
			
		});
			
			
		
	
		$('a.fullscreen-button').click(function(e){
			e.preventDefault();
			var target = $(this).attr('href');
			$('#product-carousel a.fancybox[href="'+target+'"]').trigger('click');
		});
		
		
	
		$(".cloud-zoom").imagezoomsl({
			zoomrange: [3, 3]
		});
		
		
	
		$(".fancybox").fancybox();
		
		
	}
	
	
	
	
	
	
	

	function installCarousels(){
		
		$('.owl-carousel').each(function(){
		
		
			var max_items = $(this).attr('data-max-items');
			var tablet_items = max_items;
			if(max_items > 1){
				tablet_items = max_items - 1;
			}
			var mobile_items = 1;
			
			
		
			$(this).owlCarousel({
				
				items:max_items,
				pagination : false,
				itemsDesktop : [1199,max_items],
				itemsDesktopSmall : [1000,max_items],
				itemsTablet: [920,tablet_items],
				itemsMobile: [560,mobile_items],
			});
		
			
			var owl = $(this).data('owlCarousel');
			
		
			$(this).parent().parent().find('.icon-left-dir').click(function(e){
				owl.prev();
			});
			
		
			$(this).parent().parent().find('.icon-right-dir').click(function(e){
				owl.next(); 
			});
			
		});
		
	}
	
	
	
	
	

	function installNoUiSlider(){
		
		if($('.noUiSlider').length > 0){
		
			var min_val = $('.noUiSlider').attr('data-min-value');
			var max_val = $('.noUiSlider').attr('data-max-value');
			var min_range = $('.noUiSlider').attr('data-min-range');
			var max_range = $('.noUiSlider').attr('data-max-range');
			
			$('.noUiSlider').noUiSlider({
				 range: [min_range,max_range]
				,start: [min_val,max_val]
				,connect: true
				,slide: function(){
					var noui_val = $('.noUiSlider').val();
					$('.price-range-min').text('$'+noui_val[0]);
					$('.price-range-max').text('$'+noui_val[1]);
				}
			});
			
			var noui_val = $('.noUiSlider').val();
			$('.price-range-min').text('$'+noui_val[0]);
			$('.price-range-max').text('$'+noui_val[1]);
		
		}
		
	}	
	
	
	
	
	
	

	var productButtons = $('.product-actions').not('.full-width');
	productButtons.find('>span:first-child').addClass('current');
	
	productButtons.find('>span').hover(function(){
		
		$(this).parent().find('>span').removeClass('current');
		$(this).addClass('current');
		
	}, function(){
		
		$(this).removeClass('current');
		
	});
	
	productButtons.hover(function(){
		
	}, function(){
		$(this).find('>span:first-child').addClass('current');
	});
	
	
	
	
	

	function dropdownsNavigation(){
		
		var mainNav = $('#main-navigation');
		var mainNavItems = $('#main-navigation>ul>li');
		var sideNavItems = $('.sidebar-box-content>ul>li');
		
		
		mainNav.find('ul.normalAnimation').removeClass('normalAnimation');
		
		
	
		mainNavItems.hover(function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating') && windowWidth>767){
				
				dropdown.css('opacity',0).css('top','150%').show().animate({opacity:1, top:100+'%'},300);
				
			}
			
		}, function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating')){
				
				dropdown.addClass('animating').animate({opacity:0, top:150+'%'},300, function(){
					$(this).hide().removeClass('animating');;	
				});
				
			}
			
		});
		
		
		
		
		
		
		
	
		sideNavItems.hover(function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating') && windowWidth>767){
				
				dropdown.hide().fadeIn(200);
			}
			
		}, function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating')){
				$(this).find('>ul').addClass('animating').show().fadeOut(100, function(){
					$(this).removeClass('animating');	
				});
			}
			
		});
		
		
		
		
		
		
	
		mainNav.find('ul.normal-dropdown>li').hover(function(){
			
			var dropdown = $(this).children('ul');
			if(!dropdown.hasClass('animating') && windowWidth>767){
				
				dropdown.hide().fadeIn(200);
			}
			
		}, function(){
			
			var dropdown = $(this).children('ul');
			if(!dropdown.hasClass('animating')){
				$(this).children('ul').addClass('animating').show().fadeOut(100, function(){
					$(this).removeClass('animating');	
				});
			}
			
		});	
		
		
	}
	
	
	
	
	
	
	

	function searchBar(){
		
		
	
		var searchButton, searchBar;
		
		searchButton = $('.nav-search');
		searchBar = $('#search-bar');
		
		searchButton.click(function(){
			
			if(searchBar.hasClass('searchbar-visible')){
				searchButton.removeClass('searchbar-visible');
				searchBar.animate({opacity:0, left:-200, right:200},200, function(){
					$(this).removeClass('searchbar-visible').hide();
				});
			}else{
				searchButton.addClass('searchbar-visible');
				searchBar.css('opacity', 0).css('left', -200).css('right',200).show().animate({opacity:1, left:0, right:1},300, function(){
					$(this).addClass('searchbar-visible');
					var config = {
						'.chosen-select-search' : {disable_search_threshold:10, width:'100%'}
					}
					for (var selector in config) {
					  $(selector).chosen(config[selector]);
					}
				});
			}
			
		});
		
		
		
	}
	
	
	
	
	
	

	function backToTop(){
		
		var button = $('#back-to-top');
		var w_scroll = $(window).scrollTop();
		
		if(w_scroll > 150  && windowWidth>767){
			button.fadeIn(400);	
		}else{
			button.fadeOut(400);	
		}
		
	}
	
	

	function backToTopEvent(){
		
		var button = $('#back-to-top');
		
		button.click(function(){
			
			$('html,body').animate({scrollTop:0}, 600);
			
		});
		
	}
	
	
	
	
	
	
	
	

	function tabsOn(){
		
		$('.tabs').each(function(){
			
			var tab = $(this);
			tab.find('.tab-content > div').hide();
			tab.find('.tab-heading>a:first-child').addClass('active');
			tab.find('.tab-content > div:first-child').show();
			
			var tabMenuItems = tab.find('.tab-heading>a');
			tabMenuItems.click(function(e){
				
				e.preventDefault();
				
				var target = $(this).attr('href');
				
				tab.find('.tab-content > div').hide();
				tab.find('.tab-heading>a').removeClass('active');
				
				$(this).addClass('active');
				tab.find(target).show();
				
			});
			
		});
			
	}
	
	
	
	
	
	
	
	

	function accordionsOn(){
		
		$('.accordion').each(function(){
			
			var accordion = $(this);
			accordion.find('.accordion-content').hide();
			accordion.find('>ul>li:first-child').addClass('accordion-active').find('.accordion-content').show();
			accordion.find('.accordion-header').click(function(){
				
				if($(this).parent().hasClass('accordion-active')){
					$(this).parent().removeClass('accordion-active');
					$(this).parent().find('.accordion-content').slideUp(300);
				}else{
					$(this).parent().parent().find('li.accordion-active').removeClass('accordion-active').find('.accordion-content').slideUp(300);
					$(this).parent().addClass('accordion-active').find('.accordion-content').slideDown(300)
				}
				
			});
			
		});
		
	}
	
	
	
	
	
	
	

	function selectBox(){
	
		var config = {
		  '.chosen-select'           : {disable_search_threshold:10},
		  '.chosen-select-full-width'           : {disable_search_threshold:10, width:'100%'},
		  '.chosen-select-search' : {disable_search_threshold:10, width:'100%'}
		}
		for (var selector in config) {
		  $(selector).chosen(config[selector]);
		}
		
	}
	
	
	
	
	
	
	
	

	function quickViewModal(el){
		
		$('body').append('<div id="quick-view-modal"><div id="quick-view-content"><div id="quick-view-close"></div><div class="quick-view-content"><div class="quick-view-container col-lg-12 col-md-12 col-sm-12"></div></div></div></div>');
		$('#quick-view-modal').hide();
		
		$('#quick-view-close').click(function(){
			
			$('#quick-view-modal').fadeOut(300);
			
		});
		
	
		$('.quick-view-content').perfectScrollbar({wheelSpeed: 40, suppressScrollX:true});
		
		var elements = el;
		elements.click(function(e){
		
			e.preventDefault();
			var target = $(this).attr('href');
			
			$('#quick-view-content .quick-view-container').load(target+' #product-single', function(){
				
				
			
				$('#quick-view-modal .rating.readonly-rating').raty({ readOnly: true, path:'js/img',score: function() {
					return $(this).attr('data-score');
				}});
				$('#quick-view-modal .rating.rate').raty({ path:'js/img',score: function() {
					return $(this).attr('data-score');
				}});
				
				
			
				var productButtons = $('#quick-view-content .product-actions').not('.full-width');
				productButtons.find('>span:first-child').addClass('current');
				
				productButtons.find('>span').hover(function(){
					
					$(this).parent().find('>span').removeClass('current');
					$(this).addClass('current');
					
				}, function(){
					
					$(this).removeClass('current');
					
				});
				
				productButtons.hover(function(){
					
				}, function(){
					$(this).find('>span:first-child').addClass('current');
				});
				
				
			
				tabsOn();
				
			
				$('#quick-view-modal .numeric-input').each(function(){
		
					var el = $(this);
					numericInput(el);
					
				});
				
			
				$('#quick-view-modal .char-counter').each(function(){
					
					var el = $(this);
					charCounter(el);
					
				});
				
				
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/platform.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				
				
			
				$('#quick-view-modal #product-carousel').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					directionNav: false,
					slideshow: false,
					itemWidth: 80,
					itemMargin: 0,
					start: function(slider){
							setActive($('#product-carousel li:first-child img'));
							slider.find('.right-arrow').click(function(){
								slider.flexAnimate(slider.getTarget("next"));
							});
							slider.find('.left-arrow').click(function(){
								slider.flexAnimate(slider.getTarget("prev"));
							});
							slider.find('img').click(function(){
								var large = $(this).attr('data-large');
								setActive($(this));
								$('#product-slider img').fadeOut(300, changeImg(large, $('#product-slider img')));
							});
							function changeImg(large, element){
								var element = element;
								var large = large;
								setTimeout(function(){ startF()},300);
								function startF(){
									element.attr('src', large)
									element.attr('data-large', large)
									element.fadeIn(300);
								}
								
							}
							function setActive(el){
								var element = el;
								$('#product-carousel img').removeClass('active-item');
								element.addClass('active-item');
							}
						}
				});
				
				$('#quick-view-modal').fadeIn(300);
				
				
			
				var q_width = $('#quick-view-content').width();
				var q_height = $('#quick-view-content').height();
				var q_margin = ($(window).height() - q_height)/2;
				
				$('#quick-view-content').css('margin-top',q_margin+'px');
				
				
			
				$("#quick-view-modal .cloud-zoom").imagezoomsl({
					 zoomrange: [3, 3]
				  });
				
				$('.quick-view-content').perfectScrollbar('update');
				$('.quick-view-content').css('overflow','hidden');
				
				$('.quick-view-content').click(function(){
					$(this).perfectScrollbar('update');
				});
				
			
				var config = {
					'#quick-view-content .chosen-select' : {disable_search_threshold:10}
				}
				for (var selector in config) {
				  $(selector).chosen(config[selector]);
				}
				
			});
			
		});
		
	}
	
	
	
	

	

	
	$('#newsletter').submit(function(e){
		
		e.preventDefault();
		
		var url = $(this).attr('action');
		
		if($(this).find('input[type="text"]').val() == ''){
			
			if($(this).find('span.error').length==0){
				$(this).append('<span class="error">Please, fill in your email address</span>');
			}else{
				$(this).find('span.error').text('Please, fill in your email address');
			}
			
		}else{
			
			$(this).find('span.error').hide();
			
			$.ajax({
				type: "POST",
				url: url,
				data: $('#newsletter').serialize(), 
				success: function(data){
				   $('#newsletter').find('>*').slideUp(300);
				   $('#newsletter').append('<span>'+data+'</span>');
				}
			});
		}
		
	});
	
	

	
	$('#contact-form').submit(function(e){
		
		e.preventDefault();
		
		var url = $(this).attr('action');
		var error = false;
		
		if($(this).find('input[name="contact-name"]').val()==''){
			error = true;
		}
		
		if($(this).find('input[name="contact-email"]').val()==''){
			error = true;
		}
		
		if($(this).find('textarea[name="contact-message"]').val()==''){
			error = true;
		}
		
		if(error == true){
			
			if($(this).find('span.error').length==0){
				$(this).append('<span class="error">Please, fill in all the fields</span>');
			}else{
				$(this).find('span.error').text('Please, fill in all the fields');
			}
			
		}
		
		if(error == false){	
			$(this).find('span.error').hide();
			
			$.ajax({
				type: "POST",
				url: url,
				data: $('#contact-form').serialize(), 
				success: function(data){
				   $('#contact-form').find('>*').slideUp(300);
				   $('#contact-form').append('<span>'+data+'</span>');
				}
			});
		}
		
	});
	
	
	
	
	
	

	$('.numeric-input').each(function(){
		
		var el = $(this);
		numericInput(el);
		
	});
	
	

	function numericInput(el){
		
		var element = el;
		var input = $(element).find('input');
		
		$(element).find('.arrow-up').click(function(){
			var value = parseInt(input.val());
			input.val(value+1);
		});
		
		$(element).find('.arrow-down').click(function(){
			var value = parseInt(input.val());
			input.val(value-1);
		});
		
		input.keypress(function(e){
			
			var value = parseInt(String.fromCharCode(e.which));
			if(isNaN(value)){
				e.preventDefault();
			}
			
		});
		
	}
	
	
	
	
	
	

	$('.char-counter').each(function(){
		
		var el = $(this);
		charCounter(el);
		
	});
	
	
	function charCounter(el){
		
		var element = el;
		var counter = $(element).find('input');
		var target = $(counter).attr('data-target');
		
		$(target).bind("change paste keyup",function(){
			
			var value = $(this).val();
			var length = value.length;
			
			counter.val(length);
			
		});
		
	}
	
	
});