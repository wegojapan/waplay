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
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1204,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.box_slide_list_sample').slick({
        infinite: true,
        slidesToShow: 1,
        arrows: true,
        variableWidth: true,
        slidesToScroll: 5,
        prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"></button>',
        nextArrow: '<button type="button" class="slick-next" aria-label="Next"></button>'
    });

});
