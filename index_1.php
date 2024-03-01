<!DOCTYPE html>
<!--

    Criado do zero com carinho por Flávio Pavim ♥

    Tecnologias utilizadas: HTML, CSS, Javascript, PHP e mySQL

-->
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta charset="UTF-8">
        <meta name="viewport"                  content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="title"                     content="Flávio Pavim">
        <meta name="description"               content="Criação de aites, aplicativos, programas Windows, automação e muito mais em softwares!">
        <meta name="keywords"                  content="desenvolvimento, criação, sites, aplicativos, automação, softwares">
        <meta name="author"                    content="Flávio Pavim">
        <meta name="robots"                   content="index,follow">
        <meta property="og:url"               content="<?php echo $actual_link; ?>" />
        <meta property="og:type"              content="website" />
        <meta property="og:title"             content="Flávio Pavim" />
        <meta property="og:description"       content="Criação de sites, aplicativos, programas Windows, automação e muito mais em softwares!" />
        <meta property="og:image"             content="img/cover.png" />

        <title>Flávio Pavim</title>

        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/color.css" rel="stylesheet" type="text/css"/>
        <link href="css/font.css" rel="stylesheet" type="text/css"/>
        <link href="css/landscape.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/videos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>






        <canvas id="rainCanvas"></canvas>
        <canvas id="snowCanvas"></canvas>
        <canvas id="skyCanvas"></canvas>
        
        <img id="cloud-1" src="img/cloud-1.png">
        <img id="cloud-2" src="img/cloud-2.png">
        <img id="cloud-3" src="img/cloud-3.png">
        <img id="cloud-4" src="img/cloud-4.png">
        <img id="cloud-5" src="img/cloud-5.png">

        <!--        <div id="hill-1"></div>
                <div id="hill-2"></div>-->

        <div id="sun">
            <img src="img/sun.png">
        </div>
        <div id="moon">
            <img src="img/moon.png">
        </div>

<!--        <script src="js/jquery.js" type="text/javascript"></script>
        -->


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
                            <p>Criação de sites responsivos e intuitivos utilizando as mais recentes tecnologias web</p>
                        </li>
                        <li>
                            <h3>APLICATIVOS</h3>
                            <p>Desenvolvimento de aplicativos móveis nativos e multiplataforma para Android e iOS</p>
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

                        Entre em contato, faça seu orçamento sem compromisso, ou deixe sua opinião, sugestão.<br>
                        Retornarei o mais breve possível!

                        <ul class="contact-list">
                            <li><a href="mailto:contato@flaviopavim.com.br" target="_blank" class="default">contato@flaviopavim.com.br</a></li>
                        </ul>
                        <ul class="contact-list">
                            <li><a href="https://wa.me/5518996626124" target="_blank" class="whatsapp">+55 (18) 99662-6124 WhatsApp</a></li>
                        </ul>
                        <ul class="contact-list">
                            <li><a href="#" class="default">Celular: (67) 9 9312-9223</a></li>
                        </ul>
                        <ul class="contact-list">
                            <li><a href="https://github.com/flaviopavim" target="_blank" class="default">GitHub</a></li>
                            <li><a href="https://linkedin.com/in/kicko" target="_blank" class="linkedin">LinkedIn</a></li>
                            <li><a href="https://facebook.com/rockandhack" target="_blank" class="linkedin">Facebook</a></li>
                            <li><a href="https://www.youtube.com/@FlavioPavim" target="_blank" class="linkedin">YouTube</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/adjust.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        
        
        
        <script>
            function map(x, in_min, in_max, out_min, out_max) {
                return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
            }

            var hour = <?php echo date('H'); ?>;
            
            

            function getLayout(hour) {
                
                hour=21;
                
                var width = $(window).width();

                if ((hour >= 0 && hour < 6) || (hour >= 18 && hour <= 23)) {
                    //noite
//                    $('body').css({backgroundColor:'#010101'});

                    if (hour >= 0 && hour <= 2) {
                        //madrugada
                        $('body').stop().animate({backgroundColor: '#0b0b0b'});
                    } else if (hour >= 3 && hour <= 5) {
                        //amanhecendo
                        $('body').stop().animate({backgroundColor: '#222'});
                    } else if (hour >= 18 && hour <= 20) {
                        //escurecendo
                        $('body').stop().animate({backgroundColor: '#339'});
                    } else if (hour >= 21 && hour <= 23) {
                        //noite
                        $('body').stop().animate({backgroundColor: '#0b0b22'});
                    }


                } else if (hour >= 6 || hour < 18) {
                    //dia
//                    $('body').css({backgroundColor:'#000033'});

                    if (hour >= 6 && hour <= 8) {
                        //manhãzinha
                        $('body').stop().animate({backgroundColor: '#999'});
                    } else if (hour >= 9 && hour <= 11) {
                        //manhã
//                        $('body').css({backgroundColor:'#ccc'});
                        $('body').stop().animate({backgroundColor: '#f3f3f3'});
                    } else if (hour == 12) {
                        //meio do dia
                        $('body').stop().animate({backgroundColor: '#f8ccaa'});
                    } else if (hour >= 13 && hour <= 15) {
                        //tarde
                        $('body').stop().animate({backgroundColor: '#f6dccc'});
                    } else if (hour >= 16 && hour < 18) {
                        //tardezinha
                        $('body').stop().animate({backgroundColor: '#3399dd'});
                    }
                }


                $('#sun').stop().animate({left: map(hour, 6, 18, 0, width - 40)});
                if (hour >= 18 && hour <= 23) {
                    $('#moon').stop().animate({left: map(hour, 18, 23, 15, (width / 2) - 80)});
                } else {
                    $('#moon').stop().animate({left: map(hour, 0, 6, (width / 2) + 80, width - 40)});
                }
            }

            $(function () {

                window.setInterval(function () {
                    getLayout(hour);
                }, 500);
                window.setInterval(function () {

                    $.ajax({
                        method: "POST",
                        url: "ajax/index.php",
//                        data: {name: "John", location: "Boston"}
                    }).done(function (msg) {
                        hour=Number(msg);
                    });

                }, 15000);

            });













            //chuva
            const canvas = document.getElementById('rainCanvas');
            const ctx = canvas.getContext('2d');

            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            const drops = [];

            function createRaindrop() {
                return {
                    x: Math.random() * canvas.width,
                    y: 0,
                    length: Math.random() * 20 + 10,
                    speed: Math.random() * 5 + 2,
                };
            }

            function drawRaindrop(drop) {
                ctx.beginPath();
                ctx.moveTo(drop.x, drop.y);
                ctx.lineTo(drop.x, drop.y + drop.length);
                ctx.strokeStyle = 'white';
                ctx.lineWidth = 2;
                ctx.stroke();
            }

            function updateRaindrops() {
                for (let i = 0; i < drops.length; i++) {
                    const drop = drops[i];
                    drop.y += drop.speed;

                    if (drop.y > canvas.height) {
                        drops[i] = createRaindrop();
                    }
                }
            }

            function drawRain() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                for (const drop of drops) {
                    drawRaindrop(drop);
                }

                updateRaindrops();

                requestAnimationFrame(drawRain);
            }

            for (let i = 0; i < 100; i++) {
                drops.push(createRaindrop());
            }

            drawRain();


