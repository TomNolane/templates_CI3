<?php  
require 'templates/common/new/php/check_bot.php';
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Dengoman - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';

$email = 'support@dengoman.ru';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $my_title;?></title>
	<?php 
        require 'meta.php';
        require 'style.php';
        echo '<!-- Сендпульс Sendpulse -->';
        require 'sendpuls.php';
        require 'templates/common/new/php/utm.php';
    ?>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>var amount = 15000;</script>
</head>
<body>
<div class="page">
<?php 
// popup
require 'templates/common/new/php/modal.php';
require 'menu.php';

if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', ' ', '', 'index', 'form', 'vitrina'))) 
{
    echo '<span id="adsence_about"></span>';
}
?>