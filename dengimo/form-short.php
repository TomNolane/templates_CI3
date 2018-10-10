<?php 
$sum = '20000'; $period = '21';
$days = 'От 130 до 200 дней'; $days2 = 'Срок до 200 дней';
if($this->input->get('amount', TRUE) != '') 
{  
    switch($this->input->get('amount', TRUE))
    {
        case '1000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '2000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '3000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '4000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '5000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '6000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '7000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '8000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '9000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '10000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '11000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '12000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '13000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '14000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '15000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '20000': $days = 'От 130 до 200 дней' ; $days2 = 'Срок до 200 дней'; break;
        case '25000': $days = 'От 130 до 200 дней' ; $days2 = 'Срок до 200 дней'; break;
        case '30000': $days = 'От 130 до 200 дней' ; $days2 = 'Срок до 200 дней'; break;
        case '40000': $days = 'От 200 до 250 дней' ; $days2 = 'Срок до 250 дней'; break;
        case '50000': $days = 'От 200 до 250 дней' ; $days2 = 'Срок до 250 дней'; break;
        case '80000': $days = 'От 250 до 365 дней' ; $days2 = 'Срок до 365 дней'; break;
        case '100000': $days = 'От 250 до 365 дней' ; $days2 = 'Срок до 365 дней'; break;
    } 
}
elseif(!$this->input->post('period2', TRUE) != '') { $days = 'От 130 до 200 дней'; $days2 = 'Срок до 200 дней'; } 
else 
{ 
    switch($this->input->post('period2', TRUE))
    {
        case '1000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '2000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '3000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '4000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '5000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '6000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '7000': $days = 'От 61 до 100 дней' ; $days2 = 'Срок до 100 дней'; break;
        case '8000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '9000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '10000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '11000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '12000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '13000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '14000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '15000': $days = 'От 100 до 130 дней' ; $days2 = 'Срок до 130 дней'; break;
        case '20000': $days = 'От 130 до 200 дней' ; $days2 = 'Срок до 200 дней'; break;
        case '25000': $days = 'От 130 до 200 дней' ; $days2 = 'Срок до 200 дней'; break;
        case '30000': $days = 'От 130 до 200 дней' ; $days2 = 'Срок до 200 дней'; break;
        case '40000': $days = 'От 200 до 250 дней' ; $days2 = 'Срок до 250 дней'; break;
        case '50000': $days = 'От 200 до 250 дней' ; $days2 = 'Срок до 250 дней'; break;
        case '80000': $days = 'От 250 до 365 дней' ; $days2 = 'Срок до 365 дней'; break;
        case '100000': $days = 'От 250 до 365 дней' ; $days2 = 'Срок до 365 дней'; break;
    } 
}
if($this->input->get('amount', TRUE) != '') 
{ 
    $sum = $this->input->get('amount', TRUE);
    if($this->input->get('amount', TRUE) >= 1000 && $this->input->get('amount', TRUE) <= 1000000)
    $sum = $this->input->get('amount', TRUE);
    
    if ($sum <= 10000) 
    { $period = '7'; } 
    else if ($sum <= 15000)
    { $period = '14'; } 
    else if ($sum <= 20000)
    { $period = '21'; } 
    else if ($sum <= 30000)
    { $period = '21'; } 
    else if ($sum <= 50000)
    { $period = '30'; } 
    else { $period = '30'; }
} 
if($this->input->post('amount', TRUE) != '')
{ 
    if($this->input->post('amount', TRUE) >= 1000 && $this->input->post('amount', TRUE) <= 1000000)
        $sum = $this->input->post('amount', TRUE);
    
    if ($sum <= 10000) 
    { $period = '7'; } 
    else if ($sum <= 15000)
    { $period = '14'; } 
    else if ($sum <= 20000)
    { $period = '21'; } 
    else if ($sum <= 30000)
    { $period = '21'; } 
    else if ($sum <= 50000)
    { $period = '30'; } 
    else { $period = '30'; }
} 
if(!isset($my_title))
{
    $my_title = 'Подача Заявки на Получение Займа Онлайн';
}  
if($this->input->get('amount', TRUE) != '') 
{  
    if ($this->input->get('amount', TRUE) <= '10000') { 
        $percent = 95;
    } else if ($this->input->get('amount', TRUE) <= '15000') { 
        $percent = 95;
    } else if ($this->input->get('amount', TRUE) <= '20000') { 
        $percent = 95;
    } else if ($this->input->get('amount', TRUE) <= '30000') { 
        $percent = 85;
    } else if ($this->input->get('amount', TRUE) <= '50000') { 
        $percent = 77;
    } else  if ($this->input->get('amount', TRUE) <= '200000' && $this->input->get('amount', TRUE) > '50000') { 
        $percent = 65;
    } else  if ($this->input->get('amount', TRUE) <= '500000' && $this->input->get('amount', TRUE) > '200000') { 
        $percent = 58;
    } else { 
        $percent = 52;
    } 
}
if($this->input->post('percent', TRUE) != '')
    $percent = $this->input->post('percent', TRUE);

