
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
    //Header hamburger menu events and collapse event on document click
    $(document).on('click', function (e) {
       if($('.ex-aside-menu').hasClass('ex-is-open')){
           $('.ex-aside-menu').removeClass('ex-is-open');
       }
        if (!$(e.target).is('.panel-body')) {
            $('.collapse').collapse('hide');
        }
    });
    $('.ex-hamburger').on('click', function(event){
        event.stopPropagation();
        $('.ex-aside-menu').addClass('ex-is-open');
    });
    $('.ex-close-menu, .ex-ask-question').on('click', function () {
        $('.ex-aside-menu').removeClass('ex-is-open');
    });
    $('.ex-aside-menu').on('click', function (event) {
        event.stopPropagation();
    });
    $('.ex-ask-question').on('click', function (event) {
        $('#askQuestion').modal();
    });

    //Scroll top event
    $('.ex-scroll-top').on('click', function () {
        $("html, body").animate({ scrollTop: "0" }, 1000);
    });

    //Collapse menu hide show events
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).prev('.panel-heading')
            .find('.ex-arrow-show')
            .removeClass('ex-arrow-show')
            .addClass('ex-arrow-hide');
    });
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading')
            .find('.ex-arrow-hide')
            .removeClass('ex-arrow-hide')
            .addClass('ex-arrow-show');
    });
    equalheight('.ex-articles article');
    //Spasibo page animation
        $('.ex-spasibo').find('.ex-draft .ex-wrapper').addClass('ex-animated');
});

$(window).on('resize', function () {
    equalheight('.ex-articles article');
});


