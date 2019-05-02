<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php $from = '4';

    if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'offerwall' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3')
    {
        echo '
        <!-- zaimomir.su -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="3043058324"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
?>

<footer class="ex-main-footer ex-sticky-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="ex-foot-logo">
                    <a href="/"><img src="/templates/zaimomirsu/assets/img/logo-footer.png" alt="logo-footer.png"></a>
                </div>
            </div>
            <div class="col-lg-9">
                 <?php
                if($this->uri->segment(1) == 'offerwall' || $this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
                {
                    echo '
                    <!-- zaimomir.su -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4970738258373085"
                        data-ad-slot="3043058324"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>';
                } else {
                ?>
                <p>Максимальная процентная ставка по займу составляет 2% в день<br>
                   Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает.
                    Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Выдается на срок от 61 дня до 1 года.
                    ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@zaimomir.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438. 
                </p>
                <?php } ?>
            </div>
        </div>
    </div>
</footer> 
<!-- [if lt IE 10]>
<script  src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></footer>
<![endif] --> 
<!-- common JS --> 
<script>
<?php 
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';

if($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') 
{ 
    //require 'templates/zaimomirsu/assets/js/settings_form.js';
    require 'templates/zaimomirsu/assets/js/loanCalculator.js';
    if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') {
        require 'templates/common/new2/js/for_index.js';
    } 
?> 
 
    $(document).ready(function () 
    {
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
                case '600': $from = '0' ; break;
                case '700': $from = '1' ; break;
                case '800': $from = '2' ; break;
                case '900': $from = '3' ; break;
                case '1000': $from = '4' ; break;
                case '1100': $from = '5' ; break;
                case '1200': $from = '6' ; break;
                case '1300': $from = '7' ; break;
                case '1400': $from = '8' ; break;
                case '1500': $from = '9' ; break;
                case '2000': $from = '10' ; break;
                case '2500': $from = '11' ; break;
                case '3000': $from = '12' ; break;
                case '4000': $from = '13' ; break;
                case '5000': $from = '14' ; break;
                case '6000': $from = '15' ; break;
                case '7000': $from = '16' ; break;
                case '8000': $from = '17' ; break;
                case '9000': $from = '18' ; break;
                case '10000': $from = '19' ; break;
            }
            echo $from; 
        }
        elseif($this->input->post('form_slrd') == '') echo '4'; else echo $this->input->post('form_slrd');
        ?>,
        values: [600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 2000, 2500, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000],
        onFinish: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        }, 
        onLoad: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        },
        onChange: function (range) {

            $('#period').val('4');
            $('#period2').val('3-14 дней');
 
            $('#amount').val(range.from_value);
            $('#form_slrd').val(range.from); 
        },
    }); 
});
 <?php if ($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {  ?> 
$(document).ready(function () {
    var slider3 = $('#rangeSlider').data('ionRangeSlider');
    var slider_plus = true;
    var n = 4;
    var slider_init = setInterval(function () {
        if (slider_plus) {
            n++;
        } else {
            n--;
        }
        
        if (n == 19 && n != <?php echo $from;?>) {
            slider_plus = false;
        }else if (n == <?php echo $from;?> && slider_plus == false) {
            clearInterval(slider_init);
        }else if (n == 19 && n == <?php echo $from;?>) {
            clearInterval(slider_init);
        }

        slider3.update({
            from: n
        });

        $('#form_slrd').val(n);
        $('#amount').val(slider3.result.from_value);

    }, 50);
});
<?php }
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3' || $this->uri->segment(1) == 'offerwall')
{
    echo '$(".ex-offerta-block").hover(function () {
        $(".ex-offerta-block ").removeClass("ex-offerta-active");
        $(this).addClass("ex-offerta-active");
    }); ';
    include "templates/common/new2/js/lk.js";
    echo 'traffic("zaimomir.su",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("zaimomir.su",9);'; 
}
else if($this->uri->segment(1) == 'form')
{ } 
echo "}";
require 'templates/common/new2/js/exeption.js';
?>  
</script>
<?php
 require 'yandexmetrika.php';
 require 'googleanalytics.php';
 require 'google_tag_manager.php';

if ($this->uri->segment(1) == 'form') 
{
    echo "<script>
    $('.ex-calc-zaim').on('click', function () {
        $('.ex-calc-zaim').toggleClass('ex-calc-zaim-open');
        $('.ex-calc-zaim').prev('.ex-calc-block').toggleClass('d-none');
    });</script>";
}

if ($this->uri->segment(1) == 'money') 
{
    echo "<script>
        $('.nav-item').on('click', function () {
            $('.nav-item').removeClass('active');
            $(this).addClass('active');
        });
    </script>";
}
if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{     
    
    echo '<!-- Event snippet for Регистрация conversion page -->
<script>
  gtag(\'event\', \'conversion\', {\'send_to\': \'AW-770053270/F6JfCLmQ7pMBEJapmO8C\'});
</script><!-- Google Code for  
        &#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
        Page -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 816307745;
        var google_conversion_label = "NPAoCJDk4X0QobyfhQM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script type="text/javascript"  
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/816307745/?label=NPAoCJDk4X0QobyfhQM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>
        <!-- Global site tag (gtag.js) - Google Ads: 755948010 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-755948010"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag(\'js\', new Date());
        gtag(\'config\', \'AW-755948010\');
        </script>'; 
}
?>
</body>
</html>