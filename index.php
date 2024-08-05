<?php
/*
 * Author: Flávio Pavim
 * Code of my WebSite ;)
 * https://flaviopavim.com.br
 */

session_name('session_base');
session_start();

//change language
if (!empty($_GET['lng'])) {
    $_SESSION['lng'] = $_GET['lng'];
    header('Location: ./');
    exit;
}

if (empty($_SESSION['lng'])) {

    try {
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = "http://ip-api.com/json/" . $ip;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept-Language: en-US,en;q=0.9',
            'Accept-Encoding: gzip, deflate, br',
            'Connection: keep-alive',
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        $array = json_decode($response, true);

        if (isset($array['country']) and $array['country'] == 'Brazil') {
            $_SESSION['lng'] = 'pt-br';
        }
    } catch (e) {
        
    }
}

if (empty($_SESSION['lng'])) {
    $_SESSION['lng'] = 'eng';
}

//em klingon
/*
 * Início: bortaS
 * Habilidades: chu'wI'
 * Sobre: De
 * Trabalhos: QIch
 * Vídeos: vIDyo
 * Contato: ghItlh
 */

function translate($phrase) {
    //portuguese
    if ($_SESSION['lng'] == 'pt-br') {

        $lang = array(
            //nav
            'Flávio Pavim' => 'Flávio Pavim',
            'Skills' => 'Habilidades',
            'About' => 'Sobre',
            'Works' => 'Trabalhos',
            'Done' => 'Feitos',
            'Videos' => 'Vídeos',
            'Contact' => 'Contato',
        );
        if (!empty($lang[$phrase])) {
            return $lang[$phrase];
        }
        return $phrase;
    } else if ($_SESSION['lng'] == 'eng') {
        //english
        return $phrase;
    } else {
        //klingon
        $lang = array(
            //nav
            'Flávio Pavim' => 'Flávio Pavim',
            'Skills' => 'chu\'wI\'',
            'About' => 'De',
            'Works' => 'QIch',
            'Done' => 'QIch',
            'Videos' => 'vIDyo',
            'Contact' => 'ghItlh',
        );
        if (!empty($lang[$phrase])) {
            return $lang[$phrase];
        }
        return $phrase;
//        return strrev($phrase);
    }
}

if (!empty($_POST['form-contact'])) {
//    if ($_SESSION['form-contact']==$_POST['form-contact']) {
    //message
    $to = 'contato@flaviopavim.com.br';
    $assunto = "Envio de contato no site Flávio Pavim";
    $mensagem = "Nome: " . $_POST["name"] . "\n";
    $mensagem .= "Contato: " . $_POST["contact"] . "\n\n";
    if (isset($_SESSION["lng"])) {
        $mensagem .= "Language: " . $_SESSION["lng"] . "\n\n";
    }
    $mensagem .= $_POST["message"];

    //additional information
    $ip = $_SERVER["REMOTE_ADDR"];
    $dateTime = date("Y-m-d H:i:s");
    $browser = $_SERVER["HTTP_USER_AGENT"];
    $mensagem .= "\n\nIP: $ip\nData e Hora: $dateTime\nNavegador: $browser";

//    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $headers = "From: " . $to;

    if (mail($to, $assunto, $mensagem, $headers)) {
        echo '<script>alert("Email enviado com sucesso!"); window.location.href = "./";</script>';
    } else {
        echo '<script>alert("Ocorreu um erro ao enviar o email."); window.location.href = "./";</script>';
    }
    exit;
}
?>
<!DOCTYPE html>
<!--

    Criado do zero com carinho por Flávio Pavim ♥

    Tecnologias utilizadas: HTML, CSS, Javascript e PHP

-->
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"           content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="title"              content="Flávio Pavim">
        <meta name="description"        content="Criação de aites, aplicativos, programas Windows, automação e muito mais em softwares!">
        <meta name="keywords"           content="desenvolvimento, criação, sites, aplicativos, automação, softwares">
        <meta name="author"             content="Flávio Pavim">
        <meta name="robots"             content="index,follow">
        <meta property="og:url"         content="<?php echo $actual_link; ?>" />
        <meta property="og:type"        content="website" />
        <meta property="og:title"       content="Flávio Pavim" />
        <meta property="og:description" content="Criação de sites, aplicativos, programas Windows, automação e muito mais em softwares!" />
        <meta property="og:image"       content="https://flaviopavim.com.br/img/cover-stars.png" />
        <title>Flávio Pavim</title>
        <link rel="icon" href="img/favicon.png" type="image/x-icon">
        <link href="add/bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/color.css" rel="stylesheet" type="text/css"/>
        <link href="css/font.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/videos.css" rel="stylesheet" type="text/css"/>
        <link href="css/home.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <script src="js/map.js" type="text/javascript"></script>
        <canvas id="stars"></canvas>
        <script src="js/stars.js" type="text/javascript"></script>
