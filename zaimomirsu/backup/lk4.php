<?php
    $my_title = "Вам автоматически одобрен займ";
    $site = 'zaimomirsu'; 
     
    $site = str_replace("www.", "", $site);

    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all(8, 0);
    
    // IP
    $this->load->helper('ip');
    // GEO
    require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
    $gb = new IPGeoBase();
    $geo = $gb->getRecord(IP::$ip);
    if ($geo)
    {
        if (isset($geo['region'])) $region_name = $geo['region'];
    }
    // Список регионов
    $this->load->model('geo/geo_model', 'geo');
    $regions = $this->geo->regions();
    
    //pixel stat
    $this->load->model('pixel/pixel_model', 'pixel');
    $base_url = str_replace("/","",base_url());
    $base_url = str_replace("https:","",$base_url);
    $base_url = str_replace("http:","",$base_url);
    $pixel = $this->pixel->stat($base_url);
	echo '<div><style scoped>';
	require 'new2/css/lk2.php';
	echo '</style></div>';
?> 
<style scoped>
@font-face{font-family:"'Dosis'";src:url(/templates/common/new2/fonts/Dosis-Regular.eot);src:url(/templates/common/new2/fonts/Dosis-Regular.eot?#iefix) format("embedded-opentype"),url(/templates/common/new2/fonts/Dosis-Regular.woff) format("woff"),url(/templates/common/new2/fonts/Dosis-Regular.ttf) format("truetype");font-weight:400;font-style:normal}
.hh4 {
    font-family: Dosis !important;
    font-size: 34px;
}
ins, .adsbygoogle{
	text-align: center !important;
    max-height: none !important;
}
h2 {font-weight: 700;}
.gold {
    background-color: gold;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.green {
    background-color: green;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
}
.green_special {
    background-color: green; 
    color: #fff;
    padding: 15px;
    display: grid;
    font-size: 2em;
    text-align: center;
}
.yellow {
    background-color: yellow;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.blue {
    background-color: blue;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
} 
.empty {
    background-color: transparent;
    border-radius: 15px;
    color: #fff !important;
    padding: 10px;
    
}
.grey {color: #6b6b6b  !important;}
.gold_font {color: gold;}
figure.hh1 {
    border: 0 solid #FFDD2D;
	border: none !important;
}
tr>td:first-child {
    font-size: 16px;
}
.imgg {
    width: 70%;
    padding: 20px;
}
.lk_special_offer {
    /* -webkit-animation: neon .08s ease-in-out infinite alternate;
    animation: neon .08s ease-in-out infinite alternate; */
    font-size: 1.8em;
    font-weight: 700; 
    /* text-shadow: 0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000; */
  color: #00da00; 
} 
@media (max-width: 450px) {
    <?php if ( $site == 'dengomir' ) { ?>
    table {
        height: 0;
    }
    <?php } ?>
    .font08 {
        font-size: .8em;
    }
    .bem_param {
        font-size: 14px !important;
        text-align: center;
    }
	.wordwrap{
		font-size: 0.9em;
	}
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 4px;
    }
    figure.hh1 {
        padding-left: 0;
        padding-right: 0;
        padding-top: 10px;
        padding-bottom: 0px;
    }
    .ex-main-btn {
        font-size: .9em;
        margin-top: 0;
    }
    tr>td:first-child {
        font-size: 12px;
    }
    .col-xs-6 {
        padding-right: 5px !important;
        padding-left: 5px !important;
    }
    .gold, .empty, .blue, .yellow, .green {
        font-size: 11px !important;
    }
    .hh4 {
        padding-top: 0;
        font-size: 1.4em;
    }
    .imgg {
        width: 100%;
    }
    .lk_special_offer { 
        font-size: 1em;
    }
}
.bem_offer {
    display: flex;
    margin-bottom: 55px;
    padding-left: 41px;
    padding-right: 30px;
    position: relative;
    text-decoration: none;
    transition: 0.2s;
    font-family: "Calibri";
    height: 111px;
    border: 1px solid white;
    box-shadow: 0 1px 8px rgb(0, 0, 0);
}
.bem_offer__note {
    background-color: #e74142;
    color: #fff;
    font-size: 14px;
    left: 20px;
    padding: 0px 13px 0px;
    position: absolute;
    top: -25px;
    transition: 0.2s;
    height: 25px;
    line-height: 25px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.bem_offer:hover {
    border: 1px solid #ebb700;
}
.bem_offer__image {
    text-align: left;
    display: flex;
    align-items: center;
}
.bem_offer__info {
    color: #000;
    width: auto;
    flex: auto;
    display: flex;
    align-items: center;
    text-align: left;
    padding: 0 100px;
}
.bem_offer__info-wrapper {
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.bem_param {
    font-size: 18px;
    font-weight: 700;
    line-height: 26px;
}
.bem_offer__get {
    max-width: 285px;
    align-items: center;
    display: flex;
    text-align: right;
    vertical-align: middle;
    position: relative;
}
.bem_offer__button {
    width: 241px;
    height: 50px;
    border-radius: 18px;
    background-color: #57b029;
    line-height: 50px;
    text-align: center;
    color: white;
    font-size: 16px;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.15);
    transition: 0.2s;
}
@media (max-width: 470px) {
    .bem_offer__image > img {padding: 10px 0; width: 100%;}
    .bem_offer {
        display: block;
        padding-left: 0;
        padding-right: 0;
        height: unset;
    }
    .bem_offer__image {padding: 10px 0;}
    .bem_offer__info {padding: 10px;}
    .bem_offer__get{margin-bottom: 20px;}
    .bem_offer__button{width: 100%;}
}
.red2 {background-color: #e8392c}  
.darkred2 {background-color: #cb2d4b}
.orange2 {background-color: #ff9d11}
.green2 {background-color: #2a823f}
.pink2 {background-color: #cb2d4b}
@media (max-width: 1100px)
{
.bem_offers__wrapper {
        margin-bottom: 40px;
    display: grid;
    grid-template-rows: repeat(auto-fit, minmax(262px, 1fr));
    grid-template-columns: repeat(auto-fit, minmax(279px, 1fr));
    grid-gap: 35px 20px;
}
}


@media (max-width: 1100px)
{
.bem_offer {
    flex-wrap: initial;
    height: auto;
    margin: 0;
}
}

@media (max-width: 480px)
{
.bem_offer {
    display: block;
    margin-right: 0;
    padding: 15px;
    width: auto;
}
}
@media (max-width: 480px)
{
.bem_offer__image {
    width: 144px;
}
}

@media (max-width: 1100px)
{
.bem_offer__image {
    margin-bottom: 21px;
    width: 100%;
}
}

@media (max-width: 1100px)
{
.bem_offer__info {
    padding: 0;
}
}
 

@media (max-width: 1100px)
{
.bem_offer__info-wrapper>div {
    width: 50%;
    margin-bottom: 16px;
}
}

@media (max-width: 1100px)
{
.bem_offer__get {
    width: 100%;
    max-width: 100%;
    align-items: baseline;
}
}

@media (max-width: 1200px)
{
.bem_offer__button {
    width: 230px;
    font-size: 22px;
    height: 50px;
    line-height: 50px;
}
}

@media (max-width: 1100px)
{
.bem_offer__button {
    width: 100%;
}
}

</style> 

<?php if($site == "forzaim") { ?>
<nav class="ex-main-header ex-transparent hidden-xs">
    <div class="container">
        <i class="ex-hamburger"></i>
        <a class="ex-brand" href="/">Forzaim</a>
    </div>
</nav>
<?php } ?>

<div class="row container3"><div class="col-md-12">
<?php if($site == 'www.mikrodengi' || $site == 'zaimrubli' || $site == 'zaimoking' || $site == 'mikrodengi') { ?>


<h2 class="text-center hh hh4"> Вам предварительно <span class="gold_font">одобрен займ</span> в этих организациях:</h2>
 <h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки во всех компаниях ниже</h2>

    <?php } else if($site == 'dengimo' || $site == 'zaimcoin') { ?>
<h2 class="text-center hh hh4"> Вам предварительно <span class="gold_font">одобрен займ</span> в этих организациях:</h2>
 <h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки во всех компаниях ниже</h2>
	<?php } else { ?>
<h2 class="text-center hh hh4"> Вам предварительно <span class="gold_font">одобрен займ</span> в этих организациях:</h2>
 <h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки во всех компаниях ниже</h2>
    <?php }?> 
    <br>
     <div class="container">
    <div class="row" id="for_google"> 
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');
        $temp = 0;
        echo '<div class="row"><div class="col-md-12 col-xs-12">';

        foreach($data as $item)
        {
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
            $item['link'] = str_replace("#site1", ucfirst($domen), $item['link']);
            $item['link'] = str_replace("#site", $domen, $item['link']);

            if ( $domen == 'zaimhome.ru' ){
                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=zaimhome', $item['link']);
            }
            if ( $domen == 'dengoman.ru' ){
                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=dengoman', $item['link']);
            }            
            if ( $domen == 'dengibystra.ru' ){
                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=dengibystra', $item['link']);
            }
 
			if(strpos($item['link'], "aff_sub1=") == true)
            {
                $item['link'] = str_replace( "aff_sub1=#site1", $domen, $item['link']);
                $item['link'] = str_replace( "aff_sub1=#site", $domen, $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                else if(trim($this->input->get('doi', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3=doi';
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                else if(trim($this->input->get('keyword', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
            else if (strpos($item['link'], "aff_sub=") == true) 
            {
                $item['link'] = str_replace( "aff_sub=bzaim5.ru", "aff_sub=".$domen, $item['link']);
                $item['link'] = str_replace( "aff_sub2=#site", "", $item['link']);
                $item['link'] = str_replace( "aff_sub2=#site1", "", $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                else if(trim($this->input->get('doi', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3=doi';
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                else if(trim($this->input->get('keyword', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
            else if (strpos($item['link'], "promo=") == true)
            {
                $item['link'] = str_replace( "utm_source=bzaim5", "utm_source=".$domen, $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                else if(trim($this->input->get('doi', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3=doi';
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                else if(trim($this->input->get('keyword', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
             
            $temp++;
 
            $words = array (
                '<span class="empty"> </span>',
                '<span class="green">Выгодно сегодня</span>',
                '<span class="gold">Лучшее предложение дня</span>',
                '<span class="yellow">Предложение месяца</span>',
                '<span class="blue">Одобрение 96,5%</span>',
                '<span class="empty"> </span>'
            );
 

                $sum = number_format($item['amount'],0,'',' ');
                $im = $item['img'];
                $percent = $item['percent'];
                $href= $item['link'];
                $onclick = '"markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"';
                $over_sum = number_format( $item['amount'] * ( $item['percent'] + 100) / 100 ,0,'',' ');
                $over_per_day = number_format( $item['amount'] * $item['percent'] / 100 ,0,'',' ');

                $words = array (
                    '<span></span>',
                    '<span class="bem_offer__note">Одобрение 100% сегодня</span>',
                    '<span class="bem_offer__note">Круглосуточная выдача</span>',
                    '<span class="bem_offer__note">Займа без отказов</span>',
                    '<span class="bem_offer__note">Без документов</span>',
                    '<span class="bem_offer__note">Одобряют каждому</span>',
                    '<span class="bem_offer__note">С плохой кредитной историей</span>',
                    '<span></span>'
                );
                $rand_word = $words[rand(0,7)];
                
                echo <<<END
                <div class="bem_offers__wrapper">
                <a href="$href" onclick=$onclick class="bem_offer" target="_blank" >$rand_word<div class="bem_offer__image"><img src="/templates/common/img/offers/$im.png" alt=""></div><div class="bem_offer__info"><div class="bem_offer__info-wrapper"><div class="bem_param bem_param_type_summ"><div class="top-text">
                Заем
                </div><div class="bottom-text">
                $sum <i class="fa fa-rub"></i></div></div><div class="bem_offer__next-arrow"></div><div class="bem_param bem_param_type_percent"><div class="top-text">
                Процент
                </div><div class="bottom-text">
                от $percent% в день </div></div><div class="bem_offer__next-arrow"></div><div class="bem_param bem_param_type_commission"><div class="top-text">
                Переплата
                </div><div class="bottom-text">
                $over_per_day <i class="fa fa-rub"></i> </div></div> 
                
                </div></div><div class="bem_offer__get"><div class="bem_offer__button">Получить деньги</div></div></a> </div>
END;
            }
             
        echo '</div></div></div>'; 
            ?>
    </div></div>
</div>
<br><br>
<?php if($site == 'zaimol') { ?>
<!-- Global site tag (gtag.js) - Google Ads: 825395112 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-825395112"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-825395112'); </script> 
<?php } 
if($site == "rublimo") { ?>
<!-- Global site tag (gtag.js) - Google Ads: 755943017 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-755943017"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-755943017'); </script>
<!-- Event snippet for Конверсия conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-755943017/aaCRCNGGlpcBEOmMu-gC'}); </script> 
<?php } ?>
<script>
/*
window.onload = function() // дожидаемся загрузки страницы
{
     initializeTimer(); // вызываем функцию инициализации таймера
}

function initializeTimer() {
	var endDate = new Date().setHours(new Date().getHours()+3); // получаем дату истечения таймера
    endDate = new Date(endDate).setMinutes(new Date().getMinutes()-25);
     endDate = new Date(endDate).setSeconds(new Date().getSeconds()-47);
	var currentDate = new Date(); // получаем текущую дату
	var seconds = (endDate-currentDate) / 1000; // определяем количество секунд до истечения таймера
	if (seconds > 0) { // проверка - истекла ли дата обратного отсчета
		var minutes = seconds/60; // определяем количество минут до истечения таймера
		var hours = minutes/60; // определяем количество часов до истечения таймера
		minutes = (hours - Math.floor(hours)) * 60; // подсчитываем кол-во оставшихся минут в текущем часе
		hours = Math.floor(hours); // целое количество часов до истечения таймера
		seconds = Math.floor((minutes - Math.floor(minutes)) * 60); // подсчитываем кол-во оставшихся секунд в текущей минуте
		minutes = Math.floor(minutes); // округляем до целого кол-во оставшихся минут в текущем часе
		
		setTimePage(hours,minutes,seconds); // выставляем начальные значения таймера
		
		function secOut() {
		  if (seconds == 0) { // если секунду закончились то
			  if (minutes == 0) { // если минуты закончились то
				  if (hours == 0) { // если часы закончились то
					  showMessage(timerId); // выводим сообщение об окончании отсчета
				  }
				  else {
					  hours--; // уменьшаем кол-во часов
					  minutes = 59; // обновляем минуты 
					  seconds = 59; // обновляем секунды
				  }
			  }
			  else {
				  minutes--; // уменьшаем кол-во минут
				  seconds = 59; // обновляем секунды
			  }
		  }
		  else {
			  seconds--; // уменьшаем кол-во секунд
		  }
		  setTimePage(hours,minutes,seconds); // обновляем значения таймера на странице
		}
		timerId = setInterval(secOut, 1000) // устанавливаем вызов функции через каждую секунду
	}
	else {
		alert("Установленная дата уже прошла");
	}
}

function setTimePage(h,m,s) { // функция выставления таймера на странице
	var element = document.getElementById("lk_timer"); // находим элемент с id = timer
	element.innerHTML = h+":"+m+":"+s; // выставляем новые значения таймеру на странице
}

function showMessage(timerId) { // функция, вызываемая по истечению времени
	alert("Время истекло!");
	clearInterval(timerId); // останавливаем вызов функции через каждую секунду
}
*/
</script>
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>