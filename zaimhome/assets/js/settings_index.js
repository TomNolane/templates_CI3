function goToForm() {
    var tt = $('#ex-slider-val').text();
    tt = tt.split(" ").join("");
    setcookie('sldr', tt, (new Date).getTime() + (365 * 24 * 60 * 60 * 1000), '/');
    var slider = $("#rangeSlider").data("ionRangeSlider");
    var from2 = slider.result.from;
    $('#from_slrd').val(from2);
    setcookie('sldr2', from2, (new Date).getTime() + (365 * 24 * 60 * 60 * 1000), '/');
    var days = $('#period').val();
    if (days === '') days = 21;
    setcookie('per', days, (new Date).getTime() + (365 * 24 * 60 * 60 * 1000), '/');
    var days2 = $('#period2').val();
    setcookie('per2', days2, (new Date).getTime() + (365 * 24 * 60 * 60 * 1000), '/');
    $('#anketa').submit();
};

function goToLk() {
    window.location.href = window.location.origin + '/lk';
};

function goToUp() {
    $('html, body').animate({
        scrollTop: $('.ex-range-scope').offset().top
    }, 1000);
}

function goToReceiveMoney() {
    window.location.href = window.location.origin + '/receiveMoney';
}
$("#rangeSlider").ionRangeSlider({
    hide_min_max: true,
    hide_from_to: true,
    keyboard: true,
    grid: false,
    from: 15,
    values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000],
    onChange: function (range) {
        if (range.from_value <= 10000) {
            $('#period').val('7');
            $('#period2').val('От 61 до 130 дней');
        } else if (range.from_value <= 15000) {
            $('#period').val('14');
            $('#period2').val('От 61 до 130 дней');
        } else if (range.from_value <= 20000) {
            $('#period').val('21');
            $('#period2').val('От 61 до 130 дней');
        } else if (range.from_value <= 30000) {
            $('#period').val('21');
            $('#period2').val('От 61 до 130 дней');
        } else if (range.from_value <= 50000) {
            $('#period').val('30');
            $('#period2').val('От 130 до 250 дней');
        } else {
            $('#period').val('30');
            $('#period2').val('От 250 до 365 дней');
        }
    }
});
$(document).ready(function () {
    var slider3 = $('#rangeSlider').data('ionRangeSlider');
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