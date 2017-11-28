<?php require 'header.php'; ?>
	<section id="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2  title-row">
					<h1 class="title title-header">Займы онлайн</h1>
					<div class="form">
						<h2>Выберите сумму и срок займа</h2>
						<form id="anketa" action="/form/" method="post">
							<span class="form-sum-label">Сумма</span>
							<span class="form-sum-value"></span>
							<!-- <input type="text" id="amount" class="amount" name="amount" value="" /> -->
							<input type="hidden" id="amount" class="amount" name="amount" value="20000" />
							<input type="hidden" id="period" name="period" value="21" />
							<input type="hidden" id="form_slrd" name="form_slrd" value="15" /> 
							<input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>"> 
							<?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?> 
							<input type="hidden" id="from_" name="from_" value="" />
							<div class="calc-period"> 
								<div class="calc-period-item index_spec7" id="period-0">61<br>день</div>
								<div class="calc-period-item" id="period-1">61<br>день</div>
								<div class="calc-period-item" id="period-2">130<br>дней</div>
								<div class="calc-period-item" id="period-3">365<br>дней</div> 
								<div class="calc-period-item index_spec7" id="period-8">365<br>дней</div> 
								<div class="clearfix"></div>
							</div>
							<div class="text-center"><button type="submit" class="btn btn-primary btn-lg button-get">Получить деньги</button></div>
						</form>
						<hr>
						<div class="form-data-bottom">
							<div class="form-data-bottom-percent percent_rate pull-left">97%</div>
							<div class="pull-right">
								Вероятность одобрения займа
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<section id="services" class="hidden-xs">
		<div>
			<div class="container container-services text-center">
				<h1>Как получить деньги?</h1>
				<div class="row-row">
				<div class="row">
					<div class=" kri1 col-lg-4  col-md-6 col-sm-6 col-xs-12">
						<div class="service-item services-third">
							<img class="imggg1" src="/templates/godzaim/img/img1.png" alt="img1.png">
						</div>
						<div class="service-text">
							<div class="service-num pull-left">1</div>
							<div class="service-descr pull-right">
							<p class="ser-p1">Выберите сумму займа</p>
							<p class="ser-p2">После выбора суммы вам<br>
необходимо заполнить простую<br>
анкету внеся корректные данные</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<img src="/templates/godzaim/img/index/arrow.png" class="service-arrow" alt="arrow.png">
					</div> 


						<div class=" kri2 col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="service-item services-third">
							<img class="imggg1" src="/templates/godzaim/img/img3.png" alt="img3.png">
						</div>
						<div class="service-text">
							<div class="service-num pull-left">2</div>
							<div class="service-descr pull-right">
						<p class="ser-p1">Ваша заявка принята</p>
						<p class="ser-p2">По вашим данным указанным<br>
в анкете мы подобрали<br>
организаций партнеров<br>
с автоматически<br>
одобренным займом.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<img  src="/templates/godzaim/img/index/arrow.png" class="service-arrow" alt="arrow.png">
					</div>

	
					<div class=" kri3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="service-item services-third">
							<img class="imggg1" src="/templates/godzaim/img/img4.png" alt="img4.png">
						</div>
						<div class="service-text">
							<div class="service-num pull-left">3</div>
							<div class="service-descr pull-right">
								<p class="ser-p1">Получите деньги</p>
								<p class="ser-p2">Получите перевод<br>
в течении 7 минут<br>
удобным для вас<br>
способом</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				</div>
				<button type="submit" onclick="GetMoney();" class="btn button1 btn-primary btn-lg button-get">Получить деньги</button>
			</div>
		</div>
	</section>

