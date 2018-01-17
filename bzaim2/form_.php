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
require 'header.php'; 

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
    $referer = $_SERVER['HTTP_REFERER'].'&session';
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
    $ad_id = '2'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '2';
}
?> 
<div class="row">
        <div class="col-xs-12 text-center">
            <div id="pageh" class="sign__word__white text-center">Заполните свои личные данные</div>
        </div>
    </div>
</div>
<div class="steps hidden-xs hidden-sm">
    <div class="row">
        <div class="col-xs-12 text-center">
            <!-- <div id="pageh" class="sign__word__white text-center">Заполните свои личные данные</div> -->
            <div class="row" role="tablist" id="form-steps" role="presentation"> 
                <ul>
                    <li class="btn" id="step1">Шаг 1: личные <br>данные</li>
                    <li class="btn off" id="step2">Шаг 2: Паспортные <br>данные</li>
                    <li class="btn off" id="step3">Шаг 3: Работа</li>
                </ul> 
            </div>
        </div>
    </div>
</div>
<form class="form-horizontal" id="anketa" action="/add" method="post" onsubmit="return validate();" autocomplete="off">
<input type="hidden" name="referer" value="<?=$referer?>">
<input type="hidden" name="id" value="">
<input type="hidden" name="step" value="1">
<input type="hidden" name="ad_id" value="<?=$ad_id?>">
<input type="hidden" name="display" id="display" value="0">
<input type="hidden" id="period" name="period" value="<?php  echo $period; ?>" /> 
<div class="container">
    <section class="background">
        <div class="content-wrapper wrapper2">
            <div style="visibility: hidden" class="special4 hidden-xs hidden-sm"></div>
            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <?php require 'form1.php';?>
                </div>
                <div class="col-xs-2"></div> 
            </div>
            </div> 
            <footer>
                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <div>
                                <a href="/">
                                    <img src="/templates/bzaim2/assets/img/logo-f.png" align="" alt="logo" class="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 spec_footer4 hidden-xs hidden-sm">
                            <p>Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г.
                                Санкт-Петербург, ул. Осипенко, 12, оф 201
                                <a href="mailto:support@bzaim5.ru" target="_blank">
                                    | support@bzaim5.ru</a>
                                <span class="hidden-xs hidden-sm"> | +7(495) 006 19 61</span>
                            </p>
                        </div>
                        <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                            <div class="row">
                                <div class="col-sm-12 great-support-box wow fadeInLeft">
                                    <div class="great-support-box-text great-support-box-text-left">
                                        <p class="footer_spec99">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от
                                            61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день,
                                            а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок
                                            пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200
                                            руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по
                                            ставке 0% в случае своевременного погашения.
                                            <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </section>
    <section class="background">
        <div class="content-wrapper wrapper2">
            <div style="visibility: hidden; margin-top: 50vh;" class="special hidden-sx hidden-sm"></div>
            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <?php require 'form2.php';?>
                </div>
                <div class="col-xs-2"></div>
            </div>
        </div> 
        <footer class="hidden">
            <div class="col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <div>
                            <a href="/">
                                <img src="/templates/bzaim2/assets/img/logo-f.png" align="" alt="logo" class="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 spec_footer4 hidden-xs hidden-sm">
                        <p>Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург,
                            ул. Осипенко, 12, оф 201
                            <a href="mailto:support@bzaim5.ru" target="_blank">
                                | support@bzaim5.ru</a>
                            <span class="hidden-xs hidden-sm"> | +7(495) 006 19 61</span>
                        </p>
                    </div>
                    <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                        <div class="row">
                            <div class="col-sm-12 great-support-box wow fadeInLeft">
                                <div class="great-support-box-text great-support-box-text-left">
                                    <p class="footer_spec99">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61
                                        до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная
                                        0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10
                                        недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате
                                        31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного
                                        погашения.
                                        <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <section class="background">
        <div class="content-wrapper wrapper2">
            <div style="visibility: hidden; margin-top: 50vh;" class="special hidden-sx hidden-sm"></div>
            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <?php require 'form3.php';?>
                </div>
                <div class="col-xs-2"></div>
            </div>
        </div> 
        <footer class="hidden">
            <div class="col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <div>
                            <a href="/">
                                <img src="/templates/bzaim2/assets/img/logo-f.png" align="" alt="logo" class="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 spec_footer4 hidden-xs hidden-sm">
                        <p>Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург,
                            ул. Осипенко, 12, оф 201
                            <a href="mailto:support@bzaim5.ru" target="_blank">
                                | support@bzaim5.ru</a>
                            <span class="hidden-xs hidden-sm"> | +7(495) 006 19 61</span>
                        </p>
                    </div>
                    <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                        <div class="row">
                            <div class="col-sm-12 great-support-box wow fadeInLeft">
                                <div class="great-support-box-text great-support-box-text-left">
                                    <p class="footer_spec99">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61
                                        до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная
                                        0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10
                                        недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате
                                        31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного
                                        погашения.
                                        <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    
    </div>
    </form>
    <?php require 'footer.php'; ?>