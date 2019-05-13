<?php
if(getDomain() == 'dengos.ru')
{
    require '<!-- dengos.ru adsence --> 
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4970738258373085",
    enable_page_level_ads: true
    });
    </script>';
}
else if(getDomain() == 'sumas.ru')
{
    echo '<!-- sumas.ru adsence --><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4970738258373085",
    enable_page_level_ads: true
    });
    </script>';
}
else if(getDomain() == 'vkredito.ru')
{
    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- vkredito adsence -->
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-4970738258373085"
        data-ad-slot="9129421079"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}
?>