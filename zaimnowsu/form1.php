<section class="ex-main-form">
    <div class="row">
        <div class="col-lg-8 offset-lg-1">
            <div class="form-group row">
                <label class="col-md-3  d-flex align-items-center justify-content-md-end" for="f">Фамилия</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию"
                            required>
                          <p class="help-block2">Нужно указать фамилию</p> 
                        <p class="text-muted helpblock">Пример: Сулейменова</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 d-flex align-items-center justify-content-md-end" for="i">Имя</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
                            required>
                            <p class="help-block2">Нужно указать имя</p> 
                            <p class="text-muted helpblock">Пример: Аида</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 d-flex align-items-center justify-content-md-end" for="o">Отчество</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество"
                            required>
                            <p class="help-block2">Нужно указать отчество</p> 
                            <p class="text-muted helpblock">Пример: Аскаркызы</p>
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
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="birthdate">Дата рождения</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                            data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Возраст должен быть от 18 до 70 лет"
                            required>
                            <p class="help-block2"></p> 
                            <p class="text-muted helpblock">Пример: 06/02/2000</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="phone" id="spec_form2">Телефон</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Введите свой номер телефона"
                            title="Введите свой номер телефона" data-validation-error-msg="Введите номер телефона" required>
                        <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block2">Нужно указать номер телефона</p> 
                        <p class="text-muted helpblock">Пример: 711 123 45 67</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="iin" id="spec_form3">ИИН</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" name="iin" id="iin" placeholder="Введите свой номер ИИН" maxlength="12" minlength="12"
                            title="Введите свой номер иин" data-validation-error-msg="Введите номер ИИН" required>
                            <p class="help-block2">Нужно указать номер ИИН</p> 
                        <p class="text-muted helpblock">Пример: 118111111000</p>
                    </div>
                </div>
            </div> 
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="city">Город проживания</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="city" id="city" title="Укажите город в котором вы живете" placeholder="Город проживания"
                             data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$"
                            data-validation-error-msg="Нужно указать город в котором вы живете">
                            <p class="help-block2"></p> 
                            <p class="text-muted helpblock">Пример: Астана</p>
                    </div>
                </div>
            </div> 
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="email">Email</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
                            data-validation="email" data-validation-error-msg="Нужно указать свой email" required>
                            <p class="help-block2"></p> 
                            <p class="text-muted helpblock">Пример: email@mail.ru</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9  offset-md-3  ex-agreement-check">
                    <label class="checkbox-inline">
                        <span>Я ознакомился/ась и принимаю Правила предоставления займов и Политику конфиденциальности.</span>
                        <input type="checkbox" id="agree" value="1" checked>
                        <i></i>
                    </label>
                    <label class="hidden">
                        <input type="checkbox" id="marketing" value="1" checked>
                        <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-9 offset-md-3">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <button type="button" id="submitOne" class="nav nav-tabs ex-main-btn text-center"> Получить деньги </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>