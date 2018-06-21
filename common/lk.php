<?php
    $my_title = "Вам автоматически одобрен займ";
    if($site == 'bzaim5') $site = 'bzaim';
    else if($site == 'www.mikrodengi') $site = 'mikrodengi';
    else if($site == 'bzaim.tomnolane') $site = 'bzaim';
	else if($site == 'test.zaimhome') $site = 'test';
    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 1 : $loan = 0;
    
    $data = $this->offers->all(8, $loan);
    
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
    $pixel = $this->pixel->stat('forzaim.ru');
	echo '<style>';
	require 'new2/css/lk.php';
	echo '</style>';
?> 
<style>
ins {
	text-align: center !important;
}
</style>
<div class="row container3"><div class="col-md-12">
<?php if($site == 'www.mikrodengi' || $site == 'zaimrubli' || $site == 'zaimoking' || $site == 'mikrodengi') { ?>
<h2 class="text-center hh" style="font-size: 26px;">Мы подобрали для Вас лучшие условия по микрозаймам! <br>
Чтобы увеличить свои шансы на получение денег, заполните анкеты в нескольких организациях!</h2>
	<?php } else { ?>
	<h2 class="text-center hh">Вам доступен займ в следующих организациях:</h2>
	<?php }?> 
    <div class="row"><br>
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

        if($site == '111www.mikrodengi' || $site == '111zaimrubli' || $site == '111zaimoking' || $site == '111mikrodengi')
        { 
            $data =
            array(
                array(
                    "title" => "Joymoney",
                    "img" => "joymoney",
                    "link" => "https://pxl.leads.su/click/78c807326632d9d7f3a349d8deb274da",
                    "amount" => "15000",
                    "percent" => "2.17",
                    "min_year" => "23",
                    "max_year" => "60"
                ),
                array(
                    "title" => "Turbozaim",
                    "img" => "turbozaim",
                    "link" => "https://pxl.leads.su/click/6ba7ae168c5ee3ab53249ea0f1e49639",
                    "amount" => "15000",
                    "percent" => "2.24",
                    "min_year" => "21",
                    "max_year" => "65"
                ),
                array(
                    "title" => "Webbankir",
                    "img" => "webbankir",
                    "link" => "https://pxl.leads.su/click/38fbd5462215ebee706341e37d676de9",
                    "amount" => "15000",
                    "percent" => "1.2",
                    "min_year" => "19",
                    "max_year" => "100"
                ),
                array(
                    "title" => "Zaymer",
                    "img" => "zaymer",
                    "link" => "https://pxl.leads.su/click/42beacd5c7e1821bd686e859764a3038",
                    "amount" => "30000",
                    "percent" => "0.63",
                    "min_year" => "18",
                    "max_year" => "75"
                ),
                array(
                    "title" => "Moneyman",
                    "img" => "moneyman",
                    "link" => "https://pxl.leads.su/click/d8cd8d3c0609d6a1d64224cc5f34794c",
                    "amount" => "70000",
                    "percent" => "1.2",
                    "min_year" => "18",
                    "max_year" => "75"
                ),
                array(
                    "title" => "Greenmoney",
                    "img" => "greenmoney",
                    "link" => "https://pxl.leads.su/click/eb65403ecfc4a0942f39b36b385b7ec6",
                    "amount" => "24000",
                    "percent" => "0.95",
                    "min_year" => "20",
                    "max_year" => "86"
                ),
                array(
                    "title" => "Ekapusta",
                    "img" => "ekapusta",
                    "link" => "https://pxl.leads.su/click/525a5dc7fe8996ea2b16b29a88aa9a62",
                    "amount" => "30000",
                    "percent" => "0.00",
                    "min_year" => "18",
                    "max_year" => "100"
                ),
                array(
                    "title" => "Payps",
                    "img" => "payps",
                    "link" => "https://pxl.leads.su/click/cdf9ddc320b369b2f0b2747fee736f0a",
                    "amount" => "10000",
                    "percent" => "1.9",
                    "min_year" => "18",
                    "max_year" => "80"
                )
            ); 
        } 


        foreach($data as $item)
        {
            

            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
            $item['link'] = str_replace("#site1", ucfirst($domen), $item['link']);
            $item['link'] = str_replace("#site", $domen, $item['link']);


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
                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn">Получить деньги</button></a>
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