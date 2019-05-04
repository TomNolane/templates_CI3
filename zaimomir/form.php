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
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Zaimomir';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new/php/form_header.php";
include "header.php";
?>
<main class="ex-form">
    <div class="container">
        <h1 class="text-center" id="form-steps">До одобрения кредита вас отделяют всего 1 шаг</h1>
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <ul class="ex-tab-steps ">
                    <li class="ex-step-counter ex-step-active" style="visibility: hidden;">
                         <figure>шаг 2</figure>
                        <p>Паспортные данные</p>
                    </li>
                    <li class="ex-step-counter ex-step-2 ex-step-active" > 
                        <figure>шаг 1</figure>
                        <p>Личные данные</p>
                    </li>
                    <li class="ex-step-counter ex-step-3" style="visibility: hidden;">
                        <figure>шаг 3</figure>
                        <p>Данные о работе</p>
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
            <form id="anketa" action="/lk" method="post" class="form-horizontal" novalidate autocomplete="off">
                <input type="hidden" name="display" id="display" value="0">
                <input type="hidden" name="referer" value="<?=$referer?>">
                <input type="hidden" name="id" value="">
                <input type="hidden" name="step" value="1">
                <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                <input type="hidden" name="fingerprint" id="fingerprint" value="">
                <input type="hidden" id="amount" name="amount" value="<?=$sum?>"/>
                <input type="hidden" id="period" name="period" value="<?=$period?>"/>
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
    </div>
</main>
<?php require 'footer.php'; ?>