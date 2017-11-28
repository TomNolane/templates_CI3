<?php 
if(!isset($my_title))
{
	$my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Rublimo';
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
if ($geo)
    {
        if (isset($geo['region'])){
            $region_name = $geo['region'];
        }else{
            $region_name = 'Казань';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Казань';
        }
    }else{
        $region_name = 'Казань';
        $city_name = 'Казань';
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
    $ad_id = '4'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '4';
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
									<a href="#form1" aria-controls="form1" role="tab">
										<span class="btn btn-circle" id="step1">1</span>
									</a>
								</div>
								<div class="col-xs-2 text-center" role="presentation">
									<a href="#form2" aria-controls="form1" role="tab">
										<span class="btn btn-circle off" id="step2">2</span>
									</a>
								</div>
								<div class="col-xs-2 text-center" role="presentation">
									<a href="#form3" aria-controls="form1" role="tab">
										<span class="btn btn-circle off" id="step3">3</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<center><h3 class="htitle"><b>Заполните свои личные данные</b></h3></center>
					<h3 class="hidden">Заполните свои паспортные данные</h3>
					<h3 class="hidden">Заполните свои личные данные</h3>
				</div>
			</div>
		</section>
		<section class="hidden-sm hidden-xs">
			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center">
					<div class="secure">
						<div class="secure-body">
							<div class="secure-item">
								<img src="/templates/rublimo/img/form/lock.png" alt="lock" id="form-1">
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
		</section>
		<section class="form">
			<div class="row">
				<div class="col-md-10 col-xs-12">
					<form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
					<input type="hidden" name="referer" value="<?=$referer?>">
					<input type="hidden" name="id" value="">
					<input type="hidden" name="step" value="1">
					<input type="hidden" name="ad_id" value="<?=$ad_id?>"> 
					<!-- <input type="hidden" id="amount" name="amount" value="<?php //if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['amount'])) echo '20000'; else echo $_POST['amount'];  ?>" />  -->
						<input type="hidden" name="display" value="1" class="visible-xs">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="form1">
								<?php require 'form1.php'; ?>
								<div class="clearfix"></div>
							</div>
							<div role="tabpanel" class="tab-pane" id="form2">
								<?php require('form2.php'); ?>
								<div class="clearfix">&nbsp;</div>
								<div class="shadow pull-right">
									<a class="btn btn-next" id="next2">Далее
										<i class="fa fa-caret-right"></i>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
					</form>
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
				</div>
			</div>
		</section>
		<section class="triggers hidden-xs hidden-sm" id="display-none">
			<div class="row">
				<div class="col-sm-2 col-sm-offset-2">
					<img src="/templates/rublimo/img/form/t1.png" alt="Удобное получение денег">
					<p>Удобное получение денег</p>
				</div>
				<div class="col-sm-2">
					<img src="/templates/rublimo/img/form/t2.png" alt="Принимаем заявки с любой кредитной историей">
					<p>Принимаем заявки с любой кредитной историей</p>
				</div>
				<div class="col-sm-2">
					<img src="/templates/rublimo/img/form/t3.png" alt="Получение займа онлайн">
					<p>Получение займа онлайн</p>
				</div>
				<div class="col-sm-2">
					<img src="/templates/rublimo/img/form/t4.png" alt="Деньги Вас ждут прямо сейчас">
					<p>Деньги Вас ждут прямо сейчас</p>
				</div>
			</div>
		</section>
		<div id="display-none">
		<div class="hidden-xs" id="form-3">
			<div class="call-to-action-container section-container section-container-image-bg">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
							<h3>
								Оформление заявки на кредит
							</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 great-support-box wow fadeInLeft">
							<div class="great-support-box-text great-support-box-text-left">
								<p class="medium-paragraph">
									Чтобы получить микрокредит нужно пройти процедуру оформления заявки. Она включает в себя несколько этапов. На прохождение
									процедуры вам понадобиться максимум пятнадцать минут. Сервис RUBLIMO предложит актуальные предложения от самых лучших
									микрокредитных организаций. Вы сможете выбрать наиболее удобный для вас вариант.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="call-to-action-container section-container section-container-image-bg">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
							<h3>
								Как получить микрозайм?
							</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 great-support-box wow fadeInLeft">
							<div class="great-support-box-text great-support-box-text-left">
								<p class="medium-paragraph">Заявка на займ оформляется быстро. Для прохождения процедуры вам необходимо:</p>
								<ul>
									<li>выбрать параметры кредитования (сумму и срок выплаты);</li>
									<li>указать имя фамилию и отчество;</li>
									<li>заполнить поле «дата рождения»;</li>
									<li>указать свой номер мобильного телефона;</li>
									<li>написать адрес своей электронной почты;</li>
									<li>указать информацию о своей кредитной истории.</li>
								</ul>
								<p class="medium-paragraph">После нажатия кнопки "продолжить" появятся следующие поля, которые также нужно заполнить. Введите свои паспортные
									данные: серия, номер паспорта, и дату его выдачи. Ниже нужно заполнить поля с информацией о вашей регистрации и
									месте жительства. Обязательно указать совпадают они или нет. После этого нужно снова нажать кнопку «Далее».</p>
								<p class="medium-paragraph">Теперь заполните поля с информацией о месте вашей работе. Необходимо указать вид трудоустройства, название компании
									и вашу должность. Кроме этого, следует вписать рабочий номер телефона, а также указать размер своего стажа и зарплату
									в рублях. Ниже будут поля, в которые нужно вписать информацию о местонахождении компании, где вы работаете.</p>
								<p class="medium-paragraph">После отправления заявки необходимо подтвердить адрес своей электронной почты. Для этого нажмите кнопку с соответствующей
									надписью. Далее действуйте согласно инструкциям, указанным в письме.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="call-to-action-container section-container section-container-image-bg">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
							<h3>
								Сотрудничество с RUBLIMO безопасное и быстрое
							</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 great-support-box wow fadeInLeft">
							<div class="great-support-box-text great-support-box-text-left">
								<p class="medium-paragraph">Наш сервис надежно защищает ваши персональные данные. Система защиты очень эффективная. Мы гарантируем, что информация
									о вас не будет передаваться третьим лицам. Используемые сервисом технологии позволяют осуществлять быструю обработку
									данных. Ваша онлайн заявка на займ будет быстро рассмотрена в режиме реального времени. Наша система регулярно обновляется
									и совершенствуется.</p>
								<p class="medium-paragraph">На сайте портала RUBLIMO можно прочитать массу полезных материалов о микрокредитах в России и за рубежом. С нашей
									помощью вы сможете первым узнавать наиболее актуальные новости о различных аспектах кредитования. Поэтому пользоваться
									порталом RUBLIMO удобно, выгодно и практично.</p>
								<p class="medium-paragraph">Наш сервис создан для помощи людям нуждающимся в быстрой кредитной поддержке. RUBLIMO дает возможность подать заявку
									на займ и быстро получить необходимую вам сумму. Оформить микрозайм стало еще проще. Нет нужды самостоятельно мониторить
									условия кредитования в разных микрокредитных организациях. Мы поможем вам подобрать наиболее выгодные и актуальные
									предложения от лидеров рынка.</p>
								<p class="medium-paragraph">Пользоваться услугами RUBLIMO можно находясь на отдыхе, в магазине, ресторане и автомастерской и других местах. Зайдя
									на наш сайт со смартфона или планшета, можно быстро получить недостающие средства в течение 15 минут.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<div class="clearfix">&nbsp;</div>
		<!-- Modal -->
		<div class="modal fade" id="tosModal" tabindex="-1" role="dialog" aria-labelledby="tosModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h1 class="modal-title hidden-xs" id="tosModalLabel">Политика конфиденциальности</h1>
						<h3 class="modal-title visible-xs-block" id="tosModalLabel">Политика конфиденциальности</h3>
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
											представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных
											данных в целях продвижения услуг rublimo.ru на рынке с помощью средств связи, равно как продвижение услуг rublimo.ru
											и/или услуг (товаров, работ) третьих лиц-партнеров rublimo.ru.</li>
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
<?php require 'footer.php'; ?>