<?php
    require 'header.php';
?>
<style>
#ya-rtb{display: none;}
</style>
     <div class="container new_style hidden-sm hidden-xs" id="confirm1">
        <div class="row">            
            <div class="col-md-3 text-left arrow-down">
                <br/>
                <img src="/templates/rublimo/img/man.png" alt="rublimo.ru" id="confirm2"> 
            </div>
            <div class="col-md-8 col-md-offset-1 text-left arrow-down" id="confirm3">
                <h3 id="confirm4"><b>Уважаемый <span id="io">Валентин Сергеевич</span>!</b></h3>
                <p id="confirm5">Благодарим Вас за регистрацию на нашем сервисе.<p>                    
                <br/>
                <p id="confirm6">Получите займ после подтверждения почты, для этого вам было отправлено письмо на электронный адрес <span id="e">name@mail.ru</span></p>
                <br/><br/><br/>
                <a href="" target="_blank" class="btn btn-xl btn-success" id="email_confirm"> Подтвердить почту </a>
                <a href="/lk" class="btn btn-default" id="email_later"> Позже </a>
                <br/><br/>
				<p id="confirm7">Если письмо не пришло, то посмотрите его в папке спам и нажмите кнопку «не спам»</p>
            </div>
        </div>
     </div>

    <div class="container new_style hidden-md visible-sm visible-xs" id="confirm8">
        <div class="row">            
            <div class="col-md-12 text-center arrow-down" id="confirm3">
                <h3 id="confirm9"><b>Уважаемый <span id="io2">Валентин Сергеевич</span>!</b></h3>
                <p id="confirm10">Благодарим Вас за регистрацию на нашем сервисе.<p>
                <p id="confirm11">Получите займ после подтверждения почты, для этого вам было отправлено письмо на электронный адрес <span id="e2">name@mail.ru</span></p>
                <a href="" target="_blank" class="btn btn-xl btn-success" id="email_confirm2"> Подтвердить почту </a>
                <a href="/lk" class="btn btn-default" id="email_later"> Позже </a>
                <br/>
				<p id="confirm7">Если письмо не пришло, то посмотрите его в папке спам и нажмите кнопку «не спам»</p>
            </div>
        </div>
    </div>
<script>
$(document).ready(function(){
    if (getcookie('i')){
        var i = getcookie('i');
        var o = getcookie('o');
        var e = getcookie('email');
        $('#io').text(i+' '+o);
        $('#io2').text(i+' '+o);
        $('#e').text(e);
        $('#e2').text(e);
        var ee = e.split('@');
            if(isMobile){
                switch (ee[1]) {
                    case 'yandex.ru':eename = 'https://mail.yandex.ru/touch-node/';break;
                    case 'mail.ru':eename = 'https://touch.mail.ru/messages/#msglist';break;
                    case 'list.ru':eename = 'https://touch.mail.ru/messages/#msglist';break;
                    case 'inbox.ru':eename = 'https://touch.mail.ru/messages/#msglist';break;
                    case 'bk.ru':eename = 'https://touch.mail.ru/messages/#msglist';break;           
                    case 'gmail.com':eename = 'https://mail.google.com';break;
                    default: eename = 'https://'+ee[1];
                }
            }else{
                switch (ee[1]) {
                    case 'yandex.ru':eename = 'https://mail.yandex.ru';break;
                    case 'mail.ru':eename = 'https://e.mail.ru/messages/inbox/';break;
                    case 'list.ru':eename = 'https://e.mail.ru/messages/inbox/';break;
                    case 'inbox.ru':eename = 'https://e.mail.ru/messages/inbox/';break;
                    case 'bk.ru':eename = 'https://e.mail.ru/messages/inbox/';break;           
                    case 'gmail.com':eename = 'https://mail.google.com';break;
                    default: eename = 'https://'+ee[1];
                }
            }        
        $("#email_confirm").attr("href",eename);
        $("#email_confirm2").attr("href",eename);
    } 
});
</script>
<!-- Google Code for  
&#1056;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1072;&#1094;&#1080;&#1103;  
Conversion Page -->
<script >
/* <![CDATA[ */
var google_conversion_id = 854183902;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "HGSECLCjsnMQ3p-nlwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script   
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="googleadservices.com"  
src="//www.googleadservices.com/pagead/conversion/854183902/?label=HGSECLCjsnMQ3p-nlwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
Page -->
<script >
/* <![CDATA[ */
var google_conversion_id = 832752826;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "2ehdCJqw9nUQupmLjQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script   
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="googleadservices.com"  
src="//www.googleadservices.com/pagead/conversion/832752826/?label=2ehdCJqw9nUQupmLjQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for  
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1080; Conversion  
Page -->
<script >
/* <![CDATA[ */
var google_conversion_id = 841045015;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "eJmwCJan2HMQl6iFkQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script   
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="googleadservices.com"  
src="//www.googleadservices.com/pagead/conversion/841045015/?label=eJmwCJan2HMQl6iFkQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php require 'footer.php'; ?>