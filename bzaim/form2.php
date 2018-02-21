<div class="ex-anketa-head">
    <p class="text-conf text-center">
        Паспортные данные (шаг 2 из 3)
    </p>
</div>
<div class="ex-anketa-main">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group has-feedback">
                                <label class="label-required" for="passport">Серия и номер паспорта</label>
                                <input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Номер и серия паспорта" title="Укажите серию и номер паспорта"
                                    data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Укажите номер и серию паспорта"
                                    required>
                                <span id="passportstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <p class="help-block2">Укажите номер и серию паспорта</p>
                                <p class="text-muted helpblock">Пример: 4510 123456</p>
                            </div>
                        </div>
                        <input type="hidden" class="form-control ec" id="passport-s" name="passport_s"  title="Серия паспорта" data-validation="number" data-validation-allowing="range[1;9999]" data-validation-error-msg="Укажите серию паспорта">
                        <input type="hidden" class="form-control ec" id="passport-n" name="passport_n"  title="Номер паспорта"  data-validation="number" data-validation-allowing="range[1;999999]" data-validation-error-msg="Укажите номер паспорта">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group has-feedback">
                                <label class="label-required" for="passport_code">Код подразделения</label>
                                <input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Код подразделения" title="Укажите код подразделения"
                                    data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Укажите код"
                                    required>
                                <span id="passport_codestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <p class="help-block2">Укажите код подразделения</p>
                                <p class="text-muted helpblock">Пример: 770-098</p>
                            </div>
                        </div>
                        <div class="form-group hidden"> 
                            <div class="col-sm-2">
                            <label class="col-sm-4 control-label label-required" for="passport_dd">Дата выдачи*</label>
                                <select size="33" class="form-control ec" id="passport_dd" name="passport_dd" required>
                                    <option selected value="04">&nbsp;</option>
                                    <option value="0">День</option>
                                    <?php
                                    for($i=1;$i<=31;$i++)
                                    echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>';
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-4 control-label label-required" for="passport_mm">Дата выдачи*</label>
                                <select size="13" class="form-control ec" id="passport_mm" name="passport_mm" required>
                                    <option selected value="06">Июнь</option>
                                    <option value="0">Месяц</option>
                                    <option value="01">Январь</option>
                                    <option value="02">Февраль</option>
                                    <option value="03">Март</option>
                                    <option value="04">Апрель</option>
                                    <option value="05">Май</option>
                                    <option value="07">Июль</option>
                                    <option value="08">Август</option>
                                    <option value="09">Сентябрь</option>
                                    <option value="10">Октябрь</option>
                                    <option value="11">Ноябрь</option>
                                    <option value="12">Декабрь</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                            <label class="col-sm-4 control-label label-required" for="passport_yyyy">Дата выдачи*</label>
                                <select size="41" class="form-control ec" id="passport_yyyy" name="passport_yyyy" required>
                                    <option selected value="2000">&nbsp;</option>
                                    <option value="0">Год</option>
                                    <?php
                                    for($i=1980;$i<=date('Y');$i++)
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group has-feedback">
                                <label class="label-required special_form7" for="passportdate">Дата выдачи паспорта</label>
                                <input style="padding: 15px 5px 15px 5px !important;" type="tel" class="form-control ec tip" name="passportdate" id="passportdate"
                                    placeholder="Дата выдачи паспорта" title="Выберете дату выдачи паспорта" data-validation="custom"
                                    data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Дата выдачи паспорта"
                                    required>
                                <span id="passportdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <p class="help-block2">Укажите дату выдачи паспорта</p>
                                <p class="text-muted helpblock">Пример: 24/03/2016</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="passport_who">Кем выдан паспорт</label>
                        <input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Укажите кем выдан паспорт"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$"
                            data-validation-error-msg="Укажите, кем выдан паспорт" required>
                        <span id="passport_whostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block2">Укажите кем выдан паспорт</p>
                        <p class="text-muted helpblock">Пример: ОТДЕЛЕНИЕ УФМС РОССИИ ПО ГОР. МОСКВЕ ПО РАЙОНУ ЩУКИНО</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="birthplace">Место рождения</label>
                        <input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения" title="Ваше место рождения"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите место рождения" required>
                        <span id="birthplacestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block2">Укажите место своего рождения</p>
                        <p class="text-muted helpblock">Пример: г. Новосибирск, Новосибирского района</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group ex-arrow-on has-feedback">
                        <label class="label-required" for="region">Регион проживания</label>
                        <select size="1" class="form-control ec tip" id="region" name="region" autocomplete="off" required>
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
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="city">Город проживания</label>
                        <input type="text" class="form-control ec tip" name="city" id="city" placeholder="Населённый пункт" title="Укажите город в котором вы живете"
                            value="<?php echo isset($city_name)? $city_name : ''; ?>" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom"
                            data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт">
                        <span id="citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block2">Укажите город своего проживания</p>
                        <p class="text-muted helpblock">Пример: г. Новосибирск</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="street">Улица проживания</label>
                        <input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Укажите название улицы"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите улицу" required>
                        <span id="streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block2">Укажите улицу своего проживания</p>
                        <p class="text-muted helpblock">Пример: ул. Ленина</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="building">№ дома</label>
                        <input type="text" class="form-control ec tip" name="building" id="building" placeholder="№ дома" title="Укажите № дома"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите № дома"
                            required>
                        <span id="buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block2">Укажите № дома своего проживания</p>
                        <p class="text-muted helpblock">Пример: 14</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label for="housing">Строение</label>
                        <input type="text" class="form-control ec tip" name="housing" placeholder="Строение/корпус" title="Укажите номер корпуса или строения"
                            id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите строение/корпус"
                            data-validation-optional="true">
                        <span id="housingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block2">Укажите строение\корпус (не обязательно)</p>
                        <p class="text-muted helpblock">Пример: 1а</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label for="flat">№ квартиры</label>
                        <input type="text" class="form-control ec tip" name="flat" placeholder="Квартира" title="Укажите номер квартиры"
                            id="flat" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер квартиры"
                            data-validation-optional="true">
                        <span id="flatstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="help-block2">Укажите номер вашей квартиры</p>
                        <p class="text-muted helpblock">Пример: 38</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group ex-arrow-on has-feedback">
                        <label class="label-required" for="reg_type">Тип регистрации</label>
                        <select size="1" class="form-control ec" name="reg_type" id="reg_type">
                            <option selected value="1">Постоянная регистрация</option>
                            <option value="0">Без регистрации</option> 
                            <option value="2">Временная регистрация</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row hidden">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-9 label-required">
                                Регистрация совпадает с местом жительства
                            </label>
                            <div class="col-sm-3">
                                <div class="row ">
                                    <div class="col-xs-6">
                                        <input type="radio" class="reg_same ec" name="reg_same" value="1" required checked="checked">
                                        <label> Да</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" class="reg_same ec" name="reg_same" value="0" required>
                                        <label> Нет</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ex-anketa-foot">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-right">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-right">
                    <button class="ex-main-btn" id="next2" type="button"> Далее </button>
                </div>
            </div>
        </div>
    </div>
</div>