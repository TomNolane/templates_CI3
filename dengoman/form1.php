<style>
.myfnt {font-size: 21px;}

.myborder {
    border-radius: 10px 10px 10px 10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -webkit-border-radius: 10px 10px 10px 10px;
}

.toprow {
    <? if ($setting_array['is_mobile'] == 'мобила') : ?>
    margin: -8px 0px 30px 2px;
    border-radius: 24px 24px 10px 10px;
    -moz-border-radius: 24px 24px 10px 10px;
    -webkit-border-radius: 24px 24px 10px 10px;
    <? else: ?>
    margin-bottom: 20px;
    border-radius: 10px 10px 10px 10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -webkit-border-radius: 10px 10px 10px 10px;
    <? endif; ?>
    padding: 10px 0px;
    color: #4e8ef7;
    background: #FFF;
    border: 2px solid #4e8ef7;
}

.white p {margin-bottom: 5px !important;}

.mymargins4blocks {
	<? if ($setting_array['is_mobile'] == 'мобила') : ?>
	margin-bottom: 20px !important;
	<? endif; ?>
}
</style>
<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-offset-2 col-md-offset-2 text-center toprow myfnt">Заполнив 1-й шаг, получите +30% к вероятности одобрения заявки</div>
</div>
<div class="form-group has-feedback hidden-lg hidden-md hidden-sm hidden-xs amm">
	<label class="col-sm-4 control-label label-required hidden-xs hidden-xs"></label>
	<div class="col-sm-7 col-xs-12 am">
		<div class="shadow">
			<div>Сумма</div>
			<div style="font-size: 40px;">
				<?php echo $sum; ?> рублей</div>
			<div style="padding: 5px; color: #ccc">Срок до 130 дней</div>
		</div>
	</div>
</div>
<div class="form-group has-feedback has-success mymargins4blocks" style="margin-bottom: 14px;">
	<label class="col-sm-3 control-label label-required hidden hidden-xs">Сумма</label>
	<div class="col-sm-6 col-md-6 col-xs-12 col-sm-offset-5">
		<div class="form-slider green irs2">
			<input type="text" class="amount" id="rangeSlider" name="amount" value="<?php echo $sum; ?>" />
		</div>
	</div>
</div>
<div class="form-group has-feedback hidden-xs" style="margin-top: 14px; margin-bottom: 14px;">
	<label class="col-sm-3 control-label label-required hidden-xs hidden">Срок</label>
	<div class="col-sm-6 col-md-6 col-xs-12 col-sm-offset-5">
		<div class="form-slider green">
			<input type="text" class="form-control myborder myfnt" id="period2" value="От 61 до 130 дней" style="color: #000;" disabled="disabled" readonly/>
			<span id="periodstatus" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>

<div class="form-group has-feedback has-success hidden-xs" style="margin-top: 14px; margin-bottom: 14px;">
	<label class="col-sm-4 col-md-4 control-label hidden-xs"></label>
	<div class="col-sm-6 col-md-6 col-xs-12 col-sm-offset-5">
        <hr style="border: 1px dashed #4e8ef7;" />
	</div>
</div>

<input type="hidden" id="period" name="period" value="<?php echo $period; ?>" />
<div class="form-group has-feedback hidden">
	<label class="col-sm-4 control-label label-required hidden-xs hidden-xs">Фамилия</label>
	<div class="col-sm-8 col-xs-12 col-xs-12">
		<div class="shadow ">
			<input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Укажите свою фамилию" data-sanitize="capitalize"
			    data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свою фамилию" required value="тест">
			<span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2">Нужно указать фамилию</p>
			<p class="text-muted helpblock">Пример: Иванова</p>
		</div>
	</div>
</div>
<div class="form-group has-feedback hidden">
	<label class="col-sm-4 control-label label-required hidden-xs">Имя</label>
	<div class="col-sm-8 col-xs-12 col-xs-12">
		<div class="shadow ">
			<input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Укажите свое имя" data-sanitize="capitalize"
			    data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свое имя" required value="тест">
			<span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2">Нужно указать имя</p>
			<p class="text-muted helpblock">Пример: Лариса</p>
		</div>
	</div>
</div>
<div class="form-group has-feedback hidden">
	<label class="col-sm-4 control-label label-required hidden-xs">Отчество</label>
	<div class="col-sm-8 col-xs-12 col-xs-12">
		<div class="shadow ">
			<input type="text" class="form-control ec tip" name="o" id="o" placeholder="Отчество" title="Укажите свое отчество" data-sanitize="capitalize"
			    data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свое отчество"
			    required value="тест">
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
<div class="form-group has-feedback hidden">
	<label class="col-sm-4 control-label label-required hidden-xs" id="_birthdate">Дата рождения</label>
	<div class="col-sm-8 col-xs-12">
		<div class="shadow ">
			<input type="text" class="form-control ec tip" name="birthdate" id="birthdate" placeholder="День рождения" title="Выберете свою дату рождения"
			    data-validation="custom" value="06/02/2000" data-validation-format="dd/mm/yyyy" required>
			<span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2"></p>
			<p class="text-muted helpblock">Пример: 06/02/2000</p>
		</div>
	</div>
</div>
<div class="form-group has-feedback mymargins4blocks">
	<label class="col-sm-4 control-label label-required hidden hidden-xs" id="spec_form2">Телефон</label>
	<div class="col-sm-6 col-md-6 col-xs-12 col-sm-offset-5">
		<input type="tel" class="form-control ec tip myborder myfnt" name="phone" id="phone" placeholder="№ телефона" title="Укажите свой телефон"
		    data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Укажите телефон"
		    required>
		<span id="phonestatus" class="form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Нужно указать номер телефона</p>
		<p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
	</div>
</div>
<div class="form-group has-feedback mymargins4blocks">
	<label class="col-sm-4 control-label label-required hidden hidden-xs">Почта</label>
	<div class="col-sm-6 col-md-6 col-xs-12 col-sm-offset-5">
		<div class="shadow ">
			<input type="email" class="form-control ec tip myborder myfnt" name="email" id="email" placeholder="Email" title="Укажите свой email адрес"
			    data-validation-error-msg="Укажите email" data-validation="email" required>
			<span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2"></p>
			<p class="text-muted helpblock">Пример: email@mail.ru</p>
		</div>
	</div>
</div>
<div class="form-group hidden">
	<label class="col-sm-4 control-label label-required hidden-xs">Кредитная история</label>
	<div class="col-sm-8 col-xs-12">
		<select size="1" class="form-control ec" name="delays_type" id="delays_type">
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
<div class="form-group">
	<label class="col-sm-4 control-label"></label>
    <? if ($setting_array['is_mobile'] != 'мобила') : ?>
        <div class="col-sm-6 col-md-6 col-xs-12 col-sm-offset-5" style="line-height: 0.8;">
    <? else : ?>
        <div class="col-sm-6 col-md-6 col-xs-12 col-sm-offset-5" style="line-height: 0.8; margin-top: -20px;">
    <? endif; ?>   
        <label>
			<input type="checkbox" id="agree" value="1" onclick="checkMee();" checked>
			<b class="font12">Я согласен на обработку персональных данных и с
				<a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a>
			</b>
		</label>
		<label class="hidden">
			<input type="checkbox" id="marketing" value="1" checked>
			<b class="font12">Я согласен на получение рекламных сообщений</b>
		</label>            
	</div>
</div>
<div class="clearfix"></div>