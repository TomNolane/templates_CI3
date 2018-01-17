<p class="text-left form-group has-feedback">
	<label class="h5 sign__word control-label label-required">Вид трудоустройства</label>
	<span>
    <select class="form-control ec tip" id="work" name="work" required>
    <option value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
    <option value="ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ">Индивидуальный предприниматель</option>
    <option value="СТУДЕНТ">Студент</option>
    <option value="ПЕНСИОНЕР">Пенсионер</option>
    <option value="БЕЗРАБОТНЫЙ">Безработный</option>
</select>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Место работы</label>
	<span>
    <input type="text" class="form-control ec tip" name="work_name" id="work_name" placeholder="Место работы" title="Укажите, ваше место работы" data-sanitize="capitalize"  data-validation="custom" data-validation-regexp='^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)"]+$' data-validation-error-msg="Укажите, ваше место работы" required>
    <span id="work_namestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Должность</label>
	<span>
    <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" placeholder="Должность" title="Укажите, вашу должность" data-sanitize="capitalize"  data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите, вашу должность" required>
    <span id="work_occupationstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Рабочий телефон</label>
	<span>
    <input type="tel" class="form-control ec tip" name="work_phone" placeholder="Рабочий телефон" title="Введите ваш рабочий телефон" id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Введите ваш рабочий телефон" data-validation-optional="true">
    <span id="work_phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Стаж работы <br class="hidden-xs">(в месяцах)</label>
	<span>
    <input type="tel" class="form-control ec tip" min="0" max="360" name="work_experience" id="work_experience" placeholder="Стаж в месяцах" title="Введите ваш стаж работы в месяцах" data-validation="number" data-validation-error-msg="Введите ваш стаж работы в месяцах" required>
    <span id="work_experiencestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Зарплата <br class="hidden-xs">(в рублях)</label>
	<span>
    <input type="tel" maxlength="6" class="form-control ec tip" name="work_salary" id="work_salary" placeholder="Зарплата в рублях" title="Введите вашу среднюю зарплату"  data-validation="number" data-validation-error-msg="Введите среднюю зарплату" required>
    <span id="work_salarystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word h5 control-label label-required">Регион места работы</label>
	<span>
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
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word h5 control-label label-required">Населённый пункт работы</label>
	<span>
    <input type="text" class="form-control ec tip" name="work_city" placeholder="Город" title="Укажите населенный пункт" id="work_city" value="<?php echo isset($city_name)? $city_name : ''; ?>" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт" required>
    <span id="work_citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Улица работы</label>
	<span>
    <input type="text" class="form-control ec tip" name="work_street" placeholder="Улица работы" title="Укажите улицу" id="work_street" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите, улицу" required>
    <span id="work_streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Номер дома работы</label>
	<span>
    <input type="text" class="form-control ec tip" name="work_house" placeholder="Номер дома работы" id="work_house" required title="Пожалуйста, укажите, номер дома"
        pattern="^[А-Яа-яЁё0-9\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома">
    <span id="work_housestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p> 
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Офис / кабинет</label>
	<span>
    <input type="text" class="form-control ec tip" name="work_office" placeholder="Номер офиса" title="Укажите номер офиса" id="work_office" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер офиса" data-validation-optional="true">
        <span id="work_officestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p> 
<a id="form-send" class="btn btn-xl btn-success special_index" style="margin-top: 10px !important;">Получить займ</a>