    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="/templates/test/assets/favicon/favicon.ico" /> 
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/test/assets/favicon/favicon.png">
    <?php 
        echo '<!-- common style css--> ';
        echo '<style>'; 
        require "templates/common/new2/css/common.css";
        require "templates/test/assets/css/style.css";
        if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') 
        {
            require "templates/test/assets/css/style_lk.css";
            require "templates/common/new2/css/lk.php";
        }
        if ($this->uri->segment(1) == 'form') 
        {
            require "templates/common/new2/css/form.css";
            require "templates/test/assets/css/style_form.css";
        }
		echo '</style>'; 
    ?>