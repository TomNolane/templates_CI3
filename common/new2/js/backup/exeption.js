catch(e) { 
    console.log(  'Ошибка ' + e.name + ':' + e.message + '\\n' + e.stack  );
    $(function() {   
        $.ajax({
            type: 'POST',
            url: '/jse/',
            data: 'jscatch='+'Ошибка ' + e.name + ':' + e.message + '\\n' + e.stack+'&site='+document.location.href,
            success: function(data){
            }
        });
    });
}