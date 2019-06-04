/**
 * Cartron
 *
 * Copyright (c) 2012 - Indigen Solutions
 * Authors:
 *   - Jérôme Barbato <jerome@bighub.fr>
 *
 * License: GPL 
 * Version: 1.0 (2013/03/27)
 *
 * Requires:
 *   - jQuery
 *
 **/

/**c
 * indigen namespace.
 */
var cartron = cartron || {};

/**
 *
 */
cartron.Patrimoine = function(config) 
{  

    var that = this;
	
	that.config = 
	{
		$container: null
    };
    
    that.screen_width 	= 0;

    /* Public attributes. */


    /* Public methods. */

	that.move = function()
	{
		
	    var $slide_1 = that.config.$container.find('#slide_1');
	    var $slide_2 = that.config.$container.find('#slide_2');
	    var $slide_3 = that.config.$container.find('#slide_3');
		
		var coef = 2;
		
		that.config.$container.mousemove(function(e)
		{
			if (that.screen_width >= 1024) {
				var offset = ((e.pageX/that.screen_width - 0.5) * 2 *coef);
	 
				$slide_1.css({'left': offset+'%'});
				$slide_2.css({'left': -offset+'%'});
				$slide_3.css({'right': -offset+'%'});
			}
			
		});
		
	}

    /* Implementation. */
	
    that._init = function(config)
	{ 	
		that.config = $.extend(that.config, config);
		
		$(window).resize(function() 
		{
			that.screen_width = $(window).width();

		}).resize();

		that.move();
	}

    that._init(config);

    return that;
};


/**
 *
 */
cartron.Degustation = function(config) 
{  

    var that = this;
	
	that.config = 
	{
		$container: null
    };
    
    that.screen_width 	= 0;
    that.bg 			= false;
    that.title 			= false;
    that.overlay 		= false;
    that.is_moving 		= false;
    
    that.positionx		= 2;
    that.goto_right		= true;

    /* Public attributes. */


    /* Public methods. */

	that.move = function()
	{	
			
		var coef = 4;

		that.bg.mousemove(function(e)
		{
			if( that.is_moving ) return;
			
			var offset = ((e.pageX/that.screen_width - 0.5) * 2 *coef);
 
			that.bg.css({'background-position': (that.positionx+offset/2)+'% 50%' });
			that.overlay.css({'margin-left': coef*offset+'px'});
			//$slide_3.css({'right': -offset+'%'});
			
		});
		
	}
	
	that.click = function()
	{
		$('.degustation-home .content a.next, .degustation-home .content a.prev').click(function(e) 
		{
			console.log('clicked')
			var goto_left = $(this).hasClass('next'); 
			
			if( goto_left ) that.positionx += 48;
			else that.positionx -= 48;
			
			if( that.positionx >= 98 ){ $('.degustation-home .content a.next').hide(); }
			else $('.degustation-home .content a.next').show();
			
			if( that.positionx <= 2   ){ $('.degustation-home .content a.prev').hide(); }
			else $('.degustation-home .content a.prev').show();
			
			var $active = $('.degustation-home .content .sh');
			
			if( goto_left ) var $next = $active.next();
			else var $next = $active.prev();
			
			$active.find('h2 b').animate({left:goto_left?'-100%':'100%'}, 400, function(){ $active.removeClass('sh').addClass('hd'); 			$next.addClass('sh').find('h2 b').css('left', goto_left?'100%':'-100%').animate({left:0}, 400);
 });
			
			that.is_moving = true;
			
			var coef = 4;
			
			var offset = ((e.clientX/that.screen_width - 0.5) * 2 *coef);
			that.bg.animate({'backgroundPosition': (that.positionx+offset/2)+'% 50%' }, 800, function(){ that.is_moving = false; });
	
		});
	}

    /* Implementation. */
	
    that._init = function(config)
	{ 	
		that.config = $.extend(that.config, config);

	    that.bg 			= that.config.$container;
	    that.title 			= that.bg.find('.degustation-home');
	    that.overlay 		= that.bg.find('.content .parralax');
		
		$(window).resize(function() 
		{
			that.screen_width = $(window).width();

		}).resize();

		that.move();
		that.click();
	}

    that._init(config);

    return that;
};

cartron.Responsive = function(config) 
{  

    var that = this;
	
	that.config = 
	{
		$container: null,
		$header: $('.footer'),
		$footer: $('.header'),
		offset: 20
    };
    
    that.screen_width = 0;
    that.screen_height = 0;
    
    that.footer_height = 0;
    that.header_height = 0;
	

    /* Public attributes. */


    /* Public methods. */

	that.vcenter = function()
	{
		$(window).resize(function() 
		{
			that.screen_width = $(window).width();
			that.screen_height = $(window).height();
			
			that.config.$container.css('height', that.screen_height - that.header_height - that.footer_height - that.config.offset );
		
		}).resize();
	}

    /* Implementation. */
	
    that._init = function(config)
	{ 	
		that.config = $.extend(that.config, config);
		
		that.footer_height = that.config.$footer.height();	
		that.header_height = that.config.$header.height();
		
		that.vcenter();
	}

    that._init(config);

    return that;
};
