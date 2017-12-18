<div class="ex-anketa-head">
    <p class="text-conf text-center">
        Данные о работе (шаг 3 из 3)
    </p>
</div>
<div class="ex-anketa-main">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work">Вид трудоустройства</label>
                        <select class="form-control ec" id="work" name="work" required>
                            <option value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
                            <option value="ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ">Индивидуальный предприниматель</option>
                            <option value="СТУДЕНТ">Студент</option>
                            <option value="ПЕНСИОНЕР">Пенсионер</option>
                            <option value="БЕЗРАБОТНЫЙ">Безработный</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_name">Место работы</label>
                        <input type="text" class="form-control ec tip" name="work_name" id="work_name" placeholder="Место работы" title="Укажите, ваше место работы"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите, ваше место работы" required>
                        <span id="work_namestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block" id="work_name_help"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_occupation">Должность</label>
                        <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" placeholder="Должность" title="Укажите, вашу должность"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите, вашу должность" required>
                        <span id="work_occupationstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_phone">Рабочий телефон</label>
                        <input type="tel" class="form-control ec tip" name="work_phone" placeholder="Рабочий телефон" title="Введите ваш рабочий телефон"
                            id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$"
                            data-validation-error-msg="Введите ваш рабочий телефон" required>
                        <span id="work_phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_experience">Стаж работы (в месяцах)</label>
                        <input type="tel" class="form-control ec tip" min="0" max="360" name="work_experience" id="work_experience" placeholder="Стаж работы (в месяцах)"
                            title="Введите ваш стаж работы в месяцах" data-validation="number" data-validation-error-msg="Введите ваш стаж работы в месяцах"
                            required>
                        <span id="work_experiencestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_salary">Зарплата (в рублях)</label>
                        <input type="tel" class="form-control ec tip" name="work_salary" id="work_salary" placeholder="Зарплата (в рублях)" title="Введите вашу среднюю зарплату"
                            data-validation="number" data-validation-error-msg="Введите среднюю зарплату" maxlength="6" required>
                        <span id="work_salarystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_region">Регион</label>
                        <select class="form-control ec tip" name="work_region" id="work_region" autocomplete="off" required>
                            <option value="0">-- Выберите регион --</option>
                            <?php
                        if (isset($regions) && is_array($regions))
                        {
                            foreach($regions as $region)
                            echo '<option value="'.$region['name'].'" data-id="'.$region['region_id'].'"'.((isset($region_name) && $region_name == $region['name'])? ' selected' : '').'>'.$region['name'].'</option>';
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_city">Населённый пункт</label>
                        <input type="text" class="form-control ec tip" name="work_city" placeholder="Населённый пункт" title="Укажите населенный пункт"
                            id="work_city" value="<?php echo isset($city_name)? $city_name : ''; ?>" data-sanitize="capitalize"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт"
                            required>
                        <span id="work_citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_street">Улица</label>
                        <input type="text" class="form-control ec tip" name="work_street" placeholder="Улица" title="Укажите улицу" id="work_street"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите улицу" required>
                        <span id="work_streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="work_house">№ дома</label>
                        <input type="text" class="form-control ec tip" name="work_house" placeholder="№ дома" title="Укажите № дома" id="work_house"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите № дома"
                            required>
                        <span id="work_housestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label for="work_building">Строение</label>
                        <input type="text" class="form-control ec tip" name="work_building" placeholder="Строение/корпус" title="Укажите строение/корпус"
                            id="work_building" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите строение/корпус"
                            data-validation-optional="true">
                        <span id="work_buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label for="work_office">Офис</label>
                        <input type="text" class="form-control ec tip" name="work_office" placeholder="Офис" title="Укажите № офиса" id="work_office"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите № офиса"
                            data-validation-optional="true">
                        <span id="work_officestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ex-anketa-foot">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-right">
            <button class="ex-main-btn" id="getmoney" style="width: 100%;text-transform: uppercase;">получить займ</button>
        </div>
    </div>
</div>