(function ($, window, Typist) {
    
	
	// Dropdown Menu Fade    
	jQuery(document).ready(function(){
		$(".dropdown").hover(
			function() { $('.dropdown-menu', this).fadeIn("fast");
			},
			function() { $('.dropdown-menu', this).fadeOut("fast");
		});
	});
	
	/*-------active---------*/
	
	$(document).ready(function() {
		$(".nav-link").click(function () {
			$(".nav-link").removeClass("active");
			$(this).addClass("active");   
		});
	});
	
	
	/*-------------headder_fixed-------------*/
	
	
		$(window).scroll(function(){
			var sticky = $('.header'),
				scroll = $(window).scrollTop();
		  
			if (scroll >= 120) sticky.addClass('fixed');
			else sticky.removeClass('fixed');
		});
	
/*--------------ASO.JS---------------*/
	
  AOS.init();
		
 //refresh animations
 
  $(window).on('load', function() {
  	AOS.refresh();
  });

/*------------slider_sw------------*/

var swiper = new Swiper(".bannerSwiper", {
	/*slidesPerView: 4.4,
	spaceBetween: 30,*/
	slidesPerGroup: 3,
	loop: true,
	loopFillGroupWithBlank: true,
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	breakpoints: {
		360: {
			slidesPerView: 1.2,
			spaceBetween: 10,
		},
		640: {
		  slidesPerView: 2.4,
		  spaceBetween: 10,
		},
		768: {
		  slidesPerView: 3.4,
		  spaceBetween: 20,
		},
		1024: {
		  slidesPerView: 4.4,
		  spaceBetween: 20,
		},
	  },
  });

	/*---product_slide---*/

  var swiper = new Swiper(".pd_slide", {
	spaceBetween: 10,
	slidesPerView: 4,
	freeMode: true,
	watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".pd_slide2", {
	spaceBetween: 10,
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
	thumbs: {
	  swiper: swiper,
	},
  });

  /*------more_product_slid------*/

  var swiper = new Swiper(".mpm_slide", {
	//lidesPerGroup: 3,
	loop: true,
	loopFillGroupWithBlank: true,
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
	breakpoints: {
		360: {
			slidesPerView: 1,
			spaceBetween: 10,
		},
		640: {
		  slidesPerView: 2,
		  spaceBetween: 10,
		},
		768: {
		  slidesPerView: 3,
		  spaceBetween: 20,
		},
		1024: {
		  slidesPerView: 4,
		  spaceBetween: 20,
		},
	  },
  });

/*---search_openclose----*/

$(document).ready(function(){
	$(".resp_search").click(function(){
	  $(".resp_search_input").toggle();
	});
  });

  /*------------Corporate_form-----------*/
  
  $(document).ready(function(){
	$(".Cform").click(function(){
	  $(".Cbody").toggle();
	});
  });


})(jQuery, window);



