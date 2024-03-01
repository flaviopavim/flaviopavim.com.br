var moon_canvas = document.getElementById('moon');
var moon_context = moon_canvas.getContext('2d');

let moonX = 100; // Posição inicial da lua
let moonY = 100; // Altura fixa para a lua

function drawMoon() {
//    const time = new Date();
////    const hour = time.getHours();
//    var hour = 22;
//    var min = time.getMinutes();
//    if (hour >= 18 || hour < 6) {
//
//        var multiplicador = 1;
//        if (hour == 18) {
//            multiplicador = 1;
//        } else if (hour == 19) {
//            multiplicador = 2;
//        } else if (hour == 20) {
//            multiplicador = 3;
//        } else if (hour == 21) {
//            multiplicador = 4;
//        } else if (hour == 22) {
//            multiplicador = 5;
//        } else if (hour == 23) {
//            multiplicador = 6;
//        } else if (hour == 0) {
//            multiplicador = 7;
//        } else if (hour == 1) {
//            multiplicador = 8;
//        } else if (hour == 2) {
//            multiplicador = 9;
//        } else if (hour == 3) {
//            multiplicador = 10;
//        } else if (hour == 4) {
//            multiplicador = 11;
//        } else if (hour == 5) {
//            multiplicador = 12;
//        } else if (hour == 6) {
//            multiplicador = 13;
//        }
//
//        var piece=window.innerWidth / 12;
//        var prop = map(min, 0, 60, 0, piece);
//        moonX = (piece * multiplicador) + prop;
//    } else {
//        // Se não estiver na faixa de 18-6 horas, a lua fica fora da tela
//        moonX = -100;
//    }

    moon_context.clearRect(0, 0, moon_canvas.width, moon_canvas.height);
//    moon_context.clearRect(0, 0, moon_canvas.width, moon_canvas.height);
    
    moon_context.beginPath();
    moon_context.arc(moonX, moonY, 50, 0, 2 * Math.PI);
    moon_context.fillStyle = "#F6F1D5";
    moon_context.fill();
}

function animateMoon() {
    drawMoon();
    requestAnimationFrame(animateMoon);
}

window.addEventListener("resize", animateMoon);
animateMoon();
