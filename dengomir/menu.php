<body class="ex-sticky">
<? if ($this->uri->segment(1) == 'form') : ?>
    <nav class="navbar navbar-default ex-main-header" style="background: #30323e;">
<? else : ?>
    <nav class="navbar navbar-default ex-main-header">
<? endif; ?>
<? if ($this->uri->segment(1) == 'pixell') : ?>
    <div class="container" style="margin-bottom: 20px;">
<? else : ?>
    <div class="container">
<? endif; ?>
        <div class="navbar-header">
            <? if (!in_array($this->uri->segment(1), array('offerwall', 'offerwall2', 'lk', 'lk2', 'pixell', 'vitrina'))) : ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dengomirCollapsed">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <? endif; ?>
            <a class="navbar-brand" href="/">
                <? if ($this->uri->segment(1) == 'form') $logo_addon = '/templates/dengomir/assets/img/icons/logo-footer.png';
                else $logo_addon = '/templates/dengomir/assets/img/icons/logo-header.png';
				switch ($this->uri->segment(1)) {
					case 'pixell': $logo_addon = '/templates/common/img/logo-fanzaim.png'; break;
					case 'offerwall': $logo_addon = '/templates/common/img/logo-edenga.png'; break;
					default: break;
				} ?>
				<img src="<?=$logo_addon?>" alt="Image missing">
            </a>
        </div>
        <br><br>
        <? if ($this->uri->segment(1) == 'form') : ?>
        <style>
        .ex-menu-item {
            color: #FFF !important;
            font-size: 16px !important;
        }
        .ex-menu-item:hover {
            color: #6781e7 !important;
            font-size: 16px !important;
        }
        </style>
        <? endif; ?>
        <? if (!in_array($this->uri->segment(1), array('offerwall', 'offerwall2', 'lk', 'lk2', 'pixell', 'vitrina'))) : ?>
        <div class="collapse navbar-collapse" id="dengomirCollapsed">
            <ul class="nav navbar-nav navbar-right"> 
                <li><a href="/about" class="ex-menu-item">О сервисе</a></li>
                <li><a href="/allarticles" class="ex-menu-item">Статьи</a></li>
                <li class="ex-dropdown-menu dropdown">
                    <a class="dropdown-toggle ex-menu-item" data-toggle="dropdown" href="#">получение денег
                        <i class="ex-dropdown-arrow"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/form">Получить деньги</a></li>
                        <li><a href="/zaim-card">Займ на банковскую карту</a></li>
                        <li><a href="/zaim-qiwi">Займ на QIWI кошелёк</a></li>
                        <li><a href="/zaim-contact">Займ через Contact</a></li>
                        <li><a href="/zaim-yandex">Займ на Яндекс.Деньги</a></li>
                        <li><a href="/zaim-bank">Займ на банковский счёт</a></li>
                    </ul>
                </li>
                <li class="ex-dropdown-menu dropdown">
                    <a class="dropdown-toggle ex-menu-item" data-toggle="dropdown" href="#">документы
                        <i class="ex-dropdown-arrow"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/oferta">Публичная оферта</a></li>
                        <li><a href="/soglasie">Согласие на обработку данных</a></li>
                        <li><a href="/rules">Правила предоставления займов</a></li>
                    </ul>
                </li>
                <li><a href="/faq" class="ex-menu-item">Faq</a></li>
                <li><a href="" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">
                    <? if ($this->uri->segment(1) == 'form') : ?>
                        <span role="button" class="ex-feedback" style="color: #c7bcff; border-color: #c7bcff;">Обратная связь</span>
                    <? else : ?>
                        <span role="button" class="ex-feedback">Обратная связь</span>
                    <? endif; ?>
                </a></li>
            </ul>
        </div>
         <? endif; ?>
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
                        <input type="text" class="form-control ec tip" name="feedback-name" title="Пожалуйста, введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Пожалуйста, введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="feedback-phone" value="89111111111" title="Тефелон">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
                    </div>
                    <div class="form-group">
                        <textarea id="feedback-comment" rows="3"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                    </div>
                    <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
                </div>
            </div>
        </div>
    </div>