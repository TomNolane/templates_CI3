<?php
    $my_title = 'Вам автоматически одобрен займ';
    require 'header.php';
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
    $pixel = $this->pixel->stat('bzaim5.ru');
?>
    <div class="ex-bounds"></div>
    <div class="ex-main-spasibo">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Вам автоматически одобрен
                    <br> займ в следующих организациях:</h1>
                <table class="hidden-xs">
                    <?php
$y = 0; $y1 = 'height: 80px; max-width: 240px;'; $y2 = 'height: 100px; max-width: 270px;';

function plural_type($n) { 
    return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
} 

$_plural_years = array('год', 'года', 'лет');
$_plural_months = array('месяц', 'месяца', 'месяцев');
$_plural_days = array('день', 'дня', 'дней');
$_plural_times = array('раз', 'раза', 'раз');

 foreach($data as $item){
     if($y >= 2) $y1 = $y2;
    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
    $item['link'] = str_replace("#site", $domen, $item['link']);
echo ' <tr> 
                <td><center>
                <a   href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><img  src="/templates/common/img/offers/'.$item['img'].'.png" class="'.$item['img'].'" alt="'.$item['title'].'"></a>
            </center></td>
                <td><a   href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                    <div><span class="table_text">Прооцентная ставка</span><span class="table_text2 text-right"> <b>от '.$item["percent"].'%</b>&emsp;&emsp;&emsp;</span></div> 
                    <br>
                    <div><span class="table_text text-left">Максимальная сумма</span><span class="table_text2 text-right">до <b>'.$item["amount"].' рублей</b>&emsp;&emsp;&emsp;</span></div> 
                    <br>
                    <div><span class="table_text text-left">Максимальный срок</span><span class="table_text2 text-right">до <b>'.$item["period"].' '.$_plural_days[plural_type($item['period'])].'</b>&emsp;&emsp;&emsp;</span></div>
                    </a>
                </td> 
                <td><a style="color: #000000" href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"   target="_blank"><button class="ex-main-btn ">Получить деньги</button></a></td>
                </tr>
            '; $y++;
        }
            ?>

                </table>
                <table class="visible-xs" style="border-spacing: 0 !important;">


                    <?php
 foreach($data as $item){
    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
    $item['link'] = str_replace("#site", $domen, $item['link']);        
echo '        
        <tr> 
            <td><center> <a   href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
            <img src="/templates/common/img/offers/'.$item['img'].'.png" class="'.$item['img'].'" alt="'.$item['title'].'">
        </a></center></td>
                 
            </tr>  
            <tr>
                <td>  
                <a   href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                        <div style="margin: 0 30px;"> <span class="table_text">&emsp;&emsp;&emsp;Прооцентная ставка</span><span class="table_text2 text-right"> от '.$item["percent"].'%&emsp;&emsp;&emsp;</span>  </div>  
                        <br>
                        <div style="margin: 0 30px;"><span class="table_text text-left">&emsp;&emsp;&emsp;Максимальная сумма</span><span class="table_text2 text-right"> '.$item["amount"].' рублей&emsp;&emsp;&emsp;</span></div> 
                        <br>
                        <div style="margin: 0 30px;"><span class="table_text text-left">&emsp;&emsp;&emsp;Максимальный срок</span><span class="table_text2 text-right"> '.$item["period"].' дней&emsp;&emsp;&emsp;</span></div> 
                        </a>
                </td>
            </tr>
            <tr>
            <td><a style="color: #000000" href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"   target="_blank"><button class="ex-main-btn ">Получить деньги</button></a></td>
            </tr>';
        }
            ?>
                </table>
            </div>
        </div>
    </div>
    <?php include "googleadservices.php"; ?>
    <?php include "footer.php"; ?>