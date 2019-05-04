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
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Zaimnow';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new/php/form_header.php";
include "header.php";
?>
<main class="ex-form">
    <div class="container">
        <h1 class="text-center" id="form-steps">До одобрения кредита вас отделяют всего 1 шаг</h1>
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
                            <span class="ex-small-cost ex-left">1 000 </span>
                            <span class="ex-small-cost ex-right">100 000 </span>
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
        <form id="anketa" action="/lk" method="post" class="form-horizontal" autocomplete="off">
            <input type="hidden" name="display" id="display" value="0">
            <input type="hidden" name="referer" value="<?=$referer?>">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="step" value="1">
            <input type="hidden" name="ad_id" value="<?=$ad_id?>">
            <input type="hidden" name="fingerprint" id="fingerprint" value="">
            <input type="hidden" id="amount" name="amount" value="<?=$sum?>"/>
            <input type="hidden" id="period" name="period" value="<?=$preriod?>"/>
            <div class="tab-content">
                <div id="firstStep" class="tab-pane active">
                    <?php require 'form1.php';?>
                </div>
                <div id="secondStep" class="tab-pane">
                    <?php require 'form2.php';?>
                </div>
                <div id="thirdStep" class="tab-pane">
                    <?php require 'form3.php';?>
                </div>
            </div>
        </form>
    </div>
</main>
<?php require 'footer.php'; ?>