<?php 
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Zaimhunter - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
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
        require 'templates/common/new2/php/utm.php';
    ?>
    <!--[if lte IE 9]>
    <script src="/modules/html5shiv/html5shiv.js"></script>
    <![endif]-->  
</head>
<body>
<?php 
require 'templates/common/new2/php/modal.php';
require 'menu.php';

if($this->uri->segment(1) == 'form')
{
    require 'templates/common/new2/php/modal2.php';
}

if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index' && $this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') {
    echo '<span id="adsence_about"></span>';
}
?>