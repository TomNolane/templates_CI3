<!-- Yandex.RTB R-A-247243-1 мобильная версия-->
<script >
    (function(w, d, n, s, t) {
        w[n] = w[n] || [];
        w[n].push(function() {
            Ya.Context.AdvManager.render({
                blockId: "R-A-247243-1",
                renderTo: "yandex_rtb_R-A-247243-1",
                async: true
            });
        });
        t = d.getElementsByTagName("script")[0];
        s = d.createElement("script");
        s.type = "text/javascript";
        s.src = "//an.yandex.ru/system/context.js";
        s.async = true;
        t.parentNode.insertBefore(s, t);
    })(this, this.document, "yandexContextAsyncCallbacks");
</script>

<!-- Yandex.RTB R-A-247243-3 декстоп версия-->
<script >
    (function(w, d, n, s, t) {
        w[n] = w[n] || [];
        w[n].push(function() {
            Ya.Context.AdvManager.render({
                blockId: "R-A-247243-3",
                renderTo: "yandex_rtb_R-A-247243-3",
                async: true
            });
        });
        t = d.getElementsByTagName("script")[0];
        s = d.createElement("script");
        s.type = "text/javascript";
        s.src = "//an.yandex.ru/system/context.js";
        s.async = true;
        t.parentNode.insertBefore(s, t);
    })(this, this.document, "yandexContextAsyncCallbacks");
</script>
<script>
function markTarget(target,param, id){
    if (typeof yaCounter35589670 == 'undefined') return;
	if (typeof param == 'undefined') yaCounter35589670.reachGoal(target);
	else yaCounter35589670.reachGoal(target,param);
        
        $.ajax({
            type: 'POST',
            url: '/pixel/',
            data: 'id='+id+'&pixel='+param,
            success: function(data){
            }
        });
} 
</script>