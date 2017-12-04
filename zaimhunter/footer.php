<br><br>
<?php
if($this->uri->segment(1) != 'form')
{ 
	echo '<!-- Zaimhunter -->
    <div class="text-center"><ins class="adsbygoogle"
         style="display:none"
         data-ad-client="ca-pub-2472854344350368"
         data-ad-slot="5259770669"
         data-ad-format="auto"></ins></div>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}
?>
<footer class="ex-start-footer">
    <div class="container">
        <div class="row ex-main-footer">
            <div class="col-md-2">
                <div class="ex-footer-logo">
                    <a rel="nofollow" href="/"> <img src="/templates/zaimhunter/assets/img/footer-logo-zaimhunter.svg" alt="logo-zaimhunter"></a>
                </div>
            </div>
            <div class="col-md-10">
                <p>Сервис по подбору выгодных онлайн займов
                    находящийся по адресу Россия, Ленинградская обл.
                    г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                    <a rel="nofollow" href="mailto:support@zaimhunter.ru">support@zaimhunter.ru</a> <span class="hidden-xs hidden-sm">| +7 (495) 006 19 61</span><br>
                    <span id="special_footer" class="hidden-xs hidden-sm">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
                    Максимальная процентная ставка по займу составляет
                    0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок
                    пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате
                    31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                    ИП «Бабакова К.К.»ОГРНИП 316222500122426 ИНН 222511216499</span>
                </p>
            </div> 
        </div>
    </div> 
</footer> 

<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title text-center">Остались вопросы?</h4>
            </div>
            <div class="modal-body">
                <!-- <h4 class="text-center">Остались вопросы?</h4> -->
                <p class="text-center">Просто заполните форму и наш специалист свяжется с Вами</p>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-name" placeholder="Имя" title="Имя" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="feedback-phone" placeholder="Телефон" title="Телефон" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="ex-actions">
                                <button class="ex-main-btn" id="feedback-send">Отправить</button> 
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
<script type="text/javascript" src="/templates/zaimhunter/assets/js/jquery.suggestions.min.js"></script>
<script src="/templates/zaimhunter/assets/js/owl.carousel.min.js"></script>

