<?php 
$from = '15';
if(!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'offerwall2', 'pixell', 'vitrina', 'form')))
{
    require 'adsence.php';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'pixell', 'offerwall', 'offerwall2', 'vitrina'))) 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="//top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534155871972" alt="MYTARGET">';
    echo '<footer class="ex-start-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="ex-footer-logo">
                    <a href="/">
                        <img src="/templates/bzaim/assets/img/logo.png" alt="logo-foot.png">
                    </a>
                </div>
                <p class="ex-text spec_footer4">
                    Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 дня до 1 года. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения. Email: ' . $email . '  <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001. Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                </p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 hidden-xs hidden-sm spec_footer5">
                <p class="ex-list-title">Документы</p>
                <ul>
                    <li>
                        <a href="/documents">Правовые документы</a>
                    </li>
                    <li>
                        <a href="/oferta">Публичная оферта</a>
                    </li>
                    <li>
                        <a href="/contract">Пользовательское соглашение</a>
                    </li>
                    <li>
                        <a href="/agreement">Согласие на обработку данных</a>
                    </li>
                    <li>
                        <a href="/rules">Правила предоставления займов</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12">
                <hr/>
            </div>
        </div>
    </div>
</footer>'; 
}
else if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'pixell')))
{
    echo '<footer class="ex-footer">
        <div class="container">
            <div class="row">
            <hr/> 
                <div class="ex-footer-logo col-md-3">
                    <img src="' . $logo_foot . '" alt="logo-foot.png">
                </div>
                <div class="col-xs-12 col-md-9">';
                require 'adsence.php';
                echo '</div>
            </div>
             <div class="col-sm-12">
                <p class="ex-text">
                    Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 дня до 1 года. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения. Email: ' . $email . '  <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001. Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                </p>
            </div>
        </div>
</footer>';
}
else if($this->uri->segment(1) == 'form' )
{
    echo '<footer class="ex-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <a href="/"><img src="/templates/bzaim/assets/img/logo-2.png" alt="logo-2.png"></a>
                        <p class="spec_footer4">Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201<br>'.$email.' </p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr/>
                </div>
            </div>
        </div>
    </footer>';
}
?>
<!-- [if lt IE 10]>
<script  src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></footer>
<![endif] --> 
<!-- common JS -->
<script>
<?php 
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/bzaim/assets/js/main.js'; 

if (in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) 
{  ?>
        $("#rangeSlider").ionRangeSlider({
        hide_min_max: false, 
        keyboard: true, 
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
                    $("#period2").val("От 1 до 1 год");
                    $('#percent').val('52');
                }

                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
                $('.irs-single').text('вероятность ' + $('#percent').val() + '%');
            },
            onFinish: function (range3) {
                $('.irs-single').text('').append("<span>&nbsp;&nbsp;"+ range3.from_value+"&nbsp;&nbsp;рублей&nbsp;&nbsp;</span>");
            }
        }); 

    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) 
    { 
        echo 'traffic("bzaim5.ru",0);';
    }
}
else if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'pixell')))
{
    include "templates/common/new/js/lk.js";
    echo 'traffic("bzaim5.ru",4);'; 

}
else if($this->uri->segment(1) == '404')
{
    echo 'traffic("bzaim5.ru",9);'; 
}
echo "}";
require 'templates/common/new/s/exeption.js';
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
    else 
    {
        require 'vk.php';
    }

    require 'mailru.php';
?>
</body>
</html>