<script>
function markTarget(target,param, id){
    if (typeof yaCounter46347894 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter46347894.reachGoal(target);
	else yaCounter46347894.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){
                console.log(22);
            }
            ,error: function(data){
                console.log(33);
            }
        });
} 
</script>