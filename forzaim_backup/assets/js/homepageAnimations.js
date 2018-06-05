$(document).ready(function () {
    //Css animation on homepage
    $(window).scroll(function () {
        var $this = $(this),
            section1 = $('.ex-section-1'),
            section2 = $('.ex-section-2');
        if($this.scrollTop() >= section1.offset().top + 300) {
            console.log('hi');
            section2.find('.ex-first').addClass('animated-1 fadeInRight');
            section2.find('.ex-second').addClass('animated-2 fadeInRight');
            section2.find('.ex-third').addClass('animated-3 fadeInRight');
            section2.find('.ex-fourth').addClass('animated-4 fadeInRight');
        }
    });
});
