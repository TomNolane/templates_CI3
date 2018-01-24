<section class="ex-main-form">
    <div class="row">
        <div class="col-md-9">
        <div class="form-group has-feedback">
            <label class="control-label col-md-4" for="work" id="work_label">Вид трудоустройства</label>
            <div class="col-md-8">
                <div class="ex-wrapper ex-arrow">
                <select class="form-control ec special_form99" id="work" name="work" required>
                <option value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
                <option value="ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ">Индивидуальный предприниматель</option>
                <option value="СТУДЕНТ">Студент</option>
                <option value="ПЕНСИОНЕР">Пенсионер</option>
                <option value="БЕЗРАБОТНЫЙ">Безработный</option>
            </select>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-4" for="work_name" id="work_name_label">Место работы</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="work_name" id="work_name" placeholder="Место работы" title="Укажите, ваше место работы" data-sanitize="capitalize" data-validation="custom" data-validation-regexp='^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)"]+$' data-validation-error-msg="Укажите, ваше место работы" required>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-4" for="position" id="position_label">Должность</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" placeholder="Должность" title="Укажите, вашу должность" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите, вашу должность" required>
                </div>
            </div>
        </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_phone" id="work_phone_label">Рабочий телефон</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" name="work_phone" placeholder="Рабочий телефон" title="Введите ваш рабочий телефон" id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Введите ваш рабочий телефон" data-validation-optional="true">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_experience" id="work_experience_label">Стаж работы(в месяцах)
            </label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" min="0" max="360" placeholder="Стаж работы в месяцах" name="work_experience" id="work_experience" title="Введите ваш стаж работы в месяцах" data-validation="number" data-validation-error-msg="Введите ваш стаж работы в месяцах" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_salary" id="work_salary_label">Зарплата(в рублях)</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" name="work_salary" id="work_salary" maxlength="6" placeholder="Зарплата в рублях" title="Введите вашу среднюю зарплату" data-validation="number" data-validation-error-msg="Введите среднюю зарплату" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_region" id="work_region_label">Регион</label>
                <div class="col-md-8">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec tip special_form99" name="work_region" id="work_region" autocomplete="off" required>
                        <option value="0">!!! Выберите регион места работы !!!</option>
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
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_city" id="work_city_label">Населённый пункт</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_city" placeholder="Город" title="Укажите населенный пункт" id="work_city" value="<?php echo isset($city_name)? $city_name : ''; ?>" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_street" id="work_street_label">Улица</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_street" placeholder="Улица" title="Укажите улицу" id="work_street" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите, улицу" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_house" id="work_house_label">Номер дома</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_house" placeholder="Номер дома" title="Укажите номер дома" id="work_house" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер дома" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-4" for="str">Строение (корпус)</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_building" placeholder="Корпус" title="Укажите номер строения или корпуса" id="work_building" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, строение (корпус)" data-validation-optional="true">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_office" id="work_office_label">Офис</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_office" placeholder="Номер офиса" title="Уукажите номер офиса" id="work_office" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер офиса" data-validation-optional="true">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="col-md-8 col-md-offset-4">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <input id="form-send" class="ex-main-btn btn2 text-center" value="Получить деньги"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>