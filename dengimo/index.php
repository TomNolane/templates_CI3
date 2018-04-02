<?php require 'header.php'; ?>
<div class="b">
    <section class="calc" id="calc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 hidden-xs">
                    <h2 class="h1">Моментальные займы онлайн</h2>
                </div>
                <form id="anketa" action="/form" method="post">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 hidden-xs">
                    <div class="form">
                        <h2>Выберите сумму и срок займа</h2>
                            <input type="hidden" id="period" name="period" value="21" />
                            <input type="hidden" id="period2" name="period2" value="20000" />
                            <input type="hidden" id="form_slrd" name="form_slrd" value="15" /> 
                            <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>"> 
                            <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?> 
                            <input type="hidden" class="sldr" id="sldr" name="sldr" value="15" />
                            <input type="hidden" class="percent" id="percent" name="percent" value="95" />
                            <div class="form-slider green">
                                <div class="pull-left">
                                    <input type="text" class="amount" name="amount" value="15" />
                                </div>
                                <div class="form-label-2 pull-right">
                                    <span class="current_amount">6 000</span>
                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="btn form-info">
                                    <div class="form-info-data sum">6780
                                        <i class="fa fa-rub" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-info-title">К возврату</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="btn form-info">
                                    <div class="form-info-data comm">780
                                        <i class="fa fa-rub" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-info-title">Комиссия</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="btn form-info">
                                    <div class="form-info-data d">От 61 до 100
                                        <br/> дней</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="btn form-info">
                                    <div class="form-info-data percent_rate">97
                                        <span>
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="form-info-title">Вероятность</div>
                                </div>
                            </div> 
                            <div class="col-md-12 col-sm-12 text-center">
                                <button type="submit" class="btn">Получить деньги</button>
                            </div> 
                    </div>
                </div>
                <div class="col-xs-12 visible-xs text-center">
                    <h2 class="h1" id="getmoney">Моментальные займы онлайн</h2>
                    <div class="form text-center">
                            <div class="form-slider green">
                                <input type="text" class="amount amount2" name="amount" value="6000" />
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-12 info">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="btn form-info">
                                        <span class="form-info-title">К возврату</span>
                                        <span class="form-info-data pull-right sum">6780</span>
                                    </div>
                                    <div class="btn form-info">
                                        <span class="form-info-title">Процентная ставка</span>
                                        <span class="form-info-data pull-right perc">1.3
                                            <span>%</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="btn form-info">
                                        <span class="form-info-title">Комиссия</span>
                                        <span class="form-info-data pull-right comm">780</span>
                                    </div>
                                    <div class="btn form-info">
                                        <span class="form-info-title">Срок</span>
                                        <span class="form-info-data pull-right d">От 61 до 100 дней</span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn">Получить деньги</button> 
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
    <div class="section-doc">
        <section class="about white hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center"><span class="index_special"><b>Dengimo</b></span> - моментальные займы онлайн</h2>
                        <p class="col_middle">Нужно срочно решить финансовые проблемы? Dengimo готов в этом помочь прямо сейчас. Просто зарегистрируйтесь на сайте, дождитесь одобрения заявки и получите деньги. В 97% случаев будет принято решение в вашу пользу. </p>
                        <p class="col_middle">Клиенты Dengimo могут не беспокоиться об отказе. Наш сервис не просто проверяет кредитную историю, он способен ее улучшить. В результате вы сможете взять займ на более выгодных условиях и всегда держать свои финансы под контролем.</p>
                        <p class="col_middle">Деньги быстро, просто и выгодно - это Dengimo. С нами можно забыть об экономических сложностях!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="algo white visible-xs">
            <div class="container">
                <h2 class="text-center">Быстрое получение денег</h2>
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <div class="algo-item">
                            <a href="/form">
                                <img src="/templates/dengimo/img/steps/1.png" alt="1.png">
                            </a>
                        </div>
                        Выберите сумму
                    </div>
                    <div class="col-xs-4 text-center">
                        <div class="algo-item">
                            <a href="/form">
                                <img src="/templates/dengimo/img/steps/2.png" alt="2.png">
                            </a>
                        </div>
                        Заполните анкету
                    </div>
                    <div class="col-xs-4 text-center">
                        <div class="algo-item">
                            <a href="/form">
                                <img src="/templates/dengimo/img/steps/3.png" alt="3.png">
                            </a>
                        </div>
                        Получите деньги
                    </div>
                </div>
            </div>
        </section>
        <section class="conditions hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Как оформить займ?</h2><br>
                    </div>
                    <div class="col-md-12 text-center col_black"><p><b>Чтобы получить деньги, нужно выполнить 4 элементарных шага:</b></p></div>
                    <div class="col-xs-3">
                        <div class="white"> 
                            <h2>1)<a href="/form" target="_blank"> зарегистрироваться на этом сайте;</a></h2> 
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="white"> 
                            <h2>2)<a href="/form" target="_blank"> заполнить все поля небольшой анкеты;</a></h2> 
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="white"> 
                            <h2>3)<a href="/form" target="_blank"> подождать, пока будет обработана заявка;</a></h2> 
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="white"> 
                            <h2>4)<a href="/form" target="_blank"> получить деньги!</a></h2> 
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                    <p class="col_middle">Все происходит практически мгновенно. В большинстве случаев уже через 15 минут деньги вам переведут.</p>

                    <p class="col_middle">С нашим сервисом вы получите займ именно тогда, когда испытываете в нем острую необходимость. Забудьте об отсрочках, бумажной волоките и длительных проверках. Мы предлагаем быстрое решение вопросов на самых выгодных условиях.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="conditions hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Особенности получения денег</h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="white indent">
                            <p class="col_middle">Dengimo осуществляет посреднические услуги между кредитором и заемщиком. С помощью нашего сервиса вы выбираете условия кредитования и взаимодействуете непосредственно с финансовой организацией.
                            <br>Мы не принимаем решение о выдаче денег, а только перенаправляем клиента к выбранному кредитору.
                            <br><span class="col_black"><b>С Dengimo надежнее,</b></span> потому что мы работаем с проверенными лицензированными МФО.
                            <br><span class="col_black"><b>С Dengimo выгоднее,</b></span> потому что у нас большой выбор кредиторов 35 организаций, которые пользуются наибольшей популярностью у заемщиков.
                            <br><span class="col_black"><b>С Dengimo быстрее,</b></span> потому что вы подаете заявку через интернет и получаете перевод на карточку или электронный кошелек.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="conditions hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Условия кредитования:</h2>
                    </div>
                    <div class="col-xs-8 col-xs-offset-2">
                        <div class="white indent">
                             <ul class="col_middle font07">
                                 <li>Большой диапазон сумм займов - от 1000 рублей до 10 000 рублей.</li>
                                 <li>Гибкость ставки - ежедневная от 0,08% до 0,98%, средняя месячная - 4,5%, годовая - от 30% до 360%.</li>
                                 <li>Удобные сроки погашения - от 61 до 365 дней.</li>
                                 <li>Первый заем - до 10 000 рублей, беспроцентный в случае своевременной выплаты.</li>
                                 <li>При просрочке начисляется штраф от 0,03%.</li>
                                 <li>Данные о заемщиках, нарушивших условия договора, передаются в БКИ либо реестр должников.</li>
                                 <li>Долгом неплательщика занимается коллекторское агентство.</li>
                             </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <h3 class="col_black">Берите займы с удобством и выгодой для себя. <a href="/form">Регистрируйтесь на Dengimo!</a></h3>
                        <p  class="col_middle">Лицензии организаций-партнеров: №651303552003006, №651303045003951, №2110177000478 </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="conditions hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Информация о кредиторах с которыми мы сотрудничаем:</h2>
                    </div>
                    <div class="col-xs-4">
                        <div class="white offers">
                            <!-- <a href="https://pxl.leads.su/click/864dd416696b8008a5875a0bbe82e865" target="_blank"> -->
                                <p>
                                    ООО МФО «СМСФИНАНС» № лицензии 2120177002022 Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13 Годовая процентная
                                    ставка: 328,5%
                                </p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="white offers">
                            <!-- <a href="https://pxl.leads.su/click/0b7f24ce727aa36758c9775910a0b99c" target="_blank"> -->
                                <p>
                                    ЗАО «4финанс» № лицензии 1127746537764 Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13 Годовая процентная ставка:
                                    328,5%
                                </p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="white offers">
                            <!-- <a href="https://pxl.leads.su/click/0d832392bf58a621067a6e41ac602eb3" target="_blank"> -->
                                <p>
                                    ООО «СрочноДеньги» № лицензии 2110552000304 Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж Годовая процентная
                                    ставка: 360%
                                </p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-4">
                        <div class="white offers">
                            <!-- <a href="https://pxl.leads.su/click/3f83cc895f66b8b7ed915fc132408f20" target="_blank"> -->
                                <p>
                                    ООО «Домашние деньги» № лицензии 211017700000 Адрес: 115088, г. Москва, 2-ой Южнопортовый проезд, д. 33, стр. 1 Годовая процентная
                                    ставка: 248,2%
                                </p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="white offers">
                            <!-- <a href="https://pxl.leads.su/click/30a6c51f9fb08e349bcbf9ee8caf0206" target="_blank"> -->
                                <p>
                                    ООО «Займер» № лицензии 651303532004088 Адрес:г. Кемерово, пр. Советский, д. 2/7 Годовая процентная ставка: 248,2%
                                </p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="white offers">
                            <!-- <a href="https://pxl.leads.su/click/2f1ea83749c8f0ea58239fc19b0a9f2d" target="_blank"> -->
                                <p>
                                    ООО «Парса Компани Групп» № лицензии 1097746179585 Адрес: 115201, г. Москва, Старокаширское ш., д. 2, корп. 2 Годовая процентная
                                    ставка: 360%
                                </p>
                            <!-- </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> 
</div> 
<?php require 'footer.php'; ?>