<?php $from = '15'; $px = '63.974'; 
if(!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))
{
    require 'adsence.php';
    echo '<a href="#0" class="cd-top">Наверх</a>';
} ?>
<footer class="ex-main-footer">
    <div class="container">
        <div class="row">
             <div class="col-md-2">
                <div class="ex-foot-logo">
                    <?php if(in_array($this->uri->segment(1), array('lk3', 'offerwall2', 'offerwall', 'pixell'))) { ?>
                        <img src="<?=$logo_foot?>" alt="logo-footer.png">
                    <?php } else { ?>
                        <img alt="logo.png" src="/templates/zaimoking/assets/img/logo-footer.png">
                    <?php } ?>
                </div>
            </div>
             <div class="col-md-10">
            <?php if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) { ?>
                <p>Сервис по подбору выгодных онлайн займов и кредитов находящийся по адресу: <br>
                    Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 <?=$email?><span class="hidden-xs hidden-sm"> | 8
                    (960) 950 93 53</span><br>
                    <span>Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
                    Максимальная процентная ставка по займу составляет 0,98% в день,<br>
                    а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10
                    недель под 0,08% в день; проценты за весь период составят 11 200 руб.
                    Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае
                    своевременного погашения<br>
                    ООО «Альянс» | ОГРН 5177746353054 | ИНН 9705113909 | КПП 770501001</span></p>
           
                <?php } else { ?>
                        <?php require 'adsence.php'; ?>
                <?php } ?>
             </div>
        </div>
        <?php if (in_array($this->uri->segment(1), array('lk', 'offerwall', 'pixell'))) { ?>
            <div class="row">
                <p>Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург,
                    ул. Осипенко, 12, оф 201 | <?=$email?>
                    <span id="sp_footer2">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
                    Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
                    Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты
                    за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
                    Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span></p>
            </div>
        <?php } ?>
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
    require 'templates/zaimoking/assets/js/main.js'; 

if (in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) { ?>
 
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

                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
            }
        }); 
        <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) {?>
        traffic("zaimoking.ru",0);
        function GetMoney() 
        {
            $('form#anketa').submit();
        }
<?php }
}
elseif(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell')))
{
    include "templates/common/new/js/lk.js";
    echo 'traffic("zaimoking.ru",4);';
}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("zaimoking.ru",9);';
}
elseif($this->uri->segment(1) == 'faq') {
    echo '
    $(\'select\').each(function () {
        var $this = $(this), numberOfOptions = $(this).children(\'option\').length;

        $this.addClass(\'select-hidden\');
        $this.wrap(\'<div class="select"></div>\');
        $this.after(\'<div class="select-styled"></div>\');

        var $styledSelect = $this.next(\'div.select-styled\');
        $styledSelect.text($this.children(\'option\').eq(0).text());

        var $list = $(\'<ul />\', {
            \'class\': \'select-options\'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $(\'<li />\', {
                text: $this.children(\'option\').eq(i).text(),
                rel: $this.children(\'option\').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children(\'li\');

        $styledSelect.click(function (e) {
            e.stopPropagation();
            $(\'div.select-styled.active\').not(this).each(function () {
                $(this).removeClass(\'active\').next(\'ul.select-options\').hide();
            });
            $(this).toggleClass(\'active\').next(\'ul.select-options\').toggle();
        });

        $listItems.click(function (e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass(\'active\');
            $this.val($(this).attr(\'rel\'));
            $list.hide();
        });
        $(document).click(function () {
            $styledSelect.removeClass(\'active\');
            $list.hide();
        });
    });

    $(\'.select-options li\').click(function (e) {
        e.preventDefault();
        var value = $(this).closest(\'li\').attr(\'rel\');
        if (value !== 0) {
            $(\'.ex-faq-type\').css(\'display\', \'none\');
            $(\'#div\' + value).css(\'display\', \'block\');
        }
    });';
} elseif($this->uri->segment(1) == 'zaim-card' || $this->uri->segment(1) == 'zaim-bank' || $this->uri->segment(1) == 'zaim-contact' || $this->uri->segment(1) == 'zaim-qiwi' || $this->uri->segment(1) == 'zaim-yandex') {
    echo '
    $(\'select\').each(function () {
        var $this = $(this), numberOfOptions = $(this).children(\'option\').length;

        $this.addClass(\'select-hidden\');
        $this.wrap(\'<div class="select"></div>\');
        $this.after(\'<div class="select-styled"></div>\');

        var $styledSelect = $this.next(\'div.select-styled\');
        $styledSelect.text($this.children(\'option\').eq(0).text());

        var $list = $(\'<ul />\', {
            \'class\': \'select-options\'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $(\'<li />\', {
                text: $this.children(\'option\').eq(i).text(),
                rel: $this.children(\'option\').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children(\'li\');

        $styledSelect.click(function (e) {
            e.stopPropagation();
            $(\'div.select-styled.active\').not(this).each(function () {
                $(this).removeClass(\'active\').next(\'ul.select-options\').hide();
            });
            $(this).toggleClass(\'active\').next(\'ul.select-options\').toggle();
        });

        $listItems.click(function (e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass(\'active\');
            $this.val($(this).attr(\'rel\'));
            $list.hide();
        });
        $(document).click(function () {
            $styledSelect.removeClass(\'active\');
            $list.hide();
        });
    });

    $(\'.select-options li\').click(function(e) {
        e.preventDefault();
        var value = $(this).closest(\'li\').attr(\'rel\');
        if (value !== 0) {
            $(\'.ex-money-type\').css(\'display\' , \'none\');
            $(\'#div\' + value).css(\'display\' , \'block\');
        }
    });';
}
echo "}";
require 'templates/common/new/js/exeption.js';
?>
</script>
<?php
    include "google.php";
    include "yandexmetrika.php"; 
    include "yandex_rtb.php";
    require 'facebook.php';
    if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3')))
        require 'google_lk.php';
?>
</body>
</html>