<footer class="ex-main-footer ex-sticky-footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="ex-foot-logo">
                    <a href="/"><img src="/templates/moneyshare/assets/img/logo-footer.png" alt="logo-footer.png"></a>
                </div>
            </div>
            <div class="col-lg-10">
                <!-- <ul class="d-md-flex justify-content-center ">
                    <li><a href="/agreement">Пользовательское соглашение</a></li>
                    <li><a href="/confidentiality">Политика конфиденциальности</a></li>
                </ul> -->
            </div>
        </div>
        <p> 
        Сайт НЕ является представительством МФО или банком, не выдает займов и кредитов. Персональные данные пользователей не собираются и не хранятся. Все рекомендуемые на сайте кредитные учреждения имеют соответствующие лицензии. Условия неуплаты можно уточнить на сайте МФО.
        </p>
    </div>
</footer>
<script src="/templates/moneyshare/assets/js/jquery.min.js"></script>
<script src="/templates/moneyshare/assets/js/bootstrap.min.js"></script>
<script src="/templates/moneyshare/assets/js/custom.js"></script>
<script>
    $("#ex-offers").click(function() {
        $('html, body').animate({
            scrollTop: $(".ex-offers-section").offset().top
        }, 1000);
    });
 var re_email = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
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

        if(!re_email.test($('#feedback-email2').val()))
        {
            Loading2(0);
            alert('Пожалуйста, заполните поле "ваш емаил" корректно.');
            return;
        } 

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


$('#feedback-send3').click(function () {
    Loading2();

    var data2 = {
        name: $('#feedback-name3').val(),
        phone: $('#feedback-phone3').val(),
        email: $('#feedback-email3').val(),
        comment: $('#feedback-comment3').val()
    };

    if ((typeof data2.phone != 'undefined' && data2.phone != '') && (typeof data2.email != 'undefined' && data2
            .email != '') && (typeof data2.comment != 'undefined' && data2.comment != '')) {

        if(!re_email.test($('#feedback-email3').val()))
        {
            Loading2(0);
            alert('Пожалуйста, заполните поле "ваш емаил" корректно.');
            return;
        } 

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
                    $('#feedback-send3').prop("disabled", true);
                    $('#feedback-send3').css("visibility","hidden");
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

$('#feedback-send4').click(function () {
    Loading2();

    var data2 = {
        name: $('#feedback-name4').val(),
        phone: $('#feedback-phone4').val(),
        email: $('#feedback-email4').val(),
        comment: $('#feedback-comment4').val()
    };

    if ((typeof data2.phone != 'undefined' && data2.phone != '') && (typeof data2.email != 'undefined' && data2
            .email != '') && (typeof data2.comment != 'undefined' && data2.comment != '')) {

        if(!re_email.test($('#feedback-email3').val()))
        {
            Loading2(0);
            alert('Пожалуйста, заполните поле "ваш емаил" корректно.');
            return;
        } 

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
                    $('#feedback-send4').prop("disabled", true);
                    $('#feedback-send4').css("visibility","hidden");
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
</script>
</body>
</html>