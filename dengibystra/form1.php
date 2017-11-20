<input type="hidden" name="referer" value="<?=$referer?>">
<input type="hidden" name="id" value="">
<input type="hidden" name="step" value="1">
<input type="hidden" name="ad_id" value="<?=$ad_id?>">
<input type="hidden" id="amount" name="amount" value="<?php if(empty($_POST['amount'])) echo'20000';else{echo $_POST['amount'];} ?>" />
<input type="hidden" id="period" name="period" value="<?php if(empty($_POST['period'])){echo'15';}else{echo $_POST['period'];} ?>" />
<input type="hidden" id="period2" name="period2" value="" />
 


<div class="ex-anketa-head">
    <p class="text-conf text-center">
        Личные данные (шаг 1 из 3)
    </p>
</div>
<div class="ex-anketa-main">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!-- слайдер -->
            <div class="ex-calc-wraper">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="ex-range-scope">
                            <div id="ex-main-slider-range">
                                <figure class="ex-range-slider">
                                    <input type="text" id="rangeSlider" name="rangeSlider" value="0" />
                                    <span class="ex-probability"></span>
                                </figure>
                                <div class="ex-slider-info"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <figure class="ex-val-block">
                            <p id="ex-slider-val" class="text-center"></p>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- /слайдер -->

            <div class="row">
                <div class="col-sm-12" style="height: 90px;">
                    <div class="form-group has-feedback" >
                        <label class="control-label col-md-4 label-required" for="f">Фамилия</label>
                        <input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Пожалуйста, введите свою фамилию"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свою фамилию"
                            required>
                        <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12" style="height: 90px;">
                    <div class="form-group has-feedback" > 
                        <label class="control-label col-md-4 label-required" for="i">Имя</label>
                        <input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Пожалуйста, введите свое имя" data-sanitize="capitalize"
                            data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое имя"
                            required>
                        <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12" style="height: 90px;">
                    <div class="form-group has-feedback" >
                        <label class="control-label col-md-4 label-required" for="o">Отчество</label>
                        <input type="text" class="form-control ec tip sp_push_custom_data" name="o" id="o" placeholder="Отчество" title="Пожалуйста, введите свое отчество"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое отчество"
                            required>
                        <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div>  
            <input type="hidden" id="gender" value="1" name="gender" required> 
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="phone">Номер телефона</label>
                        <input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Телефон" title="Пожалуйста, введите свой телефон"
                            data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите телефон"
                            required>
                        <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div> 

                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="birthdate">Дата рождения</label>
                        <input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Пожалуйста, выберете свою дату рождения"
                            data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения"
                            required>
                        <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-feedback">
                        <label class="label-required" for="email">Электронная почта</label>
                        <input type="email" class="form-control ec tip sp_push_custom_data" name="email" id="email" title="Пожалуйста, введите свой email адрес"
                            placeholder="Пожалуйста, введите свой email адрес" title="Email" data-validation="email" required>
                        <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="form-group ex-arrow-on">
                        <label for="credit" for="credit">Кредитная история</label>
                        <select class="form-control" id="credit">
                            <option>Никогда не брал кредитов</option>
                            <option>Кредиты закрыты, просрочек не было</option>
                            <option>Кредиты есть, просрочек нет</option>
                            <option>Кредиты закрыты, просрочки были</option>
                            <option>Просрочки были, сейчас нет</option>
                            <option>Просрочки сейчас есть</option>
                        </select>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
<div class="ex-anketa-foot">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="col-sm-8 col-xs-12 ex-agreement-check">
                <label class="checkbox-inline">
                    <span>Я согласен на обработку персональных данных и с публичной офертой</span>
                    <input type="checkbox" value="" id="agree" onclick="checkMee();" checked>
                    <i></i>
                </label>
                <label style="display: none">
                    <input type="checkbox" id="marketing" value="1" checked>
                    <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
                </label>
            </div>
            <div class="col-sm-4 col-xs-12"> 
                <input type="button" class="ex-main-btn" value="Далее" id="next1">
            </div>
        </div>
    </div>
</div> 