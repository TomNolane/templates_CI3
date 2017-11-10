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
?>

<link href="/templates/dengimo/css/lk.css" rel="stylesheet" media="screen">
     <div class="container new_style">
        <div class="row">
            
        <?php
            if(isset($_GET['doi'])){
                echo '
                        <h1><span id="i"></span>, Вам автоматически одобрен займ в следующих организациях:</h1>
                ';
            }
            else{
                echo'
                        <h1 class="title"><span id="i"></span>, Вам автоматически одобрен займ в следующих организациях:</h1>
                ';
            }
        ?>            
            
            <?php if(isset($data)){ ?>
                <?php foreach($data as $item){ ?>
                    <?php 
                        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                        $item['link'] = str_replace("#site", $domen, $item['link']);
			echo ' 
                        <div class="col-sm-6 col-md-6 tab">
                            <div class="tab_wrapper">
                                <div class="tab_1 text-center">
                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                        <img src="/templates/common/img/offers/'.$item['img']. '.png" alt="'. $item['title'].'">
                                    </a>
                                    <div class="percent hidden-sm hidden-xs">'.$item["prob"].'% </div>
                                </div>
                                <div class="take_money">
                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">Забрать деньги</a>
                                </div>
                            </div>
                        </div>';
                    ?>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="row hidden-sm hidden-xs">
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
    <!-- Modal -->
    <div class="modal fade" id="ki" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                            <div class="modal-header text-center">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h1 class="modal-title" id="feedbackModalLabel"></h1>
                                    <p>Узнайте свой кредитный рейтинг, чтобы подобрать персональное кредитное предложение</p>
                            </div>
                            <div class="modal-body text-center">
                                    <div class="row">
                                            <div class="col-md-12">
                                                <img src="/templates/dengimo/img/lk/ki.jpg">                                             
                                                    <div class="col-md-6 text-right">
                                                        <button class="btn btn-default btn-sm btn-ki" data-dismiss="modal">Позже</button>
                                                    </div>
                                                    <div class="col-md-6 text-left">
                                                        <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/button-widget?account=41001645246811&quickpay=small&any-card-payment-type=on&button-text=02&button-size=l&button-color=white&targets=%D0%9A%D1%80%D0%B5%D0%B4%D0%B8%D1%82%D0%BD%D0%B0%D1%8F+%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F&default-sum=299&successURL=https%3A%2F%2Fdengimo.ru%2Fki%2Fpay%2F<?=$_COOKIE['id']?>&label=<?=$_COOKIE['id']?>" width="300" height="72"></iframe>                                                    
                                                    </div>
                                                    <div class="text-ki text-left">
                                                        <p style="color: green;">Внимание!</p>
                                                        <p>Стоимость услуги 299 рублей (199 руб. если вы нас порекомендовали) Передача полученных конфеденциальных данных держателя карты (реквизиты, регистрационные данные, и т.д.) осуществляется по закрытым сетям данных, сертифицированным международными стандартами банковской безопасности PCI DSS 1 уровня.</p>
                                                        <p>Безопасность платежей осуществляется с помощью банка экваера функционирующего на основе современных протоколов и технологий, разработанных международными платежными системами VISA International и Mastercard International (3D Secure USAF) Безопасность передаваемой информации обеспечивается с помощью современных протоколов безопасности в Интернет (SSL/TLS)</p>  
                                                    </div>
                                                <img src="/templates/dengimo/img/zaim/1.png">   
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
    </div>
<?php
/*
if(isset($_COOKIE['id'])){
    echo "
        <script type='text/javascript'>
            $(window).load(function(){
                $('#ki').modal('show');
            });
        </script>      
    ";
}
*/
?>  
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
    if (getcookie('i')){
        var i = getcookie('i');
        $('#i').text(i);
    }    
    traffic('dengimo.ru', '4');
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
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103;(&#1041;&#1077;&#1079;  
&#1044;&#1054;&#1048;) Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 854183902;
var google_conversion_label = "J3xWCOHSrHgQ3p-nlwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/854183902/?label=J3xWCOHSrHgQ3p-nlwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
    //print_r($_COOKIE);
?>
<?php require 'footer.php'; ?>