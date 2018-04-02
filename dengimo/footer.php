</div>
<div class="buffer"></div> 
<?php $from = '15';
if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
{
    echo '<a href="#0" class="cd-top">Наверх</a>';
}

if($this->uri->segment(1) != 'form')
{
    echo '<!-- Декстоп --><div id="ya-rtb"><div id="yandex_rtb_R-A-232716-8"></div>';
    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { 
        echo '<!-- Мобайл --><div id="yandex_rtb_R-A-232716-7"></div>';
    }
    echo '</div>';
    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Деньгимо -->
    <ins class="adsbygoogle text-center"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="1211392596"
    data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}
?> 
<footer>
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="/">
                    <img src="/templates/dengimo/img/logo-footer.png" class="logo" alt="logo-footer.png">
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 spec_footer4">
                <p class="footer-text">
                    Сервис по подбору выгодных онлайн займов находящийся по адресу:
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                    <br/>email: <a href="mailto:support@dengimo.ru" target="_blank">support@dengimo.ru</a> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                </p>
            </div>
            <div class="gut col-md-5 col-sm-5 col-xs-12  hidden-xs hidden-sm spec_footer5">
                <p style="font-size: 9px">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001.</p>
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
require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
echo '</script>';
echo '<script>';
require 'templates/dengimo/js/validate.js';
echo '</script>';
echo '<script>';
require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
echo '</script>';
echo '<script>';
require 'templates/dengimo/js/jquery.form-validator.js';
echo '</script>';
echo '<script>';
require 'templates/dengimo/js/jquery.suggestions.min.js';
echo '</script>';
echo '<script>';
require 'templates/dengimo/js/settings.js';
echo '</script>';
require 'templates/common/detect.min.php';

echo '<!--[if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->';

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index') {
echo '<script>
$(document).ready(function () {
    $(\'#carousel-index\').on(\'slide.bs.carousel\', function (e) {
        $(\'.carousel-super\').removeClass(\'active\');
        $(\'.carousel-super[data-slide="\' + e.relatedTarget.id + \'"]\').addClass(\'active\');
    }); 
});
</script>';
}  
?>
<script>
//backtotop
jQuery(document).ready(function(o){var l=300,s=1200,c=700,d=o(".cd-top");o(window).scroll(function(){o(this).scrollTop()>l?d.addClass("cd-is-visible"):d.removeClass("cd-is-visible cd-fade-out"),o(this).scrollTop()>s&&d.addClass("cd-fade-out")}),d.on("click",function(l){l.preventDefault(),o("body,html").animate({scrollTop:0},c)})});

function setcookie(name, value, expires, path, domain, secure)
{
    document.cookie =    name + "=" + escape(value) +
        ((expires) ? "; expires=" + (new Date(expires)) : "") +
        ((path) ? "; path=" + path : "; path=/") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}

function getcookie(name)
{
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;
    
    if (cookie.length > 0)
    {
        offset = cookie.indexOf(search);
        
        if (offset != -1)
        {
            offset += search.length;
            end = cookie.indexOf(";", offset)
            
            if (end == -1)
            {
                end = cookie.length;
            }
            
            setStr = unescape(cookie.substring(offset, end));
        }
    }
    
    return(setStr);
}
function delete_cookie ( cookie_name )
{
  var cookie_date = new Date ( );  // Текущая дата и время
  cookie_date.setTime ( cookie_date.getTime() - 1 );
  document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
}
if (getcookie('pixel')){
    $('.b').load('/templates/common/pixel.html');
    var date = new Date(new Date().getTime() -1000);
    delete_cookie('pixel');
}
    function Loading(flag){
		if (typeof flag == 'undefined') { 
            $('#feedback-send').prop('disabled', false); 
            $('#feedback-send').html('Отправляется <i class="fa fa-spinner fa-spin fa-pulse"></i>');
        } else if (!flag) {
            $('#feedback-send').html('Отправлено');
            $('#feedback-send').prop('disabled', true);
        }
	}
	$('#feedback-send').click(function(){

        var re_name2 = /^[а-яА-Яё,\W\.\s-]+$/i;
        if($('#feedback-name').val().length < 2 || !re_name2.test($('#feedback-name').val()))
        {
            alert("Корректно заполните Ваше имя");
            return;
        }

        var re_email2 = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
        if($('#feedback-email').val().length < 6 || !re_email2.test($('#feedback-email').val()))
        {
            alert("Корректно заполните Ваш email");
            return;
        }

        if($('#feedback-comment').val().length < 4)
        {
            alert("Корректно заполните Ваше обращение");
            return;
        }

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
		
		if ((typeof data.phone != 'undefined' && data.phone != '') && (typeof data.email != 'undefined' && data.email != '') && (typeof data.comment != 'undefined' && data.comment != '')) {
			$.ajax({
				url:'/feedback/',
				type:'POST',
				dataType:'json',
				data:data
			}).done(function(response){
				if (response != null){
					if (typeof response.error != 'undefined') {
						alert('Ошибка. ' + response.error);
					}
					else {
						$('#feedbackModal').modal('hide');
                        Loading(0);
                        alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
					}
				}
				else{alert('Не получилось отправить. Попробуйте ещё раз.');}
			}).fail(function(jqxhr,textStatus,error){
				alert('Не получилось отправить. Попробуйте ещё раз.');
			}).always(function(){Loading(0);});
		} else {Loading(0);alert('Пожалуйста, заполните все поля.');}
	});    
