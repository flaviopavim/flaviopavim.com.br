const canvas = document.getElementById("snowCanvas");
const ctx = canvas.getContext("2d");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
// Configurações de neve
const snowflakes = [];
const numSnowflakes = 300; // Número de flocos de neve

for (let i = 0; i < numSnowflakes; i++) {
    snowflakes.push({
        x: Math.random() * canvas.width, // Posição horizontal aleatória
        y: Math.random() * canvas.height, // Posição vertical aleatória
        radius: Math.random() * 4 + 1, // Tamanho aleatório
        speed: Math.random() * 3 + 1, // Velocidade aleatória
        opacity: Math.random() * 0.5 + 0.3 // Opacidade aleatória
    });
}

function drawSnow() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = "white";
    for (let i = 0; i < numSnowflakes; i++) {
        const snowflake = snowflakes[i];
        ctx.beginPath();
        ctx.arc(snowflake.x, snowflake.y, snowflake.radius, 0, Math.PI * 2);
        ctx.globalAlpha = snowflake.opacity;
        ctx.fill();
        // Mova o floco de neve para baixo
        snowflake.y += snowflake.speed;
        // Verifique se o floco de neve atingiu o fundo e reinicie
        if (snowflake.y > canvas.height) {
            snowflake.x = Math.random() * canvas.width;
            snowflake.y = 0;
        }
    }

    ctx.globalAlpha = 1; // Restaure a opacidade global
}

function snowfall() {
    drawSnow();
    requestAnimationFrame(snowfall);
}

snowfall(); // Inicie a animação