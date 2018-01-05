<?php require 'header.php'; ?>
<section class="calc" id="calc">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h5>Интернет проект по подбору выгодного условия займа</h5>
                <h1>Онлайн займы за 15 минут</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                <div class="form">
                    <form id="anketa" action="/form" method="post">
                        <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
                        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
                        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
                        <input type="hidden" id="period2" name="period2" value="7" />
                        <input type="hidden" id="amount" name="amount" value="20000" />
                        <input type="hidden" id="period" name="period" value="21" />
                        <div class="sliders">
                            <div class="form-slider green">
                                <div class="col-md-12">
                                    <input type="text" class="amount" value="20000" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-slider green" style="display: none;">
                                <div class="col-md-12">
                                    <input type="text" class="period" value="7" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3 col-sm-4 col-xs-4 form-label-2 summary hidden-sm hidden-xs">
                                <div>Вы берете:</div>
                                <span class="current_amount">6 000</span> Р</div>
                            <div class="col-md-3 col-sm-4 col-xs-4 form-label-2 summary">
                                <div>
                                    <span class="hidden-xs">Процентная</span> ставка:</div>
                                <span class="current_percent">1.3</span> %
                                <span class="hidden-xs">в день</span>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 form-label-2 summary">
                                <div>Срок:</div>
                                <span class="srok" style="font-size: 12px;">от 61 дня</span>
                                </span>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 form-label-2 summary">
                                <div>Нужно вернуть:</div>
                                <span class="current_summ">6 780</span> Р</span>
                            </div>

                        </div>
                        <div id="current_period"></div>
                        <button type="submit" class="btn btn-primary">Взять займ</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section class="howto white text-center hidden-xs">
    <div class="container">
        <h2>Как получить деньги?</h2>
        <div class="row">
            <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-1">
                <div class="algo-item">
                    <a href="/form">
                        <img src="/templates/vkredito/img/steps/1.png" alt="1.png">
                    </a>
                </div>
                <p>Зайдите на сайт</p>
            </div>
            <div class="col-md-2 col-sm-2 inner">
            </div>
            <div class="col-md-2 col-sm-2 text-center">
                <div class="algo-item">
                    <a href="/form">
                        <img src="/templates/vkredito/img/steps/2.png" alt="2.png">
                    </a>
                </div>
                <p>Заполните короткую анкету</p>
            </div>
            <div class="col-md-2 col-sm-2 inner">
            </div>
            <div class="col-md-2 col-sm-2 text-center">
                <div class="algo-item">
                    <a href="/form">
                        <img src="/templates/vkredito/img/steps/3.png" alt="3.png">
                    </a>
                </div>
                <p>Получите деньги</p>
            </div>
        </div>
    </div>
</section>
<div id="ya-rtb hidden-md hidden-lg">
    <div id="yandex_rtb_R-A-249178-1"></div>
    <div id="yandex_rtb_R-A-249178-2"></div>
