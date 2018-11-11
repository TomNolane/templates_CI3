<?php 
if(!isset($my_title)) $my_title='Срочные займы круглосуточно без проверок Онлайн';
if(!isset($description)) $description='Vkredito - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!';
$this->load->model('pixel/pixel_model', 'pixel');
$base_url = str_replace("/","",base_url());
$base_url = str_replace("https:","",$base_url);
$base_url = str_replace("http:","",$base_url);
$pixel = $this->pixel->stat($base_url);
?>
<!doctype html>
<html lang="ru">
<head>
    <title><?php echo $my_title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="<?php echo $description;?>" />
    <meta name="Keywords" content="моментальный заем, займы, онлайн, деньги" />
    <meta name="robots" content="all" />
    <meta name="copyright" lang="ru" content="Vkredito.ru" />
    <link rel="stylesheet" href="/templates/vkredito/assets/css/style.css">
	<?php  
		echo '<style>'; 
		require "templates/common/new2/css/common2.css";
		require "templates/common/new2/css/lk2.php";
		echo '</style>'; 
	  ?>
    <link rel="icon" href="/templates/vkredito/assets/favicon/favicon.ico"> 
    <script charset="UTF-8" src="//cdn.sendpulse.com/js/push/e6b74be27c8e9745fa917326e851497b_1.js" async></script>
</head>
<body class="ex-sticky">
    <header>
        <div class="ex-green-head"></div>
        <div class="container">
            <div class="row ex-head align-items-center ">
                <div class="col-lg-2 col-xs-4 text-center">
                    <a href="/" class="ex-brand navbar-brand"></a>
                </div>
                <div class="col-lg-10 col-xs-8">
                    <h1>БЫСТРЫЕ ОНЛАЙН-ЗАЙМЫ НА КАРТУ В РОССИИ</h1>
                </div>
            </div>
        </div>


        <!-- <div class="ex-head-section">
            <div class="container">
                <p class="ex-head-text">
                    МЫ ВЫБРАЛИ ДЛЯ
                    <span>ВАС</span>
                    <br> САМЫЕ
                    <span>ВЫГОДНЫЕ</span> ПРЕДЛОЖЕНИЯ
                </p>
                <div class="ex-arrow-down">
                    <figure id="ex-offers"></figure>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> -->


    </header>