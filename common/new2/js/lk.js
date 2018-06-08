var offers = '.json_encode($data).'
 var by_reg = null;
$(document).ready(function () {
    $(".offer-type").change(function () {
        update_offers();
    });
    function update_offers() {
        var str = ".results tbody tr"; 
        var ot_card = $(".offer-type[data-id='card']").prop("checked");
        var ot_qiwi = $(".offer-type[data-id='qiwi']").prop("checked");
        var ot_yandex = $(".offer-type[data-id='yandex']").prop("checked");
        var ot_contact = $(".offer-type[data-id='contact']").prop("checked");
        // Прячем всё
        $(str).hide();
        // Пробегаемся по списку офферов
        ((by_reg !== null) ? by_reg : offers).forEach(function (offer, i) {
            var $tr = $(str + "[data-id='" + offer.id + "']");
            if ($tr.data("amount") >= amount) {
                if (ot_card && !!$tr.data('card') == ot_card) $tr.show();
                else if (ot_qiwi && !!$tr.data('qiwi') == ot_qiwi) $tr.show();
                else if (ot_yandex && !!$tr.data('yandex') == ot_yandex) $tr.show();
                else if (ot_contact && !!$tr.data('contact') == ot_contact) $tr.show();
            }
        });
    }
    if (getcookie("i")) {
        var i = getcookie("i");
        $("#i").text(i);
    }
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