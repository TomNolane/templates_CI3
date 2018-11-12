<?php 
$site = 'vkredito';
require 'header.php'; ?>
<main>
    <div class="ex-offers-section">
        <div class="container">
            <p class="text-center hidden-xs">РЕКОМЕНДУЕМ ЗАПОЛНИТЬ МАКСИМАЛЬНОЕ КОЛИЧЕСТВО ЗАЯВОК,<br>ТЕМ САМЫМ ВЫ УВЕЛИЧИТЕ СВОИ ШАНСЫ НА ПОЛУЧЕНИЕ КРЕДИТА ДО 100%</p>


<?php
    $my_title = "Вам автоматически одобрен займ";
     

    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all(6, 0);
    
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
?> 
<style>
ins, .adsbygoogle{
	text-align: center !important;
    max-height: none !important;
    height: none !important;
}
.gold {
    background-color: gold;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.green {
    background-color: green;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
}
.yellow {
    background-color: yellow;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.blue {
    background-color: blue;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
} 
.empty {
    background-color: transparent;
    border-radius: 15px;
    color: #fff !important;
    padding: 10px;
    
}
figure.hh1 {
    border: 0 solid #FFDD2D;
	border: none !important;
}
tr>td:first-child {
    font-size: 16px;
}
@media (max-width: 450px) {
    <?php if ( $site == 'dengomir' ) { ?>
    table {
        height: 0;
    }
    <?php } ?>
    .font08 {
        font-size: .8em;
    }
	.wordwrap{
		font-size: 0.9em;
	}
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 4px;
    }
    figure.hh1 {
        padding-left: 0;
        padding-right: 0;
        padding-top: 10px;
        padding-bottom: 0px;
    }
    .ex-main-btn {
        font-size: .9em;
        margin-top: 0;
    }
    tr>td:first-child {
        font-size: 12px;
    }
    .col-xs-6 {
        padding-right: 5px !important;
        padding-left: 5px !important;
    }
    .gold, .empty, .blue, .yellow, .green {
        font-size: 11px !important;
    }
}
</style> 
 
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');
        $temp = 0;
        echo '<div class="row"><div class="col-md-10 col-xs-12 col-md-offset-1">';

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
 
			if(strpos($item['link'], "aff_sub1=") == true)
            {
                $item['link'] = str_replace( "aff_sub1=#site1", $domen, $item['link']);
                $item['link'] = str_replace( "aff_sub1=#site", $domen, $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
            else if (strpos($item['link'], "aff_sub=") == true)
            {
                $item['link'] = str_replace( "aff_sub=bzaim5.ru", "aff_sub=".$domen, $item['link']);
                $item['link'] = str_replace( "aff_sub2=#site", "", $item['link']);
                $item['link'] = str_replace( "aff_sub2=#site1", "", $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
            else if (strpos($item['link'], "promo=") == true)
            {
                $item['link'] = str_replace( "utm_source=bzaim5", "utm_source=".$domen, $item['link']);

                if(trim($this->input->get('utm_source', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub2='.$domen;

                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub3='.$domen;

                if(trim($this->input->get('utm_term', TRUE)) != false)
                    $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                else
                    $item['link'] = $item['link'].'&aff_sub4='.$domen;
            }
             
            $temp++;  

            // if($temp==4)
            // {
            //     echo '</div></div><div class="row"><div class="col-md-10 col-md-offset-1">';
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
            // }

            $words = array (
                '<span class="empty"> </span>',
                '<span class="green">Выгодно сегодня</span>',
                '<span class="gold">Лучшее предложение дня</span>',
                '<span class="yellow">Предложение месяца</span>',
                '<span class="blue">Одобрение 96,5%</span>',
                '<span class="empty"> </span>'
            );

            echo '<div class="col-md-4 col-xs-6" >
                <figure class="text-center hh1">
                    <div class="ex-wrapper"><br><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                    <img class="lk-img img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                </a></div> 
                    <table class="table">
                        <tbody>
                        <tr class="font08">
                            <td class="wordwrap">Сумма:</td>
                            <td class="wordwrap">до '.number_format($item['amount'],0,'',' ').' <i class="fa fa-rub"></i></td>
                        </tr>
                        <tr class="font08">
                            <td class="wordwrap">Основная<br class="visible-xs"> ставка</td>
                            <td class="wordwrap">'.$item['percent'].' <i class="fa fa-percent"></i></td>
                        </tr>
                        <tr class="font08">
                            <td>Возраст</td>
                            <td class="wordwrap">от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn">Получить <br class="visible-xs">деньги</button></a>
                </figure><br>
                </div>'; 
            
        }
        echo '</div>';
        echo '<div class="row"><div class="col-md-10 col-xs-12 col-md-offset-1">';
        echo '</div></div>'; 
            ?> 
</div>
<br><br>








            <!-- <div class="row"> -->
                <?php
                $arr = array(
                    'zaymer' => array(
                        'min' => '30000',
                        'max' => '30000',
                        'procent' => '0.63',
                        'time' => '30',
                        'name' => 'zaymer',
                        'url' => 'https://pxl.leads.su/click/762f05fbbdde479f81315e58b8557785?source=Vkredito',
                        'name2' => 'Займер'
                    ),
                    'smartcredit' => array(
                        'min' => '14000',
                        'max' => '14000',
                        'procent' => '1.9',
                        'time' => '30',
                        'name' => 'smartcredit',
                        'url' => 'https://pxl.leads.su/click/c6f98e0767dada106b7c4e955d40d5ea?source=Vkredito',
                        'name2' => 'Смарткредит'
                    ),
                    'webbankir' => array(
                        'min' => '15000',
                        'max' => '15000',
                        'procent' => '1.2',
                        'time' => '30',
                        'name' => 'webbankir',
                        'url' => 'https://pxl.leads.su/click/72c0cb6b29fa68ebdaa08ecc50e1cbfa?source=Vkredito',
                        'name2' => 'Веббанкир'
                    ),
                    'joymoney' => array(
                        'min' => '8000',
                        'max' => '8000',
                        'procent' => '2.17',
                        'time' => '30',
                        'name' => 'joymoney',
                        'url' => 'https://pxl.leads.su/click/2331e12449263348acdcf12ec640c0cd?source=Vkredito',
                        'name2' => 'Joymoney'
                    ),
                    'ekapusta' => array(
                        'min' => '30000',
                        'max' => '30000',
                        'procent' => '0',
                        'time' => '30',
                        'name' => 'ekapusta',
                        'url' => 'https://pxl.leads.su/click/275eb3748505c14ffaa39c3c88a25c0f?source=Vkredito',
                        'name2' => 'Екапуста'
                    ),
                    'konga' => array(
                        'min' => '20000',
                        'max' => '20000',
                        'procent' => '1.8',
                        'time' => '30',
                        'name' => 'konga',
                        'url' => 'https://pxl.leads.su/click/a58b70a771d2e0b44716aaf4fe8c4946?source=Vkredito',
                        'name2' => 'Konga'
                    ),
                    'lime' => array(
                        'min' => '30000',
                        'max' => '30000',
                        'procent' => '0.48',
                        'time' => '30',
                        'name' => 'lime',
                        'url' => 'https://lime-finance.go2affise.com/click?pid=2&offer_id=1&sub1=Vkredito',
                        'name2' => 'Lime'
                    ),
                    'viva' => array(
                        'min' => '15000',
                        'max' => '15000',
                        'procent' => '0.6',
                        'time' => '30',
                        'name' => 'viva',
                        'url' => 'https://gl.guruleads.ru/click/40/38?sub1=Vkredito',
                        'name2' => 'Viva'
                    )
					//,
                    // 'ezaem' => [
                    //     'min' => '15000',
                    //     'max' => '15000',
                    //     'procent' => '0',
                    //     'time' => '30',
                    //     'name' => 'ezaem',
                    //     'url' => 'https://pxl.leads.su/click/88d3fd35f25eb24722b44e141c5a5725?source=Vkredito',
                    // ]
                );

                // foreach ($arr as $offer)
                // {
                //     echo '<div class="col-md-3">
                //         <div class="ex-offers-block ex-orange-border">
                //             <div class="ex-off-img">
                //                 <img src="/templates/vkredito/assets/img/offers/'.$offer['name'].'.png" alt="1.png">
                //             </div>
                //             <div class="ex-off-body">
                //                 <figure>
                //                     ЛУЧШЕЕ ПРЕДЛОЖЕНИЕ
                //                 </figure>
                //                 <ul class="ex-off-content">
                //                     <li>
                //                         <i class="money-bag"></i>до '.$offer['max'].' руб.</li>
                //                     <li>
                //                         <i class="percent "></i>от '.$offer['procent'].' % в день</li>

                //                     <li>
                //                         <i class="money"></i>около '.$offer['time'].' минут</li>
                //                 </ul>
                //                 <div class="ex-action">
                //                     <a href="'.$offer['url'].'" target="_blank" onclick="markTarget(\'pixel_result\', \''.$offer['name2'].'\', \''.$pixel.'\')">
                //                         <input type="button" class="ex-main-btn" value="Получить деньги">
                //                     </a>
                //                 </div>
                //             </div>
                //         </div>
                //     </div>';
                // }
                ?> 
            <!-- </div>  -->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- vkredito -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-4970738258373085"
                data-ad-slot="9129421079"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
</main>
<div class="ex-article">
    <div class="container">
        <h2>Общие условия и требования к заемщику</h2>
        <div class="ex-art-block">
            <h3>Требования к заемщику:</h3>
            <p>Возраст от 18 до 75 лет; Постоянная прописка в любом регионе РФ; Любая кредитная история</p>
        </div>
        <div class="ex-art-block">
            <h3>Условия получения:</h3>
            <p>Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения; Процентная ставка по
                займам от 30 до 360% годовых, по потребительским кредитам и кредитным картам - от 17 до 31% годовых.
                В случае нарушения сроков, размер неустойки составляет 0,10% от суммы просрочки в день, но не более 10%
                от суммы кредита; В случае длительной задержки выплаты информация будет передана в БКИ</p>
        </div>
        <div class="ex-art-block">
            <h3>Последствия невыплаты заёмных средств:</h3>
            <p>В случае невозвращения в условленный срок суммы кредита или суммы процентов за пользование заёмными средствами
                кредитор вынуждено начислит штраф за просрочку платежа. Большинство кредиторов идут на уступки и дают
                3 дополнительных рабочих дня для оплаты. Они предусмотрены на случай, к примеру, если банковский перевод
                занял больше времени, чем обычно. Однако, в случае неполучения от Вас какой-либо реакции в течение продолжительного
                времени, будет начислен штраф за просрочку срока погашения размером в среднем 0,10% от первоначальной
                суммы для займов, 0,03% от суммы задолженности в среднем для потребительских кредитов и кредитных карт.</p>
            <p>При несоблюдении Вами условий по погашению кредитов и займов, данные о Вас могут быть переданы в реестр должников,
                а задолженность - коллекторскому агентству для взыскания долга. О всех приближающихся сроках платежа
                кредитор своевременно информирует Вас по СМС или электронной почте. Рекомендуем Вам вносить платеж в
                день получения данных напоминаний. Погашая задолженность в срок, Вы формируете хорошую кредитную историю,
                что повышает Ваши шансы в дальнейшем получить кредит на более выгодных условиях. Предложение не является
                оффертой. Конечные условия уточняйте при прямом общении с кредиторами.</p>
        </div>
        <div class="ex-art-block">
            <h3>Информация о полной стоимости займа и пример расчета</h3>
            <p>Займ в размере 10 000 рублей выдан на 61 дней с пролонгацией. В году 365 дней, по договору ставка составляет
                1% в день (годовая ставка, соответственно будет равна 365%). Сумма процентов за год составляет 36 500
                руб. (10 000*365% = 36 500), за 1 день 100 руб. (36 500/365 = 100), за 61 дней соответственно 6 100 руб.
                (100*61 = 6100). Общая сумма платежа составляет 16 100 руб. (10 000 руб. основной долг + 6 100 руб. проценты).</p>
        </div>
        <div class="ex-art-block">
            <h3>ПСК (полная стоимость кредита) в процентах составляет 365% годовых.</h3>
        </div>
    </div>
</div>
<div class="ex-card">
    <div class="container"> 
        <h2>Информация о кредиторах, представленных на сайте.</h2>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="ex-card-block ex-green-border">
                    <h4>СМСФИНАНС (ООО МФО «СМСФИНАНС»)</h4>
                    <p>
                        Поддержка: 8 (800) 333-27-57, № лицензии 2120177002022
                        <br> Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13
                        <br> Максимальная годовая процентная ставка: 328,5%
                        <br> Срок с продлением: от 65 дней
                        <br> Максимальный срок займа неограничен*
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ex-card-block ex-green-border">
                    <h4>VIVUS (ЗАО «4ФИНАНС»)</h4>
                    <p>
                        Поддержка: 8 (499) 649-39-46, № лицензии 1127746537764
                        <br> Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13
                        <br> Максимальная годовая процентная ставка: 328,5%
                        <br> Срок с продлением: от 65 дней
                        <br> Максимальный срок займа неограничен*
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ex-card-block ex-green-border">
                    <h4>СРОЧНО ДЕНЬГИ (ООО «СРОЧНОДЕНЬГИ»)</h4>
                    <p>
                        Поддержка: 8 (800) 100-13-63, № лицензии 2110552000304
                        <br> Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж
                        <br> Максимальная годовая процентная ставка: 730%
                        <br> Срок с продлением: от 90 дней
                        <br> Максимальный срок займа неограничен*
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ex-card-block ex-green-border">
                    <h4>GREENMONEY (ООО МФО «ГРИНМАНИ»)</h4>
                    <p>
                        Поддержка: 8 (800) 775-78-80, № лицензии 2120742002054
                        <br> Адрес: 650000, г. Кемерово, улица Орджоникидзе, 5-28
                        <br> Максимальная годовая процентная ставка: 730%
                        <br> Срок с продлением: от 65 дней
                        <br> Максимальный срок займа неограничен*
                    </p>
                </div>
            </div> 
        </div> 
    </div>
</div>
<!-- Yandex.RTB R-A-249178-1 mobile -->
<div id="yandex_rtb_R-A-249178-1"></div>
<!-- Yandex.RTB R-A-249178-2 desktop -->
<div id="yandex_rtb_R-A-249178-2"></div>
<div id="ex-up-button"></div>
<?php require 'footer.php';  ?>