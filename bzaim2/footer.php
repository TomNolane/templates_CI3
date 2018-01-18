
    <?php $from = '15'; ?>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="h1" id="feedbackModalLabel">Остались вопросы?</h1>
                    <p>Просто заполните форму и наш специалист свяжется с Вами</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg spec_modal" id="feedback-name" placeholder="Имя" title="Имя" required>
                            </div>
                            <div class="form-group hidden">
                                <input type="tel" class="form-control input-lg spec_modal" id="feedback-phone" placeholder="Телефон" title="Телефон" value="8(977)7477777" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg spec_modal" id="feedback-email" placeholder="Email" title="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-lg spec_modal" id="feedback-comment" rows="3" placeholder="Текст вашего сообщения" title="Текст вашего сообщения"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <center><button type="button" class="btn btn-success special_index" style="margin-top: 20px;" id="feedback-send">Отправить</button></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script async src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js'></script>
    <?php
    require 'templates/bzaim2/assets/js/get_display_size.php';
    require 'templates/bzaim2/assets/js/detect.min.php';
    echo '<script>';
    require 'templates/bzaim2/assets/js/jquery.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/bootstrap.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/ion.rangeSlider.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/index.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/coockie.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/jquery.poshytip.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/jquery.maskedinput.1.4.2.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/jquery.form-validator.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/jquery-ui-1.10.4.custom.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/bzaim2/assets/js/settings_form.js';
    echo '</script>';
?>
        <!--[if lt IE 10]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
    <![endif]--> 
        <script async>
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
function markTarget(target,param, id){
    if (typeof yaCounter39828725 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter39828725.reachGoal(target);
	else yaCounter39828725.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){
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
        $("#ionRangeSlider").ionRangeSlider({
            <?php if ($this->uri->segment(1) != 'form'){?>
            hide_min_max: false,
            grid: true,
            <?php } else {?>
            hide_min_max: false,
            grid: false,
            <?php } ?>
            hide_from_to: false,
            keyboard: true,
            postfix: ' Р',
            prettify_enabled: true,
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
                values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000,
                    14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000
                ],
                onChange: function (range) {
                    if (range.from_value <= 10000) {
                        $('#period').val('7');
                        $('#period2').text('От 61 до 130 дней');
                    } else if (range.from_value <= 15000) {
                        $('#period').val('14');
                        $('#period2').text('От 61 до 130 дней');
                    } else if (range.from_value <= 20000) {
                        $('#period').val('21');
                        $('#period2').text('От 61 до 130 дней');
                    } else if (range.from_value <= 30000) {
                        $('#period').val('21');
                        $('#period2').text('От 61 до 130 дней');
                    } else if (range.from_value <= 50000) {
                        $('#period').val('30');
                        $('#period2').text('От 130 до 250 дней');
                    } else {
                        $('#period').val('30');
                        $('#period2').text('От 250 до 365 дней');
                    }
                    amount = range.from_value;
                    $('#amount').text(range.from_value + ' рублей');
                    $('.amount').val(range.from_value);
                    $('#form_slrd').val(range.from);
                    updateComm();
                },
            });
            var amount = 20000;
            var day = 15;
            var updateComm = function () {
                var comm1 = 0;
                var comm2 = 0;
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
                if (amount < 30000) {
                    prob = 97;
                } else if (amount < 50000) {
                    prob = 97;
                } else if (amount >= 50000 && amount <= 70000) {
                    prob = 72;
                } else {
                    prob = 64;
                }
                comm = comm1 + comm2;
                summ = amount + comm;
                $('#amount').text(String(amount).split(/(?=(?:\d{3})+$)/).join(' '));
                $('#comm').text(comm);
                $('#percent').text(prob);
                $('#total').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' '));
            };
            </script>
           
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index') {?>
        <script async>
        var slider = $('#ionRangeSlider').data('ionRangeSlider'); 
        var slider_plus = true;
        var n = 10;
        var slider_init = setInterval(function () {
        if (slider_plus) {
            n++;
        } else {
            n--;
        }
        if (n == 21 && n != <?php echo $from; ?>) {
            slider_plus = false;
        }else if (n == <?php echo $from; ?> && slider_plus == false) {
            clearInterval(slider_init);
        }else if (n == 21 && n == <?php echo $from; ?>) {
            clearInterval(slider_init);
        }

        slider.update({
            from: n
        }); 
        amount = slider.result.from_value;
        updateComm();
    }, 50);
    </script>
