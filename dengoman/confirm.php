<?php
    require 'header.php';
?>
<style>
    #ya-rtb{display: none;} 
</style>
<section style="background: #78379d url(img/bg.png) repeat-x top center;">
   <div class="row">    
     <div class="container new_style hidden-sm hidden-xs" style="width: 100%; margin-top: 150px;">
        <div class="row">            
            <div class="col-md-3 text-left arrow-down hidden-sm hidden-xs">
                <br/>
                <img src="/templates/dengoman/img/man.png" style="max-height: 400px;">
            </div>
            <div class="col-md-8 col-md-offset-1 text-left arrow-down" style="color: #000; font-weight:bold;">
                <h3 style="font-size: 32px; color: #fff;"><b>Уважаемый <span id="io">Валентин Сергеевич</span>!</b></h3>
                <p style="font-size: 18px; color: #fff;">Благодарим Вас за регистрацию на нашем сервисе.<p>
                
                <br/><br/>
                <p style="font-size: 22px; color: #fff;">Получите займ после подтверждения почты, для этого вам было отправлено письмо на электронный адрес <span id="e">ssdf@dfsdf.df</span><p>
                <br/><br/><br/><br/>
                <a href="" target="_blank" class="btn btn-xl btn-success" id="email_confirm" style="margin: 0px; padding: 3px 25px; font-size: 16px; height: 55px;"> Подтвердить почту </a>
                <a href="/lk" class="btn btn-default" style="margin: 0px;  padding: 0 20px;" style="font-size: 20px; color: #ccc;"> Позже </a>
                <br/><br/>
				<p style="font-size: 12px; color: #ffffff">Если письмо не пришло, то посмотрите его в папке спам и нажмите кнопку «не спам»</p>
            </div>
        </div>
     </div>
    <div class="container new_style hidden-md visible-sm visible-xs" style="width: 100%; margin-top: 50px; margin-bottom: -10px;  min-height: 100%;">
        <div class="row">            
            <div class="col-md-12 text-center arrow-down" style="color: #000; font-weight:bold;">
                <h3 style="font-size: 30px; color: #fff;"><b>Уважаемый <span id="io2">Валентин Сергеевич</span>!</b></h3>
                <br/>
                <p style="font-size: 16px; color: #ccc">Благодарим Вас за регистрацию на нашем сервисе.<p>
                <br/>
                <p style="font-size: 20px; color: #fff;">Получите займ после подтверждения почты, для этого вам было отправлено письмо на электронный адрес <span id="e2">ssdf@dfsdf.df</span></p>
                <br/><br/>
                <a href="" target="_blank" class="btn btn-xl btn-success" id="email_confirm2"> Подтвердить почту </a>
                <a href="/lk" class="btn btn-default" id="email_later"> Позже </a>
                <br/>
				<p style="font-size: 12px; color: #ffffff">Если письмо не пришло, то посмотрите его в папке спам и нажмите кнопку «не спам»</p>
            </div>
        </div>
    </div>
    
</section>    
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
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/854183902/?label=HGSECLCjsnMQ3p-nlwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
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
&#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
Page -->
<script >
/* <![CDATA[ */
var google_conversion_id = 841044814;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "NCuSCOvs6nMQzqaFkQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script   
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/841044814/?label=NCuSCOvs6nMQzqaFkQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
 </div>
<?php require 'footer.php'; ?>