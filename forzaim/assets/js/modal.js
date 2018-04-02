function Loading(flag) {
    if (typeof flag == 'undefined') { 
        $('#feedback-send').prop('disabled', false); 
        $('#feedback-send').html('Отправляется <i class="fa fa-spinner fa-spin fa-pulse"></i>');
    } else if (!flag) {
        $('#feedback-send').html('Отправлено');
        $('#feedback-send').prop('disabled', true);
    }
}
$('#feedback-send').click(function () {
    
    var re_name2 = /^[а-яА-Яё,\W\.\s-]+$/i;
    if($('#feedback-name').val().length < 2 || !re_name2.test($('#feedback-name').val()))
    {
        alert("Корректно заполните Ваше имя");
        return;
    }

    var re_email2 = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
    if($('#feedback-email').val().length < 6 || !re_email2.test($('#feedback-email').val()))
    {
        alert("Корректно заполните Ваш email");
        return;
    }

    if($('#feedback-comment').val().length < 4)
    {
        alert("Корректно заполните Ваше обращение");
        return;
    }

    Loading();
    if(!re_email.test($('#feedback-email').val()))
    {
        Loading(0);
        alert('Пожалуйста, заполните поле "ваш емаил" корректно.');
        $('#feedback-send').prop('disabled', false);
        $('#feedback-send').html('Отправить');
        return;
    } 
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