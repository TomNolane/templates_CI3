<footer class="ex-main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ex-foot-logo">
                    <a href="/"><img src="/templates/kreditker/assets/img/logo.png" alt="logo.png">
                        <span>Kreditker.ru</span></a>
                </div>
            </div>
            <div class="col-lg-8">
            </div>
        </div>
    </div>
</footer>
<!-- JS -->
<?php
    echo '<script>';
    require '/templates/kreditker/assets/js/jquery.min.js';
    require '/templates/kreditker/assets/js/bootstrap.min.js';
    echo '</script>';
?> 
<script>
    $(function() {
        $('#nav1').click (function() {
            $('html, body').animate({scrollTop: $('.ex-kredit-box.ex-nav1').offset().top }, 'slow');
        });
        $('#nav2').click (function() {
            $('html, body').animate({scrollTop: $('.ex-kredit-box.ex-nav2').offset().top }, 'slow');
        });
        $('#nav3').click (function() {
            $('html, body').animate({scrollTop: $('.ex-kredit-box.ex-nav3').offset().top }, 'slow');
        });
    });
</script>
</body>
</html>