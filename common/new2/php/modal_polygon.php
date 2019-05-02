<?php

function getDomain2()
{
  $CI =& get_instance();
  return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/","$1", $CI->config->slash_item('base_url'));
}

if ($this->uri->segment(1) == 'offerwall' || getDomain2() == 'ru-zaimo.ru' || getDomain2() == 'sumas.ru') {
  $this->load->model('analytics/forms_model', 'analytics');
  $json = $this->analytics->popup10secGetJson2();

  // $text = 'Вам одобрено 15 000 рублей<br>после заявки';
  // $img = 'bigzaim';
  // $url = 'https://pxl.leads.su/click/3b00787cbb4b9484e25cbe512163ca7d?source=Popup&aff_sub1=Popup&aff_sub2=Popup&aff_sub3=Popup&aff_sub4=Popup';
  
}
else if ($this->uri->segment(1) == 'offerwall2')
{
  $this->load->model('analytics/forms_model', 'analytics');
  $json = $this->analytics->popup10secGetJson3();
}
else
{
  $this->load->model('analytics/forms_model', 'analytics');
  $json = $this->analytics->popup10secGetJson();
}

$text = $json[0]["text"];
$img = $json[0]["header"];
$url = $json[0]["url"];

?>

<script>
    var _show_modal_timer = (document.location.pathname != '/lk') ? <?=$json[0]["seconds_lk"]?> : <?=$json[0]["seconds"]?>;
</script>

<style>
.polymodal-container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    bottom: -15px;
    right: 30px;
    z-index: 10001;
    width: 30vh;
    height: 30vh;
    overflow: hidden;
    opacity: 0;
    visibility: hidden;
}

.polymodal-dialog {
    position: relative;
    overflow: hidden;
}

.polymodal-svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.polymodal-polygon {
    fill: url(#polymodal-gradient);
}

.polymodal-content {
    position: relative;
    top: 0;
    left: 0;
    padding: 24px;  
    visibility: hidden;
    opacity: 0;  
    color: rgba(255,255,255,0.87);
    outline: 2px solid #F38300;
    outline-offset: -6px;
}

.polymodal-close {
    position: absolute;
    top: 12px;
    right: 16px;
}
.polymodal-close .fa {
    color: #F38300;
    cursor: pointer;
    font-size: 22px;
}

.polymodal-header {
    line-height: 1.35em;
    padding-top: 18px;
    font-family: "Helvetica";
    text-align: center;
    font-size: 125%;
    text-decoration: underline;
    display: block;
    font-weight: bold;
    color: #777;
}

.polymodal-center {
    max-width: 300px;
    padding-top: 10px;
}

.polymodal-btn {
    width: 100%;
    padding: 10px 30px;
    margin: 14px 0px 0px;
    font-size: 15px;
    font-weight: 700;
    background-color: #FFF;
    color: #F38300;
    border: 2px solid #F38300;
}
</style>

<section id="polymodal-1" class="polymodal-container">
    <div class="polymodal-dialog">    
        <svg class="polymodal-svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon class="polymodal-polygon" />
        <defs>
            <linearGradient id="polymodal-gradient" x1="50%" y1="100%" x2="50%" y2="0%" > 
                <stop offset="0%" style="stop-color:#FFF;stop-opacity:1" />
                <stop offset="50%" style="stop-color:#FFF300;stop-opacity:1">
                    <animate attributeName="offset" dur="1100ms" values="1;0" repeatCount="indefinite" />
                </stop>
                <stop offset="100%" style="stop-color:#FFF;stop-opacity:1" />
                <animate attributeName="x1" dur="900ms" from="0%" to="100%" values="0;1;0" repeatCount="indefinite" />
            </linearGradient>
        </defs>
        </svg>
        
        <div class="polymodal-content">
            <div class="polymodal-close" title="Закрыть"><i class="fa fa-times" aria-hidden="true"></i></div>
            <span class="polymodal-header">Вам одобрено 15 000 <i class="fa fa-rub" aria-hidden="true" style="color: #777;"></i> после заявки</span>
            <a id="notificate_url" class="text-center" rel="noopener" href="<?=$url?>" target="_blank">
                <img class="notice-image img-fluid polymodal-center" src="https://bzaim5.ru/templates/common/img/offers/<?=$img?>.png" alt="<?=$img?>.png" />
            </a>
            <div class="polymodal-footer">
                <a id="notificate_url2" href="<?=$url?>" rel="noopener" target="_blank">
                    <button type="button" class="polymodal-btn">ОСТАВИТЬ ЗАЯВКУ</button>
                </a>
            </div>
        </div>
    </div>
</section>