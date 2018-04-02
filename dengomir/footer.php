<?php $from = '15';
    if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
    {
        echo '<a href="#0" class="cd-top">Наверх</a>';
    } 

    if($this->uri->segment(1) != 'form')
    {
        echo '<!-- декстоп Yandex.RTB R-A-261797-1 -->
        <div class="hiddenx-xs hidden-sm">
            <div id="yandex_rtb_R-A-261797-1"></div>
        </div>
        <!-- мобайл Yandex.RTB R-A-261797-2 -->
        <div class="hiddenx-md hidden-lg">
            <div id="yandex_rtb_R-A-261797-2"></div>
        </div>';
        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Деньгомир -->
        <ins class="adsbygoogle text-center"
        style="display:block"
        data-ad-client="ca-pub-4970738258373085"
        data-ad-slot="6725914479"
        data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
?>

<footer class="ex-main-footer ex-sticky-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-3 ex-foot-logo">
                        <a href="/"><img src="/templates/dengomir/assets/img/icons/logo-footer.png" alt="logo-footer.png"></a>
                    </div>
                    <div class="col-md-9">
                        <p class="spec_footer7">Сервис по подбору выгодных онлайн займов Dengomir, находящийся по адресу
                            Россия, Ленинградская обл., г. Санкт-Петербург, ул. Осипенко, 12, оф 201<br>
                            <a href="mailto:support@dengomir.ru" class="special_footer99" target="_blank">| support@dengomir.ru</a></span> | +7(495) 006 19 61<br>
                            <span class="hidden-xs hidden-sm">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365
                            дней.
                            Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
                            Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель
                            под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200
                            рублей.
                            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.<br>
                            ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001 </span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 hidden-xs hidden-sm">
                <div class="col-md-6">
                    <p class="ex-list-title">Документы</p>
                    <ul>
                        <li><a href="/oferta">Публичная оферта</a></li>
                        <li><a href="/soglasie">Согласие на обработку данных</a></li>
                        <li><a href="/rules">Правила предоставления займов</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="ex-list-title">Получение денег</p>
                    <ul>
                        <li><a href="/zaim-card">Займ на банковскую карту</a></li>
                        <li><a href="/zaim-qiwi">Займ на QIWI кошелёк</a></li>
                        <li><a href="/zaim-contact">Займ через Contact</a></li>
                        <li><a href="/zaim-yandex">Займ на Яндекс.Деньги</a></li>
                        <li><a href="/zaim-bank">Займ на банковский счёт</a></li>
                    </ul>
                </div>
            </div>
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
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengomir/assets/js/jquery.form-validator.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengomir/assets/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengomir/assets/js/coockie.js';
    echo '</script>';
    require 'templates/common/detect.min.php';
    echo '<script>';
    require 'templates/dengomir/assets/js/custom.js';
    echo '</script>'; 
    echo '<script>';
    require 'templates/dengomir/assets/js/settings_main.js';
    echo '</script>'; 
    echo '<script>';
    require 'templates/dengomir/assets/js/owl.carousel.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengomir/assets/js/settings_form.js';
    echo '</script>';
    ?>

    <!--[if lt IE 10]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <![endif]-->

<?php if($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') 
{ 
    echo '<script>';
    require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengomir/assets/js/loanCalculator.js';
    echo '</script>';
?>

    <script> 
    //backtotop
    jQuery(document).ready(function(o){var l=300,s=1200,c=700,d=o(".cd-top");o(window).scroll(function(){o(this).scrollTop()>l?d.addClass("cd-is-visible"):d.removeClass("cd-is-visible cd-fade-out"),o(this).scrollTop()>s&&d.addClass("cd-fade-out")}),d.on("click",function(l){l.preventDefault(),o("body,html").animate({scrollTop:0},c)})});

    function getParameterByName(name, url) 
    {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    function goToUp() {
        $('html, body').animate({
            scrollTop: $('.toUp').offset().top
        }, 1000);
    }

    $(document).ready(function () 
    {
        $.mask.definitions['*'] = "[а-яёА-ЯЁA-Za-z0-9\/\-_]";
        $('[data-toggle="popover"]').popover();
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
        onFinish: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        }, 
        onLoad: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        },
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
            $('#amount').val(range.from_value);
            $('#form_slrd').val(range.from);
        },
    });
});
</script> 
<?php } ?> 
<script>
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

    function GetMoney() 
    {
        $('form#anketa').submit();
    }

    function Loading(flag) 
    {
        if (typeof flag == 'undefined') { 
            $('#feedback-send').prop('disabled', true);
            $('#feedback-send').html('Отправлено <i class="fa fa-spinner fa-spin fa-pulse"></i>');
        } else if (!flag) {
            $('#feedback-send').html('Отправить');
            $('#feedback-send').prop('disabled', false); 
        }
    } 

    $('#feedback-send').click(function () 
    {
        Loading();
        
        var data;
        if(window.location.pathname == '/form')
        {
            var _input = $('#anketa').serialize();
            _input = decodeURIComponent(_input);
            _input = _input.replace(new RegExp("&step",'g'),"&Шаг");
            _input = _input.replace(new RegExp("&period",'g'),"&Срок");
            _input = _input.replace(new RegExp("display=0",'g'),"Декстоп версия");
            _input = _input.replace(new RegExp("display=1",'g'),"Мобайл версия");
            _input = _input.replace(new RegExp("referer",'g'),"Откуда пришли");
            _input = _input.replace(new RegExp("&f=",'g'),"&Фамилия=");
            _input = _input.replace(new RegExp("&i=",'g'),"&Имя=");
            _input = _input.replace(new RegExp("&o=",'g'),"&Отчество=");
            _input = _input.replace(new RegExp("gender=0",'g'),"Пол женский");
            _input = _input.replace(new RegExp("gender=1",'g'),"Пол мужской");
            _input = _input.replace(new RegExp("&birth_dd=0&birth_mm=0&birth_yyyy=0",'g'),"");
            _input = _input.replace(new RegExp("birthdate",'g'),"Дата рождения");
            _input = _input.replace(new RegExp("&phone=",'g'),"&Телефон=");
            _input = _input.replace(new RegExp("&email",'g'),"&Емаил");
            _input = _input.replace(new RegExp("&delays_type=never",'g'),"&Никогда не брал(а) кредитов");
            _input = _input.replace(new RegExp("&delays_type=credit_closed_no_delay",'g'),"&Кредиты закрыты, просрочек не было");
            _input = _input.replace(new RegExp("&delays_type=credit_open_no_delay",'g'),"&Кредиты есть, просрочек нет");
            _input = _input.replace(new RegExp("&delays_type=credit_closed_had_delay",'g'),"&Кредиты закрыты, просрочки были");
            _input = _input.replace(new RegExp("&delays_type=had_delay",'g'),"&Просрочки были, сейчас нет");
            _input = _input.replace(new RegExp("&delays_type=had_delay",'g'),"&Просрочки сейчас есть");
            _input = _input.replace(new RegExp("rangeSlider",'g'),"Сумма");
            _input = _input.replace(new RegExp("ammount",'g'),"Сумма");
            _input = _input.replace(new RegExp("amount",'g'),"Сумма");
            _input = _input.replace(new RegExp("&passport=",'g'),"&Серия и номер паспорта=");
            _input = _input.replace(new RegExp("passport_s",'g'),"Серия паспорта");
            _input = _input.replace(new RegExp("passport_n",'g'),"Номер паспорта");
            _input = _input.replace(new RegExp("passport_dd",'g'),"День выдачи");
            _input = _input.replace(new RegExp("passport_mm",'g'),"Месяц выдачи");
            _input = _input.replace(new RegExp("passport_yyyy",'g'),"Год выдачи");
            _input = _input.replace(new RegExp("passportdate",'g'),"Дата выдачи");
            _input = _input.replace(new RegExp("passport_code",'g'),"Код подразделения");
            _input = _input.replace(new RegExp("passport_who",'g'),"Кем выдан");
            _input = _input.replace(new RegExp("birthplace",'g'),"Место рождения");
            _input = _input.replace(new RegExp("&region=",'g'),"&Регион=");
            _input = _input.replace(new RegExp("&city=",'g'),"&Населённый пункт=");
            _input = _input.replace(new RegExp("&street=",'g'),"&Улица проживания=");
            _input = _input.replace(new RegExp("&building=",'g'),"&Дом=");
            _input = _input.replace(new RegExp("&housing=",'g'),"&Корпус=");
            _input = _input.replace(new RegExp("flat=",'g'),"Квартира=");
            _input = _input.replace(new RegExp("reg_type=1",'g'),"Постоянная регистрация");
            _input = _input.replace(new RegExp("reg_type=0",'g'),"Без регистрации");
            _input = _input.replace(new RegExp("reg_type=2",'g'),"Временная регистрация");
            _input = _input.replace(new RegExp("&reg_same=1",'g'),"");
            _input = _input.replace(new RegExp("&work=",'g'),"&Вид трудоустройства=");
            _input = _input.replace(new RegExp("work_name",'g'),"Место работы"); 
            _input = _input.replace(new RegExp("work_occupation",'g'),"Должность");
            _input = _input.replace(new RegExp("work_phone",'g'),"Рабочий телефон");
            _input = _input.replace(new RegExp("work_experience",'g'),"Стаж");
            _input = _input.replace(new RegExp("work_salary",'g'),"Зарплата");
            _input = _input.replace(new RegExp("work_region",'g'),"Регион работы");
            _input = _input.replace(new RegExp("work_city",'g'),"Город работы");
            _input = _input.replace(new RegExp("work_street",'g'),"Улица работы");
            _input = _input.replace(new RegExp("work_house",'g'),"Номер дома работы");
            _input = _input.replace(new RegExp("work_office",'g'),"Офис работы");

            _info = _info.replace(new RegExp("undefined",'g'),"неопределено");
            data = {
                name: $('#feedback-name').val(),
                phone: $('#feedback-phone').val(),
                email: $('#feedback-email').val(),
                comment: 'Обращение: ' + $('#feedback-comment').val() + _info + "\n | Разрешение экрана: " + x_size + " x " + y_size + "\n | Данные:" + _input
            };
        }
        else
        {
            data = {
                name: $('#feedback-name').val(),
                phone: $('#feedback-phone').val(),
                email: $('#feedback-email').val(),
                comment: 'Обращение: ' + $('#feedback-comment').val() + _info + "\n | Разрешение экрана: " + x_size + " x " + y_size
            };
        } 
        
        if ((typeof data.phone != 'undefined' && data.phone != '') && (typeof data.email != 'undefined' && data
                .email != '') && (typeof data.comment != 'undefined' && data.comment != '')) {
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
                        $('#askQuestion').modal('hide');
                        Loading(0); 
                        alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
                        $('#feedback-send').prop("disabled", true);
                    }
                } else {
                    alert('Не получилось отправить. Попробуйте ещё раз.');
                    $('#askQuestion').modal('hide');
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
 
</script>

    <?php
		if ($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') { 
    ?>

    <script> 
    $(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 40,
        nav: false,
        items: 2,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            1200: {
                items: 2
            },
            320: {
                items: 1
            }
        }
    });
    $(".ex-fast-start").click(function() {
        $(".ex-fast-start").toggleClass("ex-fast-active");
    });
    var slider3 = $('#rangeSlider').data('ionRangeSlider');
    var slider_plus = true;
    var n = 10;
    var slider_init = setInterval(function () {
        if (slider_plus) {
            n++;
        } else {
            n--;
        }
        if (n == 21 && n != <?php echo $from;?>) {
            slider_plus = false;
        }else if (n == <?php echo $from;?> && slider_plus == false) {
            clearInterval(slider_init);
        }else if (n == 21 && n == <?php echo $from;?>) {
            clearInterval(slider_init);
        }

        slider3.update({
            from: n
        });

        if (n <= 9) {
            $('#period').val('7'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 14 && n > 9) {
            $('#period').val('14');
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 15 && n > 14) {
            $('#period').val('21');
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 17 && n > 15) {
            $('#period').val('21');
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 19 && n > 17) {
            $('#period').val('30');
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n > 19) {
            $('#period').val('30'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        }
    }, 50);
});</script>
<?php } elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')
{ 
    echo '<script>';
    require 'templates/dengomir/assets/js/owl.carousel.min.js';
    echo '</script>';
    echo '<script>
    jQuery(".ex-offers-block").hover(function(){
        var yukseklik  = 120;
        var sira 	   = $(this).index();
        var konum 	   = yukseklik * (sira-1);
        $("#kayan_arka").css({top:konum});

    }, function(){});
</script>';
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
<!-- всплывающее окошко -->
<?php 
if ($this->uri->segment(1) == 'form') 
{
    echo ' <script>
    $("#work").change(function(){
        if($(this).val().toLowerCase() == "пенсионер" || $(this).val().toLowerCase() == "безработный")
        { 
            $("#work_name").addClass("valid");
            $("#work_name").parent().addClass("has-success").removeClass("has-error");
            $("#work_name").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_name").removeClass("er");
            $("#"+$("#work_name").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_occupation").addClass("valid");
            $("#work_occupation").parent().addClass("has-success").removeClass("has-error");
            $("#work_occupation").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_occupation").removeClass("er");
            $("#"+ $("#work_occupation").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_phone").addClass("valid");
            $("#work_phone").parent().addClass("has-success").removeClass("has-error");
            $("#work_phone").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_phone").removeClass("er");
            $("#"+$("#work_phone").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok");

            $("#work_experience").addClass("valid");
            $("#work_experience").parent().addClass("has-success").removeClass("has-error");
            $("#work_experience").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_experience").removeClass("er");
            $("#"+$("#work_experience").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok");

            $("#work_salary").addClass("valid");
            $("#work_salary").parent().addClass("has-success").removeClass("has-error");
            $("#work_salary").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_salary").removeClass("er"); 
            $("#"+$("#work_salary").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok");

            $("#work_region").addClass("valid");
            $("#work_region").parent().addClass("has-success").removeClass("has-error");
            $("#work_region").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_region").removeClass("er");
            $("#"+$("#work_region").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_city").addClass("valid");
            $("#work_city").parent().addClass("has-success").removeClass("has-error");
            $("#work_city").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_city").removeClass("er");
            $("#"+ $("#work_city").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_street").addClass("valid");
            $("#work_street").parent().addClass("has-success").removeClass("has-error");
            $("#work_street").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_street").removeClass("er");
            $("#"+$("#work_street").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_house").addClass("valid");
            $("#work_house").parent().addClass("has-success").removeClass("has-error");
            $("#work_house").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_house").removeClass("er");
            $("#"+$("#work_house").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_office").addClass("valid");
            $("#work_office").parent().addClass("has-success").removeClass("has-error");
            $("#work_office").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_office").removeClass("er");
            $("#"+$("#work_office").id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

//            $("#work_name").prop("disabled", true);
            if($(this).val().toLowerCase() == "пенсионер")
            $("#work_name").val("пенсионер");
            else  $("#work_name").val("безработный");

//            $("#work_occupation").prop("disabled", true);
            if($(this).val().toLowerCase() == "пенсионер")
            $("#work_occupation").val("пенсионер");
            else  $("#work_occupation").val("безработный"); 

//            $("#work_phone").prop("disabled", true);
            var teemp = $("#phone").val();
            $("#work_phone").val(teemp);

//            $("#work_experience").prop("disabled", false);
            $("#work_experience").val(100);

//            $("#work_salary").prop("disabled", false);
            $("#work_salary").val("");
            $("#work_salary").focus();

            var teemp2 = Number($("#region").find(":selected").index());
            $("#work_region option").eq(teemp2).prop("selected", true);
//            $("#work_region").prop("disabled", false); 

//            $("#work_city").prop("disabled", true);
            var teemp3 = $("#city").val();
            $("#work_city").val(teemp3);

//            $("#work_street").prop("disabled", true);
            var teemp4 = $("#street").val();
            $("#work_street").val(teemp4);

            
            var teemp5 = $("#building").val();
            $("#work_house").val(teemp5);

//            $("#work_building").prop("disabled", true);
            $("#work_building").val(" ");

//            $("#work_office").prop("disabled", true);
            var teemp6 = $("#flat").val();
            $("#work_office").val(teemp6);
        }
        else { 

            $("#work_name").val("");
            $("#work_name").removeClass("valid");
            $("#work_name").parent().removeClass("has-success");
            $("#work_name").parent().parent().prev().removeClass("label_true"); 
            $("#"+$("#work_name").id+"status").removeClass("glyphicon-ok");

            $("#work_occupation").val("");
            $("#work_occupation").removeClass("valid");
            $("#work_occupation").parent().removeClass("has-success");
            $("#work_occupation").parent().parent().prev().removeClass("label_true"); 
            $("#"+ $("#work_occupation").id+"status").removeClass("glyphicon-ok"); 

            $("#work_phone").val("");
            $("#work_phone").removeClass("valid");
            $("#work_phone").parent().removeClass("has-success");
            $("#work_phone").parent().parent().prev().removeClass("label_true"); 
            $("#"+$("#work_phone").id+"status").removeClass("glyphicon-ok");

            $("#work_experience").val("");
            $("#work_experience").removeClass("valid");
            $("#work_experience").parent().removeClass("has-success");
            $("#work_experience").parent().parent().prev().removeClass("label_true"); 
            $("#"+$("#work_experience").id+"status").removeClass("glyphicon-ok");

            $("#work_salary").val("");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().removeClass("has-success");
            $("#work_salary").parent().parent().prev().removeClass("label_true");
            $("#work_salarystatus").removeClass("glyphicon-ok");
 
            $("#work_region").removeClass("valid");
            $("#work_region").parent().removeClass("has-success");
            $("#work_region").parent().prev().removeClass("label_true"); 
            $("#"+$("#work_region").id+"status").removeClass("glyphicon-ok");

            $("#work_city").val("");
            $("#work_city").removeClass("valid");
            $("#work_city").parent().removeClass("has-success");
            $("#work_city").parent().parent().prev().removeClass("label_true"); 
            $("#"+ $("#work_city").id+"status").removeClass("glyphicon-ok"); 

            $("#work_street").val("");
            $("#work_street").removeClass("valid");
            $("#work_street").parent().removeClass("has-success");
            $("#work_street").parent().parent().prev().removeClass("label_true"); 
            $("#"+$("#work_street").id+"status").removeClass("glyphicon-ok"); 

            $("#work_house").val("");
            $("#work_house").removeClass("valid");
            $("#work_house").parent().removeClass("has-success");
            $("#work_house").parent().parent().prev().removeClass("label_true"); 
            $("#"+$("#work_house").id+"status").removeClass("glyphicon-ok");

            $("#work_office").val("");
            $("#work_office").removeClass("valid");
            $("#work_office").parent().removeClass("has-success");
            $("#work_office").parent().parent().prev().removeClass("label_true"); 
            $("#"+$("#work_office").id+"status").removeClass("glyphicon-ok");

//            $("#work_name").prop("disabled", false);
            $("#work_name").val(""); 
 
//            $("#work_occupation").prop("disabled", false);
             $("#work_occupation").val(""); 

//            $("#work_phone").prop("disabled", false);
            $("#work_phone").val("");

//            $("#work_experience").prop("disabled", false);
            $("#work_experience").val("");

//            $("#work_salary").prop("disabled", false);
            $("#work_salary").val("");

            $("#work_region option").eq(0, true).prop("selected", true);
//            $("#work_region").prop("disabled", false); 

//            $("#work_city").prop("disabled", false);
            $("#work_city").val("");

//            $("#work_street").prop("disabled", false);
            $("#work_street").val("");

//            $("#work_house").prop("disabled", false);
            $("#work_house").val("");

//            $("#work_building").prop("disabled", false);
            $("#work_building").val("");

//            $("#work_office").prop("disabled", false);
            $("#work_office").val("");
        }
    }); 

    </script>';
     
}
  
 require 'yandexmetrika.php';
 require 'googleanalytics.php';
?>

<script>
function markTarget(target,param, id) 
{
    if (typeof yaCounter47082354 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter47082354.reachGoal(target);
	else yaCounter47082354.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){ 
            }
        });
}

function traffic(site, page)
{
    $.ajax({
        type: 'POST',
        url: '/traffic/',
        data: 'site='+site+'&page='+page,
            success: function(data){ 
            }
    });
}
//traffic(window.location.hostname,window.location.pathname);
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</body>
</html>