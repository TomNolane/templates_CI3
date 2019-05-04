<?php
    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
    $link = str_replace("#site1", ucfirst($domen), $link);
    $link = str_replace("#site", $domen, $link);
	$domen = '';
	/*
    $domen = $this->uri->segment(1);

    if(isset($domen[1]))
        $domen = $domen[1];

    switch($domen)
    {
        case 'p': $domen = "push-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
        case 'e': $domen = "email-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
        default; $domen = "sms-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
    }
	*/

    if($this->input->get())
        $link = str_replace("#name#", implode('',$this->input->get()), $link);
    else 
        $link = str_replace("#name#", $domen, $link);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$my_title?></title>
    <meta name="description" content="<?=$description?>">
    <meta property="og:url" content="https://dengos.ru/<?=$main?>">
    <meta property="og:title" content="Вам одобрено!">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/templates/dengos/img/universal/<?=$main?>_header.jpg">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="canonical" href="https://dengos.ru/<?=$main?>">
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
    <script  src="//cdn.sendpulse.com/js/push/33505121ee025ec05bae5fd44c7ba208_1.js" async></script>
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

<?php
require 'templates/common/new/css/common.css';
?>
li > a {
    font-size: 16px;
    color: #000;
    margin: 0 auto;
    vertical-align: middle;
    margin-top: 20px;
}
.navbar-brand { 
	float: none  !important;
    text-align: center;
    display: inline-grid;
    height: 50px;
    padding: 15px;
    font-size: 18px;
    line-height: 20px;
}
@media (min-width: 768px)
{
.navbar-header {
    float: unset !important;
} 
}
@media (max-width: 768px) {
    .hhh2 {
        font-size: 17px;
    }
    .white.offers 
    {
        font-size: 10px;
    }
}

    </style>

    <style>ins#aswift_0_expand{outline:2px solid transparent !important;}</style>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body class="t-body" style="margin: 0px;">
    <header class="hidden" style="margin: 0 20px; top: 0; text-align: center">
        <a class="navbar-brand" href="/">
                <img src="/templates/dengos/img/universal/<?=$main?>_logo.png" class="t338__logo t-img">
            </a>
    <!-- <nav class="navbar">
		<div class="col-md-12 text-center">
			<div class="navbar-header" >   
				
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
	</nav>  -->
     
  </header>
    <!--allrecords-->
    <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="663907"
        data-tilda-page-id="3385037" data-tilda-page-alias="push" data-tilda-formskey="93c3cbd6dbbe2328e90d7d614020b440"
        style="overflow-x: hidden;">
        <div id="rec63469314" class="r t-rec t-screenmin-480px" style=" " data-animationappear="off" data-record-type="338"
            data-screen-min="480px">
            <!-- cover -->
            <div class="t-cover" id="recorddiv63469314" bgimgfield="img" style="height:100vh; background-image:url(&#39;/templates/dengos/img/universal/<?=$main?>_header.jpg&#39;);">
                <div class="t-cover__carrier loaded" id="coverCarry63469314" data-content-cover-id="63469314"
                    data-content-cover-bg="/templates/dengos/img/universal/<?=$main?>_header.jpg"
                    data-content-cover-height="100vh" data-content-cover-parallax="" style="height: 100vh; background-attachment: scroll; background-image: url(&quot;/templates/dengos/img/universal/<?=$main?>_header.jpg&quot;);"
                    src=""></div>
                <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#fe000000&#39;, endColorstr=&#39;#fe000000&#39;);"></div>
                <div class="t338">
                    <div class="t-container">
                        <div class="t-col_11 t-prefix_1">
                            <div class="t-cover__wrapper " style="height:100%; position: relative;z-index: 1;display: block;width: 100%;">
                                <div class="t338" style="">
                                    <div data-hook-content="covercontent">
                                        <div class="t339__wrapper"> <a href="<?=$link?>"
                                                target="_blank"><img class="t338__logo t-img loaded" id="spec" data-tu-max-width="800"
                                                    data-tu-max-height="800" style="max-width:250px;" src="/templates/dengos/img/universal/<?=$main?>_logo.png"
                                                    data-original="/templates/dengos/img/universal/<?=$main?>_logo.png"
                                                    imgfield="img2" data-hook-clogo="coverlogo"></a>
                                              <div class="t338__title t-title t-title_xxs" style="" field="title">
                                                <div style="text-align: center;font-size:52px;text-shadow: 1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000" data-customstyle="yes">Быстрый заем <br>до
                                                    <?=$price?> рублей <br>на карту.<br>
                                                        <span class="typed-cursor">|</span><br></div>
                                            </div>  
                                            <div class="t338__buttonwrapper" style="text-align: center;"><a href="<?=$link?>"
                                                    target="_blank" class="t338__btn t-btn pulse2 ex-main-btn" style="border: 1px solid;color:#000000;background-color:#ffd900;border-radius:300px; -moz-border-radius:300px; -webkit-border-radius:300px;font-weight:700;">
                                                    <table style="width:100%; height:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td>ПОЛУЧИТЬ ДЕНЬГИ</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>#rec63469314 .t-btn[data-btneffects-first],
