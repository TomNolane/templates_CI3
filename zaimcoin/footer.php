<?php 
$from = '15';

if($this->uri->segment(1) != 'form')
{ 
    echo '<!-- Декстоп Yandex.RTB R-A-259325-1 -->
    <div class="hidden-xs hidden-sm">
    <div id="yandex_rtb_R-A-259325-1"></div></div>';

    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { 
    echo '<!-- мобайл Yandex.RTB R-A-259325-2 -->
        <div class="hidden-lg hidden-md">
        <div id="yandex_rtb_R-A-259325-2"></div></div>';
    }

    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Займкоин -->
    <ins class="adsbygoogle text-center"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="1410703146"
    data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
} 

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') 
{
echo '<footer class="ex-main-footer">
    <div class="container">
        <div class="ex-foot-logo text-center">
            <a href="/"><img src="/templates/zaimcoin/assets/img/logo-footer.png" alt="logo-footer.png"></a>
        </div>
        <div class="ex-foot-content text-center hidden-xs hidden-sm">
            <h4>Условия займа</h4>
            <div class="row">
                <ul class="col-md-offset-2 col-md-8 text-left">
                    <li>Сумма первого займа не более 10 000 рублей, кредит можно получить со ставкой 0%, если он будет
                        погашен вовремя.
                    </li>
                    <li>Размер кредита от 1000 до 100 000 рублей.</li>
                    <li>Процент начисляется каждый день, ставка составляет от 0,08% до 0,98%. В месяц в среднем выходит
                        4,5%, в год - от 30% до 360%.
                    </li>
                    <li>Кредит выдается на период от 61 дня до года.</li>
                    <li>За несоблюдение условий договора начисляется пеня, минимальный размер которой 0,03%, средний -
                        0,10%
                        от начальной суммы займа.
                    </li>
                </ul>
            </div>
            <div class="row">
                <h4>Информация о кредиторах, с которыми мы сотрудничаем</h4>

                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО МФО «СМСФИНАНС»<br>
                            № лицензии 2120177002022<br>
                            Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13<br>
                            Годовая процентная ставка: 328,5%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ЗАО «4финанс»<br>
                            № лицензии 1127746537764<br>
                            Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13<br>
                            Годовая процентная ставка: 328,5%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО «СрочноДеньги»<br>
                            № лицензии 2110552000304<br>
                            Адрес: Нижний Новгород, ул. Тимирязева, 15/2,<br>
                            БЦ «КМ-Сити», 4 этаж<br>
                            Годовая процентная ставка: 360%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО «Домашние деньги»<br>
                            № лицензии 211017700000<br>
                            Адрес: 115088, г. Москва,<br>
                            2-ой Южнопортовый проезд, д. 33, стр. 1<br>
                            Годовая процентная ставка: 248,2%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО «Займер»<br>
                            № лицензии 651303532004088<br>
                            Адрес:г. Кемерово, пр. Советский, д. 2/7<br>
                            Годовая процентная ставка: 248,2%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО «Парса Компани Групп»<br>
                            № лицензии 1097746179585<br>
                            Адрес: 115201, г. Москва, Старокаширское ш., д. 2, корп. 2<br>
                            Годовая процентная ставка: 360%</p>
                    </div>
                </div>
            </div>
            <div id="special_footer" class="ex-for-btn"><a onclick="goToUp(); return false;">ВЕРНУТЬСЯ В НАЧАЛО</a></div>
        </div>
        <p>Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург,
            ул. Осипенко, 12, оф 201 | <a href="mailto:support@zaimcoin.ru" target="_blank">support@zaimcoin.ru</a> <span id="sp_footer1" class="hidden-xs hidden-sm"> | +7 (495) 006 19 61.</span><br>
            <span class="hidden-xs hidden-sm">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
            Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
            Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты
            за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span></p>
    </div>
</footer>';
}
else
{
    echo '<footer class="ex-main-footer-bg">
    <div class="container">
        <div class="ex-foot-logo text-center">
            <a href="/"><img src="/templates/zaimcoin/assets/img/logo-footer.png" alt="logo-footer.png"></a>
        </div>

        <p>Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург,
            ул. Осипенко, 12, оф 201 | <a href="mailto:support@zaimcoin.ru" target="_blank">support@zaimcoin.ru</a>
            <span class="hidden-xs hidden-sm"><span id="sp_footer2">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
            Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
            Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты
            за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span></span></p>
    </div>
</footer>';
}
?>

<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center">Заполните форму<br>
                    и наш менеджер свяжется с вами</h4>
            </div>
            <div class="modal-body"> 
                <div class="row">
                    <div class="col-xs-12">
                        <form>
                            <div class="form-group has-feedback">
                                <label class="control-label" for="feedback-name">Имя</label>
                                <div class="">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control" name="name" id="feedback-name" placeholder="Имя" title="Имя" required>
                                        <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label " for="feedback-email">Email</label>
                                <div class="">
                                    <div class="ex-wrapper">
                                        <input type="email" class="form-control" placeholder="Введите вашу электронную почту" name="mail" id="feedback-email" title="Email" required>
                                        <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group hidden">
                                <input type="tel" class="form-control" id="feedback-phone" placeholder="Телефон" title="Телефон" value="9777777777" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="feedback-comment">Текст сообщения</label>
                                <div class="">
                                    <div class="ex-wrapper">
                                        <textarea  id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <button class="ex-orange-btn" data-dismiss="modal" id="feedback-send" aria-label="Close">Отправить</button>
                            </div>
                            <div id="loading" style="display:none;">
                                <span><i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'templates/common/get_display_size.php'; ?>
