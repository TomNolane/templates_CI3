<div class="ex-form-bg">
    <p class="ex-step">шаг 1</p>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="ex-calc-wraper">
                <div class="ex-range-scope">
                    <figure class="ex-val-block text-right">
                        <p id="ex-slider-val"></p>
                    </figure>

                    <div class="hidden-xs hidden-sm">
                        <div id="ex-main-slider-range">
                            <figure class="ex-range-slider">
                                <input type="text" id="rangeSlider" name="rangeSlider" value="0" />
                            </figure>
                            <div class="ex-slider-info">
                                <span>1 000</span>
                                <span>100 000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-horizontal">
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="f">Фамилия</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию"
                        required>
                    <figure></figure>
                    <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <p class="text-muted helpblock">Пример: Иванова</p>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="i">Имя</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
                        data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
                        required>
                    <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <p class="text-muted helpblock">Пример: Лариса</p>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="o">Отчество</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество"
                        required>
                    <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
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
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="birthdate">Дата рождения</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Пожалуйста, выберете свою дату рождения"
                        data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения"
                        required>
                    <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <p class="text-muted helpblock">Пример: 06/02/2000</p>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" id="spec_form2" for="phone">Телефон</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Введите свой номер телефона"
                        title="Введите свой номер телефона" data-validation-error-msg="Введите номер телефона" required>
                    <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="email">Email</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
                        data-validation="email" data-validation-error-msg="Введите свой email" required>
                    <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <p class="text-muted helpblock">Пример: email@mail.ru</p>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="delays_type">Кредитная история</label>
            <div class="col-md-8">
                <select size="1" class="form-control ec" name="delays_type" id="delays_type">
                    <option selected value="never">Никогда не брал(а) кредитов</option>
                    <option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
                    <option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
                    <option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
                    <option value="had_delay">Просрочки были, сейчас нет</option>
                    <option value="has_delay">Просрочки сейчас есть</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ex-agreement-check">
                <label class="checkbox-inline">
                    <span>Я согласен на обработку персональных данных и с публичной офертой</span>
                    <input type="checkbox" onClick="checkme_form();" id="agree" value="1" checked>
                    <i></i>
                </label>
                <label id="display-none">
                    <input type="checkbox" id="marketing" value="1" checked>
                    <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-right">
                <button type="button" id="next1" class="ex-blue-btn special_forms"> Далее </button>
            </div>
        </div>
    </div>
</div>
<div class="ex-inf-anceta">
    <img src="/templates/zaimcoin/assets/img/doc.png" alt="doc.png">
    <p class="spec_form">Заполнение анкеты не обязывает вас взять займ. Вы сможете подтвердить его или отказаться от предложения</p>
</div>