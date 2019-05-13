<?php if($this->uri->segment(1) == 'index' || $this->uri->segment(1) == '' || $this->uri->segment(1) == ' ') { ?>
<style>
@media (max-width: 768px) {
    .hhh2 {
        font-size: 17px;
    }
    .white.offers 
    {
        font-size: 9px;
    }
}
.footer-clear {
    padding-left: 0px;
    padding-right: 0px;
    margin-left: 0px !important;
    margin-right: 0px !important;
}
.footer-block {
    padding: 40px 10px 10px 10px;
    margin-bottom: 20px;
    position: relative;
    margin-left: 0px !important;
    margin-right: 0px !important;
    border-radius: 1% / 50%;
}
.bem_offer__note_footer {
    background-color: #828282;
    color: #fff;
    font-size: 26px;
    left: 25px;
    padding: 0px 13px 0px;
    position: absolute;
    top: 0px;
    transition: 0.2s;
    height: 30px;
    line-height: 30px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

.footer-header {
    color: #5b9062;
    font-weight: bold;
    font-size: 130%;
    margin-left: 10px;
}
</style>
<?php require 'adsence_all.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 footer-clear">
            <div class="footer-header">О проекте</div>
            <div class="ex-info-block bo-left footer-block">
                <p><span class="green_font"><?=$domain?></span> - это самый удобный и выгодный сервис по получению онлайн-займов. Благодаря используемым
                    принципам обработки данных нашим клиентом может стать любой гражданин России. Даже если вы пенсионер,
                    студент или у вас плохая кредитная история, не бойтесь обратиться за помощью. Мы оперативно решим
                    ваши финансовые проблемы. Вы получите займ мгновенно - буквально через 15 минут - и сможете распоряжаться
                    им по собственному усмотрению.</p>
            </div>
            <div class="footer-header">Условия получения и коммисионные сборы</div>
            <div class="ex-info-block bo-right footer-block">
                <div class="ex-condition">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row footer-clear">
                                <div class="col-xs-6">
                                    <p>
                                        <span>Процентная ставка за день</span>
                                        <span>max: 0,98% в день</span>
                                        min: 0,08% в день
                                    </p>
                                </div>
                                <div class="col-xs-6">
                                    <p>
                                        <span>Сроки выдачи и погашения</span>
                                        <span>min: 61 день,</span>
                                        max: 1 год
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row footer-clear">
                                <div class="col-xs-6">
                                    <p>
                                        Годовой процент за пользование займом (с учетом требований ФЗ №353-ФЗ) min 30%, max 360%
                                    </p>
                                </div>
                                <div class="col-xs-6">
                                    <p class="ex-no-border">
                                        Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-header">Документы и разрешительная документация</div>
            <div class="ex-info-block bo-left footer-block">
                <p>Услуги на проекте «Сервис» оказываются юридическим лицом ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001.
                    <br>
                    На основании ФЗ "О потребительском кредите (займе)" от 21.12.2013 N 353-ФЗ имеет право осуществлять профессиональную деятельность
                    по предоставлению потребительских займов.
                </p>
                <p class="ex-hidden">
                    Проект осуществляет только подбор микрозаймов для клиентов, а именно, между клиентом который желает взять займ, и кредитным
                    учреждением, а также некредитными финансовыми организациями в случаях, определенных федеральными
                    законами об их деятельности, которые занимаются выдачей займов. Проект не является финансовым учреждением,
                    банком или кредитором, и не несёт ответственности за любые заключенные договоры кредитования или
                    условия. Чтобы оформить заявку на получение займа, Вам необходимо пройти регистрацию и аутентификацию
                    на проекте.
                </p>
            </div>
            <div class="footer-header hidden-xs hidden-sm">Пример расчета онлайн займа</div>
            <div class="ex-info-block hidden-xs hidden-sm bo-right footer-block">
                <p>Если вы взяли займ на сумму 50 000 рублей на 6 месяцев с процентной ставкой 4,5% в месяц, то после истечения
                    срока займа переплата составит 13500 рублей. Получается вы возвращаете 63 500 рублей. Ниже приведены
                    расчеты начисляемых процентов для дальнейшего самостоятельного вычисления суммы возврата займа (с
                    процентом) пользователям нашего сервиса.
                </p>
                <p class="ex-hidden">
                    Сумма - 50 000 рублей, процент в месяц - 4,5%, срок займа - 6 месяца. 4,5(%) * 6(мес) = 27% за 6 месяцев(27% * 50 000руб
                    (сумма займа) )/100% = 13 500 рублей (сумма начисленных процентов) 50 000 + 13 500 = 63 500 рублей
                    - это сумма необходимых денег к возврату через 6 месяцев. В случае нарушения сроков, размер неустойки
                    составляет 0,10% от суммы просрочки в день, но не более 10% от суммы займа. В случае длительной задержки
                    выплаты информация будет передана в БКИ. Продление займа возможно при своевременном информировании
                    кредитора (до наступления даты возврата займа) и уплаты процентов за первичный срок займа. Дополнительных
                    комиссий за продление займа не предусмотрено.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 footer-clear">
            <div class="footer-header"> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Информация о кредиторах с которыми мы сотрудничаем:</div>
            <div class="ex-info-block bo-left footer-block">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="white">
                            <p>
                                ООО МФО «СМСФИНАНС» № лицензии 2120177002022 Адрес: 115201, г. Москва, ул. Котляковская, д.3, стр. 13 Годовая процентная
                                ставка: 328,5%
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="white">
                            <p>
                                ЗАО «4финанс» № лицензии 1127746537764 Адрес: 115201, г.Москва, ул. Котляковская, д. 3, стр. 13 Годовая процентная ставка:
                                328,5%
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="white">
                            <p>
                                ООО «СрочноДеньги» № лицензии 2110552000304 Адрес: Нижний Новгород, ул. Тимирязева, 15/2, БЦ «КМ-Сити», 4 этаж Годовая процентная
                                ставка: 360%
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="white">
                            <p>
                                ООО «Домашние деньги» № лицензии 211017700000 Адрес: 115088, г. Москва, 2-ой Южнопортовый проезд, д. 33, стр. 1 Годовая процентная
                                ставка: 248,2%
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="white">
                            <p>
                                ООО «Займер» № лицензии 651303532004088 Адрес:г. Кемерово, пр. Советский, д. 2/7 Годовая процентная ставка: 248,2%
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="white">
                            <p>
                                АО «Тинькофф Банк» № лицензии 2673 Адрес: г. Москва,1-й Волоколамский проезд, д. 10, стр. 1. Годовая процентная ставка: от
                                12,9%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
        <div id="rec63469085" class="r t-rec t-rec_pt_30 t-rec_pb_90" style="padding-top:30px;padding-bottom:90px;background-color:#3b3b3b; "
            data-animationappear="off" data-record-type="420" data-bg-color="#3b3b3b">
            <!-- T420 -->
            <div class="t420">
                <div class="t-container">
                    <? if (in_array($domain, array('vkredito.ru', 'vkredito.tomnolane.ru'))) : ?>
                        <img src="/templates/vkredito/assets/img/logo.png" style="margin: 0 20px;" class="t338__logo t-img">
                    <? else : ?>
                        <img src="templates/dengos/img/dengos-logo.png" style="margin: 0 20px;" class="t338__logo t-img">
                    <? endif; ?>
                    <p style="padding: 10px 10px 0 10px; color:#ffffff;font-size:15px;margin:0;">Сайт НЕ является представительством МФО или банком, не выдает займов и кредитов. Персональные данные пользователей не собираются и не хранятся. Все рекомендуемые на сайте кредитные учреждения имеют соответствующие лицензии. Условия неуплаты можно уточнить на сайте МФО.</p>
                    <p style="padding: 0 10px;"><span style="color:#ffffff;font-size:15px;"> Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 дня до 1 года. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения. Email: support@<?=$domain?>  <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001 | +7(495) 006 19 61 | Россия, Санкт-Петербург, улица Осипенко, 12</p>
                </div>
            </div>
        </div>
        <div id="rec72892849" class="r t-rec" style=" " data-animationappear="off" data-record-type="131">
            <!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">
                        <script>
                            $(function () {
                                $('a[href]').attr('href', function (index, href) {
                                    var param = "key=value";

                                    if (href.charAt(href.length - 1) === '?') //Very unlikely
                                        return href + param;
                                    else if (href.indexOf('?') > 0)
                                        return href + '&' + window.location.search.slice(1);
                                    else
                                        return href + window.location.search.slice(1);
                                });
                            })
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    <?php require 'templates/common/new/js/bootstrap.min.js'; ?>
    <?php require 'templates/common/new/js/popup_modal.js'; ?>
    </script>
    <!-- Yandex.Metrika counter -->

<script>
function markTarget(target,param, id){
    if (typeof yaCounter53492980 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter53492980.reachGoal(target);
	else yaCounter53492980.reachGoal(target,param);
}
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(53492980, "init", {
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53492980" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>