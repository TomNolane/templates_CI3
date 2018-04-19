
</div>
<div class="buffer"></div>
<?php 
$from = '15';
if($this->uri->segment(1) == '' || $this->uri->segment(1) == ' ' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'allarticles')
{
    echo '<a href="#0" class="cd-top">Наверх</a>';
} 
if($this->uri->segment(1) != 'form')
{
    echo '<!-- Декстоп --><div class="text-center" id="ya-rtb"><div id="yandex_rtb_R-A-243980-1"></div>';
    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2') { 
        echo '<!-- Мобайл --><div id="yandex_rtb_R-A-243980-3"></div>';
    }
    echo '</div>';
	echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Деньгомэн -->
    <ins class="adsbygoogle text-center"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="9017730427"
    data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}
?>
<footer>
    <div class="container">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-3">
                    <h1 style="text-align: left; margin: 10px;" id="for_lk">
                        Dengoman
                    </h1>
                    <div class="footer-copyright"></div>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm" >
                    <div class="footer-text spec_footer4" style="font-size: 10px; line-height: 1;">
                        <p>Сервис по подбору выгодных онлайн займов находящийся по адресу <br>Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201
                        <br><a href="mailto:support@dengoman.ru">support@dengoman.ru</a> <span class="hidden-xs hidden-sm"> | +7(495) 006 19 61</span></p>
                    </div>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm spec_footer5">
                    <p style="font-size: 9px">Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                        <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="clearfix"></div>
<?php 
    require 'templates/common/get_display_size.php';
    echo '<script>';
    require 'templates/dengoman/js/jquery.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengoman/js/bootstrap.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js';
    echo '</script>'; 
    echo '<script>';
    require 'templates/dengoman/js/coockie.js';
    echo '</script>';
    require 'templates/common/detect.min.php';
    echo '<script>';
    require 'templates/dengoman/js/modal.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengoman/js/jquery.suggestions.min.js';
    echo '</script>';
    echo '<script>';
    require 'modules/poshytip-1.2/src/jquery.poshytip.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengoman/js/jquery.form-validator.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengoman/js/jquery.pickmeup.twitter-bootstrap.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengoman/js/pickmeup.min.js';
    echo '</script>';
    echo '<script>';
    require 'templates/dengoman/js/settings.js';
    echo '</script>';
?> 
<!--[if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif]--> 
<?php require 'yandex-metrika.php'; ?>
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

var d = new Date();
var amount = 20000;
var day = 10;
d.setMinutes(d.getMinutes() + 15);
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
    $('.perc').text(percent + ' %');
    $('.comm').text(comm + ' P');
    $('.sum').text(String(summ).split(/(?=(?:\d{3})+$)/).join(' ') + ' P');

    // var slider4 = $('#rangeSlider').data('ionRangeSlider');
    // console.log(slider4);
    // $('#amount').val(slider4.result.from_value);
    // $('#form_slrd').val(slider4.result.from);
}; 
$(document).ready(function () {
	if(location.hash != null && location.hash != ""){
		$('.collapse').removeClass('in').parent().find('a[role="button"]').addClass('collapsed');
		$(location.hash + '-panel' + '.collapse').collapse('show');
	}
	$('.dropdown-menu a').click(function(){
		var url = $(this).attr('href');
		if (url.match('#')) {
			var $panel = $('#' + url.split('#')[1] + '-panel.collapse');
			$('.collapse').removeClass('in').parent().find('a[role="button"]').addClass('collapsed');
			$panel.collapse('show');
		}
	});
});
</script>

