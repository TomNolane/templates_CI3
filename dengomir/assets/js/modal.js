$(document).ready(function () {
    if (getcookie('i')) {
        var i = getcookie('i');
        var o = getcookie('o');
        var e = getcookie('email');
        $('#io2').text(i + ' ' + o);
        $('#e2').text(e);
        var ee = e.split('@');
        if (isMobile) {
            switch (ee[1]) {
                case 'yandex.ru':
                    eename = 'https://mail.yandex.ru/touch-node/';
                    break;
                case 'mail.ru':
                    eename = 'https://touch.mail.ru/messages/#msglist';
                    break;
                case 'list.ru':
                    eename = 'https://touch.mail.ru/messages/#msglist';
                    break;
                case 'inbox.ru':
                    eename = 'https://touch.mail.ru/messages/#msglist';
                    break;
                case 'bk.ru':
                    eename = 'https://touch.mail.ru/messages/#msglist';
                    break;
                case 'gmail.com':
                    eename = 'https://mail.google.com';
                    break;
                default:
                    eename = 'https://' + ee[1];
            }
        } else {
            switch (ee[1]) {
                case 'yandex.ru':
                    eename = 'https://mail.yandex.ru';
                    break;
                case 'mail.ru':
                    eename = 'https://e.mail.ru/messages/inbox/';
                    break;
                case 'list.ru':
                    eename = 'https://e.mail.ru/messages/inbox/';
                    break;
                case 'inbox.ru':
                    eename = 'https://e.mail.ru/messages/inbox/';
                    break;
                case 'bk.ru':
                    eename = 'https://e.mail.ru/messages/inbox/';
                    break;
                case 'gmail.com':
                    eename = 'https://mail.google.com';
                    break;
                default:
                    eename = 'https://' + ee[1];
            }
        }
        $("#email_confirm2").attr("href", eename);
    }
});

function Loading(flag) {
    if (typeof flag == 'undefined') {
        document.getElementById('loading').style.display = 'block';
        $('#feedback-send').prop('disabled', true);
        $('#feedback-send').html('Отправка <i class="fa fa-spinner fa-spin fa-pulse"></i>');
    } else if (!flag) {
        $('#feedback-send').html('Отправить');
        $('#feedback-send').prop('disabled', false);
        document.getElementById('loading').style.display = 'none';
    }
}
$('#feedback-send').click(function () {
    Loading();
    var data = {
        name: $('#feedback-name').val(),
        phone: $('#feedback-phone').val(),
        email: $('#feedback-email').val(),
        comment: $('#feedback-comment').val()
    };
    if ((typeof data.phone != 'undefined' && data.phone != '') && (typeof data.email != 'undefined' && data.email != '') && (typeof data.comment != 'undefined' && data.comment != '')) {
        $.ajax({
            url: '/feedback/',
            type: 'POST',
            dataType: 'json',
            data: data
        }).done(function (response) {
            if (response != null) {
                if (typeof response.error != 'undefined') {
                    alert('Ошибка. ' + response.error);
                } else {
                    $('#feedbackModal').modal('hide');
                    Loading(0);
                    alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
                }
            } else {
                alert('Не получилось отправить. Попробуйте ещё раз.');
            }
        }).fail(function (jqxhr, textStatus, error) {
            alert('Не получилось отправить. Попробуйте ещё раз.');
        }).always(function () {
            Loading(0);
        });
    } else {
        Loading(0);
        alert('Пожалуйста, заполните все поля.');
    }
});