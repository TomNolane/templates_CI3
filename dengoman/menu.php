<nav class="navbar">
	<div class="container">
		<a class="anchor" name="id1"></a>
		<div class="navbar-header">
			<a class="navbar-brand" href="/"><img alt="logo.png" src="/templates/dengoman/assets/img/logo.png"></a>
			<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Раскрыть меню</span>
				<i class="glyphicon glyphicon-menu-hamburger"></i>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav menu">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Займы <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/info/#card">На банковскую карту</a></li>
						<li><a href="/info/#qiwi">На QIWI-кошелёк</a></li>
						<li><a href="/info/#contact">Через CONTACT</a></li>
						<li><a href="/info/#yandex">На Яндекс.Деньги</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Сервис <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/about">О сервисе</a></li>
						<li><a href="/faq">Вопрос-ответ</a></li>
						<li><a href="/contacts">Контакты</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Документы <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/docs/#rules">Правила предоставления займов</a></li>
						<li><a href="/docs/#personal">Согласие на обработку данных</a></li>
						<li><a href="/docs/#oferta">Публичная оферта</a></li>
					</ul>
				</li>
				<li><a href="" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">Задать вопрос</a></li>
					<li class="visible-xs-block">
						<?php if ($this->input->cookie('lk')) { ?>
						<a href="/form" class="navbar-btn hidden-xs">
							<span class="visible-sm visible-md">Получить займ</span>
							<span class="hidden-sm hidden-md"><span class="f ec"></span> <span class="i ec"></span> <span class="o ec"></span></span>
						</a>
						<?php } else { ?>
						<a href="/form" class="navbar-btn">Получить займ</a>
						<?php } ?>
					</li>
			</ul>
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<li>
					<a href="/form" class="navbar-btn">Получить займ</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- Modal -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="black">
                    Заполните форму <br> и наш менеджер свяжется с вами
                </h2>
            </div>
            <div class="modal-body">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control ec tip" name="feedback-name" title="Введите свое имя"
                            data-sanitize="capitalize"  data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                            data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" value="89777474747" placeholder="Введите ваш телефон" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="feedback-email" name="feedback-email" title="Email" placeholder="Введите ваш email" required>
                </div>
                <div class="form-group">
                    <textarea id="feedback-comment" rows="3" name="feedback-comment" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea>
                </div>
				<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4"> <button id="feedback-send" class="btn">Отправить</button> </div>
				<div class="col-md-4"></div>
				</div> 
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->