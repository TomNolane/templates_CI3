<?php $from = '15';
if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall')
{
    if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index') 
    {
        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- edenga -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="3535572793"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
    echo ' <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-4970738258373085"
                    data-ad-slot="3535572793"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="https://top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534156836350" alt="MYTARGET">';
}
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 hidden-xs">
                 <img src="/templates/edenga/assets/img/logo.png" class="logo logo-spec"> 
            </div>
            <?php if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3' || $this->uri->segment(1) == 'offerwall') {  ?>
             <div class="col-md-10 col-xs-12">
                 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- edenga -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-4970738258373085"
                    data-ad-slot="3535572793"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div> 
            <?php } if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') : ?>
            <div class="col-md-3 col-xs-12 spec_footer4">
                Cервис по подбору выгодных онлайн займов находящийся по адресу Россия, Новосибирская область г. Новосибирск, ул. Маршала Покрышкина, 12, оф 201
                Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 <a href="mailto:support@edenga.ru" target="_blank">support@edenga.ru</a> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
            </div>
            <div class="col-md-7 hidden-xs hidden-sm spec_footer5">
                Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001
            </div> 
            <?php endif; ?>
            <div class="col-sm-12">
                <hr/>
                <?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3' || $this->uri->segment(1) == 'offerwall') {  
                } ?>
            </div> 
        </div>
        <div class="clearfix">&nbsp;</div>
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
    require 'templates/edenga/assets/js/main.js'; 

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') { ?> 
        var amount = 15000;
        var day = 10;
        var comm1 = 0;
        var comm2 = 0;
        var percent = 0;
        var day_comment = 'До 130 дней';
