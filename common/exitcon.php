
<div id="surprize" style="display:none;">
<div class="container-fluid">
<div class="bg"><h1 class="text-center">Супер предложение онлайн займа с мгновенным одобрением</h1></div>
<div class="row">
	<div class="col-md-3">
		<div class="offer-i bg">
			<!--h4 class="recommend2"><span class="label label-success label-common">Рекомендуем <i class="fa fa-thumbs-o-up"></i></span></h4-->
			<div class="logo" style="padding-top:5px;">
				<img src="/templates/common/img/offers/kredito24.png">
			</div>
			<div class="clearfix"></div>
			<div>
				<!--h2>Срочный займ на банковскую карту</h2!-->
				<small>Займ на банковскую карту</small>
			</div>
			<hr>
			<div>
				<ul>
					<p>
				<small>Кредитный лимит</small><br>
				<b>до 30 000 руб.</b>
			</p>
					<p>
				<small>Процентная ставка</small><br>
				<b>1% в день</b>
			</p>
					<p>
				<small>Срок займа</small><br>
				<b>до 30 дней</b>
			</p>
					<p>
				<small>Возраст заемщика</small><br>
				<b>от 18 до 65 лет</b>
					</p>
				</ul>
			</div>
			<hr>
			<div>
				<a href="https://pxl.leads.su/click/a73d33af5994e13ff22d3074a918d998" onclick="markTarget('pixel_exitcon', 'Кредито24')" class="btn btn-success btn-lg btn-block" target="_blank">Получить деньги &gt;&gt;</a>
			</div>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="offer-i bg">
			<div class="logo">
				<img src="/templates/common/img/offers/zaymer.png">
			</div>
			<div class="clearfix"></div>
			<div>
				<!--h2>Быстрый микрозайм онлайн</h2!-->
				<small>&nbsp;</small>
			</div>
			<hr>
			<div>
				<ul>
					<p>
						<small>Кредитный лимит</small><br>
						<b>до 30 000 руб.</b>
					</p>
					<p>
						<small>Процентная ставка</small><br>
						<b>от 0,63% в день</b>
					</p>
					<p>
						<small>Срок займа</small><br>
						<b>до 30 дней</b>
					</p>
					<p>
						<small>Возраст заемщика</small><br>
						<b>от 18 лет</b>
					</p>
				</ul>
			</div>
			<hr>
			<div>
				<a href="https://pxl.leads.su/click/948b685b1a0a23e1df0953ef3f943f94" onclick="markTarget('pixel_exitcon', 'Займер')" class="btn btn-success btn-lg btn-block" target="_blank">Получить деньги &gt;&gt;</a>
			</div>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="offer-i bg">
			<div class="logo">
				<img src="/templates/common/img/offers/migcredit.png">
			</div>
			<div class="clearfix"></div>
			<div>
				<!--h2>Займ на карту, Яндекс.Деньги</h2!-->
				<small>&nbsp;</small>
			</div>
			<hr>
			<div>
				<ul>
					<p>
				<small>Кредитный лимит</small><br>
				<b>до 50 000 руб.</b>
			</p>
					<p>
				<small>Процентная ставка</small><br>
				<b>от 0,48% в день</b>
			</p>
					<p>
				<small>Срок займа</small><br>
				<b>до 24 недель</b>
			</p>
					<p>
				<small>Возраст заемщика</small><br>
				<b>от 21 до 65 лет</b>
					</p>
				</ul>
			</div>
			<hr>
			<div>
				<a href="https://pxl.leads.su/click/fe5be9ccb31be1e8cba4f6bac13b5235" onclick="markTarget('pixel_exitcon', 'МигКредит')" class="btn btn-success btn-lg btn-block" target="_blank">Получить деньги &gt;&gt;</a>
			</div>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="offer-i bg">
			<div class="logo">
				<img src="/templates/common/img/offers/ekapusta.png">
			</div>
			<div class="clearfix"></div>
			<div>
				<!--h2>Срочный займ на банковскую карту</h2!-->
				<small>Займ на QIWI, Contact, карту</small>
			</div>
			<hr>
			<div>
				<ul>
					<p>
				<small>Кредитный лимит</small><br>
				<b>до 15 000 руб.</b>
			</p>
					<p>
				<small>Процентная ставка</small><br>
				<b>2% в день</b>
			</p>
					<p>
				<small>Срок займа</small><br>
				<b>до 30 дней</b>
			</p>
					<p>
				<small>Возраст заемщика</small><br>
				<b>от 18 лет</b>
					</p>
				</ul>
			</div>
			<hr>
			<div>
				<a href="https://pxl.leads.su/click/8167a872352ee723964f421348e90733" onclick="markTarget('pixel_exitcon', 'Екапуста')" class="btn btn-success btn-lg btn-block" target="_blank">Получить деньги &gt;&gt;</a>
			</div>
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>
</div>
</div>

<script>
function Unloader(){
	
    var o = this;
 
    this.unload = function(evt)
    {
        var message = "Не теряйте возможность получить займ! Отправьте заявки в МФО, у которых уже готово для вас предложение.";
		
		$('#surprize').show();
		$('.page').hide();
		
		if ($('form#anketa input[name="email"]').val().length)
		$.getJSON('/add/?send=1&' + $('form#anketa').serialize()).done(function(data){
			if (typeof data.result != 'undefined' && data.result == 'OK' && typeof data.id != 'undefined')
			$('form#anketa input[name="id"]').val(data.id);
		});
		
        if (typeof evt == "undefined") {
            evt = window.event;
        }
        if (evt) {
            evt.returnValue = message;
        }
        return message;
    }
 
    this.resetUnload = function()
    {
        $(window).off('beforeunload', o.unload);
         setTimeout(function(){
            $(window).on('beforeunload', o.unload);
        }, 2000);
    }
 
    this.init = function()
    {
         
        $(window).on('beforeunload', o.unload);
		
        //$(document).on('click', 'a', function(){o.resetUnload});
        //$(document).on('submit', 'form', function(){o.resetUnload});
        $(document).on('keydown', function(event){
            if((event.ctrlKey && event.keyCode == 116) || event.keyCode == 116){
                o.resetUnload;
            }
        });
    }
    this.init();
}
 
$(document).ready(function(){
    if(typeof window.obUnloader != 'object')
    {
        window.obUnloader = new Unloader();
    }
	
	$('a').click(function(){if(typeof window.obUnloader != 'undefined') window.obUnloader.resetUnload();});
	$(document).on('submit', 'form', function(){if(typeof window.obUnloader != 'undefined') window.obUnloader.resetUnload();});
});
</script>