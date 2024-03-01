<?php
session_name('session_base'); //automático
session_start();

//seta configurações de hora
date_default_timezone_set('America/Sao_Paulo');

if (!empty($_POST['form-contact'])) {
//    if ($_SESSION['form-contact']==$_POST['form-contact']) {


    $to = 'contato@flaviopavim.com.br';

    $assunto = "Envio de contato no site Flávio Pavim";
    $mensagem = "Nome: " . $_POST["name"] . "\n";
    $mensagem .= "Contato: " . $_POST["contact"] . "\n\n";
    $mensagem .= $_POST["message"];

    // Informações adicionais
    $ip = $_SERVER["REMOTE_ADDR"];
    $dateTime = date("Y-m-d H:i:s");
    $browser = $_SERVER["HTTP_USER_AGENT"];

    $mensagem .= "\n\nIP: $ip\nData e Hora: $dateTime\nNavegador: $browser";

//        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $headers = "From: " . $to; // Substitua pelo seu endereço de email


    if (mail($to, $assunto, $mensagem, $headers)) {
        echo '<script>alert("Email enviado com sucesso!"); window.location.href = "./";</script>';
    } else {
        echo '<script>alert("Ocorreu um erro ao enviar o email."); window.location.href = "./";</script>';
    }
//        } else {
//            echo '<script>alert("O endereço de email fornecido é inválido."); window.location.href = "./";</script>';
//        }
//    } else {
//        //token inválido
////        $_SESSION['alert'] = 'Token inválido';
//        echo '<script>alert("Token inválido.");  window.location.href = "./"</script>';
//    }

    exit;
}
?>
<!DOCTYPE html>
<!--

    Criado do zero com carinho por Flávio Pavim ♥

    Tecnologias utilizadas: HTML, CSS, Javascript, PHP e mySQL

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
        <!--<meta property="og:image"       content="https://flaviopavim.com.br/img/social.png" />-->
        <meta property="og:image"       content="https://flaviopavim.com.br/img/cover-stars.png" />

        <title>Flávio Pavim</title>

        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/color.css" rel="stylesheet" type="text/css"/>
        <link href="css/font.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/videos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        
        
        
        
        <?php if (date('m')==12) { ?>
        <canvas id="snowCanvas"></canvas>
        <script>
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
        </script>
        <?php } else if ((date('H')>=19 and date('H')<=23) or (date('H')>=0 and date('H')<2)) { ?>
<!--        <canvas id="nightCanvas"></canvas>

        <script>
            const canvas = document.getElementById("nightCanvas");
            const ctx = canvas.getContext("2d");
            const stars = [];
            const clouds = [];
            

            // Function to draw the night background
            function drawNight() {
//                ctx.fillStyle = "#0b0b0b";
//                ctx.fillRect(0, 0, canvas.width, canvas.height);
            }

            // Function to create and draw stars
            function drawStars() {
                for (let i = 0; i < 500; i++) {
                    const x = Math.random() * canvas.width;
                    const y = Math.random() * canvas.height;
                    const opacity = Math.random(); // Random initial opacity
                    const speed = Math.random() * 0.01; // Random twinkling speed
                    stars.push({ x, y, opacity, speed });
                }
            }

            // Function to draw the moon
            function drawMoon() {
                ctx.beginPath();
                ctx.arc(70, 70, 50, 0, 2 * Math.PI);
//                ctx.fillStyle = "#333";
                ctx.fillStyle = `rgba(200, 200, 200, 1`;
                ctx.fill();
                ctx.closePath();
            }

            // Function to create a random cloud with an image from 1 to 5
            function createRandomCloud() {
                const cloudImageNumber = Math.floor(Math.random() * 5) + 1;
                return `img/cloud-${cloudImageNumber}.png`;
            }
            
//            let x = Math.random() * canvas.width;
            let x = -100;
            let y = 100;
            let speed = 10;
            
            // Function to draw and update the stars, creating a twinkling effect
            let a=0;
            function animate() {
                
                a++;
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                drawNight();

                for (let i = 0; i < stars.length; i++) {
                    const star = stars[i];
                    ctx.fillStyle = `rgba(255, 255, 255, ${star.opacity}`;
                    ctx.fillRect(star.x, star.y, 2, 2);

                    star.opacity += star.speed;
                    if (star.opacity > 1 || star.opacity < 0) {
                        star.speed = -star.speed;
                    }
                }
                
                
                
                // Estrela cadente
                ctx.beginPath();
                ctx.arc(x, y, 2, 0, Math.PI * 2);
                ctx.fillStyle = "white";
                ctx.fill();

                x += speed;
//                y += a+5;
                y += (a/10)+5;

                // Redefina a estrela no topo quando ela desaparecer da tela
                if (x > canvas.width) {
                    x = 0;
                    a=0;
                }
                if (y > canvas.height) {
                    y = 0;
                    a=0;
                }
                
                
                drawMoon();

//                for (let i = 0; i < clouds.length; i++) {
//                    const cloud = clouds[i];
//                    ctx.drawImage(cloud.img, cloud.x, cloud.y, cloud.width, cloud.height);
//                    cloud.x += cloud.speed;
//
//                    // Reset cloud's position when it goes off the canvas
//                    if (cloud.x > canvas.width) {
//                        cloud.x = -cloud.width;
//                        cloud.img.src = createRandomCloud();
//                    }
//                }

                requestAnimationFrame(animate);
                
             
            }

            // Function to create random clouds and start animation
            function drawNightSky() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                drawNight();
                drawStars();

//                for (let i = 0; i < 15; i++) { // Create 5 random clouds
//                    const randomX = Math.random() * canvas.width;
//                    const randomY = Math.random() * (200); // Random Y within the upper half of the canvas
//                    const randomSpeed = Math.random() * 2 + 0.1; // Random speed between 1 and 3
//                    const randomCloudImage = createRandomCloud();
//                    const cloud = { img: new Image(), x: randomX, y: randomY, width: 120, height: 70, speed: randomSpeed };
//                    cloud.img.src = randomCloudImage;
//                    clouds.push(cloud);
//                }
                
                drawMoon();
                
                animate();
            }

            // Call the function to draw the night sky
            drawNightSky();
        </script>-->
        
        
        
        <canvas id="nightCanvas"></canvas>

