<?php require 'header.php'; ?>

<header>
    <div class="p">
        <div class="clearfix">&nbsp;</div>
            <div class="container">
                    <div class="row">
                            <div class="col-md-12 col-sm-12 internal">
                                    <?php
                                    if ($this->uri->segment(1) == 'about') require 'internal-about.php';
                                    elseif ($this->uri->segment(1) == 'docs') require 'internal-docs.php';
                                    elseif ($this->uri->segment(1) == 'contacts') require 'internal-contacts.php';
                                    elseif ($this->uri->segment(1) == 'faq') require 'internal-faq.php';
                                    elseif ($this->uri->segment(1) == 'article') require 'internal-article.php';
                                    ?>
                            </div>
                    </div>
            </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
    </div>
</header>
<script>
$(document).ready(function () {
  if (location.hash){
  location.hash && $(location.hash + '.collapse').collapse('show');    
  $('html, body').animate({scrollTop: $($(location.hash)).offset().top - 100 }, 1000);
  return false;
}});
</script>
<?php require 'footer.php'; ?>