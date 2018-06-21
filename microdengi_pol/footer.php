<a href="#0" class="cd-top">Na górę</a>
<footer class="ex-main-footer"></footer>
<?php
    $from = 15;
    require 'templates/common/get_display_size.php';
    echo "<script>";
    require 'templates/microdengi_pol/assets/js/jquery.min.js';
    echo "</script>";
    echo "<script>";
    require 'templates/microdengi_pol/assets/js/bootstrap.min.js';
    echo "</script>";
    echo "<script>";
    require 'templates/microdengi_pol/assets/js/owl.carousel.min.js';
    echo "</script>";
    require 'templates/common/detect.min.php';
    echo '<!-- backtotop -->
    <script>
    jQuery(document).ready(function (o) {
        var l = 300,
            s = 1200,
            c = 700,
            d = o(".cd-top");
        o(window).scroll(function () {
            o(this).scrollTop() > l ? d.addClass("cd-is-visible") : d.removeClass(
                "cd-is-visible cd-fade-out"), o(this).scrollTop() > s && d.addClass("cd-fade-out")
        }), d.on("click", function (l) {
            l.preventDefault(), o("body,html").animate({
                scrollTop: 0
            }, c)
        })
    });</script>'; 
    echo "<script>";
    require 'templates/microdengi_pol/assets/js/custom.js';
    echo "</script>";
    echo "<script>";
    if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'idnex') { 
        require "templates/microdengi_pol/assets/js/ion.rangeSlider.min.js";
        echo "</script>";
        echo "<script>";
        require 'templates/microdengi_pol/assets/js/get_parameter.js';
        echo "</script>";
        echo "<script>";
        require 'templates/microdengi_pol/assets/js/loanCalculator.js';
        echo "</script>";
        echo "<script>"; 
    ?>
    $("#rangeSlider1").ionRangeSlider({
        hide_min_max: true,
        hide_from_to: true,
        keyboard: true,
        grid: false,
        from: <?php 
        if(isset($_GET['amount'])) 
        { 
            $sum = $_GET['amount'];
        
            if ($sum < '500' || $sum > '25000')
            { 
                echo '15';
            }
            else 
            {
                switch($sum)
                {
                    case '500': $sum = 0; break;
                    case '1000': $sum = 2; break;
                    case '1500': $sum = 3; break;
                    case '2000': $sum = 4; break;
                    case '2500': $sum = 5; break;
                    case '3000': $sum = 6; break;
                    case '4500': $sum = 7; break;
                    case '5000': $sum = 8; break;
                    case '5500': $sum = 9; break;
                    case '6000': $sum = 10; break;
                    case '6500': $sum = 11; break;
                    case '7000': $sum = 12; break;
                    case '7500': $sum = 13; break;
                    case '8000': $sum = 14; break;
                    case '9500': $sum = 15; break;
                    case '10000': $sum = 16; break;
                    case '10500': $sum = 17; break;
                    case '11000': $sum = 18; break;
                    case '12000': $sum = 19; break;
                    case '13000': $sum = 20; break;
                    case '14000': $sum = 21; break;
                    case '15000': $sum = 22; break;
                    case '16000': $sum = 23; break;
                    case '17000': $sum = 24; break;
                    case '18000': $sum = 25; break;
                    case '19000': $sum = 26; break;
                    case '20000': $sum = 27; break;
                    case '21000': $sum = 28; break;
                    case '22000': $sum = 29; break;
                    case '23000': $sum = 30; break;
                    case '24000': $sum = 31; break;
                    case '25000': $sum = 32; break;
                }
                $from = $sum;
                echo $sum;
            }
        }
        else echo "15";
        ?>,
        values: [500, 1000, 1500, 2000, 2500, 3000, 3500,
        4000, 4500,5000, 5500, 6000, 6500,
        7000, 7500, 8000, 8500, 9000, 9500,
        10000, 11000, 12000, 13000, 14000, 15000, 16000, 17000, 18000, 19000, 20000, 21000, 22000, 23000, 24000, 25000],
        onChange: function (range) {
            $('#amount').val(range.from_value);
        },
    });

    $("#rangeSlider2").ionRangeSlider({
        hide_min_max: true,
        hide_from_to: true,
        keyboard: true,
        grid: false,
        from: 15,
        values: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,61],
        onChange: function (range) {
            $('#period').val(range.from_value);
        },
    });

    var slider3 = $('#rangeSlider1').data('ionRangeSlider');
    var slider_plus = true;
    var n = 10;
    var slider_init = setInterval(function () {
    if (slider_plus) {
    n++;
    } else {
    n--;
    }
    if (n == 21 && n != <?php echo $from; ?>) {
    slider_plus = false;
    } else if (n == <?php echo $from; ?> && slider_plus == false) {
    clearInterval(slider_init);
    } else if (n == 21 && n == <?php echo $from; ?>) {
    clearInterval(slider_init);
    }

    slider3.update({
    from: n
    });
 
    $('#amount').val(slider3.result.from_value);
    }, 50);

    //******  HOVER ARTICLE  *******//
    $(".ex-art-block").hover(function () {
        $(".ex-art-block").removeClass("ex-art-active");
        $(this).addClass("ex-art-active");
    });

    //*******  CAROUSEL *******//
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 98,
        nav: false,
        items: 1.5,
        center: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            1200: {
                items: 1.5
            },
            0: {
                items: 1
            }
        }
    });
<?php } elseif ($this->uri->segment(1) == 'faq') { ?>
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).prev('.card-header').addClass('ex-bg-head ')
            .find('.ex-plus')
            .removeClass('ex-plus')
            .addClass('ex-minus');
    });
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).prev('.card-header').removeClass('ex-bg-head ')
            .find('.ex-minus')
            .removeClass('ex-minus')
            .addClass('ex-plus');
    });
<?php } elseif($this->uri->segment(1) == 'documents') { ?> 
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).parents('.card').addClass('ex-border');
        $(this).prev('.card-header').addClass('ex-bg-head ')
            .find('.ex-plus')
            .removeClass('ex-plus')
            .addClass('ex-minus');
    });
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).parents('.card').removeClass('ex-border');
        $(this).prev('.card-header').removeClass('ex-bg-head ')
            .find('.ex-minus')
            .removeClass('ex-minus')
            .addClass('ex-plus');
    }); 
<?php } elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2'){?>
    $(".ex-offers-block").hover(function () {
    $(".ex-offers-block").removeClass("ex-off-active");
    $(this).addClass("ex-off-active");
});
<?php }
require 'yandexmetrika.php';
?> 
function markTarget(target,param, id) 
{
    if (typeof yaCounter47483542 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter47483542.reachGoal(target);
	else yaCounter47483542.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){ 
            }
        });
} 
</script>
</body>
</html>