<!--        
        <canvas id="canvas"></canvas>
    <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        const particles = [];
        const maxParticles = 100;

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        class Particle {
            constructor(x, y, size, opacity) {
                this.x = x;
                this.y = y;
                this.size = size;
                this.opacity = opacity;
                this.maxSize = size;
                this.fadeRate = 0.02;
                this.dieRate = 0.01;
            }

            update() {
                this.size -= this.dieRate;
                this.opacity -= this.fadeRate;
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.fill();
            }
        }

        function createParticles(x, y) {
            const distanceMax = 100;
            const maxSize = 20;
            const minSize = 5;

            for (let i = 0; i < maxParticles; i++) {
                const size = Math.max(minSize, maxSize - (Math.sqrt((x - canvas.width / 2) ** 2 + (y - canvas.height / 2) ** 2) / distanceMax) * (maxSize - minSize));
                particles.push(new Particle(x, y, size, 1));
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            for (let i = particles.length - 1; i >= 0; i--) {
                particles[i].update();
                particles[i].draw();
                if (particles[i].opacity <= 0) {
                    particles.splice(i, 1);
                }
            }

            requestAnimationFrame(animateParticles);
        }

        function onMouseMove(event) {
            const x = event.clientX;
            const y = event.clientY;
            createParticles(x, y);
        }

        window.addEventListener('mousemove', onMouseMove);
        animateParticles();
    </script>-->

<!--        <canvas id="canvas" style="width: 300px; height: 150px; position: fixed; top: 100px; right: 100px;"></canvas>
        <canvas id="canvas2" style="width: 300px; height: 150px; position: fixed; top: 100px; right: 100px; z-index: 2;"></canvas>
        <script>
            const canvas = document.getElementById('canvas');
            const ctx = canvas.getContext('2d');
            const canvas2 = document.getElementById('canvas2');
            const ctx2 = canvas2.getContext('2d');

            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            canvas2.width = window.innerWidth;
            canvas2.height = window.innerHeight;
            

            const centerX = canvas.width / 2;
            const centerY = canvas.height / 2;

            const centerX2 = canvas2.width / 2;
            const centerY2 = canvas2.height / 2;

            // Parâmetros do planeta
            const planetRadius = 50;  // Raio do planeta
            const planetColor = 'rgba(120, 120, 200, 1)';  // Azul com opacidade

            // Parâmetros do anel
            const ringInnerRadius = planetRadius + 10;
            const ringOuterRadius = planetRadius + 40;
            const numberOfParticles = 500;  // Número de partículas no anel

            // Função para desenhar o planeta
            function drawPlanet() {
                ctx.fillStyle = planetColor;
                ctx.beginPath();
                ctx.arc(centerX, centerY, planetRadius, 0, Math.PI * 2);
                ctx.closePath();
                ctx.fill();
            }

            function drawFrontSemiCircle() {
                ctx2.fillStyle = planetColor;
                ctx2.beginPath();
                ctx2.arc(centerX2, centerY2, planetRadius, Math.PI, 0); // Semicírculo na frente
                ctx2.lineTo(centerX2, centerY2);
                ctx2.closePath();
                ctx2.fill();
            }

            // Classe para a partícula do anel
            class Particle {
                constructor() {
                    this.angle = Math.random() * Math.PI * 2;
                    this.radius = random(ringInnerRadius, ringOuterRadius);
                    this.size = random(1, 6);
                    this.speed = random(0.0001, 0.0007); // Velocidade de rotação
    //                this.color = `hsla(${random(0, 60)}, 100%, 80%, ${random(0.4, 0.8)})`; // Cores variadas
                    this.color = `hsla(${random(220, 250)}, 100%, 80%, ${random(0.4, 0.8)})`; // Cores variadas
                }

                update() {
                    this.angle += this.speed; // Atualiza o ângulo para rotação

                    // Ajusta o tamanho para criar a perspectiva 3D
                    this.size = 2 + Math.sin(this.angle) * 2;
                }

                draw() {
                    // Calculo da posição elíptica
                    const x = centerX + Math.cos(this.angle) * this.radius;
                    const y = centerY + Math.sin(this.angle) * (this.radius / 2); // Efeito elíptico

                    ctx.fillStyle = this.color;
                    ctx.beginPath();
                    ctx.arc(x, y, this.size, 0, Math.PI * 2);
                    ctx.closePath();
                    ctx.fill();
                }
            }

            // Função para gerar um valor aleatório entre um intervalo
            function random(min, max) {
                return Math.random() * (max - min) + min;
            }

            const particlesArray = [];
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpa a tela

                drawPlanet();
    //            drawBackSemiCircle(); // Desenha o planeta

                // Desenha as partículas que estão atrás do planeta
                particlesArray.forEach(particle => {
                    if (!particle.isInFront()) {
                        particle.update();
                        particle.draw();
                    }
                });
                drawFrontSemiCircle(); // Desenha o planeta

                // Desenha as partículas que estão na frente do planeta
                particlesArray.forEach(particle => {
                    if (particle.isInFront()) {
                        particle.update();
                        particle.draw();
                    }
                });


                requestAnimationFrame(animate);
            }

            Particle.prototype.isInFront = function () {
                return Math.sin(this.angle) < 0;
            };

            window.addEventListener('resize', () => {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                particlesArray.length = 0;
                initParticles(); // Reinicializa partículas ao redimensionar
            });

            function initParticles() {
                for (let i = 0; i < numberOfParticles; i++) {
                    particlesArray.push(new Particle());
                }
            }

            animate();
        </script>-->
