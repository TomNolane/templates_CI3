var fingerprint0 = $("#fingerprint").val(), ip = $("#ip").val(), my_timer = 0; $(function () {
    var i = setTimeout(function n() {
        if (my_timer++ , fingerprint0 = $("#fingerprint").val(), console.log(i), "" != fingerprint0) {
            clearInterval(i); var r = document.location.host, t = document.location.href; return console.log(ip), $.ajax({
                type: "POST", url: "/fingerprint/", data: "fingerprint=" + fingerprint0 + "&site=" + r + "&url=" + t + "&ip=" + ip, success: function (i) { 
    
                    start_check();


                }
            }), !1
        } i = setTimeout(n, 700)
    }, 700)
});
function start_check() {
    if (document.querySelector('#fingerprint')) {
        // console.log('test finger');
        if (isInArray(document.querySelector('#fingerprint').value, blacklist_array1) || document.querySelector('#fingerprint').value == '') {
            //
            if (document.location.host == 'rublimo.ru' || document.location.host == 'zaimhome.ru') {
                send_clickfrod();
                window.location.href = 'https://moneyshare.ru?utm=clickfrods';
            }
        }
    }
} 
 