var amount = 20000;
var day = 15;
var percent = 1.3;
$(document).ready(function(){
    $.mask.definitions['*'] = "[а-яёА-ЯЁA-Za-z0-9\/\-_]";
	$('[data-toggle="popover"]').popover();
        $('input#phone').mask("8 (9nn) nnn nnnn", { "placeholder": "8 (9__) ___ ____" });
        $('input#feedback-phone').mask("8 (9nn) nnn nnnn", { "placeholder": "8 (9__) ___ ____" });
        $('input#work_phone').mask("8 (9nn) nnn nnnn", { "placeholder": "8 (9__) ___ ____" });
        $('input#passport').mask("nnnn nnnnnn", { "placeholder": "____ ______" });
	    $('input#passport_code').mask("nnn-nnn", { "placeholder": "___-___" });
        $('input#birthdate').mask("nn/nn/nnnn", { "placeholder": "__/__/__" });
        $('input#passportdate').mask("nn/nn/nnnn", { "placeholder": "__/__/__" });
        $('input#work_salary').mask("nnnn?nn", { "placeholder": "" });
        $('input#work_experience').mask("n?nn", { "placeholder": "" });       
        $('input#flat').mask("n?***", { "placeholder": "" });
        $('input#building').mask("n?***", { "placeholder": "" });
        $('input#work_house').mask("n?***", { "placeholder": "" });
	$('.amount').ionRangeSlider({
		min: 1000,
		max: 100000,
		step: 1000,
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
        values: [1000, 2000, 3000, 4000, 5000,6000,7000,8000,9000,10000,11000,12000,13000,14000,15000,20000,25000,30000,40000,50000,80000,100000],
		postfix: '',
		onChange:function(range){
			var percent = 0;
			var attr = '';
			var color = '';
			amount = range.from_value;
            updateComm();
            $("#amount").val(range.from_value);
            $("#period2").val(range.from_value);
            $('#form_slrd').val(range.from);
		}
	});
	$('.period').ionRangeSlider({
		min: 5,
		max: 30,
		from: <?php echo empty($_POST['period'])? 10 : $_POST['period']; ?>,
		postfix: ' сут.',
		onChange:function(range){
			$('#current_period').text(range.from);
            day = range.from;
            $("#amount").val(range.from_value);
            $("#period2").val(range.from_value);
            updateComm();
		}
	});
    $('.amount2').ionRangeSlider({
        values: [1000, 2000, 3000, 4000, 5000,6000,7000,8000,9000,10000,11000,12000,13000,14000,15000,20000,25000,30000,40000,50000,80000,100000],
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
        onChange:function(range){
            if (range.from_value <= 10000) {
                $('#period').val('7'); 
			}
			else if (range.from_value <= 15000) {
                $('#period').val('14'); 
			}
			else if (range.from_value <= 20000) {
                $('#period').val('21'); 
			}
			else if (range.from_value <= 30000) {
                $('#period').val('21'); 
			}
			else if (range.from_value <= 50000) {
                $('#period').val('30'); 
			}
			else {
                $('#period').val('30'); 
            }
            $("#amount").val(range.from_value);
            $('#form_slrd').val(range.from);
            $("#period2").val(range.from_value);
	}
    });
	<?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?>
        var slider = $('.amount').data('ionRangeSlider');
        var slider2 = $('.amount2').data('ionRangeSlider');
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
            slider2.update({
                from: n
            });


            if (slider.result.from_value <= 10000) {
                $('#period').val('7'); 
			}
			else if (slider.result.from_value <= 15000) {
                $('#period').val('14'); 
			}
			else if (slider.result.from_value <= 20000) {
                $('#period').val('21'); 
			}
			else if (slider.result.from_value <= 30000) {
                $('#period').val('21'); 
			}
			else if (slider.result.from_value <= 50000) {
                $('#period').val('30'); 
			}
			else {
                $('#period').val('30'); 
            }

            $("#amount").val(slider.result.from_value);
            $('#form_slrd').val(slider.result.from);
            $("#amount").val(slider2.result.from_value);
            $("#period2").val(slider.result.from_value);
            $("#period2").val(slider2.result.from_value);
            $('#form_slrd').val(slider2.result.from);
            amount = slider.result.from_value;

            updateComm();
        }, 50);

	<?php } ?>
        var updateComm = function () {
		if (amount <= 7000) {
			per = 97;
            $('#period').val('7');
			//attr = 'Автоматическое <br>одобрение';
			color = 'green';
            d = 'От 61 до 100 <br class="hidden-xs"/> дней';
            percent = 1.3;
			comm1 = Math.ceil((amount/100)*percent)*day;
			comm2 = 0;
		}
		else if (amount <= 15000) {
			per = 94;
            $('#period').val('14');
			//attr = 'Может понадобиться <br>паспорт';
			color = 'green';
            d = 'От 100 до 130 <br class="hidden-xs"/> дней';
            percent = 1.3;
			comm1 = Math.ceil((amount/100)*percent)*day;
			comm2 = 0;
		}
		else if (amount <= 30000) {
            per = 84;
            $('#period').val('14');
			//attr = 'Нужен только <br>паспорт';
			color = 'green';
            d = 'От 130 до 200 <br class="hidden-xs"/> дней';
            percent = 1.3;
			comm1 = Math.ceil((amount/100)*percent)*day;
			comm2 = 0;
		}
		else if (amount <= 50000) {
			per = 72;
            $('#period').val('30');
			//attr = 'Может понадобиться подтверждение места работы';
			color = 'orange';
            d = 'От 200 до 250 <br class="hidden-xs"/> дней';
            percent=0.2;
			comm1 = 390*day;
			comm2 = Math.ceil(((amount-30000)/100)*percent)*day;
		}
		else {
			per = 64;
                        $('#period').val('30');
			//attr = 'Может понадобиться справка о доходах (или под залог)';
			color = 'red';
            d = 'От 250 до 365 <br class="hidden-xs"/> дней';
            percent=0.2;
			comm1 = 390*day;
			comm2 = Math.ceil(((amount-30000)/100)*percent)*day;
		}
		comm = comm1 + comm2;
		summ = amount + comm;
        $('.comm').html(comm+'<i class="fa fa-rub" aria-hidden="true"></i>');
		$('.perc').html(percent+'<i class="fa fa-percent" aria-hidden="true"></i>');
        $('.sum').html(String(summ).split(/(?=(?:\d{3})+$)/).join(' ')+'<i class="fa fa-rub" aria-hidden="true"></i>');
        $('.d').html(d);
		$('.current_amount').text(String(amount).split(/(?=(?:\d{3})+$)/).join(' '));
		$('.percent_rate').text(per + '%');
	};
});
</script>
<?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { ?>
<script>
var offers = <?php echo json_encode($data); ?>;
var by_reg = null;
$(document).ready(function(){
	function amountfn() {
		var val = $('#amount').val();
		$('.results tr').each(function(indx, element){
			if ($(element).data('amount') < val) $(element).hide();
			else $(element).show();
		});
		amount = val;
	}
	$('#amount').change(function(){amountfn();}).change();
	$('#amount').keyup(function(){amountfn();});
	$('#region').change(function(){
		$.getJSON('/offers/by_region/' + $(this).val())
		.done(function(data){
			if (data.length) {
				by_reg = data;
				update_offers();
				/*$('.results tr').hide();
				data.forEach(function(index, offer){
					$('.results tr[data-id="' + offer.id + '"]').show();
				});*/
			}
			else
			{
				by_reg = null;
				$('.results tr').show();
			}
		})
		.fail(function(){$('.results tr').show();})
		.always(function(){/*Loading(0);*/});
	});
	
	$('.offer-type').change(function(){
		update_offers();
	});
	
	function update_offers() {
		var str = '.results tbody tr';
		//var curr = clone(by_reg.length? by_reg : offers);
		var ot_card = $('.offer-type[data-id="card"]').prop('checked');
		var ot_qiwi = $('.offer-type[data-id="qiwi"]').prop('checked');
		var ot_yandex = $('.offer-type[data-id="yandex"]').prop('checked');
		var ot_contact = $('.offer-type[data-id="contact"]').prop('checked');
		// Прячем всё
		$(str).hide();
		// Пробегаемся по списку офферов
		((by_reg !== null)? by_reg : offers).forEach(function(offer, i){
			var $tr = $(str + '[data-id="' + offer.id + '"]');
			if ($tr.data('amount') >= amount){
				if (ot_card && !!$tr.data('card') == ot_card) $tr.show();
				else if (ot_qiwi && !!$tr.data('qiwi') == ot_qiwi) $tr.show();
				else if (ot_yandex && !!$tr.data('yandex') == ot_yandex) $tr.show();
				else if (ot_contact && !!$tr.data('contact') == ot_contact) $tr.show();
			}
		});
	}   
    if (getcookie('i')){
        var i = getcookie('i');
        $('#i').text(i);
    }     
});

function clone(o) {
	if(!o || 'object' !== typeof o) return o;
	
	var c = 'function' === typeof o.pop ? [] : {};
	var p, v;
	for(p in o) {
		if(o.hasOwnProperty(p)) {
			v = o[p];
			if(v && 'object' === typeof v) {
				c[p] = clone(v);
			}
			else {
				c[p] = v;
			}
		}
	}
	return c;
}
</script>
<?php } 
require 'yandex_metrika.php';
?>
<script>
function markTarget(target,param,id){
    if (typeof yaCounter39556840 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter39556840.reachGoal(target);
	else yaCounter39556840.reachGoal(target,param);
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){
            }
        });
}
function traffic(site, page){
    $.ajax({
        type: 'POST',
        url: '/traffic/',
        data: 'site='+site+'&page='+page,
            success: function(data){
            }
    }); 
}

