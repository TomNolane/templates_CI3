<div id="ya-rtb">
	<div class="visible-xs visible-sm hidden-md hidden-lg" id="yandex_rtb_R-A-247243-1"></div>
	<div class="hidden-xs hidden-sm visible-md visible-lg" id="yandex_rtb_R-A-247243-3"></div>
</div>

<?php if ($this->uri->segment(1) != 'confirm'  && $this->uri->segment(1) != 'spasibo' && $this->uri->segment(1) != 'lk' ) {
echo '<footer class="ex-start-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="ex-footer-logo">
                    <a href="#">
                        <img src="templates/dengibystra/assets/img/logo-foot.svg" alt="">
                    </a>
                </div>
                <p class="ex-text">
                    <!-- Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная
                    ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём
                    20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб.
                    Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного
                    погашения. ООО МК "Берлин" ОГРН 5167746335961, ИНН 9705080932, КПП 770501001 лицензия ЦБ №1703045008133 -->
                    Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                    <br>ИП «Бабакова К.К.»ОГРНИП 316222500122426 ИНН 222511216499
                </p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 hidden-xs hidden-sm">
                <p class="ex-list-title">Документы</p>
                <ul>
                    <li>
                        <a href="/documents">Правовые документы</a>
                    </li>
                    <li>
                        <a href="/oferta">Публичная оферта</a>
                    </li>
                    <li>
                        <a href="/contract">Пользовательское соглашение</a>
                    </li>
                    <li>
                        <a href="/agreement">Согласие на обработку данных</a>
                    </li>
                    <li>
                        <a href="/rules">Правила предоставления займов</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 hidden-xs hidden-sm">
                <p class="ex-list-title">Получение денег</p>
                <ul>
                    <li>
                        <a href="/zaim">Займ на банковскую карту</a>
                    </li>
                    <li>
                        <a href="/zaim">Займ на QIWI кошелёк</a>
                    </li>
                    <li>
                        <a href="/zaim">Займ через Contact</a>
                    </li>
                    <li>
                        <a href="/zaim">Займ на Яндекс.Деньги</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</footer>';
}
else if($this->uri->segment(1) == 'confirm' || $this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'spasibo' )
{
    echo '<footer class="ex-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <a href="/"><img src="templates/dengibystra/assets/img/logo-2.svg" alt=""></a>
                        <p>Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201<br>
                            <a href="mailto:support@dengibystra.ru">support@dengibystra.ru</a>  </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>';
} 

?>


<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center">Просто заполните форму и наш специалист свяжется с Вами</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-name" placeholder="Имя" title="Имя">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-phone" placeholder="Телефон" title="Телефон">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="modal-footer">
                                <div class="ex-actions">
                                    <button class="ex-main-btn" id="feedback-send" style="margin-top: 0px;">Отправить</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div id="loading" style="display:none;">
                    <span>
                        <i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<script type="text/javascript" src="/modules/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/modules/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="/modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js"></script>
<script type="text/javascript" src="/modules/poshytip-1.2/src/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="/modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="/templates/dengibystra/assets/js/jquery.suggestions.min.js"></script>
<script type="text/javascript" src="/templates/dengibystra/assets/js/coockie.js"></script>

<script type="text/javascript" src="/templates/dengibystra/assets/js/modal.js"></script>
<script type="text/javascript" src="/templates/dengibystra/assets/js/custom.js?ver=2"></script>
<script type="text/javascript" src="/templates/dengibystra/assets/js/settings_main.js?ver=2"></script>



