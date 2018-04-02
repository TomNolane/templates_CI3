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
$pixel = $this->pixel->stat('zaimcoin.ru');
?>
<div class="container ex-spasibo">
    <h1>Вам автоматически одобрен займ 
        в следующих организациях:</h1>
    <table class="hidden-xs hidden-sm">
        <thead><tr>
        <th scope="col">МФО</th>
        <th scope="col">Процентная ставка</th>
        <th scope="col">Максимальный срок</th>
        <th scope="col">Максимальная сумма</th>
        <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
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

            echo '<tr>
                        <td data-label="МФО"><div><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><img class="img-responsive  lk-img '.$item['title'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'""></a></div></td>
                        <td data-label="Процентная ставка"><div>от '.$item['percent'].'%</div></td>
                        <td data-label="Максимальный срок"><div> до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].' </div></td>
                        <td data-label="Максимальная сумма"><div>'.number_format($item['amount'],0,'',' ').' рублей</div></td>
                        <td data-label=""><div>
                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="ex-orange-btn" target="_blank">Получить деньги</a>
                        </div></td>
                    </tr>';  
            }
        ?>
        </tbody>
    </table>
    <table class="hidden-md hidden-lg"> 
        <tbody>

        <?php 
            foreach($data as $item)
            {
                $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                $item['link'] = str_replace("#site", $domen, $item['link']);

            echo '<tr> 
                        <td><center> <a   href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                        <img src="/templates/common/img/offers/'.$item['img'].'.png" class="'.$item['img'].'" alt="'.$item['title'].'">
                    </a></center></td>
                                
                        </tr>  
                        <tr>
                            <td>  
                                    <div> Прооцентная ставка от '.$item["percent"].'% </div>
                                    <div> Максимальная сумма '.$item["amount"].' рублей </div>
                                    <div> Максимальный срок  '.$item["period"].' '.$_plural_days[plural_type($item['period'])].' </div>
                            </td>
                        </tr>
                        <tr>
                        <td><a style="color: #000000" href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"   target="_blank"><button class="ex-orange-btn">Получить деньги</button></a></td>
                        </tr>';}
        ?>
        </tbody>
    </table>
</div>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 827428872;
var google_conversion_label = "xmjJCLrypHkQiKDGigM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/827428872/?label=xmjJCLrypHkQiKDGigM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>