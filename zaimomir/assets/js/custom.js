var equalheight = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    $(container).each(function () {
        $el = $(this);
        $($el).height('auto');
        var topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (var currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0;
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
};


$(document).ready(function () {
    equalheight('.ex-section-3 .ex-wrapper');
    var dropdownToggle = $('.dropdown-toggle'),
        menu = $('.dropdown-menu'),
        askButton = $('.ex-ask-question'),
        footerHeight = $('.ex-sticky-footer').outerHeight();
    $(document).on('click', function () {
        dropdownToggle.hasClass('ex-on-off') ? dropdownToggle.removeClass('ex-on-off') : '';
    });
    dropdownToggle.on('click', function (e) {
        $(this).toggleClass('ex-on-off');
        $(this).parent().css('position', 'initial');
    });
    menu.on('click', function (e) {
        e.stopPropagation();
    });
    askButton.on('click', function (event) {
        $('#askQuestion').modal();
        $('.dropdown.open .dropdown-toggle').dropdown('toggle');
    });
    //Sticky footer functionality, adding body dynamic padding bottom duo to footer height
    $('.ex-sticky').css('padding-bottom', footerHeight);
    $(window).resize(function () {
        var dynamicFooterHeight = $('.ex-sticky-footer').outerHeight();
        $('.ex-sticky').css('padding-bottom', dynamicFooterHeight);
    });
    $('.ex-ask-question').on('click', function (event) {
        $('#askQuestion').modal();
    });


    //Collapse menu hide show events
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).prev('.card-header').addClass('ex-bg-head')
            .find('.ex-plus')
            .removeClass('ex-plus')
            .addClass('ex-minus');
    });
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).prev('.card-header').removeClass('ex-bg-head')
            .find('.ex-minus')
            .removeClass('ex-minus')
            .addClass('ex-plus');
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

    $('.nav-item').on('click', function () {
        $('.nav-item').removeClass('active');
        $(this).addClass('active');
    }); 
});
