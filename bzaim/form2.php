<div class="form-group"><label class="col-sm-8 col-sm-offset-4">Паспортные данные*</label></div>
<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Серия и номер паспорта</label>
    <input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Серия и номер паспорта" title="Пожалуйста, введите серию и номер паспорта" data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Пожалуйста, введите номер и серию паспорта" required>
    <span id="passportstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>



<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Дата выдачи паспорта</label>
    <input type="text" class="form-control ec tip" name="passportdate" id="passportdate" placeholder="Дата выдачи паспорта" title="Пожалуйста, выберете дату выдачи паспорта" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату выдачи паспорта" required>
    <span id="passportdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>

<input type="hidden" class="form-control ec" id="passport-s" name="passport_s" placeholder="0000" title="Серия паспорта" data-validation="number" data-validation-allowing="range[1;9999]" data-validation-error-msg="Пожалуйста, введите серию паспорта" required>
<input type="hidden" class="form-control ec" id="passport-n" name="passport_n" placeholder="000000" title="Номер паспорта"  data-validation="number" data-validation-allowing="range[1;999999]" data-validation-error-msg="Пожалуйста, введите номер паспорта" required>
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

<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Код подразделения*</label>
    <input type="tel" class="form-control ec tip"  name="passport_code" id="passport_code" placeholder="Код подразделения" title="Пожалуйста, укажите код подразделения" data-validation="custom" data-validation-regexp="^([0-9]{3}\-[0-9]{3})$" data-validation-error-msg="Пожалуйста, введите код подразделения" required>
    <span id="passport_codestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Кем выдан паспорт*</label>
    <input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Пожалуйста, укажите кем выдан паспорт" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$" data-validation-error-msg="Пожалуйста, укажите, кем выдан паспорт" required>
    <span id="passport_whostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>

<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Место рождения*</label>
    <input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите место рождения" required>
    <span id="birthplacestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group"><label class="col-sm-8 col-sm-offset-4">Место жительства*</label></div>
<div class="form-group">
	<label class="control-label label-required hidden-xs hidden-sm">Регион*</label>	
	<select class="form-control ec" id="region" name="region" autocomplete="off" required>
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
    <label class="control-label label-required hidden-xs hidden-sm">Населённый пункт*</label>
    <input type="text" class="form-control ec tip" name="city" id="city" value="<?php echo isset($city_name)? $city_name : ''; ?>" title="Пожалуйста, укажите, населенный пункт" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, населенный пункт">
    <span id="citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Улица*</label>
    <input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Улица" required title="Пожалуйста, укажите, улицу"  data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Пожалуйста, укажите, улицу">
    <span id="streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Номер дома*</label>
    <input type="text" class="form-control ec tip" name="building"  placeholder="Номер дома" id="building" title="Дом" required title="Пожалуйста, укажите, номер дома" pattern="^[А-Яа-яЁё0-9\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома">
    <span id="buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <p class="help-block">Например: 9а</p>
</div>
<div class="form-group has-feedback" style="display:none;">
    <label class="control-label hidden-xs hidden-sm">Строение (корпус)</label>
    <input type="text" class="form-control ec tip" name="housing" id="housing" placeholder="Строение (корпус)" title="Пожалуйста, укажите, строение (корпус)" pattern="^[А-Яа-яЁё0-9\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, строение (корпус)" data-validation-optional="true">
    <span id="housingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label class="control-label hidden-xs hidden-sm">Квартира</label>
    <input type="text" class="form-control ec tip" name="flat" id="flat" placeholder="Квартира" title="Пожалуйста, укажите, номер квартиры" pattern="^[А-Яа-яЁё0-9\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер квартиры" data-validation-optional="true">
    <span id="flatstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>    
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group"><label class="col-sm-8 col-sm-offset-4">Регистрация (прописка)</label></div>
<div class="form-group">
	<label class="control-label label-required hidden-xs hidden-sm">Тип регистрации*</label>
		<select class="form-control ec" name="reg_type" id="reg_type" required>
			<option value="0">Без регистрации</option>
                        <option value="1" selected="selected">Постоянная регистрация</option>
			<option value="2">Временная регистрация</option>
		</select>
</div>
<fieldset id="reg_same" class="hidden">
<div class="form-group">
	<label class="control-label label-required "><b>Регистрация совпадает с местом жительства</b></label>
		<div class="pull-right">
		<label class="radio-inline"><input type="radio" class="reg_same ec" name="reg_same" value="1" required checked="checked"> Да</label>
		<!-- <label class="radio-inline"><input type="radio" class="reg_same ec" name="reg_same" value="0" required> Нет</label> -->
		<label class="radio-inline"><input type="radio" class="reg_same ec" name="reg_same" value="1" required> Нет</label>
		</div>
</div>
</fieldset>
<fieldset id="reg_address" class="hidden">
	<div class="form-group">
		<label class="control-label label-required">Регион*</label>
		<select class="form-control ec tip" id="reg_region" name="reg_region" id="reg_region" autocomplete="off">
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
	<div class="form-group">
            <label class="control-label label-required">Населённый пункт*</label>
            <input type="text" class="form-control ec tip" name="reg_city" id="reg_city" title="Населённый пункт" value="<?php echo isset($city_name)? $city_name : ''; ?>">
	</div>
	<div class="form-group">
            <label class="control-label label-required">Улица*</label>
            <input type="text" class="form-control ec tip" name="reg_street" id="reg_street">
	</div>
	<div class="form-group">
            <label class="control-label label-required">Номер дома*</label>
            <input type="text" class="form-control ec tip" name="reg_building" id="reg_building" title="Дом">
            <p class="help-block">Например: 9а</p>
	</div>
	<div class="form-group">
            <label class="control-label">Строение</label>
            <input type="text" class="form-control ec tip" name="reg_housing" id="reg_housing">
	</div>
	<div class="form-group">
            <label class="control-label">Квартира</label>
            <input type="text" class="form-control ec tip" name="reg_flat" id="reg_flat">
	</div>
</fieldset>