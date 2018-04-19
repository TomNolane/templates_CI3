<?php 
    $my_title = "Вам автоматически одобрен займ";
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
    $pixel = $this->pixel->stat('dengomir.ru');
?>
<div class="container ex-offers">
    <h1>Вам доступен займ в следующих организациях:</h1>
    <div id="default">
        <div id="kayan_arka"></div>
        <?php 

                function plural_type($n) { 
                    return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
                } 
                
                $_plural_years = array('год', 'года', 'лет');
                $_plural_months = array('месяц', 'месяца', 'месяцев');
                $_plural_days = array('день', 'дня', 'дней');
                $_plural_times = array('раз', 'раза', 'раз');

                foreach($data as $item)
                {
                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                    $item['link'] = str_replace("#site", $domen, $item['link']); 

                    echo '
    <div class="ex-offers-block">
        <table>
            <tbody>
            <tr>
                <td data-label="">
                    <div>
                        <p class="text-right">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                            <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                        </a> 
                    </div>
                </td>
                <td data-label="">
                    <div>Сумма займа<p>до '.number_format($item['amount'],0,'',' ').' рублей</p></div>
                </td>
                <td data-label="">
                    <div>Cрок займа <p>до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</p></div>
                </td>
                <td data-label="">
                    <div>Основная ставка <p>'.$item['percent'].'%</p></div>
                </td>
                <td data-label="">
                    <div>
                        <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn">Получить деньги</button></a> 
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>'; 
}
?>
</div></div> 
<?php require 'footer.php'; ?>