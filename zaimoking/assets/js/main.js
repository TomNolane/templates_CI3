function checkMe() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#my_btn").css("display", "block") : $("#my_btn").css("display", "none"))
}

function checkMee() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#next1f").css("visibility", "visible") : $("#next1f").css("visibility", "hidden"))
}

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
        $(this).prev('.panel-heading').addClass('ex-bg-head')
            .find('.ex-down')
            .removeClass('ex-down')
            .addClass('ex-up');
    });
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading').removeClass('ex-bg-head')
            .find('.ex-up')
            .removeClass('ex-up')
            .addClass('ex-down');
    });

    if (void 0 != $("#amount").val())
    {
        var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val());
        if (gg != null) {
            if (gg > 100000 || gg < 1000) {
                gg = 20000;
            } 
        };
        var currentLoanSize = parseInt(gg),
            range = $("#rangeSlider"),
            commissionPercantage = 13,
            bet = 'от 1.27%',
            rangeUpperValue = $('.ex-slider-val'),
            rangeTableValue = $('.ex-current-val'),
            timeTable = $('.ex-time'),
            betSize = $('.ex-bet'),
            commissionTableSize = $('.ex-Commission'),
            returnTable = $('.ex-total'),
            probabilityTable = $('.irs-single'),
            probabilityTable2 = $('.ex-prob'),
            probability = 95,
            time = 'от 130 дней',
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
                if (currentLoanSize < 20000) {
                    time = 'от 100 дней';
                    timeTable.html("<span>" + time + "</span>");
                }
                if (currentLoanSize < 8000) {
                    time = 'от 61 дня';
                    timeTable.html("<span>" + time + "</span>");
                }
                if (currentLoanSize >= 20000 && currentLoanSize < 30000) {
                    time = 'от 130 дней';
                    timeTable.html("<span>" + time + "</span>");
                }
                if (currentLoanSize > 30000 && currentLoanSize < 50000) {
                    time = 'от 200 дней';
                    timeTable.html("<span>" + time + "</span>");
                }
                if (currentLoanSize > 50000) {
                    time = 'от 250 дней';
                    timeTable.html("<span>" + time + "</span>");
                }
            };
        setDynamicBet = function () {
            if (currentLoanSize > 30000) {
                bet = 'от 0,2%';
                betSize.html(bet);
            } else {
                bet = 'от 1.27%';
                betSize.html(bet);
            }
        };
        //------------------------Declaration of variables end-------------------------
        rangeUpperValue.append("<span>" + currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
        rangeTableValue.append("<span>" + currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
        timeTable.append("<span>" + time + "</span>");
        betSize.html(bet);
        commissionTableSize.append("<span>" + commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
        returnTable.append("<span>" + returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
        probabilityTable.text('').append("<span>вероятность " + probability + "%</span>");
        probabilityTable2.text('').append("<span>" + probability + "%</span>");
        //-------------------Use this function to get and set range slider current value----------------------//
        range.on("change", function () {
            probabilityTable.css('margin-left', '0');
            currentLoanSize = parseInt($(this).prop("value"));
            commission = (currentLoanSize * commissionPercantage) / 100;
            returnTotal = currentLoanSize + commission;
            var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue.html("<span>" + currentLoanToShow + " рублей</span>");
            rangeTableValue.html("<span>" + currentLoanToShow + " рублей</span>");
            commissionTableSize.html("<span>" + commissionToShow + " рублей</span>");
            returnTable.html("<span>" + totalToShow + " рублей</span>");
            setDynamicProbability();
            setDynamicTimePeriod();
            setDynamicBet();
        });
    }
});
