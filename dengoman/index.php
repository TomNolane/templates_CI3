<?php require 'header.php'; ?>
<section class="calc" id="calc">
	<form action="/form" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<h1>Срочные деньги
						<br class="visible-lg"> онлайн</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-7 text-center ">
					<div class="form">
						<h2>Оформите займ
							<span>и получите деньги в
								<span>15:00</span>
							</span>
						</h2>
						<input type="hidden" id="amount" name="amount" value="20000" />
						<input type="hidden" id="period" name="period" value="21" />
						<input type="hidden" id="form_slrd" name="form_slrd" value="15" />
						<input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
						<?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
						<div class="form-slider green">
							<input type="text" id="rangeSlider" value="20000" />
						</div>
						<div class="col-md-12 info">
							<div class="col-md-6">
								<div class="btn form-info">
									<span class="form-info-title">К возврату</span>
									<span class="form-info-data sum">6780Р</span>
								</div>
								<div class="btn form-info">
									<span class="form-info-title">Процентная ставка</span>
									<span class="form-info-data perc">1.3
										<span>%</span>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="btn form-info">
									<span class="form-info-title">Комиссия</span>
									<span class="form-info-data comm">780Р</span>
								</div>
								<div class="btn form-info">
									<span class="form-info-title">Срок</span>
									<span class="form-info-data d">От 61 до 130 дней</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 hidden-xs hidden-sm">
							<img id="ps" src="/templates/dengoman/img/index/ps.png" alt="ps.png">
						</div>
						<button type="submit" class="btn">Получить деньги</button>
					</div>
				</div>
				<div class="col-md-6 col-sm-5 hidden-xs">
					<img src="/templates/dengoman/img/index/man.png" alt="man.png">
				</div> 
			</div>
		</div>
	</form>
</section>
<section class="features hidden-xs hidden-sm">
	<h1>Преимущества нашего сервиса</h1>
	<div class="features-cover">
		<div class="container">
			<div id="carousel-features" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-features" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-features" data-slide-to="1"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active" id="slide-0">
						<div class="row">
							<div class="col-sm-4 text-center">
								<img src="/templates/dengoman/img/index/1.png" alt="1.png">
								<p>Сайт доступен с любого
									<br>устройства</p>
								<p>Получите деньги со смартфона,
									<br>планшета или компьютера</p>
							</div>
							<div class="col-sm-4 text-center">
								<img src="/templates/dengoman/img/index/2.png" alt="2.png">
								<p>Круглосуточная работа
									<br>&nbsp;</p>
								<p>Сервис работает 24x7, включая
									<br>праздники и выходные</p>
							</div>
							<div class="col-sm-4 text-center">
								<img src="/templates/dengoman/img/index/3.png" alt="3.png">
								<p>Безопасность и
									<br>конфиденциальность</p>
								<p>Все ваши личные данные хранятся в
									<br>зашифрованном виде</p>
							</div>
						</div>
					</div>
					<div class="item" id="slide-1">
						<div class="row">
							<div class="col-sm-4 text-center">
								<img src="/templates/dengoman/img/index/4.png" alt="4.png">
								<p>Перечисление на любой
									<br>счёт</p>
								<p>VISA, MASTER CARD, QIWI,
									<br>Яндекс.деньги, банковский счёт,
									<br>CONTACT</p>
							</div>
							<div class="col-sm-4 text-center">
								<img src="/templates/dengoman/img/index/5.png" alt="5.png">
								<p>Доверие к нашим
									<br>клиентам</p>
								<p>Для постоянных клиентов
									<br>максимальная сумма займа
									<br>увеличивается</p>
							</div>
							<div class="col-sm-4 text-center">
								<img src="/templates/dengoman/img/index/6.png" alt="6.png">
								<p>Займы доступны по всей
									<br>России</p>
								<p>Вы можете получить займ в любой
									<br>точке РФ. Все что Вам нужно - это
									<br>доступ к интернету</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</section>
