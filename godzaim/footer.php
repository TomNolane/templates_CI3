<?php $from = '15'; $px = '63.974'; 
if(!isset($sum)) 
    $sum = '20000';
    if($this->input->get('amount') != '') 
    {  
        switch($this->input->get('amount'))
        {
            case '1000': $px = '0' ; break;
            case '2000': $px = '4.26493' ; break;
            case '3000': $px = '8.52986' ; break;
            case '4000': $px = '12.7948' ; break;
            case '5000': $px = '17.0597' ; break;
            case '6000': $px = '21.3247' ; break;
            case '7000': $px = '25.5896' ; break;
            case '8000': $px = '29.8545' ; break;
            case '9000': $px = '34.1195' ; break;
            case '10000': $px = '38.3844' ; break;
            case '11000': $px = '42.6493' ; break;
            case '12000': $px = '46.9142' ; break;
            case '13000': $px = '51.1792' ; break;
            case '14000': $px = '55.4441' ; break;
            case '15000': $px = '59.709' ; break;
            case '20000': $px = '63.974' ; break;
            case '25000': $px = '68.2389' ; break;
            case '30000': $px = '72.5038' ; break;
            case '40000': $px = '76.7688' ; break;
            case '50000': $px = '81.0337' ; break;
            case '80000': $px = '85.2986' ; break;
            case '100000': $px = '89.5636' ; break;
        } 
    }
    elseif($this->input->post('amount') != '') 
    {  
        switch($this->input->post('amount'))
        {
            case '1000': $px = '0' ; break;
            case '2000': $px = '4.26493' ; break;
            case '3000': $px = '8.52986' ; break;
            case '4000': $px = '12.7948' ; break;
            case '5000': $px = '17.0597' ; break;
            case '6000': $px = '21.3247' ; break;
            case '7000': $px = '25.5896' ; break;
            case '8000': $px = '29.8545' ; break;
            case '9000': $px = '34.1195' ; break;
            case '10000': $px = '38.3844' ; break;
            case '11000': $px = '42.6493' ; break;
            case '12000': $px = '46.9142' ; break;
            case '13000': $px = '51.1792' ; break;
            case '14000': $px = '55.4441' ; break;
            case '15000': $px = '59.709' ; break;
            case '20000': $px = '63.974' ; break;
            case '25000': $px = '68.2389' ; break;
            case '30000': $px = '72.5038' ; break;
            case '40000': $px = '76.7688' ; break;
            case '50000': $px = '81.0337' ; break;
            case '80000': $px = '85.2986' ; break;
            case '100000': $px = '89.5636' ; break;
        } 
    } 
$px = ($px - 3.5) . '%';
if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3')
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="https://top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534156788691" alt="MYTARGET">';
	echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- godzaim -->
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-4970738258373085"
        data-ad-slot="5116247776"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
    echo '<!-- Yandex.RTB R-A-257495-1 desktop -->
    <div id="yandex_rtb_R-A-257495-1"></div>
    <!-- Yandex.RTB R-A-257495-2 mobile -->
    <div id="yandex_rtb_R-A-257495-2"></div> ';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}?>
    <div class="footer-wrap">
        <div class="footer">
            <br class="hidden-xs hidden-sm">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <img src="/templates/godzaim/assets/img/logo-footer.png" class="logo logo-spec">
                </div>
                <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') { ?>
                <div class="col-md-3 col-md-offset-1 col-xs-12 spec_footer4">
                    <p>
                        Cервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. ул. Осипенко,
                        12, оф 201
                        <a href="mailto:support@godzaim.ru" target="_blank">support@godzaim.ru</a>
                        <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                    </p>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                    <p>
                        Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная
                        ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости
                        займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период
                        составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по
                        ставке 0% в случае своевременного погашения. <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001
                    </p>
                </div>
                <?php } else { ?>
                    <div class="col-md-10 col-xs-12"> 
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- godzaim -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-4970738258373085"
                            data-ad-slot="5116247776"
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
                        echo '<!-- Yandex.RTB R-A-257495-1 desktop -->
                        <div id="yandex_rtb_R-A-257495-1"></div>
                        <!-- Yandex.RTB R-A-257495-2 mobile -->
                        <div id="yandex_rtb_R-A-257495-2"></div><hr/>';
                    } ?>
                    <ul class="list-inline text-center">
                        <li><a href="https://bankmoney.su/category/zajmy/zajm-na-kartu-mgnovenno-kruglosutochno-bez-otkaza/"> Займ на карту мгновенно круглосуточно без отказа &nbsp;&nbsp;</a></li>
                        <li><a href="https://bankmoney.su/category/zajmy/zajmy-onlajn/">&nbsp;&nbsp; Займы онлайн &nbsp;&nbsp;</a></li>
                        <li><a href="https://bankmoney.su/category/zajmy/">&nbsp;&nbsp; Займ &nbsp;&nbsp;</a></li>
                        <li><a href="https://bankmoney.su/category/zajmy/zajm-na-kartu/">&nbsp;&nbsp; Займ на карту &nbsp;&nbsp;</a></li>
                        <li><a href="https://bankmoney.su/category/zajmy/zajmy-onlajn-na-kartu/">&nbsp;&nbsp; Займы онлайн на карту </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif] --> 

