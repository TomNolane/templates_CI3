<?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index') : ?>
        <body>
        <main class="ex-home">
            <nav class="navbar navbar-expand-lg ex-main-header">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/about">О сервисе</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ex-ask-question" href="#">Обратная связь</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/money">Получение денег</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    <? elseif($this->uri->segment(1) == 'form') : ?>
         <body class="ex-sticky">
         <nav class="navbar navbar-expand-lg ex-main-header">
             <div class="container">
                 <a class="ex-brand navbar-brand" href="/"></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                         aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                 <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/about">О сервисе</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ex-ask-question" href="#">Обратная связь</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/money">Получение денег</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <? elseif(in_array($this->uri->segment(1), array('faq', 'rules', 'soglasie', 'oferta', 'lk', 'lk2', 'money'))) : ?>
        <body>
        <nav class="navbar navbar-expand-lg ex-main-header">
            <div class="container">
                <a class="ex-brand navbar-brand" href="/"></a>
                <? if ($this->uri->segment(1) != 'lk') : ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/about">О сервисе</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ex-ask-question" href="#">Обратная связь</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/money">Получение денег</a>
                            </li>
                        </ul>
                    </div>
                <? endif; ?>
            </div>
        </nav>
    <? else : ?>
        <body>
        <nav class="navbar navbar-expand-lg ex-main-header ex-grey-header">
            <div class="container">
            <? if (in_array($this->uri->segment(1), array('offerwall', 'offerwall2', 'pixell', 'vitrina'))) : ?>
            <a>
                <?
                $logo_addon = '/templates/zaimhunter/assets/img/logo-zaimhunter.png';
                switch ($this->uri->segment(1)) {
                    case 'pixell': $logo_addon = '/templates/common/img/logo-fanzaim.png'; break;
                    case 'offerwall': $logo_addon = '/templates/common/img/logo-edenga.png'; break;
                    default: break;
                } ?>
                <img class="logo-header"  src="<?=$logo_addon?>" alt="Image missing">
                <? if ($this->uri->segment(1) != 'lk') : ?>
                </a>
            <? endif; ?>
            <? else : ?>
                <? if (in_array($this->uri->segment(1), array('lk', 'lk2'))) { ?>
                <a class="ex-brand navbar-brand" ></a>
                <? } else { ?>
                 <a class="ex-brand navbar-brand" href="/"></a>
                <? } ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/about">О сервисе</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ex-ask-question" href="#">Обратная связь</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/money">Получение денег</a>
                        </li>
                    </ul>
                </div>
            <? endif; ?>
            </div>
        </nav>
    <? endif; ?>
<!-- Modal  -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Заполните форму
                    и наш менеджер свяжется с вами</h2> 
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control ec tip" name="feedback-name" title="Введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" value="79777777777" required>
                    </div>
                    <div class="form-group">
                        <label for="feedback-email"> <label for=""></label>
                        </label>
                        <input type="email" class="form-control" name="feedback-email" id="feedback-email" title="Email" placeholder="Введите ваш email" required> 
                    </div>
                    <div class="form-group">
                        <label for="feedback-comment"></label> 
                        <textarea id="feedback-comment" rows="3" name="feedback-comment" title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                        <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
                    </div> 
            </div>
        </div>
    </div>
</div>