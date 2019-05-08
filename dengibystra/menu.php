<header>
    <nav id="ex-homepage-header" class="navbar navbar-default ex-main-header">
        <div class="container">
            <div class="navbar-header" style="text-align: center;">
                <? if (!in_array($this->uri->segment(1), array('offerwall', 'offerwall2', 'lk', 'lk2', 'pixell', 'vitrina'))) : ?>
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <? endif; ?>
                <a href="/">
                    <?php $logo_addon = '/templates/dengibystra/assets/img/logo.png';
                    switch ($this->uri->segment(1)) {
                        case 'pixell': $logo_addon = '/templates/common/img/logo-fanzaim.png'; break;
                        case 'offerwall': $logo_addon = '/templates/common/img/logo-edenga.png'; break;
                        default: break;
                    } ?>
                    <img src="<?=$logo_addon?>" alt="Image missing">
                </a>
            </div>
            <? if (!in_array($this->uri->segment(1), array('lk', 'offerwall', 'pixell'))) : ?>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right"> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">О проекте
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/about" class="hov">О нас</a>
                                </li>
                                <li>
                                    <a href="/money" class="hov">Виды займов</a>
                                </li> 
                            </ul>
                        </li>
                        <li><a href="/faq">Вопросы-ответы</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Информация
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
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
                        <li><a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a></li>
                    </ul>
                </div>
            <? endif; ?>
        </div>
    </nav>
</header>
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
                                <input type="text" class="form-control input-lg" id="feedback-name" placeholder="Имя" title="Имя">
                            </div>
                            <div class="form-group hidden">
                                <input type="tel" class="form-control input-lg" value="79777474646" id="feedback-phone" placeholder="Телефон" title="Телефон">
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