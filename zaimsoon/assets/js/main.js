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
function checkMe()
{ 
    var y = document.getElementById('agree');
    if(y != null)
    {
        if(y.checked)
        { 
            $('#my_btn').css("display", "block");  
        }
        else
        {
            $('#my_btn').css("display", "none");
        } 
    } 
}  

function checkMee()
{ 
    var y2 = document.getElementById('agree');
    if(y2 != null)
    {
        if(y2.checked)
        { 
            $('#next1').css("visibility", "visible");
            $('#next1b').css("visibility", "visible");
        }
        else
        {
            $('#next1').css("visibility", "hidden");
            $('#next1b').css("visibility", "hidden");
        } 
    } 
}

function goToForm() {
    $('#anketa').submit();
}

function goToUp() {
    $('html, body').animate({
        scrollTop: $('.toUp').offset().top
    }, 1000);
}

//-----------------------Initializing--------------------------
$(document).ready(function () {

    if($('#amount').val() != undefined)
    {
        var c = getParameterByName('amount');
        var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val());
        if (c != null) {
            if (c > 100000 || c < 1000) {
                c = 20000;
            }
            gg = c;
        };
        var currentLoanSize =  parseInt(gg),
            range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue =  $('.ex-slider-val'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
        commissionTableSize = $('.ex-Commission'),
        returnTable = $('.ex-total'),
        probabilityTable = $('.irs-single'),
        probabilityTable2 = $('.ex-prob'),
        probability = 95,
        time = 'от 61 дня',
        commission = (currentLoanSize * commissionPercantage) / 100,
        returnTotal = currentLoanSize + commission,
        setDynamicProbability = function () {
            if(currentLoanSize >= 30000 && currentLoanSize < 50000){
                probability = 85;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }else if(currentLoanSize >= 50000 && currentLoanSize < 80000){
                probability = 77;
                probabilityTable.text("вероятность " + probability).append('%');;
                probabilityTable2.html("<span>"+probability +"%</span>");
            }else if(currentLoanSize >= 80000){
                probability = 65;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }
            else if(currentLoanSize <= 25000){
                probability = 95;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }
        },
        setDynamicTimePeriod = function () {
            if(currentLoanSize < 20000){
                time = 'от 100 дней';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize < 11000){
                time = 'от 61 дня';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize >= 20000 && currentLoanSize < 30000){
                time = 'от 130 дней';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize > 30000 && currentLoanSize < 50000){
                time = 'от 200 дней';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize > 50000){
                time = 'от 250 дней';
                timeTable.html("<span>"+time+"</span>");
            }
        },
        drawValuesStyle = function (currentValParam) {
            var splitedLoanVal = currentValParam.split('');
            if(currentValParam.length === 6){
                rangeUpperValue.append('<span class="noSelect"></span>')
            }else if(currentValParam.length === 5){
                rangeUpperValue.append('<span class="noSelect"></span><span class="noSelect"></span>')
            }
            for (i = 0; i < splitedLoanVal.length; i++) {
                rangeUpperValue.append('<span class="noSelect">'+ splitedLoanVal[i] +'</span>');
            }
            rangeUpperValue.find('span').each(function(){
                var CurrentEl = $(this).text();
                if (!CurrentEl.replace(/\s/g, '').length) {// string only contained whitespace (ie. spaces, tabs or line breaks)
                    $(this).addClass('ex-empty');
                }
            });
        };
    //------------------------Declaration of variables end-------------------------
    drawValuesStyle(currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
    rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
    timeTable.append("<span>"+time+"</span>");
    commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
    returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
    probabilityTable.text('').append("<span>вероятность "+ probability+"%</span>");
    probabilityTable2.text('').append("<span>"+ probability+"%</span>");
    //-------------------Use this function to get and set range slider current value----------------------//
    range.on("change", function () {
        rangeUpperValue.html('');
        probabilityTable.css('margin-left', '0');
        currentLoanSize = parseInt($(this).prop("value"));
        commission = (currentLoanSize * commissionPercantage) / 100;
        returnTotal = currentLoanSize + commission;
        var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        rangeTableValue.html("<span>"+currentLoanToShow+" рублей</span>");
        commissionTableSize.html("<span>"+commissionToShow+" рублей</span>");
        returnTable.html("<span>"+totalToShow+" рублей</span>");
        setDynamicProbability();
        setDynamicTimePeriod();
        drawValuesStyle(currentLoanToShow);
    });
    } 
}); 