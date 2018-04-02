function addDate(numberOfYears)
{
    var startDate = new Date();
    var returnDate = new Date(
                            startDate.getFullYear()-numberOfYears,
                            startDate.getMonth(),
                            startDate.getDate(),
                            startDate.getHours(),
                            startDate.getMinutes(),
                            startDate.getSeconds());
    return returnDate;
};
function addDate2(numberOfDays,numberOfMonth,numberOfYears)
{
    var startDate = new Date();
    var returnDate = new Date(
                            numberOfYears,
                            numberOfMonth-1,
                            numberOfDays,
                            startDate.getHours(),
                            startDate.getMinutes(),
                            startDate.getSeconds());
    return returnDate;
};
function CheckTime()
{
    var today = addDate2($('#birthdate').val().split('/')[0],$('#birthdate').val().split('/')[1],$('#birthdate').val().split('/')[2]).getTime();
    var from = addDate(18).getTime();
    var to = addDate(70).getTime();
    var withinRange = today <= from && today >= to;

    if(withinRange)
    {
        $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display','none');
        $('#birthdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
        $('#birthdate').removeClass('er');
        $('#birthdate').parent().removeClass('ex-error').addClass('ex-success');
        $('#birthdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok'); 
        return true;
    }
    else
    {
        $('#birthdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
        $('#birthdate').addClass('er');
        $('#birthdate').parent().removeClass('ex-success').addClass('ex-error');
        $('#birthdate').attr('placeholder',"Возраст должен быть от 18 до 70 лет");
        $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display','inline-block');
        $('#birthdate').parent($('#birthdate')).find('.help-block2').text("Возраст должен быть от 18 до 70 лет");
        return false;
    }
}
function CheckTime2()
{
    var today = addDate2($('#passportdate').val().split('/')[0],$('#passportdate').val().split('/')[1],$('#passportdate').val().split('/')[2]).getTime();
    var from = addDate(0).getTime();
    var to = addDate(100).getTime();
    var withinRange = today <= from && today >= to;

    if(withinRange)
    {
        $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display','none');
        $('#passportdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
        $('#passportdate').removeClass('er');
        $('#passportdate').parent().removeClass('ex-error').addClass('ex-success');
        $('#passportdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        var birth = $('#passportdate').val().split('/');
        $('select#passport_dd').append($("<option></option>").attr("value", birth[0]).text(birth[0]));
        $("select#passport_dd").val(birth[0]);
        $('select#passport_mm').append($("<option></option>").attr("value", birth[1]).text(birth[1]));
        $("select#passport_mm").val(birth[1]);
        $('select#passport_yyyy').append($("<option></option>").attr("value", birth[2]).text(birth[2]));
        $("select#passport_yyyy").val(birth[2]);
        return true;
    }
    else
    {
        $('#passportdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
        $('#passportdate').addClass('er');
        $('#passportdate').parent().removeClass('ex-success').addClass('ex-error');
        $('#passportdate').attr('placeholder',"Возраст должен быть от 18 до 100 лет");
        $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display','inline-block');
        $('#passportdate').parent($('#passportdate')).find('.help-block2').text("Возраст должен быть от 18 до 100 лет");
        return false;
    }
}

$('#agree').change(function () {
    if ($('#agree:checked').val() == '1') {
        $('#next').css('display', 'block');
    } else {
        $('#next').css('display', 'none');
    }

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
init($("#f"), $("#i"), $("#o"));
init2($("#feedback-name"));
$.validate({
    lang: 'ru',
    modules: 'date,sanitize'
});
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
$('input').click(function () {
    if ($(this).attr("type") == "checkbox" || $(this).attr("id") == "feedback-email" || $(this).attr("id") == "feedback-phone" || $(this).attr("id") == "feedback-name" || $(this).attr("id") == "feedback-email2" || $(this).attr("id") == "feedback-phone2" || $(this).attr("id") == "feedback-name2") {
        return;
    }
    $('html, body').animate({
        scrollTop: $(this).offset().top - 100
    }, 1000);
});
$('input').on('validation', function (evt, valid) {
    if (valid) {
        if(this.name == 'birthdate')
            {    
                var today = addDate2($('#birthdate').val().split('/')[0],$('#birthdate').val().split('/')[1],$('#birthdate').val().split('/')[2]).getTime();
                var from = addDate(18).getTime();
                var to = addDate(70).getTime();
                var withinRange = today <= from && today >= to;

                if(withinRange)
                {
                    $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display','none');
                    $('#birthdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
                    $('#birthdate').removeClass('er');
                    $('#birthdate').parent().removeClass('ex-error').addClass('ex-success');
                    $('#birthdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok'); 
                    return;
                }
                else
                {
                    $('#birthdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
                    $('#birthdate').addClass('er');
                    $('#birthdate').parent().removeClass('ex-success').addClass('ex-error');
                    $('#birthdate').attr('placeholder',"Возраст должен быть от 18 до 70 лет");
                    $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display','inline-block');
                    $('#birthdate').parent($('#birthdate')).find('.help-block2').text("Возраст должен быть от 18 до 70 лет");
                    return;
                }
            }

            if(this.name == 'passportdate')
            {    
                var today = addDate2($('#passportdate').val().split('/')[0],$('#passportdate').val().split('/')[1],$('#passportdate').val().split('/')[2]).getTime();
                var from = addDate(0).getTime();
                var to = addDate(100).getTime();
                var withinRange = today <= from && today >= to;

                if(withinRange)
                {
                    $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display','none');
                    $('#passportdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
                    $('#passportdate').removeClass('er');
                    $('#passportdate').parent().removeClass('ex-error').addClass('ex-success');
                    $('#passportdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok'); 
                    return;
                }
                else
                {
                    $('#passportdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
                    $('#passportdate').addClass('er');
                    $('#passportdate').parent().removeClass('ex-success').addClass('ex-error');
                    $('#passportdate').attr('placeholder',"Возраст должен быть от 18 до 100 лет");
                    $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display','inline-block');
                    $('#passportdate').parent($('#passportdate')).find('.help-block2').text("Возраст должен быть от 18 до 100 лет");
                    return;
                }
            } 
            $(this).parent($(this)).find('.help-block2').css('display','none'); 
            $(this).parent($(this)).find('.help-block2').text(evt.currentTarget.dataset.validationErrorMsg);
        $(this).parent().parent().prev().removeClass('label_er').addClass('label_true');
        $(this).removeClass('er');
        $('#' + this.id + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
    } else {
        $(this).parent().parent().prev().addClass('label_er').removeClass('label_true');
        $('#' + this.id + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        $(this).addClass('er');

        if (this.name !== 'f' && this.name !== 'i' && this.name !== 'o') {
            $(this).attr('placeholder', evt.currentTarget.dataset.validationErrorMsg);
        }
        $(this).parent($(this)).find('.help-block2').text(evt.currentTarget.dataset.validationErrorMsg);
            $(this).parent($(this)).find('.help-block2').css('display','inline-block');
    }
});
$('#phone').blur(function () {
    $('#phonestatus').html('');
    $.ajax({
        type: 'POST',
        url: '/validate/phone/',
        data: 'phone=' + $('#phone').val(),
        success: function (data) {
            validator = JSON.parse(data);
            if (validator.status) {
                //console.log(validator.operator);
                $('#phonestatus').removeClass('glyphicon-remove').removeClass(
                    'glyphicon-ok');
                $('#phonestatus').html('<img src="/templates/common/img/mobile/' +
                    validator.operator + '.png" width="24px" />');
                $('#phonestatus').parent().parent().removeClass('has-error').addClass(
                    'has-success');
                if (validator.operator == 'undefined') {
                    $('#phonestatus').html('');
                    $('#phonestatus').removeClass('glyphicon-remove').addClass(
                        'glyphicon-ok');
                }
            } else {
                //console.log('error');
                $('#phonestatus').html('');
                $('#phonestatus').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                $('#phonestatus').parent().parent().removeClass('has-success').addClass(
                    'has-error');
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
                $('#birthplace').focus();
            }
        }
    });
});
$(document).ready(function () {

    var lang = 0;
    $('#f, #i, #o, #passport_who, #birthplace, #city, #reg_city, #street, #reg_street, #work_occupation, #work_experience, #work_region, #work_city, #work_street, #feedback-name').on('keyup keypress', function (e) {
        if ($(this).val().match(/([a-zA-Z]+)/)) {
            lang++;
            var input = $(this),
                text = input.val().replace(/[^а-яёА-ЯЁ0-9-_\s]/g, "");
            input.val(text);
            if (lang == 1) {
                $(this).parent().addClass('has-error');
                $(this).after(
                    '<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">RU</span></span>'
                );
            }
        } else {
            lang = 0;
            $(this).parent().removeClass('has-error');
            $(this).next("span").text(' ');
        }
    });
    $('#email').on('keyup keypress', function (e) {
        if ($(this).val().match(/([а-яёА-ЯЁ]+)/)) {
            lang++;
            $(this).val('');
            if (lang == 1) {
                $(this).parent().addClass('has-error');
                $(this).after(
                    '<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>'
                );
            }
        } else {
            lang = 0;
            $(this).parent().removeClass('has-error');
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
    function setcookies() {
        $('.ec').each(function () {
            var variant = $(this).attr('name');
            var value = $(this).val();
            if ($(this).context.tagName == 'INPUT') {
                if ($(this).context.type == 'radio') {
                    if ($(this).prop('checked')) setcookie(variant, value);
                } else setcookie(variant, value);
            } else setcookie(variant, value);
        });
        setcookie('lk', '1');
    }

    $('#next').click(function () {
        if (validate1()) {
            // send_form();
            // $('#step2').removeClass('off');
            // $('.spec_footer4').css('visibility', 'hidden');
            // $('.spec_footer5').css('visibility', 'hidden');
            // $('.form-steps-green-line').addClass('step2');
            // $('.form-steps-line').show();
            // $('#form-steps a[href="#form2"]').tab('show');
            // $('html, body').animate({
            //     scrollTop: $('#form-steps').offset().top
            // }, 1000);
            // markTarget('form-step-1');
            $('input[name="step"]').val('3');
            $('#form-modal').show();
            send_form(true, '/lk');
            markTarget('form-step-3');
            window.location = '/lk';
        }
        showBzzz = false;
        $('.reg_same').change();
        setcookie('amount', $('#amount2').val());
        setcookie('i', $('#i').val());
        setcookies();
        $('select[name="reg_type"]').change();
    });

    $('#next2').click(function () {
        if (validate2()) {
            $('input[name="step"]').val('2');
            send_form();
            $('#step3').removeClass('off');
            $('.form-steps-green-line').addClass('step3');
            $('.form-steps-line').show();
            $('#form-steps a[href="#form3"]').tab('show');
            $('html, body').animate({
                scrollTop: $('#form-steps').offset().top
            }, 1000);
            markTarget('form-step-2');
        }
        showBzzz = false;
        setcookies();
    });

    $('#form-send').click(function () {
        $('#form-send').html(
            'Обработка заявки <span class="glyphicon glyphicon-refresh glyphicon-spin"></span>'
        );
        if (validate()) {
            $('input[name="step"]').val('3');
            $('#form-modal').show();
            send_form(true, '/lk');
            markTarget('form-step-3');
            window.location = '/lk';
        } else {
            $('#form-send').html('Отправить заявку');
        }
        showBzzz = false;
        setcookies();
    });
    $('.reg_same').change(function () {
        if ($('.reg_same:checked').val() == '1' || $('select[name="reg_type"]').val() == '0') {
            $('#reg_address').prop('disabled', true);
            $('#reg_address').hide();
        } else {
            $('#reg_address').prop('disabled', false);
            $('#reg_address').show();
        }
    }).change();

    $('#street').blur(function () {
        $('#reg_street').val($('#street').val());
    });
    $('#building').blur(function () {
        $('#reg_building').val($('#building').val());
    });
    $('#flat').blur(function () {
        $('#reg_flat').val($('#flat').val());
    });
    $('#passport').blur(function () {
        var pass = $('#passport').val().split(' ');
        $('#passport-s').val(pass[0]);
        $('#passport-n').val(pass[1]);
    });
    var isMobile = false; //initiate as false
    // device detection
    if (
        /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
        .test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test(navigator.userAgent.substr(0, 4))) isMobile = true;
    if (isMobile) { 
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