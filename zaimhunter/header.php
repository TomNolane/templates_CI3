<?php 
if(!isset($my_title))
	$my_title = 'Срочные займы круглосуточно без проверок онлайн';

if(!isset($description))
	$description = 'Zaimhunter - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!';
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
	<meta name="copyright" lang="ru" content="Zaimhunter.ru" />
    <meta http-equiv="cleartype" content="on" />

    <!-- favicon -->
    <meta name="msapplication-TileImage" content="/templates/zaimhunter/ms-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/zaimhunter/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/zaimhunter/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/zaimhunter/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/zaimhunter/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/zaimhunter/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/zaimhunter/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/zaimhunter/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/zaimhunter/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/zaimhunter/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/templates/zaimhunter/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/zaimhunter/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/zaimhunter/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/zaimhunter/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/zaimhunter/favicon/manifest.json">

    <!-- CSS -->
    <link rel="stylesheet" href="/templates/zaimhunter/assets/css/style.css?ver=3">
    <link rel="stylesheet" href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" type="text/css">
    <link rel="stylesheet" href="/templates/dengibystra/assets/css/suggestions.min.css" type="text/css" />
    <link rel="stylesheet" href="/modules/poshytip-1.2/src/tip-twitter/tip-twitter.css" type="text/css">

    <!-- Adsense -->
    <?php if ($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'confirm') {
        require 'adsense.php';
    }?>

    <!-- Сендпульс Sendpulse --> 
    <?php require 'sendpuls.php'; ?>

    <!-- javascript -->
    <script charset="UTF-8" src="/templates/zaimhunter/assets/js/oSpP.js" async></script>
    <!--[if lte IE 9]>
    <script src="/modules/html5shiv/html5shiv.js"></script>
    <![endif]-->  
</head>
    
</head>
<body>
<header>
    <div class="container">
        <nav id="ex-homepage-header" class="navbar navbar-default ex-main-header">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" rel="nofollow">
                    <img src="/templates/zaimhunter/assets/img/logo-zaimhunter.svg" alt="logo-zaimhunter">
                </a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right"> 
                    <li class="ex-dropdown-menu dropdown"><a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">О сервисе</a>
                        <ul class="dropdown-menu">
                            <li><a rel="nofollow" href="/about">О сервисе</a></li>
                            <li><a rel="nofollow" href="/money">Виды займов</a></li>
                            <li><a rel="nofollow" href="/credits">Как не попасть в долговую яму</a></li>
                            <li><a rel="nofollow" href="/restructuring">Реструктуризация кредита</a></li>
                            <li><a rel="nofollow" href="/refinancing">Рефинансирование</a></li>
                            <li><a rel="nofollow" href="/insolvency">Банкротство физических лиц</a></li>
                        </ul>
                    </li>
                    <li class="ex-dropdown-menu dropdown"><a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Документы</a>
                        <ul class="dropdown-menu"> 
                            <li><a rel="nofollow" href="/oferta">Публичная оферта</a></li>
                            <li><a rel="nofollow" href="/agree">Пользовательское соглашение</a></li>
                            <li><a rel="nofollow" href="/soglasie">Согласие на обработку данных</a></li>
                            <li><a rel="nofollow" href="/rules">Правила предоставления займов</a></li>
                        </ul>
                    </li>
                    <li><a rel="nofollow" href="/<?php echo $this->input->cookie('lk')? 'lk' : 'form'; ?>">Получение денег</a></li>
                    <li><a rel="nofollow" href="/faq">Вопрос - ответ</a></li>
                    <li><a rel="nofollow" href="" data-toggle="modal" data-target="#helpModal">Обратная связь</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>