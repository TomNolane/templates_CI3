<br><br><div class="form-group"> 
	<label class="col-sm-4 control-label label-required green">Сумма
		<span>*</span>
	</label>
	<div class="col-sm-8">
		<input type="number" class="amount" id="amount" name="amount" value="<?=$sum;?>"/>
	</div>
</div> 

<input type="hidden" id="period" name="period" value="<?=$period;?>" />
<div class="form-group">
	<label class="col-sm-4 control-label label-required green">Срок
		<span>*</span>
	</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="period2" value="Срок до 130 дней" disabled />
	</div>
</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="f">Фамилия</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Пожалуйста, введите свою фамилию"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свою фамилию"
		    required>
		<span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Нужно указать фамилию</p>
		<p class="text-muted helpblock">Пример: Иванова</p>
	</div>
</div>
<div class="form-group has-feedback" >
	<label class="col-sm-4 control-label label-required hidden-xs" for="i">Имя</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip sp_push_custom_data" name="i" id="i" placeholder="Имя" title="Пожалуйста, введите свое имя"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое имя"
		    required>
		<span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Нужно указать имя</p> 
		<p class="text-muted helpblock">Пример: Лариса</p>
	</div>
</div>
<div class="form-group has-feedback" >
	<label class="col-sm-4 control-label label-required hidden-xs" for="o">Отчество</label>
	<div class="col-sm-8 col-xs-12">
		<input type="text" class="form-control ec tip sp_push_custom_data" name="o" id="o" placeholder="Отчество" title="Пожалуйста, введите свое отчество"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое отчество"
		    required>
		<span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Нужно указать отчество</p> 
		<p class="text-muted helpblock">Пример: Ивановна</p>
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
	<label class="col-sm-4 control-label label-required hidden-xs" for="birthdate">Дата рождения</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Пожалуйста, выберете свою дату рождения"
			    data-validation="custom" value="06/12/1988" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения"
			    required>
			<span id="birthdagodzaimatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		 	<p class="help-block2"></p>
			<p class="text-muted helpblock">Пример: 06/02/2000</p>
	</div>
</div>
<div class="form-group has-feedback" >
	<label class="col-sm-4 control-label label-required hidden-xs" for="phone">Телефон</label>
	<div class="col-sm-8 col-xs-12">
		<input style="margin-bottom: 20px;" type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Телефон"
		    title="Пожалуйста, введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$"
		    data-validation-error-msg="Пожалуйста, введите телефон" required>
		<span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true" style="margin-top: -4px;"></span>
		<p class="help-block2">Нужно указать номер телефона</p>
		<p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
	</div>
</div>
<div class="form-group has-feedback" > 
	<label class="col-sm-4 control-label label-required hidden-xs" for="email">Почта</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="email" class="form-control ec tip sp_push_custom_data" name="email" id="email" title="Пожалуйста, введите свой email адрес"
			    placeholder="Пример: email@mail.ru" title="Email" data-validation="email" data-validation-error-msg="Пожалуйста, выберите ваш email" required>
			<span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	 		<p class="help-block2"></p>
			<p class="text-muted helpblock">Проверьте почту. Письмо могло попасть в папку "СПАМ"</p>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label label-required hidden-xs" for="delays_type">Кредитная история</label>
	<div class="col-sm-8 col-xs-12">
		<select class="form-control ec" name="delays_type" id="delays_type" required>
			<option selected value="never">Никогда не брал(а) кредитов</option>
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
			<input type="checkbox" onclick="checkMee()" id="agree" value="1" checked>
			<b class="font12">Я согласен на обработку персональных данных и с
				<a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a>
			</b>
		</label>
	</div>
	<label class="col-sm-4 control-label hidden-xs"></label>
	<div class="col-sm-8 col-xs-12">
		<label>
			<input type="checkbox" id="marketing" value="1" checked>
			<b class="font12">Я согласен на получение рекламных сообщений
			</b>
		</label>
	</div>
</div>
<div class="clearfix"></div>