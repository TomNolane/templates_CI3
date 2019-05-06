<?php
    $my_title = "Мгновенные займы на карту";
    $site = str_replace("www.", "", $site);
    $site = str_replace(".tomnolane", "", $site);
    $site = str_replace("bzaim5", "bzaim", $site);
    $site = str_replace("zaimomirsu", "zaimomir", $site);
    $site = str_replace("zaimnowsu", "zaimnow", $site);
    $site = str_replace(".ru", "", str_replace(".su", "",str_replace(".info", "", str_replace(".com", "", $site))));

    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all2(18, 0);
    
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
    $base_url = str_replace("/","",base_url());
    $base_url = str_replace("https:","",$base_url);
    $base_url = str_replace("http:","",$base_url);
    $pixel = $this->pixel->stat($base_url);

    $email = 'support@'.getDomain();
    $logo_foot = '/templates/common/img/logo-fanzaim.png';
    switch ($this->uri->segment(1)) {
        case 'offerwall': $logo_foot = '/templates/common/img/logo-fanzaim.png'; $email = 'support@fanzaim.ru'; break;
        case 'pixell': $logo_foot = '/templates/common/img/logo-fanzaim.png'; $email = 'support@fanzaim.ru'; break;
        case 'offerwall2': $logo_foot = '/templates/common/img/logo-edenga.png'; $email = 'support@edenga.ru'; break;
        default: break;
    }

if($setting_array['is_mobile'] != 'мобила') 
    require 'pixel_desktop.php';
else
    require 'pixel_mobile.php';

require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';
?>