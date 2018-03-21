$(document).ready(function () {
    
    $('.go-to-second-screen').click(function (e) {
        e.preventDefault();
        $('.second-block').animate({scrollTop: 100}, 300);
    })
    
});
