<!-- SlidesJS Required: Link to jquery.slides.js -->
<script src="js/vendor/slick.min.js"></script>
<!-- End SlidesJS Required -->
askldjakssssss
<!-- scroll animations -->
<!-- <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> -->
<!-- <script type="text/javascript" src="js/vendor/wow.js"></script> -->
  <script>
//   $(function(){
// new WOW().init(); 

// });
    // wow = new WOW(
    //   {
    //     animateClass: 'animated',
    //     offset:       100,
    //     callback:     function(box) {
    //       console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    //     }
    //   }
    // );
    // wow.init();
    // document.getElementById('moar').onclick = function() {
    //   var section = document.createElement('section');
    //   section.className = 'section--purple wow fadeInDown';
    //   this.parentNode.insertBefore(section, this);
    // };
  </script>
<!-- scroll animations -->

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


