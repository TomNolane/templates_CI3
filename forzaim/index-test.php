<?php 
include "templates/common/new/php/form_header.php";
require 'header.php'; ?>
<form id="anketa" action="/lk" method="post" class="form-horizontal" autocomplete="off" novalidate>
<input type="hidden" name="display" id="display" value="0">
<input type="hidden" name="referer" value="<?=$referer?>">
<input type="hidden" name="id" value="">
<input type="hidden" name="step" value="1">
<input type="hidden" name="ad_id" value="<?=$ad_id?>">
<input type="hidden" id="amount" name="amount" value="20000" />
<input type="hidden" id="period" name="period" value="21" />
<input type="hidden" id="form_slrd" name="form_slrd" value="15" />
<input type="hidden" name="fingerprint" id="fingerprint" value="">
<input type="hidden" name="ip" id="ip" value="<?php echo $ip;?>">
<style>
.cpesial2 {
    background-color: #fff;
    border-radius: 20px;
    border: 2px solid;
}
h3 {
    margin-top: 0;
    margin-bottom: 0;
}
.ex-agreement-check label {
    margin-top: 0 !important;
}
.form-control {
    color: #000;
}
.center {
    text-align: center !important;
    font-size: 24px;
}
.header_index {
    margin-bottom: 15px;
}
@media (max-width: 450px) { 
    .center { 
        text-align: center !important;
        font-size: 16px;
    }
    .form-control {
       height: 46px;
    } 
    .form-group {
        margin-bottom: 0;
    }
    .ex-agreement-check label span {
        line-height: 20px;
        margin-top: -15px;
    }
    label {
        line-height: 44px;
    }
    .ex-section-1 {
        min-height: 516px;
    }
    .ex-main-header {
        height: 54px;
    }
    .ex-main-header a.ex-brand {
        font-size: 2em;
    }
    .ex-main-header i.ex-hamburger {
        width: 30px;
        height: 30px;
    }
    aside.ex-aside-menu main ul li.ex-larger {
        font-size: 13px;
        line-height: 1.5em;
    }
    .ex-main-btn {
        padding: 18px;
    }
    aside.ex-aside-menu.ex-is-open {
        width: 70%; 
    }
    .ex-main-form {
        padding: 0 10px;
    }
    .ex-section-1 .ex-tab-section .ex-calc-block {
        margin-bottom: 5px;
        padding: 0 0 25px 0;
    }
    .ex-agreement-check label i {
        height: 20px;
        width: 20px;
    }
    .ex-agreement-check label i:after {
        left: 6px;
    }
    .ex-section-1 .ex-tab-section .ex-calc-block li .ex-unique {
        padding-top: 10px;
        padding-bottom: 0;
        font-size: 17px;
        display: inline;
    }
    .ex-section-1 .ex-tab-section .ex-calc-block li .ex-result-style {
        font-size: 24px;
    }
 }
