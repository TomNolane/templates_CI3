<?php $from = '15';
if(!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'offerwall2', 'pixell', 'vitrina', 'form')))
{
    require 'adsence.php';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="//top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534156142315" alt="123">';
}
?> 
<footer class="ex-main-footer">
    <div class="container text-center">
        <?php if (!in_array($this->uri->segment(1), array('lk', 'offerwall2', 'offerwall', 'pixell'))) { ?>
            <div class="ex-wrapper">
                <img src="/templates/fanzaim/assets/img/icons/Fanzaim-logo-footer.png"  alt="Image">
            </div> 
            <p class="spec_footer7">
            Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Алтайский край, г. Барнаул, ул. Ленина 54, оф 218 | <a href="mailto:support@fanzaim" target="_blank">support@fanzaim</a> <span class="hidden-xs hidden-sm">|  +7 (495) 006 19 61</span>
            <span>Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от  61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
            Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001. Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201</span>
            </p>
        <?php } else { ?>
            <div class='row'>
                <div class='col-md-3'>
                    <?php if(in_array($this->uri->segment(1), array('lk3', 'offerwall2', 'offerwall', 'pixell'))) { ?>
                        <img src="<?=$logo_foot?>" class="logo logo-spec" alt="logo-footer.png">
                    <?php } else { ?>
                        <img alt="logo.png" src="/templates/fanzaim/assets/img/icons/Fanzaim-logo-footer.png">
                    <?php } ?>
                </div>
                <div class='col-md-9 col-xs-9'>
                    <?php require 'adsence.php'; ?>
                </div>
            </div>
        <?php } ?>
        <? if (in_array($this->uri->segment(1), array('lk', 'vitrina'))) { ?>
        <div class="row" style="color: #FFF;">
            <div class="col-md-3 col-xs-12">
                Cервис по подбору выгодных онлайн займов находящийся по адресу Россия, Новосибирская область г. Новосибирск, ул. Маршала Покрышкина, 12, оф 201
                Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 <?=$email?> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
            </div>
            <div class="col-md-7">
                Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001
            </div>
        </div>
        <? } else if(in_array($this->uri->segment(1), array('lk3', 'offerwall2', 'offerwall', 'pixell'))) { ?>
            <div class="row" style="color: #000;">
                <div class="col-md-3 col-xs-12">
                    Cервис по подбору выгодных онлайн займов находящийся по адресу Россия, Новосибирская область г. Новосибирск, ул. Маршала Покрышкина, 12, оф 201
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 <?=$email?> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                </div>
                <div class="col-md-7">
                    Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001
                </div>
            </div>
        <? } ?>
    </div>
</footer>
    <!--[if lt IE 10]>
    <script  src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <![endif]-->
<!-- common JS -->
<?php
    echo '<script>'; 
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/fanzaim/assets/js/main.js'; 
    
if(in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) { ?> 
    $(document).ready(function () {
        $.mask.definitions['*'] = "[а-яёА-ЯЁA-Za-z0-9\/\-_]";
        $('[data-toggle="popover"]').popover();
        $("#rangeSlider").ionRangeSlider({
        hide_min_max: true,
        hide_from_to: true,
        keyboard: true,
        grid: false,
        from: <?php 

if($this->input->get('amount') != '')
{  
    switch($this->input->get('amount'))
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
        case '110000': $from = '22' ; break;
        case '120000': $from = '23' ; break;
        case '130000': $from = '24' ; break;
        case '140000': $from = '25' ; break;
        case '150000': $from = '26' ; break;
        case '160000': $from = '27' ; break; 
        case '170000': $from = '28' ; break;
        case '180000': $from = '29' ; break;
        case '190000': $from = '30' ; break;
        case '200000': $from = '31' ; break;
        case '250000': $from = '32' ; break;
        case '300000': $from = '33' ; break;
        case '400000': $from = '34' ; break;
        case '500000': $from = '35' ; break;
        case '600000': $from = '36' ; break;
        case '700000': $from = '37' ; break;
        case '800000': $from = '38' ; break;
        case '900000': $from = '39' ; break;
        case '1000000': $from = '40' ; break;
    }
    echo $from; 
}
elseif($this->input->post('form_slrd') == '') echo '15'; else echo $this->input->post('form_slrd'); ?>,
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
});    
<?php }
    if (in_array($this->uri->segment(1), array(' ', '', 'index'))) {
echo "$(document).ready
    (function (){
        $('.owl-carousel').owlCarousel
        ({
            loop: true,
            margin: 40,
            nav: false,
            navText : ['',''],
            dots: false,
            navContainer: '#customNav',
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                768:{
                    items:2,
                    nav:true
                },
                991:{
                    items:4,
                    nav:false
                },
            }
        }); 
        traffic('fanzaim.ru',0);
    });";
} 
else if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))
{
    include "templates/common/new/js/lk.js";
    echo 'traffic("fanzaim.ru",4);';
}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("fanzaim.ru",9);';
}
echo "}";
require 'templates/common/new/js/exeption.js';
?>
</script>
    <?php 
    include "google.php";
    include "yandexmetrika.php"; 
    include "yandex_rtb.php";
    if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3')))
    {
        require 'google_lk.php';
    }
    require 'mailru.php';
?>
</body>
</html>