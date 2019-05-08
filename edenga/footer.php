<?php $from = '15';
if(!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'offerwall2', 'pixell', 'vitrina', 'form')))
{
    require 'adsence.php';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="https://top-fwz1.mail.ru/tracker?id=undefined;e=RG%3A/trg-pixel-2721105-1534156836350" alt="MYTARGET">';
}
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php if(in_array($this->uri->segment(1), array('lk3', 'offerwall2', 'offerwall', 'pixell'))) { ?>
                    <img src="<?=$logo_foot?>" class="logo logo-spec" alt="logo-footer.png">
                <?php } else { ?>
                    <img alt="logo.png" src="/templates/edenga/assets/img/logo.png">
                <?php } ?>
            </div>
            <?php if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) {  ?>
            <div class="col-md-10 col-xs-12">
                <?php require 'adsence.php'; ?>
            </div> 
            <?php }  ?>
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-12">
                Cервис по подбору выгодных онлайн займов находящийся по адресу Россия, Новосибирская область г. Новосибирск, ул. Маршала Покрышкина, 12, оф 201
                Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 <?=$email?> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
            </div>
            <div class="col-md-7">
                Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001
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

if (in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) { ?> 
        var amount = 15000;
        var day = 10;
        var comm1 = 0;
        var comm2 = 0;
        var percent = 0;
        var day_comment = 'До 130 дней';
<?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?> 
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
            <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?> 
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

            <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) {  ?>
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
                <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?>
                    period.update({
                        from: 61
                    });
                <?php } ?>
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?>
                        period.update({
                            from: 130
                        });
                    <?php } ?>
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?>
                        period.update({
                            from: 130
                        });
                    <?php } ?>
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('85');
                    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?>
                        period.update({
                            from: 130
                        });
                    <?php } ?>
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней");
                    $('#percent').val('77');
                    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?>
                        period.update({
                            from: 250
                        });
                    <?php } ?>
                } else  if (range3.from_value <= 200000 && range3.from_value > 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                    $('#percent').val('65');
                    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?>
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
<?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) {?>
$(document).ready(function () {
    $("#dg-container").gallery();
});
traffic("edenga.ru",0);
<?php }
}
else if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))
{
    include "templates/common/new/js/lk.js";      
    echo 'traffic("edenga.ru",4);'; 
}
else if($this->uri->segment(1) == '404')
{
    echo 'traffic("edenga.ru",9);';
}
else if($this->uri->segment(1) == 'reviews')
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
echo "}";
require 'templates/common/new/js/exeption.js';
?>
</script>
<?php
    include "google.php";
    include "yandexmetrika.php"; 
    include "yandex_rtb.php";
    if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))
        require 'google_lk.php';
    else 
        require 'vk.php';
    require 'mailru.php';
?>
</body>
</html>