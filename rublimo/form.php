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
	<!--Start of Modal --> 
<div class="modal__popup">
    <input id="modal__trigger" type="checkbox" />
    <label for="modal__trigger"></label>
    <div class="modal__overlay" role="dialog" aria-labelledby="modal__title" aria-describedby="modal_desc">
        <div class="modal__wrap text-center"> 
            <h2 id="modal__title" class="header1">Подтвердите адрес вашей электронной почты</h2>
          <hr class="hr_black">
          
            <p class="text" id="modal__desc"><span id="form_name"></span> на указанный email было отправлено письмо.</p>
          <p class="text2">Подтвердите свою почту и учавствуйте в розыгрыше iPhone XS уже сегодня</p>
            
          <img class='img_iphone img-responsive' src='//zaimhome.ru/templates/common/img/iphone3.png'>
          <div class="text-center"><input type="button" class="btn_modall" id="btn_modall" value="Закрыть"></div>
        </div>
    </div>
</div>
<!--End of Modal   -->
	<style>
.modal__popup {
  position: absolute;
  background: transparent;
  display: block;
}
.modal__popup > label {
  background: #FFD300;
  border: 1px solid #f0c600;
  border-radius: .2em;
  color: #000000;
  cursor: pointer;
  display: none;
  font-weight: bold;
  padding: 0.75em 1.5em;
  text-shadow: 1px 1px 1px #fff;
  transition: all 0.55s;
}
.modal__popup > label:hover {
  -webkit-transform: scale(0.97);
          transform: scale(0.97);
}
.btn_modall {
  border-radius: 25px;
  background-color: rgb(48, 104, 216);
  width: 14.3em;
  height: 4.3em;
  margin: 30px auto 0;
  font-size: 1.6em;
  color: #fff;
}
.modal__overlay {
  background: #fff;
  outline: 2px solid;
  bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  text-align: center;
  text-shadow: none;
  top: 0; 
}
.header1 {
  color: rgb(0, 0, 0);
  font-weight: bold;
  line-height: 1.634;
  text-align: center;
}
.modal__wrap { 
  position: relative;
  margin: 0 auto; 
  width: 70%;
  height: 100%;
}
.text2 {
  font-weight: bold;
}
@media (max-width: 800px) { 
  input:checked ~ .modal__overlay {
    opacity: 1;
    -webkit-transform: scale(.9);
            transform: scale(.9);
  }
  .btn_modall {
    width: 7.3em;
    height: 2.3em;
    margin: 10px auto 0;
    font-size: 1.1em;
  }
  hr {
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .header1 {
    font-size: 1em !important;
  }
  .text, .text2 {
    font-size: .7em !important;
    padding-top: 10px;
  }
  .img_iphone {
    margin-top: 0 !important;
  }
}
@media (min-width: 801px) {
  input:checked ~ .modal__overlay {
    opacity: 1;
    -webkit-transform: scale(.7);
            transform: scale(.7);
  }
  .modal__wrap {
    margin: 20px auto 0; 
    text-align: center;
    position: relative;
  }
  h2 {
    font-size: 32px
  }
}
.modal__wrap label {
  background: #fff;
  border-radius: 50%;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  height: 3em;
  line-height: 3;
  position: absolute;
  right: -10%;
  top: 0;
  width: 3em;
}

.modal__wrap h2 {
  color: #000; 
  text-transform: uppercase;
}
.hr_black {
  height: 1px;
  background-color: rgb(0, 0, 0);
}
.modal__wrap p {
  margin: 0;
  color: #000;
  font-size: 1.2em;
  padding: 10px 20px;
  color: rgb(0, 0, 0);
  line-height: 1.418;
  text-align: center;
  -moz-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
  -webkit-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
  -ms-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
}
.modal__popup input:focus ~ label {
  -webkit-transform: scale(0.97);
          transform: scale(0.97);
}
.modal__overlay {
  display: none;
  opacity: 0;
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
  transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  z-index: 999;
}

.img_iphone {
    max-width: 70%;
    margin: 40px auto 0;
}
#modal__trigger {
  visibility: hidden;
  margin: 0;
}
</style>
<script> 
function hideModal() {
   document.querySelector("#modal__trigger").click();
   setTimeout(function () {
     document.querySelector(".modal__overlay").style.display = 'none';
    }, 1000);
};

function showModal() {
    document.querySelector(".modal__overlay").style.display = 'block';
    setTimeout(function () {
     document.querySelector("#modal__trigger").click();
        setTimeout(function () {
        hideModal();
        }, 5000);
    }, 500);
}

document.querySelector(".modal__overlay").addEventListener('click', function() { 
    hideModal();
}, false);
</script>
<?php include 'footer.php';?>