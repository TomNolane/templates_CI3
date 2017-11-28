<?php 
if(!isset($my_title))
{
    $my_title = 'Заполните анкету!';
}  
require 'header.php'; ?>

<link href="/templates/dengimo/css/form.css?ver=1" rel="stylesheet" media="screen">
<link href="https://cdn.jsdelivr.net/jquery.suggestions/16.8/css/suggestions.css" type="text/css" rel="stylesheet" />
<link href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
<link href="/modules/poshytip-1.2/src/tip-twitter/tip-twitter.css" rel="stylesheet">

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
            $region_name = 'Москва';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Москва';
        }
    }else{
        $region_name = 'Москва';
        $city_name = 'Москва';
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
    $ad_id = '1'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '1';
}
?>

<div class="container">

<section class="steps">
<div class="row">
	<div class="col-xs-12">
		<div class="form-steps-line">
			<div class="form-steps-green-line">
		<div class="row" role="tablist" id="form-steps">
			<div class="col-xs-2 col-xs-offset-3 text-center" role="presentation">
				<a href="#form1" aria-controls="form1" role="tab"><span class="btn btn-circle" id="step1">1</span></a>
			</div>
			<div class="col-xs-2 text-center" role="presentation">
				<a href="#form2" aria-controls="form1" role="tab"><span class="btn btn-circle off" id="step2">2</span></a>
			</div>
			<div class="col-xs-2 text-center" role="presentation">
				<a href="#form3" aria-controls="form1" role="tab"><span class="btn btn-circle off" id="step3">3</span></a>
			</div>
		</div>
			</div>
		</div>
	</div>
</div>
</section>

<section class="steps">
<div class="row">
	<div class="col-sm-8 col-sm-offset-2 col-xs-12">
		<h1>Заполните свои личные данные</h1>
	</div>
</div>
</section>

<section class="form">
<div class="row">
	<div class="col-md-8 col-md-offset-1 col-xs-12">
		<form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
        <input type="hidden" name="display" id="display" value="0">





			<input type="hidden" name="referer" value="<?=$referer?>">
			<input type="hidden" name="id" value="">
            <input type="hidden" name="step" value="1">
            <input type="hidden" name="ad_id" value="<?=$ad_id?>"> 
				
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="form1">
					<?php require 'form1.php'; ?>                                    
					<div class="pull-right"><a class="btn btn-next" id="next">Далее <i class="fa fa-caret-right"></i></a></div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="form2">
					<?php require('form2.php'); ?>
					<div class="clearfix">&nbsp;</div>
					<div class="pull-right"><a class="btn btn-next" id="next2">Далее <i class="fa fa-caret-right"></i></a></div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="form3">
					<?php require('form3.php'); ?>
					<div class="row">
						<div class="col-sm-8 col-sm-offset-4 col-xs-12">
                                                    <!--a href="#doiModal" class="btn btn-block" id="form-send" data-toggle="modal" data-target="#doiModal" style="padding: 13px;" onclick="yaCounter39556840.reachGoal('popup'); return true;">Отправить заявку</a-->
                                                    <a class="btn btn-block" id="form-send" style="padding: 13px;">Отправить заявку</a>
                                                </div>
					</div>
				</div>
			</div>
                        <br/>
		</form>
	</div>
</div>
</section>

<section class="triggers hidden-xs hidden-sm">
<div class="row">
	<div class="col-sm-2 col-sm-offset-2">
		<img src="/templates/dengimo/img/form/t1.png">
		<p>Ваши персональные данные надёжно защищены</p>
	</div>
	<div class="col-sm-2">
		<img src="/templates/dengimo/img/form/t2.png">
		<p>Удобное получение денег</p>
	</div>
	<div class="col-sm-2">
		<img src="/templates/dengimo/img/form/t3.png">
		<p>Принимаем заявки с любой кредитной историей</p>
	</div>
	<div class="col-sm-2">
		<img src="/templates/dengimo/img/form/t4.png">
		<p>Деньги Вас ждут прямо сейчас</p>
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
                                        <li>Я даю свое согласие на регистрацию в проекте dengimo.ru и получение новостей проекта. Я уведомлен(а) о том, что информация, переданная мною по сети Интернет, может стать доступной третьим лицам, и я освобождаю администрацию dengimo.ru от ответственности, в случае, если указанные мною сведения станут доступными третьим лицам.</li>		
                                        <li>В целях принятия одним из МФО-партнеров dengimo.ru решения о заключении договора займа я даю им свое согласие на:
                                            <ul>
                                                <li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно на сбор и проверку достоверности представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных данных в целях продвижения услуг dengimo.ru на рынке с помощью средств связи, равно как продвижение услуг dengimo.ru и/или услуг (товаров, работ) третьих лиц-партнеров dengimo.ru.</li>
                                                <li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004 г. № 218-ФЗ "О кредитных историях" от любых организаций, осуществляющих в соответствии с действующим законодательством формирование, обработку и хранение такой информации. Полученная информация предназначена для внутреннего использования МФО-партнеров dengimo.ru. Настоящие согласия даны мной на неопределенный срок.</li>
                                            </ul>
                                        <li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную дату и обязуюсь незамедлительно уведомить dengimo.ru в случае изменения указанных мной сведений, а также о любых обстоятельствах, способных повлиять на выполнение мной или МФО-партнеров dengimo.ru обязательств по займу, который может быть предоставлен на основании заявки.</li>
                                    </ol>
				</div>
			</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"> Закрыть </button>
                        </div>
		</div>
	</div>
