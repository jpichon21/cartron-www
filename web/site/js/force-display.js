if ((window.innerWidth < 1024) && (window.innerWidth >= 568)) {
    $( document ).ready(function() {    
        $('.note-degustation, .note-elaboration').css("display", "block");
        $('.note-degustation h3, .note-elaboration h3').css({"padding-bottom" : "10px", "margin-bottom" : "20px"});
    });
}