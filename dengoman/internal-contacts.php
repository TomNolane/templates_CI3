<?php 
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
$pixel = $this->pixel->stat('dengoman.ru');
?>
<div class="contacts">
  <strong>
    Сервис моментальных займов Dengoman
    <br>
    <span>
      Россия, Новосибирская область
      <br> г. Новосибирск, ул. Маршала Покрышкина, 12, оф 201
    </span>
  </strong>
  <br><br><br>
  <div class="row">
  <div class="col-md-4 text-center">
	<div class="contacts-item"> 
	  <div class="contacts-head"><img src="/templates/dengoman/img/offers/zaymer1.png"></div>
	  <div class="contacts-body">
		<span>ЗАЙМЕР</span><br>
    ООО «Займер»<br>
    Поддержка: 8 (800) 000-00-00, № лицензии 651303532004088<br>
    Адрес:г. Кемерово,<br>
    пр. Советский, д. 2/7<br>
    Годовая процентная ставка: 248,2% 
	  </div>
	</div>
  </div>
  <div class="col-md-4 text-center">
	<div class="contacts-item">
	  <div class="contacts-head"><img src="/templates/dengoman/img/offers/turbozaim.png"></div>
	  <div class="contacts-body">
		<span>ТУРБОЗАЙМ</span><br>
    ООО «Турбозайм»<br>
    Поддержка: 8 (800) 000-00-00, № лицензии 651303045003951<br>
    Адрес: 129110, г. Москва, ул. Гиляровского, д. 65, стр.1<br>
    Годовая процентная ставка: 803%
	  </div>
	</div>
  </div>
  <div class="col-md-4 text-center">
	<div class="contacts-item">
	  <div class="contacts-head"><img src="/templates/dengoman/img/offers/migcredit.png"></div>
	  <div class="contacts-body">
		<span>МИГ КРЕДИТ</span><br>
ООО «МигКредит»<br>
Поддержка: 8 (800) 000-00-00, № лицензии 2110177000037<br>
Адрес: 127018, г. Москва, Сущевский Вал, д. 5, стр. 3<br>
Годовая процентная ставка: 211,7%
	  </div>
	</div>
  </div>
</div>
<div class="row">
  <div class="col-md-4 text-center">
	<div class="contacts-item">
	  <div class="contacts-head"><img src="/templates/dengoman/img/offers/greenmoney.png"></div>
	  <div class="contacts-body">
		<span>GREENMONEY</span><br>
ООО МФО «ГРИНМАНИ»<br>
Поддержка: 8 (800) 000-00-00, № лицензии 2120742002054<br>
Адрес: 650000, Кемеровская область, город Кемерово, улица Орджоникидзе, 5-28<br>
Годовая процентная ставка: 730%
	  </div>
	</div>
  </div>
  <div class="col-md-4 text-center">
	<div class="contacts-item">
	  <div class="contacts-head"><img src="/templates/dengoman/img/offers/bistrodengi.png"></div>
	  <div class="contacts-body">
		<span>БЫСТРОДЕНЬГИ</span><br>
ООО «Магазин Малого Кредитования»<br>
Поддержка: 8 (800) 000-00-00, № лицензии 2110573000002<br>
Адрес: 107996, г. Москва, ул. Гиляровского, д. 65, стр. 1<br>
Годовая процентная ставка: 730%
	  </div>
	</div>
  </div>
  <div class="col-md-4 text-center">
	<div class="contacts-item">
	  <div class="contacts-head"><img src="/templates/dengoman/img/offers/denga.png"></div>
	  <div class="contacts-body">
		<span>ДЕНЬГА</span><br>
ООО «УК Деньга»<br>
Поддержка: 8 (800) 000-00-00, № лицензии 1137847367382<br>
Адрес: 199178, Санкт-Петербург, 15-я линия В. О., д. 12, литер. А, комн. 24<br>
Годовая процентная ставка: 547,5%
	  </div>
	</div>
  </div>
</div>
</div>
<div class="row hidden-xs">
  <div class="col-sm-6">
    <img class="img-responsive" src="/templates/dengoman/img/lk/1.png" alt="1.png">
    <h4>Первый заём</h4>
    <p class="special_contact">до 10 000 рублей выдается по ставке 0% в случае своевременного погашения</p>
  </div>
  <div class="col-sm-6">
    <img class="img-responsive" src="/templates/dengoman/img/lk/3.png" alt="3.png">
    <h4>Процентная ставка за день</h4>
    <p class="special_contact">Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%</p>
  </div>
</div>
<div class="row hidden-xs">
  <div class="col-sm-6">
    <img class="img-responsive" src="/templates/dengoman/img/lk/2.png" alt="2.png">
    <h4>На территории всей России</h4>
    <p class="special_contact">Займ можно оформить, находясь в любой точке России</p>
  </div>
  <div class="col-sm-6">
    <img class="img-responsive" src="/templates/dengoman/img/lk/4.png" alt="4.png">
    <h4>Различные варианты получения займов</h4>
    <p class="special_contact">На карту VISA, MAESTRO, QIWI кошелёк, Яндекс.Деньги, через систему CONTACT, банковский счёт</p>
  </div>
</div>