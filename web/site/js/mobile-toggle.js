if (window.innerWidth <= 568) {

    $( document ).ready(function() {

        $(".view").click(function (event) {
            showImg();
        });
    
        function showImg(){
            var image = $("#slideshow-1 img")
            $(".description").toggle();

            if(image.css('opacity') !== '1'){
                image.css("opacity", "1");
            }
            else{
                image.css("opacity", "0.1");
            };

        }


    });
}