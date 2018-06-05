<?php require 'header.php'; ?>
<form id="anketa" action="/form" method="post">
<input type="hidden" id="amount" name="amount" value="20000" />
<input type="hidden" id="period" name="period" value="21" />
<input type="hidden" id="form_slrd" name="form_slrd" value="15" />
<input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
<?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
<section class="ex-section-1">
    <nav class="ex-main-header ex-transparent">
        <div class="container">
            <i class="ex-hamburger"></i>
            <a class="ex-brand" href="/">Forzaim</a>
        </div>
    </nav>
    <div class="ex-main">
        <div class="container">
            <h1 class="text-center hidden-xs hidden-sm">Forzaim – формула выгодных займов</h1>
            <h2 class="text-center">Срочные деньги с любой кредитной историей</h2>
            <div class="ex-calc-wraper">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2  col-sm-10 col-sm-offset-1">
                        <div class="ex-range-scope">
                            <div id="ex-main-slider-range">
                                <figure class="ex-range-slider">
                                    <input type="text" id="rangeSlider" name="rangeSlider" value="0"/>
                                </figure>
                            </div>
                        </div>
                        <div class="ex-tab-section">
                            <ul class="ex-calc-block ">
                                <li>
                                    <div class="ex-val-block"><span class="ex-unique">Сумма займа (в рублях)</span>
                                        <span class="ex-slider-val ex-result-style"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ex-crumbs"><span class="ex-unique">Срок займа (в днях)</span>
                                        <span class="ex-ot">от</span><span class="ex-time ex-result-style"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ex-crumbs"><span class="ex-unique">К возврату (в рублях)</span>
                                        <span class="ex-total ex-result-style"></span>
                                    </div>
                                </li>
                            </ul>
                            <div class="ex-for-button text-center">
                                <button class="ex-main-btn">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ex-section-2 hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="ex-int-block ex-first">
                    <img src="/templates/forzaim/assets/img/img1.png" alt="img1.png">
                    <h3>7 минут<br>
                        на одобрение</h3>
                    <p>Заявки одобряются молниеносно
                        и даже при плохой кредитной истории</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ex-int-block ex-second">
                    <img src="/templates/forzaim/assets/img/img2.png" alt="img2.png">
                    <h3>Услуги сервиса<br>
                        бесплатны</h3>
                    <p>Вам не нужно платить за подбор займов.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ex-int-block ex-third">
                    <img src="/templates/forzaim/assets/img/img3.png" alt="img3.png">
                    <h3>Работаем<br>
                        24 часа в сутки</h3>
                    <p>Получите микрозайм в любое
                        время суток – удобным для вас способом</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ex-int-block ex-fourth">
                    <img src="/templates/forzaim/assets/img/img4.png" alt="img4.png">
                    <h3>Не требуем<br>
                        пакета документов</h3>
                    <p>Для оформления займа
                        достаточно паспорта, а ваши данные конфиденциальны</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ex-section-3 hidden-xs hidden-sm">
    <h2 class="text-center">Отзывы о нас</h2>
    <div class="ex-slider-wrap">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <figure>
                                <h3>Маргарита Петренко, г. Смоленск, 32 года</h3>
                                <figcaption>
                                    Нужно было немедленно переехать всей семьей в новую квартиру. А денег нет и никто из
                                    родных деньги в долг не
                                    мог дать… И понятное дело, по банкам в очередях стоять тоже некогда... Обратилась к
                                    вашему сервису. Сначала
                                    меня, конечно, насторожило, что услуги сервиса бесплатные!! Разве так бывает? Но
                                    оказалось, что
                                    действительно никаких лишних денег не потребовали, и онлайн займ одобрили очень
                                    быстро,
                                    спасибо
                                    девушке-менеджеру за скорость!)) Деньги мы вернули через неделю, всё супер.
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <h3>Юрий Асташкин, г. Москва, 61 год</h3>
                                <figcaption>
                                    Меня зовут Юрий Альбертович. Как-то повелось, что в банках к нам, пенсионерам,
                                    относятся с недоверием. Месяц назад у старшей внучки свадьба наметилась, а у меня ни
                                    пенсии, ни накоплений, подарок-то откуда взять?? И в банке отказали. Расстроился
                                    было уже, но сын подсказал ваш сервис онлайн займов и помог взять здесь срочные
                                    деньги 7500 руб. Молодое поколение! Я даже не знал, что так можно! Микрозайм
                                    получили уже через минут 10. Не нарадуюсь, здоровья вам! Всё вернул в срок, спасибо!
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <h3>Тимур Кусимов, г. Уфа, 26 лет</h3>
                                <figcaption>
                                    Не могу не оставить отзыв, ребята конкретно помогли! Подвернулась горящая путёвка, и
                                    не хватало буквально несколько тысяч. А у нас с девушкой до зарплаты ещё полмесяца.
                                    Не долго думая, я полез в интернет и начал сравнивать ставки по онлайн займам. У вас
                                    оказались условия выгоднее всех, удивили!! В общем, займ взяли быстро и улетели
                                    загорать!) Зарплату потом получили и сразу погасили, конечно же. Видимо, скоро снова
                                    к вам обратимся))
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ex-section-4 hidden-xs hidden-sm">
    <h2 class="text-center">Быстрый старт</h2>
    <div class="ex-fast-start-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ex-fast-start ex-fast-active">
                                <div class="ex-count-zaim text-center">
                                    <span>5000</span><i></i>
                                </div>
                                <table>
                                    <tr>
                                        <td>Основная ставка</td><td>1.1%</td>
                                    </tr>
                                    <tr>
                                        <td>Cрок займа</td><td>от 61 дней</td>
                                    </tr>
                                </table>
                                <div class="es-fast-btn">
                                    <button class="ex-main-btn button1">Получить деньги</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ex-fast-start">
                                <div class="ex-count-zaim text-center">
                                    <span>15 000</span><i></i>
                                </div>
                                <table>
                                    <tr>
                                        <td>Основная ставка</td><td>1.1%</td>
                                    </tr>
                                    <tr>
                                        <td>Cрок займа</td><td>от 61 дней</td>
                                    </tr>
                                </table>
                                <div class="es-fast-btn">
                                    <button class="ex-main-btn button2" type="submit">Получить деньги</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<?php require 'footer.php'; ?>