<style>
#exMainHeader .navbar-header .navbar-brand {
    width: 250px !important;
    height: 50px !important;
}
.myfnt {font-size: 21px !important;}
.myinput {
    border: 2px solid #666 !important;
    background: #FFF !important;
    text-align: center !important;
}
.ex-slider-val {
    font-size: 40px !important;
    line-height: 40px !important;
}
main.ex-main-form .tab-content .ex-wrapper.ex-val-select p i {
    height: 40px;
    width: 24px;
    margin-left: 10px;
}
main.ex-main-form .tab-content .ex-wrapper.ex-val-select p {
    padding: 9px 0px !important;
    text-align: center !important;
}
.irs-bar, .irs-bar-edge, .irs-line,.irs-slider{
    height: 50% !important;
}
.irs-bar-edge, .irs-slider {
    border-radius: 10px !important;
}
.myborder {
    border-radius: 15px 15px 15px 15px !important;
    -moz-border-radius: 15px 15px 15px 15px !important;
    -webkit-border-radius: 15px 15px 15px 15px !important;
}
.form-control {
    padding-left: 5px !important;
}
::-webkit-input-placeholder {
   text-align: center;
   font-size: 21px !important;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;
   font-size: 21px !important;
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;
   font-size: 21px !important;
}

:-ms-input-placeholder {  
   text-align: center;
   font-size: 21px !important;
}
.ex-main-btn {
    width: 70% !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding: 10px 0 10px !important;
    <? if ($setting_array['is_mobile'] == 'мобила') : ?>
    font-size: 18px;
    width: 100% !important;
    <? endif; ?>
    border-radius: 30px 30px 30px 30px !important;
    -moz-border-radius: 30px 30px 30px 30px !important;
    -webkit-border-radius: 30px 30px 30px 30px !important;
}
</style>
<section class="container-fluid ex-main-form" style="padding-bottom: 100px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <!-- <div class="form-group has-feedback"> -->
            <div class="">
                <div class="col-md-8 col-md-offset-4">
                    <div class="ex-wrapper ex-val-select">
                        <p class="ex-slider-val myborder"></p>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group has-feedback"> -->
            <div class="">
                <div class="col-md-8 col-md-offset-4">
                    <div class="ex-wrapper ex-slider-wrapper">
                        <input type="text" id="rangeSlider" name="rangeSlider" value="" />
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-3" for="f">Фамилия</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Укажите свою фамилию"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Укажите свою фамилию" required value="тест">
                                <p class="help-block2">Нужно указать фамилию</p>
                                <p class="text-muted helpblock">Пример: Иванова</p>
                    </div>
                </div>
            </div> 
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-3" for="i">Имя</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Укажите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Укажите свое имя" required value="тест">
                                <p class="help-block2">Нужно указать имя</p>
                                <p class="text-muted helpblock">Пример: Лариса</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-3" for="o">Отчество</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Укажите свое отчество"
                    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                    data-validation-error-msg="Укажите свое отчество" required value="тест">
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
                <label class="control-label col-md-3" for="birthdate">Дата рождения</label>
                <div class="col-md-9">
                    <div class="ex-wrapper"> 
                            <input type="tel" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                                data-validation="custom" value="06/02/2000" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
                                required>
                                <p class="help-block2"></p>
                                <p class="text-muted helpblock">Пример: 06/02/2000</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback" style="margin-bottom: 40px; margin-top: 40px;">
                <label class="control-label col-sm-offset-1 col-md-4 hidden" id="spec_form2" for="phone">Телефон</label>
                <div class="col-md-8 col-sm-offset-4 col-xs-12">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip special_form myfnt myinput" name="phone" id="phone" placeholder="№ телефона"
                                title="Укажите свой номер телефона" data-validation-error-msg="Укажите номер телефона"
                                required>
                            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <p class="help-block2">Нужно указать номер телефона</p>
                            <p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-sm-offset-1 col-md-4 hidden" for="email">Email</label>
                <div class="col-md-8 col-sm-offset-4 col-xs-12">
                    <div class="ex-wrapper">
                        <input type="email" class="form-control ec tip special_form myfnt myinput" name="email" id="email" title="Укажите свой email адрес"
                        placeholder="Email" data-validation="email" data-validation-error-msg="Укажите свой email" required>
                        <p class="help-block2"></p>
                        <p class="text-muted helpblock">Пример: email@mail.ru</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-3" for="delays_type">Кредитная история</label>
                <div class="col-md-9">
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
                <div class="col-md-8 col-sm-offset-4 col-xs-12 ex-agreement-check">
                    <label class="checkbox-inline">
                        <a href="/oferta" target="_blank"><span class="font12">Я согласен на обработку персональных данных и с публичной офертой</span></a>
                        <input type="checkbox" onClick="checkMee();" id="agree" value="1" checked>
                        <i></i>
                    </label>
                </div>
                <div class="col-md-9 col-md-offset-3 ex-agreement-check hidden">
                    <label class="checkbox-inline">
                            <span class="font12">Я согласен на получение рекламных сообщений</span>
                            <input type="checkbox" id="marketing" value="1" checked>
                            <i></i>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8 col-xs-12 col-md-offset-4">
                    <a id="next1"><span class="ex-main-btn">Получить деньги</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- fanzaim -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="5186306631"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>