<!DOCTYPE html>
<html>
<head>
<title>Dengimo.ru</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html" />
<meta name="Description" content="Dengimo — лучших онлайн сервис в РФ по подбору займов"/>
<meta name="Keywords" content="займ, займы, онлайн, деньги, заем"/>
<meta name="robots" content="none"/> 
<meta name="copyright" lang="en" content="Dengimo.ru" />
<meta http-equiv="cleartype" content="on" /> 
<link rel="shortcut icon" type="image/png" href="/templates/dengimo/img/favicon.png" />

<link href="/modules/jquery.ion.rangeslider/css/ion.rangeSlider.css" rel="stylesheet" media="screen">
<link href="/modules/jquery.ion.rangeslider/css/ion.rangeSlider.skinHTML5.css" rel="stylesheet" media="screen">

<link href="/modules/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

<link href="/templates/dengimo/style.css?ver=3" rel="stylesheet" media="screen">

<script src="/modules/jquery/jquery-1.11.3.min.js"></script>

<!--[if lte IE 9]>
<script src="/modules/html5shiv/html5shiv.js"></script>
<![endif]-->

<?php if ($this->uri->segment(1) != 'form') {
    require 'templates/common/googlesyndication.php';
}?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-FVT9Z22');</script>
<!-- End Google Tag Manager -->
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-45591397-16', 'auto', {'name': 'vteleport_ru', 'allowLinker':true});
 ga('vteleport_ru.require', 'linker');
 ga('vteleport_ru.linker:autoLink',['onezaim.com','onezaim.ru','manimo.su','manimo.ru','my-zaim.com','my-zaim.ru','upfinance.ru','ezaimo.net','ezaimo.ru','tratimo.ru','vivuso.ru','vspz.ru','zaim365.ru','zaimmigom.ru','optima-zaim.ru', 'safezaim.com', 'zaimsrazu.ru', 'zanimalov.ru', 'getzaim.su', 'gutfin.ru', 'zanimalo.ru', 'kredito24.su', 'kredito24-mail.ru', 'zaimo-mail.ru', 'zaimomail.ru', 'mail-kredito.ru', 'kreditomail.ru', 'mail-zaimo.ru', 'dengimo.ru', 'dengoman.ru', 'edenga.ru', ' rublimo.ru', 'vkredito.ru', 'bzaim5.ru', 'dengibystra.ru']);

 ga(function() {
   var gaTracker = ga.getByName('vteleport_ru');
   var clientId = gaTracker.get('clientId');
   ga('vteleport_ru.set', 'dimension1', clientId);
 });

 ga('vteleport_ru.send', 'pageview');

</script>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-FVT9Z22"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
<div class="page">

<nav class="navbar">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="/"><img alt="" src="/templates/dengimo/img/logo.png"></a>
			
			<button type="button" class="navbar-toggle collapsed pull-right hidden-sm hidden-xs" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Раскрыть меню</span>
				<i class="glyphicon glyphicon-menu-hamburger"></i>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
		
		
			<!-- <ul class="nav navbar-nav navbar-right">
				<a href="/<?php// echo $this->input->cookie('lk')? 'lk' : 'form'; ?>" class="navbar-btn navbar-btn-small visible-sm">
					<img src="/templates/dengimo/img/ava.png">
				</a> 
				<?php //if ($this->input->cookie('lk')) { ?>
				<a href="/lk" class="navbar-btn pull-right hidden-xs hidden-sm">
					<img src="/templates/dengimo/img/ava.png">
					<strong class="hidden-md hidden-sm hidden-xs"><span class="f ec"></span><br><span class="i ec"></span> <span class="o ec"></span></strong>
				</a>
				<?php// } else { ?>
				<a href="/form" class="navbar-btn pull-right hidden-xs hidden-sm">
					<img src="/templates/dengimo/img/ava.png">
					<strong>Личный<br>кабинет</strong>
				</a>
				<?php //} ?>
			</ul> -->
			
			
                    	<ul class="nav navbar-nav menu navbar-right">
				<li><a href="/about">О сервисе</a></li>
				<li><a href="<?php echo $this->input->cookie('lk')? 'lk' : 'form'; ?>">Получить деньги</a></li>
				<li><a href="/faq">Вопросы-ответы</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
     							<textarea class="form-control input-lg" id="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения" required></textarea>
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
<div id="loading" style="display:none;"><span><i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span></div>
