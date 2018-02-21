<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Zaimomir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
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
	<meta name="copyright" lang="ru" content="zaimomir.su" /> 
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="Zaimomir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://zaimomir.su/templates/zaimomirsu/assets/img/creditcard.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://zaimomir.su/" />
	<meta name="twitter:card" content="https://zaimomir.su/templates/zaimomirsu/assets/img/creditcard.png"/>
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
	<meta name="twitter:description" content="Zaimomir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta name="twitter:image:src" content="https://zaimomir.su/templates/zaimomirsu/assets/img/creditcard.png"/>
	<meta name="twitter:url" content="https://zaimomir.su/"/>
	<meta name="twitter:domain" content="zaimomir.su"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="/templates/zaimomirsu/favicon/favicon-16x16.png" type="image/png">
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/zaimomirsu/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/zaimomirsu/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/zaimomirsu/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/zaimomirsu/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/zaimomirsu/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/zaimomirsu/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/zaimomirsu/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/zaimomirsu/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/zaimomirsu/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/templates/zaimomirsu/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/zaimomirsu/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/zaimomirsu/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/zaimomirsu/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/zaimomirsu/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/templates/zaimomirsu/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> 
    <!-- CSS -->
     <?php 
     echo '<style>';
     require 'templates/zaimomirsu/assets/css/style.css';
     echo '</style>';
     echo '<style>';
     require 'templates/zaimomirsu/assets/css/style_custom.css';
     echo '</style>';
     echo '<style>';
     require 'templates/zaimomirsu/assets/css/font-awesome.min.css';
     echo '</style>';
     echo '<style>';
     require 'templates/zaimomirsu/assets/css/suggestions.min.css';
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
     .tip-twitter .tip-arrow-top {
         margin-top:-5px;
         margin-left:-5px; /* approx. half the width to center it */
         top:0;
         left:50%;
         width:9px;
         height:5px;
         background:url(/templates/zaimomirsu/assets/img/tip-twitter_arrows.gif) no-repeat;
     }
     .tip-twitter .tip-arrow-right {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:0;
         top:50%;
         left:100%;
         width:5px;
         height:9px;
         background:url(/templates/zaimomirsu/assets/img/tip-twitter_arrows.gif) no-repeat -9px 0;
     }
     .tip-twitter .tip-arrow-bottom {
         margin-top:0;
         margin-left:-5px; /* approx. half the width to center it */
         top:100%;
         left:50%;
         width:9px;
         height:5px;
         background:url(/templates/zaimomirsu/assets/img/tip-twitter_arrows.gif) no-repeat -18px 0;
     }
     .tip-twitter .tip-arrow-left {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:-5px;
         top:50%;
         left:0;
         width:5px;
         height:9px;
         background:url(/templates/zaimomirsu/assets/img/tip-twitter_arrows.gif) no-repeat -27px 0;
     }';
     echo '</style>';

     if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
     {
         echo '<style>';
         require "templates/zaimomirsu/assets/css/style_lk.css";
         echo '</style>';
     }
     ?>
     <!--[if lte IE 9]>
     <script src="/modules/html5shiv/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]--> 
	<?php
		require 'sendpuls.php';
        require 'google_tag_manager.php';
        require 'googlesyndication.php';
    ?>
</head>
<body class="ex-sticky">
<nav class="navbar navbar-expand-lg ex-main-header">
    <div class="container">
        <a class="ex-brand navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">документы</a>
                    <i></i>
                    <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                        <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                        <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/about">О сервисе</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/money">Получение денег</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ex-ask-question" href="#">Обратная связь</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Modal -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ex-wrapper">
                                    <i class="ex-user"></i>
                                    <input type="text" class="form-control" name="feedback-name" title="Введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[-А-я ЁёІіЇїҐґЄє'А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Введите имя" id="feedback-name" placeholder="Ваше имя">
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" value="095 725 09 99" required>
                            <div class="col-md-6">
                                <div class="ex-wrapper">
                                    <i class="ex-email"></i>
                                    <input type="email" class="form-control" name="feedback-email" id="feedback-email" placeholder="Ваш Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                                <div class="ex-wrapper">
                                    <i class="ex-message"></i>
                                    <textarea id="feedback-comment" rows="3" name="feedback-comment" placeholder="Текст сообщения"></textarea>
                                </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>