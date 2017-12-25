<?php require 'header.php'; ?>
<main>
    <section class="ex-money">
        <div class="container">
        <form id="anketa" action="/form" method="post">
            <input type="hidden" id="amount" name="amount" value="20000" />
            <input type="hidden" id="period" name="period" value="21" />
            <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
            <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
            <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
            <div class="ex-money-section-1">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Zaimrubli – бесплатный подбор
                            мгновенных займов</h1>
                        <p>Срочные деньги с одобрением за 7 минут,<br>
                            без проверок и отказов</p>
                        <div class="ex-range-slider-block">
                            <div class="ex-calc-wraper">
                                <div id="ex-main-slider-range">
                                    <figure class="ex-range-slider">
                                        <input type="text" id="rangeSlider" name="rangeSlider" value="0"/>
                                    </figure>
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
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="ex-range-scope"><p class="ex-slider-val"></p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="ex-for-button  ex-mb">
                                        <button class="ex-main-btn">Получить деньги</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="ex-img-rub">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ex-money-tab">
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#home"><img src="/templates/zaimrubli/assets/img/visa.png" alt="visa.png"></a></li>
                    <li><a data-toggle="tab" href="#menu1"><img src="/templates/zaimrubli/assets/img/yandex.png" alt="yandex.png"></a></li>
                    <li><a data-toggle="tab" href="#menu2"><img src="/templates/zaimrubli/assets/img/qiwi.png" alt="qiwi.png"></a></li>
                    <li class="active"><a data-toggle="tab" href="#menu3"><img src="/templates/zaimrubli/assets/img/contact.png" alt="contact.png"></a></li>
                    <li><a data-toggle="tab" href="#menu4"><img src="/templates/zaimrubli/assets/img/bank-building.png" alt="bank-building.png"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade">
                        <h2>На банковскую карту</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p>Данный способ займа по праву является самым признанным и распространённым. Его
                                    преимущества:<br>
                                    - Микрозайм на карту оформляется очень оперативно.<br>
                                    - Получить займ на карту можно круглосуточно и без проверок – один из самых приятных
                                    аспектов.<br>
                                    - Ваша карта может быть открыта в любом банке России.<br>
                                    - Онлайн микрозайм на карту осуществляется, если вы являетесь дееспособным
                                    гражданином России и ваш
                                    возраст 18 и более лет.<br>
                                    - Высокая доступность. Вам не придётся собирать дополнительные документы. Требуются
                                    лишь данные
                                    карточки и вашего паспорта.<br>
                                    - Займ на карту доступен даже таким слоям населения, как студенты, пенсионеры и
                                    женщины в декрете.
                                    Обратите внимание: для удачного осуществления займа ваша карта должна быть
                                    MasterCard или VISA, а её
                                    баланс должен составлять не менее 10 руб.<br>
                                    Итак, заполняйте прямо сейчас удобную анкету и получите необходимую сумму на
                                    карточку уже через
                                    15-20 минут.<br></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="ex-main-btn">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h2>На Яндекс.Деньги</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p>Для получения займа на Яндекс-кошелёк от вас не требуется ничего сложного.
                                    Единственное –
                                    нужен аккаунт в данной платёжной системе. Обычно онлайн займ на Яндекс.Деньги
                                    предоставляют
                                    различные микрофинансовые организации. Но вам не потребуется самостоятельно
                                    осуществлять
                                    поиски. Наш сервис подберет самые свежие и выгодные варианты оформления микрозайма
                                    на
                                    Яндекс-кошелёк.<br>
                                    Преимущества онлайн займов на Яндекс Деньги:
                                    - Все действия происходят в дистанционном режиме, вам не нужно идти в банк и стоять
                                    в
                                    очереди.<br>
                                    - После получения финансовой помощи на Яндекс-кошелёк вам нужно будет обналичить
                                    средства,
                                    сделать это можно различными удобными для вас способами.<br>
                                    - Принятие решения по данным переводам отнимает, как правило, 2-3 минуты.<br>
                                    - После одобрения сделки деньги поступают на кошелёк мгновенно.<br>
                                    - По данному виду займа шанс отказа минимальный.<br>
                                    - Вы можете использовать полученные заемные средства, расплачиваясь специально
                                    выпущенной
                                    карточкой Яндекс.Деньги.<br>
                                    Яндекс займ не имеет существенных отличий от самой обычной ссуды, выданной
                                    микрофинансовой
                                    организацией.<br>
                                    Для получения денег через платёжную систему Яндекс вам необходимо просто создать
                                    Яндекс-кошелёк, пройти идентификацию счёта и заполнить лёгкую анкету на нашем сайте.
                                    Вслед
                                    за этим позвонит менеджер, и вы получите долгожданный микрозайм.<br>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="ex-main-btn">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h2>На Qiwi кошелёк</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p>
                                    Из опыта сервиса Zaimrubli мы знаем, что многие из клиентов пользуются системой QIWI
                                    (Киви). И мы рады предоставить вам широкий выбор выгодных микрозаймов на данный
                                    кошелёк.<br>
                                    Неоспоримые преимущества займа на Киви:<br>
                                    - Круглосуточная финансовая помощь. Для большинства наших клиентов данный момент
                                    является решающим.<br>
                                    - Отсутствие проверки кредитной истории.<br>
                                    - Высокая скорость получения денежного онлайн займа. Обычный кредит в банке – это
                                    очень длительная и муторная процедура. А займ на Киви кошелёк рассматривается и
                                    оформляется буквально в считанные минуты. Заполните анкету, и спустя 15-20 минут вы
                                    уже счастливый обладатель необходимых денежных средств.<br>
                                    Что нужно сделать для получения микрозайма на Киви кошелёк:<br>
                                    - Зарегистрируйте себе кошелёк на сайте данной платёжной системы.<br>
                                    - Затем заполните очень короткую анкету в нашем сервисе, дождитесь звонка менеджера
                                    и получите заемные средства уже через 15-20 минут.<br>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="ex-main-btn">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade in active">
                        <h2>Через систему Contact</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p>
                                    Идеальный вариант для тех, кому срочно нужен займ, но не хочется связываться с
                                    банковскими организациями. Сегодня по всей России огромное количество людей успешно
                                    используют систему CONTACT (Контакт), и её можно по праву считать безопасной,
                                    удобной и быстрой.<br>
                                    Как это работает? Через данный ресурс кредиторы просто перечисляют необходимую
                                    денежную сумму, а вы, в свою очередь, можете получить эти деньги прямо на руки в
                                    любом удобном отделении CONTACT.<br>
                                    Преимущества получения займа через систему Контакт:<br>
                                    - Возможность не взаимодействовать с банковскими учреждениями. Для многих это
                                    наиболее важный пункт, благодаря которому можно убрать лишнюю тревожность. Кроме
                                    этого, не нужно открывать банковский счёт и тратить на это время.<br>
                                    - Высокая скорость перевода заёмных средств.
                                    - Заметно выгодные условия – одна из сильных сторон получения займа через систему
                                    Контакт.<br>
                                    Для получения займа через Контакт просто заполните короткую анкету на нашем сайте.
                                    После этого вам перезвонит менеджер, и вы получите финансовую помощь. Как правило,
                                    заявки одобряются в 99% случаев.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="ex-main-btn">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <h2>На банковский счёт</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p>
                                    Этот способ получения онлайн займа будет актуальным, если в данный момент у вас нет
                                    на руках банковских карт.<br>
                                    Что нужно сделать, чтобы получить займ на банковский счет:<br>
                                    - Заполните анкету на нашем сайте (не более 3 минут).<br>
                                    - Дождитесь звонка менеджера.<br>
                                    - Получите необходимую заемную сумму в банке.<br>
                                    Как правило, для оформления в сервисе Zaimrubli онлайн займа вам нужно около 15
                                    минут. После этого можно<br> отправляться в банк.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="ex-main-btn">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ex-articles">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/term-loans">
                            <div class="ex-art-block">
                                <h3>Срочные займы –
                                    в чём их выгода?</h3>
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
        </form>
            <div class="ex-email">
                <div class="ex-email-wraper">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="email">Подпишись на рассылку*</label>
                        </div>
                        <form action="">
                            <div class="col-md-6"> 
                                <div class="hidden">
                                    <input type="text" id="feedback-name2" placeholder="Имя" title="Имя" value="хочу подписаться" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control index_specail2" id="feedback-email2" title="Email" placeholder="Введите ваш email" required> 
                                </div></div> 
                                <div class="col-md-2">
                                <div class="form-group">
                                    <button class="ex-main-btn" id="feedback-send2" >подписаться</button>
                                </div> 
                                <!-- Hidde this block -->
                                <div class="hidden">
                                    <input type="text" class="form-control" id="feedback-phone2" placeholder="Телефон" title="Телефон" value="+7777777777" required>
                                </div>
                                <div class="hidden">
                                    <textarea class="form-control" id="feedback-comment2" placeholder="Текст вашего сообщения" title="Текст вашего сообщения" required>Хочу подписаться на рассылку</textarea>
                                </div>
                                <!-- Hidde this block --> 
                            </div>  
                        </form>
                        <!-- <div class="col-md-6">
                            <div class="ex-email-place">
                                <input type="email" id="email" placeholder="email@gmail.com">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="ex-for-button  ex-mb">
                                <a href="/form"><button class="ex-main-btn">Отправить</button></a>
                            </div>
                        </div> -->
                    </div>
                </div>
               <p class="ex-int">*На указанную электронную почту вам будут приходить оповещения с лучшими условиями кредитования.
                    Вы не пропустите интересные и выгодные предложения!</p></div>
            </div>
    </section>
</main>
<?php require 'footer.php'; ?>