#rec63469314 .t-btn[data-btneffects-second],
#rec63469314 .t-submit[data-btneffects-first],
#rec63469314 .t-submit[data-btneffects-second] {	position: relative; overflow: hidden; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);
}</style>
            <script>
                $(document).ready(function () {});
            </script>
            <style>#rec63469314 .t-btn:not(.t-animate_no-hover):hover{ background-color: #ffe100 !important; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2) !important;	}	#rec63469314 .t-btn:not(.t-animate_no-hover){ -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out; transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;	}</style>
        </div>
 
        <div id="rec63581518" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off" data-record-type="338"
            data-screen-max="480px">
            <!-- cover -->
            <div class="t-cover" id="recorddiv63581518" bgimgfield="img" style="height:100vh; background-image:url(&#39;/templates/dengos/img/universal/<?=$main?>_header.jpg&#39;);">
                <div class="t-cover__carrier" id="coverCarry63581518" data-content-cover-id="63581518"
                    data-content-cover-bg="/templates/dengos/img/universal/<?=$main?>_header.jpg"
                    data-content-cover-height="100vh" data-content-cover-parallax="" style="height:100vh;background-attachment:scroll; "></div>
                <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#fe000000&#39;, endColorstr=&#39;#fe000000&#39;);"></div>
                <div class="t338">
                    <div class="t-container">
                        <div class="t-col t-col_11 t-prefix_1">
                            <div class="t-cover__wrapper t-valign_middle" style="height:100% !important; position: relative;z-index: 1;">
                                <div class="t338 t-align_center" style="">
                                    <div data-hook-content="covercontent">
                                        <div class="t339__wrapper"> <a href="<?=$link?>"
                                                target="_blank"><img class="t338__logo t-img t-animate t-animate_started"
                                                    data-animate-style="fadeindown" id="spec2" data-animate-group="yes"
                                                    data-tu-max-width="800" data-tu-max-height="800" style="max-width:330px;"
                                                    src="/templates/dengos/img/universal/<?=$main?>_logo.png" data-original="/templates/dengos/img/universal/<?=$main?>_logo.png"
                                                    imgfield="img2" data-hook-clogo="coverlogo"></a>
                                            <div class="t338__title t-title t-title_xxs t-animate t-animate_started"
                                                data-animate-style="fadeinleft" data-animate-group="yes" style="transition-delay: 0.5s;"
                                                field="title">
                                                <div style="font-size:52px;" data-customstyle="yes"><span style="font-size: 38px;text-shadow:1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000">Бесплатный
                                                        заем<br>до 15 000 рублей<br>на карту.</span><br><span style="font-size: 42px;"><span
                                                            style="color: rgb(255, 226, 0);text-shadow:1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000" data-redactor-style="color: rgb(255, 226, 0);">Круглосуточно.
                                                            Быстро. Выгодно</span></span></div>
                                            </div>
                                            <div class="t338__buttonwrapper"><a href="<?=$link?>"
                                                    target="_blank" class="pulse2 t338__btn t-btn t-animate t-animate_no-hover t-animate_started"
                                                    data-animate-style="fadeinup" data-animate-group="yes" style="color: rgb(0, 0, 0); background-color: rgb(255, 217, 0); border-radius: 300px; font-weight: 700; transition-delay: 1s;">
                                                    <table style="width:100%; height:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td>ПОЛУЧИТЬ ДЕНЬГИ</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>#rec63581518 .t-btn[data-btneffects-first],
