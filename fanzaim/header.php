<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Fanzaim - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
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
	<meta name="copyright" lang="ru" content="fanzaim.ru" /> 
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-control" content="no-cache"> 
	<meta http-equiv="Expires" content="Wed, 22 Mar 2018 00:20:05 GMT">
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="fanzaim - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://fanzaim.ru/templates/fanzaim/assets/img/pic.png"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://fanzaim.ru/" />
	<meta name="twitter:card" content="https://fanzaim.ru/templates/fanzaim/assets/img/pic.png"/>
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
	<meta name="twitter:description" content="fanzaim - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta name="twitter:image:src" content="https://fanzaim.ru/templates/fanzaim/assets/img/pic.png"/>
	<meta name="twitter:url" content="https://fanzaim.ru/"/>
	<meta name="twitter:domain" content="fanzaim.ru"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/fanzaim/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/fanzaim/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/fanzaim/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/fanzaim/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/fanzaim/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/fanzaim/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/fanzaim/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/fanzaim/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/fanzaim/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/templates/fanzaim/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/fanzaim/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/fanzaim/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/fanzaim/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/fanzaim/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/templates/fanzaim/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
     <?php
     echo '<style>';
     require 'templates/fanzaim/assets/css/style.min.css';
     echo '</style>'; 
     echo '<style>';
     require 'templates/fanzaim/assets/css/style_custom.min.css';
     echo '</style>'; 
     echo '<style>';
     require 'templates/fanzaim/assets/css/jquery-ui-1.10.4.custom.min.css';
     echo '</style>';
     echo '<style>';
     require 'templates/fanzaim/assets/css/suggestions.min.css';
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
         background:url(/templates/fanzaim/assets/img/tip-twitter_arrows.gif) no-repeat;
     }
     .tip-twitter .tip-arrow-right {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:0;
         top:50%;
         left:100%;
         width:5px;
         height:9px;
         background:url(/templates/fanzaim/assets/img/tip-twitter_arrows.gif) no-repeat -9px 0;
     }
     .tip-twitter .tip-arrow-bottom {
         margin-top:0;
         margin-left:-5px; /* approx. half the width to center it */
         top:100%;
         left:50%;
         width:9px;
         height:5px;
         background:url(/templates/fanzaim/assets/img/tip-twitter_arrows.gif) no-repeat -18px 0;
     }
     .tip-twitter .tip-arrow-left {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:-5px;
         top:50%;
         left:0;
         width:5px;
         height:9px;
         background:url(/templates/fanzaim/assets/img/tip-twitter_arrows.gif) no-repeat -27px 0;
     }
     body {
         padding: 0 !important;
     }
     '; 
     echo '</style>'; 
     if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
     {
         echo '<style>';
         require "templates/fanzaim/assets/css/style_lk.css";
         echo '</style>';
     }
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
            google_ad_client: "ca-pub-4970738258373085",
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
    <nav id="exMainHeader" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/"></a>
            </div>
            <div class="nav navbar-nav navbar-right">
                <div href="#" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Информация <i></i></a>
                    <div class="dropdown-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>Как работает сервис</h3>
                                    <ul>
                                        <li><a href="/about">О сервисе Fanzaim</a></li>
                                        <li><a href="/allarticles">Статьи о займах</a></li>
                                        <li><a href="/faq">FAQ</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h3>Документация</h3>
                                    <ul>
                                        <li><a href="/oferta">Публичная оферта</a></li>
                                        <li><a href="/soglasie">Согласие на обработку данных</a></li>
                                        <li><a href="/rules">Правила предоставления займов</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h3>Способы получения займа</h3>
                                    <ul>
                                        <li><a href="/zaim-card">Банковская карта</a></li>
                                        <li><a href="/zaim-yandex">Яндекс.Деньги</a></li>
                                        <li><a href="/zaim-contact">Contact</a></li>
                                        <li><a href="/zaim-qiwi">QIWI VISA кошелек</a></li>
                                        <li><a href="/zaim-bank">Счет в банке</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                 <button class="ex-main-btn ex-ask-question" data-toggle="modal" data-target="#askQuestion">Обратная связь</button> 
                                    <!-- <button class="ex-main-btn ex-ask-question" data-toggle="modal" data-target="#askQuestion">Обратная связь</button> -->
                                    <a href="/form"><button class="ex-main-btn">Получить деньги</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
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