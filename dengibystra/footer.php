<?php $from = '15'; 
if($this->uri->segment(1) != 'form')
{
    echo '<!-- Декстоп --><div class="text-center" id="ya-rtb"><div class="visible-xs visible-sm hidden-md hidden-lg" id="yandex_rtb_R-A-247243-1"></div>';
        
    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { 
    echo '<!-- мобайл --><div class="hidden-xs hidden-sm visible-md visible-lg" id="yandex_rtb_R-A-247243-3"></div>';
    }
        
    echo '</div>';
	echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Деньгибыстра -->
    <ins class="adsbygoogle text-center"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="6190001501"
    data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}

if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
{
    echo '<a href="#0" class="cd-top">Наверх</a>';
}

if ($this->uri->segment(1) != 'confirm'  && $this->uri->segment(1) != 'spasibo' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2') {
echo '<footer class="ex-start-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="ex-footer-logo">
                    <a href="/">
                        <img src="templates/dengibystra/assets/img/logo-foot.png" alt="logo-foot.png">
                    </a>
                </div>
                <p class="ex-text spec_footer4">
                    <span class="hidden">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная
                    ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём
                    20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб.
                    Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного
                    погашения. ООО МК "Берлин" ОГРН 5167746335961, ИНН 9705080932, КПП 770501001 лицензия ЦБ №1703045008133</span>
                    Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения. <a href="mailto:support@dengibystra.ru" target="_blank">support@dengibystra.ru</a> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001
                </p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 hidden-xs hidden-sm spec_footer5">
                <p class="ex-list-title">Документы</p>
                <ul>
                    <li>
                        <a href="/documents">Правовые документы</a>
                    </li>
                    <li>
                        <a href="/oferta">Публичная оферта</a>
                    </li>
                    <li>
                        <a href="/contract">Пользовательское соглашение</a>
                    </li>
                    <li>
                        <a href="/agreement">Согласие на обработку данных</a>
                    </li>
                    <li>
                        <a href="/rules">Правила предоставления займов</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 hidden-xs hidden-sm spec_footer6">
                <p class="ex-list-title">Получение денег</p>
                <ul>
                    <li>
                        <a href="/money">Займ на банковскую карту</a>
                    </li>
                    <li>
                        <a href="/money">Займ на QIWI кошелёк</a>
                    </li>
                    <li>
                        <a href="/money">Займ через Contact</a>
                    </li>
                    <li>
                        <a href="/money">Займ на Яндекс.Деньги</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>';
}
else if($this->uri->segment(1) == 'confirm' || $this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'spasibo' || $this->uri->segment(1) == 'lk2')
{
    echo '<footer class="ex-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <a href="/"><img src="templates/dengibystra/assets/img/logo-2.png" alt="logo-2"></a>
                        <p class="spec_footer4">Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201<br>
                        <a href="mailto:support@dengibystra.ru" target="_blank">support@dengibystra.ru</a> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>';
} 
?>

<?php
    require 'templates/common/get_display_size.php';
    echo '<script>';
    require 'modules/jquery/jquery-1.11.3.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/bootstrap/3.3.6/js/bootstrap.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengibystra/assets/js/jquery.form-validator.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengibystra/assets/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengibystra/assets/js/coockie.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengibystra/assets/js/modal.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengibystra/assets/js/custom.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengibystra/assets/js/settings_main.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengibystra/assets/js/settings_form.js';
    echo '</script>';
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
    echo '<script>';
    require 'templates/dengibystra/assets/js/get_parameter.js';
    echo '</script>';
    require 'templates/common/detect.min.php';
