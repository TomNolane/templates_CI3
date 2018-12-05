<div class="notificate-wrapper pulse2"><table class="table table-hover table-responsive">
  <thead>
     <tr> 
       <td class="text-center popup08" colspan="2">Вам одобрен перевод на карту &nbsp;<i class="fa fa-remove close-btn"></i></td> 
    </tr>
  </thead>
  <tbody>
    <tr class="popup08">
      <td class="text-center" colspan="2"><a id="notificate_url" rel="noopener" href="https://webankyr.ru/?utm_source=Popup_10S" target="_blank"><img class="notice-image img-fluid" id="change_img" src="https://bzaim5.ru/templates/common/img/offers/webbankir.png" alt="webbankir.png"></a></td> 
    </tr>
    <tr class="popup08 text-center">
      <td>Сумма:</td>
      <td>8 000 &nbsp;<i class="fa fa-rub fa-lg"></i></td>
    </tr>
    <tr class="popup08">
      <td class="text-center" colspan="2">
        <a id="notificate_url2" href="https://webankyr.ru/?utm_source=Popup_10S" rel="noopener" target="_blank"><input type="button" class="btn_popup" value="Забрать деньги"></a>
        </td>
    </tr>
  </tbody>
</table>
</div>
<script>
function setcookie2(name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + (new Date(expires)) : "") +
        ((path) ? "; path=" + path : "; path=/") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}
function getcookie2(name) {
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

var arr_offers = {
 'webbankir': { 
   'url': 'https://webankyr.ru?source=Popup10sec',
   'src': 'https://bzaim5.ru/templates/common/img/offers/webbankir.png',
   'count': (getcookie2('webbankir_count') != null) ? parseInt(getcookie2('webbankir_count')) : 0,
   'name': 'webbankir_count'
  }, 
 'moneyman':
 { 
   'url': 'https://manimy.ru?source=Popup10sec',
   'src': 'https://bzaim5.ru/templates/common/img/offers/moneyman.png',
   'count': (getcookie2('moneyman_count') != null) ? parseInt(getcookie2('moneyman_count')) : 0,
   'name': 'moneyman_count'
 },
 'limezaim': 
 { 
   'url': 'https://lime-finance.go2affise.com/click?pid=2&offer_id=1&sub1='+encodeURIComponent(document.location.href),
   'src': 'https://bzaim5.ru/templates/common/img/offers/lime.png',
   'count': (getcookie2('limezaim_count') != null) ? parseInt(getcookie2('limezaim_count')) : 0,
   'name': 'limezaim_count'
 } 
}

var _offers_count = 0;
var _offers_img = arr_offers['webbankir'].src;
var _offers_url = arr_offers['webbankir'].url; 

//checkOffer();

function checkOffer ()
{
  var _temp_checkOffer = 0;
  for (var i = 0; i < Object.keys(arr_offers).length; i++)
  {
      if(arr_offers[Object.keys(arr_offers)[i]].count == _offers_count)
      {
        _offers_url = arr_offers[Object.keys(arr_offers)[i]].url;
        _offers_img = arr_offers[Object.keys(arr_offers)[i]].src;;
        setcookie2(arr_offers[Object.keys(arr_offers)[i]].name,++arr_offers[Object.keys(arr_offers)[i]].count);
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
    checkOffer();
  }
}

document.querySelector('#change_img').src = _offers_img;
document.querySelector('#notificate_url').href = _offers_url;
document.querySelector('#notificate_url2').href = _offers_url;
</script>