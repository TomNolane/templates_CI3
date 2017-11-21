
<div class="form-group has-feedback has-success">
    <label class="control-label label-required ">Сумма*</label>
    <div class="form-slider grey2">
        <input type="tel" class="form-control amount2" id="amount" name="amount" value="<?php if(empty($_POST['amount'])){if(empty($_GET['amount'])){echo'80000';}else{echo $_GET['amount'];}}else{echo $_POST['amount'];} ?>"/>
    </div>    
        <span id="amountstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback has-success">	
        <label class="control-label label-required hidden-xs hidden-sm">Срок*</label>
        <input type="text" class="form-control" id="period2" value="От 61 дня" readonly/>
        <span id="periodstatus" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
</div>
<input type="hidden" class="form-control" id="p" name="period" value="7"/>
<div class="form-group has-feedback dadata">
    <label class="control-label label-required hidden-xs hidden-sm">Фамилия*</label>
    <input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Пожалуйста, введите свою фамилию" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свою фамилию" autofocus required>
    <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback dadata">
    <label class="control-label label-required hidden-xs hidden-sm">Имя*</label>
    <input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Пожалуйста, введите свое имя" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое имя" required>
    <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback dadata">
    <label class="control-label label-required hidden-xs hidden-sm">Отчество*</label>
    <input type="text" class="form-control ec tip" name="o" id="o" placeholder="Отчество" title="Пожалуйста, введите свое отчество" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое отчество" required>
    <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<input type="hidden" id="gender" value="1" name="gender" required>
<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Дата рождения</label>
    <input type="text" class="form-control ec tip" name="birthdate" id="birthdate" placeholder="Дата рождения" title="Пожалуйста, выберете свою дату рождения" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения" required>
    <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <label class="control-label label-required hidden-xs hidden-sm">Телефон*</label>
    <input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Телефон" title="Пожалуйста, введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите телефон" required>
    <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback dadata">
    <label class="control-label label-required hidden-xs hidden-sm">Почта*</label>
    <input type="email" class="form-control ec tip" name="email" id="email" placeholder="Email" title="Пожалуйста, введите свой email адрес" data-validation="email" required>
    <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group">
    <label class="control-label label-required hidden-xs hidden-sm">Кредитная история*</label>
    <select class="form-control ec tip" name="delays_type" id="delays_type" required>
        <option value="never">Никогда не брал(а) кредитов</option>
        <option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
        <option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
        <option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
        <option value="had_delay">Просрочки были, сейчас нет</option>
        <option value="has_delay">Просрочки сейчас есть</option>
    </select>
</div>
<div class="clearfix"></div>

<div class="form-group text-left">
    <div class="checkbox checkbox-success">
	<input class="styled tip" type="checkbox" id="agree" value="1" checked>
	<label for="agree">
            <b>Я согласен на обработку персональных данных и с <a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a></b>
	</label>
    </div>         
</div>    
<div class="clearfix"></div>