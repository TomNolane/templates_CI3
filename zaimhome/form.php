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
include "templates/common/new/php/form_header.php";
include "header.php";
?>
<div class="container ex-form">
    <? if ($setting_array['is_mobile'] == 'мобила') : ?>
        <h1 class="text-center" id="to_scroll" style="font-size: 16px; line-height: 1.5;">Заполнив 1-й шаг, получите +30% к вероятности одобрения заявки</h1>
    <? else : ?>
        <h1 class="text-center" id="to_scroll">Заполнив 1-й шаг, получите +30% к вероятности одобрения заявки</h1>
    <? endif; ?>
    <div class="row">
        <div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
            <div class="row hidden-xs">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="ex-indicator-scope ex-on-second-step ex-on-last-step nav nav-tabs" role="tablist" style="margin-bottom: 50px;">
                        <figure class="ex-first-step">
                            <p>
                                <br> </p>
                        </figure>
                        <figure class="ex-second-step">
                            <div>
                                <span></span>
                            </div>
                            <p></p>
                        </figure>
                        <figure class="ex-last-step">
                            <p style="width: 105px; left: -130%;"></p>
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
                            <?php  require 'form1.php'; ?>
                        </div>
                    </div>
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane col-xs-12" id="secondTabContent"> 
                        <?php  require 'form2.php'; ?>
                        </div>
                    </div>
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane col-xs-12" id="lastTabContent"> 
                        <?php  require 'form3.php'; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- zaimhome -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="7107437553"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br><br>
<?php include 'footer.php';?>