//neve
//const canvas = document.getElementById('snowCanvas');
//    const ctx = canvas.getContext('2d');
//
//    canvas.width = window.innerWidth;
//    canvas.height = window.innerHeight;
//
//    const snowflakes = [];
//
//    function createSnowflake() {
//      return {
//        x: Math.random() * canvas.width,
//        y: 0,
//        radius: Math.random() * 4 + 1,
//        speed: Math.random() * 2 + 1,
//        angle: Math.random() * Math.PI * 2,
//      };
//    }
//
//    function drawSnowflake(snowflake) {
//      ctx.beginPath();
//      ctx.arc(snowflake.x, snowflake.y, snowflake.radius, 0, Math.PI * 2);
//      ctx.fillStyle = 'white';
//      ctx.fill();
//    }
//
//    function updateSnowflakes() {
//      for (let i = 0; i < snowflakes.length; i++) {
//        const snowflake = snowflakes[i];
//        snowflake.y += snowflake.speed;
//        snowflake.x += 0.5 * Math.sin(snowflake.angle);
//
//        if (snowflake.y > canvas.height) {
//          snowflakes[i] = createSnowflake();
//        }
//      }
//    }
//
//    function draw() {
//      ctx.clearRect(0, 0, canvas.width, canvas.height);
//
//      for (const snowflake of snowflakes) {
//        drawSnowflake(snowflake);
//      }
//
//      updateSnowflakes();
//
//      requestAnimationFrame(draw);
//    }
//
//    for (let i = 0; i < 100; i++) {
//      snowflakes.push(createSnowflake());
//    }
//
//    draw();



