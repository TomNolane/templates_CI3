    <!-- >>>>>>>>>>>>>>>> Footer Area Start <<<<<<<<<<<<<<<< -->
    <footer class="footer_area">
        <!-- Bottom Footer Area Start -->
        <div class="footer_bottom_area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer_bottom">
                            <p>Сайт НЕ является представительством МФО или банком, не выдает займов и кредитов.
                                Персональные данные пользователей не
                                собираются и не хранятся. Все рекомендуемые на сайте кредитные учреждения имеют
                                соответствующие лицензии. Условия
                                неуплаты можно уточнить на сайте МФО.</p>
                        </div>
                        <!-- Bottom Footer Copywrite Text Area End -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- >>>>>>>>>>>>>>>> Footer Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> All jQuery Plugins <<<<<<<<<<<<<<<< -->

    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="/templates/ru-zaimo/js/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap js -->
    <script src="/templates/ru-zaimo/js/bootstrap.min.js"></script>

    <!-- Owl-carousel js -->
    <!-- <script src="js/owl.carousel.min.js"></script> -->

    <!-- Ajax Contact js -->
    <script src="/templates/ru-zaimo/js/ajax-contact.js"></script>

    <!-- Meanmenu js -->
    <script src="/templates/ru-zaimo/js/meanmenu.js"></script>

    <!-- Onepage Nav js -->
    <script src="/templates/ru-zaimo/js/jquery.nav.min.js"></script>

    <!-- Magnific Popup js -->
    <script src="/templates/ru-zaimo/js/jquery.magnific-popup.min.js"></script>

    <!-- Back to top js -->
    <script src="/templates/ru-zaimo/js/jquery.scrollUp.js"></script>

    <!-- jQuery easing js -->
    <script src="/templates/ru-zaimo/js/jquery.easing.1.3.js"></script>

    <!-- WOW js -->
    <script src="/templates/ru-zaimo/js/wow.min.js"></script>

    <!-- parallux js -->
    <script src="/templates/ru-zaimo/js/jquery.stellar.min.js"></script>

    <!-- Footer Reveal js -->
    <script src="/templates/ru-zaimo/js/footer-reveal.js"></script>

    <!-- Active js -->
    <script src="/templates/ru-zaimo/js/custom.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            "use strict";

            //Contact
            $('form.contactForm').submit(function () {
                var f = $(this).find('.form-group'),
                    ferror = false,
                    emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

                f.children('input').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'email':
                                if (!emailExp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'checked':
                                if (!i.attr('checked')) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'regexp':
                                exp = new RegExp(exp);
                                if (!exp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
                    }
                });
                f.children('textarea').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
                    }
                });
                if (ferror) return false;
                else var str = $(this).serialize();
                var action = $(this).attr('action');
                if (!action) {
                    action = 'contactform.php';
                }
                $.ajax({
                    type: "POST",
                    url: action,
                    data: str,
                    success: function (msg) {
                        // alert(msg);
                        if (msg == 'OK') {
                            $("#sendmessage").addClass("show");
                            $("#errormessage").removeClass("show");
                            $('.contactForm').find("input, textarea").val("");
                        } else {
                            $("#sendmessage").removeClass("show");
                            $("#errormessage").addClass("show");
                            $('#errormessage').html(msg);
                        }

                    }
                });
                return false;
            });

        });
        var t = document.querySelectorAll('a[href="<?=$link?>"]');
        function getParameterByName(e, n) { n || (n = window.location.href), e = e.replace(/[\[\]]/g, "\\$&"); var r = new RegExp("[?&]" + e + "(=([^&#]*)|&|#|$)"), a = r.exec(n); return a ? a[2] ? decodeURIComponent(a[2].replace(/\+/g, " ")) : "" : null }

        var e = getParameterByName("utm_source");

        if (e == null || e == '')
            e = 'ru-zaimo.ru';

        for (var i = 0; i < t.length; i++) {
            t[i].href += '&aff_sub=' + e + '&aff_sub2=' + e + '&sub_id=' + e + '&sub_id1=' + e + '&utm_source='
                + e + '&source=' + e;
        }

        document.querySelector("#send_btn").addEventListener('click', function () {
            if (document.forms["form"]['name'].value.length > 4 && document.forms["form"]['email'].value.length > 6 &&
                document.forms["form"]['message'].value.length > 6)
                document.querySelector("#sendmessage").style.display = 'block';
        }, false);
    </script>
    <script>
        $(document).on('click','.ex-main-btn',function(){
            window.location.href = '/offerwall';
            window.open(
                '<?=$link?>',
                '_blank'
            );
            return false;
        });                                         
        function showBlock() {
            if (!document.querySelector('.notificate-wrapper').classList.contains('shown')) {
                document.querySelector('.notificate-wrapper').classList.add('notificate-wrapper-show');
                document.querySelector('.notificate-wrapper').classList.add('shown');
            }
        }
        setTimeout(function () {
            //showBlock(); 
        }, 3000);
        function hideBlock() {
            document.querySelector('.notificate-wrapper').classList.remove('notificate-wrapper-show');
        }
        document.querySelector('.close-btn').addEventListener('click', hideBlock);
    </script>
	 
</body>

</html>