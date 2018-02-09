var JSdate = new Date();
var current_date = JSdate.getDate();
var current_month = JSdate.getMonth() + 1;
var current_year = JSdate.getFullYear();
var current_year_5 = JSdate.getFullYear() - 5;
var current_year_18 = JSdate.getFullYear() - 18;
var current_year_70 = JSdate.getFullYear() - 70;
var current_year_100 = JSdate.getFullYear() - 100;
var today_18  = current_date + "/" + current_month + "/" + current_year_18;
var today_70  = current_date + "/" + current_month + "/" + current_year_70;
var today_100  = current_date + "/" + current_month + "/" + current_year_100;
var today  = current_date + "/" + current_month + "/" + current_year;
var today_5  = current_date + "/" + current_month + "/" + current_year_5;
if ($('#birthdate').attr('placeholder')) { 
        $('#birthdate').pickmeup_twitter_bootstrap(
            pickmeup.defaults.locales['en'] = {
                days: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
                daysShort: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                daysMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                monthsShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек']
            },
            pickmeup('#birthdate', {
                format	: 'd/m/Y',
                default_date : true,
                hide_on_select: true,
                date: today_18,
                min:  today_70,
                max: today_18,
                change : function (formatted_date) { 
                    if ($(this).val().indexOf("_") == -1) $('#phone').focus();
                }
            })
        );
        $('#passportdate').pickmeup_twitter_bootstrap(
            pickmeup.defaults.locales['en'] = {
                days: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
                daysShort: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                daysMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                monthsShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек']
            },
            pickmeup('#passportdate', {
                format	: 'd/m/Y',
                default_date : true,
                hide_on_select: true,
                date: today_5,
                min:  today_100,
                max: today,
                change : function (formatted_date) { 
                    var birth = formatted_date.split('/');
                    $('select#passport_dd').append($("<option></option>").attr("value", birth[0]).text(birth[0]));
                    $("select#passport_dd").val(birth[0]);
                    $('select#passport_mm').append($("<option></option>").attr("value", birth[1]).text(birth[1]));
                    $("select#passport_mm").val(birth[1]);
                    $('select#passport_yyyy').append($("<option></option>").attr("value", birth[2]).text(birth[2]));
                    $("select#passport_yyyy").val(birth[2]);
    
                    if ($(this).val().indexOf("_") == -1) 
                    $('#passport_code').focus();
                    }
            })
        ); 
    }  
else {
    
}