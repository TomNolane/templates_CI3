<?php require 'header.php'; ?>
    <div class="container">
        <section class="background">
            <div class="content-wrapper">
                <p class="content-title sign__word">Моментальные <br class="hidden-md hidden-lg sign__word">займы</p>
                <p class="content-subtitle sign__word">онлайн за 15 минут</p>
                <div class="row">
                    <div class="col-md-1 col-xs-1"></div>
                    <center>
                    <form  action="/form" method="post">
                    <div class="col-md-10 col-xs-10">
                        <input type="text" id="ionRangeSlider" class="ionRangeSlider" value="20000" />
                        <input type="hidden" name="amount" class="amount" value="20000" />
                        <input type="hidden" id="period" name="period" value="21" />
                        <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
                        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
                        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
                        <ul class="list-inline ul_index">
                            <li>
                                <p class="sign__word__white font_spec">Размер займа
                                    <br>
                                    <span id="amount">20 000</span>
                                </p>
                            </li>
                            <li>
                                <p class="sign__word__white font_spec">Комиссия
                                    <br>
                                    <span id="comm">3900</span>
                                </p>
                            </li>
                            <li>
                                <p class="sign__word__white font_spec">Погасить
                                    <br>
                                    <span id="total">23 900</span>
                                </p>
                            </li>
                            <li>
                                <p class="sign__word__white font_spec"><span class="hidden-xs hidden-sm">Срок займа
                                    <br></span>
                                    <span id="period2">ОТ 61 ДО 130 ДНЕЙ</span>
                                </p>
                            </li>
                            <li>
                                <p class="sign__word__white font_spec">Вероятность одобрения
                                    <br>
                                    <span id="percent">97</span>%
                                </p>
                            </li>
                        </ul>
                        <button class="btn btn-xl btn-success special_index ">Получить деньги</button>
                    </div>
                    </form>
                    </center>
                    <div class="col-md-1 col-xs-1"></div>
                </div> 
            
            
            <footer class="hidden">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-5">
                            <div>
                            <a href="/"><img src="/templates/bzaim2/assets/img/logo-f.png" align="" alt="logo" class="logo img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-xs-7 spec_footer4">
                            <p>Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г.
                                Санкт-Петербург, ул. Осипенко, 12, оф 201
                                <a href="mailto:support@bzaim5.ru" target="_blank">
                                | support@bzaim5.ru</a>.</p>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
        </section>

        <section class="background">
            <div class="content-wrapper wrapper2">
                <div style="visibility: hidden" class="special hidden-md hidden-lg"></div>
                <p class="content-title2 sign__word__white hidden-xs hidden-sm">Мгновенный онлайн займ Bzaim5</p>
                <p class="content-title3 sign__word__white hidden-md hidden-lg">Мгновенный онлайн займ Bzaim5</p>
                <p class="content2 text-left">По статистике 2017 года 75% россиян недовольны своей зарплатой, а это значит, что они постоянно сталкиваются с проблемой нехватки денег. Форс-мажорные обстоятельства и необходимость в срочных покупках выбивают из колеи. Где быстро взять деньги? Банки и знакомые могут отказать. У родственников может не набраться достаточной суммы. Bzaim5 предлагает идеальный выход из ситуации - мгновенный онлайн-займ. Для того чтобы получить финансовую помощь, нужно просто зарегистрироваться на сайте. После этого заполните анкету и отправьте заявку на утверждение. Уже через 15 минут деньги будут на вашем счету.</p>
                <p class="content-title3 sign__word__white hidden-xs hidden-sm"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Мы максимально упростили процедуру получения займа:</p>
                <p class="content2 text-left hidden-xs hidden-sm">
                    <span class="row">
                        <span class="col-xs-3">
                            1) не нужно оформлять десятки справок
                        </span>
                        <span class="col-xs-3">
                            2) не придется ждать длительных и тщательных проверок вашей личности
                        </span>
                        <span class="col-xs-3">
                            3) не нужно подыскивать правильные слова для близких, у которых собрались одолжить деньги
                        </span>
                        <span class="col-xs-3">
                            4) можно быть уверенным, что займ одобрят - решение по выдаче микрокредита в 97% положительных
                        </span>
                    </span>
                    <span class="row"> 
                        <span class="col-xs-12">Сервис Bzaim5 экономит ваше время и энергию. Заявку можно подать из любой точки страны. Главное условие - наличие интернета. 
                            С нашей помощью вы легко улучшите кредитную историю, если до этого возникали какие-то проблемы. Bzaim5 - современное решение финансовых затруднений.
                        </span> 
                    </span>
                </p>
                <p class="content-title3 sign__word__white"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Особенности сервиса</p>
                <p class="content2 text-left">
                    Bzaim5 - это не отдельная микрофинансовая организация, а посредник между заемщиком и кредитором. Мы сотрудничаем с 35 лицензированными МФО, так что гарантируем надежность компаний, с которыми будут иметь дело наши клиенты. 
                    Вы можете самостоятельно выбрать наиболее выгодные условия кредитования и мгновенно получить ответ на заявку. 
                    Высокую скорость обработки данных обеспечивает уникальная технология скоринга. Проверка информации осуществляется всего 15 минут. После этого вы уже можете получить желаемый перевод.
                </p>
                <p class="content-title3 sign__word__white"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Условия займа</p>
                <p class="content2 text-left">
                <span class="row">
                    <span class="col-xs-12">
                        1) Сумма первого займа не более 10 000 рублей, кредит можно получить со ставкой 0%, если он будет погашен вовремя.
                    </span>
                    <span class="col-xs-12">
                        2) Размер кредита от 1000 до 100 000 рублей.
                    </span>
                    <span class="col-xs-12">
                        3) Кредит выдается на период от 61 дня до года.
                    </span>
                    <span class="col-xs-12">
                        4) Процент начисляется каждый день, ставка составляет от 0,08% до 0,98%. В месяц в среднем выходит 4,5%, в год - от 30% до 360%.
                    </span>
                    <span class="col-xs-12">
                        5) За несоблюдение условий договора начисляется пеня, минимальный размер которой 0,03%, средний - 0,10% от начальной суммы займа.
                    </span>
                </span>
                </p>
            </div> 
        </section>
        <section class="background">
            <div class="content-wrapper content-wrapper3">
            <div class="row">
            <div style="visibility: hidden" class="special2 hidden-md hidden-lg"></div>
                <div class="col-xs-6">
                    <p class="content-title3 sign__word__white"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Что нужно для получения займа?</p>
                    <p class="content2 text-left">
                    <span class="row">
                        <span class="col-xs-12">1) Иметь доступ к интернету</span>
                        <span class="col-xs-12">2) Паспорт гражданина Российской Федерации</span>
                        <span class="col-xs-12">3) Быть возрастом от 18 до 70 лет</span>
                    </span>
                    <span class="hidden-xs hidden-sm"> &nbsp;&nbsp;&nbsp;&nbsp;Вы можете получить деньги даже с плохой кредитной историей. Среди клиентов сервиса Bzaim5 есть и студенты, и пенсионеры, и простые рабочие, и руководители крупных предприятий. Ваш социальный статус не имеет значения. </span>
                    </p>
                </div>
                <div class="col-xs-6">
                <p class="content-title3 sign__word__white"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Как можно погасить займ?</p>
                    <p class="content2 text-left">
                    <span class="row">
                        <span class="col-xs-12">&bull; Банковским переводом</span>
                        <span class="col-xs-12">&bull; Электронным платежом;</span>
                        <span class="col-xs-12">&bull; С помощью платежных терминалов</span>
                    </span>
                    <span class="hidden-xs hidden-sm">&nbsp;&nbsp;&nbsp;&nbsp;Все подробности о получении и погашении онлайн-займов можно получить у наших менеджеров. Решайте свои финансовые проблемы быстро - с Bzaim5. Регистрируйтесь! 
                        <br>Лицензии организаций-партнеров: №651303552003006, №651303045003951, №2110177000478</span>
                    </p>
                </div>
            </div>

            <p class="content-title3 sign__word__white">Информация о кредиторах с которыми мы сотрудничаем:</p>
            <div class="row">
            <p class="content4 text-left hidden-md hidden-lg">
                <span class="row">
                    <span class="col-xs-4">ООО МФО «СМСФИНАНС» № лицензии 2120177002022 Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13 Годовая процентная ставка: 328,5%</span>
                    <span class="col-xs-4">ЗАО «4финанс» № лицензии 1127746537764 Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13 Годовая процентная ставка: 328,5%</span>
                    <span class="col-xs-4">ООО «СрочноДеньги» № лицензии 2110552000304 Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж Годовая процентная ставка: 360%</span>
                </span>
                <span class="row">
                    <span class="col-xs-4">ООО «Домашние деньги» № лицензии 211017700000 Адрес: 115088, г. Москва, 2-ой Южнопортовый проезд, д. 33, стр. 1 Годовая процентная ставка: 248,2%</span>
                    <span class="col-xs-4">ООО «Займер» № лицензии 651303532004088 Адрес:г. Кемерово, пр. Советский, д. 2/7 Годовая процентная ставка: 248,2%</span>
                    <span class="col-xs-4">ООО «Парса Компани Групп» № лицензии 1097746179585 Адрес: 115201, г. Москва, Старокаширское ш., д. 2, корп. 2 Годовая процентная ставка: 360%</span>
                </span>
            </p>
            <p class="content2 text-left hidden-xs hidden-sm">
                <span class="row">
                    <span class="col-xs-4">ООО МФО «СМСФИНАНС» № лицензии 2120177002022 Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13 Годовая процентная ставка: 328,5%</span>
                    <span class="col-xs-4">ЗАО «4финанс» № лицензии 1127746537764 Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13 Годовая процентная ставка: 328,5%</span>
                    <span class="col-xs-4">ООО «СрочноДеньги» № лицензии 2110552000304 Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж Годовая процентная ставка: 360%</span>
                </span>
                <span class="row">
                    <span class="col-xs-4">ООО «Домашние деньги» № лицензии 211017700000 Адрес: 115088, г. Москва, 2-ой Южнопортовый проезд, д. 33, стр. 1 Годовая процентная ставка: 248,2%</span>
                    <span class="col-xs-4">ООО «Займер» № лицензии 651303532004088 Адрес:г. Кемерово, пр. Советский, д. 2/7 Годовая процентная ставка: 248,2%</span>
                    <span class="col-xs-4">ООО «Парса Компани Групп» № лицензии 1097746179585 Адрес: 115201, г. Москва, Старокаширское ш., д. 2, корп. 2 Годовая процентная ставка: 360%</span>
                </span>
            </p>
            </div>
            </div> 
            <footer>
                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <div>
                               <a href="/"><img src="/templates/bzaim2/assets/img/logo-f.png" align="" alt="logo" class="logo"></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 spec_footer4">
                            <p>Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г.
                                Санкт-Петербург, ул. Осипенко, 12, оф 201
                                <a href="mailto:support@bzaim5.ru" target="_blank">
                                | support@bzaim5.ru</a><span class="hidden-xs hidden-sm"> | +7(495) 006 19 61</span></p>
                        </div>
                        <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                            <div class="row">
                                <div class="col-sm-12 great-support-box wow fadeInLeft">
                                    <div class="great-support-box-text great-support-box-text-left">
                                        <p class="footer_spec99">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от
                                            61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день,
                                            а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок
                                            пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200
                                            руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по
                                            ставке 0% в случае своевременного погашения.
                                            <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
<?php require 'footer.php';?>