</div>
<section class="about white hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div id="ya-rtb">
                <div id="yandex_rtb_R-A-249178-1"></div>
                <div id="yandex_rtb_R-A-249178-2"></div>
            </div>
            <div class="col-xs-12 text-center">
                <h2>Срочные онлайн займы - мгновенное решение ваших проблем</h2>
                <p>Хотите получить кредит здесь и сейчас? Нет времени ждать? Вам поможет сервис Vkredito. С нашей помощью вы
                    быстро найдете предложение с самыми выгодными условиями кредитования и получите нужную сумму.</p>

                <p>Онлайн займы - это самое эффективное решение финансовых проблем. Больше не нужно собирать десятки справок,
                    тратить время на посещение банка и ждать тщательного анализа вашей благонадежности банковскими служащими.
                    Никаких поручителей и субъективных ошибочных решений. Вы честно и справедливо получите свой кредит после
                    регистрации на сайте и заполнения короткой анкеты. </p>

                <p>Если столкнулись со сложной ситуацией и срочно нужны деньги, обращайтесь сразу Vkredito. Тут вам окажут своевременную
                    помощь.</p>
                <a href="/form">
                    <button type="button" class="btn btn-primary">Взять займ</button>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="advantage white hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Наши преимущества</h2>
                <div class="row">
                    <div class="col-md-1 col-sm-12 col-xs-12"></div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="algo-item">
                            <a href="/form">
                                <img src="/templates/vkredito/img/advantage/1.png" alt="1.png">
                            </a>
                        </div>
                        <h3>Быстрое кредитование</h3>
                        <p>деньги будут переведены в течение 15 минут после подачи заявки</p>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="algo-item">
                            <a href="/form">
                                <img src="/templates/vkredito/img/advantage/2.png" alt="2.png">
                            </a>
                        </div>
                        <h3>Гибкость</h3>
                        <p>вы сами выбираете сроки кредитования и определяете сумму займа</p>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="algo-item">
                            <a href="/form">
                                <img src="/templates/vkredito/img/advantage/3.png" alt="3.png">
                            </a>
                        </div>
                        <h3>Выгодная процентная ставка</h3>
                        <p>умеренный ежедневный процент и быстрое погашение.</p>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="algo-item">
                            <a href="/form">
                                <img src="/templates/vkredito/img/advantage/4.png" alt="4.png">
                            </a>
                        </div>
                        <h3>Конфиденциальность</h3>
                        <p>мы гарантируем надежную защиту ваших личных данных</p>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="algo-item">
                            <a href="/form">
                                <img src="/templates/vkredito/img/advantage/5.png" alt="5.png">
                            </a>
                        </div>
                        <h3>Большие суммы</h3>
                        <p>максимальный размер кредита 100 000 рублей!</p>
                    </div> 
                    <div class="col-md-1 col-sm-12 col-xs-12"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="review white hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Отзывы о нас</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="algo-item">
                            <img src="/templates/vkredito/img/reviews/1.png" alt="1.png">
                        </div>
                        <h3>Александра Иванова</h3>
                        <p>"Вкредито", конечно, красавцы. Обратилась в трудной ситуации, когда не хватало денег на ремонт машины.
                            Начальник задержал ЗП, но ребята выручили за что им спасибо.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="algo-item">
                            <img src="/templates/vkredito/img/reviews/2.png" alt="2.png">
                        </div>
                        <h3>Ольга Золотова</h3>
                        <p>Хочу поблагодарить Вкредито за доверие и своевременно оказанную материальную помощь! Очень удобный
                            и оперативный сервис! Будем дружить! ))</p>

                    </div>
                    <div class="col-md-4">
                        <div class="algo-item">
                            <img src="/templates/vkredito/img/reviews/3.png" alt="3.png">
                        </div>
                        <h3>Михаил Светлаков</h3>
                        <p>Я очень хочу, чтобы вы успешно пережили кризис, побольше вам добросовестных плательщиков и успешных
                            сделок!!! Вы очень удобный сервис!!!</p>

                    </div>
                </div>
                <a href="#" data-toggle="modal" data-target="#feedbackModal" class="btn btn-primary">Оставить отзыв</a>
            </div>
        </div>
    </div>
