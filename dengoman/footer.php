
</div>
<div class="buffer"></div>
<?php 
$from = '15';

if(!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'offerwall2', 'pixell', 'vitrina', 'form')))
{
    require 'adsence.php'; 
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'pixell'))) 
{
    echo '<!-- ПИКСЕЛЬ MYTARGET --><img src="//top-fwz1.mail.ru/tracker?id=3052545;e=RG%3A/trg-pixel-2721105-1534147134779" alt="mypixel">';
}
?>
<footer style="color: #000 !important;">
    <div class="col-md-12 ">
        <div class="row"> 
            <div class="col-md-3">
                <h1 class="logo-spec" id="for_lk">
                    <?php if(in_array($this->uri->segment(1), array('lk3', 'offerwall2', 'offerwall', 'pixell'))) { ?>
                        <img src="<?=$logo_foot?>" class="logo logo-spec" alt="logo-footer.png">
                    <?php } else { ?>
                            <img alt="logo.png" src="/templates/dengoman/assets/img/logo.png">
                    <?php } ?>
                </h1>
                <div class="footer-copyright"></div>
            </div> 
            <?php if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'pixell'))) { ?>
            <div class="col-md-3" >
                <div class="footer-text spec_footer4" style="font-size: 12px; line-height: 1;">
                    <p>Сервис по подбору выгодных онлайн займов находящийся по адресу <br>Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                    <br><?=$email?> <span class="hidden-xs hidden-sm"> | +7(495) 006 19 61</span></p>
                </div>
            </div>
            <div class="col-md-6 spec_footer5">
                <p style="font-size: 12px">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001.</p>
            </div>
             <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 0 !important;">
                <?php
                    require 'adsence.php';
                ?>
            </div>
        <?php } else { ?>
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 0 !important;">
                <?php
                    require 'adsence.php';
                ?>
            </div>
        <?php } ?>
        </div>
    </div>
    <div class="col-sm-12">
        <?php if (in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) { ?>
            <hr/>
            <div class="col-sm-12">
                <p class="black">
                    Сервис по подбору выгодных онлайн займов находящийся по адресу:<br>
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 email: <?=$email?> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                </p>
            </div>
        <?php } ?>
            <hr/>
    </div>
</footer>
<div class="clearfix"></div>
<!--[if lt IE 10]>
<script  src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]--> 
 <!-- common JS -->
<?php 
echo '<script>'; 
echo 'try{';
require 'footer_common_js.php';
echo '/* private JS */';
require 'templates/dengoman/assets/js/main.js'; 
if (in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) {?>
	$(document).ready(function () {
		$('.form h2 span span').text(zero(d.getHours()) + ':' + zero(d.getMinutes()))
		$('#rangeSlider').ionRangeSlider({
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
            onStart:function (range) {
                if (range.from_value <= 10000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 15000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 20000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 30000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 50000) {
					d = 'От 130 до 250 дней';
					$('#period').val(15);
				} else {
					d = 'От 250 до 365 дней';
					$('#period').val(30);
				}
                $('.d').text(d);
                $('#period2').val(d);
				$('.results tr').each(function (indx, element) {
					if ($(element).data('amount') < range.from) $(element).hide();
					else $(element).show();
				});

				amount = range.from_value;
                $('#amount').val(range.from_value);
                $('#form_slrd').val(range.from);

				updateComm();
            },
			onChange: function (range) {
				if (range.from_value <= 10000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 15000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 20000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 30000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 50000) {
					d = 'От 130 до 250 дней';
					$('#period').val(15);
				} else {
					d = 'От 250 до 365 дней';
					$('#period').val(30);
				}
                $('.d').text(d);
                $('#period2').val(d);
                
				$('.results tr').each(function (indx, element) {
					if ($(element).data('amount') < range.from) $(element).hide();
					else $(element).show();
				});

                $('#amount').val(range.from_value);
                $('#form_slrd').val(range.from);

				amount = range.from_value;
				updateComm();
			}
		});
	});

<?php
    if ($this->uri->segment(1) != 'form'){
        echo 'traffic("dengoman.ru",0);';
    }
}
else if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))
{
    include "templates/common/new/js/lk.js";      
    echo 'traffic("dengoman.ru",4);';  
}
else if($this->uri->segment(1) == '404')
{
    echo 'traffic("dengoman.ru",9);'; 
}
echo "}";
require 'templates/common/new/js/exeption.js';
?>
</script>
<?php
include "google.php";
include "yandexmetrika.php"; 
include "yandex_rtb.php";
if (in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))  { 
    
    require 'google_lk.php';
} 
else
{
    require 'vk.php';
}
require 'mailru.php';
?>
</body>
</html>