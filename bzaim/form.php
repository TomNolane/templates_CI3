<?php 
$sum = '20000'; $period = '21';
if(isset($_GET['amount'])) 
{ 
    $sum = $_GET['amount'];
    switch($_GET['amount']) 
    { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; }
    
    if ($sum <= 10000) 
    { $period = '7'; } 
    else if ($sum <= 15000)
    { $period = '14'; } 
    else if ($sum <= 20000)
    { $period = '21'; } 
    else if ($sum <= 30000)
    { $period = '21'; } 
    else if ($sum <= 50000)
    { $period = '30'; } 
    else { $period = '30'; }
} 
if(isset($_POST['amount']))
{ 
    $sum = $_POST['amount'];
    switch($_POST['amount']) 
    { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; }
    
    if ($sum <= 10000) 
    { $period = '7'; } 
    else if ($sum <= 15000)
    { $period = '14'; } 
    else if ($sum <= 20000)
    { $period = '21'; } 
    else if ($sum <= 30000)
    { $period = '21'; } 
    else if ($sum <= 50000)
    { $period = '30'; } 
    else { $period = '30'; }
} 
if(!isset($my_title))
{
    $my_title = 'Заполните анкету!';
} 
$percent = '95';
if(isset($_GET['amount']) && !empty($_GET['amount'])) 
{ 
    switch($_GET['amount']) 
    { 
        case '1000': $percent = '95' ; break;
        case '2000': $percent = '95' ; break;
        case '3000': $percent = '95' ; break;
        case '4000': $percent = '95' ; break;
        case '5000': $percent = '95' ; break;
        case '6000': $percent = '95' ; break;
        case '7000': $percent = '95' ; break;
        case '8000': $percent = '95' ; break;
        case '9000': $percent = '95' ; break;
        case '10000': $percent = '95' ; break;
        case '11000': $percent = '95' ; break;
        case '12000': $percent = '95' ; break;
        case '13000': $percent = '95' ; break;
        case '14000': $percent = '95' ; break;
        case '15000': $percent = '95' ; break;
        case '20000': $percent = '95' ; break;
        case '25000': $percent = '95' ; break;
        case '30000': $percent = '85' ; break;
        case '40000': $percent = '77' ; break;
        case '50000': $percent = '77' ; break;
        case '80000': $percent = '65' ; break;
        case '100000': $percent = '65' ; break;
    } 
}
elseif(isset($_POST['percent']) && !empty($_POST['percent']))
    $percent = $_POST['percent'];
if(!isset($my_title))
{
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис bzaim';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
}
// IP
$this->load->helper('ip');
// GEO
require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
$gb = new IPGeoBase();
$geo = $gb->getRecord(IP::$ip);
if ($geo)
    {
        if (isset($geo['region'])){
            $region_name = $geo['region'];
        }else{
            $region_name = 'Владимир';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Владимир';
        }
    }else{
        $region_name = 'Владимир';
        $city_name = 'Владимир';
	}
// Список регионов
$this->load->model('geo/geo_model', 'geo');
$regions = $this->geo->regions();

