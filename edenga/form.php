<?php
if(!isset($my_title))
{
	$my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Fanzaim';
	$description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
$days = 'От 130 до 200 дней'; $days2 = 'Срок до 200 дней';
if(isset($_GET['amount'])) 
{  
    switch($_GET['amount'])
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
elseif(!isset($_POST['period2'])) { $days = 'От 130 до 200 дней'; $days2 = 'Срок до 200 дней'; } 
else
{ 
    switch($_POST['period2'])
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
require 'header.php'; ?>
    <?php
// IP
$this->load->helper('ip');
// GEO
require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
$gb = new IPGeoBase();
$geo = $gb->getRecord(IP::$ip);
if ($geo)
    {
        if (isset($geo['region'])){
            $region_name = $geo['region'];
        }else{
            $region_name = 'Санкт-Петербург';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Санкт-Петербург';
        }
    }else{
        $region_name = 'Санкт-Петербург';
        $city_name = 'Санкт-Петербург';
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
    $ad_id = '3'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '3';
}
?>
        <div class="container">
            <section class="form-anketa">
                <div class="row">
                    <div class="col-md-12 col-xs-12" id="to_scroll">
                        <h1 class="title text-center" id="htitle">Заполните свои личные данные</h1>
                        <ul class="nav nav-tabs text-center" id="form-steps">
                            <li role="presentation" class="active">
                                <a href="#form1" id="step1">Личные
                                    <span class="hidden-sm hidden-xs">данные</span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#form2" id="step2">Паспорт
                                    <span class="hidden-sm hidden-xs">ные данные</span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#form3" id="step3">Работа</a>
                            </li>
                        </ul>
                        <div class="col-md-6 col-md-offset-2 col-sm-6 col-xs-11 form-body">
                            <form class="form-horizontal" id="anketa" action="/lk" method="post" onsubmit="return validate();" autocomplete="off">
                                <input type="hidden" name="display" id="display" value="0">
                                <input type="hidden" name="referer" value="<?=$referer?>">
                                <input type="hidden" name="id" value="">
                                <input type="hidden" name="step" value="1">
                                <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                                <input type="hidden" id="amount" name="amount" value="<?php if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['amount'])) echo '20000'; else echo $_POST['amount'];  ?>" />
                                <!-- <input type="hidden" id="period" name="period" value="<?php //if(isset($period)) { echo $period; } else echo empty($_POST['period'])? 21 : $_POST['period']; ?>"/> -->
                                <div class="tab-content">
                                    <div id="firstStep" class="tab-pane fade in active">
                                        <?php require 'form1.php'; ?>
                                        <div class="pull-right">
                                            <a class="btn btn-primary btn-next" id="next1">Далее
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="secondStep" class="tab-pane fade">
                                        <?php require('form2.php'); ?>
                                        <div class="clearfix">&nbsp;</div>
                                        <div class="form-group">
                                            <div class="col-md-4 col-md-offset-4 hidden-xs">
                                                <!-- <div class="pull-left">
                                                    <a class="btn btn-primary btn-next" id="back">
                                                        <i class="fa fa-arrow-left"></i> Назад</a>
                                                </div> -->
                                            </div>
                                            <div class="col-md-4">
                                                <div class="pull-right">
                                                    <a class="btn btn-primary btn-next" id="next2">Далее
                                                        <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="thirdStep" class="tab-pane fade">
                                        <?php require('form3.php'); ?>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-4 col-xs-12 text-center">
                                                <a class="btn btn-primary btn-header" id="getmoney">Оформить заявку</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2 hidden-sm hidden-xs icon">
                            <div class="text-center icon-text">
                                <img src="/templates/edenga/img/form/1.png" alt="Ваши персональные данные надёжно защищены" class="img-rounded">
                                <span>Ваши персональные данные надежно защищены</span>
                            </div>
                            <div class="text-center icon-text">
                                <img src="/templates/edenga/img/form/2.png" alt="Удобное получение денег" class="img-rounded">
                                <span>Удобное получение денег</span>
                            </div>
                            <div class="text-center icon-text">
                                <img src="/templates/edenga/img/form/3.png" alt="Принимаем заявки с любой кредитной историей" class="img-rounded">
                                <span>Круглосуточная работа</span>
                            </div>
                            <div class="text-center icon-text">
                                <img src="/templates/edenga/img/form/4.png" alt="Деньги Вас ждут прямо сейчас" class="img-rounded">
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
        <?php require 'footer.php'; ?>