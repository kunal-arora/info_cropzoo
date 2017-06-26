<!-- SlidesJS Required: Link to jquery.slides.js -->
<script src="js/jquery.slides.min.js"></script>
<!-- End SlidesJS Required -->

<script>
$(function() {
	
	/*var windowHeight = $(document).height();

	var navigationHeaderHeight = $('#js-navigation').height();

	var logoHeaderHeight = $('#js-logo-header').height();

	var headerHeight = navigationHeaderHeight + logoHeaderHeight ;

	var sliderHeight = windowHeight - headerHeight ;

	console.log(windowHeight);
	console.log(headerHeight);
	console.log(sliderHeight);*/

	$('#slides').slidesjs({
		width: 940,
		height: 320,
		navigation: true
	});
});
</script>