<?php 
if ($this->uri->segment(1) == '' || $this->uri->segment(1) == ' '|| $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form' ) {?>
<script>
    function zero(value) {
		return value < 10 ? '0' + value : value;
	}

	$(document).ready(function () {
		
		$('.form h2 span span').text(zero(d.getHours()) + ':' + zero(d.getMinutes()))

		$('#rangeSlider').ionRangeSlider({
			values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000,
				25000, 30000, 40000, 50000, 80000, 100000
			],
			prettify_enabled: true,
			grid: false,
			grid_num: 1,
            hide_min_max: false,
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
			prettify: function (range) {
				var n = range.toString();
				return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + ' ');
            },
            onStart:function (range) {
                if (range.from_value <= 10000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 15000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 20000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 30000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 50000) {
					d = 'От 130 до 250 дней';
					$('#period').val(15);
				} else {
					d = 'От 250 до 365 дней';
					$('#period').val(30);
				}
                $('.d').text(d);
                $('#period2').val(d);
				$('.results tr').each(function (indx, element) {
					if ($(element).data('amount') < range.from) $(element).hide();
					else $(element).show();
				});

				amount = range.from_value;
                $('#amount').val(range.from_value);
                $('#form_slrd').val(range.from);

				updateComm();
            },
			onChange: function (range) {
				if (range.from_value <= 10000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 15000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 20000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 30000) {
					d = 'От 61 до 130 дней';
					$('#period').val(10);
				} else if (range.from_value <= 50000) {
					d = 'От 130 до 250 дней';
					$('#period').val(15);
				} else {
					d = 'От 250 до 365 дней';
					$('#period').val(30);
				}
                $('.d').text(d);
                $('#period2').val(d);
                
				$('.results tr').each(function (indx, element) {
					if ($(element).data('amount') < range.from) $(element).hide();
					else $(element).show();
				});

                $('#amount').val(range.from_value);
                $('#form_slrd').val(range.from);

				amount = range.from_value;
				updateComm();
			}
		});
	});
</script>
<?php
    if ($this->uri->segment(1) != 'form'){
    echo '<script> $(document).ready(function () {
        var slider3 = $(\'#rangeSlider\').data(\'ionRangeSlider\');
        var slider_plus = true;
        var n = 10;
        var slider_init = setInterval(function () {
            if (slider_plus) {
                n++;
            } else {
                n--;
            }
            if (n == 21 && n != '.$from.') {
                slider_plus = false;
            }else if (n == '.$from.' && slider_plus == false) {
                clearInterval(slider_init);
            }else if (n == 21 && n == '.$from.') {
                clearInterval(slider_init);
            }

            slider3.update({
                from: n
            });
            
            $(\'#amount\').val(slider3.result.from_value);
            $(\'#form_slrd\').val(slider3.result.from);
            amount = slider3.result.from_value;
            updateComm();
        }, 50);
    });</script>';
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
<script>(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=LXOGS14Mckvak8y6PqTJ1ipVo6GUndpL/0lz*Oxtc1ZXl02xRuQQBvu7tS0ixHqq3*JJ057ri6tjG/uuPhxq9hKtAY1B1YvnkiO5c9I8l6XTurE6HL/oJbRFm2wQ6bjIbJLMdySh47BmhISTMfq4HLVAUlTEgaF*iO2zVH5vRB0-&pixel_id=1000099084';</script>
<!--Константин Гутлид-->
<script>(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=asexo0CXnxyfrTPKupW5cBn6KvfsIwG2vdxtQdwRID76tIB*nDP5C0Lq8SQT21MLOL1JoDW5MPgq74pPrE6I7ePJf1zd2Qj5dLLmpgN6s0Ha0G6b4*vCId6rbRQWzlYKDuYUpc9VZYY1O*bHch7iOKeDUWNZm*fopqPHiPQEWJQ-&pixel_id=1000099723';</script>
<script>
    var isMobile = false; //initiate as false
        // device detection
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
        if(isMobile){
            (function(w, d, n, s, t) {
            w[n] = w[n] || [];
            w[n].push(function() {
            Ya.Context.AdvManager.render({
            blockId: "R-A-243980-3",
            renderTo: "yandex_rtb_R-A-243980-3",
            async: true
            });
            });
            t = d.getElementsByTagName("script")[0];
            s = d.createElement("script");
            s.type = "text/javascript";
            s.src = "//an.yandex.ru/system/context.js";
            s.async = true;
            t.parentNode.insertBefore(s, t);
            })(this, this.document, "yandexContextAsyncCallbacks");
            $('#display').val(1);
        }else{
            (function(w, d, n, s, t) {
            w[n] = w[n] || [];
            w[n].push(function() {
            Ya.Context.AdvManager.render({
            blockId: "R-A-243980-1",
            renderTo: "yandex_rtb_R-A-243980-1",
            async: true
            });
            });
            t = d.getElementsByTagName("script")[0];
            s = d.createElement("script");
            s.type = "text/javascript";
            s.src = "//an.yandex.ru/system/context.js";
            s.async = true;
            t.parentNode.insertBefore(s, t);
            })(this, this.document, "yandexContextAsyncCallbacks");
        }
</script>
<?php require 'google-analytics.php'; ?>
</body>
</html>