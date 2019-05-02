<?php
$sum = "1000"; $period = "7";
if(isset($_GET['amount'])) 
{  
    if($_GET['amount'] >= "600" || $_GET['amount'] <= "10000")
        $sum = $_GET['amount'];
}

if(isset($_POST['period'])) 
{  
    if($_POST['amount'] >= "7" || $_POST['amount'] <= "14")
        $period = $_POST['period'];
}

if(isset($_POST['amount'])) 
{  
    if($_POST['amount'] >= "600" || $_POST['amount'] <= "10000")
        $sum = $_POST['amount'];
}

if(!isset($my_title))
{
	$my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Mikrodengi.su';
	$description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в Украине';
}  
require 'header.php'; 

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
    $ad_id = '4'.$utm;
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $ad_id = '4';
}
?>
<style>
.hidden {
    display: none !important;
}
</style>
<main class="ex-form">
    <h1 class="text-center" id="form-steps">До одобрения кредита вас отделяют всего 1 шаг</h1>
    <p>для оформления потребуется паспорт</p>
    <div class="container">
    <form id="anketa" action="/lk" method="post" class="form-horizontal" onsubmit="return validate();" autocomplete="off">
                <input type="hidden" name="display" id="display" value="0">
                <input type="hidden" name="referer" value="<?=$referer?>">
                <input type="hidden" name="id" value="">
                <input type="hidden" name="step" value="1">
                <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                <input type="hidden" name="fingerprint" id="fingerprint" value="">
                <input type="hidden" id="amount" name="amount" value="<?php echo $sum;?>"/>
                <input type="hidden" id="period" name="period" value="<?php echo $period;?>"/>
                <input type="hidden" name="fingerprint" id="fingerprint" value="">
            <div class="tab-content">
                <!-- <ul class="ex-tab-steps">
                    <li class="ex-step-counter ex-step-active text-center">Заполните личные данные</li>
                    <li class="ex-step-counter ex-step-2" style="visibility:  hidden;">Заполните паспортные данные</li>
                    <li class="ex-step-counter ex-step-3" style="visibility:  hidden;">Заполните данные о работе</li>
                </ul> -->
                <div id="firstStep" class="tab-pane fade in active">
                    <?php require 'full/form1.php'; ?>
                </div>
                <div id="secondStep" class="tab-pane fade">
                   
                </div>
                <div id="thirdStep" class="tab-pane fade">
                    
                </div>
            </div>
        </form>
    </div>
</main>
<?php require 'footer.php';?>