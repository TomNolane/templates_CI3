    <!-- Favicons -->
    <link rel="shortcut icon" href="/templates/forzaim/assets/favicon/favicon-16x16.png" type="image/png">
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/forzaim/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/forzaim/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/forzaim/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/forzaim/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/forzaim/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/forzaim/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/forzaim/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/forzaim/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/forzaim/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/templates/forzaim/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/forzaim/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/forzaim/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/forzaim/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/forzaim/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/templates/forzaim/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php 
        echo '<!-- common style css--> ';
        echo '<style>'; 
        require "templates/common/new/css/common.css";
        require "templates/forzaim/assets/css/style.css";
        if (in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall2', 'offerwall', 'pixell'))) 
        {
            require "templates/forzaim/assets/css/style_lk.css";
            require "templates/common/new/css/lk.php";
            if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'vitrina') 
            echo 'footer.ex-main-footer {
                background-color: #000 !important;
            }';
        }
        if ($this->uri->segment(1) == 'form') 
        {
            require "templates/common/new/css/form.css";
            require "templates/forzaim/assets/css/style_form.css";
        }
		echo '</style>'; 
    ?>