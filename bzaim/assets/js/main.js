function checkMe() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#my_btn").css("display", "block") : $("#my_btn").css("display", "none"))
}

function checkMee() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#next1f").css("visibility", "visible") : $("#next1f").css("visibility", "hidden"))
}
var equalheight = function (e) {
    var n, a = 0,
        i = 0,
        t = new Array;
    $(e).each(function () {
        n = $(this), $(n).height("auto");
        var e = n.position().top;
        if (i != e) {
            for (var s = 0; s < t.length; s++) t[s].height(a);
            t.length = 0, i = e, a = n.height(), t.push(n)
        } else t.push(n), a = a < n.height() ? n.height() : a;
        for (s = 0; s < t.length; s++) t[s].height(a)
    })
};
$(document).ready(function () {
    var e = $("body"),
        n = $(".ex-main-footer").outerHeight(),
        a = $(".panel-collapse"),
        i = $(".ex-indicator-scope"),
        t = ($(".ex-first-step"), $(".ex-second-step").find("span"), $(".ex-last-step"), $("#submitOne")),
        s = $("#submitTwo");
    e.css("padding-bottom", n), $(window).resize(function () {
        n = $(".ex-main-footer").outerHeight(), e.css("padding-bottom", n)
    }), a.on("show.bs.collapse", function () {
        $(this).prev(".panel-heading").find(".ex-plus-icon").removeClass("ex-plus-icon").addClass("ex-minus-icon")
    }), a.on("hide.bs.collapse", function () {
        $(this).prev(".panel-heading").find(".ex-minus-icon").removeClass("ex-minus-icon").addClass("ex-plus-icon")
    }), $(t).on("click", function () {
        i.addClass("ex-on-second-step")
    }), $(s).on("click", function () {
        i.removeClass("ex-on-second-step").addClass("ex-on-last-step")
    });
    var o = $(".ex-hidden"),
        l = $(".ex-collapse");
    o.each(function (e) {
        var n = $(this);
        $.trim(n.html()).length > 0 && n.closest(".ex-info-block").append("<span class='ex-collapse'>+ Подробнее</span>")
    }), $(".ex-info-block").on("click", l, function () {
        $(this).find(o).toggleClass("ex-active"), $(this).find($(".ex-collapse")).toggleClass("ex-blinked"), $(this).find(o).hasClass("ex-active") ? $(this).find($(".ex-collapse")).text("- Закрыть") : $(this).find($(".ex-collapse")).text("+ Подробнее")
    }), $(".ex-hamburger").on("click", function () {
        $(".ex-aside-menu").addClass("ex-is-open")
    }), $(".ex-close-menu").on("click", function () {
        $(".ex-aside-menu").removeClass("ex-is-open")
    })
});
var isMobile = !1;
(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) && (isMobile = !0), $(document).ready(function () {
    var e = getParameterByName("amount");
    if ("undefined" != typeof $("#amount").val()) {
        var n = parseInt($("#amount").val().trim().length < 1 ? 2e4 : $(".amount").val());
        null != e && ((e > 1e5 || e < 1e3) && (e = 2e4), n = e);
        var a = n,
            i = $("#rangeSlider"),
            t = 13,
            s = $("#ex-slider-val"),
            o = $(".ex-current-val"),
            l = $(".ex-time"),
            p = $(".ex-Commission"),
            c = $(".ex-total"),
            r = $(".irs-single"),
            d = $(".ex-prob"),
            m = $("#percent").val(),
            g = "130-200 дней",
            h = a * t / 100,
            u = a + h,
            v = function () {
                m = a <= 1e4 ? 95 : a <= 15e3 ? 95 : a <= 2e4 ? 95 : a <= 3e4 ? 85 : a <= 5e4 ? 77 : a <= 2e5 && a > 5e4 ? 65 : a <= 5e5 && a > 2e5 ? 58 : 52, r.text("вероятность " + m).append("%"), d.html("<span style='margin-left: 0px !important;'>" + m + "%</span>")
            },
            x = function () {
                g = a <= 1e4 ? "От 61 до 130 дней" : a <= 15e3 ? "От 61 до 130 дней" : a <= 2e4 ? "От 61 до 130 дней" : a <= 3e4 ? "От 61 до 130 дней" : a <= 5e4 ? "От 130 до 250 дней" : a <= 2e5 && a > 5e4 ? "От 250 до 365 дней" : a <= 5e5 && a > 2e5 ? "От 1 до 3 лет" : "От 1 до 5 лет", l.html("<span>" + g + "</span>");
                var e = $("#ex-slider-val").text();
                e = e.split(" ").join(""), $(".amount").val(e);
                i.data("ionRangeSlider")
            };
        s.append("<span>" + a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + "</span><i></i>"), o.append("<span>" + a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>"), l.append("<span>" + g + "</span>"), p.append("<span>" + h.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>"), c.append("<span>" + u.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>"), r.text("").append("<span>вероятность " + m + "%</span>"), d.text("").append("<span>" + m + "%</span>"), i.on("change", function () {
            r.attr("style", r.attr("style") + ";margin-left: -37px !important"), a = parseInt($(this).prop("value")), h = a * t / 100, u = a + h;
            var e = a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                n = h.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                i = u.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            s.html("<span>" + e + "</span><i></i>"), o.html("<span>" + e + " рублей</span>"), p.html("<span>" + n + " рублей</span>"), c.html("<span>" + i + " рублей</span>"), v(), x()
        })
    }
});