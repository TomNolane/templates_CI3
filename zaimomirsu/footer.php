<?php $from = '18';

    if($this->uri->segment(1) != 'form')
    {
        echo '';
    }
?>

<footer class="ex-main-footer ex-sticky-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="ex-foot-logo">
                    <a href="/"><img src="/templates/zaimomirsu/assets/img/logo-footer.png" alt="logo-footer.png"></a>
                </div>
            </div>
            <div class="col-lg-9">
                <p>Сервис по подбору выгодных онлайн займов и кредитов находящийся по адресу:<br>
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 support@zaimomir.su<span class="hidden-xs hidden-sm"> | 8
                    (960) 950 93
                    53</span><br>
                    <span class="hidden-xs hidden-sm">Займы предоставляются на сумму от 200 до 15 000 гривен включительно на срок от 61 до 365
                    дней.<br>
                    Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.<br>
                    Пример расчета общей стоимости займа: заём 5 000 гривен. Срок пользования 10 недель под 0,08% в день;
                    проценты за весь период составят 650 гривен. Итого к выплате 6 550 гривен. Первый заём до 1 000 гривен
                    выдается по ставке 0% в случае своевременного погашения  
                    <!-- | ООО «Альянс» | ОГРН 5177746353054 | ИНН 9705113909 | КПП 770501001 -->
                    ИП Бабакова К.К ОГРНИП 316222500122426 ИНН 222511216499</span>
                </p>
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
    require 'templates/zaimomirsu/assets/js/bootstrap.min.js';
    echo '</script>';?>
    <script>  
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
    </script> 
    <?php
    echo '<script>';
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/zaimomirsu/assets/js/jquery.pickmeup.twitter-bootstrap.js';
    echo '</script>';
    echo '<script>';
    require 'templates/zaimomirsu/assets/js/pickmeup.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/zaimomirsu/assets/js/jquery.form-validator.js';
    echo '</script>';
    echo '<script>';
    require 'templates/zaimomirsu/assets/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/zaimomirsu/assets/js/coockie.js';
    echo '</script>';
    require 'templates/common/detect.min.php';
    echo '<script>';
    require 'templates/zaimomirsu/assets/js/custom.js';
    echo '</script>';
    echo '<script>';
    require 'templates/zaimomirsu/assets/js/settings_form.js';
    echo '</script>';
    ?>

    <!--[if lt IE 10]>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <![endif]-->

