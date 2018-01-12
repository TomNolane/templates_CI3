<?php 
$my_title = ''; $description = ''; 
switch($this->uri->segment(1))
{
	case 'about': 
		$my_title = 'O serwisie'; 
		$description = 'Niespodziewana sytuacja może stanąć na drodze, wywołać bezradność i rozczarowanie. Gdzie się
		zwrócić, gdy potrzebne są pieniądze, bardzo pilnie, a nawet bliscy ludzie nie mogą pomóc?';
		break;
	case 'documents': 
		$my_title = 'Публичная оферта, Согласие на обработку данных, Правила предоставления займов'; 
		$description = 'Сайт имеет право изменить условия настоящего Соглашения разместив на сайте новою редакцию Соглашения. Изменения вступают в силу через 5 (пять) рабочих дней';
		break;
	case 'faq': 
		$my_title = 'Часто задаваемые вопросы, возникающие при получении займов'; 
		$description = 'В данном разделе Вы найдете ответы на самые часто задаваемые вопросы об условиях получения срочных займах и особенностях предоставления данных';
		break;
	case 'article1': 
		$my_title = 'Co oznacza odroczenie spłaty pożyczki?'; 
		$description = 'Składając wniosek do organizacji mikrofinansowej (OMF), przyszły pożyczkobiorca ma nadzieję na
		terminową spłatę zadłużenia.';
		break;
	case 'article2': 
		$my_title = 'Podstawowe metody pozyskiwania pożyczek online'; 
		$description = 'W tym artykule rozpatrzymy najczęstsze opcje uzyskiwania pożyczek online.
		- Na kartę płatniczą VISA lub Maestro. Według tradycji jest to najpopularniejsza opcja uzyskania
		pożyczki. Łatwość użytkowania i szybkie wpłynięcie środków to główne cechy pożyczki online na
		kartę.';
		break;
	case 'article3': 
		$my_title = 'PJak wybrać organizację mikrofinansową?'; 
		$description = 'Wybierając organizację mikrofinansową (OMF) do zaciągnięcia osobistej pożyczki online, należy
		wziąć pod uwagę szereg parametrów.';
		break;

	default: $my_title = 'Pożyczki online - szybkie i na raty - Microdengi'; $description = 'Microdengi -zawiera oceny i opinie o instytucjach mikrofinansowych, działających w Polsce, szybkie chwilówki online, a także aktualności z firm!'; break;
} 
    if ($this->uri->segment(1) == 'about') require 'internal-about.php';
	elseif ($this->uri->segment(1) == 'faq') require 'internal-faq.php';
	elseif ($this->uri->segment(1) == 'documents') require 'internal-documents.php';
	elseif ($this->uri->segment(1) == 'article1') require 'internal-article1.php';
	elseif ($this->uri->segment(1) == 'article2') require 'internal-article2.php';
	elseif ($this->uri->segment(1) == 'article3') require 'internal-article3.php';
?>