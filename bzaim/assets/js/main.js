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
        }
        else
        {
            $('#next1').css("visibility", "hidden");
        } 
    } 
}

//-----------------------Initializing--------------------------
$(document).ready(function () { 
    //-----------------------Declaration of variables--------------------------
    var c = getParameterByName('amount');
    if(typeof $('#amount').val() == 'undefined')
        return;
    var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('.amount').val());
    if (c != null) {
        if (c > 100000 || c < 1000) {
            c = 20000;
        }
        gg = c;
    }  
    var currentLoanSize = gg,
        range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue =  $('#ex-slider-val'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
        commissionTableSize = $('.ex-Commission'),
        returnTable = $('.ex-total'),
        probabilityTable = $('.irs-single'),
        probabilityTable2 = $('.ex-prob'),
        probability = $('#percent').val(),
        time = '130-200 дней',
        commission = (currentLoanSize * commissionPercantage) / 100,
        returnTotal = currentLoanSize + commission,
        setDynamicProbability = function () {
            if (currentLoanSize <= 10000) { 
                probability = 95;
            } else if (currentLoanSize <= 15000) { 
                probability = 95;
            } else if (currentLoanSize <= 20000) { 
                probability = 95;
            } else if (currentLoanSize <= 30000) { 
                probability = 85;
            } else if (currentLoanSize <= 50000) { 
                probability = 77;
            } else  if (currentLoanSize <= 200000 && currentLoanSize > 50000) { 
                probability = 65;
            } else  if (currentLoanSize <= 500000 && currentLoanSize > 200000) { 
                probability = 58;
            } else { 
                probability = 52;
            }

            probabilityTable.text("вероятность " + probability).append('%');
            probabilityTable2.html("<span style='margin-left: 0px !important;'>"+probability +"%</span>");
        },
        setDynamicTimePeriod = function () {
            if (currentLoanSize <= 10000) { 
                time = "От 61 до 130 дней";
             } else if (currentLoanSize <= 15000) { 
                time = "От 61 до 130 дней";
             } else if (currentLoanSize <= 20000) { 
                time = "От 61 до 130 дней";
             } else if (currentLoanSize <= 30000) { 
                time = "От 61 до 130 дней";
             } else if (currentLoanSize <= 50000) { 
                time = "От 130 до 250 дней";
             } else  if (currentLoanSize <= 200000 && currentLoanSize > 50000) { 
                time = "От 250 до 365 дней";
             } else  if (currentLoanSize <= 500000 && currentLoanSize > 200000) { 
                time = "От 1 до 3 лет";
             } else { 
                time = "От 1 до 5 лет";
             }
 
             timeTable.html("<span>"+time+"</span>");
           
            var tt2 = $('#ex-slider-val').text();
            tt2 = tt2.split(" ").join("");
            $('.amount').val(tt2);
            var ff = range.data('ionRangeSlider');
        };
    //------------------------Declaration of variables end-------------------------
        rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><i></i>");
        rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        timeTable.append("<span>"+time+"</span>");
        commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        probabilityTable.text('').append("<span>вероятность "+ probability+"%</span>");
        probabilityTable2.text('').append("<span>"+ probability+"%</span>");
    //-------------------Use this function to get and set range slider current value----------------------//
    range.on("change", function () {
        probabilityTable.attr('style', probabilityTable.attr('style') + ';' + 'margin-left: -37px !important');
        currentLoanSize = parseInt($(this).prop("value"));
        commission = (currentLoanSize * commissionPercantage) / 100;
        returnTotal = currentLoanSize + commission;
        var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        rangeUpperValue.html("<span>"+currentLoanToShow+"</span><i></i>");
        rangeTableValue.html("<span>"+currentLoanToShow+" рублей</span>");
        commissionTableSize.html("<span>"+commissionToShow+" рублей</span>");
        returnTable.html("<span>"+totalToShow+" рублей</span>");
        setDynamicProbability();
        setDynamicTimePeriod();  
    });
});