<?php
if ($this->uri->segment(1) == 'pixell' || getDomain() == 'ru-zaimo.ru' || getDomain() == 'sumas.ru' | getDomain() == 'dengos.ru') {
  $this->load->model('analytics/forms_model', 'analytics');
  $json = $this->analytics->popup10secGetJson2();
}
else if ($this->uri->segment(1) == 'offerwall')
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
<div class="notificate-wrapper pulse2"><table class="table table-hover table-responsive">
  <thead>
     <tr> 
       <td class="popup08"  style="text-align: center;"><i class="fa fa-remove close-btn close_spec"></i><span><?=$text?></span></td> 
    </tr>
  </thead>
  <tbody>
    <tr class="popup08">
      <td class="text-center"  ><a id="notificate_url" class="text-center" rel="noopener" href="<?=$url?>" target="_blank"><img class="notice-image img-fluid" id="change_img" style="max-width: 300px;" src="https://bzaim5.ru/templates/common/img/offers/<?=$img?>.png" alt="<?=$img?>.png"></a></td> 
    </tr>
    <tr class="popup08">
      <td class="text-center">
        <a id="notificate_url2" href="<?=$url?>" rel="noopener" target="_blank"><div><input type="button" class="btn_popup" value="Оставить заявку"></div></a>
        </td>
    </tr>
  </tbody>
</table>
</div>
<script>
var _show_modal_timer = (document.location.pathname != '/lk') ? <?=$json[0]["seconds_lk"]?> : <?=$json[0]["seconds"]?>;
</script>
