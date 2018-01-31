<script>
    $("#work").change(function () {
        if ($(this).val().toLowerCase() == "пенсионер" || $(this).val().toLowerCase() == "безработный") {
            $("#work_name").addClass("valid");
            $("#work_name").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_name").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_name_label").removeClass("label_er").addClass("label_true");
            $("#work_name").removeClass("er");
            $("#work_namestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_occupation").addClass("valid");
            $("#work_occupation").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_occupation").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_occupation_label").removeClass("label_er").addClass("label_true");
            $("#work_occupation").removeClass("er");
            $("#work_occupationstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_phone").addClass("valid");
            $("#work_phone").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_phone").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_phone_label").removeClass("label_er").addClass("label_true");
            $("#work_phone").removeClass("er");
            $("#work_phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_experience").addClass("valid");
            $("#work_experience").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_experience").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_experience_label").removeClass("label_er").addClass("label_true");
            $("#work_experience").removeClass("er");
            $("#work_experiencestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().addClass("ex-error").removeClass("ex-success");
            $("#work_salary").parent().prev().removeClass("label_true").addClass("label_er");
            $("#work_salary_label").removeClass("label_true").addClass("label_er");
            $("#work_salary").addClass("er");
            $("#work_salary").focus();
            $("#work_salarystatus").addClass("glyphicon-remove");
            $("#work_region").addClass("valid");
            $("#work_region").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_region").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_region_label").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_region").removeClass("er");
            $("#work_city").addClass("valid");
            $("#work_city").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_city").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_city_label").removeClass("label_er").addClass("label_true");
            $("#work_city").removeClass("er");
            $("#work_citystatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_street").addClass("valid");
            $("#work_street").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_street").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_street_label").removeClass("label_er").addClass("label_true");
            $("#work_street").removeClass("er");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_house").addClass("valid");
            $("#work_house").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_house").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_house_label").removeClass("label_er").addClass("label_true");
            $("#work_house").removeClass("er");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_office").addClass("valid");
            $("#work_office").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_office").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_office_label").removeClass("label_er").addClass("label_true");
            $("#work_office").removeClass("er");
            $("#work_officestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_building").addClass("valid");
            $("#work_building").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_building").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_building_label").removeClass("label_er").addClass("label_true");
            $("#work_building").removeClass("er");
            $("#work_buildingstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            if ($(this).val().toLowerCase() == "пенсионер")
                $("#work_name").val("пенсионер");
            else $("#work_name").val("безработный");
            if ($(this).val().toLowerCase() == "пенсионер")
                $("#work_occupation").val("пенсионер");
            else $("#work_occupation").val("безработный");
            var teemp = $("#phone").val();
            $("#work_phone").val(teemp);
            $("#work_experience").val(100);
            $("#work_salary").val("");
            var teemp2 = Number($("#region").find(":selected").index());
            $("#work_region option").eq(teemp2).prop("selected", true);
            var teemp3 = $("#city").val();
            $("#work_city").val(teemp3);
            var teemp4 = $("#street").val();
            $("#work_street").val(teemp4);
            var teemp5 = $("#building").val();
            $("#work_house").val(teemp5);
            var teemp7 = $("#building").val();
            $("#work_building").val(teemp7);
            var teemp6 = $("#flat").val();
            $("#work_office").val(teemp6);
        } else {
            $("#work_name").val("");
            $("#work_name").removeClass("valid");
            $("#work_name").parent().removeClass("ex-success");
            $("#work_name").parent().prev().removeClass("label_true");
            $("#work_name_label").removeClass("label_true");
            $("#work_namestatus").removeClass("glyphicon-ok");
            $("#work_occupation").val("");
            $("#work_occupation").removeClass("valid");
            $("#work_occupation").parent().removeClass("ex-success");
            $("#work_occupation").parent().prev().removeClass("label_true");
            $("#work_occupation_label").removeClass("label_true");
            $("#work_occupationstatus").removeClass("glyphicon-ok");
            $("#work_phone").val("");
            $("#work_phone").removeClass("valid");
            $("#work_phone").parent().removeClass("ex-success");
            $("#work_phone").parent().prev().removeClass("label_true");
            $("#work_phone_label").removeClass("label_true");
            $("#work_phonestatus").removeClass("glyphicon-ok");
            $("#work_experience").val("");
            $("#work_experience").removeClass("valid");
            $("#work_experience").parent().removeClass("ex-success");
            $("#work_experience").parent().prev().removeClass("label_true");
            $("#work_experience_label").removeClass("label_true");
            $("#work_experiencestatus").removeClass("glyphicon-ok");
            $("#work_salary").val("");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().removeClass("ex-success");
            $("#work_salary").parent().prev().removeClass("label_true");
            $("#work_salary_label").removeClass("label_true");
            $("#work_salarystatus").removeClass("glyphicon-ok");
            $("#work_region").removeClass("valid");
            $("#work_region").parent().removeClass("ex-success");
            $("#work_region").parent().prev().removeClass("label_true");
            $("#work_region_label").removeClass("label_true");
            $("#work_city").val("");
            $("#work_city").removeClass("valid");
            $("#work_city").parent().removeClass("ex-success");
            $("#work_city").parent().prev().removeClass("label_true");
            $("#work_city_label").removeClass("label_true");
            $("#work_citystatus").removeClass("glyphicon-ok");
            $("#work_street").val("");
            $("#work_street").removeClass("valid");
            $("#work_street").parent().removeClass("ex-success");
            $("#work_street").parent().prev().removeClass("label_true");
            $("#work_street_label").removeClass("label_true");
            $("#work_streetstatus").removeClass("glyphicon-ok");
            $("#work_house").val("");
            $("#work_house").removeClass("valid");
            $("#work_house").parent().removeClass("ex-success");
            $("#work_house").parent().prev().removeClass("label_true");
            $("#work_house_label").removeClass("label_true");
            $("#work_housestatus").removeClass("glyphicon-ok");
            $("#work_office").val("");
            $("#work_office").removeClass("valid");
            $("#work_office").parent().removeClass("ex-success");
            $("#work_office").parent().prev().removeClass("label_true");
            $("#work_office_label").removeClass("label_true");
            $("#work_officestatus").removeClass("glyphicon-ok");
            $("#work_building").val("");
            $("#work_building").removeClass("valid");
            $("#work_building").parent().removeClass("ex-success");
            $("#work_building").parent().prev().removeClass("label_true");
            $("#work_building_label").removeClass("label_true");
            $("#work_buildingstatus").removeClass("glyphicon-ok");
            $("#work_name").val("");
            $("#work_occupation").val("");
            $("#work_phone").val("");
            $("#work_experience").val("");
            $("#work_salary").val("");
            $("#work_region option").eq(0, true).prop("selected", true);
            $("#work_city").val("");
            $("#work_street").val("");
            $("#work_house").val("");
            $("#work_building").val("");
            $("#work_office").val("");
        }
    }); 

