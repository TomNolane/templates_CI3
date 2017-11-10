<?php require 'header.php'; ?>

<div class="clearfix">&nbsp;</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php
                        if ($this->uri->segment(1) == 'about') {require 'internal-about.php';}
                        elseif ($this->uri->segment(1) == 'contacts') {require 'internal-contacts.php';}
                        elseif ($this->uri->segment(1) == 'faq') {require 'internal-faq.php';}
                        elseif ($this->uri->segment(1) == 'info') {require 'internal-info.php';}
                        elseif ($this->uri->segment(1) == 'reviews') {require 'internal-reviews.php';}

      		elseif ($this->uri->segment(1) == 'zaim') {require 'internal-zaim.php';}
			elseif ($this->uri->segment(1) == 'docs') {require 'internal-docs.php';}
			elseif ($this->uri->segment(1) == 'service') {require 'internal-service.php';}
            elseif ($this->uri->segment(1) == 'article') {require 'internal-article.php';}
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
  $('body').animate({scrollTop: $($(location.hash).parent()).offset().top -50 }, 1000);
  return false;
}});
</script>

<?php require 'footer.php'; ?>