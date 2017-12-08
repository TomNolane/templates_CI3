function returnToMaimPage() {
    window.location.href = window.location.origin
}

function goToForm() {
    window.location.href = window.location.origin + '/form';
}

function checkMe() {
    var y = document.getElementById('agree');
    if (y != null) {
        if (y.checked) {
            $('#my_btn').css("display", "block");
        } else {
            $('#my_btn').css("display", "none");
        }
    }
}

function traffic(site, page) {
    $.ajax({
        type: 'POST',
        url: '/traffic/',
        data: 'site=' + site + '&page=' + page,
        success: function (data) {}
    });
}
 