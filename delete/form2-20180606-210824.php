
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Серия и номер паспорта</label>
	<div class="col-sm-8 col-xs-12">
		<input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Номер и серия паспорта" title="Пожалуйста, введите серию и номер паспорта" data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Пожалуйста, введите номер и серию паспорта" required>
                <span id="passportstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>

<div class="form-group" style="display: none;">
	<label class="col-sm-4 control-label label-required hidden-xs">Серия и номер паспорта</label>
	<div class="col-sm-4">
		<input type="tel" class="form-control ec" id="passport-s" name="passport_s" placeholder="0000" title="Серия паспорта" data-validation="number" data-validation-allowing="range[1;9999]" data-validation-error-msg="Пожалуйста, введите серию паспорта" required>
	</div>
	<div class="col-sm-4">
		<input type="tel" class="form-control ec" id="passport-n" name="passport_n" placeholder="000000" title="Номер паспорта"  data-validation="number" data-validation-allowing="range[1;999999]" data-validation-error-msg="Пожалуйста, введите номер паспорта" required>
	</div>
</div>
<!-- Скрываем старую форму даты выдачи -->
<div class="form-group hidden">
	<label class="col-sm-4 control-label label-required hidden-xs">Дата выдачи*</label>
	<div class="col-sm-2">
			<select class="form-control ec" id="passport_dd" name="passport_dd" required>
				<option value="0">День</option>
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
			<option value="06">Июнь</option>
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
			<?php
			for($i=1980;$i<=date('Y');$i++)
			echo '<option value="'.$i.'">'.$i.'</option>';
			?>
		</select>
	</div>
</div>
<!-- Скрываем старую форму даты выдачи -->
<div class="form-group has-feedback">
    <label class="col-sm-4 control-label label-required hidden-xs">Дата выдачи</label>
    <div class="col-sm-8 col-xs-12">
        <input type="text" class="form-control ec tip" name="passportdate" id="passportdate" placeholder="Дата выдачи паспорта" title="Пожалуйста, выберете дату выдачи паспорта" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату выдачи паспорта"  required>
        <span id="passportdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Код подразделения</label>
	<div class="col-sm-8 col-xs-12">
		<input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Код подразделения" title="Пожалуйста, укажите код подразделения" data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Пожалуйста, введите код подразделения" required>
                <span id="passport_codestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Кем выдан</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Пожалуйста, укажите кем выдан паспорт" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$" data-validation-error-msg="Пожалуйста, укажите, кем выдан паспорт" required>
                <span id="passport_whostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Место рождения</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения"  title="Пожалуйста, ваше место рождения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Пожалуйста, укажите место рождения" required>
                <span id="birthplacestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="form-group"><label class="col-sm-8 col-sm-offset-4">Место жительства</label></div>
<div class="clearfix">&nbsp;</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Регион</label>
	<div class="col-sm-8 col-xs-12">
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
	</div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Населённый пункт</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="city" id="city" placeholder="Населённый пункт" title="Пожалуйста, укажите город в котором вы живете" value="<?php echo isset($city_name)? $city_name : ''; ?>" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, населенный пункт">
                <span id="citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Улица</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Пожалуйста, укажите название улицы" data-sanitize="capitalize"  data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Пожалуйста, укажите, улицу" required>
                <span id="streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Номер дома</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="building" id="building" placeholder="Номер дома" title="Пожалуйста, укажите номер дома" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома" required>
		<span id="buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <p style="margin-top: 2px !important;" class="help-block">Например: 9а</p>
	</div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label hidden-xs">Строение (корпус)</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="housing" placeholder="Строение (корпус)" title="Пожалуйста, укажите номер корпуса или строения" id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, строение (корпус)" data-validation-optional="true">
                <span id="housingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label hidden-xs">Квартира</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="flat" placeholder="Квартира" title="Пожалуйста, укажите номер квартиры" id="flat" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер квартиры" data-validation-optional="true">
                <span id="flatstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="form-group"><label class="col-sm-8 col-sm-offset-4">Регистрация (прописка)</label></div>
<div class="clearfix">&nbsp;</div>

<div class="form-group">
	<label class="col-sm-4 control-label label-required hidden-xs">Тип регистрации</label>
	<div class="col-sm-8 col-xs-12">
		<select class="form-control ec" name="reg_type" id="reg_type" required>
			<option value="1">Постоянная регистрация</option>
                        <option value="0">Без регистрации</option>
			<option value="2">Временная регистрация</option>
		</select>
	</div>
</div>

<fieldset id="reg_same" class="hidden">
<div class="form-group">
	<label class="col-sm-9 control-label label-required"><b>Регистрация совпадает с местом жительства</b></label>
	<div class="col-sm-3">
		<div class="pull-right">
		<label class="radio-inline"><input type="radio" class="reg_same ec" name="reg_same" value="1" required checked="checked"> Да</label>
		<label class="radio-inline"><input type="radio" class="reg_same ec" name="reg_same" value="0" required> Нет</label>
		</div>
	</div>
	<div class="clearfix">&nbsp;</div>
</div>
</fieldset>

<fieldset id="reg_address" class="hidden">
	<div class="form-group">
		<label class="col-sm-4 control-label label-required hidden-xs">Регион*</label>
		<div class="col-sm-8 col-xs-12">
		<select class="form-control ec" id="reg_region" name="reg_region" id="reg_region" autocomplete="off">
			<option value="0">Регион</option>
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
	<div class="form-group">
		<label class="col-sm-4 control-label label-required hidden-xs">Населённый пункт*</label>
		<div class="col-sm-8">
			<input type="text" class="form-control ec" name="reg_city" id="reg_city" title="Населённый пункт" value="<?php echo isset($city_name)? $city_name : ''; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label label-required hidden-xs">Улица*</label>
		<div class="col-sm-8">
			<input type="text" class="form-control ec" name="reg_street" id="reg_street">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label label-required hidden-xs">Номер дома*</label>
		<div class="col-sm-8">
			<input type="text" class="form-control ec" name="reg_building" id="reg_building" title="Дом">
			<p class="help-block">Например: 9а</p>
		</div>
	</div>
	<div class="form-group" style="display:none;">
		<label class="col-sm-4 control-label">Строение</label>
		<div class="col-sm-8">
			<input type="text" class="form-control ec" name="reg_housing" id="reg_housing">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">Квартира</label>
		<div class="col-sm-8">
			<input type="text" class="form-control ec" name="reg_flat" id="reg_flat">
		</div>
	</div>
</fieldset>