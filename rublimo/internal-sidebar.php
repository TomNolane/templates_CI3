<?php
if ($this->uri->segment(1) == 'about' || $this->uri->segment(1) == 'contacts' || $this->uri->segment(1) == 'info' || $this->uri->segment(1) == 'zaim-card' || $this->uri->segment(1) == 'zaim-qiwi' || $this->uri->segment(1) == 'zaim-yandex' || $this->uri->segment(1) == 'zaim-contact' || $this->uri->segment(1) == 'zaim-bank' || $this->uri->segment(1) == 'history2')
{
?>

<div>
	<a href="/about" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'about') echo ' active'; ?>"><span class="pull-left">О нас</span><i class="fa fa-bookmark fa-fw fa-lg pull-right"></i><div class="clearfix"></div></a>
	<a href="/contacts" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'contacts') echo ' active'; ?>"><span class="pull-left">Контакты</span><i class="fa fa-user fa-fw fa-lg pull-right"></i><div class="clearfix"></div></a>
	<a href="/info" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'info') echo ' active'; ?>"><span class="pull-left">Статьи о займах</span><i class="fa fa-file-text fa-fw fa-lg pull-right"></i><div class="clearfix"></div></a>
	<!-- <a href="/history2" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'history2') echo ' active'; ?>"><span class="pull-left">Улучшение кредитной<br>истории</span><i class="fa fa-file-text fa-fw fa-lg pull-right"></i><div class="clearfix"></div></a> -->
	<a href="/zaim-card" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'zaim-card') echo ' active'; ?>">Займ на банковскую карту</a>
	<a href="/zaim-qiwi" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'zaim-qiwi') echo ' active'; ?>">Займ на QIWI кошелёк</a>
	<a href="/zaim-yandex" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'zaim-yandex') echo ' active'; ?>">Займ на Яндекс.Деньги</a>
	<a href="/zaim-contact" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'zaim-contact') echo ' active'; ?>">Займ через CONTACT</a>
	<a href="/zaim-bank" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'zaim-bank') echo ' active'; ?>">Займ на банковский счёт</a>
</div>

<?php
}
elseif ($this->uri->segment(1) == 'oferta' || $this->uri->segment(1) == 'agree' || $this->uri->segment(1) == 'soglasie' || $this->uri->segment(1) == 'rules' )
{
?>

<div class="docs-sidebar">
	<a href="/oferta" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'oferta') echo ' active'; ?>">Публичная оферта</a>
	<!-- <a href="/agree" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'agree') echo ' active'; ?>">Пользовательское соглашение</a> -->
	<a href="/soglasie" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'soglasie') echo ' active'; ?>">Согласие на обработку данных</a>
	<a href="/rules" class="btn btn-menu btn-block<?php if ($this->uri->segment(1) == 'rules') echo ' active'; ?>">Правила предоставления займов</a>
</div>

<?php
}
elseif ($this->uri->segment(1) == 'zaim-card' || $this->uri->segment(1) == 'zaim-qiwi' || $this->uri->segment(1) == 'zaim-yandex' || $this->uri->segment(1) == 'zaim-contact' || $this->uri->segment(1) == 'zaim-bank')
{
?> 

<?php
}

echo '<div id="faq" class="hidden-xs">';

if ($this->uri->segment(1) == 'faq') echo '<img src="/templates/rublimo/img/faq.png" alt="rublimo.ru">';
elseif ($this->uri->segment(1) == 'zaim-card') echo '<img src="/templates/rublimo/img/zaim/card.png" alt="rublimo.ru">';
elseif ($this->uri->segment(1) == 'zaim-qiwi') echo '<img src="/templates/rublimo/img/zaim/qiwi.png" alt="rublimo.ru">';
elseif ($this->uri->segment(1) == 'zaim-yandex') echo '<img src="/templates/rublimo/img/zaim/yandex.png" alt="rublimo.ru">';
elseif ($this->uri->segment(1) == 'zaim-contact') echo '<img src="/templates/rublimo/img/zaim/contact.png" alt="rublimo.ru">';
elseif ($this->uri->segment(1) == 'zaim-bank') echo '<img src="/templates/rublimo/img/zaim/bank.png" alt="rublimo.ru">';

echo '</div>';
?>