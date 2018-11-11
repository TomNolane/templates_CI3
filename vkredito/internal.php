<?php 
if ($this->uri->segment(1) == 'robots.txt') 
{
	header("Content-type: text/plain");
	require 'internal-robots.txt.php';
} 
else
{
    $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; 
    $description = 'Vkredito - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!';
 
        if($this->uri->segment(1) == '404') {
			require 'header.php'; 
			require 'internal-404.php';
			require 'footer.php'; 
		}
    
} ?>