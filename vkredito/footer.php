<script>
// onbeforeunload = function(){ 
// 	return 'Вы покидаете нас!';
// }
// window.onbeforeunload = function() {
//   return "Данные не сохранены. Точно перейти?";
// };
//window.onunload = function() { 

    //  var url = "https://vkredito.ru/addnew/?send=true&display=0&referer=https%3A%2F%2Fvkredito.ru%2F&id=&step=5&ad_id=4&fingerprint=4bd0fabe60cfc05a0bcbfcceac4752ff&amount=15000&period=21&f=%D0%98%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%B0&i=%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D0%B8%D0%B9&o=%D0%98%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%BD%D0%B0&gender=0&birth_dd=0&birth_mm=0&birth_yyyy=0&birthdate=06%2F12%2F1988&phone=8+(911)+111+1111&email=df%40mail.ru&delays_type=never&passport=&passport_s=&passport_n=&passport_dd=0&passport_mm=0&passport_yyyy=0&passportdate=&passport_code=&passport_who=&birthplace=&region=0&city=%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80&street=&building=&housing=&flat=&reg_type=1&reg_same=1&work=%D0%A8%D0%A2%D0%90%D0%A2%D0%9D%D0%AB%D0%99+%D0%A1%D0%9E%D0%A2%D0%A0%D0%A3%D0%94%D0%9D%D0%98%D0%9A&work_name=&work_occupation=&work_phone=&work_experience=&work_salary=&work_region=0&work_city=%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80&work_street=&work_house=&work_building=&work_office=";
    // fetch(url)
    // .then(data => data.text())
    // .then((text) => { 
    // }).catch(function (error) {
    //     console.log('request failed', error)
    // })
//};
</script>

</div><?php $from = '15';
if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall')
{
    if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index') {
        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- vkredito -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="9129421079"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    }
	 if($setting_array['is_mobile'] != 'мобила') {
    echo ' <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="9129421079"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
     }
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="https://top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534156867187" alt="MYTARGET">';
}
?>
<footer>
    <div class="container">
        <div class="row">
         <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') { ?>
            <div class="col-md-2 col-sm-4 col-xs-12"> 
         <?php } else {?>
             <div class="col-md-2 col-sm-4 hidden-xs"> 
         <?php } ?>
                <img src="/templates/vkredito/assets/img/logo.png" class="logo" alt="logo.png">
            </div>
            <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') { ?>
            <div class="col-md-4 col-sm-4 col-xs-12 spec_footer4">
                <div style="font-size: 12px;">
                    <p>Сервис по подбору выгодных онлайн займов находящийся по адресу
                        <br>Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                        <br><a href="mailto:support@vkredito.ru" target="_blank">support@vkredito.ru</a>
                        <span class="hidden-xs hidden-sm"> | +7(495) 006 19 61</span>
                    </p>
                </div>
            </div>
            <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                <p style="font-size:12px">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная
                    процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости
                    займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят
                    11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае
                    своевременного погашения.
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001.</p>
            </div>
            <?php } else { ?>
                 <div class="col-md-10 col-xs-12">
                     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- vkredito -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4970738258373085"
                        data-ad-slot="9129421079"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            <?php } ?>
            <div class="col-sm-12 col-xs-12">
                <hr/>
                <?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') { 
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
    require 'templates/vkredito/assets/js/main.js'; 

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') { ?>
    var amount = 15000;
    var day = 10;
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
            $('.current_amount').text(String(amount).split(/(?=(?:\d{3})+$)/).join(' '));
            $('.current_percent').text(percent);
            $('.current_summ').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' '));
            $('#amount').val(amount);

            var slider9 = $('.amount').data('ionRangeSlider');

            if (slider9.result.from_value <= 10000) {
                $('#period').val('7');
                $('#period2').val('От 61 до 130 дней');
            } else if (slider9.result.from_value <= 15000) {
                $('#period').val('14');
                $('#period2').val('От 61 до 130 дней');
            } else if (slider9.result.from_value <= 20000) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
            } else if (slider9.result.from_value <= 30000) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
            } else if (slider9.result.from_value <= 50000) {
                $('#period').val('30');
                $('#period2').val('От 130 до 250 дней');
            } else {
                $('#period').val('30');
                $('#period2').val('От 250 до 365 дней');
            }
            $('#form_slrd').val(slider9.result.from);
        };
    $(".amount").ionRangeSlider({
        postfix: ' Р',
        min: 1000,
        max: 100000,
        prettify_enabled: true,
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

                $('.srok').text($("#period2").val());
                amount = range3.from_value;  

                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
                updateComm();
            }
        }); 
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?>
        $('.period').ionRangeSlider({
            min: 1,
            max: 30,
            from: <?php echo empty($_POST['period'])? 10 : $_POST['period']; ?>,
            postfix: ' дней',
            onChange: function (range) {
                day = range.from;
                updateComm();
            }
        });
        var slider = $('.amount').data('ionRangeSlider');
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
            $('.srok').text($('#period2').val());
            updateComm();
        }, 50); 
        traffic("vkredito.ru",0);
<?php } ?>
$('.docs, .info').click(function () {
    var href = $(this).attr("href");
    var hash = href.substr(href.indexOf("#"));
    $('.collapse').collapse('hide');
    $(hash + '.collapse').collapse('show');
    $('html, body').animate({
        scrollTop: $($(hash)).offset().top - 100
    }, 1000);
});
<?php }
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";
    echo 'traffic("vkredito.ru",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("vkredito.ru",9);'; 
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
    include('mailru.php');
    require 'templates/common/new2/php/modal3_close.php';
?>
</body>
</html>