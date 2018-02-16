<section class="ex-main-form">
    <div class="row">
        <div class="col-lg-8 offset-lg-1">
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end " for="work">Вид трудоустройства</label>
                <div class="col-md-9">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec" id="work" name="work">
                            <option selected value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
                            <option value="ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ">Индивидуальный предприниматель</option>
                            <option value="СТУДЕНТ">Студент</option>
                            <option value="ПЕНСИОНЕР">Пенсионер</option>
                            <option value="БЕЗРАБОТНЫЙ">Безработный</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_name">Место работы</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_name" id="work_name" placeholder="Место работы" title="Укажите, ваше место работы"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp='^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)"]+$'
                            data-validation-error-msg="Укажите, ваше место работы" required>
                        <p class="text-muted helpblock" id="work_name_help">Пример: ООО "Завод"</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_occupation">Должность</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" placeholder="Должность" title="Укажите, вашу должность"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите, вашу должность" required>
                            <p class="text-muted helpblock">Пример: электрик-монтажник</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_phone">Рабочий телефон</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" name="work_phone" placeholder="Рабочий телефон" title="Введите ваш рабочий телефон"
                            id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$"
                            data-validation-error-msg="Введите ваш рабочий телефон" data-validation-optional="true">
                            <p class="text-muted helpblock">только мобильный: 8(912)123-45-67</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_experience">Стаж (в месяцах)</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" placeholder="Стаж работы в месяцах" name="work_experience" id="work_experience"
                            title="Введите ваш стаж работы в месяцах" data-validation="number" data-validation-error-msg="Введите ваш стаж работы в месяцах"
                            required>
                            <p class="text-muted helpblock">Пример: 12</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_salary">Зарплата(в рублях)</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" name="work_salary" id="work_salary" maxlength="6" placeholder="Зарплата в рублях"
                            title="Введите вашу среднюю зарплату" data-validation="number" data-validation-error-msg="Введите среднюю зарплату"
                            required>
                            <p class="text-muted helpblock">Пример: 25000</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_region">Регион работы</label>
                <div class="col-md-9">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec tip special_form99" name="work_region" id="work_region" autocomplete="off" required>
                            <option value="">!!! Выберите регион места работы !!!</option>
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
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_city">Место работы (город)</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_city" placeholder="Город" title="Укажите населенный пункт" id="work_city"
                            value="<?php echo isset($city_name)? $city_name : ''; ?>" data-sanitize="capitalize" data-validation="custom"
                            data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт"
                            required>
                            <p class="text-muted helpblock">Пример: г. Новосибирск</p>
                    </div>
                </div>
            </div>
            <div class="form-group row ">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_street">Место работы (улица)</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_street" placeholder="Улица" title="Укажите улицу" id="work_street"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите, улицу" required>
                            <p class="text-muted helpblock">Пример: ул. Ленина</p>
                    </div>
                </div>
            </div>
            <div class="form-group row ">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_house" >№ дома работы</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_house" placeholder="Номер дома" title="Укажите номер дома" id="work_house"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер дома"
                            required>
                            <p class="text-muted helpblock">Пример: 14</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_building">Строение</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_building" placeholder="Корпус" title="Укажите номер строения или корпуса"
                            id="work_building" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, строение (корпус)"
                            data-validation-optional="true">
                            <p class="text-muted helpblock">Пример: 1а</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3 d-flex align-items-center justify-content-md-end" for="work_office">№ кабинета</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="work_office" placeholder="Номер офиса" title="Уукажите номер офиса"
                            id="work_office" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер офиса"
                            data-validation-optional="true">
                            <p class="text-muted helpblock">Пример: 108</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-9  offset-md-3 ">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <button type="button" id="form-send" class="nav nav-tabs ex-main-btn"> Получить деньги </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>