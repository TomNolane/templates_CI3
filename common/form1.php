
<h2 class="text-center" id="ranges-label">Заполните заявку и получите займ за 15 минут!</h2>

<div class="slider_head_top green" style="display:none;">
	<div class="credit_hint_wrap clearfix">
		<div id="percent_rate" class="hint_block percent_rate">94%</div>
		<div class="hint_block probability">Вероятность <br>одобрения</div>
		<div id="credit_hint" class="hint_block credit_hint">Может понадобиться <br>паспорт</div>
	</div>
</div>

<div class="clearfix">&nbsp;</div>

<div class="form-group">
	<label>Сумма</label>
	<input type="text" id="amount" name="amount" value="<?php echo empty($_POST['amount'])? 15000 : $_POST['amount']; ?>" />
</div>
<div class="form-group">
	<label>Срок</label>
	<input type="text" id="period" name="period" value="<?php echo empty($_POST['period'])? 15000 : $_POST['period']; ?>" />
</div>

<hr>

<!--legend>Личные данные</legend-->

<div class="form-group">
	<label class="label-required">ФИО</label>
	<input type="text" class="form-control" name="f" placeholder="Фамилия" title="Фамилия" required>
</div>
<div class="form-group">
	<input type="text" class="form-control" name="i" placeholder="Имя" title="Имя" required>
</div>
<div class="form-group">
	<input type="text" class="form-control" name="o" placeholder="Отчество" title="Отчество" required>
</div>
<div class="form-group">
	<label class="label-required">Пол</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label class="radio-inline"><input type="radio" name="gender" value="1" required> М</label>
	<label class="radio-inline"><input type="radio" name="gender" value="0" required> Ж</label>
</div>
<div class="clearfix">&nbsp;</div>

<div class="form-group">
	<label class="label-required">Дата рождения</label>
	<table width="100%">
		<tr>
			<td>
				<select class="form-control" id="birth_dd" name="birth_dd" required>
					<option value="0">-- День --</option>
					<?php for($i=1;$i<=31;$i++) echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>'; ?>
				</select>
			</td>
			<td>
				<select class="form-control" id="birth_mm" name="birth_mm" required>
					<option value="0">-- Месяц --</option>
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
			</td>
			<td>
				<select class="form-control" id="birth_yyyy" name="birth_yyyy" required>
					<option value="0">-- Год --</option>
					<?php
					for($i=date('Y', strtotime('-80 years', time()));$i<=date('Y', strtotime('-18 years', time()));$i++)
					echo '<option value="'.$i.'">'.$i.'</option>';
					?>
				</select>
			</td>
		</tr>
	</table>
</div>
<input type="hidden" id="birthdate" name="birthdate">
<div class="clearfix">&nbsp;</div>

<div class="form-group">
	<label class="label-required">Контакты</label>
	<div class="input-group">
		<input type="tel" class="form-control" name="phone" placeholder="Телефон" required>
		<div class="input-group-addon"><i class="fa fa-phone fa-fw"></i></div>
	</div>
</div>
<div class="form-group">
	<div class="input-group">
		<input type="email" class="form-control" name="email" placeholder="Email" title="Email" required>
		<div class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>

<div class="form-group">
	<label class="label-required">Кредитная история</label>
	<select class="form-control" name="delays_type" required>
		<option value="never">Никогда не брал(а) кредитов</option>
		<option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
		<option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
		<option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
		<option value="had_delay">Просрочки были, сейчас нет</option>
		<option value="has_delay">Просрочки сейчас есть</option>
	</select>
</div>
<div class="clearfix">&nbsp;</div>

<label><input type="checkbox" id="agree" value="1" checked> <b>Я прочитал(а) и подтверждаю <a href="/tos.php" class="fancybox" data-fancybox-type="iframe">условия соглашения</a></b></label>
<div id="#tos" style="display:none;">
	<h3>Заполняя заявку на кредит Вы соглашаетесь с нашими правилами использования данных</h3>
	<ol>
		<li>Я даю свое согласие на регистрацию в проекте быстрыйзайм5.рф и получение новостей проекта. Я уведомлен(а) о том, что информация, переданная мною по сети Интернет, может стать доступной третьим лицам, и я освобождаю администрацию быстрыйзайм5.рф от ответственности, в случае, если указанные мною сведения станут доступными третьим лицам.</li>
		
		<li>В целях принятия одним из МФО-партнеров быстрыйзайм5.рф решения о заключении договора займа я даю им свое согласие на:
			<ul>
				<li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно на сбор и проверку достоверности представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных данных в целях продвижения услуг быстрыйзайм5.рф на рынке с помощью средств связи, равно как продвижение услуг быстрыйзайм5.рф и/или услуг (товаров, работ) третьих лиц-партнеров быстрыйзайм5.рф.</li>
				<li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004 г. № 218-ФЗ "О кредитных историях" от любых организаций, осуществляющих в соответствии с действующим законодательством формирование, обработку и хранение такой информации. Полученная информация предназначена для внутреннего использования МФО-партнеров быстрыйзайм5.рф. Настоящие согласия даны мной на неопределенный срок.</li>
			</ul>
		</li>
		
		<li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную дату и обязуюсь незамедлительно уведомить быстрыйзайм5.рф в случае изменения указанных мной сведений, а также о любых обстоятельствах, способных повлиять на выполнение мной или МФО-партнеров быстрыйзайм5.рф обязательств по займу, который может быть предоставлен на основании заявки.</li>
	</ol>
</div>
<label><input type="checkbox" id="marketing" value="1" checked> <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозайма</b></label>
<div class="clearfix">&nbsp;</div>
