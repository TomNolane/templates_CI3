var equalheight = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    $(container).each(function () {
        $el = $(this);
        $($el).height('auto');
        var topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (var currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
};

$(document).ready(function () { 
    //-----------------------Declaration of variables--------------------------
    var body = $('body'),
        footerHeight = $(".ex-main-footer").outerHeight(),
        panelCollapse = $('.panel-collapse'),
        indicator = $('.ex-indicator-scope'),
        formIndicator1 = $('.ex-first-step'),
        formIndicator2 = $('.ex-second-step').find('span'),
        formIndicator3 = $('.ex-last-step'),
        formBtn1 = $('#submitOne'),
        formBtn2 = $('#submitTwo');
    //------------------------Declaration of variables end-------------------------
    body.css('padding-bottom', footerHeight);
    $(window).resize(function() {
        footerHeight = $(".ex-main-footer").outerHeight();
        body.css('padding-bottom', footerHeight);
    });
    panelCollapse.on('show.bs.collapse', function () {
        $(this).prev('.panel-heading')
            .find('.ex-plus-icon')
            .removeClass('ex-plus-icon')
            .addClass('ex-minus-icon');
    });
    panelCollapse.on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading')
            .find('.ex-minus-icon')
            .removeClass('ex-minus-icon')
            .addClass('ex-plus-icon');
    });
    //------------------------Events during "How to receive money" form confirmation--------------------------
    $(formBtn1).on('click', function () {
        indicator.addClass('ex-on-second-step');
    });
    $(formBtn2).on('click', function () {
        indicator.removeClass('ex-on-second-step').addClass('ex-on-last-step');
    });

    //---------Collapse functionality-----------
    var collapseParagraph = $('.ex-hidden'),
        collapseBtn = $('.ex-collapse');
    collapseParagraph.each(function (index) {
        var self = $(this);
        if ($.trim(self.html()).length > 0) {
            self.closest('.ex-info-block').append("<span class='ex-collapse'>+ Подробнее</span>")
        }
    });

    $(".ex-info-block").on("click", collapseBtn, function () {
        $(this).find(collapseParagraph).toggleClass('ex-active');
        $(this).find($('.ex-collapse')).toggleClass('ex-blinked');
        if ($(this).find(collapseParagraph).hasClass('ex-active')) {
            $(this).find($('.ex-collapse')).text('- Закрыть');
        } else {
            $(this).find($('.ex-collapse')).text('+ Подробнее');
        }
    });
    //---------End collapse functionality-----------
    $('.ex-hamburger').on('click', function () {
        $('.ex-aside-menu').addClass('ex-is-open');
    });
    $('.ex-close-menu').on('click', function () {
        $('.ex-aside-menu').removeClass('ex-is-open');
    });
});
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
var isMobile = false; //initiate as false
// device detection
if (
    /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
    .test(navigator.userAgent) ||
    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
    .test(navigator.userAgent.substr(0, 4))) isMobile = true;
//===== Written by gor-sargsyan.info =====//

//-----------------------Initializing--------------------------
$(document).ready(function () { 
    //-----------------------Declaration of variables--------------------------
    var c = getParameterByName('amount');
    if(typeof $('#amount').val() == 'undefined')
        return;
    var gg = parseInt(($('#amount').val().trim().length < 1) ? 20000 : $('.amount').val());
    if (c != null) {
        if (c > 100000 || c < 1000) {
            c = 20000;
        }
        gg = c;
    }  
    var currentLoanSize = gg,
        range = $("#rangeSlider"),
        commissionPercantage = 13,
        rangeUpperValue =  $('#ex-slider-val'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
        commissionTableSize = $('.ex-Commission'),
        returnTable = $('.ex-total'),
        probabilityTable = $('.irs-single'),
        probabilityTable2 = $('.ex-prob'),
        probability = $('#percent').val(),
        time = '130-200 дней',
        commission = (currentLoanSize * commissionPercantage) / 100,
        returnTotal = currentLoanSize + commission,
        setDynamicProbability = function () {
            if (currentLoanSize <= 10000) { 
                probability = 95;
            } else if (currentLoanSize <= 15000) { 
                probability = 95;
            } else if (currentLoanSize <= 20000) { 
                probability = 95;
            } else if (currentLoanSize <= 30000) { 
                probability = 85;
            } else if (currentLoanSize <= 50000) { 
                probability = 77;
            } else  if (currentLoanSize <= 200000 && currentLoanSize > 50000) { 
                probability = 65;
            } else  if (currentLoanSize <= 500000 && currentLoanSize > 200000) { 
                probability = 58;
            } else { 
                probability = 52;
            }

            probabilityTable.text("вероятность " + probability).append('%');
            probabilityTable2.html("<span style='margin-left: 0px !important;'>"+probability +"%</span>");
        },
        setDynamicTimePeriod = function () {
            if (currentLoanSize <= 10000) { 
                time = "От 61 до 130 дней";
             } else if (currentLoanSize <= 15000) { 
                time = "От 61 до 130 дней";
             } else if (currentLoanSize <= 20000) { 
                time = "От 61 до 130 дней";
             } else if (currentLoanSize <= 30000) { 
                time = "От 61 до 130 дней";
             } else if (currentLoanSize <= 50000) { 
                time = "От 130 до 250 дней";
             } else  if (currentLoanSize <= 200000 && currentLoanSize > 50000) { 
                time = "От 250 до 365 дней";
             } else  if (currentLoanSize <= 500000 && currentLoanSize > 200000) { 
                time = "От 1 до 3 лет";
             } else { 
                time = "От 1 до 5 лет";
             }
 
             timeTable.html("<span>"+time+"</span>");
           
            var tt2 = $('#ex-slider-val').text();
            tt2 = tt2.split(" ").join("");
            $('.amount').val(tt2);
            var ff = range.data('ionRangeSlider');
        };
    //------------------------Declaration of variables end-------------------------
        rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><i></i>");
        rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        timeTable.append("<span>"+time+"</span>");
        commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
        probabilityTable.text('').append("<span>вероятность "+ probability+"%</span>");
        probabilityTable2.text('').append("<span>"+ probability+"%</span>");
    //-------------------Use this function to get and set range slider current value----------------------//
    range.on("change", function () {
        probabilityTable.attr('style', probabilityTable.attr('style') + ';' + 'margin-left: -37px !important');
        currentLoanSize = parseInt($(this).prop("value"));
        commission = (currentLoanSize * commissionPercantage) / 100;
        returnTotal = currentLoanSize + commission;
        var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        rangeUpperValue.html("<span>"+currentLoanToShow+"</span><i></i>");
        rangeTableValue.html("<span>"+currentLoanToShow+" рублей</span>");
        commissionTableSize.html("<span>"+commissionToShow+" рублей</span>");
        returnTable.html("<span>"+totalToShow+" рублей</span>");
        setDynamicProbability();
        setDynamicTimePeriod();  
    });
});