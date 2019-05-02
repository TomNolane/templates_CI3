
<?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index') { ?>
<body>
<main class="ex-home">
    <nav class="navbar navbar-default ex-main-header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mikrodengiCollapsed">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <i></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="mikrodengiCollapsed">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="ex-menu-item" href="/about">о сервисе</a></li>
                    <li><a class="ex-menu-item" href="/faq">Faq</a></li>
                    <li class="ex-dropdown-menu dropdown"><a href="" class="ex-menu-item dropdown-toggle"
                                                             data-toggle="dropdown"
                                                             aria-expanded="false">документы <i></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/oferta">Публичная оферта</a></li>
                            <li><a href="/soglasie">Согласие на обработку данных</a></li>
                            <li><a href="/rules">Правила предоставления займов</a></li>
                        </ul>
                    </li>
                    <li><a href="" data-toggle="modal" class="ex-menu-item" id="askQuestion_" data-target="#askQuestion">Обратная связь</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php } elseif($this->uri->segment(1) == 'form') {?>
<body>
<nav class="navbar navbar-default ex-main-header">
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
                <li><a class="ex-menu-item" href="/about">о сервисе</a></li>
                <li><a class="ex-menu-item" href="/faq">Faq</a></li>
                <li class="ex-dropdown-menu dropdown"><a href="" class="ex-menu-item dropdown-toggle"
                                                        data-toggle="dropdown"
                                                        aria-expanded="false">документы <i></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/oferta">Публичная оферта</a></li>
                        <li><a href="/soglasie">Согласие на обработку данных</a></li>
                        <li><a href="/rules">Правила предоставления займов</a></li>
                    </ul>
                </li>
                <li><a href="" data-toggle="modal" class="ex-menu-item" id="askQuestion_" data-target="#askQuestion">Обратная связь</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php } else {?>
<body class="ex-sticky">
<nav class="navbar navbar-default ex-main-header">
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
                <li><a class="ex-menu-item" href="/about">о сервисе</a></li>
                <li><a class="ex-menu-item" href="/faq">Faq</a></li>
                <li class="ex-dropdown-menu dropdown"><a href="" class="ex-menu-item dropdown-toggle"
                                                        data-toggle="dropdown"
                                                        aria-expanded="false">документы <i></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/oferta">Публичная оферта</a></li>
                        <li><a href="/soglasie">Согласие на обработку данных</a></li>
                        <li><a href="/rules">Правила предоставления займов</a></li>
                    </ul>
                </li>
                <li><a href="" data-toggle="modal" class="ex-menu-item" id="askQuestion_" data-target="#askQuestion">Обратная связь</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php }?>
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
                                data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" value="79777777777" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
                    </div>
                    <div class="form-group">
                        <textarea id="feedback-comment" rows="3"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                    </div>
                    <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
                </div>
            </div>
        </div>
    </div>