$(function () {
	'use strict';
	//adjust slider height
     var windowHeight = $(window).height(),
         upperHeight = $('.upper-bar').innerHeight(),
         navHeight   = $('.navbar').innerHeight();

	$('.slider,.carousel-item').height(windowHeight - (upperHeight + navHeight));

	//featured work suffle images
	$('.featured-work ul li').on('click', function() {
		
		$(this).addClass('active').siblings().removeClass('active');
	
		if($(this).data('class') ==='all') {
			$('.shuffle-images .col-sm').css('opacity', 1);




		}else{
			$('.shuffle-images .col-sm').css('opacity', '.08');
			$($(this).data('class')).parent().css('opacity', 1);

		}

	});

});