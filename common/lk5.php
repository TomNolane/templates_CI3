<?php
    require_once('helper.php');

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
    require 'new2/css/lk5.css';
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
        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');

        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
        $words = array (
            '<div class="skewheader__bg skewheader_green"></div><div class="skewinside caption">Без документов</div>',
            '<div class="skewheader__bg skewheader_orange"></div><div class="skewinside caption">Одобрение 100% сегодня</div>',
            '<div class="skewheader__bg skewheader_red"></div><div class="skewinside caption">Круглосуточная выдача</div>',
            '<div class="skewheader__bg skewheader_pink"></div><div class="skewinside caption">Займ без отказов</div>'
        );

        echo '<div class="row"><div class="col-md-12 col-xs-12 div-spec colfix my-full">';
        foreach($data as $item)
        {
            $item['link'] = $item['link'].'&aff_sub=Offerwall&aff_sub1=Offerwall&aff_sub2=Offerwall&aff_sub3=Offerwall&aff_sub4=Offerwall&s=Offerwall&s1=Offerwall&sub=Offerwall&sub1=Offerwall&sub2=Offerwall';
             
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