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
$pixel = $this->pixel->stat('dengimo.ru');
?> 
     <div class="container new_style">
        <div class="row">
            
        <?php
            echo'
                <h1 class="title">Вам доступен займ в следующих организациях:</h1>
            ';
        ?>
            
            <?php if(isset($data))
            { 
                function plural_type($n) { 
                    return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
                } 
                
                $_plural_years = array('год', 'года', 'лет');
                $_plural_months = array('месяц', 'месяца', 'месяцев');
                $_plural_days = array('день', 'дня', 'дней');
                $_plural_times = array('раз', 'раза', 'раз');
            ?>
                <?php foreach($data as $item){ ?>
                    <?php 
                        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                        $item['link'] = str_replace("#site", $domen, $item['link']);
			echo ' 
                        <div class="col-sm-6 col-md-6 tab">
                            <div class="tab_wrapper">
                                <div class="tab_1 text-center">
                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                        <img src="/templates/common/img/offers/'.$item['img']. '.png" alt="'. $item['title'].'">
                                    </a>
                                    <div class="percent hidden-sm hidden-xs">'.$item["prob"].'% </div>
                                </div>
                                <div class="text-center">
                                    <div>Максимальная сумма: <b>'.$item["amount"].' рублей</b></div>
                                    <div>Максимальный срок: <b>'.$item["period"].' '.$_plural_days[plural_type($item['period'])].'</b></div>
                                    <div>Прооцентная ставка: <b>от '.$item["percent"].'%</b></div>
                                </div>
                                <div class="take_money">
                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">Забрать деньги</a>
                                </div>
                            </div>
                        </div>';
                    ?>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="row hidden-sm hidden-xs">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <ul class="foot_card list-inline row">
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                </ul>
            </div>
        </div>
     </div> 
<?php require 'footer.php'; ?>