<?php require 'header.php'; ?>

<link href="/modules/awesome-bootstrap-checkbox-master/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/jquery.suggestions/16.8/css/suggestions.css" type="text/css" rel="stylesheet" />
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
            $region_name = 'Екатеринбург';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Екатеринбург';
        }
    }else{
        $region_name = 'Екатеринбург';
        $city_name = 'Екатеринбург';
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
                case 'vk1.2':
                    $utm = '1';
                    break;      
                case 'vk1.3':
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
    $ad_id = '5'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '5';
}
?>

<style>
#ya-rtb{display: none;}
h1 {
	font-size:34px;
    margin:25px 0 5px;
}
p.descr{
	color:#a9a9a9;
	font-size:18px;
	font-weight:bold;
	text-align:center;
}
label span{
	color:red;
}
/* .help-block {
	font-size:15px;
	font-weight:normal;
	text-align:left;
} */

.help-block {
		margin-top: -15px !important; 
		color: #bc5351 !important;
		font-weight: 700;
	}
</style>

<div class="container">

<section>
	<div class="row">
		<div class="col-xs-12">
			<h1>Заполните свои личные данные</h1>
			<p class="descr">Ваши персональные данные надёжно защищены <i class="fa fa-lock fa-lg"></i></p>
				<ul class="nav nav-tabs text-center" id="form-steps">
					<li role="presentation" class="active"><a href="#form1" id="step1">Личные данные</a></li>
					<li role="presentation" class="disabled"><a href="#form2" id="step2">Паспортные данные</a></li>
					<li role="presentation" class="disabled"><a href="#form3" id="step3">Работа</a></li>
				</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
                <input type="hidden" name="referer" value="<?=$referer?>">
                <input type="hidden" name="id" value="">  
                <input type="hidden" name="step" value="1">
                <input type="hidden" name="ad_id" value="<?=$ad_id?>">
					<div class="tab-content">
						<div id="form1" class="tab-pane fade in active"> 
                        <span class="form-sum-value"></span>
							<?php require 'form1.php'; ?>
							<div class="col-sm-offset-4 col-sm-8">
								<div class="text-center">
									<a class="btn btn-primary btn-next" id="next">Далее <i class="fa fa-chevron-right"></i></a></div>
							</div>
						</div>
						<div id="form2" class="tab-pane fade">
							<?php require('form2.php'); ?>
							<div class="clearfix">&nbsp;</div>
                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-4"><div class="pull-left"><a class="btn btn-primary btn-next" id="back"><i class="fa fa-arrow-left"></i> Назад</a></div></div>
                                    <div class="col-md-4"><div class="pull-right"><a class="btn btn-primary btn-next" id="next2">Далее <i class="fa fa-arrow-right"></i></a></div></div>
                            </div>
							<div class="clearfix"></div>
						</div>
						<div id="form3" class="tab-pane fade">
							<?php require('form3.php'); ?>
							<div class="row">
								<div class="col-sm-8 col-sm-offset-4 col-xs-12 text-center"><a class="btn btn-primary btn-header" id="form-send">Оформить заявку</a></div>
							</div>
						</div>
					</div>
				<div class="clearfix">&nbsp;</div>
			</form>
		</div>
	</div>
</section>

<div class="clearfix">&nbsp;</div>

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
                                        <li>Я даю свое согласие на регистрацию в проекте godzaim.ru и получение новостей проекта. Я уведомлен(а) о том, что информация, переданная мною по сети Интернет, может стать доступной третьим лицам, и я освобождаю администрацию godzaim.ru от ответственности, в случае, если указанные мною сведения станут доступными третьим лицам.</li>		
                                        <li>В целях принятия одним из МФО-партнеров godzaim.ru решения о заключении договора займа я даю им свое согласие на:
                                            <ul>
                                                <li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно на сбор и проверку достоверности представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных данных в целях продвижения услуг godzaim.ru на рынке с помощью средств связи, равно как продвижение услуг godzaim.ru и/или услуг (товаров, работ) третьих лиц-партнеров godzaim.ru.</li>
                                                <li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004 г. № 218-ФЗ "О кредитных историях" от любых организаций, осуществляющих в соответствии с действующим законодательством формирование, обработку и хранение такой информации. Полученная информация предназначена для внутреннего использования МФО-партнеров godzaim.ru. Настоящие согласия даны мной на неопределенный срок.</li>
                                            </ul>
                                        <li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную дату и обязуюсь незамедлительно уведомить godzaim.ru в случае изменения указанных мной сведений, а также о любых обстоятельствах, способных повлиять на выполнение мной или МФО-партнеров godzaim.ru обязательств по займу, который может быть предоставлен на основании заявки.</li>
                                    </ol>
				</div>
			</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"> Закрыть </button>
                        </div>
		</div>
	</div>
</div>
<script src="/templates/godzaim/js/validate.js?ver=2"></script>
<script src="/modules/poshytip-1.2/src/jquery.poshytip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="/modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.suggestions/16.8/js/jquery.suggestions.min.js"></script>
<script src="/templates/godzaim/js/settings.js?ver=1"></script>
<script>
    $(document).ready(function(){
        traffic('godzaim.ru', '1');
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