<?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?> 
        $('#ionRangeSlider').ionRangeSlider({
            min: 65,
            max: 365,
            from: <?php echo empty($_POST['period'])? 10 : $_POST['period']; ?>,
            postfix: ' сут.',
            from_fixed: true,
            onChange:function(range){
                day = range.from;
                updateComm();
            }
        });
        var period = $("#ionRangeSlider").data("ionRangeSlider");
    <?php } ?>
        var updateComm = function () 
        {
            <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?> 
            amount = $('#amount').val();
            if(amount<=30000){
                percent = 1.3;
                comm1 = Math.ceil((amount/100)*percent)*day;
                comm2 = 0;
            }
            if(amount>30000){
                percent=0.2;
                comm1 = 390*day;
                comm2 = Math.ceil(((amount-30000)/100)*percent)*day;
            }

            if (amount <= 7000) 
            { 
                period.update({
                    from: 15
                }); 
                $('#p').val('7');
                $('#period2').val('7'); 
                perc = 97;
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 61 дня';
                day=1;
            }
            else if (amount <= 15000) { 
                period.update({
                    from: 30
                }); 
                $('#p').val('14');
                $('#period2').val('14');
                perc = 94;
                attr = 'Может понадобиться паспорт';
                color = 'green';
                day_comment = 'До 130 дней';
                day=15;
            }
            else if (amount <= 30000) { 
                period.update({
                    from: 130
                }); 
                $('#p').val('21');
                $('#period2').val('21');
                perc = 84;
                attr = 'Нужен только паспорт';
                color = 'orange';
                day_comment = 'До 130 дней';
                day=15;
            }
            else if (amount <= 50000) { 
                period.update({
                    from: 230
                }); 
                $('#p').val('30');
                $('#period2').val('30');
                perc = 72;
                attr = 'Нужна справка о доходах';
                color = 'orange';
                day_comment = 'До 230 дней';
                day=15;
            }
            else { 
                period.update({
                    from: 365
                }); 
                $('#p').val('30');
                $('#period2').val('30');
                perc = 64;
                attr = 'Нужна справка о доходах';
                color = 'red';
                day_comment = 'До 365 дней';
                day=30;
            }
            comm = comm1 + comm2;
            summ = parseInt(amount) + comm;
            $('.perc').text(percent);
            $('.am').text(amount);
            $('.comm').text(comm);
            $('.sum').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' '));

            <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') {  ?>
            var slider3 = $('.amount').data('ionRangeSlider');
            $('#spec_ind2').val(slider3.result.from_value);
            $('#spec_ind').val(slider3.result.from_value); 
            $('#form_slrd').val(slider3.result.from);

            $('.current_amount').text(String(slider3.result.from_value).split(/(?=(?:\d{3})+$)/).join(' ')); 
            $('.comment').text(attr);
            $('.current_period').text(day_comment); 
			$('.results tr').each(function(indx, element){
				if ($(element).data('amount') < slider3.result.from_value) $(element).hide();
				else $(element).show();
			});

            $('.current-button-main.am').text(amount);
            $('.current-button-main.current_period').text(day_comment);
            $('.current-button-main.comm').text(comm);
            $('.current-button-main.sum').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' '));
            $('.current-button-main.percent_rate').text(percent+'%');
            $('.current-button-main.percent_rate2').text(percent+'%');
            <?php } ?>
        <?php } ?>
        }

        $("#spec_ind").ionRangeSlider({
        hide_min_max: true,
        postfix: ' руб.',
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
                var percent = 0;
                var attr = '';
                var color = '';

                 if (range3.from_value <= 10000) {
                    $("#period").val("7");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?>
                    period.update({
                        from: 61
                    });
                <?php } ?>
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                    <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?>
                        period.update({
                            from: 130
                        });
                    <?php } ?>
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                    <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?>
                        period.update({
                            from: 130
                        });
                    <?php } ?>
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('85');
                    <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?>
                        period.update({
                            from: 130
                        });
                    <?php } ?>
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней");
                    $('#percent').val('77');
                    <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?>
                        period.update({
                            from: 250
                        });
                    <?php } ?>
                } else  if (range3.from_value <= 200000 && range3.from_value > 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                    $('#percent').val('65');
                    <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') { ?>
                        period.update({
                            from: 365
                        });
                    <?php } ?>
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
                updateComm();
            }
        }); 
        $("#spec_ind2").ionRangeSlider({
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
                var percent = 0;
                var attr = '';
                var color = '';

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

                $('#spec_ind2').val(range3.from_value);
                $('#spec_ind').val(range3.from_value); 
                updateComm();
            }
        }); 
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?>
        $(document).ready(function () {
            $("#dg-container").gallery();
        });
        var slider = $('#spec_ind').data('ionRangeSlider');
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
            period.update({
                from: 61
            });
            } 
            else if (n <= 14 && n > 9) 
            {
                $('#period').val('14');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('95');
                period.update({
                    from: 130
                });
            } else if (n <= 15 && n > 14) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('95');
                period.update({
                    from: 130
                });
            } else if (n <= 17 && n > 15) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('85');
                period.update({
                    from: 130
                });
            } else if (n <= 19 && n > 17) {
                $('#period').val('30');
                $('#period2').val('От 130 до 250 дней');
                $('#percent').val('77');
                period.update({
                    from: 250
                });
            } else if (n > 19) {
                $('#period').val('30');
                $('#period2').val('От 250 до 365 дней');
                $('#percent').val('65');
                period.update({
                    from: 365
                });
            }
            $('#amount').val(slider.result.from_value);
            $("#form_slrd").val(slider.result.from);
            updateComm();
        }, 50); 
        traffic("edenga.ru",0);
<?php }
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";      
    echo 'traffic("edenga.ru",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("edenga.ru",9);'; 
}
elseif($this->uri->segment(1) == 'reviews')
{
    echo "$(document).ready(function() {
        $('#owl-demo').owlCarousel({
            autoPlay: 5000, //Set AutoPlay to 3 seconds
            items : 2,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            navigation : false
        });
      });"; 
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
        &#1056;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1072;&#1094;&#1080;&#1080;  
        Conversion Page -->
        <script>
        /* <![CDATA[ */
        var google_conversion_id = 845982081;
        var google_conversion_label = "qy42CPmIk3YQgdOykwM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script  
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/845982081/?label=qy42CPmIk3YQgdOykwM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>'; 
    }
    else {
        echo '<script>!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?159",t.onload=function(){VK.Retargeting.Init("VK-RTRG-308478-a8mPU"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-308478-a8mPU" style="position:fixed; left:-999px;" alt=""/></noscript>';
    }
?>
<!-- Rating@Mail.ru counter -->
<script>
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3052559", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
(function (d, w, id) {
if (d.getElementById(id)) return;
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3052559;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
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