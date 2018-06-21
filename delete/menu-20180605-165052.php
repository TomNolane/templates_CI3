<aside class="ex-aside-menu">
    <div>
        <i class="ex-close-menu"></i>
    </div>
    <main>
        <a href="/form"><button class="ex-main-btn" type="button">Получить деньги</button></a>
        <button class="ex-main-btn ex-ask-question" data-toggle="modal" data-target="#askQuestion">Задать вопрос</button> 
        <!-- <button class="ex-main-btn ex-ask-question" type="button">Задать вопрос</button> -->
        <ul>
            <li class="ex-larger">Как работает сервис</li>
            <li><a href="/about">О сервисе Forzaim</a></li>
            <li><a href="/allarticles">Статьи о займах</a></li>
            <li><a href="/faq">Вопрос - Ответ</a></li>
            <li class="ex-larger">Документация</li>
            <li><a href="/oferta">Публичная оферта</a></li>
            <li><a href="/soglasie">Согласие на обработку данных</a></li>
            <li><a href="/rules">Правила предоставления займов</a></li>
            <li class="ex-larger">Способы получения займа</li>
            <li><a href="/zaim-card">Банковская карта</a></li>
            <li><a href="/zaim-yandex">Яндекс.Деньги</a></li>
            <li><a href="/zaim-contact">Contact</a></li>
            <li><a href="/zaim-qiwi">QIWI VISA кошелек</a></li>
            <li><a href="/zaim-bank">Счет в банке</a></li>
        </ul>
    </main>
</aside>
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
                        <input type="hidden" class="form-control" id="feedback-phone" title="Тефелон" value="8(999)9876543">
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