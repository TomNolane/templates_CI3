<?php
    $my_title = "Автоматическое одобрение займа";
    $site = str_replace("www.", "", $site);
    $site = str_replace(".tomnolane", "", $site);
    
    if($site == 'bzaim5') $site = 'bzaim';
    else if($site == 'www.mikrodengi') $site = 'mikrodengi';
    
    $site = str_replace("www.", "", $site);

    $dir_site = str_replace(".ru", "", str_replace(".su", "",str_replace(".info", "", $site)));
    require realpath(__DIR__ . '/..').'/'.$dir_site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    //  if($site == 'zaimol')
    //     $data = $this->offers->all(8, 0);
    // else 
        $data = $this->offers->all(10, 0);
        
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
	echo '<div><style scoped>';
	require 'new2/css/lk2.php';
	echo '</style></div>'; 
?> 
<div>
<style scoped>
@font-face{font-family:"'Dosis'";src:url(/templates/common/new2/fonts/Dosis-Regular.eot);src:url(/templates/common/new2/fonts/Dosis-Regular.eot?#iefix) format("embedded-opentype"),url(/templates/common/new2/fonts/Dosis-Regular.woff) format("woff"),url(/templates/common/new2/fonts/Dosis-Regular.ttf) format("truetype");font-weight:400;font-style:normal}
/* SLASH START HERE */
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
    background-color: rgb(255, 255, 255);
    max-height: 369px;
    margin-bottom: 20px;
    transition: background-color 0.3s ease;
}
@media (min-width: 600px) {
    .div-spec {
        /* margin-left: 40px;
        margin-right: 40px; */
    }
}
.container3 {
    background: #f8f8f8 !important;
}
.caption {
  position: inherit;
  padding: 7px;
  text-align: left;
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
    width: 100%;
    padding-top: 5px;
    font-size: 15px;
    font-family: Impact;
    letter-spacing: 0.04em;
}
.fa {color: #777;}
.center2 {text-align: center !important;}
.ex-main-btn2 {
    width: 100%;
    padding: 10px 30px;
    margin: 14px 0px 0px;
    font-size: 17px;
    font-weight: 700;
    border: none;
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
    color: #38CB5B;
    font-family: "Calibri";
    font-weight: bold;
    font-size: 85%;
}
.green_font .fa {color: #FFF;}
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
    /* -webkit-animation: neon .08s ease-in-out infinite alternate;
    animation: neon .08s ease-in-out infinite alternate; */
    font-size: 1.8em;
    font-weight: 700; 
    /* text-shadow: 0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000; */
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
        font-size: 1.4em !important;
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
        padding-left: 30px !important;padding-right: 30px !important;
    }
}

.letsminimize {width: 80% !important;}
.mycol {margin-right: -35px;}
.my-md2 {width: 20% !important;}
.start-text {
    color: #959595;
    float: left;
    padding-left: 10px;
}
.end-text {
    float: right;
    padding-right: 10px;
}
/** MEGA FIX =) **/
html, body {
    /*overflow-x:hidden;*/
}
.my-full {/*margin: 0 auto;*/}

/* =========================== offerwall new ========================== */
/* 
  ##Device = Desktops
  ##Screen = 1281px to higher resolution desktops
*/
@media (min-width: 1281px) and (max-width: 1500px) {
    .my-md2 {width: 24% !important;}
    .colfix {margin-left: 0%;}
    .mycol {margin-right: -55px;}
}

/* 
  ##Device = Laptops, Desktops
  ##Screen = B/w 1025px to 1280px
*/
@media (min-width: 1025px) and (max-width: 1280px) {
    .my-md2 {width: 20% !important;}
    .colfix {margin-left: 6%;}
    .lk-text {font-size: 85%;}
    .caption {font-size: 92%;}
}

/* 
  ##Device = Tablets, Ipads (portrait)
  ##Screen = B/w 768px to 1024px
*/
@media (min-width: 768px) and (max-width: 1024px) {
    .my-md2 {width: 35% !important;}
    .colfix {margin-left: 4%;}
    .hh4 span:first-of-type {font-size: 93% !important;}
}

/* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/
@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
    .my-md2 {width: 35% !important;}
    .colfix {margin-left: 4%;}
    .hh4 span:first-of-type {font-size: 67% !important;}
    .green_font {font-size: 77%;}
}

/* 
  ##Device = Low Resolution Tablets, Mobiles (Landscape)
  ##Screen = B/w 481px to 767px
*/
@media (min-width: 481px) and (max-width: 767px) {
    .my-md2 {width: 53% !important;}
    .colfix {margin-left: 4%;}
    .hh4 span:first-of-type {font-size: 67% !important;}
    .green_font {font-size: 77%;}
    .top-exclamation {display: none;}
}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/
@media (min-width: 320px) and (max-width: 480px) {
    .my-md2 {width: 53% !important;}
    .colfix {margin-left: 6%;}
    .hh4 span:first-of-type {
        color: #333 !important;
        font-size: 80% !important;
        font-weight: bold;
    }
    .start-text {font-size: 80%;}
    .end-text {font-size: 80%;}
    .top-exclamation {display: none;}
}

.skewheader {
  position: relative;
  height: 50px;
  overflow: hidden;
}

.skewinside {
  position: relative;
  color: white;
}

.skewheader__bg {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skewY(-6deg);
  transform-origin: top left;
}

.skewheader_orange {background-image: linear-gradient(#ff9d2f, #ff6126);}
.skewheader_green {background-image: linear-gradient(#38CB5B, #2a823f);}
.skewheader_red {background-image: linear-gradient(#e8392c, #9F0B00);}
.skewheader_darkred {background-image: linear-gradient(#CB2D4B, #9E2139);}
.skewheader_pink {background-image: linear-gradient(#cb2d4b, #B50022);}
.skewheader_none {background-image: linear-gradient(#D7D4D4, #5C5C5C);}

.myclear {disply: none; clear: both;}
/* SLASH END HERE */
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
<div class="row container3"><div class="col-md-12">
<? if (!file_exists(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-1.php')) : ?>
    <h2 class="text-center hh hh4"><span style="font-size: 32px; color: #000; font-family: Helvetica;">Согласно Вашим данным сформирован список онлайн займов со скидкой до 50%.</span><br>
        <span class="green_font">
            <span style="background-color: #e8392c; color: #FFF;">
                <span class="top-exclamation">&nbsp;<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Внимание <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;</span></span>
                <br>
                <span style="color: #000 !important;">Оставьте заявку в трех компаниях и повысьте шанс получить займ до 99%.</span>
            </span>
    </h2>
<? else : require(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-1.php'); endif; ?>
    <br>
    <hr>
    <div class="row" id="for_google"></div>
    
	 <div class="text-center" id="img_agree"></div>
     
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');
        $temp = 0;
        echo '<div class="row"><div class="col-md-12 col-xs-12 div-spec colfix my-full">';

        foreach($data as $item)
        {
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);


            /*
            $item['link'] = str_replace("#site1", ucfirst($domen), $item['link']);
            $item['link'] = str_replace("#site", $domen, $item['link']);

            if ( $domen == 'zaimhome.ru' ){
                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=zaimhome', $item['link']);
            }
            if ( $domen == 'dengoman.ru' ){
                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=dengoman', $item['link']);
            }            
            if ( $domen == 'dengibystra.ru' ){
                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=dengibystra', $item['link']);
            }
            if ( $domen == 'bzaim5.ru'){
                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=dengibystra', $item['link']);
            }
 
			if(strpos($item['link'], "aff_sub1=") == true)
            {
                $item['link'] = str_replace( "aff_sub1=#site1", $domen, $item['link']);
                $item['link'] = str_replace( "aff_sub1=#site", $domen, $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                else if(trim($this->input->get('doi', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3=doi';
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                else if(trim($this->input->get('keyword', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
            else if (strpos($item['link'], "aff_sub=") == true)
            {
                $item['link'] = str_replace( "aff_sub=bzaim5.ru", "aff_sub=".$domen, $item['link']);
                $item['link'] = str_replace( "aff_sub2=#site", "", $item['link']);
                $item['link'] = str_replace( "aff_sub2=#site1", "", $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                else if(trim($this->input->get('doi', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3=doi';
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                else if(trim($this->input->get('keyword', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
            else if (strpos($item['link'], "promo=") == true)
            {
                $item['link'] = str_replace( "utm_source=bzaim5", "utm_source=".$domen, $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                else if(trim($this->input->get('doi', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3=doi';
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                else if(trim($this->input->get('keyword', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
            */
            $item['link'] = $item['link'].'&aff_sub=Offerwall&aff_sub1=Offerwall&aff_sub2=Offerwall&aff_sub3=Offerwall&aff_sub4=Offerwall&s=Offerwall&s1=Offerwall&sub=Offerwall&sub1=Offerwall&sub2=Offerwall';
             
            $temp++; 

            $words = array (
                '<div class="skewheader__bg skewheader_green"></div><div class="skewinside caption">Без документов</div>',
                '<div class="skewheader__bg skewheader_orange"></div><div class="skewinside caption">Одобрение 100% сегодня</div>',
                '<div class="skewheader__bg skewheader_red"></div><div class="skewinside caption">Круглосуточная выдача</div>',
                '<div class="skewheader__bg skewheader_pink"></div><div class="skewinside caption">Займ без отказов</div>'
            );

            echo '<div class="my-md2 col-md-3 col-sm-6 col-xs-6 mycol">
            <figure class="hh3 letsminimize">
                <div class="skewheader">
                    '.$words[rand(0,3)].'
                </div>
                <img class="lk-img2 img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                <div class="lk-text"><span class="start-text">Сумма</span>: <span class="end-text">до '.number_format($item['amount'],0,'',' ').' <i class="fa fa-rub"></i></span><div class="myclear"></div></div>
                <div class="lk-text"><span class="start-text">Основная ставка</span>: <span class="end-text">'.$item['percent'].' <i class="fa fa-percent"></i></span><div class="myclear"></div></div>
                <div class="lk-text"><span class="start-text">Возраст</span>: <span class="end-text">от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></span><div class="myclear"></div></div>
                <div class="center2"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn2 skewheader_green">Получить деньги</button></a></div>
            </figure>
            </div>';
        }
        echo '</div></div>';
    ?>
    </div></div>
<br><br>
<?php require realpath(__DIR__ . '/..').'/'.$dir_site.'/footer.php';?>