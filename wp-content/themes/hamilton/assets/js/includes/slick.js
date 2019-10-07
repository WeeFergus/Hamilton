jQuery( document ).ready(function() {

	jQuery('.logos').slick({
		prevArrow:"<button type='button' class='slick-prev prev'><img src='http://www.petehudack.com/hamilton/wp-content/themes/hamilton/assets/images/arrow-left.jpg'></button>",
        nextArrow:"<button type='button' class='slick-next next'><img src='http://www.petehudack.com/hamilton/wp-content/themes/hamilton/assets/images/arrow-right.jpg'></button>",
		dots: true,
		slidesToShow: 4,
		autoplay: false,
		arrows: true,
		draggable: true,
		infinite: true,
		initialSlide: 1
	});
 });
