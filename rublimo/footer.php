<?php $from = '15';
if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3')
{
    if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index') {
        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- rublimo --> 
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="8065296007"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
	
    echo '<!-- Yandex.RTB R-A-244327-1 mobile -->
    <div id="yandex_rtb_R-A-244327-1"></div>
    <!-- Yandex.RTB R-A-244327-2 desktop -->
    <div id="yandex_rtb_R-A-244327-2"></div> ';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="https://top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534155967818" alt="MYTARGET">';
}
?>
<footer>
    <div class="container">
        <div class="row">
            <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') { ?>
            <div class="col-md-2 col-xs-12"> 
            <?php } else { ?>
             <div class="col-md-2 hidden-xs"> 
             <?php }  ?>
                <img src="/templates/rublimo/assets/img/logo-footer.png" alt="logo" class="logo">
           
            </div>
            <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') { ?>
            <div class="col-md-4 col-xs-12 spec_footer4">
                <p class="gut font10">
                    «RUBLIMO» - сервис по подбору выгодных онлайн займов находящийся по адресу: Россия, Ленинградская обл. г. Санкт-Петербург,
                    ул. Осипенко, 12, оф 201 email:
                    <a href="mailto:support@rublimo.ru" target="_blank">support@rublimo.ru</a>
                    <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                </p>
            </div>
            <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                <p class="gut font10">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная
                    процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости
                    займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят
                    11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае
                    своевременного погашения. <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</p>
            </div>
            <?php } else { ?>
            <div class="col-md-10 col-xs-12">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- rublimo --> 
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4970738258373085"
                        data-ad-slot="8065296007"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
            </div>
            <?php } ?>
            <div class="col-sm-12">
                <hr/>
                <?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') { 
                    echo '<!-- Yandex.RTB R-A-244327-1 mobile -->
                    <div id="yandex_rtb_R-A-244327-1"></div>
                    <!-- Yandex.RTB R-A-244327-2 desktop -->
                    <div id="yandex_rtb_R-A-244327-2"></div><hr/>';
                } ?>
                <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'form') { ?>

                <?php } ?>
            </div>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
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
    require 'templates/rublimo/assets/js/main.js'; 

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') { ?>
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
        var amount = 15000;
        var day = 10;
        $(document).ready(function () {
            $("#dg-container").gallery(); 
        }); 

        $(".amount").ionRangeSlider({ 
        prettify_enabled: true,
        grid: false,
        grid_num: 1,
        hide_min_max: false,
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
        prettify: function (range) {
            var n = range.toString();
            return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + ' ');
        },
        onChange: function (range3) {
            var d = "";
            if (range3.from_value <= 10000) {
                $("#period").val("7");
                $("#period2").val("От 61 до 130 дней");
                d = "От 61 до 130 дней";
                $('#percent').val('95');
            } else if (range3.from_value <= 15000) {
                $("#period").val("14");
                $("#period2").val("От 61 до 130 дней");
                d = "От 61 до 130 дней";
                $('#percent').val('95');
            } else if (range3.from_value <= 20000) {
                $("#period").val("21");
                $("#period2").val("От 61 до 130 дней");
                d = "От 61 до 130 дней";
                $('#percent').val('95');
            } else if (range3.from_value <= 30000) {
                $("#period").val("21");
                $("#period2").val("От 61 до 130 дней");
                d = "От 61 до 130 дней";
                $('#percent').val('85');
            } else if (range3.from_value <= 50000) {
                $("#period").val("30");
                $("#period2").val("От 130 до 250 дней");
                d = "От 130 до 250 дней";
                $('#percent').val('77');
            } else  if (range3.from_value <= 200000 && range3.from_value > 50000) {
                $("#period").val("30");
                $("#period2").val("От 250 до 365 дней");
                d = "От 250 до 365 дней";
                $('#percent').val('65');
            } else  if (range3.from_value <= 500000 && range3.from_value > 200000) {
                $("#period").val("30");
                $("#period2").val("От 1 до 3 лет");
                d = "От 1 до 3 лет";
                $('#percent').val('58');
            } else {
                $("#period").val("30");
                $("#period2").val("От 1 до 5 лет");
                d = "От 1 до 5 лет";
                $('#percent').val('52');
            }

            $('.d').text(d);
            $('.a').text(range3.from_value + 'P');
            $('.results tr').each(function (indx, element) {
                if ($(element).data('amount') < range3.from) $(element).hide();
                else $(element).show();
            });

            amount = range3.from_value;
            updateComm();

            $("#amount").val(range3.from_value);
            $("#form_slrd").val(range3.from);
        }
    }); 
        $(".amount2").ionRangeSlider({ 
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
                var d = "";
                 if (range3.from_value <= 10000) {
                    $("#period").val("7");
                    $("#period2").val("От 61 до 130 дней");
                    d = "От 61 до 130 дней";
                    $('#percent').val('95');
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней");
                    d = "От 61 до 130 дней";
                    $('#percent').val('95');
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    d = "От 61 до 130 дней";
                    $('#percent').val('95');
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    d = "От 61 до 130 дней";
                    $('#percent').val('85');
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней");
                    d = "От 130 до 250 дней";
                    $('#percent').val('77');
                } else  if (range3.from_value <= 200000 && range3.from_value > 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                    d = "От 250 до 365 дней";
                    $('#percent').val('65');
                } else  if (range3.from_value <= 500000 && range3.from_value > 200000) {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 3 лет");
                    d = "От 1 до 3 лет";
                    $('#percent').val('58');
                } else {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 5 лет");
                    d = "От 1 до 5 лет";
                    $('#percent').val('52');
                }

                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
            }
        }); 
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?>
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

             $('.results tr').each(function (indx, element) {
                if ($(element).data('amount') < slider.result.from) $(element).hide();
                else $(element).show();
            });

            $('.a').text(String(slider.result.from_value).split(/(?=(?:\d{3})+$)/).join(' ') +
                'P');
            amount = slider.result.from_value;
            updateComm();

        }, 50); 
        traffic("rublimo.ru".ru,0);
