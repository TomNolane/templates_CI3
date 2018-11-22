<nav id="exMainHeader" class="navbar navbar-default">
    <div class="container">
        
        <div class="navbar-header">
            <a class="navbar-brand" href="/"></a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <div href="#" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Информация <i></i></a>
                <div class="dropdown-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h3>Как работает сервис</h3>
                                <ul>
                                    <li><a href="/about">О сервисе Fanzaim</a></li>
                                    <li><a href="/allarticles">Статьи о займах</a></li>
                                    <li><a href="/faq">FAQ</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h3>Документация</h3>
                                <ul>
                                    <li><a href="/oferta">Публичная оферта</a></li>
                                    <li><a href="/soglasie">Согласие на обработку данных</a></li>
                                    <li><a href="/rules">Условия пользования сайтом</a></li>
                                    <li><a href="/personal-data">Политика компании</a></li>
                                    <li><a href="/calls">Согласие на звонки</a></li> 
                                    <li><a href="/regulation">Персональные данные</a></li>
                                    <li><a href="/safety">Безопасность данных</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h3>Способы получения займа</h3>
                                <ul>
                                    <li><a href="/zaim-card">Банковская карта</a></li>
                                    <li><a href="/zaim-yandex">Яндекс.Деньги</a></li>
                                    <li><a href="/zaim-contact">Contact</a></li>
                                    <li><a href="/zaim-qiwi">QIWI VISA кошелек</a></li>
                                    <li><a href="/zaim-bank">Счет в банке</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <button class="ex-main-btn ex-ask-question" data-toggle="modal" data-target="#askQuestion">Обратная связь</button> 
                                <!-- <button class="ex-main-btn ex-ask-question" data-toggle="modal" data-target="#askQuestion">Обратная связь</button> -->
                                <a href="/form"><button class="ex-main-btn">Получить деньги</button></a>
                            </div>
                        </div>
                    </div>
                </div>
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
                            data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" value="8(999)9876543" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
                </div>
                <div class="form-group">
                    <textarea id="feedback-comment"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                </div>
                <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
            </div>
        </div>
    </div>
</div>