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
                                <label class="label-required">Серия и номер паспорта</label>
                                <input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Номер и серия паспорта" title="Введите серию и номер паспорта"
                                    data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Введите номер и серию паспорта"
                                    required>
                                <span id="passportstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <label class="col-sm-4 control-label label-required hidden-xs">Серия и номер паспорта</label>
                            <div class="col-sm-4">
                                <input type="tel" class="form-control ec" id="passport-s" name="passport_s" placeholder="0000" title="Серия паспорта" data-validation="number"
                                    data-validation-allowing="range[1;9999]" data-validation-error-msg="Пожалуйста, введите серию паспорта"
                                    required>
                            </div>
                            <div class="col-sm-4">
                                <input type="tel" class="form-control ec" id="passport-n" name="passport_n" placeholder="000000" title="Номер паспорта" data-validation="number"
                                    data-validation-allowing="range[1;999999]" data-validation-error-msg="Пожалуйста, введите номер паспорта"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group has-feedback">
                                <label class="label-required" for="passport_code">Код подразделения</label>
                                <input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Код подразделения" title="Укажите код подразделения"
                                    data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Введите код"
                                    required>
                                <span id="passport_codestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12">
                            <div class="form-group has-feedback">
                                <label class="label-required" for="passportdate" style="font-size: 10px;">Дата выдачи паспорта</label>
                                <input style="padding: 15px 5px 15px 5px !important;" type="text" class="form-control ec tip" name="passportdate" id="passportdate"
                                    placeholder="Дата выдачи паспорта" title="Пожалуйста, выберете дату выдачи паспорта" data-validation="custom"
                                    data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Дата выдачи паспорта"
                                    required>
                                <span id="passportdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>

                        <!-- Скрываем старую форму даты выдачи -->
                        <div class="form-group" style="display: none;">
                            <label class="label-required hidden-xs">Дата выдачи*</label>
                            <div class="col-sm-2">
                                <select class="form-control ec" id="passport_dd" name="passport_dd" required>
                                    <option value="0">День</option>
                                    <?php
                                        for($i=1;$i<=31;$i++)
                                        echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>';
                                        ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control ec" id="passport_mm" name="passport_mm" required>
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
                            <div class="col-sm-3">
                                <select class="form-control ec" id="passport_yyyy" name="passport_yyyy" required>
                                    <option value="0">Год</option>
                                    <?php
                                    for($i=1980;$i<=date('Y');$i++)
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- Скрываем старую форму даты выдачи -->



                    </div>
                </div>
            </div>
            <div class="row">


                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="passport_who">Кем выдан</label>
                        <input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Пожалуйста, укажите кем выдан паспорт"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$"
                            data-validation-error-msg="Укажите, кем выдан паспорт" required>
                        <span id="passport_whostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="birthplace">Место рождения</label>
                        <input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения" title="Пожалуйста, ваше место рождения"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Пожалуйста, укажите место рождения" required>
                        <span id="birthplacestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="region">Регион</label>
                        <select class="form-control ec tip" id="region" name="region" autocomplete="off" required>
                            <option value="0">-- Выберите регион --</option>
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
                        <label class="label-required" for="citystatus">Населенный пункт</label>
                        <input type="text" class="form-control ec tip" name="city" id="city" placeholder="Населённый пункт" title="Укажите город в котором вы живете"
                            value="<?php echo isset($city_name)? $city_name : ''; ?>" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom"
                            data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт">
                        <span id="citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="street">Улица</label>
                        <input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Пожалуйста, укажите название улицы"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите улицу" required>
                        <span id="streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="building">№ дома</label>
                        <input type="text" class="form-control ec tip" name="building" id="building" placeholder="№ дома" title="Укажите № дома"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите № дома"
                            required>
                        <span id="buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label for="housing">Строение</label>
                        <input type="text" class="form-control ec tip" name="housing" placeholder="Строение/корпус" title="Пожалуйста, укажите номер корпуса или строения"
                            id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите строение/корпус"
                            data-validation-optional="true">
                        <span id="housingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label for="flat">№ квартиры</label>
                        <input type="text" class="form-control ec tip" name="flat" placeholder="Квартира" title="Пожалуйста, укажите номер квартиры"
                            id="flat" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер квартиры"
                            data-validation-optional="true">
                        <span id="flatstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="reg_type">Тип регистрации</label>
                        <select class="form-control ec" name="reg_type" id="reg_type" required>
                            <option value="1">Постоянная регистрация</option>
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
                            <label class="col-sm-9 label-required" for="">
                                Регистрация совпадает с местом жительства
                            </label>
                            <div class="col-sm-3">
                                <div class="row ">
                                    <div class="col-xs-6">
                                        <input type="radio" class="reg_same ec" name="reg_same" value="1" required checked="checked">
                                        <label id="asd"> Да</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" class="reg_same ec" name="reg_same" value="0" required>
                                        <label id="asd"> Нет</label>
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
                <div class="col-sm-8"></div>
                <div class="col-sm-4">
                    <input type="button" class="ex-main-btn" value="Далее" id="next2">
                </div>
            </div>

        </div>
    </div>
</div>