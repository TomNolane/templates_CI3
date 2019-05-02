<!-- Yandex.Metrika counter --> <script> 
(function (d, w, c) { (w[c] = w[c] || []).push(function() 
    { try { w.yaCounter46516572 = new Ya.Metrika({ id:46516572, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); 
            } 
            catch(e) { } 

}); 
var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; 
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } 
})(document, window, "yandex_metrika_callbacks"); 
    </script> 
    <noscript><div><img src="https://mc.yandex.ru/watch/46516572" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<script>
<?php  
    if($this->uri->segment(1) == 'offerwall')
        echo '_mark = 1;';
    else if($this->uri->segment(1) == 'offerwall2')
        echo '_mark = 2;';
    else
        echo '_mark = 0;';
?>
function markTarget(target,param, _id){
    if (typeof yaCounter46516572 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter46516572.reachGoal(target);
	else yaCounter46516572.reachGoal(target,param);
        
    <?php if ($this->uri->segment(1) == 'offerwall' || $this->uri->segment(1) == 'offerwall2' || $this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') { ?>
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