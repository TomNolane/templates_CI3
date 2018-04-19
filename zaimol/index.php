<?php require 'header.php'; ?>
<form id="anketa" action="/form" method="post">
	<input type="hidden" id="amount" name="amount" value="20000" />
	<input type="hidden" id="period" name="period" value="21" />
	<input type="hidden" id="form_slrd" name="form_slrd" value="15" />
	<input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
	<?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
	<section class="ex-section-1">
		<div class="container">
			<h1 class="text-center">Лучший выбор и самые низкие
				<br> процентные ставки в молле микрозаймов!</h1>
			<p class="ex-lg text-center">Подберите свой вариант в три шага!</p>
			<main class="ex-main-counter">
				<div class="ex-borrow-selector text-center">
					<div class="ex-slider-val"></div>
					<input type="text" id="rangeSlider" name="rangeSlider" value="0" />
					<a href="/form"><button class="ex-main-btn">Получить деньги</button></a>
				</div>
				<div class="ex-draft">
					<div class="ex-wrapper">
						<h3>Zaimol</h3>
						<i></i>
						<table>
							<tr>
								<td>Процентная ставка</td>
								<td class="ex-bet"></td>
							</tr>
							<tr>
								<td>Сумма</td>
								<td class="ex-current-val"></td>
							</tr>
							<tr>
								<td>Срок займа</td>
								<td class="ex-time"></td>
							</tr>
							<tr>
								<td>Комисссия</td>
								<td class="ex-Commission"></td>
							</tr>
						</table>
						<table>
							<tr>
								<td>К возврату</td>
								<td class="ex-total"></td>
							</tr>
						</table>
						<p class="text-center">Спасибо</p>
					</div>
				</div>
			</main>
		</div>
	</section>
	<section class="ex-section-2 hidden-xs hidden-sm">
		<div class="container">
			<ul class="ex-tabs">
				<li class="active">
					<a data-toggle="tab" href="#menu1" id="exReceiveMoney">Как получить деньги</a>
				</li>
				<li>
					<a data-toggle="tab" href="#menu2">Преимущества сервиса ZAIMOL</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="menu1" class="tab-pane active">
					<h2 class="text-center">Оформление запроса на займ займет всего три минуты!</h2>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<main>
								<div class="row">
									<div class="col-md-8">
										<div class="ex-wrapper ex-first">
											<div class="media">
												<div class="media-left">
													<i class="ex-calc"></i>
												</div>
												<div class="media-body">
													<p>Выберите необходимую сумму и срок
														<br> на онлайн калькуляторе</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="ex-wrapper ex-second">
											<div class="media">
												<div class="media-left">
													<i class="ex-info"></i>
												</div>
												<div class="media-body">
													<p>Внесите свои данные
														<br> в короткую анкету</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="ex-wrapper ex-third">
											<div class="media">
												<div class="media-left">
													<i class="ex-wallet"></i>
												</div>
												<div class="media-body">
													<p>Получите все доступные
														<br> предложения по займам</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ex-basket hidden-sm hidden-xs">
									<span class="ex-credit-card"></span>
									<span class="ex-blue-basket"></span>
								</div>
							</main>
						</div>
					</div>
					<a href="/form"><button class="ex-main-btn">Получить деньги</button></a>
				</div>
				<div id="menu2" class="tab-pane">
					<div class="row">
						<div class="col-md-9">
							<div class="media ex-pl">
								<div class="media-left">
									<div class="ex-wrapper">
										<i></i>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Широкий выбор</h4>
									<p>
										Из нашего молла невозможно уйти без
										<br> «покупки»: здесь обязательно найдется
										<br> интересное для вас предложение от МФО.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 pull-right">
							<div class="media">
								<div class="media-left">
									<div class="ex-wrapper">
										<i></i>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Микрокредиты «по карману»</h4>
									<p>
										Вы можете получить сумму от 10 000 до 100 000 рублей с самыми низкими % ставками.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<div class="media ex-pl">
								<div class="media-left">
									<div class="ex-wrapper">
										<i></i>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Хватит на всех и на всё</h4>
									<p>
										Вероятность одобрения займа – 95%.
										<br> Вашу заявку рассматривают одновременно
										<br> десятки лучших МФО России.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 pull-right">
							<div class="media">
								<div class="media-left">
									<div class="ex-wrapper">
										<i></i>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Работаем круглосуточно</h4>
									<p>
										Сервис полностью автоматизирован – вы можете отправить запрос в любое время суток, в выходные или праздники. Среднее время
										ответа на обращение – 7 минут.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<div class="media ex-pl">
								<div class="media-left">
									<div class="ex-wrapper">
										<i></i>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Деньги на дом</h4>
									<p>
										Вам не потребуется стоять в очереди в банк:
										<br> микрозайм перечисляется на карту, счет
										<br> или наличными через систему CONTACT.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 pull-right">
							<div class="media">
								<div class="media-left">
									<div class="ex-wrapper">
										<i></i>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Конфиденциальность</h4>
									<p>
										Для оформления заема онлайн не требуется справок и поручителей, а ваше обращение остается конфиденциальным.
									</p>
								</div>
							</div>
						</div>
					</div>
					<a href="/form"><button class="ex-main-btn">Получить деньги</button></a>
				</div>
			</div>
		</div>
	</section>
	<section class="ex-section-3 hidden-xs hidden-sm">
		<div class="container text-center">
			<h2>Отзывы клиентов</h2>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<figure>
								<div class="ex-wrapper">
									<div class="ex-white-border">
										<img class="index-ava" src="/templates/zaimol/assets/img/sergey.jpg" alt="missed">
									</div>
								</div>
								<figcaption>
									Делали ремонт в квартире. Вроде бы все с женой просчитали до копейки, но как водится, не хватило денег. И сумма подъемная
									– 20 000 – и взять ее негде, в банке кредит уже оформлен. А оставлять недоделанным жилье не хочется, когда все на
									финишной прямой. Взяли через ZAIMOL деньги на 45 дней. Смог вернуть через месяц. Лучше переплатить, но зато довести
									дело до конца. Я доволен.
								</figcaption>
								<h4>Сергей, г. Кемерово</h4>
							</figure>
						</div>
						<div class="item">
							<figure>
								<div class="ex-wrapper">
									<div class="ex-white-border">
										<img class="index-ava" src="/templates/zaimol/assets/img/lydmila.jpg" alt="missed">
									</div>
								</div>
								<figcaption>
								У меня официальная зарплата – 12 тыс. Подрабатываю, конечно, но кредит и рассрочку мне никто не даст при такой зарплате. Приходится копить, потом покупать нужную вещь. А тут, как назло, сломалась стиральная машина – вот уж без чего мы жить отвыкли. Сын – студент, ему тоже кредит не дали. Нашел ваш сервис. Взяли, правда, займ не сразу, все перечитывали документы. Но решились, и не пожалели. Деньги пришли через 20 минут, мы сразу за машинкой и поехали. Довольны!
								</figcaption>
								<h4>Людмила, г. Абакан</h4>
							</figure>
						</div>
						<div class="item">
							<figure>
								<div class="ex-wrapper">
									<div class="ex-white-border">
										<img class="index-ava" src="/templates/zaimol/assets/img/petr.jpg" alt="missed">
									</div>
								</div>
								<figcaption>
								Вот уж чем не пользовался – так это микрозаймами. Но взял, да еще и сразу 60 000 руб. Искал подержанный автомобиль, и увидел отличную машину, которую продают срочно, но на 100 000 дешевле аналогов. Не хватало 60, а решать нужно было в тот же день. Решил проверить, дадут ли займ, сразу при покупателе. Через 15 минут деньги были на карте. Так что я сэкономил даже с учетом переплаты, да еще и машину купил на три года «свежее», чем мог рассчитывать.
								</figcaption>
								<h4>Петр, г. Екатеринбург</h4>
							</figure>
						</div>
						<div class="item">
							<figure>
								<div class="ex-wrapper">
									<div class="ex-white-border">
										<img class="index-ava" src="/templates/zaimol/assets/img/yaroslav.jpg" alt="missed">
									</div>
								</div>
								<figcaption>
								Я студент, подрабатываю, но заработки приходят нерегулярно. Мы с друзьями любим путешествовать – и для этого «ловим» распродажные авиабилеты. Их раскупают в тот же день. Вот и получилось, что увидел нужные билеты, а денег на карте не было. Заполнил анкету, а мне одобрили займ. Так что в итоге мы слетали с девушкой в Москву, а я через пару недель уже расплатился!								
								</figcaption>
								<h4>Ярослав, Новосибирск</h4>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ex-section-4 hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<figure>
						<i></i>
					</figure>
				</div>
				<div class="col-md-2">
					<figure>
						<i></i>
					</figure>
				</div>
				<div class="col-md-2">
					<figure>
						<i></i>
					</figure>
				</div>
				<div class="col-md-2">
					<figure>
						<i></i>
					</figure>
				</div>
				<div class="col-md-2">
					<figure>
						<i></i>
					</figure>
				</div>
				<div class="col-md-2">
					<figure>
						<i></i>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section class="ex-section-5 hidden-xs hidden-sm">
		<div class="container">
			<h2 class="text-center">Максимум выгоды</h2>
			<ul class="ex-tabs">
				<li class="active">
					<a id="exGood" data-toggle="tab" href="#menu3">Zaimol Хорошее начало</a>
				</li>
				<li>
					<a id="exPrestige" data-toggle="tab" href="#menu4">Zaimol Престиж</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="menu3" class="tab-pane fade in active">
					<main class="ex-main-counter">
						<div class="ex-borrow-selector text-center ex-animated">
							<div class="ex-val-static">
								<span>5 000</span>
								<i></i>
							</div>
							<!-- <a onclick="index_spec21"><button class="ex-main-btn">Получить деньги</button></a> -->
							<a href="/form/?amount=5000"><button type="button" class="ex-main-btn">Получить деньги</button></a>
						</div>
						<div class="ex-draft">
							<div class="ex-wrapper">
								<h3>Хорошее начало</h3>
								<i></i>
								<table>
									<tbody>
										<tr>
											<td>Основная ставка</td>
											<td>1.1%</td>
										</tr>
										<tr>
											<td>Ставка при просрочке</td>
											<td>
												<span>2.1%</span>
											</td>
										</tr>
										<tr>
											<td>Срок займа</td>
											<td>
												<span>от 61 дня</span>
											</td>
										</tr>
									</tbody>
								</table>
								<table>
									<tbody>
										<tr>
											<td>
												<span>5 000 рублей</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</main>
				</div>
				<div id="menu4" class="tab-pane fade">
					<main class="ex-main-counter">
						<div class="ex-borrow-selector text-center">
							<div class="ex-val-static">
								<span>30 000</span>
								<i></i>
							</div>
							<!-- <a onclick="index_spec22"><button class="ex-main-btn">Получить деньги</button></a> -->
							<a href="/form?amount=30000"><button type="button" class="ex-main-btn">Получить деньги</button></a>
						</div>
						<div class="ex-draft">
							<div class="ex-wrapper">
								<h3>Престиж</h3>
								<i></i>
								<table>
									<tbody>
										<tr>
											<td>Основная ставка</td>
											<td>1%</td>
										</tr>
										<tr>
											<td>Ставка при просрочке</td>
											<td>
												<span>1.6%</span>
											</td>
										</tr>
										<tr>
											<td>Срок займа</td>
											<td>
												<span>от 130 дней</span>
											</td>
										</tr>
									</tbody>
								</table>
								<table>
									<tbody>
										<tr>
											<td>
												<span>30 000 рублей</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</main>
				</div>
			</div>
		</div>
	</section>
</form>
<?php require 'footer.php'; ?>