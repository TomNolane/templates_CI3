    <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="/templates/edenga/assets/img/favicon.png" />
    <?php 
        echo '<!-- common style css--> ';
        echo '<style>'; 
        require "templates/common/new/css/common.css";
        require "templates/edenga/assets/css/style.css";
        if (in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) 
        {
            require "templates/edenga/assets/css/style_lk.css";
            require "templates/common/new/css/lk.php";
        }
        if ($this->uri->segment(1) == 'form') 
        {
            require "templates/common/new/css/form.css";
            require "templates/edenga/assets/css/style_form.css";
        }
		echo '</style>'; 
    ?>