<div class="page">
	<nav class="navbar">
		<div class="container">
		
			<div class="navbar-header text-center">
				<a class="navbar-brand" href="/">
					<?php $logo_addon = '/templates/dengimo/assets/img/logo.png';
                    switch ($this->uri->segment(1)) {
                        case 'pixell': $logo_addon = '/templates/common/img/logo-fanzaim.png'; break;
                        case 'offerwall': $logo_addon = '/templates/common/img/logo-edenga.png'; break;
                        default: break;
                    } ?>
                    <img src="<?=$logo_addon?>" alt="Image missing">
				</a>
				<button type="button" class="navbar-toggle collapsed pull-right hidden-sm hidden-xs" data-toggle="collapse" data-target="#navbar-collapse-1"
					aria-expanded="false">
					<span class="sr-only">Раскрыть меню</span>
					<i class="glyphicon glyphicon-menu-hamburger"></i>
				</button>
			</div>
            <? if (!in_array($this->uri->segment(1), array('lk', 'offerwall', 'pixell'))) : ?>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav menu navbar-right">
                        <li>
                            <a href="/about">О сервисе</a>
                        </li>
                        <li>
                            <a href="/form">Получить деньги</a>
                        </li>
                        <li>
                            <a href="/faq">Вопросы-ответы</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#feedbackModal">Обратная связь</a>
                        </li>
                    </ul>
                </div>
            <? endif; ?>
		</div>
	</nav>
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
							<br>
							<div class="form-group">
								<input type="hidden" class="form-control input-lg" id="feedback-phone" placeholder="Телефон" value="8(977)7777777" title="Телефон">
							</div> 
							<div class="form-group">
								<input type="email" class="form-control input-lg" id="feedback-email" placeholder="Email" title="Email" required>
							</div>
							<br>
							<div class="form-group">
								<textarea class="form-control input-lg" id="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
									required></textarea>
							</div>
							<br>
							<div class="form-group">
								<button type="button" class="btn btn-success btn-lg btn-block" id="feedback-send">Отправить</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="loading" style="display:none;">
		<span>
			<i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
	</div>