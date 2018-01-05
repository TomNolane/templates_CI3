<?php require 'header.php'; ?>
<section>
    <div class="col-sm-6 col-sm-offset-3 hidden-sm hidden-xs text-center">
        <h1 class="h">
            <br>
            <br>
        </h1>
    </div>
</section>
<section class="calc img-responsive" id="calc">
    <form id="anketa" action="/form" method="post">
    <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <input type="hidden" id="p" name="period" value="7" />
        <input type="hidden" id="period2" name="period2" value="7" />
        <input type="hidden" id="amount" name="amount" value="20000" />
        <div class="container">
            <div class="row">
                <div class="col-sm-12 hidden-sm hidden-xs text-center">
                    <div class="col-sm-7">
                        <div class="form text-center">
                            <div class="panel panel-head">
                                <div class="panel-heading">Выберите сумму и срок</div>
                                <div class="panel-body">
                                    <div class="form-slider white">
                                        <div class="clearfix"></div>
                                        <input type="text" class="amount" id="spec_ind" value="20000" />
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-slider white">
                                        <div class="form-label-3 pull-left">61
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="form-label-3 pull-right">365
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                        <input type="text" id="period" value="21" />
                                        <div class="clearfix"></div>
                                    </div>
                                    <img src="/templates/edenga/img/ps.png" alt="ps.png">
                                </div>
                            </div>
                            <button type="submit" class="btn form-button">Получить деньги</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="current">
                            <button type="button" class="btn current-button">
                                <span class="current-button-title">Сумма займа</span>
                                <span class="current-button-main am">6000</span>
                                <br/>
                                <div class="current-button-main-title">
                                    <span class="perc">1.3</span>
                                    <span>% в день</span>
                                </div>
                            </button>
                            <button type="button" class="btn current-button">
                                <span class="current-button-title">Срок</span>
                                <span class="current-button-main current_period">От 61 дня</span>
                            </button>
                            <button type="button" class="btn current-button">
                                <span class="current-button-title">Комиссия</span>
                                <span class="current-button-main comm">78</span>
                                <br/>
                                <div class="current-button-main-title">
                                    <span class="perc">1.3</span>
                                    <span>% в день</span>
                                </div>
                            </button>
                            <button type="button" class="btn current-button">
                                <span class="current-button-title">К погашению</span>
                                <span class="current-button-main sum">6078</span>
                                <br/>
                                <div class="current-button-main-title">
                                    <span class="perc">1.3</span>
                                    <span>% в день</span>
                                </div>
                            </button>
                            <button type="button" class="btn current-button">
                                <span class="current-button-title">Процентная
                                    <br/>ставка</span>
                                <span class="current-button-main percent_rate2">96%</span>
                                <br/>
                                <div class="current-button-main-title">
                                    <span class="comment">Автоматическое одобрение</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 visible-xs visible-sm text-center">
                    <h1 id="getmoney">Сервис
                        <br>онлайн займов</h1>
                    <div class="form text-center">
                        <div class="panel panel-head">
                            <div class="panel-heading">
                                <h1>Выберите сумму</h1>
                                <div class="form-slider white">
                                    <input type="text" class="amount amount2" id="spec_ind2" value="20000" />
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <button type="submit" class="btn form-button">Получить деньги</button>
                                <div class="current">
                                    <button type="button" class="btn current-button">
                                        <span class="current-button-title">Сумма займа</span>
                                        <span class="current-button-main am">15000</span>
                                    </button>
                                    <button type="button" class="btn current-button">
                                        <span class="current-button-title">Срок</span>
                                        <span class="current-button-main current_period">10</span>
                                    </button>
                                    <button type="button" class="btn current-button">
                                        <span class="current-button-title">Комиссия</span>
                                        <span class="current-button-main comm">2250</span>
                                    </button>
                                    <button type="button" class="btn current-button">
                                        <span class="current-button-title">К погашению</span>
                                        <span class="current-button-main sum">17250</span>
                                    </button>
                                    <button type="button" class="btn current-button">
                                        <span class="current-button-title">Процентная
                                            <br/>ставка</span>
                                        <span class="current-button-main percent_rate">96%</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<section id="conditions" class="hidden-xs hidden-sm">
    <div class="container container-services">
        <div class="row conditions">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="conditions-header text-center"> Edenga - быстрый поиск выгодного займа</div>
                <p class="" style="text-align: justify;">Хотите получить ссуду на максимально выгодных условиях? Сервис Edenga в этом поможет. Мы подберем подходящий
                    вариант, исходя из ваших индивидуальных требований, особенностей регионального расположения и кредитного
                    рейтинга.
                    <br> Наш сервис сотрудничает с надежными партнерами, деятельность которых лицензирована. Пользуясь сайтом
                    Edenga, вам не придется самостоятельно выбирать микрофинансовую организацию и заниматься ее проверкой.
                    Всю трудную работу мы выполнили за вас. Вам остается только ввести желаемые условия и получить деньги.
                    Все просто и удобно!
                </p>
            </div>
        </div>
    </div>
