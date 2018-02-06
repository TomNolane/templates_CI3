<?php if(!isset($my_title)) $my_title='Срочные займы круглосуточно без проверок Онлайн';
if(!isset($description)) $description='Vkredito - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $my_title;?></title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Description" content="<?php echo $description;?>" />
	<meta name="Keywords" content="моментальный заем, займы, онлайн, деньги" />
	<meta name="robots" content="all" />
	<meta name="copyright" lang="ru" content="Vkredito.ru" />
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="Vkredito - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://Vkredito.ru/templates/vkredito/img/bg.png" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://Vkredito.ru/" />
	<meta name="twitter:card" content="https://Vkredito.ru/templates/vkredito/img/bg.png" />
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta name="twitter:description" content="Vkredito - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!" />
	<meta name="twitter:image:src" content="https://Vkredito.ru/templates/vkredito/img/bg.png" />
	<meta name="twitter:url" content="https://Vkredito.ru/" />
	<meta name="twitter:domain" content="Vkredito.ru" />
	<link rel="shortcut icon" type="image/png" href="/templates/vkredito/img/favicon.png" />

	<?php // CSS
		echo '<style>';
		require "templates/vkredito/css/ion.rangeSlider.css";
		echo '</style>';
		echo '<style>';
		require "templates/vkredito/css/font-awesome.min.css";
		echo '</style>';
		echo '<style>';
		require "templates/vkredito/css/bootstrap.min.css";
		echo '</style>';
		echo '<style>';
		require "templates/vkredito/css/style.css";
		echo '</style>';
		echo '<style>';
		require "templates/vkredito/css/suggestions.min.css"; 
		echo '</style>';
	?>
	<?php if ($this->uri->segment(1) !='form') {
	echo '
		<script>
			(adsbygoogle=window.adsbygoogle || []).push( {
				google_ad_client: "ca-pub-2472854344350368", enable_page_level_ads: true
			});
		</script>';
	}
	else 
	{
		echo '<style>';
		require "modules/awesome-bootstrap-checkbox-master/awesome-bootstrap-checkbox.css"; 
		echo '</style>';
		echo '<style>.tip-twitter {
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
			font:bold 11px/14px \'Lucida Grande\',sans-serif;
		}

		/* Configure an arrow image - the script will automatically position it on the correct side of the tip */
		.tip-twitter .tip-arrow-top {
			margin-top:-5px;
			margin-left:-5px; /* approx. half the width to center it */
			top:0;
			left:50%;
			width:9px;
			height:5px;
			background:url(/templates/vkredito/img/tip-twitter_arrows.gif) no-repeat;
		}
		.tip-twitter .tip-arrow-right {
			margin-top:-4px; /* approx. half the height to center it */
			margin-left:0;
			top:50%;
			left:100%;
			width:5px;
			height:9px;
			background:url(/templates/vkredito/img/tip-twitter_arrows.gif) no-repeat -9px 0;
		}
		.tip-twitter .tip-arrow-bottom {
			margin-top:0;
			margin-left:-5px; /* approx. half the width to center it */
			top:100%;
			left:50%;
			width:9px;
			height:5px;
			background:url(/templates/vkredito/img/tip-twitter_arrows.gif) no-repeat -18px 0;
		}
		.tip-twitter .tip-arrow-left {
			margin-top:-4px; /* approx. half the height to center it */
			margin-left:-5px;
			top:50%;
			left:0;
			width:5px;
			height:9px;
			background:url(/templates/vkredito/img/tip-twitter_arrows.gif) no-repeat -27px 0;
		}</style>
		<style>
		#ya-rtb 
		{
			display: none;
		}
		.form-control {
			border-width: 2px;
			font-size: 23px;
			height: 53px;
			border-radius: 20px;
		}
		.form-control-feedback{
			top: 5px;
		}
		</style>';
	}

	if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
    {
    echo '<style>';
    require "templates/vkredito/css/style_lk.css";
    echo '</style>';
    }
?>
	<!--[if lte IE 9]><script src="/modules/html5shiv/html5shiv.js"></script><![endif]-->
	<script >
		(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol +
			'//vk.com/rtrg?r=AB08QuA*AHqYGgS1qSBS6k8osS6uuM0vwS7*GJOxHTjgB6b3yrRzsaxRA1KdhNf2pLUkYjuXeJvfaRnExxKnHxYFNvF2NIeOXGQG6ID7zAK1LjO2*5JwKmrAYlejenz3cv*G0tu9UfpsE3Bj9StLFGJC4Xc7FnTUd7KiOjzBcJY-&pixel_id=1000081266';
	</script>
	<?php require 'google_tag_manager.php';
?>
	<!-- Sendpuls -->
	<?php require 'sendpuls.php';
?>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQ8TJJ9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="page">
		<nav class="navbar">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">
						<img alt="logo.png" src="/templates/vkredito/img/logo.png">
					</a>
					<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-1"
					    aria-expanded="false">
						<span class="sr-only">Раскрыть меню</span>
						<i class="glyphicon glyphicon-menu-hamburger"></i>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav menu">
						<li>
							<a href="/about">О проекте</a>
						</li>
						<li>
							<a href="/faq">Вопрос-ответ</a>
						</li>
						<li>
							<a href="/form">Забрать деньги</a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a>
						</li>
					</ul>
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
                    <h1 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h1>
                    <p>Просто заполните форму и наш специалист свяжется с Вами</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="feedback-name" placeholder="Имя" title="Имя" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control input-lg" id="feedback-phone" value="8(977)7879665" placeholder="Телефон" title="Телефон" required>
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