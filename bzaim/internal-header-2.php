<? if ($this->uri->segment(1) == 'offerwall') : ?>
    <style>
    .hh5 {
        letter-spacing: 0.08em;
        font-size: 140% !important;
    }
    </style>
    <h2 class="text-center hh hh5 grey" style="font-size: 18px;line-height:initial">На нашем сайте вы можете найти нужную информацию о займах, которые можно получить в России.<br>Все публикуемые на сайте организации имеют лицензии и внесены в реестр кредитных организаций.</h2>
<? elseif ($this->uri->segment(1) == 'lk') : ?>
    <h2 class="text-center hh hh5 grey" style="font-size: 19px;">Для 100% вероятности получения денег заполните заявку в трех компаниях.</h2>
<? endif; ?>