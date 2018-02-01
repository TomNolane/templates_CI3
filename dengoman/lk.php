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
$pixel = $this->pixel->stat('dengoman.ru');
?>

<div class="container lk">
	<h1>Вам автоматически одобрен займ в следующих организациях:</h1>
	<div class="row">
            <div class="col-md-12">
                <div class="text-center hidden-xs">
                        <?php
                            function plural_type($n) { 
                                return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
                            } 
                            
                            $_plural_years = array('год', 'года', 'лет');
                            $_plural_months = array('месяц', 'месяца', 'месяцев');
                            $_plural_days = array('день', 'дня', 'дней');
                            $_plural_times = array('раз', 'раза', 'раз');
                            
                            foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);
                                echo '<div class="col-sm-6 col-md-6 white tab"> 
                                        <div class="item text-center">
                                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                                <img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                                            </a>
                                            <div class="text-center">
                                                <div>Максимальная сумма: <b>'.$item["amount"].' рублей</b></div>
                                                <div>Максимальный срок: <b>'.$item["period"].' '.$_plural_days[plural_type($item['period'])].'</b></div>
                                                <div>Прооцентная ставка: <b>от '.$item["percent"].'%</b></div>
                                            </div>
                                            <br/>
                                            
                                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn" target="_blank">Получить деньги</a>                               
                                        </div>        
                                    </div>';
                            }
                        ?>
                </div>
                
		<div class="results-small visible-xs">
                    <?php
			foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);
                            echo '<hr>
				<div class="row" style="background: #ffffff4d;padding: 10px 0px;">
                                    <div class="col-sm-4 text-center tab">
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><img src="/templates/common/img/offers/'.$item['img'].'.png" class="'.$item['img'].'" alt="'.$item['title'].'"></a>
                                    </div>
                                    <div class="col-sm-4 text-center"><p>Вероятность одобрения: '.$prob = ( ($item['prob']-floor($item['prob'])) == 0 ? floor($item['prob']) : $item['prob']).'%</p></div>
                                    <div class="col-sm-4 text-center">
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn" target="_blank">Получить</a>
                                    </div>
                                </div>';
			}
                    ?>
		</div>
            </div>
    </div>
    <div class="row hidden-xs">
        <div class="q text-left hidden-xs">
            <div class="col-md-6 col-sm-6">
                <img src="/templates/dengoman/img/lk/1.png" alt="1.png">
                <h3>Первый заём</h3>
                <p>до 10 000 рублей выдается по ставке 0% в случае своевременного погашения</p>
            </div>
            <div class="col-md-6 col-sm-6">  
                <img src="/templates/dengoman/img/lk/3.png" alt="3.png">
                <h3>Процентная ставка за день</h3>
                <p>Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="/templates/dengoman/img/lk/2.png" alt="2.png">
                <h3>На территории всей России</h3>
                <p>Займ можно оформить, находясь в любой точке России</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="/templates/dengoman/img/lk/4.png" alt="4.png">
                <h3>Различные варианты получения займов</h3>
                <p>На карту VISA, MAESTRO, QIWI кошелёк, Яндекс.Деньги, через систему CONTACT, банковский счёт</p>
            </div>
        </div>
    </div>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080;  
(&#1041;&#1077;&#1079; &#1044;&#1054;&#1048;) Conversion Page -->
<script >
/* <![CDATA[ */
var google_conversion_id = 832750617;
var google_conversion_label = "luceCP6xmngQmYiLjQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script   
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/832750617/?label=luceCP6xmngQmYiLjQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>