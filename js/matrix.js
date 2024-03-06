const canvas = document.getElementById("matrixCanvas");
const ctx = canvas.getContext("2d");
// Defina as dimensões do canvas para preencher a janela
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
// Configurações de caracteres e estilo
const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
const fontSize = 18;
const columns = canvas.width / fontSize;
// Array para manter a posição vertical dos caracteres
const drops = [];
// Inicialize a posição vertical dos caracteres
for (let i = 0; i < columns; i++) {
    drops[i] = 1;
}

function drawMatrix() {
    ctx.fillStyle = "rgba(0, 0, 0, 0.03)";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = "#060"; // Cor dos caracteres
    ctx.font = `${fontSize}px monospace`;
    for (let i = 0; i < drops.length; i++) {
        const text = characters[Math.floor(Math.random() * characters.length)];
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);
        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }

        drops[i]++;
    }
}

function matrixAnimation() {
    drawMatrix();
    setTimeout(function () {
        requestAnimationFrame(matrixAnimation);
    }, 50);
}



// Iniciar a animação
matrixAnimation();