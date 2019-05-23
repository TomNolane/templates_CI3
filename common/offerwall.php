<?php
    $my_title = "Автоматическое одобрение займа";
    $site = str_replace("www.", "", $site);
    $site = str_replace(".tomnolane", "", $site);
    $site = str_replace("bzaim5", "bzaim", $site);
    $site = str_replace("zaimomirsu", "zaimomir", $site);
    $site = str_replace("zaimnowsu", "zaimnow", $site);
    $site = str_replace(".ru", "", str_replace(".su", "",str_replace(".info", "", str_replace(".com", "", $site))));

    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all3(10, 0);
        
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
        case 'offerwall': $logo_foot = 'templates/common/img/logo-edenga.png'; $email = 'support@edenga.ru'; break;
        case 'pixell': $logo_foot = 'templates/common/img/logo-fanzaim.png'; $email = 'support@fanzaim.ru'; break;
        case 'offerwall2': $logo_foot = 'templates/common/img/logo-edenga.png'; $email = 'support@edenga.ru'; break;
        default: break;
    }
    require '/templates/common/php/utm_mark.php';
	echo '<div><style scoped>';
    require 'new/css/lk2.php';
    require 'new/css/offerwall.css';
    echo '</style></div>';?> 

<div class="row container3"><div class="col-md-12">
<? if (!file_exists(realpath(__DIR__ . '/..').'/common/php/special-header-1.php')) : ?>
    <h2 class="text-center hh hh4"><span style="font-size: 32px; color: #000; font-family: Helvetica;">Согласно Вашим данным сформирован список онлайн займов со скидкой до 50%.</span><br>
        <span class="green_font">
            <span style="background-color: #e8392c; color: #FFF;">
                <span class="top-exclamation">&nbsp;<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Внимание <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;</span></span>
                <br>
                <span style="color: #000 !important;">Оставьте заявку в трех компаниях и повысьте шанс получить займ до 99%.</span>
            </span>
    </h2>
<? else : require(realpath(__DIR__ . '/..').'/common/php/special-header-1.php'); endif; ?>
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
        
        echo '<div class="row" style="overflow-x: hidden;"><div class="col-md-12 col-xs-12 div-spec colfix my-full">';

        foreach($data as $item)
        {
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);

            $item['link'] = setUtm($item['link'],'Offerwall');
            
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
                <div class="lk-text"><span class="start-text">Сумма:</span> <span class="end-text">до '.number_format($item['amount'],0,'',' ').' <i class="fa fa-rub"></i></span><div class="myclear"></div></div>
                <div class="lk-text"><span class="start-text">Основная ставка:</span> <span class="end-text">'.$item['percent'].' <i class="fa fa-percent"></i></span><div class="myclear"></div></div>
                <div class="lk-text"><span class="start-text">Возраст:</span> <span class="end-text">от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></span><div class="myclear"></div></div>
                <div class="center2"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn2 skewheader_green">Получить деньги</button></a></div>
            </figure>
            </div>';
        }
        echo '</div></div>';
    ?>
    </div></div>
<br><br>
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>