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
$pixel = $this->pixel->stat('zaimol.ru');
?> 

<section class="ex-spasibo">
    <h1 class="text-center">Вам автоматически одобрен займ<br>
        в следующих организациях:</h1>
    <main>
        <div class="container">
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

                    echo '<div class="col-lg-3 col-sm-6">
                        <div class="ex-draft">
                            <div class="ex-wrapper">
                                <h3 class="hidden-xs hidden-sm">'.$item['title'].'</h3>
                                <div class="ex-img-place">
                                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                    <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                                </a>  
                                </div>
                                <table>
                                    <tr>
                                        <td>Процентная ставка</td>
                                        <td>от '.$item['percent'].'%</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальный срок</td>
                                        <td>до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>До</td>
                                        <td>'.number_format($item['amount'],0,'',' ').' рублей</td>
                                    </tr>
                                </table>
                                <p class="text-center hidden-xs hidden-sm">Спасибо</p>
                            </div>
                            <div class="ex-spasibo-btn"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn">Получить деньги</button></a></div>
                        </div>

                    </div>';
                }
            ?> 
            </div>
        </div>
    </main>
    <!-- <div class="ex-hidden-div">
    </div> -->
</section>
    </div>
</div>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 826360846;
var google_conversion_label = "tDGuCMWP13kQjoiFigM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/826360846/?label=tDGuCMWP13kQjoiFigM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>