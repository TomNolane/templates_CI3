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
$pixel = $this->pixel->stat('godzaim.ru');
?>

	<style>
		body {
			background-color: #e3e3e3;
			background: url('/templates/godzaim/img/lk/bg.png') center center no-repeat;
			background-size: cover;
		}

		h1 {
			color: #093b3f;
			font-size: 30px;
			margin: 30px 0 20px;
		}

		p {
			color: #050505;
			font-size: 22px;
		}

		span.green {
			color: #597b28;
			font-size: 24px;
			font-weight: bold;
		}

		.btn,
		.btn:hover,
		.btn:focus,
		.btn:active,
		.btn:visited,
		.btn.focus {
			background: #597b28;
			border-color: #597b28;
			border-radius: 5px;
		}

		.page {
			background: rgba(227, 227, 227, 0.8);
		}

		#lk .border {
			border: 2px solid #597b28;
		}

		#lk .rounded {
			border-radius: 6px;
		}

		#lk .shadow {
			box-shadow: 2px 5px 2px rgba(0, 0, 0, 0.5);
		}

		.offer-item {
			margin: 10px auto;
			max-width: 450px;
			padding: 15px 30px;
			text-align: center;
		}

		.offer-image {
			background: #fff;
			height: 45px;
			margin: 0 auto -30px;
			position: relative;
			text-align: center;
			width: 175px;
			z-index: 1;
		}

		.offer-image img {
			width: 100%;
			height: 100%;
			max-width: 175px;
			max-height: 75px;
		}

		.offer-panel {
			background: #e8e8e8;
			padding: 50px 30px 40px;
		}

		.offer-data {
			border: 4px solid #597b28;
			color: #2b2b2b;
			padding: 0 20px;
		}

		.offer-amount {
			font-size: 24px;
			font-weight: bold;
		}

		.offer-percent {
			font-size: 20px;
			font-weight: 400;
			line-height: 32px;
		}

		.offer-item a {
			margin-top: -24px;
		}

		.hidden-lk {
			display: none;
		}
	</style>
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
        foreach($data as $item)
		{
            echo '
			<div class="col-sm-6">
				<div class="offer-item">
					<div class="offer-image border rounded">
						<a href="https://pxl.leads.su/click/'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
							<img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" class="offers-img">
						</a>
					</div>
					<div class="offer-panel border shadow">
						<div class="offer-data border rounded">
							<div class="pull-left offer-amount">'.number_format($item['amount'],0,'',' ').' Р</div>
							<div class="pull-right offer-percent">'.$item['percent'].'% / '.$item['period'].' дней</div>
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