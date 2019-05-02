<?php
    $my_title = "Вам автоматически одобрен займ";
    $site = 'zaimomirsu'; 
    if($site == 'zaimomir') $site = 'zaimomirsu';
    
    $site = str_replace("www.", "", $site);

    $dir_site = str_replace(".ru", "", str_replace(".su", "",str_replace(".info", "",$site)));
    require realpath(__DIR__ . '/..').'/'.$dir_site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all(4, 0);
    
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
	require 'templates/common/new2/css/lk2.php';
	echo '</style></div>'; 
?> 
<div>
<style scoped>
@font-face{font-family:"'Dosis'";src:url(/templates/common/new2/fonts/Dosis-Regular.eot);src:url(/templates/common/new2/fonts/Dosis-Regular.eot?#iefix) format("embedded-opentype"),url(/templates/common/new2/fonts/Dosis-Regular.woff) format("woff"),url(/templates/common/new2/fonts/Dosis-Regular.ttf) format("truetype");font-weight:400;font-style:normal}
.hh4 {
    font-family: Dosis !important;
    font-size: 34px;
}
.hh3 {
  border-radius: 6px;
  background-color: rgb(255, 255, 255);
  max-height: 369px;
  margin-bottom: 20px;
  padding-top: 20px;
  border: 2px solid rgb(42, 130, 63);
  box-shadow: 0 1px 8px rgb(0, 0, 0);
}
@media (min-width: 600px) {
    .div-spec {
        margin-left: 40px;
        margin-right: 40px;
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
}
.center2 {text-align: center !important;}
.ex-main-btn2 {
    border-radius: 24px;
    background-color: rgb(255, 221, 45);
    max-width: 220px;
    color: #000;
    padding: 10px 30px;
    margin: 14px 5px;
    font-size: 17px;
    font-weight: 700;
    border: none;
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
.gold_font {color: gold;}
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
    <?php if ( $site == 'dengomir' ) { ?>
    table {
        height: 0;
    }
    <?php } ?>
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
        font-size: 1.4em;
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
<h2 class="text-center hh hh4">Заявка с таким номером телефона уже существует, но ВАМ<br><span class="gold_font">  предварительно одобрен займ</span> в организациях ниже:</h2>
<h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки во всех компаниях</h2>
    <br>
    <div class="row" id="for_google">
    
	 <div class="text-center" id="img_agree"><img src="/templates/common/img/stamp.png" /></div>
     
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');
        $temp = 0;
        echo '<div class="row"><div class="col-md-12 col-xs-12 div-spec">';

        foreach($data as $item)
        {
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
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
             
            $temp++; 

            $words = array (
                '<div class="caption empty"><span></span></div>',
                '<div class="caption red2"><span>Одобрение 100% сегодня</span></div>',
                '<div class="caption darkred2"><span>Круглосуточная выдача</span></div>',
                '<div class="caption orange2"><span>Займа без отказов</span></div>',
                '<div class="caption green2"><span>Без документов</span></div>',
                '<div class="caption pink2"><span>Одобряют каждому</span></div>',
                '<div class="caption orange2"><span>С плохой кредитной историей</span></div>',
                '<div class="caption empty"><span></span></div>'
            );

            echo '<div class="col-md-3 col-xs-6" >
            <figure class="hh3">
                '.$words[rand(0,7)].'
                <img class="lk-img2 img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                <div class="lk-text">Сумма: до '.number_format($item['amount'],0,'',' ').' <i class="fa fa-rub"></i></div>
                <div class="lk-text">Основная ставка: '.$item['percent'].' <i class="fa fa-percent"></i></div>
                <div class="lk-text">Возраст: от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></div>
                <div class="center2"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn2">Получить деньги</button></a></div>
            </figure>
            </div>';
        }
        echo '</div></div>';?>
    </div></div>
</div>
<br><br>
<?php require realpath(__DIR__ . '/..').'/'.$dir_site.'/footer.php';?>