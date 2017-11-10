<?php
    if ($this->uri->segment(1) == 'about') { $my_title = "о сервисе Zaimhome.ru"; require 'internal-about.php';} 
    elseif ($this->uri->segment(1) == 'form') { $my_title = "Заполните анкету!"; require 'form.php';}
    elseif ($this->uri->segment(1) == 'agreement') { $my_title = "Согласие на обработку данных"; require 'internal-agreement.php';}
    elseif ($this->uri->segment(1) == 'faq') { $my_title = "Вопрос-ответ Zaimhome.ru"; require 'internal-faq.php';}
    elseif ($this->uri->segment(1) == 'documents') { $my_title = "Правовые документы Zaimhome.ru"; require 'internal-documents.php';}
    elseif ($this->uri->segment(1) == 'contract'){ $my_title = "Пользовательское соглашение"; require 'internal-contract.php'; }
    elseif ($this->uri->segment(1) == 'offerta') { $my_title = "Публичная оферта"; require 'internal-offerta.php';}
    elseif ($this->uri->segment(1) == 'receiveMoney'){ $my_title = "Займ на Zaimhome.ru"; require 'internal-receiveMoney.php';}
    elseif ($this->uri->segment(1) == 'lk'){ $my_title = "Спасибо от Zaimhome.ru";  require 'lk.php';}
    elseif ($this->uri->segment(1) == 'rules') { $my_title = "Правила предоставления займов"; require 'internal-rules.php';}
?> 
   