<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'creditmir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
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
	<meta name="copyright" lang="ru" content="creditmir.ru" /> 
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="creditmir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://creditmir.ru/templates/creditmir/assets/img/pic.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://creditmir.ru/" />
	<meta name="twitter:card" content="https://creditmir.ru/templates/creditmir/assets/img/pic.png"/>
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
	<meta name="twitter:description" content="creditmir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta name="twitter:image:src" content="https://creditmir.ru/templates/creditmir/assets/img/pic.png"/>
	<meta name="twitter:url" content="https://creditmir.ru/"/>
	<meta name="twitter:domain" content="creditmir.ru"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="/templates/creditmir/favicon/favicon-16x16.png" type="image/png">
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/creditmir/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/creditmir/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/creditmir/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/creditmir/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/creditmir/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/creditmir/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/creditmir/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/creditmir/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/creditmir/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/templates/creditmir/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/creditmir/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/creditmir/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/creditmir/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/creditmir/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/templates/creditmir/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
     <?php 
     echo '<style>';
     require 'templates/creditmir/assets/css/style.css';
     echo '</style>';
     echo '<style>';
     require 'templates/creditmir/assets/css/style_custom.css';
     echo '</style>';
     echo '<style>';
     require 'templates/creditmir/assets/css/suggestions.min.css';
     echo '</style>';
     echo '<style>';
     require 'templates/creditmir/assets/css/font-awesome.min.css';
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
         background:url(/templates/creditmir/assets/img/tip-twitter_arrows.gif) no-repeat;
     }
     .tip-twitter .tip-arrow-right {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:0;
         top:50%;
         left:100%;
         width:5px;
         height:9px;
         background:url(/templates/creditmir/assets/img/tip-twitter_arrows.gif) no-repeat -9px 0;
     }
     .tip-twitter .tip-arrow-bottom {
         margin-top:0;
         margin-left:-5px; /* approx. half the width to center it */
         top:100%;
         left:50%;
         width:9px;
         height:5px;
         background:url(/templates/creditmir/assets/img/tip-twitter_arrows.gif) no-repeat -18px 0;
     }
     .tip-twitter .tip-arrow-left {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:-5px;
         top:50%;
         left:0;
         width:5px;
         height:9px;
         background:url(/templates/creditmir/assets/img/tip-twitter_arrows.gif) no-repeat -27px 0;
     }';
     echo '</style>';

     if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') 
     {
         echo '<style>';
         require "templates/creditmir/assets/css/style_lk.css";
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
<?php 
    if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index')
    {
        echo '<body class="ex-sticky ex-bg-grey">
        <form id="anketa" action="/form" method="post">
        <section class="ex-home">
            <nav class="navbar navbar-default ex-main-header">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dengomirCollapsed">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <i></i>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="dengomirCollapsed">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="ex-menu-item" href="/about">о сервисе</a>
                            </li>
                            <li class="ex-feedback ex-main-btn ex-question" role="button" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">
                                <a class="ex-menu-item">обратная связь</a>
                            </li>
                            <li>
                                <a class="ex-menu-item" href="/documents">документы</a>
                            </li>
                            <li><a class="ex-menu-item" href="/faq">Faq</a>
                            </li>
                            <li>
                                <a class="ex-menu-item" href="/form">получение денег</a>
                            </li>
        
                        </ul>
                    </div>
                </div>
            </nav>';
    }
    elseif ($this->uri->segment(1) == 'form')
    {
        echo '<body class="ex-sticky">
        <nav class="navbar navbar-default ex-main-header ex-dark-header">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dengomirCollapsed">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <i></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="dengomirCollapsed">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="ex-menu-item" href="/about">о сервисе</a>
                        </li>
                        <li class="ex-feedback ex-main-btn ex-question" role="button" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">
                                <a class="ex-menu-item">обратная связь</a>
                        </li>
                        <li>
                            <a class="ex-menu-item" href="/documents">документы</a>
                        </li>
                        <li><a class="ex-menu-item" href="/faq">Faq</a>
                        </li>
                        <li>
                            <a class="ex-menu-item" href="/form">получение денег</a>
                        </li>
        
                    </ul>
                </div>
            </div>
        </nav>';
    }
    else
    {
        echo '<body class="ex-sticky ex-bg">
        <nav class="navbar navbar-default ex-main-header ex-dark-header">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dengomirCollapsed">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <i></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="dengomirCollapsed">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="ex-menu-item" href="/about">о сервисе</a>
                        </li>
                        <li class="ex-feedback ex-main-btn ex-question" role="button" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">
                                <a class="ex-menu-item">обратная связь</a>
                        </li>
                        <li>
                            <a class="ex-menu-item" href="/documents">документы</a>
                        </li>
                        <li><a class="ex-menu-item" href="/faq">Faq</a>
                        </li>
                        <li>
                            <a class="ex-menu-item" href="/form">получение денег</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>';
    }
?>
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
                    <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" value="89777474747" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
                </div>
                <div class="form-group">
                    <textarea id="feedback-comment" rows="3" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea>
                </div>
                <center><button type="button" id="feedback-send" class="ex-btn-blue">Отправить</button></center>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->