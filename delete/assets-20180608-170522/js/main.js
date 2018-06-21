var equalheight=function(container){var currentTallest=0,currentRowStart=0,rowDivs=new Array(),$el,topPosition=0;$(container).each(function(){$el=$(this);$($el).height('auto');var topPostion=$el.position().top;if(currentRowStart!=topPostion){for(var currentDiv=0;currentDiv<rowDivs.length;currentDiv++){rowDivs[currentDiv].height(currentTallest);}rowDivs.length=0;currentRowStart=topPostion;currentTallest=$el.height();rowDivs.push($el);}else{rowDivs.push($el);currentTallest=(currentTallest<$el.height())?($el.height()):(currentTallest);}for(currentDiv=0;currentDiv<rowDivs.length;currentDiv++){rowDivs[currentDiv].height(currentTallest);}});};$(document).ready(function(){var body=$('body'),footerHeight=$(".ex-main-footer").outerHeight(),panelCollapse=$('.panel-collapse'),indicator=$('.ex-indicator-scope'),formIndicator1=$('.ex-first-step'),formIndicator2=$('.ex-second-step').find('span'),formIndicator3=$('.ex-last-step'),formBtn1=$('#submitOne'),formBtn2=$('#submitTwo');body.css('padding-bottom',footerHeight);$(window).resize(function(){footerHeight=$(".ex-main-footer").outerHeight();body.css('padding-bottom',footerHeight);});panelCollapse.on('show.bs.collapse',function(){$(this).prev('.panel-heading').find('.ex-plus-icon').removeClass('ex-plus-icon').addClass('ex-minus-icon');});panelCollapse.on('hide.bs.collapse',function(){$(this).prev('.panel-heading').find('.ex-minus-icon').removeClass('ex-minus-icon').addClass('ex-plus-icon');});$(formBtn1).on('click',function(){indicator.addClass('ex-on-second-step');});$(formBtn2).on('click',function(){indicator.removeClass('ex-on-second-step').addClass('ex-on-last-step');});var collapseParagraph=$('.ex-hidden'),collapseBtn=$('.ex-collapse');collapseParagraph.each(function(index){var self=$(this);if($.trim(self.html()).length>0&&self.hasClass('ex-active')){self.next('.ex-footer').append("<span class='ex-close ex-collapse'>- Закрыть</span>")}else{self.next('.ex-footer').append("<span class='ex-collapse'>+ Подробнее</span>")}});$(".ex-footer").on("click",collapseBtn,function(){var self=$(this);self.prev(collapseParagraph).toggleClass('ex-active');self.find($('.ex-collapse')).toggleClass('ex-blinked ex-shown');if(self.prev(collapseParagraph).hasClass('ex-active')){self.closest('article').css('height','auto');self.find($('.ex-collapse')).addClass('ex-close').text('- Закрыть');self.find('.ex-main-btn').slideDown('500');}else{self.find($('.ex-collapse')).removeClass('ex-close').text('+ Подробнее');self.find(".ex-main-btn").removeAttr("style").hide();equalheight('#ex-equal-blocks article');}});equalheight('#ex-equal-blocks article');});$(window).on('resize',function(){equalheight('#ex-equal-blocks article');});
(function($){
	$.fn.jRatingAdvance = function( options ){
		var self = $(this);
		
		var defaults = $.extend({
			stars: 5,
			size: false,
			buttons_color: false,
			active_color: false,
			text: false,
			rating: 0
		}, options );
		
		//for css
		$(this).addClass("j-rating");
		
		//add btns
		var btns = function(){
			var btns = "";
			
			for (var i = 1; i <= defaults.stars; i++ ) {
				btns += "<span class='glyphicon glyphicon-star'></span>";
			}
	
			return btns;
		};
		
		self.append("<div class='stars'><div class='bottom'>" + btns() + "</div><div class='top'>" + btns() + "</div></div>");
		
		//add hidden input
		self.append("<input type='hidden' name='j-rating' value='0' />");
		
		//size
		if (defaults.size) {
			self.css("font-size", defaults.size);
		}
		
		//buttons color
		if (defaults.buttons_color) {
			$(this).append("<style type='text/css'>#" + self[0].id + " .bottom { color: " + defaults.buttons_color +"; }</style>");
		}

		//active color
		if (defaults.active_color) {
			$(this).append("<style type='text/css'>#" + self[0].id + " .top { color: " + defaults.active_color + " !important; }</style>");
		}
		
		//display text
		if (defaults.text) {
			$(this).append("<div class='text'>" + defaults.rating + "</div>");
		}
		
		//mouse enter & move
		var mouseClicked = 0;
		
		self.find(".stars").mousemove(function(e){
			var w = self.find(".stars").width();
			var pos = e.pageX - self.offset().left;
			var percent = Math.round( (pos / w ) * 100 );
			var starPercent = percent / (100 / (defaults.stars * 10) ) / 10;
		
			starPercent = starPercent.toFixed(1);

					
			$(this).find(".top").width(percent + "%");
			
			self.click(function(){
				self.find("input[name=j-rating]").val(starPercent);
				self.find(".text").html(starPercent);
				mouseClicked = percent;
			});

		});
		
		//mouse leave
		self.find(".stars").mouseleave(function(){
			$(this).find(".top").width(mouseClicked + "%");
		});
		
		//edit page
		if (defaults.rating != 0) {
			var percent = 100 / (defaults.stars / defaults.rating);
			self.find(".top").width(percent + "%");
			mouseClicked = percent;
					
			self.find("input[name=j-rating]").val(defaults.rating);
		}
	};
})(jQuery);
function checkMe()
{ 
    var y = document.getElementById('agree');
    if(y != null)
    {
        if(y.checked)
        { 
            $('#my_btn').css("display", "block");  
        }
        else
        {
            $('#my_btn').css("display", "none");
        } 
    } 
}  

