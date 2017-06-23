/*---------- scrollify ----------*/

$(function() {

     $.scrollify({
       section : "section",
       scrollSpeed: 1250,
       easing: "easeOutCubic",
     });

});


/*---------- border animation ----------*/

$(function() {

    $('.border').addClass('active');

});


/*---------- animation ----------*/

$('.scroll_animation').css('visibility','hidden');

	$(window).scroll(function(){

		var windowHeight = $(window).height(),
		    topWindow = $(window).scrollTop();

		$('.scroll_animation').each(function(){
		 var targetPosition = $(this).offset().top;

		if(topWindow > targetPosition - windowHeight + 500){
			$(this).addClass("fadeInDown");
		}

 	});

});