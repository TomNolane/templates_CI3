<?php $from = '15'; ?>
<footer class="ex-main-footer ex-sticky-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="ex-foot-logo">
                    <?php if(in_array($this->uri->segment(1), array('lk3', 'offerwall2', 'offerwall', 'pixell'))) { ?>
                        <img src="<?=$logo_foot?>" alt="logo-footer.png">
                    <?php } else { ?>
                        <img alt="logo.png" src="/templates/zaimomir/assets/img/logo-footer.png">
                    <?php } ?>
                </div>
            </div>
            
            <div class="col-lg-9">
            <?php if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) : ?>
                <p>Сервис по подбору выгодных онлайн займов и кредитов находящийся по адресу:<br>
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 <?=$email?><span class="hidden-xs hidden-sm"> | 8
                    (960) 950 93
                    53</span><br>
                    <span>Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365
                    дней.<br>
                    Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.<br>
                    Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день;
                    проценты
                    за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей
                    выдается по
                    ставке 0% в случае своевременного погашения | ООО «Альянс» | ОГРН 5177746353054
                    | ИНН 9705113909 | КПП 770501001</span>
                </p>
                <?php else : ?>
                    <? require 'adsence.php'; ?>
                <? endif; ?>
            </div>
        </div>
        <?php if (in_array($this->uri->segment(1), array('lk', 'offerwall', 'pixell'))) : ?>
        
            <div class="row">
                <? require 'adsence.php'; ?>
                <p >Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург,
                    ул. Осипенко, 12, оф 201 | <?=$email?>
                    <span class=""><span id="sp_footer2">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
                    Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
                    Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты
                    за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
                    Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span></span></p>
            </div>
        <? endif; ?>
    </div>
</footer> 

<!-- [if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif] --> 

<!-- common JS -->
<script>
<?php
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/zaimomir/assets/js/main.js'; 

if (in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) { ?>
        $("#rangeSlider").ionRangeSlider({
            hide_min_max: true,
            hide_from_to: true,
            keyboard: true,
            grid: false,
            from: <?php 
            if(isset($_GET['amount'])) 
            {  
                switch($_GET['amount'])
                {
                    case '1000': $from = '0' ; break;
                    case '2000': $from = '1' ; break;
                    case '3000': $from = '2' ; break;
                    case '4000': $from = '3' ; break;
                    case '5000': $from = '4' ; break;
                    case '6000': $from = '5' ; break;
                    case '7000': $from = '6' ; break;
                    case '8000': $from = '7' ; break;
                    case '9000': $from = '8' ; break;
                    case '10000': $from = '9' ; break;
                    case '11000': $from = '10' ; break;
                    case '12000': $from = '11' ; break;
                    case '13000': $from = '12' ; break;
                    case '14000': $from = '13' ; break;
                    case '15000': $from = '14' ; break;
                    case '20000': $from = '15' ; break;
                    case '25000': $from = '16' ; break;
                    case '30000': $from = '17' ; break;
                    case '40000': $from = '18' ; break;
                    case '50000': $from = '19' ; break;
                    case '80000': $from = '20' ; break;
                    case '100000': $from = '21' ; break;
                }
                echo $from; 
            }
            elseif(!isset($_POST['form_slrd'])) echo '15'; else echo $_POST['form_slrd']; 
            ?>,
            values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000],
            onFinish: function (data) {
                $('#amount').val(data.from_value);
                $('#form_slrd').val(data.from);
            }, 
            onLoad: function (data) {
                $('#amount').val(data.from_value);
                $('#form_slrd').val(data.from);
            },
            onChange: function (range) {
                if (range.from_value <= 10000) {
                $('#period').val('7');
                $('#period2').val('От 61 до 130 дней');
            } else if (range.from_value <= 15000) {
                $('#period').val('14');
                $('#period2').val('От 61 до 130 дней');
            } else if (range.from_value <= 20000) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
            } else if (range.from_value <= 30000) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
            } else if (range.from_value <= 50000) {
                $('#period').val('30');
                $('#period2').val('От 130 до 250 дней');
            } else {
                $('#period').val('30');
                $('#period2').val('От 250 до 365 дней');
            } 
                $('#amount').val(range.from_value);
                $('#form_slrd').val(range.from); 
            },
        }); 
<?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) {?>
    $('.owl-carousel').owlCarousel({
        stagePadding: 40,
        center: true,
        loop: true,
        margin: 120,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });
    traffic("zaimomir.ru",0);
<?php }
}
elseif(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))
{
    include "templates/common/new/js/lk.js";
    echo 'traffic("zaimomir.ru",4);';
}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("zaimomir.ru",9);';
}
if ($this->uri->segment(1) == 'money') 
{
    echo "
        $('.nav-item').on('click', function () {
            $('.nav-item').removeClass('active');
            $(this).addClass('active');
        });";
}
echo "}";
require 'templates/common/new/js/exeption.js';
?>
</script>
<?php
    include "google.php";
    include "yandexmetrika.php";
    if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3')))
        require 'google_lk.php';
?>
</body>
</html>