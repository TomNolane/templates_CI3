<?php 
$sum = '20000'; $period = '21'; $days = 'Срок до 130 дней';


if($this->input->get('amount', TRUE) != '') 
{ 
    if($this->input->get('amount', TRUE) >= 1000 && $this->input->get('amount', TRUE) <= 1000000)
        $sum = $this->input->get('amount', TRUE);
    
    if ($sum <= 10000) 
    { $period = '7'; $days = 'Срок до 100 дней';} 
    else if ($sum <= 15000)
    { $period = '14'; $days = 'Срок до 130 дней';} 
    else if ($sum <= 20000)
    { $period = '21'; $days = 'Срок до 200 дней';} 
    else if ($sum <= 30000)
    { $period = '21'; $days = 'Срок до 200 дней';} 
    else if ($sum <= 50000)
    { $period = '30'; $days = 'Срок до 250 дней';} 
    else { $period = '30'; $days = 'Срок до 365 дней';}
} 
if($this->input->post('amount', TRUE) != '')
{ 
    if($this->input->post('amount', TRUE) >= 1000 && $this->input->post('amount', TRUE) <= 1000000)
        $sum = $this->input->post('amount', TRUE);
    
    if ($sum <= 10000) 
    { $period = '7'; $days = 'Срок до 100 дней';} 
    else if ($sum <= 15000)
    { $period = '14'; $days = 'Срок до 130 дней';} 
    else if ($sum <= 20000)
    { $period = '21'; $days = 'Срок до 200 дней';} 
    else if ($sum <= 30000)
    { $period = '21'; $days = 'Срок до 200 дней';} 
    else if ($sum <= 50000)
    { $period = '30'; $days = 'Срок до 250 дней';} 
    else { $period = '30'; $days = 'Срок до 365 дней';}
}  

if(!isset($my_title))
{
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Edenga';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new2/php/form_header.php";
include "header.php";
?>
<div class="container">
    <section class="form-anketa">
        <div class="row">
            <div class="col-md-12 col-xs-12" id="to_scroll">
                <h1 class="title text-center" id="htitle">Заполните свои личные данные</h1>
                <div class="col-md-6 col-md-offset-2 col-sm-6 col-xs-11 form-body">
                    <form class="form-horizontal" id="anketa" action="/lk" method="post" autocomplete="off">
                        <input type="hidden" name="display" id="display" value="0">
                        <input type="hidden" name="referer" value="<?=$referer?>">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="step" value="1">
                        <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                        <input type="hidden" id="amount" name="amount" value="<?=$sum;?>" />
                        <div class="tab-content">
                            <div id="firstStep" class="tab-pane fade in active">
                                <?php require 'form1.php'; ?>
                                <div class="text-center">
                                    <a class="btn btn-primary btn-next" id="next1">Оформить заявку 
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="secondStep" class="tab-pane fade">
                                <?php require('form2.php'); ?>
                                <div class="clearfix">&nbsp;</div>
                                <div class="form-group"> 
                                    <div class="text-center">
                                        <a class="btn btn-primary btn-next" id="next2">Далее
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="thirdStep" class="tab-pane fade">
                                <?php require('form3.php'); ?>
                                <div class="row">
                                    <div class="text-center">
                                        <a class="btn btn-primary btn-next" id="getmoney">Оформить заявку</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs icon">
                    <div class="text-center icon-text">
                        <img src="/templates/edenga/assets/img/form/1.png" alt="Ваши персональные данные надёжно защищены" class="img-rounded">
                        <span>Ваши персональные данные надежно защищены</span>
                    </div>
                    <div class="text-center icon-text">
                        <img src="/templates/edenga/assets/img/form/2.png" alt="Удобное получение денег" class="img-rounded">
                        <span>Удобное получение денег</span>
                    </div>
                    <div class="text-center icon-text">
                        <img src="/templates/edenga/assets/img/form/3.png" alt="Принимаем заявки с любой кредитной историей" class="img-rounded">
                        <span>Круглосуточная работа</span>
                    </div>
                    <div class="text-center icon-text">
                        <img src="/templates/edenga/assets/img/form/4.png" alt="Деньги Вас ждут прямо сейчас" class="img-rounded">
                        <span>Деньги ждут вас</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                <h2 class="modal-title visible-xs-block" id="tosModalLabel">Политика конфиденциальности</h2>
                <p>Заполняя заявку на кредит Вы соглашаетесь с нашими правилами использования данных</p>
            </div>
            <div class="modal-body">
                <div class="row">
                    <ol>
                        <li>Я даю свое согласие на регистрацию в проекте edenga.ru и получение новостей проекта. Я уведомлен(а)
                            о том, что информация, переданная мною по сети Интернет, может стать доступной третьим
                            лицам, и я освобождаю администрацию edenga.ru от ответственности, в случае, если указанные
                            мною сведения станут доступными третьим лицам.</li>
                        <li>В целях принятия одним из МФО-партнеров edenga.ru решения о заключении договора займа я даю
                            им свое согласие на:
                            <ul>
                                <li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ,
                                    а именно на сбор и проверку достоверности представленной информации путем обращения
                                    к третьим лицам. Я даю свое согласие на обработку моих персональных данных в
                                    целях продвижения услуг edenga.ru на рынке с помощью средств связи, равно как
                                    продвижение услуг edenga.ru и/или услуг (товаров, работ) третьих лиц-партнеров
                                    edenga.ru.
                                </li>
                                <li>получение информации о моей кредитной истории на основании Федерального закона от
                                    30.12.2004 г. № 218-ФЗ "О кредитных историях" от любых организаций, осуществляющих
                                    в соответствии с действующим законодательством формирование, обработку и хранение
                                    такой информации. Полученная информация предназначена для внутреннего использования
                                    МФО-партнеров edenga.ru. Настоящие согласия даны мной на неопределенный срок.</li>
                            </ul>
                            <li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную
                                дату и обязуюсь незамедлительно уведомить edenga.ru в случае изменения указанных
                                мной сведений, а также о любых обстоятельствах, способных повлиять на выполнение
                                мной или МФО-партнеров edenga.ru обязательств по займу, который может быть предоставлен
                                на основании заявки.</li>
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