if(!isset($my_title))
{
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Dengimo';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new2/php/form_header.php";
include "header.php";
?>
<div class="container">
        <div class="steps">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-steps-line">
                        <div class="form-steps-green-line step2 step3">
                            <div class="row" role="tablist" id="form-steps">
                                <div class="col-xs-2 col-xs-offset-3 text-center" role="presentation">
                                    <a href="#form1" aria-controls="form1" role="tab">
                                        <span class="btn btn-circle" id="step1"></span>
                                    </a>
                                </div>
                                <div class="col-xs-2 text-center" role="presentation">
                                    <a href="#form2" aria-controls="form1" role="tab">
                                        <span class="btn btn-circle " id="step2">1</span>
                                    </a>
                                </div>
                                <div class="col-xs-2 text-center" role="presentation">
                                    <a href="#form3" aria-controls="form1" role="tab">
                                        <span class="btn btn-circle " id="step3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="steps">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                    <h2 class="h1">Заполните свои личные данные</h2>
                </div>
            </div> 
        </section>
        <div class="form">
            <div class="row">
                <div class="col-md-8 col-md-offset-1 col-xs-12">
                    <form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off" novalidate>
                        <input type="hidden" name="display" id="display" value="0">
                        <input type="hidden" name="referer" value="<?=$referer?>">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="step" value="1">
                        <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                        <input type="hidden" name="fingerprint" id="fingerprint" value="">
                        <input type="hidden" id="amount" name="amount" value="<?=$sum;?>" />
                        <input type="hidden" id="period" name="period" value="<?=$period;?>" />
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="form1">
                                <?php require 'form1.php'; ?>
                                <div class="col-sm-8 col-sm-offset-4 col-xs-12">
                                    <a class="btn btn-block" id="next1" style="padding: 13px;">Отправить заявку 
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="form2">
                                <?php require('form2.php'); ?>
                                <div class="clearfix">&nbsp;</div>
                                <div class="pull-right">
                                    <a class="btn btn-next" id="next2">Далее
                                        <i class="fa fa-caret-right"></i>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="form3">
                                <?php require('form3.php'); ?>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-4 col-xs-12">
                                        <!--a href="#doiModal" class="btn btn-block" id="form-send" data-toggle="modal" data-target="#doiModal" style="padding: 13px;" onclick="yaCounter39556840.reachGoal('popup'); return true;">Отправить заявку</a-->
                                        <a class="btn btn-block" id="form-send" style="padding: 13px;">Отправить заявку</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                    </form>
                </div>
            </div>
        </div>

        <div class="triggers hidden-xs hidden-sm">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-2">
                    <img src="/templates/dengimo/assets/img/form/t1.png" alt="t1.png">
                    <p>Ваши персональные данные надёжно защищены</p>
                </div>
                <div class="col-sm-2">
                    <img src="/templates/dengimo/assets/img/form/t2.png" alt="t2.png">
                    <p>Удобное получение денег</p>
                </div>
                <div class="col-sm-2">
                    <img src="/templates/dengimo/assets/img/form/t3.png" alt="t3.png">
                    <p>Принимаем заявки с любой кредитной историей</p>
                </div>
                <div class="col-sm-2">
                    <img src="/templates/dengimo/assets/img/form/t4.png" alt="t4.png">
                    <p>Деньги Вас ждут прямо сейчас</p>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm visible-xs">&nbsp;</div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tosModal" tabindex="-1" role="dialog" aria-labelledby="tosModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title hidden-xs" id="tosModalLabel">Политика конфиденциальности</h1> 
                    <p>Заполняя заявку на кредит Вы соглашаетесь с нашими правилами использования данных</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <ol>
                            <li>Я даю свое согласие на регистрацию в проекте dengimo.ru и получение новостей проекта. Я уведомлен(а)
                                о том, что информация, переданная мною по сети Интернет, может стать доступной третьим лицам,
                                и я освобождаю администрацию dengimo.ru от ответственности, в случае, если указанные мною
                                сведения станут доступными третьим лицам.</li>
                            <li>В целях принятия одним из МФО-партнеров dengimo.ru решения о заключении договора займа я даю
                                им свое согласие на:
                                <ul>
                                    <li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно
                                        на сбор и проверку достоверности представленной информации путем обращения к третьим
                                        лицам. Я даю свое согласие на обработку моих персональных данных в целях продвижения
                                        услуг dengimo.ru на рынке с помощью средств связи, равно как продвижение услуг dengimo.ru
                                        и/или услуг (товаров, работ) третьих лиц-партнеров dengimo.ru.</li>
                                    <li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004
                                        г. № 218-ФЗ "О кредитных историях" от любых организаций, осуществляющих в соответствии
                                        с действующим законодательством формирование, обработку и хранение такой информации.
                                        Полученная информация предназначена для внутреннего использования МФО-партнеров dengimo.ru.
                                        Настоящие согласия даны мной на неопределенный срок.</li>
                                </ul>
                                <li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную
                                    дату и обязуюсь незамедлительно уведомить dengimo.ru в случае изменения указанных мной
                                    сведений, а также о любых обстоятельствах, способных повлиять на выполнение мной или
                                    МФО-партнеров dengimo.ru обязательств по займу, который может быть предоставлен на основании
                                    заявки.</li>
                        </ol>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"> Закрыть </button>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>