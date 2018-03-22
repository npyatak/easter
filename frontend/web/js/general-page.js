$(document).ready(function () {
    
    $('.go-to-second-screen').click(function(){
        $('html, body').animate({scrollTop: $('.second-block').offset().top}, 400);
    });


    $('.decorate').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        dotsClass: 'custom_paging',
        customPaging: function (slider, i) {
            return (i + 1);
        }
    });

});
