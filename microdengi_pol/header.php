<?php  
if(!isset($my_title)) 
	$my_title = 'Pożyczki online - szybkie i na raty - Microdengi';

if(!isset($description))
	$description = 'Microdengi -zawiera oceny i opinie o instytucjach mikrofinansowych, działających w Polsce, szybkie chwilówki online, a także aktualności z firm!';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $my_title;?></title>
    <!-- meta -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<meta name="description" content="<?php echo $description;?>" />
	<meta name="keywords" content="natychmiastowa pożyczka, pożyczki, online, pieniądze" />
	<meta name="robots" content="all" />
	<meta name="copyright" lang="ru" content="microdengi.pl" /> 
	<meta property="og:title" content="Pożyczki online - szybkie i na raty - Microdengi" />
	<meta property="og:description" content="Microdengi -zawiera oceny i opinie o instytucjach mikrofinansowych, działających w Polsce, szybkie chwilówki online, a także aktualności z firm!"/>
	<meta property="og:image" content="https://microdengi.pl/templates/microdengi_pol/assets/img/pic.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://microdengi.pl/" />
	<meta name="twitter:card" content="https://microdengi.pl/templates/microdengi_pol/assets/img/pic.png"/>
	<meta name="twitter:title" content="Pożyczki online - szybkie i na raty - Microdengi"/>
	<meta name="twitter:description" content="Microdengi -zawiera oceny i opinie o instytucjach mikrofinansowych, działających w Polsce, szybkie chwilówki online, a także aktualności z firm!"/>
	<meta name="twitter:image:src" content="https://microdengi.pl/templates/microdengi_pol/assets/img/pic.png"/>
	<meta name="twitter:url" content="https://microdengi.pl/"/>
    <meta name="twitter:domain" content="microdengi.pl"/>
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="/templates/microdengi_pol/favicon/favicon-16x16.png" type="image/png">
    <link rel="apple-touch-icon" sizes="57x57" href="/templates/microdengi_pol/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/templates/microdengi_pol/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/microdengi_pol/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/microdengi_pol/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/microdengi_pol/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/templates/microdengi_pol/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/templates/microdengi_pol/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/templates/microdengi_pol/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/microdengi_pol/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/templates/microdengi_pol/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/microdengi_pol/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/templates/microdengi_pol/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/microdengi_pol/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/microdengi_pol/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/templates/microdengi_pol/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <?php 
     echo '<style>';
     require 'templates/microdengi_pol/assets/css/style.css';
     echo '</style>';
     echo '<style>';
     require 'templates/microdengi_pol/assets/css/style_custom.css';
     echo '</style>';

     if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
     {
         echo '<style>';
         require "templates/microdengi_pol/assets/css/style_lk.css";
         echo '</style>';
     } 
		require 'sendpuls.php';
        require 'googlesyndication.php';
    ?>
     <!--[if lte IE 9]>
     <script src="/modules/html5shiv/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]--> 
</head>
<body>
<nav class="navbar navbar-expand-lg ex-main-header">
    <div class="container">
        <a class="ex-brand navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/about">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ex-ask-question" href="/documents">Dokumenty</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2>
                Wypełnij formularz
                a nasz manager skontaktuje się z państwem
                </h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Wpisz swoje imię i nazwisko">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Wpisz swój e-mail">
                    </div>
                    <div class="form-group">
                        <textarea name="text" id="text" placeholder="Tekst wiadomości"></textarea>
                    </div>
                    <button type="submit" class="ex-main-btn">Далее</button>
                </form>
            </div>
        </div>
    </div>
</div>