<?php
    if ($this->uri->segment(1) == 'about') { $my_title = "о сервисе Dengibystra.ru"; require 'internal-about.php';} 
    elseif ($this->uri->segment(1) == 'form') { $my_title = "Заполните анкету!"; require 'form.php';}
    elseif ($this->uri->segment(1) == 'agreement') { $my_title = "Согласие на обработку данных"; require 'internal-agreement.php';}
    elseif ($this->uri->segment(1) == 'faq') { $my_title = "Вопрос-ответ Dengibystra.ru"; require 'internal-faq.php';}
    elseif ($this->uri->segment(1) == 'documents') { $my_title = "Правовые документы Dengibystra.ru"; require 'internal-documents.php';}
    elseif ($this->uri->segment(1) == 'contract'){ $my_title = "Пользовательское соглашение"; require 'internal-contract.php'; }
    elseif ($this->uri->segment(1) == 'oferta') { $my_title = "Публичная оферта"; require 'internal-oferta.php';}
    elseif ($this->uri->segment(1) == 'zaim'){ $my_title = "Займ на Dengibystra.ru"; require 'internal-zaim.php';}
    elseif ($this->uri->segment(1) == 'thanks'){ $my_title = "Спасибо от Dengibystra.ru";  require 'internal-thanks.php';}
    elseif ($this->uri->segment(1) == 'rules') { $my_title = "Правила предоставления займов"; require 'internal-rules.php';}
    elseif ($this->uri->segment(1) == 'lk') { $my_title = "Правила предоставления займов"; require 'lk.php';} 
?> 
   