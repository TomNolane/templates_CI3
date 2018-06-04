<nav class="navbar navbar-default ex-main-header">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="/templates/zaimhome/assets/img/zaimhome_logo.png" alt="Image missing">
                </a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">О сервисе
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/about" class="hov">О сервисе</a>
                            </li>
                            <li>
                                <a href="/money" class="hov">Виды займов</a>
                            </li>
                            <li>
                                <a href="/oferta" class="hov">Публичная оферта</a>
                            </li> 
                            <li>
                                <a href="/rules" class="hov">Правила предоставления займов</a>
                            </li>
                            <li>
                                <a href="/agreement" class="hov">Согласие на обработку данных</a>
                            </li>
                            <li>
                                <a href="/documents" class="hov">Правовые документы</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/form">Получить деньги</a> 
                    </li>
                    <li class="dropdown">
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Новости
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a  href="/news1" class="hov" >Где взять займ на карту Сбербанка?</a>
                                </li>
                                <li>
                                    <a  href="/news2" class="hov" >Как получить кредит на Яндекс.Деньги?</a>
                                </li> 
                                <li>
                                    <a  href="/news3" class="hov" >Мгновенные займы – доступная и удобная услуга</a>
                                </li>
                                <li>
                                    <a  href="/news4" class="hov" >Очистить кредитную историю</a>
                                </li>
                                <li>
                                    <a  href="/news5" class="hov" >Как получить займ на QIWI кошелек</a>
                                </li>
                                <li>
                                    <a  href="/news6" class="hov" >Как получить займ через систему Contact без отказа</a>
                                </li>
                            </ul>
                        </li>
                    <li> 
                        <a href="/faq">FAQ</a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#helpModal">Обратная связь</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</nav>

<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                    <h4 class="text-center">Остались вопросы?</h4>
                    <p class="text-center">Просто заполните форму и наш специалист свяжется с Вами</p>
				</div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-name" placeholder="Имя" title="Имя" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="feedback-phone" value="8(905)9789787" placeholder="Телефон" title="Телефон" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="ex-actions">
                                <button class="ex-main-btn" id="feedback-send">Отправить</button>
                                <button class="ex-main-btn" data-dismiss="modal" aria-label="Close">Закрыть</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>