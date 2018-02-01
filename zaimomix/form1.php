<section class="ex-main-form">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-1">
                                <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="ex-calc-block">
                                            <div class="ex-wrapper">
                                                <div class="ex-slider-block ">
                                                    <span>Сумма займа</span>
                                                    <p class="ex-slider-val"></p>
                                                </div>
                                                <div class="ex-range-slider ">
                                                    <input id="rangeSlider" name="rangeSlider"/>
                                                    <span class="ex-small-cost ex-left">1 000 </span>
                                                    <span class="ex-small-cost ex-right">100 000 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback row">
                                    <label class="col-md-3  d-flex align-items-center justify-content-md-end"
                                           for="f">Фамилия</label>
                                    <div class="col-md-9">
                                        <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
                                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию"
                                        required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback row">
                                    <label class="col-md-3 d-flex align-items-center justify-content-md-end"
                                           for="i">Имя</label>
                                    <div class="col-md-9">
                                        <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
                                        data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
                                        required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback row">
                                    <label class="col-md-3 d-flex align-items-center justify-content-md-end"
                                           for="o">Отчество</label>
                                    <div class="col-md-9">
                                        <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество"
                            required>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="gender" value="1" name="gender">
                                <div class="form-group has-feedback row">
                                    <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end"
                                           for="birthdate">Дата рождения</label>
                                    <div class="col-md-9">
                                        <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                                        data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
                                        required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback row">
                                    <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end"
                                           for="phone" id="spec_form2">Телефон</label>
                                    <div class="col-md-9">
                                        <div class="ex-wrapper">
                                        <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Введите свой номер телефона"
                                        title="Введите свой номер телефона" data-validation-error-msg="Введите номер телефона" required>
                                    <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback row">
                                    <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end"
                                           for="email">Email</label>
                                    <div class="col-md-9">
                                        <div class="ex-wrapper">
                                        <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
                                        data-validation="email" data-validation-error-msg="Введите свой email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback row">
                                    <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end"
                                           for="delays_type">Кредитная история</label>
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
                                <div class="row">
                                    <div class="col-md-9  offset-md-3  ex-agreement-check">
                                        <label class="checkbox-inline"><span>Я согласен на обработку персональных данных и с публичной офертой</span>
                                            <input type="checkbox" id="agree" value="1" checked>
                                            <i></i>
                                        </label>
                                        <label class="hidden">
                                            <input type="checkbox" id="marketing" value="1" checked>
                                            <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group has-feedback row">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                                <button type="button" id="submitOne" class="nav nav-tabs ex-orange-btn text-center"> Далее </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>