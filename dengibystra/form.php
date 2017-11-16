<?php 

if(!isset($my_title))
{
    $my_title = 'Заполните анкету!';
}  

if(!isset($description))
{
    $description = 'описание анкеты!';
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
            $region_name = 'Казань';
        }
        if (isset($geo['city'])){
            $city_name = $geo['city'];
        }else{
            $city_name = 'Казань';
        }
    }else{
        $region_name = 'Казань';
        $city_name = 'Казань';
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
}

include "header.php"; 


?>
 <div class="ex-bounds"></div>
<style>#ya-rtb{display: none;}</style>
<style>
    .has-error .help-block {
        display : none;
    }
    .ex-form .ex-anketa-main .form-group input {
        padding: 15px 5px 15px 15px;
    } 
    ::placeholder {
        font-size: 13px !important;
    }
    ::-webkit-input-placeholder {
        font-size: 13px !important;
    }
    ::-moz-placeholder {
        font-size: 13px !important;
    }
    .ex-form .ex-anketa-main .form-group select {
        font-size: 14px;
        padding: 15px 35px 15px 5px;
    }
    .ex-wrapper {
        margin-bottom: 20px;
    }
    .ex-form .ex-anketa-main .form-group {
        padding-bottom: 0px !important;
    }
    #passport_code::placeholder , #passportdate::placeholder{
        font-size: 10px !important; 
    }
    #passport_code::-moz-placeholder, #passportdate::-moz-placeholder {
        font-size: 10px !important; 
    }
    #passport_code::-webkit-input-placeholder, #passportdate::-webkit-input-placeholder {
        font-size: 10px !important; 
    }
    .irs-single { 
         margin-left: -37px !important; 
}
.form-group input[type="radio"]{
  width: 15px !important;
  height: 15px !important;
 
}
.reg_same {
    display: inline-block !important;
  vertical-align: middle !important;
  margin-bottom: 0 !important;
}
.asd {
    display: inline-block !important ;
  vertical-align: middle !important;
  margin-bottom: 0 !important;
}
</style>

<div class="container ex-form">
    <h1 class="text-center" id="to_scroll">Заполните анкету</h1>  
        <form class="tab-content" id="anketa" action="/lk" method="post" onsubmit="return validate();" autocomplete="off">
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
                    <a href="/"><img src="/templates/dengibystra/assets/img/logo-2.svg" alt="logo-2.svg"></a>
                    <p>Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201<br>
                        <a href="mailto:support@dengibystra.ru" target="_blank">support@dengibystra.ru</a></p>
                </div>
            </div>
        </div>
    </div>
</footer> 


<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center">Просто заполните форму и наш специалист свяжется с Вами</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-name" placeholder="Имя" title="Имя">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-phone" placeholder="Телефон" title="Телефон">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="modal-footer">
                                <div class="ex-actions">
                                    <button class="ex-main-btn" id="feedback-send" style="margin-top: 0px;">Отправить</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div id="loading" style="display:none;">
                    <span>
                        <i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<script type="text/javascript" src="/modules/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/modules/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="/modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="/modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js"></script>
<script type="text/javascript" src="/modules/poshytip-1.2/src/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="/modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]--> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
<script type="text/javascript" src="/templates/dengibystra/assets/js/jquery.suggestions.min.js"></script>
<script type="text/javascript" src="/templates/dengibystra/assets/js/coockie.js"></script> 
<script type="text/javascript" src="/templates/dengibystra/assets/js/modal.js"></script>
<script type="text/javascript" src="/templates/dengibystra/assets/js/custom.js"></script> 
<script type="text/javascript" src="/templates/dengibystra/assets/js/settings_main.js"></script> 
<script type="text/javascript" src="/templates/dengibystra/assets/js/settings_form.js"></script> 
 

<script>  
     $("#rangeSlider").ionRangeSlider({
            hide_min_max: true, 
            keyboard: true, 
            from: <?php if(empty($_POST['sldr'])) echo'15';else{echo $_POST['sldr'];} ?>,
            values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000], 
            onChange: function (range3) {
                if (range3.from_value <= 10000) {
                    $("#period").val("7");
                    $("#period2").val("От 61 до 130 дней");
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней");
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней");
                } else {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                }
                $("#amount").val(range3.from_value);
            },
            onFinish: function() {
                $('.irs-single').attr('style', $('.irs-single').attr('style') + ';' + 'margin-left: 0px !important');
            }
        });      
        $(document).ready(function () {  
    var currentLoanSize = <?php if(empty($_POST['amount'])) echo'20000';else{echo $_POST['amount'];} ?>,
        range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue =  $('#ex-slider-val'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
        commissionTableSize = $('.ex-Commission'),
        returnTable = $('.ex-total'),
        probabilityTable = $('.irs-single'),
        probabilityTable2 = $('.ex-prob'),
        probability = 95,
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
        // probabilityTable.css('margin-left', '-37px', '!important');  
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
</script>


<!-- всплывающее окошко -->
<?php 
if ($this->uri->segment(1) == 'form') 
{ 
    require 'templates/common/js.php';
    if(isset($_GET['popup']) and $_GET['popup']==1 ){
        echo '    
    <!-- Modal Popup-->
    <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                                   
                                </div>
                                <div class="modal-body text-center">
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/templates/common/img/popup.jpg">                                             
                                                    <h2>'.$popup_text.'</h2>
                                                    <button type="button" class="btn btn-xl btn-success get-money" data-dismiss="modal" id="back"> Получить деньги </button>    
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
    </div>

            <script type= " text/javascript">
                $(window).load(function(){
                    $("#popup").modal("show");
                });
               
            </script>';
    }
}

if(isset($_GET['email']))
{
    //данные пользователя
    $this->load->model('user/user_model', 'user');
    $user_data = $this->user->get_user($_GET['email']);
    $user_data['birthdate'] = date('d/m/Y', strtotime($user_data['birth']));
    $user_data['passportdate'] = date('d/m/Y', strtotime($user_data['passport_date']));
    foreach ($user_data as $name => $item)
    {
        echo '<script> $("#'.$name.'").val("'.$item.'"); </script>';
    }
    echo '<script> $("#username").text("'.$user_data['i'].'"); </script>';
}
?>
<!-- всплывающее окошко -->

<?php include "yandexmetrika.php"; ?>
</body>
</html>