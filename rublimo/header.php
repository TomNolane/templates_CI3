<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Rublimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';

	if ($this->uri->segment(1) == 'history') 
	{
		$my_title = 'Получение Кредита для Улучшения Кредитной Истории'; 
		$description = 'Мы рады предложить специальный продукт - программу создания или улучшения кредитной истории.Программа предлагается автоматически после регистрации';
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $my_title;?></title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<meta name="Description" content="<?php echo $description;?>" />
	<meta name="Keywords" content="моментальный заем, займы, онлайн, деньги" />
	<meta name="robots" content="all" />
	<meta name="copyright" lang="ru" content="Rublimo.ru" /> 
	<meta name="yandex-verification" content="5f2b2f09988764fa" />
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="Rublimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://rublimo.ru/templates/rublimo/img/atmo.png"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://rublimo.ru/" />
	<meta name="twitter:card" content="https://rublimo.ru/templates/rublimo/img/atmo.png"/>
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
	<meta name="twitter:description" content="Rublimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta name="twitter:image:src" content="https://rublimo.ru/templates/rublimo/img/atmo.png"/>
	<meta name="twitter:url" content="https://rublimo.ru/"/>
	<meta name="twitter:domain" content="rublimo.ru"/>

	<link rel="shortcut icon" type="image/png" href="/templates/rublimo/img/favicon.png" />
	<!-- CSS -->
	<?php 
		echo '<style>';
		require "templates/rublimo/css/ion.rangeSlider.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/rublimo/css/ion.rangeSlider.skinHTML5.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/rublimo/css/bootstrap.min.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/rublimo/css/font-awesome.min.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/rublimo/css/style.css"; 
		echo '</style>';
		echo '<style>'; 
		require "templates/rublimo/css/suggestions.min.css"; 
		echo '</style>';

		if ($this->uri->segment(1) == 'form')
		{
			echo '<style>'; 
			require "templates/rublimo/css/form.css"; 
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
			}
			.tip-twitter .tip-inner {
				font:bold 11px/14px "Lucida Grande",sans-serif;
			}
		
			/* Configure an arrow image - the script will automatically position it on the correct side of the tip */
			.tip-twitter .tip-arrow-top {
				margin-top:-5px;
				margin-left:-5px; /* approx. half the width to center it */
				top:0;
				left:50%;
				width:9px;
				height:5px;
				background:url(/templates/rublimo/img/tip-twitter_arrows.gif) no-repeat;
			}
			.tip-twitter .tip-arrow-right {
				margin-top:-4px; /* approx. half the height to center it */
				margin-left:0;
				top:50%;
				left:100%;
				width:5px;
				height:9px;
				background:url(/templates/rublimo/img/tip-twitter_arrows.gif) no-repeat -9px 0;
			}
			.tip-twitter .tip-arrow-bottom {
				margin-top:0;
				margin-left:-5px; /* approx. half the width to center it */
				top:100%;
				left:50%;
				width:9px;
				height:5px;
				background:url(/templates/rublimo/img/tip-twitter_arrows.gif) no-repeat -18px 0;
			}
			.tip-twitter .tip-arrow-left {
				margin-top:-4px; /* approx. half the height to center it */
				margin-left:-5px;
				top:50%;
				left:0;
				width:5px;
				height:9px;
				background:url(/templates/rublimo/img/tip-twitter_arrows.gif) no-repeat -27px 0;
			}
			'; 
			echo '</style>'; 
			echo '<style>
				#ya-rtb {
					display: none;
				}
			</style>';
		}
		echo '<style>'; 
		echo "a {text-decoration: none !important;}"; 
		echo '</style>';

		if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
		{
			echo '<style>';
			require "templates/zaimrubli/assets/css/style_lk.css";
			echo '</style>';
		}
	?> 
	<!--[if lte IE 9]>
	<script src="/modules/html5shiv/html5shiv.js"></script>
	<![endif]--> 
	<?php
		require 'sendpuls.php';
		require 'google_tag_manager.php';
	?> 
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZBK47T" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) --> 
		<div class="row"> 
			<nav class="navbar">
				<div class="col-md-12">
					<div class="navbar-header">
						<a class="navbar-brand" href="/">
							<img alt="Rublimo.ru" class="img-responsive" src="/templates/rublimo/img/logo.png">
						</a>
					</div>
					<div class="navbar-collapsem hidden-xs" id="navbar-collapse-1">
						<ul class="nav navbar-nav menu">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
									О сервисе
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="/about" >О нас</a>
									</li>
									<li>
										<a href="/contacts" >Контакты</a>
									</li>
									<li>
										<a href="/info" >Статьи о займах</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="/zaim-card" >Займ на банковскую карту</a>
									</li>
									<li>
										<a href="/zaim-qiwi" >Займ на QIWI-кошелек</a>
									</li>
									<li>
										<a href="/zaim-yandex" >Займ на Яндекс.Деньги</a>
									</li>
									<li>
										<a href="/zaim-contact" >Займ через Contact</a>
									</li>
									<li>
										<a href="/zaim-bank" >Займ на банковский счет</a>
									</li>
								</ul>
							</li>
							<li>
								<a  href="/form">Получить деньги</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
									Новости
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="/news1" >Где взять займ на карту Сбербанка?</a>
									</li>
									<li>
										<a href="/news2" >Как получить кредит на Яндекс.Деньги?</a>
									</li> 
									<li>
										<a href="/news3" >Мгновенные займы – доступная и удобная услуга</a>
									</li>
									<li>
										<a href="/news4" >Очистить кредитную историю</a>
									</li>
									<li>
										<a href="/news5" >Как получить займ на QIWI кошелек</a>
									</li>
									<li>
										<a href="/news6" >Как получить займ через систему Contact без отказа</a>
									</li>
									<li>
										<a href="/news7" >«Эх, дал бы кто взаймы»: Как получить займ на Qiwi-кошелёк без отказа</a>
									</li>
									<li>
										<a href="/news8" >«Есть Контакт!»: Как получить заём через CONTACT без лишней головной боли</a>
									</li>
								</ul>
							</li>
							<li>
								<a  href="/faq">Вопросы-ответы</a>
							</li>
							<li>
							<a href="" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">Обратная связь</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
									Документы
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="/oferta" >Публичная оферта</a>
									</li>
									<li>
										<a href="/soglasie" >Обработка данных</a>
									</li>
									<li>
										<a href="/rules" >Правила предоставления займов</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav> 
		</div>   
	<!-- Modal -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header text-center">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h2>
				Заполните форму <br> и наш менеджер свяжется с вами
			</h2>
		</div>
		<div class="modal-body">
			<div class="form-group has-feedback">
				<input type="text" class="form-control ec tip" name="feedback-name" title="Введите свое имя"
						data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
						data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
			</div>
			<div class="form-group">
				<input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" value="8(977)7579897" placeholder="Введите ваш телефон" required>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
			</div>
			<div class="form-group">
				<textarea id="feedback-comment" rows="3" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea><br>
				<div class=" text-center">
				<button type="button" id="feedback-send" class="btn">Отправить</button>
			</div>
			</div> 
		</div>
	</div>
</div>
</div>
<!-- /Modal -->