#rec63581518 .t-btn[data-btneffects-second],
#rec63581518 .t-submit[data-btneffects-first],
#rec63581518 .t-submit[data-btneffects-second] {	position: relative; overflow: hidden; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);
}</style>
            <script>
                $(document).ready(function () {});
            </script>
            <style>#rec63581518 .t-btn:not(.t-animate_no-hover):hover{ background-color: #ffe100 !important; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2) !important;	}	#rec63581518 .t-btn:not(.t-animate_no-hover){ -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out; transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;	}</style>
        </div>
        <div id="rec63469593" class="r t-rec" style=" " data-animationappear="off" data-record-type="635">
            <!-- T635 -->
            <div class="t635__textholder" data-recid="63469314" data-text1="Круглосуточно" data-text2="Повсюду"
                data-text3="Быстро" data-text4="Безопасно" data-text5="Одобрение 95%"></div>
            <script>
                $(document).ready(function () {
                    setTimeout(function () {
                        t635_init('63469593');
                    }, 500);
                });
            </script>
            <style>
                #rec63469314 .t635__typing-text {
                    color: #ffe100;
                }

                #rec63469314 .typed-cursor {
                    color: #ffe100;
                }
            </style>
        </div>
        <div id="rec63469079" class="r t-rec t-rec_pt_0 t-rec_pb_0 r_showed r_anim" style="padding-top:0px;padding-bottom:0px; "
            data-record-type="215"><a name="form" style="font-size:0;"></a></div>
        <div id="rec63469083" class="r t-rec t-screenmin-640px" style=" " data-animationappear="off" data-record-type="131"
            data-screen-min="640px">
        </div>
        <div id="rec63469080" class="r t-rec t-rec_pt_90 t-rec_pb_75" style="padding-top:35px;padding-bottom:75px;background-color:#ffffff; "
            data-record-type="490" data-bg-color="#ffffff" data-animationappear="off">
            <!-- t490 -->
            <div class="t490">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-align_center">
                            <div class="t-section__title t-title t-title_xs" field="btitle">
                                <div style="font-size:40px;line-height:18px;font-family:&#39;Circe&#39;;"
                                    data-customstyle="yes"><span style="font-weight: 400;">Как получить займ <br></span><br></div>
                            </div>
                            <div class="t-section__descr t-descr t-descr_xl t-margin_auto" field="bdescr">
                                <div style="font-size:20px;line-height:24px;font-family:&#39;Circe&#39;;"
                                    data-customstyle="yes">Получить займ онлайн очень просто: нужен паспорт и
                                    банковская карта, на которую поступят деньги. Рассчитать стоимость займа онлайн
                                    можно на главной странице - через онлайн калькулятор</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>




                    <a href="<?=$link?>" target="_blank">
                        <img src="/templates/dengos/img/universal/<?=$main?>_body.jpg" data-original="/templates/dengos/img/universal/<?=$main?>_body.jpg"
                                class="t-img loaded" imgfield="li_img__1476968690512" style="width:100%; text-aligh: center">
                    </a>
 

                </div>
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__bottomwrapper t-clear t-align_center "><a href="<?=$link?>"
                                target="_blank" class="t-btn" style="color:#666666;background-color:#ffee00;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;font-family:Circe;font-weight:700;">
                                <table style="width:100%; height:100%;">
                                    <tbody>
                                        <tr>
                                            <td>ПОЛУЧИТЬ ДЕНЬГИ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </a></div>
                    </div>
                </div>
                <style>
                    #rec63469080 .t-btn:not(.t-animate_no-hover):hover {
                        color: #000000 !important;
                    }

                    #rec63469080 .t-btn:not(.t-animate_no-hover) {
                        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
                    }
                </style>
            </div>
        </div>
        <div id="rec63469081" class="r t-rec t-rec_pt_75 t-rec_pb_90" style="padding-top:0px;padding-bottom:0px;"
            data-animationappear="off" data-record-type="598" data-bg-color="#f5f5f5">
            <!-- T598 -->
            <style>
                #rec63469081 .t-btn:not(.t-animate_no-hover):hover {
                    background-color: #ffee00 !important;
                    color: #1f1f1f !important;
                }

                #rec63469081 .t-btn:not(.t-animate_no-hover) {
                    -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
                }
            </style>

                <?php
    if($this->uri->segment(2) != 'webbankir') { ?>
            <div class="t598">


            <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ex-info-block ">
                    <h3>О проекте</h3> 
                    <p>dengos - это самый удобный и выгодный сервис по получению онлайн-займов. Благодаря используемым
                        принципам обработки данных нашим клиентом может стать любой гражданин России. Даже если вы пенсионер,
                        студент или у вас плохая кредитная история, не бойтесь обратиться за помощью. Мы оперативно решим
                        ваши финансовые проблемы. Вы получите займ мгновенно - буквально через 15 минут - и сможете распоряжаться
                        им по собственному усмотрению.</p>
                </div>
                <div class="ex-info-block">
                    <h3>Условия получения и коммисионные сборы</h3>
                    <div class="ex-condition">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p>
                                            <span>Процентная ставка за день</span>
                                            <span>max: 0,98% в день</span>
                                            min: 0,08% в день
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>
                                            <span>Сроки выдачи и погашения</span>
                                            <span>min: 61 день,</span>
                                            max: 1 год
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p>
                                            Годовой процент за пользование займом (с учетом требований ФЗ №353-ФЗ) min 30%, max 360%
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="ex-no-border">
                                            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="ex-info-block">
                    <h3>Документы и разрешительная документация</h3>
                    <p>Услуги на проекте «Сервис» оказываются юридическим лицом ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001.
                        <br>
                        На основании ФЗ "О потребительском кредите (займе)" от 21.12.2013 N 353-ФЗ имеет право осуществлять профессиональную деятельность
                        по предоставлению потребительских займов.
                    </p>
                    <p class="ex-hidden">
                        Проект осуществляет только подбор микрозаймов для клиентов, а именно, между клиентом который желает взять займ, и кредитным
                        учреждением, а также некредитными финансовыми организациями в случаях, определенных федеральными
                        законами об их деятельности, которые занимаются выдачей займов. Проект не является финансовым учреждением,
                        банком или кредитором, и не несёт ответственности за любые заключенные договоры кредитования или
                        условия. Чтобы оформить заявку на получение займа, Вам необходимо пройти регистрацию и аутентификацию
                        на проекте.
                    </p>
                </div>
                <div class="ex-info-block hidden-xs hidden-sm">
                    <h3>Пример расчета онлайн займа</h3>
                    <p>Если вы взяли займ на сумму 50 000 рублей на 6 месяцев с процентной ставкой 4,5% в месяц, то после истечения
                        срока займа переплата составит 13500 рублей. Получается вы возвращаете 63 500 рублей. Ниже приведены
                        расчеты начисляемых процентов для дальнейшего самостоятельного вычисления суммы возврата займа (с
                        процентом) пользователям нашего сервиса.
                    </p>
                    <p class="ex-hidden">
                        Сумма - 50 000 рублей, процент в месяц - 4,5%, срок займа - 6 месяца. 4,5(%) * 6(мес) = 27% за 6 месяцев(27% * 50 000руб
                        (сумма займа) )/100% = 13 500 рублей (сумма начисленных процентов) 50 000 + 13 500 = 63 500 рублей
                        - это сумма необходимых денег к возврату через 6 месяцев. В случае нарушения сроков, размер неустойки
                        составляет 0,10% от суммы просрочки в день, но не более 10% от суммы займа. В случае длительной задержки
                        выплаты информация будет передана в БКИ. Продление займа возможно при своевременном информировании
                        кредитора (до наступления даты возврата займа) и уплаты процентов за первичный срок займа. Дополнительных
                        комиссий за продление займа не предусмотрено.</p>
                </div>

            </div>
        </div>
    </div>



        <div class="row" style="padding: 20px;">
            <div class="col-xs-12 text-center">
                <h2 class="hhh2"> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Информация о кредиторах с которыми мы сотрудничаем:</h2>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ООО МФО «СМСФИНАНС» № лицензии 2120177002022 Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13 Годовая процентная
                                    ставка: 328,5%
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ЗАО «4финанс» № лицензии 1127746537764 Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13 Годовая процентная ставка:
                                    328,5%
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ООО «СрочноДеньги» № лицензии 2110552000304 Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж Годовая процентная
                                    ставка: 360%
                                </p>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ООО «Домашние деньги» № лицензии 211017700000 Адрес: 115088, г. Москва, 2-ой Южнопортовый проезд, д. 33, стр. 1 Годовая процентная
                                    ставка: 248,2%
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ООО «Займер» № лицензии 651303532004088 Адрес:г. Кемерово, пр. Советский, д. 2/7 Годовая процентная ставка: 248,2%
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    АО «Тинькофф Банк» № лицензии 2673 Адрес: г. Москва,1-й Волоколамский проезд, д. 10, стр. 1. Годовая процентная ставка: от
                                    12,9%
                                </p>
                            </div>
                        </div>
                    </div>



<!-- dengos.ru -->
<ins class="adsbygoogle"
style="display:block"
data-ad-client="ca-pub-4970738258373085"
data-ad-slot="9321709999"
data-ad-format="auto"
data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>





                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <a href="<?=$link?>" target="_blank"> <img  class="t-img loaded"  style="width:100%; max-width:300px; text-aligh: center" src="/templates/dengos/img/universal/<?=$main?>_logo.png"></a>
                        </div>
                    </div>
                </div>
 


            </div>

    <?php } ?>
            <style type="text/css">
                #rec63469081 .t598__descr li {
                    border-color: #ffffff !important;
                }
            </style>
            <script>
                $(document).on('click','.ex-main-btn',function(){
                    window.location.href = '/';
                    window.open(
                        '<?=$link?>',
                        '_blank'
                    );
                    return false;
                });            
            </script>
            <script>
                $(document).ready(function () {
                    t598_init('63469081');
                    $(window).bind('resize', t_throttle(function () {
                        t598_init('63469081')
                    }, 250));
                    $('.t598').bind('displayChanged', function () {
                        t598_init('63469081');
                    });
                    $(window).load(function () {
                        t598_init('63469081');
                    });
                });
            </script>
        </div>
        <div id="rec63469085" class="r t-rec t-rec_pt_30 t-rec_pb_90" style="padding-top:30px;padding-bottom:90px;background-color:#3b3b3b; "
            data-animationappear="off" data-record-type="420" data-bg-color="#3b3b3b">
            <!-- T420 -->
            <div class="t420">
                <div class="t-container">
                    <img src="/templates/dengos/img/dengos.png" style="margin: 0 20px;" class="t338__logo t-img">
                    <p style="padding: 10px 10px 0 10px; color:#ffffff;font-size:15px;margin:0;">Сайт НЕ является представительством МФО или банком, не выдает займов и кредитов. Персональные данные пользователей не собираются и не хранятся. Все рекомендуемые на сайте кредитные учреждения имеют соответствующие лицензии. Условия неуплаты можно уточнить на сайте МФО.</p>
                    <p style="padding: 0 10px;"><span style="color:#ffffff;font-size:15px;"> Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 дня до 1 года. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения. Email: support@dengos.ru  <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001 | +7(495) 006 19 61 | Россия, Санкт-Петербург, улица Осипенко, 12</p>
                </div>
            </div>
        </div>
        <div id="rec72892849" class="r t-rec" style=" " data-animationappear="off" data-record-type="131">
            <!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">
                        <script>
                            $(function () {
                                $('a[href]').attr('href', function (index, href) {
                                    var param = "key=value";

                                    if (href.charAt(href.length - 1) === '?') //Very unlikely
                                        return href + param;
                                    else if (href.indexOf('?') > 0)
                                        return href + '&' + window.location.search.slice(1);
                                    else
                                        return href + window.location.search.slice(1);
                                });
                            })
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    <?php
        require 'templates/common/new/js/bootstrap.min.js';
        $phone = '';
        if($this->uri->segment(1) && $this->uri->segment(2))
        {
            $phone = $this->uri->segment(1).''.$this->uri->segment(2);
        }

        if(!empty($phone)) {
        ?>
        fetch("https://sms3.bzaim5.ru/update/sms_click/<?=$phone?>").then(data => data.text()).then((text) => {
            console.log('request succeeded with JSON response', text)
        }).catch(function (error) {
            console.log('request failed', error)
        })
    <?php } ?>
     
    </script>
</body>

</html>