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
<input type="hidden" class="form-control" id="p" name="period" value="<?=$period;?>"/>
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
    <label class="col-sm-4 control-label label-required hidden-xs" for="birthdate">Дата рождения *</label>
    <div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec"  id="birthdate" name="birthdate"  placeholder="Дата рождения" title="Дата рождения" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения" required>
            <span id="birthdaedengaatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2">Нужно указать дату рождения</p>
			<p class="text-muted helpblock">Пример: 24/03/1980</p>
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
            <input type="email" class="form-control ec" name="email" id="email" placeholder="Email" title="Email" data-validation="email" data-validation-error-msg="Введите свой email" required>
            <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <p class="help-block2"></p>
            <p class="text-muted helpblock">Пример: email@mail.ru</p>
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