<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed hidden-sm hidden-xs" data-toggle="collapse" data-target="#navbar-collapse-1"
                aria-expanded="false">
                <span class="sr-only">Раскрыть меню</span>
                <img src="/templates/edenga/assets/img/mobile/menu.png" alt="menu.png">
            </button>
            <a class="navbar-brand" href="/">
                <img alt="" src="/templates/edenga/assets/img/logo.png" alt="logo.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav menu">
                <li>
                    <a href="/form">Оформить займ</a>
                </li>
                <li>
                    <a href="/about">О нас</a>
                </li>
                <li>
                    <a href="/faq">Вопрос-ответ</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a>
                </li>
                <li>
                    <a href="/docs">Документы</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h1 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h1>
                <p>Просто заполните форму и наш специалист свяжется с Вами</p>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="feedback-name" name="feedback-name" placeholder="Имя" title="Имя" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control input-lg" id="feedback-phone" value="89116789870" name="feedback-phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" id="feedback-email" name="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-lg" id="feedback-comment" name="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block" id="feedback-send" name="feedback-send">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>