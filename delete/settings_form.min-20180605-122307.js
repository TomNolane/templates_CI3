function addDate(e){var a=new Date,t=new Date(a.getFullYear()-e,a.getMonth(),a.getDate(),a.getHours(),a.getMinutes(),a.getSeconds());return t}function addDate2(e,a,t){var s=new Date,r=new Date(t,a-1,e,s.getHours(),s.getMinutes(),s.getSeconds());return r}function CheckTime(){var e=addDate2($("#birthdate").val().split("/")[0],$("#birthdate").val().split("/")[1],$("#birthdate").val().split("/")[2]).getTime(),a=addDate(18).getTime(),t=addDate(70).getTime(),s=e<=a&&e>=t;return s?($("#birthdate").parent($("#birthdate")).find(".help-block2").css("display","none"),$("#birthdate").parent().parent().prev().removeClass("label_er").addClass("label_true"),$("#birthdate").removeClass("er"),$("#birthdate").parent().removeClass("has-error").addClass("has-success"),$("#birthdatestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"),!0):($("#birthdate").parent().parent().prev().addClass("label_er").removeClass("label_true"),$("#birthdate").addClass("er"),$("#birthdate").parent().removeClass("has-success").addClass("has-error"),$("#birthdate").attr("placeholder","Возраст должен быть от 18 до 70 лет"),$("#birthdate").parent($("#birthdate")).find(".help-block2").css("display","inline-block"),$("#birthdate").parent($("#birthdate")).find(".help-block2").text("Возраст должен быть от 18 до 70 лет"),!1)}function CheckTime2(){var e=addDate2($("#passportdate").val().split("/")[0],$("#passportdate").val().split("/")[1],$("#passportdate").val().split("/")[2]).getTime(),a=addDate(0).getTime(),t=addDate(100).getTime(),s=e<=a&&e>=t;if(s){$("#passportdate").parent($("#passportdate")).find(".help-block2").css("display","none"),$("#passportdate").parent().parent().prev().removeClass("label_er").addClass("label_true"),$("#passportdate").removeClass("er"),$("#passportdate").parent().removeClass("has-error").addClass("has-success"),$("#passportdatestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");var r=$("#passportdate").val().split("/");return $("select#passport_dd").append($("<option></option>").attr("value",r[0]).text(r[0])),$("select#passport_dd").val(r[0]),$("select#passport_mm").append($("<option></option>").attr("value",r[1]).text(r[1])),$("select#passport_mm").val(r[1]),$("select#passport_yyyy").append($("<option></option>").attr("value",r[2]).text(r[2])),$("select#passport_yyyy").val(r[2]),!0}return $("#passportdate").parent().parent().prev().addClass("label_er").removeClass("label_true"),$("#passportdate").addClass("er"),$("#passportdate").parent().removeClass("has-success").addClass("has-error"),$("#passportdate").attr("placeholder","Возраст должен быть от 18 до 100 лет"),$("#passportdate").parent($("#passportdate")).find(".help-block2").css("display","inline-block"),$("#passportdate").parent($("#passportdate")).find(".help-block2").text("Возраст должен быть от 18 до 100 лет"),!1}function error(e,a){a.click(),a.blur(),a.parent(a).find(".help-block2").css("display","inline-block")}function send_form(e,a){e="undefined"==typeof e?"":"send=true&",$.getJSON("/addnew/?"+e+$("form#anketa").serialize()).done(function(e){"undefined"!=typeof e.result&&"OK"==e.result&&("undefined"!=typeof e.id&&$('form#anketa input[name="id"]').val(e.id),"undefined"!=typeof e.redirect&&e.redirect&&"undefined"!=typeof window.obUnloader&&window.obUnloader.resetUnload())})}function validate(){return!!isWebvisor||!!validate1()&&(!!validate2()&&(!!validate3()&&($('input[name="step"]').val("3"),"undefined"!=typeof window.obUnloader&&window.obUnloader.resetUnload(),!0)))}function validate1(){return!!isWebvisor||($('input[name="amount"]').val()<1e3||$('input[name="amount"]').val()>1e5?(error("Вы не указали сумму.",$('input[name="amount"]')),!1):$('input[name="period"]').val()<5||$('input[name="period"]').val()>30?(error("Вы не указали срок займа.",$('input[name="period"]')),!1):$('input[name="i"]').val().length<2||!re_name.test($('input[name="i"]').val())?(error("Необходимо указать имя.",$('input[name="i"]')),!1):16!=$('input[name="phone"]').val().length?(error("Номер телефона указан неверно.",$('input[name="phone"]')),!1):$('input[name="email"]').val().length<7||!re_email.test($('input[name="email"]').val())?(error("Email указан неверно.",$('input[name="email"]')),!1):!!$("#agree").prop("checked")||(error("Вы не подтвердили своё согласие с условиями сервиса.",$("#agree")),!1))}function validate2(){return!!isWebvisor||($('input[name="passport"]').val().length<11?(error("Вы не указали номер и серию паспорта.",$('input[name="passport"]')),!1):$('input[name="passport_who"]').val().length<3?(error("Необходимо указать, кем выдан паспорт.",$('input[name="passport_who"]')),!1):$('input[name="passport_code"]').val().length<7?(error("Необходимо указать, код подразделения, выдавшего паспорт.",$('input[name="passport_code"]')),!1):CheckTime2()?$('input[name="birthplace"]').val().length<3?(error("Необходимо указать место рождения.",$('input[name="birthplace"]')),!1):$("#region").val().length<2||!re_rc.test($("#region").val())?(error("Необходимо указать регион проживания.",$("#region")),!1):$('input[name="city"]').val().length<2||!re_rc.test($('input[name="city"]').val())?(error("<p>Ошибка в указании населённого пункта места жительства.</p><p>Данное поле может содержать только русские символы, символы пробела, запятую, точку или тире.</p>",$('input[name="city"]')),!1):$('input[name="street"]').val().length<2?(error("Необходимо указать улицу места жительства.",$('input[name="street"]')),!1):$('input[name="building"]').val().length&&re.test($('input[name="building"]').val())?$('input[name="housing"]').val().length&&!re.test($('input[name="housing"]').val())?(error("Ошибочно указан номер строения места жительства. Указывайте только номер дома и литеру, если она есть.",$('input[name="housing"]')),!1):$('input[name="flat"]').val().length&&!re.test($('input[name="flat"]').val())?(error("Ошибочно указан номер квартиры места жительства. Указывайте только номер дома и литеру, если она есть.",$('input[name="flat"]')),!1):!("0"==$(".reg_same:checked").val()&&($("#reg_region").val().length<2||!re_rc.test($("#reg_region").val())))||(error("Вы не указали регион регистрации.",$(".reg_same:checked")),!1):(error("Ошибочно указан номер дома места жительства. Указывайте только номер дома и литеру, если она есть.",$('input[name="building"]')),!1):(error("Возраст должен быть от 18 до 70 лет",$('input[name="passportdate"]')),!1))}function validate3(){return!!isWebvisor||(re_int.test($('input[name="work_experience"]').val())?re_int.test($('input[name="work_salary"]').val())?$('input[name="work_name"]').val().length<2?(error("Вы не указали название места работы.",$('input[name="work_name"]')),!1):$('input[name="work_occupation"]').val().length<2?(error("Вы не указали вашу должность.",$('input[name="work_occupation"]')),!1):"0"==$('input[name="work_region"]').val()?(error("Вы не указали регион работы.",$('input[name="work_region"]')),!1):$('input[name="work_city"]').val().length<2?(error("Необходимо указать город работы.",$('input[name="work_city"]')),!1):$('input[name="work_street"]').val().length<2?(error("Необходимо указать улицу работы.",$('input[name="work_street"]')),!1):!!re.test($('input[name="work_house"]').val())||(error("Ошибочно указан номер дома работы. Указывайте только номер дома и литеру, если она есть.",$('input[name="work_house"]')),!1):(error("Вы не указали доход.",$('input[name="work_salary"]')),!1):(error("Вы не указали стаж работы.",$('input[name="work_experience"]')),!1))}var re=/^[а-яА-Я0-9\/]+$/i,re_rc=/^[а-яА-Яё,\W\.\s-]+$/i,re_email=/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i,re_int=/^\d+$/,re_name=/^[а-яА-Яё,\W\.\s-]+$/i,isWebvisor=new RegExp("^https?://([^/]+metrika.yandex.(ru|ua|com|com.tr|by|kz)|([^/]+.)?webvisor.com)").test(document.referrer);$(document).ready(function(){function e(e,t,s){var r={};r.$surname=e,r.$name=t,r.$patronymic=s;var n=["SURNAME","NAME","PATRONYMIC"];$.each([e,t,s],function(e,t){t.suggestions({serviceUrl:"https://suggestions.dadata.ru/suggestions/api/4_1/rs",token:"78fc76023580df0ec78566913b31a87d909f1ec0",type:"NAME",triggerSelectOnSpace:!1,hint:"",noCache:!0,scrollOnFocus:!1,minChars:2,addon:"none",params:{parts:[n[e]]},onSearchStart:function(e){var t=$(this),s=0;e.gender=a.call(r,t)?r.gender:"UNKNOWN",s="MALE"==e.gender?1:0,$("#gender").val(s)},onSelect:function(e){r.gender=e.data.gender,"MALE"==r.gender?$gender=1:$gender=0,$("#gender").val($gender)}})})}function a(e){var a=this,t=a.$surname.val(),s=a.$name.val(),r=a.$patronymic.val();return!(e.attr("id")==a.$surname.attr("id")&&!s&&!r||e.attr("id")==a.$name.attr("id")&&!t&&!r||e.attr("id")==a.$patronymic.attr("id")&&!t&&!s)}function t(e){var a={};a.$name=e;var t=["NAME"];$.each([e],function(e,a){a.suggestions({serviceUrl:"https://suggestions.dadata.ru/suggestions/api/4_1/rs",token:"78fc76023580df0ec78566913b31a87d909f1ec0",type:"NAME",triggerSelectOnSpace:!1,hint:"",noCache:!0,scrollOnFocus:!1,minChars:2,addon:"none",params:{parts:[t[e]]}})})}checkMe(),$("#ex-slider-val").text(getcookie("sldr")),$("#amount").val(getcookie("sldr")),$("#period").val(getcookie("per")),$.mask.definitions["*"]="[а-яёА-ЯЁA-Za-z0-9/-_]",$('[data-toggle="popover"]').popover(),$("input#phone").mask("8 (9nn) nnn nnnn",{placeholder:"8 (9__) ___ ____"}),$("input#feedback-phone").mask("8 (9nn) nnn nnnn",{placeholder:"8 (9__) ___ ____"}),$("input#work_phone").mask("8 (9nn) nnn nnnn",{placeholder:"8 (9__) ___ ____"}),$("input#passport").mask("nnnn nnnnnn",{placeholder:"____ ______"}),$("#passport_code").mask("nnn-nnn",{placeholder:"___-___"}),$("input#birthdate").mask("nn/nn/nnnn",{placeholder:"__/__/__"}),$("input#passportdate").mask("nn/nn/nnnn",{placeholder:"__/__/__"}),$("input#work_salary").mask("nnnn?nn",{placeholder:""}),$("input#work_experience").mask("n?nn",{placeholder:""}),$("input#flat").mask("n?***",{placeholder:""}),$("input#building").mask("n?***",{placeholder:""}),$("input#work_house").mask("n?***",{placeholder:""}),e($("#f"),$("#i"),$("#o")),t($("#feedback-name")),$("#email").suggestions({serviceUrl:"https://suggestions.dadata.ru/suggestions/api/4_1/rs",token:"78fc76023580df0ec78566913b31a87d909f1ec0",type:"EMAIL",count:3,addon:"none",scrollOnFocus:!1}),$("#feedback-email").suggestions({serviceUrl:"https://suggestions.dadata.ru/suggestions/api/4_1/rs",token:"78fc76023580df0ec78566913b31a87d909f1ec0",type:"EMAIL",count:3,addon:"none",scrollOnFocus:!1}),$.validate({lang:"ru",modules:"date,sanitize"}),$("input").click(function(){"checkbox"!=$(this).attr("type")&&"feedback-email"!=$(this).attr("id")&&"feedback-phone"!=$(this).attr("id")&&"feedback-name"!=$(this).attr("id")&&"feedback-email2"!=$(this).attr("id")&&"feedback-phone2"!=$(this).attr("id")&&"feedback-name2"!=$(this).attr("id")&&$("html, body").animate({scrollTop:$(this).offset().top-100},1e3)}),$("input").on("validation",function(e,a){if(a){if("birthdate"==this.name){var t=addDate2($("#birthdate").val().split("/")[0],$("#birthdate").val().split("/")[1],$("#birthdate").val().split("/")[2]).getTime(),s=addDate(18).getTime(),r=addDate(70).getTime(),n=t<=s&&t>=r;return n?($("#birthdate").parent($("#birthdate")).find(".help-block2").css("display","none"),$("#birthdate").parent().parent().prev().removeClass("label_er").addClass("label_true"),$("#birthdate").removeClass("er"),$("#birthdate").parent().removeClass("has-error").addClass("has-success"),void $("#birthdatestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok")):($("#birthdate").parent().parent().prev().addClass("label_er").removeClass("label_true"),$("#birthdate").addClass("er"),$("#birthdate").parent().removeClass("has-success").addClass("has-error"),$("#birthdate").attr("placeholder","Возраст должен быть от 18 до 70 лет"),$("#birthdate").parent($("#birthdate")).find(".help-block2").css("display","inline-block"),void $("#birthdate").parent($("#birthdate")).find(".help-block2").text("Возраст должен быть от 18 до 70 лет"))}if("passportdate"==this.name){var t=addDate2($("#passportdate").val().split("/")[0],$("#passportdate").val().split("/")[1],$("#passportdate").val().split("/")[2]).getTime(),s=addDate(0).getTime(),r=addDate(100).getTime(),n=t<=s&&t>=r;return n?($("#passportdate").parent($("#passportdate")).find(".help-block2").css("display","none"),$("#passportdate").parent().parent().prev().removeClass("label_er").addClass("label_true"),$("#passportdate").removeClass("er"),$("#passportdate").parent().removeClass("has-error").addClass("has-success"),void $("#passportdatestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok")):($("#passportdate").parent().parent().prev().addClass("label_er").removeClass("label_true"),$("#passportdate").addClass("er"),$("#passportdate").parent().removeClass("has-success").addClass("has-error"),$("#passportdate").attr("placeholder","Возраст должен быть от 18 до 100 лет"),$("#passportdate").parent($("#passportdate")).find(".help-block2").css("display","inline-block"),void $("#passportdate").parent($("#passportdate")).find(".help-block2").text("Возраст должен быть от 18 до 100 лет"))}$(this).parent().parent().prev().removeClass("label_er").addClass("label_true"),$(this).removeClass("er"),$("#"+this.id+"status").removeClass("glyphicon-remove").addClass("glyphicon-ok"),$(this).parent($(this)).find(".help-block2").css("display","none"),$(this).parent($(this)).find(".help-block2").text(e.currentTarget.dataset.validationErrorMsg)}else $(this).parent().parent().prev().addClass("label_er").removeClass("label_true"),$("#"+this.id+"status").removeClass("glyphicon-ok").addClass("glyphicon-remove"),$(this).addClass("er"),"f"!==this.name&&"i"!==this.name&&"o"!==this.name&&$(this).attr("placeholder",e.currentTarget.dataset.validationErrorMsg),"phone"==this.name&&$("#spec_form2").removeClass("label_true").addClass("label_er"),$(this).parent($(this)).find(".help-block2").text(e.currentTarget.dataset.validationErrorMsg),$(this).parent($(this)).find(".help-block2").css("display","inline-block")}),$("#phone").blur(function(){$.ajax({type:"POST",url:"/validate/phone/",data:"phone="+$("#phone").val(),success:function(e){validator=JSON.parse(e),validator.status?($("#phonestatus").removeClass("glyphicon-remove").removeClass("glyphicon-ok"),$("#phonestatus").html('<img src="/templates/common/img/mobile/'+validator.operator+'.png" width="24px" />'),$("#phonestatus").parent().parent().removeClass("has-error").addClass("has-success"),"undefined"==validator.operator&&($("#phonestatus").html(""),$("#phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"))):($("#phonestatus").html(""),$("#phonestatus").removeClass("glyphicon-ok").addClass("glyphicon-remove"),$("#phonestatus").parent().parent().removeClass("has-success").addClass("has-error"))}})}),$("#work_phone").blur(function(){$.ajax({type:"POST",url:"/validate/phone/",data:"phone="+$("#work_phone").val(),success:function(e){validator=JSON.parse(e),validator.status?($("#work_phonestatus").removeClass("glyphicon-remove").removeClass("glyphicon-ok"),$("#work_phonestatus").html('<img src="/templates/common/img/mobile/'+validator.operator+'.png" width="24px" />'),$("#work_phonestatus").parent().parent().removeClass("has-error").addClass("has-success"),"undefined"==validator.operator&&($("#work_phonestatus").html(""),$("#work_phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"))):($("#work_phonestatus").html(""),$("#work_phonestatus").removeClass("glyphicon-ok").addClass("glyphicon-remove"),$("#work_phonestatus").parent().parent().removeClass("has-success").addClass("has-error"))}})}),$("#passport_code").blur(function(){$.ajax({type:"POST",url:"/validate/passport_code/",data:"passport_code="+$("#passport_code").val(),success:function(e){validator=JSON.parse(e),validator.status&&($("#passport_who").val(validator.who),$("#birthplace").focus())}})});var s=0;$("#f, #i, #o, #passport_who, #birthplace, #city, #reg_city, #street, #reg_street, #work_occupation, #work_experience, #work_region, #work_city, #work_street, #feedback-name").on("keyup keypress",function(e){if($(this).val().match(/([a-zA-Z]+)/)){s++;var a=$(this),t=a.val().replace(/[^а-яёА-ЯЁ0-9-_\s]/g,"");a.val(t),1==s&&($(this).parent().addClass("has-error"),$(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">RU</span></span>'))}else s=0,$(this).parent().removeClass("has-error"),$(this).next("span").text(" ")}),$("#email").on("keyup keypress",function(e){$(this).val().match(/([а-яёА-ЯЁ]+)/)?(s++,$(this).val(""),1==s&&($(this).parent().addClass("has-error"),$(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>'))):(s=0,$(this).parent().removeClass("has-error"),$(this).next("span").text(" "))}),$("#feedback-email").on("keyup keypress",function(e){$(this).val().match(/([а-яёА-ЯЁ]+)/)?(s++,$(this).val(""),1==s&&($(this).parent().addClass("has-error"),$(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>'))):(s=0,$(this).parent().removeClass("has-error"),$(this).next("span").text(" "))}),$("#next1").click(function(){validate1()&&($('input[name="step"]').val("3"),setcookies(),send_form(!0,"/lk"),markTarget("form-step-3"),$("#anketa").submit(),window.location="/lk"),showBzzz=!1,$(".reg_same").change(),setcookies(),$('select[name="reg_type"]').change()}),$("#next2").click(function(){validate2()&&($('input[name="step"]').val("2"),send_form(),$(".ex-indicator-scope").removeClass("ex-on-second-step").addClass("ex-on-last-step"),$("#secondTabContent").removeClass("in active"),$("#lastTabContent").addClass("in active"),$("html, body").animate({scrollTop:$("#to_scroll").offset().top},1e3),markTarget("form-step-2")),showBzzz=!1,setcookies()}),$("#getmoney").click(function(){validate()&&($('input[name="step"]').val("3"),setcookies(),send_form(!0,"/lk"),markTarget("form-step-3"),$("#anketa").submit(),window.location="/lk"),showBzzz=!1,setcookies()}),$('select[name="reg_type"]').change(function(){"0"==$(this).val()?($('.reg_same[value="1"]').prop("checked",!0),$("#reg_same").hide(),$("#reg_address").hide(),$("#reg_address").prop("disabled",!0)):$("#reg_same").show()}).change(),$(".reg_same").change(function(){"1"==$(".reg_same:checked").val()||"0"==$('select[name="reg_type"]').val()?($("#reg_address").prop("disabled",!0),$("#reg_address").hide()):($("#reg_address").prop("disabled",!1),$("#reg_address").show())}).change(),$("#passport").blur(function(){var e=$("#passport").val().split(" ");$("#passport-s").val(e[0]),$("#passport-n").val(e[1])});var r=!1;(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))&&(r=!0),r?$("#display").val(1):$(".tip").poshytip({className:"tip-twitter",showTimeout:100,alignTo:"target",alignX:"right",alignY:"center",offsetX:5,allowTipHover:!1,fade:!1,slide:!1})});