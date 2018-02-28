<?php require 'header.php'; ?>
    <form id="anketa" action="/form" method="post">
        <input type="hidden" id="amount" name="amount" value="20000" />
        <input type="hidden" id="period" name="period" value="21" />
        <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <div class="container">
        <div class="ex-main-section">
            <h1>Мгновенные онлайн займы с любой кредитной историей</h1>
            <p class="ex-text-hd">Срочные деньги без отказа. Подбор займов бесплатно!</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row justify-content-md-end">
                        <div class="col-lg-10 ">
                            <div class="ex-calc-block">
                                <div class="row justify-content-end">
                                    <div class="col-xl-6  ">
                                        <div class="ex-info-block">
                                            <div class="ex-crumbs"><span
                                                    class="ex-unique">Комиссия:</span>
                                                <span class="ex-Commission ex-result-style"></span>
                                            </div>
                                            <div class="ex-crumbs">
                                                <span class="ex-unique">К возврату:</span>
                                                <span class="ex-total ex-result-style"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ex-wrapper">
                                    <div class="ex-values">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="ex-slider-block ">
                                                    <span>Сумма займа</span>
                                                    <p class="ex-slider-val"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ex-slider-block">
                                                    <span>Срок займа</span>
                                                    <p class="ex-time"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ex-range-slider ">
                                        <input id="rangeSlider" name="rangeSlider"/>
                                        <span class="ex-small-cost ex-left">7 000 </span>
                                        <span class="ex-small-cost ex-right">150 000 </span>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-7">
                                        <div class="ex-action">
                                            <button type="submit" class="ex-main-btn">Получить деньги</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 ">
                    <div class="ex-for-img ex-count-3 d-none d-lg-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-why-zaim">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="ex-icon-block d-flex align-items-center justify-content-center">
                                <img src="/templates/zaimnowsu/assets/img/icons/1.png" alt="1.png">
                            </div>
                            <h3>0 тенге<br>
                                за подбор займов</h3>
                            <p>Отсутствие комиссии
                                за поиск выгодных позиций.
                                Ваша экономия – до 5040 тенге.</p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ex-icon-block d-flex align-items-center justify-content-center">
                                <img src="/templates/zaimnowsu/assets/img/icons/2.png" alt="2.png">
                            </div>
                            <h3>7 минут<br>
                                на одобрение вашей заявки</h3>
                            <p>Круглосуточное и почти мгновенное одобрение позволит получить займ срочно и не обращаясь
                                в банк.</p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ex-icon-block d-flex align-items-center justify-content-center">
                                <img src="/templates/zaimnowsu/assets/img/icons/3.png" alt="3.png">
                            </div>
                            <h3>5 надёжных вариантов<br>
                                получения денег</h3>
                            <p>Даже для тех, у кого нет карты. Выбирайте сами: карта Maestro/Visa, счёт в банке,
                                CONTACT, WebMoney или Яндекс.Деньги.</p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ex-icon-block d-flex align-items-center justify-content-center">
                                <img src="/templates/zaimnowsu/assets/img/icons/4.png" alt="4.png">
                            </div>
                            <h3>1 документ<br>
                                для оформления займа</h3>
                            <p>Вам нужен лишь паспорт.
                                Мы не просим справки
                                и подтверждение доходов.</p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ex-icon-block d-flex align-items-center justify-content-center">
                                <img src="/templates/zaimnowsu/assets/img/icons/5.png" alt="5.png">
                            </div>
                            <h3>100%-ая приватность</h3>
                            <p>Европейское качество передачи
                                и защиты личных данных.</p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ex-icon-block d-flex align-items-center justify-content-center">
                                <img src="/templates/zaimnowsu/assets/img/icons/6.png" alt="6.png">
                            </div>
                            <h3>Одобрение<br>
                                с любой кредитной историей</h3>
                            <p>Ваше кредитное прошлое не имеет значения. Получите займ без отказа
                                и залога.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="ex-special-offer">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-4">
                    <p>Специальное предложение
                        10 000 /тенге*</p>
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <button type="submit" class="ex-main-btn">Получить деньги</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img src="/templates/zaimnowsu/assets/img/icons/0.png" alt="0.png">
                    <span>*в случае своевременного погашения </span>
                </div>
            </div>
        </div>
        <div class="ex-info-zaim">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="ex-info-zaim-block">
                    <a href="/best">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Что лучше взять: кредит или займ?</h3>
                                <p>Что удобнее и оперативнее: кредит или займ? Это главный вопрос, когда требуются
                                    срочные деньги на разрешение непредвиденной ситуации.
                                    Для получения кредита необходимо пойти в банк и заключить кредитный договор, а
                                    возможно и предварительно пройти проверки и собрать необходимые справки. Конечно,
                                    кредит выигрывает по сравнению с онлайн займом, если необходима заметно большая
                                    сумма денег.</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="ex-info-image">
                                    <img src="/templates/zaimnowsu/assets/img/info1.png" alt="info1.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="ex-info-zaim-block">
                    <a href="/specials">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Особенности деятельности микрофинансовых компаний</h3>
                                <p>В чём особенность работы микрофинансовых организаций, предоставляющих срочные займы
                                    населению? Данные учреждения плотно взаимодействуют и с физическими, и с
                                    юридическими лицами. Последние вправе инвестировать в МФО любую денежную сумму. А
                                    вот физические лица ограничены: они могут открыть свой счёт в описываемых
                                    организациях на сумму с минимальным лимитом 1,5 млн. руб.
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="ex-info-image">
                                    <img src="/templates/zaimnowsu/assets/img/info2.png" alt="info2.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="ex-info-zaim-block">
                    <a href="/credit-history">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Кредитная история и её особенности</h3>
                                <p>Вне всяких сомнений, кредитная история – это наиважнейший параметр заемщика для
                                    банковских учреждений и микрофинансовых компаний. На основе этого фактора можно
                                    проанализировать надёжность и платёжеспособность клиента.</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="ex-info-image">
                                    <img src="/templates/zaimnowsu/assets/img/info3.png" alt="info3.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-two-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-center h-100">
                        <div class="col-xl-4 col-md-6 text-center">
                            <div class="ex-cards-block">
                                <figure>
                                    <img src="/templates/zaimnowsu/assets/img/icons/card.png" alt="card.png">
                                </figure>
                                <p class="ex-count-zaim">
                                    30 000
                                    <i></i>
                                </p>
                                <table>
                                    <tr>
                                        <td>Основная ставка</td>
                                        <td>1.1 %</td>
                                    </tr>
                                    <tr>
                                        <td>Cрок займа</td>
                                        <td>от 61 дня</td>
                                    </tr>
                                </table>
                                <div >
                                    <a href="/form?amount=30000"><button type="button" class="ex-main-btn">Получить деньги</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 text-center">
                            <div class="ex-cards-block">
                                <figure>
                                    <img src="/templates/zaimnowsu/assets/img/icons/rocket.png" alt="rocket.png">
                                </figure>
                                <p class="ex-count-zaim">
                                    100 000
                                    <i></i>
                                </p>
                                <table>
                                    <tr>
                                        <td>Основная ставка</td>
                                        <td>1 %</td>
                                    </tr>
                                    <tr>
                                        <td>Cрок займа</td>
                                        <td>от 130 дней</td>
                                    </tr>
                                </table>
                                <div>
                                <a href="/form?amount=100000"><button type="button" class="ex-main-btn">Получить деньги</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-methods-zaim">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <h3>Абзал Ахметов, г. Алма-Ата, 32 года</h3>
                <figure>
                    У меня неравномерный доход, как и у любого таксиста, и я очень хорошо знаю, как это когда вдруг
                    заканчиваются деньги… А тут как назло машина сломалась, и денег совсем не было! Знакомый подсказал
                    сайт займов Zaimnow.su Сказал что это надёжная компания, не обманывают. Всё так
                    и оказалось, здесь мне бесплатно подобрали срочный займ, одобрили сразу и перевели деньги
                    минут через 15, не больше. Спасибо за помощь!
                </figure>

            </div>
            <div class="item">
                <h3>Омаров Бахыт, г. Караганда, 29 лет</h3>
                <figure>
                    Спасибо огромное, что бы я делал без помощи вашего сервиса!!! Мне просрочили аванс на работе,
                    а в этот же вечер я должен был платить за съемную квартиру. Родственников почти нет, а друзья сами
                    все на мели. Не имея совсем времени, я кинулся в интернет, начал сравнивать сервисы онлайн займов.
                    Оказалось, что везде просят денег за поиск вариантов, а вот у вас это делают бесплатно! Конечно же
                    взял сразу здесь несколько тысяч и через 20 минут уже снимал с карты займ! Порядочный сервис,
                    рекомендую.
                </figure>
            </div>
            <div class="item">
                <h3>Майра Абрелева, г. Астана, 33 года</h3>
                <figure>
                    Нашу маленькую квартирку затопили соседи сверху и это никак не входило в финансовые планы…(( Двое
                    маленьких деток на руках, надо было как-то срочно сделать ремонт. Оказалось, что у мужа
                    на работе уже несколько человек пользуются вашим Zaimnow.su, берут займы срочно, ну и мы тоже сюда
                    обратились. Заявку нам одобрили сразу и предложили несколько вариантов займов на выбор. Мы выбрали и
                    через минут 10 деньги пришли на карточку.
                    Спасибо за поддержку, всё вернём вовремя!))
                </figure>
            </div>
        </div>
    </div>
</form>
</main>
<?php require 'footer.php'; ?>