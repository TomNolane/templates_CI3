
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="work">Вид трудоустройства *</label>
	<div class="col-sm-8 col-xs-12">
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
	<label class="col-sm-4 control-label label-required hidden-xs" for="work_name">Место работы *</label>
	<div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec" name="work_name" id="work_name" placeholder="Место работы" data-sanitize="capitalize"  data-validation="custom" data-validation-regexp='^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)"]+$' data-validation-error-msg="Пожалуйста, укажите, ваше место работы" required>
            <span id="work_namestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="work_occupation">Должность *</label>
	<div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec" name="work_occupation" id="work_occupation" placeholder="Должность" data-sanitize="capitalize"  data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Пожалуйста, укажите, вашу должность" required>
            <span id="work_occupationstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label hidden-xs" for="work_phone">Рабочий телефон *</label>
	<div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="tel" class="form-control ec" name="work_phone"  placeholder="Рабочий телефон" id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите ваш рабочий телефон" data-validation-optional="true">
            <span id="work_phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="work_experience">Стаж работы * <br class="hidden-xs">(в месяцах)</label>
	<div class="col-sm-8">
        <div class="shadow">
            <input type="tel" class="form-control ec" min="0" max="360" name="work_experience" placeholder="Стаж работы в месяцах" id="work_experience" data-validation="number" data-validation-error-msg="Пожалуйста, введите ваш стаж работы в месяцах" required>
            <span id="work_experiencestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="work_salary">Зарплата * <br class="hidden-xs">(в рублях)</label>
	<div class="col-sm-8">
        <div class="shadow">
            <input type="tel" class="form-control ec" name="work_salary" maxlength="6" placeholder="Зарплата в рублях" id="work_salary" data-validation="number" data-validation-error-msg="Пожалуйста, введите среднюю зарплату" required>
            <span id="work_salarystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-8 col-xs-12 col-sm-offset-4" >Место работы *</label></div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="work_region">Регион*</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow"><select class="form-control ec" name="work_region" id="work_region" autocomplete="off" required>
		<option value="0">-- Выберите регион --</option>
		<?php
		if (isset($regions) && is_array($regions))
		{
			foreach($regions as $region)
			echo '<option value="'.$region['name'].'" data-id="'.$region['region_id'].'"'.((isset($region_name) && $region_name == $region['name'])? ' selected' : '').'>'.$region['name'].'</option>';
		}
		?>
		</select></div>
	</div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="work_city">Населённый пункт *</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
            <input type="text" class="form-control ec" name="work_city" id="work_city" pattern="Город" value="<?php echo isset($city_name)? $city_name : ''; ?>" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, населенный пункт" required>
            <span id="work_citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
	</div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="work_street">Улица *</label>
	<div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec" name="work_street" id="work_street" placeholder="Улица" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Пожалуйста, укажите, улицу" required>
            <span id="work_streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="work_house">Номер дома *</label>
	<div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec" name="work_house" id="work_house" placeholder="Номер дома" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома" required>
            <span id="work_housestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label hidden-xs" for="work_office">Офис</label>
	<div class="col-sm-8">
        <div class="shadow">
            <input type="text" class="form-control ec" name="work_office" placeholder="Офис" id="work_office" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер офиса" data-validation-optional="true">
            <span id="work_officestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="clearfix">&nbsp;</div>
