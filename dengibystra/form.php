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
elseif($this->input->post('percent', TRUE) != '')
    $percent = $this->input->post('percent', TRUE);

if(!isset($my_title))
{
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис bzaim';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new/php/form_header.php";
include "header.php";
?>
<input type="hidden" class="percent" id="percent" name="percent" value="<?= $percent;?>" />
<div class="ex-bounds"></div>
<div class="container ex-form" style="margin-bottom: 100px !important;">
    <h1 class="text-center" id="to_scroll">Заполните анкету</h1>  
    <form class="tab-content" id="anketa" method="post" autocomplete="off" novalidate>
        <input type="hidden" name="referer" value="<?=$referer?>">
        <input type="hidden" name="id" value="">
        <input type="hidden" name="step" value="1">
        <input type="hidden" name="ad_id" value="<?=$ad_id?>"> 
        <input type="hidden" name="display" id="display" value="0">
        <input type="hidden" id="amount" class="amount" name="amount" value="<?= $sum; ?>" />
        <input type="hidden" id="period" name="period" value="<?= $period; ?>" />
        <input type="hidden" name="fingerprint" id="fingerprint" value="">
        <div role="tabpanel" class="ex-anketa1-block tab-pane fade in active col-xs-12" id="firstTabContent">
            <?php require 'form1.php'; ?>
        </div>
        <div role="tabpanel" class="ex-anketa2-block tab-pane col-xs-12" id="secondTabContent">
            <?php require 'form2.php'; ?>
        </div>
        <div role="tabpanel" class="ex-anketa3-block tab-pane col-xs-12" id="lastTabContent">
            <?php require 'form3.php'; ?>
        </div>
    </form>
</div> 
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- dengybistra -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="9919758561"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php include 'footer.php';?>