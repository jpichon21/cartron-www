    $( document ).ready(function() {

        if ( $('.cycle-slide-active').hasClass('imageNoir')) {
            $('.retour svg, .view svg').css("fill", "#FFF");
            $('.content, .description, .cycle-slide-active').addClass("blackpage");
        };
    
        $(".view").click(function (event) {
            showImg();
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
