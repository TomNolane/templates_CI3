<?php require 'header.php'; ?>
<section class="ex-section-1">
    <form id="anketa" action="/form" method="post">
        <input type="hidden" id="amount" name="amount" value="20000" />
        <input type="hidden" id="period" name="period" value="21" />
        <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <div class="container">
            <span class="ex-green-cover"></span>
            <main>
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Fanzaim
                                    <span>–</span>
                                    <span>фантастически</span>
                                    <span>быстрый займ</span>
                                </h1>
                            </div>
                            <div class="col-md-6">
                                <div class="ex-counter-block">
                                    <p class="ex-slider-val"></p>
                                    <div class="ex-wrapper">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Комиссия
                                                        <strong class="ex-Commission"></strong>
                                                    </td>
                                                    <td>Срок
                                                        <strong class="ex-time"></strong>
                                                    </td>
                                                    <td>К возврату
                                                        <strong class="ex-total"></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <input type="text" id="rangeSlider" name="rangeSlider" value="" />
                                        <div>вероятность одобрения
                                            <span class="ex-prob"></span>
                                        </div>
                                        <button class="ex-main-btn" type="submit">Получить деньги</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ex-virtual-money hidden-xs hidden-sm">
                    <div class="col-md-2">
                        <div class="ex-wrapper">
                            <a href="/zaim-card">
                                <i></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="ex-wrapper">
                            <a href="/zaim-yandex">
                                <i></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="ex-wrapper">
                            <a href="/zaim-card">
                                <i></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="ex-wrapper">
                            <a href="/zaim-qiwi">
                                <i></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="ex-wrapper">
                            <a href="/zaim-contact">
                                <i></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="ex-wrapper">
                            <a href="/zaim-bank">
                                <i></i>
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </form>
</section>
<section class="ex-section-2 hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="ex-actions">
                    <p class="noSelect">Статьи
                        <br> о займах</p>
                    <div id="customNav"></div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="ex-carousel-scope">
                    <main class="owl-carousel owl-theme">
                        <figure>
                            <img src="/templates/fanzaim/assets/img/8.jpg" alt="image">
                            <div class="ex-wrapper">
                                <main>
                                    <h2>Микрофинансовые организации и их роль</h2>
                                    <p>25 ноября 2017 г</p>
                                </main>
                                <a href="/micofinance" class="ex-main-btn">Подробнее</a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/templates/fanzaim/assets/img/7.jpg" alt="image">
                            <div class="ex-wrapper">
                                <main>
                                    <h2>Микрокредиты и их преимущества</h2>
                                    <p>27 ноября 2017 г</p>
                                </main>
                                <a href="/microcredit" class="ex-main-btn">Подробнее</a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/templates/fanzaim/assets/img/10.jpg" alt="image">
                            <div class="ex-wrapper">
                                <main>
                                    <h2>Как накопить деньги: основные принципы</h2>
                                    <p>28 ноября 2017 г</p>
                                </main>
                                <a href="/accumulate" class="ex-main-btn">Подробнее</a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/templates/fanzaim/assets/img/11.jpg" alt="image">
                            <div class="ex-wrapper">
                                <main>
                                    <h2>9 правил для гармоничных отношений с деньгами</h2>
                                    <p>30 ноября 2017 г</p>
                                </main>
                                <a href="/9-rules" class="ex-main-btn">Подробнее</a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/templates/fanzaim/assets/img/12.jpg" alt="image">
                            <div class="ex-wrapper">
                                <main>
                                    <h2>С чем нужно определиться перед тем, как взять займ</h2>
                                    <p>30 ноября 2017 г</p>
                                </main>
                                <a href="/harmony" class="ex-main-btn">Подробнее</a>
                            </div>
                        </figure>
                        <figure>
                            <img src="/templates/fanzaim/assets/img/13.jpg" alt="image">
                            <div class="ex-wrapper">
                                <main>
                                    <h2>Как снять финансовый стресс и не волноваться</h2>
                                    <p>30 ноября 2017 г</p>
                                </main>
                                <a href="/problems" class="ex-main-btn">Подробнее</a>
                            </div>
                        </figure>
                    </main>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ex-section-3 hidden-xs hidden-sm">
    <h2 class="text-center">Как получить займ</h2>
    <div class="container">
        <main>
            <div class="row">
                <div class="col-sm-4">
                    <div class="ex-wrapper">
                        <h3>
                            Выберите необходимую
                            <br> денежную сумму и срок займа.
                        </h3>
                        <p>
                            Для этого просто воспользуйтесь
                            <br> наглядным онлайн калькулятором
                            <br> на нашем сайте
                        </p>
                        <span></span>
                        <figure>
                            Шаг
                            <strong>01</strong>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ex-wrapper">
                        <div class="ex-text-scope">
                            <h3>
                                Заполните короткую анкету –
                                <br> на это уйдёт не более 2-3 минут.
                            </h3>
                            <p>
                                Все ваши данные строго конфиденциальны
                                <br> и никогда не попадут к третьим лицам
                            </p>
                        </div>
                        <span></span>
                        <figure>
                            Шаг
                            <strong>02</strong>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ex-wrapper">
                        <h3>
                            Получите ваши деньги
                            <br> уже через полчаса
                        </h3>
                        <p>
                            любым комфортным способом:
                            <br> Maestro, Visa, WebMoney, Яндекс.Деньги,
                            <br> CONTACT
                        </p>
                        <span></span>
                        <figure>
                            Шаг
                            <strong>03</strong>
                        </figure>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
