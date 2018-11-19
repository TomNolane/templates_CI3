
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
        
    } 
}); 