                    //***********Initializing***********

    //-----------------------Declaration of variables--------------------------
    var current1 = 20000,
        current2 = 130,
        range1 = $("#rangeSlider1"),
        rangeUpperValue1 =  $('.ex-slider-val-1'),
        range2 = $("#rangeSlider2"),
        rangeUpperValue2 =  $('.ex-slider-val-2');
        var dayz = "<span class='spec_calc'> дней</span>"; 
        var rub = "<span class='spec_calc'> рублей</span>";
        //------------------------Declaration of variables end-------------------------

    rangeUpperValue1.append(current1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
    rangeUpperValue2.append("<span>от</span>"+ current2);

    $(document).ready(function () {
        //-------------------Use this function to get and set range sliders current values----------------------//
        range1.on("change", function () {
            current1 = parseInt($(this).prop("value"));
            var currentLoanToShow = current1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue1.html(currentLoanToShow + rub);
        });
        range2.on("change", function () {
            current2 = $(this).prop("value");
            if(current2 == '61') dayz = "<span class='spec_calc'> дня</span>"; 
            else dayz = "<span class='spec_calc'> дней</span>"; 
            rangeUpperValue2.html("<span>от</span>"+current2+dayz);
        });
    });