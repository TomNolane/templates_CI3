<?php
    $my_title = "Вам автоматически одобрен займ";
    if($site == 'bzaim5') $site = 'bzaim';
    else if($site == 'www.mikrodengi') $site = 'mikrodengi';
    else if($site == 'bzaim.tomnolane') $site = 'bzaim';
    else if($site == 'test.zaimhome') $site = 'test';
    else if($site == 'catpost.test') $site = 'dengimo'; 
    
    $site = str_replace("www.", "", $site);

    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all(4, 0);
    
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
	echo '<style>';
	require 'new2/css/lk2.php';
	echo '</style>';
?> 
<style>
ins, .adsbygoogle{
	text-align: center !important;
    max-height: none !important;
    height: none !important;
}
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
.hh4 {
    padding-top: 24px;
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
}
</style>

<?php if( $site == 'forzaim') { ?>
<nav class="ex-main-header ex-transparent hidden-xs">
    <div class="container">
        <i class="ex-hamburger"></i>
        <a class="ex-brand" href="/">Forzaim</a>
    </div>
</nav>
<?php } ?>






<div class="row container3"><div class="col-md-12">
<?php if($site == 'www.mikrodengi' || $site == 'zaimrubli' || $site == 'zaimoking' || $site == 'mikrodengi') { ?>
<h2 class="text-center hh" style="font-size: 26px;">Мы подобрали для Вас лучшие условия по микрозаймам! <br>
Чтобы увеличить свои шансы на получение денег, заполните анкеты в нескольких организациях!</h2>
    <?php } else if($site == 'dengimo' || $site == 'zaimcoin' || $site == 'catpost.me' || $site == 'catpost') { ?>
    <div class="col-md-8"><h2 class="text-center hh hh4">Заполните заявку во всех организациях ниже и выиграйте Iphone XS. Розыгрыш 16.11.2018:</h2> </div>
    <div class="col-md-4"><img class='img-responsive imgg' src="/templates/common/img/iphone.png"></div>
	<?php } else { ?>
	<h2 class="text-center hh hh4">Вам доступен займ в следующих организациях:</h2>
    <?php }?> 
    <br>
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

            // if($temp==4)
            // {
            //     echo '</div></div><div class="row"><div class="col-md-10 col-md-offset-1">';
                // echo '<div class="col-md-4 offers" >
                // <figure class="text-center hh2"><br> 
                //     <div> 

                //     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                //     <!-- Блок пикселя рублимо -->
                //     <ins class="adsbygoogle"
                //         style="display:inline-block;width:250px;height:290px"
                //         data-ad-client="ca-pub-4970738258373085"
                //         data-ad-slot="3833536790"></ins>
                //     <script>
                //     (adsbygoogle = window.adsbygoogle || []).push({});
                //     </script> 
                    
                //     </div> 
                //     <br></figure>
                // </div>';
                // echo '<div class="col-md-4 offers" >
                // <figure class="text-center hh2"><br> 
                //     <div> 

                //     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                //     <!-- Блок пикселя рублимо -->
                //     <ins class="adsbygoogle"
                //         style="display:inline-block;width:250px;height:290px"
                //         data-ad-client="ca-pub-4970738258373085"
                //         data-ad-slot="3833536790"></ins>
                //     <script>
                //     (adsbygoogle = window.adsbygoogle || []).push({});
                //     </script> 
                    
                //     </div> 
                //     <br></figure>
                // </div>';
                // echo '<div class="col-md-4 offers" >
                // <figure class="text-center hh2"><br> 
                //     <div> 

                //     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                //     <!-- Блок пикселя рублимо -->
                //     <ins class="adsbygoogle"
                //         style="display:inline-block;width:250px;height:290px"
                //         data-ad-client="ca-pub-4970738258373085"
                //         data-ad-slot="3833536790"></ins>
                //     <script>
                //     (adsbygoogle = window.adsbygoogle || []).push({});
                //     </script> 
                    
                //     </div> 
                //     <br></figure>
                // </div></div></div><div class="col-md-12">';
            // }

            $words = array (
                '<span class="empty"> </span>',
                '<span class="green">Выгодно сегодня</span>',
                '<span class="gold">Лучшее предложение дня</span>',
                '<span class="yellow">Предложение месяца</span>',
                '<span class="blue">Одобрение 96,5%</span>',
                '<span class="empty"> </span>'
            );

            echo '<div class="col-md-3 col-xs-6" >
                <figure class="text-center hh1"> 
                    <div class="ex-wrapper"><br><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                    <img class="lk-img img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                </a></div> 
                    <table class="table">
                        <tbody>
                        <tr class="font08">
                            <td class="wordwrap">Сумма:</td>
                            <td class="wordwrap">до '.number_format($item['amount'],0,'',' ').' <i class="fa fa-rub"></i></td>
                        </tr>
                        <tr class="font08">
                            <td class="wordwrap">Основная<br class="visible-xs"> ставка</td>
                            <td class="wordwrap">'.$item['percent'].' <i class="fa fa-percent"></i></td>
                        </tr>
                        <tr class="font08">
                            <td>Возраст</td>
                            <td class="wordwrap">от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn">Получить <br class="visible-xs">деньги</button></a>
                </figure><br>
                </div>'; 
            
        }
        echo '</div></div>';
        // echo '<div class="row"><div class="col-md-10 col-xs-12 col-md-offset-1">';
        // echo '</div></div>'; 
            ?>
    </div></div>
</div>
<br><br>
<!-- <h3 class="text-center hh">Вам одобрили заявку и на почту прислали уникальное предложение. Воспользуйтесь им!</h3> -->
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>