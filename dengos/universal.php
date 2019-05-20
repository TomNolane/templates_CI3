<?php
    require 'templates/common/new/php/check_bot.php';
    $domain = getDomain();
    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
    $link = str_replace("#site1", ucfirst($domen), $link);
    $link = str_replace("#site", $domen, $link);

    if($this->input->get())
        $link = str_replace("#name#", implode('',$this->input->get()), $link);
    else 
        $link = str_replace("#name#", $domen, $link);

     function getDomainUrl()
    {
        $CI =& get_instance();
        
        return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/","$1", $CI->config->slash_item('base_url'));
    }

    $maindomain = getDomainUrl();
    $email = "info@".$maindomain;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$my_title?></title>
    <meta name="description" content="<?=$description?>">
    <meta property="og:url" content="https://<?=$domain?>/<?=$main?>">
    <meta property="og:title" content="Вам одобрено!">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/templates/dengos/img/universal/<?=$main?>_header.jpg">
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="https://<?=$domain?>/<?=$main?>">
    <link rel="shortcut icon" href="/templates/dengos/img/universal/<?=$main?>.ico" type="image/x-icon">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-grid-3.0.min.css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-blocks-2.12.css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-animation-1.0.min.css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-slds-1.4.min.css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/tilda-zoom-2.0.min.css" media="all">
    <link rel="stylesheet" href="/templates/dengos/css/universal/<?=$universal_folder?>/custom.css">
    <script src="/templates/dengos/js/universal/jquery-1.10.2.min.js"></script>
    <script src="/templates/dengos/js/universal/osd.js"></script>
    <script async="" id="tildastatscript" src="/templates/dengos/js/universal/tildastat-0.2.min.js"></script>
    <script async="" id="topmailru-code" src="/templates/dengos/js/universal/code.js"></script>
    <script src="/templates/dengos/js/universal/tilda-scripts-2.8.min.js"></script>
    <script src="/templates/dengos/js/universal/tilda-blocks-2.7.js"></script>
    <script src="/templates/dengos/js/universal/lazyload-1.3.min.js"></script>
    <script src="/templates/dengos/js/universal/tilda-animation-1.0.min.js"></script>
    <script src="/templates/dengos/js/universal/typed.min.js"></script>
    <script src="/templates/dengos/js/universal/tilda-slds-1.4.min.js"></script>
    <script src="/templates/dengos/js/universal/hammer.min.js"></script>
    <script src="/templates/dengos/js/universal/tilda-zoom-2.0.min.js"></script>
    <script  src="//cdn.sendpulse.com/js/push/7c8ebb6294d764a87f0f15175f7d0d99_1.js" async></script>
    <style>
        <?php echo '.t338__logo{float: unset;max-width: 320px !important;}.t338__title{margin-bottom: 40px;padding-top: 180px;text-align: center;} .t-prefix_1{padding-left: 0;padding-right: 0;}';
        echo '@media (max-width: 450px) {.t-valign_middle{vertical-align: unset !important;}.t338__title{margin-bottom: 40px;padding-top: 60px;}.t338__logo{margin-top: 0 !important;float: initial;margin-bottom:0;} }';

        if($this->uri->segment(1)=='hz'|| $this->uri->segment(1)=='mz') {
            echo '#spec, #spec2 {background-color: #fff !important;padding: 10px !important;border-radius: 10px !important;}';
        }

        if($this->uri->segment(1)=='bg'|| $this->uri->segment(1)=='dz'|| $this->uri->segment(1)=='mz'|| $this->uri->segment(1)=='oz') {
            echo '@media (max-width: 640px) {.t-cover__carrier{background-position: center right !important;} .t-valign_middle{vertical-align: unset !important;}.t338__title{padding-top: 0;} }';
        }

        if($this->uri->segment(1)=='ek'|| $this->uri->segment(1)=='cr') {
            echo '@media (max-width: 640px) {.t-valign_middle{vertical-align: unset !important;}.t338__title{padding-top: 0;} }';
        }

        ?>@keyframes shadow-pulse {
            0% {
                -webkit-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
                -moz-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
                box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75)
            }

            100% {
                box-shadow: 0 0 0 15px rgba(0, 0, 0, 0)
            }
        }

        .t338__title {
            color: #ffe101;
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

        .t-container {
            max-width: 1700px;
        }

        .t-col_11 {
            max-width: 100%;
        }

        .t338__btn {
            font-size: 18px;
            height: 70px;
        }

        .t-col_12 {
            max-width: inherit !important;
        }

        .px22 {
            font-size: 22px;
            padding-left: 10px;
        }

        .pink {
            color: #ff0072;
        }

        .flex-container div {
            display: inline-flex;
            align-items: flex-start;
            margin: 0 30px 30px;
            text-align: left;
        }

        @media (max-width: 450px) {
            .flex-container div {
                display: flex !important;
            }
        }

        <?php require 'templates/common/new/css/common.css';?>
        li>a {
            font-size: 16px;
            color: #000;
            margin: 0 auto;
            vertical-align: middle;
            margin-top: 20px;
        }

        .navbar-brand {
            float: none !important;
            text-align: center;
            display: inline-grid;
            height: 50px;
            padding: 15px;
            font-size: 18px;
            line-height: 20px;
        }

        @media (min-width: 768px) {
            .navbar-header {
                float: unset !important;
            }
        }

        @media (max-width: 768px) {
            .hhh2 {
                font-size: 17px;
            }

            .white.offers {
                font-size: 10px;
            }
        }
    </style>

    <style>
        ins#aswift_0_expand {
            outline: 2px solid transparent !important;
        }
    </style>
    <style>
        #rec63469314 .t-btn[data-btneffects-first],
        #rec63469314 .t-btn[data-btneffects-second],
        #rec63469314 .t-submit[data-btneffects-first],
        #rec63469314 .t-submit[data-btneffects-second] {
            position: relative;
            overflow: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    </style>
    <style>
        #rec63469314 .t-btn:not(.t-animate_no-hover):hover {
            background-color: #ffe100 !important;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2) !important;
        }

        #rec63469314 .t-btn:not(.t-animate_no-hover) {
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
    </style>
    <style>
        #rec63581518 .t-btn[data-btneffects-first],
        #rec63581518 .t-btn[data-btneffects-second],
        #rec63581518 .t-submit[data-btneffects-first],
        #rec63581518 .t-submit[data-btneffects-second] {
            position: relative;
            overflow: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    </style>
    <style>
        #rec63581518 .t-btn:not(.t-animate_no-hover):hover {
            background-color: #ffe100 !important;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2) !important;
        }

        #rec63581518 .t-btn:not(.t-animate_no-hover) {
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
    </style>
    <style>
        #rec63469314 .t635__typing-text {
            color: #21bf16;
        }

        #rec63469314 .typed-cursor {
            color: #21bf16;
        }
    </style>
    <style>
        #rec63469081 .t598__descr li {
            border-color: #ffffff !important;
        }
    </style>
    <style>
        #rec63469080 .t-btn:not(.t-animate_no-hover):hover {
            color: #000000 !important;
        }

        #rec63469080 .t-btn:not(.t-animate_no-hover) {
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
    </style>
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
</head>

