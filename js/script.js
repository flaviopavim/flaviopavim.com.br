/* 
 Created on : 2023, July, 28, 20:40:53
 Author     : Flávio Pavim
 */

var opened = false;
var changing = false;
var actual = '';
var next = '';

var work_loaded=false;

var toggleClickOpacity = false; //pra piscar os clicks
var toggleClicksOpacity = true; //pra aparecer ou esconder clicks
var selected='home';

//pra saber se já abriu todas as abas
var hasClickedOnHome=false;
var hasClickedOnSkills=false;
var hasClickedOnWorks=false;
var hasClickedOnVideos=false;
var hasClickedOnContact=false;

function openSite(page) {
    
    var navListItems = document.querySelectorAll('nav ul li');
    var navDivs = document.querySelectorAll('nav ul li div');

    // Apply skew transformation to list items
    navListItems.forEach(function(item) {
        item.style.transform = 'skew(0deg)';
        item.style.webkitTransform = 'skew(0deg)';
        item.style.mozTransform = 'skew(0deg)';
        item.style.msTransform = 'skew(0deg)';
        item.style.oTransform = 'skew(0deg)';
    });

    // Apply skew transformation to div elements
    navDivs.forEach(function(div) {
        div.style.transform = 'skew(0deg)';
        div.style.webkitTransform = 'skew(0deg)';
        div.style.mozTransform = 'skew(0deg)';
        div.style.msTransform = 'skew(0deg)';
        div.style.oTransform = 'skew(0deg)';
    });
    
    if (page=='works' && !work_loaded) {
        $.ajax({
            method: "POST",
            url: "./view/"+page+".php",
        }).done(function (response) {
            $('#works').html(response);
            work_loaded=true;
        });
    }
    
    actual = page;
    $('nav').stop().animate({top: 50}, 200, function () {
        $('#next, #close, #' + page).stop().fadeIn(200, function () {
            changing = false;
            opened = true;
        });
    });
}

function getNextSelected() {
    if (!hasClickedOnHome) {
        return 'home';
    } else if (!hasClickedOnSkills) {
        return 'skills';
    } else if (!hasClickedOnWorks) {
        return 'works';
    } else if (!hasClickedOnVideos) {
        return 'videos';
    } else if (!hasClickedOnContact) {
        return 'contact';
    }
    return '';
}

function closeSite() {
    
    $('section').stop().fadeOut(200, function () {
        $('#next, #close').stop().fadeOut(200, function () {
            var top=($(window).height()/2)-($('nav').height()/2)
            $('nav').stop().animate({top: top}, 200, function () {
                
                toggleClicksOpacity=true;
                if (actual=='home') {
                    hasClickedOnHome=true;
                } else if (actual=='skills') {
                    hasClickedOnSkills=true;
                } else if (actual=='works') {
                    hasClickedOnWorks=true;
                } else if (actual=='videos') {
                    hasClickedOnVideos=true;
                } else if (actual=='contact') {
                    hasClickedOnContact=true;
                }
                
                selected=getNextSelected();
                
                var navListItems = document.querySelectorAll('nav ul li');
                var navDivs = document.querySelectorAll('nav ul li div');

                // Apply skew transformation to list items
                navListItems.forEach(function(item) {
                    item.style.transform = 'skew(-30deg)';
                    item.style.webkitTransform = 'skew(-30deg)';
                    item.style.mozTransform = 'skew(-30deg)';
                    item.style.msTransform = 'skew(-30deg)';
                    item.style.oTransform = 'skew(-30deg)';
                });

                // Apply skew transformation to div elements
                navDivs.forEach(function(div) {
                    div.style.transform = 'skew(30deg)';
                    div.style.webkitTransform = 'skew(30deg)';
                    div.style.mozTransform = 'skew(30deg)';
                    div.style.msTransform = 'skew(30deg)';
                    div.style.oTransform = 'skew(30deg)';
                });
                
                $('#home-button,#works-button,#skills-button,#videos-button,#contact-button').show().css({opacity: 0});
                $('#' + actual + '-button').css({opacity: 1});
                $('#home-button,#works-button,#skills-button,#videos-button,#contact-button').stop().animate({width: '20%'}, function () {
                    $('#home-button,#works-button,#skills-button,#videos-button,#contact-button').stop().animate({opacity: 1}, function () {
                        if (actual=='home') {
                            next='skills';
                        } else if (actual=='skills') {
                            next='works';
                        } else if (actual=='works') {
                            next='videos';
                        } else if (actual=='videos') {
                            next='contact';
                        } else if (actual=='contact') {
                            next='home';
                        }
                        actual = '';
                        changing = opened = false;
                    });
                });
            });
        });
    });
}

function closeMe() {
    if (!changing && opened) {
        changing = true;
        closeSite();
    }
}

