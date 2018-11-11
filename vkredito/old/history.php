<?php 

require 'header.php'; ?>

<style>
body{background:#e2e7e9;}
</style>

<section class="page">
<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1>Займы с плохой кредитной историей — теперь доступно</h1>
		</div>
	</div>
</div>
</section>

<section class="page-history">
<div class="container a4">
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="/templates/dengimo/img/history/steps.png">
		</div>
	</div>
	
	<div class="clearfix">&nbsp;</div>
	
	<div class="row">
		<div class="col-xs-12"> 
			<div class="clearfix">&nbsp;</div>
			
			<p>Сегодня можно воспользоваться получением небольшого микрозайма — микрофинансовая организация может предоставить заемщику в сложной ситуации сумму, достаточную для погашения очередной выплаты по кредиту. Но как исправить плохую кредитную историю, если данные о просрочке платежа уже переданы в бюро кредитных историй?</p>
			
			<p>Какой бы сложной ни казалась ситуация, есть надежный способ получить кредит с плохой кредитной историей. В соответствии с Федеральным Законом РФ 218-ФЗ «О кредитных историях» в бюро кредитных историй хранится информация не только о том, как заемщик пользовался банковскими кредитами, но и о том, каков его опыт обращения в микрофинансовые организации. Так, оформляя микрокредит, а точнее, микрозайм, с плохой кредитной историей неоднократно, и добросовестно выполняя свои обязательства по нему, через некоторое время есть большая вероятность получить кредит в банке, даже если когда-то основной причиной отказа являлась плохая кредитная история.</p>
			
			<p>Оформлять займы с плохой кредитной историей может гражданин РФ, в возрасте от 21 года, если он соответствует критериям микрофинансовой организации, предоставляющей населению небольшие суммы денег на короткий срок. Дело в том, что МФО, ввиду специфики предоставляемого продукта, не предъявляют завышенных требований к своим клиентам. Именно этот факт дает возможность оформлять микрозаймы с плохой кредитной историей.</p>
			
			<p>После неоднократного обращения в МФО за займами с плохой кредитной историей, своевременного их погашения, можно будет вновь обращаться в банк за получением ипотечных, автокредитов или кредитов, объем которых существенно превышает сумму заемных средств, предоставляемых микрофинансовой компанией.</p>
		</div>
	</div>
</div>
</section>
<div class="clearfix">&nbsp;</div>

<div class="clearfix">&nbsp;</div>
<section>
<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<form class="form-horizontal" id="anketa" action="/form" method="post">
				<input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
				<?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
				<div class="form-group">
					<div class="col-sm-2 col-sm-offset-1 form-label-1">Сумма займа</div>
					<div class="col-sm-4"><div class="form-slider green"><input type="text" class="amount" name="amount" value="30000" /></div></div>
					<div class="col-sm-2 form-label-3"><span class="current_amount">15 000</span> Р</div>
					<div class="col-sm-2"><button type="submit" class="btn pull-right">Получить деньги</button></div>
				</div>
			</form>
		</div>
	</div>
</div>
</section>
<div class="clearfix">&nbsp;</div>

<?php require 'footer.php'; ?>