function checkMee()
{ 
    var y2 = document.getElementById('agree');
    if(y2 != null)
    {
        if(y2.checked)
        { 
            $('#next1').css("visibility", "visible");  
        }
        else
        {
            $('#next1').css("visibility", "hidden");
        } 
    } 
}

//-----------------------Initializing--------------------------
$(document).ready(function () {

    if($('#amount').val() != undefined)
    {
			var c = getParameterByName('amount');
			var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('#amount').val());
			if (c != null) {
				if (c > 100000 || c < 1000) {
					c = 20000;
				}
				gg = c;
			};
			var currentLoanSize =  parseInt(gg),
           range = $("#rangeSlider"),
			commissionPercantage = 13,
			rangeUpperValue = $('#ex-slider-val'),
			rangeTableValue = $('.ex-current-val'),
			timeTable = $('.ex-time'),
			commissionTableSize = $('.ex-Commission'),
			returnTable = $('.ex-total'),
			probabilityTable = $('.irs-single'),
			probabilityTable2 = $('.ex-prob'),
			probability = 95,
			time = '130-200 дней',
			commission = (currentLoanSize * commissionPercantage) / 100,
			returnTotal = currentLoanSize + commission,
			setDynamicProbability = function () {
				if (currentLoanSize >= 30000 && currentLoanSize < 50000) {
					probability = 85;
					probabilityTable.text("вероятность " + probability).append('%');
					probabilityTable2.html("<span>" + probability + "%</span>");
				} else if (currentLoanSize >= 50000 && currentLoanSize < 80000) {
					probability = 77;
					probabilityTable.text("вероятность " + probability).append('%');;
					probabilityTable2.html("<span>" + probability + "%</span>");
				} else if (currentLoanSize >= 80000) {
					probability = 65;
					probabilityTable.text("вероятность " + probability).append('%');
					probabilityTable2.html("<span>" + probability + "%</span>");
				} else if (currentLoanSize <= 25000) {
					probability = 95;
					probabilityTable.text("вероятность " + probability).append('%');
					probabilityTable2.html("<span>" + probability + "%</span>");
				}
			},
			setDynamicTimePeriod = function () {
				if (currentLoanSize < 20000) {
					time = '100-130 дней';
					timeTable.html("<span>" + time + "</span>");
				}
				if (currentLoanSize < 8000) {
					time = '61-100 дней';
					timeTable.html("<span data='15'>" + time + "</span>");
				}
				if (currentLoanSize >= 20000 && currentLoanSize < 30000) {
					time = '130-200 дней';
					timeTable.html("<span>" + time + "</span>");
				}
				if (currentLoanSize > 30000 && currentLoanSize < 50000) {
					time = '200-250 дней';
					timeTable.html("<span>" + time + "</span>");
				}
				if (currentLoanSize > 50000) {
					time = '250-365 дней';
					timeTable.html("<span>" + time + "</span>");
				}
			};
		rangeUpperValue.append(currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + "<span> рублей</span>");
		rangeTableValue.append("<span>" + currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
		timeTable.append("<span>" + time + "</span>");
		commissionTableSize.append("<span>" + commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
		returnTable.append("<span>" + returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>");
		probabilityTable.text('').append("<span>вероятность " + probability + "%</span>");
		probabilityTable2.text('').append("<span>" + probability + "%</span>");
		range.on("change", function () {
			probabilityTable.css('margin-left', '0');
			currentLoanSize = parseInt($(this).prop("value"));
			commission = (currentLoanSize * commissionPercantage) / 100;
			returnTotal = currentLoanSize + commission;
			var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
				commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
				totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
			rangeUpperValue.html(currentLoanToShow + "<span> рублей</span>");
			rangeTableValue.html("<span>" + currentLoanToShow + " рублей</span>");
			commissionTableSize.html("<span>" + commissionToShow + " рублей</span>");
			returnTable.html("<span>" + totalToShow + " рублей</span>");
			setDynamicProbability();
			setDynamicTimePeriod();
		});
		range.on("finish", function () {
			probabilityTable.css('margin-left', '0');
			currentLoanSize = parseInt($(this).prop("value"));
			commission = (currentLoanSize * commissionPercantage) / 100;
			returnTotal = currentLoanSize + commission;
			var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
				commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
				totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
			rangeUpperValue.html(currentLoanToShow + "<span> рублей</span>");
			rangeTableValue.html("<span>" + currentLoanToShow + " рублей</span>");
			commissionTableSize.html("<span>" + commissionToShow + " рублей</span>");
			returnTable.html("<span>" + totalToShow + " рублей</span>");
			setDynamicProbability();
			setDynamicTimePeriod();
		});  
    }
}); 