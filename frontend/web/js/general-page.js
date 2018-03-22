$(document).ready(function () {
    
    $('.go-to-second-screen').click(function (e) {
        e.preventDefault();
        $('.second-block').animate({scrollTop: 100}, 300);
    })

    $('.main-slider').slick({
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 2560,
                settings: {
                    vertical: false,
                    arrows: true,
                    nextArrow: '<span class="next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>',
                    prevArrow: '<span class="prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
                }
            }
        ]
    });
    
});