<div class="about-ser">
	<div class="ser">
		<h5 id="about-ser">О сервисе</h5>
		<p class="first-p">Godzaim — это один из лучших онлайн сервисов в РФ по подбору выгодных онлайн займов. Сервис помогает людям в круглосуточном режиме, семь дней в неделю.</p>
		<p class="first-p">Главным преимуществом использования сервиса Godzaim является время. Мы ценим ваше время и поэтому сервис максимально быстро подбирает вам условия и сроки займа.</p>
		<p class="first-p">Возможности сервиса Godzaim позволяют узнать Кредитную историю заемщика, а также ее улучшить если это необходимо.</p>
		<div class="uslov hidden-xs">
			<h6>Условия получения и коммисионные сборы:</h6>
			<div class="usl-top">
				<div class="usl1 usl1-mar">
				<h4>Процентная ставка за день</h4>
				<p>Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%</p>
			</div>
			<div class="usl1">
				<h4>Первый заём</h4>
				<p>Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения</p>
			</div>
			</div>
			<div class="usl-bot">
				<div class="usl1 usl2-mar">
				<h4>Сроки выдачи и погашения</h4>
				<p>Min срок выдачи микрозайма составляет 61 день, а max срок погашения займа 365 дней</p>
			</div>
			<div class="usl1">
				<h4>Процент за пользование займом</h4>
				<p>Годовой процент за пользование займом (с учетом требований ФЗ №353-ФЗ) – min 30%, max 360%</p>
			</div>
			</div>
			
		</div>
		<div class="primer hidden-xs">
			<h6>Пример расчета онлайн займа:</h6>
			<p>Если вы взяли займ на сумму 50 000 рублей на 6 месяцев с процентной ставкой 4,5% в месяц, то после истечения срока займа переплата составит 13500 рублей. Получается вы возвращаете 63 500 рублей.</p>
			<p>Ниже приведены расчеты начисляемых процентов для дальнейшего самостоятельного вычисления суммы возврата займа (с процентом) пользователям нашего сервиса.</p>
			<p>Сумма - 50 000 рублей, процент в месяц - 4,5%, срок займа - 6 месяца.</p>
			<p>4,5(%) * 6(мес) = 27% за 6 месяцев(27% * 50 000руб (сумма займа) )/100% = 13 500 рублей (сумма начисленных процентов) 50 000 + 13 500 = 63 500 рублей - это сумма необходимых денег к возврату через 6 месяцев.</p>
			<p>В случае нарушения сроков, размер неустойки составляет 0,10% от суммы просрочки в день, но не более 10% от суммы займа. В случае длительной задержки выплаты информация будет передана в БКИ.</p>
			<p>Продление займа возможно при своевременном информировании кредитора (до наступления даты возврата займа) и уплаты процентов за первичный срок займа. Дополнительных комиссий за продление займа не предусмотрено.</p>
		</div> 
	</div> 
	<div class="ser hidden-xs">
		<div class="what-be">
			<h6>Что будет при невыплате заёмных средств:</h6>
			<p>В случае невозвращения в условленный срок суммы займа или суммы процентов за пользование заёмными средствами кредитор вынуждено начислит штраф за просрочку платежа. Они предусмотрены на случай, к примеру, если банковский перевод занял больше времени, чем обычно.</p>
			<p>
Однако, в случае неполучения от Вас какой-либо реакции в течение продолжительного времени, будет начислен штраф за просрочку срока погашения размером в среднем 0,10% от первоначальной суммы для займов, 0,03% от суммы задолженности в среднем для потребительских кредитов и кредитных карт.</p>
<p>При несоблюдении Вами условий по погашению кредитов и займов, данные о Вас могут быть переданы в реестр должников или БКИ, что негативно может сказаться на Вашей кредитной истории и рейтинге кредитоспособности. Задолженность может быть передана коллекторскому агентству для взыскания долга. При допуске просрочки продление займа невозможно. Погашая задолженность в срок, Вы формируете хорошую кредитную историю, что повышает Ваш рейтинг кредитоспособности и шансы в дальнейшем получить кредит на более выгодных условиях.</p>
<p>Лицензии организаций-партнеров: №651303552003006, №651303045003951, №2110177000478</p>
		</div>
		<div class="info">
			<h6 id="info">Информация о кредиторах с которыми мы сотрудничаем:</h6>
			<div class="info-top">
				<div class="inf1 inf1-mar">
					<h5>ООО МФО «СМСФИНАНС»</h5>
					<p>№ лицензии 2120177002022<br>
Адрес: 115201, г. Москва,<br>
ул. Котляковская, д.3, стр. 13<br>
Годовая процентная ставка: 328,5%</p>
				</div>
				<div class="inf1 inf2-mar">
					<h5>ЗАО «4финанс»</h5>
					<p>№ лицензии 1127746537764<br>
Адрес: 115201, г.Москва,<br>
ул. Котляковская, д.3, стр. 13<br>
Годовая процентная ставка: 328,5%</p>
				</div>
				<div class="inf1">
					<h5>ООО «СрочноДеньги»</h5>
					<p>№ лицензии 2110552000304<br>
Адрес: Нижний Новгород,<br>
ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж<br>
Годовая процентная ставка: 360%</p>
				</div>
			</div>
			<div class="info-bot">
				<div class="inf1 inf3-mar">
					<h5>ООО «Домашние деньги»</h5>
					<p>№ лицензии 211017700000<br>
Адрес: 115088, г. Москва,<br>
2-ой Южнопортовый проезд, д. 33, стр. 1<br>
Годовая процентная ставка: 248,2%</p>
				</div>
				<div class="inf1 inf4-mar">
					<h5>ООО «Займер»</h5>
					<p>№ лицензии 651303532004088<br>
Адрес: Нижний Новгород,<br>
Адрес:г. Кемерово, пр. Советский, д. 2/7<br>
Годовая процентная ставка: 248,2%</p>
				</div>
				<div class="inf1">
					<h5>ООО «Парса Компани Групп»</h5>
					<p>№ лицензии 1097746179585<br>
Адрес: 115201, г. Москва,<br>
Старокаширское ш., д. 2, корп. 2<br>
Годовая процентная ставка: 360%</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require 'footer.php'; ?>