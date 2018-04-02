<?php require 'header.php'; ?>
    <form id="anketa" action="/form" method="post">
        <input type="hidden" id="amount" name="amount" value="20000" />
        <input type="hidden" id="period" name="period" value="21" />
        <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <div class="container">
        <div class="ex-main-section">
            <div class="row">
                <div class="col-lg-6">
                    <h1><span class="ex-orange"> Максимально</span><br>
                        выгодные <span class="ex-blue">онлайн займы</span>
                    </h1>
                    <p class="ex-text-hd">Получите срочные деньги без залога,<br>
                        проверок и потери времени</p>
                    <div class="ex-action">
                        <button class="ex-main-btn">Получить деньги</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ex-calc-block">
                        <div class="ex-wrapper">
                            <div class="ex-slider-block ">
                                <span>Сумма займа</span>
                                <p class="ex-slider-val"></p>
                            </div>
                            <div class="ex-slider-block">
                                <span>Срок займа</span>
                                <p class="ex-time"></p>
                            </div>
                            <div class="ex-range-slider ">
                                <input id="rangeSlider" name="rangeSlider"/>
                                <span class="ex-small-cost ex-left">1 000 </span>
                                <span class="ex-small-cost ex-right">100 000 </span>
                            </div>
                        </div>
                        <div class="ex-info-block">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ex-crumbs"><span
                                            class="ex-unique">Комиссия:</span>
                                        <span class="ex-Commission ex-result-style"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ex-crumbs"><span
                                            class="ex-unique">К возврату:</span>
                                        <span class="ex-total ex-result-style"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ex-info-zaim">
            <h2>Информация о займах</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="ex-info-zaim-block">
                        <a href="/asked-questions">
                        <div class="row">
                            <div class="col-lg-9">
                                <h3>Преимущества срочных займов</h3>
                                <p>Без сомнения, личные займы сегодня – это удобный и оперативный вид кредитования
                                    граждан.
                                    Микрозайм представляет собой небольшой по сумме заем на относительно короткий
                                    срок.</p>
                               Читать полностью >
                            </div>
                            <div class="col-lg-3">
                                <div class="ex-info-image">
                                    <img src="/templates/zaimomix/assets/img/info1.png" alt="info1.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="ex-info-zaim-block">
                    <a href="/microfinance">
                        <div class="row">
                            <div class="col-lg-9">
                                <h3>Исторические особенности микрофинансирования</h3>
                                <p>Точкой отсчёта истории микрозаймов принято считать 1976 г. В это время тогда ещё не
                                    известный профессор Мухаммед Юнус принялся выдавать срочные займы на малые суммы
                                    нуждающимся гражданам Бангладеша.</p>
                                Читать полностью >
                            </div>
                            <div class="col-lg-3">
                                <div class="ex-info-image">
                                    <img src="/templates/zaimomix/assets/img/info2.png" alt="info2.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="ex-info-zaim-block">
                    <a href="/bad-credit-history">
                        <div class="row">
                            <div class="col-lg-9">
                                <h3>Займ при плохой кредитной истории: возможно ли?</h3>
                                <p>Негативную кредитную историю не нужно считать приговором
                                    и неисправимой ситуацией. Действительно, в подобном случае взять долгосрочный займ в
                                    банковском учреждении довольно сложно.</p>
                               Читать полностью >
                            </div>
                            <div class="col-lg-3">
                                <div class="ex-info-image">
                                    <img src="/templates/zaimomix/assets/img/info3.png" alt="info3.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-methods-zaim">
        <div class="container">
            <div class="ex-control">
                <h2>Способы получения займов</h2>
                <div id="customNav"></div>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
            <a href="/zaim-yandex">
                <figure>
                    <h3>Займ<br>
                        на Яндекс.Деньги</h3>
                    <div class="ex-for-cards">
                        <img src="/templates/zaimomix/assets/img/yandex.png" alt="yandex.png">
                    </div>
                </figure>
                получить деньги</a>
            </div>
            <div class="item">
            <a href="/zaim-card">
                <figure>
                    <h3>Займ<br>
                        на банковскую карту</h3>
                    <div class="ex-for-cards">
                        <ul>
                            <li><img src="/templates/zaimomix/assets/img/visa-color.png" alt="visa-color.png"></li>
                            <li><img src="/templates/zaimomix/assets/img/mastercard-color.png" alt="mastercard-color.png"></li>
                        </ul>
                    </div>
                </figure>
                получить деньги</a>
            </div>
            <div class="item">
            <a href="/zaim-qiwi">
                <figure>
                    <h3>Займ<br>
                        на QIWI-кошелек</h3>
                    <div class="ex-for-cards">
                        <img src="/templates/zaimomix/assets/img/qimi.png" alt="qimi.png">
                    </div>
                </figure>
                получить деньги</a>
            </div>
            <div class="item">
            <a href="/zaim-contact">
                <figure>
                    <h3>Займ<br>
                        через систему Contact</h3>
                    <div class="ex-for-cards">
                        <img src="/templates/zaimomix/assets/img/contact.png" alt="contact.png">
                    </div>
                </figure>
                получить деньги</a>
            </div>
            <div class="item">
            <a href="/zaim-bank">
                <figure>
                    <h3>Займ <br>На банковский счет</h3>
                    <div class="ex-for-cards">
                        <img src="/templates/zaimomix/assets/img/bank-building.png" alt="bank-building.png">
                    </div>
                </figure>
                получить деньги</a>
            </div>
        </div>
    </div>
</form>
</main>
<?php require 'footer.php'; ?>