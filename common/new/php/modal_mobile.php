<?php
if ($this->uri->segment(1) == 'offerwall' || getDomain() == 'ru-zaimo.ru' || getDomain() == 'sumas.ru') {
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
.mobile-overlay {
    position: fixed;
    bottom: 0;
    left: 50%;
    width: 55%;
    background: none;
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    z-index: 10;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
}

.mobile-popup {
    margin: 10px auto;
    padding: 20px 10px 10px;
    border-radius: 5px;
    position: relative;
    transition: all 5s ease-in-out;
    border: 3px solid #ffdd2d;
    background: rgba(252,234,187,1);
    background: -moz-linear-gradient(top, rgba(252,234,187,1) 0%, rgba(248,181,0,1) 54%, rgba(248,181,0,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(252,234,187,1)), color-stop(54%, rgba(248,181,0,1)), color-stop(100%, rgba(248,181,0,1)));
    background: -webkit-linear-gradient(top, rgba(252,234,187,1) 0%, rgba(248,181,0,1) 54%, rgba(248,181,0,1) 100%);
    background: -o-linear-gradient(top, rgba(252,234,187,1) 0%, rgba(248,181,0,1) 54%, rgba(248,181,0,1) 100%);
    background: -ms-linear-gradient(top, rgba(252,234,187,1) 0%, rgba(248,181,0,1) 54%, rgba(248,181,0,1) 100%);
    background: linear-gradient(to bottom, rgba(252,234,187,1) 0%, rgba(248,181,0,1) 54%, rgba(248,181,0,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fceabb', endColorstr='#f8b500', GradientType=0 );
}

.mobile-popup h2 {
    margin-top: 0;
    color: #FFF;
    font-family: Tahoma, Arial, sans-serif;
}

.mobile-popup .mobile-popup-close {
    position: absolute;
    top: -18px;
    right: 10px;
    transition: all 200ms;
    font-size: 400%;
    font-weight: bold;
    text-decoration: none;
    color: #FFF;
    cursor: pointer;
    text-shadow: -2px 0 black, 0 -2px black, 3px 0 black, 0 3px black;
}
.mobile-popup .mobile-popup-close:hover {
    color: #06D85F;
}
.mobile-popup .mobile-popup-content {
    max-height: 30%;
    overflow: auto;
    color: #FFF;
}

.mobile-popup-image {/*width: auto !important;*/}

.mobile-popup-btn {
    width: 100%;
    padding: 10px 20px;
    margin: 14px 0px 0px;
    font-size: 15px;
    font-weight: 700;
    background-color: #FFF;
    color: #F38300;
    border: 2px solid #F38300;
}
</style>

<div id="mobile-popup1" class="mobile-overlay">
	<div class="mobile-popup">
		<a class="mobile-popup-close" href="javascript:void(0);">&times;</a>
        <div class="mobile-popup-content">
            <table cellpadding=0 cellspacing=0 border=0 style="width: 100%;">
                <tr><td style="text-align: center; font-size: 115%; font-family: Helvetica; font-weight: bold;" colspan=2>Вам одобрено<br>15 000 <i class="fa fa-rub" aria-hidden="true" style="color: #FFF;"></i> после заявки</td></tr>
                <tr>
                    <td>
                        <a id="notificate_url" class="text-center" rel="noopener" href="<?=$url?>" target="_blank">
                            <img class="mobile-popup-image notice-image img-fluid polymodal-center" src="https://bzaim5.ru/templates/common/img/offers/<?=$img?>.png" alt="<?=$img?>.png" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a id="notificate_url2" href="<?=$url?>" rel="noopener" target="_blank">
                            <button type="button" class="mobile-popup-btn">ЗАБРАТЬ ДЕНЬГИ</button>
                        </a>
                    </td>
                </tr>
            </table>
		</div>
	</div>
</div>