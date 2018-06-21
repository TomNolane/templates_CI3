function zero(value) {
    return value < 10 ? '0' + value : value;
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