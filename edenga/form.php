<?php
if(!isset($my_title))
{
    $my_title = 'Заполните анкету!';
}  

require 'header.php'; ?>

<link href="/modules/awesome-bootstrap-checkbox-master/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/jquery.suggestions/16.8/css/suggestions.css" type="text/css" rel="stylesheet" />
<style>
    #ya-rtb{display: none;}
    .buffer{height: 0px;}
</style>
<?php
// IP
$this->load->helper('ip');
// GEO
require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
$gb = new IPGeoBase();
$geo = $gb->getRecord(IP::$ip);
if ($geo)
    {
        if (isset($geo['region'])){
            $region_name = $geo['region'];
        }else{
            $region_name = 'Санкт-Петербург';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Санкт-Петербург';
        }
    }else{
        $region_name = 'Санкт-Петербург';
        $city_name = 'Санкт-Петербург';
    }
// Список регионов
$this->load->model('geo/geo_model', 'geo');
$regions = $this->geo->regions();
if(isset($_SERVER['HTTP_REFERER'])){
    $referer = $_SERVER['HTTP_REFERER'];
    parse_str($_SERVER['HTTP_REFERER'], $output);
        if(isset($output['utm_source'])){
            switch ($output['utm_source']) {
                case 'vk':
                    $utm = '1';
                    break;
                case 'direct':
                    $utm = '2';
                    break;
                case 'mytarget':
                    $utm = '3';
                    break;
                case 'google':
                    $utm = '4';
                    break;      
                case 'google_cms':
                    $utm = '5';
                    break;                
                default:
                    $utm = '0';
            }
        }else{
            $utm = ''; 
        }
    $ad_id = '3'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '3';
}
?>

<div class="container">

<section class="form-anketa">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<h1 class="title text-center" id="htitle">Заполните свои личные данные</h1>
				<ul class="nav nav-tabs text-center" id="form-steps">
					<li role="presentation" class="active"><a href="#form1" id="step1">Личные <span class="hidden-sm hidden-xs">данные</span></a></li>
					<li role="presentation" class="disabled"><a href="#form2" id="step2">Паспорт<span class="hidden-sm hidden-xs">ные данные</span></a></li>
					<li role="presentation" class="disabled"><a href="#form3" id="step3">Работа</a></li>
				</ul>

			<div class="col-md-6 col-md-offset-2 col-sm-6 col-xs-11 form-body">
				<form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
                                        <input type="hidden" name="referer" value="<?=$referer?>">
                                        <input type="hidden" name="id" value="">
                                        <input type="hidden" name="step" value="1">
                                        <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                                        <?php
                                                        /*
                                                            if (!empty($_REQUEST['utm_campaign'])){
                                                                $ad_id = '3'.$_REQUEST['utm_campaign'];                          
                                                            } else {
                                                                $ad_id = '3';
                                                            }
                                                                echo '<input type="hidden" name="ad_id" value="'.$ad_id.'">';
                                                        */
                                        ?>                                        
					<div class="tab-content">
						<div id="form1" class="tab-pane fade in active">
							<?php require 'form1.php'; ?>
							<div class="pull-right"><a class="btn btn-primary btn-next" id="next">Далее <i class="fa fa-arrow-right"></i></a></div>
							<div class="clearfix"></div>
						</div>
						<div id="form2" class="tab-pane fade">
							<?php require('form2.php'); ?>
							<div class="clearfix">&nbsp;</div>
                                                        <div class="form-group">
                                                                <div class="col-md-4 col-md-offset-4 hidden-xs"><div class="pull-left"><a class="btn btn-primary btn-next" id="back"><i class="fa fa-arrow-left"></i> Назад</a></div></div>
                                                                <div class="col-md-4"><div class="pull-right"><a class="btn btn-primary btn-next" id="next2">Далее <i class="fa fa-arrow-right"></i></a></div></div>
                                                        </div>
							<div class="clearfix"></div>
						</div>
						<div id="form3" class="tab-pane fade">
							<?php require('form3.php'); ?>
							<div class="row">
								<div class="col-sm-8 col-sm-offset-4 col-xs-12 text-center">    
                                                                    <a class="btn btn-primary btn-header" id="form-send">Оформить заявку</a>                                                                    
                                                                </div>
							</div>
						</div>
					</div>

				</form>
			</div>
			<div class="col-md-2 hidden-sm hidden-xs icon">
				<div class="text-center icon-text">
                                    <img src="/templates/edenga/img/form/1.png" alt="Ваши персональные данные надёжно защищены" class="img-rounded">
                                    <span>Ваши персональные данные надежно защищены</span>
                                </div>
				<div class="text-center icon-text">
                                    <img src="/templates/edenga/img/form/2.png" alt="Удобное получение денег" class="img-rounded">
                                    <span>Удобное получение денег</span>
                                </div>
				<div class="text-center icon-text">
                                    <img src="/templates/edenga/img/form/3.png" alt="Принимаем заявки с любой кредитной историей" class="img-rounded">
                                    <span>Круглосуточная работа</span>
                                </div>
				<div class="text-center icon-text">
                                    <img src="/templates/edenga/img/form/4.png" alt="Деньги Вас ждут прямо сейчас" class="img-rounded">
                                    <span>Деньги ждут вас</span>
                                </div>
			</div>
		</div>
	</div>
