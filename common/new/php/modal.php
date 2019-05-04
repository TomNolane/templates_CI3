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

function setcookie(name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + (new Date(expires)) : "") +
        ((path) ? "; path=" + path : "; path=/") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}
function getcookie(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;

    if (cookie.length > 0) {
        offset = cookie.indexOf(search);

        if (offset != -1) {
            offset += search.length;
            end = cookie.indexOf(";", offset)

            if (end == -1) {
                end = cookie.length;
            }

            setStr = unescape(cookie.substring(offset, end));
        }
    }

    return (setStr);
}


function checkOffer (_boolean)
{
  var _temp_checkOffer = 0;
  for (var i = 0; i < Object.keys(arr_offers).length; i++)
  {
      if(arr_offers[Object.keys(arr_offers)[i]].count == _offers_count)
      {
        _offers_url = arr_offers[Object.keys(arr_offers)[i]].url;
        _offers_img = arr_offers[Object.keys(arr_offers)[i]].src;

        document.querySelector('#change_img').src = _offers_img;
        document.querySelector('#notificate_url').href = _offers_url;
        document.querySelector('#notificate_url2').href = _offers_url;
        
        if(_boolean)
          setcookie(arr_offers[Object.keys(arr_offers)[i]].name,++arr_offers[Object.keys(arr_offers)[i]].count);
        
        break;
      }
      else
      {
        _temp_checkOffer++;
      }
  }

  if(_temp_checkOffer == 3)
  {
    _offers_count += 1; 
    checkOffer(_boolean);
  }
}

document.querySelector('#notificate_url').addEventListener('click', function () { 
   //checkOffer(true);
});

document.querySelector('#notificate_url2').addEventListener('click', function () { 
   //checkOffer(true);
});
</script>
