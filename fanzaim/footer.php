<?php $from = '15';
if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall')
{
    if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index') 
    {
        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- fanzaim -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="5186306631"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
     if($setting_array['is_mobile'] != 'мобила') {
    echo '<ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="5186306631"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    echo '<a href="#0" class="cd-top">Наверх</a>';
        }
}
if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="//top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534156142315" alt="123">';
}
?> 
<footer class="ex-main-footer">
        <div class="container text-center">
            <div>
            <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') { ?>
                <div class="ex-wrapper">
                    <img src="/templates/fanzaim/assets/img/icons/Fanzaim-logo-footer.png"  alt="Image">
                </div> 
                <p class="spec_footer7">
                Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Алтайский край, г. Барнаул, ул. Ленина 54, оф 218 | <a href="mailto:support@fanzaim" target="_blank">support@fanzaim</a> <span class="hidden-xs hidden-sm">|  +7 (495) 006 19 61</span>
                <span class="hidden-xs hidden-sm">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от  61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
                Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
                Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001. Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201</span>
                </p>
            <?php } else { ?>
                <div class='row'>
                    <div class='col-md-4 hidden-xs'>
                        <?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3' || $this->uri->segment(1) == 'offerwall') { ?>
                            <img class="img-responsive" src="/templates/fanzaim/assets/img/icons/Fanzaim-logo-footer.png"  alt="Image">
                        <?php } else { ?>
                             <img class="img-responsive" src="/templates/fanzaim/assets/img/icons/Fanzaim-logo-footer.png"  alt="Image" class='logo-special'>
                        <?php } ?>
                    </div>
                    <div class='col-md-8 col-xs-12'>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- fanzaim -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-4970738258373085"
                            data-ad-slot="5186306631"
                            data-ad-format="auto"
                            data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                </div>
                </div>
            <?php } ?>
            <div class="col-sm-12">
                <hr/>
                <?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') { 

                } ?>
            </div>
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
    
if($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') { ?> 
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

    if ($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index')  { ?>
    $(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 40,
        nav: false,
        navText : ["",""],
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
    var slider3 = $('#rangeSlider').data('ionRangeSlider');
    var slider_plus = true;
    var n = 10;
    var slider_init = setInterval(function () {
        if (slider_plus) {
            n++;
        } else {
            n--;
        }
        if (n == 21 && n != <?php echo $from;?>) {
            slider_plus = false;
        }else if (n == <?php echo $from;?> && slider_plus == false) {
            clearInterval(slider_init);
        }else if (n == 21 && n == <?php echo $from;?>) {
            clearInterval(slider_init);
        }
 
        slider3.update({
            from: n
        }); 
 
        if (n <= 9) {
            $('#period').val('7'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 14 && n > 9) {
            $('#period').val('14'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 15 && n > 14) {
            $('#period').val('21'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 17 && n > 15) {
            $('#period').val('21'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 19 && n > 17) {
            $('#period').val('30'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n > 19) {
            $('#period').val('30'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } 

    }, 50);
    
    
    
});
<?php }elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";      
    echo 'traffic("fanzaim.ru",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("fanzaim.ru",9);'; 
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
        var google_conversion_id = 825395112;
        var google_conversion_label = "NBh1CM-NhXoQqI_KiQM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script   
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/825395112/?label=NBh1CM-NhXoQqI_KiQM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>'; 
    }
?>
<!-- Rating@Mail.ru counter -->
<script>
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3052551", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
(function (d, w, id) {
if (d.getElementById(id)) return;
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
ts.src = "//top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3052551;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Rating@Mail.ru counter dynamic remarketing appendix -->
<script>
var _tmr = _tmr || [];
_tmr.push({
type: 'itemView',
productid: 'VALUE',
pagetype: 'VALUE',
list: 'VALUE',
totalvalue: 'VALUE'
});
</script>
<!-- // Rating@Mail.ru counter dynamic remarketing appendix -->
<?php
require 'templates/common/new2/php/modal3_close.php';
?>
</body>
</html>