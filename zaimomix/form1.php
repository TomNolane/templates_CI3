<style>
.myfnt {font-size: 21px !important;}
.myinput {
    text-align: center !important;
    border: 1px solid #777 !important;
    border-radius: 10px 10px 10px 10px !important;
    -moz-border-radius: 10px 10px 10px 10px !important;
    -webkit-border-radius: 10px 10px 10px 10px !important;
    height: 50px !important;
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

.shortform1 {
    border-radius: 20px 20px 20px 20px !important;
    -moz-border-radius: 20px 20px 20px 20px !important;
    -webkit-border-radius: 20px 20px 20px 20px !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
    height: 50px !important;
    padding: 0 !important;
}

.shortform2 {
    <?php if ($setting_array['is_mobile'] != 'мобила') : ?>
        padding-top: 20px !important;
    <?php endif; ?>
}

.shortform3 {
    <?php if ($setting_array['is_mobile'] == 'мобила') : ?>
        margin-top: -20px;
        margin-bottom: -20px;
    <?php endif; ?>
}

main.ex-form .tab-content .ex-main-form .ex-wrapper.ex-error:after {
    <?php if ($setting_array['is_mobile'] != 'мобила') : ?>
        top: 20px !important;
    <?php endif; ?>
}
</style>
<section class="ex-main-form">
    <div class="row">
        <div class="col-lg-8 offset-lg-1">
            <div class="row">
                <div class="col-md-7 col-sm-offset-4 col-xs-12">
                    <div class="ex-calc-block">
                        <div class="ex-wrapper">
                            <div class="ex-slider-block ">
                                <span>Сумма займа</span>
                                <p class="ex-slider-val"></p>
                            </div>
                            <div class="ex-range-slider ">
                                <input id="rangeSlider" name="rangeSlider" />
                                <span class="ex-small-cost ex-left">1 000 </span>
                                <span class="ex-small-cost ex-right">100 000 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback row hidden">
                <label class="col-md-3  d-flex align-items-center justify-content-md-end" for="f">Фамилия</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию"
                            required value="тест">
                            <p class="text-muted helpblock">Пример: Иванова</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback row hidden">
                <label class="col-md-3 d-flex align-items-center justify-content-md-end" for="i">Имя</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
                            required value="тест">
                            <p class="text-muted helpblock">Пример: Лариса</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback row hidden">
                <label class="col-md-3 d-flex align-items-center justify-content-md-end" for="o">Отчество</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество"
                            required value="тест">
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
            <div class="form-group has-feedback row hidden">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="birthdate">Дата рождения</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                            data-validation="custom" value="06/02/2000" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
                            required>
                            <p class="text-muted helpblock">Пример: 06/02/2000</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end hidden" for="phone" id="spec_form2">Телефон</label>
                <div class="col-md-7 col-xs-12 col-sm-offset-4 shortform2">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip special_form myfnt myinput" name="phone" id="phone" placeholder="№ телефона"
                            title="Введите свой номер телефона" data-validation-error-msg="Введите номер телефона" required>
                        <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end hidden" for="email">Email</label>
                <div class="col-md-7 col-xs-12 col-sm-offset-4">
                    <div class="ex-wrapper">
                        <input type="email" class="form-control ec tip special_form myfnt myinput" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
                            data-validation="email" data-validation-error-msg="Введите свой email" required>
                            <p class="text-muted helpblock">Пример: email@mail.ru</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback row hidden"> 
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="delays_type">Кредитная история</label>
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
            <div class="row shortform3">
                <div class="col-md-7 col-sm-offset-4 col-xs-12 ex-agreement-check">
                    <label class="checkbox-inline">
                        <span class="font12">Я согласен на обработку персональных данных и с публичной офертой</span>
                        <input type="checkbox" id="agree" value="1" onclick="checkMee();" checked>
                        <i></i>
                    </label>
                </div>
                <div class="col-md-9  offset-md-3  ex-agreement-check hidden">
                    <label class="checkbox-inline">
                        <span class="font12">Я согласен на получение рекламных сообщений</span>
                        <input type="checkbox" id="marketing" value="1" checked>
                        <i></i>
                    </label>
                </div>               
            </div>
            <div class="form-group has-feedback row">
                <div class="col-md-7 col-sm-offset-4 col-xs-12">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <button type="button" id="next1" class="nav nav-tabs ex-orange-btn text-center shortform1 myfnt"> Получить деньги </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<br><br>