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
                    <input type="text" class="amount2" name="amount" value="<?php if(empty($_POST['amount'])){if(empty($_GET['amount'])){echo'100000';}else{echo $_GET['amount'];}}else{echo $_POST['amount'];} ?>" />
                </div>
            </div>    
</div>
<div class="form-group has-feedback has-success hidden-xs">
            <label class="col-sm-4 control-label label-required hidden-xs hidden-xs">Срок</label>
            <div class="col-sm-8 col-xs-12">
                <div class="form-slider">
                    <input type="text" class="form-control" id="period2" value="От 61 дня" readonly/>
                </div>
            </div>
</div>
    <input type="hidden" class="form-control" id="p" name="period" value=" <?php if(empty($_POST['period2'])){echo '30';}else{echo $_POST['period2'];} ?> "/>
   
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Фамилия*</label>
	<div class="col-sm-8 col-xs-12">
            <div class="shadow dadata">
                <input type="text" class="form-control ec" name="f" id="f" placeholder="Фамилия" title="Фамилия" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свою фамилию" required>
                <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Имя*</label>
	<div class="col-sm-8 col-xs-12">
            <div class="shadow dadata">
                <input type="text" class="form-control ec" name="i" id="i" placeholder="Имя" title="Имя" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое имя" required>
                <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Отчество*</label>
	<div class="col-sm-8 col-xs-12">
            <div class="shadow dadata">
                <input type="text" class="form-control ec" name="o" id="o" placeholder="Отчество" title="Отчество" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое отчество" required>
                <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
</div>
<input type="hidden" id="gender" name="gender" value="1">

<div class="form-group has-feedback text-left" style="display: none;">
	<label class="col-sm-4 control-label label-required hidden-xs">Пол</label>
	<div class="col-sm-8 col-xs-12">

		<div class="radio radio-info radio-inline">
			<input type="radio" id="gender1" value="1" name="gender" checked="checked" required>
			<label for="gender1"> Мужской </label>
		</div>
		<div class="radio radio-info radio-inline">
			<input type="radio" id="gender0" value="0" name="gender" required>
			<label for="gender0"> Женский </label>
		</div>
	</div>
</div>
<!-- Скрываем старую форму даты рождения -->
<div class="form-group" style="display: none;">
	<label class="col-sm-4 control-label label-required hidden-xs">Дата рождения*</label>
	<div class="col-sm-2">
		<div class="shadow">
			<select class="form-control ec" id="birth_dd" name="birth_dd" required>
				<option value="0">День</option>
                                <option selected value="11">День</option>
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
				<option selected value="08">Август</option>
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
                                <option selected value="1985"></option>
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
    <label class="col-sm-4 control-label label-required hidden-xs">Дата рождения</label>
    <div class="col-sm-8 col-xs-12">
        <div class="shadow">
            <input type="text" class="form-control ec" id="birthdate" name="birthdate"  placeholder="Дата рождения" title="Дата рождения" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения" required>
            <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>

<div class="clearfix">&nbsp;</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Телефон*</label>
	<div class="col-sm-8 col-xs-12">
            <input type="tel" class="form-control ec" name="phone" id="phone" placeholder="Телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите телефон" required>
            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Почта*</label>
	<div class="col-sm-8 col-xs-12">
            <div class="shadow dadata">
                <input type="email" class="form-control ec" name="email" id="email" placeholder="Email" title="Email" data-validation="email" required>
                <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
</div>
<div class="clearfix">&nbsp;</div>

<div class="form-group has-feedback">
	<label class="col-sm-4 control-label label-required hidden-xs">Кредитная история*</label>
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
			<input class="styled" type="checkbox" id="agree" value="1" checked>
			<label for="agree">
				<b>Я согласен на обработку персональных данных и с <a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a></b>
			</label>
		</div>
                <div class="checkbox checkbox-primary" style="display: none;">
                        <input class="styled" type="checkbox" id="marketing" value="1" checked>
                        <label for="marketing">
                            <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
                        </label>
                </div>            
	</div>
</div>
<div class="clearfix"></div>