<?php }?>
        
        <?php 
        if($this->uri->segment(1) == 'form')
        {
        echo ' <script>$("#work").change(function(){
            if($(this).val().toLowerCase() == "пенсионер" || $(this).val().toLowerCase() == "безработный")
            { 
                $("#work_name").addClass("valid");
                $("#work_name").parent().addClass("has-success").removeClass("has-error").removeClass("sign__word__red");
                $("#work_name").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_name").removeClass("er");
                $("#work_namestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
                $("#work_occupation").addClass("valid");
                $("#work_occupation").parent().addClass("has-success").removeClass("has-error");
                $("#work_occupation").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_occupation").removeClass("er");
                $("#work_occupationstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
                $("#work_phone").addClass("valid");
                $("#work_phone").parent().addClass("has-success").removeClass("has-error");
                $("#work_phone").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_phone").removeClass("er");
                $("#work_phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                $("#work_experience").addClass("valid");
                $("#work_experience").parent().addClass("has-success").removeClass("has-error");
                $("#work_experience").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_experience").removeClass("er");
                $("#work_experiencestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                $("#work_salary").removeClass("valid");
                $("#work_salary").parent().addClass("has-error").removeClass("has-success");
                $("#work_salary").parent().prev().removeClass("label_true").removeClass("sign__word").addClass("label_er").addClass("sign__word__red");
                $("#work_salary").addClass("er");
                $("#work_salary").focus();
                $("#work_salarystatus").addClass("glyphicon-remove");
                $("#work_region").addClass("valid");
                $("#work_region").parent().addClass("has-success").removeClass("has-error");
                $("#work_region").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_region").removeClass("er");
                $("#work_city").addClass("valid");
                $("#work_city").parent().addClass("has-success").removeClass("has-error");
                $("#work_city").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_city").removeClass("er");
                $("#work_citystatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
                $("#work_street").addClass("valid");
                $("#work_street").parent().addClass("has-success").removeClass("has-error");
                $("#work_street").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_street").removeClass("er");
                $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
                $("#work_house").addClass("valid");
                $("#work_house").parent().addClass("has-success").removeClass("has-error");
                $("#work_house").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_house").removeClass("er");
                $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok"); 
                $("#work_office").addClass("valid");
                $("#work_office").parent().addClass("has-success").removeClass("has-error");
                $("#work_office").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_office").removeClass("er");
                $("#work_officestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                $("#work_building").addClass("valid");
                $("#work_building").parent().addClass("has-success").removeClass("has-error");
                $("#work_building").parent().prev().removeClass("label_er").removeClass("sign__word__red").addClass("label_true").addClass("sign__word");
                $("#work_building").removeClass("er");
                $("#work_buildingstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
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
                var teemp7 =  $("#building").val();
                $("#work_building").val(teemp7);
                var teemp6 = $("#flat").val();
                $("#work_office").val(teemp6);
            }
            else { 
                $("#work_name").val("");
                $("#work_name").removeClass("valid");
                $("#work_name").parent().removeClass("has-success");
                $("#work_name").parent().prev().removeClass("label_true").removeClass("sign__word");  
                $("#work_namestatus").removeClass("glyphicon-ok");
                $("#work_occupation").val("");
                $("#work_occupation").removeClass("valid");
                $("#work_occupation").parent().removeClass("has-success");
                $("#work_occupation").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_occupationstatus").removeClass("glyphicon-ok"); 
                $("#work_phone").val("");
                $("#work_phone").removeClass("valid");
                $("#work_phone").parent().removeClass("has-success");
                $("#work_phone").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_phonestatus").removeClass("glyphicon-ok");
                $("#work_experience").val("");
                $("#work_experience").removeClass("valid");
                $("#work_experience").parent().removeClass("has-success");
                $("#work_experience").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_experiencestatus").removeClass("glyphicon-ok");
                $("#work_salary").val("");
                $("#work_salary").removeClass("valid");
                $("#work_salary").parent().removeClass("has-success");
                $("#work_salary").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_salarystatus").removeClass("glyphicon-ok");
                $("#work_region").removeClass("valid");
                $("#work_region").parent().removeClass("has-success");
                $("#work_region").parent().prev().removeClass("label_true").removeClass("sign__word");
                $("#work_city").val("");
                $("#work_city").removeClass("valid");
                $("#work_city").parent().removeClass("has-success");
                $("#work_city").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_citystatus").removeClass("glyphicon-ok"); 
                $("#work_street").val("");
                $("#work_street").removeClass("valid");
                $("#work_street").parent().removeClass("has-success");
                $("#work_street").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_streetstatus").removeClass("glyphicon-ok"); 
                $("#work_house").val("");
                $("#work_house").removeClass("valid");
                $("#work_house").parent().removeClass("has-success");
                $("#work_house").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_housestatus").removeClass("glyphicon-ok");
                $("#work_office").val("");
                $("#work_office").removeClass("valid");
                $("#work_office").parent().removeClass("has-success");
                $("#work_office").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_officestatus").removeClass("glyphicon-ok");
                $("#work_building").val("");
                $("#work_building").removeClass("valid");
                $("#work_building").parent().removeClass("has-success");
                $("#work_building").parent().prev().removeClass("label_true").removeClass("sign__word"); 
                $("#work_buildingstatus").removeClass("glyphicon-ok"); 
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
            if(isset($_GET['email'])){
                //данные пользователя
                $this->load->model('user/user_model', 'user');
                $user_data = $this->user->get_user($_GET['email']);
                $user_data['birthdate'] = date('d/m/Y', strtotime($user_data['birth']));
                $user_data['passportdate'] = date('d/m/Y', strtotime($user_data['passport_date']));
                foreach ($user_data as $name => $item){
                    echo '<script> $("#'.$name.'").val("'.$item.'"); </script>';
                }
                echo '<script> $("#username").text("'.$user_data['i'].'"); </script>';
            }
        }
        elseif ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2')  { 
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</body>
</html>