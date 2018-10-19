<nav class="navbar navbar-default ex-main-header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#zaimrubliCollapsed">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <i></i>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="zaimrubliCollapsed">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="ex-menu-item" href="/about">о сервисе</a></li>
                <li>
                    <a class="ex-menu-item" href="/form">получение денег</a>
                </li>
                <li>
                    <a class="ex-menu-item" href="/documents">документы</a>
                </li>
                <li><a class="ex-menu-item" href="/faq">Faq</a></li>
                <li><a href="" data-toggle="modal" id="askQuestion_" data-target="#askQuestion"><span role="button" class="ex-feedback">Обратная связь</span></a></li>
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
                    <input type="tel" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
                </div>
                <div class="form-group">
                    <textarea id="feedback-comment" rows="3" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea>
                </div>
                <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->