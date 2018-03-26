$(document).ready(function () {
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
    if ($('.slider-slick')) {
        $('.slider-slick').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            dots: true,
            asNavFor: '.slider-slick-for',
            dotsClass: 'custom-pagination',
            customPaging: function (slider, i) {
                return (i + 1);
            },
            nextArrow: '<div class="slider-nav-right slider-nav-right-white"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
            prevArrow: '<div class="slider-nav-left slider-nav-left-white"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        arrows: false
                    }
                }
            ]
        });
        $('.slider-slick-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            dots: false,
            asNavFor: '.slider-slick',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        arrows: false
                    }
                }
            ]
        });
    }
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