<?php }
}
elseif($this->uri->segment(1) == 'faq')
{
    echo "
    $(document).ready(function(){
        $('.panel-title a').click(function(){
        $('.panel-heading').removeClass('green');
        if ($(this).hasClass('collapsed')) $(this).parent().addClass('green');
        });
    });";
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";      
    echo 'traffic("rublimo.ru",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("rublimo.ru",9);'; 
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
        &#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080;  
        (&#1073;&#1077;&#1079; &#1044;&#1086;&#1080;) Conversion Page -->
        <script>
        /* <![CDATA[ */
        var google_conversion_id = 832752826;
        var google_conversion_label = "rzldCPv3u3gQupmLjQM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script  
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/832752826/?label=rzldCPv3u3gQupmLjQM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>'; 
    }
?>
<!-- Rating@Mail.ru counter -->
<script>
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3052549", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
(function (d, w, id) {
if (d.getElementById(id)) return;
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3052549;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
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
<style>
/* -------------------------------- 

Modules - reusable parts of our design

-------------------------------- */
.cd-buttons {
 text-align: center !important; 
  padding: 0;
}
.no_text_decoration {
  text-decoration: none !important;
  cursor: pointer;
  font-weight: 700;
}
#modal_agree:hover {
  color: #000;
}
.img-replace {
  /* replace text with an image */
  display: inline-block;
  overflow: hidden;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
}

/* -------------------------------- 

xnugget info 

-------------------------------- */
.cd-nugget-info {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 50px;
  line-height: 50px;
  bottom: 0;
  left: 0;
}
.cd-nugget-info a {
  position: relative;
  font-size: 14px;
  color: #5e6e8d;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}
.no-touch .cd-nugget-info a:hover {
  opacity: .8;
}
.cd-nugget-info span {
  vertical-align: middle;
  display: inline-block;
}
.cd-nugget-info span svg {
  display: block;
}
.cd-nugget-info .cd-nugget-info-arrow {
  fill: #5e6e8d;
}

/* -------------------------------- 

Main components 

-------------------------------- */
header {
  height: 200px;
  line-height: 200px;
  text-align: center;
  background-color: #5e6e8d;
  color: #FFF;
}
header h1 {
  font-size: 20px;
  font-size: 1.25rem;
}

.cd-popup-trigger {
  /* display: block;
  width: 170px;
  height: 50px;
  line-height: 50px;
  margin: 3em auto;
  text-align: center;
  color: #FFF;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 50em;
  background: #35a785;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07); */
}
@media only screen and (min-width: 1170px) {
  .cd-popup-trigger {
    margin: 6em auto;
  }
}

/* -------------------------------- 

xpopup 

-------------------------------- */
.cd-popup {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
}
.cd-popup.is-visible {
  z-index: 999;
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}

.cd-popup-container {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: 4em auto;
  background: #FFF;
  border-radius: .25em .25em .4em .4em;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-40px);
  -moz-transform: translateY(-40px);
  -ms-transform: translateY(-40px);
  -o-transform: translateY(-40px);
  transform: translateY(-40px);
  /* Force Hardware Acceleration in WebKit */
  -webkit-backface-visibility: hidden;
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.cd-popup-container p {
  padding: 10px 0 20px 0;
  color: #000;
  line-height: 25px;
  font-weight: 700;
}
.cd-popup-container .cd-buttons:after {
  content: "";
  display: table;
  clear: both;
}
.cd-popup-container .cd-buttons li {
  float: left;
  width: 50%;
  list-style: none;
}
.cd-popup-container .cd-buttons a {
  display: block;
  height: 60px;
  line-height: 60px;
  text-transform: uppercase;
  color: #FFF;
  -webkit-transition: background-color 0.2s;
  -moz-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.cd-popup-container .cd-buttons li:first-child a {
  background: #fc7169;
  border-radius: 0 0 0 .25em;
}
.no-touch .cd-popup-container .cd-buttons li:first-child a:hover {
  background-color: #fc8982;
}
.cd-popup-container .cd-buttons li:last-child a {
  background: #b6bece;
  border-radius: 0 0 .25em 0;
}
.no-touch .cd-popup-container .cd-buttons li:last-child a:hover {
  background-color: #c5ccd8;
}
.cd-popup-container .cd-popup-close {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 30px;
  height: 30px;
}
.cd-popup-container .cd-popup-close::before, .cd-popup-container .cd-popup-close::after {
  content: '';
  position: absolute;
  top: 12px;
  width: 14px;
  height: 3px;
  background-color: #8f9cb5;
}
.cd-popup-container .cd-popup-close::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 8px;
}
.cd-popup-container .cd-popup-close::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 8px;
}
.is-visible .cd-popup-container {
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
}
@media only screen and (min-width: 1170px) {
  .cd-popup-container {
    margin: 8em auto;
  }
}
.img-confirm {
  width: 100%;
  padding: 10px 20px;
  margin-top: 20px;
}
</style>
<a  class="cd-popup-trigger"></a>
<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
    <img class="img-confirm" src="https://bzaim5.ru/templates/common/img/offers/webbankir.png">
    <p>Получите 15 000 <i class="fa fa-rub"></i> уже через 15 минут:<br>Основная ставка	0%, возраст	от 19 до 100 <i class="fa fa-user"></i></p>
		<ul class="cd-buttons"  class="text-center">
			<li><a id="modal_agree" class="no_text_decoration" href="https://pxl.leads.su/click/72c0cb6b29fa68ebdaa08ecc50e1cbfa?aff_sub1=bzaim5.ru&aff_sub2=bzaim5.ru&aff_sub3=bzaim5.ru&aff_sub4=bzaim5.ru" target="_blank">Хорошо</a></li>
			<li><a id="modal_notagree" class="no_text_decoration" >Позже</a></li>
		</ul>
		<a href="#0" class="cd-popup-close img-replace">Close</a>
	</div>
</div>
<script>
$('#modal_notagree').on('click', function(){
    $('.cd-popup').removeClass('is-visible');
});
//open popup
$('.cd-popup-trigger').on('click', function(event){
    event.preventDefault();
    $('.cd-popup').addClass('is-visible');
});

//close popup
$('.cd-popup').on('click', function(event){
    if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
        event.preventDefault();
        $(this).removeClass('is-visible');
    }
});
//close popup when clicking the esc keyboard button
$(document).keyup(function(event){
    if(event.which=='27'){
        $('.cd-popup').removeClass('is-visible');
    }
}); 
document.querySelector('a#modal_agree').href = 'https://pxl.leads.su/click/72c0cb6b29fa68ebdaa08ecc50e1cbfa?aff_sub1='+document.location.host+'&aff_sub2=popup10sec&aff_sub3=кнопка12&aff_sub4='+document.location.host;
function AddMinutesToDate(date, minutes) {
    return new Date(date.getTime() + minutes*60000);
}
function DateFormat(date){
    var hours = date.getHours();
    var minutes = date.getMinutes();
    minutes = minutes < 10 ? '0'+ minutes : minutes;
    var strTime =hours + ':' + minutes;
    return strTime;
}
$(document).ready(function() {
    $(document).mousemove(function(e) 
    {
        if(e.pageY <= 5)
        {
            $('.cd-popup-trigger').click();
            //alert('Вы в одном шаге от займа! Получите займ уже в '+ DateFormat(AddMinutesToDate(new Date(),15))+ '. Какая сумма вам нужна?');
            //document.location.href = 'https://pxl.leads.su/click/762f05fbbdde479f81315e58b8557785?source=Vkredito';
        }
    });
    setTimeout(function () {
      hideBlock();
    }, 6000);
});
</script>
</body>
</html>