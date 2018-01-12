<?php
    $from = '15';
    if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
    {
        echo '<a href="#0" class="cd-top">Na górę</a>';
    } 

    if($this->uri->segment(1) != 'form')
    {
        echo '';
    }
?>

<footer class="ex-main-footer"></footer>

    <?php
    require 'templates/common/get_display_size.php';
    echo '<script>';
    require 'modules/jquery/jquery-1.11.3.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/bootstrap/3.3.6/js/bootstrap.min.js';
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
    echo '<script>';
    require 'templates/microdengi_pol/assets/js/jquery.form-validator.js';
    echo '</script>';
    echo '<script>';
    require 'templates/microdengi_pol/assets/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/microdengi_pol/assets/js/coockie.js';
    echo '</script>';
    echo '<script>';
    require 'templates/microdengi_pol/assets/js/custom.js';
    echo '</script>';
    require 'templates/common/detect.min.php';
    echo '<script>';
    require 'templates/microdengi_pol/assets/js/settings_main.js';
    echo '</script>'; 
    echo '<script>';
    require 'templates/microdengi_pol/assets/js/owl.carousel.min.js';
    echo '</script>';
    echo '<script>';
    //require 'templates/microdengi_pol/assets/js/settings_form.js';
    echo '</script>'; 
    ?>

    <!--[if lt IE 10]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <![endif]-->

    <?php if($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') 
    { 
        echo '<script>';
        //require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
        echo '</script>';
        echo '<script>';
        echo '$(\'.owl-carousel\').owlCarousel({
            loop: true,
            margin: 98,
            nav: false,
            items: 1.5,
            center: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            responsive: {
                1200: {
                    items: 1.5
                },
                320: {
                    items: 1
                }
            }
        });
        $(".ex-art-block").hover(function () {
            $(".ex-art-block").removeClass("ex-art-active");
            $(this).addClass("ex-art-active");
        });';
        //require 'templates/microdengi_pol/assets/js/loanCalculator.js';
        echo '</script>';
    ?>

    <script> 
    //backtotop
    jQuery(document).ready(function(o){var l=300,s=1200,c=700,d=o(".cd-top");o(window).scroll(function(){o(this).scrollTop()>l?d.addClass("cd-is-visible"):d.removeClass("cd-is-visible cd-fade-out"),o(this).scrollTop()>s&&d.addClass("cd-fade-out")}),d.on("click",function(l){l.preventDefault(),o("body,html").animate({scrollTop:0},c)})});

    function getParameterByName(name, url) 
    {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    function goToUp() {
        $('html, body').animate({
            scrollTop: $('.toUp').offset().top
        }, 1000);
    }

    $(document).ready(function () 
    {
        $.mask.definitions['*'] = "[а-яёА-ЯЁA-Za-z0-9\/\-_]";
        $('[data-toggle="popover"]').popover();
    });
</script> 
<?php } ?> 
<script>
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

    function GetMoney() 
    {
        $('form#anketa').submit();
    } 
</script>

    <?php
		if ($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'money' || $this->uri->segment(1) == 'zaim-bank' || $this->uri->segment(1) == 'zaim-yandex' || $this->uri->segment(1) == 'zaim-qiwi' || $this->uri->segment(1) == 'zaim-card' || $this->uri->segment(1) == 'zaim-contact') { 
    ?>

    <script> 
    $(document).ready(function () {
        
    });
    </script>
<?php }

if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')
{  
    echo '<script>
        $(".ex-offers-block").hover(function () {
            $(".ex-offers-block").removeClass("ex-off-active");
            $(this).addClass("ex-off-active");
        });
    </script>';
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
</script>';
}
?>
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
}
?>

<!-- всплывающее окошко --> 
<?php
 require 'yandexmetrika.php';
 require 'googleanalytics.php';
 echo '<script>';
    require 'templates/microdengi_pol/assets/js/modal.js';
echo '</script>';
?>

<script>
    function markTarget(target, param, id) {
        if (typeof yaCounter47142942 == 'undefined') return;
        if (typeof param == 'undefined') yaCounter47142942.reachGoal(target);
        else yaCounter47142942.reachGoal(target, param);

        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id=' + id + '&pixel=' + param,
            success: function (data) { 
            }
        });
    }

function traffic(site, page)
{
    $.ajax({
        type: 'POST',
        url: '/traffic/',
        data: 'site='+site+'&page='+page,
            success: function(data){ 
            }
    });
}
</script>
</body>
</html>