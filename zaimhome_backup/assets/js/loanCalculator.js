$(document).ready(function () {
    var c = getParameterByName('amount');
    var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val());
    if (c != null) {
        if (c > 100000 || c < 1000) {
            c = 20000;
        }
        gg = c;
    };
    var currentLoanSize =  parseInt(gg),
        range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue = $('#ex-slider-val'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
        commissionTableSize = $('.ex-Commission'),
        returnTable = $('.ex-total'),
        probabilityTable = $('.ex-probability'),
        probability = 95,
        time = '130-200 дней',
        commission = (currentLoanSize * commissionPercantage) / 100,
        returnTotal = currentLoanSize + commission,
        setDynamicProbability = function () {
            if (currentLoanSize >= 30000 && currentLoanSize < 50000) {
                probability = 85;
                probabilityTable.text(probability).append("%");
            } else if (currentLoanSize >= 50000 && currentLoanSize < 80000) {
                probability = 77;
                probabilityTable.text(probability).append("%");
            } else if (currentLoanSize >= 80000) {
                probability = 65;
                probabilityTable.text(probability).append("%");
            } else if (currentLoanSize <= 25000) {
                probability = 95;
                probabilityTable.text(probability).append("%");
            }
        },
        setDynamicTimePeriod = function () {
            if (currentLoanSize < 20000) {
                time = '100-130 дней';
                timeTable.text(time);
            }
            if (currentLoanSize < 8000) {
                time = '61-100 дней';
                timeTable.text(time);
            }
            if (currentLoanSize >= 20000 && currentLoanSize < 30000) {
                time = '130-200 дней';
                timeTable.text(time);
            }
            if (currentLoanSize > 30000 && currentLoanSize < 50000) {
                time = '200-250 дней';
                timeTable.text(time);
            }
            if (currentLoanSize > 50000) {
                time = '250-365 дней';
                timeTable.text(time);
            }
        };
    rangeUpperValue.text(currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
    rangeTableValue.text(currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")).append("<i></i>");
    timeTable.text(time);
    commissionTableSize.text(commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")).append("<i></i>");
    returnTable.text(returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")).append("<i></i>");
    probabilityTable.text(probability).append('%');
    range.on("change", function () {
        currentLoanSize = parseInt($(this).prop("value"));
        commission = (currentLoanSize * commissionPercantage) / 100;
        returnTotal = currentLoanSize + commission;
        var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        rangeUpperValue.text(currentLoanToShow);
        rangeTableValue.text(currentLoanToShow).append("<i></i>");
        commissionTableSize.text(commissionToShow).append("<i></i>");
        returnTable.text(totalToShow).append("<i></i>");
        setDynamicProbability();
        setDynamicTimePeriod();
    });
}); 