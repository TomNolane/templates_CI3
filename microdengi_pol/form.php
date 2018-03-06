<?php
$sum = '8000'; 
$period = '16';

if(isset($_GET['amount'])) 
{ 
    $sum = $_GET['amount'];

    if ($sum < '500' || $sum > '25000') 
    $sum = '8000';

    if($period < '1' || $period > '61')
    $period = '16'; 
} 

if(isset($_POST['amount']))
{ 
    $sum = $_POST['amount'];

    if ($sum < '500' || $sum > '25000') 
    $sum = '8000';

    $period = $_POST['period'];

    if($period < '1' || $period > '61')
    $period = '16'; 
} 

if(!isset($my_title))
{
	$my_title = 'Złożenie Wniosku o udzielenie Pożyczki Online | Serwis Kasaodzaraz';
	$description = 'Chcesz uzyskać kredyt gotówkowy w krótkim czasie?Następnie wypełnij prosty formularz zgłoszenie na naszym internetowym serwisie w udzielaniu pożyczek pieniężnych';
}  
require 'header.php'; 
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
<section class="ex-anketa">
<form class="form-horizontal" id="anketa" method="post" autocomplete="off">
<input type="hidden" name="referer" value="<?=$referer?>">
<input type="hidden" name="id" value="">
<input type="hidden" name="step" value="1">
<input type="hidden" name="ad_id" value="<?=$ad_id?>">
<input type="hidden" name="display" value="1" class="visible-xs">
<input type="hidden" id="amount" name="amount" value="<?php echo $sum;?>"/>
<input type="hidden" id="period" name="period" value="<?php echo $period; ?>"/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="ex-main-form "> 
                        <div class="form-group">
                            <div class="ex-wrapper">
                                <input type="text" class="form-control" id="i" name="i" placeholder="Imię" title="Przykład: Walenty" pattern="^[A-Z-zóąśłżźćńÓĄŚŁŻŹĆŃa-z-zóąśłżźćńÓĄŚŁŻŹĆŃ]{1,25}$" required>
                                <p class="text-muted helpblock">Przykład: Walenty</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="ex-wrapper">
                                <input type="text" class="form-control" id="f" name="f" placeholder="Nazwisko" title="Przykład: Wiśniewski" pattern="^[A-Z-zóąśłżźćńÓĄŚŁŻŹĆŃa-z-zóąśłżźćńÓĄŚŁŻŹĆŃ]{1,25}$" required>
                                <p class="text-muted helpblock">Przykład: Nazwisko</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="ex-wrapper">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Number telefonu" title="Przykład: 123-456-789 vs. 12 345 67 89 vs. (+48) 123 456 789" pattern="^(?:\(?\+?48)?(?:[-\.\(\)\s]*(\d)){9}\)?$" required>
                                <p class="text-muted helpblock">Przykład: 123-456-789 vs. 12 345 67 89 vs. (+48) 123 456 789</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="ex-wrapper">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" title="Przykład: email@google.com" pattern="^[a-zA-Z0-9.!#$%’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                                <p class="text-muted helpblock">Przykład: email@google.com</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="ex-wrapper">
                                <input type="text" class="form-control" id="pesel" name="pesel" placeholder="Pesel" title="Przykład: 81100216467" pattern="^[0-9]{11}$" required>
                                <p class="text-muted helpblock">Przykład: 81100216467</p>
                            </div>
                        </div>
                        <div class="form-group  ex-agreement-check">
                            <label class="checkbox-inline"><span>Wyrażam zgodę na przetwarzanie moich danych osobowych ... pełna treść klauzuli</span>
                                <input type="checkbox" id="agree" checked value="1">
                                <i></i>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="button" id="getmoney" class="ex-main-btn">otrzymywać pieniądze</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>
<?php require "footer.php";?>