function openHome() {
    if (!changing && !opened) {
        changing = true;
        $('#works-button, #skills-button, #videos-button, #contact-button').stop().animate({opacity: 0}, 200, function () {
            $('#works-button, #skills-button, #videos-button, #contact-button').stop().animate({width: 0}, 200, function () {
                $(this).hide();
                openSite('home');
            });
        });
    } else {
        closeMe();
    }
}

function openSkills() {
    if (!changing && !opened) {
        changing = true;
        $('#home-button,#works-button,#videos-button,#contact-button').stop().animate({opacity: 0}, 200, function () {
            $('#home-button,#works-button,#videos-button,#contact-button').stop().animate({width: 0}, 200, function () {
                $(this).hide();
                openSite('skills');
            });
        });
    } else {
        closeMe();
    }
}

function openWorks() {
    if (!changing && !opened) {
        changing = true;
        $('#home-button, #skills-button, #videos-button, #contact-button').stop().animate({opacity: 0}, 200, function () {
            $('#home-button, #skills-button, #videos-button, #contact-button').stop().animate({width: 0}, 200, function () {
                $(this).hide();
                openSite('works');
            });
        });
    } else {
        closeMe();
    }
}

function openVideos() {
    if (!changing && !opened) {
        changing = true;
        $('#home-button,#works-button,#skills-button,#contact-button').stop().animate({opacity: 0}, 200, function () {
            $('#home-button,#works-button,#skills-button,#contact-button').stop().animate({width: 0}, 200, function () {
                $(this).hide();
                openSite('videos');
            });
        });
    } else {
        closeMe();
    }
}

function openContact() {
    if (!changing && !opened) {
        changing = true;
        $('#home-button,#works-button,#skills-button,#videos-button').stop().animate({opacity: 0}, 200, function () {
            $('#home-button,#works-button,#skills-button,#videos-button').stop().animate({width: 0}, 200, function () {
                $(this).hide();
                openSite('contact');
            });
        });
    } else {
        closeMe();
    }
}

function goNext() {
    if (!changing && opened) {
        closeMe();
        setTimeout(function(){
            if (next=='home') {
                openHome();
            } else if (next=='skills') {
                openSkills();
            } else if (next=='works') {
                openWorks();
            } else if (next=='videos') {
                openVideos();
            } else if (next=='contact') {
                openContact();
            }
        },1800);
    }
}

$(function () {
    
    //pisca o click
    setInterval(function(){
        
        $('.click').css({
            opacity: 0
        });
        
        if (!changing && !opened) {
            if (toggleClicksOpacity) {

                // Seletor dinâmico baseado na variável selected
                var $this = $(`#${selected}-button > .click`);

                // Alterna o valor da opacidade entre 0 e 1
                toggleClickOpacity = !toggleClickOpacity;

                // Define a opacidade com base na variável toggleClickOpacity
                $this.css({ opacity: toggleClickOpacity ? 1 : 0 });

            }
        }
        
    },170);
    
    //os botões
    $('#home-button').click(function () {
        openHome();
    }).mouseenter(function() {
        selected='home';
    }).mouseleave(function(){
        selected=getNextSelected();
    });
    
    $('#skills-button').click(function () {
        openSkills();
    }).mouseenter(function() {
        selected='skills';
    }).mouseleave(function(){
        selected=getNextSelected();
    });
    
    $('#works-button').click(function () {
        openWorks();
    }).mouseenter(function() {
        selected='works';
    }).mouseleave(function(){
        selected=getNextSelected();
    });
    
    $('#videos-button').click(function () {
        openVideos();
    }).mouseenter(function() {
        selected='videos';
    }).mouseleave(function(){
        selected=getNextSelected();
    });
    
    $('#contact-button').click(function () {
        openContact();
    }).mouseenter(function() {
        selected='contact';
    }).mouseleave(function(){
        selected=getNextSelected();
    });

    //anima pra próxima aba
    $('#next').click(function () {
        goNext();
    });
    
    //fechar
    $('#close').click(function () {
        closeMe();
    });
    
});

$(window).keyup(function (e) {
//    if (e.keyCode === 39) {
//        goNext();
//    }
//    if (e.keyCode === 27) {
//        closeMe();
//    }
//    if (e.keyCode === 49) {
//        openHome();
//    }
//    if (e.keyCode === 50) {
//        openSkills();
//    }
//    if (e.keyCode === 51) {
//        openWorks();
//    }
//    if (e.keyCode === 52) {
//        openVideos();
//    }
//    if (e.keyCode === 53) {
//        openContact();
//    }
});

function map(x, in_min, in_max, out_min, out_max) {
    return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}

var hour=0;

