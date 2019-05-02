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
    $pixel = $this->pixel->stat('creditmir.ru');
?>
<main class="ex-offers">
    <div class="container">
        <h2 class="text-center">Вам автоматически одобрен займ в следующих организациях:</h2>
    </div>
    <div class="ex-offers-content">
        <div class="container">
            <div class="row"> 
                <?php 

$arr = array(
    array(
        "title" => "Восточный банк",
        "img" => "vostok",
        "text" => "Займы онлайн в Казахстане от Moneyman",
        "link" => "https://pxl.leads.su/click/9378aba906bf4277515ab5d44129614b?aff_sub1=Creditmir.ru",
        "amount" => "15000000",
        "period" => "240 месяцев",
        "percent" => "12"
      ),
      array(
        "title" => "HomeCredit",
        "img" => "homecredit",
        "text" => "Займы онлайн в Казахстане от Zing",
        "link" => "https://pxl.leads.su/click/dfada6d45da681d147f0f2db37fa1d64?aff_sub1=Creditmir.ru",
        "amount" => "1000000",
        "period" => "84 месяцев",
        "percent" => "12.5"
      ),
      array(
        "title" => "Ренессан Кредит",
        "img" => "renesans",
        "text" => "Займы онлайн в Казахстане от Займер",
        "link" => "https://pxl.leads.su/click/638682c4693fe5fffbab8efdd12a5b0a?aff_sub1=Creditmir.ru",
        "amount" => "700000",
        "period" => "60 месяцев",
        "percent" => "11.9"
      ),
      array(
        "title" => "Бинбанк",
        "img" => "binbank",
        "text" => "Займы онлайн в Казахстане от ccloan",
        "link" => "https://pxl.leads.su/click/c9df9a4b4ff29514be4673121deb791e?aff_sub1=Creditmir.ru",
        "amount" => "2000000",
        "period" => "84 месяцев",
        "percent" => "11.99"
      )
);

                function plural_type($n) { 
                    return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
                } 
                
                $_plural_years = array('год', 'года', 'лет');
                $_plural_months = array('месяц', 'месяца', 'месяцев');
                $_plural_days = array('день', 'дня', 'дней');
                $_plural_times = array('раз', 'раза', 'раз');

                foreach($arr as $item)
                {
                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                    $item['link'] = str_replace("#site", $domen, $item['link']);

                    echo '<div class="col-md-3">
                    <div class="ex-off-block">
                        <p class="text-right">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <figure>
                            <div class="ex-img-offerta">
                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                <img class="lk-img '.$item['img'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                            </a> 
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>Сумма займа</td>
                                    <td>до '.number_format($item['amount'],0,'',' ').' &#8381;</td>
                                </tr>
                                <tr>
                                    <td>Срок займа</td>
                                    <td>до '.$item['period'].'</td>
                                </tr>
                                <tr>
                                    <td>Основная ставка</td>
                                    <td>'.$item['percent'].'%</td>
                                </tr>
                                </tbody>
                            </table>
                        </figure>
                        <div class="ex-offers-foot">
                            <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button class="ex-btn-blue">Получить деньги</button></a>
                        </div>
                    </div>
                </div>';
                }
                ?> 
            </div>
        </div>
    </div>
</main>
<div class="ex-adds hidden"></div>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script>
/* <![CDATA[ */
var google_conversion_id = 821541407;
var google_conversion_label = "QUHCCK77r3wQn_TehwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/821541407/?label=QUHCCK77r3wQn_TehwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>