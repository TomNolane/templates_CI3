<section class="ex-main-form">
    <div class="row">
        <div class="col-md-9">
            <div class="ex-pr">
                <div class="form-group has-feedback hidden">
                    <label class="control-label col-md-4" for="f">Фамилия</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Укажите свою фамилию"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Укажите свою фамилию" required value="Тестовое">
                                <p class="help-block2">Нужно указать фамилию</p>
                                <p class="text-muted helpblock">Пример: Иванова</p>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label col-md-4" for="i">Имя</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Укажите свое имя" data-sanitize="capitalize"
                                data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Укажите свое имя"
                                required>
                                <p class="help-block2">Нужно указать имя</p>
                                <p class="text-muted helpblock hidden-xs hidden-sm">Пример: Лариса</p>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback hidden">
                    <label class="control-label col-md-4" for="o">Отчество</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Укажите свое отчество"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Укажите свое отчество" required value="Тестовое">
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
                <div class="form-group has-feedback hidden">
                    <label class="control-label col-md-4" for="birthdate">Дата рождения</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="tel" class="form-control ec tip" value="06/02/2000" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                                data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения">
                                <p class="help-block2"></p>
                                <p class="text-muted helpblock">Пример: 06/02/2000</p>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label col-md-4" for="phone">Телефон</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Укажите № телефона" title="Введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Укажите № телефона" required="">
                            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <p class="help-block2">Нужно указать номер телефона</p>
                            <p class="text-muted helpblock  hidden-xs hidden-sm">Пример: 8 (977) 777 7777</p>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label col-md-4" for="email">Email</label>
                    <div class="col-md-8">
                        <div class="ex-wrapper">
                            <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Укажите свой email адрес" placeholder="Пример: email@mail.ru"
                                data-validation="email" data-validation-error-msg="Укажите свой email" required>
                                <p class="help-block2"></p>
                                <p class="text-muted helpblock  hidden-xs hidden-sm">Проверьте почту. Письмо могло попасть в папку "СПАМ"</p>
                        </div>
                    </div>
                </div>
                
                <!-- Регион и город -->
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-4" for="region">Регион проживания</label>
                <div class="col-md-8">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec tip special_form99" id="region" name="region" autocomplete="off" required>
                            <option value="">-- Выберите регион --</option>
                            <?php
                if (isset($regions) && is_array($regions))
                {
                    foreach($regions as $region)
                    echo '<option value="'.$region['name'].'" data-id="'.$region['region_id'].'"'.((isset($region_name) && $region_name == $region['name'])? ' selected' : '').'>'.$region['name'].'</option>';
                }
                ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-4" for="city">Город проживания</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="city" id="city" title="Укажите город в котором вы живете" value="<?php echo isset($city_name)? $city_name : ''; ?>"
                            pattern="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$"
                            data-validation-error-msg="Укажите, населенный пункт">
                            <p class="help-block2">Укажите город своего проживания</p>
                            <p class="text-muted helpblock">Пример: г. Новосибирск</p>
                    </div>
                </div>
            </div>

                <!-- Регион и город -->
                
                
                <div class="form-group has-feedback hidden">
                    <label class="control-label col-md-4" for="delays_type">Кредитная история</label>
                    <div class="col-md-8">
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
                    <div class="col-md-8 col-md-offset-4 ex-agreement-check">
                        <label class="checkbox-inline">
                            <span>Я согласен на обработку персональных данных и с публичной офертой</span>
                            <input type="checkbox" onClick="checkMee();" id="agree" value="1" checked>
                            <i></i>
                        </label>
                    </div>
                    <div class="col-md-8 col-md-offset-4 ex-agreement-check">
                        <label class="checkbox-inline">
                            <span>Я согласен на получение рекламных сообщений</span>
                            <input type="checkbox" id="marketing" value="1" checked>
                            <i></i>
                        </label>
                    </div>                    
                    
                </div>
                <div class="form-group">
                    <a id="next1">
                        <div class="col-md-8 col-md-offset-4 text-right">
                            <span id="getmoney" class="ex-main-btn hidden-sm hidden-xs">Получить деньги</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <a id="next1b">
            <div class="col-xs-12 text-center">
                <span id="getmoneyb" class="ex-main-btn hidden-md hidden-lg">Получить деньги</span>
            </div>
        </a>
    </div>
</section>
<br><br><br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- forzaim -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="6265677912"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>