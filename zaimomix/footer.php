<?php $from = '15';
if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3')
{
    if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index') {
        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- zaimomix -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="1488279360"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
	
    echo '<a href="#0" class="cd-top">Наверх</a>';
} 
?>
<footer class="ex-main-footer ex-sticky-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="ex-foot-logo">
                    <img src="/templates/zaimomix/assets/img/logo-footer.png" alt="logo-footer.png" class="logo-spec">
                </div>
            </div>
            <div class="col-lg-10">
            <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') { ?>
                <p>Сервис по подбору выгодных онлайн займов и кредитов находящийся по адресу:<br>
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 support@zaimomix.ru<span class="hidden-xs hidden-sm"> | 8
                    (960) 950 93 53</span><br>
                    <span class="hidden-xs hidden-sm">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365
                    дней.<br>
                    Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.<br>
                    Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день;
                    проценты за весь период составят
                    11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в
                    случае своевременного погашения
                    ООО «Альянс» | ОГРН 5177746353054 | ИНН 9705113909 | КПП 770501001</span></p>
            <?php } else { ?>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- zaimomix -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-4970738258373085"
                    data-ad-slot="1488279360"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            <?php } ?>
            </div>
            <hr/>
            <div class="col-lg-12">
            <br>
            <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'form') { ?>
                <ul class="list-inline text-center"> 
                    <li class="list-inline-item"><a href="//bankmoney.su/category/zajmy/zajm-na-kartu-mgnovenno-kruglosutochno-bez-otkaza/"> Займ на карту мгновенно круглосуточно без отказа &nbsp;&nbsp;</a></li>
                    <li class="list-inline-item"><a href="//bankmoney.su/category/zajmy/zajmy-onlajn/">&nbsp;&nbsp; Займы онлайн &nbsp;&nbsp;</a></li>
                    <li class="list-inline-item"><a href="//bankmoney.su/category/zajmy/">&nbsp;&nbsp; Займ &nbsp;&nbsp;</a></li>
                    <li class="list-inline-item"><a href="//bankmoney.su/category/zajmy/zajm-na-kartu/">&nbsp;&nbsp; Займ на карту &nbsp;&nbsp;</a></li>
                    <li class="list-inline-item"><a href="//bankmoney.su/category/zajmy/zajmy-onlajn-na-kartu/">&nbsp;&nbsp; Займы онлайн на карту </a></li>
                </ul>
                <?php } ?>
            </div>
        </div>
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
    require 'templates/zaimomix/assets/js/main.js'; 

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') { ?>
 
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
            },
            onFinish: function (data) {
                $('#amount').val(data.from_value);
                $('#form_slrd').val(data.from);
            }, 
            onLoad: function (data) {
                $('#amount').val(data.from_value);
                $('#form_slrd').val(data.from);
            }
        }); 
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?>
        $('.owl-carousel').owlCarousel({
            stagePadding: 40,
            center: true,
            loop: true,
            margin: 38,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            smartSpeed:500,
            autoplayHoverPause: true,
            navText: ["", ""],
            navContainer: '#customNav',
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    dots: true
                },
                600: {
                    items: 2,
                    nav: false,
                    dots: true
                },
                1200: {
                    items: 4,
                    nav: false
                }

            }
        });
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
        }, 50); 
        traffic("zaimomix.ru",0);
<?php }
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";      
    echo 'traffic("zaimomix.ru",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("zaimomix.ru",9);'; 
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
        &#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
        Page -->
        <script >
        /* <![CDATA[ */
        var google_conversion_id = 818877984;
        var google_conversion_label = "W56FCL7S43sQoKy8hgM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script   
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/818877984/?label=W56FCL7S43sQoKy8hgM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>
        <!-- Google Code for  
        &#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
        Page -->
        <script >
        /* <![CDATA[ */
        var google_conversion_id = 818913167;
        var google_conversion_label = "g0PrCKW2-nsQj7--hgM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script   
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/818913167/?label=g0PrCKW2-nsQj7--hgM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>'; 
    }
?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1337253769702359'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=1337253769702359&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>