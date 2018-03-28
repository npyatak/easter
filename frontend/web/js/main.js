$(document).ready(function () {
    $('.action-icon').children('i.fa-bars').click(function() {
        $('#menu-list').css('width', '80%');
        $('i.fa-bars').css('opacity', '0');
        $('i.fa-times').css('opacity', '1');
        $('i.fa-bars').fadeOut(300);
        $('i.fa-times').fadeIn(300);
    });
    $('.action-icon').children('i.fa-times').click(function() {
        $('#menu-list').css('width', '0%');
        $('i.fa-times').css('opacity', '0');
        $('i.fa-bars').css('opacity', '1');
        $('i.fa-times').fadeOut(100);
        setTimeout(function() {
            $('i.fa-bars').fadeIn(100);
        }, 100);
    });
    $('.main-slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        nextArrow: '<div class="slider-nav-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
        prevArrow: '<div class="slider-nav-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: true
                }
            }
        ]
    });
    if ($('.other-recipies-slider')) {
        $('.other-recipies-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            nextArrow: '<div class="slider-nav-right slider-nav-right-blue"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
            prevArrow: '<div class="slider-nav-left slider-nav-left-blue"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        arrows: true
                    }
                }
            ]
        });
    }
    if ($('.competitors-slider')) {
        $('.competitors-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            nextArrow: '<div class="slider-nav-right slider-nav-right-blue"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
            prevArrow: '<div class="slider-nav-left slider-nav-left-blue"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        arrows: true
                    }
                }
            ]
        });
    }
});


