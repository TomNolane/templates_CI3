<!-- Yandex.Metrika counter --><script>(function(e,t,a){(t[a]=t[a]||[]).push(function(){try{t.yaCounter39264105=new Ya.Metrika({id:39264105,clickmap:!0,trackLinks:!0,accurateTrackBounce:!0,webvisor:!0})}catch(e){}});var c=e.getElementsByTagName("script")[0],n=e.createElement("script"),r=function(){c.parentNode.insertBefore(n,c)};n.type="text/javascript",n.async=!0,n.src="https://mc.yandex.ru/metrika/watch.js","[object Opera]"==t.opera?e.addEventListener("DOMContentLoaded",r,!1):r()})(document,window,"yandex_metrika_callbacks")</script><noscript><div><img src="https://mc.yandex.ru/watch/39264105" style="position:absolute;left:-9999px" alt="https://mc.yandex.ru/watch"></div></noscript><!-- /Yandex.Metrika counter -->
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
    function markTarget(target, param, _id) {
        if (typeof yaCounter39264105 == 'undefined') return;
        if (typeof param == 'undefined') yaCounter39264105.reachGoal(target);
        else yaCounter39264105.reachGoal(target, param);
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