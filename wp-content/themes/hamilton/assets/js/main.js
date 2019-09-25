jQuery(document).ready(function($) {
	$('html').removeClass('no-js');
	// Place your code here..

	 //Gform Select Fields
    $('.gform_fields select').each(function(){
        $(this).towerSelect();
    });

    //Form Select Actions
    $(document).selectListener();

});