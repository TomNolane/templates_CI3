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
        time = '61',
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
                time = '61';
                timeTable.html("<span>"+time+"</span><span> дня</span>");
            }if(currentLoanSize < 8000){
                time = '61';
                timeTable.html("<span>"+time+"</span><span> дня</span>");
            }if(currentLoanSize >= 20000 && currentLoanSize < 30000){
                time = '130';
                timeTable.html("<span>"+time+"</span><span> дня</span>");
            }if(currentLoanSize > 30000 && currentLoanSize < 50000){
                time = '200 ';
                timeTable.html("<span>"+time+"</span><span> дня</span>");
            }if(currentLoanSize > 50000){
                time = '250';
                timeTable.html("<span>"+time+"</span><span> дня</span>");
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
    rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><span>  рублей</span>");
    timeTable.append("<span>"+time+"</span><span> дня</span>");
    betSize.html(bet);
    commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><span>  рублей</span>");
    returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><span>  рублей</span>");
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
        rangeTableValue.html("<span>"+currentLoanToShow+"</span><span>  рублей</span>");
        commissionTableSize.html("<span>"+commissionToShow+"</span><span>  рублей</span>");
        returnTable.html("<span>"+totalToShow+"</span><span>  рублей</span>");
        setDynamicProbability();
        setDynamicTimePeriod();
        setDynamicBet();
    });
});