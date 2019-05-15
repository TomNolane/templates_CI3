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
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Forzaim';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
include "templates/common/new/php/form_header.php";
include "header.php";
?>
<nav class="ex-main-header">
    <div class="container">
        <i class="ex-hamburger"></i>
        <a class="ex-brand" href="/" style="margin-left: -60px;">Forzaim</a>
    </div>
</nav>  
<main class="container ex-form" style="padding-bottom: 70px !important;">
    <?php $period; ?>
    <form id="anketa" action="/lk" method="post" class="form-horizontal" autocomplete="off" novalidate>
        <input type="hidden" name="display" id="display" value="0">
        <input type="hidden" name="referer" value="<?=$referer?>">
        <input type="hidden" name="id" value="">
        <input type="hidden" name="step" value="1">
        <input type="hidden" name="ad_id" value="<?=$ad_id?>">
        <input type="hidden" name="fingerprint" id="fingerprint" value="">
        <input type="hidden" id="amount" name="amount" value="<?=$sum;?>"/>
        <input type="hidden" id="period" name="period" value="<?=$period;?>"/>
        <div class="tab-content" id="to_scroll">
            <div id="firstStep" class="tab-pane fade in active">
                <h2 class="text-center">Заполнив 1-й шаг, получите +30% к вероятности одобрения заявки</h2>
                <div class="ex-calc-wraper">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2  col-sm-10 col-sm-offset-1">
                            <div class="ex-range-scope">
                                <div id="ex-main-slider-range">
                                    <figure class="ex-range-slider">
                                        <input type="text" id="rangeSlider" name="rangeSlider" value="0" />
                                    </figure>
                                </div>
                            </div>
                            <div class="ex-tab-section">
                                <ul class="ex-calc-block ">
                                    <li>
                                        <div class="ex-val-block">
                                            <span class="ex-unique">Сумма займа (в рублях)</span>
                                            <span class="ex-slider-val ex-result-style"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ex-crumbs">
                                            <span class="ex-unique">Срок займа (в днях)</span>
                                            <span class="ex-ot">от</span>
                                            <span class="ex-time ex-result-style"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ex-crumbs">
                                            <span class="ex-unique">К возврату (в рублях)</span>
                                            <span class="ex-total ex-result-style"></span>
                                        </div>
                                    </li>
                                </ul>
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
<!-- forzaim -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="6265677912"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php include 'footer.php';?>