<?php $from = '15'; $px = '63.974'; ?>
<div class="buffer"></div>
<div id="ya-rtb">
    <div id="yandex_rtb_R-A-243981-3"></div>
    <div id="yandex_rtb_R-A-243981-1"></div>
</div>
<a href="#0" class="cd-top">Наверх</a>
<footer>
    <div class="container">
        <div class="col-md-12 col-xs-12">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <div>
                        <img src="/templates/bzaim/img/logo-f.png" align="" alt="logo" class="logo">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 spec_footer4">
                    <p>Сервис по подбору выгодных онлайн займов</p>
                    <p>находящийся по адресу</p>
                    <p>Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201  <a href="mailto:support@bzaim5.ru" target="_blank"> | support@bzaim5.ru</a><span class="hidden-xs hidden-sm"> | +7(495) 006 19 61</span></p>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                        <div class="row">
                            <div class="col-sm-12 great-support-box wow fadeInLeft">
                                <div class="great-support-box-text great-support-box-text-left">
                                    <p class="footer_spec99">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61
                                        до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная
                                        0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10
                                        недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате
                                        31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного
                                        погашения.</p>
                                </div>
                            </div>
                        </div> 
                    <div class="footer_spec99">
                        ИП «Бабакова К.К.»ОГРНИП 316222500122426 ИНН 222511216499.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>


<?php
    echo '<script>';
    require 'templates/bzaim/vendor/jquery/jquery.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/vendor/bootstrap/js/bootstrap.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/js/get_parameter.js';
    echo '</script>';
?>
<!-- jQuery -->
<!-- <script src="/templates/bzaim/vendor/jquery/jquery.min.js"></script> -->
<!-- Bootstrap Core JavaScript -->
<!-- <script src="/templates/bzaim/vendor/bootstrap/js/bootstrap.min.js"></script> -->

<!-- Plugin JavaScript -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
<!-- Theme JavaScript -->

<!-- <script src="/modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js"></script>
<script src="/modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js"></script> -->
<!--[if lt IE 10]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <![endif]-->

