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
$pixel = $this->pixel->stat('zaimomix.ru');

$_plural_years = array('год', 'года', 'лет');
$_plural_months = array('месяц', 'месяца', 'месяцев');
$_plural_days = array('день', 'дня', 'дней');
$_plural_times = array('раз', 'раза', 'раз');
function plural_type($n) { 
    return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
} 
?>
<section class="ex-offerta">
<div class="ex-page-title">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Вам автоматически одобрен займ в следующих организациях:</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="ex-offetra-content">
                <?php  
                    foreach($data as $item)
                    {
                        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                        $item['link'] = str_replace("#site", $domen, $item['link']);

                        echo '<div class="ex-off-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ex-offerta-head">
                                            <div class="row align-items-end">
                                                <div class="col-6">
                                                    <p>'.$item['title'].'</p>
                                                </div>
                                                <div class="col-6">
                                                    <div class="ex-stars">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>Сумма займа</td>
                                                <td>до '.number_format($item['amount'],0,'',' ').' рублей</td>
                                            </tr>
                                            <tr>
                                                <td>Срок займа</td>
                                                <td>до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</td>
                                            </tr>
                                            <tr>
                                                <td>Основная ставка</td>
                                                <td>'.$item['percent'].'%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5 offset-md-1">
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                            <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                                        </a>
                                        <div class="ex-offers-foot">
                                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn">Получить деньги</button></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>
                </div>
           </div>
       </div>
   </div>
</section>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script >
/* <![CDATA[ */
var google_conversion_id = 818877984;
var google_conversion_label = "W56FCL7S43sQoKy8hgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script   
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/818877984/?label=W56FCL7S43sQoKy8hgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
Page -->
<script >
/* <![CDATA[ */
var google_conversion_id = 818913167;
var google_conversion_label = "g0PrCKW2-nsQj7--hgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script   
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/818913167/?label=g0PrCKW2-nsQj7--hgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>