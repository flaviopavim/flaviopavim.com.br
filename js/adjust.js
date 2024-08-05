var loading=true;
function adjust() {
    $('.page').css({maxHeight:$(window).height()-150});
    if (!opened) {
//    if (!changing && !opened) {
//        $('#home-button,#works-button,#skills-button,#videos-button,#contact-button').css({width: '20%'});
        $('.nav ul li').css({width: '20%'});
        
        if (!changing && !opened) {
            var top=($(window).height()/2)-($('nav').height()/2);
            $('nav').css({top: top});
            if (loading) {
                $('nav').animate({opacity: 1});
            }
        }
        loading=false;
    }
}

$(function(){
    adjust();
});

$(document).ready(function(){
    adjust();
});

$(window).resize(function(){
    adjust();
});

window.setInterval(function(){
    adjust();
},100);