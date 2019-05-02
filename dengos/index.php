<?php

$my_title = "Вам автоматически получения займа или кредита";
$site = 'dengos';

$site = str_replace("www.", "", $site);
$site = str_replace(".tomnolane", "", $site);

require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
$this->load->model('offers/offers_model', 'offers');

(isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;

$data = $this->offers->all(18, 0);

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
//$this->load->model('pixel/pixel_model', 'pixel');
$base_url = str_replace("/","",base_url());
$base_url = str_replace("https:","",$base_url);
$base_url = str_replace("http:","",$base_url);
$pixel = 1;

if($setting_array['is_mobile'] != 'мобила') 
{
    require_once 'index_desktop.php';
} 
else
{ 
    require_once 'index_mobile.php';
}
require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';
?>