<!DOCTYPE html>
<html lang="ru">
<head>
<title>Dengoman.ru</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta http-equiv="Content-Type" content="text/html" /> -->
<meta name="Description" content="Dengoman — сервис срочных онлайм заемов"/>
<meta name="Keywords" content="срочный заем, займы, онлайн, деньги"/>
<meta name="robots" content="none"/> 
<meta name="copyright" lang="ru" content="Dengoman.ru" />
<!-- <meta http-equiv="cleartype" content="on" />  -->
<link rel="shortcut icon" type="image/png" href="/templates/dengoman/img/favicon.png" />

<link href="/modules/jquery.ion.rangeslider/css/ion.rangeSlider.css" rel="stylesheet" media="screen">
<link href="/modules/jquery.ion.rangeslider/css/ion.rangeSlider.skinHTML5.css" rel="stylesheet" media="screen">

<link href="/modules/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

<link href="/templates/dengoman/style.css?ver=2" rel="stylesheet" media="screen">
	<?php
		if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
		{
			echo '<style>';
			require "templates/dengoman/css/style_lk.css";
			echo '</style>';
		}
	?>

<script src="/modules/jquery/jquery-1.11.3.min.js"></script>

<!--[if lte IE 9]>
<script src="/modules/html5shiv/html5shiv.js"></script>
<![endif]-->
<?php if ($this->uri->segment(1) != 'form') {
    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-4802160271558776",
		enable_page_level_ads: true
	  });
	</script>';
}?>
<script>
var amount = 15000;
</script>
<script charset="UTF-8" src="//cdn.sendpulse.com/28edd3380a1c17cf65b137fe96516659/js/push/a24a3e7800616458e3235a523de8e4c4_1.js" async></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PL9PRTR');</script> 
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PL9PRTR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
<div class="page">

<nav class="navbar">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="/"><img alt="logo.png" src="/templates/dengoman/img/logo.png"></a>
			
			<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Раскрыть меню</span>
				<i class="glyphicon glyphicon-menu-hamburger"></i>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav menu">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Займы <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/info/#card">На банковскую карту</a></li>
						<li><a href="/info/#qiwi">На QIWI-кошелёк</a></li>
						<li><a href="/info/#contact">Через CONTACT</a></li>
						<li><a href="/info/#yandex">На Яндекс.Деньги</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Сервис <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/about">О нас</a></li>
						<li><a href="/faq">Вопрос-ответ</a></li>
						<li><a href="/contacts">Контакты</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Документы <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<!-- <li><a href="/docs/#agree">Пользовательское соглашение</a></li> -->
						<li><a href="/docs/#rules">Правила предоставления займов</a></li>
						<li><a href="/docs/#personal">Согласие на обработку данных</a></li>
						<li><a href="/docs/#oferta">Публичная оферта</a></li>
					</ul>
				</li>
				<li><a href="#" data-toggle="modal" data-target="#feedbackModal">Задать вопрос</a></li>
                                <li class="visible-xs-block">
                                    <?php if ($this->input->cookie('lk')) { ?>
                                    <a href="/form" class="navbar-btn hidden-xs">
										<span class="visible-sm visible-md">Получить займ</span>
										<span class="hidden-sm hidden-md"><span class="f ec"></span> <span class="i ec"></span> <span class="o ec"></span></span>
                                    </a>
                                    <?php } else { ?>
                                    <a href="/form" class="navbar-btn">Получить займ</a>
                                    <?php } ?>                                    
                                </li>
			</ul>
			<ul class="nav navbar-nav navbar-right hidden-xs">
                            <li>
                                <a href="/form" class="navbar-btn">Получить займ</a>
                            </li>
			</ul>
		</div>
	</div>
</nav>

<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h4>
			</div>
			<div class="modal-body">
				<p>Просто заполните форму и наш специалист свяжется с Вами</p>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control" id="feedback-name" placeholder="Имя" title="Имя">
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" id="feedback-phone" placeholder="Телефон" title="Телефон">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="feedback-email" placeholder="Email" title="Email" required>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="form-group">
							<textarea class="form-control" id="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения" required></textarea>
						</div>
						<button type="button" class="btn" id="feedback-send">Отправить</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="loading" style="display:none;"><span><i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span></div>