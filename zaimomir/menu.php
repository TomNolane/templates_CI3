<body class="ex-sticky">
<nav class="navbar navbar-expand-lg ex-main-header">
    <div class="container">
        <a class="ex-brand navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">документы</a>
                    <i></i>
                    <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                        <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                        <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/about">О сервисе</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/money">Получение денег</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ex-ask-question" href="#">Обратная связь</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Modal -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ex-wrapper">
                                    <i class="ex-user"></i>
                                    <input type="text" class="form-control" name="feedback-name" title="Введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Введите имя" id="feedback-name" placeholder="Ваше имя">
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" value="79777777777" required>
                            <div class="col-md-6">
                                <div class="ex-wrapper">
                                    <i class="ex-email"></i>
                                    <input type="email" class="form-control" name="feedback-email" id="feedback-email" placeholder="Ваш Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                                <div class="ex-wrapper">
                                    <i class="ex-message"></i>
                                    <textarea id="feedback-comment" rows="3" name="feedback-comment" placeholder="Текст сообщения"></textarea>
                                </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>