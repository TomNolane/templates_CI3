<?php
if ($this->uri->segment(1) == 'robots.txt') 
{
	header("Content-type: text/plain");
	require 'internal-robots.txt.php';
}
else
{
	$my_title = ''; $description = '';
	switch($this->uri->segment(1))
	{
		case 'about': 
		$my_title = 'Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
		$description = 'Dengomir осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
		break;
	case 'faq': 
		$my_title = 'Часто задаваемые вопросы, возникающие при получении займов'; 
		$description = 'В данном разделе Вы найдете ответы на самые часто задаваемые вопросы об условиях получения срочных займах и особенностях предоставления данных';
		break;
	case 'oferta': 
		$my_title = 'Публичная Оферта Онлайн Сервиса по Предоставлению Займов'; 
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
		$description = 'Условия получения мгновенных займов и кредитов с помощью лучшего онлайн сервиса  Dengomir с самой низкой процентной ставкой';
		break;
	case 'rules': 
		$my_title = 'Основные Правила для Предоставления Срочных Займов'; 
		$description = 'Онлайн сервис  Dengomir предоставления срочных займов и кредитов с самой низкой процентной ставкой предоставляет условия для получения займов';
        break;
    case 'allarticles': 
		$my_title = 'Статьи о займах'; 
		$description = 'Актуальные статьи о займах и кредитах. О том как правильно взять займ, погасить его, как  оформить заявку на кредит с плохой кредитной историей и многое другое.';
		break;


	case 'compare':
		$my_title = 'Сравнение микрофинансовых организаций и банков'; 
		$description = 'Безусловно, функционирование микрофинансовых организаций (МФО) может напоминать работу банковской
		системы. Но всё же отличия существуют. Работа МФО подразумевает более заметные риски, поэтому
		они вынуждены предоставлять займы под большие проценты и на короткий срок – в отличие от
		банковских учреждений. Данный момент компенсируется таким удобством, как оформление займа онлайн
		и за считанные минуты.';
		break;
	case 'online-loans':
		$my_title = 'Онлайн займы и их особенности'; 
		$description = 'С началом работы онлайн сервисов микрофинансовых организаций (МФО) у граждан России появилась
		удобная возможность получать займы не выходя из дома.';
		break;
	case 'repay':
		$my_title = 'Как правильно погашать займы'; 
		$description = 'Выплата еженедельных платежей по личному займу зачастую осуществляется в кассу микрофинансовой
		организации. При этом обязанность по оплате каждого платежа по займу исполнена, если при этом
		получен приходной кассовый ордер.';
		break;
	case 'refinancing':
		$my_title = 'Рефинансирование займов и кредитов'; 
		$description = 'В последние годы отмечается высокая актуальность такой услуги, как рефинансирование кредитов и
		займов. Без сомнения, для заемщика это замечательная возможность скорректировать некоторые
		моменты по своему кредиту, а для самих банков – расширить базу клиентов.';
		break;


	default: $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; $description = 'Dengomir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!'; break;

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
	elseif ($this->uri->segment(1) == 'compare') require 'internal-compare.php';
	elseif ($this->uri->segment(1) == 'online-loans') require 'internal-online-loans.php';
	elseif ($this->uri->segment(1) == 'repay') require 'internal-repay.php';
	elseif ($this->uri->segment(1) == 'allarticles') require 'internal-allarticles.php';
	elseif ($this->uri->segment(1) == 'refinancing') require 'internal-refinancing.php';
	elseif($this->uri->segment(1) == '404') require 'internal-404.php';
}
?> 
   