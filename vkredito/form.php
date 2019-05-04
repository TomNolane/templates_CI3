<?php 
$sum = '20000'; $period = '21';
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
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Vkredito';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new/php/form_header.php";
include "header.php";
?>
<!--Start of Modal --> 
<div class="modal__popup">
    <input id="modal__trigger" type="checkbox" />
    <label for="modal__trigger"></label>
    <div class="modal__overlay" role="dialog" aria-labelledby="modal__title" aria-describedby="modal_desc">
        <div class="modal__wrap text-center"> 
            <h2 id="modal__title" class="header1">Подтвердите адрес вашей электронной почты</h2>
          <hr class="hr_black">
          
            <p class="text" id="modal__desc"><span id="form_name"></span> на указанный email было отправлено письмо.</p>
          <p class="text2">Подтвердите свою почту и учавствуйте в розыгрыше iPhone XS уже сегодня</p>
            
          <img class='img_iphone img-responsive' src='//zaimhome.ru/templates/common/img/iphone3.png'>
          <div class="text-center"><input type="button" class="btn_modall" id="btn_modall" value="Закрыть"></div>
        </div>
    </div>
</div>
<!--End of Modal   -->
<div class="container">
    <section class="form">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="title">Заполните свои личные данные</h1>
                <div class="col-md-8 col-xs-12">
                    <form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
                        <input type="hidden" name="display" id="display" value="0">
                        <input type="hidden" name="referer" value="<?=$referer?>">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="step" value="1">
                        <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                        <input type="hidden" name="fingerprint" id="fingerprint" value="">
                        <div class="tab-content">
                            <div id="form1" class="tab-pane fade in active">
                                <?php require 'form1.php'; ?>
                                <div class="col-sm-8 col-sm-offset-4 col-xs-12">
                                    <div class="text-center">
                                        <a class="btn btn-primary btn-next" id="next1">Оформить заявку 
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="form2" class="tab-pane fade">
                                <?php require('form2.php'); ?>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-4 col-xs-12">
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-next" id="next2">Далее
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="form3" class="tab-pane fade">
                                <?php require('form3.php'); ?>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-4 col-xs-12">
                                        <a class="btn btn-primary btn-header" id="form-send">Оформить заявку</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-center icon hidden-xs">
                    <div class="text-center icon-text col-md-12 col-sm-4 col-xs-4">
                        <img src="/templates/vkredito/assets/img/advantage/4.png" alt="Ваши персональные данные надёжно защищены" class="img-rounded">
                        <p class="hidden-xs">Ваши персональные данные надежно защищены</p>
                    </div>
                    <div class="text-center icon-text col-md-12 col-sm-4 col-xs-4" style="padding: 25px;">
                        <img src="/templates/vkredito/assets/img/steps/1.png" alt="Удобное получение денег" class="img-rounded">
                        <p class="hidden-xs">Удобное получение денег</p>
                    </div>
                    <div class="text-center icon-text col-md-12 col-sm-4 col-xs-4" style="padding: 45px;">
                        <img src="/templates/vkredito/assets/img/steps/3.png" alt="Принимаем заявки с любой кредитной историей" class="img-rounded">
                        <p class="hidden-xs">Деньги ждут вас</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix visible-sm visible-xs">&nbsp;</div>
</div>
<br>
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
                        <li>Я даю свое согласие на регистрацию в проекте vkredito.ru и получение новостей проекта. Я уведомлен(а) о том, что информация,
                            переданная мною по сети Интернет, может стать доступной третьим лицам, и я освобождаю администрацию vkredito.ru от
                            ответственности, в случае, если указанные мною сведения станут доступными третьим лицам.</li>
                        <li>В целях принятия одним из МФО-партнеров vkredito.ru решения о заключении договора займа я даю им свое согласие на:
                            <ul>
                                <li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ, а именно на сбор и проверку достоверности
                                    представленной информации путем обращения к третьим лицам. Я даю свое согласие на обработку моих персональных данных
                                    в целях продвижения услуг vkredito.ru на рынке с помощью средств связи, равно как продвижение услуг vkredito.ru
                                    и/или услуг (товаров, работ) третьих лиц-партнеров vkredito.ru.</li>
                                <li>получение информации о моей кредитной истории на основании Федерального закона от 30.12.2004 г. № 218-ФЗ "О кредитных
                                    историях" от любых организаций, осуществляющих в соответствии с действующим законодательством формирование, обработку
                                    и хранение такой информации. Полученная информация предназначена для внутреннего использования МФО-партнеров vkredito.ru.
                                    Настоящие согласия даны мной на неопределенный срок.</li>
                            </ul>
                            <li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную дату и обязуюсь незамедлительно
                                уведомить vkredito.ru в случае изменения указанных мной сведений, а также о любых обстоятельствах, способных повлиять
                                на выполнение мной или МФО-партнеров vkredito.ru обязательств по займу, который может быть предоставлен на основании
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