</style>
<section class="ex-section-1">
    <nav class="ex-main-header ex-transparent">
        <div class="container">
            <i class="ex-hamburger"></i>
            <a class="ex-brand" href="/">Forzaim</a>
        </div>
    </nav>
    <div class="ex-main">
        <div class="container">
            <!-- <h1 class="text-center hidden-xs hidden-sm">Forzaim – формула выгодных займов</h1> -->
            <h3 class="text-center hidden-xs hidden-sm header_index">До одобрения займа вас отделает всего один шаг</h3>
            <div class="ex-calc-wraper"> 
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="ex-tab-section">
                            <ul class="ex-calc-block ">
                                <li>
                                    <div class="ex-val-block"><span class="ex-unique"><br>Сумма займа (в рублях) </span>
                                        <span class="ex-slider-val ex-result-style"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ex-crumbs"><span class="ex-unique">Срок займа (в днях) </span>
                                        <span class="ex-ot">от</span><span class="ex-time ex-result-style"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ex-crumbs hidden-xs hidden-sm"><span class="ex-unique">К возврату (в рублях) </span>
                                        <span class="ex-total ex-result-style"></span>
                                    </div>
                                </li>
                            </ul>
                            <!-- <div class="ex-for-button text-center">
                                <button class="ex-main-btn">Получить деньги</button>
                            </div> -->
                        </div>
                        <div class="ex-range-scope">
                            <div id="ex-main-slider-range">
                                <figure class="ex-range-slider">
                                    <input type="text" id="rangeSlider" name="rangeSlider" value="0"/>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="ex-main-form">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 cpesial2">
                        <div class="ex-pr">
                            <div class="form-group has-feedback hidden">
                                <label class="control-label col-md-4" for="f">Фамилия</label>
                                <div class="col-md-8">
                                    <div class="ex-wrapper">
                                        <input type="text" value="Иванова" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Укажите свою фамилию"
                                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                            data-validation-error-msg="Укажите свою фамилию" required>
                                            <p class="help-block2">Нужно указать фамилию</p>
                                            <p class="text-muted helpblock">Пример: Иванова</p>
                                    </div>
                                </div>
                            </div>
                            <br class="hidden-xs hidden-sm">
                            <div class="form-group has-feedback text-center">
                                <label class="control-label col-md-12 center">Заполните личные данные</label> 
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3 hidden-xs" for="i">Имя</label>
                                <div class="col-md-7 col-xs-12">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control pulse ec tip special_form" name="i" id="i" placeholder="Имя" title="Укажите свое имя" data-sanitize="capitalize"
                                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свое имя"
                                            required>
                                            <p class="help-block2">Нужно указать имя</p>
                                            <p class="text-muted helpblock hidden-xs hidden-sm">Пример: Лариса</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback hidden">
                                <label class="control-label col-md-4" for="o">Отчество</label>
                                <div class="col-md-8">
                                    <div class="ex-wrapper">
                                        <input type="text" value="Ивановна" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Укажите свое отчество"
                                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                            data-validation-error-msg="Укажите свое отчество" required>
                                            <p class="help-block2">Нужно указать отчество</p> 
                                            <p class="text-muted helpblock">Пример: Ивановна</p>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="gender" value="1" name="gender">
                            <!-- Скрываем старую форму даты рождения -->
                            <div class="form-group hidden">
                                <label class="col-sm-4 control-label label-required hidden-xs" for="birth_dd">Дата рождения*</label>
                                <div class="col-sm-2">
                                    <div class="shadow">
                                        <select size="1" class="form-control ec" id="birth_dd" name="birth_dd">
                                            <option>выбери</option>
                                            <option value="0">День</option>
                                            <?php for($i=1;$i<=31;$i++) echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>'; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="shadow">
                                        <label class="col-sm-4 control-label label-required hidden-xs" for="birth_mm">Дата рождения</label>
                                        <select size="1" class="form-control ec" id="birth_mm" name="birth_mm">
                                            <option>выбери</option>
                                            <option value="0">Месяц</option>
                                            <option value="01">Январь</option>
                                            <option value="02">Февраль</option>
                                            <option value="03">Март</option>
                                            <option value="04">Апрель</option>
                                            <option value="05">Май</option>
                                            <option value="06">Июнь</option>
                                            <option value="07">Июль</option>
                                            <option value="08">Август</option>
                                            <option value="09">Сентябрь</option>
                                            <option value="10">Октябрь</option>
                                            <option value="11">Ноябрь</option>
                                            <option value="12">Декабрь</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="shadow">
                                        <label class="col-sm-4 control-label label-required hidden-xs" for="birth_yyyy">Дата рождения</label>
                                        <select size="1" class="form-control ec" id="birth_yyyy" name="birth_yyyy">
                                            <option>выбери</option>
                                            <option value="0">Год</option>
                                            <?php
                                                for($i=date('Y', strtotime('-80 years', time()));$i<=date('Y', strtotime('-18 years', time()));$i++)
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Скрываем старую форму даты рождения -->
                            <div class="form-group has-feedback hidden">
                                <label class="control-label col-md-4" for="birthdate">Дата рождения</label>
                                <div class="col-md-8">
                                    <div class="ex-wrapper">
                                        <input type="tel" class="form-control ec tip" value="06/02/2000" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                                            data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
                                            required>
                                            <p class="help-block2"></p>
                                            <p class="text-muted helpblock">Пример: 06/02/2000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3 hidden-xs" for="phone">Телефон</label>
                                <div class="col-md-7 col-xs-12">
                                    <div class="ex-wrapper">
                                        <input type="tel" class="form-control pulse ec tip" name="phone" id="phone" placeholder="Укажите № телефона" title="Введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Укажите № телефона" required="">
                                        <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <p class="help-block2">Нужно указать номер телефона</p>
                                        <p class="text-muted helpblock hidden-xs hidden-sm">Пример: 8 (977) 777 7777</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3 hidden-xs" for="email">Email</label>
                                <div class="col-md-7 col-xs-12">
                                    <div class="ex-wrapper">
                                        <input type="email" class="form-control pulse ec tip special_form" name="email" id="email" title="Укажите свой email адрес" placeholder="Email"
                                            data-validation="email" data-validation-error-msg="Укажите свой email" required>
                                            <p class="help-block2"></p>
                                            <p class="text-muted helpblock hidden-xs hidden-sm">Пример: email@mail.ru</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Регион и город -->
                        <div class="form-group has-feedback hidden">
                            <label class="control-label col-md-4" for="region">Регион проживания</label>
                            <div class="col-md-8">
                                <div class="ex-wrapper ex-arrow">
                                    <select class="form-control ec tip special_form99" id="region" name="region" autocomplete="off" required>
                                        <option value="1" data-id="Краснодар">Краснодар</option>
                                        <option value="2" data-id="Красноярский край" selected>Красноярский край</option>
                                        <option value="3" data-id="Республика Карелия">Республика Карелия</option>
                                        <?php
                                        // if (isset($regions) && is_array($regions))
                                        // {
                                        //     foreach($regions as $region)
                                        //     echo '<option value="'.$region['name'].'" data-id="'.$region['region_id'].'"'.((isset($region_name) && $region_name == $region['name'])? ' selected' : '').'>'.$region['name'].'</option>';
                                        // }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback hidden">
                            <label class="control-label col-md-4" for="city">Город проживания</label>
                            <div class="col-md-8">
                                <div class="ex-wrapper">
                                    <input type="text" value="г. Новосибирск" class="form-control ec tip" name="city" id="city" title="Укажите город в котором вы живете" value="<?php echo isset($city_name)? $city_name : ''; ?>"
                                        pattern="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$"
                                        data-validation-error-msg="Укажите, населенный пункт">
                                        <p class="help-block2">Укажите город своего проживания</p>
                                        <p class="text-muted helpblock">Пример: г. Новосибирск</p>
                                </div>
                            </div>
                        </div>
                            <!-- Регион и город -->
                            <div class="form-group has-feedback hidden">
                                <label class="control-label col-md-4" for="delays_type">Кредитная история</label>
                                <div class="col-md-8">
                                    <div class="ex-wrapper ex-arrow">
                                        <select size="1" class="form-control ec special_form99" name="delays_type" id="delays_type">
                                            <option selected value="never">Никогда не брал(а) кредитов</option>
                                            <option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
                                            <option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
                                            <option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
                                            <option value="had_delay">Просрочки были, сейчас нет</option>
                                            <option value="has_delay">Просрочки сейчас есть</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 ex-agreement-check">
                                    <label class="checkbox-inline">
                                        <span class="font12">Я согласен на обработку персональных данных и с публичной офертой</span>
                                        <input type="checkbox" onClick="checkMeee();" id="agree" value="1" checked>
                                        <i></i>
                                    </label>
                                </div>
                                <div class="col-md-10 col-md-offset-1 ex-agreement-check">
                                    <label class="checkbox-inline">
                                        <span class="font12">Я согласен на получение рекламных сообщений</span>
                                        <input type="checkbox" onClick="checkMeee();" id="marketing" value="1" checked>
                                        <i></i>
                                    </label>
                                </div>
                                
                            </div>
                            <br><br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm>
                            <div class="form-group">
                                <a id="next1">
                                <div class="ex-for-button text-center">
                                        <span id="next1" class="ex-main-btn">Получить деньги</span>
                                    </div>
                                </a>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<br><br><br>
 <div class="container">
    <div class="row"> 
        <div class="col-md-12">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- forzaim -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="6265677912"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        </div>
    </div>
</div>

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
</form>
<script>
function checkMeee()
{
    if(document.querySelector('#next1').hidden == false)
        document.querySelector('#next1').hidden = true
    else
        document.querySelector('#next1').hidden = false
}
</script>
<?php require 'footer.php'; ?>