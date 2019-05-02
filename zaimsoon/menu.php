
<header style="height: 0 !important;">
    <nav id="ex-homepage-header" class="navbar navbar-default ex-main-header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="/templates/zaimsoon/assets/img/logo.png" alt="Image missing">
                </a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="ex-dropdown-menu dropdown"><a href="#" class="dropdown-toggle"
                                                             data-toggle="dropdown"
                                                             aria-expanded="false">Как работает сервис</a>
                        <ul class="dropdown-menu">
                            <li><a href="/about">О сервисе Zaimsoon</a></li>
                            <li><a href="/allarticles">Статьи о займах</a></li>
                            <li><a href="/faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="ex-dropdown-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                             aria-expanded="false">Документы</a>
                        <ul class="dropdown-menu">
                            <li><a href="/oferta">Публичная оферта</a></li>
                            <li><a href="/soglasie">Согласие на обработку данных</a></li>
                            <li><a href="/rules">Правила предоставления займов</a></li>
                        </ul>
                    </li>
                    <li> 
                        <a href="" data-toggle="modal" data-target="#askQuestion">Задать вопрос</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</heade> 
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
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="feedback-phone" name="feedback-phone" title="Тефелон" value="89117898800">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="feedback-email" name="feedback-email" title="Email" placeholder="Введите ваш email" required>
                    </div>
                    <div class="form-group">
                        <textarea id="feedback-comment" class="form-control" name="feedback-comment" rows="3"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                    </div>
                    <button type="button" id="feedback-send" name="feedback-send" class="ex-main-btn">Отправить</button>
                </div>
            </div>
        </div>
    </div>