<!DOCTYPE html>
<html>
<head>
<title>Edenga.ru</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="none"/>
<link rel="shortcut icon" type="image/png" href="/templates/edenga/img/favicon.png" />

<link href="/modules/jquery.ion.rangeslider/css/ion.rangeSlider.css" rel="stylesheet" media="screen">
<link href="/modules/jquery.ion.rangeslider/css/ion.rangeSlider.skinHTML5.css" rel="stylesheet" media="screen">

<link href="/modules/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

<link href="/templates/edenga/style.css?ver=2" rel="stylesheet" media="screen">

<script src="/modules/jquery/jquery-1.11.3.min.js"></script>

<!--[if lte IE 9]>
<script src="/modules/html5shiv/html5shiv.js"></script>
<![endif]-->
<?php if ($this->uri->segment(1) != 'form') {
    require 'templates/common/googlesyndication.php';
}?>
<script charset="UTF-8" src="//cdn.sendpulse.com/28edd3380a1c17cf65b137fe96516659/js/push/9e68a9b1b0fb51d74cc1b74eebc2e588_1.js" async></script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZBK47T');</script>
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
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZBK47T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<nav class="navbar">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed hidden-sm hidden-xs" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Раскрыть меню</span>
				<img src="/templates/edenga/img/mobile/menu.png">
			</button>			
			<a class="navbar-brand" href="/"><img alt="" src="/templates/edenga/img/logo.png"></a>
                </div>
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav menu">
                                <li><a href="/<?php echo $this->input->cookie('lk')? 'lk' : 'form'; ?>">Оформить займ</a></li>
				<li><a href="/service">О нас</a></li>                                
                                <li><a href="/faq">Вопрос-ответ</a></li>
				<li><a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a></li>
                                <li><a href="/docs">Документы</a></li>
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
                                                        <button type="button" class="btn btn-primary btn-lg btn-block" id="feedback-send">Отправить</button>
						</div>                                            
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="loading" style="display:none;"><span><i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span></div>
