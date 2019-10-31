    $( document ).ready(function() {

        if ( $('.cycle-slide-active').hasClass('imageNoir')) {
            $('.content, .description, .cycle-slide-active').addClass("blackpage");
        };
    
        $(".view").click(function (event) {
            $("#slideshow-1").toggleClass('show-img');
            $(".content").toggleClass('show-img');
        });
        $(".retour").click(function (event) {
            if ($("#slideshow-1").hasClass("show-img")) {
                $("#slideshow-1").removeClass('show-img');
                $(".content").removeClass('show-img');
                event.preventDefault();
            }
        });
    });
