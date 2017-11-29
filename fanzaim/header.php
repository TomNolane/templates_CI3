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
    <link rel="stylesheet" href="assets/css/style.css">

    <!--[if lte IE 9]>
	<script src="/modules/html5shiv/html5shiv.js"></script>
	<![endif]-->
	<?php
		if ($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'confirm') 
		{
			echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  
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
                <a class="navbar-brand" href="#"></a>
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
                                <a rel="nofollow" id="text-decoration" href="#" data-toggle="modal" data-target="#feedbackModal"><button class="ex-main-btn ex-ask-question" data-toggle="modal" data-target="#askQuestion">Обратная связь</button></a>
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
	<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
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
	</div>
	<div id="loading">
		<span>
			<i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
	</div>