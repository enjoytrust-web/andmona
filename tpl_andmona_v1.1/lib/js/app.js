/*---------- SVG animation ----------*/

$(function() {

	var mySVG = $('svg').drawsvg();
		mySVG.drawsvg('animate');

});



/*---------- scrollify ----------*/

$(function() {

     $.scrollify({
       section : "section",
       scrollSpeed: 2000,
       easing: "easeOutQuart",
     });

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