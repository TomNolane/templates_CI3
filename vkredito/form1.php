<div class="form-group has-feedback amm text-center">
	<label class="col-sm-4 control-label label-required hidden-xs"></label>
	<div class="col-sm-7 col-xs-12 am">
		<div class="shadow">
			<div>Сумма</div>
			<div style="font-size: 40px;">
				<?php if(empty($_POST['amount'])){if(empty($_GET['amount'])){echo'6000';}else{echo $_GET['amount'];}}else{echo $_POST['amount'];} ?> рублей</div>
			<div style="padding: 5px; color: #ccc">Срок до 130 дней</div>
		</div>
	</div>
</div>

<input type="hidden" id="amount" name="amount" value="<?php if(empty($_POST['amount'])){if(empty($_GET['amount'])){echo'6000';}else{echo $_GET['amount'];}}else{echo $_POST['amount'];} ?>"
/>
<input type="hidden" id="period" name="period" value="<?php if(empty($_POST['period'])){echo'10';}else{echo $_POST['period'];} ?>"
/>

<div class="form-group has-feedback dadata">
	<label class="col-sm-4 control-label label-required hidden-xs">Фамилия</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
			<input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Пожалуйста, введите свою фамилию"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свою фамилию"
			    required>
			<span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<div class="form-group has-feedback dadata">
	<label class="col-sm-4 control-label label-required hidden-xs">Имя</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
			<input type="text" class="form-control ec tip sp_push_custom_data" name="i" id="i" placeholder="Имя" title="Пожалуйста, введите свое имя"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое имя"
			    required>
			<span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<div class="form-group has-feedback dadata">
	<label class="col-sm-4 control-label label-required hidden-xs">Отчество</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
			<input type="text" class="form-control ec tip sp_push_custom_data" name="o" id="o" placeholder="Отчество" title="Пожалуйста, введите свое отчество"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое отчество"
			    required>
			<span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<input type="hidden" id="gender" value="1" name="gender" required>
<!-- Скрываем старую форму даты рождения -->
<div class="form-group hidden">
	<label class="col-sm-4 control-label label-required hidden-xs">Дата рождения*</label>
	<div class="col-sm-2">
		<div class="shadow">
			<select class="form-control ec" id="birth_dd" name="birth_dd" required>
				<option value="0">День</option>
				<?php for($i=1;$i<=31;$i++) echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>'; ?>
			</select>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="shadow">
			<select class="form-control ec" id="birth_mm" name="birth_mm" required>
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
	</div>
	<div class="col-sm-3">
		<div class="shadow">
			<select class="form-control ec" id="birth_yyyy" name="birth_yyyy" required>
				<option value="0">Год</option>
				<?php
				for($i=date('Y', strtotime('-80 years', time()));$i<=date('Y', strtotime('-18 years', time()));$i++)
				echo '<option value="'.$i.'">'.$i.'</option>';
				?>
			</select>
		</div>
	</div>
</div>
<!-- Скрываем старую форму даты рождения -->
<div class="form-group has-feedback hidden">
	<label class="col-sm-4 control-label label-required hidden-xs">Дата рождения</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
			<input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Пожалуйста, выберете свою дату рождения"
			    data-validation="custom" value="06/12/1988" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения"
			    required>
			<span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Телефон</label>
	<div class="col-sm-8 col-xs-12">
		<input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Телефон" title="Пожалуйста, введите свой телефон"
		    data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите телефон"
		    required>
		<span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</div>
</div>
<div class="form-group has-feedback dadata">
	<label class="col-sm-4 control-label label-required hidden-xs">Почта</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow">
			<input type="email" class="form-control ec tip sp_push_custom_data" name="email" id="email" title="Пожалуйста, введите свой email адрес"
			    placeholder="Email" title="Email" data-validation="email" required>
			<span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
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