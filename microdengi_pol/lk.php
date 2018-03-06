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
$pixel = $this->pixel->stat('kasaodzaraz.pl');

$_plural_years = array('rok', 'lata', 'lat');
$_plural_months = array('miesiąc', 'miesiąc', 'miesięcy');
$_plural_days = array('dzień', 'dni', 'dni');
$_plural_times = array('raz', 'razy', 'razem');
function plural_type($n) { 
    return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
} 
?>
<main class="ex-offerta">
    <div class="container">
        <h1 class="text-center">Automatycznie zatwierdzony pożyczkę w następujących instytucjach:</h1>
        <div class="ex-offers-content">
            <div class="row">
                <?php  foreach($data as $item)
                        {
                            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                            $item['link'] = str_replace("#site", $domen, $item['link']); 
        
                            echo '<div class="col-md-3">
                                <div class="ex-off-block">
                                    <p class="text-right">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <figure>
                                        <div class="ex-img-offerta">
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                            <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                                        </a> 
                                        </div>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>Kwota kredytu</td>
                                                <td>do '.number_format($item['amount'],0,'',' ').' zł</td>
                                            </tr>
                                            <tr>
                                                <td>Okres pożyczki</td>
                                                <td>do '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</td>
                                            </tr>
                                            <tr>
                                                <td>Stawka podstawowa</td>
                                                <td>'.$item['percent'].'%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </figure>
                                    <div class="ex-offers-footer">
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn">Dostać pieniądze</button></a> 
                                    </div>
                                </div>
                            </div>';
                        }
                    ?> 
            </div>
        </div>
    </div>
    <div class="buffer2"></div>
</main> 
<?php require 'footer.php'; ?>