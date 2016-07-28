$(document).ready(function(){
	$('.featured-gallery').slick({
		dots: false,
		infinite: true,
		fade: true,
		speed: 2500,
		autoplay: true,
		autoplaySpeed: 500,
		slidesToShow: 1,
		centerMode: false,
		lazyLoad: 'ondemand',
		variableWidth: false,
		adaptiveHeight: true
	});
});