
<header>
    <div class="container">
        <nav id="ex-homepage-header" class="navbar navbar-default ex-main-header">
            <div class="navbar-header">
            <? if (!in_array($this->uri->segment(1), array('offerwall', 'offerwall2', 'lk', 'lk2', 'pixell', 'vitrina'))) : ?>
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <? endif; ?>
                <a href="/" rel="nofollow">
                    <?php $logo_addon = '/templates/zaimhunter/assets/img/logo-zaimhunter.png';
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
                    <li class="ex-dropdown-menu dropdown"><a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">О сервисе</a>
                        <ul class="dropdown-menu">
                            <li><a rel="nofollow" href="/about">О сервисе</a></li>
                            <li><a rel="nofollow" href="/money">Виды займов</a></li>
                            <li><a rel="nofollow" href="/credits">Как не попасть в долговую яму</a></li>
                            <li><a rel="nofollow" href="/restructuring">Реструктуризация кредита</a></li>
                            <li><a rel="nofollow" href="/refinancing">Рефинансирование</a></li>
                            <li><a rel="nofollow" href="/insolvency">Банкротство физических лиц</a></li>
                        </ul>
                    </li>
                    <li class="ex-dropdown-menu dropdown"><a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Документы</a>
                        <ul class="dropdown-menu"> 
                            <li><a rel="nofollow" href="/oferta">Публичная оферта</a></li>
                            <li><a rel="nofollow" href="/agree">Пользовательское соглашение</a></li>
                            <li><a rel="nofollow" href="/soglasie">Согласие на обработку данных</a></li>
                            <li><a rel="nofollow" href="/rules">Правила предоставления займов</a></li>
                        </ul>
                    </li>
                    <li><a rel="nofollow" href="/<?php echo $this->input->cookie('lk')? 'form' : 'form'; ?>">Получение денег</a></li>
                    <li><a rel="nofollow" href="/faq">Вопрос - ответ</a></li>
                    <li><a rel="nofollow" href="" data-toggle="modal" id="askQuestion_" data-target="#askQuestion">Обратная связь</a></li>
                </ul>
            </div>
             <? endif; ?>
        </nav>
    </div>
</header>
<!-- Modal -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 id="special_modal">
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
                    <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" value="79777474836">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
                </div>
                <div class="form-group">
                    <textarea id="feedback-comment" rows="3" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea>
                </div>
                <button type="button" id="feedback-send" class="ex-main-btn">Отправить</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->