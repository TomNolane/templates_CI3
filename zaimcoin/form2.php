<div class="ex-form-bg">
    <p class="ex-step">шаг 2</p>
    <div class="form-horizontal">
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="passportNumber">Серия и номер паспорта
            </label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Серия и номер паспорта" title="Пожалуйста, введите серию и номер паспорта"
                        data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Пожалуйста, введите номер и серию паспорта"
                        required>
                    <span id="passportstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <input type="hidden" class="form-control ec" id="passport-s" name="passport_s"  title="Серия паспорта" data-validation="number" data-validation-allowing="range[1;9999]" data-validation-error-msg="Введите серию паспорта">
        <input type="hidden" class="form-control ec" id="passport-n" name="passport_n"  title="Номер паспорта"  data-validation="number" data-validation-allowing="range[1;999999]" data-validation-error-msg="Введите номер паспорта">
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
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="dateOf">Дата выдачи</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="passportdate" id="passportdate" placeholder="Дата выдачи паспорта" title="Пожалуйста, выберете дату выдачи паспорта"
                        data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату выдачи паспорта"
                        required>
                    <span id="passportdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="code">Код подразделения</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Код подразделения" title="Пожалуйста, укажите код подразделения"
                        data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Пожалуйста, введите код подразделения"
                        required>
                    <span id="passport_codestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="whoGave">Кем выдан</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Пожалуйста, укажите кем выдан паспорт"
                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$"
                        data-validation-error-msg="Пожалуйста, укажите, кем выдан паспорт" required>
                    <span id="passport_whostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="birthPlace">Место рождения</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения" title="Пожалуйста, ваше место рождения"
                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                        data-validation-error-msg="Пожалуйста, укажите место рождения" required>
                    <span id="birthplacestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="regionSecond">Регион</label>
            <div class="col-md-8">
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
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="punctSecond">Населённый пункт</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="city" id="city" title="Пожалуйста, укажите город в котором вы живете"
                        value="<?php echo isset($city_name)? $city_name : ''; ?>" pattern="^[А-Яа-яЁё\s]+$" data-validation="custom"
                        data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, населенный пункт">
                    <span id="citystatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="streetSecond">Улица</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Пожалуйста, укажите название улицы"
                        data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                        data-validation-error-msg="Пожалуйста, укажите, улицу" required>
                    <span id="streetstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="homeNumberSecond">Номер дома</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="building" id="building" placeholder="Номер дома" title="Пожалуйста, укажите номер дома"
                        data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер дома"
                        required>
                    <span id="buildingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="corpus">Строение (корпус)</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="housing" placeholder="Строение" title="Пожалуйста, укажите номер корпуса или строения"
                        id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, строение (корпус)"
                        data-validation-optional="true">
                    <span id="housingstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="flat">Квартира</label>
            <div class="col-md-8">
                <div class="ex-wrapper">
                    <input type="text" class="form-control ec tip" name="flat" placeholder="Квартира" title="Пожалуйста, укажите номер квартиры"
                        id="flat" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Пожалуйста, укажите, номер квартиры"
                        data-validation-optional="true">
                    <span id="flatstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-md-2" for="typeOf">Тип регистрации</label>
            <div class="col-md-8">
                <select class="form-control ec" name="reg_type" id="reg_type" required>
                    <option value="1">Постоянная регистрация</option>
                    <option value="0">Без регистрации</option>
                    <option value="2">Временная регистрация</option>
                </select>
            </div>
        </div>
        <div class="row hidden">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-3">
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" class="reg_same ec" name="reg_same" value="1" required checked="checked">
                            <label for="inlineRadio1">Да</label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="inlineRadio2" class="reg_same ec" name="reg_same" value="0" required>
                            <label for="inlineRadio2">Нет</label>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <p>Регистрация совпадает с местом жительства</p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-right">
                <a id="next2">
                    <button class="ex-blue-btn special_forms"> Далее </button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="ex-inf-anceta">
    <img src="/templates/zaimcoin/assets/img/security.png" alt="security.png">
    <p id="spec_form">Ваши персональные данные надежно защищены</p>
</div>