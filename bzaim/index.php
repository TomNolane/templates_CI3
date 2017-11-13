<?php require 'header.php'; ?>
<style>
    .index_special {
        margin-top: -20px !important;
    }

    .index_specail2 {
        padding-bottom: 80px;
    }

    .index_specail3 {
        padding-bottom: 0px !important;
    }

    @media (min-width: 992px) and (max-width: 992px) {
        .index_special {
            margin-top: 0px !important;
        }
    }
</style>

<header class="index_specail2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="header-content">
                    <div class="header-content-inner index_special hidden-sm hidden-xs">
                        <h1 class="">Моментальные займы</h1>
                        <h2 style="margin-top: -20px; margin-bottom: -20px;"> онлайн за 15 минут</h2>
                    </div>
                    <div class="header-content-inner index_special2 hidden-md hidden-lg">
                        <h1>Моментальные займы</h1>
                        <h2> онлайн за 15 минут</h2>
                    </div>

                    <div class="col-md-8 col-md-offset-2 hidden-sm hidden-xs text-center">
                        <div class="form">
                            <form id="anketa" action="/form" method="post">
                                <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
                                <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
                                <div class="sliders">
                                    <div class="form-slider orange">
                                        <div class="col-md-12 grey">
                                            <h1>Выберите сумму займа</h1>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">Сумма </span>
                                                <input type="text" class="form-control amount" id="amount" name="amount" value="30000" aria-describedby="basic-addon1" />
                                                <span class="input-group-addon" id="basic-addon2"> 100 000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 green">
                                            <div class="col-md-2">
                                                <div>Размер займа </div>
                                                <div class="current">
                                                    <span class="current_amount">15 000</span> Р</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>Комиссия </div>
                                                <div class="current">
                                                    <span class="current_comm">195</span> Р</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>К погашению </div>
                                                <div class="current">
                                                    <span class="current_summ">15 195</span> Р</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>Срок займа </div>
                                                <div class="current">
                                                    <span class="current_day">от 61 дня</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>Одобрение </div>
                                                <div class="current">
                                                    <span class="current_prob">97</span> %</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <button type="submit" style="margin-top: 30px;" class="btn btn-xl btn-success">Получить деньги</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 visible-xs visible-sm text-center">
                        <div class="form text-center">
                            <form id="anketa" action="/form" method="post">
                                <div class="panel panel-head">
                                    <div class="panel-heading">
                                        <h1>Выберите сумму</h1>
                                        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
                                        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
                                        <div class="form-slider white">
                                            <input type="text" class="amount" name="amount" value="6000" />
                                            <div class="clearfix"></div>
                                        </div>
                                        <button type="submit" class="btn btn-xl btn-success">Получить деньги</button>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-12 col-xs-12 green">
                                            <div class="col-sm-12 col-xs-12">
                                                <div>Размер займа </div>
                                                <div class="current">
                                                    <span class="current_amount">15 000</span> Р</div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div>Комиссия </div>
                                                <div class="current">
                                                    <span class="current_comm">195</span> Р</div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div>К погашению </div>
                                                <div class="current">
                                                    <span class="current_summ">15 195</span> Р</div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div>Срок займа </div>
                                                <div class="current">
                                                    <span class="current_day">5-15</span> дней</div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div>Одобрение </div>
                                                <div class="current">
                                                    <span class="current_prob">97</span> %</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<section class="about conditions white hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="text-center">
                    Мгновенный займ Bzaim5
                </h3>
                <p>
                    По статистике 2017 года 75% россиян недовольны своей зарплатой, а это значит, что они постоянно сталкиваются с проблемой
                    нехватки денег. Форс-мажорные обстоятельства и необходимость в срочных покупках выбивают из колеи. Где
                    быстро взять деньги? Банки и знакомые могут отказать. У родственников может не набраться достаточной
                    суммы.
                    <b>Bzaim5</b> предлагает идеальный выход из ситуации - мгновенный онлайн-займ. Для того чтобы получить финансовую
                    помощь, нужно просто зарегистрироваться на сайте. После этого заполните анкету и отправьте заявку на
                    утверждение. Уже через 15 минут деньги будут на вашем счету.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="conditions hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="text-center">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Мы максимально упростили процедуру получения займа:</h3>
            </div>
            <div class="col-xs-3">
                <div class="white">
                    <p>
                        <b>не нужно оформлять десятки справок;</b>
                    </p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="white">
                    <p>
                        <b>не придется ждать длительных и тщательных проверок вашей личности;</b>
                    </p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="white">
                    <p>
                        <b>не нужно подыскивать правильные слова для близких, у которых собрались одолжить деньги;</b>
                    </p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="white">
                    <p>
                        <b>можно быть уверенным, что займ одобрят - решение по выдаче микрокредита в 97% положительное.</b>
                    </p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12">
                <p>Сервис
                    <b>Bzaim5</b> экономит ваше время и энергию. Заявку можно подать из любой точки страны. Главное условие
                    - наличие интернета.
                    <br> С нашей помощью вы легко улучшите кредитную историю, если до этого возникали какие-то проблемы.
                    <br>
                    <b>Bzaim5</b> - современное решение финансовых затруднений.</p>
            </div>
        </div>
    </div>
</section>

