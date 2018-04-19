<?php
    $from = '15'; $px = '63.974'; 
    if ($this->uri->segment(1) != 'form') {

        echo '<!-- Декстоп Yandex.RTB R-A-257494-1 --><div id="ya-rtb" class="text-center spec_ind_foot"><div class="hidden-xs hidden-sm"><div id="yandex_rtb_R-A-257494-1"></div></div>';
        if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { 
            echo '<!-- Мобайл Yandex.RTB R-A-257494-3 --><div class="hidden-md hidden-lg"><div id="yandex_rtb_R-A-257494-3"></div></div>';
        }
        echo '</div>';

        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Займхоум -->
        <ins class="adsbygoogle text-center"
        style="display:block"
        data-ad-client="ca-pub-4970738258373085"
        data-ad-slot="4797028786"
        data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
?>
    <footer class="ex-main-footer">
        <div class="container" style="width: 100%">
            <div class="col-sm-3 text-center">
                <div class="ex-footer-logo">
                    <a href="/"><img src="/templates/zaimhome/assets/img/header-logo.png" alt="Missing image" class="special_foot22"></a>
                </div> 
                <p class="special_footer3 ">Сервис выгодного онлайн займа</p>
            </div>
            <div class="col-sm-3 small spec_footer4 ">
                <p>Сервис по подбору выгодных онлайн займов
                    <br>находящийся по адресу
                    <br>Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                    <br><a href="mailto:support@zaimhome.ru" target="_blank">support@zaimhome.ru</a> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span></p>
            </div>
            <div class="col-sm-6 hidden-xs hidden-sm spec_footer5">
                <p style="font-size: 85%;">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.<br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</p>
            </div>
        </div>
    </footer>
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
require 'templates/zaimhome/assets/js/jquery.form-validator.js';
echo '</script>';
echo '<script>';
require 'templates/zaimhome/assets/js/jquery.suggestions.min.js';
echo '</script>';
echo '<script>';
require 'templates/zaimhome/assets/js/coockie.js';
echo '</script>';
echo '<script>';
require 'templates/zaimhome/assets/js/custom.js';
echo '</script>'; 
echo '<script>';
require 'templates/zaimhome/assets/js/settings_main.js';
echo '</script>';
require 'templates/common/detect.min.php';
echo '<script>';
require 'templates/zaimhome/assets/js/modal.js';
echo '</script>';
echo '<script>';
require 'templates/zaimhome/assets/js/settings_form.js';
echo '</script>'; ?>
    <!--[if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]--> 
<?php 
 if ($this->uri->segment(1) == '') {?>
        <script>
            function getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            }

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
                window.location.href = window.location.origin + '/money';
            }
            $("#rangeSlider").ionRangeSlider({
                hide_min_max: true,
                hide_from_to: true,
                keyboard: true,
                grid: false,
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
                onChange: function(range) {
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
                    $('#amount').val(range.from_value);
                    $('#form_slrd').val(range.from);
                }
            });
            $(document).ready(function() {
                var slider3 = $('#rangeSlider').data('ionRangeSlider');
                var slider_plus = true;
                var n = 10;
                var slider_init = setInterval(function() {
                    if (slider_plus) {
                        n++;
                    } else {
                        n--;
                    }

                    if (n == 21 && n != <?php echo $from;?>) {
                        slider_plus = false;
                    } else if (n == <?php echo $from;?> && slider_plus == false) {
                        clearInterval(slider_init);
                    } else if (n == 21 && n == <?php echo $from;?>) {
                        clearInterval(slider_init);
                    }

                    slider3.update({
                        from: n
                    });

                    if (slider3.result.from_value <= 10000) {
                        $('#period').val('7');
                        $('#period2').val('От 61 до 130 дней');
                    } else if (slider3.result.from_value <= 15000) {
                        $('#period').val('14');
                        $('#period2').val('От 61 до 130 дней');
                    } else if (slider3.result.from_value <= 20000) {
                        $('#period').val('21');
                        $('#period2').val('От 61 до 130 дней');
                    } else if (slider3.result.from_value <= 30000) {
                        $('#period').val('21');
                        $('#period2').val('От 61 до 130 дней');
                    } else if (slider3.result.from_value <= 50000) {
                        $('#period').val('30');
                        $('#period2').val('От 130 до 250 дней');
                    } else {
                        $('#period').val('30');
                        $('#period2').val('От 250 до 365 дней');
                    }
                    $('#amount').val(slider3.result.from_value);
                    $('#form_slrd').val(slider3.result.from);

                }, 50);
            });

        </script>
        <?php
        echo '<script>';
        require 'templates/zaimhome/assets/js/loanCalculator.min.js';
        echo '</script>';
        ?>
        <?php }  elseif($this->uri->segment(1) == 'form') { ?>
        <script>
            function getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            }

        </script>
        <script>
        $(document).ready(function() {
            $("#rangeSlider").ionRangeSlider({
                hide_min_max: true,
                hide_from_to: true,
                keyboard: true,
                grid: false,
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
                        values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000,
                            13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
                        ],
                        onChange: function(range) {
                            $('#amount').val(range.from_value);
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

                    var slider4 = $('#rangeSlider').data('ionRangeSlider');

                    if (slider4.result.from_value <= 10000) {
                        $('.ex-time').text('От 61 до 130 дней');
                    } else if (slider4.result.from_value <= 15000) {
                        $('.ex-time').text('От 61 до 130 дней');
                    } else if (slider4.result.from_value <= 20000) {
                        $('.ex-time').text('От 61 до 130 дней');
                    } else if (slider4.result.from_value <= 30000) {
                        $('.ex-time').text('От 61 до 130 дней');
                    } else if (slider4.result.from_value <= 50000) {
                        $('.ex-time').text('От 130 до 250 дней');
                    } else {
                        $('.ex-time').text('От 250 до 365 дней');
                    }
                });

            </script>
            <?php
        echo '<script>';
        require 'templates/zaimhome/assets/js/loanCalculator.min.js';
        echo '</script>';
    ?>
                <?php
}
 

    require 'yandex_metrika.php';
    require 'google_analitycs.php';
?>
<script>
    function markTarget(target, param, id) {
        if (typeof yaCounter46347894 == 'undefined') return;
        if (typeof param == 'undefined') yaCounter46347894.reachGoal(target);
        else yaCounter46347894.reachGoal(target, param);

        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id=' + id + '&pixel=' + param,
            success: function(data) {}
        });
    }
    function traffic(site, page) {
        $.ajax({
            type: 'POST',
            url: '/traffic/',
            data: 'site=' + site + '&page=' + page,
            success: function(data) {}
        });
    }
    
</script>
<?php  
    if ($this->uri->segment(1) != 'form') {
        require 'yandex_rtb.php';
    }

    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')
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
?>