</section>
<div class="doc hidden-xs hidden-sm">
    <div class="great-support-container section-container section-container-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 great-support-box wow fadeInLeft">
                    <div class="great-support-box-text great-support-box-text-left">
                        <h2>Vkredito - ваш верный помощник в сложных ситуациях</h2>
                        <p class="medium-paragraph">Vkredito - это уникальный сервис, который обеспечит быстрым кредитом любого желающего. Он работает
                            7 дней в неделю 24 часа в сутки. Сайт обладает возможностью не только проверять, но и исправлять
                            кредитную историю. Если вам другие кредиторы отказали в помощи, можете смело обращаться к нам.
                            Vkredito исправит ситуацию. Мы запросто решим вашу проблему.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-services-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>Наши условия кредитования</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 great-support-box wow fadeInLeft">
                    <div class="great-support-box-text great-support-box-text-left">
                        <ul>
                            <li>Ежедневная процентная ставка от 0,08% до 0,098%.</li>
                            <li>Размер первого займа - до 10 000 рублей, при условии его своевременного погашения - ставка 0%</li>
                            <li>Срок возвращения займа можно выбрать - от 61 до 365 дней.</li>
                            <li>Годовой процент составляет от 30% до 360%.</li>
                            <li>Средняя месячная ставка 4,5%.</li>
                            <li>Сумма займа от 1000 до 100 000 рублей.</li>
                        </ul>
                        <p class="medium-paragraph"> При разработке этих условий учтены требования ФЗ №353-ФЗ. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-to-action-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>Как самостоятельно рассчитать размер ставки?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 great-support-box wow fadeInLeft">
                    <div class="great-support-box-text great-support-box-text-left">
                        <p class="medium-paragraph">
                            Собираетесь взять 40 000 рублей на полгода, но не знаете, сколько в итоге придется заплатить? Мы поможем вычислить общую
                            сумму. Предлагаемый пример можно применять и для других условий кредитования.</p>

                        <p>Итак, данные задачи: сумма кредита - 40 000 рублей, ставка - 4,5%, срок - 6 месяцев.</p>

                        <p>Умножаем ставку на период выплаты: 4,5*6 = 27. </p>

                        <p>Затем умножаем полученный процент на сумму и делим результат на 100: 27*40000/100 =10 800. </p>

                        <p>Это значит, что 10 800 рублей составляет процентная ставка за 6 месяцев пользования займом. Прибавляем
                            к 40 000 рублей 10 800 рублей и получаем общую сумму, которую нужно будет отдать кредитору по
                            истечении срока - 50 800 рублей.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="portfolio-container section-container section-container-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>Последствия неуплаты или просрочки:</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 great-support-box wow fadeInLeft">
                    <div class="great-support-box-text great-support-box-text-left">
                        <p class="medium-paragraph">
                            Когда вы знаете, что не сможете оплатить займ в срок, предупредите об этом кредитора заранее. Так вы сможете избежать увеличения
                            долга, поскольку кредит будет продлен без изменения ставки.</p>

                        <p>В случае просрочки начисляется штраф размером от 0,03% до 0,10%. Чтобы рассчитаться с кредитором,
                            вам придется выплачивать и пеню.</p>

                        <p>В случае нарушений условий кредитования данные о должнике передаются в специальный реестр или БКИ.</p>

                        <p>Взысканием неуплаченных займов чаще всего занимается коллекторское агентство.</p>

                        <p>Лучше погасить кредит вовремя. Так вы создадите себе хорошую кредитную историю и не будете иметь
                            в дальнейшем проблем с оформлением более крупных займов.</p>

                        <p>Мы сотрудничаем только с лицензированными организациями и гарантируем их надежность.</p>

                        <p>Регистрируйтесь на сайте Vkredito и оформляйте выгодный кредит!</p>
                        <p>Лицензии организаций-партнеров: №651303552003006, №651303045003951, №2110177000478</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="conditions hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Информация о кредиторах с которыми мы сотрудничаем:</h3>
                </div>
                <div class="col-xs-4">
                    <div class="white offers">
                        <p>
                            ООО МФО «СМСФИНАНС» № лицензии 2120177002022 Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13 Годовая процентная
                            ставка: 328,5%
                        </p>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="white offers">
                        <p>
                            ЗАО «4финанс» № лицензии 1127746537764 Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13 Годовая процентная ставка:
                            328,5%
                        </p>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="white offers">
                        <p>
                            ООО «СрочноДеньги» № лицензии 2110552000304 Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж Годовая процентная
                            ставка: 360%
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-4">
                    <div class="white offers">
                        <p>
                            ООО «Домашние деньги» № лицензии 211017700000 Адрес: 115088, г. Москва, 2-ой Южнопортовый проезд, д. 33, стр. 1 Годовая процентная
                            ставка: 248,2%
                        </p>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="white offers">
                        <p>
                            ООО «Займер» № лицензии 651303532004088 Адрес:г. Кемерово, пр. Советский, д. 2/7 Годовая процентная ставка: 248,2%
                        </p> 
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="white offers">
                        <p>
                            ООО «Парса Компани Групп» № лицензии 1097746179585 Адрес: 115201, г. Москва, Старокаширское ш., д. 2, корп. 2 Годовая процентная
                            ставка: 360%
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>