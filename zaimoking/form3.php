<section class="ex-main-form">
    <div class="row">
        <div class="col-md-9">
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work" id="work_label">Вид трудоустройства</label>
                <div class="col-md-8">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec special_form99" id="work" name="work">
                            <option selected value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
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
                        <input type="text" class="form-control ec tip" name="work_name" id="work_name" placeholder="Место работы" title="Укажите, ваше место работы"
                            data-sanitize="capitalize" value='ООО ЗАВОД' data-validation="custom" data-validation-regexp='^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)"]+$'
                            data-validation-error-msg="Укажите, ваше место работы" required>
                            <div><p class="help-block2">Нужно указать место работы</p> 
                            <p class="text-muted text-right">Пример: ООО "Завод"</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="position" id="position_label">Должность</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" placeholder="Должность" title="Укажите, вашу должность"
                            data-sanitize="capitalize" value='электрик-монтажник' data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите, вашу должность" required>
                            <div><p class="help-block2">Нужно указать вашу профессию</p> 
                            <p class="text-muted text-right">Пример: электрик-монтажник</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_phone" id="work_phone_label">Рабочий телефон</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" name="work_phone" placeholder="Рабочий телефон" title="Введите ваш рабочий телефон"
                            id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$"
                            data-validation-error-msg="Введите ваш рабочий телефон" value='8(912)123-45-67' data-validation-optional="true">
                            <div><p class="help-block2">Укажите рабочий мобильный телефон</p> 
                            <p class="text-muted text-right">только мобильный: 8(912)123-45-67</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_experience" id="work_experience_label">Стаж работы(в месяцах)
                </label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" placeholder="Стаж работы в месяцах" name="work_experience" id="work_experience"
                            title="Введите ваш стаж работы в месяцах" value='12' data-validation="number" data-validation-error-msg="Введите ваш стаж работы в месяцах"
                            required>
                            <div><p class="help-block2">Укажите стаж работы (в месяцах)</p> 
                            <p class="text-muted text-right">Пример: 12</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_salary" id="work_salary_label">Зарплата(в рублях)</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" name="work_salary" id="work_salary" maxlength="6" placeholder="Зарплата в рублях"
                            title="Введите вашу среднюю зарплату" value='12000' data-validation="number" data-validation-error-msg="Введите среднюю зарплату"
                            required>
                            <div><p class="help-block2">Укажите месячную зарплату (в руб.)</p>
                            <p class="text-muted text-right">Пример: 25000</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_region" id="work_region_label">Регион работы</label>
                <div class="col-md-8">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec tip special_form99" name="work_region" id="work_region" autocomplete="off" required>
                           <option value="Республика Карелия" data-id="51" selected>Республика Карелия</option>
                            <?php
                            // if (isset($regions) && is_array($regions))
                            // {
                            //     foreach($regions as $region)
                            //     echo '<option value="'.$region['name'].'" data-id="'.$region['region_id'].'"'.((isset($region_name) && $region_name == $region['name'])? ' selected' : '').'>'.$region['name'].'</option>';
                            // }
                        ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_city" id="work_city_label">Населённый пункт</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip"  value='г. Новосибирск' name="work_city" placeholder="Город" title="Укажите населенный пункт" id="work_city"
                            value="<?php echo isset($city_name)? $city_name : ''; ?>" data-sanitize="capitalize" data-validation="custom"
                            data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт"
                            required>
                            <div><p class="help-block2">Укажите город где работаете</p>
                            <p class="text-muted text-right">Пример: г. Новосибирск</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_street" id="work_street_label">Улица</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_street" placeholder="Улица" title="Укажите улицу" id="work_street"
                            data-sanitize="capitalize" data-validation="custom" value='ул. Ленина' data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите, улицу" required>
                            <div><p class="help-block2">Укажите улицу где работаете</p>
                            <p class="text-muted text-right">Пример: ул. Ленина</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_house"  id="work_house_label">Номер дома</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" value='1' name="work_house" placeholder="Номер дома" title="Укажите номер дома" id="work_house"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер дома"
                            required>
                           <div><p class="help-block2">Укажите № дома где работаете</p>
                            <p class="text-muted text-right">Пример: 14</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="str">Строение (корпус)</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" value='1' name="work_building" placeholder="Корпус" title="Укажите номер строения или корпуса"
                            id="work_building" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, строение (корпус)"
                            data-validation-optional="true">
                            <div><p class="help-block2">Укажите строение\корпус работы</p>
                             <p class="text-muted text-right">Пример: 1а</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="work_office" id="work_office_label">Офис</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" value='1' name="work_office" placeholder="Номер офиса" title="Уукажите номер офиса"
                            id="work_office" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер офиса"
                            data-validation-optional="true">
                            <div><p class="help-block2">Укажите № офиса\кабинета работы</p>
                            <p class="text-muted text-right">Пример: 108</p></div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="col-md-8 col-md-offset-4">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <button class="ex-main-btn btn2 text-center" id="getmoney" type="button"> Получить деньги </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
