

<div class="row" style="margin-bottom: 20px;">
    <div class="col-md-4 text-right">
        <h3>Срок займа</h3>
        <p class="ex-time">61-100 дней</p>
    </div>
    <div id="ex-main-slider-range" class="col-md-6">
        <figure class="ex-range-slider">
            <p id="ex-slider-val"></p>
            <i></i>
            <input type="text" id="rangeSlider" name="rangeSlider" value="<?php if (isset($_SERVER['rangeSlider'])) echo $_SERVER['rangeSlider']; else echo '20000';?>" /> 
        </figure>
        <div class="ex-slider-info">
            <span>1 тыс.</span>
            <span>100 тыс.</span>
        </div>
    </div>
</div>


<input type="hidden" name="referer" value="<?=$referer?>">
<input type="hidden" name="id" value="">
<input type="hidden" name="step" value="1">
<input type="hidden" name="ad_id" value="<?=$ad_id?>">
<input type="hidden" id="amount" name="amount" value="" />
<input type="hidden" id="period" name="period" value="" />
<input type="hidden" id="period2" name="period2" value="" /> 

<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required" for="f">Фамилия</label>
    <div class="col-md-6">
        <div class="ex-wrapper"> 
            <input type="text" class="form-control ec tip" name="f" id="f" placeholder="Фамилия" title="Пожалуйста, введите свою фамилию" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свою фамилию" required>
            <span id="fstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> 
        </div> 
    </div>
</div> 


<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required" for="i">Имя</label>
    <div class="col-md-6">
        <div class="ex-wrapper"> 
            <input type="text" class="form-control ec tip" name="i" id="i" placeholder="Имя" title="Пожалуйста, введите свое имя" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое имя" required>
            <span id="istatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>  
        </div>
    </div>
</div>





<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required" for="o">Отчество</label>
    <div class="col-md-6">
        <div class="ex-wrapper"> 
            <input type="text" class="form-control ec tip sp_push_custom_data" name="o" id="o" placeholder="Отчество" title="Пожалуйста, введите свое отчество" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Пожалуйста, введите свое отчество" required>
            <span id="ostatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> 
        </div>
    </div>
</div>

<!-- <div class="form-group has-feedback text-left" style="display: none;">
    <label class="col-sm-4 control-label label-required hidden-xs">Пол</label>
    <div class="col-sm-8 col-xs-12">
        <div class="radio radio-info radio-inline">
            <input type="radio" id="gender1" value="1" name="gender" checked="checked" required>
            <label for="gender1"> Мужской </label>
        </div>
        <div class="radio radio-info radio-inline">
            <input type="radio" id="gender0" value="0" name="gender" required>
            <label for="gender0"> Женский </label>
        </div>
    </div>
</div>  -->
<input type="hidden" id="gender" value="1" name="gender" required> 
<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required">Дата рождения</label>
    <div class="col-md-6">
        <div class="ex-wrapper">
            <input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Пожалуйста, выберете свою дату рождения" data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Пожалуйста, выберите дату рождения" required>
            <span id="birthdatestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span> 
        </div>
    </div>
</div>
 

<div class="form-group has-feedback">
    <label class="control-label col-md-4 label-required">Телефон</label>
    <div class="col-md-6">
        <div class="ex-wrapper">
            <input type="tel" class="form-control ec tip" name="phone" id="phone" placeholder="Телефон" title="Пожалуйста, введите свой телефон" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Пожалуйста, введите телефон" required>
            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
</div>

 
<div class="form-group has-feedback dadata">
    <label class="control-label col-md-4" for="mail">Почта</label>
    <div class="col-md-6">
        <div class="ex-wrapper">
             <input type="email" class="form-control ec tip sp_push_custom_data" name="email" id="email" title="Пожалуйста, введите свой email адрес" placeholder="Email" title="Email" data-validation="email" required>
            <span id="emailstatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div></div>
        </div>
    </div>
</div>

<div class="form-group">
<label class="control-label col-md-4" for="credit">Кредитная история</label>
<div class="col-md-6">
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
<div class="row">
<div class="col-md-6 col-md-offset-4 ex-agreement-check">
    <label class="checkbox-inline"><span>Я согласен на обработку персональных данных и с публичной офертой</span>
        <input type="checkbox" value="" id="agree" onclick="checkMe();" checked>
        <i></i>
    </label>
    <label style="display: none">
        <input type="checkbox" id="marketing" value="1" checked>
        <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
    </label>
</div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4 text-right" id="my_btn">
        <input type="button" class="ex-main-btn" value="Далее" id="next1"> 
    </div>
</div> 