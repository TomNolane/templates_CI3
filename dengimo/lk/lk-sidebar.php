<div class="shadow">
	<div class="form-group has-search has-feedback">
		<input type="text" class="form-control" placeholder="Поиск">
		<span class="fa fa-search form-control-feedback" aria-hidden="true"></span>
	</div>
</div>

<div class="small-card">
	<img src="/templates/rublimo/img/lk/avatar.png" class="pull-right">
	<strong class="pull-right"><?php //echo $f; ?><span class="f ec"></span><br><span class="i ec"></span> <span class="o ec"></span><?php //echo $i.' '.$o; ?></strong>
	<div class="clearfix"></div>
</div>

<div>
	<a href="/lk/" class="btn btn-menu btn-block<?php if ($this->uri->segment(2) == '') echo ' active'; ?>"><span class="pull-left">Займы</span><i class="fa fa-database fa-fw fa-lg pull-right"></i><div class="clearfix"></div></a>
	<a href="/lk/data" class="btn btn-menu btn-block<?php if ($this->uri->segment(2) == 'data') echo ' active'; ?>"><span class="pull-left">Личные данные</span><i class="fa fa-user fa-fw fa-lg pull-right"></i><div class="clearfix"></div></a>
	<a href="/lk/history" class="btn btn-menu btn-block<?php if ($this->uri->segment(2) == 'history') echo ' active'; ?>"><span class="pull-left">Кредитная история</span><i class="fa fa-line-chart fa-fw fa-lg pull-right"></i><div class="clearfix"></div></a>
	<a href="/lk/subscribe" class="btn btn-menu btn-block<?php if ($this->uri->segment(2) == 'subscribe') echo ' active'; ?>"><span class="pull-left">Подписка</span><i class="fa fa-bullhorn fa-fw fa-lg pull-right"></i><div class="clearfix"></div></a>
</div>