</section>    
<div class="clearfix visible-sm visible-xs">&nbsp;</div>
</div>
        
<!-- Modal -->
<div class="modal fade" id="tosModal" tabindex="-1" role="dialog" aria-labelledby="tosModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="modal-title hidden-xs" id="tosModalLabel">Политика конфиденциальности</h1>
                                <h2 class="modal-title visible-xs-block" id="tosModalLabel">Политика конфиденциальности</h2>
                                <p>Заполняя заявку на кредит Вы соглашаетесь с нашими правилами использования данных</p>
			</div>
			<div class="modal-body">
				<div class="row">
                                    <ol>
                                        <li>Я даю свое согласие на регистрацию в проекте edenga.ru и получение новостей проекта. Я уведомлен(а) о том, что информация, переданная мною по сети Интернет, может стать доступной третьим лицам, и я освобождаю администрацию edenga.ru от ответственности, в случае, если указанные мною сведения станут доступными третьим лицам.</li>		
                                        <li>В целях принятия одним из МФО-партнеров edenga.ru решения о заключении договора займа я даю им свое согласие на:
                                            <ul>
                                                <li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно на сбор и проверку достоверности представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных данных в целях продвижения услуг edenga.ru на рынке с помощью средств связи, равно как продвижение услуг edenga.ru и/или услуг (товаров, работ) третьих лиц-партнеров edenga.ru.</li>
                                                <li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004 г. № 218-ФЗ "О кредитных историях" от любых организаций, осуществляющих в соответствии с действующим законодательством формирование, обработку и хранение такой информации. Полученная информация предназначена для внутреннего использования МФО-партнеров edenga.ru. Настоящие согласия даны мной на неопределенный срок.</li>
                                            </ul>
                                        <li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную дату и обязуюсь незамедлительно уведомить edenga.ru в случае изменения указанных мной сведений, а также о любых обстоятельствах, способных повлиять на выполнение мной или МФО-партнеров edenga.ru обязательств по займу, который может быть предоставлен на основании заявки.</li>
                                    </ol>
				</div>
			</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"> Закрыть </button>
                        </div>
		</div>
	</div>
</div>
<script src="/templates/edenga/js/validate.js?ver=1"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="/modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>

<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.suggestions/16.8/js/jquery.suggestions.min.js"></script>
<script type="text/javascript">
    $("#email").suggestions({
        serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
        token: "78fc76023580df0ec78566913b31a87d909f1ec0",
        type: "EMAIL",
        count: 3,
        addon: "none",
        scrollOnFocus: false
    });    
