<?php 
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
$pixel = $this->pixel->stat('zaimcoin.ru');
?>
<div class="container ex-spasibo">
            <h1>Вам автоматически одобрен займ<br>
                в следующих организациях:</h1>
            <table class="hidden-xs hidden-sm">
                <thead><tr>
                <th scope="col">МФО</th>
                <th scope="col">Процентная ставка</th>
                <th scope="col">Максимальный срок</th>
                <th scope="col">Максимальная сумма</th>
                <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                <?php 
                    foreach($data as $item)
                    {
                        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                        $item['link'] = str_replace("#site", $domen, $item['link']);

                    echo '<tr>
                                <td data-label="МФО"><div><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><img class="img-responsive  lk-img '.$item['title'].'" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'""></a></div></td>
                                <td data-label="Процентная ставка"><div>от '.$item['percent'].'%</div></td>
                                <td data-label="Максимальный срок"><div> до '.$item['period'].' дней </div></td>
                                <td data-label="Максимальная сумма"><div>'.number_format($item['amount'],0,'',' ').' рублей</div></td>
                                <td data-label=""><div>
                                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="ex-orange-btn" target="_blank">Получить деньги</a>
                                </div></td>
                            </tr>';  
                    }
                ?>
                </tbody>
            </table>
            <table class="hidden-md hidden-lg">
                <!-- <thead><tr>
                <th scope="col">МФО</th>
                <th scope="col">Процентная ставка</th>
                <th scope="col">Максимальный срок</th>
                <th scope="col">Максимальная сумма</th>
                <th scope="col"></th>
                </tr>
                </thead> -->
                <tbody>

                <?php 
                    foreach($data as $item)
                    {
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
                                            <div style="margin: 0 30px;"> <span class="table_text">&emsp;&emsp;&emsp;Прооцентная ставка</span><span class="table_text2 text-right"> от '.$item["percent"].'%&emsp;&emsp;&emsp;</span>  </div>  
                                            <br>
                                            <div style="margin: 0 30px;"><span class="table_text text-left">&emsp;&emsp;&emsp;Максимальная сумма</span><span class="table_text2 text-right"> '.$item["amount"].' рублей&emsp;&emsp;&emsp;</span></div> 
                                            <br>
                                            <div style="margin: 0 30px;"><span class="table_text text-left">&emsp;&emsp;&emsp;Максимальный срок</span><span class="table_text2 text-right"> '.$item["period"].' дней&emsp;&emsp;&emsp;</span></div> 
                                    </td>
                                </tr>
                                <tr>
                                <td><a style="color: #000000" href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"   target="_blank"><button class="ex-orange-btn">Получить деньги</button></a></td>
                                </tr>';}
                ?>
                </tbody>
            </table>
</div>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 827428872;
var google_conversion_label = "xmjJCLrypHkQiKDGigM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/827428872/?label=xmjJCLrypHkQiKDGigM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>