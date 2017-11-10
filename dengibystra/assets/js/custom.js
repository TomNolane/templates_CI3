/*
 * All figure elements height inside .ex-main class will be equal tallest element height.
 * It's been modified into a function called at page load and then each time the page is resized.
 * One large modification was to remove the set height before each new calculation.
 */
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
            rowDivs.length = 0; // empty the array
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
    //-----------------------Declaration of variables--------------------------
    var body = $('body'),
        footerHeight = $(".ex-main-footer").outerHeight(),
        panelCollapse = $('.panel-collapse'),
        indicator = $('.ex-indicator-scope'),
        formIndicator1 = $('.ex-first-step'),
        formIndicator2 = $('.ex-second-step').find('span'),
        formIndicator3 = $('.ex-last-step'),
        formBtn1 = $('#submitOne'),
        formBtn2 = $('#submitTwo');
    //------------------------Declaration of variables end-------------------------
    body.css('padding-bottom', footerHeight);
    $(window).resize(function() {
        footerHeight = $(".ex-main-footer").outerHeight();
        body.css('padding-bottom', footerHeight);
    });
    panelCollapse.on('show.bs.collapse', function () {
        $(this).prev('.panel-heading')
            .find('.ex-plus-icon')
            .removeClass('ex-plus-icon')
            .addClass('ex-minus-icon');
    });
    panelCollapse.on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading')
            .find('.ex-minus-icon')
            .removeClass('ex-minus-icon')
            .addClass('ex-plus-icon');
    });
    //------------------------Events during "How to receive money" form confirmation--------------------------
    $(formBtn1).on('click', function () {
        indicator.addClass('ex-on-second-step');
    });
    $(formBtn2).on('click', function () {
        indicator.removeClass('ex-on-second-step').addClass('ex-on-last-step');
    });

    //---------Collapse functionality-----------
    var collapseParagraph = $('.ex-hidden'),
        collapseBtn = $('.ex-collapse');
    collapseParagraph.each(function (index) {
        var self = $(this);
        if ($.trim(self.html()).length > 0) {
            self.closest('.ex-info-block').append("<span class='ex-collapse'>+ Подробнее</span>")
        }
    });

    $(".ex-info-block").on("click", collapseBtn, function () {
        $(this).find(collapseParagraph).toggleClass('ex-active');
        $(this).find($('.ex-collapse')).toggleClass('ex-blinked');
        if ($(this).find(collapseParagraph).hasClass('ex-active')) {
            $(this).find($('.ex-collapse')).text('- Закрыть');
        } else {
            $(this).find($('.ex-collapse')).text('+ Подробнее');
        }
    });
    //---------End collapse functionality-----------
    $('.ex-hamburger').on('click', function () {
        $('.ex-aside-menu').addClass('ex-is-open');
    });
    $('.ex-close-menu').on('click', function () {
        $('.ex-aside-menu').removeClass('ex-is-open');
    });

});