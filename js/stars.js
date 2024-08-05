const stars_canvas = document.getElementById("stars");
const stars_ctx = stars_canvas.getContext("2d");
var stars = [];

// Function to create and draw stars
function createStars() {
    for (let i = 0; i < 600; i++) {
        const x = Math.random() * stars_canvas.width;
        const y = Math.random() * stars_canvas.height;
        const size = Math.random() * 2; // Random star size
//        const speed = 0.2 + Math.random() * 0.3; // Adjust the speed as per your preference
        const speed = 0.1 + Math.random() * 0.2; // Adjust the speed as per your preference

        stars.push({x, y, size, speed});
    }
}

// Function to draw stars on the canvas
function drawStars() {
    for (let i = 0; i < stars.length; i++) {
        const star = stars[i];
        stars_ctx.fillStyle = "white";
        stars_ctx.fillRect(star.x, star.y, star.size, star.size);

        star.x -= (star.speed / 5);

        // Reset stars when they go off the left side of the canvas
        if (star.x < 0) {
            star.x = stars_canvas.width;
            star.y = Math.random() * stars_canvas.height;
        }
    }
}

function animateStars() {
//    const currentTime = new Date();
    stars_ctx.clearRect(0, 0, stars_canvas.width, stars_canvas.height);
    drawStars();
    requestAnimationFrame(animateStars);
}

function setupStars() {
    // Function to destroy stars
    stars_canvas.width = window.innerWidth;
    stars_canvas.height = window.innerHeight;
    stars = []; // Clear the stars array
    createStars();
    animateStars();
}

window.addEventListener("resize", setupStars);
setupStars();