<?php 
$sum = "5000"; $period = "10";
if(isset($_GET['amount'])) 
{  
    if($_GET['amount'] >= "200" || $_GET['amount'] <= "15000")
        $sum = $_GET['amount'];
}

if(isset($_POST['period'])) 
{  
    if($_POST['amount'] >= "7" || $_POST['amount'] <= "14")
        $period = $_POST['period'];
}

if(isset($_POST['amount'])) 
{  
    if($_POST['amount'] >= "200" || $_POST['amount'] <= "15000")
        $sum = $_POST['amount'];
}

if(!isset($my_title))
{
	$my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис zaimomir.su';
	$description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов на Украине';
}  
require 'header.php'; 

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
<main class="ex-form">
    <div class="container">
        <h1 class="text-center" id="form-steps">До одобрения кредита вас отделяют всего 3 шага</h1>
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <ul class="ex-tab-steps ">
                    <li class="ex-step-counter ex-step-active">
                        <figure></figure>
                        <p><br></p>
                    </li>
                    <li class="ex-step-counter ex-step-active">
                        <figure>Паспортные данные</figure>
                        <p><br></p>
                    </li>
                    <li class="ex-step-counter ex-step-active">
                        <figure></figure>
                        <p><br></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 ">
                <div class="ex-calc-block">
                    <div class="ex-wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ex-crumbs">
                                    <span class="ex-unique">Сумма займа</span>
                                    <p class="ex-slider-val ex-result-style"></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ex-crumbs">
                                    <span class="ex-unique">Срок займа</span>
                                    <p class="ex-time ex-result-style"></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ex-crumbs">
                                    <span class="ex-unique">Комиссия</span>
                                    <p class="ex-Commission ex-result-style"></p>
                                </div>
                            </div>
                        </div>
                        <div class="ex-range-slider ">
                            <input id="rangeSlider" name="rangeSlider" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-bg-form">
        <div class="container">
            <form id="anketa" action="/lk" method="post" class="form-horizontal" onsubmit="return validate();" autocomplete="off">
                <input type="hidden" name="display" id="display" value="0">
                <input type="hidden" name="referer" value="<?=$referer?>">
                <input type="hidden" name="id" value="">
                <input type="hidden" name="step" value="1">
                <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                <input type="hidden" id="amount" name="amount" value="<?php echo $sum;?>"/>
                <input type="hidden" id="period" name="period" value="<?php echo $period;?>"/>
                <div class="tab-content">
                    <div id="firstStep" class="tab-pane active">
                        <?php require 'form1.php';?>
                    </div>
                    <div id="secondStep" class="tab-pane">
                         
                    </div>
                    <div id="thirdStep" class="tab-pane">
                         
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?>