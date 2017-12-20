<?php $from = '15'; 
if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
{
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
?>
<?php
if($this->uri->segment(1) != 'form')
{ 
	echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Займол -->
    <ins class="adsbygoogle text-center"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="8790499713"
    data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}
?>
<footer class="ex-main-footer">
<div class="container">
    <div>
        <a href="/"><img src="/templates/zaimol/assets/img/logo-footer.png" alt="missed"></a>
    </div>
    <p class="spec_footer4">
        Сервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201 | <a class="spec_index3" href="mailto:support@zaimol.ru">support@zaimol.ru</a> &nbsp; <span class="hidden-xs hidden-sm">| +7(495) 006 19 61
        <br>Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от  61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%.
        Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей.
        Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения | ИП «Бабакова К.К.»ОГРНИП 316222500122426 ИНН 222511216499</span> 
    </p>
</div>
</footer>
<span class="ex-scroll-top"></span> 
    
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <h2>
                Заполните форму
                и наш менеджер свяжется с вами
            </h2>
            <form>
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
                    <button class="ex-main-btn" id="feedback-send" >Отправить</button> 
                </div>
                <!-- <button type="submit" class="ex-main-btn">Далее</button> -->
            </form>
        </div>
    </div>
</div>
</div>

<?php
        require 'templates/common/get_display_size.php';
        echo "<script>";
        require 'modules/jquery/jquery-1.11.3.min.js';
        echo "</script>";
        echo '<script>';
        require 'templates/zaimol/assets/js/get_param.js';
        echo "</script>";
        echo '<script>';
        require 'templates/zaimol/assets/js/swap.js';
        echo "</script>";
        
        if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')
        {
            echo '<script>
            var offers = '.json_encode($data).';
            var by_reg = null;
            $(document).ready(function(){
                $("#region").change(function(){
                    $.getJSON("/offers/by_region/" + $(this).val())
                    .done(function(data){
                        if (data.length) {
                            by_reg = data;
                            update_offers();
                            /*$(".results tr").hide();
                            data.forEach(function(index, offer){
                                $(".results tr[data-id="" + offer.id + ""]").show();
                            });*/
                        }
                        else
                        {
                            by_reg = null;
                            $(".results tr").show();
                        }
                    })
                    .fail(function(){$(".results tr").show();})
                    .always(function(){/*Loading(0);*/});
                });
                
                $(".offer-type").change(function(){
                    update_offers();
                });
                
                function update_offers() {
                    var str = ".results tbody tr";
                    //var curr = clone(by_reg.length? by_reg : offers);
                    var ot_card = $(".offer-type[data-id=\"card\"]").prop("checked");
                    var ot_qiwi = $(".offer-type[data-id=\"qiwi\"]").prop("checked");
                    var ot_yandex = $(".offer-type[data-id=\"yandex\"]").prop("checked");
                    var ot_contact = $(".offer-type[data-id=\"contact\"]").prop("checked");
                    // Прячем всё
                    $(str).hide();
                    // Пробегаемся по списку офферов
                    ((by_reg !== null)? by_reg : offers).forEach(function(offer, i){
                        var $tr = $(str + "[data-id=\"" + offer.id + "\"]");
                        if ($tr.data("amount") >= amount){
                            if (ot_card && !!$tr.data("card") == ot_card) $tr.show();
                            else if (ot_qiwi && !!$tr.data("qiwi") == ot_qiwi) $tr.show();
                            else if (ot_yandex && !!$tr.data("yandex") == ot_yandex) $tr.show();
                            else if (ot_contact && !!$tr.data("contact") == ot_contact) $tr.show();
                        }
                    });
                }
            });
            
            function clone(o) {
                if(!o || "object" !== typeof o) return o;
                
                var c = "function" === typeof o.pop ? [] : {};
                var p, v;
                for(p in o) {
                    if(o.hasOwnProperty(p)) {
                        v = o[p];
                        if(v && "object" === typeof v) {
                            c[p] = clone(v);
                        }
                        else {
                            c[p] = v;
                        }
                    }
                }
                return c;
            }
            </script>';
        }

        echo "<script>";
        require 'modules/bootstrap/3.3.6/js/bootstrap.min.js';
        echo "</script>";
        echo "<script>";
        require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
        echo "</script>";
        echo "<script>";
        require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
        echo "</script>";
	?>

<?php 

echo "<script>";
require 'templates/zaimol/assets/js/custom.js';
echo "</script>";
echo "<script>";
require 'templates/zaimol/assets/js/coockie.js';
echo "</script>";
echo "<script>";
require 'templates/zaimol/assets/js/settings_main.js';
echo "</script>";

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'microcredit' || $this->uri->segment(1) == 'denial' || $this->uri->segment(1) == 'benefit' || $this->uri->segment(1) == 'advantages' || $this->uri->segment(1) == 'form') { 

echo "<script>";
require 'templates/zaimol/assets/js/jquery.gallery.js';
echo "</script>";
echo "<script>";
require 'templates/zaimol/assets/js/owl.carousel.min.js';
echo "</script>";
echo "<script>";
require 'templates/zaimol/assets/js/loanCalculator.js';
echo "</script>";
echo "<script>";
require 'templates/zaimol/assets/js/bootstrap-datepicker.js';
echo "</script>";


if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index')
{
    echo "<script>";
    require 'templates/zaimol/assets/js/homepageAnimations.js';
    echo "</script>";
}
elseif($this->uri->segment(1) == 'form')
{  
    echo "<script>";
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo "</script>";
    echo "<script>";
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo "</script>"; 
    echo "<script>"; 
    require 'modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js';
    echo "</script>"; 
    echo '<!--[if lt IE 10]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <![endif]-->';
    echo "<script>";
    require 'templates/zaimol/assets/js/jquery.form-validator.js';
    echo "</script>"; 
    echo "<script>";
    require 'templates/zaimol/assets/js/settings_form.js';
    echo "</script>"; 
    echo "<script>";
    require 'templates/zaimol/assets/js/jquery.suggestions.min.js';
    echo "</script>"; 
    echo "<script>";
    require 'templates/zaimol/assets/js/oSpP.js';
    echo "</script>";  
}


echo '  
<script>
	$(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items:1,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true
        });
	}); 
