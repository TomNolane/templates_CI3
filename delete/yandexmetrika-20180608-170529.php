<!-- Yandex.Metrika counter --> <script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46652025 = new Ya.Metrika({ id:46652025, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46652025" style="position:absolute; left:-9999px;" alt="yandex" /></div></noscript> <!-- /Yandex.Metrika counter -->
<script>
function markTarget(target,param, id){
    if (typeof yaCounter46652025 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter46652025.reachGoal(target);
	else yaCounter46652025.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){
            }
        });
} 
</script>