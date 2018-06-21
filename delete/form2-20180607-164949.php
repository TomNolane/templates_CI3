
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="passport">Серия и номер паспорта</label>
	<div>
		<div class="col-sm-8 col-xs-12">
		<input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Серия и номер паспорта" title="Введите серию и номер паспорта" data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Введите номер и серию паспорта" required>
		<span id="passportstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Укажите номер и серию паспорта</p>
		<p class="text-muted helpblock">Пример: 4510 123456</p>
		</div>
	</div>
</div>
<input type="hidden" class="form-control ec" id="passport-s" name="passport_s"  title="Серия паспорта" data-validation="number" data-validation-allowing="range[1;9999]" data-validation-error-msg="Введите серию паспорта">
<input type="hidden" class="form-control ec" id="passport-n" name="passport_n"  title="Номер паспорта"  data-validation="number" data-validation-allowing="range[1;999999]" data-validation-error-msg="Введите номер паспорта">
<div class="form-group hidden"> 
<div class="col-sm-2">
<label class="col-sm-4 control-label label-required" for="passport_dd">Дата выдачи*</label>
<select size="33" class="form-control ec" id="passport_dd" name="passport_dd" required>
	<option selected value="04">&nbsp;</option>
	<option value="0">День</option>
	<?php
	for($i=1;$i<=31;$i++)
	echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>';
	?>
</select>
</div>
<div class="col-sm-3">
<label class="col-sm-4 control-label label-required" for="passport_mm">Дата выдачи*</label>
<select size="13" class="form-control ec" id="passport_mm" name="passport_mm" required>
	<option selected value="06">Июнь</option>
	<option value="0">Месяц</option>
	<option value="01">Январь</option>
	<option value="02">Февраль</option>
	<option value="03">Март</option>
	<option value="04">Апрель</option>
	<option value="05">Май</option>
	<option value="07">Июль</option>
	<option value="08">Август</option>
	<option value="09">Сентябрь</option>
	<option value="10">Октябрь</option>
	<option value="11">Ноябрь</option>
	<option value="12">Декабрь</option>
</select>
</div>
<div class="col-sm-3">
<label class="col-sm-4 control-label label-required" for="passport_yyyy">Дата выдачи*</label>
<select size="41" class="form-control ec" id="passport_yyyy" name="passport_yyyy" required>
	<option selected value="2000">&nbsp;</option>
	<option value="0">Год</option>
	<?php
	for($i=1980;$i<=date('Y');$i++)
	echo '<option value="'.$i.'">'.$i.'</option>';
	?>
</select>
</div>
</div>
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs" for="passportdate">Дата выдачи</label>
    <div>
    <div class="col-sm-8 col-xs-12">
        <input type="tel" class="form-control ec tip" name="passportdate" id="passportdate" placeholder="Дата выдачи паспорта" title="Выберете дату выдачи паспорта" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату выдачи паспорта" required>
        <span id="passportdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Укажите дату выдачи паспорта</p>
		<p class="text-muted helpblock">Пример: 4510 123456</p>
    </div></div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="passport_code">Код подразделения</label>
	<div><div class="col-sm-8 col-xs-12">
		<input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Код подразделения" title="Укажите код подразделения" data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Введите код подразделения" required>
                <span id="passport_codestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<p class="help-block2">Укажите код подразделения</p>
				<p class="text-muted helpblock">Пример: 770-098</p>
        </div></div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="passport_who">Кем выдан паспорт</label>
	<div><div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Укажите кем выдан паспорт" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$" data-validation-error-msg="Укажите, кем выдан паспорт" required>
                <span id="passport_whostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<p class="help-block2">Укажите кем выдан паспорт</p>
				<p class="text-muted helpblock">Пример: ОТДЕЛЕНИЕ УФМС РОССИИ ПО ГОР. МОСКВЕ ПО РАЙОНУ ЩУКИНО</p>
        </div></div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="birthplace">Место рождения</label>
	<div><div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения" title="Ваше место рождения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите место рождения" required>
                <span id="birthplacestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<p class="help-block2">Укажите место своего рождения</p>
				<p class="text-muted helpblock">Пример: г. Новосибирск, Новосибирского района</p>
        </div></div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="form-group"><label class="col-sm-8 col-xs-12 col-sm-offset-4">Место жительства</label></div>
<div class="clearfix">&nbsp;</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="region">Регион проживания</label>
	<div><div class="col-sm-8 col-xs-12">
	<select class="form-control ec tip" id="region" name="region" autocomplete="off" required>
		<option value="">-- Выберите регион --</option>
		<?php
		if (isset($regions) && is_array($regions))
		{
			foreach($regions as $region)
			echo '<option value="'.$region['name'].'" data-id="'.$region['region_id'].'"'.((isset($region_name) && $region_name == $region['name'])? ' selected' : '').'>'.$region['name'].'</option>';
		}
		?>
	</select>
	</div></div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="city">Город проживания</label>
	<div><div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="city" id="city" placeholder="Город" title="Укажите город в котором вы живете" value="<?php echo isset($city_name)? $city_name : ''; ?>" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт">
                <span id="citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<p class="help-block2">Укажите город своего проживания</p>
				<p class="text-muted helpblock">Пример: г. Новосибирск</p>
        </div></div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="street">Улица проживания</label>
	<div><div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Укажите название улицы" data-sanitize="capitalize"  data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите, улицу" required>
                <span id="streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<p class="help-block2">Укажите улицу своего проживания</p>
				<p class="text-muted helpblock">Пример: ул. Ленина</p>
        </div></div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="building">Номер дома</label>
	<div><div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="building" id="building" placeholder="Номер дома" title="Укажите номер дома" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер дома" required>
		<span id="buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Укажите № дома своего проживания</p>
		<p class="text-muted helpblock">Пример: 14</p>
	</div></div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label" for="housing">Строение (корпус)</label>
	<div><div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="housing" title="Укажите номер корпуса или строения" id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, строение (корпус)" data-validation-optional="true">
		<span id="housingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Укажите строение\корпус (не обязательно)</p>
		<p class="text-muted helpblock">Пример: 1а</p>
        </div></div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label hidden-xs" for="flat">Квартира</label>
	<div><div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="flat" placeholder="Квартира" title="Укажите номер квартиры" id="flat" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер квартиры" data-validation-optional="true">
                <span id="flatstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<p class="help-block2">Укажите номер вашей квартиры</p>
				<p class="text-muted helpblock">Пример: 38</p> 
        </div></div>
</div>

<div class="form-group"><label class="col-sm-8 col-xs-12 col-sm-offset-4 hidden-xs">Регистрация (прописка)</label></div>

<div class="form-group">
	<label class="col-sm-4 control-label label-required hidden-xs" for="reg_type">Тип регистрации</label>
	<div><div class="col-sm-8 col-xs-12">
		<select class="form-control ec" name="reg_type" id="reg_type">
			<option selected value="1">Постоянная регистрация</option>
			<option value="0">Без регистрации</option>
			<option value="2">Временная регистрация</option>
		</select>
	</div></div>
</div>

<div id="reg_same" class="hidden">
<label class="radio-inline"><input type="radio" class="reg_same ec" name="reg_same" value="1" required checked="checked"> Да</label>
<label class="radio-inline"><input type="radio" class="reg_same ec" name="reg_same" value="0" required> Нет</label>
</div>