<div class="form-group has-feedback hidden-lg hidden-md hidden-sm visible-xs spec_form88">
	<label class="col-sm-4 control-label label-required hidden-xs hidden-xs"></label>
	<div class="col-sm-7 col-xs-12 am">
		<div class="shadow">
			<div>Сумма</div>
			<div style="font-size: 40px;">
			<?php if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['period2'])) echo '20000'; else echo $_POST['period2'];  ?> рублей</div>
			<div style="padding: 5px; color: #ccc"><?php echo $days2; ?></div>
		</div>
	</div>
</div>
<div class="form-group has-feedback has-success hidden-xs">
	<label class="col-sm-4 control-label label-required hidden-xs" for="amount">Сумма</label>
	<div class="col-sm-8 col-xs-12">
		<div class="form-slider green irs2">
			<input type="text" class="amount2" name="amount" id="amount2" value="<?php if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['period2'])) echo '20000'; else echo $_POST['period2'];  ?>"
			/>
		</div>
	</div>
</div>
<div class="form-group has-feedback has-success hidden-xs">
	<label class="col-sm-4 control-label label-required hidden-xs">Срок</label>
	<div class="col-sm-8 col-xs-12">
		<div class="form-slider green">
			<input type="text" class="form-control" id="period2" value="<?php echo $days; ?>" readonly/>
			<span id="periodstatus" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<input type="hidden" class="form-control" id="period" name="period" value="<?php if(empty($_POST['period'])){echo '30';}else{echo $_POST['period'];} ?>"
/>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="f">Фамилия</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
			<input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию"
			    autofocus required>
			<span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="i">Имя</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
			<input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
			    data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
			    required>
			<span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="o">Отчество</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
			<input type="text" class="form-control ec tip" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество"
			    required>
			<span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<input type="hidden" id="gender" name="gender" value="1"> 
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="birthdate">Дата рождения</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow dadata">
			<input type="text" class="form-control ec tip" name="birthdate" id="birthdate" placeholder="День рождения" title="Выберете свою дату рождения"
			    data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
			    required>
			<span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<span class="dadabr"></span>
		</div>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="phone">Телефон</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow dadata">
			<input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Телефон" title="Введите свой телефон"
			    data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Введите телефон"
			    required>
			<span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<span class="dadabr"></span>
		</div>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="email">Почта</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow dadata">
			<input type="email" class="form-control ec tip" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
			    title="Email" data-validation="email" data-validation-error-msg="Введите свой email" required>
			<span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>

<div class="form-group">
	<label class="col-sm-4 control-label label-required hidden-xs" for="delays_type">Кредитная история</label>
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
<div class="clearfix"></div>
<div class="form-group">
	<label class="col-sm-4 control-label"></label>
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