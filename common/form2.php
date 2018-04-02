
<legend>Шаг 2. Паспортные данные</legend>

<!--div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label class="label-required">Серия и номер</label>
			<input type="text" class="form-control" id="passport" name="passport" placeholder="серия номер" title="Паспорт (серия, номер)" required>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="form-group">
			<label class="label-required">Дата выдачи</label>
			<table width="100%">
				<tr>
					<td>
						<select class="form-control" id="passport_dd" name="passport_dd" required>
							<option value="0">День</option>
							<?php
							for($i=1;$i<=31;$i++)
							echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>';
							?>
						</select>
					</td>
					<td>
						<select class="form-control" id="passport_mm" name="passport_mm" required>
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
					</td>
					<td>
						<select class="form-control" id="passport_yyyy" name="passport_yyyy" required>
							<option value="0">Год</option>
							<?php
							for($i=1980;$i<=date('Y');$i++)
							echo '<option value="'.$i.'">'.$i.'</option>';
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Кем выдан паспорт</label>
			<input type="text" class="form-control" name="passport_who" placeholder="" title="Кем выдан" required>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Код подразделения</label>
			<input type="text" class="form-control" name="passport_code" id="passport_code" title="Код подразделения" required>
		</div>
	</div>
</div>

<div class="form-group">
	<label class="label-required">Место рождения</label>
	<input type="text" class="form-control" name="birthplace" required>
</div>
<div class="clearfix">&nbsp;</div-->

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label class="label-required">Серия и номер</label>
			<input type="text" class="form-control" id="passport" name="passport" placeholder="серия номер" title="Паспорт (серия, номер)" required>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="form-group">
			<label class="label-required">Дата выдачи</label>
			<table width="100%">
				<tr>
					<td>
						<select class="form-control" id="passport_dd" name="passport_dd" required>
							<option value="0">День</option>
							<?php
							for($i=1;$i<=31;$i++)
							echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>';
							?>
						</select>
					</td>
					<td>
						<select class="form-control" id="passport_mm" name="passport_mm" required>
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
					</td>
					<td>
						<select class="form-control" id="passport_yyyy" name="passport_yyyy" required>
							<option value="0">Год</option>
							<?php
							for($i=1980;$i<=date('Y');$i++)
							echo '<option value="'.$i.'">'.$i.'</option>';
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<input type="hidden" id="passportdate" name="passportdate">

<div class="form-group">
	<label class="label-required">Кем выдан паспорт</label>
	<input type="text" class="form-control" name="passport_who" placeholder="" title="Кем выдан" required>
</div>

<div class="row">
	<div class="col-sm-5">
		<div class="form-group">
			<label class="label-required">Код подразделения</label>
			<input type="text" class="form-control" name="passport_code" id="passport_code" title="Код подразделения" required>
		</div>
	</div>
	<div class="col-sm-7">
		<div class="form-group">
			<label class="label-required">Место рождения</label>
			<input type="text" class="form-control" name="birthplace" required>
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>

<h4 class="text-center">Место жительства</h4>

<div class="form-group">
	<label class="label-required">Регион</label>
	<select class="form-control" id="region" name="region" autocomplete="off" required>
		<option value="">-- Выберите регион --</option>
		<?php
		if (isset($regions) && is_array($regions))
		{
			foreach($regions as $region)
			echo '<option value="'.$region['name'].'" data-id="'.$region['region_id'].'"'.((isset($region_name) && $region_name == $region['name'])? ' selected' : '').'>'.$region['name'].'</option>';
		}
		?>
	</select>
</div>
<!--div class="city" style="display:none;"-->
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="label-required">Населённый пункт</label>
				<!--select class="form-control" id="city" name="city" required><option value="0">Город проживания</option></select-->
				<input type="text" class="form-control" name="city" value="<?php echo isset($city_name)? $city_name : ''; ?>" pattern="^[А-Яа-яЁё\s]+$">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="label-required">Улица</label>
				<input type="text" class="form-control" name="street" title="Улица" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label class="label-required">Номер&nbsp;дома</label>
				<input type="text" class="form-control" name="building" title="Дом" required>
				<p class="help-block">Например: 9а</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Строение (корпус)</label>
				<input type="text" class="form-control" name="housing">
				<p class="help-block">Если нет, оставьте пустым.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Квартира</label>
				<input type="text" class="form-control" name="flat">
			</div>
		</div>
	</div>
<!--/div-->
<div class="clearfix">&nbsp;</div>

<h4 class="text-center">Регистрация (прописка)</h4>

<div class="form-group">
	<label class="label-required">Тип регистрации</label>
	<select class="form-control" name="reg_type" required>
		<option value="0">Без регистрации</option>
		<option value="1">Постоянная регистрация</option>
		<option value="2">Временная регистрация</option>
	</select>
</div>
<div class="clearfix">&nbsp;</div>

<div>
	<!--label><input type="checkbox" id="reg_same" name="reg_same" value="1" checked> <b>Место регистрации совпадает с местом жительства</b></label-->
	<label class="pull-left label-required"><b>Регистрация совпадает с местом жительства</b></label>
	<div class="pull-right">
		<label class="radio-inline"><input type="radio" class="reg_same" name="reg_same" value="1" required checked="checked"> Да</label>
		<label class="radio-inline"><input type="radio" class="reg_same" name="reg_same" value="0" required> Нет</label>
	</div>
	<div class="clearfix"></div>
</div>
<div class="clearfix">&nbsp;</div>

<fieldset id="reg_address">
	<div class="form-group">
		<label class="label-required">Регион</label>
		<select class="form-control" id="reg_region" name="reg_region" autocomplete="off">
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
	<!--div class="reg_city" style="display:none;"-->
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label class="label-required">Населённый пункт</label>
					<input type="text" class="form-control" name="reg_city" title="Населённый пункт" value="<?php echo isset($city_name)? $city_name : ''; ?>">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="label-required">Улица</label>
					<input type="text" class="form-control" name="reg_street">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label class="label-required">Номер&nbsp;дома</label>
					<input type="text" class="form-control" name="reg_building" title="Дом">
					<p class="help-block">Например: 9а</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Строение</label>
					<input type="text" class="form-control" name="reg_housing">
					<p class="help-block">Если нет, оставьте пустым.</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Квартира</label>
					<input type="text" class="form-control" name="reg_flat">
				</div>
			</div>
		</div>
	<!--/div-->
</fieldset>

<!--button class="btn btn-lg btn-warning btn-block" name="send">Отправить заявку</button-->

<script>
$(document).ready(function(){
	
	$('.reg_same').change(function(){
		if ($('.reg_same:checked').val() > 0) $('#reg_address').prop('disabled', true);
		else $('#reg_address').prop('disabled', false);
	}).change();
	/*
	$('#reg_region').change(function(){
		var region_id = $('#reg_region option:selected').data('id');
		if (region_id > 0) $('.reg_city').show();
		else $('.reg_city').hide();
	}).change();
	*/
});
</script>