$( document ).ready(function() {
    var params = new URLSearchParams(document.location.search.substring(1));
    var id = parseInt(params.get("id"), 10);
    var positionx = 2 + (id * 48);
    var is_moving = false;
    screen_width = $(window).width();
    var bg = $('#degustation .main');
    var overlay = $('.degustation-home .content');
    var coef = 4;
    var offset = '';
    $(".parralax").mousemove(function(e){
        if( is_moving == false ){
            var offset = ((e.pageX/screen_width - 0.5) * 2 *coef);
            bg.css({'background-position': (positionx+offset/2)+'% 50%' });
            overlay.css({'left': coef*offset+'px'});
        }
    })
    
    $(".degustation-home .content a.next, .degustation-home .content a.prev").click(function(e) {
        is_moving = true;
        var goto_left = $(this).hasClass('next'); 
        if( goto_left ) positionx += 48;
        else positionx -= 48;
        
        /* hide next icon*/
        if( positionx >= 98 ){ $('.degustation-home .content a.next').removeClass('show'); }
        else $('.degustation-home .content a.next').addClass('show');
        
        /*hide prev icon*/
        if( positionx <= 2 ){ $('.degustation-home .content a.prev').removeClass('show'); }
        else $('.degustation-home .content a.prev').addClass('show');

        /*change active*/
        var $active = $('.degustation-home .content .sh');
        if( goto_left ) var $next = $active.next();
        else var $next = $active.prev();
        $active.find('h2 b').css('right', goto_left?'-100%':'100%').animate({right:100}, 800); 
        setTimeout(function(){moveElement($next, $active, goto_left, e);}, 100);
    });

    function moveElement($next, $active, goto_left, e){
        $active.removeClass('sh').addClass('hd'); 			
        $next.addClass('sh').find('h2 b').css('left', goto_left?'100%':'-100%').animate({left:0}, 800); 
        setTimeout(function(){slideBackground(e);}, 100);
    };

    function slideBackground(e){
        bg.animate({'backgroundPosition': (positionx+offset/2)+'% 100%' }, 600, function(){ is_moving = false; });
    };

 });
$(window).load(function () {
    $('#degustation-produits .description').height($('#degustation-produits .cycle-slide-active .description h3').height()+'px');
})
        