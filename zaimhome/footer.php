<footer class="ex-main-footer">
    <div class="container" style="width: 100%">
        <div class="col-sm-3 text-center">
            <div class="ex-footer-logo">
                <img src="/templates/zaimhome/assets/img/header-logo.png" alt="Missing image" style="
    margin-top: 30px;">
            </div>
            <p>Сервис выгодного онлайн займа</p>
        </div>
        <div class="col-sm-3 small">
            <p>Сервис по подбору выгодных онлайн займов
            <br>находящийся по адресу
            <br>Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
            <br><a href="mailto:support@zaimhome.ru" target="_blank">support@zaimhome.ru</a> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span></p>    
        </div>
        <div class="col-sm-6 hidden-xs hidden-sm" >
            <p style="font-size: 85%;">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.<br>ИП «Бабакова К.К.» ОГРНИП 316222500122426 ИНН 222511216499</p>
        </div> 
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Остались вопросы?</h4>
                <p class="text-center">Просто заполните форму и наш специалист свяжется с Вами</p>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-name" placeholder="Имя" title="Имя">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-phone" placeholder="Телефон" title="Телефон">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="ex-actions">
                                <button class="ex-main-btn" id="feedback-send">Подтвердить</button>
                                <button class="ex-main-btn" data-dismiss="modal" aria-label="Close">Позже</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="loading" style="display:none;">
                    <span>
                        <i class="fa fa-spinner fa-spin fa-pulse"></i> Загрузка...</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="helpModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center">Уважаемый(ая),
                    <span id="io2"></span>!</h4>
                    <p class="text-center">Благодарим вас за регистрацию на нашем сервисе</p>
                    <p class="text-center">На почту <span id="e2">email@email.com</span> было отправлено письмо с подтверждением</p>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <form action="">
                                <div class="ex-actions">
                                    <button class="ex-main-btn" id="email_confirm2">Подтвердить</button>
                                    <button class="ex-main-btn" data-dismiss="modal" aria-label="Close" id="email_later">Позже</button>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Почта">
                                    <span>Нет письма? Отправьте новое!</span><br>
									<p style="font-size: 12px;">Если письмо не пришло, то посмотрите его в папке спам и нажмите кнопку «не спам»</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="/modules/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/modules/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="/modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="/modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js"></script>
<script type="text/javascript" src="/modules/poshytip-1.2/src/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="/modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]--> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
<script type="text/javascript" src="/templates/zaimhome/assets/js/jquery.suggestions.min.js"></script>
<script type="text/javascript" src="/templates/zaimhome/assets/js/coockie.js"></script>
<script type="text/javascript" src="/templates/zaimhome/assets/js/loanCalculator.js"></script> 
<script type="text/javascript" src="/templates/zaimhome/assets/js/modal.js"></script>
<script type="text/javascript" src="/templates/zaimhome/assets/js/custom.js"></script>
<script type="text/javascript" src="/templates/zaimhome/assets/js/settings_form.js"></script>
<script type="text/javascript" src="/templates/zaimhome/assets/js/settings_main.js"></script>  

  
 <!-- всплывающее окно -->
<?php
if ($this->uri->segment(1) == 'thanks') 
{ 
    echo '<script type="text/javascript" src="/templates/zaimhome/assets/js/j-rating.js"></script>';
    echo '<script type="text/javascript" src="/templates/zaimhome/assets/js/settings_thanks.js"></script>';
}
if ($this->uri->segment(1) == 'form') 
{ 
    require 'templates/common/js.php';
    if(isset($_GET['popup']) and $_GET['popup']==1 ){
        echo '    
    <!-- Modal Popup-->
    <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                                   
                                </div>
                                <div class="modal-body text-center">
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/templates/common/img/popup.jpg">                                             
                                                    <h2>'.$popup_text.'</h2>
                                                    <button type="button" class="btn btn-xl btn-success get-money" data-dismiss="modal" id="back"> Получить деньги </button>    
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
    </div>

            <script type= " text/javascript">
                $(window).load(function(){
                    $("#popup").modal("show");
                });
            </script>';
    }
}
?>
<!-- всплывающее окно -->


<?php 
 if ($this->uri->segment(1) == '') {
    echo '<script type="text/javascript" src="/templates/zaimhome/assets/js/settings_index.js"></script>';
} 
?>     

<?php
    if(isset($_GET['email']))
    {
        //данные пользователя
        $this->load->model('user/user_model', 'user');
        $user_data = $this->user->get_user($_GET['email']);
        $user_data['birthdate'] = date('d/m/Y', strtotime($user_data['birth']));
        $user_data['passportdate'] = date('d/m/Y', strtotime($user_data['passport_date']));
        foreach ($user_data as $name => $item)
        {
            echo '<script> $("#'.$name.'").val("'.$item.'"); </script>';
        }
        echo '<script> $("#username").text("'.$user_data['i'].'"); </script>';
    }
?>

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46347894 = new Ya.Metrika({ id:46347894, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46347894" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108637501-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108637501-1');
</script>
<script>
function markTarget(target,param, id){
    if (typeof yaCounter46347894 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter46347894.reachGoal(target);
	else yaCounter46347894.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){
                //console.log(data);
            }
        });
}
function traffic(site, page){
    $.ajax({
        type: 'POST',
        url: '/traffic/',
        data: 'site='+site+'&page='+page,
            success: function(data){
                //console.log(data);
            }
    });    
}
</script>

 