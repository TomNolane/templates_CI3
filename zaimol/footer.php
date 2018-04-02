<?php $from = '15'; 
if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
{
    echo '<a href="#0" class="cd-top">Наверх</a>';
}

if($this->uri->segment(1) != 'form')
{ 
    echo '<!--декстоп версия Yandex.RTB R-A-259962-1 -->
    <div class="hidden-sm hidden-xs text-center"><div id="yandex_rtb_R-A-259962-1"></div></div>';
    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { 
    echo'<!-- мобильная версия Yandex.RTB R-A-259962-2 -->
    <div class="hidden-md hidden-lg text-center"><div id="yandex_rtb_R-A-259962-2"></div></div>';
    }
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
            Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span> 
        </p>
    </div>
</footer>
<span class="ex-scroll-top"></span>
<?php
    require 'templates/common/get_display_size.php';
    echo "<script>";
    require 'modules/jquery/jquery-1.11.3.min.js';
    echo "</script>";
    echo "<script>";
    require 'modules/bootstrap/3.3.6/js/bootstrap.min.js';
    echo "</script>";
    echo "<script>";
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo "</script>";
    echo "<script>";
    require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
    echo "</script>";
    echo '<script>';
    require 'templates/zaimol/assets/js/get_param.js';
    echo "</script>";
    require 'templates/common/detect.min.php';
    echo '<script>';
    require 'templates/zaimol/assets/js/swap.js';
    echo "</script>";
    echo "<script>";
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo "</script>";
    echo "<script>";
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo "</script>"; 
    echo "<script>"; 
    require 'modules/jquery-ui/1.10.4/js/jquery-ui-1.10.4.custom.min.js';
    echo "</script>"; 
    echo '
    <!--[if lt IE 10]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <![endif]-->';
    echo "<script>";
    require 'templates/zaimol/assets/js/jquery.form-validator.js';
    echo "</script>"; 
    echo "<script>";
    require 'templates/zaimol/assets/js/settings_form.js';
    echo "</script>"; 
    echo "<script>";
    require 'templates/zaimol/assets/js/custom.js';
    echo "</script>";
    echo "<script>";
    require 'templates/zaimol/assets/js/coockie.js';
    echo "</script>";
    echo "<script>";
    require 'templates/zaimol/assets/js/settings_main.js';
    echo "</script>";
    echo "<script>";
    require 'templates/zaimol/assets/js/jquery.suggestions.min.js';
    echo "</script>";
    echo '<script>';
    require 'templates/zaimol/assets/js/modal.js';
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
?>

<?php
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


if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index')
{
    echo "<script>";
    require 'templates/zaimol/assets/js/homepageAnimations.js';
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

    var amount = 15000;
    var day = 10;
    
    $(document).ready(function () { 
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
        $(document).ready(function () 
        {
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
        if (typeof yaCounter46760313 == 'undefined') return;
        if (typeof param == 'undefined') yaCounter46760313.reachGoal(target);
        else yaCounter46760313.reachGoal(target, param);

        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id=' + id + '&pixel=' + param,
            success: function (data) { 
            }
        });
    }
    //traffic(window.location.hostname,window.location.pathname);
</script>
<!-- всплывающее окошко -->
<?php 
if ($this->uri->segment(1) == 'form') 
{ 
    echo ' <script>
    $("#work").change(function(){
        if($(this).val().toLowerCase() == "пенсионер" || $(this).val().toLowerCase() == "безработный")
        { 
            $("#work_name").addClass("valid");
            $("#work_name").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_name").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_name").removeClass("er");
            $("#work_namestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_occupation").addClass("valid");
            $("#work_occupation").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_occupation").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_occupation").removeClass("er");
            $("#work_occupationstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_phone").addClass("valid");
            $("#work_phone").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_phone").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_phone").removeClass("er");
            $("#work_phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");

            $("#work_experience").addClass("valid");
            $("#work_experience").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_experience").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_experience").removeClass("er");
            $("#work_experiencestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");

            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().addClass("ex-error").removeClass("ex-success");
            $("#work_salary").parent().parent().prev().removeClass("label_true").addClass("label_er");
            $("#work_salary").addClass("er");
            $("#work_salary").focus();
            $("#work_salarystatus").addClass("glyphicon-remove");

            $("#work_region").addClass("valid");
            $("#work_region").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_region").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_region").removeClass("er");

            $("#work_city").addClass("valid");
            $("#work_city").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_city").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_city").removeClass("er");
            $("#work_citystatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_street").addClass("valid");
            $("#work_street").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_street").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_street").removeClass("er");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_house").addClass("valid");
            $("#work_house").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_house").parent().parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_house").removeClass("er");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 

            $("#work_office").addClass("valid");
            $("#work_office").parent().addClass("ex-success").removeClass("ex-error");
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
            $("#work_name").parent().removeClass("ex-success");
            $("#work_name").parent().parent().prev().removeClass("label_true"); 
            $("#work_namestatus").removeClass("glyphicon-ok");

            $("#work_occupation").val("");
            $("#work_occupation").removeClass("valid");
            $("#work_occupation").parent().removeClass("ex-success");
            $("#work_occupation").parent().parent().prev().removeClass("label_true"); 
            $("#work_occupationstatus").removeClass("glyphicon-ok"); 

            $("#work_phone").val("");
            $("#work_phone").removeClass("valid");
            $("#work_phone").parent().removeClass("ex-success");
            $("#work_phone").parent().parent().prev().removeClass("label_true"); 
            $("#work_phonestatus").removeClass("glyphicon-ok");

            $("#work_experience").val("");
            $("#work_experience").removeClass("valid");
            $("#work_experience").parent().removeClass("ex-success");
            $("#work_experience").parent().parent().prev().removeClass("label_true"); 
            $("#work_experiencestatus").removeClass("glyphicon-ok");

            $("#work_salary").val("");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().removeClass("ex-success");
            $("#work_salary").parent().parent().prev().removeClass("label_true"); 
            $("#work_salarystatus").removeClass("glyphicon-ok");
 
            $("#work_region").removeClass("valid");
            $("#work_region").parent().removeClass("ex-success");
            $("#work_region").parent().parent().prev().removeClass("label_true");

            $("#work_city").val("");
            $("#work_city").removeClass("valid");
            $("#work_city").parent().removeClass("ex-success");
            $("#work_city").parent().parent().prev().removeClass("label_true"); 
            $("#work_citystatus").removeClass("glyphicon-ok"); 

            $("#work_street").val("");
            $("#work_street").removeClass("valid");
            $("#work_street").parent().removeClass("ex-success");
            $("#work_street").parent().parent().prev().removeClass("label_true"); 
            $("#work_streetstatus").removeClass("glyphicon-ok"); 

            $("#work_house").val("");
            $("#work_house").removeClass("valid");
            $("#work_house").parent().removeClass("ex-success");
            $("#work_house").parent().parent().prev().removeClass("label_true"); 
            $("#work_housestatus").removeClass("glyphicon-ok");

            $("#work_office").val("");
            $("#work_office").removeClass("valid");
            $("#work_office").parent().removeClass("ex-success");
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
}
 require 'yandexmetrika.php';
 require 'googleanalytics.php';
?> 
</body>
</html>