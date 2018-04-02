<section class="ex-main-form">
    <div class="ex-range-slider-block">
        <div class="ex-range-scope">
            <div id="ex-main-slider-range">
                <figure class="ex-range-slider">
                    <input type="text" id="rangeSlider" name="rangeSlider" value="0" />
                </figure>
            </div>
        </div>
        <div class="ex-calc-wraper">
            <div class="ex-tab-section">
                <div class="ex-calc-block ">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-xs-4 ex-mb">
                                    <div class="ex-icon-bg">
                                        <img src="/templates/dengomir/assets/img/icons/1.png" alt="1.png">
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="ex-val-block">
                                        <span class="ex-unique">Сумма займа</span>
                                        <span class="ex-slider-val ex-result-style"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-xs-4 ex-mb">
                                    <div class="ex-icon-bg">
                                        <img src="/templates/dengomir/assets/img/icons/2.png" alt="2.png">
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="ex-crumbs">
                                        <span class="ex-unique">К возврату</span>
                                        <span class="ex-total ex-result-style"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-xs-4 ex-mb">
                                    <div class="ex-icon-bg">
                                        <img src="/templates/dengomir/assets/img/icons/3.png" alt="3.png">
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="ex-crumbs">
                                        <span class="ex-unique">Срок займа</span>
                                        <span class="ex-ot">от</span>
                                        <span class="ex-time ex-result-style"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="ex-form-wrap">
        <div class="form-group has-feedback">
            <div class="row">
                <label class="control-label col-md-3" for="f">Фамилия</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию"
                            required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <label class="control-label col-md-3" for="i">Имя</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
                            required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <label class="control-label col-md-3" for="o">Отчество</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество"
                            required>
                    </div>
                </div>
            </div>
            <input type="hidden" id="gender" value="1" name="gender" required>
            <div class="form-group has-feedback hidden">
                <div class="row">
                    <label class="control-label col-md-3" for="birthdate">Дата рождения
                    </label>
                    <div class="col-md-9">
                        <div class="ex-wrapper">
                            <input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                                data-validation="custom" value="06/12/1988" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
                                required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="row">
                    <label class="control-label col-md-3" id="spec_form2" for="phone">Телефон</label>
                    <div class="col-md-9">
                        <div class="ex-wrapper">
                            <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Введите свой номер телефона"
                                title="Введите свой номер телефона" data-validation-error-msg="Введите номер телефона" required>
                            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="row">
                    <label class="control-label col-md-3" for="email">Email</label>
                    <div class="col-md-9">
                        <div class="ex-wrapper">
                            <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
                                data-validation="email" data-validation-error-msg="Введите свой email" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="row">
                    <label class="control-label col-md-3" for="delays_type">Кредитная история
                    </label>
                    <div class="col-md-9">
                        <div class="ex-wrapper ex-arrow">
                            <select class="form-control ec special_form99" name="delays_type" id="delays_type" required>
                                <option value="never">Никогда не брал(а) кредитов</option>
                                <option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
                                <option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
                                <option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
                                <option value="had_delay">Просрочки были, сейчас нет</option>
                                <option value="has_delay">Просрочки сейчас есть</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ex-agreement-check">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <label class="checkbox-inline">
                            <span>Я согласен(на) на обработку персональных данных и с публичной офертой</span>
                            <input type="checkbox" onClick="checkme_form();" id="agree" value="1" checked>
                            <i></i>
                        </label>
                        <label class="hidden">
                            <input type="checkbox" id="marketing" value="1" checked>
                            <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <a id="next1">
                <div class="col-md-6 col-md-offset-3">
                    <span id="submitOne" class="ex-main-btn">Получить деньги
                        <i></i>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>