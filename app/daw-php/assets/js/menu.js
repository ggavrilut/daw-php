$(document).ready(function() {

    $('body').on('click', '#mobile-menu-btn', function(e) {
        e.preventDefault();
        $('#mobile-menu').show().animate({ right: '0px' }, 500);
    });

    $('body').on('click', '#mobile-menu-close-btn', function(e) {
        e.preventDefault();
        $('#mobile-menu').animate({ right: '-300px' }, 500, function() {
            $(this).hide();
        });
    });

});