// $(document).ready(function () {


//     function validate1a() {
//         if (isWebvisor) return true;
//         if ($('input[name="amount"]').val() < 1000 || $('input[name="amount"]').val() > 100000) {
//             return false;
//         } else if ($('input[name="period"]').val() < 5 || $('input[name="period"]').val() > 30) {
//             return false;
//         } else if ($('input[name="f"]').val().length < 2 || !re_name.test($('input[name="f"]').val())) {
//             return false;
//         } else if ($('input[name="i"]').val().length < 2 || !re_name.test($('input[name="i"]').val())) {
//             return false;
//         } else if ($('input[name="o"]').val().length < 2 || !re_name.test($('input[name="o"]').val())) {
//             return false;
//         } else if ($('input[name="gender"]').val() != '0' && $('input[name="gender"]').val() != '1') {
//             return false;
//         } else if ($('input[name="phone"]').val().length != 16) {
//             return false;
//         } else if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())) {
//             return false;
//         } else if (!$('#agree').prop('checked')) {
//             return false;
//         } else return true;
//         return false;
//     }

//     function validate2a() {
//         if (isWebvisor) return true;
//         if ($('input[name="passport"]').val().length < 11) {
//             return false;
//         } else if ($('input[name="passport_who"]').val().length < 3) {
//             return false;
//         } else if ($('input[name="passport_code"]').val().length < 7) {
//             return false;
//         } else if ($('input[name="birthplace"]').val().length < 3) {
//             return false;
//         } else if ($('#region').val().length < 2 || !re_rc.test($('#region').val())) {
//             return false;
//         } else if ($('input[name="city"]').val().length < 2 || !re_rc.test($('input[name="city"]').val())) {
//             return false;
//         } else if ($('input[name="street"]').val().length < 2) {
//             return false;
//         } 
//         else if ($('input[name="building"]').val().length < 1 || !re.test($('input[name="building"]').val())) {
//             return false;
//         } 
//         // else if ($('input[name="housing"]').val().length && !re.test($('input[name="housing"]').val())) {
//         //     return false;
//         // } 
//         else if ($('input[name="flat"]').val().length < 1 && !re.test($('input[name="flat"]').val())) {
//             return false;
//         } else if ($('.reg_same:checked').val() == '0' && ($('#reg_region').val().length < 2 || !re_rc.test($('#reg_region').val()))) {
//             return false;
//         } else if ($('.reg_same:checked').val() == '0' && ($('input[name="reg_city"]').val().length < 2 || !re_rc.test($('input[name="reg_city"]').val()))) {
//             return false;
//         } else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_street"]').val().length < 2) {
//             return false;
//         } else if ($('.reg_same:checked').val() == '0' && !re.test($('input[name="reg_building"]').val())) {
//             return false;
//         } else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_housing"]').val().length && !re.test($('input[name="reg_housing"]').val())) {
//             return false;
//         } else if ($('.reg_same:checked').val() == '0' && $('input[name="reg_flat"]').val().length && !re.test($('input[name="reg_flat"]').val())) {
//             return false;
//         } else return true;
//         return false;
//     }

