$(document).ready(function () {
    //Css animation on homepage
    $(window).scroll(function () {
        var $this = $(this),
            section5 = $('.ex-section-5'),
            section2 = $('.ex-section-2');
        if ($this.scrollTop() >= section5.offset().top - 300) {
            section5.find('#menu3 .ex-wrapper').addClass('ex-animated');
        }
        if($this.scrollTop() >= section2.offset().top) {
            section2.find('#menu1 .ex-first').addClass('animated-1 fadeInRight');
            section2.find('#menu1 .ex-second').addClass('animated-2 fadeInRight');
            section2.find('#menu1 .ex-third').addClass('animated-3 fadeInRight');
            section2.find('#menu1 .ex-blue-basket').addClass('animated-4 fadeInRight');
            section2.find('#menu1 .ex-credit-card').addClass('animated-5 fadeInRightUnique');
            section2.find('#menu1 button').addClass('animated-6 fadeIn');
        }
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        if(e.target.id == "exPrestige"){
            $('#menu4').find('.ex-wrapper').addClass('ex-animated');
            $('#menu4').find('.ex-borrow-selector').addClass('ex-animated');
        }else {
            $('#menu4').find('.ex-wrapper').removeClass('ex-animated');
            $('#menu4').find('.ex-borrow-selector').removeClass('ex-animated');
        }
        if(e.target.id == "exGood"){
            $('#menu3').find('.ex-wrapper').addClass('ex-animated');
            $('#menu3').find('.ex-borrow-selector').addClass('ex-animated');
        }else {
            $('#menu3').find('.ex-wrapper').removeClass('ex-animated');
            $('#menu3').find('.ex-borrow-selector').removeClass('ex-animated');
        }
    })
});