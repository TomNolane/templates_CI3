<?php 
require 'templates/common/new/php/check_bot.php';
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Dengomir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';

$email = 'support@dengomir.ru';
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
// if ($setting_array['is_mobile'] != 'мобила') require 'templates/common/new/php/modal_polygon.php';
// else require 'templates/common/new/php/modal_mobile.php';
require 'menu.php';

if($this->uri->segment(1) == 'form')
{
    require 'templates/common/new/php/modal2.php';
}

if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', ' ', '', 'index', 'form', 'vitrina'))) {
    echo '<br><span id="adsence_about"></span>';
}
?>