</script>
<script type="text/javascript">    
function init($surname, $name, $patronymic) {
  var self = {};
  self.$surname = $surname;
  self.$name = $name;
  self.$patronymic = $patronymic;
  var fioParts = ["SURNAME", "NAME", "PATRONYMIC"];
  $.each([$surname, $name, $patronymic], function(index, $el) {
    var sgt = $el.suggestions({
      serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
      token: "78fc76023580df0ec78566913b31a87d909f1ec0",
      type: "NAME",
      triggerSelectOnSpace: false,
      hint: "",
      noCache: true,
      scrollOnFocus: false,
      minChars: 2,
      addon: "none",
      params: {
        // каждому полю --- соответствующая подсказка
        parts: [fioParts[index]]
      },
      onSearchStart: function(params) {
        // если пол известен на основании других полей,
        // используем его
        var $el = $(this);
        var $gender = 0;
        params.gender = isGenderKnown.call(self, $el) ? self.gender : "UNKNOWN";
        if(params.gender == "MALE"){$gender=1;}else{$gender=0;}
        $('#gender').val($gender);
      },
      onSelect: function(suggestion) {
        // определяем пол по выбранной подсказке
        self.gender = suggestion.data.gender;
        if(self.gender == "MALE"){$gender=1;}else{$gender=0;}
        $('#gender').val($gender);
      }
    });
  });
};
// Проверяет, известен ли пол на данный момент
function isGenderKnown($el) {
  var self = this;
  var surname = self.$surname.val(),
      name = self.$name.val(),
      patronymic = self.$patronymic.val();
  if (($el.attr('id') == self.$surname.attr('id') && !name && !patronymic) ||
      ($el.attr('id') == self.$name.attr('id') && !surname && !patronymic) ||
      ($el.attr('id') == self.$patronymic.attr('id') && !surname && !name)) {
    return false;
  } else {
    return true;
  }
}
init($("#f"), $("#i"), $("#o")); 

$("#email").suggestions({
    serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
    token: "78fc76023580df0ec78566913b31a87d909f1ec0",
    type: "EMAIL",
    count: 3,
    scrollOnFocus: false
});

