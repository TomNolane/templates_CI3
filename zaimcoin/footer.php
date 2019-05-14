<?php $from = '15';
if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="https://top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534156578754" alt="mytarget">';
}
if(!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell', 'form')))
{
    require 'adsence.php';
}
if (in_array($this->uri->segment(1), array(' ', '', 'index'))) : ?>
<footer class="ex-main-footer">
    <div class="container">
        <div class="ex-foot-logo text-center">
            <a href="/"><img src="/templates/zaimcoin/assets/img/logo-footer.png" alt="logo-footer.png"></a>
        </div>
        <div class="ex-foot-content text-center hidden-xs hidden-sm spec_footer4">
            <h4>Условия займа</h4>
            <div class="row">
                <ul class="col-md-offset-2 col-md-8 text-left">
                    <li>Сумма первого займа не более 10 000 рублей, кредит можно получить со ставкой 0%, если он будет
                        погашен вовремя.
                    </li>
                    <li>Размер займа от 1000 до 100 000 рублей.</li>
                    <li>Процент начисляется каждый день, ставка составляет от 0,08% до 0,98%. В месяц в среднем выходит
                        4,5%, в год - от 30% до 360%.
                    </li>
                    <li>Займ выдается на период от 61 дня до года.</li>
                    <li>За несоблюдение условий договора начисляется пеня, минимальный размер которой 0,03%, средний -
                        0,10%
                        от начальной суммы займа.
                    </li>
                </ul>
            </div>
            
            <div class="row">
                <h4>Информация о кредиторах, с которыми мы сотрудничаем</h4>

                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО МФО «СМСФИНАНС»<br>
                            № лицензии 2120177002022<br>
                            Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13<br>
                            Годовая процентная ставка: 328,5%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ЗАО «4финанс»<br>
                            № лицензии 1127746537764<br>
                            Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13<br>
                            Годовая процентная ставка: 328,5%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО «СрочноДеньги»<br>
                            № лицензии 2110552000304<br>
                            Адрес: Нижний Новгород, ул. Тимирязева, 15/2,<br>
                            БЦ «КМ-Сити», 4 этаж<br>
                            Годовая процентная ставка: 360%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО «Домашние деньги»<br>
                            № лицензии 211017700000<br>
                            Адрес: 115088, г. Москва,<br>
                            2-ой Южнопортовый проезд, д. 33, стр. 1<br>
                            Годовая процентная ставка: 248,2%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО «Займер»<br>
                            № лицензии 651303532004088<br>
                            Адрес:г. Кемерово, пр. Советский, д. 2/7<br>
                            Годовая процентная ставка: 248,2%</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-info-credit">
                        <p>ООО «Парса Компани Групп»<br>
                            № лицензии 1097746179585<br>
                            Адрес: 115201, г. Москва, Старокаширское ш., д. 2, корп. 2<br>
                            Годовая процентная ставка: 360%</p>
                    </div>
                </div>
            </div>
            <div id="special_footer" class="ex-for-btn"><a onclick="goToUp(); return false;">ВЕРНУТЬСЯ В НАЧАЛО</a></div>
        </div>
        <p class="spec_footer5">Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург,
            ул. Осипенко, 12, оф 201 | <?=$email?> <span id="sp_footer1" class="hidden-xs hidden-sm"> | +7 (495) 006 19 61.</span><br>
            <span class="hidden-xs hidden-sm">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
            Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
            Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты
            за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span></p>
            <hr/>
    </div> 
</footer>
<? else : ?>
<footer class="ex-main-footer-bg">
    <div class="container">
            <? if (!in_array($this->uri->segment(1), array('lk3', 'offerwall2', 'offerwall', 'pixell'))) : ?>
                <div class="ex-foot-logo text-center">
                    <img src="/templates/zaimcoin/assets/img/logo-footer.png" alt="logo-footer.png">
                </div>
            <? else : ?>
                <div class="row">
                        <div class="col-md-3 hidden-xs">
                            <div class="ex-foot-logo text-center"><img src="<?=$logo_foot?>" class="logo-spec" alt="logo-footer.png"></div>
                        </div>
                        <div class="col-md-9 col-xs-12">
                        <br>
                        <? require 'adsence.php'; ?>
                        </div>
                    </div>
            <? endif; ?>
            <div class="row">
                <p class="">Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург,
                    ул. Осипенко, 12, оф 201 | <?=$email?>
                    <span class=""><span id="sp_footer2">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
                    Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
                    Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты
                    за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
                    Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span></span></p>
            </div>
        <hr/>
    </div>
</footer>
<? endif; ?>
<!-- [if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif] --> 

<!-- common JS -->
<script>
<?php
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/zaimcoin/assets/js/main.js'; 
    echo 'function goToUp() {
        $(\'html, body\').animate({
            scrollTop: $(\'.toUp\').offset().top
        }, 1000);
    }';
if (in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) { ?>

    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) {?>
    function GetMoney() {
        $('form#anketa').submit();
    }
    jQuery.fn.swap = function(b) 
    {
        b = jQuery(b)[0];
        var a = this[0],
            a2 = a.cloneNode(true),
            b2 = b.cloneNode(true),
            stack = this;

        a.parentNode.replaceChild(b2, a);
        b.parentNode.replaceChild(a2, b);

        stack[0] = a2;
        return this.pushStack( stack );
    }; 
    var client_w = screen.width; 
    var pathname = window.location.pathname,  substring = "/", substring2 = "index", substring4 = "lk";
        
    if(pathname.indexOf(substring) !== -1 || pathname.indexOf(substring2) !== -1)
    {
        if(Number(client_w) <= 767)
        {
            $("#specialIndex").swap("#specialIndex2");
            $("#ex-slider-val").css("margin-top","0");
        }
    };
    <?php } ?>
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
        onChange: function (range3) {
                 if (range3.from_value <= 10000) {
                    $("#period").val("7");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('85');
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней");
                    $('#percent').val('77');
                } else  if (range3.from_value <= 200000 && range3.from_value > 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                    $('#percent').val('65');
                } else  if (range3.from_value <= 500000 && range3.from_value > 200000) {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 3 лет");
                    $('#percent').val('58');
                } else {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 5 лет");
                    $('#percent').val('52');
                }

                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
            }
        }); 
    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) {
        echo 'traffic("zaimcoin.ru",0);'; 
     }
}
elseif(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))
{
    include "templates/common/new/js/lk.js";
    echo 'traffic("zaimcoin.ru",4);';
}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("zaimcoin.ru",9);';
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
        require 'google_lk.php';
    else
        require 'vk.php';

    require 'mailru.php';
?>
</body>
</html>