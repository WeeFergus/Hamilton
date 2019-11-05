jQuery(document).ready(function(){
	jQuery('.burger').click(function(){
		jQuery(this).toggleClass('open');
		jQuery('.mobile-menu').toggle();
	});
});

jQuery(window).on("resize", function(){
    if(window.matchMedia("(min-width:860px)").matches){
	    if (jQuery(".mobile-menu").is(':visible')) {
		    jQuery(".mobile-menu").hide();
		    jQuery('.burger').removeClass('open');
	    }
    }
});


