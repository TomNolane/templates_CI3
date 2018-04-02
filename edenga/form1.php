<div class="form-group has-feedback hidden-lg hidden-md hidden-sm visible-xs text-center">
	<label class="col-sm-4 control-label label-required hidden-xs"></label>
	<div class="col-sm-7 col-xs-12 am">
            <div class="shadow">
                <div>Сумма</div>
                <div style="font-size: 40px;"><?php if(empty($_POST['amount'])){if(empty($_GET['amount'])){echo'6000';}else{echo $_GET['amount'];}}else{echo $_POST['amount'];} ?> рублей</div>
                <div style="padding: 5px; color: #ccc">Срок до 130 дней</div>
            </div>
        </div>
</div>
<div class="form-group has-feedback has-success hidden-xs text-center">
    <label class="col-sm-4 control-label label-required hidden-xs">Сумма</label>
    <div class="col-sm-8 col-xs-12">
        <div class="form-slider white">
            <input type="text" class="amount" name="amount" value="<?php echo $sum; ?>" />
        </div>
    </div>
</div>
<div class="form-group has-feedback has-success hidden-xs">
    <label class="col-sm-4 control-label label-required hidden-xs hidden-xs">Срок</label>
    <div class="col-sm-8 col-xs-12">
        <div class="form-slider">
            <input type="text" class="form-control" id="period2" value="<?php echo $days2; ?>" readonly/>
        </div>
    </div>
</div>
<input type="hidden" class="form-control" id="p" name="period" value=" <?php echo $period; ?>"/>
   
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="f">Фамилия *</label>
	<div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec" name="f" id="f" placeholder="Фамилия" title="Фамилия" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свою фамилию" required>
            <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="i">Имя *</label>
	<div class="col-sm-8 col-xs-12">
            <div class="shadow">
                <input type="text" class="form-control ec" name="i" id="i" placeholder="Имя" title="Имя" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя" required>
                <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="o">Отчество *</label>
	<div class="col-sm-8 col-xs-12">
            <div class="shadow">
                <input type="text" class="form-control ec" name="o" id="o" placeholder="Отчество" title="Отчество" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое отчество" required>
                <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
</div>
<input type="hidden" id="gender" name="gender" value="1">
<div class="form-group has-feedback hidden">
    <label class="col-sm-4 control-label label-required hidden-xs" for="birthdate">Дата рождения *</label>
    <div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec" value="03/12/1988" id="birthdate" name="birthdate"  placeholder="Дата рождения" title="Дата рождения" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения" required>
            <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" id="spec_form2" for="phone">Телефон *</label>
	<div class="col-sm-8 col-xs-12">
        <input type="tel" class="form-control ec" name="phone" id="phone" placeholder="Телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Введите телефон" required>
        <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs" for="email">Почта *</label>
	<div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="email" class="form-control ec" name="email" id="email" placeholder="Email" title="Email" data-validation="email" data-validation-error-msg="Введите свой email" required>
            <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>
<div class="form-group has-feedback">
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
<div class="form-group text-left">
	<label class="col-sm-4 control-label"></label>
	<div class="col-sm-8 col-xs-12">
		<div class="checkbox checkbox-primary">
			<input class="styled" type="checkbox" onClick="checkme_form();" id="agree" value="1" checked>
			<label for="agree">
				<b>Я согласен на обработку персональных данных и с <a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a></b>
			</label>
		</div>
        <div class="checkbox checkbox-primary hidden">
            <input class="styled" type="checkbox" id="marketing" value="1" checked>
            <label for="marketing">
                <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
            </label>
        </div>
	</div>
</div>
<div class="clearfix"></div>