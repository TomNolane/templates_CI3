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
    $pixel = $this->pixel->stat('fanzaim.ru');
?>
<main class="ex-approved">
    <div class="container">
        <h2 class="text-center">Вам автоматически одобрен займ в следующих организациях:</h2>
        <?php
                foreach($data as $item)
                {
                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                    $item['link'] = str_replace("#site", $domen, $item['link']);

                    echo '<div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="ex-wrapper wrapper_spec">
                            <div class="row ex-main-info">
                                <div class="col-md-6">
                                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                            <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                                        </a>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tr>
                                            <td>Процентная ставка</td>
                                            <td>от '.$item['percent'].'%</td>
                                        </tr>
                                        <tr>
                                            <td>Максимальный срок</td>
                                            <td>'.$item['period'].' дней</td>
                                        </tr>
                                        <tr>
                                            <td>Максимльная сумма</td>
                                            <td>'.number_format($item['amount'],0,'',' ').' рублей</td>
                                        </tr>
                                    </table>
                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn btn_spec">Получить деньги</button></a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div> ';
                }
            ?>
    </div>
</main>
<?php require 'footer.php'; ?>