$(document).ready(function(){
	$('.featured-gallery').slick({
		dots: false,
		infinite: true,
		fade: false,
		speed: 2500,
		autoplay: true,
		autoplaySpeed: 1700,
		centerMode: false,
		lazyLoad: 'ondemand',
		variableWidth: false,
		adaptiveHeight: true,
		slidesToShow: 2,
        slidesToScroll: 2,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		      }
		    }
	   ]
	});
});