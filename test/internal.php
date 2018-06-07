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
			$description = 'zaimhome осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
			break;
		case 'contacts': 
			$my_title = 'Где лучше взять срочный Займ без отказа'; 
			$description = 'Здесь Вы найдете подробную информацию о кредиторах, представленных на нашем онлайн сервисе экстренных денежных займов и кредитов';
			break;
		case 'faq': 
			$my_title = 'Часто задаваемые вопросы, возникающие при получении займов'; 
			$description = 'В данном разделе Вы найдете ответы на самые часто задаваемые вопросы об условиях получения срочных займах и особенностях предоставления данных';
			break;
		case 'info': 
			$my_title = 'Как получить мгновенный онлайн займ БЕЗ Отказа'; 
			$description = 'Подробная информация о получении срочных займов: какие проценты, возможности возврата займа наличными или имуществом,нужно ли платить налог с договора займа';
			break;
		case 'docs': 
			$my_title = 'Публичная оферта Онлайн Сервиса по Предоставлению Займов'; 
			$description = 'Сайт имеет право изменить условия настоящего Соглашения разместив на сайте новою редакцию Соглашения. Изменения вступают в силу через 5 (пять) рабочих дней';
			break;
		case 'oferta': 
			$my_title = 'Публичная Оферта Онлайн Сервиса по Предоставлению Займов'; 
			$description = 'Сайт имеет право изменить условия настоящего Соглашения разместив на сайте новою редакцию Соглашения. Изменения вступают в силу через 5 (пять) рабочих дней';
			break;
		case 'money': 
			$my_title = 'Способы получения займа'; 
			$description = 'Способы получения займа на яндекс дененьги, qiwi-кошелек, банковскую карту и через Contact';
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
			$description = 'Условия получения мгновенных займов и кредитов с помощью лучшего онлайн сервиса  zaimhome с самой низкой процентной ставкой';
			break;
		case 'rules': 
			$my_title = 'Основные Правила для Предоставления Срочных Займов'; 
			$description = 'Онлайн сервис  zaimhome предоставления срочных займов и кредитов с самой низкой процентной ставкой предоставляет условия для получения займов';
			break;
		case 'news1': 
			$my_title = 'Где взять займ на карту Сбербанка?'; 
			$description = 'Сбербанк - самое популярное финучреждение у россиян. Обладателями его карт являются более 80% граждан РФ. Широкий спектр услуг и карточных продуктов Сбербанка в совокупности с его высоким уровнем надежности делают его таким распространенным.';
			break;
		case 'news2': 
			$my_title = 'Как получить онлайн-кредит на кошелек Яндекс.Деньги?'; 
			$description = 'Оформление займа на Яндекс.Кошелек - самый быстрый способ получить нужную сумму. Перевод осуществляется буквально в течение
			2-3 минут, тогда как на банковскую карточку или другую электронную систему - часто сутки и более. Если вы не хотите тратить
			ни секунды личного времени, такой вид займа для вас.';
			break;
			case 'news3': 
			$my_title = 'Мгновенные займы – доступная и удобная услуга'; 
			$description = 'В условиях затянувшегося кризиса сложно отыскать человека, который ни разу не одалживал деньги у знакомых или не пользовался услугами кредитования.';
			break;
		case 'news4': 
			$my_title = 'Можно ли самостоятельно улучшить или очистить (исправить) кредитную историю'; 
			$description = 'Выражение – кредитная история слышали многие люди, обратившиеся к банковским структурам, у которых возникли финансовые затруднения.';
			break;
		case 'news5': 
			$my_title = 'Как получить займ на QIWI кошелек?'; 
			$description = 'Ситуация, когда срочно нужны деньги, знакома каждому из нас. Для некоторых подобный форс-мажор наступает перед самой зарплатой, в особенности, когда ее задерживают на денек другой, для других появляется неожиданная возможность сделать выгодное приобретение.';
			break;
		case 'news6': 
			$my_title = 'Как получить займ через систему Contact без отказа?'; 
			$description = 'Жизнь сегодня течет куда быстрее, чем 100, 50 и даже 10 лет назад. Человечество постоянно куда-то очень торопится и почему-то всегда опаздывает. Темп, задаваемый миром, требует все более быстрого принятия решений в любой ситуации.';
			break;
		default: $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; $description = 'zaimhome - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!'; break;
	}

		if ($this->uri->segment(1) == 'about') { require 'internal-about.php';} 
		elseif ($this->uri->segment(1) == 'form') { require 'form.php';}
		elseif ($this->uri->segment(1) == 'agreement') {  require 'internal-agreement.php';}
		elseif ($this->uri->segment(1) == 'faq') { require 'internal-faq.php';}
		elseif ($this->uri->segment(1) == 'documents') { require 'internal-documents.php';}
		elseif ($this->uri->segment(1) == 'contract'){ require 'internal-contract.php'; }
		elseif ($this->uri->segment(1) == 'oferta') { require 'internal-oferta.php';}
		elseif ($this->uri->segment(1) == 'money'){ require 'internal-money.php';}
		elseif ($this->uri->segment(1) == 'lk'){ $my_title = "Вам автоматически одобрен займ";  require 'lk.php';}
		elseif ($this->uri->segment(1) == 'rules') { require 'internal-rules.php';}
		elseif ($this->uri->segment(1) == 'news1') { require 'internal-news1.php'; }
		elseif ($this->uri->segment(1) == 'news2') { require 'internal-news2.php';  }
		elseif ($this->uri->segment(1) == 'news3')  { require 'internal-news3.php'; }
		elseif ($this->uri->segment(1) == 'news4') { require 'internal-news4.php'; }
		elseif ($this->uri->segment(1) == 'news5') { require 'internal-news5.php'; }
		elseif ($this->uri->segment(1) == 'news6') { require 'internal-news6.php'; }
}
?> 
   