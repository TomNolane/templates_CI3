<?php require 'header.php'; ?>
<form id="anketa" action="/form" method="post">
    <input type="hidden" id="amount" name="amount" value="20000" />
    <input type="hidden" id="period" name="period" value="21" />
    <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
    <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
    <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
    <main class="ex-home">
        <div class="container">
            <div class="ex-main-section">
                <h1>ZaimoMir – мир мгновенных онлайн займов за 15 минут</h1>
                <p class="ex-text-hd">Онлайн займы по паспорту – мгновенно и безотказно</p>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ex-calc-block">
                            <div class="ex-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="ex-crumbs">
                                            <span class="ex-unique">Сумма займа</span>
                                            <p class="ex-slider-val ex-result-style"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="ex-crumbs">
                                            <span class="ex-unique">Срок займа</span>
                                            <p class="ex-time ex-result-style"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="ex-crumbs">
                                            <span class="ex-unique">Комиссия</span>
                                            <p class="ex-Commission ex-result-style"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ex-range-slider ">
                                    <input id="rangeSlider" name="rangeSlider" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ex-action">
                                        <button class="ex-main-btn">Получить деньги</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ex-result-prob">
                                        <span class="ex-unique">Вероятность одобрения</span>
                                        <span class="ex-prob "></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ex-why-zaim">
            <div class="container">
                <div class="row  text-center">
                    <div class="col-lg-3 col-md-6 ">
                        <div class="">
                            <img src="/templates/zaimomirsu/assets/img/icons/1.png" alt="1.png">
                        </div>
                        <div class="ex-icon-block ">
                            <h3>Один документ</h3>
                            <p>Просто приготовьте паспорт. Подтверждение доходов, справки с работы и поручители не нужны.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="/templates/zaimomirsu/assets/img/icons/2.png" alt="2.png">
                        </div>
                        <div class="ex-icon-block">
                            <h3>Безопасность на 100%</h3>
                            <p>Ваши личные данные хранятся строго в зашифрованном виде.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="/templates/zaimomirsu/assets/img/icons/3.png" alt="3.png">
                        </div>
                        <div class="ex-icon-block">
                            <h3>Одобрение в 98% случаев</h3>
                            <p>Быстрое решение по заявке (до 7 минут), невзирая на кредитную историю.</p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="/templates/zaimomirsu/assets/img/icons/4.png" alt="4.png">
                        </div>
                        <div class="ex-icon-block">
                            <h3>Бесплатно</h3>
                            <p>Экономьте до 450 гривен, не оплачивая поиск выгодных позиций.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="ex-why-get-money">
                <h2>Как получить деньги?</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <ul class="timeline">
                            <li class="timeline-inverted">
                                <div class="timeline-badge d-flex align-items-center justify-content-center">
                                    <i class="ex-timline-icon1"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Выберите сумму займа</h4>
                                        <p>Поставьте курсор в онлайн кулькулятре на комфортных вам значениях.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge d-flex align-items-center justify-content-center">
                                    <i class="ex-timline-icon2"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Заполните анкету</h4>
                                        <p>Для этого нужен лишь мобильный телефон, паспорт и 2-3 минуты.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge d-flex align-items-center justify-content-center">
                                    <i class="ex-timline-icon3"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Получите деньги</h4>
                                        <p>Удобные варианты получения: на банковскую карту/счёт, через систему CONTACT, на кошельки
                                            WebMoney и Яндекс.Деньги.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <button class="ex-main-btn">Выбрать сумму займа</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ex-newsletter">
            <div class="container">
                <h2 class="text-center">Подпишитесь на рассылку</h2>
                <p class="text-center">
                    и получайте специальные предложения по займам
                </p>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="ex-on-email">
                            <input type="hidden" id="feedback-name2" name="feedback-name2" placeholder="Имя" title="Имя" value="хочу подписаться">
                            <input type="hidden" class="form-control" id="feedback-phone2" name="feedback-phone2" placeholder="Телефон" title="Телефон"
                                value="+7777777777">
                            <textarea class="hidden" id="feedback-comment2" name="feedback-comment2" placeholder="Текст вашего сообщения" title="Текст вашего сообщения">Хочу подписаться на рассылку</textarea>
                            <div class="form-group">
                                <input type="email" class="form-control" id="feedback-email2" name="feedback-email2" title="Email" placeholder="Введите ваш email">
                                <button type="button" id="feedback-send2" class="ex-main-btn">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="/repeat">
                                    <div class="ex-art-block">
                                        <div class="ex-art-img ex-art-img1"></div>
                                        <div class="ex-art-cont">
                                            <h3>
                                                Повторное обращение за займом: выгодно ли?
                                            </h3>
                                            <p>
                                                Не секрет, что микрофинансовые компании делают всё возможное, чтобы привлечь заемщика к сделке повторно. Именно для этих
                                                целей используется такой выгодный и для клиентов, и для МФО инструмент, как
                                                программа лояльности, распространяющаяся на постоянных клиентов. Согласно
                                                ней, второй и последующие онлайн займы предоставляются по заметно сниженной
                                                процентной ставке. Другой вариант – повышение максимального лимита….
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="/myth">
                                    <div class="ex-art-block">
                                        <div class="ex-art-img ex-art-img2">
                                        </div>
                                        <div class="ex-art-cont">
                                            <h3>
                                                Мифы о микрофинансовых организациях
                                            </h3>
                                            <p>
                                                Несмотря на то, что микрофинансовые компании занимаются законной деятельностью уже более нескольких лет, в нашей стране вокруг
                                                них породилось множество мифов. Рассмотрим основные из них. Миф 1. Деятельность
                                                микрофинансовых компаний по выдаче личных займов на карту никем не контролируется.
                                                Напротив, финансовая сфера, в которую входит работа всех МФО, находится под
                                                прицельным вниманием…
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <button type="button" class="ex-blue-btn ex-ask-question">Задать вопрос</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="ex-up-button"></div>
</form>
</main>
<?php require 'footer.php'; ?>