<script type="text/javascript" src="/modules/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/modules/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="/modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js"></script>
<script type="text/javascript" src="/modules/poshytip-1.2/src/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="/modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="/templates/zaimcoin/assets/js/jquery.suggestions.min.js"></script> 
<script src="/templates/zaimcoin/assets/js/coockie.js"></script>
<?php require 'templates/common/detect.min.php'; ?>
<script src="/templates/zaimcoin/assets/js/settings_main.js"></script>
<script src="/templates/zaimcoin/assets/js/custom.js"></script>
<script src="/templates/zaimcoin/assets/js/ion.rangeSlider.min.js"></script>


<?php 
if($this->uri->segment(1) == 'form')
{ 
    echo '<script src="/templates/zaimcoin/assets/js/loanCalculator.js?ver=2"></script>';
    echo '<script src="/templates/zaimcoin/assets/js/settings_form.js?ver=2"></script>'; 
} 
?> 

<script> 
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
    // window.location.href = window.location.origin + '/form';
    };

    function goToLk() {
        window.location.href = window.location.origin + '/lk';
    };

    function goToUp() {
        $('html, body').animate({
            scrollTop: $('.toUp').offset().top
        }, 1000);
    }  
    $(document).ready(function () {
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

    function GetMoney() {
        $('form#anketa').submit();
    }

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
                        $('#feedbackModal').modal('hide');
                        Loading(0);
                        $('#helpModal').modal('hide');
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
</script>
<?php
if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index')
{ 
echo '<script>jQuery.fn.swap = function(b) {
    b = jQuery(b)[0];
    var a = this[0],
        a2 = a.cloneNode(true),
        b2 = b.cloneNode(true),
        stack = this;

    a.parentNode.replaceChild(b2, a);
    b.parentNode.replaceChild(a2, b);

    stack[0] = a2;
    return this.pushStack( stack );
    }; 
    var client_w = screen.width; 
    var pathname = window.location.pathname,  substring = "/", substring2 = "index", substring4 = "lk";
        
    if(pathname.indexOf(substring) !== -1 || pathname.indexOf(substring2) !== -1)
    {
        if(Number(client_w) > 767)
        {
             document.getElementById( "sp_footer1" ).style.display = "inline";  
        } 
        else
        {
            document.getElementById( "sp_footer1" ).style.display = "none"; 
            $("#specialIndex").swap("#specialIndex2");
            $("#ex-slider-val").css("margin-top","0");
        }
    }
    else if(pathname.indexOf(substring4) !== -1)
    {
        if(Number(client_w) > 767)
        {
            document.getElementById( "sp_footer1" ).style.display = "inline"; 
            document.getElementById( "sp_footer2" ).style.display = "inline";
        } 
        else
        {
            document.getElementById( "sp_footer1" ).style.display = "none"; 
            document.getElementById( "sp_footer2" ).style.display = "none";
        }
    }
    </script>';

echo '<script src="/templates/zaimcoin/assets/js/loanCalculator.js"></script>';
echo "<script async>$(document).ready(function () {
    var slider3 = $('#rangeSlider').data('ionRangeSlider');

    var slider_plus = true;
    var n = 10;
    var slider_init = setInterval(function () {
        if (slider_plus) {
            n++;
        } else {
            n--;
        }
        if (n == 21 && n != ".$from.") {
            slider_plus = false;
        }else if (n == ".$from." && slider_plus == false) {
            clearInterval(slider_init);
        }else if (n == 21 && n == ".$from.") {
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
});</script>";
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')
{ 
    echo '<script>
    var client_w = screen.width; 
    var pathname = window.location.pathname, substring4 = "lk";
        
    if(pathname.indexOf(substring4) !== -1)
    {
        if(Number(client_w) > 767)
        { 
            document.getElementById( "sp_footer2" ).style.display = "inline";
        } 
        else
        { 
            document.getElementById( "sp_footer2" ).style.display = "none";
        }
    }
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
        traffic("zaimcoin.ru", "4");
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
                                                    <img src="templates/common/img/popup.jpg" alt="popup.jpg">                                             
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
}

if(isset($_GET['email']))
{
    //данные пользователя
    $this->load->model('user/user_model', 'user');
    $user_data = $this->user->get_user($_GET['email']);
    $user_data['birthdate'] = date('d/m/Y', strtotime($user_data['birth']));
    $user_data['passportdate'] = date('d/m/Y', strtotime($user_data['passport_date']));
    foreach ($user_data as $name => $item)
    {
        echo '<script> $("#'.$name.'").val("'.$item.'"); </script>';
    }
    echo '<script> $("#username").text("'.$user_data['i'].'"); </script>';
}
?>
<!-- всплывающее окошко --> 
<?php
 require 'yandexmetrika.php';
 require 'googleanalytics.php';
?>
<script>
function markTarget(target,param, id){
    if (typeof yaCounter46652025 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter46652025.reachGoal(target);
	else yaCounter46652025.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){
                //console.log(data);
            }
        });
}
function traffic(site, page){
    $.ajax({
        type: 'POST',
        url: '/traffic/',
        data: 'site='+site+'&page='+page,
            success: function(data){
                //console.log(data);
            }
    });    
}
</script>
</body>
</html>