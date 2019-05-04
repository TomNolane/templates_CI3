
<script>
<?php  
    if($this->uri->segment(1) == 'offerwall')
        echo '_mark = 2;';
    else if($this->uri->segment(1) == 'offerwall2')
        echo '_mark = 2;';
    else if($this->uri->segment(1) == 'pixell')
        echo '_mark = 1;';
    else
        echo '_mark = 0;';
?>
function markTarget(target,param, _id){
    // if (typeof yaCounter47410882 == 'undefined') return;
	// if (typeof param == 'undefined') yaCounter47410882.reachGoal(target);
	// else yaCounter47410882.reachGoal(target,param);
        
    <?php if (in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'offerwall2', 'pixell'))) { ?>
    $.ajax({
        type: 'POST',
        url: '/pixel/',
        data: 
        {
            id : _id,
            pixel : param,
            mark : _mark
        },
        success: function(data){
        }
        ,error: function(data){
        }
    });
    <?php } ?>
} 
</script>