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
		$description = 'Fanzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
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
		$description = 'Условия получения мгновенных займов и кредитов с помощью лучшего онлайн сервиса  Fanzaim с самой низкой процентной ставкой';
		break;
	case 'rules': 
		$my_title = 'Основные Правила для Предоставления Срочных Займов'; 
		$description = 'Онлайн сервис  Fanzaim предоставления срочных займов и кредитов с самой низкой процентной ставкой предоставляет условия для получения займов';
        break;
    case 'allarticles': 
		$my_title = 'Статьи о займах'; 
		$description = 'Актуальные статьи о займах и кредитах. О том как правильно взять займ, погасить его, как  оформить заявку на кредит с плохой кредитной историей и многое другое.';
		break;
	case 'micofinance':
		$my_title = 'Микрофинансовые организации и их роль'; 
		$description = 'Микрофинансовые организации (МФО) – это небанковские финансовые организации. Они обеспечивают потребности в микрозаймах малого и среднего бизнеса, а также домашних хозяйств.';
		break;
	case 'microcredit':
		$my_title = 'Микрокредиты и их преимущества'; 
		$description = 'В жизни многих людей происходят ситуации, когда всё идёт не по плану и очень срочно нужны деньги. Зачастую банки не могут выдать человеку нужную сумму незамедлительно. На это может быть множество причин: отсутствие у заемщика постоянной работы, несоответствие возрастной категории, испорченная кредитная история, низкий уровень зарплаты.';
		break;
	case 'accumulate':
		$my_title = 'Как накопить деньги: основные принципы'; 
		$description = 'Каждый из нас хотя бы раз сталкивался с недостатком денежных средств. Конечно же, это не самый приятный момент, но и впадать в депрессивное состояние из-за этого абсолютно не стоит (хотя бы потому, что существуют сервисы срочной финансовой помощи).';
		break;
	case '9-rules':
		$my_title = '9 правил для гармоничных отношений с деньгами'; 
		$description = 'Предлагаем эти девять способов оптимизации вашего бюджета. И кто знает, может быть, они помогут стать вам немного счастливее.';
		break;
	case 'harmony':
		$my_title = 'С чем нужно определиться перед тем, как взять займ'; 
		$description = 'Решили взять онлайн микрозайм? Тогда предлагаем вам задать себе следующие вопросы:';
		break;
	case 'problems':
		$my_title = 'Как снять финансовый стресс и не волноваться'; 
		$description = 'Деньги и неудовлетворительное финансовое состояние являются одной из главнейших причин повседневного стресса – подтверждают исследования.';
		break;
	default: $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; $description = 'Fanzaim - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!'; break;
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
	elseif ($this->uri->segment(1) == 'micofinance') require 'internal-micofinance.php';
	elseif ($this->uri->segment(1) == 'microcredit') require 'internal-microcredit.php';
	elseif ($this->uri->segment(1) == 'accumulate') require 'internal-accumulate.php';
	elseif ($this->uri->segment(1) == 'allarticles') require 'internal-allarticles.php';
	elseif ($this->uri->segment(1) == '9-rules') require 'internal-9-rules.php';
	elseif ($this->uri->segment(1) == 'harmony') require 'internal-harmony.php';
	elseif ($this->uri->segment(1) == 'problems') require 'internal-problems.php';
	elseif($this->uri->segment(1) == '404') require 'internal-404.php';
}
?>