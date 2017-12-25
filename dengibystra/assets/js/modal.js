function Loading(flag) {
    if (typeof flag == 'undefined') { 
        $('#feedback-send').prop('disabled', true);
        $('#feedback-send').html('Отправка <i class="fa fa-spinner fa-spin fa-pulse"></i>');
    } else if (!flag) {
        $('#feedback-send').html('Отправить');
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