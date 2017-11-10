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
function utf_win2($s){  
    $in=array("%u0430","%u0431","%u0432","%u0433","%u0434","%u0435","%u0436","%u0437","%u0438","%u0439","%u043A","%u043B","%u043C","%u043D","%u043E","%u043F","%u0440","%u0441","%u0442","%u0443","%u0444","%u0445","%u0446","%u0447","%u0448","%u0449","%u044A","%u044B","%u044C","%u044D","%u044E","%u044F","%u0451","%u0410","%u0411","%u0412","%u0413","%u0414","%u0415","%u0416","%u0417","%u0418","%u0419","%u041A","%u041B","%u041C","%u041D","%u041E","%u041F","%u0420","%u0421","%u0422","%u0423","%u0424","%u0425","%u0426","%u0427","%u0428","%u0429","%u042A","%u042B","%u042C","%u042D","%u042E","%u042F","%u0401");

    $out=array("а","б","в","г","д","е","ж","з","и","й","к","л","м","н","о","п","р","с","т","у","ф","х","ц","ч","ш","щ","ъ","ы","ь","э","ю","я","ё","А","Б","В","Г","Д","Е","Ж","З","И","Й","К","Л","М","Н","О","П","Р","С","Т","У","Ф","Х","Ц","Ч","Ш","Щ","Ъ","Ы","Ь","Э","Ю","Я","Ё"); 

    $s=str_replace($in,$out,$s);  
    return $s;  
}
?>

<link href="/templates/dengimo/css/lk.css" rel="stylesheet" media="screen">
     <div class="container new_style text-center">
        <div class="row">
            <h1><?=utf_win2($_COOKIE['i']).' '.utf_win2($_COOKIE['o']).',';?></h1>
            <p>прямо сейчас вам доступен займ 10 000 рублей</p>
            <img src="/templates/dengimo/img/lk/pic.png" />
                <form action="https://demomoney.yandex.ru/eshop.xml" method="POST" style="padding: 40px;"> 
                    <input name="shopId" value="133822" type="hidden">
                    <input name="scid" value="552335" type="hidden">
                    <input name="shopSuccessURL" value="https://dengimo.ru/ki/pay/<?=$_COOKIE['id']?>" type="hidden"> 
                    <input name="shopFailUrl" value="https://dengimo.ru/ki/pay/error" type="hidden"> 
                    <input name="customerNumber" value="<?=$_COOKIE['id']?>" type="hidden">
                    <input name="sum" value="10.00" type="hidden">
                    <input type="button" class="btn btn-default" id="close" value="Позже">
                    <input type="submit" class="btn btn-primary" id="paysubmit" value="Получить займ">
                </form>
                <div class="text-ki text-left">
                    <p style="color: green;">Внимание!</p>
                    <p>Стоимость услуги 299 рублей (199 руб. если вы нас порекомендовали) Передача полученных конфеденциальных данных держателя карты (реквизиты, регистрационные данные, и т.д.) осуществляется по закрытым сетям данных, сертифицированным международными стандартами банковской безопасности PCI DSS 1 уровня.</p>
                    <p>Безопасность платежей осуществляется с помощью банка экваера функционирующего на основе современных протоколов и технологий, разработанных международными платежными системами VISA International и Mastercard International (3D Secure USAF) Безопасность передаваемой информации обеспечивается с помощью современных протоколов безопасности в Интернет (SSL/TLS)</p>  
                </div>                 
            
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <ul class="foot_card list-inline row">
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                </ul>
            </div>
        </div>         
     </div>    

<script>
var offers = <?php echo json_encode($data); ?>;
var by_reg = null;
$(document).ready(function(){
	function amountfn() {
		var val = $('#amount').val();
		$('.results tr').each(function(indx, element){
			if ($(element).data('amount') < val) $(element).hide();
			else $(element).show();
		});
		amount = val;               
	}
	$('#amount').change(function(){amountfn();}).change();
	$('#amount').keyup(function(){amountfn();});
	$('#region').change(function(){
		$.getJSON('/offers/by_region/' + $(this).val())
		.done(function(data){
			if (data.length) {
				by_reg = data;
				update_offers();
				/*$('.results tr').hide();
				data.forEach(function(index, offer){
					$('.results tr[data-id="' + offer.id + '"]').show();
				});*/
			}
			else
			{
				by_reg = null;
				$('.results tr').show();
			}
		})
		.fail(function(){$('.results tr').show();})
		.always(function(){/*Loading(0);*/});
	});
	
	$('.offer-type').change(function(){
		update_offers();
	});
	
	function update_offers() {
		var str = '.results tbody tr';
		//var curr = clone(by_reg.length? by_reg : offers);
		var ot_card = $('.offer-type[data-id="card"]').prop('checked');
		var ot_qiwi = $('.offer-type[data-id="qiwi"]').prop('checked');
		var ot_yandex = $('.offer-type[data-id="yandex"]').prop('checked');
		var ot_contact = $('.offer-type[data-id="contact"]').prop('checked');
		// Прячем всё
		$(str).hide();
		// Пробегаемся по списку офферов
		((by_reg !== null)? by_reg : offers).forEach(function(offer, i){
			var $tr = $(str + '[data-id="' + offer.id + '"]');
			if ($tr.data('amount') >= amount){
				if (ot_card && !!$tr.data('card') == ot_card) $tr.show();
				else if (ot_qiwi && !!$tr.data('qiwi') == ot_qiwi) $tr.show();
				else if (ot_yandex && !!$tr.data('yandex') == ot_yandex) $tr.show();
				else if (ot_contact && !!$tr.data('contact') == ot_contact) $tr.show();
			}
		});
	}
    if (getcookie('amount')){
        var amount = getcookie('amount');
        $('#amount_lk').text( amount+' рублей' );
    }    
});

function clone(o) {
	if(!o || 'object' !== typeof o) return o;
	
	var c = 'function' === typeof o.pop ? [] : {};
	var p, v;
	for(p in o) {
		if(o.hasOwnProperty(p)) {
			v = o[p];
			if(v && 'object' === typeof v) {
				c[p] = clone(v);
			}
			else {
				c[p] = v;
			}
		}
	}
	return c;
}

</script>
<?php
    //print_r($_COOKIE);
?>
<?php require 'footer.php'; ?>