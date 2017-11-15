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
                    <div id="ex-main-slider-range ">
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
                    <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Пожалуйста, введите свою фамилию"
			        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свою фамилию"
                    required>
                    <figure></figure>
			        <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="i">Имя</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Пожалуйста, введите свое имя" data-sanitize="capitalize"
                    data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое имя"
                    required>
                    <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="o">Отчество</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Пожалуйста, введите свое отчество"
                    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое отчество"
                    required>
                    <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>

        <div class="form-group has-feedback text-left hidden">
            <label class="col-sm-4 control-label label-required hidden-xs">Пол</label>
            <div class="col-sm-8 col-xs-12">
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="gender1" value="1" name="gender" checked="checked" required>
                    <label for="gender1"> Мужской </label>
                </div>
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="gender0" value="0" name="gender" required>
                    <label for="gender0"> Женский </label>
                </div>
            </div>
        </div>
            
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="birthdate">Дата рождения</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="birthdate" id="birthdate" placeholder="День рождения" title="Пожалуйста, выберете свою дату рождения"
                    data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения"
                    required>
                    <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> 
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="phone">Телефон</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Введите свой номер телефона" title="Пожалуйста, введите свой номер телефона"
                    data-validation-error-msg="Пожалуйста, введите номер телефона"   required>
                    <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="email">Email</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Пожалуйста, введите свой email адрес" placeholder="Email"
                    title="Email" data-validation="email"  data-validation-error-msg="Пожалуйста, введите свой email" required>
                    <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="delays_type">Кредитная история</label>
            <div class="col-md-8">
                <select class="form-control ec" name="delays_type" id="delays_type" required>
                    <option value="never">Никогда не брал(а) кредитов</option>
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
                    <input type="checkbox" onClick="checkMe();" id="agree" value="1" checked>
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
                <!-- <button id="submitOne" type="submit" class="ex-blue-btn" data-target="#secondTabContent" aria-controls="secondTabContent"
                    data-toggle="tab">Далее
                </button> -->
                <a class="ex-blue-btn text-center special_forms" id="next1">Далее <i class="fa fa-caret-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="ex-inf-anceta">
    <img src="/templates/zaimcoin/assets/img/doc.png" alt="doc.png">
    <p id="spec_form">Заполнение анкеты не обязывает вас взять займ. Вы сможете подтвердить его или отказаться от предложения</p>
</div>