<?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') { 
echo '<script type="text/javascript" src="/templates/dengibystra/assets/js/loanCalculator.js?ver=2"></script>';
echo '<script type="text/javascript">$("#rangeSlider").ionRangeSlider({
    hide_min_max: true, 
    keyboard: true, 
    from: 15,
    values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000],
	onChange: function (range3) {
                if (range3.from_value <= 10000) {
                    $("#period").val("7");
                    $("#period2").val("От 61 до 130 дней");
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней");
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней");
                } else {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                }
                $("#amount").val(range3.from_value);
            }
  
});</script>';
} 
elseif($this->uri->segment(1) == 'lk')
{
    echo '<script>
    var offers = '.json_encode($data).'
    var by_reg = null;
    $(document).ready(function () {
        $(".offer-type").change(function () {
            update_offers();
        });

        function update_offers() {
            var str = ".results tbody tr";
            //var curr = clone(by_reg.length? by_reg : offers);
            var ot_card = $(".offer-type[data-id=\'card\']").prop("checked");
            var ot_qiwi = $(".offer-type[data-id=\'qiwi\']").prop("checked");
            var ot_yandex = $(".offer-type[data-id=\'yandex\']").prop("checked");
            var ot_contact = $(".offer-type[data-id=\'contact\']").prop("checked");
            // Прячем всё
            $(str).hide();
            // Пробегаемся по списку офферов
            ((by_reg !== null) ? by_reg : offers).forEach(function (offer, i) {
                var $tr = $(str + "[data-id=\'" + offer.id + "\']");
                if ($tr.data("amount") >= amount) {
                    if (ot_card && !!$tr.data(\'card\') == ot_card) $tr.show();
                    else if (ot_qiwi && !!$tr.data(\'qiwi\') == ot_qiwi) $tr.show();
                    else if (ot_yandex && !!$tr.data(\'yandex\') == ot_yandex) $tr.show();
                    else if (ot_contact && !!$tr.data(\'contact\') == ot_contact) $tr.show();
                }
            });
        }
        if (getcookie("i")) {
            var i = getcookie("i");
            $("#i").text(i);
        }
        traffic("dengibystra.ru", "4");
    });

    function clone(o) {
        if (!o || "object" !== typeof o) return o;

        var c = "function" === typeof o.pop ? [] : {};
        var p, v;
        for (p in o) {
            if (o.hasOwnProperty(p)) {
                v = o[p];
                if (v && "object" === typeof v) {
                    c[p] = clone(v);
                } else {
                    c[p] = v;
                }
            }
        }
        return c;
    } 
</script>';
 
}


?>

<?php include "googleadservices_all.php"; ?>

<?php if ($this->uri->segment(1) == 'confirm') {
echo ' <script>
$(document).ready(function () {
    if (getcookie("i")) {
        var i = getcookie("i");
        var o = getcookie("o");
        var e = getcookie("email");
        $("#io").text(i + " " + o);
        $("#io2").text(i + " " + o);
        $("#e").text(e);
        $("#e2").text(e);
        var ee = e.split("@");
        if (isMobile) {
            switch (ee[1]) {
                case "yandex.ru":
                    eename = "https://mail.yandex.ru/touch-node/";
                    break;
                case "mail.ru":
                    eename = "https://touch.mail.ru/messages/#msglist";
                    break;
                case "list.ru":
                    eename = "https://touch.mail.ru/messages/#msglist";
                    break;
                case "inbox.ru":
                    eename = "https://touch.mail.ru/messages/#msglist";
                    break;
                case "bk.ru":
                    eename = "https://touch.mail.ru/messages/#msglist";
                    break;
                case "gmail.com":
                    eename = "https://mail.google.com";
                    break;
                default:
                    eename = "https://" + ee[1];
            }
        } else {
            switch (ee[1]) {
                case "yandex.ru":
                    eename = "https://mail.yandex.ru";
                    break;
                case "mail.ru":
                    eename = "https://e.mail.ru/messages/inbox/";
                    break;
                case "list.ru":
                    eename = "https://e.mail.ru/messages/inbox/";
                    break;
                case "inbox.ru":
                    eename = "https://e.mail.ru/messages/inbox/";
                    break;
                case "bk.ru":
                    eename = "https://e.mail.ru/messages/inbox/";
                    break;
                case "gmail.com":
                    eename = "https://mail.google.com";
                    break;
                default:
                    eename = "https://" + ee[1];
            }
        }
        $("#email_confirm").attr("href", eename);
        $("#email_confirm2").attr("href", eename);
    }
}); 
$("#btn1").click(function () {
    window.location.href = "/lk";
}); 
$("#btn2").click(function () {
    window.open($("#email_confirm2").attr("href"));
}); 
</script>';
    } ?>
	
<?php include "yandexmetrika.php"; ?> 

<?php if ($this->uri->segment(1) != 'form') { 
include "Yandex.php";
}
?>

</body>

</html>