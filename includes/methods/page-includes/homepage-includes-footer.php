<!-- SlidesJS Required: Link to jquery.slides.js -->
<script src="js/vendor/slick.min.js"></script>
<!-- End SlidesJS Required -->

<script>
	
	// var windowHeight = $(document).height();

	// var navigationHeaderHeight = $('#js-navigation').height();

	// var logoHeaderHeight = $('#js-logo-header').height();

	// var headerHeight = navigationHeaderHeight + logoHeaderHeight ;

	// var sliderHeight = windowHeight - headerHeight ;

	// $('.swiper-container .swiper-slide').css( {'height': sliderHeight} );

	// console.log(windowHeight);
	// console.log(headerHeight);
	// console.log(sliderHeight);

$(document).ready(function () {
	
	$('.js-slick').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: true,
		draggable: false,
		speed: 1000
	});

});

</script>