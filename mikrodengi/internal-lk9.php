<?php
    $my_title = "Вам автоматически одобрен займ";
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
                $arr = array(
                    'smartcredit' => 'https://go.leadgid.ru/aff_c?offer_id=1625&aff_id=23263&aff_sub=mikrodengi',
                    'vivus' => 'https://pxl.leads.su/click/3600bcf6ad0b0a189706ecce1ae85aeb?source=mikrodengi',
                    'joymoney' => 'https://pxl.leads.su/click/0d0fe90392e40473a476c86e9b489d33?source=mikrodengi',
                    'webbankir' => 'https://pxl.leads.su/click/72c0cb6b29fa68ebdaa08ecc50e1cbfa?source=mikrodengi',
                    'greenmoney' => 'https://pxl.leads.su/click/992fa3d6c63846e37a1d642fc7c767f9?source=mikrodengi',
                    'zaymer' => 'https://pxl.leads.su/click/762f05fbbdde479f81315e58b8557785?source=mikrodengi',
                    'moneyman' => 'https://pxl.leads.su/click/808b2dfdcd439ebcb3aa4befe32b3059?source=mikrodengi',
                    'ekapusta' => 'https://pxl.leads.su/click/275eb3748505c14ffaa39c3c88a25c0f?source=mikrodengi'
                );
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
                    foreach($arr as $key2 => $item2)
                    {
                        if(strpos($item['img'], $key2) !== false)
                        {
                            $item['link'] = $item2;
                        }
                    }
                    
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
                echo '<div class="row"><div class="col-md-12"></div>';
            ?>
    </div></div>
</div>