<?php $from = '15'; $px = '63.974'; ?>
<?php
if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
{
    echo '<a href="#0" class="cd-top">Наверх</a>';
} 
?>
    <?php
        if ($this->uri->segment(1) != 'form') {
            echo '<!-- Декстоп Yandex.RTB R-A-257495-1 -->
            <center><div id="ya-rtb" class="text-center spec_ind_foot"><div class="hidden-xs hidden-sm rtb text-center" id="yandex_rtb_R-A-257495-1"></div>';
            if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { 
                echo '<!-- Мобильная Yandex.RTB R-A-257495-2 --> <div class="hidden-md hidden-lg rtb text-center" id="yandex_rtb_R-A-257495-2"></div>';
            }
            echo '</div></center>';
            echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Годзайм -->
            <ins class="adsbygoogle text-center"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="6493253837"
            data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>';
        } 
    ?>
        <div class="footer-wrap">
            <div class="footer">
                <br class="hidden-xs hidden-sm">
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <a href="/">
                            <img src="/templates/godzaim/img/logo-footer.png" class="logo">
                        </a>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-xs-12 spec_footer4">
                        <p>
                            Cервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. ул. Осипенко,
                            12, оф 201
                            <a href="mailto:support@godzaim.ru" target="_blank">support@godzaim.ru</a>
                            <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                        </p>
                    </div>
                    <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                        <p>
                            Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная
                            ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости
                            займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период
                            составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по
                            ставке 0% в случае своевременного погашения. <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h1>
                        <p>Просто заполните форму и наш специалист свяжется с Вами</p>
                    </div>
                    <hr>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" id="feedback-name" placeholder="Имя" title="Имя">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control input-lg" id="feedback-phone" value="8(977)7474833" placeholder="Телефон" title="Телефон">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" id="feedback-email" placeholder="Email" title="Email" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" class="btn btn-primary btn-lg" id="feedback-send">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
require 'templates/common/get_display_size.php';
echo '<style>'; 
require "modules/3dgallery/css/style.css"; 
echo '</style>'; 
echo '<script>'; 
require "modules/3dgallery/js/modernizr.custom.53451.js"; 
echo '</script>'; 
echo '<script>'; 
require "templates/godzaim/js/jquery.gallery.js"; 
echo '</script>'; 
echo '<script>'; 
require "modules/bootstrap/3.3.6/js/bootstrap.min.js"; 
echo '</script>'; 
echo '<script>'; 
require "modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js"; 
echo '</script>'; 
echo '<script>'; 
require "modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js"; 
echo '</script>';
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
?>
<script>
    $(document).ready(function () {
        if (location.hash) {
            location.hash && $(location.hash + '.collapse').collapse('show');
            $('body').animate({
                scrollTop: $($(location.hash).parent()).offset().top - 50
            }, 1000);
            return false;
        }
    });
