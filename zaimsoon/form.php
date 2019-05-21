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
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Zaimsoon';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new/php/form_header.php";
include "header.php";
?>
<main class="container ex-form" style="margin-top: 10px; margin-bottom: 100px;">
        <?php $period; ?>
        <form id="anketa" action="/lk" method="post" class="form-horizontal" novalidate autocomplete="off">
            <input type="hidden" name="display" id="display" value="0">
            <input type="hidden" name="referer" value="<?=$referer?>">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="step" value="1">
            <input type="hidden" name="ad_id" value="<?=$ad_id?>">
            <input type="hidden" id="amount" name="amount" value="<?= $sum;?>"/>
            <input type="hidden" id="period" name="period" value="<?=$period;?>"/>
            <input type="hidden" name="fingerprint" id="fingerprint" value="">
            <div class="tab-content" id="to_scroll">
                <div id="firstStep" class="tab-pane fade in active">
                    <? if ($setting_array['is_mobile'] != 'мобила') : ?>
                        <h2 class="text-center">Заполнив 1-й шаг, получите +30% к вероятности одобрения заявки</h2>
                    <? else : ?>
                        <h2 class="text-center" style="font-size: 22px !important;">Заполнив 1-й шаг, получите +30% к вероятности одобрения заявки</h2>
                    <? endif; ?>
                    <div class="ex-calc-wraper">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3  col-sm-10 col-sm-offset-1">
                                <div class="ex-range-scope">
                                    <div id="ex-main-slider-range">
                                        <p class="ex-slider-val"></p>
                                        <figure class="ex-range-slider">
                                            <input type="text" id="rangeSlider" name="rangeSlider" value="<?= $sum;?>"/>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require 'form1.php'?>
                </div>
                <div id="secondStep" class="tab-pane fade">
                    <h2 class="text-center">Заполните паспортные данные</h2>
                    <?php require 'form2.php'?>
                </div>
                <div id="thirdStep" class="tab-pane fade">
                    <h2 class="text-center">Заполните данные о работе</h2>
                    <?php require 'form3.php'?>
                </div>
            </div>
        </form>
</main>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- zaimsoon -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="4548012382"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php include 'footer.php';?>