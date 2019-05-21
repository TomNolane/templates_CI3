<header >
    <nav id="ex-homepage-header" class="navbar navbar-default ex-main-header">
        <div class="container">
            <div class="navbar-header">
                <? if (!in_array($this->uri->segment(1), array('lk', 'offerwall', 'pixell'))) : ?>
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <? endif; ?>
                <? if ($this->uri->segment(1) != 'lk') : ?>
                <a href="/" class="navbar-brand">
                <? endif; ?>
                     <?php $logo_addon = '/templates/zaimsoon/assets/img/logo.png';
                    switch ($this->uri->segment(1)) {
                            case 'pixell': $logo_addon = '/templates/common/img/logo-fanzaim.png'; break;
                            case 'offerwall': $logo_addon = '/templates/common/img/logo-edenga.png'; break;
                            default: break;
                    } ?>
                    <? if ($this->uri->segment(1) == 'offerwall') : ?>
                        <img class="logo-header"  src="<?=$logo_addon?>" alt="Image missing" style="width: auto; height: auto; margin-top: -10px;">
                    <? else : ?>
                        <img class="logo-header"  src="<?=$logo_addon?>" alt="Image missing">
                    <? endif; ?>
                <? if ($this->uri->segment(1) != 'lk') : ?>
                </a>
                <? endif; ?>
            </div>
            <? if (!in_array($this->uri->segment(1), array('lk', 'offerwall', 'pixell'))) : ?>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="ex-dropdown-menu dropdown"><a href="#" class="dropdown-toggle"
                                                                data-toggle="dropdown"
                                                                aria-expanded="false">Как работает сервис</a>
                            <ul class="dropdown-menu">
                                <li><a href="/about">О сервисе Zaimsoon</a></li>
                                <li><a href="/allarticles">Статьи о займах</a></li>
                                <li><a href="/faq">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="ex-dropdown-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">Документы</a>
                            <ul class="dropdown-menu">
                                <li><a href="/oferta">Публичная оферта</a></li>
                                <li><a href="/soglasie">Согласие на обработку данных</a></li>
                                <li><a href="/rules">Правила предоставления займов</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a href="" data-toggle="modal" data-target="#askQuestion">Задать вопрос</a>
                        </li>
                    </ul>
                </div>
            <? endif; ?>
        </div>
    </nav>
</header> 
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
                        <input type="hidden" class="form-control" id="feedback-phone" name="feedback-phone" title="Тефелон" value="89117898800">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="feedback-email" name="feedback-email" title="Email" placeholder="Введите ваш email" required>
                    </div>
                    <div class="form-group">
                        <textarea id="feedback-comment" class="form-control" name="feedback-comment" rows="3"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                    </div>
                    <button type="button" id="feedback-send" name="feedback-send" class="ex-main-btn">Отправить</button>
                </div>
            </div>
        </div>
    </div>