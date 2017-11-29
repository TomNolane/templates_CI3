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
$pixel = $this->pixel->stat('dengimo.ru');
?> 
     <div class="container new_style">
        <div class="row">
            
        <?php
            echo'
                <h1 class="title">Вам автоматически одобрен займ в следующих организациях:</h1>
            ';
        ?>
            
            <?php if(isset($data)){ ?>
                <?php foreach($data as $item){ ?>
                    <?php 
                        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                        $item['link'] = str_replace("#site", $domen, $item['link']);
			echo ' 
                        <div class="col-sm-6 col-md-6 tab">
                            <div class="tab_wrapper">
                                <div class="tab_1 text-center">
                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">
                                        <img src="/templates/common/img/offers/'.$item['img']. '.png" alt="'. $item['title'].'">
                                    </a>
                                    <div class="percent hidden-sm hidden-xs">'.$item["prob"].'% </div>
                                </div>
                                <div class="take_money">
                                    <a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank">Забрать деньги</a>
                                </div>
                            </div>
                        </div>';
                    ?>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="row hidden-sm hidden-xs">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <ul class="foot_card list-inline row">
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                    <li class="col-md-2 col-sm-6 for_soc"><a href="#"> </a></li>
                </ul>
            </div>
        </div>         
     </div>
    <!-- Modal -->
    <div class="modal fade" id="ki" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                            <div class="modal-header text-center">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h1 class="modal-title" id="feedbackModalLabel"></h1>
                                    <p>Узнайте свой кредитный рейтинг, чтобы подобрать персональное кредитное предложение</p>
                            </div>
                            <div class="modal-body text-center">
                                    <div class="row">
                                            <div class="col-md-12">
                                                <img src="/templates/dengimo/img/lk/ki.jpg" alt="ki.jpg">                                             
                                                    <div class="col-md-6 text-right">
                                                        <button class="btn btn-default btn-sm btn-ki" data-dismiss="modal">Позже</button>
                                                    </div>
                                                    <div class="col-md-6 text-left">
                                                        <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/button-widget?account=41001645246811&quickpay=small&any-card-payment-type=on&button-text=02&button-size=l&button-color=white&targets=%D0%9A%D1%80%D0%B5%D0%B4%D0%B8%D1%82%D0%BD%D0%B0%D1%8F+%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F&default-sum=299&successURL=https%3A%2F%2Fdengimo.ru%2Fki%2Fpay%2F<?=$_COOKIE['id']?>&label=<?=$_COOKIE['id']?>" width="300" height="72"></iframe>                                                    
                                                    </div>
                                                    <div class="text-ki text-left">
                                                        <p style="color: green;">Внимание!</p>
                                                        <p>Стоимость услуги 299 рублей (199 руб. если вы нас порекомендовали) Передача полученных конфеденциальных данных держателя карты (реквизиты, регистрационные данные, и т.д.) осуществляется по закрытым сетям данных, сертифицированным международными стандартами банковской безопасности PCI DSS 1 уровня.</p>
                                                        <p>Безопасность платежей осуществляется с помощью банка экваера функционирующего на основе современных протоколов и технологий, разработанных международными платежными системами VISA International и Mastercard International (3D Secure USAF) Безопасность передаваемой информации обеспечивается с помощью современных протоколов безопасности в Интернет (SSL/TLS)</p>  
                                                    </div>
                                                <img src="/templates/dengimo/img/zaim/1.png" alt="1.png">   
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
    </div>
<?php 
?>  
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103;(&#1041;&#1077;&#1079;  
&#1044;&#1054;&#1048;) Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 854183902;
var google_conversion_label = "J3xWCOHSrHgQ3p-nlwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/854183902/?label=J3xWCOHSrHgQ3p-nlwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript> 
<?php require 'footer.php'; ?>