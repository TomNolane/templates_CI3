<?php 
if(!isset($my_title))
{
	$my_title = 'Заполните анкету!';
}  
require 'header.php'; ?>

<link href="/templates/rublimo/css/form.min.css" rel="stylesheet" media="screen">
<link href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/jquery.suggestions/16.8/css/suggestions.css" type="text/css" rel="stylesheet" />
<link href="/modules/poshytip-1.2/src/tip-twitter/tip-twitter.css" rel="stylesheet">
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
					<h3 id="display-none">Заполните свои паспортные данные</h3>
					<h3 id="display-none">Заполните свои личные данные</h3>
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
		<script src="/modules/jquery/jquery-1.11.3.min.js"></script>
		<script src="/templates/rublimo/js/validate.min.js?ver=4"></script>
		<script src="/modules/poshytip-1.2/src/jquery.poshytip.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		<script src="/modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>
		<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.suggestions/16.8/js/jquery.suggestions.min.js"></script>
		<script src="/templates/rublimo/js/settings.min.js?ver=3"></script>
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
                                                <img src="/templates/common/img/popup.jpg" alt="popup">                                             
                                                <h3>'.$popup_text.'</h3>
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