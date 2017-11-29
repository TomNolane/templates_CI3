<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fanzaim</title>

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
     if ($this->uri->segment(1) == 'lk') 
     {
         echo '<style>';
         require "templates/dengimo/css/style_lk.css";
         echo '</style>';
     }
     ?> 
     <!-- javascript -->
     <?php
     echo '<script>';
     require 'templates/fanzaim/assets/js/oSpP.js';
     echo '</script>';
     ?> 
     <!--[if lte IE 9]>
     <script src="/modules/html5shiv/html5shiv.js"></script>
     <![endif]-->
	<?php
		if ($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'confirm') 
		{
			echo '  
					<script>
					  (adsbygoogle = window.adsbygoogle || []).push({
						google_ad_client: "ca-pub-2044590115529379",
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
    <!-- Modal -->
	<!-- <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h3 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h3>
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
	</div> -->
	<!-- <div id="loading hidden">
		<span>
			<i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
    </div> -->
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