</script>
';
} 
    echo "<script>";
    require 'modules/3dgallery/js/modernizr.custom.53451.js';
    echo "</script>";  
?>


<script>
    //backtotop
    jQuery(document).ready(function(o){var l=300,s=1200,c=700,d=o(".cd-top");o(window).scroll(function(){o(this).scrollTop()>l?d.addClass("cd-is-visible"):d.removeClass("cd-is-visible cd-fade-out"),o(this).scrollTop()>s&&d.addClass("cd-fade-out")}),d.on("click",function(l){l.preventDefault(),o("body,html").animate({scrollTop:0},c)})});
 
    var type = window.location.hash.substr(1);
    if(type !== '')
    { 
        switch(type)
        {
            case 'menu1': $('#doc1').click();break;
            case 'menu2': $('#doc2').click(); break;
            case 'menu3': $('#doc3').click();break;
            default: break;
        }
    }

    $(".spec_header" ).click(function() {
        var type = $(this).attr('href');
        type =  type.split("/documents#").join("");
        if(type !== '')
        { 
            switch(type)
            {
                case 'menu1': $('#doc1').click();break;
                case 'menu2': $('#doc2').click(); break;
                case 'menu3': $('#doc3').click();break;
                default: break;
            } 
        }
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
            //document.getElementById('loading').style.display = 'block';
            $('#feedback-send').prop('disabled', true);
            $('#feedback-send').html('Отправка <i class="fa fa-spinner fa-spin fa-pulse"></i>');
        } else if (!flag) {
            $('#feedback-send').html('Отправить');
            $('#feedback-send').prop('disabled', false);
            //document.getElementById('loading').style.display = 'none';
        }
    }
    $('#feedback-send').click(function () {
        Loading();

        var data = {
            name: $('#feedback-name').val(),
            phone: $('#feedback-phone').val(),
            email: $('#feedback-email').val(),
            comment: $('#feedback-comment').val() + x_size + " x " + y_size + " UserAgent: " + navigator.userAgent
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
                        $('#askQuestion').modal('toggle');
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
    var amount = 15000;
    var day = 10;
    
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
        $('input#work_salary').mask("nnnn?nn", {
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

        var amount = 15000;
        var day = 10; 

        $('#rangeSlider').ionRangeSlider({
            from: <?php 

        if(isset($_GET['amount'])) 
        {  
            switch($_GET['amount'])
            {
                case '1000': $from = '0' ; break;
                case '2000': $from = '1' ; break;
                case '3000': $from = '2' ; break;
                case '4000': $from = '3' ; break;
                case '5000': $from = '4' ; break;
                case '6000': $from = '5' ; break;
                case '7000': $from = '6' ; break;
                case '8000': $from = '7' ; break;
                case '9000': $from = '8' ; break;
                case '10000': $from = '9' ; break;
                case '11000': $from = '10' ; break;
                case '12000': $from = '11' ; break;
                case '13000': $from = '12' ; break;
                case '14000': $from = '13' ; break;
                case '15000': $from = '14' ; break;
                case '20000': $from = '15' ; break;
                case '25000': $from = '16' ; break;
                case '30000': $from = '17' ; break;
                case '40000': $from = '18' ; break;
                case '50000': $from = '19' ; break;
                case '80000': $from = '20' ; break;
                case '100000': $from = '21' ; break;
            }
            echo $from; 
        }
        elseif(!isset($_POST['form_slrd'])) echo '15'; else echo $_POST['form_slrd']; 
        ?>,
        values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000],
        onFinish: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        }, 
        onLoad: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        },
            values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000,
                14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
            ],
            hide_min_max: true,
            hide_from_to: true,
            keyboard: true,
            grid: false, 
            onChange: function (range) {
                if (range.from_value <= 10000) {
                    d = 'От 61 до 130 дней';
                    $('.period').val('10');
                    $('#period').val('10');
                } else if (range.from_value <= 15000) {
                    d = 'От 61 до 130 дней'; 
                    $('.period').val('10');
                    $('#period').val('10');
                } else if (range.from_value <= 20000) {
                    d = 'От 61 до 130 дней';
                    $('.period').val('10');
                    $('#period').val('10');
                } else if (range.from_value <= 30000) {
                    d = 'От 61 до 130 дней';
                    $('.period').val('15');
                    $('#period').val('15');
                } else if (range.from_value <= 50000) {
                    d = 'От 130 до 250 дней';
                    $('.period').val('30');
                    $('#period').val('30');
                } else {
                    d = 'От 250 до 365 дней';
                    $('.period').val('30');
                    $('#period').val('30');
                }
                $('.d').text(d);
                $('.a').text(range.from_value + 'P');
                $('.results tr').each(function (indx, element) {
                    if ($(element).data('amount') < range.from) $(element).hide();
                    else $(element).show();
                });

                amount = range.from_value;
                updateComm();
            }
        }); 
        var slider = $('#rangeSlider').data('ionRangeSlider');
        <?php if ($this->uri->segment(1) == '') { ?>
            $(document).ready(function () {
                var slider3 = $('#rangeSlider').data('ionRangeSlider');
            
                var slider_plus = true;
                var n = 10;
                var slider_init = setInterval(function () {
                    if (slider_plus) {
                        n++;
                    } else {
                        n--;
                    }
                    if (n == 21 && n != <?php echo $from;?>) {
                        slider_plus = false;
                    }else if (n == <?php echo $from;?> && slider_plus == false) {
                        clearInterval(slider_init);
                    }else if (n == 21 && n == <?php echo $from;?>) {
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

            if (n <= 9) {
            $('.period').val('10');
            $('.d').text('От 61 до 130 дней'); 
        } else if (n <= 14 && n > 9) {
            $('.period').val('10');
            $('.d').text('От 61 до 130 дней');
        } else if (n <= 15 && n > 14) {
            $('.period').val('10');
            $('.d').text('От 61 до 130 дней');
        } else if (n <= 17 && n > 15) {
            $('.period').val('15');
            $('.d').text('От 61 до 130 дней');
        } else if (n <= 19 && n > 17) {
            $('.period').val('30');
            $('.d').text('От 130 до 250 дней');
        } else if (n > 19) {
            $('.period').val('30');
            $('.d').text('От 250 до 365 дней');
        }

        $('.results tr').each(function (indx, element) {
            if ($(element).data('amount') < slider.result.from) $(element).hide();
            else $(element).show();
        });
         
         $('.a').text(String(slider.result.from_value).split(/(?=(?:\d{3})+$)/).join(' ') + 'P');
         amount = slider.result.from_value;
         updateComm();

        }, 50);

    });
        <?php } ?>
        var updateComm = function () {
            if (amount <= 30000) {
                percent = 1.3;
                comm1 = Math.ceil((amount / 100) * percent) * day;
                comm2 = 0;
            }
            if (amount > 30000) {
                percent = 0.2;
                comm1 = 390 * day;
                comm2 = Math.ceil(((amount - 30000) / 100) * percent) * day;
            }
            comm = comm1 + comm2;
            summ = amount + comm;
            $('.perc').text(percent + '%');
            $('.comm').text(comm + 'P');
            $('.sum').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' ') + 'P');
        };
    }); 
    function markTarget(target, param, id) {
        if (typeof yaCounter39264105 == 'undefined') return;
        if (typeof param == 'undefined') yaCounter39264105.reachGoal(target);
        else yaCounter39264105.reachGoal(target, param);

        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id=' + id + '&pixel=' + param,
            success: function (data) { 
            }
        });
    }
</script>
<!-- всплывающее окошко -->
<?php 
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
                                                    <img src="templates/common/img/popup.jpg" alt="popup.jpg">
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
<!-- всплывающее окошко --> 
<?php
 require 'yandexmetrika.php';
 require 'googleanalytics.php';
?>
</body>
</html>