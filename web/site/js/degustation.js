/************************************************************************************************************************/
/************************************************************************************************************************/
/************************************************************************************************************************/

// New Slider Degustation
$( document ).ready(function() {

    var positionx = 2;
    var is_moving = false;
    screen_width = $(window).width();
    var bg = $('#degustation .main');
    var overlay = $('.degustation-home .content');

    $(".parralax").mousemove(function(e){
        console.log("is moving!");
        var coef = 4;
        var parralaxpositionx = 2;
        if( is_moving ){
            var offset = ((e.pageX/screen_width - 0.5) * 2 *coef);
            bg.css({'background-position': (parralaxpositionx+offset/2)+'% 50%' });
            overlay.css({'left': coef*offset+'px'});
        }
    })
    
    $(".degustation-home .content a.next, .degustation-home .content a.prev").click(function() {
  
        console.log('clicked');
        console.log(positionx);

        var goto_left = $(this).hasClass('next'); 

        if( goto_left ) positionx += 48;
        else positionx -= 48;
        
        /* hide next icon*/
        if( positionx >= 98 ){ $('.degustation-home .content a.next').hide(); }
        else $('.degustation-home .content a.next').show();
        
        /*hide prev icon*/
        if( positionx <= 2 ){ $('.degustation-home .content a.prev').hide(); }
        else $('.degustation-home .content a.prev').show();
            
        var $active = $('.degustation-home .content .sh');
        
        if( goto_left ) var $next = $active.next();
        else var $next = $active.prev();
        
        $active.find('h2 b').css('right', goto_left?'-100%':'100%').animate({right:100}, 800); 
        setTimeout(function(){moveElement($next, $active, goto_left);}, 100);



    });

    function moveElement($next, $active, goto_left){
        $active.removeClass('sh').addClass('hd'); 			
        $next.addClass('sh').find('h2 b').css('left', goto_left?'100%':'-100%').animate({left:0}, 800); 
    };

    is_moving = true;
    var coef = 4;
    var offset = ((e.clientX/screen_width - 0.5) * 2 *coef);
    bg.animate({'backgroundPosition': (positionx+offset/2)+'% 50%' }, 800, function(){ is_moving = false; });


 });

        