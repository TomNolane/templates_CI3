<?php require 'header.php'; ?>

<link href="/templates/dengoman/css/form.css?ver=2" rel="stylesheet" media="screen">
<link href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/jquery.suggestions/16.8/css/suggestions.css" type="text/css" rel="stylesheet" />
<link href="/modules/poshytip-1.2/src/tip-twitter/tip-twitter.css" rel="stylesheet">
<style>#ya-rtb{display: none;}</style>
<?php
// IP
$this->load->helper('ip');
// GEO
require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
$gb = new IPGeoBase();
$geo = $gb->getRecord(IP::$ip);
if ($geo){
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
    $referer = $_SERVER['HTTP_REFERER'].'&session';
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
    $ad_id = '2'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '2';
}
?>

<div class="container">

<h1 id="pageh">Заполните свои личные данные</h1>

<section class="steps">
<div class="row">
	<div class="col-xs-12 text-center">
		<div class="row" role="tablist" id="form-steps" role="presentation">
			<span>
                            <a href="#form1" aria-controls="form1" role="tab"><span class="btn" id="step1">Личные <span class="hidden-xs">данные</span></span></a>
                            <a href="#form2" aria-controls="form1" role="tab"><span class="btn off" id="step2">Паспорт<span class="hidden-xs">ные данные</span></span></a>
                            <a href="#form3" aria-controls="form1" role="tab"><span class="btn off" id="step3">Работа</span></a>
			</span>
		</div>
	</div>
</div>
</section>

<section class="white">
<div class="row">
	<div class="col-sm-9">
		<form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
			<input type="hidden" name="referer" value="<?=$referer?>">
			<input type="hidden" name="id" value="" class="sp_push_custom_data">
                        <input type="hidden" name="step" value="1">
                        <input type="hidden" name="ad_id" value="<?=$ad_id?>">
			<?php
			//if (!empty($_REQUEST['ad_id']))
			//echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">';
			?>
				
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="form1">
					<?php require 'form1.php'; ?>
                                        <div class="row hidden-xs">
                                            <div class="col-md-8 col-md-offset-4 great-support-box wow fadeInLeft">
                                                <div class="great-support-box-text great-support-box-text-left">
                                                    <p class="help-block">Поля отмеченные * обязательны для заполнения</p>
                                                </div>
                                            </div>                    
                                        </div>
					<div class="pull-right"><a class="btn btn-next" id="next">Далее&nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="form2">
					<?php require('form2.php'); ?>
                                        <p class="help-block">Поля отмеченные * обязательны для заполнения</p>
					<div class="clearfix">&nbsp;</div>
					<div class="pull-right"><a class="btn btn-next" id="next2">Далее&nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="form3">
					<?php require('form3.php'); ?>
                                        <p class="help-block">Поля отмеченные * обязательны для заполнения</p>
					<div class="row">
						<div class="text-center">
                                                    <a class="btn btn-ok btn-block" id="form-send">Отправить заявку</a>
                                                </div>
					</div>
				</div>                                
			</div>
		</form>
	</div>
    
	<div class="col-sm-3 hidden-xs text-center triggers">
		<div>
			<img src="/templates/dengoman/img/form/1.png">
			<p>Ваши персональные<br>данные надёжно<br>защищены</p>
		</div>
		<div>
			<img src="/templates/dengoman/img/form/2.png">
			<p>Удобное получение<br>денег</p>
		</div>
		<div>
			<img src="/templates/dengoman/img/form/3.png">
			<p>Круглосуточная<br>работа</p>
		</div>
		<div>
			<img src="/templates/dengoman/img/form/4.png">
			<p>Деньги ждут<br>вас</p>
		</div>
	</div>
</div>
</section>
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
                                        <li>Я даю свое согласие на регистрацию в проекте dengoman.ru и получение новостей проекта. Я уведомлен(а) о том, что информация, переданная мною по сети Интернет, может стать доступной третьим лицам, и я освобождаю администрацию dengoman.ru от ответственности, в случае, если указанные мною сведения станут доступными третьим лицам.</li>		
                                        <li>В целях принятия одним из МФО-партнеров dengoman.ru решения о заключении договора займа я даю им свое согласие на:
                                            <ul>
                                                <li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно на сбор и проверку достоверности представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных данных в целях продвижения услуг dengoman.ru на рынке с помощью средств связи, равно как продвижение услуг dengoman.ru и/или услуг (товаров, работ) третьих лиц-партнеров dengoman.ru.</li>
                                                <li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004 г. № 218-ФЗ "О кредитных историях" от любых организаций, осуществляющих в соответствии с действующим законодательством формирование, обработку и хранение такой информации. Полученная информация предназначена для внутреннего использования МФО-партнеров dengoman.ru. Настоящие согласия даны мной на неопределенный срок.</li>
                                            </ul>
                                        <li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную дату и обязуюсь незамедлительно уведомить dengoman.ru в случае изменения указанных мной сведений, а также о любых обстоятельствах, способных повлиять на выполнение мной или МФО-партнеров dengoman.ru обязательств по займу, который может быть предоставлен на основании заявки.</li>
                                    </ol>
				</div>
			</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"> Закрыть </button>
                        </div>
		</div>
	</div>
</div>

<script src="/templates/dengoman/js/validate.js?ver=3"></script>
<script src="/modules/poshytip-1.2/src/jquery.poshytip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="/modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.suggestions/16.8/js/jquery.suggestions.min.js"></script>
<script src="/templates/dengoman/js/settings.js?ver=9"></script>

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