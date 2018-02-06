<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Dengimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
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
<meta name="copyright" lang="ru" content="Dengimo.ru" /> 
<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
<meta property="og:description" content="Dengimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
<meta property="og:image" content="https://dengimo.ru/templates/dengimo/img/atmo.png"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="https://dengimo.ru/" />

<meta name="twitter:card" content="https://dengimo.ru/templates/dengimo/img/atmo.png"/>
<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
<meta name="twitter:description" content="Dengimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
<meta name="twitter:image:src" content="https://dengimo.ru/templates/dengimo/img/atmo.png"/>
<meta name="twitter:url" content="https://dengimo.ru/"/>
<meta name="twitter:domain" content="Dengimo.ru"/>

<link rel="shortcut icon" type="image/png" href="/templates/dengimo/img/favicon.png">

	<?php
		echo '<!-- CSS -->';
		echo '<style>';
		require "modules/jquery.ion.rangeslider/css/ion.rangeSlider.css";
		echo '</style>';
		echo '<style>';
		require "modules/jquery.ion.rangeslider/css/ion.rangeSlider.skinHTML5.css";
		echo '</style>';
		echo '<style>';
		require "templates/dengimo/css/bootstrap.min.css";
		echo '</style>';
		echo '<style>';
		require "templates/dengimo/css/font-awesome.min.css";
		echo '</style>';
		echo '<style>'; 
		require "templates/dengimo/css/suggestions.min.css"; 
		echo '</style>'; 
		echo '<style>';
		require "templates/dengimo/css/style.css";
		echo '</style>';
 
		if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
		{
			echo '<style>';
			require "templates/dengimo/css/style_lk.css";
			echo '</style>'; 
			echo '<style>';
			require "templates/dengimo/css/lk.min.css";
			echo '</style>'; 
		}
		elseif ($this->uri->segment(1) == 'form') 
		{ 
			echo '<style>';
			require "templates/dengimo/css/form.css";
			echo '</style>'; 
			echo '<style>.tip-twitter {
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
				background:url(/templates/dengimo/img/tip-twitter_arrows.gif) no-repeat;
			}
			.tip-twitter .tip-arrow-right {
				margin-top:-4px; /* approx. half the height to center it */
				margin-left:0;
				top:50%;
				left:100%;
				width:5px;
				height:9px;
				background:url(/templates/dengimo/img/tip-twitter_arrows.gif) no-repeat -9px 0;
			}
			.tip-twitter .tip-arrow-bottom {
				margin-top:0;
				margin-left:-5px; /* approx. half the width to center it */
				top:100%;
				left:50%;
				width:9px;
				height:5px;
				background:url(/templates/dengimo/img/tip-twitter_arrows.gif) no-repeat -18px 0;
			}
			.tip-twitter .tip-arrow-left {
				margin-top:-4px; /* approx. half the height to center it */
				margin-left:-5px;
				top:50%;
				left:0;
				width:5px;
				height:9px;
				background:url(/templates/dengimo/img/tip-twitter_arrows.gif) no-repeat -27px 0;
			}
			a:hover { color: #000 !important;
			}</style>'; 
		} 
	?>
	<!--[if lte IE 9]>
	<script src="/modules/html5shiv/html5shiv.js"></script>
	<![endif]-->

<?php   
	if ($this->uri->segment(1) != 'form') 
	{
		require 'templates/common/googlesyndication.php';
	} 
	require 'sendpuls.php';
	require 'google_tag_manager.php';
?>
	
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-FVT9Z22" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="page">
		<nav class="navbar">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">
						<img alt="logo.png" src="/templates/dengimo/img/logo.png">
					</a>
					<button type="button" class="navbar-toggle collapsed pull-right hidden-sm hidden-xs" data-toggle="collapse" data-target="#navbar-collapse-1"
					    aria-expanded="false">
						<span class="sr-only">Раскрыть меню</span>
						<i class="glyphicon glyphicon-menu-hamburger"></i>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav menu navbar-right">
						<li>
							<a href="/about">О сервисе</a>
						</li>
						<li>
							<a href="/form">Получить деньги</a>
						</li>
						<li>
							<a href="/faq">Вопросы-ответы</a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Modal -->
		<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h1 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h1>
						<p>Просто заполните форму и наш специалист свяжется с Вами</p>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
								<div class="form-group">
									<input type="text" class="form-control input-lg" id="feedback-name" placeholder="Имя" title="Имя">
								</div>
								<div class="form-group">
									<input type="hidden" class="form-control input-lg" id="feedback-phone" placeholder="Телефон" value="8(977)7777777" title="Телефон">
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
		<div id="loading" style="display:none;">
			<span>
				<i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
		</div>