//Responsive Savoir
if (screen.width <= 568) {

    $( document ).ready(function() {
        // ? a passer dans le CSS directement ?
        $('.desc-creation p').css("opacity", "0");
        $('.savoir-faire-creation h2').css("opacity", "0");
        $('.savoir-faire-creation .retour').css("opacity", "0");
        $('.savoir-faire-creation .link-creation-bt').css("opacity", "0");
        $('.link-liqueur, .link-eau-vie-home').css("opacity", "0");
        $('.savoir-faire-creation img').css("left", "-300px");
        setTimeout(function(){moveImgSlow();}, 200);

        ///variables
        var Step = 0;
        var ShowTimer = 400;
        var i = 0;

            //animation bg
            function moveImgSlow(){
                $('.savoir-faire-creation img').css({"left" : "-300px", "transition" : "2s ease"});
                setTimeout(function(){moveImgBlur();}, 1800);
            };

            function moveImgBlur(){
                $('.savoir-faire-creation img').css({"left" : "0px", "transition" : "2s ease"});
                setTimeout(function(){showTitleContent();}, 600);
            };

            function showTitleContent(){
                $('.savoir-faire-creation h2, .savoir-faire-creation .retour').css("opacity", "1");
                $('.savoir-faire-creation h2').css("transition", "2s ease");
                $('.savoir-faire-creation .retour').css("transition", "3s ease");
                setTimeout(function(){ShowTextContent(Step, ShowTimer, i);}, 600);
                setTimeout(function(){ShowFooterMenu(Step, ShowTimer, i);}, 1800);
            }

            function ShowTextContent(Step, ShowTimer, i){
                    i = i + 1;
                    $('.link-liqueur, .link-eau-vie-home').css({"opacity" : "1", "transition" : "2s ease" });
                    $('.desc-creation p:nth-child('+ i + ')').css({"opacity" : "1", "transition" : "2s ease"});
                    setTimeout(function(){ShowTextContent(ShowTimer, Step, i);}, ShowTimer);
            };

            function ShowFooterMenu(){
                $('.savoir-faire-creation .link-creation-bt').css({"opacity" : "1", "transition" : "2s ease"});
            }

    });
}