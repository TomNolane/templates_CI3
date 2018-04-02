var re = /^[а-яА-Я0-9\/]+$/i;
var re_rc = /^[а-яА-Яё,\W\.\s-]+$/i;
var re_email = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
var re_int = /^\d+$/;
var re_name = /^[а-яА-Яё,\W\.\s-]+$/i;
var isWebvisor = new RegExp('^https?:\/\/([^/]+metrika.yandex\.(ru|ua|com|com\.tr|by|kz)|([^/]+\.)?webvisor\.com)').test(document.referrer);

function error(msg) {
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
	$.getJSON('/addnew/?' + send + $('form#anketa').serialize()).done(function (data) {
		if (typeof data.result != 'undefined' && data.result == 'OK') {
			if (typeof data.id != 'undefined')
				$('form#anketa input[name="id"]').val(data.id);
			if (typeof data.redirect != 'undefined' && data.redirect) {
				if (typeof window.obUnloader != 'undefined')
					window.obUnloader.resetUnload(); 
			}
		}
	});
}

function validate(){
	if (isWebvisor) return true;
	if (!validate1()) return false;
	if (!validate2()) return false;
    if (!validate3()) return false;
    else $('input[name="step"]').val('3');
	if(typeof window.obUnloader != 'undefined')
    {
        window.obUnloader.resetUnload();
    } 
	return true;
}

function validate1() {
	if (isWebvisor) return true;
	if ($('input[name="amount"]').val() < 1000 || $('input[name="amount"]').val() > 3000000) {
		error('Вы не указали сумму.');
		return false;
	} else if ($('input[name="period"]').val() < 5 || $('input[name="period"]').val() > 80) {
		error('Вы не указали срок займа.');
		return false;
	} else if ($('input[name="f"]').val().length < 2 || !re_name.test($('input[name="f"]').val())) {
		error('Необходимо указать фамилию.');
		return false;
	} else if ($('input[name="i"]').val().length < 2 || !re_name.test($('input[name="i"]').val())) {
		error('Необходимо указать имя.');
		return false;
	} else if ($('input[name="o"]').val().length < 2 || !re_name.test($('input[name="o"]').val())) {
		error('Необходимо указать отчество.');
		return false;
	} 
	else if ($('input[name="gender"]').val() != '0' && $('input[name="gender"]').val() != '1') {
		error('Вы не указали пол.');
		return false;
	} else if ($('input[name="phone"]').val().length != 16) {
		error('Номер телефона указан неверно.');
		return false;
	} else if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())) {
		error('Email указан неверно.');
		return false;
	} else if (!$('#agree').prop('checked')) {
		error('Вы не подтвердили своё согласие с условиями сервиса.');
		return false;
	}
	else return true;
	return false;
}

function validate2() {
	if (isWebvisor) return true;
	if ($('input[name="passport"]').val().length < 11) {
		error('Вы не указали номер и серию паспорта.');
		return false;
    }
	else if ($('input[name="passport_who"]').val().length < 3) {
		error('Необходимо указать, кем выдан паспорт.');
		return false;
	} else if ($('input[name="passport_code"]').val().length < 7) {
		error('Необходимо указать, код подразделения, выдавшего паспорт.');
		return false;
	} else if ($('input[name="birthplace"]').val().length < 3) {
		error('Необходимо указать место рождения.');
		return false;
	} else if ($('#region').val().length < 2 || !re_rc.test($('#region').val())) {
		error('Необходимо указать регион проживания.');
		return false;
	} else if ($('input[name="city"]').val().length < 2 || !re_rc.test($('input[name="city"]').val())) {
		error('<p>Ошибка в указании населённого пункта места жительства.</p><p>Данное поле может содержать только русские символы, символы пробела, запятую, точку или тире.</p>');
		return false;
	} else if ($('input[name="street"]').val().length < 2) {
		error('Необходимо указать улицу места жительства.');
		return false;
	} else if (!$('input[name="building"]').val().length || !re.test($('input[name="building"]').val())) {
		error('Ошибочно указан номер дома места жительства. Указывайте только номер дома и литеру, если она есть.');
		return false;
	} else if ($('input[name="housing"]').val().length && !re.test($('input[name="housing"]').val())) {
		error('Ошибочно указан номер строения места жительства. Указывайте только номер дома и литеру, если она есть.');
		return false;
	} else if ($('input[name="flat"]').val().length && !re.test($('input[name="flat"]').val())) {
		error('Ошибочно указан номер квартиры места жительства. Указывайте только номер дома и литеру, если она есть.');
		return false;
	} else if ($('.reg_same:checked').val() == '0' && ($('#reg_region').val().length < 2 || !re_rc.test($('#reg_region').val()))) {
		error('Вы не указали регион регистрации.');
		return false;
	} else if ($('.reg_same:checked').val() == '0' && ($('input[name="reg_city"]').val().length < 2 || !re_rc.test($('input[name="reg_city"]').val()))) {
		error('<p>Ошибка в указании населённого пункта места регистрации.</p><p>Данное поле может содержать только русские символы, символы пробела, запятую, точку или тире.</p>');
		return false;
	} else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_street"]').val().length < 2) {
		error('Необходимо указать улицу регистрации.');
		return false;
	} else if ($('.reg_same:checked').val() == '0' && !re.test($('input[name="reg_building"]').val())) {
		error('Ошибочно указан номер дома регистрации. Указывайте только номер дома и литеру, если она есть.');
		return false;
	} else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_housing"]').val().length && !re.test($('input[name="reg_housing"]').val())) {
		error('Ошибочно указан номер строения регистрации. Указывайте только номер дома и литеру, если она есть.');
		return false;
	} else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_flat"]').val().length && !re.test($('input[name="reg_flat"]').val())) {
		error('Ошибочно указан номер квартиры регистрации. Указывайте только номер дома и литеру, если она есть.');
		return false;
	} else return true;
	return false;
}

