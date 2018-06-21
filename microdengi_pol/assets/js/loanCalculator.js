                    //***********Initializing***********

    //-----------------------Declaration of variables--------------------------
    var c = getParameterByName('amount'); 
    var gg = parseInt(($('#amount').val().trim().length < 1) ? 8000 : $('#amount').val());
    if (c != null) {
        if (c > 25000 || c < 500) {
            c = 8000;
        }
        gg = c;
    } 
    var current1 = gg,
        current2 = 16,
        range1 = $("#rangeSlider1"),
        rangeUpperValue1 =  $('.ex-slider-val-1'),
        range2 = $("#rangeSlider2"),
        rangeUpperValue2 =  $('.ex-slider-val-2');

        //------------------------Declaration of variables end-------------------------

    rangeUpperValue1.append(current1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+ "<span> zł</span>");
    rangeUpperValue2.append(current2 + "<span> dni</span>");

    $(document).ready(function () {
        //-------------------Use this function to get and set range sliders current values----------------------//
        range1.on("change", function () {
            current1 = parseInt($(this).prop("value"));
            var currentLoanToShow = current1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue1.html(currentLoanToShow + "<span> zł</span>");
        });
        range2.on("change", function () {
            current2 = $(this).prop("value");
            rangeUpperValue2.html(current2 + "<span> dni</span>");
        });
    });