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
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Zaimhome';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new2/php/form_header.php";
include "header.php";
?>
<div class="container ex-form">
    <h1 class="text-center" id="to_scroll">Как получить деньги?</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="ex-indicator-scope ex-on-second-step ex-on-last-step nav nav-tabs" role="tablist">
                        <figure class="ex-first-step">
                            <p>
                                <br> Личные данные (шаг 1)</p>
                        </figure>
                        <figure class="ex-second-step">
                            <div>
                                <span></span>
                            </div>
                            <p>Паспортные данные 
                                <br> (шаг 2)</p>
                        </figure>
                        <figure class="ex-last-step">
                            <p style="width: 105px; left: -130%;">Данные о работе (шаг 3)</p>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row tab-content">
                <form class="form-horizontal form-label form-css-label" id="anketa" action="/lk" method="post" autocomplete="off" novalidate>
                    <input type="hidden" name="display" id="display" value="0">
                    <input type="hidden" name="referer" value="<?=$referer?>">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="step" value="1">
                    <input type="hidden" name="ad_id" value="<?=$ad_id?>"> 
                    <input type="hidden" id="amount" name="amount" value="<?=$sum;?>"/>
                    <input type="hidden" id="period" name="period" value="<?=$period;?>" />
                    <input type="hidden" name="fingerprint" id="fingerprint" value="">
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane fade in active col-xs-12" id="firstTabContent">
                            <?php  require 'full/form1.php'; ?>
                        </div>
                    </div>
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane col-xs-12" id="secondTabContent"> 
                        <?php  require 'full/form2.php'; ?>
                        </div>
                    </div>
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane col-xs-12" id="lastTabContent"> 
                        <?php  require 'full/form3.php'; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php include 'footer.php';?>