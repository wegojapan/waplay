  /* readyEvent
------------------------------------------------------------------------*/
document.addEventListener("DOMContentLoaded", function(e) {
	// Slick slider
	$('.box_slider').slick({
		slidesToShow: 3,
		dots: true,
		variableWidth: true,
		responsive: [
		  {
			breakpoint: 1280,
			settings: {
			  arrows: false,
			  slidesToShow: 2
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  arrows: false,
			  slidesToShow: 1
			}
		  }
		]
	});
	
});
