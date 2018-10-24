(function ($) {
	"use strict";

    jQuery(document).ready(function($){
     
     $(".client-testominal-caurosol").owlCarousel({
     	items:3,
     	margin:30,
     	nav:false,
     	// dots:true,
     	loop:true
     });
    });

   $(".staff-list").owlCarousel({
      	items:4,
      	autoplay:false,
        margin:70,
        loop:true,
        nav:true,
        navText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"]
      });
        
    jQuery(window).load(function(){

        
    });


}(jQuery));	