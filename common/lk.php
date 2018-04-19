<?php
    $my_title = "Вам автоматически одобрен займ";
    if($site == 'bzaim5') $site = 'bzaim';
    else if($site == 'www.mikrodengi') $site = 'mikrodengi';
    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    $data = $this->offers->all();
    
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
?>
<style>
table {
    margin-top: 20px;
    width: 100%; 
}
td {
    text-align: right;
}
tr>td:first-child {
    text-align: left;
}
h2.hh {
    color: #000000;
}
figure.hh1 {
    <?php if($site == "zaimomix") {?>
    display: inline-block !important; 
    <?php } ?>
    padding-left: 25px;
    padding-right: 25px;
    padding-top:30px;
    padding-bottom:40px;
    border: 1px solid #FFDD2D;
    -moz-transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
    -ms-transition: all 0.5s ease-out;
    transition: all 0.5s ease-out;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
}
figure.hh2:hover {
    border: none;
    -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    background-color: #f7f7f7;
}
figure.hh2 {
    <?php if($site == "zaimomix") {?>
    display: inline-block !important; 
    <?php } ?>
    padding-left: 0;
    padding-right: 0;
    margin-top: 20px;
    margin-bottom: 40px !important;
    padding-bottom: 10px !important;
    border: 1px solid #FFDD2D;
    -moz-transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
    -ms-transition: all 0.5s ease-out;
    transition: all 0.5s ease-out;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
}
figure.hh1:hover {
    border: none;
    -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    background-color: #f7f7f7;
}
/* ins {
    max-height: 250px !important;
    height: 250px !important;
} */

/* .adsbygoogle {
    max-height: 250px !important;
    height: 250px !important;
} */

.offers { 
    <?php if($site == "zaimomix") {?>
    display: inline-block !important; 
    <?php } ?>
    padding-left: 20px;
    padding-right: 20px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
}
.ex-main-btn {
    width: 100%;
    margin-top: 20px;
    padding-top: 15px;
    padding-bottom: 15px;
    color: black;
    font-weight: 700;
    outline: none;
    border: none;
    background: #FFDD2D;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.09);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
}

.wordwrap { 
   white-space: nowrap; /* IE */
}
.container3 {
    background-color: #ffffff;
    padding-left: 50px;
    padding-right: 50px;
}
@media screen and (max-width: 440px) {
    .container3 {
    background-color: #ffffff;
    padding-left: 0;
    padding-right: 0;
} 
}
.ex-checked-stars {
    color: #f8e71c !important;
}
.lk-img {
    margin: 0 auto !important;
} 
</style>
<div class="row container3"><div class="col-md-12">
    <h2 class="text-center hh">Вам доступен займ в следующих организациях:</h2>
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
                foreach($data as $item)
                {
                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                    $item['link'] = str_replace("#site", $domen, $item['link']);
                    $temp++; 
                    if($temp==5) echo '</div></div><div class="row"><div class="col-md-12">';
                    if($temp==2 && $site == "rublismo")
                    {
                        echo '<div class="col-md-3 offers" >
                        <figure class="text-center hh2"><br>
                        <span class="fa fa-star ex-checked-stars"></span>
                            <span class="fa fa-star ex-checked-stars"></span>
                            <span class="fa fa-star ex-checked-stars"></span>
                            <span class="fa fa-star ex-checked-stars"></span>
                            <span class="fa fa-star ex-checked-stars"></span>
                            <div><ins class="adsbygoogle text-center"
                            style="display:block"
                            data-ad-client="ca-pub-4970738258373085"
                            data-ad-slot="5040571366"
                            data-ad-format="auto"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script></div> 
                            <br></figure>
                        </div>';  
                    }
                    else
                    {
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
                                    <td class="wordwrap">Максимальная сумма:</td>
                                    <td class="wordwrap">'.number_format($item['amount'],0,'',' ').'<i></i></td>
                                </tr>
                                <tr>
                                    <td class="wordwrap">Основная ставка</td>
                                    <td class="wordwrap">'.$item['percent'].'%</td>
                                </tr>
                                <tr>
                                    <td>Срок займа</td>
                                    <td class="wordwrap">до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn">Получить деньги</button></a>
                        </figure><br>
                        </div>';  
                    }
                    
                }
                echo '</div></div>';
            ?>
    </div></div>
</div>
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>