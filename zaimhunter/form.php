<?php 
if(!isset($my_title))
{
    $my_title = 'Заполните анкету!';
}  
require 'header.php';  
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
?>
<div class="container ex-form">
    <h1 class="text-center" id="to_scroll">Заполните анкету</h1>
    <form id="anketa" action="/lk" method="post" onsubmit="return validate();" autocomplete="off" class="tab-content">
        <input type="hidden" name="display" id="display" value="0">
        <input type="hidden" name="referer" value="<?=$referer?>">
        <input type="hidden" name="id" value="">
        <input type="hidden" name="step" value="1">
        <input type="hidden" name="ad_id" value="<?=$ad_id?>"> 
		<input type="hidden" id="amount" name="amount" value="<?php echo empty($_POST['amount'])? 20000 : $_POST['amount']; ?>" />
	    <input type="hidden" id="period" name="period" value="<?php echo empty($_POST['period'])? 21 : $_POST['period']; ?>" />

        <div role="tabpanel" class="ex-anketa1-block tab-pane fade in active col-xs-12" id="firstTabContent">
            <?php require 'form1.php';?>
        </div>
        <div role="tabpanel" class="ex-anketa2-block tab-pane col-xs-12" id="secondTabContent">
            <?php require 'form2.php';?>
        </div>
        <div role="tabpanel" class="ex-anketa3-block tab-pane col-xs-12" id="lastTabContent">
            <?php require 'form3.php';?>
        </div>
    </form>
</div> 

<?php require 'footer.php'; ?>