</script>
<script >(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=rVpGPTSLprQmO8sgq5rzujYj085R/MNyDfSe6D7FiBVU/ce1AAU5tZ6fkTV5*R7c4K1TjnXVIoIjAo/sNmJ9wJ5mWNyUGhHsu54iZzlmwqrXb2nDFU*EwxOtZIY8tdCiIK6hwF9SwXK8N9vCiCVr3O9R8FdFX6G0PvTUlhfc7dk-&pixel_id=1000099085';</script>
<!--Константин Гутлид-->
<script >(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=ISE1RYyD*mRdoi0TCOSmzLd9lPOPOw8OsUQwzOCRHERjILwv5UHUu9nI1bIsjZLVnb7WP3y/uZsgbMd5yAvEXF*8WRIuzuYKBSMc3E8dsKAFZl7wLVRO5yHTL286msqSou5CpAUqWP8RM4Wd8o/dXK7r9mRHpAPfNtsKH35gIMs-&pixel_id=1000099726';</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-98195621-1', 'auto');
ga('send', 'pageview');

</script> 
<!-- Yandex.RTB R-A-232716-2 -->
<script >
    var isMobile = false; //initiate as false
        // device detection
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
        if(isMobile){
            (function(w, d, n, s, t) {
                w[n] = w[n] || [];
                w[n].push(function() {
                    Ya.Context.AdvManager.render({
                        blockId: "R-A-232716-7",
                        renderTo: "yandex_rtb_R-A-232716-7",
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
        }else{
            (function(w, d, n, s, t) {
                w[n] = w[n] || [];
                w[n].push(function() {
                    Ya.Context.AdvManager.render({
                        blockId: "R-A-232716-8",
                        renderTo: "yandex_rtb_R-A-232716-8",
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
var google_conversion_id = 854183902;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script  src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/854183902/?guid=ON&amp;script=0"/>
</div>
</noscript> 
</body>
</html>