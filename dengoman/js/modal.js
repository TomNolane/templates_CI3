function Loading(flag) {
    if (typeof flag == 'undefined') {
        $('#feedback-send').prop('disabled', true);
        $('#feedback-send').html('Отправлено');
    } else if (!flag) {
        $('#feedback-send').html('Отправляется');
        $('#feedback-send').prop('disabled', false);
    }
}
$('#feedback-send').click(function () {
    Loading();
    var data = {
        name: $('#feedback-name').val(),
        phone: $('#feedback-phone').val(),
        email: $('#feedback-email').val(),
        comment: $('#feedback-comment').val() + " " + x_size + " x " + y_size + " UserAgent: " + navigator.userAgent
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
                    $('#askQuestion').modal('hide');
                    Loading(0);
                    alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
                    $('#feedback-send').prop("disabled", true);
                }
            } else {
                alert('Не получилось отправить. Попробуйте ещё раз.');
                $('#askQuestion').modal('hide');
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

function Loading2(flag) {
    if (typeof flag == 'undefined') {
        $('#feedback-send2').prop('disabled', true);
        $('#feedback-send2').html('Отправлено <i class="fa fa-spinner fa-spin fa-pulse"></i>');
    } else if (!flag) {
        $('#feedback-send2').html('Отправить');
        $('#feedback-send2').prop('disabled', false);
    }
}

$('#feedback-send2').click(function () {
    Loading2();

    var data2 = {
        name: $('#feedback-name2').val(),
        phone: $('#feedback-phone2').val(),
        email: $('#feedback-email2').val(),
        comment: $('#feedback-comment2').val()
    };

    if ((typeof data2.phone != 'undefined' && data2.phone != '') && (typeof data2.email != 'undefined' && data2
            .email != '') && (typeof data2.comment != 'undefined' && data2.comment != '')) {
        $.ajax({
            url: '/feedback/',
            type: 'POST',
            dataType: 'json',
            data: data2
        }).done(function (response) {
            if (response != null) {
                if (typeof response.error != 'undefined') {
                    alert('Ошибка. ' + response.error);
                } else {
                    Loading2(0);
                    alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
                    $('#feedback-send2').prop("disabled", true);
                    $('#feedback-send2').css("visibility","hidden");
                }
            } else {
                alert('Не получилось отправить. Попробуйте ещё раз.');
            }
        }).fail(function (jqxhr, textStatus, error) {
            alert('Не получилось отправить. Попробуйте ещё раз.');
        }).always(function () {
            Loading2(0);
        });
    } else {
        Loading2(0);
        alert('Пожалуйста, заполните все поля.');
    }
});