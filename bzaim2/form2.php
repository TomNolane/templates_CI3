<p class="text-left form-group has-feedback">
	<label class="h5 sign__word__red control-label label-required">Серия и номер паспорта</label>
	<span>
		<input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Заполните это поле" title="Введите серию и номер паспорта"
		        data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Введите номер и серию паспорта"
		        required>
		<span id="passportstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<input type="hidden" class="form-control ec" id="passport-s" name="passport_s" placeholder="0000" title="Серия паспорта"
	data-validation="number" data-validation-allowing="range[1;9999]" data-validation-error-msg="Пожалуйста, введите серию паспорта"
	required>
<input type="hidden" class="form-control ec" id="passport-n" name="passport_n" placeholder="000000" title="Номер паспорта"
	data-validation="number" data-validation-allowing="range[1;999999]" data-validation-error-msg="Пожалуйста, введите номер паспорта"
	required>
<div class="form-group hidden">
	<label class="col-sm-4 control-label label-required hidden-xs hidden-sm">Дата выдачи*</label>
	<div class="col-sm-2">
		<select class="form-control ec" id="passport_dd" name="passport_dd" required>
			<option value="0">День</option>
			<option selected value="04"></option>
			<?php
			for($i=1;$i<=31;$i++)
			echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>';
			?>
		</select>
	</div>
	<div class="col-sm-3">
		<select class="form-control ec" id="passport_mm" name="passport_mm" required>
			<option value="0">Месяц</option>
			<option value="01">Январь</option>
			<option value="02">Февраль</option>
			<option value="03">Март</option>
			<option value="04">Апрель</option>
			<option value="05">Май</option>
			<option selected value="06">Июнь</option>
			<option value="07">Июль</option>
			<option value="08">Август</option>
			<option value="09">Сентябрь</option>
			<option value="10">Октябрь</option>
			<option value="11">Ноябрь</option>
			<option value="12">Декабрь</option>
		</select>
	</div>
	<div class="col-sm-3">
		<select class="form-control ec" id="passport_yyyy" name="passport_yyyy" required>
			<option value="0">Год</option>
			<option selected value="2000"></option>
			<?php
			for($i=1980;$i<=date('Y');$i++)
			echo '<option value="'.$i.'">'.$i.'</option>';
			?>
		</select>
	</div>
</div>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Дата выдачи</label>
	<span>
		<input type="text" class="form-control ec tip" name="passportdate" id="passportdate" placeholder="Заполните это поле" title="Выберете дату выдачи паспорта"
		        data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату выдачи паспорта"
		        required>
		<span id="passportdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Код подразделения</label>
	<span>
		<input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Заполните это поле" title="Укажите код подразделения"
		        data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Введите код подразделения"
		        required>
		<span id="passport_codestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Кем выдан</label>
	<span>
		<input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Заполните это полет" title="Укажите кем выдан паспорт"
		        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$" data-validation-error-msg="Укажите, кем выдан паспорт"
		        required>
		<span id="passport_whostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Место рождения</label>
	<span>
		<input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Заполните это поле" title="Ваше место рождения"
		        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите место рождения"
		        required>
		<span id="birthplacestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word h5 control-label label-required">Регион</label>
	<span>
		<select class="form-control ec tip" id="region" name="region" autocomplete="off" required>
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
	<label class="sign__word h5 control-label label-required">Населённый пункт</label>
	<span>
		<input type="text" class="form-control ec tip valid" name="city" id="city" placeholder="Заполните это поле" title="Укажите город в котором вы живете"
		        value="<?php echo isset($city_name)? $city_name : ''; ?>" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$"
		        data-validation-error-msg="Укажите, населенный пункт">
		<span id="citystatus" class="glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Улица</label>
	<span>
		<input type="text" class="form-control ec tip" name="street" id="street" placeholder="Заполните это поле" title="Укажите название улицы"
		        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите, улицу"
		        required>
		<span id="streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>

<div class="row">
	<div class="col-xs-5"><p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Номер дома</label>
	<span>
		<input type="text" class="form-control ec tip" name="building" id="building" placeholder="Заполните это поле" title="Укажите номер дома"
		        data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер дома"
		        required>
		<span id="buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p></div>
	<div class="col-xs-7"><p class="text-left form-group has-feedback">
	<label class="sign__word h5 control-label label-required">Строение (корпус)</label>
	<span>
		<input type="text" class="form-control ec tip" name="housing" placeholder="Корпус" title="Укажите номер корпуса или строения"
		        id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, строение (корпус)"
		        data-validation-optional="true">
		<span id="housingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p></div>
</div>

<div class="row">
<div class="col-xs-5"><p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Квартира</label>
	<span>
		<input type="text" class="form-control ec tip" name="flat" placeholder="Заполните это поле" title="Укажите номер квартиры" id="flat"
		        data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер квартиры"
		        data-validation-optional="true">
		<span id="flatstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p></div>
<div class="col-xs-7"><p class="text-left form-group has-feedback">
	<label class="sign__word h5 control-label label-required">Тип регистрации</label>
	<span>
		<select class="form-control ec tip" name="reg_type" id="reg_type" required>
			<option value="1">Постоянная регистрация</option>
			<option value="0">Без регистрации</option>
			<option value="2">Временная регистрация</option>
		</select>
	</span>
</p></div>
</div>



<div class="hidden">
	<label class="radio-inline">
		<input type="radio" class="reg_same ec" name="reg_same" value="1" required checked="checked"> Да</label>
</div>
<a id="next2" class="btn btn-xl btn-success special_index ">Далее</a>