<br><br>
<?php
$from = '15';
if($this->uri->segment(1) != 'form')
{ 
	echo '<!--декстоп версия Yandex.RTB R-A-258704-1 -->
    <div class="hidden-sm hidden-xs text-center"><div id="yandex_rtb_R-A-258704-1"></div></div>';
    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { 
        echo'<!-- мобильная версия Yandex.RTB R-A-258704-2 -->
        <div class="hidden-md hidden-lg text-center"><div id="yandex_rtb_R-A-258704-2"></div></div>';
    }
    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Займхантер -->
    <ins class="adsbygoogle text-center"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="4330124923"
    data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}

if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
{
    echo '<a href="#0" class="cd-top">Наверх</a>';
} 
 
?>
<footer class="ex-start-footer">
    <div class="container">
        <div class="row ex-main-footer">
            <div class="col-md-2">
                <div class="ex-footer-logo">
                    <a rel="nofollow" href="/"> <img src="/templates/zaimhunter/assets/img/footer-logo-zaimhunter.png" alt="logo-zaimhunter"></a>
                </div>
            </div>
            <div class="col-md-10 spec_footer4">
                <p>Сервис по подбору выгодных онлайн займов
                    находящийся по адресу Россия, Ленинградская обл.
                    г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                    <a rel="nofollow" href="mailto:support@zaimhunter.ru">support@zaimhunter.ru</a> <span class="hidden-xs hidden-sm">| +7 (495) 006 19 61</span><br>
                    <span id="special_footer" class="hidden-xs hidden-sm">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
                    Максимальная процентная ставка по займу составляет
                    0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок
                    пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате
                    31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span>
                </p>
            </div> 
        </div>
    </div> 
</footer> 

<?php require 'templates/common/get_display_size.php';
echo '<script>';
require 'modules/jquery/jquery-1.11.3.min.js';
echo '</script>';
echo '<script>';
require 'modules/bootstrap/3.3.6/js/bootstrap.min.js';
echo '</script>';
echo '<script>';
require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
echo '</script>';
echo '<script>';
require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
echo '</script>';
echo '<script>';
require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
echo '</script>';
echo '<script>';
require 'modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js';
echo '</script>';
?> 
<!--[if lt IE 10]>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]--> 
<?php
echo '<script>';
require 'templates/zaimhunter/assets/js/jquery.suggestions.min.js';
echo '</script>';
echo '<script>';
require 'templates/zaimhunter/assets/js/owl.carousel.min.js';
echo '</script>';
echo '<script>';
require 'templates/zaimrubli/assets/js/jquery.form-validator.js';
echo '</script>';
require 'templates/common/detect.min.php';

