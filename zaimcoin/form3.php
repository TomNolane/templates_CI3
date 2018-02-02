<div class="ex-form-bg">
    <p class="ex-step">шаг 3</p>
    <div class="form-horizontal">
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work">Вид трудоустройства</label>
            <div class="col-md-8">
            <select class="form-control ec" id="work" name="work">
                <option selected value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
                <option value="ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ">Индивидуальный предприниматель</option>
                <option value="СТУДЕНТ">Студент</option>
                <option value="ПЕНСИОНЕР">Пенсионер</option>
                <option value="БЕЗРАБОТНЫЙ">Безработный</option>
            </select>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_name">Место работы</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="work_name" id="work_name" placeholder="Место работы" title="Пожалуйста, укажите, ваше место работы"
                    data-sanitize="capitalize" data-validation="custom" data-validation-regexp='^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)"]+$' data-validation-error-msg="Пожалуйста, укажите, ваше место работы"
                    required>
                    <span id="work_namestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_occupation">Должность</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" placeholder="Должность" title="Пожалуйста, укажите, вашу должность"
                    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Пожалуйста, укажите, вашу должность"
                    required>
                    <span id="work_occupationstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_phone">Рабочий телефон</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="tel" class="form-control ec tip" name="work_phone" placeholder="Рабочий телефон" title="Пожалуйста, введите ваш рабочий телефон"
                    id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите ваш рабочий телефон"
                    data-validation-optional="true">
                    <span id="work_phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_experience">Стаж (в месяцах)</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="tel" class="form-control ec tip"  placeholder="Стаж работы в месяцах" name="work_experience"
                    id="work_experience" title="Пожалуйста, введите ваш стаж работы в месяцах" data-validation="number" data-validation-error-msg="Пожалуйста, введите ваш стаж работы в месяцах"
                    required>
                    <span id="work_experiencestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_salary">Зарплата(в рублях)</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="tel" class="form-control ec tip" name="work_salary" id="work_salary" maxlength="6" placeholder="Зарплата в рублях" title="Пожалуйста, введите вашу среднюю зарплату"
                    data-validation="number" data-validation-error-msg="Пожалуйста, введите среднюю зарплату" required>
                    <span id="work_salarystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_region">Регион</label>
            <div class="col-md-8">
                <select class="form-control ec tip" name="work_region" id="work_region" autocomplete="off" required>
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
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_city">Населённый пункт</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="work_city" placeholder="Город" title="Пожалуйста, укажите населенный пункт"
                    id="work_city" value="<?php echo isset($city_name)? $city_name : ''; ?>" data-sanitize="capitalize" data-validation="custom"
                    data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, населенный пункт"
                    required>
                    <span id="work_citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_street">Улица</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="work_street" placeholder="Улица" title="Пожалуйста, укажите улицу" id="work_street"
                    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Пожалуйста, укажите, улицу"
                    required>
                    <span id="work_streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_house">Номер дома</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="work_house" placeholder="Номер дома" title="Пожалуйста, укажите номер дома"
                    id="work_house" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома"
                    required>
                    <span id="work_housestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div> 
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="work_office">Офис</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="work_office" placeholder="Номер офиса" title="Пожалуйста, укажите номер офиса"
                    id="work_office" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер офиса"
                    data-validation-optional="true">
                    <span id="work_officestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-right"> 
                <button type="button" id="getmoney" class="ex-blue-btn special_forms"> Получить заём </button>  
            </div>
        </div>

    </div>
</div>
<div class="ex-inf-anceta">
    <img src="/templates/zaimcoin/assets/img/icon-4.png" alt="icon-4.png">
    <p class="spec_form">Деньги ждут вас</p>
</div>