<?php require 'header.php'; ?>

<div class="clearfix">&nbsp;</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 internal">
			<?php
			if ($this->uri->segment(1) == 'about') require 'internal-about.php';
			elseif ($this->uri->segment(1) == 'docs') require 'internal-docs.php';
			elseif ($this->uri->segment(1) == 'contacts') require 'internal-contacts.php';
			elseif ($this->uri->segment(1) == 'faq') require 'internal-faq.php';
			elseif ($this->uri->segment(1) == 'info') require 'internal-info.php';
			?>
		</div>
	</div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<script>
$(document).ready(function () {
  if (location.hash){
  location.hash && $(location.hash + '.collapse').collapse('show');    
  $('html, body').animate({scrollTop: $($(location.hash)).offset().top - 100 }, 1000);
  return false;
}});
</script>
<?php require 'footer.php'; ?>