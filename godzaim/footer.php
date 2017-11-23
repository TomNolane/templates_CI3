<link href="/modules/3dgallery/css/style.css" rel="stylesheet" media="screen">
<script src="/modules/3dgallery/js/modernizr.custom.53451.js"></script>
<script src="/modules/3dgallery/js/jquery.gallery.js"></script>

<script>
$(document).ready(function(){
	$('#dg-container').gallery();
});
</script>
<div id="ya-rtb">
    <div id="yandex_rtb_R-A-249178-1"></div>
    <div id="yandex_rtb_R-A-249178-2"></div>
</div>

</div>

<div class="buffer"></div>
<div class="footer-wrap">
	<div class="footer">
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <img src="/templates/godzaim/img/logo-footer.png" class="logo">
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-xs-12">
                        <p style="font-size: 10px; color: #fff;">
                            Cервис по подбору выгодных онлайн займов находящийся по адресу Россия, Ленинградская обл. г. Санкт-Петербург, ул. ул. Осипенко, 12, оф 201 <a href="mailto:support@godzaim.ru" target="_blank">support@godzaim.ru</a> <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                        </p>
                    </div>
                    <div class="col-md-6 hidden-xs hidden-sm">
                        <p style="font-size: 10px; color: #fff;">
                            Займы предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней. Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей выдается по ставке 0% в случае своевременного погашения.
                            ИП «Бабакова К.К.» ОГРНИП 316222500122426 ИНН 222511216499
                        </p>
                    </div>    
                </div>
                <div class="clearfix">&nbsp;</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="modal-title" id="feedbackModalLabel">Остались вопросы?</h1>
                                <p>Просто заполните форму и наш специалист свяжется с Вами</p>
			</div>
			<hr>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 modal-body-form">
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="feedback-name" placeholder="Имя" title="Имя">
						</div>
						<div class="form-group">
							<input type="tel" class="form-control input-lg" id="feedback-phone" placeholder="Телефон" title="Телефон">
						</div>
						<div class="form-group">
							<input type="email" class="form-control input-lg" id="feedback-email" placeholder="Email" title="Email" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" id="feedback-comment" placeholder="Текст вашего сообщения" title="Текст вашего сообщения" rows="3"></textarea>
						</div>
						<div class="form-group text-center">
                            <button type="button" class="btn btn-primary btn-lg" id="feedback-send">Отправить</button>
						</div>                                            
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/modules/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="/modules/jquery-maskedinput/jquery.maskedinput.1.4.2.min.js"></script>
<script src="/modules/jquery.ion.rangeslider/js/ion.rangeSlider.min.js"></script>
<script>
function setcookie(name, value, expires, path, domain, secure)
{
    document.cookie =    name + "=" + escape(value) +
                        ((expires) ? "; expires=" + (new Date(expires)) : "") +
                        ((path) ? "; path=" + path : "; path=/") +
                        ((domain) ? "; domain=" + domain : "") +
                        ((secure) ? "; secure" : "");
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
function getcookie(name)
{
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;
    
    if (cookie.length > 0)
    {
        offset = cookie.indexOf(search);
        
        if (offset != -1)
        {
            offset += search.length;
            end = cookie.indexOf(";", offset)
            
            if (end == -1)
            {
                end = cookie.length;
            }
            
            setStr = unescape(cookie.substring(offset, end));
        }
    }
    
    return(setStr);
}
function GetMoney()
{
    $('form#anketa').submit();
} 
function Loading(flag){
		if (typeof flag == 'undefined'){
                    document.getElementById('loading').style.display = 'block';
                    $('#feedback-send').prop('disabled', true);
                    $('#feedback-send').html('Отправка <i class="fa fa-spinner fa-spin fa-pulse"></i>');
                }
		else if (!flag){
                    $('#feedback-send').html('Отправить');
                    $('#feedback-send').prop('disabled', false);
                    document.getElementById('loading').style.display = 'none';  
                } 
} 
var amount = 15000;
var day = 10;
var from_ = 13;
$(document).ready(function(){
	$.mask.definitions['*'] = "[а-яёА-ЯЁA-Za-z0-9\/\-_]";
	$('[data-toggle="popover"]').popover();
    $('input#phone').mask("8 (9nn) nnn nnnn", { "placeholder": "8 (9__) ___ ____" });
    $('input#feedback-phone').mask("8 (9nn) nnn nnnn", { "placeholder": "8 (9__) ___ ____" });
    $('input#work_phone').mask("8 (9nn) nnn nnnn", { "placeholder": "8 (9__) ___ ____" });
    $('input#passport').mask("nnnn nnnnnn", { "placeholder": "____ ______" });
    $('#passport_code').mask("nnn-nnn", { "placeholder": "___-___" });
    $('input#birthdate').mask("nn/nn/nnnn", { "placeholder": "__/__/__" });
    $('input#passportdate').mask("nn/nn/nnnn", { "placeholder": "__/__/__" });
    $('input#work_salary').mask("nnnn?nn", { "placeholder": "" });
    $('input#work_experience').mask("n?nn", { "placeholder": "" });       
    $('input#flat').mask("n?***", { "placeholder": "" });
    $('input#building').mask("n?***", { "placeholder": "" });
    $('input#work_house').mask("n?***", { "placeholder": "" });
	//$('.fancybox').fancybox();
	/*
	$('.ec').each(function(){
		var variant = ($(this).context.tagName == 'SPAN')? $(this).context.classList[0] : $(this).attr('name');
		var value = getcookie(variant);
		if (value !== null) {
			if ($(this).context.tagName == 'INPUT'){
				if ($(this).context.type == 'radio' || $(this).context.type == 'checkbox'){
					$(this).prop('checked', ($(this).val() == value));
				}
				else $(this).val(value);
			}
			else if ($(this).context.tagName == 'SELECT') $(this).find('option[value="' + value + '"]').attr('selected', true);
			else if ($(this).context.tagName == 'SPAN'){
				if (variant == 'reg_region' && value == '0') $(this).text('Совадает с адресом проживания');
				else $(this).text(value);
			}
		}
		//setcookie('lk', '1');
	});
	
	
	ec.get('lk', function(value){
		var variants = ['f', 'i', 'o'];
		if (typeof value != 'undefined' && !!value) {
			variants.forEach(function(variant, id){
				ec.get(variant, function(value){
					if (typeof value != 'undefined') $('.' + variant).text(value);
				});
			});
		}
	});*/
	
	$('.docs-a').click(function(){
		var href = $(this).attr("href");
		var hash = href.substr(href.indexOf("#"));
		$('.collapse').collapse('hide');
		$(hash + '.collapse').collapse('show');    
		$('body').animate({scrollTop: $($(hash).parent()).offset().top -100 }, 1000);
	});
	
	$('#feedback-send').click(function(){
		Loading();
                
		var data = {name:$('#feedback-name').val(),phone:$('#feedback-phone').val(),email:$('#feedback-email').val(),comment:$('#feedback-comment').val()};
		
		if ((typeof data.phone != 'undefined' && data.phone != '') && (typeof data.email != 'undefined' && data.email != '') && (typeof data.comment != 'undefined' && data.comment != '')) {
			$.ajax({
				url:'/feedback/',
				type:'POST',
				dataType:'json',
				data:data
			}).done(function(response){
				if (response != null){
					if (typeof response.error != 'undefined') {
						alert('Ошибка. ' + response.error);
					}
					else {
						$('#feedbackModal').modal('hide');
						Loading(0);
						alert('Заявка отправлена. Мы ответим вам в ближайшее время.');
					}
				}
				else{alert('Не получилось отправить. Попробуйте ещё раз.');}
			}).fail(function(jqxhr,textStatus,error){
				alert('Не получилось отправить. Попробуйте ещё раз.');
			}).always(function(){Loading(0);});
		} else {Loading(0);alert('Пожалуйста, заполните все поля.');}
	});
	
	$('.amount').ionRangeSlider({
        values: [1000, 2000, 3000, 4000, 5000,6000,7000,8000,9000,10000,11000,12000,13000,14000,15000,20000,25000,30000,40000,50000,80000,100000],
		min: 1000,
		max: 100000,
		//step: 1000,
		from: 13, 
		prettify_enabled: true,
        hide_from_to: true, 
		onChange:function(range){
			var percent = 0;
			var attr = '';
			var color = '';
            
			$('.form-sum-value').text(range.from_value + ' Р');
			$('.calc-period-item').removeClass('active');
			
			if (range.from_value <= 15000) {
                                $('#period').val('14');
                                $('#period-1').addClass('active');
				perc = '97';
				attr = 'Автоматическое одобрение';
				color = 'green';
                                day_comment = 'От 61 дня';
                                day=1;
			}
			else if (range.from_value <= 20000) {
                                $('#period').val('14');
                                $('#period-2').addClass('active');
				perc = '94';
				attr = 'Может понадобиться паспорт';
				color = 'green';
                                day_comment = 'От 130 дней';
                                day=15;
			}
			else if (range.from_value <= 30000) {
                                $('#period').val('21');
                                $('#period-3').addClass('active');
				perc = '84';
				attr = 'Нужен только паспорт';
				color = 'orange';
                                day_comment = 'От 130 дней';
                                day=15;
			}
			else if (range.from_value <= 50000) {
                                $('#period').val('30');
                                $('#period-4').addClass('active');
				perc = '72';
				attr = 'Нужна справка о доходах';
				color = 'orange';
                                day_comment = 'От 230 дней';
                                day=15;
			}
			else {
                                $('#period').val('30');
                                $('#period-5').addClass('active');
				perc = '64';
				attr = 'Нужна справка о доходах';
				color = 'red';
                                day_comment = 'От 365 дней';
                                day=30;
			}                        
            
			$('.current_amount').text(String(range.from_value).split(/(?=(?:\d{3})+$)/).join(' '));
			$('.percent_rate').text(perc + '%');
            $('.comment').text(attr);
            $('.current_period').text(day_comment);
			//$('#credit_hint').html(attr);
			//$('#ranges-label').hide();
			$('.results tr').each(function(indx, element){
				if ($(element).data('amount') < range.from_value) $(element).hide();
				else $(element).show();
			});
            amount = range.from_value;
            from_ =  range.from;
            $('#from_').val(from_);
            //            updateComm();
		}
	});
	
    $('.amount2').ionRangeSlider({
        values: [1000, 2000, 3000, 4000, 5000,6000,7000,8000,9000,10000,11000,12000,13000,14000,15000,20000,25000,30000,40000,50000,80000,100000],
		min: 1000,
		max: 100000, 
        from:  13,   
        onStart:function(range){
            $('.form-sum-value').text(<?php echo empty($_POST['amount'])? 14000 : $_POST['amount']; ?> + ' Р'); 
            range.from = <?php echo empty($_POST['from_'])? 13 : $_POST['from_']; ?>; 
        },
        <?php //echo empty($_POST['amount'])? 15000 : $_POST['amount']; ?>
        onChange:function(range){
            $('.form-sum-value').text(range.from_value + ' Р');
            if (range.from_value <= 10000) {
                $('#period').val('7');
                $('#period2').val('От 61 до 130 дней');
            }
            else if (range.from_value <= 15000) {
                $('#period').val('14');
                $('#period2').val('От 61 до 130 дней');
            }
            else if (range.from_value <= 20000) {
                $('#period').val('31');
                $('#period2').val('От 61 до 130 дней');
            }
            else if (range.from_value <= 30000) {
                $('#period').val('31');
                $('#period2').val('От 61 до 130 дней');
            }
            else if (range.from_value <= 50000) {
                $('#period').val('130');
                $('#period2').val('От 130 до 250 дней');
            }
            else {
                $('#period').val('180');
                $('#period2').val('От 250 до 365 дней');
            }
		}
    });
	
	<?php if ($this->uri->segment(1) == '') { ?>
	var slider = $('.amount').data('ionRangeSlider');//console.log(slider);
	var slider_plus = true;
	var slider_intl = setInterval(function(){
        var step = slider_plus? slider.options.from+slider.options.step : slider.options.from-slider.options.step;
        $('.form-sum-value').text(slider.options.values[slider.options.from] + ' Р');
		if (step == slider.options.max) slider_plus = false;
		if (step < <?php echo empty($_POST['amount'])? 13 : $_POST['amount']; ?>) {
            clearInterval(slider_intl); 
		}
		else slider.update({from:step});
	}, 5);
	<?php } ?>
});
</script>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46347456 = new Ya.Metrika({ id:46347456, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46347456" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<script>
function markTarget(target,param,id){
    if (typeof yaCounter46347456 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter46347456.reachGoal(target);
	else yaCounter46347456.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){
                //console.log(data);
            }
        });        
        
}
</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2838085", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2838085;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=RRRhvxA7nvURG7xAUtL1b2tM0X6dhz4tDAGsjmC3XYdu0hMp4G5M1qB0DwX9x5CjKiwuRfUUCPeTFJgPM96VEJMDEF2kd2TqnCHkwMhTMLKMsje7SOydhyYmYfpnJZCNZHLFjJlRoiPU4bCFDyrAjhJufuYNkPM30caOVnC7B/8-&pixel_id=1000099082';</script>
<!--Константин Гутлид-->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=Z7pk5C4xjqokU5G*QALWNq2pkJhzPOom99yo3Qxf9oIeFlECprDRQgjZP9SEA86kYiMHFgew1rs3AF6e*l8tUryFp/Fl495P7rPnkWnSEnGPEQiabdvpee/7*npmHm33ovO1TSw3ulRHBDU7ITWvhsLgKc4jAIpbdw4C7HeMV/s-&pixel_id=1000099730';</script>

<!-- Общий счетчик Yandex.Metrika ЛидМафия->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45336951 = new Ya.Metrika({
                    id:45336951,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45336951" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Общий счетчик Mail.ru ЛидМафия->
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2916281", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=2916281;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104440793-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
    var isMobile = false; //initiate as false
        // device detection
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true; 
</script>
<!-- Код тега ремаркетинга Google -->
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 844462441;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/844462441/?guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108410422-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108410422-1');
</script>
</body>
</html>