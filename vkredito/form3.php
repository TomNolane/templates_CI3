<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Вид трудоустройства</label>
    <div class="col-sm-8">
        <div class="shadow">
            <select class="form-control ec" id="work" name="work" required>
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
    <label class="col-sm-4 control-label label-required hidden-xs">Место работы</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec tip" name="work_name" id="work_name" placeholder="Место работы" title="Пожалуйста, укажите, ваше место работы"
                data-sanitize="capitalize" data-validation="custom" data-validation-regexp='^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)"]+$'
                data-validation-error-msg="Пожалуйста, укажите, ваше место работы" required>
            <span id="work_namestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block" id="work_name_help"></p>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Должность</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" placeholder="Должность" title="Пожалуйста, укажите, вашу должность"
                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                data-validation-error-msg="Пожалуйста, укажите, вашу должность" required>
            <span id="work_occupationstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label">Рабочий телефон</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="tel" class="form-control ec tip" name="work_phone" placeholder="Рабочий телефон" title="Пожалуйста, введите ваш рабочий телефон"
                id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите ваш рабочий телефон"
                data-validation-optional="true">
            <span id="work_phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Стаж работы
        <br class="hidden-xs">(в месяцах)</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="tel" class="form-control ec tip" min="0" max="360" name="work_experience" id="work_experience" placeholder="Стаж работы (в месяцах)"
                title="Пожалуйста, введите ваш стаж работы в месяцах" data-validation="number" data-validation-error-msg="Пожалуйста, введите ваш стаж работы в месяцах"
                required>
            <span id="work_experiencestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Зарплата
        <br class="hidden-xs">(в рублях)</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="tel" maxlength="6" class="form-control ec tip" name="work_salary" id="work_salary" placeholder="Зарплата (в рублях)"
                title="Пожалуйста, введите вашу среднюю зарплату" data-validation="number" data-validation-error-msg="Пожалуйста, введите среднюю зарплату"
                required>
            <span id="work_salarystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
    <label class="col-sm-8 col-sm-offset-4">Место работы</label>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Регион</label>
    <div class="col-sm-8">
        <div class="shadow">
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
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Населённый пункт</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec tip" name="work_city" placeholder="Населённый пункт" title="Пожалуйста, укажите населенный пункт"
                id="work_city" value="<?php echo isset($city_name)? $city_name : ''; ?>" data-sanitize="capitalize" data-validation="custom"
                data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, населенный пункт"
                required>
            <span id="work_citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Улица</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec tip" name="work_street" placeholder="Улица" title="Пожалуйста, укажите улицу" id="work_street"
                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                data-validation-error-msg="Пожалуйста, укажите, улицу" required>
            <span id="work_streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Номер дома</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec tip" name="work_house" placeholder="Номер дома" title="Пожалуйста, укажите номер дома"
                id="work_house" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома"
                required>
            <span id="work_housestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback" style="display:none;">
    <label class="col-sm-4 control-label">Строение (корпус)</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec tip" name="work_building" placeholder="Строение (корпус)" title="Пожалуйста, укажите номер строения или корпуса"
                id="work_building" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, строение (корпус)"
                data-validation-optional="true">
            <span id="work_buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label hidden-xs">Офис</label>
    <div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec tip" name="work_office" placeholder="Офис" title="Пожалуйста, укажите номер офиса"
                id="work_office" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер офиса"
                data-validation-optional="true">
            <span id="work_officestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="clearfix">&nbsp;</div>