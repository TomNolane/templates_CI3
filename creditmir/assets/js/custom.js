
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
    //---------GLOBAL VARIABLES DECLARATION--------//
    var footerHeight = $('.ex-sticky-footer').outerHeight(),
        homepageSection1BG = $('.ex-home'),
        body = $('.ex-sticky'),
        homepageTabs = $('.ex-high-fed-tabs');



    //******STICKY FOOTER FUNCTIONALITY, ADDING TO BODY DYNAMIC PADDING-BOTTOM DUO TO FOOTER HEIGHT******//

    body.css('padding-bottom', footerHeight);
    $( window ).resize(function() {
        var dynamicFooterHeight = $('.ex-sticky-footer').outerHeight();
        body.css('padding-bottom', dynamicFooterHeight);
    });



    //******CHANGE HOMEPAGE BACKGROUND COLOR DUO TO TAB MENU ACTIVITY*******//

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        if(homepageTabs.find('li:first-child').hasClass('active')) {
            homepageSection1BG.css('background','#007aff')
        }else{
            homepageSection1BG.css('background','#09cca0')
        }
    });



    //******CHANGE ARROW DOWN TO ARROW UP IN BOOTSTRAP COLLAPSE*******//

    $('.panel').on('hidden.bs.collapse', function () {
        $(this).find('i').removeClass('ex-to-close');
    });
    $('.panel').on('shown.bs.collapse', function () {
        $(this).find('i').addClass('ex-to-close');
    });



    //******Giving elements equal height dynamically*******//

    equalheight('.ex-equal .media');
    $( window ).resize(function() {
        equalheight('.ex-equal .media');
    });






    // $(document).on('click', function (e) {
    //     if (!$(e.target).is('.panel-body')) {
    //         $('.collapse').collapse('hide');
    //     }
    // });

    //Collapse menu hide show events
    // $('.panel-collapse').on('show.bs.collapse', function () {
    //     $(this).prev('.panel-heading').addClass('ex-bg-head')
    //         .find('.ex-plus')
    //         .removeClass('ex-plus')
    //         .addClass('ex-minus');
    // });
    // $('.panel-collapse').on('hide.bs.collapse', function () {
    //     $(this).prev('.panel-heading').removeClass('ex-bg-head')
    //         .find('.ex-minus')
    //         .removeClass('ex-minus')
    //         .addClass('ex-plus');
    // });

});