<?php
if ($this->uri->segment(1) == 'form') 
{
    echo '<script src="/templates/zaimhunter/assets/js/loanCalculator.js?ver=1"></script>';
}
elseif ($this->uri->segment(1) == 'faq') 
{
    echo '<script>
    $(".my_select").change(function() {
    
        $("#output_text0").addClass("hidden");
        $("#output_text1").addClass("hidden");
        $("#output_text2").addClass("hidden");
        $("#output_text3").addClass("hidden");
        $("#output_text4").addClass("hidden");
        $("#output_text5").addClass("hidden");
        $("#output_text6").addClass("hidden");
        $("#output_text7").addClass("hidden");
        $("#output_text8").addClass("hidden");
        $("#output_text9").addClass("hidden");
        $("#output_text10").addClass("hidden");
    
        var val = $(".my_select option:selected").val(); 
        switch(val)
        {
            case "0":  $("#output_text0").removeClass("hidden"); break;
            case "1":  $("#output_text1").removeClass("hidden"); break;
            case "2":  $("#output_text2").removeClass("hidden"); break;
            case "3":  $("#output_text3").removeClass("hidden"); break;
            case "4":  $("#output_text4").removeClass("hidden"); break;
            case "5":  $("#output_text5").removeClass("hidden"); break;
            case "6":  $("#output_text6").removeClass("hidden"); break;
            case "7":  $("#output_text7").removeClass("hidden"); break;
            case "8":  $("#output_text8").removeClass("hidden"); break;
            case "9":  $("#output_text9").removeClass("hidden"); break;
            case "10":  $("#output_text10").removeClass("hidden"); break;
        }
    }); 
    </script>';
}
elseif ($this->uri->segment(1) == 'money') 
{
    echo '<script>
    $(".my_select2").change(function() {
    
        $("#money_text0").addClass("hidden");
        $("#money_text1").addClass("hidden");
        $("#money_text2").addClass("hidden");
        $("#money_text3").addClass("hidden");
    
        var val = $(".my_select2 option:selected").val(); 
        switch(val)
        {
            case "0":  $("#money_text0").removeClass("hidden"); break;
            case "1":  $("#money_text1").removeClass("hidden"); break;
            case "2":  $("#money_text2").removeClass("hidden"); break;
            case "3":  $("#money_text3").removeClass("hidden"); break;
        }
    }); 
    </script>';
}
if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index')
{ 
echo '<script src="/templates/zaimhunter/assets/js/loanCalculator.js?ver=1"></script>';
echo "<script>$(document).ready(function () {
    var slider3 = $('#rangeSlider').data('ionRangeSlider');

    var slider_plus = true;
    var n = 15;
    var slider_init = setInterval(function () {
        if (slider_plus) {
            n++;
        } else {
            n--;
        }
        if (n == 21) {
            slider_plus = false;
        } else if (n == 5) {
            clearInterval(slider_init);
        }
 
        slider3.update({
            from: n
        }); 
 
        if (n <= 9) {
            $('#period').val('7'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 14 && n > 9) {
            $('#period').val('14'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 15 && n > 14) {
            $('#period').val('21'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 17 && n > 15) {
            $('#period').val('21'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n <= 19 && n > 17) {
            $('#period').val('30'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } else if (n > 19) {
            $('#period').val('30'); 
            $('#form_slrd').val(n);
            $('#amount').val(slider3.result.from_value);
        } 

    }, 50);
});</script>";
}
?> 

<script src="/templates/zaimhunter/assets/js/coockie.js"></script>
<script src="/templates/zaimhunter/assets/js/settings_main.js?ver=1"></script>
<script src="/templates/zaimhunter/assets/js/custom.js?ver=1"></script>
<script src="/templates/zaimhunter/assets/js/ion.rangeSlider.js"></script>

<script> 
    function goToForm() {
        var tt = $('#ex-slider-val').text();
        tt = tt.split(" ").join("");
        setcookie('sldr', tt, (new Date).getTime() + (365 * 24 * 60 * 60 * 1000), '/');
        var slider = $("#rangeSlider").data("ionRangeSlider");
        var from2 = slider.result.from;
        $('#from_slrd').val(from2);
        setcookie('sldr2', from2, (new Date).getTime() + (365 * 24 * 60 * 60 * 1000), '/');
        var days = $('#period').val();
        if (days === '') days = 21;
        setcookie('per', days, (new Date).getTime() + (365 * 24 * 60 * 60 * 1000), '/');
        var days2 = $('#period2').val();
        setcookie('per2', days2, (new Date).getTime() + (365 * 24 * 60 * 60 * 1000), '/'); 
        $('#anketa').submit();
    // window.location.href = window.location.origin + '/form';
    };

    function goToLk() { 
        window.location.href = window.location.origin + '/lk';
    };

    function goToUp() {
        $('html, body').animate({
            scrollTop: $('.ex-range-scope').offset().top
        }, 1000);
    } 
    $("#rangeSlider").ionRangeSlider({
        navigation: true,
        navigationText: ["<img src='myprevimage.png'>","<img src='mynextimage.png'>"],
        hide_min_max: true,
        keyboard: true,
        from: <?php if(!isset($_POST['form_slrd'])) echo '15'; else echo $_POST['form_slrd'];?>,
        values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000],
        onFinish: function (data) {
            return false;
        },
        onChange: function (range) {
            if (range.from_value <= 10000) {
            $('#period').val('7');
            $('#period2').val('От 61 до 130 дней');
        } else if (range.from_value <= 15000) {
            $('#period').val('14');
            $('#period2').val('От 61 до 130 дней');
        } else if (range.from_value <= 20000) {
            $('#period').val('21');
            $('#period2').val('От 61 до 130 дней');
        } else if (range.from_value <= 30000) {
            $('#period').val('21');
            $('#period2').val('От 61 до 130 дней');
        } else if (range.from_value <= 50000) {
            $('#period').val('30');
            $('#period2').val('От 130 до 250 дней');
        } else {
            $('#period').val('30');
            $('#period2').val('От 250 до 365 дней');
        } 
            $('#amount').val(range.from_value);
            $('#form_slrd').val(range.from);
        },
    });
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            stagePadding: 40,
            center: true,
            loop: true,
            margin: 74,
            items: 1.5,
            nav: false,
            responsive: {
                1200: {
                    items: 1.5
                },
                // breakpoint from 480 up
                480: {
                    items: 1
                }
            }
        })
    }); 
    function setcookie(name, value, expires, path, domain, secure) {
        document.cookie = name + "=" + escape(value) +
            ((expires) ? "; expires=" + (new Date(expires)) : "") +
            ((path) ? "; path=" + path : "; path=/") +
            ((domain) ? "; domain=" + domain : "") +
            ((secure) ? "; secure" : "");
    }

    function traffic(site, page) {
        $.ajax({
            type: 'POST',
            url: '/traffic/',
            data: 'site=' + site + '&page=' + page,
            success: function (data) {
                //console.log(data);
            }
        });
    }

    function getcookie(name) {
        var cookie = " " + document.cookie;
        var search = " " + name + "=";
        var setStr = null;
        var offset = 0;
        var end = 0;

        if (cookie.length > 0) {
            offset = cookie.indexOf(search);

            if (offset != -1) {
                offset += search.length;
                end = cookie.indexOf(";", offset)

                if (end == -1) {
                    end = cookie.length;
                }

                setStr = unescape(cookie.substring(offset, end));
            }
        }

        return (setStr);
    }

    function GetMoney() {
        $('form#anketa').submit();
    }

    function Loading(flag) {
        if (typeof flag == 'undefined') {
            document.getElementById('loading').style.display = 'block';
            $('#feedback-send').prop('disabled', true);
            $('#feedback-send').html('Отправка <i class="fa fa-spinner fa-spin fa-pulse"></i>');
        } else if (!flag) {
            $('#feedback-send').html('Отправить');
            $('#feedback-send').prop('disabled', false);
            document.getElementById('loading').style.display = 'none';
        }
    }
    $('#feedback-send').click(function () {
        Loading();

        var data = {
            name: $('#feedback-name').val(),
            phone: $('#feedback-phone').val(),
            email: $('#feedback-email').val(),
            comment: $('#feedback-comment').val()
        };

        if ((typeof data.phone != 'undefined' && data.phone != '') && (typeof data.email != 'undefined' && data
                .email != '') && (typeof data.comment != 'undefined' && data.comment != '')) {
            $.ajax({
                url: '/feedback/',
                type: 'POST',
                dataType: 'json',
                data: data
            }).done(function (response) {
                if (response != null) {
                    if (typeof response.error != 'undefined') {
                        alert('Ошибка. ' + response.error);
                    } else {
                        $('#feedbackModal').modal('hide');
                        Loading(0);
                        alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
                    }
                } else {
                    alert('Не получилось отправить. Попробуйте ещё раз.');
                }
            }).fail(function (jqxhr, textStatus, error) {
                alert('Не получилось отправить. Попробуйте ещё раз.');
            }).always(function () {
                Loading(0);
            });
        } else {
            Loading(0);
            alert('Пожалуйста, заполните все поля.');
        }
    }); 
    
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
        $('input#work_salary').mask("nnnn?n", {
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
        var amount = 10000;

        $("#special").on({
            mouseenter: function () {
                $(this).addClass("ex-active");
            },
            mouseleave: function () {
                $(this).removeClass("ex-active");
            }
        });
        $("#special2").on({
            mouseenter: function () {
                $(this).addClass("ex-active");
            },
            mouseleave: function () {
                $(this).removeClass("ex-active");
            }
        });
        $("#special3").on({
            mouseenter: function () {
                $(this).addClass("ex-active");
            },
            mouseleave: function () {
                $(this).removeClass("ex-active");
            }
        });
        $("#special4").on({
            mouseenter: function () {
                $(this).addClass("ex-active");
            },
            mouseleave: function () {
                $(this).removeClass("ex-active");
            }
        });

    });
</script>
<script>
    var client_w = screen.width;
    if(Number(client_w) > 767)
    {
        document.getElementById( 'special_footer' ).style.display = 'block';
    }
    else
    {
        var pathname = window.location.pathname,  substring = "lk";
        
        if(pathname.indexOf(substring) !== -1)
        {
            document.getElementById( 'special_footer' ).style.display = 'none';
        }
        else
        {
            document.getElementById( 'special_footer' ).style.display = 'block';
        }
    }
</script>

<?php
if ($this->uri->segment(1) == 'lk') 
{ 
    require 'for_lk.php';
}

if ($this->uri->segment(1) == 'form') 
{
    echo '<script src="/templates/zaimhunter/assets/js/settings_form.js?ver=1"></script>';
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
<script>
function markTarget(target,param, id){
    if (typeof yaCounter46581393 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter46581393.reachGoal(target);
	else yaCounter46581393.reachGoal(target,param);
        
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

<?php 
require 'yandex_metrika.php';
require 'google_analytics.php';
?>
</body>
</html>