if(isset($_SERVER['HTTP_REFERER'])){
    $referer = $_SERVER['HTTP_REFERER'];
    parse_str($_SERVER['HTTP_REFERER'], $output);
        if(isset($output['utm_source'])){
            switch ($output['utm_source']) {
                case 'vk':
                    $utm = '1';
                    break;
                case 'direct':
                    $utm = '2';
                    break;
                case 'mytarget':
                    $utm = '3';
                    break;
                case 'google':
                    $utm = '4';
                    break;
                case 'google_cms':
                    $utm = '5';
                    break;
                default:
                    $utm = '0';
            }
        }else{
            $utm = ''; 
        }
	$ad_id = '4'.$utm; 
} else {
    $referer = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	$ad_id = '4'; 
} include "header.php"; ?>
<input type="hidden" class="percent" id="percent" name="percent" value="<?php echo $percent;?>" />
<div class="ex-bounds"></div>
<div class="container ex-form">
    <h1 class="text-center" id="to_scroll">Заполните анкету</h1>  
    <form class="tab-content" id="anketa" action="/lk" method="post" onsubmit="return validate();" autocomplete="off" novalidate>
        <input type="hidden" name="referer" value="<?=$referer?>">
        <input type="hidden" name="id" value="">
        <input type="hidden" name="step" value="1">
        <input type="hidden" name="ad_id" value="<?=$ad_id?>"> 
        <input type="hidden" name="display" id="display" value="0">
        <input type="hidden" id="amount" name="amount" value="<?php if(isset($_GET['amount'])) { $sum = '20000'; switch($_GET['amount']) { case '1000': $sum = '1000' ; break; case '2000': $sum = '2000' ; break; case '3000': $sum = '3000' ; break; case '4000': $sum = '4000' ; break; case '5000': $sum = '5000' ; break; case '6000': $sum = '6000' ; break; case '7000': $sum = '7000' ; break; case '8000': $sum = '8000' ; break; case '9000': $sum = '9000' ; break; case '10000': $sum = '10000' ; break; case '11000': $sum = '11000' ; break; case '12000': $sum = '12000' ; break; case '13000': $sum = '13000' ; break; case '14000': $sum = '14000' ; break; case '15000': $sum = '15000' ; break; case '20000': $sum = '20000' ; break; case '25000': $sum = '25000' ; break; case '30000': $sum = '30000' ; break; case '40000': $sum = '40000' ; break; case '50000': $sum = '50000' ; break; case '80000': $sum = '80000' ; break; case '100000': $sum = '100000' ; break; } echo $sum; if ($sum <= 10000) { $period = '7'; } else if ($sum <= 15000) { $period = '14'; } else if ($sum <= 20000) { $period = '21'; } else if ($sum <= 30000) { $period = '21'; } else if ($sum <= 50000) { $period = '30'; } else { $period = '30'; } } elseif(!isset($_POST['amount'])) echo '20000'; else echo $_POST['amount'];  ?>" />
        <input type="hidden" id="period" name="period" value="<?php if(isset($period)) { echo $period; } else echo empty($_POST['period'])? 21 : $_POST['period']; ?>" />
        <div role="tabpanel" class="ex-anketa1-block tab-pane fade in active col-xs-12" id="firstTabContent">
            <?php require 'form1.php'; ?>
        </div>
        <div role="tabpanel" class="ex-anketa2-block tab-pane col-xs-12" id="secondTabContent">
            <?php require 'form2.php'; ?>
        </div>
        <div role="tabpanel" class="ex-anketa3-block tab-pane col-xs-12" id="lastTabContent">
            <?php require 'form3.php'; ?>
        </div>
    </form>
</div>
<!-- FOOTER -->
<footer class="ex-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <a href="/"><img src="/templates/bzaim/assets/img/logo-2.png" alt="logo-2.png"></a>
                    <p class="spec_footer4">Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201<br>
                        <a href="mailto:support@bzaim5.ru" target="_blank">support@bzaim5.ru</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
    require 'templates/common/get_display_size.php';
    echo '<script>';
    require 'modules/jquery/jquery-1.11.3.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/bootstrap/3.3.6/js/bootstrap.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/assets/js/jquery.form-validator.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/assets/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/assets/js/coockie.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/assets/js/modal.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/assets/js/custom.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/assets/js/settings_main.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim/assets/js/settings_form.js';
    echo '</script>';
    require 'templates/common/detect.min.php';
    require 'templates/common/switch_form.php';
    echo ' <script>
    jQuery(document).ready(function (o) {
        var l = 300,
            s = 1200,
            c = 700,
            d = o(".cd-top");
        o(window).scroll(function () {
            o(this).scrollTop() > l ? d.addClass("cd-is-visible") : d.removeClass(
                "cd-is-visible cd-fade-out"), o(this).scrollTop() > s && d.addClass("cd-fade-out")
        }), d.on("click", function (l) {
            l.preventDefault(), o("body,html").animate({
                scrollTop: 0
            }, c)
        })
    });';
    require 'templates/bzaim/assets/js/get_parameter.js';
    echo '</script>';
