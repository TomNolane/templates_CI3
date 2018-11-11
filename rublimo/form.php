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
if($this->input->post('percent', TRUE) != '')
    $percent = $this->input->post('percent', TRUE);

if(!isset($my_title))
{
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Rublimo';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new2/php/form_header.php";
include "header.php";
?>
<div class="container">
		<div class="steps">
			<div class="row">
				<div class="col-xs-12">
					<div class="form-steps-line">
						<div class="form-steps-green-line">
							<div class="row" role="tablist" id="form-steps">
								<div class="col-xs-2 col-xs-offset-3 text-center" role="presentation">
									<a href="#form1" aria-controls="form1" role="tab">
										<span class="btn btn-circle" id="step1"></span>
									</a>
								</div>
								<div class="col-xs-2 text-center" role="presentation">
									<a href="#form2" aria-controls="form1" role="tab">
										<span class="btn btn-circle" id="step2">1</span>
									</a>
								</div>
								<div class="col-xs-2 text-center" role="presentation">
									<a href="#form3" aria-controls="form1" role="tab">
										<span class="btn btn-circle" id="step3"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section>
			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center"> 
					<h3 id="htitle">
						<b>Заполните свои личные данные</b>
					</h3> 
					<h3 class="hidden">Заполните свои паспортные данные</h3>
					<h3 class="hidden">Заполните свои личные данные</h3>
				</div>
			</div>
		</section>
		<div class="hidden-sm hidden-xs">
			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center">
					<div class="secure">
						<div class="secure-body">
							<div class="secure-item">
								<img src="/templates/rublimo/assets/img/form/lock.png" alt="lock" id="form-1">
							</div>
							<div class="secure-item">
								<span id="form-2">
									Ваши персональные данные
									<br>
									<span>надёжно защищены</span>
								</span>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="form">
			<div class="row">
				<div class="col-md-10 col-xs-12">
					<form class="form-horizontal" id="anketa" action="/lk" method="post" autocomplete="off">
						<input type="hidden" name="referer" value="<?=$referer?>">
						<input type="hidden" name="id" value="">
						<input type="hidden" name="step" value="1">
						<input type="hidden" name="ad_id" value="<?=$ad_id?>">
						<input type="hidden" name="fingerprint" id="fingerprint" value="">
						<input type="hidden" name="display" value="1" class="visible-xs">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="form1">
								<?php require 'form1.php'; ?>
								<div class="clearfix"></div>
							</div>
							<div role="tabpanel" class="tab-pane" id="form2">
								<?php require('form2.php'); ?>
								<div class="clearfix">&nbsp;</div>
								<div class="col-sm-6 col-sm-offset-6 col-xs-12">
									<div class="shadow">
										<a class="btn btn-next" id="next2">Далее
											<i class="fa fa-caret-right"></i>
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
					
						<div role="tabpanel" class="tab-pane" id="form3">
							<?php require('form3.php'); ?>
							<div class="row">
								<div class="col-sm-5 col-sm-offset-4 col-xs-12">
									<div class="shadow">
										<a class="btn btn-ok btn-block" id="form-send">Отправить заявку</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="triggers hidden">
			<div class="row">
				<div class="col-sm-2 col-sm-offset-2">
					<img src="/templates/rublimo/assets/img/form/t1.png" alt="Удобное получение денег">
					<p>Удобное получение денег</p>
				</div>
				<div class="col-sm-2">
					<img src="/templates/rublimo/assets/img/form/t2.png" alt="Принимаем заявки с любой кредитной историей">
					<p>Принимаем заявки с любой кредитной историей</p>
				</div>
				<div class="col-sm-2">
					<img src="/templates/rublimo/assets/img/form/t3.png" alt="Получение займа онлайн">
					<p>Получение займа онлайн</p>
				</div>
				<div class="col-sm-2">
					<img src="/templates/rublimo/assets/img/form/t4.png" alt="Деньги Вас ждут прямо сейчас">
					<p>Деньги Вас ждут прямо сейчас</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix">&nbsp;</div>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- rublimo --> 
	<ins class="adsbygoogle"
		style="display:block"
		data-ad-client="ca-pub-4970738258373085"
		data-ad-slot="8065296007"
		data-ad-format="auto"
		data-full-width-responsive="true"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	<!-- Modal -->
	<div class="modal fade" id="tosModal" tabindex="-1" role="dialog" aria-labelledby="tosModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h2 class="modal-title hidden-xs" id="tosModalLabel">Политика конфиденциальности</h2> 
					<p>Заполняя заявку на кредит Вы соглашаетесь с нашими правилами использования данных</p>
				</div>
				<div class="modal-body">
					<div class="row">
						<ol>
							<li>Я даю свое согласие на регистрацию в проекте rublimo.ru и получение новостей проекта. Я уведомлен(а) о том, что информация,
								переданная мною по сети Интернет, может стать доступной третьим лицам, и я освобождаю администрацию rublimo.ru от
								ответственности, в случае, если указанные мною сведения станут доступными третьим лицам.</li>
							<li>В целях принятия одним из МФО-партнеров rublimo.ru решения о заключении договора займа я даю им свое согласие на:
								<ul>
									<li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно на сбор и проверку достоверности
										представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных данных
										в целях продвижения услуг rublimo.ru на рынке с помощью средств связи, равно как продвижение услуг rublimo.ru и/или
										услуг (товаров, работ) третьих лиц-партнеров rublimo.ru.</li>
									<li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004 г. № 218-ФЗ "О кредитных
										историях" от любых организаций, осуществляющих в соответствии с действующим законодательством формирование, обработку
										и хранение такой информации. Полученная информация предназначена для внутреннего использования МФО-партнеров rublimo.ru.
										Настоящие согласия даны мной на неопределенный срок.</li>
								</ul>
								<li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную дату и обязуюсь незамедлительно
									уведомить rublimo.ru в случае изменения указанных мной сведений, а также о любых обстоятельствах, способных повлиять
									на выполнение мной или МФО-партнеров rublimo.ru обязательств по займу, который может быть предоставлен на основании
									заявки.
								</li>
						</ol>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal"> Закрыть </button>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>