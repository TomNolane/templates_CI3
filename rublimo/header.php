<?php 
require 'templates/common/new/php/check_bot.php';
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
    $description = 'Rublimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
    
    if ($this->uri->segment(1) == 'history') 
	{
		$my_title = 'Получение Кредита для Улучшения Кредитной Истории'; 
		$description = 'Мы рады предложить специальный продукт - программу создания или улучшения кредитной истории.Программа предлагается автоматически после регистрации';
	}

$email = 'support@rublimo.ru';
?>
<!doctype html>
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
    <!--[if lte IE 9]>
    <script src="/modules/html5shiv/html5shiv.js"></script>
    <![endif]-->  
</head>
<body>
<?php 
// popup
require 'templates/common/new/php/modal.php';
require 'menu.php';
require 'adsence.php';
?>
