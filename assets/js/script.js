(function($) {
	
	"use strict";

	// Elements Animation
	if($('.wow').length){
		var wow = new WOW({
		mobile:       false
		});
		wow.init();
	}
	
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var scrollLink = $('.scroll-top');
			if (windowpos >= 150) {
				siteHeader.addClass('fixed-header');
				scrollLink.addClass('open');
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.removeClass('open');
			}
		}
	}
	headerStyle();

	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1000);
	
		});
	}

	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.loader-wrap').length){
			$('.loader-wrap').delay(1000).fadeOut(500);
		}
	}

	if ($(".preloader-close").length) {
		$(".preloader-close").on("click", function(){
			$('.loader-wrap').delay(200).fadeOut(500);
		})
	}

	//Submenu Dropdown Toggle Icon
	if($('.main-header li.menu-item-has-children ul').length){
		$('.navbar-nav li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');
		
	}

	$('body').on('mouseenter mouseleave','.nav-item',function(e){
		if ($(window).width() > 750) {
			var _d=$(e.target).closest('.nav-item');_d.addClass('show');
			setTimeout(function(){
			_d[_d.is(':hover')?'addClass':'removeClass']('show');
			},1);
		}
	});

	//Mobile Nav Hide Show
	if(jQuery('.mobile-menu').length){
		
		//jQuery('.mobile-menu .menu-box').mCustomScrollbar();
		
		var mobileMenuContent = jQuery('.main-header .main-menu').html();
		var mobileMenuButtons = jQuery('.main-header .topbutton-wrap').html();
		jQuery('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
		jQuery('.mobile-menu .menu-box .menu-buttons').append(mobileMenuButtons);



		
		//Dropdown Button
		$('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
			$(this).toggleClass('open');
			$(this).prev('ul').slideToggle(500);
		});
		//Dropdown Button
		$('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
			$(this).prev('.megamenu').slideToggle(900);
		});
		//Menu Toggle Btn
		$('.mobile-nav-toggler').on('click', function() {
			$('body').addClass('mobile-menu-visible');
		});

		//Menu Toggle Btn
		$('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
			$('body').removeClass('mobile-menu-visible');
		});
	}

	$(window).on('scroll', function() {
		headerStyle();
	});
	$(window).on('load', function() {
		handlePreloader();
	});

	//About Progress Bar
	$(document).ready(function(){
		progress_bar();
	});
	function progress_bar() {
		var speed = 30;
		var items = $('.progress-inner').find('.progress-box');
		
		items.each(function() {
			var item = $(this).find('.progress');
			var itemValue = item.data('progress');
			var i = 0;
			var value = $(this);
			
			var count = setInterval(function(){
				if(i <= itemValue) {
					var iStr = i.toString();
					item.css({
						'width': iStr+'%'
					});
					value.find('.item_value').html(iStr +'%');
				}
				else {
					clearInterval(count);
				}
				i++;
			},speed);
		});
	}

	//Hover ZoomInOut Animation
	$('body').on('mouseenter mouseleave','.about-icons',function(e){
		var _d=$(e.target).closest('.about-icons');_d.addClass('hoveranimation');
		setTimeout(function(){
		_d[_d.is(':hover')?'addClass':'removeClass']('hoveranimation');
		},1);
	});

	//Massonary
	var $grid = jQuery('.grid').imagesLoaded( function() {
		$grid.isotope({
			itemSelector: '.grid-item',
  			//sortBy: 'random',
			percentPosition: false,
			layoutMode: 'masonry',
			masonry: {
				columnWidth: '.grid-sizer',
				//gutter: 10
			}
		});
	});
	//Counter UP
	jQuery('.counter').counterUp({
		delay: 20,
		time: 5000
	});


	//Owl Carosel Slider
	initSlider();

	function initSlider(){
		$(".testimonial-slide").owlCarousel({
			items: 1,
			singleItem: true,
			navigation:true,
			loop: true,
			autoplay: true,
			nav: true,
			navContainer: false,
			onInitialized: startProgressBar,
			onTranslate: resetProgressBar,
			onTranslated: startProgressBar,
			dots: true,
			dotsData: true,
			dotsContainer: '.owl-dots',
			navText : ["Preview","next"]
		});
	}
	function startProgressBar(){
		// apply keyframe animation
		$(".owl-dot.active .slide-progress").css({
			width: "100%",
			transition: "width 5000ms"
		});
	}
	function resetProgressBar(){
		$(".owl-dot .slide-progress").css({
			width: 0,
			transition: "width 0ms"
		});
	}
	jQuery('.tag-cloud-link').addClass('common-btn d-inline-block');
	jQuery('.page-numbers').addClass('common-btn');
	jQuery('.current').addClass('common-btn-color');
	//var commentData = $(document).jQuerySelector()

})(window.jQuery);