<h3>Личные данные</h3>
<div class="row history-about">
	<div class="col-sm-3"><img src="/templates/rublimo/img/lk/avatar.png" alt="rublimo.ru"></div>
	<div class="col-sm-9">
		<div class="profile">
			<strong><span class="f ec"></span> <span class="i ec"></span> <span class="o ec"></span><?php //echo $f.' '.$i.' '.$o; ?></strong><br>
			<div class="pull-right">
				<a href="/form" class="profile-controls btn-link">Редактировать профиль <i class="fa fa-pencil"></i></a>
				<button class="profile-controls remove-profile btn-link">Удалить <i class="fa fa-times"></i></button>
			</div>
			<div class="clearfix"></div>
		</div>
		<table>
			<tr><td>Регион</td><td><span class="region ec"></span></td></tr>
			<tr><td>Адрес&nbsp;регистрации</td><td>
				<span class="reg_region ec"></span>
				<span class="reg_city ec"></span>
				<span class="reg_street ec"></span>
				<span class="reg_housing ec"></span>
				<span class="reg_building ec"></span>
				<span class="reg_flat ec"></span>
			</td></tr>
			<tr><td>Адрес&nbsp;проживания</td><td>
				<span class="region ec"></span>
				<span class="city ec"></span>
				<span class="street ec"></span>
				<span class="housing ec"></span>
				<span class="building ec"></span>
				<span class="flat ec"></span>
			</td></tr>
			<tr><td>Телефон</td><td><span class="phone ec"></span></td></tr>
			<tr><td>Почта</td><td><span class="email ec"></span></td></tr>
			<tr><td>Паспорт</td><td>
				<span class="passport_s ec"></span>
				<span class="passport_n ec"></span>
				<span class="passport_who ec"></span>
			</td></tr>
			<tr><td>Работа</td><td>
				<span class="work_name ec"></span>
				<span class="work_city ec"></span>
				<span class="work_street ec"></span>
				<span class="work_house ec"></span>
				<span class="work_office ec"></span>
			</td></tr>
		</table>
	</div>
</div>

<script>
$(document).ready(function(){
	$('.remove-profile').click(function(){
		setcookie('lk', '0');
		location.href = '/';
	});
});
</script>

<?php require 'lk-activate.php'; ?>
