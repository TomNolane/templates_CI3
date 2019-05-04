<div class="row">
	<nav class="navbar">
		<div class="col-md-12">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					 <?php $logo_addon = '/templates/rublimo/assets/img/logo.png';
							switch ($this->uri->segment(1)) {
									case 'pixell': $logo_addon = '/templates/common/img/logo-fanzaim.png'; break;
									case 'offerwall': $logo_addon = '/templates/common/img/logo-edenga.png'; break;
									default: break;
							} ?>
							<img class="img-responsive" src="<?=$logo_addon?>" alt="Image missing">
				</a>
			</div>
			<div class="navbar-collapsem hidden-xs" id="navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
							О сервисе
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="/about" >О нас</a>
							</li>
							<li>
								<a href="/contacts" >Контакты</a>
							</li>
							<li>
								<a href="/info" >Статьи о займах</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="/zaim-card" >Займ на банковскую карту</a>
							</li>
							<li>
								<a href="/zaim-qiwi" >Займ на QIWI-кошелек</a>
							</li>
							<li>
								<a href="/zaim-yandex" >Займ на Яндекс.Деньги</a>
							</li>
							<li>
								<a href="/zaim-contact" >Займ через Contact</a>
							</li>
							<li>
								<a href="/zaim-bank" >Займ на банковский счет</a>
							</li>
						</ul>
					</li>
					<li>
						<a  href="/form">Получить деньги</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
							Новости
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="/news1" >Где взять займ на карту Сбербанка?</a>
							</li>
							<li>
								<a href="/news2" >Как получить кредит на Яндекс.Деньги?</a>
							</li> 
							<li>
								<a href="/news3" >Мгновенные займы – доступная и удобная услуга</a>
							</li>
							<li>
								<a href="/news4" >Очистить кредитную историю</a>
							</li>
							<li>
								<a href="/news5" >Как получить займ на QIWI кошелек</a>
							</li>
							<li>
								<a href="/news6" >Как получить займ через систему Contact без отказа</a>
							</li>
						</ul>
					</li>
					<li>
						<a  id="test" href="/faq">Вопросы-ответы</a>
					</li>
					<li>
					<a href="" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">Обратная связь</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
							Документы
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="/oferta" >Публичная оферта</a>
							</li>
							<li>
								<a href="/soglasie" >Обработка данных</a>
							</li>
							<li>
								<a href="/rules" >Правила предоставления займов</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav> 
</div>   
<!-- Modal -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header text-center">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h2>
				Заполните форму <br> и наш менеджер свяжется с вами
			</h2>
		</div>
		<div class="modal-body">
			<div class="form-group has-feedback">
				<input type="text" class="form-control ec tip" name="feedback-name" title="Пожалуйста, введите свое имя"
						data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
						data-validation-error-msg="Пожалуйста, введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
            </div>
            <br>
			<div class="form-group">
				<input type="hidden" class="form-control" id="feedback-phone" value="89117778866">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
            </div>
            <br>
			<div class="form-group">
				<textarea id="feedback-comment" rows="3" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea><br>
				<div class=" text-center">
				<button type="button" id="feedback-send" class="btn">Отправить</button>
			</div>
			</div> 
		</div>
	</div>
</div>
</div>
<!-- /Modal -->
<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <h2>Мы вам одобрили предложение. Для получения заполните ваш email и № контактного телефона</h2>
	  <div class="form-group">
	  <p>Номер телефона</p>
		<input type="tel" class="form-control" id="feedback-phone2" placeholder="Номер телефона" value="" required>
	</div>
	<div class="form-group">
		<p>Ваш email</p>
		<input type="email" class="form-control" id="feedback-email2" title="Email" placeholder="Введите ваш email" required>
	</div>
      
	  <button type="button" id="feedback-send" class="btn">Отправить</button>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
			<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
	</svg>
    </div>
  </div>
</div>
<?php
if (!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', ' ', '', 'index', 'form', 'vitrina'))) {
    echo '<div class="row">
  <div class="col-md-12">
    <span id="adsence_about"></span>
  </div>
</div>';
}
?>