if ($this->uri->segment(1) == 'form') 
{ 
    echo ' <script>
    $("#work").change(function(){
        if($(this).val().toLowerCase() == "пенсионер" || $(this).val().toLowerCase() == "безработный")
        { 
            $("#work_name").addClass("valid");
            $("#work_name").parent().addClass("has-success").removeClass("has-error");
            $("#work_name").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_name").removeClass("er");
            $("#work_namestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_occupation").addClass("valid");
            $("#work_occupation").parent().addClass("has-success").removeClass("has-error");
            $("#work_occupation").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_occupation").removeClass("er");
            $("#work_occupationstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_phone").addClass("valid");
            $("#work_phone").parent().addClass("has-success").removeClass("has-error");
            $("#work_phone").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_phone").removeClass("er");
            $("#work_phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");

            $("#work_experience").addClass("valid");
            $("#work_experience").parent().addClass("has-success").removeClass("has-error");
            $("#work_experience").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_experience").removeClass("er");
            $("#work_experiencestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");

            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().addClass("has-error").removeClass("has-success");
            $("#work_salary").parent().parent().prev().removeClass("label_true").addClass("label_er");
            $("#work_salary").addClass("er");
            $("#work_salary").focus();
            $("#work_salarystatus").addClass("glyphicon-remove");

            $("#work_region").addClass("valid");
            $("#work_region").parent().addClass("has-success").removeClass("has-error");
            $("#work_region").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_region").removeClass("er");

            $("#work_city").addClass("valid");
            $("#work_city").parent().addClass("has-success").removeClass("has-error");
            $("#work_city").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_city").removeClass("er");
            $("#work_citystatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_street").addClass("valid");
            $("#work_street").parent().addClass("has-success").removeClass("has-error");
            $("#work_street").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_street").removeClass("er");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_house").addClass("valid");
            $("#work_house").parent().addClass("has-success").removeClass("has-error");
            $("#work_house").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_house").removeClass("er");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_office").addClass("valid");
            $("#work_office").parent().addClass("has-success").removeClass("has-error");
            $("#work_office").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_office").removeClass("er");
            $("#work_officestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
            
            if($(this).val().toLowerCase() == "пенсионер")
            $("#work_name").val("пенсионер");
            else  $("#work_name").val("безработный");
            if($(this).val().toLowerCase() == "пенсионер")
            $("#work_occupation").val("пенсионер");
            else  $("#work_occupation").val("безработный");
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
            $("#work_building").val(" ");
            var teemp6 = $("#flat").val();
            $("#work_office").val(teemp6);
        }
        else { 

            $("#work_name").val("");
            $("#work_name").removeClass("valid");
            $("#work_name").parent().removeClass("has-success");
            $("#work_name").parent().parent().prev().removeClass("label_true"); 
            $("#work_namestatus").removeClass("glyphicon-ok");

            $("#work_occupation").val("");
            $("#work_occupation").removeClass("valid");
            $("#work_occupation").parent().removeClass("has-success");
            $("#work_occupation").parent().parent().prev().removeClass("label_true"); 
            $("#work_occupationstatus").removeClass("glyphicon-ok"); 

            $("#work_phone").val("");
            $("#work_phone").removeClass("valid");
            $("#work_phone").parent().removeClass("has-success");
            $("#work_phone").parent().parent().prev().removeClass("label_true"); 
            $("#work_phonestatus").removeClass("glyphicon-ok");

            $("#work_experience").val("");
            $("#work_experience").removeClass("valid");
            $("#work_experience").parent().removeClass("has-success");
            $("#work_experience").parent().parent().prev().removeClass("label_true"); 
            $("#work_experiencestatus").removeClass("glyphicon-ok");

            $("#work_salary").val("");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().removeClass("has-success");
            $("#work_salary").parent().parent().prev().removeClass("label_true"); 
            $("#work_salarystatus").removeClass("glyphicon-ok");
 
            $("#work_region").removeClass("valid");
            $("#work_region").parent().removeClass("has-success");
            $("#work_region").parent().parent().prev().removeClass("label_true");

            $("#work_city").val("");
            $("#work_city").removeClass("valid");
            $("#work_city").parent().removeClass("has-success");
            $("#work_city").parent().parent().prev().removeClass("label_true"); 
            $("#work_citystatus").removeClass("glyphicon-ok"); 

            $("#work_street").val("");
            $("#work_street").removeClass("valid");
            $("#work_street").parent().removeClass("has-success");
            $("#work_street").parent().parent().prev().removeClass("label_true"); 
            $("#work_streetstatus").removeClass("glyphicon-ok"); 

            $("#work_house").val("");
            $("#work_house").removeClass("valid");
            $("#work_house").parent().removeClass("has-success");
            $("#work_house").parent().parent().prev().removeClass("label_true"); 
            $("#work_housestatus").removeClass("glyphicon-ok");

            $("#work_office").val("");
            $("#work_office").removeClass("valid");
            $("#work_office").parent().removeClass("has-success");
            $("#work_office").parent().parent().prev().removeClass("label_true"); 
            $("#work_officestatus").removeClass("glyphicon-ok");
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
    </script>';
    
    ?>
     <script>
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }</script> 
<?php
    echo '<script>';
    require 'templates/zaimhunter/assets/js/loanCalculator.js';
    echo '</script>';
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
?>

<?php
echo '<script>';
require 'templates/zaimhunter/assets/js/coockie.js';
echo '</script>';
echo '<script>';
require 'templates/zaimhunter/assets/js/settings_main.js';
echo '</script>';
echo '<script>';
require 'templates/zaimhunter/assets/js/custom.js';
echo '</script>';
echo '<script>';
require 'templates/zaimhunter/assets/js/ion.rangeSlider.js';
echo '</script>';
?> 
<script> 
    //backtotop
    jQuery(document).ready(function(o){var l=300,s=1200,c=700,d=o(".cd-top");o(window).scroll(function(){o(this).scrollTop()>l?d.addClass("cd-is-visible"):d.removeClass("cd-is-visible cd-fade-out"),o(this).scrollTop()>s&&d.addClass("cd-fade-out")}),d.on("click",function(l){l.preventDefault(),o("body,html").animate({scrollTop:0},c)})});

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
    
    $(document).ready(function () { 
        var amount = 20000;
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
<?php

if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index')
{ 
    echo '<script>';
    require 'templates/zaimhunter/assets/js/loanCalculator.js';
    echo '</script>'; 
    ?>
<script>
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }</script> 
<?php

echo "<script>$(document).ready(function () {
    var slider3 = $('#rangeSlider').data('ionRangeSlider');

    var slider_plus = true;
    var n = 10;
    var slider_init = setInterval(function () 
    { 
        if (slider_plus) {
            n++;
        } else {
            n--;
        }

        if (n == 21 && n != ".$from.") {
            slider_plus = false;
        } else if (n == ".$from." && slider_plus == false) {
            clearInterval(slider_init);
        } else if (n == 21 && n == ".$from.") {
            clearInterval(slider_init);
        }
 
        slider3.update({
            from: n
        }); 
 
        if (n <= 9) {
            $('#period').val('7');
        } else if (n <= 14 && n > 9) {
            $('#period').val('14'); 
        } else if (n <= 15 && n > 14) {
            $('#period').val('21');
        } else if (n <= 17 && n > 15) {
            $('#period').val('21');
        } else if (n <= 19 && n > 17) {
            $('#period').val('30');
        } else if (n > 19) {
            $('#period').val('30');
        }

        $('#form_slrd').val(n);
        $('#amount').val(slider3.result.from_value);

    }, 50);
});</script>";
}
?> 

    <?php
    if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') 
    { 
        require 'for_lk.php';
    }

    echo '<script>';
    require 'templates/zaimhunter/assets/js/settings_form.js';
    echo '</script>'; 
 
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
            }
    });
}
//traffic(window.location.hostname,window.location.pathname);
</script>

