<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'zaimomix - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
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
	<meta name="copyright" lang="ru" content="zaimomix.ru" /> 
	
	 
	
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="zaimomix - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://zaimomix.ru/templates/zaimomix/assets/img/bg.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://zaimomix.ru/" />
	<meta name="twitter:card" content="https://zaimomix.ru/templates/zaimomix/assets/img/bg.png"/>
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
	<meta name="twitter:description" content="zaimomix - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta name="twitter:image:src" content="https://zaimomix.ru/templates/zaimomix/assets/img/bg.png"/>
	<meta name="twitter:url" content="https://zaimomix.ru/"/>
	<meta name="twitter:domain" content="zaimomix.ru"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="/templates/zaimomix/favicon/favicon-16x16.png" type="image/png">
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/zaimomix/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/zaimomix/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/zaimomix/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/zaimomix/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/zaimomix/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/zaimomix/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/zaimomix/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/zaimomix/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/zaimomix/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/templates/zaimomix/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/zaimomix/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/zaimomix/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/zaimomix/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/zaimomix/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/templates/zaimomix/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
     <?php 
     echo '<style>';
     require 'templates/zaimomix/assets/css/style.css';
     echo '</style>';
     echo '<style>';
     require 'templates/zaimomix/assets/css/style_custom.css';
     echo '</style>';
     echo '<style>';
     require 'templates/zaimomix/assets/css/font-awesome.min.css';
     echo '</style>';
     echo '<style>';
     require 'templates/zaimomix/assets/css/suggestions.min.css';
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
         background:url(/templates/zaimomix/assets/img/tip-twitter_arrows.gif) no-repeat;
     }
     .tip-twitter .tip-arrow-right {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:0;
         top:50%;
         left:100%;
         width:5px;
         height:9px;
         background:url(/templates/zaimomix/assets/img/tip-twitter_arrows.gif) no-repeat -9px 0;
     }
     .tip-twitter .tip-arrow-bottom {
         margin-top:0;
         margin-left:-5px; /* approx. half the width to center it */
         top:100%;
         left:50%;
         width:9px;
         height:5px;
         background:url(/templates/zaimomix/assets/img/tip-twitter_arrows.gif) no-repeat -18px 0;
     }
     .tip-twitter .tip-arrow-left {
         margin-top:-4px; /* approx. half the height to center it */
         margin-left:-5px;
         top:50%;
         left:0;
         width:5px;
         height:9px;
         background:url(/templates/zaimomix/assets/img/tip-twitter_arrows.gif) no-repeat -27px 0;
     }';
     echo '</style>';

     if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
     {
         echo '<style>';
         require "templates/zaimomix/assets/css/style_lk.css";
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
    if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index') {
        echo '<body>
        <main class="ex-home">
            <nav class="navbar navbar-expand-lg ex-main-header">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'form') {
         echo '<body class="ex-sticky">
         <nav class="navbar navbar-expand-lg ex-main-header-white">
             <div class="container">
                 <a class="ex-brand navbar-brand" href="/"></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                         aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                     <div class="navbar-nav ">
                         <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             меню
                             <i></i>
                         </a>
                         <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="/about">О сервисе</a>
                             <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                             <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                             <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                             <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                             <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                         </div>
                     </div>
                 </div>
             </div>
         </nav>';
    }
    elseif($this->uri->segment(1) == 'faq') {
         echo '<body class="ex-sticky">
         <nav class="navbar navbar-expand-lg ex-main-header-white">
             <div class="container">
                 <a class="ex-brand navbar-brand" href="/"></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                         aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                     <div class="navbar-nav ">
                         <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             меню
                             <i></i>
                         </a>
                         <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/about">О сервисе</a>
                            <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                            <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                            <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                            <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                            <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                         </div>
                     </div>
                 </div>
             </div>
         </nav>';
    }
    elseif($this->uri->segment(1) == 'rules' || $this->uri->segment(1) == 'documents' || $this->uri->segment(1) == 'soglasie' || $this->uri->segment(1) == 'oferta' || $this->uri->segment(1) == 'zaim-card' || $this->uri->segment(1) == 'zaim-bank' || $this->uri->segment(1) == 'zaim-qiwi' || $this->uri->segment(1) == 'zaim-yandex' || $this->uri->segment(1) == 'zaim-contact') {
        echo '<body class="ex-sticky">
        <main>
            <nav class="navbar navbar-expand-lg ex-main-header-white">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'about') {
        echo '<body class="ex-sticky">
        <main class="ex-about">
            <nav class="navbar navbar-expand-lg ex-main-header-white ex-main-header-art">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'asked-questions') {
        echo '<body class="ex-sticky">
        <main class="ex-article ex-article-1">
            <nav class="navbar navbar-expand-lg ex-main-header-white ex-main-header-art">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'microfinance') {
        echo '<body class="ex-sticky">
        <main class="ex-article ex-article-2">
            <nav class="navbar navbar-expand-lg ex-main-header-white ex-main-header-art">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'bad-credit-history') {
        echo '<body class="ex-sticky">
        <main class="ex-article ex-article-3">
            <nav class="navbar navbar-expand-lg ex-main-header-white ex-main-header-art">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') {
        echo '<body class="ex-sticky">
        <nav class="navbar navbar-expand-lg ex-main-header-white">
            <div class="container">
                <a class="ex-brand navbar-brand" href="/"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                    <div class="navbar-nav ">
                        <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            меню
                            <i></i>
                        </a>
                        <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/about">О сервисе</a>
                            <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                            <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                            <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                            <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                            <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                        </div>
                    </div>
                </div>
            </div>
        </nav>';
    }
?>
<!-- Modal -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Заполните форму
                    и наш менеджер свяжется с вами</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control ec tip" name="feedback-name" title="Введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" value="79777777777" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required> 
                    </div>
                    <div class="form-group">
                        <textarea id="feedback-comment" rows="3"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                        <button type="button"  id="feedback-send" class="ex-main-btn">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>