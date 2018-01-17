<p class="content-title2 hidden-xs hidden-sm sign__word">Выбранная сумма
	<?php echo $sum; ?> рублей (<a class="spec_a" href="/">изменить</a>)</p>
<p class="content-title3 hidden-md hidden-lg sign__word">Выбранная сумма
	<?php echo $sum; ?> рублей (<a class="spec_a" href="/">изменить</a>)</p>
<p class="text-left form-group has-feedback upper"> 
	<label class="h5 sign__word__red control-label label-required">Фамилия</label>
	<span>
		<input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию"
		    required>
		<span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Имя</label>
	<span>
		<input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Введите свое имя"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
		    required>
		<span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<div id=scroller>
    <span></span>
</div>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Отчество</label>
	<span>
		<input type="text" class="form-control ec tip" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
		    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество"
		    required>
		<span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<input type="hidden" id="gender" name="gender" value="1">
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
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required" id="_birthdate">Дата рождения</label>
	<span>
		<input type="text" class="form-control ec tip" name="birthdate" id="birthdate" placeholder="Заполните это поле" title="Выберете свою дату рождения"
		    data-validation="custom" data-validation-error-msg="Укажите дату рождения" data-validation-format="dd/mm/yyyy" required>
		<span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required" id="spec_form2">Телефон</label>
	<span>
		<input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Заполните это поле" title="Введите свой телефон"
		    data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Введите телефон"
		    required>
		<span id="phonestatus" class="form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word__red h5 control-label label-required">Электронная почта</label>
	<span>
		<input type="email" class="form-control ec tip" name="email" id="email" placeholder="Заполните это поле" title="Введите свой email адрес"
		    data-validation-error-msg="Введите email" data-validation="email" required>
		<span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
	</span>
</p>
<p class="text-left form-group has-feedback">
	<label class="sign__word h5 control-label label-required">Кредитная история</label>
	<span>
		<select class="form-control ec tip" name="delays_type" id="delays_type" required>
			<option value="never">Никогда не брал(а) кредитов</option>
			<option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
			<option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
			<option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
			<option value="had_delay">Просрочки были, сейчас нет</option>
			<option value="has_delay">Просрочки сейчас есть</option>
		</select>
	</span>
</p>
<p class="content2 text-left form-group has-feedback text-center">
	<label class="checkbox checkbox-success checkbox-circle text-center">
	<input class="hidden" id="cbx" type="checkbox" value="1" checked/><label class="cbx" id="cdx2" for="cbx"></label>
	<input type="hidden" value="1"  id="agree" checked>
		<span class="h5 ">Я согласен на обработку персональных данных и с публичной офертой</span>
	</label>
	<div class="hidden">
		<label>
			<input type="checkbox" id="marketing" value="1" checked/>
			<div class="checkbox">
				<i class="fa fa-check"></i>
			</div>
			<b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
		</label>
	</div>
	<a id="next" class="btn btn-xl btn-success special_index ">Далее</a>
</p>