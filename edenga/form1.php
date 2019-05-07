<div class="form-group has-feedback hidden-lg hidden-md hidden-sm visible-xs text-center">
	<label class="col-sm-4 control-label label-required hidden-xs"></label>
	<div class="col-sm-7 col-xs-12 am">
            <div class="shadow">
                <div>Сумма</div>
                <div style="font-size: 40px;"><?=$sum;?> рублей</div>
                <div style="padding: 5px; color: #ccc">Срок до 130 дней</div>
            </div>
        </div>
</div>
<div class="form-group has-feedback has-success hidden-xs text-center">
    <label class="col-sm-4 control-label label-required hidden-xs">Сумма</label>
    <div class="col-sm-8 col-xs-12">
        <div class="form-slider white">
            <input type="text" class="amount" id="spec_ind" name="amount" value="<?=$sum;?>" />
        </div>
    </div>
</div>
<div class="form-group has-feedback has-success hidden-xs">
    <label class="col-sm-4 control-label label-required hidden-xs hidden-xs">Срок</label>
    <div class="col-sm-8 col-xs-12">
        <div class="form-slider">
            <input type="text" class="form-control" id="period2" value="<?=$days;?>" readonly/>
        </div>
    </div>
</div>
<input type="hidden" class="form-control" id="p" name="period" value=" <?=$period;?>"/>
<br>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="f">Фамилия *</label>
	<div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec" name="f" id="f" placeholder="Фамилия" title="Фамилия" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию" required>
            <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2">Нужно указать фамилию</p>
            <p class="text-muted helpblock">Пример: Иванова</p>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="i">Имя *</label>
	<div class="col-sm-8 col-xs-12">
            <div class="shadow">
                <input type="text" class="form-control ec" name="i" id="i" placeholder="Имя" title="Имя" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя" required>
                <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <p class="help-block2">Нужно указать имя</p> 
                <p class="text-muted helpblock">Пример: Лариса</p>
            </div>
        </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="o">Отчество *</label>
	<div class="col-sm-8 col-xs-12">
            <div class="shadow">
                <input type="text" class="form-control ec" name="o" id="o" placeholder="Отчество" title="Отчество" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество" required>
                <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <p class="help-block2">Нужно указать отчество</p> 
                <p class="text-muted helpblock">Пример: Ивановна</p>
            </div>
        </div>
</div>
<input type="hidden" id="gender" name="gender" value="1">
<div class="form-group has-feedback hidden">
    <label class="col-sm-4 control-label label-required hidden-xs" for="birthdate">Дата рождения *</label>
    <div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec" value="03/12/1988" id="birthdate" name="birthdate"  placeholder="Дата рождения" title="Дата рождения" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения" required>
            <span id="birthdaedengaatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2"></p>
            <p class="text-muted helpblock">Пример: 06/02/2000</p>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" id="spec_form2" for="phone">Телефон *</label>
	<div class="col-sm-8 col-xs-12">
        <input type="tel" class="form-control ec" name="phone" id="phone" placeholder="Телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Введите телефон" required>
        <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        <p class="help-block2">Нужно указать номер телефона</p>
        <p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="email">Почта *</label>
	<div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="email" class="form-control ec" name="email" id="email" placeholder="Пример: email@mail.ru" title="Email" data-validation="email" data-validation-error-msg="Введите свой email" required>
            <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2"></p>
            <p class="text-muted helpblock">Проверьте почту. Письмо могло попасть в папку "СПАМ"</p>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="delays_type">Кредитная история</label>
	<div class="col-sm-8 col-xs-12">
		<select class="form-control ec" name="delays_type" id="delays_type">
		<option selected value="never">Никогда не брал(а) кредитов</option>
		<option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
		<option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
		<option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
		<option value="had_delay">Просрочки были, сейчас нет</option>
		<option value="has_delay">Просрочки сейчас есть</option>
		</select>
	</div>
</div>
<div class="clearfix"></div>
<div class="form-group text-left">
	<label class="col-sm-4 control-label"></label>
	<div class="col-sm-8 col-xs-12">
		<div class="checkbox checkbox-primary">
			<input class="styled" type="checkbox" onClick="checkMee();" id="agree" value="1" checked>
			<label for="agree">
				<b class="font12">Я согласен на обработку персональных данных и с <a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a></b>
			</label>
		</div>
    </div>
	<label class="col-sm-4 control-label"></label>
	<div class="col-sm-8 col-xs-12">
		<div class="checkbox checkbox-primary">
			<input class="styled" type="checkbox" id="marketing" value="1" checked>
			<label for="marketing">
				<b class="font12">Я согласен на получение рекламных сообщений</b>
			</label>
		</div>
    </div>
</div>
<br>

  <div class="form-group has-feedback hiddem">
    <div class="col-sm-4"><img src="<?php echo $_SESSION['captcha']['image_src'] ?>"/></div>
	<div class="col-sm-8 col-xs-12">
        <br>
        <input type="text" class="form-control ec" name="ahctpac" id="ahctpac" placeholder="Введите текст с картинки" required>
        <p class="help-block2">Введите правильно текст с картинки</p> 
    </div>
</div> 
<div class="clearfix"></div>