<script>
    
    function map(x, in_min, in_max, out_min, out_max) {
                return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
            }
    
    const canvas = document.getElementById("nightCanvas");
    const ctx = canvas.getContext("2d");
    const stars = [];
    let moonX = 100; // Posição inicial da lua
    let moonY = 100; // Altura fixa para a lua
    let shootingStarX = -100;
    let shootingStarY = 100;
    let shootingStarSpeed = 3;

    // Function to draw the night background
    function drawNight() {
//        ctx.fillStyle = "#0b0b0b";
//        ctx.fillRect(0, 0, canvas.width, canvas.height);
    }

    // Function to create and draw stars
    function createStars() {
        for (let i = 0; i < 500; i++) {
            const x = Math.random() * canvas.width;
            const y = Math.random() * canvas.height;
            const size = Math.random() * 2; // Random star size
            const speed = 0.2 + Math.random() * 0.5; // Adjust the speed as per your preference

            stars.push({ x, y, size, speed });
        }
    }

    // Function to draw stars on the canvas
    function drawStars() {
        for (let i = 0; i < stars.length; i++) {
            const star = stars[i];
            ctx.fillStyle = "white";
            ctx.fillRect(star.x, star.y, star.size, star.size);

            star.x -= (star.speed/5);

            // Reset stars when they go off the left side of the canvas
            if (star.x < 0) {
                star.x = canvas.width;
                star.y = Math.random() * canvas.height;
            }
        }
    }

    // Function to draw the moon
    function drawMoon(time) {
        // Calcular a posição da lua com base na hora do dia (0-24 horas)
        const hour = time.getHours();
        const min = time.getMinutes();
        if (hour >= 18 || hour < 6) {
            
            var multiplicador=1;
            if (hour==18) {
                multiplicador=1;
            } else if (hour==19) {
                multiplicador=2;
            } else if (hour==20) {
                multiplicador=3;
            } else if (hour==21) {
                multiplicador=4;
            } else if (hour==22) {
                multiplicador=5;
            } else if (hour==23) {
                multiplicador=6;
            } else if (hour==0) {
                multiplicador=7;
            } else if (hour==1) {
                multiplicador=8;
            } else if (hour==2) {
                multiplicador=9;
            } else if (hour==3) {
                multiplicador=10;
            } else if (hour==4) {
                multiplicador=11;
            } else if (hour==5) {
                multiplicador=12;
            } else if (hour==6) {
                multiplicador=13;
            }
            
            var prop=map(min,0,60,0,(canvas.width / 12));
            
//            moonX = ((canvas.width / 12) * (multiplicador))+((canvas.width / 100) *minProp);
            moonX = ((canvas.width / 12) * multiplicador)+prop;
//            moonX = 300;
        } else {
            // Se não estiver na faixa de 18-6 horas, a lua fica fora da tela
            moonX = -100;
        }

        ctx.beginPath();
        ctx.arc(moonX, moonY, 50, 0, 2 * Math.PI);
        ctx.fillStyle = "white";
        ctx.fill();
    }

    // Function to draw a shooting star
