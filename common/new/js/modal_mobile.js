$(document).ready(function() {
    if (typeof _show_modal_timer == "undefined") {
        _show_modal_timer = 3000;
    }
    setTimeout(function () {
        $(".mobile-overlay").css('visibility', 'visible').css('opacity', '1');
    }, _show_modal_timer);

    $(".mobile-popup-close").click(function() {
        $(".mobile-overlay").css('visibility', 'invisible').css('opacity', '0');
    });
});