function setcookie(name,value,expires,path,domain,secure){document.cookie=name+"="+escape(value)+((expires)?"; expires="+(new Date(expires)):"")+((path)?"; path="+path:"; path=/")+((domain)?"; domain="+domain:"")+((secure)?"; secure":"");}function setcookies(){$('.ec').each(function(){var variant=$(this).attr('name');var value=$(this).val();if($(this).tagName=='INPUT'){if($(this).context.type=='radio'){if($(this).prop('checked'))setcookie(variant,value);}else setcookie(variant,value);}else setcookie(variant,value);});setcookie('lk','1');}function getcookie(name){var cookie=" "+document.cookie;var search=" "+name+"=";var setStr=null;var offset=0;var end=0;if(cookie.length>0){offset=cookie.indexOf(search);if(offset!=-1){offset+=search.length;end=cookie.indexOf(";",offset)
if(end==-1){end=cookie.length;}setStr=unescape(cookie.substring(offset,end));}}return(setStr);}function deleteAllCookies(){var cookies=document.cookie.split(";");for(var i=0;i<cookies.length;i++){var cookie=cookies[i];var eqPos=cookie.indexOf("=");var name=eqPos>-1?cookie.substr(0,eqPos):cookie;document.cookie=name+"=;expires=Thu, 01 Jan 1970 00:00:00 GMT";}};
var equalheight = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    $(container).each(function () {
        $el = $(this);
        $($el).height('auto');
        var topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (var currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0;
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
};

$(document).ready(function () {
    equalheight('.ex-section-3 .ex-wrapper');
    $(document).on('click', function (e) {
        if($('.ex-aside-menu').hasClass('ex-is-open')){
            $('.ex-aside-menu').removeClass('ex-is-open');
        }
        if (!$(e.target).is('.panel-body')) {
            $('.collapse').collapse('hide');
        }
    });
    var dropdownToggle =  $('.dropdown-toggle'),
        menu = $('.dropdown-menu'),
        askButton = $('.ex-ask-question'),
        footerHeight = $('.ex-sticky-footer').outerHeight();
    $(document).on('click' ,function(){
        dropdownToggle.hasClass('ex-on-off') ? dropdownToggle.removeClass('ex-on-off'): '';
    });
    dropdownToggle.on('click', function (e) {
        $(this).toggleClass('ex-on-off');
        $(this).parent().css('position','initial');
    });
    menu.on('click', function (e) {
        e.stopPropagation();
    });
    askButton.on('click', function (event) {
        $('#askQuestion').modal();
        $('.dropdown.open .dropdown-toggle').dropdown('toggle');
    });
    //Sticky footer functionality, adding body dynamic padding bottom duo to footer height
    $('.ex-sticky').css('padding-bottom', footerHeight);
    $( window ).resize(function() {
        var dynamicFooterHeight = $('.ex-sticky-footer').outerHeight();
        $('.ex-sticky').css('padding-bottom', dynamicFooterHeight);
    });
    $('.ex-ask-question').on('click', function (event) {
        $('#askQuestion').modal();
    });
    
    var agree = 0;
    $('#agree').change(function(){ 
        if (agree == 1)
        {
            $('#getmoney').css("visibility","visible");
            agree = 0;
        }
        else
        {
            $('#getmoney').css("visibility","hidden");
            agree = 1;
        }
    });
});
var isWebvisor = new RegExp('^https?:\/\/([^/]+metrika.yandex\.(ru|ua|com|com\.tr|by|kz)|([^/]+\.)?webvisor\.com)').test(document.referrer);
var re_email = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
var re_int = /^[0-9]{11}$/;
var re_name = /^[A-Z-zóąśłżźćńÓĄŚŁŻŹĆŃa-z-zóąśłżźćńÓĄŚŁŻŹĆŃ]{1,25}$/;
function error(msg, elem) {
	var title = 'Ошибка';
	if ($('#message').length) $('#message').remove();
	$('body').append('<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="messageLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header">' +
		'<h4 class="modal-title" id="messageLabel">' + title + '</h4><button type="button" class="close float-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' +
        '<div class="modal-body">' + msg + '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">OK</button></div></div></div></div>');
        $('html, body').animate({
            scrollTop: elem.offset().top - 160
        }, 1000);
        elem.click();
        elem.blur();
        $('#message').modal('show');
}
function validate1() {
	if (isWebvisor) return true;
	if ($('input[name="amount"]').val() < 500 || $('input[name="amount"]').val() > 25000) {
		error('Nie podałeś kwoty. Przykład: 20000', $('input[name="amount"]'));
		return false;
	} else if ($('input[name="period"]').val() < 1 || $('input[name="period"]').val() > 61) {
		error('Nie podałeś okres pożyczki. Przykład: 10', $('input[name="period"]'));
		return false;
    } else if ($('input[name="i"]').val().length < 2 || !re_name.test($('input[name="i"]').val())) {
		error('Należy podać imię. Przykład: Walenty', $('input[name="i"]'));
		return false;
	} else if ($('input[name="f"]').val().length < 2 || !re_name.test($('input[name="f"]').val())) {
		error('Należy podać nazwisko. Przykład: Wiśniewski', $('input[name="f"]'));
		return false;
	}  else if ($('input[name="phone"]').val().length > 17 || $('input[name="phone"]').val().length < 11) {
		error('Numer telefonu jest nieprawidłowy. Przykład: 123-456-789 vs. 12 345 67 89 vs. (+48) 123 456 789', $('input[name="phone"]'));
		return false;
	} else if ($('input[name="email"]').val().length < 6 || !re_email.test($('input[name="email"]').val())) {
		error('E-mail jest nieprawidłowy. Przykład: email@google.com', $('input[name="email"]'));
		return false;
    } else if ($('input[name="pesel"]').val().length < 11 || !re_int.test($('input[name="pesel"]').val()) || $('input[name="pesel"]').val().length > 11) {
		error('Należy podać pesel. Przykład: 81100216467', $('input[name="pesel"]'));
		return false;
	} else if (!$('#agree').prop('checked')) {
		error('Nie potwierdzają swoją zgodę z warunkami serwisu.', $('#agree'));
		return false;
	}
	else return true;
	return false;
}
function validate(){
	if (isWebvisor) return true;
	if (!validate1()) return false;
	if(typeof window.obUnloader != 'undefined')
    {
        window.obUnloader.resetUnload();
    }
	$('#form-modal').show();
	return true;
}
function send_form(send, href) {
	if (typeof send == 'undefined') send = '';
	else send = 'send=true&';
	$.getJSON('/addnew/?' + send + $('form#anketa').serialize()).done(function(data){
		if (typeof data.result != 'undefined' && data.result == 'OK'){
			if (typeof data.id != 'undefined')
			$('form#anketa input[name="id"]').val(data.id);
			if (typeof data.redirect != 'undefined' && data.redirect){
				if(typeof window.obUnloader != 'undefined')
				window.obUnloader.resetUnload();
			}
		}
	});
}
$('#getmoney').click(function(){
    if (validate()) { 
        $('#form-modal').show();
        send_form(true, '/lk');
        markTarget('form-step-3');
        setcookies();
        window.location = '/lk';
    }
    showBzzz = false;
});
function Loading(flag) {
    if (typeof flag == 'undefined') { 
        $('#feedback-send').prop('disabled', false); 
        $('#feedback-send').html('Wywoływane <i class="fa fa-spinner fa-spin fa-pulse"></i>');
    } else if (!flag) {
        $('#feedback-send').html('Wysłany');
        $('#feedback-send').prop('disabled', true);
    }
}

$('#feedback-send').click(function () {
    Loading();
    
    var data;
    if(window.location.pathname == '/form')
    {
        var _input = $('#anketa').serialize();
        _input = decodeURIComponent(_input);
        _input = _input.replace(new RegExp("&period",'g'),"&Срок");
        _input = _input.replace(new RegExp("display=0",'g'),"Декстоп версия");
        _input = _input.replace(new RegExp("display=1",'g'),"Мобайл версия");
        _input = _input.replace(new RegExp("referer",'g'),"Откуда пришли");
        _input = _input.replace(new RegExp("&f=",'g'),"&Фамилия=");
        _input = _input.replace(new RegExp("&i=",'g'),"&Имя=");
        _input = _input.replace(new RegExp("&phone=",'g'),"&Телефон=");
        _input = _input.replace(new RegExp("&email",'g'),"&Емаил");
        _input = _input.replace(new RegExp("amount",'g'),"Сумма");
        _input = _input.replace(new RegExp("pesel",'g'),"Социальное страхование");
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
                    alert('Błąd. ' + response.error);
                } else {
                    $('#askQuestion').modal('hide');
                    Loading(0);
                    alert('Zgłoszenie wysłane. Postaramy się odpowiedzieć w najbliższym czasie.');
                    $('#feedback-send').prop("disabled", true);
                }
            } else {
                alert('Nie udało się wysłać. Spróbuj jeszcze raz.');
                $('#askQuestion').modal('hide');
            }
        }).fail(function (jqxhr, textStatus, error) {
            alert('Nie udało się wysłać. Spróbuj jeszcze raz.');
        }).always(function () {
            Loading(0);
        });
    } else {
        Loading(0);
        alert('Proszę wypełnić wszystkie pola.');
    }
});