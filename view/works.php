<?php
//this file is included by ajax
session_name('session_base'); //automático
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

        if ($array['country'] == 'Brazil') {
            $_SESSION['lng'] = 'pt-br';
        }
    } catch (e) {
        
    }
}

if (empty($_SESSION['lng'])) {
    $_SESSION['lng'] = 'eng';
}
?>

<?php if ($_SESSION['lng'] == 'pt-br') { ?>
    <!--<section id="works">-->
    <div class="my-container page">
        <!--<h2>Trabalhos feitos</h2>-->
        <!--    <div class="row">
                <div class="col-md-5">
                    <h2>Chat WhiteHats 1.0 - Beta</h2>
                    
                    <p>
                        Um dos mais importantes trabalhos particulares no projeto WhiteHats.
                    </p>
                    <p>
                        Nosso chat é criptografado ponta a ponta, os usuários combinam palavras chaves entre si, e conversam com segurança.
                    </p>
                    <p>
                        O projeto está em versão Beta ainda não oficial. Em breve teremos o lançamento oficial.
                    </p>
                    
                    
                </div>
                <div class="col-md-7">
                    <img class="img-responsive" src="img/work/chat-site.png">
                </div>
                <div class="col-md-12">
                    <p>
                        O aplicativo está sendo finalizado pra lançar junto ou próximo ao site.
                    </p>
                    
                    <p>
                        Site: <a href="https://whitehats.com.br/chat" target="_blank">https://whitehats.com.br/chat</a>
                    </p>
                </div>
            </div>
            <hr>-->

        <div class="row">
            <div class="col-md-12">
                <h2>Aplicativo VMG Guindastes</h2>
                <br>
                Aplicativo criado em Flutter (Android e iOs) pra gestão das atividades da VMG Guindastes
            </div>
            <div class="br-30"></div>

            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-1.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-2.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-3.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-4.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-5.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-6.jpg">
                <div class="br-30"></div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>Flávia Mattioli</h2>
                <br>
                Site criado com carinho para a psicóloga Flávia Matiolli.
                <br>
                <br>
                Website: <a href="https://flaviamattioli.com.br/" target="_blank">https://flaviamattioli.com.br/</a>
                <br>
                <br>
                O site possui cores suaves e um design responsivo com efeitos.
            </div>

            <div class="col-md-6">
                <img class="img-responsive" src="img/work/flaviamattioli.png">
            </div>
        </div>

        <hr>


        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive" src="img/work/whitehats.jfif">
            </div>
            <div class="col-md-9">
                <h2>WhiteHats</h2>
                <br>
                <p>Comunidade de segurança cibernética, com objetivo de melhorar a segurança na vida das pessoas.</p>
                <br>
                <p>Site: <a href="https://whitehats.com.br/" target="_blank">https://whitehats.com.br/</a></p>
                <br>
                <p>Somos uma equipe com desenvolvedores, especialistas em segurança e designers prontos para desenvolver seu site com qualidade, um excelente design e as mais atualizadas tecnologias de segurança.</p>
                <br>
                <p>A equipe conta com 4 membros, sendo Flávio Pavim como desenvolvedor e co-fundador do projeto;</p>
                <br>
                <p>Léo 'Hasan' como co-fundador, frontend e especialista em segurança e ataques;</p>
                <br>
                <p>'Cego' como desenvolvedor e especialista em segurança e ataques;</p>
                <br>
                <p>Leni como desenvolvedor e especialista em segurança e ataques;</p>


            </div>
        </div>
        <!--                    <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    Whitehats Security (em breve) são sistemas de segurança pra aplicativos Android e programas Windows
                                    <br>
                                    <br>
                                    Você pode capturar prints do seu computador com o aplicativo, bloquear computador, programar desligamento ou reinicialização, entre muitas outras novidades que estão por vir
                                    <br>
                                    <br>
                                    No aplicativo você poderá rastrear seu celular facilmente, e/ou obter todas as ferramentas de controle e segurança disponíveis
                                    <br>
                                    <br>
                                    Instale facilmente no Windows e tome controle de algumas funcionalidades do seu computador
                                    <br>
                                    <br>
                                    Estamos ampliando os sistemas à cada dia. Em breve teremos muitas novidades
                                    <br>
                                    <br>
                                    Site: <a href="https://whitehats.com.br/security" target="_blank">https://whitehats.com.br/security</a>
        
                                </div>
                                <div class="br-30"></div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-1.jpeg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-2.jpeg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-3.jpeg">
                                </div>
                                <div class="br-30"></div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-4.jpeg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-5.jpeg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-6.jpeg">
                                </div>
        
                            </div>-->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h2>WhiteHats Bluetooth control</h2>
                <br>
                <p>Aplicativo pra controle de Arduinos e dispositivos compatíveis</p>
                <br>
                <p>Na PlayStore: <a href="https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth" target="_blank">https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth</a></p>
                <br>
                <p>Código gratuito do Arduino no GitHub: <a href="https://github.com/flaviopavim/bluetooth-control-arduino-pro-mini" target="_blank">https://github.com/flaviopavim/bluetooth-control-arduino-pro-mini</a></p>
                <br>
                <p>Bônus:</p>
                <br>
                <p>Código do 'Sonar' (carrinho de controle feito no vídeo): <a href="https://github.com/flaviopavim/arduino-carrinho-radio-controle" target="_blank">https://github.com/flaviopavim/arduino-carrinho-radio-controle</a></p>
            </div>
            <div class="col-md-6">

                <iframe class="video" src="https://www.youtube.com/embed/BwsR14p9lc8" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="img/work/whitehats-bluetooth-control-1.webp">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="img/work/whitehats-bluetooth-control-2.webp">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="img/work/whitehats-bluetooth-control-3.webp">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-md-5">
                <img class="img-responsive" src="img/work/alexiasystem.jfif">
            </div>

            <div class="col-md-7">
                <h2>Alexia System</h2>
                <br>
                <p>Site: <a href="https://alexiasystem.com.br/" target="_blank">https://alexiasystem.com.br/</a></p>
                <br>
                <p>De nome fictício, vindo do game Resident Evil Code Veronica (a vilã Alexia Ashford), é um site onde mantenho até hoje pra mostrar trabalhos.</p>
                <br>
                <p>Desenvolvo alguns aplicativos e sites com ajuda de designers e programadores</p>
                <!--https://www.youtube.com/shorts/Td9YQ7W8pRU-->
                <div class="br-30"></div>
                <iframe class="video" src="https://www.youtube.com/embed/Td9YQ7W8pRU" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>WhiteHats Crypt</h2>
                <br>
                Aplicativo para criptografar e descriptografar mensagens. Guarde com segurança o que é seu. Adicione uma palavra-chave de segurança e salve seus textos em locais seguros
                <br>
                <br>
                Na PlayStore: <a href="https://play.google.com/store/apps/details?id=br.com.whitehats.crypt" target="_blank">https://play.google.com/store/apps/details?id=br.com.whitehats.crypt</a>
                <br>
                <br>
                Em breve mais criptografias no aplicativos ;)
                <br>
                <br>

            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="img/work/whitehats-crypt-1.webp">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="img/work/whitehats-crypt-2.webp">
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-8">
                <h2>Naoradoclick</h2>
                <br>
                Site feito para o trabalho do fotógrafo Carlos Melo. O site traz àlbuns de diversos temas.
                <br>
                <br>
                Site: <a href="https://naoradoclick.com.br/" target="_blank">https://naoradoclick.com.br/</a>
                <br>
                <br>
                O site possui um design responsivo que se ajusta em diversos tipos de telas.
                <br>
                <br>
                Painel administrativo protegido com login e senha para que o site seja alimentado com álbuns e fotos
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="img/work/naoradoclick-adm-1.png">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="img/work/naoradoclick-adm-2.png">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/naoradoclick.jfif">
            </div>
        </div>

        <!--<a onclick=next()"">Next</a>-->
    </div>
    <!--</section>-->


    <?php // } else if ($_SESSION['lng'] == 'eng') { ?>
