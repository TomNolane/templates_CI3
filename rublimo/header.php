<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Rublimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<title>
		<?php echo $my_title;?>
	</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<meta name="Description" content="<?php echo $description;?>" />
	<meta name="Keywords" content="моментальный заем, займы, онлайн, деньги" />
	<meta name="robots" content="all" />
	<meta name="copyright" lang="ru" content="Rublimo.ru" /> 

	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-control" content="no-cache"> 
	<meta http-equiv="Expires" content="Wed, 22 Mar 2018 00:20:05 GMT">

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
		require "templates/rublimo/style.min.css"; 
		echo '</style>'; 
	?> 

	<!--[if lte IE 9]>
	<script src="/modules/html5shiv/html5shiv.js"></script>
	<![endif]-->
	<?php
		if ($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'confirm') 
		{
			echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  
					<script>
					  (adsbygoogle = window.adsbygoogle || []).push({
						google_ad_client: "ca-pub-2044590115529379",
						enable_page_level_ads: true
					  });
					</script>';
		} 
	?> 
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
		<div classe="row"> 
			<nav class="navbar">
				<div class="col-md-12">
					<div class="navbar-header">
						<a rel="nofollow" class="navbar-brand" href="/">
							<img alt="Rublimo.ru" class="img-responsive" src="/templates/rublimo/img/logo.png">
						</a>
					</div>
					<div class="navbar-collapsem hidden-xs" id="navbar-collapse-1">
						<ul class="nav navbar-nav menu">
							<li class="dropdown">
								<a rel="nofollow" href="#" class="dropdown-toggle" data-toggle="dropdown" id="text-decoration">
									О сервисе
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a rel="nofollow" href="/about" id="text-decoration">О нас</a>
									</li>
									<li>
										<a rel="nofollow" href="/contacts" id="text-decoration">Контакты</a>
									</li>
									<li>
										<a rel="nofollow" href="/info" id="text-decoration">Статьи о займах</a>
									</li>
									<li class="divider"></li>
									<li>
										<a rel="nofollow" href="/zaim-card" id="text-decoration">Займ на банковскую карту</a>
									</li>
									<li>
										<a rel="nofollow" href="/zaim-qiwi" id="text-decoration">Займ на QIWI-кошелек</a>
									</li>
									<li>
										<a rel="nofollow" href="/zaim-yandex" id="text-decoration">Займ на Яндекс.Деньги</a>
									</li>
									<li>
										<a rel="nofollow" href="/zaim-contact" id="text-decoration">Займ через Contact</a>
									</li>
									<li>
										<a rel="nofollow" href="/zaim-bank" id="text-decoration">Займ на банковский счет</a>
									</li>
								</ul>
							</li>
							<li>
								<a rel="nofollow" id="text-decoration" href="/<?php echo $this->input->cookie('lk')? 'lk' : 'form'; ?>">Получить деньги</a>
							</li>
							<li>
								<a rel="nofollow" id="text-decoration" href="/faq">Вопросы-ответы</a>
							</li>
							<li>
								<a rel="nofollow" id="text-decoration" href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a>
							</li>
							<li class="dropdown">
								<a rel="nofollow" href="#" class="dropdown-toggle" data-toggle="dropdown" id="text-decoration">
									Документы
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a rel="nofollow" href="/oferta" id="text-decoration">Публичная оферта</a>
									</li>
									<!-- <li>
										<a rel="nofollow" href="/agree" id="text-decoration">Пользовательское соглашение</a>
									</li> -->
									<li>
										<a rel="nofollow" href="/soglasie" id="text-decoration">Обработка данных</a>
									</li>
									<li>
										<a rel="nofollow" href="/rules" id="text-decoration">Правила предоставления займов</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav> 
		</div>   
	<!-- Modal -->
	<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h3 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h3>
					<p>Просто заполните форму и наш специалист свяжется с Вами</p>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
							<div class="form-group">
								<input type="text" class="form-control input-lg" id="feedback-name" placeholder="Имя" title="Имя">
							</div>
							<div class="form-group">
								<input type="tel" class="form-control input-lg" id="feedback-phone" placeholder="Телефон" title="Телефон">
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-lg" id="feedback-email" placeholder="Email" title="Email" required>
							</div>
							<div class="form-group">
								<textarea class="form-control input-lg" id="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
								    required></textarea>
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-success btn-lg btn-block" id="feedback-send">Отправить</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="loading">
		<span>
			<i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
	</div>