</script>
<script>
    function setcookie(name, value, expires, path, domain, secure) {
        document.cookie = name + "=" + escape(value) +
            ((expires) ? "; expires=" + (new Date(expires)) : "") +
            ((path) ? "; path=" + path : "; path=/") +
            ((domain) ? "; domain=" + domain : "") +
            ((secure) ? "; secure" : "");
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

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    function GetMoney() {
        $('form#anketa').submit();
    }

    function Loading(flag) {
        if (typeof flag == 'undefined') { 
            $('#feedback-send').prop('disabled', false); 
            $('#feedback-send').html('Отправляется <i class="fa fa-spinner fa-spin fa-pulse"></i>');
        } else if (!flag) {
            $('#feedback-send').html('Отправлено');
            $('#feedback-send').prop('disabled', true);
        }
    }
    var amount = 15000;
    var day = 10;
    var from_ = 13;
    $(document).ready(function () {
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
        $('#passport_code').mask("nnn-nnn", {
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

        $('.docs-a').click(function () {
            var href = $(this).attr("href");
            var hash = href.substr(href.indexOf("#"));
            $('.collapse').collapse('hide');
            $(hash + '.collapse').collapse('show');
            $('body').animate({
                scrollTop: $($(hash).parent()).offset().top - 100
            }, 1000);
        });

        $('#feedback-send').click(function () {
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
            

            if ((typeof data.phone != 'undefined' && data.phone != '') && (typeof data.email !=
                    'undefined' && data.email != '') && (typeof data.comment != 'undefined' &&
                    data
                    .comment != '')) {
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
                            alert(
                                'Заявка отправлена. Мы ответим вам в ближайшее время.'
                            );
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

        $('.amount').ionRangeSlider({
            values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000,
                12000,
                13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
            ],
            min: 1000,
            max: 100000,
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
        prettify_enabled: true,
        hide_from_to: true,
        onChange: function (range) {
            $('.irs-single').text('').append("<span>" + range.from_value +
                " руб</span>");
            var ff = parseFloat($('.irs-slider.single').css('left').replace('px',
                '')) - 20;
            $('.irs-single').css('margin-left', ff);
            $('.irs-single').css('margin-top', '30');

            var percent = 0;
            var attr = '';
            var color = '';
            var n = range.from;

            $('.form-sum-value').text(range.from_value + ' Р');
            $('.calc-period-item').removeClass('active');

            if (n <= 9) {
                $('#period').val('7');
                $('#form_slrd').val(n);
                $('#amount').val(range.from_value);
                $('#period-1').addClass('active');
                perc = '97';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'От 61 дня';
                day = 1;
            } else if (n <= 14 && n > 9) {
                $('#period').val('14');
                $('#form_slrd').val(n);
                $('#amount').val(range.from_value);
                $('#period-1').addClass('active');
                perc = '94';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'От 61 дня';
                day = 14;
            } else if (n <= 15 && n > 14) {
                $('#period').val('21');
                $('#form_slrd').val(n);
                $('#amount').val(range.from_value);
                $('#period-1').addClass('active');
                perc = '84';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'От 61 дня';
                day = 14;
            } else if (n < 17 && n > 15) {
                $('#period').val('21');
                $('#form_slrd').val(n);
                $('#amount').val(range.from_value);
                $('#period-1').addClass('active');
                perc = '84';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'От 130 дней';
                day = 21;
            } else if (n <= 19 && n >= 17) {
                $('#period').val('30');
                $('#form_slrd').val(n);
                $('#amount').val(range.from_value);
                $('#period-2').addClass('active');
                perc = '72';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'От 200 дней';
                day = 21;
            } else {
                $('#period').val('30');
                $('#form_slrd').val(n);
                $('#amount').val(range.from_value);
                $('#period-3').addClass('active');
                perc = '64';
                attr = 'Нужна справка о доходах';
                color = 'red';
                day_comment = 'до 365 дней';
                day = 30;
            }

            $('.current_amount').text(String(range.from_value).split(
                /(?=(?:\d{3})+$)/).join(
                ' '));
            $('.percent_rate').text(perc + '%');
            $('.comment').text(attr);
            $('.current_period').text(day_comment);
            //$('#credit_hint').html(attr);
            //$('#ranges-label').hide();
            $('.results tr').each(function (indx, element) {
                if ($(element).data('amount') < range.from_value) $(element)
                    .hide();
                else $(element).show();
            });
            amount = range.from_value;
            from_ = range.from;
            $('#from_').val(from_);
            //            updateComm();
        }
    });

    $('.amount2').ionRangeSlider({
        values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000,
            12000,
            13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
        ],
        min: 1000,
        max: 100000,
        // postfix: ' руб',
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
        prettify_enabled: true,
        hide_from_to: true,
        onStart: function (range) {
            $('.form-sum-value').text(
                <?php if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['amount'])) echo '20000'; else echo $_POST['amount'];  ?> +
                ' Р'
            );
            <?php
    if(isset($_GET['amount'])) 
    {  
        switch($_GET['amount'])
        {
            case '1000': $px = '0' ; break;
            case '2000': $px = '4.26493' ; break;
            case '3000': $px = '8.52986' ; break;
            case '4000': $px = '12.7948' ; break;
            case '5000': $px = '17.0597' ; break;
            case '6000': $px = '21.3247' ; break;
            case '7000': $px = '25.5896' ; break;
            case '8000': $px = '29.8545' ; break;
            case '9000': $px = '34.1195' ; break;
            case '10000': $px = '38.3844' ; break;
            case '11000': $px = '42.6493' ; break;
            case '12000': $px = '46.9142' ; break;
            case '13000': $px = '51.1792' ; break;
            case '14000': $px = '55.4441' ; break;
            case '15000': $px = '59.709' ; break;
            case '20000': $px = '63.974' ; break;
            case '25000': $px = '68.2389' ; break;
            case '30000': $px = '72.5038' ; break;
            case '40000': $px = '76.7688' ; break;
            case '50000': $px = '81.0337' ; break;
            case '80000': $px = '85.2986' ; break;
            case '100000': $px = '89.5636' ; break;
        } 
    }
    elseif(isset($_POST['amount'])) 
    {  
        switch($_POST['amount'])
        {
            case '1000': $px = '0' ; break;
            case '2000': $px = '4.26493' ; break;
            case '3000': $px = '8.52986' ; break;
            case '4000': $px = '12.7948' ; break;
            case '5000': $px = '17.0597' ; break;
            case '6000': $px = '21.3247' ; break;
            case '7000': $px = '25.5896' ; break;
            case '8000': $px = '29.8545' ; break;
            case '9000': $px = '34.1195' ; break;
            case '10000': $px = '38.3844' ; break;
            case '11000': $px = '42.6493' ; break;
            case '12000': $px = '46.9142' ; break;
            case '13000': $px = '51.1792' ; break;
            case '14000': $px = '55.4441' ; break;
            case '15000': $px = '59.709' ; break;
            case '20000': $px = '63.974' ; break;
            case '25000': $px = '68.2389' ; break;
            case '30000': $px = '72.5038' ; break;
            case '40000': $px = '76.7688' ; break;
            case '50000': $px = '81.0337' ; break;
            case '80000': $px = '85.2986' ; break;
            case '100000': $px = '89.5636' ; break;
        } 
    } 
    ?>

    $('.irs-single').text('').append("<span>" +
        <?php if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['amount'])) echo '20000'; else echo $_POST['amount'];  ?> +
        " руб</span>");
    <?php $px = ($px - 3.5) . '%';?>
    $('.irs-single').css({
        'margin-left': '<?php echo $px; ?>'
    });
    $('.irs-single').css('margin-top', '30');
    },
    onChange: function (range) {
    $('.form-sum-value').text(range.from_value + ' Р');

    $('.irs-single').text('').append("<span>" + range.from_value +
        " руб</span>");
    var ff = parseFloat($('.irs-slider.single').css('left').replace('px',
        '')) - 12;
    $('.irs-single').css('margin-left', ff);
    $('.irs-single').css('margin-top', '30');

    if (range.from_value <= 10000) {
        $('#period').val('7');
        $('#period2').val('От 61 до 130 дней');
    } else if (range.from_value <= 15000) {
        $('#period').val('14');
        $('#period2').val('От 61 до 130 дней');
    } else if (range.from_value <= 20000) {
        $('#period').val('31');
        $('#period2').val('От 61 до 130 дней');
    } else if (range.from_value <= 30000) {
        $('#period').val('31');
        $('#period2').val('От 61 до 130 дней');
    } else if (range.from_value <= 50000) {
        $('#period').val('130');
        $('#period2').val('От 130 до 250 дней');
    } else {
        $('#period').val('180');
        $('#period2').val('От 250 до 365 дней');
    }
    }
    });

    <?php if ($this->uri->segment(1) == '') { ?>
    var slider3 = $('#amount').data('ionRangeSlider');
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

    $('.irs-single').text('').append("<span>" + slider3.result.from_value +
    " руб</span>");
    var ff = parseFloat($('.irs-slider.single').css('left').replace('px', '')) - 20;
    $('.irs-single').css('margin-left', ff);
    $('.irs-single').css('margin-top', '30');

    $('.calc-period-item').removeClass('active');

    if (n <= 9) {
    $('#period').val('7');
    $('#form_slrd').val(n);
    $('#amount').val(slider3.result.from_value);
    $('#period-1').addClass('active');
    perc = '97';
    attr = 'Автоматическое одобрение';
    color = 'green';
    day_comment = 'От 61 дня';
    day = 1;
    } else if (n <= 14 && n > 9) {
    $('#period').val('14');
    $('#form_slrd').val(n);
    $('#amount').val(slider3.result.from_value);
    $('#period-1').addClass('active');
    perc = '94';
    attr = 'Автоматическое одобрение';
    color = 'green';
    day_comment = 'От 61 дня';
    day = 14;
    } else if (n <= 15 && n > 14) {
    $('#period').val('21');
    $('#form_slrd').val(n);
    $('#amount').val(slider3.result.from_value);
    $('#period-1').addClass('active');
    perc = '84';
    attr = 'Автоматическое одобрение';
    color = 'green';
    day_comment = 'От 61 дня';
    day = 14;
    } else if (n < 17 && n > 15) {
    $('#period').val('21');
    $('#form_slrd').val(n);
    $('#amount').val(slider3.result.from_value);
    $('#period-1').addClass('active');
    perc = '84';
    attr = 'Автоматическое одобрение';
    color = 'green';
    day_comment = 'От 130 дней';
    day = 21;
    } else if (n <= 19 && n >= 17) {
    $('#period').val('30');
    $('#form_slrd').val(n);
    $('#amount').val(slider3.result.from_value);
    $('#period-2').addClass('active');
    perc = '72';
    attr = 'Автоматическое одобрение';
    color = 'green';
    day_comment = 'От 200 дней';
    day = 21;
    } else {
    $('#period').val('30');
    $('#form_slrd').val(n);
    $('#amount').val(slider3.result.from_value);
    $('#period-3').addClass('active');
    perc = '64';
    attr = 'Нужна справка о доходах';
    color = 'red';
    day_comment = 'до 365 дней';
    day = 30;
    }

    }, 50);
    <?php } ?>
    });
    </script>
    <?php if ($this->uri->segment(1) == 'form') { 
                
    echo '<script>';
    require 'templates/godzaim/js/validate.js';
    echo '</script>';
    echo '<script>';
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/godzaim/js/jquery.form-validator.js';
    echo '</script>'; 
    echo '<script>';
    require 'templates/godzaim/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/godzaim/js/settings.js';
    echo '</script>';
    require 'templates/common/switch_form2.php';
?>
                <!--[if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->

<?php
  
 }
        require 'yandex_metrika.php';
    ?>
<script>
    function markTarget(target, param, id) {
        if (typeof yaCounter46347456 == 'undefined') return;
        if (typeof param == 'undefined') yaCounter46347456.reachGoal(target);
        else yaCounter46347456.reachGoal(target, param);

        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id=' + id + '&pixel=' + param,
            success: function (data) {}
        });
    }
