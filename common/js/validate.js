var re = /^[а-яА-Я0-9\/]+$/i;
var re_rc = /^[а-яА-Яё,\.\s-]+$/i;
var re_email = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
var re_int = /^\d+$/;
var re_name = /^[А-я-]+$/;
var isWebvisor = new RegExp('^https?:\/\/([^/]+metrika.yandex\.(ru|ua|com|com\.tr|by|kz)|([^/]+\.)?webvisor\.com)').test(document.referrer); 

function error(msg){
	var title = 'Ошибка';
	if ($('#message').length) $('#message').remove();
	$('body').append('<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="messageLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
						'<h4 class="modal-title" id="messageLabel">' + title + '</h4></div>' +
						'<div class="modal-body">' + msg + '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">OK</button></div></div></div></div>');
	$('#message').modal('show');
}

function send_form(send, href) {
	if (typeof send == 'undefined') send = '';
	else send = 'send=true&';
	$.getJSON('/add/?' + send + $('form#anketa').serialize()).done(function(data){
		if (typeof data.result != 'undefined' && data.result == 'OK'){
			if (typeof data.id != 'undefined')
			$('form#anketa input[name="id"]').val(data.id);
			if (typeof data.redirect != 'undefined' && data.redirect){
				if(typeof window.obUnloader != 'undefined')
				window.obUnloader.resetUnload();
				window.location.href = (typeof href == 'undefined')? '/result' : href;
			}
		}
	});
}

function validate1(){
	if (isWebvisor) return true;
	if ($('input[name="amount"]').val() < 1000 || $('input[name="amount"]').val() > 100000) {error('Вы не указали сумму.'); return false;}
	else if ($('input[name="period"]').val() < 5 || $('input[name="period"]').val() > 30) {error('Вы не указали срок займа.'); return false;}
	else if ($('input[name="f"]').val().length < 2 || !re_name.test($('input[name="f"]').val())) {error('Необходимо указать фамилию.'); return false;}
	else if ($('input[name="i"]').val().length < 2 || !re_name.test($('input[name="i"]').val())) {error('Необходимо указать имя.'); return false;}
	else if ($('input[name="o"]').val().length < 2 || !re_name.test($('input[name="o"]').val())) {error('Необходимо указать отчество.'); return false;}
	else if ($('select[name="birth_dd"]').val().length != 2) {error('Вы не указали день рождения.'); return false;}
	else if ($('select[name="birth_mm"]').val().length != 2) {error('Вы не указали месяц рождения.'); return false;}
	else if ($('select[name="birth_yyyy"]').val().length != 4) {error('Вы не указали год рождения.'); return false;}
	else if ($('input[name="gender"]').val() != '0' && $('input[name="gender"]').val() != '1') {error('Вы не указали пол.'); return false;}
	else if ($('input[name="phone"]').val().length != 14 && $('input[name="phone"]').val().indexOf('8 9') != 0) {error('Номер телефона указан неверно.'); return false;}
	else if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())) {error('Email указан неверно.'); return false;}
	else if (!$('#agree').prop('checked')) {error('Вы не подтвердили своё согласие с условиями сервиса.'); return false;}
	else if (!$('#marketing').prop('checked')) {error('Вы не подтвердили своё согласие на получение рассылки.'); return false;}
	else return true;
	return false;
}

