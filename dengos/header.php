<?php
    require 'templates/common/new/php/check_bot.php';
	$my_title = ''; $description = ''; $universal_folder = 0; $price = "8 000";
	$main = 'bigzaim';
	$link = 'https://pxl.leads.su/click/3b00787cbb4b9484e25cbe512163ca7d?source=dengos.ru/bigzaim';
    
    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
    $link = str_replace("#site1", ucfirst($domen), $link);
    $link = str_replace("#site", $domen, $link);

    $domen = $this->uri->segment(1);
    
    if(isset($domen[1]))
        $domen = $domen[1];

    switch($domen)
    {
        case 'p': $domen = "push-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
        case 'e': $domen = "email-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
        default; $domen = "sms-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
    }

    if($this->input->get())
        $link = str_replace("#name#", implode('',$this->input->get())."_".$domen, $link);
    else 
        $link = str_replace("#name#", $domen, $link);

    $domain = getDomain();

    $my_title = $domain.' Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
	$description = $domain.' осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($this->uri->segment(1) != 'index' && $this->uri->segment(1) != '') echo $my_title; else echo $domain.' доступные займы';?></title>
    <meta name="description" content="<?=$description?>">
    <meta property="og:url" content="https://<?=$domain?>/<?=$main?>">
    <meta property="og:title" content="Вам одобрено!">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/templates/dengos/img/universal/<?=$main?>_header.jpg">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="canonical" href="https://<?=$domain?>/<?=$main?>">
    <link rel="shortcut icon" href="/templates/dengos/img/universal/<?=$main?>.ico" type="image/x-icon">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-grid-3.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-blocks-2.12.css" type="text/css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-animation-1.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-slds-1.4.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-zoom-2.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="/templates/dengos/css/universal/<?=$universal_folder?>/custom.css">
	<script src="/templates/dengos/js/universal/jquery-1.10.2.min.js"></script>
    <script src="/templates/dengos/js/universal/osd.js"></script>
    <script async="" id="tildastatscript" src="/templates/dengos/js/universal/tildastat-0.2.min.js"></script>
    <script async="" id="topmailru-code" src="/templates/dengos/js/universal/code.js"></script>
    <script src="/templates/dengos/js/universal/tilda-scripts-2.8.min.js"></script>
    <script src="/templates/dengos/js/universal/tilda-blocks-2.7.js"></script>
    <script src="/templates/dengos/js/universal/lazyload-1.3.min.js" charset="utf-8"></script>
    <script src="/templates/dengos/js/universal/tilda-animation-1.0.min.js" charset="utf-8"></script>
    <script src="/templates/dengos/js/universal/typed.min.js" charset="utf-8"></script>
    <script src="/templates/dengos/js/universal/tilda-slds-1.4.min.js" charset="utf-8"></script>
    <script src="/templates/dengos/js/universal/hammer.min.js" charset="utf-8"></script>
    <script src="/templates/dengos/js/universal/tilda-zoom-2.0.min.js" charset="utf-8"></script>
    <?php require 'sendpuls_all.php'; ?>
    <style>
    <?php
    echo '.t338__logo{float: unset;max-width: 220px !important;}.t338__title{margin-bottom: 40px;padding-top: 200px;text-align: center;} .t-prefix_1{padding-left: 0;padding-right: 0;}';
    echo '@media (max-width: 450px) {.t338__logo{margin-top: 0;float: initial;margin-bottom:0;} }';
    if($this->uri->segment(1) == 'hz' || $this->uri->segment(1) == 'mz')
    {
        echo '#spec, #spec2 {background-color: #fff !important;padding: 10px !important;border-radius: 10px !important;}';
    }
    if($this->uri->segment(1) == 'bg' || $this->uri->segment(1) == 'dz' || $this->uri->segment(1) == 'mz' || $this->uri->segment(1) == 'oz')
    {
        echo '@media (max-width: 640px) {.t-cover__carrier{background-position: center right !important;} .t-valign_middle{vertical-align: unset !important;}.t338__title{padding-top: 0;} }';
    }
    if($this->uri->segment(1) == 'ek' || $this->uri->segment(1) == 'cr')
    {
        echo '@media (max-width: 640px) {.t-valign_middle{vertical-align: unset !important;}.t338__title{padding-top: 0;} }';
    }
    ?>
    @keyframes shadow-pulse {
	0% {
		-webkit-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
		-moz-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
		box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75)
	}

	100% {
		box-shadow: 0 0 0 15px rgba(0, 0, 0, 0)
	}
}
.t-prefix_1 {
      padding-left: 0;
      padding-right: 0;
      margin-top: 20px;
      vertical-align: unset;
}
.pulse2 {
	animation: shadow-pulse 1s infinite !important;
	-webkit-animation: shadow-pulse 1s infinite !important;
}
.t-container {max-width: 1700px;}
.t-col_11 {max-width: 100%;}
.t338__btn {
    font-size: 18px;
    height: 70px;
}
.t-col_12 {max-width: inherit !important;} 

<?php require "templates/common/new/css/common.css"; ?>
li > a {
    font-size: 16px;
    color: #000;
    margin: 0 auto;
    vertical-align: middle;
    margin-top: 20px;
}
.dropdown-menu {
    left: auto !important;
}
    </style>
</head>
<?php
$previous = '';

if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];

}?>
<body class="t-body" style="margin: 0px;">
    <header style="margin: 0 20px; top: 0;">
    <nav class="navbar">
		<div class="col-md-12">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
                    <?php if(in_array($domain, array('dengos.ru', 'dengos.tomnolane.ru'))) : ?>
                        <img src="/templates/dengos/img/dengos-logo.png" class="t338__logo t-img">
                    <? elseif (in_array($domain, array('vkredito.ru', 'vkredito.tomnolane.ru'))) : ?>
                        <img src="/templates/vkredito/assets/img/logo.png" class="t338__logo t-img">
                    <?php else : ?>
                        <img src="/templates/dengos/img/sumas.png" class="t338__logo t-img">
                    <?php endif; ?>
				</a>
			</div>
			<div class="navbar-collapsem hidden-xs" id="navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li >
						<a href="/about">
							О сервисе
						</a>
					</li>
					<li>
						<a href="<?=$link?>" target="_blank">Получить деньги</a>
					</li>
					<li>
						<a id="test" href="/faq">Вопросы-ответы</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
							Документы
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/oferta">Публичная оферта</a></li>
                            <li><a href="/soglasie">Согласие на обработку данных</a></li>
                            <li><a href="/rules">Условия пользования сайтом</a></li>
                            <li><a href="/personal-data">Политика компании</a></li>
                            <li><a href="/calls">Согласие на звонки</a></li> 
                            <li><a href="/regulation">Персональные данные</a></li>
                            <li><a href="/safety">Безопасность данных</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
							Способы получения займа
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/zaim-card">Банковская карта</a></li>
                            <li><a href="/zaim-yandex">Яндекс.Деньги</a></li>
                            <li><a href="/zaim-contact">Contact</a></li>
                            <li><a href="/zaim-qiwi">QIWI VISA кошелек</a></li>
                            <li><a href="/zaim-bank">Счет в банке</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>  
  </header>
<?php require 'adsence_all.php'; ?>
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="663907" data-tilda-page-id="3385037" data-tilda-page-alias="push" data-tilda-formskey="93c3cbd6dbbe2328e90d7d614020b440">