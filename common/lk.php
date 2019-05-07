<?php
    $my_title = "Вам персональное предложение";
    $site = str_replace("www.", "", $site);
    $site = str_replace(".tomnolane", "", $site);
    $site = str_replace("bzaim5", "bzaim", $site);
    $site = str_replace("zaimomirsu", "zaimomir", $site);
    $site = str_replace("zaimnowsu", "zaimnow", $site);
    $site = str_replace(".ru", "", str_replace(".su", "",str_replace(".info", "", str_replace(".com", "", $site))));
    
    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all(8, 0);
        
    // IP
    $this->load->helper('ip');
    // GEO
    require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
    $gb = new IPGeoBase();
    $geo = $gb->getRecord(IP::$ip);
    if ($geo)
    {
        if (isset($geo['region'])) $region_name = $geo['region'];
    }
    // Список регионов
    $this->load->model('geo/geo_model', 'geo');
    $regions = $this->geo->regions();
    
    //pixel stat
    $this->load->model('pixel/pixel_model', 'pixel');
    $base_url = str_replace("/","",base_url());
    $base_url = str_replace("https:","",$base_url);
    $base_url = str_replace("http:","",$base_url);
    $pixel = $this->pixel->stat($base_url);

    $email = 'support@'.getDomain();
    $logo_foot = 'templates/common/img/logo-fanzaim.png';
    switch ($this->uri->segment(1)) {
        case 'offerwall': $logo_foot = 'templates/common/img/logo-fanzaim.png'; $email = 'support@fanzaim.ru'; break;
        case 'pixell': $logo_foot = 'templates/common/img/logo-fanzaim.png'; $email = 'support@fanzaim.ru'; break;
        case 'offerwall2': $logo_foot = 'templates/common/img/logo-edenga.png'; $email = 'support@edenga.ru'; break;
        default: break;
    }
    
	echo '<div><style scoped>';
	require 'new/css/lk2.php';
	echo '</style></div>'; 
