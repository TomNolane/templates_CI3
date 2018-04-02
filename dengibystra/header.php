<?php 
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Dengibystra - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
?>
<!doctype html>
<html lang="ru">
<head>
    <title><?php echo $my_title;?></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <meta name="Description" content="<?php echo $description;?>" />
    <meta name="Keywords" content="моментальный заем, займы, онлайн, деньги" />
    <meta name="robots" content="all" />
    <meta name="copyright" lang="ru" content="dengibystra.ru" /> 
    <meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
    <meta property="og:description" content="dengibystra - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
    <meta property="og:image" content="https://dengibystra.ru/templates/dengibystra/assets/img/calc.png"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://dengibystra.ru/" />
    <meta name="twitter:card" content="https://dengibystra.ru/templates/dengibystra/assets/img/calc.png"/>
    <meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
    <meta name="twitter:description" content="dengibystra - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
    <meta name="twitter:image:src" content="https://dengibystra.ru/templates/dengibystra/assets/img/calc.png"/>
    <meta name="twitter:url" content="https://dengibystra.ru/"/>
    <meta name="twitter:domain" content="dengibystra.ru"/>
	
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
    
    <?php 
        echo '<!-- style --> ';
        echo '<style>';
        require "templates/dengibystra/assets/css/style.css"; 
        echo '</style>';
        echo '<style>';
        require "templates/dengibystra/assets/css/uniqueSingle.css";
        echo '</style>';
        echo '<style>';
        require "templates/dengibystra/assets/css/suggestions.min.css";
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
			background:url(/templates/dengibystra/assets/img/tip-twitter_arrows.gif) no-repeat;
		}
		.tip-twitter .tip-arrow-right {
			margin-top:-4px; /* approx. half the height to center it */
			margin-left:0;
			top:50%;
			left:100%;
			width:5px;
			height:9px;
			background:url(/templates/dengibystra/assets/img/tip-twitter_arrows.gif) no-repeat -9px 0;
		}
		.tip-twitter .tip-arrow-bottom {
			margin-top:0;
			margin-left:-5px; /* approx. half the width to center it */
			top:100%;
			left:50%;
			width:9px;
			height:5px;
			background:url(/templates/dengibystra/assets/img/tip-twitter_arrows.gif) no-repeat -18px 0;
		}
		.tip-twitter .tip-arrow-left {
			margin-top:-4px; /* approx. half the height to center it */
			margin-left:-5px;
			top:50%;
			left:0;
			width:5px;
			height:9px;
			background:url(/templates/dengibystra/assets/img/tip-twitter_arrows.gif) no-repeat -27px 0;
		}
		'; 
		echo '</style>'; 

        if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
        {
            echo '<style>';
            require "templates/dengibystra/assets/css/style_lk.css";
            echo '</style>';
        } 

        if ($this->uri->segment(1) == 'form') 
        {
        echo '<style>#ya-rtb{display: none;}</style>
        <style>
            .has-error .help-block {
                display : none;
            }
            .ex-form .ex-anketa-main .form-group input {
                padding: 15px 5px 15px 15px;
            } 
            ::placeholder {
                font-size: 13px !important;
            }
            ::-webkit-input-placeholder {
                font-size: 13px !important;
            }
            ::-moz-placeholder {
                font-size: 13px !important;
            }
            .ex-form .ex-anketa-main .form-group select {
                font-size: 14px;
                padding: 15px 35px 15px 5px;
            }
            .ex-wrapper {
                margin-bottom: 20px;
            }
            .ex-form .ex-anketa-main .form-group {
                padding-bottom: 0px !important;
            }
            #passport_code::placeholder , #passportdate::placeholder{
                font-size: 10px !important; 
            }
            #passport_code::-moz-placeholder, #passportdate::-moz-placeholder {
                font-size: 10px !important; 
            }
            #passport_code::-webkit-input-placeholder, #passportdate::-webkit-input-placeholder {
                font-size: 10px !important; 
            }
            .irs-single { 
                 margin-left: -32px !important; 
        }
        .form-group input[type="radio"]{
          width: 15px !important;
          height: 15px !important;
         
        }
        .reg_same {
            display: inline-block !important;
          vertical-align: middle !important;
          margin-bottom: 0 !important;
        }
        .asd {
            display: inline-block !important ;
          vertical-align: middle !important;
          margin-bottom: 0 !important;
        }
        </style>';
    }
    ?>
    <!--[if lte IE 9]>
    <script src="/modules/html5shiv/html5shiv.js"></script>
    <![endif]-->  
    <?php if ($this->uri->segment(1) != 'form') {
        require 'templates/common/googlesyndication.php';
        
    }
        echo '<!-- Сендпульс Sendpulse -->';
        require 'sendpuls.php';
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
                    <a href="/">
                        <img src="/templates/dengibystra/assets/img/logo.png" alt="Image missing">
                    </a>
                </div>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right"> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">О проекте
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/about" class="hov">О нас</a>
                                </li>
                                <li>
                                    <a href="/money" class="hov">Виды займов</a>
                                </li> 
                            </ul>
                        </li>
                        <li><a href="/faq">Вопросы-ответы</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Информация
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/oferta" class="hov">Публичная оферта</a>
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
                        <li><a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h1>
                    <p>Просто заполните форму и наш специалист свяжется с Вами</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="feedback-name" placeholder="Имя" title="Имя">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control input-lg" id="feedback-phone" placeholder="Телефон" title="Телефон">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" id="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-lg" id="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-lg btn-block" id="feedback-send">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<!-- Modal -->