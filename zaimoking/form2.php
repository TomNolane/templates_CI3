<section class="ex-main-form">
    <div class="row">
        <div class="col-md-9">
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="passport">Серия и номер паспорта
                </label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Серия и номер паспорта" title="Введите серию и номер паспорта"
                            data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Введите номер и серию паспорта"
                            required>
                    </div>
                </div>
            </div>
            <input type="hidden" class="form-control ec" id="passport-s" name="passport_s" placeholder="0000" title="Серия паспорта"
                data-validation="number" data-validation-allowing="range[1;9999]" data-validation-error-msg="Пожалуйста, введите серию паспорта"
                required>
            <input type="hidden" class="form-control ec" id="passport-n" name="passport_n" placeholder="000000" title="Номер паспорта"
                data-validation="number" data-validation-allowing="range[1;999999]" data-validation-error-msg="Пожалуйста, введите номер паспорта"
                required>
            <div class="form-group has-feedback hidden">
                <label class="col-sm-4 control-label label-required hidden-xs hidden-sm">Дата выдачи*</label>
                <div class="col-sm-2">
                    <select class="form-control ec" id="passport_dd" name="passport_dd" required>
                        <option value="0">День</option>
                        <option selected value="04"></option>
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
                        <option selected value="06">Июнь</option>
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
                        <option selected value="2000"></option>
                        <?php
                    for($i=1980;$i<=date('Y');$i++)
                    echo '<option value="'.$i.'">'.$i.'</option>';
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group has-feedback ">
                <label class="control-label col-md-4" for="passportdate">Дата выдачи</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="passportdate" id="passportdate" placeholder="Дата выдачи паспорта" title="Выберете дату выдачи паспорта"
                            data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату выдачи паспорта"
                            required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="passport_code">Код подразделения</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Код подразделения" title="Укажите код подразделения"
                            data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Укажите код подразделения"
                            required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="passport_who">Кем выдан</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Укажите кем выдан паспорт"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$"
                            data-validation-error-msg="Укажите, кем выдан паспорт" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="birthplace">Место рождения</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения" title="Ваше место рождения"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите место рождения" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="region">Регион</label>
                <div class="col-md-8">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec tip special_form99" id="region" name="region" autocomplete="off" required>
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
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="city">Населённый пункт</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="city" id="city" title="Укажите город в котором вы живете" value="<?php echo isset($city_name)? $city_name : ''; ?>"
                            pattern="^[А-Яа-яЁё\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$"
                            data-validation-error-msg="Укажите, населенный пункт">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="street">Улица</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Укажите название улицы"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                            data-validation-error-msg="Укажите, улицу" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="building">Номер дома</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="building" id="building" placeholder="Номер дома" title="Укажите номер дома"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер дома"
                            required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="housing">Строение</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="housing" placeholder="Строение" title="Укажите номер корпуса или строения"
                            id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, строение (корпус)"
                            data-validation-optional="true">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="flat">Квартира</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="flat" placeholder="Квартира" title="Укажите номер квартиры" id="flat"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер квартиры"
                            data-validation-optional="true">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="reg_type">Тип регистрации</label>
                <div class="col-md-8">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec special_form99" name="reg_type" id="reg_type" required>
                            <option value="1">Постоянная регистрация</option>
                            <option value="0">Без регистрации</option>
                            <option value="2">Временная регистрация</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <div class="col-md-8 col-md-offset-4">
                    <div class="media">
                        <div class="media-left">
                            <ul class="ex-coincidence-check">
                                <li>
                                    <input type="radio" name="reg_same" value="1" id="f-option" checked="">
                                    <label for="f-option">Да</label>
                                    <div class="check"></div>
                                </li>
                                <li>
                                    <input type="radio" id="s-option" name="selector">
                                    <label for="s-option">Нет</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="media-body">
                            Регистрация совпадает с местом жительства
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="col-md-8 col-md-offset-4">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="submitTwo" class="ex-main-btn btn2 text-center" value="Далее"/> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>