//neve 2
//            const canvas = document.getElementById('snowCanvas');
//            const ctx = canvas.getContext('2d');
//
//            canvas.width = window.innerWidth;
//            canvas.height = window.innerHeight;
//
//            const snowflakes = [];
//
//            function createSnowflake() {
//                return {
//                    x: Math.random() * canvas.width,
//                    y: 0,
//                    radius: Math.random() * 4 + 1,
//                    speed: Math.random() * 2 + 1,
//                    angle: Math.random() * Math.PI * 2,
//                };
//            }
//
//            function drawSnowflake(snowflake) {
//                ctx.beginPath();
//                ctx.arc(snowflake.x, snowflake.y, snowflake.radius, 0, Math.PI * 2);
//                ctx.fillStyle = 'white';
//                ctx.fill();
//            }
//
//            function updateSnowflakes() {
//                for (let i = 0; i < snowflakes.length; i++) {
//                    const snowflake = snowflakes[i];
//                    snowflake.y += snowflake.speed;
//                    snowflake.x += 0.5 * Math.sin(snowflake.angle);
//
//                    if (snowflake.y > canvas.height) {
//                        snowflakes[i] = createSnowflake();
//                    }
//                }
//            }
//
//            function draw() {
//                ctx.clearRect(0, 0, canvas.width, canvas.height);
//
//                for (const snowflake of snowflakes) {
//                    drawSnowflake(snowflake);
//                }
//
//                updateSnowflakes();
//
//                requestAnimationFrame(draw);
//            }
//
//            for (let i = 0; i < 100; i++) {
//                snowflakes.push(createSnowflake());
//            }
//
//            draw();




//var canvasSky = document.getElementById('skyCanvas');
//        var context = canvasSky.getContext('2d');
//
//        // Define um array de nuvens
//        var clouds = [
//            { x: 10, y: 50, size: 2, speed: 1 },
//            { x: 20, y: 80, size: 3, speed: 0.5 },
//            { x: 30, y: 40, size: 4, speed: 1.2 },
//            { x: 15, y: 10, size: 2, speed: 1.3 },
//            { x: 26, y: 20, size: 3, speed: 0.4 },
//            { x: 34, y: 30, size: 4, speed: 1.6 },
//            
//            
//            { x: 15, y: 50, size: 2, speed: 1.2 },
//            { x: 25, y: 80, size: 3, speed: 0.6 },
//            { x: 35, y: 40, size: 4, speed: 1.1 },
//            { x: 30, y: 10, size: 2, speed: 0.9 },
//            { x: 36, y: 20, size: 3, speed: 0.5 },
//            { x: 40, y: 30, size: 4, speed: 1.7 },
//        ];
//
//        function drawCloud(x, y, size) {
//            context.fillStyle = 'white';
//            context.beginPath();
//            context.arc(x, y, size, 0, Math.PI * 2);
//            context.arc(x + size * 0.5, y - size * 0.35, size * 0.75, 0, Math.PI * 2);
//            context.arc(x + size, y, size, 0, Math.PI * 2);
//            context.closePath();
//            context.fill();
//        }
//
//        function clearCanvas() {
//            context.clearRect(0, 0, canvasSky.width, canvasSky.height);
//        }
//
//        function animate() {
//            clearCanvas();
//
//            clouds.forEach(function(cloud) {
//                cloud.x += cloud.speed;
//                if (cloud.x > canvasSky.width + cloud.size * 2) cloud.x = -cloud.size * 2;
//                drawCloud(cloud.x, cloud.y, cloud.size);
//            });
//
//            requestAnimationFrame(animate);
//        }
//
//        animate();

 // Obtenha as referências para as imagens das nuvens
        var cloud1 = document.getElementById('cloud-1');
        var cloud2 = document.getElementById('cloud-2');
        var cloud3 = document.getElementById('cloud-3');
        var cloud4 = document.getElementById('cloud-4');
        var cloud5 = document.getElementById('cloud-5');

        // Defina as posições iniciais das nuvens
        var cloud1Position = 0;
        var cloud2Position = 100;
        var cloud3Position = 200;
        var cloud4Position = 300;
        var cloud5Position = 400;

        // Função para animar as nuvens
        function animateClouds() {
            // Atualize as posições das nuvens
            cloud1Position += 1;
            cloud2Position += 0.5;
            cloud3Position += 1.2;
            cloud4Position += 0.8;
            cloud5Position += 1.1;

            // Define as novas posições das nuvens
            cloud1.style.left = cloud1Position + 'px';
            cloud2.style.left = cloud2Position + 'px';
            cloud3.style.left = cloud3Position + 'px';
            cloud4.style.left = cloud4Position + 'px';
            cloud5.style.left = cloud5Position + 'px';

            // Se uma nuvem sair do lado direito, resete sua posição
            var canvasWidth = window.innerWidth;
            if (cloud1Position > canvasWidth) {
                cloud1Position = -cloud1.width;
            }
            if (cloud2Position > canvasWidth) {
                cloud2Position = -cloud2.width;
            }
            if (cloud3Position > canvasWidth) {
                cloud3Position = -cloud3.width;
            }
            if (cloud4Position > canvasWidth) {
                cloud4Position = -cloud4.width;
            }
            if (cloud5Position > canvasWidth) {
                cloud5Position = -cloud5.width;
            }

            requestAnimationFrame(animateClouds);
        }

        animateClouds(); // Inicie a animação das nuvens


            window.setTimeout(function () {
                $('canvas').animate({opacity: 1});
            }, 8000);
            
        </script>
    </body>
</html>