<?php
if(!isset($my_title))
{
    $my_title = 'Заполните анкету!';
}  

if(!isset($description))
{
    $description = 'описание анкеты!';
}  
require 'header.php'; ?> 
    <style>
        #ya-rtb {
            display: none;
        }
        /* .has-feedback label~.form-control-feedback {
        top: 0px !important;
    } */
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
            $region_name = 'Ульяновск';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Ульяновск';
        }
    }else{
        $region_name = 'Ульяновск';
        $city_name = 'Ульяновск';
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
                                                    <input type="hidden" id="period" name="period" value="<?php if(isset($period)) { echo $period; } else echo empty($_POST['period'])? 15 : $_POST['period']; ?>" />
                                                    <div class="tab-content text-left">
                                                        <div id="form1" class="tab-pane fade in active">
                                                            <?php require 'form1.php'; ?>
                                                            <div class="col-md-4 col-md-offset-4 col-xs-12">
                                                                <a href="#form2" class="btn btn-xl btn-success btn-next pull-right btn_form_spec" id="next">Далее
                                                                    <i class="fa fa-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="form2" class="tab-pane fade">
                                                            <?php require('form2.php'); ?>
                                                            <div class="col-md-4 col-xs-6 hidden">
                                                                <a href="#form1" class="btn btn-xl btn-success btn-next pull-left btn_form_spec" id="back">
                                                                    <i class="fa fa-arrow-left"></i> Назад</a>
                                                            </div>
                                                            <div class="col-md-4 col-md-offset-4 col-xs-12">
                                                                <a href="#form3" class="btn btn-xl btn-success btn-next pull-right btn_form_spec" id="next2">Далее
                                                                    <i class="fa fa-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div id="form3" class="tab-pane fade">
                                                            <?php require('form3.php'); ?>
                                                            <div class="col-md-4 col-md-offset-3 col-xs-4 col-xs-offset-2">
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
