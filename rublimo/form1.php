<style>
.mycol {
    <?php if ($setting_array['is_mobile'] != 'мобила') : ?>
        width: 46%; margin-left: 34px;
    <?php endif; ?>
}
.shortform1 {margin-top: 14px !important; margin-bottom: 14px !important;}
.shortform2 {color: #000 !important;}
.shortform3 {margin-top: 14px !important;}
.shortform4 {border: 1px dashed #71c386;}
.shortform5 {
    <?php if ($setting_array['is_mobile'] != 'мобила') : ?>
        line-height: 0.8 !important;
    <?php else : ?>
        line-height: 0.8 !important;
        margin-top: -20px !important;
    <?php endif; ?>
}
#next1 {
    <?php if ($setting_array['is_mobile'] != 'мобила') : ?>
        width: 56% !important; font-size: 16px !important; margin-left: 28% !important;
    <? else : ?>
        width: 70% !important; font-size: 16px !important; margin-left: 16% !important;
    <? endif; ?>
}
</style>
<div class="form-group has-feedback hidden-lg hidden-md hidden-sm hidden-xs text-center">
	<label class="col-sm-4 control-label label-required hidden-lg hidden-md hidden-sm hidden-xs"></label>
	<div class="col-sm-7 col-xs-12 am">
		<div class="">
			<div>Сумма</div>
			<div class="font40">
				<?=$sum;?> рублей</div>
			<div id="form-4">Срок до 130 дней</div>
		</div>
	</div>
</div>
<div class="form-group has-feedback has-success text-center">
	<label class="col-sm-4 col-md-4 control-label hidden-xs" for="amount"></label>
	<div class="col-sm-6 col-md-6 col-xs-12 mycol">
		<div class="form-slider green irs2">
			<input type="text" class="amount2" name="amount" value="<?=$sum;?>"
			/>
		</div>
	</div>
</div>
<div class="form-group has-feedback hidden-xs shortform1">
	<label class="col-sm-4 col-md-4 control-label hidden-xs" for="period2"></label>
	<div class="col-sm-6 col-md-6 col-xs-12 mycol">
		<div class="form-slider green">
			<input type="text" class="form-control shortform2" id="period2" name="period2" disabled="disabled" value="От 61 до 130 дней" readonly/>
			<span id="periodstatus" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
</div>

<div class="form-group has-feedback has-success hidden-xs shortform3">
	<label class="col-sm-4 col-md-4 control-label hidden-xs"></label>
	<div class="col-sm-6 col-md-6 col-xs-12 mycol">
        <hr class="shortform4" />
	</div>
</div>

<input type="hidden" id="period" name="period" value="<?=$period;?>" />
<br>
<div class="form-group has-feedback hidden"> 
	<label class="col-sm-4 control-label label-required hidden-xs" for="f">Фамилия</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Укажите свою фамилию"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свою фамилию"
			    required value="тест">
			<span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2">Нужно указать фамилию</p>
			<p class="text-muted helpblock">Пример: Иванова</p>
	</div>
</div>
<div class="form-group has-feedback hidden">
	<label class="col-sm-4 control-label label-required hidden-xs" for="i">Имя</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Укажите свое имя" data-sanitize="capitalize"
			    data-validation="custom"  data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свое имя"
			    required value="тест">
			<span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2">Нужно указать имя</p> 
			<p class="text-muted helpblock">Пример: Лариса</p>
	 
	</div>
</div>
<div class="form-group has-feedback hidden">
	<label class="col-sm-4 control-label label-required hidden-xs"  for="o">Отчество</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="text" class="form-control ec tip" name="o" id="o" placeholder="Отчество" title="Укажите свое отчество"
			    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свое отчество"
			    required value="тест">
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
<div class="form-group has-feedback hidden">
	<label class="col-sm-4 control-label label-required hidden-xs" id="birthdate_label" for="birthdate_label">Дата рождения</label>
	<div class="col-sm-8 col-xs-12"> 
			<input type="tel" class="form-control ec tip" name="birthdate" id="birthdate" placeholder="День рождения" title="Укажите свою дату рождения"
			    data-validation="custom" value="06/02/2000" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Укажите дату рождения"
			    required>
			<span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<p class="help-block2"></p>
			<p class="text-muted helpblock">Пример: 06/02/2000</p>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label hidden-xs" for="phone"></label>
	<div class="col-md-6 col-sm-6 col-xs-12 mycol">
		<input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="№ телефона" title="Введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Укажите № телефона" required="">
		<span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2">Нужно указать номер телефона</p>
		<p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
	</div>
</div>
<div class="form-group has-feedback">
	<label class="col-sm-4 control-label hidden-xs" for="email"></label>
	<div class="col-sm-6 col-md-6 col-xs-12 mycol"> 
		<input type="email" class="form-control ec tip" name="email" id="email" title="Укажите свой email адрес" placeholder="Email"
			  data-validation="email" data-validation-error-msg="Укажите свой email" required>
		<span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<p class="help-block2"></p>
		<p class="text-muted helpblock">Пример: ivanov@email.ru</p>
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
	<div class="col-sm-5 col-sm-offset-4 col-md-5 col-xs-12 mycol">
        <label class="shortform5">
			<input type="checkbox" id="agree" onclick="checkMee()" value="1" checked>
			<b class="font12">Я согласен на обработку персональных данных и с
				<a href="#" data-toggle="modal" data-target="#tosModal">публичной офертой</a>
			</b>
		</label>
	</div>
	<label class="col-sm-4 control-label hidden"></label>
	<div class="col-sm-8 col-xs-12 hidden">
		<label>
			<input type="checkbox" id="marketing" value="1" checked>
			<b class="font12">Я согласен на получение рекламных сообщений</b>
		</label>
	</div>
</div>
<div class="clearfix"></div>
<div class="col-sm-6 col-md-6 col-sm-offset-4 col-xs-12">
    <div class="shadow">
        <a class="btn btn-ok btn-block" id="next1">Отправить заявку</a>
    </div>
</div>