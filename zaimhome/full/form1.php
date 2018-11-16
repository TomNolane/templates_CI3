<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required" for="f">Фамилия</label>
    <div class="col-md-6">
        <div class="ex-wrapper"> 
            <input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию" required>
            <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div> <p class="help-block2">Нужно указать фамилию</p>
            <p class="text-muted text-right">Пример: Иванова</p></div>
        </div> 
    </div>
</div> 
<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required" for="i">Имя</label>
    <div class="col-md-6"> 
        <div class="ex-wrapper">
            <input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя" required>
            <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div><p class="help-block2">Нужно указать имя</p> 
            <p class="text-muted text-right">Пример: Лариса</p></div>
        </div>
    </div>
</div> 
<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required" for="o">Отчество</label>
    <div class="col-md-6">
        <div class="ex-wrapper"> 
            <input type="text" class="form-control ec tip sp_push_custom_data" name="o" id="o" placeholder="Отчество" title="Введите свое отчество" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество" required>
            <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2">Нужно указать отчество</p> 
            <p class="text-muted text-right">Пример: Ивановна</p>
        </div>
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
    <label class="control-label col-md-4 label-required" for="birthdate">Дата рождения</label>
    <div class="col-md-6">
        <div class="ex-wrapper">
            <input type="tel" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Укажите свою дату рождения" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Укажите дату рождения" required>
            <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2"></p>
            <p class="text-muted text-right">Пример: 06/02/2000</p>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required" for="phone">Телефон</label>
    <div class="col-md-6">
        <div class="ex-wrapper">
            <input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Телефон" title="Введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Укажите № телефона" required>
            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2">Нужно указать номер телефона</p>
            <p class="text-muted text-right">Пример: 8 (977) 777 7777</p>
        </div>
    </div>
</div>
<div class="form-group has-feedback dadata">
    <label class="control-label col-md-4" for="email">Почта</label>
    <div class="col-md-6">
        <div class="ex-wrapper">
             <input type="email" class="form-control ec tip sp_push_custom_data" name="email" id="email" title="Введите свой email адрес" placeholder="Пример: email@mail.ru" data-validation="email" data-validation-error-msg="Укажите ваш email" required>
            <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2"></p>
            <p class="text-muted text-right">Пример: email@mail.ru</p>
        </div>
    </div>
</div>
<div class="form-group">
<label class="control-label col-md-4" for="credit">Кредитная история</label>
<div class="col-md-6">
    <select size="1" class="form-control" id="credit">
        <option selected>Никогда не брал кредитов</option>
        <option>Кредиты закрыты, просрочек не было</option>
        <option>Кредиты есть, просрочек нет</option>
        <option>Кредиты закрыты, просрочки были</option>
        <option>Просрочки были, сейчас нет</option>
        <option>Просрочки сейчас есть</option>
    </select>
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-4 ex-agreement-check">
    <br>
    <label class="checkbox-inline"><span>Я согласен на обработку персональных данных и с публичной офертой</span>
        <input type="checkbox" value="" id="agree" onclick="checkMe();" checked>
        <i></i>
    </label>
    <label class="hidden">
        <input type="checkbox" id="marketing" value="1" checked>
        <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
    </label>
</div>
</div>
<div class="form-group">
    <div class="col-md-12 col-xs-12 text-center" id="my_btn"> 
        <button class="ex-main-btn" id="next1f" type="button"> Далее </button> 
    </div>
</div> 
