<div class="ex-anketa-head">
    <img src="/templates/zaimhunter/assets/img/active1.png" alt="active1.png">
    <h2 class="">
        Личные данные
    </h2>
</div>
<div class="row">
<h3 class="hidden-md hidden-lg visible-xs visible-sm text-center amm" id="amm" ></h3>
    <div class="col-sm-6 col-xs-12">
        <div class="ex-anketa-main"> 
            <div class="form-group has-feedback">
                <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию"
			    required>
			    <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
                data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
                required>
                <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество"
			    required>
			    <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            <input type="hidden" id="gender" value="1" name="gender" required> 
            <div class="form-group has-feedback ex-arrow-on">
                <input type="text" class="form-control ec tip special_form" name="birthdate" id="birthdate" placeholder="День рождения" title="Выберете свою дату рождения"
			    data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
			    required>
			    <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> 
            </div>
            <div class="form-group has-feedback">
                <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Телефон" title="Введите свой телефон"
		        data-validation-error-msg="Выберите номер телефона"   required>
		        <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
			    title="Email" data-validation="email" required>
		        <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> 
            </div>
            <div class="form-group ex-arrow-on">
                <select class="form-control ec" name="delays_type" id="delays_type" required>
                    <option value="never">Никогда не брал(а) кредитов</option>
                    <option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
                    <option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
                    <option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
                    <option value="had_delay">Просрочки были, сейчас нет</option>
                    <option value="has_delay">Просрочки сейчас есть</option>
		        </select>
            </div>
            <div class="form-group ex-agreement-check">
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
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn special_index5 special_form3 text-center" id="next1">Далее <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xs-12 hidden-xs hidden-sm">
        <div class="ex-calc-wraper">
            <figure class="ex-val-block">
                <p id="ex-slider-val" class="text-right"></p>
            </figure>
            <div class="ex-range-scope">
                <div id="ex-main-slider-range">
                    <figure class="ex-range-slider">
                        <input type="text" id="rangeSlider" name="rangeSlider" value="0" />
                        <span class="ex-probability"></span>
                    </figure>
                    <div class="ex-slider-info">
                    </div>
                </div>
            </div> 
        </div>
            <p>Вводите только корректные и актуальные данные.
            <br> Заполнение анкеты не обязывает вас взять займ. Но неверно указанные
            <br>данные приведут к последующей блокировке в системе. </p>
    </div>
</div>