</section>
<section id="conditions" class="hidden-xs hidden-sm">
    <div class="container container-services text-left">
        <div class="row conditions">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="conditions-header text-center">Что такое сервис Edenga?</div>
                <p>Мы не являемся кредитором, банком и финансовым учреждением. Edenga не принимает решений по выдаче ссуды,
                    а является посредником между кредитной организацией и клиентом. Мы помогаем найти самое выгодное предложение
                    согласно выдвинутым условиям и перенаправляем заемщика на нужную компанию.
                    <br> Мы гарантируем высокую вероятность выдачи займа - 96%. Если вы хотите быстро решить свои финансовые
                    проблемы, то сервис Edenga - лучший выход из ситуации.</p>
            </div>
        </div>
    </div>
</section>
<section id="conditions" class="hidden-xs hidden-sm">
    <div class="container container-services text-left">
        <div class="row conditions">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="conditions-header text-center">Условия получения займа на сайте</div>
                <p>&bull; Первая ссуда - до 10 тысяч ₽ с кредитной ставкой 0% при своевременном погашении долга.</p>
                <p>&bull; Займ выдают минимум на 61 день, максимум - на 365 дней.</p>
                <p>&bull; Минимальная сумма займа - 1000 ₽, максимальная - 100 тысяч ₽.</p>
                <p>&bull; Годовой процент составляет от 30 до 360% (согласно Закону №353-ФЗ).</p>
                <p>&bull; Сумма до 30 тысяч ₽ выдается под 4,5% месячных.</p>
                <p>&bull; Микрокредит до 100 тысяч ₽ выдается под ту же ставку - 4,5% в месяц.</p>
            </div>
        </div>
    </div>
</section>
<section id="conditions" class="hidden-xs hidden-sm">
    <div class="container container-services text-left">
        <div class="row conditions">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="conditions-header text-center">Как рассчитать сумму оплаты онлайн-займа?</div>
                <p>Чтобы понять, сколько вам нужно будет заплатить за полученный микрокредит, пользуйтесь простой формулой:</p>
                <p>(4,5%*количество месяцев) * сумма займа/ 100% = начисленные проценты</p>
                <p>Полученный результат нужно прибавить к сумме займа, тогда вы узнаете общую сумму долга.</p>
                <p>Давайте рассмотрим на примере.</p>
                <p>Вы взяли 20 000 рублей на 2 месяца. Считаем:</p>
                <p>(4,5%*2)*20 000/100% = 1800</p>
                <p>Это начисленный процент. Прибавляем к 20 000 рублей 1800 рублей и получаем 21800 рублей - общая сумма долга.</p>
                <p>Очень выгодные условия. Это подтвердит любой из наших клиентов.</p>
            </div>
        </div>
    </div>
</section>
<section id="conditions" class="hidden-xs hidden-sm">
    <div class="container container-services text-left">
        <div class="row conditions">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="conditions-header text-center">Что будет, если просрочить или не выплатить платеж?</div>
                <p>&bull; Кредиторы начислят штраф - средний коэффициент 0,10% от начальной суммы займа, для кредитных карточек
                    и кредитов - 0,3% от всей задолженности.</p>
                <p>&bull; Невыплаченный микрокредит может передается коллекторскому агентству.</p>
                <p>&bull; Информация о клиентах, которые не соблюдают условия выплаты займа, передаются в Бюро кредитных историй
                    либо в реестр должников.</p>
                <p>&bull; Если у вас возникли проблемы с выплатой, сообщите об этом кредитору до окончания срока. Он сможет
                    вам продлить займ. После просрочки такие уступки невозможны, придется оплачивать штрафы.</p>
                <p>Вы должны знать, что не выполняя условия договора по займу, портите свою кредитную историю и создаете проблемы
                    для будущего кредитования. Исполнительный клиент впоследствии сможет взять большую ссуду на более выгодных
                    условиях.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="conditions" class="hidden-xs hidden-sm">
    <div class="container container-services text-left">
        <div class="row conditions">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="conditions-header text-center">Преимущества сервиса Edenga</div>
                <p>&bull; Сотрудничество с более чем 35 лицензированными МФО.</p>
                <p>&bull; Максимальная простота использования сервиса.</p>
                <p>&bull; Выгодная процентная ставка.</p>
                <p>&bull; Наличие разрешительной документации на деятельность.</p>
                <p>&bull; Выгодные условия выплаты займа.</p>
                <p>&bull; Экономия времени на поиск кредитора.</p>
                <p>&bull; Высокие гарантии получения займа - вероятность одобрения 96%.</p>
                <br>
                <h4 class="text-center">Официальные контактные данные компании</h4>
                <p>Телефон: 8 (960) 950 93 53
                    <br> Адрес: Ленинградская область, город Санкт-Петербург, улица Осипенко, дом 12, офис 201.</p>
                <br>
                <h3 class="text-center">Выгодный займ - это Edenga!</h3>
                <p class="text-center">Регистрируйтесь на сайте прямо сейчас!</p>
            </div>
        </div>
    </div>
</section>
<section id="conditions" class="hidden-xs hidden-sm">
    <div class="container container-services text-left">
        <div class="row conditions">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="conditions-header text-center">Информация о кредиторах с которыми мы сотрудничаем:</div>
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
    </div>
</section>
<?php require 'footer.php'; ?>