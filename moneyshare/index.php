<?php 
    require 'header.php';
    $this->load->model('offers/offers_model', 'offers');
    $data = $this->offers->all(12);
?>
<main>
    <div class="ex-offers-section">
        <div class="container">
            <h2>MONEYSHARE - БЫСТРЫЕ ОНЛАЙН-ЗАЙМЫ НА КАРТУ В РОССИИ</h2>
            <p>РЕКОМЕНДУЕМ ЗАПОЛНИТЬ МАКСИМАЛЬНОЕ КОЛИЧЕСТВО ЗАЯВОК, ТЕМ САМЫМ ВЫ УВЕЛИЧИТЕ СВОИ ШАНСЫ НА ПОЛУЧЕНИЕ КРЕДИТА ДО 100%</p>
            <div class="row">
                <?php
                    foreach($data as $item){
                        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                        $item['link'] = str_replace("#site", $domen, $item['link']);
                        $item['link'] = str_replace("aff_sub1=bzaim5.ru", "aff_sub1=moneyshare.ru", $item['link']);
                        echo '
                                <div class="col-md-3 col-sm-6">
                                    <div class="ex-offers-block ex-orange-border">
                                        <div class="ex-off-img">
                                            <img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['img'].'.png">
                                        </div>
                                        <div class="ex-off-body">
                                            <figure>
                                                '.$item['subtitle'].'
                                            </figure>
                                            <ul class="ex-off-content">
                                                <li><i class="money-bag"></i>до '.$item['amount'].' руб.</li>
                                                <li><i class="percent"></i>от '.$item['percent'].' % в день</li>
                                                <li><i class="money"></i>от '.$item['min_year'].' до '.$item['max_year'].' лет</li>
                                            </ul>
                                            <div class="ex-action">
                                                <a href="'.$item['link'].'" target="_blank">
                                                    <button class="ex-main-btn">Получить деньги</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        ';
                    }
                ?>
            </div>
            <div class="ex-advertising">
                <p style="text-align: center;">Подпишись на рассылку*</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row ex-advertising-form">
                            <div class="col-md-6">
                                <input type="email" class="form-control index_specail2 suggestions-input" id="feedback-email2" title="Email" placeholder="Введите ваш email"
                                    required="" autocomplete="off" style="box-sizing: border-box;">
                            </div>
                            <div class="hidden">
                                <input type="text" id="feedback-name2" placeholder="Имя" title="Имя" value="хочу подписаться" required>
                            </div>
                            <div class="hidden">
                                <input type="text" class="form-control" id="feedback-phone2" placeholder="Телефон" title="Телефон" value="+7777777777" required>
                            </div>
                            <div class="hidden">
                                <textarea class="form-control" id="feedback-comment2" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required>Хочу подписаться на рассылку</textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="ex-action">
                                    <button class="ex-main-btn" id="feedback-send2">Подписаться</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="ex-email ex-int">*На указанную электронную почту вам будут приходить оповещения с лучшими условиями кредитования. Вы не пропустите
                    интересные и выгодные предложения!</p>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- moneyshare.ru -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4970738258373085"
                        data-ad-slot="5821870539"
                        data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

            </div>
        </div>
    </div>
    <div class="ex-article">
        <div class="container">
            <h2>Общие условия и требования к заемщику</h2>
            <div class="ex-art-block">
                <h3>Требования к заемщику:</h3>
                <p>Возраст от 18 до 75 лет; Постоянная прописка в любом регионе РФ; Любая кредитная история</p>
            </div>
            <div class="ex-art-block">
                <h3>Условия получения:</h3>
                <p>Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения; Процентная ставка по
                    займам от 30 до 360% годовых, по потребительским кредитам и кредитным картам - от 17 до 31% годовых.
                    В случае нарушения сроков, размер неустойки составляет 0,10% от суммы просрочки в день, но не более 10%
                    от суммы кредита; В случае длительной задержки выплаты информация будет передана в БКИ</p>
            </div>
            <div class="ex-art-block">
                <h3>Последствия невыплаты заёмных средств:</h3>
                <p>В случае невозвращения в условленный срок суммы кредита или суммы процентов за пользование заёмными средствами
                    кредитор вынуждено начислит штраф за просрочку платежа. Большинство кредиторов идут на уступки и дают
                    3 дополнительных рабочих дня для оплаты. Они предусмотрены на случай, к примеру, если банковский перевод
                    занял больше времени, чем обычно. Однако, в случае неполучения от Вас какой-либо реакции в течение продолжительного
                    времени, будет начислен штраф за просрочку срока погашения размером в среднем 0,10% от первоначальной
                    суммы для займов, 0,03% от суммы задолженности в среднем для потребительских кредитов и кредитных карт.</p>
                <p>При несоблюдении Вами условий по погашению кредитов и займов, данные о Вас могут быть переданы в реестр должников,
                    а задолженность - коллекторскому агентству для взыскания долга. О всех приближающихся сроках платежа
                    кредитор своевременно информирует Вас по СМС или электронной почте. Рекомендуем Вам вносить платеж в
                    день получения данных напоминаний. Погашая задолженность в срок, Вы формируете хорошую кредитную историю,
                    что повышает Ваши шансы в дальнейшем получить кредит на более выгодных условиях. Предложение не является
                    оффертой. Конечные условия уточняйте при прямом общении с кредиторами.</p>
            </div>
            <div class="ex-art-block">
                <h3>Информация о полной стоимости займа и пример расчета</h3>
                <p>Займ в размере 10 000 рублей выдан на 61 дней с пролонгацией. В году 365 дней, по договору ставка составляет
                    1% в день (годовая ставка, соответственно будет равна 365%). Сумма процентов за год составляет 36 500
                    руб. (10 000*365% = 36 500), за 1 день 100 руб. (36 500/365 = 100), за 61 дней соответственно 6 100 руб.
                    (100*61 = 6100). Общая сумма платежа составляет 16 100 руб. (10 000 руб. основной долг + 6 100 руб. проценты).</p>
            </div>
            <div class="ex-art-block">
                <h3>ПСК (полная стоимость кредита) в процентах составляет 365% годовых.</h3>
            </div>
            <!-- moneyshare.ru -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-4970738258373085"
                data-ad-slot="5821870539"
                data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    <div class="ex-card">
        <div class="container">
            <div class="ex-advertising">
                <p style="text-align: center;">Подпишись на рассылку*</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row ex-advertising-form">
                            <div class="col-md-6">
                                <input type="email" class="form-control index_specail2 suggestions-input" id="feedback-email3" title="Email" placeholder="Введите ваш email"
                                    required="" autocomplete="off" style="box-sizing: border-box;">
                            </div>
                            <div class="hidden">
                                <input type="text" id="feedback-name2" placeholder="Имя" title="Имя" value="хочу подписаться" required>
                            </div>
                            <div class="hidden">
                                <input type="text" class="form-control" id="feedback-phone2" placeholder="Телефон" title="Телефон" value="+7777777777" required>
                            </div>
                            <div class="hidden">
                                <textarea class="form-control" id="feedback-comment2" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required>Хочу подписаться на рассылку</textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="ex-action">
                                    <button class="ex-main-btn" id="feedback-send3">Подписаться</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="ex-int">*На указанную электронную почту вам будут приходить оповещения с лучшими условиями кредитования. Вы не пропустите
                    интересные и выгодные предложения!</p>
            </div>
            <h2>Информация о кредиторах, представленных на сайте.</h2>
            <h3></h3>
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>СМСФИНАНС (ООО МФО «СМСФИНАНС»)</h4>
                        <p>
                            Поддержка: 8 (800) 333-27-57, № лицензии 2120177002022
                            <br> Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13
                            <br> Максимальная годовая процентная ставка: 328,5%
                            <br> Срок с продлением: от 65 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>VIVUS (ЗАО «4ФИНАНС»)</h4>
                        <p>
                            Поддержка: 8 (499) 649-39-46, № лицензии 1127746537764
                            <br> Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13
                            <br> Максимальная годовая процентная ставка: 328,5%
                            <br> Срок с продлением: от 65 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>СРОЧНО ДЕНЬГИ (ООО «СРОЧНОДЕНЬГИ»)</h4>
                        <p>
                            Поддержка: 8 (800) 100-13-63, № лицензии 2110552000304
                            <br> Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж
                            <br> Максимальная годовая процентная ставка: 730%
                            <br> Срок с продлением: от 90 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>GREENMONEY (ООО МФО «ГРИНМАНИ»)</h4>
                        <p>
                            Поддержка: 8 (800) 775-78-80, № лицензии 2120742002054
                            <br> Адрес: 650000, г. Кемерово, улица Орджоникидзе, 5-28
                            <br> Максимальная годовая процентная ставка: 730%
                            <br> Срок с продлением: от 65 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>LIME</h4>
                        <p>
                            ООО «Лайм-Займ»
                            <br> Поддержка: 8 (800) 700-01-97, № лицензии 651303045004102
                            <br> Адрес: г. Москва, ул. Бирюлевская, д. 24, корп. 1, пом. 3
                            <br> Максимальная годовая процентная ставка: 730%
                            <br> Срок с продлением: от 90 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>ЕКАПУСТА</h4>
                        <p>
                            ООО «Русинтерфинанс»
                            <br> Поддержка: +7 (495) 215-55-67, № лицензии 2120754001243
                            <br> Адрес: 630058, г. Новосибирск, ул. Русская, д. 39
                            <br> Максимальная годовая процентная ставка: 620,5%
                            <br> Срок с продлением: от 90 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>КREDITO24.RU</h4>
                        <p>
                            OOO «Займо»
                            <br> Поддержка: +7 (495) 225-90-63, № лицензии 651303552003006
                            <br> Адрес: 115114, г. Москва, ул. Летниковская, дом 10, стр. 5
                            <br> Максимальная Максимальная годовая процентная ставка: 365%
                            <br> Срок с продлением: от 90 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>ТУРБОЗАЙМ</h4>
                        <p>
                            ООО «Августфинанс»
                            <br> Поддержка: 8 (800) 77-00-200, № лицензии 651303045003951
                            <br> Адрес: 129110, г. Москва, ул. Гиляровского, д. 65, стр.1
                            <br> Максимальная годовая процентная ставка: 803%
                            <br> Срок с продлением: от 65 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>ВКАРМАНЕ</h4>
                        <p>
                            ООО Микрофинансовая организация «Джой Мани»
                            <br> Поддержка: +7 (495) 009-35-65, № лицензии 1145476064711
                            <br> Адрес: г. Новосибирск, ул. Дмитрия Шамшурина д. 1, оф. 1
                            <br> Максимальная годовая процентная ставка: 365%
                            <br> Срок с продлением: от 90 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>МИГ КРЕДИТ</h4>
                        <p>
                            ООО «МигКредит»
                            <br> Поддержка: 8 (800) 100-34-91, № лицензии 2110177000037
                            <br> Адрес: 127018, г. Москва, Сущевский Вал, д. 5, стр. 3
                            <br> Максимальная годовая процентная ставка: 211,7%
                            <br> Срок с продлением: от 365 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>EZAEM.RU</h4>
                        <p>
                            ООО «Е заем»
                            <br> Поддержка: 8 (800) 775-77-75, № лицензии 651303045003161
                            <br> Адрес: 123100, г. Москва, Пресненская набережная, дом 12, пом. 4.
                            <br> Максимальная годовая процентная ставка: 700,8%
                            <br> Срок с продлением: от 65 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>ДЕНЬГА</h4>
                        <p>
                            ООО «УК Деньга»
                            <br> Поддержка: 8 (800) 700-08-08, № лицензии 1137847367382
                            <br> Адрес: 199178, Санкт-Петербург, 15-я линия В. О., д. 12, литер. А, комн. 24
                            <br> Максимальная годовая процентная ставка: 547,5%
                            <br> Срок с продлением: от 365 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>ДОМАШНИЕ ДЕНЬГИ</h4>
                        <p>
                            ООО «Домашние деньги»
                            <br> Поддержка: 8 (800) 555-72-42, № лицензии 211017700000
                            <br> Адрес: 115088, г. Москва, 2-ой Южнопортовый проезд, д. 33, стр. 1
                            <br> Максимальная годовая процентная ставка: 248,2%
                            <br> Срок с продлением: от 365 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>ЗАЙМЕР</h4>
                        <p>
                            ООО «Займер»
                            <br> Поддержка: 8 (800) 707-02-47, № лицензии 651303532004088
                            <br> Адрес:г. Кемерово, пр. Советский, д. 2/7
                            <br> Максимальная годовая процентная ставка: 248,2%
                            <br> Срок с продлением: от 65 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>ЧЕСТНОЕ СЛОВО</h4>
                        <p>
                            ООО «ЧЕСТНОЕ СЛОВО»
                            <br> Поддержка: 8 (499) 670-07-60, № лицензии 1137746046943
                            <br> Адрес: 127018, г. Москва, ул. Полковая, д. 3, стр. 4
                            <br> Максимальная годовая процентная ставка: 730%
                            <br> Срок с продлением: от 65 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>БЫСТРОДЕНЬГИ</h4>
                        <p>
                            ООО «Магазин Малого Кредитования»
                            <br> Поддержка: 8 (800) 700-43-44, № лицензии 2110573000002
                            <br> Адрес: 107996, г. Москва, ул. Гиляровского, д. 65, стр. 1
                            <br> Максимальная годовая процентная ставка: 730%
                            <br> Срок с продлением: от 365 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>PAY P.S.</h4>
                        <p>
                            ООО «Займ Онлайн»
                            <br> Поддержка: 8 (800) 555-24-35, № лицензии 1127746428171
                            <br> Адрес: 123001, г. Москва, ул. Спиридоновка, 27/24
                            <br> Максимальная годовая процентная ставка: 730%
                            <br> Срок с продлением: от 65 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-card-block ex-green-border">
                        <h4>MONEYMAN</h4>
                        <p>
                            ООО «Мани Мен»
                            <br> Поддержка: +7 (499) 681-83-83, № лицензии 1117746442670
                            <br> Адрес: 121087, г. Москва, ул. Барклая, д. 6, стр. 9, офис 1
                            <br> Максимальная годовая процентная ставка: 273,75%
                            <br> Срок с продлением: от 365 дней
                            <br> Максимальный срок займа неограничен*
                        </p>
                    </div>
                </div>
            </div>
            <div class="ex-advertising">
                <p style="text-align: center;">Подпишись на рассылку*</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row ex-advertising-form">
                            <div class="col-md-6">
                                <input type="email" class="form-control index_specail2 suggestions-input" id="feedback-email4" title="Email" placeholder="Введите ваш email"
                                    required="" autocomplete="off" style="box-sizing: border-box;">
                            </div>
                            <div class="hidden">
                                <input type="text" id="feedback-name2" placeholder="Имя" title="Имя" value="хочу подписаться" required>
                            </div>
                            <div class="hidden">
                                <input type="text" class="form-control" id="feedback-phone2" placeholder="Телефон" title="Телефон" value="+7777777777" required>
                            </div>
                            <div class="hidden">
                                <textarea class="form-control" id="feedback-comment2" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required>Хочу подписаться на рассылку</textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="ex-action">
                                    <button class="ex-main-btn" id="feedback-send4">Подписаться</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="ex-int">*На указанную электронную почту вам будут приходить оповещения с лучшими условиями кредитования. Вы не пропустите
                    интересные и выгодные предложения!</p>
            </div>
        </div>
    </div>
</main>
<div id="ex-up-button"></div> 
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 811797469;
var google_conversion_label = "XcaKCOHhlX8Q3ZeMgwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/811797469/?label=XcaKCOHhlX8Q3ZeMgwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php require 'footer.php';  ?>