	$(document).ready(function(){
		var myPlayer = _V_("my_video_1");//$("#my_video_1");
		//var animation_duration = 2500; 
		var easingM= "easeInOutBack";
		//$('#loader').activity({segments: 8, steps: 3, opacity: 0.3, width: 4, space: 0, length: 5, color: '#ffffff', speed: 1.5}); 	
		setTimeout(function(){	$('#loader').fadeTo('slow', 0);},500);
		$("#agegateok").css("cursor","pointer");
		$("#agegateno").css("cursor","pointer");
		
		$("#bloc2 a").css("cursor","pointer");$("#bloc4 a").css("cursor","pointer");
		
	var langue="fr";
	

		
		$("#agegateok").live('click', function() {
			$("#content").animate({ top: "-500" }, 1000,easingM); 
			$('#loader').fadeTo('slow', 1);
			setTimeout(function(){	
			$('#loader').fadeTo('slow', 0);
			$("#content3").animate({ top: "130" }, 1000,easingM);
			myPlayer.pause();
			changelang(langue);
			},2000);
			$(".switchlang").show("slow");
		});
		if(langue=="FR"){$(".switchlang a.FR").hide();$(".switchlang a.EN").show();}else{$(".switchlang a.EN").hide();$(".switchlang a.FR").show();}
		$("#agegateno").live('click', function() {
			$("#content").animate({ top: "-500" }, 1000,easingM); $("#content2").animate({ top: "140" }, 1000,easingM); 
			$('#loader').fadeTo('slow', 1);
			setTimeout(function(){	
				$('#loader').fadeTo('slow', 0);
				$("#content").animate({ top: "140" }, 1000,easingM); $("#content2").animate({ top: "-500" }, 1000,easingM);
			},2000);
		});
		//fr
		$(".switchlang a.FR").live('click', function() {
			changelang("fr");
		});
		$(".switchlang a.EN").live('click', function() {
			changelang("eng");
		});
		
		$("#bloc2 a").live('click', function() {
			changelang("fr");
			$("#bloc2 a").html("<img src='img/masklang2.png' border='0' />");
			$("#bloc4 a").html("<img src='img/masklang.png' border='0' />");
			});
		//en
		$("#bloc4 a").live('click', function() {
			changelang("eng");
			$("#bloc4 a").html("<img src='img/masklang2.png' border='0' />");
			$("#bloc2 a").html("<img src='img/masklang.png' border='0' />");
			});
		$("#bloc2 a").bind('mouseover', function() {
			$("#bloc2 a").animate({ backgroundPosition: "0" }, 1000,easingM);
			$("#bloc2 a").unbind('mouseover', function() {$("#bloc2 a").animate({ backgroundPosition: "0" }, 1000,easingM);});
			$("#bloc2 a").bind('mouseover', function() {$("#bloc2 a").animate({ backgroundPosition: "0" }, 1000,easingM);});
		});
		$("#bloc4 a").bind('mouseover', function() {
			$("#bloc4 a").animate({ backgroundPosition: "0" }, 1000,easingM);
			$("#bloc4 a").unbind('mouseover', function() {$("#bloc4 a").animate({ backgroundPosition: "0" }, 1000,easingM);});
			$("#bloc4 a").bind('mouseover', function() {$("#bloc4 a").animate({ backgroundPosition: "0" }, 1000,easingM);});
		});
		$("#bloc2 a").bind('mouseout', function() {$("#bloc2 a").animate({ backgroundPosition: "-85" }, 1000,easingM);});
		$("#bloc4 a").bind('mouseout', function() {$("#bloc4 a").animate({ backgroundPosition: "-85" }, 1000,easingM);});
		
		$("#bloc2 a").animate({ backgroundPosition: "-85" }, 1000,easingM);
		$("#bloc4 a").animate({ backgroundPosition: "-85" }, 1000,easingM);
		
		$(".latest_img").fadeTo("slow", 1.0);
		$(".latest_img").hover(function(){$(this).fadeTo("slow", 0.5);},function(){$(this).fadeTo("slow", 1.0);});
		$(".fadeout").click(function(){$(this).parents(".fadein").hide("slow");});
	
	});
	
	////////////////////////////////////////////////////////////////////////////////end au chargement
	
	$(function() {
		$('#loader').activity({segments: 8, steps: 3, opacity: 0.3, width: 4, space: 0, length: 5, color: '#ffffff', speed: 1.5});		
	});
	
	//function loader() {$(".loader").fadeTo("slow", 1);}
	function fadein() {$(".fadein").show("slow");}
	
	function changelang(langue) {
		if(langue=="fr"){
			$(".switchlang a.FR").hide();$(".switchlang a.EN").show();
			$("#agegateok").html("Oui");$("#agegateno").html("Non");
			$("#bloc1 p").html("Je certifie avoir l’âge légal requis<br/> par la législation de mon pays de résidence :");
			$("#content2 p").html("DÉSOLÉ, VOUS N'AVEZ PAS L'ÂGE LÉGAL");
			$("#footer p").html("L’abus d’alcool est dangereux pour la santé - à consommer avec modération");
			$("#right").html("<p class='tk-adobe-garamond-pro cap'>Dés maintenant, téléchargez  :</p><ul><li><a href='FR/brochure-fr.pdf' target='_blank'>La brochure</a></li><li><a href='FR/Cocktails-fr.pdf' target='_blank'>Les cocktails réalisés par Joseph Akhavan</a></li></ul><h1>Les fiches produits : </h1><ul id='li2'><li><a href='FR/les-cremes-de-cassis-de-bourgogne-fr.pdf' target='_blank'>Les Crèmes de Cassis de Bourgogne</a></li><li><a href='FR/les-cremes-de-fruits-rouges-fr.pdf' target='_blank'>Les Crèmes de Fruits Rouges</a></li><li><a href='FR/les-liqueurs-grande-tradition-fr.pdf' target='_blank'>Les Liqueurs Grande Tradition</a></li><li><a href='FR/le-marc-et-la-fine-de-bourgogne-fr.pdf' target='_blank'>Le Marc et La Fine de Bourgogne</a></li><li><a href='FR/les-eaux-de-vie-de-fruits-fr.pdf' target='_blank'>Les Eaux-de-Vie de Fruits</a></li><li><a href='FR/les-aperitifs-de-bourgogne-fr.pdf' target='_blank'>Les Apéritifs de Bourgogne</a></li></ul><p>Nous contacter :</p><p>25, rue du Docteur Legrand – BP 28</p><p>21701 Nuits-Saint-Georges Cedex - France</p><p>Tel : +33 (0)3 80 62 00 90</p><h2><a href='mailto:cartron@cartron.fr'>cartron@cartron.fr </a></h2></div>");
			$(".bac p").html("Site en cours de construction");
			//$("#left").html('<video width="565"  height="326" src="videos/CARTRON_Fr.mp4"  controls autobuffer></video>');
			//$("#left").html('<video id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" width="565"  height="326" poster="my_video_poster.png"
			  //data-setup="{}"><source src="videos/CARTRON_Fr.mp4" type="video/mp4"><source src="videos/CARTRON_Fr.webm" type="video/webm"></video>');
			 var myPlayer = _V_("my_video_1");
			 myPlayer.src([
			   { type: "video/mp4", src: "videos/CARTRON_Fr.mp4" },
			   { type: "video/webm", src: "videos/CARTRON_Fr.webm" }
			 ]);
			 myPlayer.ready(function(){
			    myPlayer.play();
			  });
			  myPlayer.play();
	
		}else{
			$(".switchlang a.EN").hide();$(".switchlang a.FR").show();
			$("#agegateok").html("yes");$("#agegateno").html("no");
			$("#bloc1 p").html("I certify having the legal age");
			$("#content2 p").html("SORRY, YOU MUST BE OF LEGAL DRINKING AGE TO ENTER THE SITE");
			$("#footer p").html("");
			$("#right").html("<p class='tk-adobe-garamond-pro cap'>You can now download :</p><ul><li><a href='EN/brochure-en.pdf' target='_blank'>Our brochure</a></li><li><a href='EN/Cocktails-en.pdf' target='_blank'>The cocktails created by Joseph Akhavan</a></li></ul><h1>Our product data sheets : </h1><ul id='li2'><li><a href='EN/les-cremes-de-cassis-de-bourgogne-en.pdf' target='_blank'>Les Crèmes de Cassis de Bourgogne</a></li><li><a href='EN/les-cremes-de-enuits-rouges-en.pdf' target='_blank'>Les Crèmes de Fruits Rouges</a></li><li><a href='EN/les-liqueurs-grande-tradition-en.pdf' target='_blank'>Les Liqueurs Grande Tradition</a></li><li><a href='EN/le-marc-et-la-fine-de-bourgogne-en.pdf' target='_blank'>Le Marc et La Fine de Bourgogne</a></li><li><a href='EN/les-eaux-de-vie-de-enuits-en.pdf' target='_blank'>Les Eaux-de-Vie de Fruits</a></li><li><a href='EN/les-aperitifs-de-bourgogne-en.pdf' target='_blank'>Les Apéritifs de Bourgogne</a></li></ul><p>Please contact us :</p><p>25, rue du Docteur Legrand – BP 28</p><p>21701 Nuits-Saint-Georges Cedex - France</p><p>Tel : +33 (0)3 80 62 00 90</p><h2><a href='mailto:cartron@cartron.en'>cartron@cartron.fr</a></h2></div>");
			$(".bac p").html("Website under construction");
			var myPlayer = _V_("my_video_1");	
			  myPlayer.src([
			  	{ type: "video/mp4", src: "videos/CARTRON_UK.mp4" },
			    { type: "video/webm", src: "videos/CARTRON_UK.webm" }
			  ]);
			  myPlayer.play();
			  myPlayer.ready(function(){
			     myPlayer.play();
			   });
		}
	}
	