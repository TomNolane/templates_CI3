//===== Written by gor-sargsyan.info =====//

//-----------------------Initializing--------------------------
$(document).ready(function () {
    //-----------------------Declaration of variables--------------------------
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
});