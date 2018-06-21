$(document).ready(function () {
    var footerHeight = $('.ex-sticky-footer').outerHeight();
    //Sticky footer functionality, adding body dynamic padding bottom duo to footer height
    $('.ex-sticky').css('padding-bottom', footerHeight);
    $(window).resize(function () {
        var dynamicFooterHeight = $('.ex-sticky-footer').outerHeight();
        $('.ex-sticky').css('padding-bottom', dynamicFooterHeight);
    });
    $('.ex-ask-question').on('click', function (event) {
        $('#askQuestion').modal();
    });

    //Scroll-top button
    $(window).scroll(function () {
        if ($(this).scrollTop() !== 0) {
            $('#ex-up-button').fadeIn();
        } else {
            $('#ex-up-button').fadeOut();
        }
    });
    $('#ex-up-button').click(function () {
        $('html, body').animate({scrollTop: '0'}, 600);
        return false
    });

});
