<?php 
    if(!isset($my_title))
    {
        $my_title = 'Заполните анкету!';
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

require 'header.php';
?> 
<div class="container ex-form">
    <h1 class="text-center" id="to_scroll">Как получить деньги?</h1>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-xs-8 col-xs-offset-2">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="ex-indicator-scope nav nav-tabs" role="tablist">
                        <figure class="ex-first-step">
                            <p>Личные
                                <br> данные</p>
                        </figure>
                        <figure class="ex-second-step">
                            <div>
                                <span></span>
                            </div>
                            <p>паспортные
                                <br> данные</p>
                        </figure>
                        <figure class="ex-last-step">
                            <p style="width: 105px; left: -130%;">данные о работе</p>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row tab-content">
                <form class="form-horizontal form-label form-css-label" id="anketa" action="/lk" method="post" onsubmit="return validate();"
                    autocomplete="off">
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane fade in active col-xs-12" id="firstTabContent">
                            <?php  require 'form1.php'; ?>
                        </div>
                    </div>
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane col-xs-12" id="secondTabContent">
                            <?php  require 'form2.php'; ?>
                        </div>
                    </div>
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane col-xs-12" id="lastTabContent">
                            <?php  require 'form3.php'; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require 'footer.php';?>
	
	<script>
			$("#rangeSlider").ionRangeSlider({
			hide_min_max: true,
			hide_from_to: true,
			keyboard: true,
			grid: false,
			from: <?php if (isset($_POST['from_slrd'])) echo $_POST['from_slrd']; else echo '5'; ?>, 
			values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000,
				13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
			], 
			onChange: function (range) {
				$('#amount').val(range.from_value);
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
	</script>
    </body> 
    </html>