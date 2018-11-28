</div>
<div class="buffer"></div> 
<?php $from = '15';
if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3')
{
    if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index') 
    {
	    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- dengimo -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="1070967656"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
    echo '<!-- Yandex.RTB R-A-232716-7 mobile -->
    <div id="yandex_rtb_R-A-232716-7"></div>
    <!-- Yandex.RTB R-A-232716-8 desktop -->
    <div id="yandex_rtb_R-A-232716-8"></div>';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="https://top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534156936666" alt="mypixel">';
}
?>
<style>
.black {
    color: #000;
    font-size: 12px;
}
</style>
<footer>
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
           
            <?php if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') { ?>
             <div class="col-md-3 col-sm-3 hidden-xs"> 
                <img src="/templates/dengimo/assets/img/logo.png" class="logo logo-spec" alt="logo-footer.png">
            <?php } else { ?>
             <div class="col-md-3 col-sm-3 col-xs-12"> 
                <img src="/templates/dengimo/assets/img/logo-footer.png" class="logo logo-spec" alt="logo-footer.png">
            <?php } ?>
            </div>
            <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') { ?>
            <div class="col-md-4 col-sm-4 col-xs-12 spec_footer4">
                <p class="footer-text">
                    Сервис по подбору выгодных онлайн займов находящийся по адресу:
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                    <br/>email: <a href="mailto:support@dengimo.ru" target="_blank">support@dengimo.ru</a> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                </p>
            </div>
            <div class="gut col-md-5 col-sm-5 col-xs-12  hidden-xs hidden-sm spec_footer5">
                <p style="font-size: 12px">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001.</p>
            </div>
                <?php } else {?>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- dengimo -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-4970738258373085"
                    data-ad-slot="1070967656"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                 </div>
             <?php } ?>
            <div class="col-sm-12">
               
                <?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') { ?>
                 <hr/>
                <!-- Yandex.RTB R-A-232716-7 mobile -->
                <div id="yandex_rtb_R-A-232716-7"></div>
                <!-- Yandex.RTB R-A-232716-8 desktop -->
                <div id="yandex_rtb_R-A-232716-8"></div>
                <hr/>
                <div class="col-sm-12">
                    <p class="black">
                        Сервис по подбору выгодных онлайн займов находящийся по адресу:
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 email: support@dengimo.ru <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                    </p>
                </div>
                <?php } ?>
                <hr/>
                <?php if ($this->uri->segment(1) != 'lk' &&  $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'form') { ?> 
                 <?php } ?>
            </div>
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
    require 'templates/dengimo/assets/js/main.js'; 

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') { ?>
    var amount = 20000;
    var day = 15;
    var percent = 1.3;
    var updateComm = function () {
		if (amount <= 7000) {
			per = 97;
            $('#period').val('7');
			//attr = 'Автоматическое <br>одобрение';
			color = 'green';
            d = 'От 61 до 100 <br class="hidden-xs"/> дней';
            percent = 1.3;
			comm1 = Math.ceil((amount/100)*percent)*day;
			comm2 = 0;
		}
		else if (amount <= 15000) {
			per = 94;
            $('#period').val('14');
			//attr = 'Может понадобиться <br>паспорт';
			color = 'green';
            d = 'От 100 до 130 <br class="hidden-xs"/> дней';
            percent = 1.3;
			comm1 = Math.ceil((amount/100)*percent)*day;
			comm2 = 0;
		}
		else if (amount <= 30000) {
            per = 84;
            $('#period').val('14');
			//attr = 'Нужен только <br>паспорт';
			color = 'green';
            d = 'От 130 до 200 <br class="hidden-xs"/> дней';
            percent = 1.3;
			comm1 = Math.ceil((amount/100)*percent)*day;
			comm2 = 0;
		}
		else if (amount <= 50000) {
			per = 72;
            $('#period').val('30');
			//attr = 'Может понадобиться подтверждение места работы';
			color = 'orange';
            d = 'От 200 до 250 <br class="hidden-xs"/> дней';
            percent=0.2;
			comm1 = 390*day;
			comm2 = Math.ceil(((amount-30000)/100)*percent)*day;
		}
		else {
			per = 64;
                        $('#period').val('30');
			//attr = 'Может понадобиться справка о доходах (или под залог)';
			color = 'red';
            d = 'От 250 до 365 <br class="hidden-xs"/> дней';
            percent=0.2;
			comm1 = 390*day;
			comm2 = Math.ceil(((amount-30000)/100)*percent)*day;
		}
		comm = comm1 + comm2;
		summ = amount + comm;
        $('.comm').html(comm+'<i class="fa fa-rub" aria-hidden="true"></i>');
		$('.perc').html(percent+'<i class="fa fa-percent" aria-hidden="true"></i>');
        $('.sum').html(String(summ).split(/(?=(?:\d{3})+$)/).join(' ')+'<i class="fa fa-rub" aria-hidden="true"></i>');
        $('.d').html(d);
		$('.current_amount').text(String(amount).split(/(?=(?:\d{3})+$)/).join(' '));
		$('.percent_rate').text(per + '%');
	};
    $(".amount").ionRangeSlider({
        min: 1000,
		max: 100000,
        step: 1000,
        postfix: '',
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
                var percent = 0;
                var attr = '';
                var color = '';
                amount = range3.from_value;
                updateComm();
                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
            }
        });
        $('.amount2').ionRangeSlider({
            values: [1000, 2000, 3000, 4000, 5000,6000,7000,8000,9000,10000,11000,12000,13000,14000,15000,20000,25000,30000,40000,50000,80000,100000],
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
                }
                echo $from; 
            }
            elseif($this->input->post('form_slrd') == '') echo '15'; else echo $this->input->post('form_slrd'); ?>,
            onChange:function(range){
                if (range.from_value <= 10000) {
                    $('#period').val('7'); 
                }
                else if (range.from_value <= 15000) {
                    $('#period').val('14'); 
                }
                else if (range.from_value <= 20000) {
                    $('#period').val('21'); 
                }
                else if (range.from_value <= 30000) {
                    $('#period').val('21'); 
                }
                else if (range.from_value <= 50000) {
                    $('#period').val('30'); 
                }
                else {
                    $('#period').val('30'); 
                }
                $("#amount").val(range.from_value);
                $('#form_slrd').val(range.from);
                $("#period2").val(range.from_value);
        }
        });
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {
            echo '
                $(\'#carousel-index\').on(\'slide.bs.carousel\', function (e) {
                    $(\'.carousel-super\').removeClass(\'active\');
                    $(\'.carousel-super[data-slide="\' + e.relatedTarget.id + \'"]\').addClass(\'active\');
                });';
        ?>
        var slider = $('.amount').data('ionRangeSlider');
        var slider2 = $('.amount2').data('ionRangeSlider');
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
            slider2.update({
                from: n
            });


            if (slider.result.from_value <= 10000) {
                $('#period').val('7'); 
			}
			else if (slider.result.from_value <= 15000) {
                $('#period').val('14'); 
			}
			else if (slider.result.from_value <= 20000) {
                $('#period').val('21'); 
			}
			else if (slider.result.from_value <= 30000) {
                $('#period').val('21'); 
			}
			else if (slider.result.from_value <= 50000) {
                $('#period').val('30'); 
			}
			else {
                $('#period').val('30'); 
            }

            $("#amount").val(slider.result.from_value);
            $('#form_slrd').val(slider.result.from);
            $("#amount").val(slider2.result.from_value);
            $("#period2").val(slider.result.from_value);
            $("#period2").val(slider2.result.from_value);
            $('#form_slrd').val(slider2.result.from);
            amount = slider.result.from_value;

            updateComm();
        }, 50); 
        traffic("dengimo.ru",0);
<?php }
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";      
    echo 'traffic("dengimo.ru",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("dengimo.ru",9);'; 
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
        <script >
        /* <![CDATA[ */
        var google_conversion_id = 829599728;
        var google_conversion_label = "0mQrCM_Bi3gQ8N_KiwM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script   
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/829599728/?label=0mQrCM_Bi3gQ8N_KiwM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>';?>
        <!-- Google Code for  
        &#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103;(&#1041;&#1077;&#1079;  
        &#1044;&#1054;&#1048;) Conversion Page -->
        <script >
        /* <![CDATA[ */
        var google_conversion_id = 854183902;
        var google_conversion_label = "J3xWCOHSrHgQ3p-nlwM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script   
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/854183902/?label=J3xWCOHSrHgQ3p-nlwM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript> 
<?php } else {
    echo '<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?159",t.onload=function(){VK.Retargeting.Init("VK-RTRG-308478-a8mPU"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-308478-a8mPU" style="position:fixed; left:-999px;" alt=""/></noscript>';
}
?>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3052627", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
(function (d, w, id) {
if (d.getElementById(id)) return;
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3052627;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Rating@Mail.ru counter dynamic remarketing appendix -->
<script type="text/javascript">
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