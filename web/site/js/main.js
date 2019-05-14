
// JavaScript Document
$(function() {
	$.getScript("/site/js/indigen.js");

    resizeMain();
    function resizeMain(){
        $widthDocument = $("html").height();
        $widthDocument = $widthDocument - 246;
        //$(".main").css("height",$widthDocument+"px");
        $(".degustation-home .menu_degustation li .scrollMenu").css("height",$(".main").height()+"px");
    }
    $(window).resize(function() {
        resizeMain();
    });


    $(":text").toggleVal();

    //Mentions légales
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

    $('.passeOubli').click(function() {
        $('.overlay-passe-oublie').show();
        return false;
    });
    $('.overlay-passe-oublie .close').click(function() {
        $('.overlay-passe-oublie').hide();
        return false;
    });
    
    $('#demand-d-acces_p').click(function(){
		$('.overlay-espace-pro').fadeIn();
		$(window).resize();
		return false;
	});



    $('.jqtransform').jqTransform({imgPath: './images/'});

    ///Histoire
   /* $('.menu-bt-histoire li a.active').parent().find('p').show();
    $('.menu-bt-histoire li a.active').css('background-image', 'url(/cartron_dev/web/bundles/sitecartron/images/bg-bt-link-histoire-active.png)');
    $('.menu-bt-histoire li a').live('hover', function() {
        $('.menu-bt-histoire li a').css('background-image', 'url(/cartron_dev/web/bundles/sitecartron/images/bg-bt-link-histoire.png)');
        $(this).css('background-image', 'url(/cartron_dev/web/bundles/sitecartron/images/bg-bt-link-histoire-active.png)');
        $('.menu-bt-histoire li p').hide();
        $(this).parent().find('p').show();
    });
    $('.menu-bt-histoire li a').live('mouseout', function() {
        $('.menu-bt-histoire li a').css('background-image', 'url(/cartron_dev/web/bundles/sitecartron/images/bg-bt-link-histoire.png)');
        $('.menu-bt-histoire li p').hide();
        $('.menu-bt-histoire li a.active').parent().find('p').show();
        $('.menu-bt-histoire li a.active').css('background-image', 'url(/cartron_dev/web/bundles/sitecartron/images/bg-bt-link-histoire-active.png)');
    });*/
	
	$('.menu-bt-histoire li a.active').parent().find('p').show();
	$('.menu-bt-histoire li a').live('hover',function(){
		$('.menu-bt-histoire li a').removeClass('active');
		$(this).addClass('active');
		$('.menu-bt-histoire li p').hide();
		$(this).parent().find('p').show();
	});
	$('.menu-bt-histoire li a').live('mouseout',function(){
		$('.menu-bt-histoire li p').hide();
		$('.menu-bt-histoire li a.active').parent().find('p').show();
	});


    /************************************************************************************************************************/

    $('a.lanch_video').click(function() {
        $('.overlay-videos').fadeIn();
        return false;
    });

    $('a.lanch_news').click(function() {
        $('.overlay-news').fadeIn();
        return false;
    });

    $('.overlay .close').click(function() {
        $('.overlay').fadeOut();
        return false;
    });

    /************************************************************************************************************************/
    /************************************************************************************************************************/
    /************************************************************************************************************************/


    /************************************************************************************************************************/
    /************************************************************************************************************************/
    /************************************************************************************************************************/

    $('.collection-home .content .block').hover(function() {
        $(".desc_collections", this).stop().animate({top: '0px', left: '0px'}, {queue: false, duration: 'slow'});
    }, function() {
        $(".desc_collections", this).stop().animate({top: '-483px', left: '0px'}, {queue: false, duration: 'fast'});
    });

    $('.block_cassis').hover(function() {
        $('a.creme_cassis').addClass('activeCassis');
    });

    $('.block_fruits').hover(function() {
        $('a.creme_fruits').addClass('activeFruits');
    });

    $('.block_liqueur').hover(function() {
        $('a.liqueur_creation').addClass('active');
    });

    $('.block_aperitifs').hover(function() {
        $('a.aperitifs_tradition').addClass('activeAperitifs');
    });

    $('.block_eau').hover(function() {
        $('a.eau_vie_tradition').addClass('activeEau');
    });

    $('.block_marc').hover(function() {
        $('a.marc_fine_bourgone').addClass('activeMarc');
    });

    $('.block_cassis').mouseleave(function() {
        $('a.creme_cassis').removeClass('activeCassis');
    });

    $('.block_fruits').mouseleave(function() {
        $('a.creme_fruits').removeClass('activeFruits');
    });

    $('.block_liqueur').mouseleave(function() {
        $('a.liqueur_creation').removeClass('active');
    });

    $('.block_aperitifs').mouseleave(function() {
        $('a.aperitifs_tradition').removeClass('activeAperitifs');
    });

    $('.block_eau').mouseleave(function() {
        $('a.eau_vie_tradition').removeClass('activeEau');
    });

    $('.block_marc').mouseleave(function() {
        $('a.marc_fine_bourgone').removeClass('activeMarc');
    });

    /************************************************************************************************************************/
    /************************************************************************************************************************/
    /************************************************************************************************************************/
    $('.note-degustation').hide();
    $('.note-elaboration').hide();

    $('.link-produits .degustation').live("click",function() {
        $('.accueil-produits').hide();
        $('.note-elaboration').hide();
        $('.note-degustation').show();
    });

    $('.link-produits a.elaboration').live("click",function() {
        $('.accueil-produits').hide();
        $('.note-degustation').hide();
        $('.note-elaboration').show();
    });

    $('.visuel h2 a.acc-produit').live("click",function() {
        $('.note-degustation').hide();
        $('.note-elaboration').hide();
        $('.accueil-produits').show();
    });

    /************************************************************************************************************************/
    /************************************************************************************************************************/
    /************************************************************************************************************************/


    $(".menuLiWithSubMenu").hover(
            function() {
                $(this).find(".scrollMenu").stop().fadeTo('fast', 1).show();
                $('.subMenu').jScrollPane({scrollbarWidth: 6, dragMaxHeight: 34});
            },
            function() {
                $(this).find(".scrollMenu").stop().hide();
            }
    );



    /************************************************************************************************************************/
    /************************************************************************************************************************/
    /************************************************************************************************************************/

    $('#mycarousel li ul li .visuel a').hover(function() {
        $(".lienProduit", this).stop().animate({top: '0px', left: '0px'}, {queue: false, duration: 300});
    }, function() {
        $(".lienProduit", this).stop().animate({top: '104px', left: '0px'}, {queue: false, duration: 'fast'});
    });

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

    $("#ok_new_pro").click(function() {

        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var societe = $("#societe").val();
        var myreturn = true;

        if (nom == 'nom') {
            $("#nom").css('border-color', 'red');
            myreturn = false;
        }
        else
            $("#nom").css('border-color', '#535A5E');

        if (email == 'mail') {
            $("#email").css('border-color', 'red');
            myreturn = false;
        }
        else
            $("#email").css('border-color', '#535A5E');

        if (prenom == 'prenom') {
            $("#prenom").css('border-color', 'red');
            myreturn = false;
        }
        else
            $("#prenom").css('border-color', '#535A5E');

        if (message == '') {
            $("#message").css('border-color', 'red');
            myreturn = false;
        }
        else
            $("#message").css('border-color', '#535A5E');

        if (societe == 'societe') {
            $("#societe").css('border-color', 'red');
            myreturn = false;
        }
        else
            $("#societe").css('border-color', '#535A5E');

        if ($('#formAcces').length) {
            if ($('#conditions').is(':checked'))
                $(".conditions").css('color', '#9AA6B2');
            else {
                $(".conditions").css('color', 'red');
                myreturn = false;
            }
        }

        if (myreturn) {
            if ($('#formAcces').length)
                $('#formAcces').submit();
            if ($('#formContact').length)
                $('#formContact').submit();
        }
        else
            return;
    });

    function getSelectedValue(id) {
        return $("#" + id).find("dt a span.value").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown"))
            $(".dropdown dd ul").hide();
    });


    $("#flagSwitcher").click(function() {
        $(".dropdown img.flag").toggleClass("flagvisibility");
    });
    
    /*
    $('#ok_login').click(function() {
        var identification = $("#identification").val();
        var password = $("#password").val();
        if (identification != "IDENTIFIANT" && password != "mot de passe") {
            $.ajax({
                type: "POST",
                url: $('#path_login').val(),
                data: {
                    identification: identification,
                    password: password
                },
                cache: false,
                success: function(data) {
                    if (data == "n")
                        alert("Mot de passe/email invalide");
                    else
                        window.location = data
                }
            });
        }
    });
    */

    $('#ok_mop').click(function() {
        var identification = $("#mop").val();
        if (identification != "") {
            $.ajax({
                type: "POST",
                url: $('#path_mpo').val(),
                data: {
                    identification: identification
                },
                cache: false,
                success: function(data) {
                    if (data == "no")
                        alert("Email invalide");
                    else
                        alert("Un e-mail a été envoyé à votre adresse contenant votre mot de passe");
                }
            });
        }
    });
});

if (!Array.prototype.indexOf) {
  Array.prototype.indexOf = function (searchElement /*, fromIndex */ ) {
    "use strict";
    if (this == null) {
      throw new TypeError();
    }
    var t = Object(this);
    var len = t.length >>> 0;

    if (len === 0) {
      return -1;
    }
    var n = 0;
    if (arguments.length > 1) {
      n = Number(arguments[1]);
      if (n != n) { // shortcut for verifying if it's NaN
        n = 0;
      } else if (n != 0 && n != Infinity && n != -Infinity) {
        n = (n > 0 || -1) * Math.floor(Math.abs(n));
      }
    }
    if (n >= len) {
      return -1;
    }
    var k = n >= 0 ? n : Math.max(len - Math.abs(n), 0);
    for (; k < len; k++) {
      if (k in t && t[k] === searchElement) {
        return k;
      }
    }
    return -1;
  }
}



