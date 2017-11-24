<?php 
$my_title = ''; $description = '';
switch($this->uri->segment(1))
{
	case 'about': 
		$my_title = 'Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
		$description = 'Zaimol осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
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
		$description = 'Условия получения мгновенных займов и кредитов с помощью лучшего онлайн сервиса  Zaimol с самой низкой процентной ставкой';
		break;
	case 'rules': 
		$my_title = 'Основные Правила для Предоставления Срочных Займов'; 
		$description = 'Онлайн сервис  Zaimol предоставления срочных займов и кредитов с самой низкой процентной ставкой предоставляет условия для получения займов';
		break; 
	case 'microcredit': 
		$my_title = 'Микрозаймы vs кредиты: преимущества и недостатки'; 
		$description = 'По статистике, около 75% россиян хотя бы однократно прибегали к услугам банком и МФО, чтобы взять кредит или микрозайм. Что же выбрать, если вам срочно потребовались деньги? Ответ на этот вопрос неоднозначен: он зависит от ваших целей и возможностей.';
		break;
	case 'denial': 
		$my_title = 'В заеме отказано?'; 
		$description = 'На некоторые «грехи» клиентов МФО готовы смотреть сквозь пальцы. Не является препятствием для получения займа отсутствие официального трудоустройства или «серая» зарплата, наличие других непогашенных кредитов или займов. ';
		break;
	case 'benefit': 
		$my_title = 'Почему выгодно быть постоянным клиентом МФО?'; 
		$description = 'Постоянные клиенты необходимы всем кредитным организациям. Однако в условии серьезной конкуренции нет гарантий, что клиент обратится в ту же МФО повторно, даже если его все устроило. Он будет искать самые интересные и выгодные предложения. Значит, чтобы клиент вернулся, эти самые предложения нужно создать. Но сначала отметим самый важный момент.';
		break;
	case 'advantages': 
		$my_title = 'Основные Правила для Предоставления Срочных Займов'; 
		$description = 'Онлайн сервис  Zaimol предоставления срочных займов и кредитов с самой низкой процентной ставкой предоставляет условия для получения займов';
		break;
	case 'money': 
		$my_title = 'Способы получения займа'; 
		$description = 'Способы получения займа на яндекс дененьги, qiwi-кошелек, банковскую карту и через Contact';
		break;
	case 'documents': 
		$my_title = 'Документы Zaimol '; 
		$description = 'Способы получения займа на яндекс дененьги, qiwi-кошелек, банковскую карту и через Contact';
		break;
	default: $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; $description = 'Zaimol - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!'; break;
}

require 'header.php'; 
?> 

<?php

	if ($this->uri->segment(1) == 'about') 
	{ 
		require 'internal-about.php'; 
	} 
	elseif($this->uri->segment(1) == 'faq')
	{  
		require 'internal-faq.php'; 
	}
	elseif($this->uri->segment(1) == '404')
	{  
		require 'internal-404.php';  
	}
	elseif ($this->uri->segment(1) == 'info')
	{ 
		require 'internal-info.php'; 
	}
	elseif ($this->uri->segment(1) == 'oferta') 
	{ 
		require 'internal-oferta.php'; 
	}
	elseif ($this->uri->segment(1) == 'agree')
	{ 
		require 'internal-agree.php'; 
	} 
	elseif ($this->uri->segment(1) == 'soglasie') 
	{ 
		require 'internal-soglasie.php'; 
	} 
	elseif ($this->uri->segment(1) == 'rules')
	{ 
		require 'internal-rules.php'; 
	}
	elseif ($this->uri->segment(1) == 'contacts')
	{ 
		require 'internal-contacts.php'; 
	} 
	elseif ($this->uri->segment(1) == 'allarticles')
	{ 
		require 'internal-allarticles.php'; 
	} 
	elseif ($this->uri->segment(1) == 'microcredit')
	{ 
		require 'internal-microcredit.php'; 
	} 
	elseif ($this->uri->segment(1) == 'denial')
	{ 
		require 'internal-denial.php'; 
	}
	elseif ($this->uri->segment(1) == 'benefit')
	{ 
		require 'internal-benefit.php'; 
	}
	elseif ($this->uri->segment(1) == 'advantages')
	{ 
		require 'internal-advantages.php'; 
	}
	elseif ($this->uri->segment(1) == 'money')
	{ 
		require 'internal-money.php'; 
	}
	elseif ($this->uri->segment(1) == 'documents')
	{ 
		require 'internal-documents.php'; 
	}
	elseif ($this->uri->segment(1) == 'zaim-card') {  require 'internal-zaim-card.php'; }
	elseif ($this->uri->segment(1) == 'zaim-qiwi') { require 'internal-zaim-qiwi.php'; }
	elseif ($this->uri->segment(1) == 'zaim-yandex') {  require 'internal-zaim-yandex.php';  }
	elseif ($this->uri->segment(1) == 'zaim-contact') {  require 'internal-zaim-contact.php';  }
	elseif ($this->uri->segment(1) == 'zaim-bank') {  require 'internal-zaim-bank.php';  }
	 
	
?>
<?php require 'footer.php'; ?>