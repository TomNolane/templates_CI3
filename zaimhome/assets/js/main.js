var equalheight=function(container){var currentTallest=0,currentRowStart=0,rowDivs=new Array(),$el,topPosition=0;$(container).each(function(){$el=$(this);$($el).height('auto');var topPostion=$el.position().top;if(currentRowStart!=topPostion){for(var currentDiv=0;currentDiv<rowDivs.length;currentDiv++){rowDivs[currentDiv].height(currentTallest);}rowDivs.length=0;currentRowStart=topPostion;currentTallest=$el.height();rowDivs.push($el);}else{rowDivs.push($el);currentTallest=(currentTallest<$el.height())?($el.height()):(currentTallest);}for(currentDiv=0;currentDiv<rowDivs.length;currentDiv++){rowDivs[currentDiv].height(currentTallest);}});};$(document).ready(function(){var body=$('body'),footerHeight=$(".ex-main-footer").outerHeight(),panelCollapse=$('.panel-collapse'),indicator=$('.ex-indicator-scope'),formIndicator1=$('.ex-first-step'),formIndicator2=$('.ex-second-step').find('span'),formIndicator3=$('.ex-last-step'),formBtn1=$('#submitOne'),formBtn2=$('#submitTwo');body.css('padding-bottom',footerHeight);$(window).resize(function(){footerHeight=$(".ex-main-footer").outerHeight();body.css('padding-bottom',footerHeight);});panelCollapse.on('show.bs.collapse',function(){$(this).prev('.panel-heading').find('.ex-plus-icon').removeClass('ex-plus-icon').addClass('ex-minus-icon');});panelCollapse.on('hide.bs.collapse',function(){$(this).prev('.panel-heading').find('.ex-minus-icon').removeClass('ex-minus-icon').addClass('ex-plus-icon');});$(formBtn1).on('click',function(){indicator.addClass('ex-on-second-step');});$(formBtn2).on('click',function(){indicator.removeClass('ex-on-second-step').addClass('ex-on-last-step');});var collapseParagraph=$('.ex-hidden'),collapseBtn=$('.ex-collapse');collapseParagraph.each(function(index){var self=$(this);if($.trim(self.html()).length>0&&self.hasClass('ex-active')){self.next('.ex-footer').append("<span class='ex-close ex-collapse'>- Закрыть</span>")}else{self.next('.ex-footer').append("<span class='ex-collapse'>+ Подробнее</span>")}});$(".ex-footer").on("click",collapseBtn,function(){var self=$(this);self.prev(collapseParagraph).toggleClass('ex-active');self.find($('.ex-collapse')).toggleClass('ex-blinked ex-shown');if(self.prev(collapseParagraph).hasClass('ex-active')){self.closest('article').css('height','auto');self.find($('.ex-collapse')).addClass('ex-close').text('- Закрыть');self.find('.ex-main-btn').slideDown('500');}else{self.find($('.ex-collapse')).removeClass('ex-close').text('+ Подробнее');self.find(".ex-main-btn").removeAttr("style").hide();equalheight('#ex-equal-blocks article');}});equalheight('#ex-equal-blocks article');});$(window).on('resize',function(){equalheight('#ex-equal-blocks article');});

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
            $('#next1f').css("visibility", "visible");  
        }
        else
        {
            $('#next1f').css("visibility", "hidden");
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
            probabilityTable = $('.ex-probability'),
            probability = 95,
            time = '130-200 дней',
            commission = (currentLoanSize * commissionPercantage) / 100,
            returnTotal = currentLoanSize + commission,
            setDynamicProbability = function () {
                if (currentLoanSize >= 30000 && currentLoanSize < 50000) {
                    probability = 85;
                    probabilityTable.text(probability).append("%");
                } else if (currentLoanSize >= 50000 && currentLoanSize < 80000) {
                    probability = 77;
                    probabilityTable.text(probability).append("%");
                } else if (currentLoanSize >= 80000) {
                    probability = 65;
                    probabilityTable.text(probability).append("%");
                } else if (currentLoanSize <= 25000) {
                    probability = 95;
                    probabilityTable.text(probability).append("%");
                }
            },
            setDynamicTimePeriod = function () {
                if (currentLoanSize < 20000) {
                    time = '100-130 дней';
                    timeTable.text(time);
                }
                if (currentLoanSize < 8000) {
                    time = '61-100 дней';
                    timeTable.text(time);
                }
                if (currentLoanSize >= 20000 && currentLoanSize < 30000) {
                    time = '130-200 дней';
                    timeTable.text(time);
                }
                if (currentLoanSize > 30000 && currentLoanSize < 50000) {
                    time = '200-250 дней';
                    timeTable.text(time);
                }
                if (currentLoanSize > 50000) {
                    time = '250-365 дней';
                    timeTable.text(time);
                }
            };
        rangeUpperValue.text(currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
        rangeTableValue.text(currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")).append("<i></i>");
        timeTable.text(time);
        commissionTableSize.text(commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")).append("<i></i>");
        returnTable.text(returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")).append("<i></i>");
        probabilityTable.text(probability).append('%');
        range.on("change", function () {
            currentLoanSize = parseInt($(this).prop("value"));
            commission = (currentLoanSize * commissionPercantage) / 100;
            returnTotal = currentLoanSize + commission;
            var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue.text(currentLoanToShow);
            rangeTableValue.text(currentLoanToShow).append("<i></i>");
            commissionTableSize.text(commissionToShow).append("<i></i>");
            returnTable.text(totalToShow).append("<i></i>");
            setDynamicProbability();
            setDynamicTimePeriod();
        });
    } 
}); 