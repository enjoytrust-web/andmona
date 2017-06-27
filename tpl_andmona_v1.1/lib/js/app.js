/*---------- scrollbutton animation ----------*/

$(function(){

    $('.scroll_button').on('click', function(){

        var scrolldown = $('.section_about').offset().top;
        $('html,body').animate({
            scrollTop: scrolldown,
            easing: "easeOutCubic",
        }, 1250);
        return false;
    });

});

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