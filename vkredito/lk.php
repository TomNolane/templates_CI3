<?php
$my_title = "Вам автоматически одобрен займ";
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
$pixel = $this->pixel->stat('vkredito.ru');
?>
<link href="/templates/vkredito/css/lk1.css" rel="stylesheet" media="screen">
<div class="container">
<section class="form">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
        <?php
            if(isset($_GET['doi'])){
                echo '<h1 class="title">Ваша подписка успешно активирована <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><br/> Вам автоматически одобрен займ в следующих организациях:</h1>';
            }
            else{
                echo'<h1 class="title">Вам автоматически одобрен займ в следующих организациях:</h1>';
            }
        ?>

            <?php
                foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);                    
                    echo '
                            <div class="col-md-6 col-sm-12 col-xs-12 offer-lk tab">
                                <a class="close-ribbon"><span class="ribbon-prob">'.$item['prob'].'%</span></a>
                                <div>
                                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                    <img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" class="offers-img">
                                </a>
                                </div>
                                <div>
                                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                <big>'.number_format($item['amount'],0,'',' ').' Р</big>
                                </a>    
                                </div>
                                <div>
                                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn btn-success btn-lk" target="_blank">Получить деньги</a>
                                </div>
                            </div>
                    ';
                }
            ?>
                <div class="col-md-12 lk-trigger hidden-sm hidden-xs">
                    <div class="col-md-3"><img src="/templates/vkredito/img/lk/1.png" /></div>  
                    <div class="col-md-3"><img src="/templates/vkredito/img/lk/2.png" /></div>
                    <div class="col-md-3"><img src="/templates/vkredito/img/lk/3.png" /></div>
                    <div class="col-md-3"><img src="/templates/vkredito/img/lk/4.png" /></div>
                </div>      
            </div>
        </div>
    </div>
</section>
</div>
<div class="container-fluid for_img">
    <div class="img_footer"></div>
</div>
<script>
var offers = <?php echo json_encode($data); ?>;
var by_reg = null;
$(document).ready(function(){
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
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 844462441;
var google_conversion_label = "NxPcCNq4sHUQ6fLVkgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/844462441/?label=NxPcCNq4sHUQ6fLVkgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>