<!-- common JS -->
<script>
<?php
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/godzaim/assets/js/main.js';  
    if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') {
?>
        $(".amount").ionRangeSlider({
        min: 1000,
        max: 100000,
        prettify_enabled: true,
        hide_from_to: true,
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
        onStart: function (range3) { 
            $('.irs-single').text('').append("<span>" + <?=$sum;?> + " руб</span>");
            $('.irs-single').css('margin-left', '<?php echo $px; ?>');
            $('.irs-single').css('margin-top', '30');
        },
        onChange: function (range3) { 
            $('.irs-single').text('').append("<span>" + range3.from_value +
                " руб</span>");
            var ff = parseFloat($('.irs-slider.single').css('left').replace('px',
                '')) - 20;
            $('.irs-single').css('margin-left', ff);
            $('.irs-single').css('margin-top', '30');

            var percent = 95;
            var attr = '';
            var color = '';
            var n = range3.from;

            $('.form-sum-value').text(range3.from_value + ' Р');
            $('.calc-period-item').removeClass('active'); 

            if (range3.from_value <= 10000) {
                $("#period").val("7");
                $("#period2").val("От 61 до 130 дней");
                $('#percent').val('95');
                $('#period-1').addClass('active');
                perc = '95';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 130 дней';
                day = 7;
            } else if (range3.from_value <= 15000) {
                $("#period").val("14");
                $("#period2").val("От 61 до 130 дней");
                $('#percent').val('95');
                $('#period-1').addClass('active');
                perc = '95';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 130 дней';
                day = 14;
            } else if (range3.from_value <= 20000) {
                $("#period").val("21");
                $("#period2").val("От 61 до 130 дней");
                $('#percent').val('95');
                $('#period-1').addClass('active');
                perc = '95';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 130 дней';
                day = 21;
            } else if (range3.from_value <= 30000) {
                $("#period").val("21");
                $("#period2").val("От 61 до 130 дней");
                $('#percent').val('85');
                $('#period-1').addClass('active');
                perc = '85';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 130 дней';
                day = 21;
            } else if (range3.from_value <= 50000) {
                $("#period").val("30");
                $("#period2").val("От 130 до 250 дней");
                $('#percent').val('77');
                $('#period-2').addClass('active');
                perc = '77';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'От 200 дней';
                day = 30;
            } else  if (range3.from_value <= 200000 && range3.from_value > 50000) {
                $("#period").val("30");
                $("#period2").val("От 250 до 365 дней");
                $('#percent').val('65');
                $('#period-3').addClass('active');
                perc = '65';
                attr = 'Нужна справка о доходах';
                color = 'red';
                day_comment = 'до 365 дней';
                day = 30;
            } else  if (range3.from_value <= 500000 && range3.from_value > 200000) {
                $("#period").val("30");
                $("#period2").val("От 1 до 3 лет");
                $('#percent').val('58');
                $('#period-3').addClass('active');
                perc = '58';
                attr = 'Нужна справка о доходах';
                color = 'red';
                day_comment = 'до 3 лет';
                day = 30;
            } else {
                $("#period").val("30");
                $("#period2").val("От 1 до 5 лет");
                $('#percent').val('52');
                $('#period-3').addClass('active');
                perc = '52';
                attr = 'Нужна справка о доходах';
                color = 'red';
                day_comment = 'до 5 лет';
                day = 30;
            }

            $('.current_amount').text(String(range3.from_value).split(
                /(?=(?:\d{3})+$)/).join(
                ' '));
            $('.percent_rate').text(perc + '%');
            $('.comment').text(attr);
            $('.current_period').text(day_comment);
            $('.results tr').each(function (indx, element) {
                if ($(element).data('amount') < range3.from_value) $(element)
                    .hide();
                else $(element).show();
            });
            amount = range3.from_value;
            from_ = range3.from;
            $('#from_').val(from_);

            $("#amount").val(range3.from_value);
            $("#form_slrd").val(range3.from);
        }
    }); 
    <?php } if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?> 
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

            $('.irs-single').text('').append("<span>" + slider.result.from_value +
            " руб</span>");
            var ff = parseFloat($('.irs-slider.single').css('left').replace('px', '')) - 20;
            $('.irs-single').css('margin-left', ff);
            $('.irs-single').css('margin-top', '30');

            $('.calc-period-item').removeClass('active');

            if (n <= 9) {
                $('#period').val('7');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('95');
                $('#period-1').addClass('active');
                perc = '95';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 130 дней';
                day = 7;
            } else if (n <= 14 && n > 9) {
                $('#period').val('14');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('95');
                $('#period-1').addClass('active');
                perc = '95';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 130 дней';
                day = 14;
            } else if (n <= 15 && n > 14) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('95');
                $('#period-1').addClass('active');
                perc = '95';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 130 дней';
                day = 21;
            } else if (n <= 17 && n > 15) {
                $('#period').val('21');
                $('#period2').val('От 61 до 130 дней');
                $('#percent').val('85');
                $('#period-1').addClass('active');
                perc = '85';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'До 130 дней';
                day = 21;
            } else if (n <= 19 && n > 17) {
                $('#period').val('30');
                $('#period2').val('От 130 до 250 дней');
                $('#percent').val('77');
                $('#period-2').addClass('active');
                perc = '77';
                attr = 'Автоматическое одобрение';
                color = 'green';
                day_comment = 'От 200 дней';
                day = 30;
            } else if (n > 19) {
                $('#period').val('30');
                $('#period2').val('От 250 до 365 дней');
                $('#percent').val('65');
                $('#period-3').addClass('active');
                perc = '65';
                attr = 'Нужна справка о доходах';
                color = 'red';
                day_comment = 'до 365 дней';
                day = 30;
            }
            $('#amount').val(slider.result.from_value);
            $("#form_slrd").val(slider.result.from);
        }, 50); 

        $('.amount2').ionRangeSlider({ 
            min: 1000,
            max: 100000,
            prettify_enabled: true,
            hide_from_to: true,
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
            onStart: function (range) {
            $('.form-sum-value').text(
                <?php if($this->input->get('amount') != '') { $sum = '20000'; switch($this->input->get('amount')) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!$this->input->post('amount') != '') echo '20000'; else echo $this->input->post('amount');  ?> +
                ' Р'
            );
            $('.irs-single').text('').append("<span>" +
            <?php if($this->input->get('amount') != '') { $sum = '20000'; switch($this->input->get('amount')) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!$this->input->post('amount') != '') echo '20000'; else echo $this->input->post('amount');  ?> +" руб</span>");
            <?php $px = ($px - 3.5) . '%';?>
            $('.irs-single').css({
                'margin-left': '<?php echo $px; ?>'
            });
            $('.irs-single').css('margin-top', '30');
            },
            onChange: function (range) {
                $('.form-sum-value').text(range.from_value + ' Р');

                $('.irs-single').text('').append("<span>" + range.from_value +
                    " руб</span>");
                var ff = parseFloat($('.irs-slider.single').css('left').replace('px',
                    '')) - 12;
                $('.irs-single').css('margin-left', ff);
                $('.irs-single').css('margin-top', '30');

                if (range.from_value <= 10000) {
                    $('#period').val('7');
                    $('#period2').val('От 61 до 130 дней');
                    $('#period-1').addClass('active');
                    perc = '95';
                    attr = 'Автоматическое одобрение';
                    color = 'green';
                    day_comment = 'До 130 дней';
                    day = 7;
                } else if (range.from_value <= 15000) {
                    $('#period').val('14');
                    $('#period2').val('От 61 до 130 дней');
                    $('#period-1').addClass('active');
                    perc = '95';
                    attr = 'Автоматическое одобрение';
                    color = 'green';
                    day_comment = 'До 130 дней';
                    day = 14;
                } else if (range.from_value <= 20000) {
                    $('#period').val('31');
                    $('#period2').val('От 61 до 130 дней');
                    $('#period-1').addClass('active');
                    perc = '95';
                    attr = 'Автоматическое одобрение';
                    color = 'green';
                    day_comment = 'До 130 дней';
                    day = 21;
                } else if (range.from_value <= 30000) {
                    $('#period').val('31');
                    $('#period2').val('От 61 до 130 дней');
                    $('#period-1').addClass('active');
                    perc = '85';
                    attr = 'Автоматическое одобрение';
                    color = 'green';
                    day_comment = 'До 130 дней';
                    day = 21;
                } else if (range.from_value <= 50000) {
                    $('#period').val('130');
                    $('#period2').val('От 130 до 250 дней');
                    $('#period-2').addClass('active');
                    perc = '77';
                    attr = 'Автоматическое одобрение';
                    color = 'green';
                    day_comment = 'От 200 дней';
                    day = 30;
                } else {
                    $('#period').val('180');
                    $('#period2').val('От 250 до 365 дней');
                    $('#period-3').addClass('active');
                    perc = '65';
                    attr = 'Нужна справка о доходах';
                    color = 'red';
                    day_comment = 'до 365 дней';
                    day = 30;
                }
            }
        });
        traffic("godzaim.ru",0);
