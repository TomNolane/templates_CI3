function Loading(e){"undefined"==typeof e?($("#feedback-send").prop("disabled",!1),$("#feedback-send").html('Отправляется <i class="fa fa-spinner fa-spin fa-pulse"></i>')):e||($("#feedback-send").html("Отправлено"),$("#feedback-send").prop("disabled",!0))}$("#feedback-send").click(function(){var e=/^[а-яА-Яё,\W\.\s-]+$/i;if($("#feedback-name").val().length<2||!e.test($("#feedback-name").val()))return void alert("Корректно заполните Ваше имя");var a=/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;if($("#feedback-email").val().length<6||!a.test($("#feedback-email").val()))return void alert("Корректно заполните Ваш email");if($("#feedback-comment").val().length<4)return void alert("Корректно заполните Ваше обращение");if(Loading(),!re_email.test($("#feedback-email").val()))return Loading(0),alert('Пожалуйста, заполните поле "ваш емаил" корректно.'),$("#feedback-send").prop("disabled",!1),void $("#feedback-send").html("Отправить");var n={name:$("#feedback-name").val(),phone:$("#feedback-phone").val(),email:$("#feedback-email").val(),comment:$("#feedback-comment").val()};"undefined"!=typeof n.phone&&""!=n.phone&&"undefined"!=typeof n.email&&""!=n.email&&"undefined"!=typeof n.comment&&""!=n.comment?$.ajax({url:"/feedback/",type:"POST",dataType:"json",data:n}).done(function(e){null!=e?"undefined"!=typeof e.error?alert("Ошибка. "+e.error):($("#feedbackModal").modal("hide"),Loading(0),alert("Заявка отправлена. Мы ответим вам в ближайшее время.")):alert("Не получилось отправить. Попробуйте ещё раз.")}).fail(function(e,a,n){alert("Не получилось отправить. Попробуйте ещё раз.")}).always(function(){Loading(0)}):(Loading(0),alert("Пожалуйста, заполните все поля."))});