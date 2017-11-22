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
$pixel = $this->pixel->stat('bzaim5.ru');

?>
<header>
<div>
    <div class="container">
        <section class="form">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                <?php
                    if(isset($_GET['doi'])){
                        echo '<h1 class="title" style="text-shadow: #fff 0 0 6px;"><span class="subtitle">Ваша подписка успешно активирована <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span><br/><span id="i"></span>, Вам автоматически одобрен займ в следующих организациях:</h1>';
                    }
                    else{
                        echo'<h1 class="title" style="color: #000; text-shadow: #fff 0 0 6px;">Вам автоматически одобрен займ в следующих организациях:</h1>';
                    }
                ?>
                            <?php

                                foreach($data as $item){
                                    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                                    $item['link'] = str_replace("#site", $domen, $item['link']);                                    
                                    echo '
                                    <div class="col-md-12 offer-lk">
                                            <div class="col-md-3">
                                                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                                    <img src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'" class="offers-img">
                                                </a>                        
                                            </div>    
                                            <div class="col-md-3">
                                                <big>'.number_format($item['amount'],0,'',' ').' Р</big>
                                            </div>
                                            <div class="col-md-3 hidden-sm hidden-xs">
                                                '.$item['percent'].'% / '.$item['period'].' дней
                                            </div>
                                            <div class="col-md-3">
                                                <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" class="btn btn-success btn-lk" target="_blank">Получить деньги</a>
                                            </div>
                                    </div>
                                        
                                    ';
                                }
                            ?>
                </div>
            </div>
        </section>
    </div>
</div>
</header>

<!-- old Conversion -->
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page 
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 841045099;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "V_hTCPbu6nMQ66iFkQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/841045099/?label=V_hTCPbu6nMQ66iFkQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
-->


<!-- NEW Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103;  
(&#1073;&#1077;&#1079; &#1076;&#1086;&#1080;) Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 832752781;
var google_conversion_label = "9no7CIzpqHgQjZmLjQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/832752781/?label=9no7CIzpqHgQjZmLjQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
    //print_r ($_COOKIE);
?>
<?php require 'footer.php'; ?>