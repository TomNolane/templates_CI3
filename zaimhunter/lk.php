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
$pixel = $this->pixel->stat('zaimhunter.ru');
?>
<main>
    <div class="container">
        <div class="ex-offerta">
            <h1>Вам автоматически одобрен<br>
                займ в следующих организациях:</h1>
<div class="row"> 
<?php
$arr = array(259,500,230,300,456,321);
$i = 0;
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
        <div class="ex-offerta-block">
            <div class="ex-wrapper">
                <div class="ex-table-scope"> 
                    <table>
                        <thead><tr><th><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">'.$item['title'].'</a></th><th>
                            <div class="ex-oferta-user">
                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                            <img class="img-responsive  lk-img '.$item['title'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" style="width: 100px;">
                        </a><span class="badge">'.$arr[$i].'</span>
                            </div>
                        </th></tr></thead>
                        <tbody>
                        <tr>
                            <td>Процентная ставка:</td>
                            <td>от '.$item['percent'].'%</td>
                        </tr>
                        <tr>
                            <td>Максимальная сумма:</td>
                            <td>'.number_format($item['amount'],0,'',' ').' рублей</td>
                        </tr>
                        <tr>
                            <td>Максимальный срок:</td>
                            <td>до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ex-offerta-foot">
                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn ex-main-btn" target="_blank">Получить деньги</a>
                    <!-- <button class="ex-main-btn">Получить деньги</button> -->
                </div>
            </div>

        </div>
    </div>';
    $i++;
}
?>  
</div>

        </div>
    </div>
</main>

<div class="special_box hidden-xs hidden-sm"></div>
<br><br><br>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 827436364;
var google_conversion_label = "oLu3COf5v3kQzNrGigM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/827436364/?label=oLu3COf5v3kQzNrGigM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>