$(document).ready(function () {
    
    $(this)
        .on('.go-to-second-screen', function (e) {
        e.preventDefault();
        $('.second-block').animate({scrollTop: 100}, 300);
    });
    
});
