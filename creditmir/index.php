<?php require 'header.php'; ?>
<input type="hidden" id="amount" name="amount" value="20000" />
<input type="hidden" id="period" name="period" value="21" />
<input type="hidden" id="form_slrd" name="form_slrd" value="15" />
<input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
<?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <div class="container ex-pr">
            <div class="ex-section-1">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Creditmir – мир безотказных<br>
                            и выгодных кредитов и займов</h1>
                        <p>Бесплатный подбор кредитов и займов<br>
                            без залогов и поручителей</p>
                    </div>
                    <div class="col-md-6">
                        <div class="ex-img-rub"></div>
                    </div>
                </div>
            </div>
            <div class="ex-tab-on-range-slider">
                <ul class="nav nav-tabs ex-high-fed-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Займы до 100 000 рублей</a></li>
                    <li><a data-toggle="tab" href="#menu1" id="_menu1">Кредиты до 2 000 000 рублей</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="ex-wrapper">
                            <div class="ex-range-slider-ruble-tab">
                                <div class="ex-info">
                                    <span>сумма (в рублях)</span>
                                    <p class="ex-slider-val-1"></p>
                                </div>
                                <input id="rangeSlider1" name="rangeSlider"/>
                            </div>
                            <div class="ex-range-slider-time-tab">
                                <div class="ex-info">
                                    <span>срок (в днях)</span>
                                    <p class="ex-slider-val-2"></p>
                                </div>
                                <input id="rangeSlider2" name="rangeSlider2"/>
                            </div>
                            <div class="ex-action">
                                <button onClick="goToForm();" class="ex-btn-blue">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="ex-wrapper">
                            <div class="ex-range-slider-ruble-tab">
                                <div class="ex-info">
                                    <span>сумма (в рублях)</span>
                                    <p class="ex-slider-val-3"></p>
                                </div>
                                <input id="rangeSlider3" name="rangeSlider"/>
                            </div>
                            <div class="ex-range-slider-time-tab">
                                <div class="ex-info">
                                    <span>срок (в месяцах)</span>
                                    <p class="ex-slider-val-4"></p>
                                </div>
                                <input id="rangeSlider4" name="rangeSlider2"/>
                            </div>
                            <div class="ex-action">
                                <button onClick="goToForm();" class="ex-btn-aqua">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ex-money-types hidden-xs hidden-sm">
                <ul>
                    <li><a href="/zaim-card" class="ex-visa"></a></li>
                    <li><a href="/zaim-yandex" class="ex-yandex"></a></li>
                    <li><a href="/zaim-qiwi" class="ex-qiwi"></a></li>
                    <li><a href="/zaim-contact" class="ex-contact"></a></li>
                    <li><a href="/zaim-bank" class="ex-bank"></a></li>
                </ul>
            </div>
        </div>
    </section>