?> 
<div>
<style scoped>
@font-face{font-family:"'Dosis'";src:url(/templates/common/new/onts/Dosis-Regular.eot);src:url(/templates/common/new/fonts/Dosis-Regular.eot?#iefix) format("embedded-opentype"),url(/templates/common/new/fonts/Dosis-Regular.woff) format("woff"),url(/templates/common/newnew/s/Dosis-Regular.ttf) format("truetype");font-weight:400;font-style:normal}
.hh4 {
    font-family: Impact !important;
    font-size: 34px;
    letter-spacing: 0.04em;
    font-weight: normal;
}

.hh5 {
    letter-spacing: 0.08em;
}

.hh3 {
  border-radius: 6px;
  background-color: rgb(255, 255, 255);
  max-height: 369px;
  margin-bottom: 20px;
  padding-top: 20px;
  border: 1px solid #2cbd04;
  transition: all 0.3s ease;
}
.hh3:hover {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
@media (max-width: 600px) {
    .div-spec {
       margin-left: 5px;
        overflow-x: hidden;
    }
    .div-spec2 {
        overflow-x: hidden;
    }
}
.container3 {
    background: #f8f8f8 !important;
}
.caption {
  position: inherit;
  padding: 7px;
  text-align: center;
  width: 100%;
  height: 40px;
  font-size: 16px;
  color: #fff;
}
.lk-img2 {
    margin: 0 auto;
    padding: 10px 0;
}
.lk-text {
    text-align: center;
    padding-top: 5px;
    font-size: 15px;
    font-family: Impact;
    letter-spacing: 0.04em;
    border-bottom: 1px solid #2cbd04;
}
.fa {color: #777;}
.center2 {text-align: center !important;}
.ex-main-btn2 {
    border-radius: 24px;
    max-width: 220px;
    padding: 10px 30px;
    margin: 14px 5px;
    font-size: 17px;
    font-weight: 700;
    border: none;

    background: rgba(88,255,46,1);
    background: -moz-linear-gradient(top, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(88,255,46,1)), color-stop(50%, rgba(44,189,4,1)), color-stop(51%, rgba(42,184,2,1)), color-stop(100%, rgba(88,255,46,1)));
    background: -webkit-linear-gradient(top, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    background: -o-linear-gradient(top, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    background: -ms-linear-gradient(top, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    background: linear-gradient(to bottom, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#58ff2e', endColorstr='#58ff2e', GradientType=0 );
    color: #FFF;
}
.img-responsive {
    max-width: 90%;
}
@media (max-width: 470px) { 
    .caption {font-size: 16px; padding-top: 4px;}
    .lk-text{padding-top: 0; font-size: 14px;}
    .ex-main-btn2 {font-size: 15px;}
    .lk-img2 {padding: 10px 0;}
}
.red2 {background-color: #e8392c}  
.darkred2 {background-color: #cb2d4b}
.orange2 {background-color: #ff9d11}
.green2 {background-color: #2a823f}
.pink2 {background-color: #cb2d4b}
#img_agree {padding: 0 0 20px 0;}
h2 {margin: 20px 0 0 0 !important;font-weight: 700;}

ins, .adsbygoogle{
	text-align: center !important;
    max-height: none !important;
    height: none !important;
}
.gold {
    background-color: gold;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.green {
    background-color: green;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
}
.green_special {
    background-color: green; 
    color: #fff;
    padding: 15px;
    display: grid;
    font-size: 2em;
    text-align: center;
}
.yellow {
    background-color: yellow;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.blue {
    background-color: blue;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
} 
.empty {
    background-color: transparent;
    border-radius: 15px;
    color: #fff !important;
    padding: 10px;
    
}
.grey {color: #6b6b6b  !important;}
.gold_font {
    color: gold;
    font-family: "Calibri";
    font-weight: bold;
}
.green_font {
    color: #2cbd04;
    font-family: "Calibri";
    font-weight: bold;
}
figure.hh1 {
    border: 0 solid #FFDD2D;
	border: none !important;
}
tr>td:first-child {
    font-size: 16px;
}
.imgg {
    width: 70%;
    padding: 20px;
}
.lk_special_offer {
    font-size: 1.8em;
    font-weight: 700; 
    color: #00da00; 
} 
@media (max-width: 450px) {
    .caption  {
        font-size: 13px;
    }
        .font08 {
        font-size: .8em;
    }
	.wordwrap{
		font-size: 0.9em;
	}
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 4px;
    }
    figure.hh1 {
        padding-left: 0;
        padding-right: 0;
        padding-top: 10px;
        padding-bottom: 0px;
    }
    .ex-main-btn {
        font-size: .9em;
        margin-top: 0;
    }
    tr>td:first-child {
        font-size: 12px;
    }
    .col-xs-6 {
        padding-right: 5px !important;
        padding-left: 5px !important;
    }
    .gold, .empty, .blue, .yellow, .green {
        font-size: 11px !important;
    }
    .hh4 {
        padding-top: 0;
        font-size: 1.3em;
    }
    .imgg {
        width: 100%;
    }
    .lk_special_offer { 
        font-size: 1em;
    }
}
@media (min-width: 600px) {
    .div-spec {
        padding-left: 90px !important;padding-right: 30px !important;
    }
}

.letsminimize {width: 80% !important;}
.mycol {margin-right: -3%;}
.colfix {margin-left: 6%;}
.start-text {color: #959595;}
@media (min-width: 1281px) and (max-width: 1500px) {
    .mycol {margin-right: -3%;}
    .colfix {margin-left: 6%;}
}
@media (min-width: 1025px) and (max-width: 1280px) {
    .mycol {margin-right: -3%;}
    .colfix {margin-left: 6%;}
    .letsminimize {width: 92% !important;}
    .caption {font-size: 14px;}
}
@media (min-width: 768px) and (max-width: 1024px) {
    .mycol {margin-right: -3%;}
    .colfix {margin-left: 2%;}
    .letsminimize {width: 98% !important;}
    .caption {font-size: 12px; height: 30px;}
}
@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
    .mycol {margin-right: -3%;}
    .colfix {margin-left: 6%;}
    .letsminimize {width: 98% !important;}
    .caption {font-size: 12px; height: 30px;}
}
@media (min-width: 481px) and (max-width: 767px) {
    .mycol {margin-right: -3%;}
    .colfix {margin-left: 6%;}
}

@media (min-width: 320px) and (max-width: 480px) {
    .mycol {margin-right: -3%;}
    .colfix {margin-left: 3%;}
    .letsminimize {width: 92% !important;}
    .caption {height: 24px;}
    .lk-text {font-size: 13px;}
    .ex-main-btn2 {padding: 15px 14px; font-size: 14px;}
}
</style>
</div>

<?php if( $site == 'forzaim') { ?>
<nav class="ex-main-header ex-transparent hidden-xs">
    <div class="container">
        <i class="ex-hamburger"></i>
        <a class="ex-brand" href="/">Forzaim</a>
    </div>
</nav>
<?php } ?>

<div class="row container3"><div class="col-md-12 div-spec2">
<? if (!file_exists(realpath(__DIR__ . '/..').'/common/new/special-header-1.php')) : ?>
<h2 class="text-center hh hh4">Заявка с таким номером телефона уже существует, но ВАМ<br><span class="gold_font">  предварительно одобрен займ</span> в организациях ниже:</h2>
<? else : require(realpath(__DIR__ . '/..').'/common/new/special-header-1.php'); endif; ?>
<? if (!file_exists(realpath(__DIR__ . '/..').'/common/new/special-header-2.php')) : ?>
<h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки в трёх компаниях</h2>
<? else : require(realpath(__DIR__ . '/..').'/common/new/special-header-2.php'); endif; ?>
    <br>
    <div class="row" id="for_google"></div>
    
	 <div class="text-center hidden-xs" id="img_agree"><img src="/templates/common/img/stamp.png" /></div>
     
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');
        
        echo '<div class="row"><div class="col-md-12 col-xs-12 div-spec">';

        foreach($data as $item)
        {
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);

            if (strpos($item['link'], 'guruleads'))
                $item['link'] = $item['link'].'?sub1=Vitrina';
            else if(strpos($item['link'], 'kviku') || strpos($item['link'], 'tech'))
                $item['link'] = $item['link'].'';
            else if(strpos($item['link'], 'leadgid'))
                $item['link'] = $item['link'].'?source=Vitrina';
            else if(strpos($item['link'], 'leadbrothers'))
                $item['link'] = $item['link'].'?s1=Vitrina';
            else
                $item['link'] = $item['link'].'?source=Vitrina';

            $words = array (
                '<div class="caption empty"><span></span></div>',
                '<div class="caption red2"><span>Одобрение 100% сегодня</span></div>',
                '<div class="caption darkred2"><span>Круглосуточная выдача</span></div>',
                '<div class="caption orange2"><span>Займы без отказов</span></div>',
                '<div class="caption green2"><span>Без документов</span></div>',
                '<div class="caption pink2"><span>Одобряют каждому</span></div>',
                '<div class="caption orange2"><span>С плохой кредитной историей</span></div>',
                '<div class="caption empty"><span></span></div>'
            );

            echo '<div class="col-md-3 col-xs-6" >
            <figure class="hh3 letsminimize">
                '.$words[rand(0,7)].'
                <img class="lk-img2 img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                <div class="lk-text"><span class="start-text">Сумма</span>: до '.number_format($item['amount'],0,'',' ').' <i class="fa fa-rub"></i></div>
                <div class="lk-text"><span class="start-text">Основная ставка</span>: '.$item['percent'].' <i class="fa fa-percent"></i></div>
                <div class="lk-text"><span class="start-text">Возраст</span>: от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></div>
                <div class="center2"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn2">Получить деньги</button></a></div>
            </figure>
            </div>';
        }
        echo '</div></div>';?>
    </div></div>

<br><br>
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>