<?php

if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')
    { 
        echo '<script>
        var offers = '.json_encode($data).'
        var by_reg = null;
        $(document).ready(function () {
            $(".offer-type").change(function () {
                update_offers();
            });
            function update_offers() {
                var str = ".results tbody tr";
                //var curr = clone(by_reg.length? by_reg : offers);
                var ot_card = $(".offer-type[data-id=\'card\']").prop("checked");
                var ot_qiwi = $(".offer-type[data-id=\'qiwi\']").prop("checked");
                var ot_yandex = $(".offer-type[data-id=\'yandex\']").prop("checked");
                var ot_contact = $(".offer-type[data-id=\'contact\']").prop("checked");
                // Прячем всё
                $(str).hide();
                // Пробегаемся по списку офферов
                ((by_reg !== null) ? by_reg : offers).forEach(function (offer, i) {
                    var $tr = $(str + "[data-id=\'" + offer.id + "\']");
                    if ($tr.data("amount") >= amount) {
                        if (ot_card && !!$tr.data(\'card\') == ot_card) $tr.show();
                        else if (ot_qiwi && !!$tr.data(\'qiwi\') == ot_qiwi) $tr.show();
                        else if (ot_yandex && !!$tr.data(\'yandex\') == ot_yandex) $tr.show();
                        else if (ot_contact && !!$tr.data(\'contact\') == ot_contact) $tr.show();
                    }
                });
            }
            if (getcookie("i")) {
                var i = getcookie("i");
                $("#i").text(i);
            }
            traffic("zaimcoin.ru", "4");
        });
        function clone(o) {
            if (!o || "object" !== typeof o) return o;

            var c = "function" === typeof o.pop ? [] : {};
            var p, v;
            for (p in o) {
                if (o.hasOwnProperty(p)) {
                    v = o[p];
                    if (v && "object" === typeof v) {
                        c[p] = clone(v);
                    } else {
                        c[p] = v;
                    }
                }
            }
            return c;
        } 
        traffic("zaimhunter.ru", "4");
    </script>';
    }

require 'yandex_metrika.php';
require 'google_analytics.php';
echo '<script>';
require 'templates/zaimrubli/assets/js/modal.js';
echo '</script>';
?>
</body>
</html>