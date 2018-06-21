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
$pixel = $this->pixel->stat('dengimo.ru');
?>

<link href="/templates/dengimo/css/lk.css" rel="stylesheet" media="screen">
     <div class="container new_style">
        <div class="row">
            <h1>Вам подобраны организации с лучшими условиями займа</h1>
            <p>Вероятность забрать <strong id="amount_lk"> 15 000  рублей </strong> сейчас  <span class="percent_top"> 95%</span></p>
            <?php print_r($passport); ?>
        </div>
     </div>

<?php require 'footer.php'; ?>