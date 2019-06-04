/************************************************************************************************************************/
/************************************************************************************************************************/
/************************************************************************************************************************/

// New Parallaxe Patrimoine
$( document ).ready(function() {

    var $container = $("#patrimoine");

    var $slide_1 = $container.find('#slide_1');
    var $slide_2 = $container.find('#slide_2');
    var $slide_3 = $container.find('#slide_3');

    screen_width = $(window).width();

    $("#patrimoine").mousemove(function(e){
		var coef = 2;
		if (screen_width >= 1024) {
			var offset = ((e.pageX/screen_width - 0.5) * 2 *coef);
			$slide_1.css({'left': offset+'%'});
			$slide_2.css({'left': -offset+'%'});
			$slide_3.css({'right': -offset+'%'});
		}
		});
 });

        