</script>
<script>
  $.validate({
    lang : 'ru',
    modules : 'date,sanitize'
  });
  $('input').on('validation', function(evt, valid) {
        if(valid){
            $('#'+this.id+'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        } else {
            $('#'+this.id+'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        }
  });
  
  $('#phone').blur(function(){
    $('#phonestatus').html('');
    $.ajax({
	type: 'POST',
	url: '/validate/phone/',
	data: 'phone='+$('#phone').val(),
	success: function(data){          
            validator = JSON.parse(data);
            if(validator.status){
                //console.log(validator.operator);
                $('#phonestatus').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
                $('#phonestatus').html('<img src="/templates/common/img/mobile/'+validator.operator+'.png" width="24px" />');
                $('#phonestatus').parent().parent().removeClass('has-error').addClass('has-success');
                if(validator.operator == 'undefined'){
                    $('#phonestatus').html('');
                    $('#phonestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                }                
            }else{
                //console.log('error');
                $('#phonestatus').html('');
                $('#phonestatus').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                $('#phonestatus').parent().parent().removeClass('has-success').addClass('has-error');
            }
            
        }    
    });   
  });  
  $('#passport_code').blur(function(){
    $.ajax({
	type: 'POST',
	url: '/validate/passport_code/',
	data: 'passport_code='+$('#passport_code').val(),
	success: function(data){
            //console.log(data);    
            validator = JSON.parse(data);
            if(validator.status){
                $('#passport_who').val(validator.who);
            }else{
            }   
        }    
    });   
  });  
</script>
<script>
$(document).ready(function(){
    traffic('edenga.ru', '1');   
  var lang=0;  
  $('#f, #i, #o, #passport_who, #birthplace, #city, #reg_city, #street, #reg_street, #work_occupation, #work_experience, #work_region, #work_city, #work_street').keypress(function(e){
      if($(this).val().match(/([a-zA-Z]+)/)){
          lang++;
            var input = $(this),
            text = input.val().replace(/[^а-яёА-ЯЁ0-9-_\s]/g, "");
            if(/_|\s/.test(text)) {
                text = text.replace(/_|\s/g, "");
                // logic to notify user of replacement
            }
            input.val(text);
          if(lang==1){
              $(this).parent().addClass('has-error');
              $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">RU</span></span>');
          }
      } else {
        lang=0;
        $(this).parent().removeClass('has-error');
        $(this).next("span").text(' ');
      }
  });
  $('#email').keypress(function(e){
      if($(this).val().match(/([а-яёА-ЯЁ]+)/)){
          lang++;
          $(this).val('');
          if(lang==1){
              $(this).parent().addClass('has-error');
              $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>');
          }
      } else {
        lang=0;
        $(this).parent().removeClass('has-error');
        $(this).next("span").text(' ');
      }
  });

  $('#birthdate').datepicker({
    dateFormat: "dd/mm/yy",  
    changeMonth: true,
    changeYear: true,
    monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
    dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
    firstDay: 1,
    yearRange: "-60:-19",
    defaultDate: "01/01/1998",
    isRTL: false,
    onSelect: function(date) {
            $('#passportdate').focus();
            $('#passportdate').blur();
        }    
  });
  $('#passportdate').datepicker({
    dateFormat: "dd/mm/yy",  
    changeMonth: true,
    changeYear: true,
    monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
    dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
    firstDay: 1,
    yearRange: "-100:+0",
    defaultDate: "01/01/2000",
    isRTL: false,
    onSelect: function(date) {
            $('#passportdate').focus();
            $('#passportdate').blur();
            birth = date.split('/');
            $('select#passport_dd').append($("<option></option>").attr("value",birth[0]).text(birth[0]));
            $("select#passport_dd").val(birth[0]);
            $('select#passport_mm').append($("<option></option>").attr("value",birth[1]).text(birth[1]));
            $("select#passport_mm").val(birth[1]);     
            $('select#passport_yyyy').append($("<option></option>").attr("value",birth[2]).text(birth[2]));
            $("select#passport_yyyy").val(birth[2]);
        }
  });
  
    	function setcookies() {
		$('.ec').each(function(){
			var variant = $(this).attr('name');
			var value = $(this).val();
			if ($(this).context.tagName == 'INPUT'){
				if ($(this).context.type == 'radio') {if ($(this).prop('checked')) setcookie(variant, value);}
				else setcookie(variant, value);
			}
			else setcookie(variant, value);
		});
		setcookie('lk', '1');
	}
	$('#next').click(function(){
		if (validate1()) {
			send_form();
			$('.form-steps-green-line').addClass('step2');
			$('.form-steps-line').show();
			$('#form-steps a[href="#form2"]').tab('show');
			$('html, body').animate({scrollTop:$('#form-steps').offset().top}, 1000);
			//markTarget('form-step-1');
                        $('#htitle').text('Заполните паспортные данные');
                        setcookie('i', $('#i').val());
                        traffic('edenga.ru', '2');
		}
                        oSpP.push("i", $('#i').val());
                        oSpP.push("o", $('#o').val());                        
		showBzzz = false;
		$('.reg_same').change();
                setcookies();
		$('select[name="reg_type"]').change();
	});
	$('#back').click(function(){
		$('#form-steps a[href="#form1"]').tab('show');
		$('html, body').animate({scrollTop:$('#form-steps').offset().top}, 1000);
		$('.reg_same').change();
		$('select[name="reg_type"]').change();
	});	
	$('#next2').click(function(){
		if (validate2()) {
                        $('input[name="step"]').val('2');
			send_form();
			$('#step3').removeClass('off');
			$('.form-steps-green-line').addClass('step3');
			$('.form-steps-line').show();
                        $('#htitle').text('Заполните данные о работе');
			$('#form-steps a[href="#form3"]').tab('show');
			$('html, body').animate({scrollTop:$('#form-steps').offset().top}, 1000);
			//markTarget('form-step-2');
                        traffic('edenga.ru', '3');
		}
		showBzzz = false;
                setcookies();
	});
	
	$('#form-send').click(function(){
		if (validate()) {
                        $('input[name="step"]').val('3');
			$('#form-modal').show();
			send_form(true, '/lk/');
			//markTarget('form-step-3');
                        window.location = '/lk/';
		}
		showBzzz = false;
                setcookies();             
	});
	
	$('select[name="reg_type"]').change(function(){
		if ($(this).val() == '0') {
			$('.reg_same[value="1"]').prop('checked', true);
			$('#reg_same').hide();
			$('#reg_address').hide();
			$('#reg_address').prop('disabled', true);
		}
		else $('#reg_same').show();
	}).change();
	
	$('.reg_same').change(function(){
		if ($('.reg_same:checked').val() == '1' || $('select[name="reg_type"]').val() == '0') {
			$('#reg_address').prop('disabled', true);
			$('#reg_address').hide();
		}
		else {
			$('#reg_address').prop('disabled', false);
			$('#reg_address').show();
		}
	}).change();
        $('#passport').blur(function(){
            var pass = $('#passport').val().split(' ');
            $('#passport-s').val(pass[0]);
            $('#passport-n').val(pass[1]);
        });        
});
</script>
<?php require 'templates/common/js.php'; ?>
<?php
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
?>

<?php
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
?>
<?php require 'footer.php'; ?>