//    function drawShootingStar() {
//        ctx.beginPath();
//        ctx.moveTo(shootingStarX, shootingStarY);
//        ctx.lineTo(shootingStarX + 30, shootingStarY - 30);
//        ctx.strokeStyle = "white";
//        ctx.stroke();
//
//        shootingStarX += shootingStarSpeed;
//
//        // Reset the shooting star when it goes off the right side of the canvas
//        if (shootingStarX > canvas.width) {
//            shootingStarX = -100;
//            shootingStarY = Math.random() * canvas.height / 2;
//        }
//    }

    function animate() {
        const currentTime = new Date();
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawNight();
        drawStars();
        drawMoon(currentTime);
//        drawShootingStar();
        requestAnimationFrame(animate);
    }

    function setup() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        drawNight();
        createStars();
        animate();
    }

    window.addEventListener("resize", setup);
    setup();
    
    
    
//    const canvas = document.getElementById("canvas");
//            const ctx = canvas.getContext("2d");

//            canvas.width = window.innerWidth;
//            canvas.height = window.innerHeight;

//            function update() {
////                ctx.clearRect(0, 0, canvas.width, canvas.height);
//
//                // Desenhar um círculo
//                ctx.fillStyle = "green";
//                ctx.beginPath();
//                ctx.arc(2000, 10700, 10000, 0, Math.PI * 2);
//                ctx.fill();
//                ctx.closePath();
//
//                // Desenhar um círculo
//                ctx.beginPath();
//                ctx.fillStyle = "#339933";
//                ctx.arc(-600, 10700, 10000, 0, Math.PI * 2);
//                ctx.fill();
//                ctx.closePath();
//
//                requestAnimationFrame(update);
//            }
//
//            update();
</script>




        <?php } else if (date('H')>=2 and date('H')<=4) { ?>
        <canvas id="matrixCanvas"></canvas>
        <script>
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
                ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                ctx.fillStyle = "#0F0"; // Cor dos caracteres
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
        </script>
        <?php } ?>




        <nav>
            <div class="container">
                <ul>
                    <li id="home-button" class="red">
                        <div class="desktop">Flávio Pavim</div>
                        <div class="mobile">Home</div>
                    </li>
                    <li id="about-button" class="orange">
                        <div class="desktop">Habilidades</div>
                        <div class="mobile">Sobre</div>
                    </li>
                    <li id="services-button" class="yellow">Softwares</li>
                    <li id="videos-button" class="green">Vídeos</li>
                    <li id="contact-button" class="blue">Contato</li>
                    <a id="close" class="dark">X</a>
                </ul>
            </div>
        </nav>

        <main>
            <section id="home">
                <div class="container page">

                    <img id="me" src="img/flaviopavim.jpg">

                    Programador desde os 14 anos, já estou com <?php
                    $diff = abs(strtotime(date('Y-m-d')) - strtotime('1988-03-28'));
                    $years = floor($diff / (365 * 60 * 60 * 24));
                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));

                    echo $years;
                    ?>, fazem <?php echo $years - 14; ?> anos que faço códigos

                    <br>
                    <br>
                    Sempre gostei de máquinas e eletrônica, aos 14 descobri que gosto mais de softwares
                    <br>
                    <br>
                    Comecei fazendo sites pras minhas bandas de rock, era expert no finado Flash kkkk
                    <br>
                    <br>
                    Fiz um site de baladas que era bem conhecido em minha região, depois disso fui trabalhar pra empresas pra aprimorar meus conhecimentos, trabalhei alguns anos fazendo sites e ecommerces
                    <br>
                    <br>
                    Comprei meu primeiro Arduino e aprendi muito mais sobre outras linguagens, então comecei a fazer apps por conta, e hoje posso desenvolver quase tudo em sites e apps
                    <br>
                    <br>
                    Atualmente trabalho com desenvolvimento de sites, aplicativos, automação residencial, automação de processos e softwares pra máquinas com Arduino ou Raspberry
                </div>
            </section>
            <section id="about">
                <div class="container page">
                    <!--<h2>Sobre</h2>-->
                    <ul>
                        <li>😎 Habilidades: HTML5, CSS3, Javascript, XML, .htaccess, PHP, MySQL, C#, C++, C, Objective-c, Swift, Java (Web, Desktop and Android), Dart (Flutter), Python, Delphi, ActionScript (RIP)</li>
                        <br>
                        <li>📼 Databases: SQL, No-SQL, Oracle, SQFlite</li>
                        <br>
                        <li>👽 Frameworks: jQuery, Bootstrap, Laravel, Yii2, Springboot, Selenium (Python), Ionic, Apache Cordova, Numpy, P5, React.js, React Native, Angular, Vue.js</li>
                        <br>
                        <li>👾 Outros: Node.js, Npm, Git, Composer, DOS, Shell Script, Api Rest, SOAP, Wordpress</li>
                        <br>
                        <li>💻 Alguns outros softwares: Office, Corel Draw, Photoshop, Fireworks, InDesign, Inkscape, Gimp</li>
                        <br>
                        <li>🐧 Sistemas operacionais: Windows, Linux, MacOS</li>
                    </ul>
                </div>
            </section>
            <section id="services">
                <div class="container page">
                    <ul>
                        <li>
                            <h3>SITES E WEB</h3>
                            <p>Criação de sites responsivos e único para você e seu negócio</p>
                        </li>
                        <li>
                            <h3>APLICATIVOS</h3>
                            <p>Desenvolvimento de aplicativos multiplataforma para Android e iOS</p>
                        </li>
                        <li>
                            <h3>AUTOMAÇÃO DE PROCESSOS</h3>
                            <p>Automação de tarefas e processos para aumentar a eficiência e produtividade</p>
                        </li>
                        <li>
                            <h3>PROJEÇÃO DE MÁQUINAS</h3>
                            <p>Máquinas ou equipamentos com Arduino e Raspberry</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="videos">
                <div class="container page">

                    Esse vídeo resume bem meus hobbys, minha vida, e o que passa na minha cabeça kkkk
                    <div class="br-15"></div>

                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/embed/3wZgyTzcRWk"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                            allowfullscreen></iframe>
                    </div>

                    <div class="br-15"></div>

                    Vídeo sobre Arduino, um dos meus passatempos preferidos
                    <div class="br-15"></div>

                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/embed/rsyoDI5WDIU"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </section>
            <section id="contact">
                <div class="container page">
                    <div class="contatos">
                        <div class="contato-left">

                            Entre em contato, faça seu orçamento sem compromisso, ou deixe sua opinião, sugestão.<br>
                            Retornarei o mais breve possível!

                            <ul class="contact-list">
                                <li><a href="mailto:contato@flaviopavim.com.br" target="_blank" class="default">contato@flaviopavim.com.br</a></li>
                            </ul>
                            <ul class="contact-list">
                                <li>
                                    <img src="img/social/whatsapp.png" alt=""/>
                                    <a href="https://wa.me/5518996626124" target="_blank" class="whatsapp">+55 (18) 99662-6124</a>
                                </li>
                            </ul>
                            <ul class="contact-list">
                                <li><a href="#" class="default">Celular: (67) 9 9312-9223</a></li>
                            </ul>
                            <ul class="contact-list">
                                <li>
                                    <img src="img/social/github.png" alt=""/>
                                    <a href="https://github.com/flaviopavim" target="_blank" class="default">GitHub</a>
                                </li>
                                <li>
                                    <img src="img/social/linkedin.png" alt=""/>
                                    <a href="https://linkedin.com/in/kicko" target="_blank" class="linkedin">LinkedIn</a>
                                </li>
                                <li>
                                    <img src="img/social/facebook.png" alt=""/>
                                    <a href="https://facebook.com/rockandhack" target="_blank" class="linkedin">Facebook</a>
                                </li>
                                <li>
                                    <img src="img/social/youtube.png" alt=""/>
                                    <a href="https://www.youtube.com/@FlavioPavim" target="_blank" class="linkedin">YouTube</a>
                                </li>
                                <li>
                                    <img src="img/social/spotify.webp" alt=""/>
                                    <a href="https://open.spotify.com/user/31bzmypne5bjxthqhotuxzpo7goi" target="_blank" class="linkedin">Spotify</a>
                                </li>
                            </ul>

                            CNPJ: 15.616.043/0001-73
                        </div>
                        <div class="contato-right">
                            <form action="./" method="post">

                                <p>Deixe sua mensagem, sugestão, ou entre em contato pelo formulário abaixo</p>
                                <p>Responderei o mais breve possível</p>

                                <input type="hidden" name="form-contact" value="<?php echo $_SESSION['form-contact'] = md5(time() . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)); ?>">

                                <input type="text" name="name" placeholder="Digite seu nome">
                                <input type="text" name="contact" placeholder="Digite seu email ou whatsapp">

                                <textarea name="message" placeholder="Digite sua mensagem"></textarea>

                                <button>Enviar mensagem</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/adjust.js" type="text/javascript"></script>
        <script src="js/uncopy.js" type="text/javascript"></script>
    </body>
</html>