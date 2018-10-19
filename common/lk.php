<?php
    $my_title = "Вам автоматически одобрен займ";
    if($site == 'bzaim5') $site = 'bzaim';
    else if($site == 'www.mikrodengi') $site = 'mikrodengi';
    else if($site == 'bzaim.tomnolane') $site = 'bzaim';
    else if($site == 'test.zaimhome') $site = 'test';
    
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
	require 'new2/css/lk.php';
	echo '</style>';
?> 
<style>
ins, .adsbygoogle{
	text-align: center !important;
    max-height: none !important;
    height: none !important;
}
</style>

<?php if( $site == 'forzaim') { ?>
<nav class="ex-main-header ex-transparent">
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
	<?php } else { ?>
	<h2 class="text-center hh">Вам доступен займ в следующих организациях:</h2>
	<?php }?> 
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
        echo '<div class="row"><div class="col-md-12">';

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
            
            if(strpos($item['link'], "aff_sub1=") == true) $item['link'] = str_replace("aff_sub1=".ucfirst($domen), "aff_sub1=".$domen."&aff_sub2=".$this->input->get('keyword', TRUE)."&aff_sub3=".$this->input->get('campaign_id', TRUE)."&aff_sub4=".$this->input->get('utm_source', TRUE), $item['link']);
            if(strpos($item['link'], "aff_sub1=") == true && strpos($item['link'],"aff_sub3=") == false) $item['link'] = str_replace("aff_sub1=".$domen, "aff_sub1=".$domen."&aff_sub2=".$this->input->get('keyword', TRUE)."&aff_sub3=".$this->input->get('campaign_id', TRUE)."&aff_sub4=".$this->input->get('utm_source', TRUE), $item['link']);
            else if(strpos($item['link'], "aff_sub=") == true) $item['link'] = str_replace( "aff_sub=bzaim5.ru" , "aff_sub=bzaim5.ru&aff_sub2=".$domen."&aff_sub3=".$this->input->get('keyword', TRUE)."&aff_sub4=".$this->input->get('campaign_id', TRUE)."&aff_sub5=".$this->input->get('utm_source', TRUE) , $item['link']);

            $temp++;  

            if($temp==5)
            {
                echo '</div></div><div class="row"><div class="col-md-12">';
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
            }

            echo '<div class="col-md-3 offers" ><br>
                <figure class="text-center hh1">
                    <span class="fa fa-star ex-checked-stars"></span>
                    <span class="fa fa-star ex-checked-stars"></span>
                    <span class="fa fa-star ex-checked-stars"></span>
                    <span class="fa fa-star ex-checked-stars"></span>
                    <div class="ex-wrapper"><br><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                    <img class="lk-img img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                </a></div> 
                    <table>
                        <tbody>
                        <tr>
                            <td class="wordwrap">Макс. сумма:</td>
                            <td class="wordwrap">'.number_format($item['amount'],0,'',' ').'<i></i></td>
                        </tr>
                        <tr>
                            <td class="wordwrap">Основная ставка</td>
                            <td class="wordwrap">'.$item['percent'].'%</td>
                        </tr>
                        <tr>
                            <td>Возраст</td>
                            <td class="wordwrap">от '.$item['min_year'].' до '.$item['max_year'].'</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn">Получить деньги</button></a>
                </figure><br>
                </div>'; 
            
        }
        echo '</div></div>';
        echo '<div class="row"><div class="col-md-12">';
        echo '</div></div>'; 
            ?>
    </div></div>
</div>
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>