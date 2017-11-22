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
$pixel = $this->pixel->stat('edenga.ru');
?>
<link rel="stylesheet" href="/modules/owl/owl.carousel.css">
<link rel="stylesheet" href="/modules/owl/owl.theme.css">

<section class="lk-bg" id="lk-bg">
    <div class="container">        
        <div class="row hidden-sm hidden-xs">           
            <div class="item visible-md hidden-lg">
                <div class="review">            
                    <div class="col-md-4 review-div" style="padding: 75px 0 135px;">
                        <div class="col-md-8">
                            <p style="font-size: 16px;">Вам автоматически одобрен займ в следующих организациях:</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/templates/edenga/img/lk/1.png" align="right" style="max-width: 100px;"/>
                        </div>  
                    </div>
                    <div class="col-md-4 review-div" style="padding: 75px 0 135px;">
                        <div class="col-md-8">
                            <p style="font-size: 16px;">Выдаем займы с любой кредитной историей</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/templates/edenga/img/lk/2.png" align="right" style="max-width: 100px;"/>
                        </div>  
                    </div>
                    <div class="col-md-4 review-div" style="padding: 75px 0 135px;">
                        <div class="col-md-8">
                            <p style="font-size: 16px;">Моментальное одобрение</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/templates/edenga/img/lk/3.png" align="right" style="max-width: 100px;"/>
                        </div>   
                    </div> 
                </div> 
            </div>    
        </div>        
        <div class="row pixel">
            <div class="col-sm-12 text-center ">
                <h3><span class="i"></span>, Вам автоматически одобрен займ в следующих организациях:</h3>
                <div class="col-md-12 hidden-sm hidden-xs">
                    <?php
                        foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);                            
                            echo '
                                <div class="col-md-6 review-mddiv tab">
                                    <div>
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" class="offers-img"></a>
                                    </div>
                                    <div>
                                        <p><span class="hidden-md">До</span> '.$item['period'].' дней по ставке '.$item['percent'].'%</p>
                                    </div>
                                    <hr/>
                                    <div>
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn btn-success btn-lk" target="_blank">Получить деньги</a>
                                    </div>                                    
                                </div>
                            ';
                        }
                    ?>
                </div>            

                <div class="results-small visible-xs visible-sm">
                    <?php
                        foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);                            
                            echo '
                                <hr>
                                    <div class="row">
                                        <div class="col-sm-4 text-center tab">
                                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" class="offers-img"></a>
                                        </div>
                                        <div class="col-sm-4 text-center"><p>Вероятность одобрения: '.$prob = ( ($item['prob']-floor($item['prob'])) == 0 ? floor($item['prob']) : $item['prob']).'%</p></div>
                                        <div class="col-sm-4 text-center">
                                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn btn-primary" style="width: 90%"target="_blank">Получить деньги</a>
                                        </div>
                                </div>
                            ';
                            }
                    ?>
                </div>
            </div>		            
        </div>
    </div>    
</section>
<div class="hidden-lg hidden-md hidden-sm hidden-xs" style="height: 200px;"></div>
<script>
var offers = <?php echo json_encode($data); ?>;
var by_reg = null;
$(document).ready(function(){
	$('.offer-type').change(function(){
		update_offers();
	});
    if (getcookie('i')){
        var i = getcookie('i');
        $('.i').text(i);
    }	
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
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 843631316;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "30FmCJfh2XMQ1JWjkgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/843631316/?label=30FmCJfh2XMQ1JWjkgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for  
&#1056;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1072;&#1094;&#1080;&#1080;  
Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 845982081;
var google_conversion_label = "qy42CPmIk3YQgdOykwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/845982081/?label=qy42CPmIk3YQgdOykwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>