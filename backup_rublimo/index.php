<?php require 'header.php'; ?>
<form id="anketa" action="/form" method="post">
<section class="calc" id="calc">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-sm-offset-1 hidden-sm hidden-xs text-center">
				<h1 class="ind_head">
					<span>Моментальные займы онлайн</span>
				</h1>
			</div>
			<div class="col-sm-5 col-sm-offset-2 hidden-xs hidden-sm">
				<div class="form text-center">
					<h3>
						<b class="text-uppercase">Выберите сумму и срок</b>
					</h3>
					
					<input type="hidden" id="amount" name="amount" value="20000" />
					<input type="hidden" id="period" name="period" value="21" />
					<input type="hidden" id="form_slrd" name="form_slrd" value="15" />
					<input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
					<?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
						<div class="form-slider green"> 
							<div class="clearfix"></div>
							<input type="text" class="amount" name="amount" value="30000" />
							<div class="form-label-3 pull-left">1 000</div>
							<div class="form-label-3 pull-right">100 000</div>
							<div class="clearfix"></div>
						</div>
						<div class="info">
							<div class="btn form-info">
								<span class="form-info-title">Сумма займа</span>
								<span class="form-info-data a">6000Р</span>
							</div>
							<div class="btn form-info">
								<span class="form-info-title">К возврату</span>
								<span class="form-info-data sum">6780Р</span>
							</div>
							<div class="btn form-info">
								<span class="form-info-title">Срок</span>
								<span class="form-info-data d">От 61 до 130 дней</span>
							</div>
							<div class="btn form-info">
								<span class="form-info-title">Процентная
									<br/>ставка</span>
								<span class="form-info-data perc">1.3
									<span>%</span>
								</span>
							</div>
						</div>
						<button type="submit" class="btn form-button">Оформить</button>
				</div>
				<img src="/templates/rublimo/img/bank2.png" alt="rublimo.ru" id="bank">
			</div>
			<div class="col-xs-12 visible-xs visible-sm text-center">
				<div itemscope itemtype="http://schema.org/Offer">
					<h2 itemprop="name" id="getmoney">Моментальные
						<br>займы онлайн</h2>
				</div>
				<div class="form text-center"> 
						<input type="hidden" class="period" name="period" value="10" />
						<input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
						<?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>

						<div class="form-slider green">
							<div class="clearfix"></div>
							<input type="text" class="amount amount2" name="amount" value="15000" />
							<div class="form-label-3 pull-left">1 000</div>
							<div class="form-label-3 pull-right">100 000</div>
							<div class="clearfix"></div>
						</div>
						<div class="info">
							<div class="btn form-info">
								<span class="form-info-title">Сумма займа</span>
								<span class="form-info-data a">15000Р</span>
							</div>
							<div class="btn form-info">
								<span class="form-info-title">К возврату</span>
								<span class="form-info-data sum">15195Р</span>
							</div>
							<div class="btn form-info">
								<span class="form-info-title">Срок</span>
								<span class="form-info-data d">От 15 до 30 дней</span>
							</div>
							<div class="btn form-info">
								<span class="form-info-title">Процентная
									<br/>ставка</span>
								<span class="form-info-data perc">1.3
									<span>%</span>
								</span>
							</div>
						</div>
						<div class="shadow">
							<button type="submit" class="btn ind_spec2">Оформить займ</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>
