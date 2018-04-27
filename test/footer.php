<?php
$from = '15'; 
if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
{
    echo '<a href="#0" class="cd-top">Наверх</a>'; 
}
if($this->uri->segment(1) != 'form')
{
    if($this->uri->segment(1) != 'lk3')
    {
        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Рублимо -->
        <ins class="adsbygoogle text-center"
        style="display:block"
        data-ad-client="ca-pub-4970738258373085"
        data-ad-slot="5040571366"
        data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
    } 
}
?> 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <a href="/">
                        <img src="/templates/test/assets/img/logo-footer.png" alt="logo" class="logo">
                    </a>
                </div>
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
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </footer>

    <?php
        

if($this->uri->segment(1) == 'faq')
{
    echo "
    $(document).ready(function(){
        $('.panel-title a').click(function(){
        $('.panel-heading').removeClass('green');
        if ($(this).hasClass('collapsed')) $(this).parent().addClass('green');
        });
    }); ";
}
        
    
if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index') {  
echo '<script>
	$(document).ready(function () {
        $("#dg-container").gallery(); 
	}); 
</script>
';
} 
?>
        <script> 

            $('.amount2').ionRangeSlider({
                values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000,
                    14000, 15000,
                    20000, 25000, 30000, 40000, 50000, 80000, 100000
                ],
                from: <?php 
                    if(isset($_GET['amount'])) 
                    {  
                        switch($_GET['amount'])
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
                    elseif(!isset($_POST['form_slrd'])) echo '15'; else echo $_POST['form_slrd']; 
                    ?>,
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
                }
            }); 
 
            var amount = 15000;
            var day = 10;

            $(document).ready(function () { 
                var amount = 15000;
                var day = 10;

                $('.amount').ionRangeSlider({
                    values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000,
                        13000,
                        14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
                    ],
                    prettify_enabled: true,
                    grid: false,
                    grid_num: 1,
                    hide_min_max: false,
                    from: <?php 
                        if(isset($_GET['amount'])) 
                        {  
                            switch($_GET['amount'])
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
                        elseif(!isset($_POST['form_slrd'])) echo '15'; else echo $_POST['form_slrd']; 
                        ?>,
                    prettify: function (range) {
                        var n = range.toString();
                        return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + ' ');
                    },
                    onChange: function (range) {
                        if (range.from_value <= 10000) {
                            d = 'От 61 до 130 дней';
                            $('.period').val('10');
                        } else if (range.from_value <= 15000) {
                            d = 'От 61 до 130 дней';
                            $('.period').val('10');
                        } else if (range.from_value <= 20000) {
                            d = 'От 61 до 130 дней';
                            $('.period').val('10');
                        } else if (range.from_value <= 30000) {
                            d = 'От 61 до 130 дней';
                            $('.period').val('15');
                        } else if (range.from_value <= 50000) {
                            d = 'От 130 до 250 дней';
                            $('.period').val('30');
                        } else {
                            d = 'От 250 до 365 дней';
                            $('.period').val('30');
                        }
                        $('#form_slrd').val(range.from);
                        $('#amount').val(range.from_value);
                        $('.d').text(d);
                        $('.a').text(range.from_value + 'P');
                        $('.results tr').each(function (indx, element) {
                            if ($(element).data('amount') < range.from) $(element).hide();
                            else $(element).show();
                        });

                        amount = range.from_value;
                        updateComm();
                    }
                });
                var slider = $('.amount').data('ionRangeSlider');
                var slider2 = $('.amount2').data('ionRangeSlider');
                <?php if ($this->uri->segment(1) == '') { ?>
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

                    slider.update({
                        from: n
                    }); 
                    slider2.update({
                        from: n
                    }); 

                    if (n <= 9) {
                        $('.period').val('10');
                        $('.d').text('От 61 до 130 дней');
                    } else if (n <= 14 && n > 9) {
                        $('.period').val('10');
                        $('.d').text('От 61 до 130 дней');
                    } else if (n <= 15 && n > 14) {
                        $('.period').val('10');
                        $('.d').text('От 61 до 130 дней');
                    } else if (n <= 17 && n > 15) {
                        $('.period').val('15');
                        $('.d').text('От 61 до 130 дней');
                    } else if (n <= 19 && n > 17) {
                        $('.period').val('30');
                        $('.d').text('От 130 до 250 дней');
                    } else if (n > 19) {
                        $('.period').val('30');
                        $('.d').text('От 250 до 365 дней');
                    }
                    $('#form_slrd').val(n);
                    $('#amount').val(slider.result.from_value);

                    $('.results tr').each(function (indx, element) {
                        if ($(element).data('amount') < slider.result.from) $(element).hide();
                        else $(element).show();
                    });

                    $('.a').text(String(slider.result.from_value).split(/(?=(?:\d{3})+$)/).join(' ') +
                        'P');
                    amount = slider.result.from_value;
                    updateComm();

                }, 50);
                <?php } ?>
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

            });
        </script>
        <?php
        if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
        {
            echo '<!-- Google Code for  
            &#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080;  
            (&#1073;&#1077;&#1079; &#1044;&#1086;&#1080;) Conversion Page -->
            <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 832752826;
            var google_conversion_label = "rzldCPv3u3gQupmLjQM";
            var google_remarketing_only = false;
            /* ]]> */
            </script>
            <script type="text/javascript"  
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
        </body>
        </html>