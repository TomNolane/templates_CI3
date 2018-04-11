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
    $description = 'Edenga осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
    break;
case 'contacts': 
    $my_title = 'Где Лучше Взять Срочный Займ без Отказа'; 
    $description = 'Здесь Вы найдете подробную информацию о кредиторах, представленных на нашем онлайн сервисе экстренных денежных займов и кредитов';
    break;
case 'faq': 
    $my_title = 'Часто Задаваемые Вопросы, Возникающие при Получении Займов'; 
    $description = 'В данном разделе Вы найдете ответы на самые часто задаваемые вопросы об условиях получения срочных займах и особенностях предоставления данных';
    break;
case 'info': 
    $my_title = 'Как Получить Мгновенный Онлайн Займ БЕЗ Отказа'; 
    $description = 'Подробная информация о получении срочных займов: какие проценты, возможности возврата займа наличными или имуществом,нужно ли платить налог с договора займа';
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
case 'agree': 
    $my_title = 'Пользовательское Соглашение для Получения Займа'; 
    $description = 'Для того, чтобы Клиент мог получить необходимый ему займ, он должен предоставить только достовереные и актуальные персональные данные';
    break;
case 'soglasie': 
    $my_title = 'Соглашение на Обработку Данных для Получения Займа'; 
    $description = 'Условия получения мгновенных займов и кредитов с помощью лучшего онлайн сервиса  Edenga с самой низкой процентной ставкой';
    break;
case 'rules': 
    $my_title = 'Основные Правила для Предоставления Срочных Займов'; 
    $description = 'Онлайн сервис  Edenga предоставления срочных займов и кредитов с самой низкой процентной ставкой предоставляет условия для получения займов';
    break;
case 'credits': 
    $my_title = 'Непосильные кредиты: как не попасть в долговую яму'; 
    $description = 'К сожалению, обилие и доступность кредитных предложений на рынке России привело и к возникновению большого количества неплатежей.';
    break;
case 'restructuring':
    $my_title = 'Реструктуризация кредита'; 
    $description = 'Первый шаг – обращение в те банки, где вы взяли кредиты. Реструктуризация долга означает, что банк изменит условия по вашему кредитному договору.';
    break;
case 'refinancing':
    $my_title = 'Рефинансирование';
    $description = 'Хотя % ставка на кредиты за последние годы снизилась, многие люди вынуждены продолжать платить по более высоким ставкам, так как кредиты были взяты ранее.';
    break;
case 'insolvency': 
    $my_title = 'Банкротство физических лиц'; 
    $description = 'Крайняя мера, которая потребует 6-9 месяцев времени, оплату госпошлины и финансового вознаграждения арбитражному управляющему.';
    break;
case 'docs': 
    $my_title = 'Основные Правила для Предоставления Срочных Займов'; 
    $description = 'Онлайн сервис  Edenga предоставления срочных займов и кредитов с самой низкой процентной ставкой предоставляет условия для получения займов';
    break;
case 'money': 
    $my_title = 'Получение денег Edenga'; 
    $description = 'Их можно будет обналичить или потратить в Интернете.проверок кредитной истории и не выходя из дома.';
    break;
case 'borrow': 
    $my_title = 'Где взять деньги в долг, если в кредите отказано'; 
    $description = 'Ситуация, когда деньги нужны срочно, может возникнуть у каждого человека. Но как быть, если взять кредит в банке невозможно и вам везде отказывают? Давайте рассмотри альтернативные пути решения проблемы.';
    break;
case 'targets': 
    $my_title = 'Для каких целей чаще всего берут микрокредиты'; 
    $description = 'Появление системы микрокредитования изначально было связано с желанием помочь бедным людям открыть свое дело. Если говорить о дне сегодняшнем, то чаще всего россияне берут небольшие займы для иных целей. Хотя МФО и не спрашивают своих заемщиков об этих целях, общая картина у них имеется и в большинстве случаев она совпадает.';
    break;
