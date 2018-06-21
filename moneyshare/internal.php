<?php
if ($this->uri->segment(1) == 'robots.txt') 
{
	header("Content-type: text/plain");
	require 'internal-robots.txt.php';
} 
else
{
    $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; 
    $description = 'Moneyshare - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!';
    require 'header.php'; 

        if ($this->uri->segment(1) == 'confidentiality') require 'internal-confidentiality.php'; 
        elseif($this->uri->segment(1) == '404') require 'internal-404.php';
        elseif($this->uri->segment(1) == 'agreement') require 'internal-agreement.php'; 

    require 'footer.php'; 
} ?>