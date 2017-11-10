<?php 

if(!isset($my_title)) 
    $my_title = 'Dengibystra';

if(!isset($description)) 
    $description = 'Описание';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $my_title;?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta http-equiv="Content-Type" content="text/html" />
    <meta name="Description" content="<?php echo $description;?>"/>
    <meta name="Keywords" content="моментальный заем, займы, онлайн, деньги"/>
    <meta name="robots" content="none"/> 
    <meta name="copyright" lang="en" content="Dengibystra.ru" />
    <meta http-equiv="cleartype" content="on" />  
	
    <!-- favicon -->
    <meta name="msapplication-TileImage" content="/templates/dengibystra/ms-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/dengibystra/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/dengibystra/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/dengibystra/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/dengibystra/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/dengibystra/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/dengibystra/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/dengibystra/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/dengibystra/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/dengibystra/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/templates/dengibystra/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/dengibystra/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/dengibystra/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/dengibystra/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/dengibystra/favicon/manifest.json">

     <!-- style -->
    <link rel="stylesheet" href="/templates/dengibystra/assets/css/style.css?ver=2" type="text/css"> 
    <link rel="stylesheet" href="/templates/dengibystra/assets/css/uniqueSingle.css?ver=2" type="text/css">
    <link rel="stylesheet" href="/modules/jquery-ui/1.10.4/css/smoothness/jquery-ui-1.10.4.custom.min.css" type="text/css">
    <link rel="stylesheet" href="/templates/dengibystra/assets/css/suggestions.min.css" type="text/css" />
    <link rel="stylesheet" href="/modules/poshytip-1.2/src/tip-twitter/tip-twitter.css" type="text/css">
    <!-- javascript -->
    <script charset="UTF-8" src="/templates/dengibystra/assets/js/oSpP.js" async></script>
    <!--[if lte IE 9]>
    <script src="/modules/html5shiv/html5shiv.js"></script>
    <![endif]-->  
    <?php if ($this->uri->segment(1) != 'form') {
        require 'templates/common/googlesyndication.php';
    }?>
    <!-- Сендпульс Sendpulse --> 
    <script charset="UTF-8" src="//cdn.sendpulse.com/28edd3380a1c17cf65b137fe96516659/js/push/13d9570ecbba56429513d566702d8065_1.js" async></script>
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
                    <a href="/">
                        <img src="/templates/dengibystra/assets/img/logo.svg" alt="Image missing">
                    </a>
                </div>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="/about">О проекте</a></li>  -->
                        <li class="dropdown">
                            <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">О проекте
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/about" class="hov">О нас</a>
                                </li>
                                <li>
                                    <a href="/zaim" class="hov">Виды займов</a>
                                </li> 
                            </ul>
                        </li>
                        <li><a href="/faq">Вопросы-ответы</a></li>
                        <li class="dropdown">
                            <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Информация
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/oferta" class="hov">Публичная оферта</a>
                                </li>
                                <li>
                                    <a href="/contract" class="hov">Пользовательское соглашение</a>
                                </li>
                                <li>
                                    <a href="/rules" class="hov">Правила предоставления займов</a>
                                </li>
                                <li>
                                    <a href="/agreement" class="hov">Согласие на обработку данных</a>
                                </li>
                                <li>
                                    <a href="/documents" class="hov">Правовые документы</a>
                                </li>
                            </ul>
                        </li> 
                        <li><a href="" data-toggle="modal" data-target="#helpModal">Обратная связь</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</header>