</script>
<script >
    (window.Image ? (new Image()) : document.createElement('img')).src = location.protocol +
        '//vk.com/rtrg?r=RRRhvxA7nvURG7xAUtL1b2tM0X6dhz4tDAGsjmC3XYdu0hMp4G5M1qB0DwX9x5CjKiwuRfUUCPeTFJgPM96VEJMDEF2kd2TqnCHkwMhTMLKMsje7SOydhyYmYfpnJZCNZHLFjJlRoiPU4bCFDyrAjhJufuYNkPM30caOVnC7B/8-&pixel_id=1000099082';
</script>
<!--Константин Гутлид-->
<script >
    (window.Image ? (new Image()) : document.createElement('img')).src = location.protocol +
        '//vk.com/rtrg?r=Z7pk5C4xjqokU5G*QALWNq2pkJhzPOom99yo3Qxf9oIeFlECprDRQgjZP9SEA86kYiMHFgew1rs3AF6e*l8tUryFp/Fl495P7rPnkWnSEnGPEQiabdvpee/7*npmHm33ovO1TSw3ulRHBDU7ITWvhsLgKc4jAIpbdw4C7HeMV/s-&pixel_id=1000099730';
</script>

<script >
    var isMobile = false; //initiate as false
    // device detection
    if (
        /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
        .test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test(navigator.userAgent.substr(0, 4))) isMobile = true;
    if (isMobile) {
        (function(w, d, n, s, t) {
            w[n] = w[n] || [];
            w[n].push(function() {
                Ya.Context.AdvManager.render({
                    blockId: "R-A-257495-2",
                    renderTo: "yandex_rtb_R-A-257495-2",
                    horizontalAlign: false,
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
        $('#display').val(1);
    } else {
        (function(w, d, n, s, t) {
            w[n] = w[n] || [];
            w[n].push(function() {
                Ya.Context.AdvManager.render({
                    blockId: "R-A-257495-1",
                    renderTo: "yandex_rtb_R-A-257495-1",
                    horizontalAlign: false,
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
<!-- Код тега ремаркетинга Google -->
<!-- 
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
 -->
<script >
    /* <![CDATA[ */
    var google_conversion_id = 844462441;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/844462441/?guid=ON&amp;script=0"
        />
    </div>
</noscript>
<?php require 'google_analytics.php'; ?>
</body> 
</html>