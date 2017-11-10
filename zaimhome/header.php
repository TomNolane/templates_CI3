<!doctype html>
<html lang="ru">
<head>
    <title><?php echo $my_title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="mailru-verification" content="7713982eb464dff4" />
    <meta http-equiv="Content-Type" content="text/html" />
	<meta name="Description" content="Zaimhome — сервис моментальных займов онлайн"/>
	<meta name="Keywords" content="моментальный заем, займы, онлайн, деньги"/>
	<meta name="robots" content="none"/> 
	<meta name="copyright" lang="en" content="Zaimhome.ru" />
	<meta http-equiv="cleartype" content="on" /> 
    
    <!-- favicon -->
    <meta name="msapplication-TileImage" content="/templates/zaimhome/ms-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/zaimhome/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/zaimhome/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/zaimhome/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/zaimhome/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/zaimhome/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/zaimhome/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/zaimhome/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/zaimhome/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/zaimhome/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/templates/zaimhome/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/zaimhome/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/zaimhome/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/zaimhome/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/zaimhome/favicon/manifest.json">
    <!-- style -->
    <link rel="stylesheet" href="/templates/zaimhome/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="/templates/zaimhome/assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" type="text/css">
    <link rel="stylesheet" href="/templates/zaimhome/assets/css/suggestions.min.css" type="text/css" />
    <link rel="stylesheet" href="/modules/poshytip-1.2/src/tip-twitter/tip-twitter.css" type="text/css">
    <!-- javascript -->
    <script charset="UTF-8" src="/templates/zaimhome/assets/js/oSpP.js" async></script>
    <!--[if lte IE 9]>
    <script src="/modules/html5shiv/html5shiv.js"></script>
    <![endif]-->

	<?php if ($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'confirm') {
		require 'googlesyndication.php';
	}
	?>
    <?php //require 'googlesyndication.php'; ?>
	
	<script charset="UTF-8" src="//cdn.sendpulse.com/28edd3380a1c17cf65b137fe96516659/js/push/7c397a9ffaa05fffbf0b54e6d263c8d9_1.js" async></script>

</head> 
<body> 
<nav class="navbar navbar-default ex-main-header">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a onClick="returnToMaimPage(); return false;" href="#" class="navbar-brand">
                    <img src="/templates/zaimhome/assets/img/Zaimhome_logo.svg" alt="Image missing">
                </a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li>
                        <a href="about">О сервисе</a>
                    </li> -->
                    <li class="dropdown">
                        <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">О сервисе
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="about" class="hov">О сервисе</a>
                            </li>
                            <li>
                                <a href="receiveMoney" class="hov">Виды займов</a>
                            </li> 
                        </ul>
                    </li>

                    <li>
                        <a href="/<?php echo $this->input->cookie('lk')? 'lk' : 'form'; ?>">Получить деньги</a> 
                    </li> 
                    <li class="dropdown">
                        <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Информация
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="offerta" class="hov">Публичная оферта</a>
                            </li>
                            <li>
                                <a href="contract" class="hov">Пользовательское соглашение</a>
                            </li>
                            <li>
                                <a href="rules" class="hov">Правила предоставления займов</a>
                            </li>
                            <li>
                                <a href="agreement" class="hov">Согласие на обработку данных</a>
                            </li>
                            <li>
                                <a href="documents" class="hov">Правовые документы</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="faq">FAQ</a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#helpModal">Обратная связь</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</nav>