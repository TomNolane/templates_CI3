<div class="row"> 
    <nav class="navbar">
        <div class="col-md-12">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img alt="Rublimo.ru" class="img-responsive" src="/templates/test/assets/img/logo.png">
                </a>
            </div>
            <div class="navbar-collapsem hidden-xs" id="navbar-collapse-1">
                <ul class="nav navbar-nav menu">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            О сервисе
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/about" >О нас</a>
                            </li>
                            <li>
                                <a href="/contacts" >Контакты</a>
                            </li>
                            <li>
                                <a href="/info" >Статьи о займах</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/zaim-card" >Займ на банковскую карту</a>
                            </li>
                            <li>
                                <a href="/zaim-qiwi" >Займ на QIWI-кошелек</a>
                            </li>
                            <li>
                                <a href="/zaim-yandex" >Займ на Яндекс.Деньги</a>
                            </li>
                            <li>
                                <a href="/zaim-contact" >Займ через Contact</a>
                            </li>
                            <li>
                                <a href="/zaim-bank" >Займ на банковский счет</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="/form">Получить деньги</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            Новости
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/news1" >Где взять займ на карту Сбербанка?</a>
                            </li>
                            <li>
                                <a href="/news2" >Как получить кредит на Яндекс.Деньги?</a>
                            </li> 
                            <li>
                                <a href="/news3" >Мгновенные займы – доступная и удобная услуга</a>
                            </li>
                            <li>
                                <a href="/news4" >Очистить кредитную историю</a>
                            </li>
                            <li>
                                <a href="/news5" >Как получить займ на QIWI кошелек</a>
                            </li>
                            <li>
                                <a href="/news6" >Как получить займ через систему Contact без отказа</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="/faq">Вопросы-ответы</a>
                    </li>
                    <li>
                    <a href="" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">Обратная связь</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            Документы
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/oferta" >Публичная оферта</a>
                            </li>
                            <li>
                                <a href="/soglasie" >Обработка данных</a>
                            </li>
                            <li>
                                <a href="/rules" >Правила предоставления займов</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
</div>  
<!-- Modal Window -->
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
                                <input type="text" class="form-control input-lg" id="feedback-name" placeholder="Имя" title="Имя" required>
                            </div>
                            <div class="form-group hidden">
                                <input type="tel" class="form-control input-lg" id="feedback-phone" placeholder="Телефон" title="Телефон" value="79777777736">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" id="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-lg" id="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-lg btn-block" id="feedback-send">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<!-- Modal -->