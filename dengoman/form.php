<?php 
$sum = '20000'; $period = '21';
if($this->input->get('amount', TRUE) != '') 
{ 
    $sum = $this->input->get('amount', TRUE);
    if($this->input->get('amount', TRUE) >= 1000 && $this->input->get('amount', TRUE) <= 1000000)
    $sum = $this->input->get('amount', TRUE);
    
    if ($sum <= 10000) 
    { $period = '7'; } 
    else if ($sum <= 15000)
    { $period = '14'; } 
    else if ($sum <= 20000)
    { $period = '21'; } 
    else if ($sum <= 30000)
    { $period = '21'; } 
    else if ($sum <= 50000)
    { $period = '30'; } 
    else { $period = '30'; }
} 
if($this->input->post('amount', TRUE) != '')
{ 
    if($this->input->post('amount', TRUE) >= 1000 && $this->input->post('amount', TRUE) <= 1000000)
        $sum = $this->input->post('amount', TRUE);
    
    if ($sum <= 10000) 
    { $period = '7'; } 
    else if ($sum <= 15000)
    { $period = '14'; } 
    else if ($sum <= 20000)
    { $period = '21'; } 
    else if ($sum <= 30000)
    { $period = '21'; } 
    else if ($sum <= 50000)
    { $period = '30'; } 
    else { $period = '30'; }
} 
if(!isset($my_title))
{
    $my_title = 'Заполните анкету!';
}  
if($this->input->get('amount', TRUE) != '') 
{  
    if ($this->input->get('amount', TRUE) <= '10000') { 
        $percent = 95;
    } else if ($this->input->get('amount', TRUE) <= '15000') { 
        $percent = 95;
    } else if ($this->input->get('amount', TRUE) <= '20000') { 
        $percent = 95;
    } else if ($this->input->get('amount', TRUE) <= '30000') { 
        $percent = 85;
    } else if ($this->input->get('amount', TRUE) <= '50000') { 
        $percent = 77;
    } else  if ($this->input->get('amount', TRUE) <= '200000' && $this->input->get('amount', TRUE) > '50000') { 
        $percent = 65;
    } else  if ($this->input->get('amount', TRUE) <= '500000' && $this->input->get('amount', TRUE) > '200000') { 
        $percent = 58;
    } else { 
        $percent = 52;
    } 
}

if(!isset($my_title))
{
	$my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Dengoman';
	$description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}  
require 'header.php'; ?>

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
            $region_name = 'Владимир';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Владимир';
        }
    }else{
        $region_name = 'Владимир';
        $city_name = 'Владимир';
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
                <a href="#form1" aria-controls="form1" role="tab"><span class="btn" id="step1">Всего<span class="hidden-xs"></span></span></a>
                <a href="#form2" aria-controls="form1" role="tab"><span class="btn" id="step2">один <span class="hidden-xs"></span></span></a>
                <a href="#form3" aria-controls="form1" role="tab"><span class="btn" id="step3">шаг </span></a>
			</span>
		</div>
	</div>
</div>
</section>
<section class="white">
<div class="row">
	<div class="col-sm-9">
		<form class="form-horizontal" id="anketa"  method="post" autocomplete="off">
        <input type="hidden" name="referer" value="<?=$referer?>">
        <input type="hidden" name="id" value="">
        <input type="hidden" name="step" value="1">
        <input type="hidden" name="fingerprint" id="fingerprint" value="">
        <input type="hidden" name="ad_id" value="<?=$ad_id?>">
        <input type="hidden" name="display" id="display" value="0">
        <input type="hidden" id="period" name="period" value="<?php  echo $period; ?>" />
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="form1">
                    <div class="row hidden-xs">
                        <div class="col-md-8 col-md-offset-4 great-support-box wow fadeInLeft">
                            <div class="great-support-box-text great-support-box-text-left">
                                <p class="help-block">Поля отмеченные * обязательны для заполнения</p>
                            </div>
                        </div>
                    </div>
					<?php require 'form1.php'; ?>
                    <div class="row">
                    <br>
                    <div class="col-md-4"></div>
                    <div class="text-center col-md-4"><a class="btn btn-ok btn-block" id="next1">Отправить заявку</a></div>
                    <div class="col-md-4"></div>
                    </div>
					
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="form2">
                    <div class="row hidden-xs">
                        <div class="col-md-8 col-md-offset-4 great-support-box wow fadeInLeft">
                            <div class="great-support-box-text great-support-box-text-left">
                                <p class="help-block">Поля отмеченные * обязательны для заполнения</p>
                            </div>
                        </div>
                    </div>
					<?php require('form2.php'); ?> 
					<div class="clearfix">&nbsp;</div>
					<div class="text-center"><a class="btn btn-next" id="next2">Далее&nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="form3">
                    <div class="row hidden-xs">
                        <div class="col-md-8 col-md-offset-4 great-support-box wow fadeInLeft">
                            <div class="great-support-box-text great-support-box-text-left">
                                <p class="help-block">Поля отмеченные * обязательны для заполнения</p>
                            </div>
                        </div>
                    </div>
					<?php require('form3.php'); ?>
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
			<img src="/templates/dengoman/assets/img/form/1.png" alt="1.png">
			<p>Ваши персональные<br>данные надёжно<br>защищены</p>
		</div>
		<div>
			<img src="/templates/dengoman/assets/img/form/2.png" alt="2.png">
			<p>Удобное получение<br>денег</p>
		</div>
		<div>
			<img src="/templates/dengoman/assets/img/form/3.png" alt="3.png">
			<p>Круглосуточная<br>работа</p>
		</div>
		<div>
			<img src="/templates/dengoman/assets/img/form/4.png" alt="4.png">
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
<?php require 'footer.php'; ?>