<section class="reviews hidden-xs hidden-sm">
	<div class="container">
		<h1>Отзывы клиентов</h1>
		<div id="carousel-reviews" class="carousel slide" data-ride="carousel">
			<div class="row">
				<div class="col-sm-12 text-center">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active" id="slide-0">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1 text-center">
									<img src="/templates/dengoman/img/reviews/1.jpg" alt="1.jpg">
								</div>
								<div class="col-sm-5 col-md-offset-1">
									<h3>Светлана Бондарчик</h3>
									<p>Красноярск</p>
									<p>
										<em>Добрый вечер! С благодарностью к компании. Огромное спасибо за понимание и участие!!! Всего самого хорошего и доброго
											Вам.
										</em>
									</p>
									<a class="btn carousel-button" href="/form">Получить деньги</a>
								</div>
							</div>
						</div>
						<div class="item" id="slide-1">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1 text-center">
									<img src="/templates/dengoman/img/reviews/2.jpg" alt="2.jpg">
								</div>
								<div class="col-sm-5 col-md-offset-1">
									<h3>Олег Ефимов</h3>
									<p>Воронеж</p>
									<p>
										<em>Cпасибо этой компании,очень быстрое и качественное обслуживание!!!</em>
									</p>
									<a class="btn carousel-button" href="/form">Получить деньги</a>
								</div>
							</div>
						</div>
						<div class="item" id="slide-2">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1 text-center">
									<img src="/templates/dengoman/img/reviews/3.jpg" alt="3.jpg">
								</div>
								<div class="col-sm-5 col-md-offset-1">
									<h3>Валентина Никитина</h3>
									<p>Осташков</p>
									<p>
										<em>Очень классная организация, деньги перевели быстро, отличный сервис!рекомендую!!!</em>
									</p>
									<a class="btn carousel-button" href="/form">Получить деньги</a>
								</div>
							</div>
						</div>
						<div class="item" id="slide-3">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1 text-center">
									<img src="/templates/dengoman/img/reviews/4.jpg" alt="4.jpg">
								</div>
								<div class="col-sm-5 col-md-offset-1">
									<h3>Александр Готфрид</h3>
									<p>Красноярск</p>
									<p>
										<em>Я очень доволен пониманием и как здесь ценят клиентов</em>
									</p>
									<a class="btn carousel-button" href="/form">Получить деньги</a>
								</div>
							</div>
						</div>
						<div class="item" id="slide-4">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1 text-center">
									<img src="/templates/dengoman/img/reviews/5.jpg" alt="5.jpg">
								</div>
								<div class="col-sm-5 col-md-offset-1">
									<h3>Антон Казанцев</h3>
									<p>Назарово</p>
									<p>
										<em>ОТ ДУШИ БЛАГОДАРЮ ВАС ЗА ТО,ЧТО ВЫРУЧИЛИ!ВАМ ПРОЦВЕТАНИЯ,А НАМ ЧТОБ ВО ВРЕМЯ ПЛАТИЛИ!</em>
									</p>
									<a class="btn carousel-button" href="/form">Получить деньги</a>
								</div>
							</div>
						</div>
						<div class="item" id="slide-5">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1 text-center">
									<img src="/templates/dengoman/img/reviews/6.jpg" alt="6.jpg">
								</div>
								<div class="col-sm-5 col-md-offset-1">
									<h3>Василий Шаров</h3>
									<p>Черкесск</p>
									<p>
										<em>Хорошая быстрая компания ,компетентные сотрудники</em>
									</p>
									<a class="btn carousel-button" href="/form">Получить деньги</a>
								</div>
							</div>
						</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Назад</span>
						</a>
						<a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Вперёд</span>
						</a>
					</div>
				</div>
			</div> 
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
					<div class="row carousel-indicators">
						<div class="col-sm-2 text-center active" data-target="#carousel-reviews" data-slide-to="0">
							<img src="/templates/dengoman/img/reviews/tmb_1.png" alt="1.png">
						</div>
						<div class="col-sm-2 text-center" data-target="#carousel-reviews" data-slide-to="1">
							<img src="/templates/dengoman/img/reviews/tmb_2.png" alt="2.png">
						</div>
						<div class="col-sm-2 text-center" data-target="#carousel-reviews" data-slide-to="2">
							<img src="/templates/dengoman/img/reviews/tmb_3.png" alt="3.png">
						</div>
						<div class="col-sm-2 text-center" data-target="#carousel-reviews" data-slide-to="3">
							<img src="/templates/dengoman/img/reviews/tmb_4.png" alt="4.png">
						</div>
						<div class="col-sm-2 text-center" data-target="#carousel-reviews" data-slide-to="4">
							<img src="/templates/dengoman/img/reviews/tmb_5.png" alt="5.png">
						</div>
						<div class="col-sm-2 text-center" data-target="#carousel-reviews" data-slide-to="5">
							<img src="/templates/dengoman/img/reviews/tmb_6.png" alt="6.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="where hidden-xs hidden-sm">
	<div class="container">
		<h1>Займ до зарплаты</h1>
		<div class="row">
			<div class="col-sm-5">
				<img src="/templates/dengoman/img/index/where.png" class="visible-lg" alt="where.png">
			</div>
			<div class="col-md-7 col-xs-12">
				<div class="text">
					<p>Часто случается, что нужно быстро забронировать билеты или совершить неотложную покупку, но имеющиеся финансы совершенно
						не позволяют этого сделать. Конечно, можно занять до зарплаты у друзей или взять кредит в банке. Но как поступить,
						если средства необходимы здесь и сейчас?Часто случается, что нужно быстро забронировать билеты или совершить неотложную
						покупку, но имеющиеся финансы совершенно не позволяют этого сделать. Конечно, можно занять до зарплаты у друзей или
						взять кредит в банке. Но как поступить, если средства необходимы здесь и сейчас?</p>
					<p>Есть надежное решение — все активнее набирает свою популярность услуга предоставления жителям РФ небольших сумм денег
						на короткий срок. Такие займы можно оформить онлайн — именно поэтому все больше наших соотечественников обращаются
						к этому способу получения средств. При оформлении такого займа не приходится тратить время на посещение банковского
						офиса, сбор справок, поиск поручителей и долгое ожидание вердикта кредитных специалистов. Получение моментального займа
						онлайн любым жителем РФ — это простой и удобный инструмент решения финансовых вопросов. Заполните специальную форму
						прямо на сайте, и решение о выдаче необходимой суммы станет известно за считанные минуты.</p>
					<div class="text-center">
						<a href="/form" class="btn">Получить деньги</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="doc hidden-xs hidden-sm" style="color: #333">
	<div class="great-support-container section-container section-container-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 great-support-box wow fadeInLeft">
					<div class="great-support-box-text great-support-box-text-left">
						<h3>О сервисе</h3>
						<p class="medium-paragraph">
							Dengoman — это один из лучших онлайн сервисов в РФ по подбору выгодных онлайн займов. Сервис помогает людям в круглосуточном
							режиме, семь дней в неделю.
						</p>
						<p>
							Главным преимуществом использования сервиса Dengoman является время. Мы ценим ваше время и поэтому сервис максимально быстро
							подбирает вам условия и сроки займа.
						</p>
						<p>
							Возможности сервиса Dengoman позволяют узнать Кредитную историю заемщика, а также ее улучшить если это необходимо.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<div class="more-services-container section-container hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
					<h3>
						Условия получения и коммисионные сборы:
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 great-support-box wow fadeInLeft">
					<div class="great-support-box-text great-support-box-text-left">
						<div class="col-md-6">
							<h3>Процентная ставка за день</h3>
							<p class="medium-paragraph">
								Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%
							</p>
						</div>
						<div class="col-md-6">
							<h3>Первый заём</h3>
							<p>
								Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения
							</p>
						</div>
						<div class="col-md-6">
							<h3>Сроки выдачи и погашения</h3>
							<p>
								Min срок выдачи микрозайма составляет 61 день, а max срок погашения займа 365 дней
							</p>
						</div>
						<div class="col-md-6">
							<h3>Процент за пользование займом</h3>
							<p>
								Годовой процент за пользование займом (с учетом требований ФЗ №353-ФЗ) – min 30%, max 360%
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<div class="call-to-action-container section-container section-container-image-bg hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
					<h3>
						Пример расчета онлайн займа:
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 great-support-box wow fadeInLeft">
					<div class="great-support-box-text great-support-box-text-left">
						<p class="medium-paragraph">Если вы взяли займ на сумму 50 000 рублей на 6 месяцев с процентной ставкой 4,5% в месяц, то после истечения срока
							займа переплата составит 13500 рублей. Получается вы возвращаете 63 500 рублей.</p>
						<p>Ниже приведены расчеты начисляемых процентов для дальнейшего самостоятельного вычисления суммы возврата займа (с процентом)
							пользователям нашего сервиса.</p>
						<p>Сумма - 50 000 рублей, процент в месяц - 4,5%, срок займа - 6 месяца.</p>
						<p>4,5(%) * 6(мес) = 27% за 6 месяцев(27% * 50 000руб (сумма займа) )/100% = 13 500 рублей (сумма начисленных процентов)
							50 000 + 13 500 = 63 500 рублей - это сумма необходимых денег к возврату через 6 месяцев.</p>
						<p>В случае нарушения сроков, размер неустойки составляет 0,10% от суммы просрочки в день, но не более 10% от суммы займа.
							В случае длительной задержки выплаты информация будет передана в БКИ.</p>
						<p>Продление займа возможно при своевременном информировании кредитора (до наступления даты возврата займа) и уплаты процентов
							за первичный срок займа. Дополнительных комиссий за продление займа не предусмотрено.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-container section-container section-container-gray-bg hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
					<h3>
						Что будет при невыплате заёмных средств:
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 great-support-box wow fadeInLeft">
					<div class="great-support-box-text great-support-box-text-left">
						<p class="medium-paragraph">
							В случае невозвращения в условленный срок суммы займа или суммы процентов за пользование заёмными средствами кредитор вынуждено
							начислит штраф за просрочку платежа. Они предусмотрены на случай, к примеру, если банковский перевод занял больше
							времени, чем обычно.
						</p>
						<p>
							Однако, в случае неполучения от Вас какой-либо реакции в течение продолжительного времени, будет начислен штраф за просрочку
							срока погашения размером в среднем 0,10% от первоначальной суммы для займов, 0,03% от суммы задолженности в среднем
							для потребительских кредитов и кредитных карт.
						</p>
						<p>
							При несоблюдении Вами условий по погашению кредитов и займов, данные о Вас могут быть переданы в реестр должников или БКИ,
							что негативно может сказаться на Вашей кредитной истории и рейтинге кредитоспособности. Задолженность может быть передана
							коллекторскому агентству для взыскания долга. При допуске просрочки продление займа невозможно. Погашая задолженность
							в срок, Вы формируете хорошую кредитную историю, что повышает Ваш рейтинг кредитоспособности и шансы в дальнейшем
							получить кредит на более выгодных условиях.
						</p>
						<p>
							Лицензии организаций-партнеров: №651303552003006, №651303045003951, №2110177000478
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog-container section-container partner-container hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 blog section-description wow fadeIn">
					<h3>Информация о кредиторах с которыми мы сотрудничаем:</h3>
					<div class="divider-1 wow fadeInUp">
						<span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 blog-box wow fadeInLeft">
					<div class="row">
						<div class="col-sm-12">
							<h3>ООО МФО «СМСФИНАНС»</h3>
							<p>№ лицензии 2120177002022 </p>
							<p>Адрес: 115201, г. Москва,</p>
							<p>ул. Котляковская, д.3, стр. 13</p>
							<p>Годовая процентная ставка: 328,5%</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-sm-offset-2 blog-box wow fadeInLeft">
					<div class="row">
						<div class="col-sm-12">
							<h3>ЗАО «4финанс»</h3>
							<p>№ лицензии 1127746537764 </p>
							<p>Адрес: 115201, г.Москва, </p>
							<p>ул. Котляковская, д.3, стр. 13</p>
							<p>Годовая процентная ставка: 328,5%</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-sm-offset-1 blog-box wow fadeInLeft">
					<div class="row">
						<div class="col-sm-12">
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
				<div class="col-sm-3 blog-box wow fadeInLeft">
					<div class="row">
						<div class="col-sm-12">
							<h3>ООО «Домашние деньги»</h3>
							<p>№ лицензии 211017700000 </p>
							<p>Адрес: 115088, г. Москва,</p>
							<p>2-ой Южнопортовый проезд, д. 33, стр. 1</p>
							<p>Годовая процентная ставка: 248,2%</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-sm-offset-2 blog-box wow fadeInLeft">
					<div class="row">
						<div class="col-sm-12">
							<h3>ООО «Займер»</h3>
							<p>№ лицензии 651303532004088 </p>
							<p>Адрес: Нижний Новгород,</p>
							<p>Адрес:г. Кемерово, пр. Советский, д. 2/7</p>
							<p>Годовая процентная ставка: 248,2%</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3  col-sm-offset-1 blog-box wow fadeInLeft">
					<div class="row">
						<div class="col-sm-12">
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
<?php require 'footer.php'; ?>