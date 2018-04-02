<?php require 'header.php'; ?>
<main> 
    <section class="ex-home">
        <div class="container">
            <div class="ex-section-1">
            <form id="anketa" action="/form" method="post">
                <input type="hidden" id="amount" name="amount" value="20000" />
                <input type="hidden" id="period" name="period" value="21" />
                <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
                <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
                <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
                <div class="row">
                    <div class="col-md-7">
                        <h1>Zaimrubli – бесплатный подбор
                            мгновенных займов</h1>
                        <p class="hidden-xs hidden-sm">Срочные деньги с одобрением за 7 минут,<br>
                            без проверок и отказов</p>
                        <div class="ex-calc-wraper">
                            <div id="ex-main-slider-range">
                                <div class="row">
                                    <div class="col-md-7">
                                        <figure class="ex-range-slider">
                                            <input type="text" id="rangeSlider" name="rangeSlider" value="0"/>
                                        </figure>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="ex-range-scope"><p class="ex-slider-val"></p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ex-tab-section">
                                <div class="ex-calc-block ">
                                    <div class="row ">
                                        <div class="col-lg-4 ex-mb ex-center">
                                            <div class="ex-crumbs"><span
                                                    class="ex-unique">Комиссия</span>
                                                <span class="ex-Commission ex-result-style"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 ex-mb ex-center">
                                            <div class="ex-crumbs"><span
                                                    class="ex-unique">К возврату</span>
                                                <span class="ex-total ex-result-style"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 ex-mb ex-center">
                                            <div class="ex-crumbs"><span
                                                    class="ex-unique">Срок займа</span>
                                                <span class="ex-ot">от</span><span
                                                        class="ex-time ex-result-style"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ex-for-button  ex-mb">
                                <button class="ex-main-btn">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="ex-img-rub">
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <ul class="ex-section-money hidden-xs hidden-sm">
                <li class="active"><a data-toggle="tab" href="/zaim-card"><img src="/templates/zaimrubli/assets/img/visa.png" alt="visa.png"></a></li>
                <li><a data-toggle="tab" href="/zaim-yandex"><img src="/templates/zaimrubli/assets/img/yandex.png" alt="yandex.png"></a></li>
                <li><a data-toggle="tab" href="/zaim-qiwi"><img src="/templates/zaimrubli/assets/img/qiwi.png" alt="qiwi.png"></a></li>
                <li><a data-toggle="tab" href="/zaim-contact"><img src="/templates/zaimrubli/assets/img/contact.png" alt="contact.png"></a></li>
                <li><a data-toggle="tab" href="/zaim-bank"><img src="/templates/zaimrubli/assets/img/bank-building.png" alt="bank-building.png"></a></li>
            </ul>
            <div class="ex-get-money hidden-xs hidden-sm">
                <h2>Как получить деньги?</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="ex-get-block">
                            <i></i>
                            <h3>Установите в калькуляторе комфортную сумму займа</h3>
                            <p>Передвиньте курсор до необходимых значений</p>
                        </div>
                        <div class="ex-get-block">
                            <i></i>
                            <h3>Ответьте на несколько вопросов в короткой анкете</h3>
                            <p>Для этого нужен только паспорт и 2 минуты вашего времени</p>
                        </div>
                        <div class="ex-get-block">
                            <i></i>
                            <h3>Получите ваши деньги уже через 10-15 минут без проверок</h3>
                            <p>Выберите любой способ: на карту/счёт, электронный кошелёк или через систему CONTACT</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <button class="ex-main-btn">Получить деньги</button>
                    </div>
                </div>
            </div>
            <div class="ex-articles hidden-xs hidden-sm">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/term-loans">
                            <div class="ex-art-block">
                                <h3>Срочные займы – в чём их выгода?</h3>
                                <p>В данной статье постараемся осветить все неоспоримые выгоды займов и выяснить, почему
                                    обращаться в микрофинансовые организации (МФО) более удобно и выгодно, чем в
                                    банки.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/main-ways">
                            <div class="ex-art-block">
                                <h3>Основные способы погашения займов</h3>
                                <p>Для заёмщика очень важно выбрать микрофинансовую организацию, способную предложить
                                    сразу
                                    несколько вариантов погашения займа. Рассмотрим наиболее востребованные способы.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/interaction">
                            <div class="ex-art-block">
                                <h3>Особенности взаимодействия коллекторов и должников по займам</h3>
                                <p>В настоящий момент действует закон, защищающий права заёмщиков даже с просроченной
                                    задолженностью по займам. Он же регулирует работу коллекторских агентств. </p>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-3">
                        <a href="/fault">
                            <div class="ex-art-block">
                                <h3>Самые частые ошибки заёмщиков</h3>
                                <p>Чтобы избежать непредвиденных расходов, заёмщикам необходимо оградить себя от
                                    следующих
                                    частых ошибок.</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="ex-email hidden-xs hidden-sm">
                <div class="ex-email-wraper">
                    <div class="row"> 
                        <div class="col-md-4">
                            <label for="email">Подпишись на рассылку*</label>
                        </div>  
                            <div class="col-md-6"> 
                                <div class="hidden">
                                    <input type="text" id="feedback-name2" placeholder="Имя" title="Имя" value="хочу подписаться" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control index_specail2" id="feedback-email2" title="Email" placeholder="Введите ваш email" required> 
                                </div></div> 
                                <div class="col-md-2">
                                <div class="form-group">
                                 <!-- Hidde this block -->
                                 <div class="hidden">
                                    <input type="text" class="form-control" id="feedback-phone2" placeholder="Телефон" title="Телефон" value="+7777777777" required>
                                </div>
                                <div class="hidden">
                                    <textarea class="form-control" id="feedback-comment2"  placeholder="Текст вашего сообщения" title="Текст вашего сообщения" required>Хочу подписаться на рассылку</textarea>
                                </div>
                                <!-- Hidde this block --> 
                                    <button type="button" id="feedback-send2" class="ex-main-btn">Отправить</button>
                                </div>
                            </div> 
                    </div>
                </div>
                <p class="ex-int">*На указанную электронную почту вам будут приходить оповещения с лучшими условиями кредитования.
                    Вы не пропустите интересные и выгодные предложения!</p></div>
        </div>
    </section> 
</main>
<?php require 'footer.php'; ?>