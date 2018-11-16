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
include "templates/common/new2/php/form_header.php";
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
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vkredito -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="9129421079"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
<style>
.modal__popup {
  position: absolute;
  background: transparent;
  display: block;
}
.modal__popup > label {
  background: #FFD300;
  border: 1px solid #f0c600;
  border-radius: .2em;
  color: #000000;
  cursor: pointer;
  display: none;
  font-weight: bold;
  padding: 0.75em 1.5em;
  text-shadow: 1px 1px 1px #fff;
  transition: all 0.55s;
}
.modal__popup > label:hover {
  -webkit-transform: scale(0.97);
          transform: scale(0.97);
}
.btn_modall {
  border-radius: 25px;
  background-color: rgb(48, 104, 216);
  width: 14.3em;
  height: 4.3em;
  margin: 30px auto 0;
  font-size: 1.6em;
  color: #fff;
}
.modal__overlay {
  background: #fff;
  outline: 2px solid;
  bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  text-align: center;
  text-shadow: none;
  top: 0; 
}
.header1 {
  color: rgb(0, 0, 0);
  font-weight: bold;
  line-height: 1.634;
  text-align: center;
}
.modal__wrap { 
  position: relative;
  margin: 0 auto; 
  width: 70%;
  height: 100%;
}
.text2 {
  font-weight: bold;
}
@media (max-width: 800px) { 
  input:checked ~ .modal__overlay {
    opacity: 1;
    -webkit-transform: scale(.9);
            transform: scale(.9);
  }
  .btn_modall {
    width: 7.3em;
    height: 2.3em;
    margin: 10px auto 0;
    font-size: 1.1em;
  }
  hr {
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .header1 {
    font-size: 1em !important;
  }
  .text, .text2 {
    font-size: .7em !important;
    padding-top: 10px;
  }
  .img_iphone {
    margin-top: 0 !important;
  }
}
@media (min-width: 801px) {
  input:checked ~ .modal__overlay {
    opacity: 1;
    -webkit-transform: scale(.7);
            transform: scale(.7);
  }
  .modal__wrap {
    margin: 20px auto 0; 
    text-align: center;
    position: relative;
  }
  h2 {
    font-size: 32px
  }
}
.modal__wrap label {
  background: #fff;
  border-radius: 50%;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  height: 3em;
  line-height: 3;
  position: absolute;
  right: -10%;
  top: 0;
  width: 3em;
}

.modal__wrap h2 {
  color: #000; 
  text-transform: uppercase;
}
.hr_black {
  height: 1px;
  background-color: rgb(0, 0, 0);
}
.modal__wrap p {
  margin: 0;
  color: #000;
  font-size: 1.2em;
  padding: 10px 20px;
  color: rgb(0, 0, 0);
  line-height: 1.418;
  text-align: center;
  -moz-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
  -webkit-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
  -ms-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
}
.modal__popup input:focus ~ label {
  -webkit-transform: scale(0.97);
          transform: scale(0.97);
}
.modal__overlay {
  display: none;
  opacity: 0;
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
  transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  z-index: 999;
}

.img_iphone {
    max-width: 70%;
    margin: 40px auto 0;
}
#modal__trigger {
  visibility: hidden;
  margin: 0;
}
</style>
<script> 
function hideModal() {
   document.querySelector("#modal__trigger").click();
   setTimeout(function () {
     document.querySelector(".modal__overlay").style.display = 'none';
    }, 1000);
};

function showModal() {
    document.querySelector(".modal__overlay").style.display = 'block';
    setTimeout(function () {
     document.querySelector("#modal__trigger").click();
        setTimeout(function () {
        hideModal();
        }, 5000);
    }, 500);
}

document.querySelector(".modal__overlay").addEventListener('click', function() { 
    hideModal();
}, false);
</script>
<?php include 'footer.php';?>