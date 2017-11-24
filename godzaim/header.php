<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Godzaim - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
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
<meta name="copyright" lang="ru" content="Godzaim.ru" /> 

<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-control" content="no-cache"> 
<meta http-equiv="Expires" content="Wed, 22 Mar 2018 00:20:05 GMT">

<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
<meta property="og:description" content="Godzaim - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
<meta property="og:image" content="https://godzaim.ru/templates/godzaim/img/how-bgg.png"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="https://godzaim.ru/" />

<meta name="twitter:card" content="https://godzaim.ru/templates/godzaim/img/how-bgg.png"/>
<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
<meta name="twitter:description" content="Godzaim - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
<meta name="twitter:image:src" content="https://godzaim.ru/templates/godzaim/img/how-bgg.png"/>
<meta name="twitter:url" content="https://godzaim.ru/"/>
<meta name="twitter:domain" content="godzaim.ru"/>

<link rel="shortcut icon" href="/templates/godzaim/img/favicon.ico" type="image/x-icon">

<?php 
		// CSS
		echo '<style>';
		require "templates/godzaim/css/ion.rangeSlider.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/godzaim/css/ion.rangeSlider.skinHTML5.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/godzaim/css/bootstrap.min.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/godzaim/css/font-awesome.min.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/godzaim/css/style.min.css"; 
		echo '</style>'; 
		echo '<style>
		.row {
			margin-right: 0px;  
			margin-left: 0px;
		}
		</style>';

		//js
		echo '<script>'; 
		require "modules/jquery/jquery-1.11.3.min.js"; 
		echo '</script>'; 
	?>  

<!-- <script src="/modules/jquery/jquery-1.11.3.min.js"></script> -->
<?php if ($this->uri->segment(1) != 'form') {
    require 'templates/common/googlesyndication.php';
}?>
<!--[if lte IE 9]>
<script src="/modules/html5shiv/html5shiv.js"></script>
<![endif]-->

<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=AB08QuA*AHqYGgS1qSBS6k8osS6uuM0vwS7*GJOxHTjgB6b3yrRzsaxRA1KdhNf2pLUkYjuXeJvfaRnExxKnHxYFNvF2NIeOXGQG6ID7zAK1LjO2*5JwKmrAYlejenz3cv*G0tu9UfpsE3Bj9StLFGJC4Xc7FnTUd7KiOjzBcJY-&pixel_id=1000081266';</script>
<?php
		require 'sendpuls.php';
		require 'google_tag_manager.php';
		require 'google_analytics.php';
?> 

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZBK47T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="page">

<nav class="navbar">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="/"><img alt="logo.png" src="/templates/godzaim/img/logo.png"></a>
			<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Меню</span>
				<i class="glyphicon glyphicon-menu-hamburger"></i>
			</button>
        </div>
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav menu">
				<li><a href="/service">О сервисе</a></li>
                <li><a href="/form">Получить деньги</a></li>
                <li><a href="/faq">Вопросы-ответы</a></li>
				<li><a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a></li>
			</ul>
		</div>
	</div>
</nav>