<section class="ex-receive-money hidden-xs hidden-sm">
    <div class="container">
        <h2 class="text-center">Как получить деньги?</h2>
        <div class="row">
            <div class="col-md-4 ex-equal">
                <div class="ex-shadow">
                    <div class="media">
                        <div class="media-left" style="padding-right: 10px">
                            <span>1</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Укажите в онлайн калькуляторе нужную сумму и срок кредита
                                или займа
                            </h4>
                            <p>Поставьте курсор на нужных
                                вам значениях</p>
                        </div>
                    </div>
                    <span class="ex-triangle">&#9654;</span>
                </div>
            </div>
            <div class="col-md-4 ex-equal">
                <div class="ex-shadow">
                    <div class="media">
                        <div class="media-left">
                            <span>2</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Подайте заявку, заполнив простую и понятную анкету</h4>
                            <p>Для этого нужен лишь мобильный телефон или компьютер, а также паспорт и всего 2-3 минуты</p>
                        </div>
                    </div>
                    <span class="ex-triangle">&#9654;</span>
                </div>
            </div>
            <div class="col-md-4 ex-equal">
                <div class="ex-shadow">
                    <div class="media">
                        <div class="media-left">
                            <span>3</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Получите ваш кредит через
                                10 минут – без залога и проверок</h4>
                            <p>Удобные варианты получения:
                                на банковскую карту/счёт, через систему CONTACT, на кошельки WebMoney и Яндекс.Деньги</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button onClick="goToForm();" class="ex-btn-blue">Получить деньги</button>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ex-wrapper-info">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/unsecured-loan">
                                <article class="ex-scope-info">
                                    <h4>Доверительный кредит и его особенности</h4>
                                    <p>
                                        Доверительный кредит – это тот самый случай, когда сразу две стороны кредитования (будущий клиент и банковское учреждение) остаются в выигрыше. Альтернативное название сделки – «кредит для своих».
                                        <br>
                                        При описываемом типе кредитования банк предлагает постоянному или впервые обратившемуся клиенту срочные деньги на заметно выгодных условиях. При этом отношение к заёмщику лояльное, и банк может ему по-настоящему доверять. Для получения доверительных средств клиент должен подтвердить свою платёжеспособность – своевременно «закрыть» ранее взятые кредиты (онлайн, в том числе).
                                    </p>
                                </article>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="/credit-line">
                                <article class="ex-scope-info">
                                    <h4>Что такое кредитная линия?</h4>
                                    <p>Кредитной линией является взаимное соглашение между банковским учреждением и клиентом. Согласно ему, учреждение предоставляет заёмщику ряд кредитов на определённый срок и в рамках оговоренного денежного лимита.</p>
                                    <p style="margin-top: 15px;">Кредитная линия обладает отличиями от других типов кредитования не только лишь кратностью осуществляемых выплат. Клиент с надёжным денежным обеспечением может закрывать кредит в определённый срок и не оплачивать проценты за кредитный транш.</p>
                                </article>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ex-feedback hidden-xs hidden-sm">
    <h2 class="text-center">Отзывы о нас</h2>
    <main class="owl-carousel owl-theme">
        <article>
            <p>
                В интернете много контор, которые втюхивают срочные кредиты и потом снимают скрытые проценты, у меня был горький опыт... А этот сайт удивил, даже денег не взяли за подбор вариантов!!! Уже третий раз сюда обращаюсь, не хватало на ремонт и машину… Я просто отправила онлайн заявку на кредит, деньги перечислили на карточку сразу же и без всяких залогов, даже проверять меня не стали. Кредит приходит на карту минут за 10, рекомендую всем!!
            </p>
            <span>Юлия Замятина, г. Ульяновск, 34 года</span>
        </article>
        <article>
            <p>
                Удивлён, ребята ничего не скажешь!)) Только на вашем сайте мне одобрили онлайн кредит с моей запутанной кредитной историей, а в других местах везде отказы! Не знаю, что бы я без вас делал, надо было срочно оплатить больничные процедуры ребёнку. И никто с меня никаких поручителей и справок не потребовал, я всё спокойно выплатил и никаких заморочек. Больше в банки не пойду, только к вам за кредитом без отказа)) Спасибо, что доверяете таким как я!
            </p>
            <span>Эдуард Левченко, г. Москва, 28 лет</span>
        </article>
        <article>
            <p>
                Creditmir выручил меня, когда я был совсем на мели, нам студентам не хотят давать кредиты без справок, а тут деньги перечислили минут через 15 и даже справку о доходах не попросили. А у меня её и нет! А ещё я заметил, что за услуги сервиса не взяли комиссию, рублей 800 точно сэкономил!! Спасибо сайту, что не требуете лишних денег, как на других сервисах онлайн кредитов. К вам уже два моих друга пришли, говорят спасибо, что подсказал!!
            </p>
            <span>Руслан Шамгунов, г. Казань, 20 лет</span>
        </article>
    </main>
    <div class="text-center">
        <button onClick="goToForm();" class="ex-btn-blue">Получить деньги</button>
    </div>
</section>
</form>
<?php require 'footer.php'; ?>