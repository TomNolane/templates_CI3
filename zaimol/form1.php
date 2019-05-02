<section class="ex-main-form">
    <div class="row">
    <div class="for_swap"></div>
        <div class="col-lg-9 col-md-8"> 
            <div class="ex-pr">
            <h3 class="hidden-lg hidden-md text-center"><?=$sum;?> рублей</h3>
                <div class="form-group has-feedback hidden">
                    <label class="control-label col-md-4" for="f">Фамилия</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Пожалуйста, введите свою фамилию"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Пожалуйста, введите свою фамилию" required value="Тестовое">
                            <figure></figure>
                            <!-- <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label col-md-4" for="i">Имя</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Пожалуйста, введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Пожалуйста, введите свое имя" required>
                            <!-- <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback hidden">
                    <label class="control-label col-md-4" for="o">Отчество</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Пожалуйста, введите свое отчество"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Пожалуйста, введите свое отчество" required value="Тестовое">
                            <!-- <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
                        </div>
                    </div>
                </div>
                <input type="hidden" id="gender" value="1" name="gender" required>
                <!-- Скрываем старую форму даты рождения -->
<div class="form-group hidden">
	<label class="col-sm-4 control-label label-required hidden-xs">Дата рождения*</label>
	<div class="col-sm-2">
		<div class="shadow">
			<select class="form-control ec" id="birth_dd" name="birth_dd" required>
				<option value="0">День</option>
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
			<select class="form-control ec" id="birth_yyyy" name="birth_yyyy" required>
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
                <div class="form-group hidden">
                    <label class="control-label col-md-4" for="birthdate">Дата рождения</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="text" class="form-control ec tip" value="06/12/1988" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Пожалуйста, выберете свою дату рождения"
                                data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения"
                                required>
                            <!-- <span id="birthdazaimolatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" id="spec_form2" for="phone" id="spec_form2">Телефон</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Введите свой номер телефона"
                                title="Пожалуйста, введите свой номер телефона" data-validation-error-msg="Пожалуйста, введите номер телефона"
                                required>
                            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Email">Email</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Пожалуйста, введите свой email адрес"
                                placeholder="Email" title="Email" data-validation="email" data-validation-error-msg="Пожалуйста, введите свой email"
                                required>
                        </div>
                    </div>
                </div>
                <div class="form-group hidden">
                    <label class="control-label col-md-4" for="delays_type">Кредитная история</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper ex-arrow">
                            <select class="form-control ec special_form99" name="delays_type" id="delays_type">
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
                    <div class="col-md-8 col-md-offset-4 ex-agreement-check">
                        <label class="checkbox-inline">
                            <span class="font12">Я согласен на обработку персональных данных и с публичной офертой</span>
                            <input type="checkbox" onClick="checkMee();" id="agree" value="1" checked>
                            <i></i>
                        </label>
                    </div>
                    <div class="col-md-8 col-md-offset-4 ex-agreement-check">
                        <label class="checkbox-inline">
                            <span class="font12">Я согласен на получение рекламных сообщений</span>
                            <input type="checkbox" id="marketing" value="1" checked>
                            <i></i>
                        </label>
                    </div>                    
                </div>
                <div class="form-group">

            <div class="col-md-6 col-md-offset-4 text-right">
                <button class="ex-main-btn" id="next1" type="button">Получить деньги</button> 
            </div> 
            
                </div>
            </div>
        </div>
        <aside class="col-lg-3 col-md-4 hidden-sm hidden-xs">
            <div class="ex-display">
                <div class="ex-slider-val"></div>
            </div>
            <div class="hidden-xs hidden-sm"><input type="text" id="rangeSlider" name="rangeSlider" value="<?=$sum;?>" /></div>
            <main class="ex-main-counter hidden-xs hidden-sm">
                <div class="ex-draft">
                    <div class="ex-wrapper">
                        <h3>Zaimol</h3>
                        <i></i>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Процентная ставка</td>
                                    <td class="ex-bet"></td>
                                </tr>
                                <tr>
                                    <td>Сумма</td>
                                    <td class="ex-current-val">
                                        <span></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Срок займа</td>
                                    <td class="ex-time">
                                        <span></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Комисссия</td>
                                    <td class="ex-Commission">
                                        <span></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <tbody>
                                <tr>
                                    <td>К возврату</td>
                                    <td class="ex-total">
                                        <span></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-center">Спасибо</p>
                    </div>
                </div>
            </main>
        </aside>
    </div>
</section>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- zaimol -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="8397017235"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br><br>