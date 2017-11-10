<div class="form-group"> 
	<label class="col-sm-4 control-label label-required green">Сумма
		<span>*</span>
	</label>
	<div class="col-sm-8">
		<input type="number" class="amount2" id="amount" name="amount" value="<?php if(empty($_POST['amount'])){if(empty($_GET['amount'])){echo'6000';}else{echo $_GET['amount'];}}else{echo $_POST['amount'];} ?>"
		    min="1000" max="100000" step="1" />
	</div>
</div> 


<div class="form-group">
	<label class="col-sm-4 control-label label-required green">Срок
		<span>*</span>
	</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="period2" value="Срок до 130 дней" disabled />
	</div>
</div>

<input id="period" name="period" value="<?php if(empty($_POST['period'])){echo'10';}else{echo $_POST['period'];} ?>" type="hidden">

<div class="form-group has-feedback" style="margin-bottom: -17px;">
	<label class="col-sm-4 control-label label-required hidden-xs">Фамилия</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Пожалуйста, введите свою фамилию"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свою фамилию"
		    required>
		<span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>

	</div>
</div>
<div class="form-group has-feedback" style="margin-bottom: -17px;">
	<label class="col-sm-4 control-label label-required hidden-xs">Имя</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip sp_push_custom_data" name="i" id="i" placeholder="Имя" title="Пожалуйста, введите свое имя"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое имя"
		    required>
		<span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</div>
</div>
<div class="form-group has-feedback" style="margin-bottom: -17px;">
	<label class="col-sm-4 control-label label-required hidden-xs">Отчество</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip sp_push_custom_data" name="o" id="o" placeholder="Отчество" title="Пожалуйста, введите свое отчество"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое отчество"
		    required>
		<span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</div>
</div>
<div class="form-group has-feedback text-left" style="display:none;">
	<label class="col-sm-4 control-label label-required hidden-xs">Пол</label>
	<div class="col-sm-8 col-xs-12">
		<div class="radio radio-info radio-inline">
			<input type="radio" id="gender1" value="1" name="gender" checked="checked" required>
			<label for="gender1"> Мужской </label>
		</div>
		<div class="radio radio-info radio-inline">
			<input type="radio" id="gender0" value="0" name="gender" required>
			<label for="gender0"> Женский </label>
		</div>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Дата рождения</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Пожалуйста, выберете свою дату рождения"
			    data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения"
			    required>
			<span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		 
	</div>
</div>


<div class="form-group has-feedback" style="margin-bottom: -17px;">
	<label class="col-sm-4 control-label label-required hidden-xs">Телефон</label>
	<div class="col-sm-8 col-xs-12">
		<input style="margin-bottom: 20px;" type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Телефон"
		    title="Пожалуйста, введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$"
		    data-validation-error-msg="Пожалуйста, введите телефон" required>
		<span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true" style="margin-top: -4px;"></span>
	</div>
</div>


<div class="form-group has-feedback" style="margin-bottom: -17px;"> 
	<label class="col-sm-4 control-label label-required hidden-xs">Почта</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="email" class="form-control ec tip sp_push_custom_data" name="email" id="email" title="Пожалуйста, введите свой email адрес"
			    placeholder="Email" title="Email" data-validation="email" required>
			<span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	 
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label label-required hidden-xs">Кредитная история</label>
	<div class="col-sm-8 col-xs-12">
		<select class="form-control ec" name="delays_type" id="delays_type" required>
			<option value="never">Никогда не брал(а) кредитов</option>
			<option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
			<option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
			<option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
			<option value="had_delay">Просрочки были, сейчас нет</option>
			<option value="has_delay">Просрочки сейчас есть</option>
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label hidden-xs"></label>
	<div class="col-sm-8 col-xs-12">
		<label>
			<input type="checkbox" id="agree" value="1" checked>
			<b>Я согласен на обработку персональных данных и с
				<a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a>
			</b>
		</label>
	</div>
	<label style="display: none">
		<input type="checkbox" id="marketing" value="1" checked>
		<b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
	</label>

</div>

<div class="clearfix"></div>