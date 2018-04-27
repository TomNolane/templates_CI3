<?php  
if(!isset($my_title)) 
	$my_title = 'Срочные займы круглосуточно без проверок Онлайн';

if(!isset($description))
	$description = 'Rublimo - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';

	if ($this->uri->segment(1) == 'history') 
	{
		$my_title = 'Получение Кредита для Улучшения Кредитной Истории'; 
		$description = 'Мы рады предложить специальный продукт - программу создания или улучшения кредитной истории.Программа предлагается автоматически после регистрации';
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $my_title;?></title>
	

	 
	<!--[if lte IE 9]>
	<script src="/modules/html5shiv/html5shiv.js"></script>
	<![endif]--> 
 
</head>
<body>  
	<!-- Modal -->
<!-- <div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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
				<input type="tel" class="form-control" id="feedback-phone" title="Тефелон" placeholder="Введите ваш телефон" required>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="feedback-email" title="Email" placeholder="Введите ваш email" required>
			</div>
			<div class="form-group">
				<textarea id="feedback-comment" rows="3" class="form-control" title="Текст вашего сообщения" placeholder="Введите текст сообщения" data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Введите текст сообщения" required></textarea><br>
				<div class=" text-center">
				<button type="button" id="feedback-send" class="btn">Отправить</button>
			</div>
			</div> 
		</div>
	</div>
</div>
</div> -->
<!-- /Modal -->