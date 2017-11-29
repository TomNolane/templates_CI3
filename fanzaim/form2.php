<section class="container-fluid ex-main-form">
    <div class="row">
        <div class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="passport">Серия и номер паспорта</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                    <input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Серия и номер паспорта" title="Пожалуйста, введите серию и номер паспорта"
                    data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Пожалуйста, введите номер и серию паспорта"
                    required>
                    </div>
                </div>
            </div>
            <div class="form-group hidden">
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
            <div class="form-group has-feedback ">
                <label class="control-label col-md-3" for="passportdate">Дата выдачи</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="passportdate" id="passportdate" placeholder="Дата выдачи паспорта" title="Пожалуйста, выберете дату выдачи паспорта"
                    data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату выдачи паспорта"
                    required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="passport_code">Код подразделения</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Код подразделения" title="Пожалуйста, укажите код подразделения"
                        data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Пожалуйста, введите код подразделения"
                        required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="passport_who">Кем выдан</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Пожалуйста, укажите кем выдан паспорт"
                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$"
                        data-validation-error-msg="Пожалуйста, укажите, кем выдан паспорт" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="birthplace">Место рождения</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения" title="Пожалуйста, ваше место рождения"
                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                        data-validation-error-msg="Пожалуйста, укажите место рождения" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="regionSecond">Регион</label>
                <div class="col-md-9">
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
                <label class="control-label col-md-3" for="city">Населённый пункт</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="city" id="city" title="Пожалуйста, укажите город в котором вы живете"
                    value="<?php echo isset($city_name)? $city_name : ''; ?>" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom"
                    data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, населенный пункт">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="streetSecond">Улица</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Пожалуйста, укажите название улицы"
                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                        data-validation-error-msg="Пожалуйста, укажите, улицу" required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="homeNumberSecond">Номер дома</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="building" id="building" placeholder="Номер дома" title="Пожалуйста, укажите номер дома"
                        data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома"
                        required>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="corpus">Строение</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="housing" placeholder="Строение" title="Пожалуйста, укажите номер корпуса или строения"
                        id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, строение (корпус)"
                        data-validation-optional="true">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="flat">Квартира</label>
                <div class="col-md-9">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" name="flat" placeholder="Квартира" title="Пожалуйста, укажите номер квартиры"
                        id="flat" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер квартиры"
                        data-validation-optional="true">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="typeOf">Тип регистрации</label>
                <div class="col-md-9">
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
                <div class="col-md-9 col-md-offset-3">
                    <div class="media">
                        <div class="media-left">
                            <ul class="ex-coincidence-check">
                                <li>
                                    <input type="radio" name="reg_same" value="1" id="f-option" checked>
                                    <label for="f-option">Да</label>
                                    <div class="check"></div>
                                </li>
                                <li>
                                    <input type="radio"  id="s-option" name="selector">
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
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                <a id="next2"><span  class="ex-main-btn">Далее</span></a>
                </div>
            </div>
        </div>
    </div>
</section>