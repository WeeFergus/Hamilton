jQuery( document ).ready(function() {

	jQuery('.logos').slick({
		dots: true,
		infinite: true,
		speed: 400,
		autoplay: false,
		slidesToShow: 5,
		slidesToScoll: 5,
		centerMode: false,
		variableWidth: false,
		draggable: true,
		swipe: true,
		arrows: false,
		responsive: [
			{
			breakpoint: 1100,
			settings: {
				slidesToShow: 4,
				slidesToScoll: 4,
      			}
	  		},
	  		{
			breakpoint: 900,
			settings: {
				slidesToShow: 3,
				slidesToScoll: 3,
      			}
	  		},
	  		{
			breakpoint: 500,
			settings: {
				slidesToShow: 2,
				slidesToScoll: 2,
      			}
	  		},
	  	]
	});
 });
