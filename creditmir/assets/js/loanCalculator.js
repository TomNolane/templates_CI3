                    //***********Initializing***********

    //-----------------------Declaration of variables--------------------------
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
        
        var current1 = gg,
        current2 = 130,
        current3 = 1000000,
        current4 = 24,
        range1 = $("#rangeSlider1"),
        rangeUpperValue1 =  $('.ex-slider-val-1'),
        range2 = $("#rangeSlider2"),
        rangeUpperValue2 =  $('.ex-slider-val-2'),
        range3 = $("#rangeSlider3"),
        rangeUpperValue3 =  $('.ex-slider-val-3'),
        range4 = $("#rangeSlider4"),
        rangeUpperValue4 =  $('.ex-slider-val-4');

        //------------------------Declaration of variables end-------------------------



    rangeUpperValue1.append(current1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
    rangeUpperValue2.append(current2);
    rangeUpperValue3.append(current3.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
    rangeUpperValue4.append(current4);
    $(document).ready(function () {
        //-------------------Use this function to get and set range sliders current values----------------------//
        range1.on("change", function () {
            current1 = parseInt($(this).prop("value"));
            var currentLoanToShow = current1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue1.html(currentLoanToShow);
        });
        range2.on("change", function () {
            current2 = $(this).prop("value");
            rangeUpperValue2.html(current2);
        });
        range3.on("change", function () {
            current3 = parseInt($(this).prop("value"));
            var currentLoanToShow = current3.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue3.html(currentLoanToShow);
        });
        range4.on("change", function () {
            current4 = $(this).prop("value");
            rangeUpperValue4.html(current4);
        });
    });
});