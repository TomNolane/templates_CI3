<div class="hide-md hidden-md hidden-sm hidden-xs">
	<div id="hey" style="display:none">
		<button class="cancel close"><i class="fa fa-times"></i></button><p>Статистика сайта</p>
		<img src="/templates/dengimo/img/bzzz/chart.png" class="pull-left">
		<div class="pull-left">
			<p>Человек на сайте: <span id="people" class="pull-right">57</span></p>
			<p>Одобрено заявок: <span id="oks" class="pull-right">29</span></p>
		</div>
		<div class="clearfix">&nbsp;</div>
		<div class="text-center">
			<a href="/form<?php if (!empty($_REQUEST['ad_id'])) echo '?ad_id='.$_REQUEST['ad_id']; ?>" class="btn">Тоже хочу денег</a>
		</div>
	</div>
	
	<!--div id="ready2go" style="display:none;">
		<span>Готовы получить деньги?</span>
		<button class="btn btn-success take-money">Да</button>
		<button class="btn btn-link cancel"><i class="fa fa-times"></i></button>
	</div-->
</div>

<script>
var showBzzz = true;

$(document).ready(function(){
	$('#people').text(Math.floor(Math.random( ) * (57 - 45 + 1)) + 45);
	$('#oks').text(Math.floor(Math.random( ) * (39 - 29 + 1)) + 29);
	
	function bzzz(el, show, hide) {
		setTimeout(function(){
			$(el).fadeOut('slow');
			setTimeout(function(){
				if (showBzzz) {
					$(el).fadeIn('slow');
					bzzz(el, show, hide);
				}
			},show);
		},hide);
	}
	
	if (showBzzz) {
		setTimeout(function(){
			$('#hey').fadeIn('slow');
			setTimeout(function(){
				$('#hey').fadeOut('slow');
				//bzzz('#hey', 40000, 5000);
			}, 7000);
		}, 5000);
	}
	
	//bzzz('#hey', 40000, 5000);
	//bzzz('#ready2go', 20000, 20000);
	
	$('.cancel').click(function(){$(this).parent().hide();});
});
</script>