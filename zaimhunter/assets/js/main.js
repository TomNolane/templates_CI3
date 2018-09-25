function checkMe() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#my_btn").css("display", "block") : $("#my_btn").css("display", "none"))
}

function checkMee() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#next1f").css("visibility", "visible") : $("#next1f").css("visibility", "hidden"))
}

function goToForm()
{
    $('#anketa').submit();
}

var equalheight = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el, topPosition = 0;
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
    var body = $('body'),
        footerHeight = $(".ex-main-footer").outerHeight(),
        panelCollapse = $('.panel-collapse'),
        indicator = $('.ex-indicator-scope'),
        formIndicator1 = $('.ex-first-step'),
        formIndicator2 = $('.ex-second-step').find('span'),
        formIndicator3 = $('.ex-last-step'),
        formBtn1 = $('#submitOne'),
        formBtn2 = $('#submitTwo');
    body.css('padding-bottom', footerHeight);
    $(window).resize(function () {
        footerHeight = $(".ex-main-footer").outerHeight();
        body.css('padding-bottom', footerHeight);
    });
    panelCollapse.on('show.bs.collapse', function () {
        $(this).prev('.panel-heading').find('.ex-plus-icon').removeClass('ex-plus-icon').addClass('ex-minus-icon');
    });
    panelCollapse.on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading').find('.ex-minus-icon').removeClass('ex-minus-icon').addClass('ex-plus-icon');
    });
    $(formBtn1).on('click', function () {
        indicator.addClass('ex-on-second-step');
    });
    $(formBtn2).on('click', function () {
        indicator.removeClass('ex-on-second-step').addClass('ex-on-last-step');
    });
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
    $('.ex-hamburger').on('click', function () {
        $('.ex-aside-menu').addClass('ex-is-open');
    });
    $('.ex-close-menu').on('click', function () {
        $('.ex-aside-menu').removeClass('ex-is-open');
    });
});
$(document).ready(function ()
{
    var c = getParameterByName('amount');
    if ("undefined" != typeof $("#amount").val())
    {
        var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val());
        if (c != null) {
            if (c > 100000 || c < 1000) {
                c = 20000;
            }
            gg = c;
        };
        var currentLoanSize = parseInt(gg),
            range = $("#rangeSlider"),
            commissionPercantage = 13,
            rangeUpperValue = $('#ex-slider-val'),
            rangeUpperValue2 = $('.val2'),
            rangeTableValue = $('.ex-current-val'),
            timeTable = $('.ex-time'),
            commissionTableSize = $('.ex-Commission'),
            returnTable = $('.ex-total'),
            probabilityTable = $('.irs-single'),
            probabilityTable2 = $('.ex-prob'),
            probability = 95,
            time = '',
            commission = (currentLoanSize * commissionPercantage) / 100,
            returnTotal = currentLoanSize + commission,
            setDynamicProbability = function () {
                if (currentLoanSize >= 30000 && currentLoanSize < 50000) {
                    probability = 85;
                    probabilityTable.text("вероятность " + probability).append('%');
                    probabilityTable2.html("<span>" + probability + "%</span>");
                } else if (currentLoanSize >= 50000 && currentLoanSize < 80000) {
                    probability = 77;
                    probabilityTable.text("вероятность " + probability).append('%');;
                    probabilityTable2.html("<span>" + probability + "%</span>");
                } else if (currentLoanSize >= 80000) {
                    probability = 65;
                    probabilityTable.text("вероятность " + probability).append('%');
                    probabilityTable2.html("<span>" + probability + "%</span>");
                } else if (currentLoanSize <= 25000) {
                    probability = 95;
                    probabilityTable.text("вероятность " + probability).append('%');
                    probabilityTable2.html("<span>" + probability + "%</span>");
                }
            },
            setDynamicTimePeriod = function () {
                if (currentLoanSize < 30000) {
                    $('.ex-zaim-time').find('.ex-active-time').removeClass();
                    $('.ex-zaim-time li').eq(0).attr('class', 'ex-active-time');
                    $('.ex-zaim-time2').find('.ex-active-time').removeClass();
                    $('.ex-zaim-time2 li').eq(0).attr('class', 'ex-active-time');
                }
                if (currentLoanSize >= 30000 && currentLoanSize <= 50000) {
                    $('.ex-zaim-time').find('.ex-active-time').removeClass();
                    $('.ex-zaim-time li').eq(1).attr('class', 'ex-active-time');
                    $('.ex-zaim-time2').find('.ex-active-time').removeClass();
                    $('.ex-zaim-time2 li').eq(1).attr('class', 'ex-active-time');
                }
                if (currentLoanSize > 50000) {
                    $('.ex-zaim-time').find('.ex-active-time').removeClass();
                    $('.ex-zaim-time li').eq(2).attr('class', 'ex-active-time');
                    $('.ex-zaim-time2').find('.ex-active-time').removeClass();
                    $('.ex-zaim-time2 li').eq(2).attr('class', 'ex-active-time');
                }
            };
        rangeUpperValue.append("<span class='special_index7'><b>" + currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</b></span>");
        $('.amm').html("<span>" + currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
        rangeTableValue.append("<span>" + currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
        timeTable.append("<span>" + '' + "</span>");
        commissionTableSize.append("<span>" + commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
        returnTable.append("<span>" + returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>" + "<span> " + time + " </span>");
        probabilityTable.text('').append("<span>вероятность " + probability + "%</span>");
        probabilityTable2.text('').append("<span>" + probability + "%</span>");
        range.on("change", function () {
            probabilityTable.css('margin-left', '0');
            currentLoanSize = parseInt($(this).prop("value"));
            commission = (currentLoanSize * commissionPercantage) / 100;
            returnTotal = currentLoanSize + commission;
            var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue.html("<span class='special_index7'><b>" + currentLoanToShow + " рублей</b></span>");
            rangeUpperValue2.html("<div class='text-center'><span>" + totalToShow + " рублей</span></div>");
            $('.amm').text("<span>" + totalToShow + "</span><i></i>");
            rangeTableValue.html("<span> " + currentLoanToShow + " рублей</span>");
            commissionTableSize.html("<span>" + commissionToShow + " рублей</span>");
            returnTable.html("<span class='special_index6'> " + currentLoanToShow + " рублей</span>" + "<span> " + time + " </span>");
            setDynamicProbability();
            setDynamicTimePeriod();
        });
    }
});