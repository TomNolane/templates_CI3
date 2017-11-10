<div class="form-group has-feedback">
    <label class="control-label label-required">Вид трудоустройства*</label>
        <div class="shadow">
            <select class="form-control ec tip" id="work" name="work" required>
                <option value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
                <option value="ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ">Индивидуальный предприниматель</option>
                <option value="СТУДЕНТ">Студент</option>
                <option value="ПЕНСИОНЕР">Пенсионер</option>
                <option value="БЕЗРАБОТНЫЙ">Безработный</option>
            </select>
        </div>
</div>
<div class="form-group has-feedback">
    <label class="control-label label-required">Место работы*</label>
        <input type="text" class="form-control ec tip" name="work_name" id="work_name" required title="Пожалуйста, укажите, ваше место работы" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, ваше место работы">
        <span id="work_namestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label class="control-label label-required">Должность*</label>
            <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" required title="Пожалуйста, укажите, вашу должность" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, вашу должность">
            <span id="work_occupationstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label class="control-label">Рабочий телефон</label>
            <input type="tel" class="form-control ec tip" name="work_phone" id="work_phone" title="Пожалуйста, введите ваш рабочий телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите ваш рабочий телефон" data-validation-optional="true">
            <span id="work_phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
	<label class="control-label label-required">Стаж работы* <span class="hidden-xs">(в месяцах)</span></label>
            <input type="tel" class="form-control ec tip" min="0" max="360" name="work_experience" id="work_experience" required title="Пожалуйста, введите ваш стаж работы в месяцах" data-validation="number" data-validation-error-msg="Пожалуйста, введите ваш стаж работы в месяцах">
            <span id="work_experiencestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
	<label class="control-label label-required">Зарплата* <span class="hidden-xs">(в рублях)</span></label>
            <input type="tel" class="form-control ec tip" maxlength="6" name="work_salary" id="work_salary" required title="Пожалуйста, введите вашу среднюю зарплату" data-validation="number" data-validation-error-msg="Пожалуйста, введите среднюю зарплату">
            <span id="work_salarystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group"><label class="col-sm-8 col-sm-offset-4">Место работы</label></div>
<div class="form-group has-feedback">
	<label class="control-label label-required">Регион*</label>
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
<div class="form-group has-feedback">
    <label class="control-label label-required">Населённый пункт*</label>
        <input type="text" class="form-control ec tip" name="work_city" id="work_city" value="<?php echo isset($city_name)? $city_name : ''; ?>" required title="Пожалуйста, укажите, населенный пункт" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, населенный пункт">
        <span id="work_citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
	<label class="control-label label-required">Улица*</label>
            <input type="text" class="form-control ec tip" name="work_street" id="work_street" required title="Пожалуйста, укажите, улицу" pattern="^[А-Яа-яЁё\s\d]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s\d]+$" data-validation-error-msg="Пожалуйста, укажите, улицу">
            <span id="work_streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
	<label class="control-label label-required">Номер дома*</label>
            <input type="text" class="form-control ec tip" name="work_house" id="work_house" required  title="Пожалуйста, укажите, номер дома" pattern="^[А-Яа-яЁё0-9\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома">
            <span id="work_housestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback" style="display:none;">
	<label class="control-label">Строение (корпус)</label>
            <input type="text" class="form-control ec tip" name="work_building" id="work_building"  title="Пожалуйста, укажите, строение (корпус)" pattern="^[А-Яа-яЁё0-9\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, строение (корпус)" data-validation-optional="true">
            <span id="work_buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
	<label class="control-label">Офис</label>
            <input type="text" class="form-control ec tip" name="work_office" id="work_office"  title="Пожалуйста, укажите, номер офиса" pattern="^[А-Яа-яЁё0-9\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер офиса" data-validation-optional="true">
            <span id="work_officestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>