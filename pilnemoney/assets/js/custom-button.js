             $(document).ready(function () {
                 $("#sidebar").niceScroll({
                     cursorcolor: '#53619d',
                     cursorwidth: 4,
                     cursorborder: 'none'
                 });

                 $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                 });

                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').addClass('active');
                     $('.overlay').fadeIn();
                     $('.collapse.in').toggleClass('in');
                     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                 });
             });
