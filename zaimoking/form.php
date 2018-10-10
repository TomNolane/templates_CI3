<?php 
$sum = '20000'; $period = '21';$percent = '95';
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
	$my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Zaimoking.ru';
	$description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
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
</header>
<main class="ex-form">
    <h1 class="text-center">До одобрения кредита вас отделяют всего 3 шага</h1>
    <p></p>
    <ul class="ex-tab-steps text-center" id="form-steps">
        <li class="ex-step-counter ex-step-active">Заполните личные данные</li>
        <li class="ex-step-counter ex-step-2" style="visibility: hidden"></li>
        <li class="ex-step-counter" style="visibility: hidden"></li>
    </ul>
    <div class="container">
        <form id="anketa" action="/lk" method="post" class="form-horizontal" novalidate autocomplete="off">
                <input type="hidden" name="display" id="display" value="0">
                <input type="hidden" name="referer" value="<?=$referer?>">
                <input type="hidden" name="id" value="">
                <input type="hidden" name="step" value="1">
                <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                <input type="hidden" name="fingerprint" id="fingerprint" value="">
                <input type="hidden" id="amount" name="amount" value="<?=$sum;?>"/>
                <input type="hidden" id="period" name="period" value="<?=$period;?>" />
            <div class="tab-content">
                <div id="firstStep" class="tab-pane fade in active">
                    <?php require 'full/form1.php'; ?>
                </div>
                <div id="secondStep" class="tab-pane fade">
                    <?php require 'full/form2.php'; ?>
                </div>
                <div id="thirdStep" class="tab-pane fade">
                    <?php require 'full/form3.php'; ?>
                </div>
            </div>
        </form>
    </div>
</main>
<?php require 'footer.php';?>