<?php } else { ?>
    <!--<section id="works">-->
    <div class="my-container page">
        <!--<h2>Completed Projects</h2>-->
        <!--    <div class="row">
                <div class="col-md-5">
                    <h2>Chat WhiteHats 1.0 - Beta</h2>
                    
                    <p>
                        One of the most significant private projects in the WhiteHats initiative.
                    </p>
                    <p>
                        Our chat is end-to-end encrypted, users match keywords with each other, and converse securely.
                    </p>
                    <p>
                        The project is in Beta and not officially released yet. The official launch will happen soon.
                    </p>
                    
                    
                </div>
                <div class="col-md-7">
                    <img class="img-responsive" src="img/work/chat-site.png">
                </div>
                <div class="col-md-12">
                    <p>
                        The application is being finalized for release alongside or shortly after the website.
                    </p>
                    
                    <p>
                        Website: <a href="https://whitehats.com.br/chat" target="_blank">https://whitehats.com.br/chat</a>
                    </p>
                </div>
            </div>
            <hr>-->
        <div class="row">
            <div class="col-md-12">
                <h2>VMG Guindastes APP</h2>
                <br>
                App created in Flutter (Android + iOs) to administrate activities form VMG Guindastes
            </div>
            <div class="br-30"></div>

            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-1.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-2.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-3.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-4.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-5.jpg">
                <div class="br-30"></div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/work/vmg-6.jpg">
                <div class="br-30"></div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>Flávia Mattioli</h2>
                <br>
                Website created for Flávia Mattioli psychologist's work.
                <br>
                <br>
                Website: <a href="https://flaviamattioli.com.br/" target="_blank">https://flaviamattioli.com.br/</a>
                <br>
                <br>
                The site have flat design colors and a responsive design that adapts to various screen types.
            </div>

            <div class="col-md-6">
                <img class="img-responsive" src="img/work/flaviamattioli.png">
            </div>
        </div>
        <hr>


        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive" src="img/work/whitehats.jfif">
            </div>
            <div class="col-md-9">
                <h2>WhiteHats</h2>
                <p>Cybersecurity community with the goal of improving security in people's lives.</p>
                <p>Website: <a href="https://whitehats.com.br/" target="_blank">https://whitehats.com.br/</a></p>
                <p>We are a team of developers, security experts, and designers ready to develop your website with quality, excellent design, and the latest security technologies.</p>
                <p>The team consists of 4 members, with Flávio Pavim as the developer and co-founder of the project;</p>
                <p>Léo 'Hasan' as co-founder, frontend developer, and security and attack specialist;</p>
                <p>'Cego' as a developer and security and attack specialist;</p>
                <p>Leni as a developer and security and attack specialist;</p>


            </div>
        </div>
        <!--                    <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    Whitehats Security (coming soon) are security systems for Android applications and Windows programs
                                    <br>
                                    <br>
                                    You can capture screenshots of your computer with the application, lock your computer, schedule shutdown or restart, among many other features that are coming soon
                                    <br>
                                    <br>
                                    In the app, you'll be able to easily track your phone or access all the available control and security tools
                                    <br>
                                    <br>
                                    Easily install on Windows and take control of some functionalities of your computer
                                    <br>
                                    <br>
                                    We are expanding the systems every day. Many exciting features are coming soon
                                    <br>
                                    <br>
                                    Website: <a href="https://whitehats.com.br/security" target="_blank">https://whitehats.com.br/security</a>
        
                                </div>
                                <div class="br-30"></div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-1.jpeg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-2.jpeg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-3.jpeg">
                                </div>
                                <div class="br-30"></div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-4.jpeg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-5.jpeg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="img/work/whitehats-security-app-6.jpeg">
                                </div>
        
                            </div>-->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h2>WhiteHats Bluetooth Control </h2>
                <p>App for controlling Arduinos and compatible devices.</p>
                <p>On PlayStore: <a href="https://play.google.com/store

                                    /apps/details?id=br.com.whitehats.bluetooth" target="_blank">https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth</a>
                <p>Free Arduino code on GitHub: <a href="https://github.com/flaviopavim/bluetooth-control-arduino-pro-mini" target="_blank">https://github.com/flaviopavim/bluetooth-control-arduino-pro-mini</a></p>
                <p>Bonus:</p>
                <p>'Sonar' code (remote-controlled car featured in the video): <a href="https://github.com/flaviopavim/arduino-carrinho-radio-controle" target="_blank">https://github.com/flaviopavim/arduino-carrinho-radio-controle</a></p>
            </div>
            <div class="col-md-6">

                <iframe class="video" src="https://www.youtube.com/embed/BwsR14p9lc8" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="img/work/whitehats-bluetooth-control-1.webp">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="img/work/whitehats-bluetooth-control-2.webp">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="img/work/whitehats-bluetooth-control-3.webp">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-md-5">
                <img class="img-responsive" src="img/work/alexiasystem.jfif">
            </div>

            <div class="col-md-7">
                <h2>Alexia System</h2>
                <p>Website: <a href="https://alexiasystem.com.br/" target="_blank">https://alexiasystem.com.br/</a></p>
                <p>Fictitious name, inspired by the Resident Evil Code Veronica game (the villain Alexia Ashford). It is a site where I showcase my work.</p>
                <p>I develop some applications and websites with the help of designers and programmers.</p>
                <!--https://www.youtube.com/shorts/Td9YQ7W8pRU-->
                <div class="br-30"></div>
                <iframe class="video" src="https://www.youtube.com/embed/Td9YQ7W8pRU" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>WhiteHats Crypt</h2>
                <br>
                App for encrypting and decrypting messages. Safely store what's yours. Add a security keyword and save your texts in secure locations.
                <br>
                <br>
                On PlayStore: <a href="https://play.google.com/store/apps/details?id=br.com.whitehats.crypt" target="_blank">https://play.google.com/store/apps/details?id=br.com.whitehats.crypt</a>
                <br>
                <br>
                More encryptions coming soon to the app ;)
                <br>
                <br>

            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="img/work/whitehats-crypt-1.webp">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="img/work/whitehats-crypt-2.webp">
                    </div>
                </div>
            </div>
        </div>



        <hr>
        <div class="row">
            <!--                        <div class="col-md-6">
                                        <img class="img-responsive" src="img/work/whitehats.jfif">
                                    </div>-->
            <div class="col-md-8">
                <h2>Naoradoclick</h2>
                <br>
                <!--<br>-->
                Website created for photographer Carlos Melo's work. The site showcases albums on various themes.
                <br>
                <br>
                Website: <a href="https://naoradoclick.com.br/" target="_blank">https://naoradoclick.com.br/</a>
                <br>
                <br>
                The site has a responsive design that adapts to various screen types.
                <br>
                <br>
                Administrative panel protected with login and password so that the site can be updated with albums and photos.
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="img/work/naoradoclick-adm-1.png">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="img/work/naoradoclick-adm-2.png">
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <img class="img-responsive" src="img/work/naoradoclick.jfif">
            </div>
        </div>

    </div>
    <!--</section>-->
<?php } ?>