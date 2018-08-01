function checkMe() {
    var y = document.getElementById('agree');
    if (y != null) {
        if (y.checked) {
            $('#my_btn').css("display", "block");
        } else {
            $('#my_btn').css("display", "none");
        }
    }
}

function checkMee() {
    var y2 = document.getElementById('agree');
    if (y2 != null) {
        if (y2.checked) {
            $('#next1f').css("visibility", "visible");
        } else {
            $('#next1f').css("visibility", "hidden");
        }
    }
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

jQuery.fn.swap = function(b) {
    b = jQuery(b)[0];
    var a = this[0],
        a2 = a.cloneNode(true),
        b2 = b.cloneNode(true),
        stack = this;

    a.parentNode.replaceChild(b2, a);
    b.parentNode.replaceChild(a2, b);

    stack[0] = a2;
    return this.pushStack( stack );
    }; 


$(document).ready(function () {
    //Css animation on homepage
    $(window).scroll(function () {
        var $this = $(this),
            section5 = $('.ex-section-5'),
            section2 = $('.ex-section-2');
        if(section5.length > 0)
        {
            if ($this.scrollTop() >= section5.offset().top - 300) {
                section5.find('#menu3 .ex-wrapper').addClass('ex-animated');
            }
            if($this.scrollTop() >= section2.offset().top) {
                section2.find('#menu1 .ex-first').addClass('animated-1 fadeInRight');
                section2.find('#menu1 .ex-second').addClass('animated-2 fadeInRight');
                section2.find('#menu1 .ex-third').addClass('animated-3 fadeInRight');
                section2.find('#menu1 .ex-blue-basket').addClass('animated-4 fadeInRight');
                section2.find('#menu1 .ex-credit-card').addClass('animated-5 fadeInRightUnique');
                section2.find('#menu1 button').addClass('animated-6 fadeIn');
            }
        } 
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        if(e.target.id == "exPrestige"){
            $('#menu4').find('.ex-wrapper').addClass('ex-animated');
            $('#menu4').find('.ex-borrow-selector').addClass('ex-animated');
        }else {
            $('#menu4').find('.ex-wrapper').removeClass('ex-animated');
            $('#menu4').find('.ex-borrow-selector').removeClass('ex-animated');
        }
        if(e.target.id == "exGood"){
            $('#menu3').find('.ex-wrapper').addClass('ex-animated');
            $('#menu3').find('.ex-borrow-selector').addClass('ex-animated');
        }else {
            $('#menu3').find('.ex-wrapper').removeClass('ex-animated');
            $('#menu3').find('.ex-borrow-selector').removeClass('ex-animated');
        }
    })
});

//-----------------------Initializing--------------------------
$(document).ready(function () {
    if ($('#amount').val() != undefined) {
        var c = getParameterByName('amount');
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
            time = '130-200 дней',
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
                    time = '100-130 дней';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize < 8000){
                    time = '61-100 дней';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize >= 20000 && currentLoanSize < 30000){
                    time = '130-200 дней';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize > 30000 && currentLoanSize < 50000){
                    time = '200-250 дней';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize > 50000){
                    time = '250-365 дней';
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
        rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><i></i>");
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
            rangeUpperValue.html("<span>"+currentLoanToShow+"</span><i></i>");
            rangeTableValue.html("<span>"+currentLoanToShow+" рублей</span>");
            commissionTableSize.html("<span>"+commissionToShow+" рублей</span>");
            returnTable.html("<span>"+totalToShow+" рублей</span>");
            setDynamicProbability();
            setDynamicTimePeriod();
            setDynamicBet();
        }); 
    }
});