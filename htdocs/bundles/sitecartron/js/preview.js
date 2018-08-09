$(document).ready(	
	function() {
		var $panel = $(".panel");
		var $container = $panel.find(".container");
		var $infoSec = $panel.find(".info-section");
		
		$container.bannerRotator({
			width:825,
            height:300,
            thumb_width:24,
            thumb_height:24,
            button_width:24,
            button_height:24,
            margin:5,
            tooltip_width:'auto',
            tooltip_height:'auto',
            auto_start:true,
            delay:6000,
            play_once:false,
            pause_onmouseover:false,
            effect:'random',
            duration:800,
            easing:'swing',
            cpanel_align:'BR',
            outside_cpanel:false,            
            cpanel_onmouseover:false,
            thumb_type:'number',
            select_onmouseover:false,
            tooltip_type:'image',
            tooltip_delay:0,
            dbuttons_type:'small',
			dbuttons_onmouseover:false,
            display_playbutton:true,
            display_timer:true,
            timer_align:'top',
            text_effect:'fade',
            text_duration:500,
            text_easing:'swing',
            text_delay:0,
            text_onmouseover:false,
            text_sync:true,
            center_image:true,
            shuffle:true,            
            mousewheel:true,
            swipe:true,
			block_size:75,
			vslice_size:55,
			hslice_size:50,
			block_delay:25,
			vslice_delay:73,
			hslice_delay:183
		});
		
		var $submitButton = $("#submit-btn");
		var $resetButton =  $("#reset-btn");
		var $trans = 		$("#transitions");
		var $easings =		$("#easing");
		var $cpAlign = 		$("#cpalignments");
		var $cpPos = 		$("input[name='cp-pos']");
		var $thumbType =	$("#thumb-type");
		var $dbType =		$("#db-type");		
		var $ttType = 		$("#tt-type");
		var $playBtnCB = 	$("#playbutton-cb");
		var $timerCB = 		$("#timer-cb");
		var $pauseCB = 		$("#pause-cb");
		var $textCB = 		$("#text-cb");
		var $cpanelCB = 	$("#cpanel-cb");
		var $dbMouseoverCB = $("#dbuttons-cb");
		
		$submitButton.click(function() {
			$container.undoChanges()
					  	.setTransition($trans.val())
						.setEasing($easings.val())
						.setCpanelAlign($cpAlign.val())
						.setCpanelPos($cpPos.filter(":checked").val())
						.setThumbType($thumbType.val())
						.setDButtonsType($dbType.val())						
						.setTooltipType($ttType.val())
						.setPlayButton($playBtnCB.prop("checked"))
						.setTimerBar($timerCB.prop("checked"))
						.setMouseoverPause($pauseCB.prop("checked"))						
						.setMouseoverText($textCB.prop("checked"))
						.setMouseoverCPanel($cpanelCB.prop("checked"))
						.setMouseoverDButtons($dbMouseoverCB.prop("checked"))
						.updateChanges();
			
			var $rotatorDiv = $container.find(">div");
			$panel.width($rotatorDiv.outerWidth()).css("margin-left", -Math.round($panel.outerWidth()/2));
			$infoSec.width($rotatorDiv.width());
		});
		
		$resetButton.click(function() {
			init();
			$submitButton.trigger("click");
		});
		
		var init = function() {
			$trans.val("random");
			$easings.val("swing");
			$cpAlign.val("BR");
			$("input#pos-inside").prop("checked", true);
			$thumbType.val("number");
			$dbType.val("small"); 
			$ttType.val("image");			
			$playBtnCB.prop("checked", "checked");
			$timerCB.prop("checked", "checked");
			$pauseCB.prop("checked", "");
			$textCB.prop("checked", "");
			$cpanelCB.prop("checked", "");
			$dbMouseoverCB.prop("checked", "");
		}
		
		init();
	}
);