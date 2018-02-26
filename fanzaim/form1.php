<section class="container-fluid ex-main-form">
    <div class="row">
        <div class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <!-- <div class="form-group has-feedback"> -->
            <div class="">
                <div class="col-md-9 col-md-offset-3">
                    <div class="ex-wrapper ex-val-select">
                        <p class="ex-slider-val"></p>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group has-feedback"> -->
            <div class="">
                <div class="col-md-9 col-md-offset-3">
                    <div class="ex-wrapper ex-slider-wrapper">
                        <input type="text" id="rangeSlider" name="rangeSlider" value="" />
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="f">Фамилия</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Укажите свою фамилию"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Укажите свою фамилию" required>
                                <p class="help-block2">Нужно указать фамилию</p>
                                <p class="text-muted helpblock">Пример: Иванова</p>
                    </div>
                </div>
            </div> 
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="i">Имя</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Укажите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Укажите свое имя" required>
                                <p class="help-block2">Нужно указать имя</p>
                                <p class="text-muted helpblock">Пример: Лариса</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="o">Отчество</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Укажите свое отчество"
                    data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                    data-validation-error-msg="Укажите свое отчество" required>
                    <p class="help-block2">Нужно указать отчество</p> 
                    <p class="text-muted helpblock">Пример: Ивановна</p>
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
                <label class="control-label col-md-3" for="birthdate">Дата рождения</label>
                <div class="col-md-9">
                    <div class="ex-wrapper"> 
                            <input type="tel" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                                data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
                                required>
                                <p class="help-block2"></p>
                                <p class="text-muted helpblock">Пример: 06/02/2000</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" id="spec_form2" for="phone">Телефон</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Укажите свой номер телефона"
                                title="Укажите свой номер телефона" data-validation-error-msg="Укажите номер телефона"
                                required>
                            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <p class="help-block2">Нужно указать номер телефона</p>
                            <p class="text-muted helpblock">Пример: 8 (977) 777 7777</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="email">Email</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Укажите свой email адрес"
                        placeholder="Email" data-validation="email" data-validation-error-msg="Укажите свой email" required>
                        <p class="help-block2"></p>
                        <p class="text-muted helpblock">Пример: email@mail.ru</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="delays_type">Кредитная история</label>
                <div class="col-md-9">
                    <div class="ex-wrapper ex-arrow">
                    <select size="1" class="form-control ec special_form99" name="delays_type" id="delays_type">
                        <option selected value="never">Никогда не брал(а) кредитов</option>
                        <option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
                        <option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
                        <option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
                        <option value="had_delay">Просрочки были, сейчас нет</option>
                        <option value="has_delay">Просрочки сейчас есть</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-offset-3 ex-agreement-check">
                    <label class="checkbox-inline">
                        <span>Я согласен на обработку персональных данных и с публичной офертой</span>
                        <input type="checkbox" onClick="checkme_form();" id="agree" value="1" checked>
                        <i></i>
                    </label>
                    <label class="hidden">
                            <input type="checkbox" id="marketing" value="1" checked>
                            <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    <a id="next1"><span class="ex-main-btn">Далее</span></a>
                </div>
            </div>
        </div>
    </div>
</section>