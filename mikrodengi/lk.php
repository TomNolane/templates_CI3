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
$pixel = $this->pixel->stat('mikrodengi.su');

$_plural_years = array('год', 'года', 'лет');
$_plural_months = array('месяц', 'месяца', 'месяцев');
$_plural_days = array('день', 'дня', 'дней');
$_plural_times = array('раз', 'раза', 'раз');
function plural_type($n) { 
    return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
} 
?>
<main class="ex-offerta">
    <div class="container">
        <h1 class="text-center">Воспользуйтесь уникальным предложением:</h1>
        <div class="ex-offers-content">
            <div class="row">
                <?php 
                
                $arr = array(
                    // array(
                    // "text" => "Ваша Карта \"Совесть\" одобрена! Рассрочка 0% до 12 мес! Лимит до 300 000 руб.<br><br><br>",
                    // "img" => "/templates/mikrodengi/assets/img/lk1.png",
                    // "header" => "Карта \"Совесть\"",
                    // "link" => "http://c.cpl7.ru/mybA",
                    // "btn" => "Получить карту"
                    // ),
                    array(
                        "text" =>  "Играй и выигрывай от 9856 рублей в день! Специальное предложение для Вас. 100% бонус от клуба Вулкан!<br><br>",
                        "img" => "/templates/mikrodengi/assets/img/lk2.jpg",
                        "header" => "Забери свои деньги",
                        "link" => "http://c.cpl7.ru/mA3p",
                        "btn" => "Начать выигрывать"
                    ),
                    array(
                        "text" => "Минус 10-12 кг в месяц без строгих диет и фитнеса! Gardenin FatFlex по скидке сегодня 50% специально для Вас!<br><br>",
                        "img" => "/templates/mikrodengi/assets/img/lk3.jpg",
                        "header" => "\"Gardenin FatFlex\"",
                        "link" => "http://c.twtn.ru/mzhP",
                        "btn" => "Заказать со скидкой"
                    ),
                    array(
                        "text" => "Продай свой автомобиль за считанные минуты, а главное за хорошую цену! Бонус специально для Вас! Сервис номер один в России!",
                        "img" => "/templates/mikrodengi/assets/img/lk4.jpg",
                        "header" => "\"СarPrice\"",
                        "link" => "http://c.cpl7.ru/mAq2",
                        "btn" => "Продать авто"
                    )
                );
                
                foreach($arr as $item)
                        {
                            // $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                            // $item['link'] = str_replace("#site", $domen, $item['link']); 
                            echo '<div class="col-md-4">
                            <div class="ex-off-block">
                                <p class="text-center">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <figure>
                                    <div class="ex-img-offerta">
                                    <a href="'.$item['link'].'" target="_blank">
                                        <img class="lk-img '.$item['img'].'" src="'.$item['img'].'" alt="'.$item['header'].'">
                                    </a> 
                                    </div>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="text-center" style="text-align: center"><strong >'.$item['header'].'</strong></td>
                                        </tr>
                                        <tr>
                                            <td>'.$item['text'].'</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </figure>
                                <div class="ex-offers-footer">
                                    <a href="'.$item['link'].'" target="_blank"><button class="ex-main-btn">'.$item['btn'].'</button></a> 
                                </div>
                            </div>
                        </div>';
                            // echo '<div class="col-md-3">
                            //     <div class="ex-off-block">
                            //         <p class="text-right">
                            //             <span class="fa fa-star"></span>
                            //             <span class="fa fa-star"></span>
                            //             <span class="fa fa-star"></span>
                            //             <span class="fa fa-star"></span>
                            //             <span class="fa fa-star"></span>
                            //         </p>
                            //         <figure>
                            //             <div class="ex-img-offerta">
                            //             <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                            //                 <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                            //             </a> 
                            //             </div>
                            //             <table>
                            //                 <tbody>
                            //                 <tr>
                            //                     <td>Сумма займа</td>
                            //                     <td>до '.number_format($item['amount'],0,'',' ').' рублей</td>
                            //                 </tr>
                            //                 <tr>
                            //                     <td>Срок займа</td>
                            //                     <td>до '.$item['period'].' '.$_plural_days[plural_type($item['period'])].'</td>
                            //                 </tr>
                            //                 <tr>
                            //                     <td>Основная ставка</td>
                            //                     <td>'.$item['percent'].'%</td>
                            //                 </tr>
                            //                 </tbody>
                            //             </table>
                            //         </figure>
                            //         <div class="ex-offers-footer">
                            //             <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-main-btn">Получить деньги</button></a> 
                            //         </div>
                            //     </div>
                            // </div>';
                        }
                    ?> 
            </div>
        </div>
    </div>
    <div class="buffer2"></div>
</main>
 
<?php require 'footer.php'; ?>