<?php
    function plural_type($n) {return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2));} 

    $my_title = "Мгновенные займы на карту";
    $site = str_replace("www.", "", $site);
    $site = str_replace(".tomnolane", "", $site);

    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all(18, 0);
    
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
	if($setting_array['is_mobile'] != 'мобила') {
        echo '<div><style scoped>';
        require 'new2/css/lk4_desktop.css';
        echo '</style></div>'; 
?>
<div class="row container3"><div class="col-md-12">
 <!-- Ru-zaimo.ru -->
            <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="9321709999"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
<? //if (file_exists(realpath(__DIR__ . '/..').'/'.$site.'/internal-google-tmp.php')) require(realpath(__DIR__ . '/..').'/'.$site.'/internal-google-tmp.php'); ?>
<? if (!file_exists(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-1.php')) : ?>
<h2 class="text-center hh hh4"> Для вас подобраны организации для <span class="gold_font">получения займа или кредита</span> в России:</h2>
<? else : require(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-1.php'); endif; ?>
<? if (!file_exists(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-2.php')) : ?>
<h2 class="text-center hh hh4 grey" style="font-size: 18px;line-height:initial">На нашем сайте вы можете найти нужную информацию о кредитах и займах, которые можно получить в России. <br>Все публикуемые на сайте организации имеют лицензии и внесены в реестр кредитных организаций.</h2>
<? else : require(realpath(__DIR__ . '/..').'/'.$site.'/internal-header-2.php'); endif; ?>
    <br>
    <div class="row" id="for_google">
    
    <?php 
        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');

        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
        /*$words = array (
                '<span class="empty"> </span>',
                '<span class="green">Выгодно сегодня</span>',
                '<span class="gold">Лучшее предложение дня</span>',
                '<span class="yellow">Предложение месяца</span>',
                '<span class="blue">Одобрение 96,5%</span>',
                '<span class="empty"> </span>'
            );*/
        $words = array (
            '<span></span>',
            '<span class="bem_offer__note red2">Одобрение 100% сегодня</span>',
            '<span class="bem_offer__note darkred2">Круглосуточная выдача</span>',
            '<span class="bem_offer__note orange2">Займы без отказов</span>',
            '<span class="bem_offer__note green2">Без документов</span>',
            '<span class="bem_offer__note darkred2">Одобряют каждому</span>',
            '<span class="bem_offer__note orange2">С плохой кредитной историей</span>',
            '<span></span>'
        );

        echo '<div class="row"><div class="col-md-12 col-xs-12">';
        foreach($data as $item)
        {
            $item['link'] = $item['link'].'&aff_sub=Pixel&aff_sub1=Pixel&aff_sub2=Pixel&aff_sub3=Pixel&aff_sub4=Pixel&s=Pixel&s1=Pixel&sub=Pixel&sub1=Pixel&sub2=Pixel';
             
            $sum = number_format($item['amount'],0,'',' ');
            $im = $item['img'];
            $percent = $item['percent'];
            $href= $item['link'];
            $onclick = '"markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"';
            $over_sum = number_format( $item['amount'] * ( $item['percent'] + 100) / 100 ,0,'',' ');
            $over_per_day = number_format( $item['amount'] * $item['percent'] / 100 ,0,'',' ');

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
             
        echo '</div></div>'; ?>
    </div></div>
</div>
<br><br>
<?php } else { //mobile
    echo '<div><style scoped>';
    require realpath(__DIR__ . '/..').'/common/new2/css/lk2.php';
    require 'new2/css/lk4_mobile.css';
    echo '</style></div>'; ?>

<div class="row container3"><div class="col-md-12">
<h2 class="text-center hh hh4"> Вам предварительно <span class="gold_font">одобрен займ</span> в этих организациях:</h2>
<h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки во всех компаниях ниже</h2>
    <br>
    <div class="row" id="for_google">
    
	 <div class="text-center hidden-xs" id="img_agree"><img src="/templates/common/img/stamp.png" /></div>
     
    <?php 
        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');

        $words = array (
            '<div class="caption empty"><span></span></div>',
            '<div class="caption red2"><span>Одобрение 100% сегодня</span></div>',
            '<div class="caption darkred2"><span>Круглосуточная выдача</span></div>',
            '<div class="caption orange2"><span>Займа без отказов</span></div>',
            '<div class="caption green2"><span>Без документов</span></div>',
            '<div class="caption pink2"><span>Одобряют каждому</span></div>',
            '<div class="caption orange2"><span>С плохой кредитной историей</span></div>',
            '<div class="caption empty"><span></span></div>'
        );

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
            if ( $domen == 'bzaim5.ru'){
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
             
            echo '<div class="col-md-3 col-xs-6" >
            <figure class="hh3">
                '.$words[rand(0,7)].'
                <img class="lk-img2 img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                <div class="lk-text">Сумма: до '.number_format($item['amount'],0,'',' ').' <i class="fa fa-rub"></i></div>
                <div class="lk-text">Основная ставка: '.$item['percent'].' <i class="fa fa-percent"></i></div>
                <div class="lk-text">Возраст: от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></div>
                <div class="center2"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn2">Получить деньги</button></a></div>
            </figure>
            </div>';
        }
        echo '</div></div>';?>
    </div></div>
</div>
<br><br>

<?php } ?> 
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>