//===== Written by gor-sargsyan.info =====//

//-----------------------Initializing--------------------------
$(document).ready(function () {
    //-----------------------Declaration of variables--------------------------
    var currentLoanSize =  parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val()),
        range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue =  $('#ex-slider-val'),
        rangeUpperValue2 =  $('.val2'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
        commissionTableSize = $('.ex-Commission'),
        returnTable = $('.ex-total'),
        probabilityTable = $('.irs-single'),
        probabilityTable2 = $('.ex-prob'),
        probability = 95,
        //time = ' к возврату',
        time = '',
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
            if(currentLoanSize < 30000) {
                $('.ex-zaim-time').find('.ex-active-time').removeClass();
                $('.ex-zaim-time li').eq(0).attr('class', 'ex-active-time');

                $('.ex-zaim-time2').find('.ex-active-time').removeClass();
                $('.ex-zaim-time2 li').eq(0).attr('class', 'ex-active-time');
            }
            if(currentLoanSize >= 30000 && currentLoanSize <= 50000) {
                $('.ex-zaim-time').find('.ex-active-time').removeClass();
                $('.ex-zaim-time li').eq(1).attr('class', 'ex-active-time');

                $('.ex-zaim-time2').find('.ex-active-time').removeClass();
                $('.ex-zaim-time2 li').eq(1).attr('class', 'ex-active-time');
            }
            if(currentLoanSize > 50000) {
                $('.ex-zaim-time').find('.ex-active-time').removeClass();
                $('.ex-zaim-time li').eq(2).attr('class', 'ex-active-time');

                $('.ex-zaim-time2').find('.ex-active-time').removeClass();
                $('.ex-zaim-time2 li').eq(2).attr('class', 'ex-active-time');
            } 
        };
    //------------------------Declaration of variables end-------------------------
        rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><i></i>");

        $('.amm').html("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");


        rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        timeTable.append("<span>"+''+"</span>");
        commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>" + "<span> " + time+ " </span>"); 
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

        // rangeUpperValue.html("<span>"+currentLoanToShow+"</span><i></i>");
        rangeUpperValue.html("<span class='special_index7'><b>К возврату "+totalToShow+" рублей</b></span>");
        rangeUpperValue2.html("<div class='text-center'><span>к возврату "+totalToShow+" рублей</span></div>");
        $('.amm').text("<span>"+totalToShow+"</span><i></i>");

        rangeTableValue.html("<span> "+currentLoanToShow+" рублей</span>");
        commissionTableSize.html("<span>"+commissionToShow+" рублей</span>");


        // returnTable.html("<span>"+totalToShow+" рублей</span>" + "<span> " + time+ " </span>");
        returnTable.html("<span class='special_index6'> "+currentLoanToShow+" рублей</span>" + "<span> " + time+ " </span>");

        setDynamicProbability();
        setDynamicTimePeriod();
    });
});