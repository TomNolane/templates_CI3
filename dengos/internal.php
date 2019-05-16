<?php
if ($this->uri->segment(1) == 'robots.txt'){
    header("Content-type: text/plain");
    require 'internal-robots.txt.php';
} else 
{
    $universal_folder = 0; $price = "30 000";

    if (!in_array($this->uri->segment(1), array('about', 'faq', 'oferta', 'soglasie', 'rules', 'personal-data', 'calls', 'regulation', 'zaim-card', 'zaim-yandex', 'zaim-qiwi', 'zaim-bank', 'zaim-contact'))) 
    {
        $params = array('prelend' => $this->uri->segment(1));
        $ch = curl_init("https://bzaim5.ru/getprelend");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $result2 = json_decode(substr($result, 3),true);
        
        $main = $result2[0]["img"];
        $link =  $result2[0]["link_offer"];
    }
    else
    {
        $main = 'dengos';
        $link = '';
    }

    $prefix = '?aff_sub1=#name#&aff_sub=#name#&source=#name#&s1=#name#&subid=#name#&sub1=#name#'; $prefix2 = '&aff_sub1=#name#&aff_sub=#name#&source=#name#&s1=#name#&subid=#name#&sub1=#name#';

    if(strpos($link, '?'))
        $link .= $prefix2;
    else 
        $link .= $prefix;

    if (!in_array($this->uri->segment(1), array('about', 'faq', 'oferta', 'soglasie', 'rules', 'personal-data', 'calls', 'regulation', 'zaim-card', 'zaim-yandex', 'zaim-qiwi', 'zaim-bank', 'zaim-contact'))) 
    {
        $my_title = $result2[0]["img"].' лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
        $description = $result2[0]["img"].' осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
    }
    else
    {
        $my_title = 'Dengos лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
        $description = 'Dengos осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
    }

    if ($this->uri->segment(1) == 'about') require 'templates/dengos/internal-about.php';
    elseif ($this->uri->segment(1) == 'faq') require 'templates/dengos/internal-faq.php';
    elseif ($this->uri->segment(1) == 'rules') require 'templates/dengos/internal-rules.php';
	elseif ($this->uri->segment(1) == 'oferta') require 'templates/dengos/internal-oferta.php';
	elseif ($this->uri->segment(1) == 'soglasie') require 'templates/dengos/internal-soglasie.php';
	elseif ($this->uri->segment(1) == 'zaim-bank') require 'templates/dengos/internal-zaim-bank.php'; 
	elseif ($this->uri->segment(1) == 'zaim-qiwi') require 'templates/dengos/internal-zaim-qiwi.php';
	elseif ($this->uri->segment(1) == 'zaim-yandex') require 'templates/dengos/internal-zaim-yandex.php';
	elseif ($this->uri->segment(1) == 'zaim-contact') require 'templates/dengos/internal-zaim-contact.php';
	elseif ($this->uri->segment(1) == 'zaim-card') require 'templates/dengos/internal-zaim-card.php';
	elseif ($this->uri->segment(1) == 'personal-data') require 'templates/dengos/internal-personal-data.php';
	elseif ($this->uri->segment(1) == 'calls') require 'templates/dengos/internal-calls.php';
	elseif ($this->uri->segment(1) == 'regulation') require 'templates/dengos/internal-regulation.php';
	elseif ($this->uri->segment(1) == 'safety') require 'templates/dengos/internal-safety.php';
    else require 'templates/dengos/universal.php';
    file_put_contents('log', $this->uri->segment(2).PHP_EOL, FILE_APPEND);
    }