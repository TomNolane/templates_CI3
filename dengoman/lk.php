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
$pixel = $this->pixel->stat('dengoman.ru');
?>
<link rel="stylesheet" href="/modules/owl/owl.carousel.css">
<link rel="stylesheet" href="/modules/owl/owl.theme.css">
<link href="/templates/dengoman/css/lk.css" rel="stylesheet" media="screen">
    
<div class="container lk">
	<h1>Вам автоматически одобрен займ в следующих организациях:</h1>
	<div class="row">
            <div class="col-md-12">
                <div class="text-center hidden-xs">
                        <?php
                            function plural_type($n) { 
                                return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
                            } 
                            
                            $_plural_years = array('год', 'года', 'лет');
                            $_plural_months = array('месяц', 'месяца', 'месяцев');
                            $_plural_days = array('день', 'дня', 'дней');
                            $_plural_times = array('раз', 'раза', 'раз');
                            
                            foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);                                
                                echo '<div class="col-sm-6 col-md-6 white tab"> 
                                        <div class="item text-center">
                                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                                <img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                                            </a>
                                            <div class="text-center">
                                                <div>Максимальная сумма: <b>'.$item["amount"].' рублей</b></div>
                                                <div>Максимальный срок: <b>'.$item["period"].' '.$_plural_days[plural_type($item['period'])].'</b></div>
                                                <div>Прооцентная ставка: <b>от '.$item["percent"].'%</b></div>
                                            </div>
                                            <br/>
                                            
                                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn" target="_blank">Получить деньги</a>                               
                                        </div>        
                                    </div>';
                            }
                        ?>
                </div>
                
		<div class="results-small visible-xs">
                    <?php
			foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);                            
                            echo '<hr>
				<div class="row" style="background: #ffffff4d;padding: 10px 0px;">
                                    <div class="col-sm-4 text-center tab">
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><img src="/templates/common/img/offers/'.$item['img'].'.png" class="'.$item['img'].'" alt="'.$item['title'].'"></a>
                                    </div>
                                    <div class="col-sm-4 text-center"><p>Вероятность одобрения: '.$prob = ( ($item['prob']-floor($item['prob'])) == 0 ? floor($item['prob']) : $item['prob']).'%</p></div>
                                    <div class="col-sm-4 text-center">
                                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn" target="_blank">Получить</a>
                                    </div>
                                </div>';
			}
                    ?>
		</div>
            </div>
    </div>
    <div class="row hidden-xs">
        <div class="q text-left hidden-xs">
            <div class="col-md-6 col-sm-6">       
                <img src="/templates/dengoman/img/lk/1.png">
                <h3>Первый заём</h3>
                <p>до 10 000 рублей выдается по ставке 0% в случае своевременного погашения</p>
            </div>                    
            <div class="col-md-6 col-sm-6">  
                <img src="/templates/dengoman/img/lk/3.png">
                <h3>Процентная ставка за день</h3>
                <p>Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%</p>
            </div>
            <div class="col-md-6 col-sm-6">                      
                <img src="/templates/dengoman/img/lk/2.png">
                <h3>На территории всей России</h3>
                <p>Займ можно оформить, находясь в любой точке России</p>
            </div>            
            <div class="col-md-6 col-sm-6">              
                <img src="/templates/dengoman/img/lk/4.png">
                <h3>Различные варианты получения займов</h3>
                <p>На карту VISA, MAESTRO, QIWI кошелёк, Яндекс.Деньги, через систему CONTACT, банковский счёт</p>
            </div>                
        </div>            
    </div>
     
<script src="/modules/owl/owl.carousel.js"></script>
<script>
var offers = <?php echo json_encode($data); ?>;
var by_reg = null;
$(document).ready(function(){
	$('.amount').ionRangeSlider({
		min: 1000,
		max: 100000,
		step: 1000,
		from: <?php echo empty($_POST['amount'])? 15000 : $_POST['amount']; ?>,
		prettify_enabled:true,
		postfix:' Р',
		onChange:function(range){
			amount = range.from;
			$('.results tr').each(function(indx, element){
				if ($(element).data('amount') < range.from) $(element).hide();
				else $(element).show();
			});
		}
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
    if (getcookie('i')){
        var i = getcookie('i');
        $('#i').text(i);
    }    
    traffic('dengoman.ru', '4');    
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
$('.owl').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        },
        1600:{
            items:3
        }        
    }
});
</script>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 841044814;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "NCuSCOvs6nMQzqaFkQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/841044814/?label=NCuSCOvs6nMQzqaFkQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080;  
(&#1041;&#1077;&#1079; &#1044;&#1054;&#1048;) Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 832750617;
var google_conversion_label = "luceCP6xmngQmYiLjQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/832750617/?label=luceCP6xmngQmYiLjQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>