<?php if ($this->uri->segment(1) == 'form') {
require 'templates/common/js.php'; 
if(isset($_GET['popup']) and $_GET['popup']==1 ){
    echo '    
<!-- Modal Popup-->
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                            <div class="modal-header text-center">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                                   
                            </div>
                            <div class="modal-body text-center">
                                    <div class="row">
                                            <div class="col-md-12">
                                                <img src="/templates/common/img/popup.jpg">                                             
                                                <h2>'.$popup_text.'</h2>
                                                <button type="button" class="btn btn-xl btn-success get-money" data-dismiss="modal" id="back"> Получить деньги </button>    
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
</div>

        <script type= " text/javascript">
            $(window).load(function(){
                $("#popup").modal("show");
            });
        </script>';
} 
 
    if(isset($_GET['email'])){
        //данные пользователя
        $this->load->model('user/user_model', 'user');
        $user_data = $this->user->get_user($_GET['email']);
        $user_data['birthdate'] = date('d/m/Y', strtotime($user_data['birth']));
        $user_data['passportdate'] = date('d/m/Y', strtotime($user_data['passport_date']));
        foreach ($user_data as $name => $item){
            echo '<script> $("#'.$name.'").val("'.$item.'"); </script>';
        }
        echo '<script> $("#username").text("'.$user_data['i'].'"); </script>';
    }  
    echo '<script>';
    require 'modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js';
    echo '</script>'; 
    echo '<script>';
    require 'templates/bzaim/js/validate.js';
    echo '</script>';
    echo '<script>';
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/js/jquery.form-validator.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/js/settings.js';
    echo '</script>';
        echo '
        <script type="text/javascript">
            $("#email").suggestions({
                serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                type: "EMAIL",
                count: 3,
                scrollOnFocus: false
            });    
        </script>'; 
        
    }
    elseif($this->uri->segment(1) == 'lk')
    {
        echo '<script>
        var offers = '.json_encode($data).';
        var by_reg = null;
        $(document).ready(function(){
            $(\'.offer-type\').change(function(){
                update_offers();
            });
            
            function update_offers() {
                var str = \'.results tbody tr\';
                //var curr = clone(by_reg.length? by_reg : offers);
                var ot_card = $(\'.offer-type[data-id="card"]\').prop(\'checked\');
                var ot_qiwi = $(\'.offer-type[data-id="qiwi"]\').prop(\'checked\');
                var ot_yandex = $(\'.offer-type[data-id="yandex"]\').prop(\'checked\');
                var ot_contact = $(\'.offer-type[data-id="contact"]\').prop(\'checked\');
                // Прячем всё
                $(str).hide();
                // Пробегаемся по списку офферов
                ((by_reg !== null)? by_reg : offers).forEach(function(offer, i){
                    var $tr = $(str + \'[data-id="\' + offer.id + \'"]\');
                    if ($tr.data(\'amount\') >= amount){
                        if (ot_card && !!$tr.data(\'card\') == ot_card) $tr.show();
                        else if (ot_qiwi && !!$tr.data(\'qiwi\') == ot_qiwi) $tr.show();
                        else if (ot_yandex && !!$tr.data(\'yandex\') == ot_yandex) $tr.show();
                        else if (ot_contact && !!$tr.data(\'contact\') == ot_contact) $tr.show();
                    }
                });
            }  
                if (getcookie(\'i\')){
                    var i = getcookie(\'i\');
                    $(\'#i\').text(i);
                }          
                traffic(\'bzaim5.ru\', \'4\');
        });
        
        </script>';
    }
    ?>
<script type="text/javascript">
    //backtotop
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
    });

    function setcookie(name, value, expires, path, domain, secure) {
        document.cookie = name + "=" + escape(value) +
            ((expires) ? "; expires=" + (new Date(expires)) : "") +
            ((path) ? "; path=" + path : "; path=/") +
            ((domain) ? "; domain=" + domain : "") +
            ((secure) ? "; secure" : "");
    }

    function getcookie(name) {
        var cookie = " " + document.cookie;
        var search = " " + name + "=";
        var setStr = null;
        var offset = 0;
        var end = 0;
        if (cookie.length > 0) {
            offset = cookie.indexOf(search);
            if (offset != -1) {
                offset += search.length;
                end = cookie.indexOf(";", offset)
                if (end == -1) {
                    end = cookie.length;
                }
                setStr = unescape(cookie.substring(offset, end));
            }
        }
        return (setStr);
    }

    $(document).ready(function () {
        function Loading(flag) {
            if (typeof flag == 'undefined') {
                document.getElementById('loading').style.display = 'block';
                $('#feedback-send').prop('disabled', true);
                $('#feedback-send').html('Отправка <i class="fa fa-spinner fa-spin fa-pulse"></i>');
            } else if (!flag) {
                $('#feedback-send').html('Отправить');
                $('#feedback-send').prop('disabled', false);
                document.getElementById('loading').style.display = 'none';
            }
        }
        $('#feedback-send').click(function () {
            Loading();

            var data = {
                name: $('#feedback-name').val(),
                phone: $('#feedback-phone').val(),
                email: $('#feedback-email').val(),
                comment: $('#feedback-comment').val()
            };

            if ((typeof data.phone != 'undefined' && data.phone != '') && (typeof data.email !=
                    'undefined' && data.email != '') && (typeof data.comment != 'undefined' && data.comment !=
                    '')) {
                $.ajax({
                    url: '/feedback/',
                    type: 'POST',
                    dataType: 'json',
                    data: data
                }).done(function (response) {
                    if (response != null) {
                        if (typeof response.error != 'undefined') {
                            alert('Ошибка. ' + response.error);
                        } else {
                            $('#feedbackModal').modal('hide');
                            Loading(0);
                            alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
                        }
                    } else {
                        alert('Не получилось отправить. Попробуйте ещё раз.');
                    }
                }).fail(function (jqxhr, textStatus, error) {
                    alert('Не получилось отправить. Попробуйте ещё раз.');
                }).always(function () {
                    Loading(0);
                });
            } else {
                Loading(0);
                alert('Пожалуйста, заполните все поля.');
            }
        });

        var amount = 20000;
        var day = 15;
        $('.amount').ionRangeSlider({
            values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000,
                14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
            ],
            postfix: ' Р',
            prettify_enabled: true,
            hide_from_to: false,
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
            onChange: function (range) {
                amount = range.from_value;
                $('#form_slrd').val(range.from);
                updateComm();
            }
        });

        var updateComm = function () {
            if (amount <= 30000) {
                percent = 1.3;
                comm1 = Math.ceil((amount / 100) * percent) * day;
                comm2 = 0;
            }
            if (amount > 30000) {
                percent = 0.2;
                comm1 = 390 * day;
                comm2 = Math.ceil(((amount - 30000) / 100) * percent) * day;
            }
            if (amount < 30000) {
                prob = 97;
                current_day = 'от 61 дня';
            } else if (amount < 50000) {
                prob = 97;
                current_day = 'от 130 дней';
            } else if (amount >= 50000 && amount <= 70000) {
                prob = 72;
                current_day = 'от 180 дней';
            } else {
                prob = 64;
                current_day = 'до 365 дней';
            } 
            comm = comm1 + comm2;
            summ = amount + comm;
            $('.current_amount').text(String(amount).split(/(?=(?:\d{3})+$)/).join(' '));
            $('.current_comm').text(comm);
            //$('.current_percent').text(percent);
            $('.current_prob').text(prob);
            $('.current_day').text(current_day);
            $('.current_summ').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' '));
            //console.log(comm1 +' '+comm2);
        };
        $('.amount2').ionRangeSlider({
            values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000,
                14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
            ],
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
            onChange: function (range) {
                if (range.from_value <= 10000) {
                    $('#p').val('7');
                    $('#period2').val('От 61 до 130 дней');
                } else if (range.from_value <= 15000) {
                    $('#p').val('14');
                    $('#period2').val('От 61 до 130 дней');
                } else if (range.from_value <= 20000) {
                    $('#p').val('21');
                    $('#period2').val('От 61 до 130 дней');
                } else if (range.from_value <= 30000) {
                    $('#p').val('21');
                    $('#period2').val('От 61 до 130 дней');
                } else if (range.from_value <= 50000) {
                    $('#p').val('30');
                    $('#period2').val('От 130 до 250 дней');
                } else {
                    $('#p').val('30');
                    $('#period2').val('От 250 до 365 дней');
                }
                $('#form_slrd').val(range.from);
            }
        });

        
        <?php if ($this->uri->segment(1) == '') { ?>
        var slider = $('.amount').data('ionRangeSlider');
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

        $('#form_slrd').val(n);

        if (slider.result.from_value <= 30000) {
            percent = 1.3;
            comm1 = Math.ceil((slider.result.from_value / 100) * percent) * day;
            comm2 = 0;
        }
        if (slider.result.from_value > 30000) {
            percent = 0.2;
            comm1 = 390 * day;
            comm2 = Math.ceil(((slider.result.from_value - 30000) / 100) * percent) * day;
        }
        if (slider.result.from_value < 30000) {
            prob = 97;
            current_day = 'от 61 дня';
        } else if (slider.result.from_value < 50000) {
            prob = 97;
            current_day = 'от 130 дней';
        } else if (slider.result.from_value >= 50000 && slider.result.from_value <= 70000) {
            prob = 72;
            current_day = 'от 180 дней';
        } else {
            prob = 64;
            current_day = 'до 365 дней';
        }
        comm = comm1 + comm2;
        summ = slider.result.from_value + comm;
        $('.current_amount').text(String(slider.result.from_value).split(/(?=(?:\d{3})+$)/).join(
            ' '));
        $('.current_comm').text(comm);
        //$('.current_percent').text(percent);
        $('.current_prob').text(prob);
        $('.current_day').text(current_day);
        $('.current_summ').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' '));

    }, 50);
<?php } ?>

        $.mask.definitions['*'] = "[а-яёА-ЯЁA-Za-z0-9\/\-_]";
        $('[data-toggle="popover"]').popover();
        $('input#phone').mask("8 (9nn) nnn nnnn", {
            "placeholder": "8 (9__) ___ ____"
        });
        $('input#feedback-phone').mask("8 (9nn) nnn nnnn", {
            "placeholder": "8 (9__) ___ ____"
        });
        $('input#work_phone').mask("8 (9nn) nnn nnnn", {
            "placeholder": "8 (9__) ___ ____"
        });
        $('input#passport').mask("nnnn nnnnnn", {
            "placeholder": "____ ______"
        });
        $('input#passport_code').mask("nnn-nnn", {
            "placeholder": "___-___"
        });
        $('input#birthdate').mask("nn/nn/nnnn", {
            "placeholder": "__/__/__"
        });
        $('input#passportdate').mask("nn/nn/nnnn", {
            "placeholder": "__/__/__"
        });
        $('input#work_salary').mask("nnnn?nn", {
            "placeholder": ""
        });
        $('input#work_experience').mask("n?nn", {
            "placeholder": ""
        });
        $('input#flat').mask("n?***", {
            "placeholder": ""
        });
        $('input#building').mask("n?***", {
            "placeholder": ""
        });
        $('input#work_house').mask("n?***", {
            "placeholder": ""
        });
    });
</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({
        id: "2857840",
        type: "pageView",
        start: (new Date()).getTime()
    });
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {
            var s = d.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ts, s);
        };
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "topmailru-code");
</script>
<noscript>
    <div style="position:absolute;left:-10000px;">
        <img src="//top-fwz1.mail.ru/counter?id=2857840;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
    </div>
</noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter35589670 = new Ya.Metrika({
                    id: 35589670,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {}
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/35589670" style="position:absolute; left:-9999px;" alt="mc.yandex.ru/watch" />
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->
<script>
    function markTarget(target, param, id) {
        if (typeof yaCounter35589670 == 'undefined') return;
        if (typeof param == 'undefined') yaCounter35589670.reachGoal(target);
        else yaCounter35589670.reachGoal(target, param);
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id=' + id + '&pixel=' + param,
            success: function (data) {
            }
        });
    }
    function traffic(site, page) {
        $.ajax({
            type: 'POST',
            url: '/traffic/',
            data: 'site=' + site + '&page=' + page,
            success: function (data) {
                //console.log(data);
            }
        });
    }
</script>
<script type="text/javascript">
    (window.Image ? (new Image()) : document.createElement('img')).src = location.protocol +
        '//vk.com/rtrg?r=odoKSFSBcE5PHaDnsudZo9gF0m0eXBwPYfg*kztNuXeCJj3sA*5x3PQeQaPudSCBmnc4YA7Rqn22IyQvXDLy3mtd6byvjyzR9M7pPk5odLe*WJb52SVSuRlUxbqTQ/PykKXKEZvubU6hD176XSFl07fT0xyhObhKZzHa*wWQux8-&pixel_id=1000099080';
</script>
<!--Константин Гутлид-->
<script type="text/javascript">
    (window.Image ? (new Image()) : document.createElement('img')).src = location.protocol +
        '//vk.com/rtrg?r=iafuk/ajs6FuS1VfRUweTdohcs2Mr7Xb/WOtctzL86pmvckkvgCHlpuK4YcMkiqxVsFm0PpWetPyvLpEU3AP*RCJxL53Z0qIOQsMJTgfna8WaLUGGa20v4uxHJPFrISICV8rpTrDzfUA2qjLCdB6XAgOa0veBjnUzFmA/ElFA*U-&pixel_id=1000099733';
</script>

<!-- Общий счетчик Yandex.Metrika ЛидМафия->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter45336951 = new Ya.Metrika({
                    id: 45336951,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {}
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/45336951" style="position:absolute; left:-9999px;" alt="" />
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Общий счетчик Mail.ru ЛидМафия->
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({
        id: "2916281",
        type: "pageView",
        start: (new Date()).getTime()
    });
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {
            var s = d.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ts, s);
        };
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "topmailru-code");
</script>
<noscript>
    <div>
        <img src="//top-fwz1.mail.ru/counter?id=2916281;js=na" style="border:0;position:absolute;left:-9999px;" alt="top-fwz1.mail.ru" />
    </div>
</noscript>
<!-- //Rating@Mail.ru counter -->
<script type="text/javascript">
    var isMobile = false; //initiate as false
    // device detection
    if (
        /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
        .test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test(navigator.userAgent.substr(0, 4))) isMobile = true;
    if (isMobile) {
        (function (w, d, n, s, t) {
            w[n] = w[n] || [];
            w[n].push(function () {
                Ya.Context.AdvManager.render({
                    blockId: "R-A-243981-1",
                    renderTo: "yandex_rtb_R-A-243981-1",
                    async: true
                });
            });
            t = d.getElementsByTagName("script")[0];
            s = d.createElement("script");
            s.type = "text/javascript";
            s.src = "//an.yandex.ru/system/context.js";
            s.async = true;
            t.parentNode.insertBefore(s, t);
        })(this, this.document, "yandexContextAsyncCallbacks");
    } else {
        (function (w, d, n, s, t) {
            w[n] = w[n] || [];
            w[n].push(function () {
                Ya.Context.AdvManager.render({
                    blockId: "R-A-243981-3",
                    renderTo: "yandex_rtb_R-A-243981-3",
                    async: true
                });
            });
            t = d.getElementsByTagName("script")[0];
            s = d.createElement("script");
            s.type = "text/javascript";
            s.src = "//an.yandex.ru/system/context.js";
            s.async = true;
            t.parentNode.insertBefore(s, t);
        })(this, this.document, "yandexContextAsyncCallbacks");
    }
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-104386531-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- Код тега ремаркетинга Google -->
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 841045099;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/841045099/?guid=ON&amp;script=0"
        />
    </div>
</noscript>
</body>

</html>