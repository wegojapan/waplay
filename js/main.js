  /* readyEvent
------------------------------------------------------------------------*/
document.addEventListener("DOMContentLoaded", function(e) {
    // main banner slider
    $(function() {
        var $slider = $('.slider');
        var $count = $('.slider-count');
        var slickOptions = {
            fade: true,
            arrows: false
        };

        $slider.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $count.text(i + '/' + slick.slideCount);
        });
        $slider.slick(slickOptions);
    });

    
    $('.con_slide_hot .box_list').slick({
        infinite: true,
        slidesToShow: 1,
        arrows: false,
        variableWidth: true,
        slidesToScroll: 1
    });
	
	
});
