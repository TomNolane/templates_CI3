function setcookie(name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + (new Date(expires)) : "") +
        ((path) ? "; path=" + path : "; path=/") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}

function setcookies() {
    $('.ec').each(function () {
        var variant = $(this).attr('name');
        var value = $(this).val();
        if ($(this).tagName == 'INPUT') {
            if ($(this).context.type == 'radio') {
                if ($(this).prop('checked')) setcookie(variant, value);
            } else setcookie(variant, value);
        } else setcookie(variant, value);
    });
    setcookie('lk', '1');
}

function getcookie(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;

    if (cookie.length > 0) {
        offset = cookie.indexOf(search);

        if (offset != -1) {
            offset += search.length;
            end = cookie.indexOf(";", offset)

            if (end == -1) {
                end = cookie.length;
            }

            setStr = unescape(cookie.substring(offset, end));
        }
    }

    return (setStr);
}

function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}; 