<body class="t-body" style="margin: 0px;">
    <header class="hidden" style="margin: 0 20px; top: 0; text-align: center">
        <a class="navbar-brand" href="/">
            <img src="/templates/dengos/img/universal/<?=$main?>_logo.png" class="t338__logo t-img"
                alt="t338__logo t-img">
        </a>
    </header>
    <!--allrecords-->
    <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="663907"
        data-tilda-page-id="3385037" data-tilda-page-alias="push" data-tilda-formskey="93c3cbd6dbbe2328e90d7d614020b440"
        style="overflow-x: hidden;">
        <div id="rec63469314" class="r t-rec t-screenmin-480px" style=" " data-animationappear="off"
            data-record-type="338" data-screen-min="480px">
            <!-- cover -->
            <div class="t-cover" id="recorddiv63469314"
                style="height:100vh; background-image:url(&#39;/templates/dengos/img/universal/<?=$main?>_header.jpg&#39;);">
                <div class="t-cover__carrier loaded" id="coverCarry63469314" data-content-cover-id="63469314"
                    data-content-cover-bg="/templates/dengos/img/universal/<?=$main?>_header.jpg"
                    data-content-cover-height="100vh" data-content-cover-parallax=""
                    style="height: 100vh; background-attachment: scroll; background-image: url(&quot;/templates/dengos/img/universal/<?=$main?>_header.jpg&quot;);">
                </div>
                <div class="t-cover__filter"
                    style="height:100vh;background-image: -moz-linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#fe000000&#39;, endColorstr=&#39;#fe000000&#39;);">
                </div>
                <div class="t338">
                    <div class="t-container">
                        <div class="t-col_11 t-prefix_1">
                            <div class="t-cover__wrapper "
                                style="height:100%; position: relative;z-index: 1;display: block;width: 100%;">
                                <div class="t338" style="">
                                    <div data-hook-content="covercontent">
                                        <div class="t339__wrapper"> <a href="<?=$link?>" target="_blank"><img
                                                    class="t338__logo t-img loaded" id="spec" alt="t338__logo t-img"
                                                    data-tu-max-width="800" data-tu-max-height="800"
                                                    style="max-width:250px;"
                                                    src="/templates/dengos/img/universal/<?=$main?>_logo.png"
                                                    data-original="/templates/dengos/img/universal/<?=$main?>_logo.png"
                                                    data-hook-clogo="coverlogo"></a>
                                            <div class="t338__title t-title t-title_xxs" style="">
                                                <div style="text-align: center;font-size:52px;text-shadow: 1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000"
                                                    data-customstyle="yes">Вам одобрено 20000 рублей после заявки.<br>
                                                    Жмите получить деньги.<br>
                                                    <span class="typed-cursor">|</span><br></div>
                                            </div>
                                           
                                            <div class="t338__buttonwrapper click_offer" style="text-align: center;"><a
                                                    href="<?=$link?>" target="_blank"
                                                    class="t338__btn t-btn pulse2 ex-main-btn"
                                                    style="border: 1px solid;color:#000000;background-color:#21bf16;border-radius:300px; -moz-border-radius:300px; -webkit-border-radius:300px;font-weight:700;">
                                                    <table style="width:100%; height:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td>ПОЛУЧИТЬ ДЕНЬГИ</td>
                                                                
                                                            </tr>
                                                        </tbody> 
                                                    </table> 
                                                </a></div>

                                                 <?php if($setting_array['is_mobile'] != 'мобила') { ?> 
                                                    <br>
                                                    <?php require 'adsence_all.php'; ?>
                                                    <br><br> 
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="rec63581518" class="r t-rec t-screenmax-480px" style=" " data-animationappear="off"
            data-record-type="338" data-screen-max="480px">
            <!-- cover -->
            <div class="t-cover" id="recorddiv63581518"
                style="height:100vh; background-image:url(&#39;/templates/dengos/img/universal/<?=$main?>_header.jpg&#39;);">
                <div class="t-cover__filter"
                    style="height:100vh;background-image: -moz-linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -webkit-linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -o-linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: -ms-linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));background-image: linear-gradient(to top, rgba(0,0,0,0.0), rgba(0,0,0,0.0));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#fe000000&#39;, endColorstr=&#39;#fe000000&#39;);">
                </div>
                <div class="t338">
                    <div class="t-container">
                        <div class="t-col t-col_11 t-prefix_1">
                            <div class="t-cover__wrapper t-valign_middle"
                                style="height:100% !important; position: relative;z-index: 1;">
                                <div class="t338 t-align_center" style="">
                                    <div data-hook-content="covercontent">
                                        <div class="t339__wrapper"> <a href="<?=$link?>" target="_blank"><img
                                                    class="t338__logo t-img t-animate t-animate_started"
                                                    data-animate-style="fadeindown" id="spec2" data-animate-group="yes"
                                                    data-tu-max-width="800" data-tu-max-height="800"
                                                    style="max-width:330px;"
                                                    src="/templates/dengos/img/universal/<?=$main?>_logo.png"
                                                    data-original="/templates/dengos/img/universal/<?=$main?>_logo.png"
                                                    data-hook-clogo="coverlogo" alt="t338__logo t-img"></a>
                                            <div class="t338__title t-title t-title_xxs t-animate t-animate_started"
                                                data-animate-style="fadeinleft" data-animate-group="yes"
                                                style="transition-delay: 0.5s;">

                                                <div style="font-size:52px;" data-customstyle="yes"><span
                                                        style="font-size: 33px;text-shadow:1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000,1px 1px 1px #000, 1px 1px 1px #000"><br>Вам
                                                        одобрено 20000 рублей после заявки. <br>Жмите получить
                                                        деньги.</span><br><span style="font-size: 42px;">
                                                       </span></div>

                                            </div>
                                            <div class="t338__buttonwrapper click_offer"><a href="<?=$link?>"
                                                    target="_blank"
                                                    class="pulse2 t338__btn t-btn t-animate t-animate_no-hover t-animate_started"
                                                    data-animate-style="fadeinup" data-animate-group="yes"
                                                    style="color: rgb(0, 0, 0); background-color: #21bf16; border-radius: 300px; font-weight: 700; transition-delay: 1s;">
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

        </div>
        <div id="rec63469079" class="r t-rec t-rec_pt_0 t-rec_pb_0 r_showed r_anim"
            style="padding-top:0px;padding-bottom:0px; " data-record-type="215"><a style="font-size:0;"></a></div>
        <div id="rec63469083" class="r t-rec t-screenmin-640px" style=" " data-animationappear="off"
            data-record-type="131" data-screen-min="640px">
        </div>
        <br class="hidden-xs"><br class="hidden-xs">

        <?php if($setting_array['is_mobile'] == 'мобила') { ?> 
           <?php require 'adsence_all.php'; ?>
        <?php } ?>

        <div id="rec63469080" class="r t-rec t-rec_pt_90 t-rec_pb_75"
            style="padding-top:35px;padding-bottom:75px;background-color:#ffffff; " data-record-type="490"
            data-bg-color="#ffffff" data-animationappear="off">
            <!-- t490 -->
            <div class="t490">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-align_center">
                            <div class="t-section__title t-title t-title_xs">
                                <div style="font-size:40px;line-height:18px;font-family:&#39;Circe&#39;;"
                                    data-customstyle="yes"><span style="font-weight: 400;">Как получить займ
                                        <br></span><br></div>
                            </div>
                              <?php if($setting_array['is_mobile'] != 'мобила') 
                            require 'adsence_all.php'; 
                            ?>
                            <br><br>
                            <div class="t-section__descr t-descr t-descr_xl t-margin_auto">
                                <div style="font-size:20px;line-height:24px;font-family:&#39;Circe&#39;;"
                                    data-customstyle="yes">Получить займ онлайн очень просто: нужен паспорт и
                                    банковская карта, на которую поступят деньги. Рассчитать стоимость займа онлайн
                                    можно на главной странице - через онлайн калькулятор</div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="text-center">

                    <?php if($setting_array['site'] != 'kreditker.ru') { ?>
                    <a href="<?=$link?>" target="_blank">
                        <img src="/templates/dengos/img/universal/<?=$main?>_body.jpg"
                            data-original="/templates/dengos/img/universal/<?=$main?>_body.jpg" class="t-img loaded"
                            alt="t-img loaded" style="width:100%;">
                    </a>
                    <?php } else { ?>
                    <div class="flex-container">
                        <div><img alt="ico1.png" src="/templates/dengos/img/universal/0/ico1.png">
                            <p class="px22">Низкая ставка: <br><span class="prcb pink">1,5%</span></p>
                        </div>
                        <div><img alt="ico2.png" src="/templates/dengos/img/universal/0/ico2.png">
                            <p class="px22">Быстрое одобрение: <br><span class="prcb pink">15&nbsp;минут</span></p>
                        </div>
                        <div><img alt="ico3.png" src="/templates/dengos/img/universal/0/ico3.png">
                            <p class="px22">Срок кредитования: <br><span class="prcb pink">до 30 дней</span></p>
                        </div>
                        <div><img alt="ico4.png" src="/templates/dengos/img/universal/0/ico4.png">
                            <p class="px22">На сумму: <br><span class="prcb pink">до 30 000 рублей</span></p>
                        </div>
                        <div><img alt="ico5.png" src="/templates/dengos/img/universal/0/ico5.png">
                            <p class="px22">Нужен <br><span class="prcb pink">только паспорт</span></p>
                        </div>
                        <div><img alt="ico6.png" src="/templates/dengos/img/universal/0/ico6.png">
                            <p class="px22">Переводим сразу на карту <br><span class="prcb pink">Не надо никуда
                                    ехать</span></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- dengos.ru -->

                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__bottomwrapper t-clear t-align_center click_offer"><a href="<?=$link?>"
                                target="_blank" class="t-btn"
                                style="color:#666666;background-color:#ffee00;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;font-family:Circe;font-weight:700;">
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
        <div id="rec63469081" class="r t-rec t-rec_pt_75 t-rec_pb_90" style="padding-top:0px;padding-bottom:0px;"
            data-animationappear="off" data-record-type="598" data-bg-color="#f5f5f5">
            <!-- T598 -->


            <?php
    if($this->uri->segment(2) != 'webbankir') { ?>
            <div class="t598">


                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 hidden-xs">
                            <div class="ex-info-block ">
                                <h3>О проекте</h3>
                                <p><?=$domain?> - это самый удобный и выгодный сервис по получению онлайн-займов.
                                    Благодаря используемым
                                    принципам обработки данных нашим клиентом может стать любой гражданин России. Даже
                                    если вы пенсионер,
                                    студент или у вас плохая кредитная история, не бойтесь обратиться за помощью. Мы
                                    оперативно решим
                                    ваши финансовые проблемы. Вы получите займ мгновенно - буквально через 15 минут - и
                                    сможете распоряжаться
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
                                                        Годовой процент за пользование займом (с учетом требований ФЗ
                                                        №353-ФЗ) min 30%, max 360%
                                                    </p>
                                                </div>
                                                <div class="col-xs-6">
                                                    <p class="ex-no-border">
                                                        Первый заём до 10 000 рублей выдается по ставке 0% в случае
                                                        своевременного погашения
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ex-info-block">
                                <h3>Документы и разрешительная документация</h3>
                                <p>Услуги на проекте «Сервис» оказываются юридическим лицом ООО «Альянс» ОГРН
                                    5177746353054 ИНН 9705113909 КПП 770501001.
                                    <br>
                                    На основании ФЗ "О потребительском кредите (займе)" от 21.12.2013 N 353-ФЗ имеет
                                    право осуществлять профессиональную деятельность
                                    по предоставлению потребительских займов.
                                </p>
                                <p class="ex-hidden">
                                    Проект осуществляет только подбор микрозаймов для клиентов, а именно, между клиентом
                                    который желает взять займ, и кредитным
                                    учреждением, а также некредитными финансовыми организациями в случаях, определенных
                                    федеральными
                                    законами об их деятельности, которые занимаются выдачей займов. Проект не является
                                    финансовым учреждением,
                                    банком или кредитором, и не несёт ответственности за любые заключенные договоры
                                    кредитования или
                                    условия. Чтобы оформить заявку на получение займа, Вам необходимо пройти регистрацию
                                    и аутентификацию
                                    на проекте.
                                </p>
                            </div>
                            <div class="ex-info-block hidden-xs hidden-sm">
                                <h3>Пример расчета онлайн займа</h3>
                                <p>Если вы взяли займ на сумму 50 000 рублей на 6 месяцев с процентной ставкой 4,5% в
                                    месяц, то после истечения
                                    срока займа переплата составит 13500 рублей. Получается вы возвращаете 63 500
                                    рублей. Ниже приведены
                                    расчеты начисляемых процентов для дальнейшего самостоятельного вычисления суммы
                                    возврата займа (с
                                    процентом) пользователям нашего сервиса.
                                </p>
                                <p class="ex-hidden">
                                    Сумма - 50 000 рублей, процент в месяц - 4,5%, срок займа - 6 месяца. 4,5(%) *
                                    6(мес) = 27% за 6 месяцев(27% * 50 000руб
                                    (сумма займа) )/100% = 13 500 рублей (сумма начисленных процентов) 50 000 + 13 500 =
                                    63 500 рублей
                                    - это сумма необходимых денег к возврату через 6 месяцев. В случае нарушения сроков,
                                    размер неустойки
                                    составляет 0,10% от суммы просрочки в день, но не более 10% от суммы займа. В случае
                                    длительной задержки
                                    выплаты информация будет передана в БКИ. Продление займа возможно при своевременном
                                    информировании
                                    кредитора (до наступления даты возврата займа) и уплаты процентов за первичный срок
                                    займа. Дополнительных
                                    комиссий за продление займа не предусмотрено.</p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row" style="padding: 20px;">
                        <div class="col-xs-12 text-center">
                            <h2 class="hhh2"> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Информация о
                                кредиторах с которыми мы сотрудничаем:</h2>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ООО МФО «СМСФИНАНС» № лицензии 2120177002022 Адрес: 115201, г. Москва, ул.
                                    Котляковская, д.3, стр. 13 Годовая процентная
                                    ставка: 328,5%
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ЗАО «4финанс» № лицензии 1127746537764 Адрес: 115201, г.Москва, ул. Котляковская, д.
                                    3, стр. 13 Годовая процентная ставка:
                                    328,5%
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ООО «СрочноДеньги» № лицензии 2110552000304 Адрес: Нижний Новгород, ул. Тимирязева,
                                    15/2, БЦ «КМ-Сити», 4 этаж Годовая процентная
                                    ставка: 360%
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ООО «Домашние деньги» № лицензии 211017700000 Адрес: 115088, г. Москва, 2-ой
                                    Южнопортовый проезд, д. 33, стр. 1 Годовая процентная
                                    ставка: 248,2%
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    ООО «Займер» № лицензии 651303532004088 Адрес:г. Кемерово, пр. Советский, д. 2/7
                                    Годовая процентная ставка: 248,2%
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="white offers">
                                <p>
                                    АО «Тинькофф Банк» № лицензии 2673 Адрес: г. Москва,1-й Волоколамский проезд, д. 10,
                                    стр. 1. Годовая процентная ставка: от
                                    12,9%
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  if($this->uri->segment(1) != 'we' && $this->uri->segment(1) != 'wb' && $this->uri->segment(1) != 'wp' && $this->uri->segment(1) != 'webbankirn'
                && $this->uri->segment(1) != 'webbankirk' && $this->uri->segment(1) != 'webbankirq' && $this->uri->segment(1) != 'webbankirg' && $this->uri->segment(1) != 'webbankirw') { ?>
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center click_offer">
                            <a href="<?=$link?>" target="_blank"> <img class="t-img loaded"
                                    style="width:100%; max-width:300px;" alt="t-img loaded"
                                    src="/templates/dengos/img/universal/<?=$main?>_logo.png"></a>
                        </div>
                    </div>
                </div>
                <?php } ?>



            </div>

            <?php } ?>

            <script>
                $(document).on('click', '.click_offer', function () {
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
        <?php require 'adsence_all.php'; ?>
        <br><br>
        <div id="rec63469085" class="r t-rec t-rec_pt_30 t-rec_pb_90"
            style="padding-top:30px;padding-bottom:90px;background-color:#3b3b3b;" data-animationappear="off"
            data-record-type="420" data-bg-color="#3b3b3b">
            <!-- T420 -->
            <div class="t420">
                <div class="t-container">
                    <? if (in_array($domain, array('vkredito.ru', 'vkredito.tomnolane.ru'))) : ?>
                        <img src="/templates/vkredito/assets/img/logo.png" style="margin: 0 20px;" alt="t338__logo t-img"
                        class="t338__logo t-img"> 
                    <? else : ?>
                        <img src="/templates/dengos/img/dengos-logo.png" style="margin: 0 20px;" alt="t338__logo t-img"
                        class="t338__logo t-img"> 
                    <? endif; ?>
                    <p style="padding: 10px 10px 0 10px; color:#ffffff;font-size:15px;margin:0;">Сайт НЕ является
                        представительством МФО или банком, не выдает займов и кредитов. Персональные данные
                        пользователей не собираются и не хранятся. Все рекомендуемые на сайте кредитные учреждения имеют
                        соответствующие лицензии. Условия неуплаты можно уточнить на сайте МФО.</p>
                    <p style="padding: 0 10px;"><span style="color:#ffffff;font-size:15px;"> Займы предоставляются на
                            сумму от 1 000 до 100 000 рублей включительно на срок от 61 дня до 1 года. Максимальная
                            процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета
                            общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день;
                            проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до
                            10 000 рублей выдается по ставке 0% в случае своевременного погашения. Email:
                            support@<?=$domain?> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                            <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001 | +7(495) 006 19 61 |
                            Россия, Санкт-Петербург, улица Осипенко, 12</span></p>
                </div>
            </div>
        </div>
        <div id="rec72892849" class="r t-rec" data-animationappear="off" data-record-type="131">
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
            $phone = $this->uri->segment(1).'.'.$this->uri->segment(2);
        }

        if(!empty($phone)) {
        ?>

        var _url = 'https://sms3';

        <?php
            $domen = $this->uri->segment(1);

            switch($domen)
            {
                case 'zaymerw': 
                case 'optimazaimw': 
                case 'deltazaimw':
                case 'ypetrovichaw':
                case 'mazillaw':
                case 'zanimalon':
                case 'hot-zaimw':
                case 'zaim365w':
                case 'credilow':
		        case 'bigzaimn':
                case 'ypetrovichag': // + Отказной Квику
                case 'visamew':
                    echo "_url = 'https://sms';"; break;
                default; break;
            }
        ?>

        fetch(_url + ".bzaim5.ru/update/sms_click/<?=$phone?>").then(data => data.text()).then((text) => {
            console.log('request succeeded with JSON response', text)
        }).catch(function (error) {
            console.log('request failed', error)
        })
        <?php } ?>
    </script>

 
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(53492980, "init", {
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/53492980" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>