<?php }
if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";      
    echo 'traffic("godzaim.ru",4);'; 
}
elseif($this->uri->segment(1) == 'reviews')
{
    include "../modules/owl/owl.carousel.js";      
    echo '$("#owl-demo").owlCarousel({
        autoPlay: 5000, //Set AutoPlay to 3 seconds
        items : 2,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        navigation : false
    });';
}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("godzaim.ru",9);'; 
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
            <script>
                /* <![CDATA[ */
                var google_conversion_id = 830227331;
                var google_conversion_label = "M_bzCPqNnHcQg4fxiwM";
                var google_remarketing_only = false;
                /* ]]> */
            </script>
            <script src="//www.googleadservices.com/pagead/conversion.js">
            </script>
            <noscript>
                <div style="display:inline;">
                    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/830227331/?label=M_bzCPqNnHcQg4fxiwM&amp;guid=ON&amp;script=0"
                    />
                </div>
            </noscript>'; 
    }
?>
<script >
    (window.Image ? (new Image()) : document.createElement('img')).src = location.protocol +
        '//vk.com/rtrg?r=RRRhvxA7nvURG7xAUtL1b2tM0X6dhz4tDAGsjmC3XYdu0hMp4G5M1qB0DwX9x5CjKiwuRfUUCPeTFJgPM96VEJMDEF2kd2TqnCHkwMhTMLKMsje7SOydhyYmYfpnJZCNZHLFjJlRoiPU4bCFDyrAjhJufuYNkPM30caOVnC7B/8-&pixel_id=1000099082';
</script>
<!--Константин Гутлид-->
<script >
    (window.Image ? (new Image()) : document.createElement('img')).src = location.protocol +
        '//vk.com/rtrg?r=Z7pk5C4xjqokU5G*QALWNq2pkJhzPOom99yo3Qxf9oIeFlECprDRQgjZP9SEA86kYiMHFgew1rs3AF6e*l8tUryFp/Fl495P7rPnkWnSEnGPEQiabdvpee/7*npmHm33ovO1TSw3ulRHBDU7ITWvhsLgKc4jAIpbdw4C7HeMV/s-&pixel_id=1000099730';
</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3052558", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
(function (d, w, id) {
if (d.getElementById(id)) return;
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
ts.src = "//top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3052558;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
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
</body>
</html>