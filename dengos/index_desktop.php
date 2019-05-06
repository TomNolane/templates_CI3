<?php
require 'css/index_desktop_css.php'; 
require 'templates/common/new/php/modal.php'; 
?>
<div class="container3"><div class="col-md-12">
 <!-- dengos.ru adsence -->
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
google_ad_client: "ca-pub-4970738258373085",
enable_page_level_ads: true
});
</script>
<h2 class="text-center hh hh4"> Для вас подобраны организации для <span class="green_font">получения займа</span> в России:</h2>
 <h2 class="text-center hh hh4 grey" style="font-size: 18px;line-height:initial">На нашем сайте вы можете найти нужную информацию о займах, которые можно получить в России. <br>Все публикуемые на сайте организации имеют лицензии и внесены в реестр кредитных организаций.</h2>
    <br>
    <div id="for_google"></div>
    
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');

        echo '<div class="col-md-12 col-xs-12">';

        foreach($data as $item)
        {
            if (strpos($item['link'], 'guruleads'))
                $item['link'] = $item['link'].'?sub1=Prelend';
            else if(strpos($item['link'], 'kviku') || strpos($item['link'], 'tech'))
                $item['link'] = $item['link'].'';
            else if(strpos($item['link'], 'leadgid'))
                $item['link'] = $item['link'].'?source=Prelend';
            else
                $item['link'] = $item['link'].'?source=Prelend';

                $sum = number_format($item['amount'],0,'',' ');
                $im = $item['img'];
                $percent = $item['percent'];
                $href= $item['link'];
                $onclick = '"markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"';
                $over_sum = number_format( $item['amount'] * ( $item['percent'] + 100) / 100 ,0,'',' ');
                $over_per_day = number_format( $item['amount'] * $item['percent'] / 100 ,0,'',' ');

                

                $words = array (
                    '',
                    '<div class="bem_offer__note">Одобрение 100% сегодня</div>',
                    '<div class="bem_offer__note">Круглосуточная выдача</div>',
                    '<div class="bem_offer__note">Займа без отказов</div>',
                    '<div class="bem_offer__note">Без документов</div>',
                    '<div class="bem_offer__note">Одобряют каждому</div>',
                    '<div class="bem_offer__note">С плохой кредитной историей</div>',
                    ''
                );
                $rand_word = $words[rand(0,7)];
                
                echo <<<END
                <div class="col-md-6 col-xs-12 my-col">
                <div class="bem_offers__wrapper">
                    <a href="$href" onclick=$onclick class="bem_offer bo-left bobg-top" target="_blank">
                        $rand_word
                        <div class="bem_offer__image">
                            <img src="/templates/common/img/offers/$im.png" alt="$im.png">
                        </div>
                        <div class="bem_offer__button">Получить деньги</div>
                        <div class="bem_offer__info">
                            <div class="info-text-wrap">
                                <div class="info-text-up">Заем:</div>
                                <div class="info-text-down">$sum <i class="fa fa-rub"></i></div>
                            </div>
                            <div class="info-text-wrap">
                                <div class="info-text-up">Процент:</div>
                                <div class="info-text-down">от $percent% в день</div>
                            </div>
                            <div class="info-text-wrap">
                                <div class="info-text-up">Переплата:</div>
                                <div class="info-text-down">$over_per_day <i class="fa fa-rub"></i></div>
                            </div>
                        </div>
                    </a>
                </div></div>
END;
            }  
            ?>
    </div></div>
</div>
<br><br>