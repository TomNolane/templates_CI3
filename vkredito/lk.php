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
$pixel = $this->pixel->stat('vkredito.ru');
?>
<link href="/templates/vkredito/css/lk1.css" rel="stylesheet" media="screen">
<div class="container">
<section class="form">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
        <?php
           echo'<h1 class="title">Вам автоматически одобрен займ в следующих организациях:</h1>';
            
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
                echo '<div class="col-md-6 col-sm-12 col-xs-12 offer-lk tab">
                        <a class="close-ribbon"><span class="ribbon-prob">'.$item['prob'].'%</span></a>
                        <div>
                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                            <img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" class="offers-img">
                        </a>
                        </div>
                        <div class="text-center">
                            <div>Максимальная сумма: <b>'.$item["amount"].' рублей</b></div>
                            <div>Максимальный срок: до <b>'.$item["period"].' '.$_plural_days[plural_type($item['period'])].'</b></div>
                            <div>Прооцентная ставка: <b>от '.$item["percent"].'%</b></div>
                        </div>
                        <div>
                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn btn-success btn-lk" target="_blank">Получить деньги</a>
                        </div>
                    </div>
                ';
            }
        ?>
                <div class="col-md-12 lk-trigger hidden-sm hidden-xs">
                    <div class="col-md-3"><img src="/templates/vkredito/img/lk/1.png" alt="1.png"/></div>  
                    <div class="col-md-3"><img src="/templates/vkredito/img/lk/2.png" alt="2.png"/></div>
                    <div class="col-md-3"><img src="/templates/vkredito/img/lk/3.png" alt="3.png"/></div>
                    <div class="col-md-3"><img src="/templates/vkredito/img/lk/4.png" alt="4.png"/></div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<div class="container-fluid for_img">
    <div class="img_footer"></div>
</div>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 844462441;
var google_conversion_label = "NxPcCNq4sHUQ6fLVkgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/844462441/?label=NxPcCNq4sHUQ6fLVkgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>