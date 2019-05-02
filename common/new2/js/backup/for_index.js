var fingerprint0 = $('#fingerprint').val();
var ip = $('#ip').val();
var my_timer = 0;
$(function() {   
    var timerId = setTimeout(function tick() 
    {
        my_timer++;
        fingerprint0 = $('#fingerprint').val();
        console.log( timerId );
        if(fingerprint0 != '')
        {
            clearInterval(timerId);
            var site = document.location.host;
            var url = document.location.href;
            console.log(ip);
            $.ajax({
                type: 'POST',
                url: '/fingerprint/',
                data: 'fingerprint='+fingerprint0+'&site='+site+'&url='+url+'&ip='+ip,
                success: function(data){
                }
            });
            return false;
        }
        else 
        {
            timerId = setTimeout(tick, 700);
        } 
    }, 700);
});
