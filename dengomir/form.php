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
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Dengomir';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new/php/form_header.php";
include "header.php";
?>
<div class="ex-form" style="padding-bottom: 10px; padding-top: 10px;">
    <div class="container" id="to_scroll" style="padding-bottom: 50px;">
        <div class="ex-bg-form myborder" style="background-image: none; background: #bfd8ff; padding-bottom: 18px;">
                <?php $period; ?>
                <form id="anketa" action="/lk" method="post" class="form-horizontal" novalidate autocomplete="off">
                    <input type="hidden" name="display" id="display" value="0">
                    <input type="hidden" name="referer" value="<?=$referer?>">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="step" value="1">
                    <input type="hidden" name="fingerprint" id="fingerprint" value="">
                    <input type="hidden" name="ad_id" value="<?=$ad_id?>">
                    <input type="hidden" id="amount" name="amount" value="<?=$sum;?>"/>
                    <input type="hidden" id="period" name="period" value="<?=$period;?>"/>
                <div class="tab-content" style="width: 800px;">
                    <div id="firstStep" class="tab-pane fade in active" style="padding-top: 0;">
                        <?php require 'form1.php';?>
                    </div>
                    <div id="secondStep" class="tab-pane fade">
                        <?php require 'form2.php';?>
                    </div>
                    <div id="thirdStep" class="tab-pane fade">
                        <?php require 'form3.php';?>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- dengomir -->
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-4970738258373085"
        data-ad-slot="4639511728"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>

<?php include 'footer.php';?>