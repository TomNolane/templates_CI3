
<div class="page">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img alt="logo.png" src="/templates/vkredito/assets/img/logo.png">
                </a>
                <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Раскрыть меню</span>
                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav menu">
                    <li>
                        <a href="/about">О проекте</a>
                    </li>
                    <li>
                        <a href="/faq">Вопрос-ответ</a>
                    </li>
                    <li>
                        <a href="/form">Забрать деньги</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a>
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
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" id="feedback-name" name="feedback-name" placeholder="Имя" title="Имя" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="hidden" class="form-control input-lg" id="feedback-phone" name="feedback-phone" value="89117876655">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" id="feedback-email" name="feedback-email" placeholder="Email" title="Email" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control input-lg" id="feedback-comment" name="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-lg btn-block" id="feedback-send" name="feedback-send">Отправить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>