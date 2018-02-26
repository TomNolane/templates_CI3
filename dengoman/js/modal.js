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
    
    var data;
    if(window.location.pathname == '/form')
    {
        var _input = $('#anketa').serialize();
        _input = decodeURIComponent(_input);
        _input = _input.replace(new RegExp("&step",'g'),"&Шаг");
        _input = _input.replace(new RegExp("&period",'g'),"&Срок");
        _input = _input.replace(new RegExp("display=0",'g'),"Декстоп версия");
        _input = _input.replace(new RegExp("display=1",'g'),"Мобайл версия");
        _input = _input.replace(new RegExp("referer",'g'),"Откуда пришли");
        _input = _input.replace(new RegExp("&f=",'g'),"&Фамилия=");
        _input = _input.replace(new RegExp("&i=",'g'),"&Имя=");
        _input = _input.replace(new RegExp("&o=",'g'),"&Отчество=");
        _input = _input.replace(new RegExp("gender=0",'g'),"Пол женский");
        _input = _input.replace(new RegExp("gender=1",'g'),"Пол мужской");
        _input = _input.replace(new RegExp("&birth_dd=0&birth_mm=0&birth_yyyy=0",'g'),"");
        _input = _input.replace(new RegExp("birthdate",'g'),"Дата рождения");
        _input = _input.replace(new RegExp("&phone=",'g'),"&Телефон=");
        _input = _input.replace(new RegExp("&email",'g'),"&Емаил");
        _input = _input.replace(new RegExp("&delays_type=never",'g'),"&Никогда не брал(а) кредитов");
        _input = _input.replace(new RegExp("&delays_type=credit_closed_no_delay",'g'),"&Кредиты закрыты, просрочек не было");
        _input = _input.replace(new RegExp("&delays_type=credit_open_no_delay",'g'),"&Кредиты есть, просрочек нет");
        _input = _input.replace(new RegExp("&delays_type=credit_closed_had_delay",'g'),"&Кредиты закрыты, просрочки были");
        _input = _input.replace(new RegExp("&delays_type=had_delay",'g'),"&Просрочки были, сейчас нет");
        _input = _input.replace(new RegExp("&delays_type=had_delay",'g'),"&Просрочки сейчас есть");
        _input = _input.replace(new RegExp("rangeSlider",'g'),"Сумма");
        _input = _input.replace(new RegExp("ammount",'g'),"Сумма");
        _input = _input.replace(new RegExp("amount",'g'),"Сумма");
        _input = _input.replace(new RegExp("&passport=",'g'),"&Серия и номер паспорта=");
        _input = _input.replace(new RegExp("passport_s",'g'),"Серия паспорта");
        _input = _input.replace(new RegExp("passport_n",'g'),"Номер паспорта");
        _input = _input.replace(new RegExp("passport_dd",'g'),"День выдачи");
        _input = _input.replace(new RegExp("passport_mm",'g'),"Месяц выдачи");
        _input = _input.replace(new RegExp("passport_yyyy",'g'),"Год выдачи");
        _input = _input.replace(new RegExp("passportdate",'g'),"Дата выдачи");
        _input = _input.replace(new RegExp("passport_code",'g'),"Код подразделения");
        _input = _input.replace(new RegExp("passport_who",'g'),"Кем выдан");
        _input = _input.replace(new RegExp("birthplace",'g'),"Место рождения");
        _input = _input.replace(new RegExp("&region=",'g'),"&Регион=");
        _input = _input.replace(new RegExp("&city=",'g'),"&Населённый пункт=");
        _input = _input.replace(new RegExp("&street=",'g'),"&Улица проживания=");
        _input = _input.replace(new RegExp("&building=",'g'),"&Дом=");
        _input = _input.replace(new RegExp("&housing=",'g'),"&Корпус=");
        _input = _input.replace(new RegExp("flat=",'g'),"Квартира=");
        _input = _input.replace(new RegExp("reg_type=1",'g'),"Постоянная регистрация");
        _input = _input.replace(new RegExp("reg_type=0",'g'),"Без регистрации");
        _input = _input.replace(new RegExp("reg_type=2",'g'),"Временная регистрация");
        _input = _input.replace(new RegExp("&reg_same=1",'g'),"");
        _input = _input.replace(new RegExp("&work=",'g'),"&Вид трудоустройства=");
        _input = _input.replace(new RegExp("work_name",'g'),"Место работы"); 
        _input = _input.replace(new RegExp("work_occupation",'g'),"Должность");
        _input = _input.replace(new RegExp("work_phone",'g'),"Рабочий телефон");
        _input = _input.replace(new RegExp("work_experience",'g'),"Стаж");
        _input = _input.replace(new RegExp("work_salary",'g'),"Зарплата");
        _input = _input.replace(new RegExp("work_region",'g'),"Регион работы");
        _input = _input.replace(new RegExp("work_city",'g'),"Город работы");
        _input = _input.replace(new RegExp("work_street",'g'),"Улица работы");
        _input = _input.replace(new RegExp("work_house",'g'),"Номер дома работы");
        _input = _input.replace(new RegExp("work_office",'g'),"Офис работы");

        _info = _info.replace(new RegExp("undefined",'g'),"неопределено");
        data = {
            name: $('#feedback-name').val(),
            phone: $('#feedback-phone').val(),
            email: $('#feedback-email').val(),
            comment: 'Обращение: ' + $('#feedback-comment').val() + _info + "\n | Разрешение экрана: " + x_size + " x " + y_size + "\n | Данные:" + _input
        };
    }
    else
    {
        data = {
            name: $('#feedback-name').val(),
            phone: $('#feedback-phone').val(),
            email: $('#feedback-email').val(),
            comment: 'Обращение: ' + $('#feedback-comment').val() + _info + "\n | Разрешение экрана: " + x_size + " x " + y_size
        };
    } 
    
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