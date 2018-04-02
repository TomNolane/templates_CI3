
<legend>Шаг 3. Работа</legend>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Вид трудоустройства</label>
			<select class="form-control" id="work" name="work" required>
				<option value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
				<option value="ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ">Индивидуальный предприниматель</option>
				<option value="СТУДЕНТ">Студент</option>
				<option value="ПЕНСИОНЕР">Пенсионер</option>
				<option value="БЕЗРАБОТНЫЙ">Безработный</option>
			</select>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Название места работы</label>
			<input type="text" class="form-control" name="work_name" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Должность</label>
			<input type="text" class="form-control" name="work_occupation" required>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Стаж работы (в месяцах)</label>
			<input type="number" class="form-control"  name="work_experience" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Зарплата (в рублях)</label>
			<input type="number" class="form-control" name="work_salary" required>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Рабочий телефон</label>
			<input type="tel" class="form-control" id="work_phone" name="work_phone">
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>

<h4 class="text-center">Место работы</h4>

<div class="form-group">
	<label class="label-required">Регион работы</label>
	<select class="form-control" name="work_region" autocomplete="off" required>
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

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Населённый пункт</label>
			<input type="text" class="form-control" name="work_city" value="<?php echo isset($city_name)? $city_name : ''; ?>" required>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="label-required">Улица</label>
			<input type="text" class="form-control" name="work_street" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label class="label-required">Дом</label>
			<input type="text" class="form-control" name="work_house" required>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Строение (корпус)</label>
			<input type="text" class="form-control" name="work_building">
			<p class="help-block">Если нет, оставьте пустым.</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Офис</label>
			<input type="text" class="form-control" name="work_office">
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>