<!-- <canvas id="canvas"></canvas>
    <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        // Configurações do canvas
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        // Parâmetros do cometa
        const comet = {
            x: -50, // Começa fora da tela à esquerda
            y: canvas.height / 2 - 50, // Posição um pouco acima do meio da tela
            size: 2, // Tamanho menor
            tailLength: 50, // Comprimento da cauda
            tailColor: 'rgba(255, 255, 255, 0.5)', // Cor da cauda de poeira
            color: 'white',
            speed: 1 // Velocidade ajustada
        };

        function drawComet() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            // Desenha o núcleo do cometa
            ctx.beginPath();
            ctx.arc(comet.x, comet.y, comet.size, 0, Math.PI * 2);
            ctx.fillStyle = comet.color;
            ctx.fill();
        }

        function updateComet() {
            comet.x += comet.speed;

            // Se o cometa sair da tela à direita, reposiciona à esquerda
            if (comet.x > canvas.width + comet.size) {
                comet.x = -comet.size;
                comet.y = canvas.height / 2 - 50 + (Math.random() * 20 - 10); // Pequena variação vertical
            }
        }

        function animate() {
            drawComet();
            updateComet();
            requestAnimationFrame(animate);
        }

        animate();
    </script>-->

<!--         <canvas id="canvas"></canvas>
<script>
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const centerX = canvas.width / 2;
const centerY = canvas.height / 2;

// Parâmetros do planeta
const planetRadius = 100;  // Raio do planeta
const planetColor = 'rgba(100, 149, 237, 0.8)';  // Azul com opacidade

// Parâmetros do anel
const ringInnerRadius = planetRadius + 20;
const ringOuterRadius = planetRadius + 60;
const numberOfParticles = 1000;  // Número de partículas no anel

// Função para desenhar o planeta
function drawPlanet() {
    ctx.fillStyle = planetColor;
    ctx.beginPath();
    ctx.arc(centerX, centerY, planetRadius, 0, Math.PI * 2);
    ctx.closePath();
    ctx.fill();
}

// Classe para a partícula do anel
class Particle {
    constructor() {
        this.angle = Math.random() * Math.PI * 2;
        this.radius = random(ringInnerRadius, ringOuterRadius);
        this.size = random(0.5, 2);
        this.speed = random(0.001, 0.003); // Velocidade de rotação
        this.color = `hsla(${random(0, 60)}, 100%, 80%, ${random(0.4, 0.8)})`; // Cores variadas
    }

    update() {
        this.angle += this.speed; // Atualiza o ângulo para rotação
    }

    draw() {
        const x = centerX + Math.cos(this.angle) * this.radius;
        const y = centerY + Math.sin(this.angle) * this.radius;

        ctx.fillStyle = this.color;
        ctx.beginPath();
        ctx.arc(x, y, this.size, 0, Math.PI * 2);
        ctx.closePath();
        ctx.fill();
    }

    isInFront() {
        return Math.sin(this.angle) < 0;
    }
}

