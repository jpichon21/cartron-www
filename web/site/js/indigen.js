$(document).ready(function() {
	if ( $("#home").length )
		return;
	if ( $("#patrimoine").length )
		return;

	if ( $("#collection-produits").length ) {		
		var $main = $(".camera_wrap");
		$main.wrap("<div class='table'>");
		$main.wrap("<div class='td'>");
		$(window).resize(resize);
		resize();
		return;
	}

	if ( $("#collection").length ) {		
		var $main = $(".content");
		$main.wrap("<div class='table'>");
		$main.wrap("<div class='td' style='vertical-align:top;'>");
		$(window).resize(resize);
		resize();
		return;
	}

	if ( $("#degustation").length )
		return;

	if ( $("#degustation-produits").length ) {
		var $main = $(".content");
		$main.wrap("<div class='table'>");
		$main.wrap("<div class='td'>");
		$(window).resize(resize);
		resize();
		return;
	}

	var $main = $(".main");
	$main.wrapInner("<div class='td'>");
	$main.wrapInner("<div class='table'>");

	$(window).resize(resizeMain);
	resizeMain();
});


function resizeMain() {
	var $header = $(".header");
	var $footer = $(".footer");
	var $main = $(".main");
	var $table = $main.find(".table");
	var mainHeight = $(window).height() - ($header.height() + $footer.height()) - 25;
	var height = Math.max(mainHeight, $table.height());
	$main.css({ height:height });
	$main.find(".table").css( { minHeight:height });
}

function resize() {
	var $header = $(".header");
	var $footer = $(".footer");
	var $main = $(".main");
	var $table = $main.find(".table");
	var mainHeight = $(window).height() - ($header.height() + $footer.height()) - 71;
	var height = Math.max(mainHeight, $table.height());
	$main.css({ height:height });
	$main.find(".table").css( { minHeight:height });
}

window.addEventListener('orientationchange', doOnOrientationChange);
doOnOrientationChange();

function doOnOrientationChange() {
    var viewport = $('#viewport');

    if ( navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i)) {
		if ( window.orientation == 90 ||  window.orientation == -90 ) {

			var pathname = location.pathname.substring((location.pathname.lastIndexOf("/") + 1), location.pathname.length);
			if ( pathname == "premier_connexion" )
				viewport.attr("content", "width=device-width, initial-scale=0.35");
			else
				viewport.attr("content", "width=device-width, initial-scale=0.42");
		}
		else {
			viewport.attr("content", "width=device-width, initial-scale=0.29");
		}
    } else if ( navigator.userAgent.match(/iPad/i) ) {
		viewport.attr("content", "width=device-width, initial-scale=0.94");
    }
}

