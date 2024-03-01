function adjust() {
    $('.page').css({maxHeight:$(window).height()-150});
    if (!opened) {
        $('.nav ul li').css({width: '20%'});
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