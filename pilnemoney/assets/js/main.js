$(window).on('load', function(){
	$('.selected-li').on('click', function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('.select-list').hide('slow');
		} else{
			$(this).addClass('active');
			$('.select-list').show('slow');
		}
	});	
	$('.select-list li').on('click', function(){
		$('.selected-li').html($(this).html()).attr('data-value', $(this).html());
		$('.selected-li').removeClass('active');
		$('.select-list').hide('slow');
	});


	$('.registration .loggin-form form').on('submit',function(){
		$('.modal-wrapp').show('fast');
		var otstup = ($(window).height() - $('.modal-wrapp .modal-container').height()) / 2;
		if(otstup >= 50){
			$('.modal-wrapp .modal-container').css('top', otstup + 'px');			
		} else {
			$('.modal-wrapp .modal-container').css({'top': '50px','height': $(window).height() - 100 + 'px'});
			$('.modal-wrapp .modal-container .scroller').css('overflow-y', 'scroll');
		}
		return false; 
	});
	$('.modal-wrapp .close').on('click', function(){
		$('.modal-wrapp').hide('fast');
	});
	$(function() { 
    	var reCaptchaWidth = 302;
    	var containerWidth = $('.g-recaptcha').parent().width(); 
    	if(reCaptchaWidth > containerWidth) {
    	    var reCaptchaScale = containerWidth / reCaptchaWidth;
    	    $('.g-recaptcha').css({
    	        'transform':'scale('+reCaptchaScale+')',
    	        'transform-origin':'left top'
    	    });
    	}                
	});    
});