<?php 
    $my_title = "Вам автоматически одобрен займ";
    require 'header.php'; 
    $this->load->model('offers/offers_model', 'offers');
    $data = $this->offers->all();
    
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
    $pixel = $this->pixel->stat('forzaim.ru');
?>
<nav class="ex-main-header">
    <div class="container">
        <i class="ex-hamburger"></i>
        <a class="ex-brand" href="/">Forzaim</a>
    </div>
</nav>
<main class="ex-offerta">
<div class="container">
    <h2 class="text-center">Вам автоматически одобрен займ в следующих организациях:</h2>
    <div class="row">
    <?php

function plural_type($n) { 
    return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
} 

$_plural_years = array('год', 'года', 'лет');
$_plural_months = array('месяц', 'месяца', 'месяцев');
$_plural_days = array('дня', 'дня', 'дней');
$_plural_times = array('раз', 'раза', 'раз');

                foreach($data as $item)
                {
                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                    $item['link'] = str_replace("#site", $domen, $item['link']);

                    echo '<div class="col-md-3">
                    <figure class="text-center">
                        <span class="fa fa-star ex-checked-stars"></span>
                        <span class="fa fa-star ex-checked-stars"></span>
                        <span class="fa fa-star ex-checked-stars"></span>
                        <span class="fa fa-star ex-checked-stars"></span>
                        <span class="fa fa-star ex-checked-stars"></span>
                        <div class="ex-wrapper"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                        <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                    </a></div>
                        <div class="spec_lk3"><b>Максимальная сумма:</b> </div> 
                        <p>'.number_format($item['amount'],0,'',' ').'<i></i></p>
                        <table>
                            <tbody><tr>
                                <td>Основная ставка</td>
                                <td>'.$item['percent'].'%</td>
                            </tr>
                            <tr>
                                <td>Срок займа</td>
                                <td>до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn">Получить деньги</button></a>
                    </figure>
                    </div>'; 
                }
            ?>
    </div>
</div>
<div class="ex-adds"></div>
</main> 
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 824879582;
var google_conversion_label = "lw8uCLndhnoQ3tOqiQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/824879582/?label=lw8uCLndhnoQ3tOqiQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>