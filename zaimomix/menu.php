<a class="anchor" name="id1"></a>
<?php 
    if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index') {
        echo '<body>
        <main class="ex-home">
            <nav class="navbar navbar-expand-lg ex-main-header">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
                <div class="container hidden-xs hidden-md">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню 
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">1Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'form') {
         echo '<body class="ex-sticky">
         <nav class="navbar navbar-expand-lg ex-main-header-white">
             <div class="container">
                 <a class="ex-brand navbar-brand" href="/"></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                         aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                     <div class="navbar-nav ">
                         <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             меню
                             <i></i>
                         </a>
                         <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="/about">О сервисе</a>
                             <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                             <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                             <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                             <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                             <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                         </div>
                     </div>
                 </div>
             </div>
         </nav>';
    }
    elseif($this->uri->segment(1) == 'faq') {
         echo '<body class="ex-sticky">
         <nav class="navbar navbar-expand-lg ex-main-header-white">
             <div class="container">
                 <a class="ex-brand navbar-brand" href="/"></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                         aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                     <div class="navbar-nav ">
                         <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             меню
                             <i></i>
                         </a>
                         <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/about">О сервисе</a>
                            <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                            <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                            <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                            <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                            <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                         </div>
                     </div>
                 </div>
             </div>
         </nav>';
    }
    elseif($this->uri->segment(1) == 'rules' || $this->uri->segment(1) == 'documents' || $this->uri->segment(1) == 'soglasie' || $this->uri->segment(1) == 'oferta' || $this->uri->segment(1) == 'zaim-card' || $this->uri->segment(1) == 'zaim-bank' || $this->uri->segment(1) == 'zaim-qiwi' || $this->uri->segment(1) == 'zaim-yandex' || $this->uri->segment(1) == 'zaim-contact') {
        echo '<body class="ex-sticky">
        <main>
            <nav class="navbar navbar-expand-lg ex-main-header-white">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'about') {
        echo '<body class="ex-sticky">
        <main class="ex-about">
            <nav class="navbar navbar-expand-lg ex-main-header-white ex-main-header-art">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'asked-questions') {
        echo '<body class="ex-sticky">
        <main class="ex-article ex-article-1">
            <nav class="navbar navbar-expand-lg ex-main-header-white ex-main-header-art">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'microfinance') {
        echo '<body class="ex-sticky">
        <main class="ex-article ex-article-2">
            <nav class="navbar navbar-expand-lg ex-main-header-white ex-main-header-art">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'bad-credit-history') {
        echo '<body class="ex-sticky">
        <main class="ex-article ex-article-3">
            <nav class="navbar navbar-expand-lg ex-main-header-white ex-main-header-art">
                <div class="container">
                    <a class="ex-brand navbar-brand" href="/"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                        <div class="navbar-nav ">
                            <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                меню
                                <i></i>
                            </a>
                            <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/about">О сервисе</a>
                                <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                                <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                                <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                                <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                                <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>';
    }
    elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') {
        echo '<body class="ex-sticky">
        <nav class="navbar navbar-expand-lg ex-main-header-white">
            <div class="container">
                <a class="ex-brand navbar-brand" href="/"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                    <div class="navbar-nav ">
                        <a class="ex-dropdown nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            меню
                            <i></i>
                        </a>
                        <div class="dropdown-menu justify-content-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/about">О сервисе</a>
                            <a class="dropdown-item" href="/oferta">Публичная оферта</a>
                            <a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
                            <a class="dropdown-item" href="/rules">Правила предоставления займов</a>
                            <a class="dropdown-item" href="/faq">Часто задаваемые вопросы</a>
                            <input  class="ex-ask-question ex-main-btn ex-question-btn text-center" value="задать вопрос"/>
                        </div>
                    </div>
                </div>
            </div>
        </nav>';
    }
?>
<!-- Modal -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Заполните форму
                    и наш менеджер свяжется с вами</h2>
                    <p><br></p> 
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control ec tip" name="feedback-name" title="Введите свое имя"
                                data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                data-validation-error-msg="Введите свое имя" id="feedback-name" placeholder="Введите ваше имя">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="feedback-phone" name="feedback-phone" value="79777777777" >
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="feedback-email" name="feedback-email"  title="Email" placeholder="Введите ваш email" required> 
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea id="feedback-comment" name="feedback-comment" rows="3"  title="Текст вашего сообщения" placeholder="Введите текст сообщения" required></textarea>
                        <button type="button"  id="feedback-send" name="feedback-send" class="ex-main-btn">Отправить</button><hr>
                        <button type="button" class="close-modal ex-main-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">Закрыть</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>