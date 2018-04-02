<?php 
$my_title = "Вам автоматически одобрен займ";
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
$pixel = $this->pixel->stat('zaimhome.ru');
?>
<?php require 'header.php';?> 
<div id="ex-thanks" class="container">
    <h2 class="text-center">Вам автоматически одобрен займ
        <br> в следующих организациях:</h2>
    <div class="row"> 
        <?php
            function plural_type($n) { 
                return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
            } 

            $_plural_years = array('год', 'года', 'лет');
            $_plural_months = array('месяц', 'месяца', 'месяцев');
            $_plural_days = array('дня', 'дня', 'дней');
            $_plural_times = array('раз', 'раза', 'раз');

            $ii = 1;
            foreach($data as $item){
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
            $item['link'] = str_replace("#site", $domen, $item['link']);                    
            echo '<div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" style="text-decoration: none; color: white;" target="_blank"><div class="ex-wrapper">
                <div class="rating'.$ii.'"></div><span class="ex-how-many">'.$item['prob'].' отзыва</span>
                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Процентная ставка</b></td>
                        <td><b>от '.$item['percent'].'%</b></td>
                    </tr>
                    <tr>
                        <td><b>Максимальная сумма</b></td>
                        <td><b>'.number_format($item["amount"],0,""," ").' рублей</b></td>
                    </tr>
                    <tr>
                        <td><b>Максимальный срок</b></td>
                        <td><b>до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</b></td>
                    </tr>
                    </tbody>
                </table>
                <div class="ex-bottom-info">
               <img  '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" style="width:100%; min-height: 45px; height:84px;">
                </div>
            </div>
            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" style="text-decoration: none; color: white;" target="_blank"><button class="ex-main-btn">получить деньги</button></a>
        </div></a>
';$ii++;
}
?>
    </div>
</div>
<!-- <div class="ex-adds">
    <div></div>
    <div></div>
</div> -->

 
<?php require 'footer.php';?>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 829599728;
var google_conversion_label = "0mQrCM_Bi3gQ8N_KiwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/829599728/?label=0mQrCM_Bi3gQ8N_KiwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>