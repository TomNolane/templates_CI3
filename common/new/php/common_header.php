<?php 
$from = '4';
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
		default: $from = '4' ; break;
	}
}
elseif($this->input->post('form_slrd') == '') $from = '4'; else $from = $this->input->post('form_slrd'); ?>
<!doctype html>
<html lang="ru">
<head>
<script>
var loans = 0;
var count_touch = 0;
var scroll_sizeX = 0;
var scroll_sizeY = 0;
var ahctpac = 0;
var isMobile = 0;
var count_errors = 0;
var time_to_come_now = new Date();
</script>