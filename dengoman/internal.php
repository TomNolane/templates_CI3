<?php require 'header.php'; ?>

<style>
body{
	background-image:url(/templates/dengoman/img/bg-small.png);
}
</style>

<div class="clearfix">&nbsp;</div>

<div class="container">
	<div class="row">
            <!--
                <div class="col-sm-2 internal">
                    <div id="yandex_direct_P-A-249272-1"></div>
                </div>
            -->
		<div class="col-sm-12 internal">
			<?php
			if ($this->uri->segment(1) == 'about') require 'internal-about.php';
			elseif ($this->uri->segment(1) == 'docs') require 'internal-docs.php';
			elseif ($this->uri->segment(1) == 'contacts') require 'internal-contacts.php';
			elseif ($this->uri->segment(1) == 'faq') require 'internal-faq.php';
			elseif ($this->uri->segment(1) == 'info') require 'internal-info.php';
			?>
		</div>
	</div>
</div>
<!--
<script type="text/javascript">
(function(w, d, n, s, t) {
w[n] = w[n] || [];
w[n].push(function() {
Ya.Context.AdvManager.render({
blockId: "P-A-249272-1",
renderTo: "yandex_direct_P-A-249272-1",
searchText: "поисковый запрос",
searchPageNumber: 1
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
-->
<?php require 'footer.php'; ?>