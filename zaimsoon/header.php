<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Zaimsoon - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $my_title;?></title>
    <!-- meta -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<meta name="Description" content="<?php echo $description;?>" />
	<meta name="Keywords" content="моментальный заем, займы, онлайн, деньги" />
	<meta name="robots" content="all" />
	<meta name="copyright" lang="ru" content="zaimsoon.ru" /> 
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-control" content="no-cache"> 
	<meta http-equiv="Expires" content="Wed, 22 Mar 2018 00:20:05 GMT">
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="Zaimsoon - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://zaimsoon.ru/templates/zaimsoon/assets/img/pic.png"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://zaimsoon.ru/" />
	<meta name="twitter:card" content="https://zaimsoon.ru/templates/zaimsoon/assets/img/pic.png"/>
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
	<meta name="twitter:description" content="Zaimsoon - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta name="twitter:image:src" content="https://zaimsoon.ru/templates/zaimsoon/assets/img/pic.png"/>
	<meta name="twitter:url" content="https://zaimsoon.ru/"/>
	<meta name="twitter:domain" content="zaimsoon.ru"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/zaimsoon/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/zaimsoon/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/zaimsoon/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/zaimsoon/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/zaimsoon/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/zaimsoon/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/zaimsoon/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/zaimsoon/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/zaimsoon/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/templates/zaimsoon/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/zaimsoon/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/zaimsoon/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/zaimsoon/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/zaimsoon/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/templates/zaimsoon/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
     <?php
     echo '<style>';
     require 'templates/zaimsoon/assets/css/style.min.css';
     echo '</style>'; 
     echo '<style>';
     require 'templates/zaimsoon/assets/css/style_custom.min.css';
     echo '</style>'; 
     echo '<style>';
     require 'templates/zaimsoon/assets/css/jquery-ui-1.10.4.custom.min.css';
     echo '</style>';
     echo '<style>';
     require 'templates/zaimsoon/assets/css/suggestions.min.css';
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
         background:url(/templates/zaimsoon/assets/img/tip-twitter_arrows.gif) no-repeat;
     }
     .tip-twitter .tip-arrow-right {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:0;
         top:50%;
         left:100%;
         width:5px;
         height:9px;
         background:url(/templates/zaimsoon/assets/img/tip-twitter_arrows.gif) no-repeat -9px 0;
     }
     .tip-twitter .tip-arrow-bottom {
         margin-top:0;
         margin-left:-5px; /* approx. half the width to center it */
         top:100%;
         left:50%;
         width:9px;
         height:5px;
         background:url(/templates/zaimsoon/assets/img/tip-twitter_arrows.gif) no-repeat -18px 0;
     }
     .tip-twitter .tip-arrow-left {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:-5px;
         top:50%;
         left:0;
         width:5px;
         height:9px;
         background:url(/templates/zaimsoon/assets/img/tip-twitter_arrows.gif) no-repeat -27px 0;
     } 
     '; 
     echo '</style>'; 
     if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
     {
         echo '<style>';
         require "templates/zaimsoon/assets/css/style_lk.css";
         echo '</style>';
     }
     ?> 
     <!-- javascript -->
     <?php
     echo '<script>';
     require 'templates/zaimsoon/assets/js/oSpP.js';
     echo '</script>';
     ?> 
     <!--[if lte IE 9]>
     <script src="/modules/html5shiv/html5shiv.js"></script>
     <![endif]-->
	<?php
		if ($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'confirm') 
		{
			echo '';
		} 
	?> 
	<?php
		require 'sendpuls.php';
		require 'google_tag_manager.php';
    ?> 
    
</head>
<body>
<header>
    <nav id="ex-homepage-header" class="navbar navbar-default ex-main-header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="/templates/zaimsoon/assets/img/logo.png" alt="Image missing">
                </a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/about">О нас</a>
                    </li>
                    <li class="ex-dropdown-menu dropdown"><a href="#" class="dropdown-toggle"
                                                             data-toggle="dropdown"
                                                             aria-expanded="false">Как работает сервис</a>
                        <ul class="dropdown-menu">
                            <li><a href="/about">О сервисе Zaimsoon</a></li>
                            <li><a href="/allarticles">Статьи о займах</a></li>
                            <li><a href="/faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="ex-dropdown-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                             aria-expanded="false">Документы</a>
                        <ul class="dropdown-menu">
                            <li><a href="/oferta">Публичная оферта</a></li>
                            <li><a href="/soglasie">Согласие на обработку данных</a></li>
                            <li><a href="/rules">Правила предоставления займов</a></li>
                        </ul>
                    </li>
                    <li class="ex-dropdown-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                             aria-expanded="false">Способы получения займа</a>
                        <ul class="dropdown-menu">
                            <li><a href="/about">О сервисе Zaimcoin</a></li>
                            <li><a href="/allarticles">Статьи о займах</a></li>
                            <li><a href="/money">Способы получения займа</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- 
<aside class="ex-aside-menu">
    <div>
        <i class="ex-close-menu"></i>
    </div>
    <main>
        <a href="/form"><button class="ex-main-btn" type="button">Получить деньги</button></a>
        <button class="ex-main-btn ex-ask-question" data-toggle="modal" data-target="#askQuestion">Задать вопрос</button>
        <ul>
            <li class="ex-larger">Как работает сервис</li>
            <li><a href="/about">О сервисе Zaimsoon</a></li>
            <li><a href="/allarticles">Статьи о займах</a></li>
            <li><a href="/faq">Вопрос - Ответ</a></li>
            <li class="ex-larger">Документация</li>
            <li><a href="/oferta">Публичная оферта</a></li>
            <li><a href="/soglasie">Согласие на обработку данных</a></li>
            <li><a href="/rules">Правила предоставления займов</a></li>
            <li class="ex-larger">Способы получения займа</li>
            <li><a href="/zaim-card">Банковская карта</a></li>
            <li><a href="/zaim-yandex">Яндекс.Деньги</a></li>
            <li><a href="/zaim-contact">Contact</a></li>
            <li><a href="/zaim-qiwi">QIWI VISA кошелек</a></li>
            <li><a href="/zaim-bank">Счет в банке</a></li>
        </ul>
    </main>
</aside> -->
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
                        <input type="text" class="form-control ec tip" name="feedback-name" title="Пожалуйста, введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Пожалуйста, введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
                    </div>
                    <div class="form-group">
                        <textarea id="feedback-comment"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                    </div>
                    <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
                </div>
            </div>
        </div>
    </div>