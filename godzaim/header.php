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
		.index_spec7 {
			visibility: hidden;
		}
		</style>';
		echo '<style>'; 
		echo 'input#i , input#o, input#f, input#feedback-name {
			text-transform: capitalize !important;
		  }'; 
		echo '</style>'; 
		echo '<style>'; 
		require "templates/godzaim/css/suggestions.min.css"; 
		echo '</style>'; 
		echo '<style>'; 
		require "modules/awesome-bootstrap-checkbox-master/awesome-bootstrap-checkbox.css"; 
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
			background:url(/templates/godzaim/img/tip-twitter_arrows.gif) no-repeat;
		}
		.tip-twitter .tip-arrow-right {
			margin-top:-4px; /* approx. half the height to center it */
			margin-left:0;
			top:50%;
			left:100%;
			width:5px;
			height:9px;
			background:url(/templates/godzaim/img/tip-twitter_arrows.gif) no-repeat -9px 0;
		}
		.tip-twitter .tip-arrow-bottom {
			margin-top:0;
			margin-left:-5px; /* approx. half the width to center it */
			top:100%;
			left:50%;
			width:9px;
			height:5px;
			background:url(/templates/godzaim/img/tip-twitter_arrows.gif) no-repeat -18px 0;
		}
		.tip-twitter .tip-arrow-left {
			margin-top:-4px; /* approx. half the height to center it */
			margin-left:-5px;
			top:50%;
			left:0;
			width:5px;
			height:9px;
			background:url(/templates/godzaim/img/tip-twitter_arrows.gif) no-repeat -27px 0;
		}
		'; 
		echo '</style>'; 

		if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') {
			echo '<style>'; 
			require "templates/godzaim/css/style_lk.css"; 
			echo '</style>'; 
			echo '<style>
			body {
				background-color: #e3e3e3;
				background: url(\'/templates/godzaim/img/lk/bg.png\') center center no-repeat;
				background-size: cover;
			}
	
			h1 {
				color: #093b3f;
				font-size: 30px;
				margin: 30px 0 20px;
			}
	
			p {
				color: #050505;
				font-size: 22px;
			}
	
			span.green {
				color: #597b28;
				font-size: 24px;
				font-weight: bold;
			}
	
			.btn,
			.btn:hover,
			.btn:focus,
			.btn:active,
			.btn:visited,
			.btn.focus {
				background: #597b28;
				border-color: #597b28;
				border-radius: 5px;
			}
	
			.page {
				background: rgba(227, 227, 227, 0.8);
			}
	
			#lk .border {
				border: 2px solid #597b28;
			}
	
			#lk .rounded {
				border-radius: 6px;
			}
	
			#lk .shadow {
				box-shadow: 2px 5px 2px rgba(0, 0, 0, 0.5);
			}
	
			.offer-item {
				margin: 10px auto;
				max-width: 450px;
				padding: 15px 30px;
				text-align: center;
			}
	
			.offer-image {
				background: #fff;
				height: 45px;
				margin: 0 auto -30px;
				position: relative;
				text-align: center;
				width: 175px;
				z-index: 1;
			}
	
			.offer-image img {
				width: 100%;
				height: 100%;
				max-width: 175px;
				max-height: 75px;
			}
	
			.offer-panel {
				background: #e8e8e8;
				padding: 50px 30px 40px;
			}
	
			.offer-data {
				border: 4px solid #597b28;
				color: #2b2b2b;
				padding: 0 20px;
			}
	
			.offer-amount {
				font-size: 24px;
				font-weight: bold;
			}
	
			.offer-percent {
				font-size: 20px;
				font-weight: 400;
				line-height: 32px;
			}
	
			.offer-item a {
				margin-top: -24px;
			}
	
			.hidden-lk {
				display: none;
			}
		</style>';
		}
		elseif($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index') {
			echo '<style>
			.buffer {
				height: 0px;
			}
			.rtb {
				background-color: #ffffff;
				 min-width: 100%;   
			}
			</style>';
		}
		
		//js
		echo '<script>'; 
		require "modules/jquery/jquery-1.11.3.min.js"; 
		echo '</script>'; 

		if ($this->uri->segment(1) == 'form') {
			echo '
		<style>
		#ya-rtb{display: none;}
		h1 {
			font-size:34px;
			margin:25px 0 5px;
		}
		p.descr{
			color:#a9a9a9;
			font-size:18px;
			font-weight:bold;
			text-align:center;
		}
		label span{
			color:red;
		} 
		
		.help-block { 
				color: #bc5351 !important;
				font-weight: 700;
				margin-bottom: 0px !important; 
			}
		</style>';
	}
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
				<li><a href="/about">О сервисе</a></li>
                <li><a href="/form">Получить деньги</a></li>
                <li><a href="/faq">Вопросы-ответы</a></li>
				<li><a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a></li>
			</ul>
		</div>
	</div>
</nav>
