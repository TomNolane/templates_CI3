<!DOCTYPE html>
<html>
<head>
<title>Админка</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--link href="/modules/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen" /-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!--link href="css/bootstrap-responsive.css" rel="stylesheet"-->

<link href="/modules/fancybox/jquery.fancybox.css" rel="stylesheet" media="screen" />

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />

<link rel="shortcut icon" type="image/png" href="/favicon.png" />

<?php
if (isset($css_files))
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

<script src="/modules/jquery/jquery-1.11.3.min.js"></script>

<?php
if (isset($js_files))
{
	foreach($js_files as $file) echo '<script src="'.$file.'"></script>';
}
else echo '<script src="/modules/fancybox/jquery.fancybox.pack.js"></script>';
?>

<!--script src="/modules/jquery-placeholder/jquery.placeholder.js"></script-->
<!--script src="/modules/jquery-form/jquery.form.js"></script-->

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<div class="container-fluid">

<header>
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/dashboard">Админка</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php if (logged_in()) { ?>
	<ul class="nav navbar-nav navbar-right">
	    <li><a href="/dashboard"><i class="fa fa-files-o fa-fw"></i> Анкеты</a></li>
		<li><a href="/stats"><i class="fa fa-bar-chart fa-fw"></i> Аналитика</a></li>
		<li><a href="/offers"><i class="fa fa-bank fa-fw"></i> Офферы</a></li>
		<li><a href="/geo/admin/regions"><i class="fa fa-building-o fa-fw"></i> Регионы</a></li>
		<li><a href="/members"><i class="fa fa-smile-o fa-fw"></i> Админы</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i> <?php echo CI::$APP->session->userdata('email'); ?> <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><a href="/change_password"><i class="fa fa-key fa-fw"></i> Сменить пароль</a></li>
				<li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Выход</a></li>
			</ul>
		</li>
	</ul>
<?php } ?>
    </div><!-- /.navbar-collapse -->
</nav>
</header>

	<div class="row">
		<div class="col-sm-12">
		
		<?php
			if (isset($breadcrumbs))
			{
				echo '<ol class="breadcrumb">';
				
				foreach($breadcrumbs as $key => $item)
				{
					if (isset($item['href']))
						echo '<li><a href="'.$item['href'].'">'.$item['text'].'</a></li>';
					else
						echo '<li class="active">'.$item['text'].'</li>';
				}
				
				echo '</ol>';
			}
		?>
		
			<div id="showMsg" class="alert" style="display:none;"></div>
			<div id="showSuccess" class="alert alert-success" style="display:none;"></div>
			<div id="showError" class="alert alert-danger" style="display:none;"></div>
		
		<?php if (isset($title)) echo '<h1 class="page-header">'.$title.'</h1>'; ?>
		<?php if (isset($content)) echo $content; ?>
		<?php if (isset($output)) echo $output; ?>
		</div>
    </div>

<hr>

<footer>
    <div class="row">
        <div class="col-md-5"><p class="muted"><small>&copy; <?php echo date('Y'); ?></small></p></div>
        <div class="col-md-7"><div class="pull-right"></div></div>
    </div>
</footer>

</div>

<script>
$(document).ready(function(){
	$('.fancybox').fancybox();
});
</script>

<?php
// Отладочная информация
//echo '<!-- ', tiktak() - $sttime, ' с | '.round(memory_get_usage() / 1024 / 1024, 2).' Мб -->';
?>

<!--script src="/modules/bootstrap/2.3.2/js/bootstrap.min.js"></script-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>