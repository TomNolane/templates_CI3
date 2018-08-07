<?php $from = '15'; 
if($this->uri->segment(1) != 'form')
{
	echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Zaimol -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-9509439067407055"
         data-ad-slot="9757833465"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
?>
<footer class="ex-main-footer">
    <div class="container">
        <div>
            <a href="/"><img src="/templates/zaimol/assets/img/logo-footer.png" alt="missed"></a>
        </div>
        <p class="spec_footer4">
            Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 | <a class="spec_index3" href="mailto:support@zaimol.ru">support@zaimol.ru</a> &nbsp; <span class="hidden-xs hidden-sm">| +7(495) 006 19 61
            <br>Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от  61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
            Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span> 
        </p> <br>
        <ul class="list-inline text-center"> 
            <li class="list-inline-item"><a href="https://bankmoney.su/category/zajmy/zajm-na-kartu-mgnovenno-kruglosutochno-bez-otkaza/"> Займ на карту мгновенно круглосуточно без отказа &nbsp;&nbsp;</a></li>
            <li class="list-inline-item"><a href="https://bankmoney.su/category/zajmy/zajmy-onlajn/">&nbsp;&nbsp; Займы онлайн &nbsp;&nbsp;</a></li>
            <li class="list-inline-item"><a href="https://bankmoney.su/category/zajmy/">&nbsp;&nbsp; Займ &nbsp;&nbsp;</a></li>
            <li class="list-inline-item"><a href="https://bankmoney.su/category/zajmy/zajm-na-kartu/">&nbsp;&nbsp; Займ на карту &nbsp;&nbsp;</a></li>
            <li class="list-inline-item"><a href="https://bankmoney.su/category/zajmy/zajmy-onlajn-na-kartu/">&nbsp;&nbsp; Займы онлайн на карту </a></li>
        </ul> 
    </div>
</footer>
<span class="ex-scroll-top"></span>
<!-- [if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif] --> 

<!-- common JS -->
<script>
<?php
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/zaimol/assets/js/main.js'; 

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form' || $this->uri->segment(1) == 'advantages' || $this->uri->segment(1) == 'benefit' || $this->uri->segment(1) == 'denial' || $this->uri->segment(1) == 'microcredit') { ?>
 
    var amount = 15000;
    var day = 10;
    var percent, comm, comm1, comm2, summ;

    var updateComm = function () {
        if (amount <= 30000) {
            percent = 1.3;
            comm1 = Math.ceil((amount / 100) * percent) * day;
            comm2 = 0;
        }
        if (amount > 30000) {
            percent = 0.2;
            comm1 = 390 * day;
            comm2 = Math.ceil(((amount - 30000) / 100) * percent) * day;
        }
        comm = comm1 + comm2;
        summ = amount + comm;
        $('.perc').text(percent + '%');
        $('.comm').text(comm + 'P');
        $('.sum').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' ') + 'P');
    };

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

                $('.d').text($("#period2").val());
                $('.a').text(range3.from_value + 'P');
                $('.results tr').each(function (indx, element) {
                    if ($(element).data('amount') < range3.from) $(element).hide();
                    else $(element).show();
                });

                amount = range3.from_value;
                updateComm();
            }
        }); 
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?> 

        var slider = $('#rangeSlider').data('ionRangeSlider');
        var slider_plus = true;
        var n = 10;
        var slider_init = setInterval(function () {
            if (slider_plus) {
                n++;
            } else {
                n--;
            }
            if (n == 21 && n != <?php echo $from; ?>) {
                slider_plus = false;
            }else if (n == <?php echo $from; ?> && slider_plus == false) {
                clearInterval(slider_init);
            }else if (n == 21 && n == <?php echo $from; ?>) {
                clearInterval(slider_init);
            }

            slider.update({
                from: n
            });

            if (n <= 9) {
            $('#period').val('7');
            $('#period2').val('От 61 до 130 дней');
            $('#percent').val('95');
            } else if (n <= 14 && n > 9) {
                $('#period').val('14');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('95');
            } else if (n <= 15 && n > 14) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('95');
            } else if (n <= 17 && n > 15) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('85');
            } else if (n <= 19 && n > 17) {
                $('#period').val('30');
                $('#period2').val('От 130 до 250 дней');
                $('#percent').val('77');
            } else if (n > 19) {
                $('#period').val('30');
                $('#period2').val('От 250 до 365 дней');
                $('#percent').val('65');
            }
            $('#amount').val(slider.result.from_value);
            $("#form_slrd").val(slider.result.from);

            $('.d').text($("#period2").val());
            $('.results tr').each(function (indx, element) {
            if ($(element).data('amount') < slider.result.from) $(element).hide();
                else $(element).show();
            });
            
            $('.a').text(String(slider.result.from_value).split(/(?=(?:\d{3})+$)/).join(' ') + 'P');
            amount = slider.result.from_value;
            updateComm();

        }, 50); 
        traffic("zaimol.ru",0);
<?php }
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";      
    echo 'traffic("zaimol.ru",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("zaimol.ru",9);'; 
}
else if($this->uri->segment(1) == 'form')
{ } 
echo "}";
require 'templates/common/new2/js/exeption.js';
?>
</script>
<?php
    include "google.php";
    include "yandexmetrika.php"; 
    include "yandex_rtb.php";
    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
    {     
        echo '<!-- Google Code for  
        &#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
        Page -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 826360846;
        var google_conversion_label = "tDGuCMWP13kQjoiFigM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script type="text/javascript"  
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/826360846/?label=tDGuCMWP13kQjoiFigM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>'; 
    }
?>
</body>
</html>