case 'executive-production': 
    $my_title = 'Исполнительное производство'; 
    $description = 'Появление системы микрокредитования изначально было связано с желанием помочь Если вы не смогли вернуть кредит в срок, не смогли его реструктуризировать или рефинансировать, возвращать деньги все равно придется. Сегодня мы расскажем о том, как происходит исполнительное производство.';
    break; 
case 'fix-credit': 
    $my_title = 'Исправление кредитной истории'; 
    $description = 'Репутация человека складывается годами, а потерять ее порой можно из-за одного необдуманного поступка. Все это в полной мере относится и к кредитной репутации. Однако если поменять свою жизнь можно, сменив место жительства, работу, круг общения, то с банками такой номер не пройдет.';
    break;
case 'history-of-microloans': 
    $my_title = 'История появления микрозаймов в мире и в России'; 
    $description = 'Во все времена людям не хватало собственных средств, чтобы начать свое дело. Именно на такую помощь и была направлена концепция микрозаймов. Ее основоположником стал профессор экономики Юнус Мухаммед, который долгое время жил в Бангладеше.';
    break; 
case 'promotion': 
    $my_title = 'Как МФО поощряют постоянных клиентов'; 
    $description = 'За своих клиентов нужно бороться – и крупные МФО стараются показать ясные финансовые выгоды от постоянного сотрудничества с ними. Разумеется, речь идет о тех случаях, когда деньги по микрозайму клиент возвращает точно в срок или досрочно.';
    break;
case 'rate': 
    $my_title = 'Оцените свои возможности: почему кредиты могут стать непосильными'; 
    $description = 'Россияне не снижают темпы использования кредитов: на начало 2017 г количество заемщиков составило 44,7 млн человек. Из числа работающего населения более 60% людей имеют кредиты. А каждая пятая семья вынуждена отдавать более 50% совокупного дохода на обслуживание кредитов и выплаты по ним.';
    break;
case 'errors': 
    $my_title = 'Оцените свои возможности: почему кредиты могут стать непосильными'; 
    $description = 'Россияне не снижают темпы использования кредитов: на начало 2017 г количество заемщиков составило 44,7 млн человек. Из числа работающего населения более 60% людей имеют кредиты. А каждая пятая семья вынуждена отдавать более 50% совокупного дохода на обслуживание кредитов и выплаты по ним.';
    break;
case 'errors': 
    $my_title = '5 типичных ошибок заемщиков'; 
    $description = 'Как бы срочно не хотелось получить микрозайм, потратьте немного времени на изучение договора перед его оформлением. Это избавит вас от неожиданных переплат, а также поможет сохранить хорошую кредитную историю.';
    break;
case 'articles': 
    $my_title = 'Статьи о займах'; 
    $description = 'Актуальные статьи о займах и кредитах. О том как правильно взять займ, погасить его, как  оформить заявку на кредит с плохой кредитной историей и многое другое.';
    break;
default: $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; $description = 'Edenga - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!'; break;
}
require 'header.php'; 
?>
<div class="clearfix">&nbsp;</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php
          if ($this->uri->segment(1) == 'about') {require 'internal-about.php';}
          elseif ($this->uri->segment(1) == 'contacts') {require 'internal-contacts.php';}
          elseif ($this->uri->segment(1) == 'faq') {require 'internal-faq.php';}
          elseif ($this->uri->segment(1) == 'info') {require 'internal-info.php';}
          elseif ($this->uri->segment(1) == 'reviews') {require 'internal-reviews.php';}
          elseif ($this->uri->segment(1) == 'zaim') {require 'internal-zaim.php';}
          elseif ($this->uri->segment(1) == 'docs') {require 'internal-docs.php';}
          elseif ($this->uri->segment(1) == 'service') {require 'internal-service.php';}
          elseif ($this->uri->segment(1) == 'article') {require 'internal-article.php';}
          elseif($this->uri->segment(1) == '404') require 'internal-404.php';
			?>
    </div>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div> 
<?php require 'footer.php'; }?>