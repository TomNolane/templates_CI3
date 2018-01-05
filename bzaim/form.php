<?php
$sum = '20000'; 
$period = '21';

if(isset($_GET['amount'])) 
{ 
    $sum = $_GET['amount'];
    switch($_GET['amount']) 
    { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; }
    
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

if(isset($_POST['amount']))
{ 
    $sum = $_POST['amount'];
    switch($_POST['amount']) 
    { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; }
    
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
	$my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Bzaim5';
	$description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}  
require 'header.php'; ?> 
    <style>
        #ya-rtb {
            display: none;
        } 
    </style>
    <?php
// IP
$this->load->helper('ip');
// GEO
require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
$gb = new IPGeoBase();
$geo = $gb->getRecord(IP::$ip);
if ($geo){
        if (isset($geo['region'])){
            $region_name = $geo['region'];
        }else{
            $region_name = 'Владимир';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Владимир';
        }
    }else{
        $region_name = 'Владимир';
        $city_name = 'Владимир';
    }
// Список регионов
$this->load->model('geo/geo_model', 'geo');
$regions = $this->geo->regions();

if(isset($_SERVER['HTTP_REFERER'])){
    $referer = $_SERVER['HTTP_REFERER'];
    parse_str($_SERVER['HTTP_REFERER'], $output);
        if(isset($output['utm_source'])){
            switch ($output['utm_source']) {
                case 'vk':
                    $utm = '1';
                    break;
                case 'direct':
                    $utm = '2';
                    break;
                case 'mytarget':
                    $utm = '3';
                    break;
                case 'google':
                    $utm = '4';
                    break;
                case 'google_cms':
                    $utm = '5';
                    break;
                default:
                    $utm = '0';
            }
        }else{
            $utm = ''; 
        }
    $ad_id = '6'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '6';
}

?>
        <header>
            <div class="p">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>Вам необходимо заполнить анкету</h1>
                                </div>
                                <section class="steps" id="form-steps">
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 hidden-sm hidden-xs">
                                            <div class="form-steps-line">
                                                <div class="form-steps-green-line">
                                                    <div class="row" role="tablist">
                                                        <div class="col-xs-4 text-left" role="presentation">
                                                            <a href="#form1" aria-controls="form1" role="tab">
                                                                <span class="btn btn-circle" id="step1">1</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-4 text-center" role="presentation">
                                                            <a href="#form2" aria-controls="form1" role="tab">
                                                                <span class="btn btn-circle off" id="step2">2</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-4 text-right" role="presentation">
                                                            <a href="#form3" aria-controls="form1" role="tab">
                                                                <span class="btn btn-circle off" id="step3">3</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-7 col-md-offset-2 col-xs-12 form-steps">
                                                <form class="" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
                                                    <input type="hidden" name="referer" value="<?=$referer?>">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="step" value="1">
                                                    <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                                                    <input type="hidden" name="display" id="display" value="0">
                                                    <input type="hidden" id="period" name="period" value="<?php  echo $period; ?>" />
                                                    <div class="tab-content text-left">
                                                        <div id="form1" class="tab-pane fade in active">
                                                            <?php require 'form1.php'; ?>
                                                            <div class="col-md-4 col-md-offset-3 col-xs-12 text-center">
                                                                <a href="#form2" class="btn btn-xl btn-success btn_form_spec" id="next">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Далее
                                                                    <i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="form2" class="tab-pane fade">
                                                            <?php require('form2.php'); ?> 
                                                            <div class="col-md-4 col-md-offset-3 col-xs-12 text-center">
                                                                <a href="#form3" class="btn btn-xl btn-success btn_form_spec" id="next2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Далее
                                                                    <i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="form3" class="tab-pane fade">
                                                            <?php require('form3.php'); ?>
                                                            <div class="col-md-4 col-md-offset-3 col-xs-12 text-center">
                                                                <a class="btn btn-xl btn-success btn_form_spec" id="form-send">Оформить заявку</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
                                <li>Я даю свое согласие на регистрацию в проекте Быстрый займ и получение новостей проекта. Я
                                    уведомлен(а) о том, что информация, переданная мною по сети Интернет, может стать доступной
                                    третьим лицам, и я освобождаю администрацию Быстрый займ от ответственности, в случае,
                                    если указанные мною сведения станут доступными третьим лицам.</li>
                                <li>В целях принятия одним из МФО-партнеров Быстрый займ решения о заключении договора займа
                                    я даю им свое согласие на:
                                    <ul>
                                        <li>обработку в полном объеме моих персональных данных, изложенных в заявке на займ,
                                            а именно на сбор и проверку достоверности представленной информации путем обращения
                                            к третьим лицам. Я даю свое согласие на обработку моих персональных данных в
                                            целях продвижения услуг Быстрый займ на рынке с помощью средств связи, равно
                                            как продвижение услуг Быстрый займ и/или услуг (товаров, работ) третьих лиц-партнеров
                                            Быстрый займ.</li>
                                        <li>получение информации о моей кредитной истории на основании Федерального закона от
                                            30.12.2004 г. № 218-ФЗ "О кредитных историях" от любых организаций, осуществляющих
                                            в соответствии с действующим законодательством формирование, обработку и хранение
                                            такой информации. Полученная информация предназначена для внутреннего использования
                                            МФО-партнеров Быстрый займ. Настоящие согласия даны мной на неопределенный срок.</li>
                                    </ul>
                                    <li>Я подтверждаю, что сведения, содержащиеся в заявке, являются верными и точными на указанную
                                        дату и обязуюсь незамедлительно уведомить Быстрый займ в случае изменения указанных
                                        мной сведений, а также о любых обстоятельствах, способных повлиять на выполнение
                                        мной или МФО-партнеров Быстрый займ обязательств по займу, который может быть предоставлен
                                        на основании заявки.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal"> Закрыть </button>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'footer.php'; ?>
