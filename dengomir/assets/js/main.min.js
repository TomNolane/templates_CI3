
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
    $(document).on('click', function (e) {
        if($('.ex-aside-menu').hasClass('ex-is-open')){
            $('.ex-aside-menu').removeClass('ex-is-open');
        }
        if (!$(e.target).is('.panel-body')) {
            $('.collapse').collapse('hide');
        }
    });
    var dropdownToggle =  $('.dropdown-toggle'),
        menu = $('.dropdown-menu'),
        askButton = $('.ex-ask-question'),
        footerHeight = $('.ex-sticky-footer').outerHeight();
    $(document).on('click' ,function(){
        dropdownToggle.hasClass('ex-on-off') ? dropdownToggle.removeClass('ex-on-off'): '';
    });
    dropdownToggle.on('click', function (e) {
        $(this).toggleClass('ex-on-off');
        $(this).parent().css('position','initial');
    });
    menu.on('click', function (e) {
        e.stopPropagation();
    });
    askButton.on('click', function (event) {
        $('#askQuestion').modal();
        $('.dropdown.open .dropdown-toggle').dropdown('toggle');
    });
    // $('#submitOne').on('click', function () {
    //     $('.ex-step-counter').addClass('ex-on-second-step');
    // });
    $('#submitTwo').on('click', function () {
        $('.ex-step-counter').removeClass('ex-on-second-step').addClass('ex-on-last-step');
    });
    //Sticky footer functionality, adding body dynamic padding bottom duo to footer height
    $('.ex-sticky').css('padding-bottom', footerHeight);
    $( window ).resize(function() {
        var dynamicFooterHeight = $('.ex-sticky-footer').outerHeight();
        $('.ex-sticky').css('padding-bottom', dynamicFooterHeight);
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


    //Collapse menu hide show events
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).prev('.panel-heading').addClass('ex-bg-head')
            .find('.ex-arrow-show')
            .removeClass('ex-arrow-show')
            .addClass('ex-arrow-hide');
    });
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading').removeClass('ex-bg-head')
            .find('.ex-arrow-hide')
            .removeClass('ex-arrow-hide')
            .addClass('ex-arrow-show');
    });
    $( ".ex-pin-block" ).hover(
        function() {
            if($( ".ex-pin-block").hasClass("ex-pin-active")) {
                $( ".ex-pin-block").removeClass( "ex-pin-active");
            }
            $(this).addClass( "ex-pin-active");
        }
    );
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
            $('#submitOne').css("visibility", "visible");  
        }
        else
        {
            $('#submitOne').css("visibility", "hidden");
        } 
    } 
}
$(document).ready(function () {
    //-----------------------Declaration of variables--------------------------
    if($('#amount').val() != undefined)
    {
        var c = getParameterByName('amount'); 
        var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val());
        if (c != null) {
            if (c > 100000 || c < 1000) {
                c = 20000;
            }
            gg = c;
        }
        var currentLoanSize = gg,
            range = $("#rangeSlider"),
            commissionPercantage = 13,
            bet = 'от 1.27%',
            rangeUpperValue =  $('.ex-slider-val'),
            rangeTableValue = $('.ex-current-val'),
            timeTable = $('.ex-time'),
            betSize = $('.ex-bet'),
            commissionTableSize = $('.ex-Commission'),
            returnTable = $('.ex-total'),
            probabilityTable = $('.irs-single'),
            probabilityTable2 = $('.ex-prob'),
            probability = 95,
            time = '61 дня',
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
                    time = '61 дня';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize < 8000){
                    time = '61 дня';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize >= 20000 && currentLoanSize < 30000){
                    time = '130 дней';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize > 30000 && currentLoanSize < 50000){
                    time = '200 дней';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize > 50000){
                    time = '250 дней';
                    timeTable.html("<span>"+time+"</span>");
                }
            };
        setDynamicBet = function () {
            if(currentLoanSize > 30000){
                bet = 'от 0,2%';
                betSize.html(bet);
            }else{
                bet = 'от 1.27%';
                betSize.html(bet);
            }
        };
        //------------------------Declaration of variables end-------------------------
        rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><span> рублей</span>");
        rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        timeTable.append("<span>"+time+"</span>");
        betSize.html(bet);
        commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        probabilityTable.text('').append("<span>вероятность "+ probability+"%</span>");
        probabilityTable2.text('').append("<span>"+ probability+"%</span>");
        //-------------------Use this function to get and set range slider current value----------------------//
        range.on("change", function () {
            probabilityTable.css('margin-left', '0');
            currentLoanSize = parseInt($(this).prop("value"));
            commission = (currentLoanSize * commissionPercantage) / 100;
            returnTotal = currentLoanSize + commission;
            var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue.html("<span>"+currentLoanToShow+"</span><span> рублей</span>");
            rangeTableValue.html("<span>"+currentLoanToShow+" рублей</span>");
            commissionTableSize.html("<span>"+commissionToShow+" рублей</span>");
            returnTable.html("<span>"+totalToShow+" рублей</span>");
            setDynamicProbability();
            setDynamicTimePeriod();
            setDynamicBet();
        });
    }
});