<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'dengoman5 - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
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
	<meta name="copyright" lang="ru" content="dengoman5.ru" /> 
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="dengoman5 - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://dengoman5.ru/templates/dengoman/img/bg.jpg"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://dengoman5.ru/" />

	<meta name="twitter:card" content="https://dengoman5.ru/templates/dengoman/img/bg.jpg"/>
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
	<meta name="twitter:description" content="dengoman5 - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta name="twitter:image:src" content="https://dengoman5.ru/templates/dengoman/img/bg.jpg"/>
	<meta name="twitter:url" content="https://dengoman5.ru/"/>
	<meta name="twitter:domain" content="dengoman5.ru"/>
    <link rel="shortcut icon" type="image/png" href="/templates/dengoman/img/favicon.png" />

	<!-- CSS --> 
    <?php
    
    echo '<style>'; 
    require "templates/dengoman/css/bootstrap.min.css"; 
    echo '</style>';
    echo "<style>/* latin-ext */
    @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 400;
    src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/UyBMtLsHKBKXelqf4x7VRQ.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 400;
    src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/1YwB1sO8YE1Lyjf12WNiUA.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 100;
    src: local('Catamaran Thin'), local('Catamaran-Thin'), url(https://fonts.gstatic.com/s/catamaran/v4/AsJXcel0VOprDS7k9OVAc-WS8h3n1nFPP5cmXoNgba8.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 100;
    src: local('Catamaran Thin'), local('Catamaran-Thin'), url(https://fonts.gstatic.com/s/catamaran/v4/AsJXcel0VOprDS7k9OVAcyYE0-AqJ3nfInTTiDXDjU4.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 100;
    src: local('Catamaran Thin'), local('Catamaran-Thin'), url(https://fonts.gstatic.com/s/catamaran/v4/AsJXcel0VOprDS7k9OVAc44P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 200;
    src: local('Catamaran ExtraLight'), local('Catamaran-ExtraLight'), url(https://fonts.gstatic.com/s/catamaran/v4/hFc-HKSsGk6M-psujei1MISLh-MsTnNLt68IoFS3dKQ.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 200;
    src: local('Catamaran ExtraLight'), local('Catamaran-ExtraLight'), url(https://fonts.gstatic.com/s/catamaran/v4/hFc-HKSsGk6M-psujei1MD0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 200;
    src: local('Catamaran ExtraLight'), local('Catamaran-ExtraLight'), url(https://fonts.gstatic.com/s/catamaran/v4/hFc-HKSsGk6M-psujei1MOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 300;
    src: local('Catamaran Light'), local('Catamaran-Light'), url(https://fonts.gstatic.com/s/catamaran/v4/Aaag4ccR7Oh_4eai-jbrYISLh-MsTnNLt68IoFS3dKQ.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 300;
    src: local('Catamaran Light'), local('Catamaran-Light'), url(https://fonts.gstatic.com/s/catamaran/v4/Aaag4ccR7Oh_4eai-jbrYD0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 300;
    src: local('Catamaran Light'), local('Catamaran-Light'), url(https://fonts.gstatic.com/s/catamaran/v4/Aaag4ccR7Oh_4eai-jbrYOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 400;
    src: local('Catamaran Regular'), local('Catamaran-Regular'), url(https://fonts.gstatic.com/s/catamaran/v4/Q9cqF91R4Q6z47_V8UvFGBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 400;
    src: local('Catamaran Regular'), local('Catamaran-Regular'), url(https://fonts.gstatic.com/s/catamaran/v4/t_-OVtQ5f4U5rdYNmrStgxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 400;
    src: local('Catamaran Regular'), local('Catamaran-Regular'), url(https://fonts.gstatic.com/s/catamaran/v4/iVYgK2bOLvZcSxr0ITOecltXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 500;
    src: local('Catamaran Medium'), local('Catamaran-Medium'), url(https://fonts.gstatic.com/s/catamaran/v4/83WSX3F86qsvj1Z4EI0tQoSLh-MsTnNLt68IoFS3dKQ.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 500;
    src: local('Catamaran Medium'), local('Catamaran-Medium'), url(https://fonts.gstatic.com/s/catamaran/v4/83WSX3F86qsvj1Z4EI0tQj0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 500;
    src: local('Catamaran Medium'), local('Catamaran-Medium'), url(https://fonts.gstatic.com/s/catamaran/v4/83WSX3F86qsvj1Z4EI0tQugdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 600;
    src: local('Catamaran SemiBold'), local('Catamaran-SemiBold'), url(https://fonts.gstatic.com/s/catamaran/v4/a9PlHHnuBWiGGk0TwuFKToSLh-MsTnNLt68IoFS3dKQ.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 600;
    src: local('Catamaran SemiBold'), local('Catamaran-SemiBold'), url(https://fonts.gstatic.com/s/catamaran/v4/a9PlHHnuBWiGGk0TwuFKTj0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 600;
    src: local('Catamaran SemiBold'), local('Catamaran-SemiBold'), url(https://fonts.gstatic.com/s/catamaran/v4/a9PlHHnuBWiGGk0TwuFKTugdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 700;
    src: local('Catamaran Bold'), local('Catamaran-Bold'), url(https://fonts.gstatic.com/s/catamaran/v4/PpgVtUHUdnBZYNpnzGbSc4SLh-MsTnNLt68IoFS3dKQ.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 700;
    src: local('Catamaran Bold'), local('Catamaran-Bold'), url(https://fonts.gstatic.com/s/catamaran/v4/PpgVtUHUdnBZYNpnzGbScz0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 700;
    src: local('Catamaran Bold'), local('Catamaran-Bold'), url(https://fonts.gstatic.com/s/catamaran/v4/PpgVtUHUdnBZYNpnzGbSc-gdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 800;
    src: local('Catamaran ExtraBold'), local('Catamaran-ExtraBold'), url(https://fonts.gstatic.com/s/catamaran/v4/6VjB_uSfn3DZ93IQv58CmISLh-MsTnNLt68IoFS3dKQ.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 800;
    src: local('Catamaran ExtraBold'), local('Catamaran-ExtraBold'), url(https://fonts.gstatic.com/s/catamaran/v4/6VjB_uSfn3DZ93IQv58CmD0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 800;
    src: local('Catamaran ExtraBold'), local('Catamaran-ExtraBold'), url(https://fonts.gstatic.com/s/catamaran/v4/6VjB_uSfn3DZ93IQv58CmOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* tamil */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 900;
    src: local('Catamaran Black'), local('Catamaran-Black'), url(https://fonts.gstatic.com/s/catamaran/v4/5ys9TqpQc9Q6gHqbSox6p4SLh-MsTnNLt68IoFS3dKQ.woff2) format('woff2');
    unicode-range: U+0964-0965, U+0B82-0BFA, U+200B-200D, U+20B9, U+25CC;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 900;
    src: local('Catamaran Black'), local('Catamaran-Black'), url(https://fonts.gstatic.com/s/catamaran/v4/5ys9TqpQc9Q6gHqbSox6pz0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Catamaran';
    font-style: normal;
    font-weight: 900;
    src: local('Catamaran Black'), local('Catamaran-Black'), url(https://fonts.gstatic.com/s/catamaran/v4/5ys9TqpQc9Q6gHqbSox6p-gdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }/* vietnamese */
    @font-face {
    font-family: 'Muli';
    font-style: normal;
    font-weight: 400;
    src: local('Muli Regular'), local('Muli-Regular'), url(https://fonts.gstatic.com/s/muli/v11/Ul00HI23GehQ9qPsH_7ocQ.woff2) format('woff2');
    unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Muli';
    font-style: normal;
    font-weight: 400;
    src: local('Muli Regular'), local('Muli-Regular'), url(https://fonts.gstatic.com/s/muli/v11/jbCPU7JDvi-y7oVFF-ztAg.woff2) format('woff2');
    unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Muli';
    font-style: normal;
    font-weight: 400;
    src: local('Muli Regular'), local('Muli-Regular'), url(https://fonts.gstatic.com/s/muli/v11/z6c3Zzm51I2zB_Gi7146Bg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }";
    echo '</style>'; 
    echo '<style>'; 
    require "templates/dengoman/css/font-awesome.min.css"; 
    echo '</style>';
    echo '<style>'; 
    require "templates/dengoman/css/style.css"; 
    echo '</style>'; 
    echo '<style>'; 
    require "templates/dengoman/css/simple-line-icons.css"; 
    echo '</style>';
    echo '<style>'; 
    require "templates/dengoman/css/ion.rangeSlider.css"; 
    echo '</style>';
    echo '<style>'; 
    require "templates/dengoman/css/suggestions.min.css"; 
    echo '</style>';

    if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
    {
    echo '<style>';
    require "templates/dengoman/css/style_lk.css";
    echo '</style>';
    echo '<style>';
    require "modules/owl/owl.carousel.css";
    echo '</style>';
    echo '<style>';
    require "modules/owl/owl.theme.css";
    echo '</style>';
    echo '<style>';
    require "templates/dengoman/css/lk.css";
    echo '</style>'; 
    }

    if ($this->uri->segment(1) == 'form') 
    { 
    echo '<style>'; 
    require "templates/dengoman/css/form.css"; 
    echo '</style>';
    echo '<style>'; 
    require "modules/awesome-bootstrap-checkbox-master/awesome-bootstrap-checkbox.css"; 
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
        background:url(/templates/dengoman/img/tip-twitter_arrows.gif) no-repeat;
    }
    .tip-twitter .tip-arrow-right {
        margin-top:-4px; /* approx. half the height to center it */
        margin-left:0;
        top:50%;
        left:100%;
        width:5px;
        height:9px;
        background:url(/templates/dengoman/img/tip-twitter_arrows.gif) no-repeat -9px 0;
    }
    .tip-twitter .tip-arrow-bottom {
        margin-top:0;
        margin-left:-5px; /* approx. half the width to center it */
        top:100%;
        left:50%;
        width:9px;
        height:5px;
        background:url(/templates/dengoman/img/tip-twitter_arrows.gif) no-repeat -18px 0;
    }
    .tip-twitter .tip-arrow-left {
        margin-top:-4px; /* approx. half the height to center it */
        margin-left:-5px;
        top:50%;
        left:0;
        width:5px;
        height:9px;
        background:url(/templates/dengoman/img/tip-twitter_arrows.gif) no-repeat -27px 0;
    }
    '; 
    echo '</style>'; 
    } 
    ?> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
<?php 
	require 'sendpuls.php';
	require 'googletagmanager.php';
?>
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
						<li><a href="/about">О сервисе</a></li>
						<li><a href="/faq">Вопрос-ответ</a></li>
						<li><a href="/contacts">Контакты</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Документы <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/docs/#rules">Правила предоставления займов</a></li>
						<li><a href="/docs/#personal">Согласие на обработку данных</a></li>
						<li><a href="/docs/#oferta">Публичная оферта</a></li>
					</ul>
				</li>
				<li><a href="" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">Задать вопрос</a></li>
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
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="black">
                    Заполните форму <br> и наш менеджер свяжется с вами
                </h2>
            </div>
            <div class="modal-body">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control ec tip" name="feedback-name" title="Введите свое имя"
                            data-sanitize="capitalize"  data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                            data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" value="89777474747" placeholder="Введите ваш телефон" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
                </div>
                <div class="form-group">
                    <textarea id="feedback-comment" rows="3" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea>
                </div>
                 <button id="feedback-send" class="btn">Отправить</button> 
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->