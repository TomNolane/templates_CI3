<?php 
if(!isset($my_title))
	$my_title = 'Срочные займы круглосуточно без проверок онлайн';

if(!isset($description))
	$description = 'Zaimcoin - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $my_title;?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta http-equiv="Content-Type" content="text/html" />
	<meta name="Description" content="<?php echo $description;?>" />
	<meta name="Keywords" content="моментальный заем, займы, онлайн, деньги" />
	<meta name="robots" content="all" />
	<meta name="copyright" lang="ru" content="Zaimcoin.ru" />
    <meta http-equiv="cleartype" content="on" />

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/zaimcoin/favicon/57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/zaimcoin/favicon/60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/zaimcoin/favicon/72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/zaimcoin/favicon/76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/zaimcoin/favicon/114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/zaimcoin/favicon/120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/zaimcoin/favicon/144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/zaimcoin/favicon/152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/zaimcoin/favicon/180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/templates/zaimcoin/favicon/192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/zaimcoin/favicon/32x32.png">
    <link rel="manifest" href="/templates/zaimcoin/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/templates/zaimcoin/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> 

    <!-- CSS -->
    <link rel="stylesheet" href="/templates/zaimcoin/assets/css/style.css">
    <link rel="stylesheet" href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" type="text/css">

    <?php
        if ($this->uri->segment(1) == 'lk') {
            echo '<link rel="stylesheet" href="/templates/zaimcoin/assets/css/lk.css" type="text/css" />';
        }
    ?> 
    <link rel="stylesheet" href="/templates/zaimcoin/assets/css/suggestions.min.css" type="text/css" />
    <link rel="stylesheet" href="/modules/poshytip-1.2/src/tip-twitter/tip-twitter.css" type="text/css">
    <style>
        #special_footer, .special_forms {
            cursor:pointer !important;
            text-decoration: none;
        }
        .special_forms:hover {
            cursor:pointer !important;
            text-decoration: none;
            color: gold;
        }
        .help-block.form-error {
            display: none !important;
        }
        a:hover {
            text-decoration: none;
        }
        #reg_address {
            margin-top: 10px;
        }
        .lk-img {
            padding-left: 10px;
        }
    </style>

    <!-- Adsense -->
    <?php if ($this->uri->segment(1) != 'form') {
        require 'templates/common/googlesyndication.php';
    }?>

    <!-- Сендпульс Sendpulse --> 
    <?php require 'sendpuls.php'; ?>

    <!-- javascript -->
    <script charset="UTF-8" src="/templates/zaimcoin/assets/js/oSpP.js" async></script>
    <!--[if lte IE 9]>
    <script src="/modules/html5shiv/html5shiv.js"></script>
    <![endif]-->  
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
                    <img src="/templates/zaimcoin/assets/img/logo.svg" alt="logo.svg">
                </a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="ex-dropdown-menu dropdown"><a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">КАК РАБОТАЕТ СЕРВИС</a>
                        <ul class="dropdown-menu">
                            <li><a href="/about">О сервисе Zaimcoin</a></li>
                            <li><a href="/allarticles">Статьи о займах</a></li>
                            <li><a href="/zaim-yandex">Способы получения займа</a></li>
                        </ul>
                    </li>
                    <li class="ex-dropdown-menu dropdown"><a href="#" id="drop2" class="dropdown-toggle"
                                                             data-toggle="dropdown"
                                                             aria-expanded="true">ДОКУМЕНТАЦИЯ</a>
                        <ul class="dropdown-menu">
                            <!-- <li><a href="/docs">Правовые документы</a></li> -->
                            <li><a href="/oferta">Публичная оферта</a></li>
                            <!-- <li><a href="/agree">Пользовательское соглашение</a></li> -->
                            <li><a href="/soglasie">Cогласие на обработку данных</a></li>
                            <li><a href="/rules">Правила предоставления</a></li>
                        </ul>
                    </li>
                    <li><a href="/faq">FAQ</a></li>
                    <li class="ex-hes-border "><a href="#" data-toggle="modal" data-target="#helpModal">СВЯЗАТЬСЯ С
                        НАМИ</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="toUp"></div>