//     function validate3a() {
//         if (isWebvisor) return true;
//         if (!re_int.test($('input[name="work_experience"]').val())) {
//             return false;
//         } else if (!re_int.test($('input[name="work_salary"]').val())) {
//             return false;
//         } else if ($('input[name="work_name"]').val().length < 2) {
//             return false;
//         } else if ($('input[name="work_occupation"]').val().length < 2) {
//             return false;
//         } else if ($('input[name="work_region"]').val() == '0') {
//             return false;
//         } else if ($('input[name="work_city"]').val().length < 2) {
//             return false;
//         } else if ($('input[name="work_street"]').val().length < 2) {
//             return false;
//         } else if (!re.test($('input[name="work_house"]').val())) {
//             return false;
//         } else return true;
//         return false;
//     }

//     var start = false;
//     var handle;
//     var step = 1;

//     function Validd1() {
//         switch (step) {
//             case 1:
//                 {
//                     if (validate1a()) {
//                         $('#next1').click();
//                         step = 2;
//                     }
//                 }
//             case 2:
//                 {
//                     if (validate2a()) {
//                         $('#next2').click();
//                         step = 3;
//                     }
//                 }
//             case 3:
//                 {
//                     if (validate3a()) {
//                         $('#getmoney').click();
//                         step = 4;
//                     }
//                 }
//         }
//     }

//     function CheckInput(argum) {

//         $('html, body').animate({
//                 scrollTop: argum.offset().top - 50
//             }, 1000);

//         if (start) {
//             return;
//         }

//         start = true;

//         handle = setInterval(function () {

//             argum.validate(function (evt, valid) {
//                 if (evt) {
//                     $('#' + argum.attr('name') + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
//                     argum.parent().addClass('ex-error');

//                     if (argum.attr('id') !== 'phone') {
//                         $('#' + argum.attr('id') + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
//                         argum.parent().removeClass('ex-error');
//                     }

//                     argum.parent().removeClass('ex-error');

//                     start = false;
//                     Validd1();
//                     clearInterval(handle);
//                     argum.blur();
//                 } else {

                    





//                     $('#' + argum.attr('name') + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
//                     argum.parent().addClass('ex-error');

//                     if (argum.attr('name') !== 'f' && argum.attr('name') !== 'i' && argum.attr('name') !== 'o') {
//                         argum.attr('placeholder', argum.attr('data-validation-error-msg'));
//                     }
//                 }
//             });

//         }, 4000);
//     }

//     function CheckInput2(argum) 
//     {
//         argum.focus();
//         argum.validate(function (evt, valid) {
//             if (evt) {
//                 $('#' + argum.attr('name') + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
//                 argum.parent().addClass('ex-error');

//                 if (argum.attr('id') !== 'phone') {
//                     $('#' + argum.attr('id') + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
//                     argum.parent().removeClass('ex-error');
//                 }

//                 argum.parent().removeClass('ex-error'); 
//                 Validd1();
//             } else {
//                 $('#' + argum.attr('name') + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
//                 argum.parent().addClass('ex-error');

//                 if (argum.attr('name') !== 'f' && argum.attr('name') !== 'i' && argum.attr('name') !== 'o') {
//                     argum.attr('placeholder', argum.attr('data-validation-error-msg'));
//                 }
//             }
//         });
//     }

    // $('input').keydown(function () {
    //     CheckInput($(this));
    // });
    // $('input').blur(function () {
    //     CheckInput2($(this));
    // });
// });
</script>