function getLayout(hour) {

    var width = $(window).width();

    if ((hour >= 0 && hour < 6) || (hour >= 18 && hour <= 23)) {
        //noite
        if (hour >= 0 && hour <= 2) {
            //madrugada
            $('body').stop().animate({backgroundColor: '#1b1b1b'});
        } else if (hour >= 3 && hour <= 5) {
            //amanhecendo
            $('body').stop().animate({backgroundColor: '#222'});
        } else if (hour >= 18 && hour <= 20) {
            //escurecendo
            $('body').stop().animate({backgroundColor: '#336'});
        } else if (hour >= 21 && hour <= 23) {
            //noite
            $('body').stop().animate({backgroundColor: '#0b0b22'});
        }
    } else if (hour >= 6 || hour < 18) {
        //dia
        if (hour >= 6 && hour <= 8) {
            //manhãzinha
            $('body').stop().animate({backgroundColor: '#ccc'});
        } else if (hour >= 9 && hour <= 11) {
            //manhã
            $('body').stop().animate({backgroundColor: '#eee'});
        } else if (hour == 12) {
            //meio do dia
            $('body').stop().animate({backgroundColor: '#f3f3f3'});
        } else if (hour >= 13 && hour <= 15) {
            //tarde
            $('body').stop().animate({backgroundColor: '#529'});
        } else if (hour >= 16 && hour < 18) {
            //tardezinha
            $('body').stop().animate({backgroundColor: '#418'});
        }
    }

    if (hour >= 18 && hour <= 23) {
        
        var time = new Date();
        var min = time.getMinutes();
        
        var w=$(window).width();
        var piece=(w / 12);
        var left=map(hour, 18, 23, 0, w)+map(min, 0, 59, 0, piece);
        
        $('#moon').stop().animate({left: left});
        $('#moon').stop().animate({left: map(hour, 18, 23, 15, (width / 2) - 80)});
    } else {
        $('#moon').stop().animate({left: map(hour, 0, 6, (width / 2) + 80, width - 40)});
    }
}

function getTime() {
    $.ajax({
        method: "POST",
//        url: "ajax/index.php",
        url: "./ajax",
    }).done(function (msg) {
        hour = Number(msg);
    });
}

$(function () {
//    window.setInterval(function () {
//        getLayout(hour);
//    }, 500);
    getTime();
    window.setInterval(function () {
        getTime();
    }, 15000);
});

window.setTimeout(function () {
    $('canvas').animate({opacity: 1});
}, 8000);


var count=0;
function add(div,title,pct) {
    $('#'+div).append(
        '<div id="skill-'+count+'" class="skill">'+
        '    <div class="skill-bar">'+
        '        <div class="skill-bar-title">'+
        '            '+title+' '+pct+'%'+
        '        </div>'+
//                    '        <div class="skill-bar-progress" style="width: '+pct+'%;"></div>'+
        '        <div class="skill-bar-progress" style="width: 0%;"></div>'+
        '    </div>'+
        '</div>');
    $('#skill-'+count+' .skill-bar-progress').animate({width:pct+'%'});
    count++;
}

//$(document).ready(function(){
//    add('general','Sites',100);
//    add('general','Aplicativos',100);
//    add('general','Programas desktop',100);
//    add('general','Arduino',95);
//    add('general','Raspberry',70);
//    add('general','Automação',60);
//    add('general','Hardware',60);
//    add('general','Eletrônica',30);
//
//    add('skills','HTML5',100);
//    add('skills','CSS3',100);
//    add('skills','Javascript',100);
//    add('skills','PHP',100);
//    add('skills','Dart (Flutter)',80);
//    add('skills','SQL',70);
//    add('skills','C#',70);
//    add('skills','Java',70);
//    add('skills','Python',70);
//    add('skills','ActionScript (RIP)',70);
//    add('skills','C++',60);
//    add('skills','C',40);
//    add('skills','Delphi',30);
//    add('skills','Objective-c',20);
//    add('skills','Swift',20);
//
//    add('frameworks','Git',90);
//    add('frameworks','Node.js',90);
//    add('frameworks','Npm',90);
//    add('frameworks','jQuery',90);
//    add('frameworks','Bootstrap',90);
//    add('frameworks','React',70);
//    add('frameworks','Ionic',60);
//    add('frameworks','Apache Cordova',60);
//    add('frameworks','Springboot',50);
//    add('frameworks','Yii 2',50);
//    add('frameworks','Laravel',40);
//    add('frameworks','P5',40);
//    add('frameworks','Selenium (Python)',20);
//    add('frameworks','Numpy',20);
//    add('frameworks','Composer',20);
//    add('frameworks','Angular',20);
//    add('frameworks','Vue.js',10);
//
//    add('others','Api Rest',100);
//    add('others','DOS',90);
//    add('others','SOAP',65);
//    add('others','Wordpress',60);
//    add('others','Shell Script',30);
//
//    add('more','Inkscape',75);
//    add('more','Corel Draw',70);
//    add('more','Office',70);
//    add('more','Photoshop',60);
//    add('more','Fireworks',60);
//    add('more','InDesign',40);
//    add('more','Gimp',40);
//
//    add('os','Windows',95);
//    add('os','Linux',80);
//    add('os','MacOS',30);
//});