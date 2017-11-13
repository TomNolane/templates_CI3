<?php 
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
                            <td>Процентная ставка</td>
                            <td>от '.$item['percent'].'%</td>
                        </tr>
                        <tr>
                            <td>Максимальная сумма</td>
                            <td>'.number_format($item['amount'],0,'',' ').' рублей</td>
                        </tr>
                        <tr>
                            <td>Максимальный срок</td>
                            <td>'.$item['period'].' дней</td>
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
<?php require 'footer.php'; ?>