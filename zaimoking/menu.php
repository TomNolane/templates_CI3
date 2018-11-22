
<nav class="navbar navbar-default ex-main-header hidden-xs">
    <div class="container">
        <div class="nav navbar-nav">
            <div class="ex-dropdown-menu dropdown">
                 <a href="#" class="ex-menu-item dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Меню <i></i></a>
                <div class="dropdown-menu">
                    <ul class="">
                        <li><a href="/about">О сервисе</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/oferta">Публичная оферта</a></li>
                        <li><a href="/soglasie">Согласие на обработку данных</a></li>
                        <li><a href="/rules">Правила предоставления займов</a></li>
                        <li><a href="/zaim-card">Способы получения денег</a></li>
                    </ul>
                    <div class="ex-action">
                         <input  class="ex-main-btn ex-ask-question btn2 text-center" value="Обратная связь"/> 
                    </div>
                </div>
            </div>
        </div>
        <a class="ex-brand" href="/"></a>
    </div>
</nav>
<nav class="navbar navbar-default ex-main-header visible-xs">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dengomirCollapsed">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <i></i>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="dengomirCollapsed">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/about">О сервисе</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/oferta">Публичная оферта</a></li>
                <li><a href="/soglasie">Согласие на обработку данных</a></li>
                <li><a href="/rules">Правила предоставления займов</a></li>
                <li><a href="/zaim-card">Способы получения денег</a></li>
            </ul>
            <div class="ex-action">
                <input  class="ex-main-btn ex-ask-question btn2 text-center" value="Обратная связь"/> 
            </div>
        </div>
    </div>
</nav>
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
                        <input type="text" class="form-control ec tip" name="feedback-name" title="Введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" name="feedback-phone"  value="79777777777" >
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="feedback-email" name="feedback-email" title="Email" placeholder="Введите ваш email" >
                    </div>
                    <div class="form-group">
                        <textarea id="feedback-comment" name="feedback-comment" rows="3"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                    </div>
                    <button type="button" id="feedback-send" name="feedback-send" class="ex-main-btn">Отправить</button>
                </div>
            </div>
        </div>
    </div>