?> 
<!--[if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]--> 
<?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {
    echo '<script>';
    require 'templates/dengibystra/assets/js/loanCalculator.js';
    echo '</script>'; 
    ?>
        <script >
        $("#rangeSlider").ionRangeSlider({
        hide_min_max: true, 
        keyboard: true, 
        from: <?php 
        if(isset($_GET['amount'])) 
        {  
            switch($_GET['amount'])
            {
                case '1000': $from = '0' ; break;
                case '2000': $from = '1' ; break;
                case '3000': $from = '2' ; break;
                case '4000': $from = '3' ; break;
                case '5000': $from = '4' ; break;
                case '6000': $from = '5' ; break;
                case '7000': $from = '6' ; break;
                case '8000': $from = '7' ; break;
                case '9000': $from = '8' ; break;
                case '10000': $from = '9' ; break;
                case '11000': $from = '10' ; break;
                case '12000': $from = '11' ; break;
                case '13000': $from = '12' ; break;
                case '14000': $from = '13' ; break;
                case '15000': $from = '14' ; break;
                case '20000': $from = '15' ; break;
                case '25000': $from = '16' ; break;
                case '30000': $from = '17' ; break;
                case '40000': $from = '18' ; break;
                case '50000': $from = '19' ; break;
                case '80000': $from = '20' ; break;
                case '100000': $from = '21' ; break;
            }
            echo $from; 
        }
        elseif(!isset($_POST['form_slrd'])) echo '15'; else echo $_POST['form_slrd']; 
        ?>,
        values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000],
        onChange: function (range3) {
            if (range3.from_value <= 10000) {
                $("#period").val("7");
                $("#period2").val("От 61 до 130 дней");
                $('#percent').val('95');
            } else if (range3.from_value <= 15000) {
                $("#period").val("14");
                $("#period2").val("От 61 до 130 дней");
                $('#percent').val('95');
            } else if (range3.from_value <= 20000) {
                $("#period").val("21");
                $("#period2").val("От 61 до 130 дней");
                $('#percent').val('95');
            } else if (range3.from_value <= 30000) {
                $("#period").val("21");
                $("#period2").val("От 61 до 130 дней");
                $('#percent').val('85');
            } else if (range3.from_value <= 50000) {
                $("#period").val("30");
                $("#period2").val("От 130 до 250 дней");
                $('#percent').val('77');
            } else {
                $("#period").val("30");
                $("#period2").val("От 250 до 365 дней");
                $('#percent').val('65');
            }

            $("#amount").val(range3.from_value);
            $('.irs-single').text('вероятность ' + $('#percent').val() + '%');
        },
        onFinish: function (range3) {
            $('.irs-single').text('').append("<span>&nbsp;&nbsp;"+ range3.from_value+"&nbsp;&nbsp;рублей&nbsp;&nbsp;</span>");
        }
});
        var slider = $('#rangeSlider').data('ionRangeSlider'); 
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
            }else if (n == <?php echo $from; ?> && slider_plus == false) {
                clearInterval(slider_init);
            }else if (n == 21 && n == <?php echo $from; ?>) {
                clearInterval(slider_init);
            }

            slider.update({
                from: n
            }); 

            if (n <= 9) {
                $('#period').val('7');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('95');
                } else if (n <= 14 && n > 9) {
                    $('#period').val('14');
                    $('#period2').val('От 61 до 130 дней');
                    $('#percent').val('95');
                } else if (n <= 15 && n > 14) {
                    $('#period').val('21');
                    $('#period2').val('От 61 до 130 дней');
                    $('#percent').val('95');
                } else if (n <= 17 && n > 15) {
                    $('#period').val('21');
                    $('#period2').val('От 61 до 130 дней');
                    $('#percent').val('85');
                } else if (n <= 19 && n > 17) {
                    $('#period').val('30');
                    $('#period2').val('От 130 до 250 дней');
                    $('#percent').val('77');
                } else if (n > 19) {
                    $('#period').val('30');
                    $('#period2').val('От 250 до 365 дней');
                    $('#percent').val('65');
                }
                $('.irs-single').text('вероятность ' + $('#percent').val() + '%');
        }, 50);
        </script>
<?php
} 
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')
{
    echo '<script>
    var offers = '.json_encode($data).'
    var by_reg = null;
    $(document).ready(function () {
        $(".offer-type").change(function () {
            update_offers();
        });
        function update_offers() {
            var str = ".results tbody tr";
            //var curr = clone(by_reg.length? by_reg : offers);
            var ot_card = $(".offer-type[data-id=\'card\']").prop("checked");
            var ot_qiwi = $(".offer-type[data-id=\'qiwi\']").prop("checked");
            var ot_yandex = $(".offer-type[data-id=\'yandex\']").prop("checked");
            var ot_contact = $(".offer-type[data-id=\'contact\']").prop("checked");
            // Прячем всё
            $(str).hide();
            // Пробегаемся по списку офферов
            ((by_reg !== null) ? by_reg : offers).forEach(function (offer, i) {
                var $tr = $(str + "[data-id=\'" + offer.id + "\']");
                if ($tr.data("amount") >= amount) {
                    if (ot_card && !!$tr.data(\'card\') == ot_card) $tr.show();
                    else if (ot_qiwi && !!$tr.data(\'qiwi\') == ot_qiwi) $tr.show();
                    else if (ot_yandex && !!$tr.data(\'yandex\') == ot_yandex) $tr.show();
                    else if (ot_contact && !!$tr.data(\'contact\') == ot_contact) $tr.show();
                }
            });
        }
        if (getcookie("i")) {
            var i = getcookie("i");
            $("#i").text(i);
        }
    });

    function clone(o) {
        if (!o || "object" !== typeof o) return o;

        var c = "function" === typeof o.pop ? [] : {}; 
        var p, v;
        for (p in o) {
            if (o.hasOwnProperty(p)) {
                v = o[p];
                if (v && "object" === typeof v) {
                    c[p] = clone(v);
                } else {
                    c[p] = v;
                }
            }
        }
        return c;
    }
</script>';
}
include "googleadservices_all.php"; 
include "yandexmetrika.php"; 
include "yandex_rtb.php";
?>
</body>
</html>