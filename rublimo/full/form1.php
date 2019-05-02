<div class="form-group has-feedback hidden-lg hidden-md hidden-sm visible-xs text-center">
	<label class="col-sm-4 control-label label-required hidden-xs"></label>
	<div class="col-sm-7 col-xs-12 am">
		<div class="">
			<div>Сумма</div>
			<div class="font40">
				<?=$sum;?> рублей</div>
			<div id="form-4">Срок до 130 дней</div>
		</div>
	</div>
</div>
<div class="form-group has-feedback has-success hidden-xs text-center">
	<label class="col-sm-4 control-label label-required hidden-xs" for="amount">Сумма</label>
	<div class="col-sm-8 col-xs-12">
		<div class="form-slider green irs2">
			<input type="text" class="amount2" name="amount" value="<?=$sum;?>"
			/>
		</div>
	</div>
</div>
<div class="form-group has-feedback has-success hidden-xs">
	<label class="col-sm-4 control-label label-required hidden-xs" for="period2">Срок</label>
	<div class="col-sm-8 col-xs-12">
		<div class="form-slider green">
			<input type="text" class="form-control" id="period2" name="period2" value="От 61 до 130 дней" readonly/>
			<span id="periodstatus" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>
<input type="hidden" id="period" name="period" value="<?=$period;?>" />
<br>
<div class="form-group has-feedback"> 
	<label class="col-sm-4 control-label label-required hidden-xs" for="f">Фамилия</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Укажите свою фамилию"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свою фамилию"
			    required>
			<span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2">Нужно указать фамилию</p>
			<p class="text-muted helpblock">Пример: Иванова</p>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="i">Имя</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Укажите свое имя" data-sanitize="capitalize"
			    data-validation="custom"  data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свое имя"
			    required>
			<span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2">Нужно указать имя</p> 
			<p class="text-muted helpblock">Пример: Лариса</p>
	 
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs"  for="o">Отчество</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="text" class="form-control ec tip" name="o" id="o" placeholder="Отчество" title="Укажите свое отчество"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свое отчество"
			    required>
			<span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2">Нужно указать отчество</p> 
			<p class="text-muted helpblock">Пример: Ивановна</p>
		 
	</div>
</div> 
<input type="hidden" id="gender" value="1" name="gender">
<!-- Скрываем старую форму даты рождения -->
<div class="form-group hidden">
	<label class="col-sm-4 control-label label-required hidden-xs" for="birth_dd">Дата рождения*</label>
	<div class="col-sm-2">
		<div class="shadow">
			<select size="1" class="form-control ec" id="birth_dd" name="birth_dd">
			    <option>выбери</option>
				<option value="0">День</option>
				<?php for($i=1;$i<=31;$i++) echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>'; ?>
			</select>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="shadow">
		<label class="col-sm-4 control-label label-required hidden-xs" for="birth_mm">Дата рождения</label>
			<select size="1" class="form-control ec" id="birth_mm" name="birth_mm">
				<option>выбери</option>
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
		<label class="col-sm-4 control-label label-required hidden-xs" for="birth_yyyy">Дата рождения</label>
			<select size="1" class="form-control ec" id="birth_yyyy" name="birth_yyyy">
				<option>выбери</option>
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
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" id="birthdate_label" for="birthdate_label">Дата рождения</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="tel" class="form-control ec tip" name="birthdate" id="birthdate" placeholder="День рождения" title="Укажите свою дату рождения"
			    data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Укажите дату рождения"
			    required>
			<span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2"></p>
			<p class="text-muted helpblock">Пример: 06/02/2000</p>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="phone">Телефон</label>
	<div class="col-sm-8 col-xs-12">
		<input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Укажите № телефона" title="Введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Укажите № телефона" required="">
		<span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Нужно указать номер телефона</p>
		<p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="email">Почта</label>
	<div class="col-sm-8 col-xs-12"> 
		<input type="email" class="form-control ec tip" name="email" id="email" title="Укажите свой email адрес" placeholder="Email"
			  data-validation="email" data-validation-error-msg="Укажите свой email" required>
		<span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2"></p>
		<p class="text-muted helpblock">Пример: email@mail.ru</p>
	</div>
</div>
<div class="form-group hidden">
	<label class="col-sm-4 control-label label-required hidden-xs" for="credit">Кредитная история</label>
	<div class="col-sm-8 col-xs-12">
		<select class="form-control" id="credit">
			<option selected>Никогда не брал кредитов</option>
			<option>Кредиты закрыты, просрочек не было</option>
			<option>Кредиты есть, просрочек нет</option>
			<option>Кредиты закрыты, просрочки были</option>
			<option>Просрочки были, сейчас нет</option>
			<option>Просрочки сейчас есть</option>
		</select>
	</div>
</div>
<div class="clearfix"></div>
<div class="form-group">
	<label class="col-sm-4 control-label"></label>
	<div class="col-sm-8 col-xs-12">
		<label>
			<input type="checkbox" id="agree" onclick="checkMee()"value="1" checked>
			<b>Я согласен на обработку персональных данных и с
				<a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a>
			</b>
		</label>
	</div>
	<label class="hidden">
		<input type="checkbox" id="marketing" value="1" checked>
		<b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
	</label>

</div>
<div class="clearfix"></div>
<div class="col-sm-7 col-sm-offset-4 col-xs-12">
<div class="shadow">
<a class="btn btn-ok btn-block" id="next1f">Далее</a>
</div>
</div> 