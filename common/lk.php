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
?> 
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
                        echo '<div class="col-md-4 offers" >
                        <figure class="text-center hh2"> 

                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- Блок пикселя рублимо -->
                            <ins class="adsbygoogle"
                                style="display: block; width: 450px; margin: 0px 0px 15px 1px; overflow: hidden; border-radius: 5px; background-color: rgb(250, 250, 250); box-shadow: rgba(255, 255, 255, 0.7) 0px 0px 5px; max-height: 149px; height: 149px;"
                                data-ad-client="ca-pub-4970738258373085"
                                data-ad-slot="3833536790"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>  
                            <br></figure>
                        </div>';
                        echo '<div class="col-md-4   offers" >
                        <figure class="text-center hh2"> 
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- Блок пикселя рублимо -->
                            <ins class="adsbygoogle"
                                style="display: block; width: 450px; margin: 0px 0px 15px 1px; overflow: hidden; border-radius: 5px; background-color: rgb(250, 250, 250); box-shadow: rgba(255, 255, 255, 0.7) 0px 0px 5px; max-height: 149px; height: 149px;"
                                data-ad-client="ca-pub-4970738258373085"
                                data-ad-slot="3833536790"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>  
                            <br></figure>
                        </div>';
                        echo '<div class="col-md-4   offers" >
                        <figure class="text-center hh2"> 
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- Блок пикселя рублимо -->
                            <ins class="adsbygoogle"
                                style="display: block; width: 450px; margin: 0px 0px 15px 1px; overflow: hidden; border-radius: 5px; background-color: rgb(250, 250, 250); box-shadow: rgba(255, 255, 255, 0.7) 0px 0px 5px; max-height: 149px; height: 149px;"
                                data-ad-client="ca-pub-4970738258373085"
                                data-ad-slot="3833536790"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>  
                            <br></figure>
                        </div></div>';
            ?>
    </div></div>
</div>
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>