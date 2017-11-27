<div class="form-group has-feedback has-success">
    <label class="control-label label-required ">Сумма*</label>
    <div class="form-slider grey2">
        <input type="text" class="form-control amount3" id="amount" name="amount" value="<?php if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['amount'])) echo '20000'; else echo $_POST['amount'];  ?>"/>
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