// Função para gerar um valor aleatório entre um intervalo
function random(min, max) {
    return Math.random() * (max - min) + min;
}

const particlesArray = [];
for (let i = 0; i < numberOfParticles; i++) {
    particlesArray.push(new Particle());
}

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpa a tela
    
    // Desenha as partículas que estão atrás do planeta
    particlesArray.forEach(particle => {
        if (!particle.isInFront()) {
            particle.update();
            particle.draw();
        }
    });

    drawPlanet(); // Desenha o planeta

    // Desenha as partículas que estão na frente do planeta
    particlesArray.forEach(particle => {
        if (particle.isInFront()) {
            particle.update();
            particle.draw();
        }
    });

    requestAnimationFrame(animate);
}

window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    particlesArray.length = 0;
    initParticles(); // Reinicializa partículas ao redimensionar
});

function initParticles() {
    for (let i = 0; i < numberOfParticles; i++) {
        particlesArray.push(new Particle());
    }
}

animate();
</script>-->

<!--        <canvas id="canvas"></canvas>
<script>
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const centerX = canvas.width / 2;
const centerY = canvas.height / 2;

// Parâmetros do planeta
const planetRadius = 100;  // Raio do planeta
const planetColor = 'rgba(100, 149, 237, 0.8)';  // Azul com opacidade

// Parâmetros do anel
const ringInnerRadius = planetRadius + 20;
const ringOuterRadius = planetRadius + 60;
const numberOfParticles = 500;  // Número de partículas no anel

// Função para desenhar o planeta
function drawPlanet() {
    ctx.fillStyle = planetColor;
    ctx.beginPath();
    ctx.arc(centerX, centerY, planetRadius, 0, Math.PI * 2);
    ctx.closePath();
    ctx.fill();
}

// Classe para a partícula do anel
class Particle {
    constructor() {
        this.angle = Math.random() * Math.PI * 2;
        this.radius = random(ringInnerRadius, ringOuterRadius);
        this.size = random(0.5, 2);
        this.speed = random(0.001, 0.003); // Velocidade de rotação
        this.color = `hsla(${random(0, 60)}, 100%, 80%, ${random(0.4, 0.8)})`; // Cores variadas
    }

    update() {
        this.angle += this.speed; // Atualiza o ângulo para rotação
    }

    draw() {
        const x = centerX + Math.cos(this.angle) * this.radius;
        const y = centerY + Math.sin(this.angle) * this.radius;
        ctx.fillStyle = this.color;
        ctx.beginPath();
        ctx.arc(x, y, this.size, 0, Math.PI * 2);
        ctx.closePath();
        ctx.fill();
    }
}

// Função para gerar um valor aleatório entre um intervalo
function random(min, max) {
    return Math.random() * (max - min) + min;
}

const particlesArray = [];
for (let i = 0; i < numberOfParticles; i++) {
    particlesArray.push(new Particle());
}

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpa a tela
    drawPlanet();

    for (let particle of particlesArray) {
        particle.update();
        particle.draw();
    }

    requestAnimationFrame(animate);
}

window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    particlesArray.length = 0;
    initParticles(); // Reinicializa partículas ao redimensionar
});

function initParticles() {
    for (let i = 0; i < numberOfParticles; i++) {
        particlesArray.push(new Particle());
    }
}

animate();
</script>-->

<?php if (date('m') == 12) { ?>
            <canvas id="snowCanvas"></canvas>
            <script src="js/snowfall.js" type="text/javascript"></script>
        <?php } else if ((date('H') >= 19 and date('H') <= 23) or (date('H') >= 0 and date('H') < 3)) { ?>

    <!--            <canvas id="moon" width="200" height="200"></canvas>
    <script src="js/moon.js" type="text/javascript"></script>-->
        <?php } else if (date('H') >= 3 and date('H') <= 4) { ?>
            <canvas id="matrixCanvas"></canvas>
            <script src="js/matrix.js" type="text/javascript"></script>
        <?php } ?>
        <div id="language">
            <a href="?lng=pt-br"><img id="pt-br" src="img/flag/brasil.png" alt=""/></a>
            <a href="?lng=eng"><img id="usa" src="img/flag/usa.png" alt=""/></a>
        </div>
<?php include 'inc/nav.php'; ?>
        <main>
<?php
include 'view/home.php';
include 'view/skills.php';
?>
            <section id="works"></section>
            <?php
            include 'view/videos.php';
            include 'view/contact.php';
            ?>
        </main>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/adjust.js" type="text/javascript"></script>
    </body>
</html>