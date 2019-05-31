if (window.innerWidth <= 568) {

    $( document ).ready(function() {
        $(".view").click(function (event) {
            showImg();
            changeSvg();
        });
    
        function showImg(){
            var image = $("#slideshow-1 img")
        
            if(image.css('opacity') !== '1'){
                $(".desconly").css("opacity", "0");
                image.css("opacity", "1");
                $("#viewIcon").css("display", "none");
                $("#hideIcon").css("display", "block");
            }
            else{
                $(".desconly").css("opacity", "1");
                image.css("opacity", "0.1");
                $("#viewIcon").css("display", "block");
                $("#hideIcon").css("display", "none");
            };

        }


    });
}