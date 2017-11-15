/*ht = function (container) {
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
    //---------Collapse functionality in page receiveMoney-----------
    var collapseParagraph = $('.ex-hidden'),
        collapseBtn = $('.ex-collapse');
    collapseParagraph.each(function( index ) {
        var self = $(this);
        if($.trim(self.html()).length > 0 && self.hasClass('ex-active')){
            self.next('.ex-footer').append("<span class='ex-close ex-collapse'>- Закрыть</span>")
        }else{
            self.next('.ex-footer').append("<span class='ex-collapse'>+ Подробнее</span>")
        }
    });
    $( ".ex-footer" ).on( "click", collapseBtn, function() {
        var self = $(this);
        self.prev(collapseParagraph).toggleClass('ex-active');
        self.find($('.ex-collapse')).toggleClass('ex-blinked ex-shown');
        if(self.prev(collapseParagraph).hasClass('ex-active')){
            self.closest('article').css('height', 'auto');
            self.find($('.ex-collapse')).addClass('ex-close').text('- Закрыть');
            self.find('.ex-main-btn').slideDown('500');
        }else{
            self.find($('.ex-collapse')).removeClass('ex-close').text('+ Подробнее');
            self.find(".ex-main-btn").removeAttr("style").hide();
            equalheight('#ex-equal-blocks article');
        }
    });
    //---------End collapse functionality-----------
    equalheight('#ex-equal-blocks article');
});
$(window).on('resize', function () {
    equalheight('#ex-equal-blocks article');
});