function validate2(){
	if (isWebvisor) return true;
	if ($('input[name="passport"]').val().length < 11) {error('Вы не указали серию и номер паспорта.'); return false;}
	else if ($('select[name="passport_dd"]').val().length != 2) {error('Вы не указали день выдачи паспорта.'); return false;}
	else if ($('select[name="passport_mm"]').val().length != 2) {error('Вы не указали месяц выдачи паспорта.'); return false;}
	else if ($('select[name="passport_yyyy"]').val().length != 4) {error('Вы не указали год выдачи паспорта.'); return false;}
	else if ($('input[name="passport_who"]').val().length < 3) {error('Необходимо указать, кем выдан паспорт.'); return false;}
	else if ($('input[name="passport_code"]').val().length < 7) {error('Необходимо указать, код подразделения, выдавшего паспорт.'); return false;}
	else if ($('input[name="birthplace"]').val().length < 3) {error('Необходимо указать место рождения.'); return false;}
	
	else if ($('#region').val().length < 2 || !re_rc.test($('#region').val())) {error('Необходимо указать регион проживания.'); return false;}
	else if ($('input[name="city"]').val().length < 2 || !re_rc.test($('input[name="city"]').val())) {error('<p>Ошибка в указании населённого пункта места жительства.</p><p>Данное поле может содержать только русские символы, символы пробела, запятую, точку или тире.</p>'); return false;}
	else if ($('input[name="street"]').val().length < 2) {error('Необходимо указать улицу места жительства.'); return false;}
	else if (!$('input[name="building"]').val().length || !re.test($('input[name="building"]').val())) {error('Ошибочно указан номер дома места жительства. Указывайте только номер дома и литеру, если она есть.'); return false;}
	else if ($('input[name="housing"]').val().length && !re.test($('input[name="housing"]').val())) {error('Ошибочно указан номер строения места жительства. Указывайте только номер дома и литеру, если она есть.'); return false;}
	else if ($('input[name="flat"]').val().length    && !re.test($('input[name="flat"]').val())) {error('Ошибочно указан номер квартиры места жительства. Указывайте только номер дома и литеру, если она есть.'); return false;}
	
	else if ($('.reg_same:checked').val() == '0' && ($('#reg_region').val().length < 2 || !re_rc.test($('#reg_region').val()))) {error('Вы не указали регион регистрации.'); return false;}
	else if ($('.reg_same:checked').val() == '0' && ($('input[name="reg_city"]').val().length < 2 || !re_rc.test($('input[name="reg_city"]').val()))) {error('<p>Ошибка в указании населённого пункта места регистрации.</p><p>Данное поле может содержать только русские символы, символы пробела, запятую, точку или тире.</p>'); return false;}
	else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_street"]').val().length < 2) {error('Необходимо указать улицу регистрации.'); return false;}
	else if ($('.reg_same:checked').val() == '0' && !re.test($('input[name="reg_building"]').val())) {error('Ошибочно указан номер дома регистрации. Указывайте только номер дома и литеру, если она есть.'); return false;}
	else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_housing"]').val().length && !re.test($('input[name="reg_housing"]').val())) {error('Ошибочно указан номер строения регистрации. Указывайте только номер дома и литеру, если она есть.'); return false;}
	else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_flat"]').val().length    && !re.test($('input[name="reg_flat"]').val())) {error('Ошибочно указан номер квартиры регистрации. Указывайте только номер дома и литеру, если она есть.'); return false;}
	
	else return true;
	return false;
}

function validate3(){
	if (isWebvisor) return true;
	if (!re_int.test($('input[name="work_experience"]').val())) {error('Вы не указали стаж работы.'); return false;}
	else if (!re_int.test($('input[name="work_salary"]').val())) {error('Вы не указали доход.'); return false;}
	else if ($('input[name="work_name"]').val().length < 2) {error('Вы не указали название места работы.'); return false;}
	else if ($('input[name="work_occupation"]').val().length < 2) {error('Вы не указали вашу должность.'); return false;}
	else if ($('input[name="work_region"]').val() == '0') {error('Вы не указали регион работы.'); return false;}
	else if ($('input[name="work_city"]').val().length < 2) {error('Необходимо указать город работы.'); return false;}
	else if ($('input[name="work_street"]').val().length < 2) {error('Необходимо указать улицу работы.'); return false;}
	else if (!re.test($('input[name="work_house"]').val())) {error('Ошибочно указан номер дома работы. Указывайте только номер дома и литеру, если она есть.'); return false;}
	else return true;
	return false;
}

function validate(){
	if (isWebvisor) return true;
	if (!validate1()) return false;
	if (!validate2()) return false;
	if (!validate3()) return false;
	if(typeof window.obUnloader != 'undefined')
    {
        window.obUnloader.resetUnload();
    }
	$('#form-modal').show();
	return true;
}