<?php if($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') 
{ 
    echo '<script>';
    require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/zaimomirsu/assets/js/loanCalculator.js';
    echo '</script>';
?>

    <script>
    $(document).ready(function () 
    {
        $.mask.definitions['*'] = "[-А-я ЁёІіЇїҐґЄє'а-яёА-ЯЁA-Za-z0-9\/\-_]";
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
                case '200': $from = '0' ; break;
                case '300': $from = '1' ; break;
                case '400': $from = '2' ; break;
                case '500': $from = '3' ; break;
                case '600': $from = '4' ; break;
                case '700': $from = '5' ; break;
                case '800': $from = '6' ; break;
                case '900': $from = '7' ; break;
                case '1000': $from = '8' ; break;
                case '1100': $from = '9' ; break;
                case '1200': $from = '10' ; break;
                case '1300': $from = '11' ; break;
                case '1400': $from = '12' ; break;
                case '1500': $from = '13' ; break;
                case '2000': $from = '14' ; break;
                case '2500': $from = '15' ; break;
                case '3000': $from = '16' ; break;
                case '4000': $from = '17' ; break;
                case '5000': $from = '18' ; break;
                case '6000': $from = '19' ; break;
                case '7000': $from = '20' ; break;
                case '8000': $from = '21' ; break;
                case '9000': $from = '22' ; break;
                case '10000': $from = '23' ; break;
                case '11000': $from = '24' ; break;
                case '12000': $from = '25' ; break;
                case '13000': $from = '26' ; break;
                case '14000': $from = '27' ; break;
                case '15000': $from = '28' ; break; 
            }
            echo $from; 
        }
        elseif(!isset($_POST['form_slrd'])) echo '18'; else echo $_POST['form_slrd']; 
        ?>,
        values: [200, 300, 400, 500, 600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 2000, 2500, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000],
        onFinish: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        }, 
        onLoad: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        },
        onChange: function (range) {

            if(range.from_value < 4000){
                $('#period').val('7');
                $('#period2').val('100-130 дней');
            }if(range.from_value <= 2000){
                $('#period').val('10');
                $('#period2').val('61-100 дней');
            }if(range.from_value >= 4000 && range.from_value <= 9000){
                $('#period').val('10');
                $('#period2').val('130-200 дней');
            }if(range.from_value <= 12000 && range.from_value > 9000){
                $('#period').val('10');
                $('#period2').val('200-250 дней');
            }if(range.from_value > 12000){
                $('#period').val('14');
                $('#period2').val('250-365 дней');
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

    function Loading(flag) 
    {
        if (typeof flag == 'undefined') { 
            $('#feedback-send').prop('disabled', false); 
            $('#feedback-send').html('Отправляется <i class="fa fa-spinner fa-spin fa-pulse"></i>');
        } else if (!flag) {
            $('#feedback-send').html('Отправлено');
            $('#feedback-send').prop('disabled', true);
        }
    } 

    $('#feedback-send').click(function () 
    {
        Loading();

        if(!re_email.test($('#feedback-email').val()))
        {
            Loading(0);
            alert('Пожалуйста, заполните поле "ваш емаил" корректно.');
            $('#feedback-send').prop('disabled', false);
            $('#feedback-send').html('Отправить');
            return;
        } 
        
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
    
    function Loading2(flag) {
        if (typeof flag == 'undefined') {
            $('#feedback-send2').prop('disabled', true);
            $('#feedback-send2').html('OK <i class="fa fa-spinner fa-spin fa-pulse"></i>');
        } else if (!flag) {
            $('#feedback-send2').html('OK');
            $('#feedback-send2').prop('disabled', false);
        }
    }

    $('#feedback-send2').click(function () {
        Loading2();

        var data2 = {
            name: $('#feedback-name2').val(),
            phone: $('#feedback-phone2').val(),
            email: $('#feedback-email2').val(),
            comment: $('#feedback-comment2').val()
        };

        if ((typeof data2.phone != 'undefined' && data2.phone != '') && (typeof data2.email != 'undefined' && data2
                .email != '') && (typeof data2.comment != 'undefined' && data2.comment != '')) { 

            if(!re_email.test($('#feedback-email2').val()))
            {
                Loading2(0);
                alert('Пожалуйста, заполните поле "ваш емаил" корректно.');
                return;
            } 
    
            $.ajax({
                url: '/feedback/',
                type: 'POST',
                dataType: 'json',
                data: data2
            }).done(function (response) {
                if (response != null) {
                    if (typeof response.error != 'undefined') {
                        alert('Ошибка. ' + response.error);
                    } else {
                        Loading2(0);
                        alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
                        $('#feedback-send2').prop("disabled", true);
                        $('#feedback-send2').css("visibility","hidden");
                    }
                } else {
                    alert('Не получилось отправить. Попробуйте ещё раз.');
                }
            }).fail(function (jqxhr, textStatus, error) {
                alert('Не получилось отправить. Попробуйте ещё раз.');
            }).always(function () {
                Loading2(0);
            });
        } else {
            Loading2(0);
            alert('Пожалуйста, заполните поле "ваш емаил".');
        }
    });
    $(".ex-offerta-block").hover(function () {
        $(".ex-offerta-block ").removeClass("ex-offerta-active");
        $(this).addClass("ex-offerta-active");
    });
</script>
    <?php
		if ($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') { 
    ?>

    <script> 
    $(document).ready(function () {
         
    var slider3 = $('#rangeSlider').data('ionRangeSlider');
    var slider_plus = true;
    var n = 8;
    var slider_init = setInterval(function () {
        if (slider_plus) {
            n++;
        } else {
            n--;
        }
        if (n == 28 && n != <?php echo $from;?>) {
            slider_plus = false;
        }else if (n == <?php echo $from;?> && slider_plus == false) {
            clearInterval(slider_init);
        }else if (n == 28 && n == <?php echo $from;?>) {
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
            $('#period').val('10');
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 15 && n > 14) {
            $('#period').val('10');
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 17 && n > 15) {
            $('#period').val('10');
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n < 19 && n > 17) {
            $('#period').val('14');
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n => 19) {
            $('#period').val('14'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        }
    }, 50);
});
<?php require 'templates/zaimomirsu/assets/js/owl.carousel.min.js';?>
    $('.owl-carousel').owlCarousel({
        stagePadding: 40,
        center: true,
        loop: true,
        margin: 120,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });
    </script>
<?php } elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')
{  
    echo '<script> 
    $(".ex-offerta-block").hover(function () {
        $(".ex-offerta-block ").removeClass("ex-offerta-active");
        $(this).addClass("ex-offerta-active");
    });
    function traffic(site, page)
    {
        $.ajax({
            type: \'POST\',
            url: \'/traffic/\',
            data: \'site=\'+site+\'&page=\'+page,
                success: function(data){ 
                }
        });
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

if ($this->uri->segment(1) == 'form') 
{
    echo "
    <script>
    $('.ex-calc-zaim').on('click', function () {
        $('.ex-calc-zaim').toggleClass('ex-calc-zaim-open');
        $('.ex-calc-zaim').prev('.ex-calc-block').toggleClass('d-none');
    });
    //$('.ex-calc-zaim').click();
    </script>";
    require 'templates/common/switch_form.php';
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

if ($this->uri->segment(1) == 'money') 
{
    echo "<script>
        $('.nav-item').on('click', function () {
            $('.nav-item').removeClass('active');
            $(this).addClass('active');
        });
    </script>";
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
function markTarget(target,param, id) 
{
    if (typeof yaCounter47764510 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter47764510.reachGoal(target);
	else yaCounter47764510.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){ 
            }
        });
}
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</body>
</html>