function validate3() {
	if (isWebvisor) return true;
	if (!re_int.test($('input[name="work_experience"]').val())) {
		error('Вы не указали стаж работы.');
		return false;
	} else if (!re_int.test($('input[name="work_salary"]').val())) {
		error('Вы не указали доход.');
		return false;
	} else if ($('input[name="work_name"]').val().length < 2) {
		error('Вы не указали название места работы.');
		return false;
	} else if ($('input[name="work_occupation"]').val().length < 2) {
		error('Вы не указали вашу должность.');
		return false;
	} else if ($('input[name="work_region"]').val() == '0') {
		error('Вы не указали регион работы.');
		return false;
	} else if ($('input[name="work_city"]').val().length < 2) {
		error('Необходимо указать город работы.');
		return false;
	} else if ($('input[name="work_street"]').val().length < 2) {
		error('Необходимо указать улицу работы.');
		return false;
	} else if (!re.test($('input[name="work_house"]').val())) {
		error('Ошибочно указан номер дома работы. Указывайте только номер дома и литеру, если она есть.');
		return false;
	} else return true;
	return false;
} 
$(document).ready(function () {
    $.mask.definitions['*'] = "[а-яёА-ЯЁA-Za-z0-9\/\-_]";
    $('[data-toggle="popover"]').popover();
    $('input#phone').mask("8 (9nn) nnn nnnn", {
        "placeholder": "8 (9__) ___ ____"
    });
    $('input#feedback-phone').mask("8 (9nn) nnn nnnn", {
        "placeholder": "8 (9__) ___ ____"
    });
    $('input#work_phone').mask("8 (9nn) nnn nnnn", {
        "placeholder": "8 (9__) ___ ____"
    });
    $('input#passport').mask("nnnn nnnnnn", {
        "placeholder": "____ ______"
    });
    $('#passport_code').mask("nnn-nnn", {
        "placeholder": "___-___"
    });
    $('input#birthdate').mask("nn/nn/nnnn", {
        "placeholder": "__/__/__"
    });
    $('input#passportdate').mask("nn/nn/nnnn", {
        "placeholder": "__/__/__"
    });
    $('input#work_salary').mask("nnnn?nn", {
        "placeholder": ""
    });
    $('input#work_experience').mask("n?nn", {
        "placeholder": ""
    });
    $('input#flat').mask("n?***", {
        "placeholder": ""
    });
    $('input#building').mask("n?***", {
        "placeholder": ""
    });
    $('input#work_house').mask("n?***", {
        "placeholder": ""
    }); 
    function init($surname, $name, $patronymic) {
        var self = {};
        self.$surname = $surname;
        self.$name = $name;
        self.$patronymic = $patronymic;
        var fioParts = ["SURNAME", "NAME", "PATRONYMIC"];
        $.each([$surname, $name, $patronymic], function (index, $el) {
            var sgt = $el.suggestions({
                serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                type: "NAME",
                triggerSelectOnSpace: false,
                hint: "",
                noCache: true,
                scrollOnFocus: false,
                minChars: 2,
                addon: "none",
                params: {
                    // каждому полю --- соответствующая подсказка
                    parts: [fioParts[index]]
                },
                onSearchStart: function (params) {
                    // если пол известен на основании других полей,
                    // используем его
                    var $el = $(this);
                    var $gender = 0;
                    params.gender = isGenderKnown.call(self, $el) ? self.gender : "UNKNOWN";
                    if (params.gender == "MALE") {
                        $gender = 1;
                    } else {
                        $gender = 0;
                    }
                    $('#gender').val($gender);
                },
                onSelect: function (suggestion) {
                    // определяем пол по выбранной подсказке
                    self.gender = suggestion.data.gender;
                    if (self.gender == "MALE") {
                        $gender = 1;
                    } else {
                        $gender = 0;
                    }
                    $('#gender').val($gender);
                }
            });
        });
    };
    function init2($name) {
        var self = {}; 
        self.$name = $name;
        var fioParts = ["NAME"];
        $.each([$name], function (index, $el) {
            var sgt = $el.suggestions({
                serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                type: "NAME",
                triggerSelectOnSpace: false,
                hint: "",
                noCache: true,
                scrollOnFocus: false,
                minChars: 2,
                addon: "none",
                params: {
                    // каждому полю --- соответствующая подсказка
                    parts: [fioParts[index]]
                }
            });
        });
    };
    // Проверяет, известен ли пол на данный момент
    function isGenderKnown($el) {
        var self = this;
        var surname = self.$surname.val(),
            name = self.$name.val(),
            patronymic = self.$patronymic.val();
        if (($el.attr('id') == self.$surname.attr('id') && !name && !patronymic) ||
            ($el.attr('id') == self.$name.attr('id') && !surname && !patronymic) ||
            ($el.attr('id') == self.$patronymic.attr('id') && !surname && !name)) {
            return false;
        } else {
            return true;
        }
    }
    init($("#f"), $("#i"), $("#o"));
    init2($("#feedback-name"));
    $("#email").suggestions({
        serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
        token: "78fc76023580df0ec78566913b31a87d909f1ec0",
        type: "EMAIL",
        count: 3,
        addon: "none",
        scrollOnFocus: false
    });
    $("#feedback-email").suggestions({
        serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
        token: "78fc76023580df0ec78566913b31a87d909f1ec0",
        type: "EMAIL",
        count: 3,
        addon: "none",
        scrollOnFocus: false
    });
    $("#feedback-email2").suggestions({
        serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
        token: "78fc76023580df0ec78566913b31a87d909f1ec0",
        type: "EMAIL",
        count: 3,
        addon: "none",
        scrollOnFocus: false
    });
    $.validate({
        lang: 'ru',
        modules: 'date,sanitize'
    });
    $('input').on('validation', function (evt, valid) {
        if(valid){  
                $(this).parent().parent().prev().removeClass('label_er').addClass('label_true');
                $(this).removeClass('er');
                $('#'+this.id+'status').removeClass('glyphicon-remove').addClass('glyphicon-ok'); 

                if(this.name == 'phone')
                {
                    ('#spec_form2').removeClass('label_er').addClass('label_true');
                }

            } else { 
                $(this).parent().parent().prev().addClass('label_er').removeClass('label_true');
                $('#'+this.id+'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                $(this).addClass('er'); 
                
                if(this.name !== 'f' && this.name !== 'i' && this.name !== 'o')
                {
                    $(this).attr('placeholder',evt.currentTarget.dataset.validationErrorMsg);
                } 

                if(this.name == 'phone')
                {
                    ('#spec_form2').removeClass('label_true').addClass('label_er');
                }
            } 
    });
    $('#phone').blur(function () { 
        $.ajax({
            type: 'POST',
            url: '/validate/phone/',
            data: 'phone=' + $('#phone').val(),
            success: function (data) {
                validator = JSON.parse(data);
                if (validator.status) { 
                    $('#spec_form2').removeClass('label_er').addClass('label_true');
                    // $('#phonestatus').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
                    $('#phonestatus').html('<img src="/templates/common/img/mobile/' + validator.operator + '.png" width="24px" />');
                    $('#phone').parent().removeClass('ex-error').addClass('ex-success');
                    if (validator.operator == 'undefined') {
                        $('#phonestatus').html('');
                        // $('#phonestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                    }
                } else { 
                    $('#phonestatus').html('');
                    $('#spec_form2').addClass('label_er').removeClass('label_true');
                    // $('#phonestatus').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                    $('#phone').parent().removeClass('ex-success').addClass('ex-error');
                } 
            }
        });
    });
    $('#work_phone').blur(function () { 
        $.ajax({
            type: 'POST',
            url: '/validate/phone/',
            data: 'phone=' + $('#work_phone').val(),
            success: function (data) {
                validator = JSON.parse(data);
                if (validator.status) { 
                    $('#work_phonestatus').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
                    $('#work_phonestatus').html('<img src="/templates/common/img/mobile/' + validator.operator + '.png" width="24px" />');
                    $('#work_phonestatus').parent().removeClass('ex-error').addClass('ex-success');
                    if (validator.operator == 'undefined') {
                        $('#work_phonestatus').html('');
                        $('#work_phonestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                    }
                } else { 
                    $('#work_phonestatus').html('');
                    $('#work_phonestatus').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                    $('#work_phone').parent().removeClass('ex-success').addClass('ex-error');
                } 
            }
        });
    });
    $('#passport_code').blur(function () {
        $.ajax({
            type: 'POST',
            url: '/validate/passport_code/',
            data: 'passport_code=' + $('#passport_code').val(),
            success: function (data) {
                //console.log(data);    
                validator = JSON.parse(data);
                if (validator.status) {
                    $('#passport_who').val(validator.who);
                } else {}
            }
        });
    });
    var lang = 0;
    $('#f, #i, #o, #passport_who, #birthplace, #city, #reg_city, #street, #reg_street, #work_occupation, #work_experience, #work_region, #work_city, #work_street, #feedback-name, #feedback-comment').on('keyup keypress', function (e) {
        if ($(this).val().match(/([a-zA-Z]+)/)) {
            lang++;
            var input = $(this),
                text = input.val().replace(/[^а-яёА-ЯЁ0-9-_\s]/g, "");
            //text = '';
            input.val(text);
            if (lang == 1) {
                $(this).parent().addClass('ex-error');
                $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">RU</span></span>');
            }
        } else {
            lang = 0;
            $(this).parent().removeClass('ex-error');
            $(this).next("span").text(' ');
        } 
    });

    $('#email').on('keyup keypress', function (e) {
        if ($(this).val().match(/([а-яёА-ЯЁ]+)/)) {
            lang++;
            $(this).val('');
            if (lang == 1) {
                $(this).parent().addClass('ex-error');
                $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>');
            }
        } else {
            lang = 0;
            $(this).parent().removeClass('ex-error');
            $(this).next("span").text(' ');
        }
    });
    $('#feedback-email').on('keyup keypress', function (e) {
        if ($(this).val().match(/([а-яёА-ЯЁ]+)/)) {
            lang++;
            $(this).val('');
            if (lang == 1) {
                $(this).parent().addClass('ex-error');
                $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>');
            }
        } else {
            lang = 0;
            $(this).parent().removeClass('ex-error');
            $(this).next("span").text(' ');
        }
    });
    $('#feedback-email2').on('keyup keypress', function (e) {
        if ($(this).val().match(/([а-яёА-ЯЁ]+)/)) {
            lang++;
            $(this).val('');
            if (lang == 1) {
               $(this).parent().addClass('ex-error');
               $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>');
            }
        } else {
            lang = 0;
            $(this).parent().removeClass('ex-error');
            $(this).next("span").text(' ');
        }
    });
    $('#birthdate').datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true,
        monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        firstDay: 1,
        yearRange: "-72:-18",
        defaultDate: "01/01/1999",
        isRTL: false,
        onSelect: function (date) { 
            $('#birthdate').focus();
            $('#birthdate').blur();
            $('#birthdate').datepicker("hide");
            if ($(this).val().indexOf("_") == -1) {
                $('#_birthdate').removeClass('lbl');
                $('#_birthdate').addClass('lbl2');
            } else {
                $(this).attr("placeholder", "Пожалуйста, выберите дату рождения");
                $(this).addClass('your-class');
                $(this).removeClass('your-class2');
                $(this).addClass('your-class3');
                $('#_birthdate').removeClass('lbl2');
                $('#_birthdate').addClass('lbl');
            }
        }
    });
    $('#passportdate').datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true,
        monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        firstDay: 1,
        yearRange: "-100:+0",
        isRTL: false,
        onSelect: function (date) {
            // $('#passportdate').focus();
            // $('#passportdate').blur();
            // $('#passportdate').datepicker("hide");
            birth = date.split('/');
            $('select#passport_dd').append($("<option></option>").attr("value", birth[0]).text(birth[0]));
            $("select#passport_dd").val(birth[0]);
            $('select#passport_mm').append($("<option></option>").attr("value", birth[1]).text(birth[1]));
            $("select#passport_mm").val(birth[1]);
            $('select#passport_yyyy').append($("<option></option>").attr("value", birth[2]).text(birth[2]));
            $("select#passport_yyyy").val(birth[2]);
        }
    });

    $('#next1').click(function () { 
        if (validate1()) { 
            $('input[name="step"]').val('1'); 
            $('.spec_footer4').css('display','none');
            send_form(); 
            $('.ex-step-counter').addClass('ex-on-second-step');
            $('.ex-indicator-scope').addClass('ex-on-second-step');
            $('#firstStep').removeClass('in active');
            $('#secondStep').addClass('in active');
            $('html, body').animate({
                scrollTop: $('#to_scroll').offset().top
            }, 1000);
            markTarget('form-step-1'); 
            //traffic(window.location.hostname,1);
        }
        showBzzz = false;
        $('.reg_same').change();
        setcookies();
        $('select[name="reg_type"]').change();
    }); 
    $('#next1b').click(function () { 
        if (validate1()) { 
            $('input[name="step"]').val('1'); 
            $('.spec_footer4').css('display','none');
            send_form(); 
            $('.ex-step-counter').addClass('ex-on-second-step');
            $('.ex-indicator-scope').addClass('ex-on-second-step');
            $('#firstStep').removeClass('in active');
            $('#secondStep').addClass('in active');
            $('html, body').animate({
                scrollTop: $('#to_scroll').offset().top
            }, 1000);
            markTarget('form-step-1'); 
            //traffic(window.location.hostname,1);
        }
        showBzzz = false;
        $('.reg_same').change();
        setcookies();
        $('select[name="reg_type"]').change();
    }); 
    $('#next2').click(function () {
        if (validate2()) {
            $('input[name="step"]').val('2');
            send_form();
            $('.ex-indicator-scope').removeClass('ex-on-second-step').addClass('ex-on-last-step');
            $('.ex-step-counter').removeClass('ex-on-second-step').addClass('ex-on-last-step');
            $('#secondStep').removeClass('in active');
            $('#thirdStep').addClass('in active');
            $('html, body').animate({
                scrollTop: $('#to_scroll').offset().top
            }, 1000);
            markTarget('form-step-2');
            //traffic(window.location.hostname,2);
        }
        showBzzz = false;
        setcookies();
    });

    $('#getmoney').click(function () {
        if (validate()) { 
            $('input[name="step"]').val('3');
            send_form(true, '/lk');
            markTarget('form-step-3');
            //traffic(window.location.hostname,3);
            $('#anketa').submit();
        }
        showBzzz = false;
        setcookies();
    });

    $('select[name="reg_type"]').change(function () {
        if ($(this).val() == '0') {
            $('.reg_same[value="1"]').prop('checked', true);
            $('#reg_same').hide();
            $('#reg_address').hide();
            $('#reg_address').prop('disabled', true);
        } else $('#reg_same').show();
    }).change();

    $('.reg_same').change(function () {
        if ($('.reg_same:checked').val() == '1' || $('select[name="reg_type"]').val() == '0') {
            $('#reg_address').prop('disabled', true);
            $('#reg_address').hide();
        } else {
            $('#reg_address').prop('disabled', false);
            $('#reg_address').show();
        }
    }).change();
    $('#passport').blur(function () {
        var pass = $('#passport').val().split(' ');
        $('#passport-s').val(pass[0]);
        $('#passport-n').val(pass[1]);
    });
    $('#work').change(function () {
        if ($('#work').val() == 'ПЕНСИОНЕР') {
            //console.log('ПЕНСИОНЕР');
            $('#work_name_help').html('укажите последнее место работы');
        } else {
            $('#work_name_help').html('');
        }
    });
    var isMobile = false; //initiate as false
    // device detection
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
    if (isMobile) {
        $('#birthdate').prop('readonly', true);
        $('#passportdate').prop('readonly', true);
        $('#display').val(1);
    } else {
        $('.tip').poshytip({
            className: 'tip-twitter',
            showTimeout: 100,
            alignTo: 'target',
            alignX: 'right',
            alignY: 'center',
            offsetX: 5,
            allowTipHover: false,
            fade: false,
            slide: false
        });
    } 
});