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
$pixel = $this->pixel->stat('rublimo.ru');
?>

<link href="/templates/rublimo/css/lk.css" rel="stylesheet" media="screen">

<div class="container">
    <div class="row">		
        <div class="col-md-12 text-center">
            <h1>Вам автоматически одобрен займ в следующих организациях:</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
            <?php
                foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);                    
                    echo ' 
                        <div class="col-md-6 tab">
                            <div class="panel panel-default panel-blue">
                                <div class="panel-body">
                                    <table class="results table">
                                        <tbody>
                                        <!--
                                            <tr>
                                                <td class="text-left">Процентная ставка</td><td class="text-right">'.$item['percent'].'%</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Максимальная сумма</td><td class="text-right">'.number_format($item['amount'],0,'',' ').' рублей</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Максимальный срок</td><td class="text-right">'.$item['period'].' дней</td>
                                            </tr>
                                        -->    
                                            <tr class="text-center hidden-xs hidden-md">
                                                <td colspan="2">
                                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                                        <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                                                    </a>                                    
                                                </td>
                                            </tr>
                                            <tr class="text-center hidden-xs hidden-md">
                                                <td colspan="2">
                                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn btn-green" target="_blank">Получить деньги</a>
                                                </td>
                                            </tr>    
                                            <tr class="text-center visible-xs visible-md">
                                                <td colspan="2">
                                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                                        <img class="lk-img '.$item['title'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                                                    </a>                                    
                                                </td>
                                            </tr>    
                                            <tr class="text-center visible-xs visible-md">    
                                                <td colspan="2">
                                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn btn-green" target="_blank">Получить деньги</a>
                                                </td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    ';
                }
            ?> 
    </div>
</div>
<div class="container-fluid for_img hidden-xs">
    <div class="img_footer"></div>
</div>
<script>
var offers = <?php echo json_encode($data); ?>;
var by_reg = null;
$(document).ready(function(){
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
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080;  
(&#1073;&#1077;&#1079; &#1044;&#1086;&#1080;) Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 832752826;
var google_conversion_label = "rzldCPv3u3gQupmLjQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/832752826/?label=rzldCPv3u3gQupmLjQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 841045015;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "eJmwCJan2HMQl6iFkQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/841045015/?label=eJmwCJan2HMQl6iFkQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>