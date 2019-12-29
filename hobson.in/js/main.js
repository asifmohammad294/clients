(function ($) {
 "use strict";

    
    
    /*----------------------------
    jQuery MeanMenu
    ------------------------------ */
        $('nav#dropdown').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu",
    });	
    
/*----------------------------
 product-carusel active
------------------------------ */  
  $(".product-carusel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  });
  /*----------------------------
 brand-carusel active
------------------------------ */  
  $(".brand-carousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 6,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [980,4],
	  itemsTablet: [768,3],
	  itemsMobile : [479,2],
  });
 /*----------------------------
 testimonial-carusel active
------------------------------ */  
  $(".testimonial-carusel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 2,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
      itemsDesktop : [1199,2],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 blog-post-carousel active
------------------------------ */  
  $(".blog-post-carousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
  
//bootstrap tooltip active
 $('[data-toggle="tooltip"]').tooltip()

  /*----------------------------
 home-4 logo-brand-carousel active
------------------------------ */  
  $(".logo-brand-carousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,3],
	  itemsMobile : [479,2],
  });
  /*----------------------------
 home-4 blog-post-slide active
------------------------------ */  
  $(".blog-post-slide").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
  home-4 testimonial-slide active
------------------------------ */  
  $(".testimonial-slide").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
  /*----------------------------
     blog page-2 post galary  active
------------------------------ */  
  $(".post-slider").owlCarousel({
      autoPlay: true, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
    
        /*--
	Pro Slider for Pro Details
------------------------*/
$(".pro-img-tab-slider").owlCarousel({
	items : 4,
	itemsDesktop : [1199,4],
	itemsDesktopSmall : [768,4],
	itemsTablet: [767,3],
	itemsMobile : [479,3],
	slideSpeed : 1500,
	paginationSpeed : 1500,
	rewindSpeed : 1500,
	navigation : true,
	navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	pagination : false,
	addClassActive: true,
});
 /*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 

/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();
 
 /* about us page counter */
	$('.about-counter').counterUp({
		delay: 10,
		time: 1000
	});  
	
  
 /* 404 us page counter */
	$('.counter').counterUp({
		delay: 5,
		time: 250
	});  
	
 
/*---------------------
 price slider
--------------------- */  
	$(function() {
	  $( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "Â£" + ui.values[ 0 ] + " - Â£" + ui.values[ 1 ] );
	   }
	  });
	  $( "#amount" ).val( "Â£" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - Â£" + $( "#slider-range" ).slider( "values", 1 ) );
	});	
    
    

	
/*--
    Simple Lens and Lightbox
    ------------------------*/
	$('.simpleLens-lens-image').simpleLens({
		loading_image: 'img/loading.gif'
	});
    
 /*-------------------------
    single-product count
    --------------------------*/
    
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
     $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
     $(".qtybutton").on("click", function() {
      var $button = $(this);
      var oldValue = $button.parent().find("input").val();
      if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
         // Don't allow decrementing below zero
        if (oldValue > 0) {
       var newVal = parseFloat(oldValue) - 1;
       } else {
       newVal = 0;
        }
        }
      $button.parent().find("input").val(newVal);
     });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

 
})(jQuery); 