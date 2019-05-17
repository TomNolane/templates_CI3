<div><style scoped>
<?php
require 'templates/common/new/css/lk2.php';
require 'templates/common/new/css/pixell_mobile.css';
?> 
</style></div>
<div class="row container3"><div class="col-md-12">
<h2 class="text-center hh hh4"> Вам предварительно <span class="gold_font">одобрен займ</span> в этих организациях:</h2>
<h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки во всех компаниях ниже</h2>
    <br>
    <div class="row" id="for_google"></div>
    
	 <div class="text-center hidden-xs" id="img_agree"><img src="/templates/common/img/stamp.png" /></div>
     
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
            
            $words = array (
                '<div class="caption empty"><span></span></div>',
                '<div class="caption red2"><span>Одобрение 100% сегодня</span></div>',
                '<div class="caption darkred2"><span>Круглосуточная выдача</span></div>',
                '<div class="caption orange2"><span>Займа без отказов</span></div>',
                '<div class="caption green2"><span>Без документов</span></div>',
                '<div class="caption pink2"><span>Одобряют каждому</span></div>',
                '<div class="caption orange2"><span>С плохой кредитной историей</span></div>',
                '<div class="caption empty"><span></span></div>'
            );

            echo '<div class="col-md-3 col-xs-6" >
            <figure class="hh3">
                '.$words[rand(0,7)].'
                <img class="lk-img2 img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                <div class="lk-text">Сумма: до '.number_format($item['amount'],0,'',' ').' <i class="fa fa-rub"></i></div>
                <div class="lk-text">Основная ставка: '.$item['percent'].' <i class="fa fa-percent"></i></div>
                <div class="lk-text">Возраст: от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></div>
                <div class="center2"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn2">Получить деньги</button></a></div>
            </figure>
            </div>';
        }
        echo '</div></div>';?>
    </div></div>

<br><br>