</div>

<script src="/templates/dengimo/js/validate.js?ver=11"></script>
<script src="/modules/poshytip-1.2/src/jquery.poshytip.min.js"></script>
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
    
    var time = 0;
    var time1 = 0;
    var time2 = 0;
    var time3 = 0;
    var timer = setInterval(function() {
        time++;
    }, 2000);    
    
  var lang=0;  
  $('#f, #i, #o, #passport_who, #birthplace, #city, #reg_city, #street, #reg_street, #work_occupation, #work_experience, #work_region, #work_city, #work_street').on('keyup keypress', function(e) {
      if($(this).val().match(/([a-zA-Z]+)/)){
          lang++;
            var input = $(this),
            text = input.val().replace(/[^а-яёА-ЯЁ0-9-_\s]/g, "");
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
  $('#email').on('keyup keypress', function(e) {
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
    defaultDate: "01/01/1998",
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
			$('#step2').removeClass('off');
			$('.form-steps-green-line').addClass('step2');
			$('.form-steps-line').show();
			$('#form-steps a[href="#form2"]').tab('show');
			$('html, body').animate({scrollTop:$('#form-steps').offset().top}, 1000);
			markTarget('form-step-1');
                        //var date = new Date(new Date().getTime() + 7 * 24 * 60 * 60 * 1000);
                        //setcookie('pixel', '1', date.toUTCString());
                        time1=time;
                        time=0; 
                        
                        oSpP.push("i", $('#i').val());
                        oSpP.push("o", $('#o').val());
                        oSpP.push("email", $('#email').val());
                        traffic('dengimo.ru', '2');
		}
		showBzzz = false;
		$('.reg_same').change();
                setcookie('amount', $('#amount2').val());
                setcookie('i', $('#i').val());
		setcookies();
		$('select[name="reg_type"]').change();
	});
	
	$('#next2').click(function(){
		if (validate2()) {
                        $('input[name="step"]').val('2');
			send_form();
			$('#step3').removeClass('off');
			$('.form-steps-green-line').addClass('step3');
			$('.form-steps-line').show();
			$('#form-steps a[href="#form3"]').tab('show');
			$('html, body').animate({scrollTop:$('#form-steps').offset().top}, 1000);
			markTarget('form-step-2');
                        time2=time;                     
                        time=0;
                        traffic('dengimo.ru', '3');
                    }
		showBzzz = false;
		setcookies();
	});
	
	$('#form-send').click(function(){
            $('#form-send').html('Обработка заявки <span class="glyphicon glyphicon-refresh glyphicon-spin"></span>');
            //$('#form-send').addClass('disabled');
		if (validate()) {
                        $('input[name="step"]').val('3');
			$('#form-modal').show();
			send_form(true, '/lk');
			markTarget('form-step-3');
                        time3=time;
                        $.ajax({
                            type: 'POST',
                            url: '/time/',
                            data: 'site=dengimo.ru&time1='+time1+'&time2='+time2+'&time3='+time3,
                            success: function(data){
                                clearTimeout(timer);
                                window.location = '/lk';
                            }
                        });
		} else {
                    $('#form-send').html('Отправить заявку');
                    //$('#form-send').removeClass('disabled');
                }
		showBzzz = false;
		setcookies();
	});
	/*
	$('select[name="reg_type"]').change(function(){
		if ($(this).val() == '0') {
			$('.reg_same[value="1"]').prop('checked', true);
			$('#reg_same').hide();
			$('#reg_address').hide();
			$('#reg_address').prop('disabled', true);
		}
		else $('#reg_same').show();
	}).change();
        */
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
        
	$('#street').blur(function(){
            $('#reg_street').val( $('#street').val() );
	});
	$('#building').blur(function(){
            $('#reg_building').val( $('#building').val() );
	});
	$('#flat').blur(function(){
            $('#reg_flat').val( $('#flat').val() );
	});        
        $('#passport').blur(function(){
            var pass = $('#passport').val().split(' ');
            $('#passport-s').val(pass[0]);
            $('#passport-n').val(pass[1]);
        });
        var isMobile = false; //initiate as false
        // device detection
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
        if(isMobile){
            $('#birthdate').prop('readonly', true);
            $('#passportdate').prop('readonly', true);
        }else{
        $('.tip').poshytip({
                  className: 'tip-twitter',
                  showTimeout: 100,
                  alignTo: 'target',
                  alignX: 'right',
                  alignY: 'center',
                  offsetX: 5,
                  allowTipHover: false,
                  fade: false,
                  slide: false
          });            
        }
        traffic('dengimo.ru', '1');
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