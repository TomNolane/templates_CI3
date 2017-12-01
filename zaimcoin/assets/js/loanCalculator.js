$(document).ready(function () { 
    var c = getParameterByName('amount'); 
    var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val());
    if (c != null) {
        if (c > 100000 || c < 1000) {
            c = 20000;
        }
        gg = c;
    } 
    var currentLoanSize = gg;
        range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue = $('#ex-slider-val'),
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
                time = '100-130 дней';
                timeTable.html("<span>" + time + "</span>");
            }
            if (currentLoanSize < 8000) {
                time = '61-100 дней';
                timeTable.html("<span data='15'>" + time + "</span>");
            }
            if (currentLoanSize >= 20000 && currentLoanSize < 30000) {
                time = '130-200 дней';
                timeTable.html("<span>" + time + "</span>");
            }
            if (currentLoanSize > 30000 && currentLoanSize < 50000) {
                time = '200-250 дней';
                timeTable.html("<span>" + time + "</span>");
            }
            if (currentLoanSize > 50000) {
                time = '250-365 дней';
                timeTable.html("<span>" + time + "</span>");
            }
        };
    rangeUpperValue.append(currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + "<span> рублей</span>");
    rangeTableValue.append("<span>" + currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
    timeTable.append("<span>" + time + "</span>");
    commissionTableSize.append("<span>" + commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
    returnTable.append("<span>" + returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
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
        rangeUpperValue.html(currentLoanToShow + "<span> рублей</span>");
        rangeTableValue.html("<span>" + currentLoanToShow + " рублей</span>");
        commissionTableSize.html("<span>" + commissionToShow + " рублей</span>");
        returnTable.html("<span>" + totalToShow + " рублей</span>");
        setDynamicProbability();
        setDynamicTimePeriod();
    });
    range.on("finish", function () {
        probabilityTable.css('margin-left', '0');
        currentLoanSize = parseInt($(this).prop("value"));
        commission = (currentLoanSize * commissionPercantage) / 100;
        returnTotal = currentLoanSize + commission;
        var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        rangeUpperValue.html(currentLoanToShow + "<span> рублей</span>");
        rangeTableValue.html("<span>" + currentLoanToShow + " рублей</span>");
        commissionTableSize.html("<span>" + commissionToShow + " рублей</span>");
        returnTable.html("<span>" + totalToShow + " рублей</span>");
        setDynamicProbability();
        setDynamicTimePeriod();
    });
});
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}