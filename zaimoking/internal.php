<?php
if ($this->uri->segment(1) == 'robots.txt') 
{
	header("Content-type: text/plain");
	require 'internal-robots.txt.php';
} 
else  if ($this->uri->segment(1) == 'mailru-verification3f714b7beeabd383.html') 
{
	header("Content-type: text/html");
	require 'internal-mailru-verification3f714b7beeabd383.html.php';
} 
else
{
$my_title = ''; $description = ''; 
switch($this->uri->segment(1))
{
	case 'about': 
		$my_title = 'Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
		$description = 'Zaimoking.su осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
		break;
	case 'faq': 
		$my_title = 'Часто задаваемые вопросы, возникающие при получении займов'; 
		$description = 'В данном разделе Вы найдете ответы на самые часто задаваемые вопросы об условиях получения срочных займах и особенностях предоставления данных';
		break;
	case 'oferta': 
		$my_title = 'Публичная Оферта Онлайн Сервиса по Предоставлению Займов'; 
		$description = 'Сайт имеет право изменить условия настоящего Соглашения разместив на сайте новою редакцию Соглашения. Изменения вступают в силу через 5 (пять) рабочих дней';
		break;
	case 'documents': 
		$my_title = 'Публичная оферта Онлайн Сервиса по Предоставлению Займов'; 
		$description = 'Сайт имеет право изменить условия настоящего Соглашения разместив на сайте новою редакцию Соглашения. Изменения вступают в силу через 5 (пять) рабочих дней';
		break;
	case 'zaim-card': 
		$my_title = 'Мгновенные Займы на Банковскую Карту Онлайн без Отказа'; 
		$description = 'Хотите получить заем на Вашу банковскую карту в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов в России';
		break;
	case 'zaim-qiwi': 
		$my_title = 'Получение Займа Онлайн на Киви Кошелек Круглосуточно'; 
		$description = 'Заём на QIWI-кошелек – это отличный способ быстро получить деньги.Уже спустя максимум полчаса у вас на счету появятся средства';
		break;
	case 'zaim-yandex': 
		$my_title = 'Получение Срочных Займов на Яндекс.Деньги БЕЗ Отказа'; 
		$description = 'Благодаря нашему онлайн-сервису, Вы можете мгновенно получить денежный заем через платежную систему Yandex без поручителей и справок круглосуточно';
		break;
	case 'zaim-contact': 
		$my_title = 'Получить Займ через Систему Contact Быстро'; 
		$description = 'Чтобы получить быстрые деньги переводом Контакт,нужно заполнить форму на нашем сайте, после чего в течение 10 минут будет прислан ответ предоставлении займа';
		break;
	case 'zaim-bank': 
		$my_title = 'Срочный Займ на Банковский Счет БЕЗ Проверок'; 
		$description = 'Оформление моментального займа на банковский счет в среднем занимает 15 минут без отказа и поручителей, мы принимаем заявки круглосуточно';
		break;
	case 'zaim-bank': 
		$my_title = 'Срочный Займ на Банковский Счет БЕЗ Проверок'; 
		$description = 'Оформление моментального займа на банковский счет в среднем занимает 15 минут без отказа и поручителей, мы принимаем заявки круглосуточно';
		break;
	case 'agree': 
		$my_title = 'Пользовательское Соглашение для Получения Займа'; 
		$description = 'Для того, чтобы Клиент мог получить необходимый ему займ, он должен предоставить только достовереные и актуальные персональные данные';
		break;
	case 'soglasie': 
		$my_title = 'Соглашение на Обработку Данных для Получения Займа'; 
		$description = 'Условия получения мгновенных займов и кредитов с помощью лучшего онлайн сервиса  Zaimoking.su с самой низкой процентной ставкой';
		break;
	case 'rules': 
		$my_title = 'Основные Правила для Предоставления Срочных Займов'; 
		$description = 'Онлайн сервис  Zaimoking.su предоставления срочных займов и кредитов с самой низкой процентной ставкой предоставляет условия для получения займов';
        break;
    case 'allarticles': 
		$my_title = 'Статьи о займах'; 
		$description = 'Актуальные статьи о займах и кредитах. О том как правильно взять займ, погасить его, как  оформить заявку на кредит с плохой кредитной историей и многое другое.';
		break;


	case 'without_check':
		$my_title = 'Срочный займ без проверки кредитной истории: как получить?'; 
		$description = 'Банк вправе отказать потенциальному заемщику в выдаче срочных денег, если кредитная история негативная
		или вовсе отсутствует. Однако существуют иные способы получения займов в подобной ситуации.';
		break;
	case 'microloans':
		$my_title = 'Микрозаймы и современные технологии'; 
		$description = 'Предоставление личных займов через онлайн заявки. Этот тренд сделал микрокредитование в нашей стране ещё более доступным. Не нужно приезжать в офис компании, займы оформляются не выходя из дома в онлайн режиме за 10-20 минут.';
		break;
	case 'urgent-loans':
		$my_title = 'Способы срочного получения займов'; 
		$description = ' Отдавайте предпочтение микрофинансовым компаниям, работающим онлайн. Это может быть не только сайт, но и сервис-агрегатор личных займов (например, ZaimoKing). Для получения денег нужно совершить лишь ряд простых шагов: выбрать срок и необходимую сумму онлайн займа, заполнить стандартную анкету и указать нужный вариант получения средств. Займ на карту приходит, как правило, в течение 10-15 минут.';
		break;

	default: $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; $description = 'Zaimoking.su - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!'; break;
} 
    if ($this->uri->segment(1) == 'about') require 'internal-about.php';
    elseif ($this->uri->segment(1) == 'faq') require 'internal-faq.php';
    elseif ($this->uri->segment(1) == 'rules') require 'internal-rules.php';
	elseif ($this->uri->segment(1) == 'oferta') require 'internal-oferta.php';
	elseif ($this->uri->segment(1) == 'soglasie') require 'internal-soglasie.php';
	elseif ($this->uri->segment(1) == 'zaim-bank') require 'internal-zaim-bank.php'; 
	elseif ($this->uri->segment(1) == 'zaim-qiwi') require 'internal-zaim-qiwi.php';
	elseif ($this->uri->segment(1) == 'zaim-yandex') require 'internal-zaim-yandex.php';
	elseif ($this->uri->segment(1) == 'zaim-contact') require 'internal-zaim-contact.php';
	elseif ($this->uri->segment(1) == 'zaim-card') require 'internal-zaim-card.php';
	elseif ($this->uri->segment(1) == 'allarticles') require 'internal-allarticles.php';
	elseif ($this->uri->segment(1) == 'without_check') require 'internal-without_check.php';
	elseif ($this->uri->segment(1) == 'microloans') require 'internal-microloans.php';
	elseif ($this->uri->segment(1) == 'urgent-loans') require 'internal-urgent-loans.php';
	elseif($this->uri->segment(1) == '404') require 'internal-404.php';
}
?>