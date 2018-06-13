<aside class="ex-aside-menu">
	<div>
		<i class="ex-close-menu"></i>
	</div>
	<main>
		<button class="ex-ask-question" type="button" >Задать вопрос</button>
		<ul>
			<li class="ex-larger"><a href="/">На главную</a></li>
			<li class="ex-larger">Как работает сервис</li>
			<li><a href="/about">О сервисе Zaimol</a></li>
			<li><a href="/allarticles">Статьи о займах</a></li>
			<li><a href="/money">Способы получения займа</a></li>
			<li class="ex-larger"><a href="/documents">Документация</a></li>
			<li><a class="spec_header" href="/documents#menu1">Публичная оферта</a></li>
			<li><a class="spec_header" href="/documents#menu2">Согласие на обработку данных</a></li>
			<li><a class="spec_header" href="/documents#menu3">Правила предоставления займов</a></li>
			<li class="ex-larger"><a href="/faq">Часто задаваемые вопросы</a></li>
		</ul>
	</main>
</aside>
<nav class="ex-main-header">
	<div class="container">
		<i class="ex-hamburger"></i>
		<a class="ex-brand" href="/"></a>
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
                <h2>
                    Заполните форму <br> и наш менеджер свяжется с вами
                </h2>
            </div>
            <div class="modal-body">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control ec tip" name="feedback-name" title="Пожалуйста, введите свое имя"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                            data-validation-error-msg="Пожалуйста, введите свое имя" id="feedback-name" placeholder="Введите ваше имя" required>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="feedback-phone" name="feedback-phone" value="89116698393" title="Тефелон">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="feedback-email" name="feedback-email" title="Email" placeholder="Введите ваш email" required>
                </div>
                <div class="form-group">
                    <textarea id="feedback-comment" name="feedback-comment" rows="1" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea>
                </div>
                <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->