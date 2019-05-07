
<header style="height: 0 !important;">
    <nav id="ex-homepage-header" class="navbar navbar-default ex-main-header" style="z-index: 777 !important;">
        <div class="container">
            <div class="navbar-header">
                <? if (!in_array($this->uri->segment(1), array('offerwall', 'offerwall2', 'lk', 'lk2', 'pixell', 'vitrina'))) : ?>
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <? endif; ?>
                <a href="/" class="navbar-brand">
                    <?php $logo_addon = '/templates/zaimcoin/assets/img/logo.png';
                    switch ($this->uri->segment(1)) {
                            case 'pixell': $logo_addon = '/templates/common/img/logo-fanzaim.png'; break;
                            case 'offerwall': $logo_addon = '/templates/common/img/logo-edenga.png'; break;
                            default: break;
                    } ?>
                    <img class="logo-header"  src="<?=$logo_addon?>" alt="Image missing">
                </a>
            </div>
            <? if (!in_array($this->uri->segment(1), array('offerwall', 'offerwall2', 'lk', 'lk2', 'pixell', 'vitrina'))) : ?>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="ex-dropdown-menu dropdown"><a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">КАК РАБОТАЕТ СЕРВИС</a>
                        <ul class="dropdown-menu">
                            <li><a href="/about">О сервисе Zaimcoin</a></li>
                            <li><a href="/allarticles">Статьи о займах</a></li>
                            <li><a href="/zaim-yandex">Способы получения займа</a></li>
                        </ul>
                    </li>
                    <li class="ex-dropdown-menu dropdown"><a href="#" id="drop2" class="dropdown-toggle"
                                                             data-toggle="dropdown"
                                                             aria-expanded="true">ДОКУМЕНТАЦИЯ</a>
                        <ul class="dropdown-menu"> 
                            <li><a href="/oferta">Публичная оферта</a></li> 
                            <li><a href="/soglasie">Cогласие на обработку данных</a></li>
                            <li><a href="/rules">Правила предоставления</a></li>
                        </ul>
                    </li>
                    <li><a href="/faq">FAQ</a></li>
                    <li class="ex-hes-border "><a href="#" data-toggle="modal" data-target="#helpModal">СВЯЗАТЬСЯ С НАМИ</a></li>
                </ul>
            </div>
             <? endif; ?>
        </div>
    </nav>
</header>
<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center">Заполните форму<br>
                    и наш менеджер свяжется с вами</h4>
            </div>
            <div class="modal-body"> 
                <div class="row">
                    <div class="col-xs-12">
                        <form>
                            <div class="form-group has-feedback">
                                <label class="control-label" for="feedback-name">Имя</label>
                                <div class="">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control" name="name" id="feedback-name" placeholder="Имя" title="Имя" required>
                                        <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label " for="feedback-email">Email</label>
                                <div class="">
                                    <div class="ex-wrapper">
                                        <input type="email" class="form-control" placeholder="Введите вашу электронную почту" name="mail" id="feedback-email" title="Email" required>
                                        <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group hidden">
                                <input type="hidden" class="form-control" id="feedback-phone" value="9777777777" >
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="feedback-comment">Текст сообщения</label>
                                <div class="">
                                    <div class="ex-wrapper">
                                        <textarea  id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <button class="ex-orange-btn" data-dismiss="modal" id="feedback-send" aria-label="Close">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="toUp"></div>