</form>
<div class="doc">
	<section class="howto hidden-xs">
		<div class="howto-header text-center">
			<h3 class="howto-header">Как получить деньги?</h3>
		</div>
		<div class="howto-body">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<a href="#calc">
							<img src="/templates/rublimo/img/howto.png" alt="rublimo.ru">
						</a>
						<div class="shadow">
							<a href="/form" class="btn btn-get">Получить деньги</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="howto-xs visible-xs">
		<div class="howto-1">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="middle-cover">
							<div class="middle">
								<span>1. Заполните анкету</span>
								<img src="/templates/rublimo/img/howto/1.png" alt="Заполните анкету" class="pull-right">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="howto-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="middle-cover">
							<div class="middle">
								<div class="pull-left">2. Выберите сумму
									<br>и срок займа</div>
								<img src="/templates/rublimo/img/howto/2.png" alt="Выберите сумму" class="pull-right">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="howto-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="middle-cover">
							<div class="middle">
								<span>3. Получите деньги</span>
								<img src="/templates/rublimo/img/howto/3.png" alt="Получите деньги" class="pull-right">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="howto-4">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="middle-cover">
							<div class="middle">
								<div class="shadow">
									<a onclick="GetMoney();" class="btn btn-get">Оформить займ</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="rating hidden-md hidden-sm hidden-xs">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-7">
					<div itemscope itemtype="http://schema.org/Offer">
						<h3 itemprop="name" class="font26">
							<b>Улучшение кредитной истории</b>
						</h3>
						<br>
						<p>Сервис Rublimo дает возможность получить займ онлайн даже если имеются значительные просрочки платежей.</p>
						<p>Программа состоит из трех шагов с последовательным увеличением суммы займа.</p>
						<p>После выполнения программы, клиенту доступно получение займа на стандартных выгодных условиях нашего сервиса.</p>
						<div class="shadow">
							<a itemprop="url" href="/history" class="btn">Узнать подробнее</a>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<img src="/templates/rublimo/img/man.png" alt="man">
				</div>
			</div>
		</div>
	</section>
	<section class="reviews hidden-md hidden-sm hidden-xs">
		<div class="pattern">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h3 class="font26">
							<b>Отзывы клиентов</b>
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<?php
							$reviews = array(
								array('img' => '/templates/common/img/reviews/1.jpg', 'name' => 'Елизавета Дарова',   'text' => 'Rublimo конечно красавцы, обратилась в трудной ситуации, когда не хватало денег на ремонт машины. Начальник задержал зп, но ребята выручили за что им спасибо.'),
								array('img' => '/templates/common/img/reviews/2.jpg', 'name' => 'Михаил Терентьев',   'text' => 'Спасибо огромное компании Рублимо! Действительно сильно выручили! Главное - не надо бегать по друзьям, одалживая деньги! Буду с вами сотрудничать!'),
								array('img' => '/templates/common/img/reviews/3.jpg', 'name' => 'Карпов Иван',        'text' => 'Я очень хочу, чтобы вы успешно пережили кризис, побольше вам добросовестных плательщиков и успешных сделок!!! Вы очень удобный сервис!!!'),
								array('img' => '/templates/common/img/reviews/4.jpg', 'name' => 'Журавлева Алевтина', 'text' => 'Хочу поблагодарить Rublimo за доверие и своевременно оказанную материальную помощь! Очень удобный и оперативный сервис! Будем дружить! ))')
							);
						?>
							<section id="dg-container" class="dg-container">
								<div class="dg-wrapper">
									<?php
						foreach($reviews as $i => $item)
						{
							echo '
							<div class="item" data-id="'.$i.'">
								<img src="'.$item['img'].'" alt="avatar">
								<div><p>'.$item['text'].'</p><h3>'.$item['name'].'</h3></div>
							</div>';
						}
						?>
								</div>
								<nav>
									<span class="dg-prev glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="dg-next glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</nav>

								<ol class="dg-indicators carousel-indicators">
									<?php
									for($i=0;$i<count($reviews);$i++)
									{
										echo '<li data-slide-to="'.$i.'"'.($i? '' : ' class="active"').'></li>';
									}
									?>
								</ol>
							</section>
							<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="shadow">
							<a href="/form" class="btn btn-get">Получить деньги</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="hidden-xs">
		<div class="great-support-container section-container section-container-gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 great-support-box wow fadeInLeft">
						<div class="great-support-box-text great-support-box-text-left">
							<h3 class="font26">
								<b>Быстрые кредиты в режиме онлайн</b>
							</h3>
							<p class="medium-paragraph">В жизни каждого человека бывают ситуации, когда срочно нужны деньги: поломка бытовой техники, автомобиля, внезапная
								болезнь и т. д. Займы онлайн — услуга от компании RUBLIMO. Наш сервис поможет вам выбрать наиболее выгодные предложения
								по кредитования от тридцати пяти микрофинансовых организаций.</p>
							<p class="medium-paragraph">Услуги RUBLIMO помогут вам оперативно оформить микрозайм онлайн без лишней бумажной волокиты. С помощью нашего сервиса
								можно быстро решить спонтанно возникшие денежные трудности на самых выгодных условиях.</p>
						</div>
					</div>
				</div>
			</div>
		</div> 
		<div class="more-services-container section-container">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
						<h3 class="font26">
							<b>Что нужно для получения микрокредита?</b>
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 great-support-box wow fadeInLeft">
						<div class="great-support-box-text great-support-box-text-left">
							<p class="medium-paragraph">
								Получения займа онлайн — простая и удобная процедура. Для решения задачи вам понадобиться:
							</p>
							<ul>
								<li>доступ к интернету;</li>
								<li>телефон, на который будет отправлен проверочный SMS-код;</li>
								<li>скан-копия паспорта гражданина РФ;</li>
								<li>кошелек одной из систем интернет-платежей или банковская карта.</li>
							</ul>
							<p class="medium-paragraph">
								Процесс оформления микрозайма занимает около пятнадцати минут. После обработки вашей заявки, и получения положительного решения
								вы получите проверочный код по СМС. После этого деньги будут перечислены по указанному адресату (карта, банковский
								счет и т. д.)
							</p>
						</div>
					</div>
				</div>
			</div>
		</div> 
		<div class="call-to-action-container section-container section-container-image-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
						<h3 class="font26">
							<b>Сотрудничество с нами имеет ряд преимуществ:</b>
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 great-support-box wow fadeInLeft">
						<div class="great-support-box-text great-support-box-text-left">
							<ol>
								<li>Мы предлагаем прозрачные условия микрокредитования от 35 официальных финансовых организаций.</li>
								<li>Процедура оформления займа проходит на 100% в режиме онлайн. Вы сможете получить деньги в любое время и в любом месте.</li>
								<li>Оформление займа проходит без залога.</li>
								<li>Для получения микрокредита не нужны справки о доходах и поручители.</li>
								<li>В пакет документов входит только скан паспорта РФ.</li>
								<li>Удобный личный кабинет.</li>
								<li>Срочный займ онлайн оформляется в считанные минуты.</li>
							</ol>
							<p class="medium-paragraph">
								Использование сервиса RUBLIMO дает возможность выбрать наиболее удобный вариант кредитования. Вы получаете всю актуальную
								информацию о существующих кредитных предложениях от самых лучших микрокредитных организаций.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-container hidden-xs section-container section-container-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
					<h3 class="font26">
						<b>RUBLIMO: безопасно и быстро</b>
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 great-support-box wow fadeInLeft">
					<div class="great-support-box-text great-support-box-text-left">
						<p class="medium-paragraph">Сервис обеспечивает максимальную защиту ваших персональных данных. Система соответствует мировым стандартам. Поэтому
							вероятность утечки данных исключена. Применяемая технология позволяет сделать обработку информации быстрой и оперативной.
							Ваши заявки на оформление микрозайма происходят в режиме реального времени. Система постоянно совершенствуется и улучшается.</p>
						<p class="medium-paragraph">На нашем сайте регулярно публикуются аналитические и познавательные статьи на тему займов онлайн. Портал RUBLIMO позволит
							вам первым узнавать актуальные новости из мира микрокредитования. Все это делает использования нашего ресурса выгодным
							и удобным. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-container hidden-xs section-container section-container-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
					<h3 class="font26">
						<b>Кредит в течение 15 минут</b>
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 great-support-box wow fadeInLeft">
					<div class="great-support-box-text great-support-box-text-left">
						<p class="medium-paragraph">Сервис RUBLIMO актуален для пользователей, которые срочно нуждаются в финансовой поддержке. Мы поможем вам оформить
							микрокредит быстро и выгодно. Вам не придется отдельно мониторить каждую микрокредитную организацию в поисках лучших
							условий сотрудничества. RUBLIMO позволит вам сделать правильный выбор в максимально сжатые сроки.</p>
						<p class="medium-paragraph">Пользоваться нашими услугами можно на отдыхе, станции технического обслуживания автомобилей, в магазине и других местах.
							Зайдя на наш портал с любого мобильного устройства, вы сможете получить необходимую вам сумму в течении всего лишь
							15 минут.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog-container hidden-xs section-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 blog section-description wow fadeIn text-center">
					<h3 class="font26">
						<b>Информация о кредиторах с которыми мы сотрудничаем:</b>
					</h3>
					<div class="divider-1 wow fadeInUp">
						<span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 blog-box wow fadeInLeft">
					<div class="row"> 
							<div class="col-sm-9">
								<h3>ООО МФО «СМСФИНАНС»</h3>
								<p>№ лицензии 2120177002022 </p>
								<p>Адрес: 115201, г. Москва,</p>
								<p>ул. Котляковская, д.3, стр. 13</p>
								<p>Годовая процентная ставка: 328,5%</p>
							</div> 
					</div>
				</div>
				<div class="col-sm-4 blog-box wow fadeInLeft">
					<div class="row"> 
							<div class="col-sm-9">
								<h3>ЗАО «4финанс»</h3>
								<p>№ лицензии 1127746537764 </p>
								<p>Адрес: 115201, г.Москва, </p>
								<p>ул. Котляковская, д.3, стр. 13</p>
								<p>Годовая процентная ставка: 328,5%</p>
							</div> 
					</div>
				</div>
				<div class="col-sm-4 blog-box wow fadeInLeft">
					<div class="row"> 
							<div class="col-sm-9">
								<h3>ООО «СрочноДеньги»</h3>
								<p>№ лицензии 2110552000304 </p>
								<p>Адрес: Нижний Новгород,</p>
								<p>ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж</p>
								<p>Годовая процентная ставка: 360%</p>
							</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 blog-box wow fadeInLeft">
					<div class="row"> 
							<div class="col-sm-9">
								<h3>ООО «Домашние деньги»</h3>
								<p>№ лицензии 211017700000 </p>
								<p>Адрес: 115088, г. Москва,</p>
								<p>2-ой Южнопортовый проезд, д. 33, стр. 1</p>
								<p>Годовая процентная ставка: 248,2%</p>
							</div> 
					</div>
				</div>
				<div class="col-sm-4 blog-box wow fadeInLeft">
					<div class="row"> 
							<div class="col-sm-9">
								<h3>ООО «Займер»</h3>
								<p>№ лицензии 651303532004088 </p>
								<p>Адрес: Нижний Новгород,</p>
								<p>Адрес:г. Кемерово, пр. Советский, д. 2/7</p>
								<p>Годовая процентная ставка: 248,2%</p>
							</div> 
					</div>
				</div>
				<div class="col-sm-4 blog-box wow fadeInLeft">
					<div class="row"> 
							<div class="col-sm-9">
								<h3>ООО «Парса Компани Групп»</h3>
								<p>№ лицензии 1097746179585 </p>
								<p>Адрес: 115201, г. Москва,</p>
								<p>Старокаширское ш., д. 2, корп. 2</p>
								<p>Годовая процентная ставка: 360%</p>
							</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link href="/modules/3dgallery/css/style.css" rel="stylesheet" media="screen">
<?php require 'footer.php'; ?>