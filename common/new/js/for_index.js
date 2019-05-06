var fingerprint0 = $("#fingerprint").val(), ip = $("#ip").val(), my_timer = 0; $(function () {
    var i = setTimeout(function n() {
        if (my_timer++ , fingerprint0 = $("#fingerprint").val(), "" != fingerprint0) {
            clearInterval(i); var r = document.location.host, t = document.location.href; return console.log(ip), $.ajax({
                type: "POST", url: "/fingerprint/", data: "fingerprint=" + fingerprint0 + "&site=" + r + "&url=" + t + "&ip=" + ip, success: function (i) { 
                    start_check();
                }
            }), !1
        } i = setTimeout(n, 700)
    }, 700)
});
function start_check() {
} 
$(document).on('click','.main-btn-offerwall',function(){
    window.location.href = '/pixell';
    window.open(
        '/form/',
        '_blank'
    );
    return false;
});
document.querySelectorAll("a[href='/form']").forEach((item, i) => {
    item.onclick = function () {
        window.location.href = '/pixell';
        window.open(
            '/form/',
            '_blank'
        );
        return false;
    };
});