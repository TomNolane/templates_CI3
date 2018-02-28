//===== Written by gor-sargsyan.info =====//

//-----------------------Initializing--------------------------
$(document).ready(function () {
    //-----------------------Declaration of variables--------------------------
    var c = getParameterByName('amount');
    var gg = parseInt(($('#amount').val().trim().length < 1) ? 60000 : $('#amount').val());
    if (c != null) {
        if (c > 150000 || c < 7000) {
            c = 60000;
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
        time = 'от 130 дней',
        rubleCounter = $('.ex-for-img'),
        commission = (currentLoanSize * commissionPercantage) / 100,
        returnTotal = currentLoanSize + commission,
        setDynamicProbability = function () {
            if(currentLoanSize >= 60000 && currentLoanSize < 90000){
                probability = 85;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }else if(currentLoanSize >= 90000 && currentLoanSize < 120000){
                probability = 77;
                probabilityTable.text("вероятность " + probability).append('%');;
                probabilityTable2.html("<span>"+probability +"%</span>");
            }else if(currentLoanSize >= 120000){
                probability = 65;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }
            else if(currentLoanSize <= 45000){
                probability = 95;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }
        },
        setDynamicTimePeriod = function () {
            if(currentLoanSize < 60000 && currentLoanSize > 45000){
                time = 'от 100 дней';
                timeTable.html("<span>"+time+"</span>");
                rubleCounter.removeClass('ex-count-1 ex-count-3 ex-count-4').addClass('ex-count-2');
            }if(currentLoanSize < 45000){
                time = 'от 61 дня';
                timeTable.html("<span>"+time+"</span>");
                rubleCounter.removeClass('ex-count-2 ex-count-3 ex-count-4').addClass('ex-count-1');
            }if(currentLoanSize >= 60000 && currentLoanSize < 90000){
                time = 'от 130 дней';
                timeTable.html("<span>"+time+"</span>");
                rubleCounter.removeClass('ex-count-1 ex-count-2 ex-count-4').addClass('ex-count-3');
            }if(currentLoanSize > 90000 && currentLoanSize < 120000){
                time = 'от 200 дней';
                timeTable.html("<span>"+time+"</span>");
                rubleCounter.removeClass('ex-count-1 ex-count-2 ex-count-3').addClass('ex-count-4');
            }if(currentLoanSize > 120000){
                time = 'от 250 дней';
                timeTable.html("<span>"+time+"</span>");
            }
        };
    //------------------------Declaration of variables end-------------------------
    rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><i></i>");
    rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" тенге</span>");
    timeTable.append("<span>"+time+"</span>");
    commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" тенге</span>");
    returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" тенге</span>");
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
        rangeTableValue.html("<span>"+currentLoanToShow+" тенге</span>");
        commissionTableSize.html("<span>"+commissionToShow+" тенге</span>");
        returnTable.html("<span>"+totalToShow+" тенге</span>");
        setDynamicProbability();
        setDynamicTimePeriod();
    });
});