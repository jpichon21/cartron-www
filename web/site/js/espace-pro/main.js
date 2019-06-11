$(function() {
  $(".dropdown img.flag").addClass("flagvisibility");

    $(".dropdown dt a").click(function() {
        $(".dropdown dd ul").toggle();
    });

    $(".dropdown dd ul li a").click(function() {
        var text = $(this).html();
        $(".dropdown dt a span").html(text);
        $(".dropdown dd ul").hide();
        $("#result").html("Selected value is: " + getSelectedValue("sample"));
    });

    //Mentions lÃ©gales
    $('.mentions-legales').click(function() {
        $('.overlay-mentions').height(1200 + 'px');
        $('.overlay-mentions').show();
        $('.scrollMention').jScrollPane({scrollbarWidth: 6});
        return false;
    });
    $('.overlay-mentions .close').click(function() {
        $('.overlay-mentions').hide();
        return false;
    });
    
    //Slider liste pro
    var SliderListePro = $("#slider-liste-pro").sudoSlider({ 
       effect: "slide",
       auto:false,
       numeric:false,
       prevNext:true
    });
    
    $("#slider-liste-pro ul li ul li").on({
      mouseenter:function(){
        $(this).find('.hover-image-list').stop(true,true).fadeIn(300);
      },
      mouseleave:function(){
        $(this).find('.hover-image-list').stop(true,true).fadeOut(300);
      }
    });
    
    //sel lang
    $('#lang_sel_list_cartron').on({
      mouseenter : function(){
        $(this).addClass('hover');
      },
      mouseleave : function(){
        $(this).removeClass('hover');
      }
    });
    
    //Menu
    menu.init();
    
    //formulaires
    form.init();
    setTimeout(function(){
      resizing.init();
    },500);
    
});

var resizing = {
  init:function(){
    var that = this;
    that.responsive();
    $(window).resize(function(){
      that.responsive();
    });
  },
  responsive:function(){
    var $header = $('.header');
		var $footer = $('.footer');
    
    var heigth_content = $(window).height() - $header.height() - $footer.height();
    
    if($('body').hasClass('archive')){
      $('#contenu-right').removeClass('responsive');
      if($('#slider-liste-pro li').size() <= 7 ){
        //console.log('bingo');
        $('#contenu-right').addClass('responsive');
      }
      if(heigth_content > 735) {
        $('#contenu-right').addClass('responsive');
        //console.log('bingo');
      }else{
        $('#pro .main').find('#contenu-right').css({
        'position':'relative',
        'top':'0'
      });
      }
    }
    
    //alert(heigth_content);
    //console.log(heigth_content);
    $('#pro .main').height(heigth_content);
    if(heigth_content > 710){
      
      //console.log($('#pro .main').find('#contenu-right.responsive'));
      $('#pro .main').find('#contenu-right.responsive').css({
        'position':'fixed',
        'top':'30%'
      });
      if($('body').hasClass('archive') && $('#slider-liste-pro li').size() >= 7 ){
        $('.archive #pro .main').find('#contenu-right.responsive').css({
          'position':'fixed',
          'top':'25%'
        });
      }
    }else{
      $('#pro .main').find('#contenu-right.responsive').css({
        'position':'relative',
        'top':'0'
      });
    }
    
    if(heigth_content <= 470){
      $('#menu-left').addClass('mini');
    }else {
      $('#menu-left').removeClass('mini');
    }
  }
}

var menu = {
  init : function() {
    this.hover();
    //scroll pane
    $('.sub-2 ul').jScrollPane({
      scrollbarWidth:4,
      scrollbarMargin:10,
      autoReinitialise: true,
      verticalGutter: 0
    });
  },
  hover : function() {
    var menuBlock = $('#menu-left');
    menuBlock.find('li').on({
      mouseenter : function(){
        $(this).addClass('hover');
      },
      mouseleave : function(){
        $(this).removeClass('hover');
      }
    });
  }
}

var form = {
  init:function(){
    form.text();
    // form.checkboxes();
    //form.forgot();
  },
  text:function(){
    $('input[type=text],input[type=password],input[type=email]').each(function(){
      label = $(this).parents('p').find('label');
      var value = label.html();
      label.hide();
      if(!$(this).attr('value')){
        $(this).attr('value',value);
      }
      $(this).on({
        focus:function(){
          if($(this).attr('value') == value){
            $(this).attr('value','');
          }
        },
        focusout:function(){
          if($(this).attr('value') == ''){
            $(this).attr('value',value);
          }
        }
      });
    });
  },
  forgot:function(){
    $('#form-forgot').hide();
    $('#forgot').on({
      click:function(){
        $('#form-forgot').show(200);
      }
    });
  }
}


