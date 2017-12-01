<?php 
if(!isset($my_title))
{
    $my_title = 'Заполните анкету!';
}  

require 'header.php'; 

echo '<style>';
require "modules/awesome-bootstrap-checkbox-master/awesome-bootstrap-checkbox.css"; 
echo '</style>'; 
echo '<style>';
require "templates/vkredito/css/suggestions.min.css"; 
echo '</style>';
echo '<style>';
echo '.tip-twitter {
	opacity:0.8;
	z-index:1000;
	text-align:left;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	padding:8px 8px;
	max-width:200px;
	color:#fff;
	background-color:#000;
	/**
	 * - If you set a background-image, border/padding/background-color will be ingnored.
	 *   You can set any padding to .tip-inner instead if you need.
	 * - If you want a tiled background-image and border/padding for the tip,
	 *   set the background-image to .tip-inner instead.
	 */
}
.tip-twitter .tip-inner {
	font:bold 11px/14px \'Lucida Grande\',sans-serif;
}

/* Configure an arrow image - the script will automatically position it on the correct side of the tip */
.tip-twitter .tip-arrow-top {
	margin-top:-5px;
	margin-left:-5px; /* approx. half the width to center it */
	top:0;
	left:50%;
	width:9px;
	height:5px;
	background:url(/templates/vkredito/img/tip-twitter_arrows.gif) no-repeat;
}
.tip-twitter .tip-arrow-right {
	margin-top:-4px; /* approx. half the height to center it */
	margin-left:0;
	top:50%;
	left:100%;
	width:5px;
	height:9px;
	background:url(/templates/vkredito/img/tip-twitter_arrows.gif) no-repeat -9px 0;
}
.tip-twitter .tip-arrow-bottom {
	margin-top:0;
	margin-left:-5px; /* approx. half the width to center it */
	top:100%;
	left:50%;
	width:9px;
	height:5px;
	background:url(/templates/vkredito/img/tip-twitter_arrows.gif) no-repeat -18px 0;
}
.tip-twitter .tip-arrow-left {
	margin-top:-4px; /* approx. half the height to center it */
	margin-left:-5px;
	top:50%;
	left:0;
	width:5px;
	height:9px;
	background:url(/templates/vkredito/img/tip-twitter_arrows.gif) no-repeat -27px 0;
}';
echo '</style>';
?>



<!-- <link href="/modules/awesome-bootstrap-checkbox-master/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/jquery.suggestions/16.8/css/suggestions.css" type="text/css" rel="stylesheet" />
<link href="/modules/poshytip-1.2/src/tip-twitter/tip-twitter.css" rel="stylesheet"> -->
<style>
	#ya-rtb {
		display: none;
	}
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

	<div class="container">

		<section class="form">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<h1 class="title">Заполните свои личные данные</h1>
					<ul class="nav nav-tabs" id="form-steps">
						<li role="presentation" class="active hidden-xs">
							<a href="#form1" id="step1">Личные данные</a>
						</li>
						<li role="presentation" class="disabled hidden-xs">
							<a href="#form2" id="step2">Паспортные данные</a>
						</li>
						<li role="presentation" class="disabled hidden-xs">
							<a href="#form3" id="step3">Работа</a>
						</li>
					</ul>

					<div class="col-md-8 col-xs-12">
						<form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
							<input type="hidden" name="display" id="display" value="0">
							<input type="hidden" name="referer" value="<?=$referer?>">
							<input type="hidden" name="id" value="">
							<input type="hidden" name="step" value="1">
							<input type="hidden" name="ad_id" value="<?=$ad_id?>">
							<div class="tab-content">
								<div id="form1" class="tab-pane fade in active">
									<?php require 'form1.php'; ?>
									<div class="pull-right">
										<a class="btn btn-primary btn-next" id="next">Далее
											<i class="fa fa-arrow-right"></i>
										</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div id="form2" class="tab-pane fade">
									<?php require('form2.php'); ?>
									<div class="clearfix">&nbsp;</div>
									<div class="form-group">
										<div class="col-md-4 col-md-offset-4 hidden">
											<div class="pull-left">
												<a class="btn btn-primary btn-next" id="back">
													<i class="fa fa-arrow-left"></i> Назад</a>
											</div>
										</div>
										<div class="col-md-12">
											<div class="pull-right">
												<a class="btn btn-primary btn-next" id="next2">Далее
													<i class="fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div id="form3" class="tab-pane fade">
									<?php require('form3.php'); ?>
									<div class="row">
										<div class="col-sm-8 col-sm-offset-4 col-xs-12">
											<a class="btn btn-primary btn-header" id="form-send">Оформить заявку</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 text-center icon hidden-xs">
						<div class="text-center icon-text col-md-12 col-sm-4 col-xs-4">
							<img src="/templates/vkredito/img/advantage/4.png" alt="Ваши персональные данные надёжно защищены" class="img-rounded">
							<p class="hidden-xs">Ваши персональные данные надежно защищены</p>
						</div>
						<div class="text-center icon-text col-md-12 col-sm-4 col-xs-4" style="padding: 25px;">
							<img src="/templates/vkredito/img/steps/1.png" alt="Удобное получение денег" class="img-rounded">
							<p class="hidden-xs">Удобное получение денег</p>
						</div>
						<div class="text-center icon-text col-md-12 col-sm-4 col-xs-4" style="padding: 45px;">
							<img src="/templates/vkredito/img/steps/3.png" alt="Принимаем заявки с любой кредитной историей" class="img-rounded">
							<p class="hidden-xs">Деньги ждут вас</p>
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
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h1 class="modal-title hidden-xs" id="tosModalLabel">Политика конфиденциальности</h1>
					<h2 class="modal-title visible-xs-block" id="tosModalLabel">Политика конфиденциальности</h2>
					<p>Заполняя заявку на кредит Вы соглашаетесь с нашими правилами использования данных</p>
				</div>
				<div class="modal-body">
					<div class="row">
						<ol>
							<li>Я даю свое согласие на регистрацию в проекте vkredito.ru и получение новостей проекта. Я уведомлен(а) о том, что информация,
								переданная мною по сети Интернет, может стать доступной третьим лицам, и я освобождаю администрацию vkredito.ru от
								ответственности, в случае, если указанные мною сведения станут доступными третьим лицам.</li>
							<li>В целях принятия одним из МФО-партнеров vkredito.ru решения о заключении договора займа я даю им свое согласие на:
								<ul>
									<li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно на сбор и проверку достоверности
										представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных данных
										в целях продвижения услуг vkredito.ru на рынке с помощью средств связи, равно как продвижение услуг vkredito.ru
										и/или услуг (товаров, работ) третьих лиц-партнеров vkredito.ru.</li>
									<li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004 г. № 218-ФЗ "О кредитных
										историях" от любых организаций, осуществляющих в соответствии с действующим законодательством формирование, обработку
										и хранение такой информации. Полученная информация предназначена для внутреннего использования МФО-партнеров vkredito.ru.
										Настоящие согласия даны мной на неопределенный срок.</li>
								</ul>
								<li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную дату и обязуюсь незамедлительно
									уведомить vkredito.ru в случае изменения указанных мной сведений, а также о любых обстоятельствах, способных повлиять
									на выполнение мной или МФО-партнеров vkredito.ru обязательств по займу, который может быть предоставлен на основании
									заявки.</li>
						</ol>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal"> Закрыть </button>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>