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
$pixel = $this->pixel->stat('godzaim.ru');
?> 
	<section id="lk">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1>Вам автоматически одобрен займ
						<br>в следующих организациях:</h1>
					<p>Вероятность забрать
						<span id="amount_lk" class="green">30000 рублей</span> сейчас
						<span class="percent_top green"> 95%</span>
					</p>
				</div>
			</div>
			<div class="row">
				<?php
				function plural_type($n) { 
					return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
				} 
				
				$_plural_years = array('год', 'года', 'лет');
				$_plural_months = array('месяц', 'месяца', 'месяцев');
				$_plural_days = array('дня', 'дня', 'дней');
				$_plural_times = array('раз', 'раза', 'раз');
				
        foreach($data as $item){
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
            $item['link'] = str_replace("#site", $domen, $item['link']); 
            echo '
			<div class="col-sm-6">
				<div class="offer-item">
					<div class="offer-image border rounded">
						<a href="https://pxl.leads.su/click/'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
							<img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" class="offers-img3">
						</a>
					</div>
					<div class="offer-panel border shadow">
						<div class="offer-data border rounded">
						<div>
							<a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" class="offers-img"></a>
						</div>
						<div>
							<p><span class="hidden-md">До</span> '.$item['period'].' '.$_plural_days[plural_type($item['period'])].' по ставке '.$item['percent'].'%</p>
						</div>
						<div>
							<p>Максимальная сумма:<br>до '.number_format($item['amount'],0,'',' ').' рублей</p>
						</div> 
							<div class="clearfix"></div>
						</div>
					</div>
					<a href="https://pxl.leads.su/click/'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn btn-primary" target="_blank">Получить деньги</a>
				</div>
			</div>
            ';
        }
        ?>
			</div>
		</div>
	</section>
	<script>
		var offers = <?php echo json_encode($data); ?>;
		var by_reg = null;
		$(document).ready(function () {
			$('.offer-type').change(function () {
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
				((by_reg !== null) ? by_reg : offers).forEach(function (offer, i) {
					var $tr = $(str + '[data-id="' + offer.id + '"]');
					if ($tr.data('amount') >= amount) {
						if (ot_card && !!$tr.data('card') == ot_card) $tr.show();
						else if (ot_qiwi && !!$tr.data('qiwi') == ot_qiwi) $tr.show();
						else if (ot_yandex && !!$tr.data('yandex') == ot_yandex) $tr.show();
						else if (ot_contact && !!$tr.data('contact') == ot_contact) $tr.show();
					}
				});
			}
		});

		function clone(o) {
			if (!o || 'object' !== typeof o) return o;

			var c = 'function' === typeof o.pop ? [] : {};
			var p, v;
			for (p in o) {
				if (o.hasOwnProperty(p)) {
					v = o[p];
					if (v && 'object' === typeof v) {
						c[p] = clone(v);
					} else {
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
		var google_conversion_id = 830227331;
		var google_conversion_label = "M_bzCPqNnHcQg4fxiwM";
		var google_remarketing_only = false;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/830227331/?label=M_bzCPqNnHcQg4fxiwM&amp;guid=ON&amp;script=0"
			/>
		</div>
	</noscript>
	<?php require 'footer.php'; ?>
