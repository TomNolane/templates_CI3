<?php include 'header.php';?>
<div class="ex-main-head">
    <div class="container">
        <div class="ex-calc-wraper">
            <div class="row">
                <div class="col-sm-7">
                    <h2>Выберите сумму займа</h2>
                </div>
                <div class="col-sm-5">
                    <figure class="ex-val-block">
                        <p id="ex-slider-val" class="text-center"></p>
                    </figure>
                </div>
            </div>
            <ul class="ex-calc-block text-center">
                <li>
                    <span class="ex-unique">Срок займа:</span>
                    <p class="ex-time"></p>
                </li>
                <li>
                    <span class="ex-unique">Комиссия:</span>
                    <p class="ex-Commission"></p>
                </li>
                <li>
                    <span class="ex-unique">К возврату:</span>
                    <p class="ex-total"></p>
                </li>
            </ul>
            <div class="ex-range-scope">
                <div class="row">
                <form id="anketa" action="/form" method="post"> 
                <input type="hidden" id="period" name="period" value="21" />
                <input type="hidden" id="form_slrd" name="form_slrd" value="15" /> 
                <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>"> 
                <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?> 
                    <input type="hidden" class="amount" id="amount" name="amount" value="20000" />
                    <input type="hidden" class="sldr" id="sldr" name="sldr" value="15" />
                    <input type="hidden" class="percent" id="percent" name="percent" value="95" />
                    <div class="col-sm-7">
                        <div id="ex-main-slider-range">
                            <figure class="ex-range-slider">
                                <input type="text"  id="rangeSlider" name="rangeSlider" value="0" />
                                <span class="ex-probability"></span>
                            </figure>
                            <div class="ex-slider-info">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 ex-for-button text-center">
                        <button class="ex-main-btn " type="submit">Получить деньги</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ex-get-money">
    <div class="container">
        <div class="row">
            <h1 class="hidden-xs hidden-sm visible-md visible-lg">Как получить деньги сейчас?</h1> 
			<h1 class="hidden-md hidden-lg visible-xs visible-sm special_ind42">Как получить деньги сейчас?</h1> 
            <div class="col-md-6 hidden-xs hidden-sm visible-md visible-lg">
                <div class="ex-get-money-block">
                <a href="/form"><img src="templates/dengibystra/assets/img/calc.png" alt="calc.png" class="ex-vh-center"></a>
                </div>
            </div>
            <div class="col-md-6 hidden-xs hidden-sm visible-md visible-lg">
                <div class="ex-get-money-steps">
                    <span>1</span>
                    <h3>Выберите сумму займа и заполните простую анкету</h3>
                    <p>После выбора суммы вам необходимо заполнить простую анкету внеся корректные данные</p>
                </div>
            </div> 
			<div class="col-md-6 hidden-md hidden-lg visible-xs visible-sm special_ind34">
                <div class="ex-get-money-steps special_ind35">
                    <span class="special_ind36">1</span>
                    <h3 class="special_ind41">Выберите сумму займа и заполните простую анкету</h3>
                    <p>После выбора суммы вам необходимо заполнить простую анкету внеся корректные данные</p>
                </div>
            </div>
            <div class="col-md-6 hidden-md hidden-lg visible-xs visible-sm">
				<div class="ex-get-money-block special_ind38">
					<a href="/form"><img src="templates/dengibystra/assets/img/calc.png" alt="calc.png" class="ex-vh-center"></a>
                </div> 
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-6 hidden-xs hidden-sm visible-md visible-lg">
                <div class="ex-get-money-block">
                   <a href="/form"> <img src="templates/dengibystra/assets/img/spasibo.png" alt="spasibo.png" class="ex-vh-center"></a>
                </div>
            </div>
            <div class="col-md-6 hidden-xs hidden-sm visible-md visible-lg">
                <div class="ex-get-money-steps">
                    <span>2</span>
                    <h3>Все происходит практически мгновенно</h3>
                    <p>После заполнения анкеты вам будут доступны организации с автоматически одобренным займом. В большинстве случаев уже через 15 минут деньги вам переведут</p>
                </div>
            </div> 
			<div class="col-md-6 hidden-md hidden-lg visible-xs visible-sm special_ind34">
			<div class="ex-get-money-steps special_ind35">
				<span class="special_ind40">2</span>
				<h3 class="special_ind39">Все происходит практически мгновенно</h3>
				<p>После заполнения анкеты вам будут доступны организации с автоматически одобренным займом. В большинстве случаев уже через 15 минут деньги вам переведут</p>
                </div> 
            </div>
            <div class="col-md-6 hidden-md hidden-lg visible-xs visible-sm">
                <div class="ex-get-money-block special_ind38">
                   <a href="/form"> <img src="templates/dengibystra/assets/img/spasibo.png" alt="spasibo.png" class="ex-vh-center"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 hidden-xs hidden-sm visible-md visible-lg">
                <div class="ex-get-money-block">
					<a href="/form"><img src="templates/dengibystra/assets/img/screen.png" alt="screen.png" class="ex-vh-center"></a>
                </div>
            </div>
            <div class="col-md-6 hidden-xs hidden-sm visible-md visible-lg">
                <div class="ex-get-money-steps">
                    <span>3</span>
                    <h3>Получите деньги</h3>
                    <p>На карту VISA, MAESTRO, QIWI кошелёк, Яндекс.Деньги, через систему CONTACT, банковский счёт</p>
                </div>
            </div> 
			<div class="col-md-6 hidden-md hidden-lg visible-xs visible-sm special_ind34">
                <div class="ex-get-money-steps special_ind35">
                    <span class="special_ind36">3</span>
                    <h3 class="special_ind37">Получите деньги</h3>
                    <p>На карту VISA, MAESTRO, QIWI кошелёк, Яндекс.Деньги, через систему CONTACT, банковский счёт</p>
                </div>
            </div>
            <div class="col-md-6 hidden-md hidden-lg visible-xs visible-sm">
				<div class="ex-get-money-block special_ind38">
					<a href="/form"><img src="templates/dengibystra/assets/img/screen.png" alt="screen.png" class="ex-vh-center"></a>
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="ex-doc-block">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ex-info-block hidden-xs hidden-sm visible-md visible-lg">
                    <h3>О проекте</h3> 
                    <p>Dengibystra - это самый удобный и выгодный сервис по получению онлайн-займов. Благодаря используемым
                        принципам обработки данных нашим клиентом может стать любой гражданин России. Даже если вы пенсионер,
                        студент или у вас плохая кредитная история, не бойтесь обратиться за помощью. Мы оперативно решим
                        ваши финансовые проблемы. Вы получите займ мгновенно - буквально через 15 минут - и сможете распоряжаться
                        им по собственному усмотрению.</p>
                </div>
				<div class="ex-info-block hidden special_ind33">
                    <h3 id="special_ind34">О проекте</h3> 
                    <p>Dengibystra - это самый удобный и выгодный сервис по получению онлайн-займов. Благодаря используемым
                        принципам обработки данных нашим клиентом может стать любой гражданин России. Даже если вы пенсионер,
                        студент или у вас плохая кредитная история, не бойтесь обратиться за помощью. Мы оперативно решим
                        ваши финансовые проблемы. Вы получите займ мгновенно - буквально через 15 минут - и сможете распоряжаться
                        им по собственному усмотрению.</p>
                </div>
                <div class="ex-info-block hidden-xs hidden-sm">
                    <h3>Условия получения и коммисионные сборы</h3>
                    <div class="ex-condition">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p>
                                            <span>Процентная ставка за день</span>
                                            <span>max: 0,98% в день</span>
                                            min: 0,08% в день
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>
                                            <span>Сроки выдачи и погашения</span>
                                            <span>min: 61 день,</span>
                                            max: 365 дней
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p>
                                            Годовой процент за пользование займом (с учетом требований ФЗ №353-ФЗ) min 30%, max 360%
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="ex-no-border">
                                            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ex-info-block hidden-xs hidden-sm">
                    <h3>Документы и разрешительная документация</h3>
                    <p>Услуги на проекте «Сервис» оказываются юридическим лицом ИП «Бабакова К.К.» ОГРНИП 316222500122426 ИНН
                        222511216499.
                        <br>
                        На основании ФЗ "О потребительском кредите (займе)" от 21.12.2013 N 353-ФЗ имеет право осуществлять профессиональную деятельность
                        по предоставлению потребительских займов.
                    </p>
                    <p class="ex-hidden">
                        Проект осуществляет только подбор микрозаймов для клиентов, а именно, между клиентом который желает взять займ, и кредитным
                        учреждением, а также некредитными финансовыми организациями в случаях, определенных федеральными
                        законами об их деятельности, которые занимаются выдачей займов. Проект не является финансовым учреждением,
                        банком или кредитором, и не несёт ответственности за любые заключенные договоры кредитования или
                        условия. Чтобы оформить заявку на получение займа, Вам необходимо пройти регистрацию и аутентификацию
                        на проекте.
                    </p>
                </div>
                <div class="ex-info-block hidden-xs hidden-sm">
                    <h3>Пример расчета онлайн займа</h3>
                    <p>Если вы взяли займ на сумму 50 000 рублей на 6 месяцев с процентной ставкой 4,5% в месяц, то после истечения
                        срока займа переплата составит 13500 рублей. Получается вы возвращаете 63 500 рублей. Ниже приведены
                        расчеты начисляемых процентов для дальнейшего самостоятельного вычисления суммы возврата займа (с
                        процентом) пользователям нашего сервиса.
                    </p>
                    <p class="ex-hidden">
                        Сумма - 50 000 рублей, процент в месяц - 4,5%, срок займа - 6 месяца. 4,5(%) * 6(мес) = 27% за 6 месяцев(27% * 50 000руб
                        (сумма займа) )/100% = 13 500 рублей (сумма начисленных процентов) 50 000 + 13 500 = 63 500 рублей
                        - это сумма необходимых денег к возврату через 6 месяцев. В случае нарушения сроков, размер неустойки
                        составляет 0,10% от суммы просрочки в день, но не более 10% от суммы займа. В случае длительной задержки
                        выплаты информация будет передана в БКИ. Продление займа возможно при своевременном информировании
                        кредитора (до наступления даты возврата займа) и уплаты процентов за первичный срок займа. Дополнительных
                        комиссий за продление займа не предусмотрено.</p>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>