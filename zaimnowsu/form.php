<?php 
if(!isset($my_title))
{
	$my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис zaimnow.su';
	$description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
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
<style>
input:invalid:not(:placeholder-shown) {border-color: red;}
input:valid:not(:placeholder-shown) {border-color: green;}
.help-block2 {
    display: none;
    margin-bottom: 5px;
    margin-top: 2px;
    font-size: 0.8em;
    float: left;
    color: red !important;
} 
</style>
<main class="ex-form">
    <div class="container">
        <h1 class="text-center" id="form-steps">До одобрения кредита вас отделяют всего 3 шага</h1>
        <ul class="ex-tab-steps ">
        <li></li>
            <li class="ex-step-counter ex-step-active">Заполните личные данные</li>
            <li></li>
            <!-- <li class="ex-step-counter ex-step-2">шаг 2 Заполните паспортные данные</li>
            <li class="ex-step-counter ex-step-3">шаг 3 Заполните данные о работе</li> -->
        </ul>
        <div class="row justify-content-center">
            <div class="col-xl-6 ">
                <div class="ex-calc-block d-none">
                    <div class="ex-wrapper">
                        <div class="ex-values">
                            <div class="row align-items-end">
                                <div class="col-lg-6">
                                    <div class="ex-slider-block ">
                                        <span>Сумма займа</span>
                                        <p class="ex-slider-val"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ex-info-block">
                                        <div class="ex-crumbs">
                                            <span class="ex-unique">Комиссия:</span>
                                            <span class="ex-Commission ex-result-style"></span>
                                        </div>
                                        <div class="ex-crumbs">
                                            <span class="ex-unique">К возврату:</span>
                                            <span class="ex-total ex-result-style"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ex-range-slider ">
                            <input id="rangeSlider" name="rangeSlider" />
                            <span class="ex-small-cost ex-left">7 000 </span>
                            <span class="ex-small-cost ex-right">150 000 </span>
                        </div>
                    </div>
                </div>
                <figure class="ex-calc-zaim ">
                    <p>Калькулятор займа</p>
                </figure>
            </div>
        </div>
    </div>
    <div class="container">
        <form id="anketa" action="/lk" method="post" class="form-horizontal" onsubmit="return validate();" autocomplete="off">
            <input type="hidden" name="display" id="display" value="0">
            <input type="hidden" name="referer" value="<?=$referer?>">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="step" value="1">
            <input type="hidden" name="ad_id" value="<?=$ad_id?>">
            <input type="hidden" id="amount" name="amount" value="<?php if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['amount'])) echo '20000'; else echo $_POST['amount'];  ?>"/>
            <input type="hidden" id="period" name="period" value="<?php if(isset($period)) { echo $period; } else echo empty($_POST['period'])? 21 : $_POST['period']; ?>"/>
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
</main>
<?php require 'footer.php'; ?>