?> 
<!--[if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->
<script>  
     $("#rangeSlider").ionRangeSlider({
            hide_min_max: true, 
            keyboard: true, 
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
        elseif(!isset($_POST['sldr'])) echo '15'; else echo $_POST['sldr']; 
        ?>,
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
                } else {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                    $('#percent').val('65');
                }
                $("#amount").val(range3.from_value);
                $('.irs-single').text('вероятность ' + $('#percent').val() + '%');
            },
            onFinish: function() {
            }
        });
    $(document).ready(function () { 
        var c = getParameterByName('amount');
        var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val());
        if (c != null) {
            if (c > 100000 || c < 1000) {
                c = 20000;
            }
            gg = c;
        };
        var currentLoanSize =  parseInt(gg),
        range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue =  $('#ex-slider-val'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
        commissionTableSize = $('.ex-Commission'),
        returnTable = $('.ex-total'),
        probabilityTable = $('.irs-single'),
        probabilityTable2 = $('.ex-prob'),
        probability = <?php echo $percent ;?>,
        time = '130-200 дней',
        commission = (currentLoanSize * commissionPercantage) / 100,
        returnTotal = currentLoanSize + commission,
        setDynamicProbability = function () {
            if(currentLoanSize >= 30000 && currentLoanSize <= 50000){
                probability = 85;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span style='margin-left: 0px !important;'>"+probability +"%</span>");
            }else if(currentLoanSize > 50000 && currentLoanSize < 80000){
                probability = 77;
                probabilityTable.text("вероятность " + probability).append('%');;
                probabilityTable2.html("<span style='margin-left: 0px !important;'>"+probability +"%</span>");
            }else if(currentLoanSize >= 80000){
                probability = 65;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span style='margin-left: 0px !important;'>"+probability +"%</span>");
            }
            else if(currentLoanSize <= 25000){
                probability = 95;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span style='margin-left: 0px !important;'>"+probability +"%</span>");
            }
        },
        setDynamicTimePeriod = function () {
            if(currentLoanSize <= 20000 && currentLoanSize > 8000){
                time = '100-130 дней';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize <= 8000){
                time = '61-100 дней';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize > 20000 && currentLoanSize <= 30000){
                time = '130-200 дней';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize > 30000 && currentLoanSize <= 50000){
                time = '200-250 дней';
                timeTable.html("<span>"+time+"</span>");
            }if(currentLoanSize > 50000){
                time = '250-365 дней';
                timeTable.html("<span>"+time+"</span>");
            } 
        }; 
        rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><i></i>");
        rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        timeTable.append("<span>"+time+"</span>");
        commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        probabilityTable.text('').append("<span>вероятность "+ probability+"%</span>");
        probabilityTable2.text('').append("<span>"+ probability+"%</span>"); 
    range.on("change", function () { 
        probabilityTable.attr('style', probabilityTable.attr('style') + ';' + 'margin-left: -37px !important');
        currentLoanSize = parseInt($(this).prop("value"));
        commission = (currentLoanSize * commissionPercantage) / 100;
        returnTotal = currentLoanSize + commission;
        var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        rangeUpperValue.html("<span>"+currentLoanToShow+"</span><i></i>");
        rangeTableValue.html("<span>"+currentLoanToShow+" рублей</span>");
        commissionTableSize.html("<span>"+commissionToShow+" рублей</span>");
        returnTable.html("<span>"+totalToShow+" рублей</span>");
        setDynamicProbability();
        setDynamicTimePeriod();
    });
});
function traffic(site, page){
    $.ajax({
        type: 'POST',
        url: '/traffic/',
        data: 'site='+site+'&page='+page,
            success: function(data){
            }
    });
}
traffic("bzaim5.ru",1);
</script> 
<?php include "yandexmetrika.php"; ?>
</body>
</html>