<div><style scoped>
<?php 
require 'templates/common/new/css/lk2.php';
require 'templates/common/new/css/pixell_desktop.css'; 
?>
</style></div>
<div class="row container3"><div class="col-md-12">
<?php if (!file_exists(realpath(__DIR__ . '/..').'/common/new/special-header-1.php')) : ?>
<h2 class="text-center hh hh4"> Для вас подобраны организации для <span class="gold_font">получения займа или кредита</span> в России:</h2>
<?php else : require(realpath(__DIR__ . '/..').'/common/new/special-header-1.php'); endif; ?>
<?php if (!file_exists(realpath(__DIR__ . '/..').'/common/new/special-header-2.php')) : ?>
<h2 class="text-center hh hh4 grey" style="font-size: 18px;line-height:initial">На нашем сайте вы можете найти нужную информацию о кредитах и займах, которые можно получить в России. <br>Все публикуемые на сайте организации имеют лицензии и внесены в реестр кредитных организаций.</h2>
<?php else : require(realpath(__DIR__ . '/..').'/common/new/special-header-2.php'); endif; ?>
    <br>
    <div class="row" id="for_google">
    
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');
        
        echo '<div class="row"><div class="col-md-12 col-xs-12">';

        foreach($data as $item)
        {
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);

            if (strpos($item['link'], 'guruleads'))
                $item['link'] = $item['link'].'?sub1=Pixel';
            else if(strpos($item['link'], 'kviku'))
                $item['link'] = $item['link'].'';
            else if(strpos($item['link'], 'g24.me'))
                $item['link'] = $item['link'].'?subid=Pixel';
            else if(strpos($item['link'], 'tech'))
                $item['link'] = $item['link'].'&sub1=Pixel';
            else if(strpos($item['link'], 'leadgid'))
                $item['link'] = $item['link'].'?source=Pixel';
            else if(strpos($item['link'], 'leadbrothers'))
                $item['link'] = $item['link'].'?s1=Pixel';
            else
                $item['link'] = $item['link'].'?source=Pixel';

                $sum = number_format($item['amount'],0,'',' ');
                $im = $item['img'];
                $percent = $item['percent'];
                $href= $item['link'];
                $onclick = '"markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"';
                $over_sum = number_format( $item['amount'] * ( $item['percent'] + 100) / 100 ,0,'',' ');
                $over_per_day = number_format( $item['amount'] * $item['percent'] / 100 ,0,'',' ');

                $words = array (
                    '<span></span>',
                    '<span class="bem_offer__note red2">Одобрение 100% сегодня</span>',
                  '<span class="bem_offer__note darkred2">Круглосуточная выдача</span>',
                    '<span class="bem_offer__note orange2">Займы без отказов</span>',
                    '<span class="bem_offer__note green2">Без документов</span>',
                    '<span class="bem_offer__note darkred2">Одобряют каждому</span>',
                    '<span class="bem_offer__note orange2">С плохой кредитной историей</span>',
                    '<span></span>'
                );
                $rand_word = $words[rand(0,7)];
                
                echo <<<END
                <div class="bem_offers__wrapper">
                <a href="$href" onclick=$onclick class="bem_offer" target="_blank" >$rand_word<div class="bem_offer__image"><img src="/templates/common/img/offers/$im.png" alt=""></div><div class="bem_offer__info"><div class="bem_offer__info-wrapper"><div class="bem_param bem_param_type_summ"><div class="top-text">
                Заем
                </div><div class="bottom-text">
                $sum <i class="fa fa-rub"></i></div></div><div class="bem_offer__next-arrow"></div><div class="bem_param bem_param_type_percent"><div class="top-text">
                Процент
                </div><div class="bottom-text">
                от $percent% в день </div></div><div class="bem_offer__next-arrow"></div><div class="bem_param bem_param_type_commission"><div class="top-text">
                Переплата
                </div><div class="bottom-text">
                $over_per_day <i class="fa fa-rub"></i> </div></div>
                
                </div></div><div class="bem_offer__get"><div class="bem_offer__button">Получить деньги</div></div></a> </div>
END;
            } 
             
        echo '</div></div>'; 
            ?>
    </div></div>
</div>
<br><br>