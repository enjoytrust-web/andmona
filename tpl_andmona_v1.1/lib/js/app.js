/*---------- scrollify ----------*/

$(function() {

     $.scrollify({
       section : "section",
       scrollSpeed: 1600,
       easing: "easeOutQuart",
     });

});


/*---------- border animation ----------*/

$(function() {

    $('.border').addClass('active');

});


/*---------- animation ----------*/

$('.animation').css('visibility','hidden');

	$(window).scroll(function(){

		var windowHeight = $(window).height(),
		    topWindow = $(window).scrollTop();

		$('.animation').each(function(){
		 var targetPosition = $(this).offset().top;

		if(topWindow > targetPosition - windowHeight + 500){
			$(this).addClass("fadeInDown");
		}

 	});

});

$('.animation2').css('visibility','hidden');

	$(window).scroll(function(){

		var windowHeight = $(window).height(),
		    topWindow = $(window).scrollTop();

		$('.animation2').each(function(){
		 var targetPosition = $(this).offset().top;

		if(topWindow > targetPosition - windowHeight + 100){
			$(this).addClass("fadeInDown");
		}

 	});

});