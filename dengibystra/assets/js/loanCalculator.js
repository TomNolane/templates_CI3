//===== Written by gor-sargsyan.info =====//

//-----------------------Initializing--------------------------
$(document).ready(function () { 
    

    //-----------------------Declaration of variables--------------------------
    var currentLoanSize = 20000,
        range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue =  $('#ex-slider-val'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
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
            }if(currentLoanSize >= 30000 && currentLoanSize < 50000){
                time = '200-250 дней';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize >= 50000){
                time = '250-365 дней';
                timeTable.html("<span>"+time+"</span>");
            }
          
            // $('.amount').val(currentLoanSize);
            var tt2 = $('#ex-slider-val').text();
            tt2 = tt2.split(" ").join("");
            $('.amount').val(tt2);
            var ff = range.data('ionRangeSlider'); 
            $('.sldr').val(ff.result.from);
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
    }); 
    
    var slider3 = range.data('ionRangeSlider'); 
    var slider_plus = true;
    var n = 6;
    var slider_init = setInterval(function () {
        if (slider_plus) {
            n++;
        } else {
            n--;
        }
        if (n == 21) {
            slider_plus = false;
        } else if (n == 5) {
            clearInterval(slider_init);
        }

        slider3.update({
            from: n
        });

        if (n <= 9) {
            $('#period').val('7');
            $('#period2').val('От 61 до 130 дней');
        } else if (n <= 14 && n > 9) {
            $('#period').val('14');
            $('#period2').val('От 61 до 130 дней');
        } else if (n <= 15 && n > 14) {
            $('#period').val('21');
            $('#period2').val('От 61 до 130 дней');
        } else if (n <= 17 && n > 15) {
            $('#period').val('21');
            $('#period2').val('От 61 до 130 дней');
        } else if (n <= 19 && n > 17) {
            $('#period').val('30');
            $('#period2').val('От 130 до 250 дней');
        } else if (n > 19) {
            $('#period').val('30');
            $('#period2').val('От 250 до 365 дней');
        }

    }, 50);
    
});