<section class="ex-section-4 hidden-xs hidden-sm">
    <h2 class="text-center">Отзывы о нас</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <article>
                    <div class="media">
                        <div class="media-left">
                            <div>
                                <img class="media-object" src="/templates/fanzaim/assets/img/Алексей.png" alt="Image">
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Корнуков Алексей, студент, 20 лет, г. Псков</h4>
                            <p>
                                Я студент, и этим всё сказано. Кредит просто так не возьмёшь, часто отказывают, стипендия маленькая… Тут понадобились срочные
                                деньги на подарок отцу, у него юбилей, 50 лет. Конечно же, я не стал просить денег у родителей,
                                а друзья помочь ничем не смогли((.. Знакомый (работает в банке) подсказал ваш сервис Fanzaim,
                                сказал, что здесь через полчаса уже деньги забираешь. Я сразу не поверил. Но оказалось и
                                вправду: заполнил краткую анкету и сразу же получил несколько выгодных предложений, выбрал
                                самое лучшее. Уже через 15 минут получил онлайн микрозайм 10 000 руб. и на радостях пошёл
                                покупать набор для рыбалки отцу! Теперь знаю, куда обращаться, если что.
                            </p>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="media">
                        <div class="media-left">
                            <div>
                                <img class="media-object" src="/templates/fanzaim/assets/img/Марина.png" alt="Image">
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Саминская Марина, домохозяйка, 32 года, г. Москва</h4>
                            <p>
                                Всегда боялась брать деньги в долг, да и как-то стыдно что ли... Но куда деваться, случилась непредвиденная ситуация – заболел
                                ребёнок, и была нужна срочная операция. А до зарплаты мужа ещё целая неделя! Испугалась,
                                села за компьютер искать сервисы по займам онлайн. Несколько сайтов или отказали, или предлагали
                                слишком высокий процент… Уже почти отчаялась, но попала на ваш Фан займ, здесь моментально
                                всё одобрили, и уже где-то через 20 минут я получила деньги на карту. Спасибо вам!!! Все
                                живы-здоровы и слава богу. Муж получил зарплату, и сразу всё вернули, никаких проблем не
                                было.
                            </p>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="media">
                        <div class="media-left">
                            <div>
                                <img class="media-object" src="/templates/fanzaim/assets/img/Борис.png" alt="Image">
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Панкратов Борис, менеджер по продажам, 34 года, г. Архангельск</h4>
                            <p>
                                Молодцы, ребята, уважаю! Как опытный заёмщик, скажу, что вы лучшие!!!)) Уже года 2 постоянно пользуюсь сервисами онлайн микрозаймов:
                                то горящие путёвки надо было купить, то ребёнка срочно в детский сад отправить, то жена попросит
                                шубу, и выкручивайся как хочешь. В большинстве сервисов то отказ, то какая-то подозрительная
                                анкета и нудятина, то ждать слишком долго, а покупка горит! Последние 3 раза обращаюсь только
                                к вам в Fanzaim. Анкета очень простая, 15 минут, и деньги у меня на карте! Как вы это делаете?
                                Спасибо, за займом только к вам.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row hidden-xs hidden-sm">
            <div class="col-xs-12">
                <div class="ex-subscribe">
                    <div class="row">
                        <p class="col-md-5">Подпишись на рассылку*</p>
                        <form action="">
                            <div class="col-md-5">
                            
                            <div class="hidden">
                                <input type="text" id="feedback-name2" placeholder="Имя" title="Имя" value="хочу подписаться" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control index_specail2" id="feedback-email2" title="Email" placeholder="Введите ваш email" required> 
                            </div></div> 
                            <div class="col-md-2">
                            <div class="form-group">
                                <input class="ex-main-btn text-center" id="feedback-send2" value="подписаться"/>
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
                </div>
                <footer>
                    *На указанную электронную почту вам будут приходить оповещения с лучшими условиями кредитования. Вы не пропустите интересные
                    и выгодные предложения!
                </footer>
            </div>
        </div>
    </div>
    </div>
</section>
<?php require 'footer.php'; ?>