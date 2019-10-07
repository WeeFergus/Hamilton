jQuery(document).ready(function(){
	jQuery('.burger').click(function(){
		jQuery(this).toggleClass('open');
		jQuery('.mobile-menu').slideToggle();
	});
});

jQuery(window).on("resize", function(){
    if(window.matchMedia("(min-width:768px)").matches){
	    if (jQuery(".mobile-menu").is(':visible')) {
		    jQuery(".mobile-menu").slideUp();
		    jQuery('.burger').removeClass('open');
	    }
    }
});


