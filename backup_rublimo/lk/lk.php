<?php require 'header.php'; ?>

<link href="/templates/rublimo/css/lk.css" rel="stylesheet" media="screen">

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<?php
			if ($this->uri->segment(2) == 'data') require 'lk-data.php';
			elseif ($this->uri->segment(2) == 'history') require 'lk-history.php';
			elseif ($this->uri->segment(2) == 'subscribe') require 'lk-subscribe.php';
			else require 'lk-index.php';
			?>
		</div>
		<div class="col-sm-4">
			<?php require 'lk-sidebar.php'; ?>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	
});
</script>

<?php require 'footer.php'; ?>