<?php
    require_once('helper.php');
    
    $my_title = "Вам персональное предложение";
    $site = str_replace("www.", "", $site);
    $site = str_replace(".tomnolane", "", $site);

    $dir_site = str_replace(".ru", "", str_replace(".su", "",str_replace(".info", "", $site)));
    require realpath(__DIR__ . '/..').'/'.$dir_site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    //  if($site == 'zaimol')
    //     $data = $this->offers->all(8, 0);
    // else 
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
	echo '<div><style scoped>';
    require 'new2/css/lk2.php';
    require 'new2/css/lk.css';
	echo '</style></div>'; 
?>
<?php if( $site == 'forzaim') : ?>
<nav class="ex-main-header ex-transparent hidden-xs">
    <div class="container">
        <i class="ex-hamburger"></i>
        <a class="ex-brand" href="/">Forzaim</a>
    </div>
</nav>
<?php endif; ?>

<div class="row container3"><div class="col-md-12">
<? if (!file_exists(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-1.php')) : ?>
<h2 class="text-center hh hh4">Заявка с таким номером телефона уже существует, но ВАМ<br><span class="gold_font">  предварительно одобрен займ</span> в организациях ниже:</h2>
<? else : require(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-1.php'); endif; ?>
<? if (!file_exists(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-2.php')) : ?>
<h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки во всех компаниях</h2>
<? else : require(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-2.php'); endif; ?>
    <br>
    <div class="row" id="for_google">
    
	 <div class="text-center hidden-xs" id="img_agree"><img src="/templates/common/img/stamp.png" /></div>
     
    <?php 
        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');

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
        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);

        echo '<div class="row"><div class="col-md-12 col-xs-12 div-spec colfix">';
        foreach($data as $item)
        {
            echo '<div class="col-md-3 col-xs-6 mycol" >
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
</div>
<br><br>
<?php require realpath(__DIR__ . '/..').'/'.$dir_site.'/footer.php';?>