<section class="conditions hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Особенности сервиса</h3>
            </div>
            <div class="col-xs-12">
                <p>
                    <b>Bzaim5</b> - это не отдельная микрофинансовая организация, а посредник между заемщиком и кредитором.
                    Мы сотрудничаем с 35 лицензированными МФО, так что гарантируем надежность компаний, с которыми будут
                    иметь дело наши клиенты.
                    <br>Вы можете самостоятельно выбрать наиболее выгодные условия кредитования и мгновенно получить ответ на
                    заявку.
                    <br> Высокую скорость обработки данных обеспечивает уникальная технология скоринга. Проверка информации осуществляется
                    всего 15 минут. После этого вы уже можете получить желаемый перевод.</p>

            </div>
        </div>
    </div>
</section>

<section class="conditions hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Условия займа</h3>
            </div>
            <div class="col-xs-12">
                <div class="white indent">
                    <ul>
                        <li>Сумма первого займа не более 10 000 рублей, кредит можно получить со ставкой 0%, если он будет погашен
                            вовремя.
                        </li>
                        <li>Размер кредита от 1000 до 100 000 рублей.</li>
                        <li>Процент начисляется каждый день, ставка составляет от 0,08% до 0,98%. В месяц в среднем выходит 4,5%,
                            в год - от 30% до 360%.</li>
                        <li>Кредит выдается на период от 61 дня до года.</li>
                        <li>За несоблюдение условий договора начисляется пеня, минимальный размер которой 0,03%, средний - 0,10%
                            от начальной суммы займа.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="conditions hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="col-xs-12">
                    <h3>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Что нужно для получения займа?</h3>
                </div>
                <div class="col-xs-12">
                    <div class="white indent">
                        <ul>
                            <li>
                                <b>Иметь доступ к интернету;</b>
                            </li>
                            <li>
                                <b>Паспорт гражданина Российской Федерации;</b>
                            </li>
                            <li>
                                <b>Быть возрастом от 18 до 70 лет.</b>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p>Вы можете получить деньги даже с плохой кредитной историей. Среди клиентов сервиса Bzaim5 есть и студенты,
                        и пенсионеры, и простые рабочие, и руководители крупных предприятий. Ваш социальный статус не имеет
                        значения. </p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="row">
                    <div class="col-xs-12">
                        <h3>
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Как можно погасить займ?</h3>
                    </div>
                    <div class="col-xs-12">
                        <div class="white indent">
                            <ul>
                                <li>
                                    <b>Банковским переводом;</b>
                                </li>
                                <li>
                                    <b>Электронным платежом;</b>
                                </li>
                                <li>
                                    <b>С помощью платежных терминалов.</b>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p>Все подробности о получении и погашении онлайн-займов можно получить у наших менеджеров. Решайте
                            свои финансовые проблемы быстро - с
                            <b>Bzaim5</b>.
                            <a href="/form">Регистрируйтесь!</a>
                         <br>Лицензии организаций-партнеров: №651303552003006, №651303045003951, №2110177000478 </p>

                    </div> 
                </div>

            </div>
        </div>
    </div>
</section> 

<section class="conditions hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="text-center">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Информация о кредиторах с которыми мы сотрудничаем:</h3>
            </div>
            <div class="col-xs-4">
                <div class="white offers">
                    <a href="https://pxl.leads.su/click/864dd416696b8008a5875a0bbe82e865" target="_blank">
                        <p>
                            ООО МФО «СМСФИНАНС» № лицензии 2120177002022 Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13 Годовая процентная
                            ставка: 328,5%
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="white offers">
                    <a href="https://pxl.leads.su/click/0b7f24ce727aa36758c9775910a0b99c" target="_blank">
                        <p>
                            ЗАО «4финанс» № лицензии 1127746537764 Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13 Годовая процентная ставка:
                            328,5%
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="white offers">
                    <a href="https://pxl.leads.su/click/0d832392bf58a621067a6e41ac602eb3" target="_blank">
                        <p>
                            ООО «СрочноДеньги» № лицензии 2110552000304 Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж Годовая процентная
                            ставка: 360%
                        </p>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-4">
                <div class="white offers">
                    <a href="https://pxl.leads.su/click/3f83cc895f66b8b7ed915fc132408f20" target="_blank">
                        <p>
                            ООО «Домашние деньги» № лицензии 211017700000 Адрес: 115088, г. Москва, 2-ой Южнопортовый проезд, д. 33, стр. 1 Годовая процентная
                            ставка: 248,2%
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="white offers">
                    <a href="https://pxl.leads.su/click/30a6c51f9fb08e349bcbf9ee8caf0206" target="_blank">
                        <p>
                            ООО «Займер» № лицензии 651303532004088 Адрес:г. Кемерово, пр. Советский, д. 2/7 Годовая процентная ставка: 248,2%
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="white offers">
                    <a href="https://pxl.leads.su/click/2f1ea83749c8f0ea58239fc19b0a9f2d" target="_blank">
                        <p>
                            ООО «Парса Компани Групп» № лицензии 1097746179585 Адрес: 115201, г. Москва, Старокаширское ш., д. 2, корп. 2 Годовая процентная
                            ставка: 360%
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        traffic('bzaim5.ru', '0');
    });
</script>
<?php require 'footer.php'; ?>